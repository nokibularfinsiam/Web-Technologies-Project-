<?php 
   include_once('../controller/SessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Index</title>
</head>
<body>

<style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }
 
        p {
            background-color: #311B92;
            padding: 10px;
            margin: 0;
            color: white;
            text-align: center;
        }
 
        a {
            color: #311B92;
            text-decoration: none;
            margin: 0 15px;
            transition: color 0.3s ease-in-out;
        }
 
        a:hover {
            color: #45a049;
        }
 
        center {
            text-align: center;
            margin-top: 20px;
        }
 
        /* Additional styles for a more modern and attractive look */
        a {
            border-bottom: 2px solid transparent;
            position: relative;
            font-size: 18px;
            font-weight: bold;
        }
 
        a:before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #311B92;
            visibility: hidden;
            transform: scaleX(0);
            transition: all 0.3s ease-in-out 0s;
        }
 
        a:hover:before {
            visibility: visible;
            transform: scaleX(1);
        }
 
        center a {
            margin: 0 15px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 15px;
            border-radius: 5px;
        }
 
        /* Add hover effect for the whole link */
        center a:hover {
            background-color: #f8f8f8;
        }
    </style>
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
    <a href="admin_update_delivery.php" >Update Delivery Tracking</a><br><br><br>
    <a href="admin_update_store_location.php" style="margin: 1%;">Update Store Location</a>
    <a href="add_user_admin.php" >Add User/Admin</a>
    <a href="deleteUser.php" style="margin: 1%;">Delete User</a>
    <a href="userProfile.php" >View Profile</a>



</center>
    
</body>
</html>
