<?php
 
    include_once('../model/userModel.php');
 
    if (isset($_GET['username']))
    {
        $username = $_GET['username'];
 
        if (deleteUser($username))
        {
            echo json_encode(["success" => true, "message" => "User deleted successfully."]);
        }
        else
        {
            echo json_encode(["success" => false, "message" => "Error deleting user."]);
        }
        exit;
    }
 
    if (isset($_GET['username']))
    {
        $username = $_GET['username'];
 
        if (deleteUser($username))
        {
            echo "User deleted successfully.";
            header('Location: ../view/deleteUser.php');
            exit;
        }
        else
        {
            echo "Error deleting user.";
        }
    }
 
?>