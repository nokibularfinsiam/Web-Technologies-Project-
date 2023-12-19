<?php
    include_once('../model/operationModel.php');
    //include_once('../controller/sessionCheck.php');

    if (isset($_POST['storeLocator']))
    {
        $selectedLocation = $_POST['storeLocator'];
        searchStore1($selectedLocation);
    }
?>

<html>
    <title>Contact Us</title>
</head>
<body>
    <br>
    <a href="../view/contactUs.php">Clear Selection</a>
</body>
</html>