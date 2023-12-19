<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
    include_once('../model/operationModel.php');
    $orders = getAllOrders();
    include_once('../controller/sessionCheck.php');
?>

<html>
<head>
    <title>Update Delivery Tracking</title>
    <script src="../js/admin_update_deliveryCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/admin_update_delivery.css">
</head>
<body>

    <h1>Orders</h1>
    <table border="1">
        <tr>
            <th>Tracking Key</th>
            <th>Estimated Delivery Time</th>
            <th>Delivery Status</th>
        </tr>
        <?php foreach ($orders as $order): ?>
            <tr>
                <td align="center"><?php echo htmlspecialchars($order['tracking_key']); ?></td>
                <td align="center"><?php echo htmlspecialchars($order['estimated_delivery_at']); ?></td>
                <td align="center"><?php echo htmlspecialchars($order['delivery_status']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <br><hr>

    <h1>Update Delivery Tracking</h1>
    <form action="../controller/admin_update_deliveryCheck.php" method="post" onsubmit="return validateAndSubmit()">
        <label for="tracking_key">Enter Tracking Key:</label>
        <input type="text" name="tracking_key" id="tracking_key" required> <br> <hr>
        
        <label for="EDT">Estimated Delivery Time:</label>
        <input type="time" id="EDT" name="EDT"> <br> <hr>

        <label for="delivery_status">Delivery Status:</label>
            <select name="delivery_status" id="delivery_status">
                <option value="pending">Pending</option>
                <option value="out_for_delivery">Out for delivery</option>
                <option value="delivered">Delivered</option>
            </select> <br> <hr>


        <input type="submit" name="submit" value="Update Delivery">
    </form>

    <br>
    <br>

    <a href="AdminIndex.php"> Back </a> |
    <a href="../controller/LogoutCheck.php"> logout </a>

</body>
</html>