<?php
session_start();


$db_username = 'root';
$db_password = '';
$db_host = 'localhost';
$db_name = 'test';

// Create connection
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have the user's username stored in a variable $username
$userName = isset($_SESSION['userName']) ? $_SESSION['userName'] : '';

// Check if the username is not empty
if (!empty($userName)) {
    echo $userName;
} else {
    echo "Guest";
}
?>
