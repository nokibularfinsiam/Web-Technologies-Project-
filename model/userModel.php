<?php

    require_once('DB.php');
    //include_once('../controller/sessionCheck.php');
    function login($UserName, $password){
        $con = getConnection();
        $sql = "select * from registration where userName='{$UserName}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        //$count = mysqli_num_rows($result);
        
        
        if($user){
            return $user;
        }
        else{
            return false;
        }
    }

    function signup($user)
    {
        $firstname = $user['firstName'];
        $lastname = $user['lastName'];
        $username = $user['username'];
        $email = $user['email'];
        $password = $user['password'];
        $gender = $user['gender'];
        $phone = $user['phone'];
        $userType = $user['userType'];
        $con = getConnection();
        $sql = "INSERT INTO registration (firstName, lastName, userName, email, password, gender, phone, userType)
        VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$gender','$phone','$userType')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    function getuserinfo(){
        $con = getConnection();
        $sql = "select * from registration";
        $result = mysqli_query($con, $sql);
        $viewuserinfos = [];
        
        while($iewuserinfo = mysqli_fetch_assoc($result)){
            array_push($iewuserinfos, $iewuserinfo);
        }
        
        return $iewuserinfos;
    }

    function addUser($user)
    {
        $UserName = $user['UserName'];
        $password = $user['password'];
        $email = $user['email'];
        $fullName = $user['fullName'];
        $contactNo = $user['contactNo'];
        
        $con = getConnection();
        $sql = "INSERT INTO users (UserName, password, email, full_name, contact_no)
        VALUES ('$UserName', '$password', '$email', '$fullName','$contactNo')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function addAdmin($user)
    {
        $UserName = $user['UserName'];
        $password = $user['password'];
        $email = $user['email'];
        $fullName = $user['fullName'];
        $contactNo = $user['contactNo'];
        
        $con = getConnection();
        $sql = "INSERT INTO adminInfo (UserName, password, email, full_name, contact_no)
        VALUES ('$UserName', '$password', '$email', '$fullName','$contactNo')";

        if (mysqli_query($con, $sql))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function showAllUsers()
    {
        $con = getConnection();
        $sql = "SELECT * FROM registration";
        $result = mysqli_query($con, $sql);
        $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $users;
    }
    
    function deleteUser($username)
    {
        $con = getConnection();
        $username = mysqli_real_escape_string($con, $username);
        $sql = "DELETE FROM registration WHERE userName = '$username'";
        return mysqli_query($con, $sql);
    }

    function getUser($username)
    {
        
        $con = getConnection();
        //$sql = "SELECT firsName,lastName,userName,email,phone FROM registration WHERE userName = '$username'";
        $sql = "SELECT * FROM registration WHERE userName = '$username'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result);
        }
        else
        {
            return null;
        }
    }

    function getAdmin($UserName)
    {
        $con = getConnection();
        $sql = "SELECT full_name,email,UserName,contact_no FROM adminInfo WHERE UserName = '$UserName'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0)
        {
            return mysqli_fetch_assoc($result);
        }
        else
        {
            return null;
        }
    }
    
    function checkUSername($username)
    {
        $con = getConnection();
        $sql = "select * from registration where userName='$username'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        
        if($user){
            return $user;
        }
        else{
            return false;
        }
    }

?>