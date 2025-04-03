<?php
// Display all errors (for development only; disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('UTC');
// Include necessary files and libraries
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';
require 'dbconnection.php'; // Ensure dbconnection.php exists and includes necessary connection setup

// Function to generate activation code
function generateActivationCode() {
    // Use random_bytes if available, else fallback to openssl_random_pseudo_bytes
    $bytes = function_exists('random_bytes') ? random_bytes(16) : openssl_random_pseudo_bytes(16);
    return bin2hex($bytes); // Generates a 32-character hexadecimal activation code
}

// Function to send activation email using PHPMailer
function sendActivationEmail($email, $activationCode) {
    $mail = new PHPMailer(true);
	$to =  'magima.scope@gmail.com'; 
	$hosturl ="104.131.245.70/Artizon_new";
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'magima.scope@gmail.com'; 
        $mail->Password = 'rcvj oqaj jrha dfji'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        //$mail->setFrom('magima.scope@gmail.com', 'Artizon Registration');
		$mail->setFrom($to, 'Welcome to Artizonhub!');
        $mail->addAddress($email); 

        // Content
        $mail->isHTML(true);
        //$mail->Subject = 'Activate Your Account';
        //$mail->Body    = 'Click <a href="http://104.131.245.70/Artizon_new/login_register_activate.php?code=' . $activationCode . '">here</a> to activate your account.';
		$mail->Subject = 'Activate Your Account';
		$mail->Body    = "<img src='http://$hosturl/img/artizon_htmlTemplate.png' alt='Artizonhub Banner'> <br/><br/>Hello, Welcome to the Artizonhub your one stop portal for your career in Music, Performing arts, Handicraft exhibitions and online shop sales!! <br/><br/>You have joined an elite network of artists!!! Find your connections and showcase your art here!!<br/><br/> Please click on the registration <a href='http://$hosturl/login_register_activate.php?code=$activationCode'>link</a> to activate your account and then login in to the portal!";
		
		
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize input data
    $fname = htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $country = htmlspecialchars($_POST['country']);
    $pass = htmlspecialchars($_POST['pass']);
    $repass = htmlspecialchars($_POST['repass']);
    $mention = htmlspecialchars($_POST['mention']);
    $utype = htmlspecialchars($_POST['utype']);
    $mem_type = "Free";
    $u_createtime = date("Y-m-d H:i:s");
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        exit("Invalid email format");
    }
    
    // Validate passwords match
    if ($pass !== $repass) {
        exit("Passwords do not match");
    }
    
    // Generate activation code
    $activationCode = generateActivationCode();
    
    // Prepare SQL statement to insert data
    $stmt = $conn->prepare("INSERT INTO registration (f_name, l_name, email, country, mem_type, u_createtime,  pasword, mention, u_type, u_activation_code) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $fname, $lname, $email, $country, $mem_type, $u_createtime, $pass, $mention, $utype, $activationCode);
    
    // Execute SQL statement
    if ($stmt->execute()) {
        // Registration successful, send activation email
        if (sendActivationEmail($email, $activationCode)) {
            // Redirect to login page with success flag
            header("Location: login.php?registration=success");
            exit();
        } else {
            echo "Registration successful, but the activation email could not be sent.";
        }
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>
