<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer/Exception.php';
require __DIR__ . '/PHPMailer/PHPMailer.php';
require __DIR__ . '/PHPMailer/SMTP.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include the database connection file
    include 'dbconnection.php';

    // Get the input values
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    // Initialize an array to store errors
    $errors = [];
    
    // Validate name
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
    
    // Validate message
    if (empty($message)) {
        $errors[] = "Message is required.";
    }
    
    // Check if there are any errors
    if (!empty($errors)) {
        // If there are errors, display them
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    } else {
        // If no errors, process the form data

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO contactusFrm (name, email) VALUES (?, ?)");
       //****** $stmt = $conn->prepare("INSERT INTO contactusFrm (name, email, message) VALUES (?, ?, ?)");
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ss", $name, $email);
       //****** $stmt->bind_param("sss", $name, $email, $message);
        
        // Execute the statement
        if ($stmt->execute()) {
            // Send an email to the customer using PHPMailer
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->isSMTP();
                 $mail->Host = 'smtp.gmail.com'; // Specify main and backup SMTP servers
				//****$mail->Host       = 'smtp.your-email-provider.com'; // Set the SMTP server to send through
                $mail->SMTPAuth   = true;
               //**** $mail->Username   = 'your-email@example.com'; // SMTP username
              //****  $mail->Password   = 'your-email-password'; // SMTP password
			  $mail->Username = 'magima.scope@gmail.com';                 // SMTP username
		$mail->Password = 'rcvj oqaj jrha dfji';  
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;

                //Recipients
                $mail->setFrom('magima.scope@gmail.com', 'Artizon Hub');
                $mail->addAddress($email, $name); // Add a recipient

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'Thank you for contacting us';
                $mail->Body    = "Dear $name,<br><br>Thank you for reaching out to us. Here is a copy of your message:<br><br>$message<br><br>We will get back to you shortly.<br><br>Best regards,<br>ArtizonHub Team";

                $mail->send();
                echo "<p style='color: green;'>Confirmation email sent successfully!</p>";

                // Optionally send an email to your team
                $mail->clearAddresses();
             //*******   $mail->addAddress('your-email@example.com'); // Your email
                $mail->addAddress($email); // customer email
                $mail->Subject = 'New Contact Us Form Submission';
                $mail->Body    = "Name: $name<br>Email: $email<br><br>Message:<br>$message";

                $mail->send();

                // Redirect to index.php after successful operation
                header("Location: index.php");
                exit(); // Ensure no further code is executed

            } catch (Exception $e) {
                echo "<p style='color: red;'>There was an error sending the confirmation email. Please try again later. Mailer Error: {$mail->ErrorInfo}</p>";
            }
        } else {
            echo "<p style='color: red;'>There was an error submitting your form. Please try again later.</p>";
        }
        
        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
