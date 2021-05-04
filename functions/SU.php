<?php
    include_once 'dbConnection.php';

    class signUp{

        // Sign Up: new clients
        public static function SU($username,$email,$password,$nationality,$adress,$phoneNumber){
            $sql = "INSERT INTO client(username,email,password_,nationality,adress,phone_number) 
            values ('$username','$email','$password','$nationality','$adress','$phoneNumber');";
            $res = dbAccess::modify($sql);
            return $res;
        }

        // Check if an email is already exists or not
        public static function emValidation($email){
            $sql = "SELECT * FROM client where email = '$email';";
            $res = dbAccess::selection($sql);
            $r = $res->rowCount();
            return $r;
        }
    }