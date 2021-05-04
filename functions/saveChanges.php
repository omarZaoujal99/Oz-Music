<?php 

    // including the data access
    include_once "../functions/dbConnection.php";

    class saveC{

        // method update
        static function updateProfile($id,$username,$email,$password,$nationality,$adress,$phone_number){
            $req = "UPDATE client set username = '$username', email = '$email', password_ = '$password',
            nationality = '$nationality', adress = '$adress', phone_number = '$phone_number' where id_client = $id;";
            $res = dbAccess::modify($req);
            return $res;
        }
    }