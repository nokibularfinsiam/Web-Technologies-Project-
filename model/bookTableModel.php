<?php
    require_once('DB.php');

    function booktable($name, $number, $date, $time, $guests){
        $con = getConnection();
        $sql = "INSERT INTO reservation (Name, Number, Date, Time, Guests) VALUES ('$name','$number','$date','$time','$guests')";

        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getbooktable(){
        $con = getConnection();
        $sql = "select * from reservation";
        $result = mysqli_query($con, $sql);
        $viewtables = [];
        
        while($viewtable = mysqli_fetch_assoc($result)){
            array_push($viewtables, $viewtable);
        }
        
        return $viewtables;
    }

    function deletet($dl)
    {
        $con = getConnection();
        $sql = "DELETE FROM reservation WHERE Number = $dl";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }


    function searchtable($number){
        $con = getConnection();
        $sql = "select * from reservation where Number='$number'";
        $result = mysqli_query($con, $sql);
        $viewtables = [];
        
        while($viewtable = mysqli_fetch_assoc($result)){
            array_push($viewtables, $viewtable);
        }
        
        return $viewtables;
    }

?>