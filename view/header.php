<html>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            color: #333;
        }
 
        p {
            background-color: #4CAF50;
            padding: 10px;
            margin: 0;
            color: white;
            text-align: center;
        }
 
        a {
            color: #4CAF50;
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
            background-color: #4CAF50;
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
    <p>
        <a href="VarifiedUserIndex.php"><b style=" font-size: xx-large; margin-right: 60%; color: white;"><i>ABC RESTAURANT</i></b></a>
        <a href="viewnotification.php" style="margin: 2%; color: white;">Notification</a>
        <a href="../controller/LogoutCheck.php" style="color: white;">Logout</a>
    </p>
    <!-- <p  style="background-color: whitesmoke;">
            <a href="VarifiedUserIndex.php"><b style=" font-size: xx-large; margin-right: 68%;"><i>ABC RESTAURENT</i></b></a>
            <a href="viewnotification.php" style="margin: 2%;">Notification</a>
            <a href="../controller/LogoutCheck.php">Logout</a>
            <br><br>
    </p> -->
            <center> 
        <!-- <form action="search.php" method="get"></form>
            <input type="text"id="search" name="word" style="width: 40%;"/>
            <input type="submit" value="Search">
        </form> -->
        </center><br>
        <center>
            <a href="track_delivery.php" style="margin: 1%;">Track Order</a>
            <a href="orderhistory.php">Past Orders</a>
            <a href="../view/ReservationSystem.php" style="margin: 1%;">Book Table</a>
            <a href="promotion.php">Promotion</a>
            <a href="aboutus.php"style="margin: 1%;">About Us</a>
            <a href="review.php">Review</a>
            <a href="faq.php"style="margin: 1%;">Faq</a>
            <a href="contactUs.php">Contact Us</a>
            <a href="storeLocator.php"style="margin: 1%;">Store Locator</a>
            <a href="userProfile.php">User Profile</a><br><br>

        </center>
</html>