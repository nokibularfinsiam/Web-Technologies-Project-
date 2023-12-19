<?php

    // require_once('DB.php');
    // function login($UserName, $password){
    //     $con = getConnection();
    //     $sql = "select * from registration where UserName='{$UserName}' and password='{$password}'";
    //     $result = mysqli_query($con, $sql);
    //     $user = mysqli_fetch_assoc($result);
        
    //     if(count($user) > 0){
    //         return true;
    //     }else{
    //         return false;
    //     }
    // }

    // function signup($user)
    // {
    //     $firstname = $user['firstName'];
    //     $lastname = $user['lastName'];
    //     $UserName = $user['UserName'];
    //     $email = $user['email'];
    //     $password = $user['password'];
    //     $gender = $user['gender'];
    //     $phone = $user['phone'];
        
    //     $con = getConnection();
    //     $sql = "INSERT INTO registration (firstName, lastName, UserName, email, password, gender, phone)
    //     VALUES ('$firstname', '$lastname', '$UserName', '$email', '$password', '$gender','$phone')";

    //     if (mysqli_query($con, $sql)) {
    //         return true;
    //     } else {
    //         return false;
    //     }

    //     return true;
    // }

    // function getuserinfo(){
    //     $con = getConnection();
    //     $sql = "select * from registration";
    //     $result = mysqli_query($con, $sql);
    //     $viewuserinfos = [];
        
    //     while($iewuserinfo = mysqli_fetch_assoc($result)){
    //         array_push($iewuserinfos, $iewuserinfo);
    //     }
        
    //     return $iewuserinfos;
    // }
?>