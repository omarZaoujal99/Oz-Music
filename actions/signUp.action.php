<?php
    // include method
    include_once "../functions/SU.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST["signUp"])){
            $username = $_POST["username"];
            $email = $_POST["email"];
            $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
            $nationality = $_POST["nationality"];
            $adress = $_POST["adress"];
            $phonenumber = $_POST["phonenumber"];

            signUp::SU($username,$email,$password,$nationality,$adress,$phonenumber);
            echo "<script>alert('Creating account has been successfuly')</script>";
            echo "<script>window.open('../pages/login.php','_self')</script>";
        }
    }
?>