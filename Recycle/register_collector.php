<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'recyclelink');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Handle police clearance file upload
    $police_clearance = $_FILES['police_clearance']['name'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($police_clearance);
    
    if (move_uploaded_file($_FILES["police_clearance"]["tmp_name"], $target_file)) {
        // Insert collector details into the database
        $sql = "INSERT INTO collectors (full_name, email, phone, address, police_clearance, status) 
                VALUES ('$full_name', '$email', '$phone', '$address', '$target_file', 'Pending')";
        if ($conn->query($sql) === TRUE) {
            echo "Application submitted successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

$conn->close();
?>
