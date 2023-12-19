<?php
$userName = $_POST['userName'];
$Full_Name = $_POST['Full_Name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];
$number = $_POST['number'];


// Check if the password matches confirm password
if ($password !== $confirmPassword) {
    die('Password and Confirm Password do not match.');
}


$conn = new mysqli('localhost', 'root', '', 'test');
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(userName, Full_Name, gender, email, password, confirmPassword, number) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssi", $userName, $Full_Name, $gender, $email, $password, $confirmPassword, $number);
    $stmt->execute();
    $stmt->close();
    $conn->close();    
    // Add a link/button to go to login page
    echo "The user has been registered successfully. <a href='../view/login.html'>Go to Login</a>";
}
?>



