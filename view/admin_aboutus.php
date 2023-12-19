<?php
    require_once('../model/aboutusModel.php');
    include_once('../controller/sessionCheck.php');

    if (isset($_POST['aboutustext'])) 
    {
        
        $aboutusText=$_POST['aboutustext'];
        if($aboutusText == "")
        {
            echo "null value inserted";
    
        }
        else{
            updateAboutus($aboutusText);
            //header('location: admin_aboutus.php');
            
        }
    }

    $storeAboutus=getAboutus();
?>

<html>
<head>
    <title>about us</title>
    <link rel="stylesheet" type="text/css" href="../css/admin_aboutus.css">
    <script src="../js/aboutus.js"></script>
</head>
<body>
<form action="admin_aboutus.php" method="post" id="h2">
    <h1>About Us</h1>

    <?php for($i=0;$i<count($storeAboutus);$i++)
            {?>
                <h3><?=$storeAboutus[$i]['aboutus_text']?></strong></h3>
    <?php   }?>
    <br><br>
    <h2>Update the about us:</h2>
    <?php for($i=0;$i<count($storeAboutus);$i++)
            {?>
                <textarea id="aboutustext" name="aboutustext" cols="30" rows="10"><?=$storeAboutus[$i]['aboutus_text']?></textarea><span id="h1"></span>
                
                
    <?php   }?>
    <br><input type="button" name="submit" value="Update" onclick="ajax()"/>
    <br><a href="AdminIndex.php">
    <br><button type="button">Back</button><br>
    
</form>

</body>
</html>