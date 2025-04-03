<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
/******
$servername = "localhost"; // Change if necessary
$username = "root";        // Change if necessary
$password = "";            // Change if necessary
$dbname = "artizontalenhub_db";  // Change if necessary

/******/
$servername = "localhost"; // Change if necessary http://104.131.245.70    or  173.194.250.113
//$servername = "http://104.131.245.70"; // Change if necessary    or  173.194.250.113
$username = "phpmyadmin";        // Change if necessary
$password = "phpmyadmin";            // Change if necessary
$dbname = "artizontalenhub_db";  // Change if necessary
/****/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
