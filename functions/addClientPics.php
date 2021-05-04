<?php 

    // including data access
    include_once "../functions/dbConnection.php";

    class addClientPic{

        // inserting the pics into database
        static function addCP($pics,$id_client){
            $req = "INSERT into client_pics(client_pics,id_client) values ('$pics',$id_client)";
            $res = dbAccess::modify($req);
            return $res;
        }

        // retrieve the picture from database
        static function retrevePic($pics){
            $req = "SELECT client_pics from client_pics where client_pics = '$pics';";
            $res = dbAccess::selection($req);
            if($res->rowCount() > 0 ){
                $row = $res->fetch(PDO::FETCH_ASSOC);
            }
            return $row;
        }

        // check if a client has already have a profile picture
        static function proCliPicChecking($id){
            $req = "SELECT * from client_pics where id_client = $id ORDER by id_client_pics	 DESC LIMIT 1";
            $res = dbAccess::selection($req);
            return $res;
        }
    }