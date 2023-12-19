<?php
   include_once('../controller/sessionCheck.php');

?>
<html>
    <head>
        <title>user dashboard</title>
    </head>
    <body>
        
        <h2>welcome to user dashboard</h2>
        <b>UserName: <?php echo $UserName= $_SESSION['UserName'];?></b>
        <ul>
            <li><a href="order.php">Order</a></li>   
            <li><a href="orderhistory.php">Past order</a></li>
            <li><a href="promotion.php">promotion</a><br></li>
            <li><a href="review.php">review</a><br></li>
            <li><a href="faq.php">faq</a><br></li>
            <li><a href="aboutus.php">about us</a><br></li>

        </ul>
        <a href="../controller/logout.php"> logout </a>

    </body>
</html>

