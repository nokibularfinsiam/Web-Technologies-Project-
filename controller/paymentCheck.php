<?php
    //session_start();
    require_once('../model/orderModel.php');
    include_once('../controller/sessionCheck.php');

    $totalamount=$_SESSION['totalamount'];
    $amountpaid=$_POST['amountpaid'];
    $adress=$_POST['adress'];
    $username=$_SESSION['username'];
    $foodname=$_SESSION['foodname'];
    $quantity=$_SESSION['quantity'];
    $paymenttype=$_POST['paymenttype'];
    

    if($totalamount==$amountpaid)
    {
        
        $status=addOrderhistory($username,$foodname,$quantity,$totalamount,$paymenttype,$amountpaid,$adress);
        if($status)
        {
            $message="Payment Successful"; 
        }
        
    }
    else{
        $message="There was error while processing. payment unsuccessful";
    }
    
?>
<html>
    <head>
        <title>Payment check</title>
    </head>
    <body>
        <fieldset>
            <h2><?php echo $message;?></h2>
            <br><br><a href="../view/VarifiedUserIndex.php">Go back to order again</a>
        </fieldset>
    </body>
</html>