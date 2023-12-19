<?php
    //include_once('../controller/sessionCheck.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Home</title>
    <link rel="stylesheet" type="text/css" href="../css/HomePage.css">
</head>
<body>
    <div class="form-container">
        <h1>USER HOME PAGE</h1>
        <form action="#" method="post">
            <div class="form-group">
                <input type="button" value="Delivery Tracking" onclick="location.href='track_delivery.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Store Locator" onclick="location.href='storeLocator.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Profile" onclick="location.href='userProfile.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Contact Us" onclick="location.href='contactUs.php';">
            </div>
            <div class="form-group">
                <input type="button" value="Logout" onclick="location.href='../controller/logout.php';">
            </div>
        </form>
    </div>
</body>
</html>
