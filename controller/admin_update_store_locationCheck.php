<?php

    require_once('../model/operationModel.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $selectedLocation = $_POST['storeLocator'];
        $road_no = $_POST['road_no'];
        $house_no = $_POST['house_no'];
        $contact_no = $_POST['contact_no'];

        if($selectedLocation == "" || $road_no == "" || $house_no == "" || $contact_no == "")
        {
            echo "Please fill in all the fields.";
        }
        else
        {
            $updateResult = updateStoreLocation($selectedLocation, $road_no, $house_no, $contact_no);

            if ($updateResult)
            {
                echo "Store Location updated successfully.";
            }
            else
            {
                echo "Failed to update Store Location.";
            }
        }
    }
    else
    {
        header('Location: ../view/admin_update_store_location.php');
    }

?>

<!-- <html>
    <body>
        <hr>
        <a href="../view/admin_update_store_location.php"> Back </a> |
        <a href="../controller/logout.php"> logout </a>
    </body>
</html> -->
