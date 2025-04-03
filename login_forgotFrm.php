<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['foremail'];

    if (empty($email)) {
        header("Location: login_form.php?error=forgot_empty");
        exit();
    } else {
        // Generate a unique token for password reset (for simplicity, let's assume a random string)
        $token = bin2hex(random_bytes(32));

        // Update database with token (assuming you have a 'reset_token' field in 'registration' table)
        $servername = "localhost";
        $username = "username";
        $password = "password";
        $dbname = "database";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "UPDATE registration SET reset_token = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        // Send email with reset link (adjust the email content and link accordingly)
        $reset_link = "http://yourdomain.com/login_resetPassword.php?token=" . $token;
        $to = $email;
        $subject = "Password Reset";
        $message = "Click the link below to reset your password:\n\n" . $reset_link;
        $headers = "From: your_email@example.com";

        if (mail($to, $subject, $message, $headers)) {
            header("Location: login_form.php?status=reset_sent");
            exit();
        } else {
            header("Location: login_form.php?error=reset_failed");
            exit();
        }
    }
} else {
    header("Location: login_form.php");
    exit();
}
?>
