<?php
    require_once('../model/userModel.php');
    {
       
        function UsernameValidation($username) {
            for ($i = 0; $i < strlen($username); $i++) {
                $Char = $username[$i];
            
                if (!Rq_letter_number($Char)) {
                    return false;
                }
            }
            return true;
        }
        function Rq_letter_number($char) {
            return (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || is_numeric($char));
        }

        $username=$_POST['username'];
        $isAvailable = checkUSername($username);
        if($username=="")
        {
            echo "*This username is not available";
        }
        else if((!UsernameValidation($username)))
        {
            echo "*This username is not available";
        }
        else if($isAvailable)
        {
            echo "*This username is not available";
        }
        else{
            echo "*This username is available";
        }
    }
    
?>