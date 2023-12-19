<?php
    //include_once('../controller/sessionCheck.php');
    //session_start();
?>


<html>
<head>
    <title>Delivery Tracking</title>
    <script src="../js/track_deliveryCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/track_delivery.css">
</head>
<body>
    <h1>Delivery Tracking</h1>
    <form action="../controller/track_deliveryCheck.php" method="post">
        <label for="tracking_key">Enter Tracking Key:</label>
        <input type="text" name="tracking_key" id="tracking_key" required>
        <input type="button" onclick="trackDelivery()" value="Track Delivery">
    </form>

    <div id="deliveryResult"></div>

    <br>
    <br>

    <a href="VarifiedUserIndex.php">back</a> |
    <a href="../controller/LogoutCheck.php"> logout </a>

</body>
</html>