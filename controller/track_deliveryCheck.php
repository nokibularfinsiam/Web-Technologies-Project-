<?php

    require_once('../model/operationModel.php');

    // session_start();
    // $tracking_key = $_REQUEST['tracking_key'];
    // trackDelivery($tracking_key);

    if (isset($_POST['tracking_key']))
    {
        $trackingKey = $_POST['tracking_key'];
        trackDelivery($trackingKey);
    }
    
?>

<html>
    <title>Track Delivery</title>
</head>
<body>
    <br>
    <a href="../view/track_delivery.php">Clear Search</a>
</body>
</html>