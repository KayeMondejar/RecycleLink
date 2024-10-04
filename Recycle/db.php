<?php
$servername = "kayemndjr11.helioho.st"; // HelioHost server name
$username = "kayemndjr11_user"; // Database username
$password = "123456780?"; // Database password
$dbname = "kayemndjr11_RecycleLink"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
