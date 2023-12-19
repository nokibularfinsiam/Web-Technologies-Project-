<?php
    require_once('../model/promotionModel.php');
    include_once('../controller/sessionCheck.php');
    //$addedPromotion = $_POST['addedPromotion'];
    if(isset($_POST['addedPromotion']))
    {
        $addedPromotion = $_POST['addedPromotion'];
        addPromotion($addedPromotion);
        echo "Promotion added successfully";
        exit();
    }
    
    

?>

<html>
    <head>
        <title>Add promotion</title>
        <link rel="stylesheet" type="text/css" href="../css/addpromotion.css">
        <script src="../js/promotion.js"></script>
    </head>
    <body>
        <form method="post" action="addpromotion.php">
            <h3>Input or type the promotion: </h3>
            <textarea id="addedPromotion" name=addedPromotion></textarea> <span id="h1"></span><br>
            <p id="h2"></p>
            <input type="button" name="submit" value="Submit" onclick="ajax()"/><br>
            <a href="admin_promotion.php">
            <button type="button">Back</button>
        </form>
    
        
    </body>

</html>
    