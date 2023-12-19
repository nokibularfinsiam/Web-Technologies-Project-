<?php 
   include_once('../controller/SessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Index</title>
</head>
<body>
    <p  style="background-color: whitesmoke;">
        <a href="AdminIndex.php"><b style=" font-size: xx-large; margin-right: 70%;"><i>ABC RESTAURENT</i></b></a>
        <a href="../controller/LogoutCheck.php">Logout</a>
    </p>
    <center>
    <a href="booktable_Admin.php">Table Reservation</a>
    <a href="viewfeedback.php" style="margin: 1%;">See Feedback</a>
    <a href="notification.php">Send Notification</a>
    <a href="viewnotification_Admin.php" style="margin: 1%;">View Notification</a>
    <a href="admin_orderhistory.php" >View order</a>
    <a href="admin_promotion.php" style="margin: 1%;">Update Promotion</a>
    <a href="admin_faq.php" >Update FAQ</a>
    <a href="admin_aboutus.php" style="margin: 1%;">Update AboutUs</a>
    <a href="admin_update_delivery.php" >Update Delivery Tracking</a>
    <a href="admin_update_store_location.php" style="margin: 1%;">Update Store Location</a>
    <a href="add_user_admin.php" >Add User/Admin</a>
    <a href="deleteUser.php" style="margin: 1%;">Delete User</a>
    <a href="userProfile.php" >View Profile</a>



</center>
    
</body>
</html>