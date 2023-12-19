<?php

require_once('../model/orderModel.php');
include_once('../controller/sessionCheck.php');
$username=$_SESSION['username'];
$orders=getOrderhistory($username);


?>
<html>
    <head>
        <title>Past Order</title>
        <link rel="stylesheet" type="text/css" href="../css/orderhistory.css">
    </head>
    <body>
        <form action="">
            <fieldset>
            <legend>Past Order</legend>
            <h1>Your past orders</h1>
            <table border="1" width=50%>
                <tr>
                    <th>UserName</th>
                    <th>food name</th>
                    <th>food quantity</th>
                    <th>price</th>
                    <th>payment type</th>
                    <th>amount paid</th>
                    <th>adress</th>
                    <th>date</th>
                </tr>
                <?php for($i=0;$i<count($orders);$i++)
                {?>
                <tr>
                    
                    <td><?=$orders[$i]['username']?></td>
                    <td><?=$orders[$i]['food_name']?></td>
                    <td><?=$orders[$i]['food_quantity']?></td>
                    <td><?=$orders[$i]['total_amount']?></td>
                    <td><?=$orders[$i]['payment_type']?></td>
                    <td><?=$orders[$i]['amount_paid']?></td>
                    <td><?=$orders[$i]['adress']?></td>
                    <td><?=$orders[$i]['date']?></td>

        <?php   }?>
                </tr>
            </table>
            <br><a href="user_dashboard.php">
            <br><button type="button">Back</button><br>
            </fieldset>
        </form>
        
    </body>
</html>