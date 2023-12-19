<?php

    //include_once('../controller/sessionCheck.php');

?>

<html>
<head>
    <title>Store Locator</title>
    <script src="../js/storeLocatorCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/storeLocator.css">
</head>
<body>
    <h1><center>Store Locator</center></h1>
    <form method="post" action="../controller/storeLocatorCheck.php">
        <fieldset>
            <legend>Store Locator</legend>
            Select Location :
            <select name="storeLocator" id="storeLocator">
                <option value="mirpur">Mirpur</option>
                <option value="dhanmondi">Dhanmondi</option>
                <option value="Wari">Wari</option>
                <option value="uttara">Uttara</option>
                <option value="bashundhara">Bashundhara</option>
            </select>
            <input type="button" onclick="searchStores()" value="Search">
        </fieldset>
    </form>

    <div id="storeResult"></div>

    <br>

    <a href="VarifiedUserIndex.php">Back</a> |
    <a href="../controller/LogoutCheck.php">Logout</a>

</body>
</html>