<?php
require_once('DB.php');
//include_once('../controller/sessionCheck.php');
function getOrderhistory($username){
        $con = getConnection();
        $sql = "select * from orderhistory where username='$username'";
        $result = mysqli_query($con, $sql);
        $orders = [];
        
        while($orderhistory = mysqli_fetch_assoc($result)){
            array_push($orders, $orderhistory);
        }
        
        return $orders;
    }

    function getOrderhistory1(){
        $con = getConnection();
        $sql = "select * from orderhistory";
        $result = mysqli_query($con, $sql);
        $orders = [];
        
        while($orderhistory = mysqli_fetch_assoc($result)){
            array_push($orders, $orderhistory);
        }
        
        return $orders;
    }

    function addOrderhistory($username,$foodname,$quantity,$totalamount,$paymenttype,$amountpaid,$adress)
    {
        $con = getConnection();
        $sql = "INSERT INTO orderhistory (username, food_name, food_quantity, total_amount, payment_type, amount_paid, adress) VALUES ('$username','$foodname','$quantity','$totalamount','$paymenttype','$amountpaid','$adress')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function searchOrderhistory($username){
        $con = getConnection();
        $sql = "select * from orderhistory where username='$username'";
        $result = mysqli_query($con, $sql);
        $orders = [];
        
        while($orderhistory = mysqli_fetch_assoc($result)){
            array_push($orders, $orderhistory);
        }
        
        return $orders;
    }
?>