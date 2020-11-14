<?php
include 'connect.php';

$email = $_SESSION['email'];

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
}

$conn->close();
header('refresh:0.0000001;url=event-page.php');
?>