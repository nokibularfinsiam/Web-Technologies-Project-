<?php

    //include_once('../controller/sessionCheck.php');

?>

<html>
<head>
    <title>Contact Us</title>
    <script src="../js/contactUsCheck.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/contactUs.css">
</head>
<body>
    <h1><center>Contact Us</center></h1>
    <form method="post" action="../controller/contactUsCheck.php">
        <fieldset>
            <legend>Contact Us</legend>
            Select Branch Location :
            <select name="storeLocator" id="storeLocator">
                <option value="mirpur">Mirpur</option>
                <option value="dhanmondi">Dhanmondi</option>
                <option value="Wari">Wari</option>
                <option value="uttara">Uttara</option>
                <option value="bashundhara">Bashundhara</option>
            </select>
            <input type="button" onclick="searchStore1()" value="Search">
        </fieldset>
    </form>

    <div id="contactResult"></div>

    <br>
    <br>

    <a href="VarifiedUserIndex.php">Back</a> |
    <a href="../controller/LogoutCheck.php">Logout</a>

</body>
</html>