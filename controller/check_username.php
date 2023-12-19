<?php
$conn = new mysqli('localhost', 'root', '', 'test');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$userName = $_POST['userName']; 

$stmt = $conn->prepare("SELECT userName FROM registration WHERE userName = ?");
$stmt->bind_param("s", $userName);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo '<span style="color: red;">Username is not available</span>';
} else {
    echo '<span style="color: green;">Username is available</span>';
}

$stmt->close();
$conn->close();
?>
