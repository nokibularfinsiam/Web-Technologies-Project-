<?php
    require_once('../model/reviewModel.php');
    include_once('../controller/sessionCheck.php');

    if (isset($_POST['reviewfor'],$_POST['reviewtext'],$_POST['ratings'])) 
    {
        $username=$_SESSION['username'];
        $reviewfor=$_POST['reviewfor'];
        $reviewtext=$_POST['reviewtext'];
        $ratings=$_POST['ratings'];
        
        if($reviewfor == "" || $reviewtext == "" || $ratings == "")
        {
            echo "null value inserted";
    
        }
        else{
            addReview($username,$reviewfor,$reviewtext,$ratings);
            // header('location: review.php');
            // exit();
        }
    }
    $reviews=getReview();
?>

<html>
    <head>
        <title>review</title>
        <link rel="stylesheet" type="text/css" href="../css/review.css">
        <script src="../js/review.js"></script>
    </head>
    <body>
        <form action="review.php" method="post" id="fullform">
            <fieldset>
                <legend>Review</legend>
                review for:
                <select id="reviewfor" name="reviewfor"> 
                    <option value="food">Food</option>
                    <!-- <option value="retaurant">Restaurant</option> -->
                </select>
                <br><br>your review: <textarea id="reviewtext" name="reviewtext"  cols="20" rows="2"></textarea>
                <br>your ratings: <select id="ratings" name="ratings">
                                    <option value="1">1 star</option>
                                    <option value="2">2 star</option>
                                    <option value="3">3 star</option>
                                    <option value="4">4 star</option>
                                    <option value="5">5 star</option>
                                </select>
                                <h2 id="h1"></h2>
                <br><input type="button" name="submit" value="Submit" onclick="ajax()"/>
                
            </fieldset>
            <br>
          
            <br>

            <p><h2>All Reviews</h2></p>
            <table border="1" width=50%>
    
                <tr>
                    <th>username</th>
                    <th>reviewType</th>
                    <th>review</th>
                    <th>rating</th>

                </tr>
                <?php for($i=0;$i<count($reviews);$i++)
                {?>
                <tr>
                    
                    <td><?=$reviews[$i]['username']?></td>
                    <td><?=$reviews[$i]['reviewType']?></td>
                    <td><?=$reviews[$i]['review']?></td>
                    <td><?=$reviews[$i]['rating']?></td>
        <?php   }?>
                </tr>
                
            
            </table>
        </form>
    </body>
</html>
<?php
    
    //require_once('../model/reviewModel.php');
    // if (isset($_POST['reviewfor'],$_POST['reviewtext'],$_POST['ratings'])) 
    // {
    //     $username=$_SESSION['username'];
    //     $reviewfor=$_POST['reviewfor'];
    //     $reviewtext=$_POST['reviewtext'];
    //     $ratings=$_POST['ratings'];
    //     if($reviewfor == "" || $reviewtext == "" || $ratings == "")
    //     {
    //         echo "null value inserted";
    
    //     }
    //     else{
    //         addReview($username,$reviewfor,$reviewtext,$ratings);
    //         header('location: review.php');
    //         exit();
    //     }
    // }
?>