<?php
require_once('../model/NotificationModel.php');
include_once('../controller/SessionCheck.php');
$viewNotifications= getNotification();
?>
<html>
    <head>
        <title>Notification</title>
    <link rel="stylesheet" type="text/css" href="../css/viewnotification_Admin.css">

    </head> 
    <body>
        <form action="">
        <center>
            <fieldset style="width: 70%">
            <legend>Notification</legend>
            <center>
            <table border="1" width=60%>

                <tr>
                    <th>Notifications</th>
                </tr>
                <?php for($i=0;$i<count($viewNotifications);$i++)
                {?>
                
                <tr>
                    <td><?=$viewNotifications[$i]['Notifications']?></td>

        <?php   }?>
                </tr>
                
            
            </table>
            </center>
            </fieldset>
            </center>

        </form>
        
    </body>
</html>