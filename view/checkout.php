<?php
include_once('../controller/sessionCheck.php');

$foodname=$_POST['item-name'];
$quantity = $_POST['burger-quantity'];


$_SESSION['foodname']=$foodname;
$_SESSION['quantity']=$quantity;

// Calculate the prices for each item
$burgerPrice = $quantity * 8;


// Calculate the total amount
$totalamount = $burgerPrice;
$_SESSION['totalamount']=$totalamount;

// if ($totalAmount > 20.00) {
//     $discountPercentage = 0.20; // 20% discount
//     $discountAmount = $totalAmount * $discountPercentage;
//     $maxDiscount = 10.00;
//     $discountAmount = min($discountAmount, $maxDiscount);
//     $totalAmount -= $discountAmount;
// } else {
//     $discountAmount = 0; // No discount applied
// }



?> 



<html>
    <head>
        <title>payment</title>
    </head>
    <body>
        <form action="../controller/paymentCheck.php" method="post" >
            <fieldset>
                <h2>Payment</h2>
                <b>Food: <?php echo $foodname;?>&nbsp;&nbsp; <?php echo $quantity; ?> x 8$ <br>
                <br>Total amount: <?php echo $totalamount; ?>$ <br>
                <br>Payment Type: 
                <select name="paymenttype">
                    <option value="cash">Cash</option>
                    <option value="card">Card</option>
                </select><br><br>

                Adress: <input type="text" name="adress" value="">
                <br><br>Pay Amount: <input type="number" name="amountpaid" value="" ><br></b><br>
                
                <input type="submit" name="submit" value="Pay">
            </fieldset> 
        </form>
    </body>
</html>
