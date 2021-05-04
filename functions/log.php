<?php
    include_once "dbConnection.php";

    class loginIn{

        // login in
        public static function login($email){
            $req = "SELECT * from client where email = '$email';";
            $fetch = dbAccess::selection($req);
            if($fetch->rowCount() >  0 ){
                $res = $fetch->fetch(PDO::FETCH_ASSOC);
                return $res;
            }
            return 0 ;
        }
    }