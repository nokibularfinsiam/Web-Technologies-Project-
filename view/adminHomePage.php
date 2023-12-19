<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Home</title>
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
</head>
<body>
    <div class="form-container">
        <h1>ADMIN HOME PAGE</h1>
        <form action="#" method="post">
            <div class="form-group">
                <input type="button" value="Update Delivery Tracking" onclick="location.href='admin_update_delivery.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Update Store Location" onclick="location.href='admin_update_store_location.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Add User/Admin" onclick="location.href='add_user_admin.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Delete User" onclick="location.href='deleteUser.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Profile" onclick="location.href='adminProfile.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Logout" onclick="location.href='../controller/logout.php';">
            </div>
        </form>
    </div>
</body>
</html>
