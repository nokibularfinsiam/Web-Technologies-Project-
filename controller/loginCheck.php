<?php
    require_once('../model/userModel.php');

    session_start();
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == "" || $password == "" ){
    
        echo "null username or password!";
    
    }else{
        $status = login($username, $password);
        if($status)
        {
            if ($status['userType'] == "admin"){
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/AdminIndex.php');
            }
            elseif ($status['userType'] == "customer") {
                $_SESSION['flag'] = 'true';
                $_SESSION['username'] = $username;
                header('location: ../view/VarifiedUserIndex.php');
            }
        }
        else{
                echo "invalid user!";
            }
        
    }
?>