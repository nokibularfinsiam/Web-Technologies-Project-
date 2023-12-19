<?php
    require_once('DB.php');
    //include_once('../controller/sessionCheck.php');
    function addReview($UserName,$reviewfor,$reviewtext,$ratings)
    {
        $con = getConnection();
        $sql = "INSERT INTO review (UserName,reviewType,review,rating) VALUES ('$UserName','$reviewfor','$reviewtext','$ratings')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    function getReview(){
        $con = getConnection();
        $sql = "select * from review";
        $result = mysqli_query($con, $sql);
        $reviews = [];
        
        while($review = mysqli_fetch_assoc($result)){
            array_push($reviews, $review);
        }
        
        return $reviews;
    }
?>