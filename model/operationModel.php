<?php

    require_once('DB.php');

    function searchStore($location)
    {
        $con = getConnection();

        $location = mysqli_real_escape_string($con, $location);

        $sql = "SELECT * FROM storeLocation WHERE area = '$location'";

        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            die("Query failed: " . mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Location: " . $row['area'] . "<br>";
            echo "Road No.: " . $row['road_no'] . "<br>";
            echo "House No.: " . $row['house_no'] . "<br>";
            echo "Contact No.: " . $row['contact_no'] . "<br>";
        }
    }

    function updateStoreLocation($selectedLocation, $road_no, $house_no, $contact_no)
    {
        $con = getConnection();

        $query = "SELECT * FROM storeLocation WHERE area = '$selectedLocation'";
        $result = mysqli_query($con, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            return false;
        }

        $sql = "UPDATE storeLocation SET road_no = '$road_no', 
                        house_no = '$house_no', contact_no = '$contact_no' WHERE area = '$selectedLocation'";
        
        $updateResult = mysqli_query($con, $sql);

        if (!$updateResult)
        {
            return false;
        }

        return true;
    }

    function trackDelivery($tracking_key)
    {
        $con = getConnection();
        $sql = "SELECT estimated_delivery_at, delivery_status FROM orderhistory WHERE tracking_key = '$tracking_key'";
        $result = mysqli_query($con, $sql);
        $order = mysqli_fetch_assoc($result);

        if (count($order) > 0)
        {
            $estimated_delivery_time = $order['estimated_delivery_at'];
            $delivery_status = $order['delivery_status'];

            echo "Estimated Delivery Time: $estimated_delivery_time<br>";
            echo "Delivery Status: $delivery_status<br>";
        }
        else
        {
            echo "Order not found. Please check your tracking key.";
        }
    }

    function updateDelivery($trackingKey, $estimatedDeliveryTime, $deliveryStatus)
    {
        $con = getConnection();

        $query = "SELECT * FROM orderhistory WHERE tracking_key = '$trackingKey'";
        $result = mysqli_query($con, $query);

        if (!$result || mysqli_num_rows($result) == 0) {
            return false;
        }

        $sql = "UPDATE orders SET estimated_delivery_at = '$estimatedDeliveryTime', 
                        delivery_status = '$deliveryStatus' WHERE tracking_key = '$trackingKey'";
        
        $updateResult = mysqli_query($con, $sql);

        if (!$updateResult) {
            return false;
        }

        return true;
    }

    function getAllOrders() {
        $con = getConnection();
    
        $sql = "SELECT * FROM orderhistory";
        $result = mysqli_query($con, $sql);
    
        $orders = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        mysqli_close($con);
    
        return $orders;
    }

    function searchStore1($location)
    {
        $con = getConnection();

        $location = mysqli_real_escape_string($con, $location);

        $sql = "SELECT * FROM storeLocation WHERE area = '$location'";

        $result = mysqli_query($con, $sql);

        if (!$result)
        {
            die("Query failed: " . mysqli_error($con));
        }

        while ($row = mysqli_fetch_assoc($result))
        {
            echo "Location: " . $row['area'] . "<br>";
            echo "Contact No.: " . $row['contact_no'] . "<br>";
            echo "Email : " . $row['email'] . "<br>";
        }
    }
?>