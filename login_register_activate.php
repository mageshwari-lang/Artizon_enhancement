<?php
// Validate activation code from URL
if (isset($_GET['code'])) {
    $activationCode = $_GET['code'];
    
   // Include the database connection file
    include 'dbconnection.php';
    
    // Prepare SQL statement to update activation status
    $stmt = $conn->prepare("UPDATE registration SET status = 1 WHERE u_activation_code = ?");
    $stmt->bind_param("s", $activationCode);
    
    // Execute SQL statement
    if ($stmt->execute()) {
        echo "Account activated successfully!";
		 header("Location: login.php");
    } else {
        echo "Error: " . $stmt->error;
    }
    
    // Close statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Activation code not found.";
}
?>
