<?php
    //session_start();
    //require_once('../model/userModel.php');
    require_once('../controller/SessionCheck.php');
    require_once('../model/userModel.php');

    // if (!isset($_SESSION['UserName'])) {
    //     header('Location: login.php');
    //     exit();
    // }

    
    $username = $_SESSION['username'];


    $user = getUser($username);

    if (!$user) {
        echo "User not found.username: $username";
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
<body>
    <fieldset>
        <legend>User Profile</legend>
        <form action="#" method="post">
        Profile Information
        <br>
        <hr>

            First Name: <br>
            <input type="text"  name="firstname" value="<?php echo $user['firstName']; ?>" readonly><br><br>

            Last Name: <br>
            <input type="text"  name="lastname" value="<?php echo $user['lastName']; ?>" readonly><br><br>

            Email: <br>
            <input type="text"  name="email" value="<?php echo $user['email']; ?>" readonly><br><br>

            User Name: <br>
            <input type="text" name="username" value="<?php echo $user['userName']; ?>" readonly><br><br>

            Phone No: <br>
            <input type="text"  name="phone" value="<?php echo $user['phone']; ?>" readonly><br><br>

        <hr>

        <a href="VarifiedUserIndex.php">Back</a> |
        <a href="../controller/LogoutCheck.php">Logout</a>
    </fieldset>
</body>
</html>