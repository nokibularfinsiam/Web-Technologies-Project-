<?php

    require_once('../model/operationModel.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $trackingKey = $_POST['tracking_key'];
        $estimatedDeliveryTime = $_POST['EDT'];
        $deliveryStatus = $_POST['delivery_status'];

        if($trackingKey == "" || $estimatedDeliveryTime == "" || $deliveryStatus == "")
        {
            echo "Please fill in all the fields.";
        }
        else
        {
            $updateResult = updateDelivery($trackingKey, $estimatedDeliveryTime, $deliveryStatus);

            if ($updateResult)
            {
                echo "Delivery information updated successfully.";
            }
            else
            {
                echo "Failed to update delivery information.";
            }
        }
    }
    else
    {
        header('Location: ../view/admin_update_delivery.php');
    }

?>

<html>
    <body>
        <hr>
        <a href="../view/admin_update_delivery.php"> Back </a> |
        <a href="../controller/logout.php"> logout </a>
    </body>
</html>