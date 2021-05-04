<?php
    class dbAccess{

        // data base connection
        public static function conn(){
            try{
                $db = new PDO("mysql:host=localhost;dbname=ozmusic;charset=utf8","root","");
                $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                return $db;
            }
            catch(Exception $e){
                echo ("Error: " . $e->getMessage());
            }
        }

        // Modify method
        public static function modify($req){
            try{
                $db = dbAccess::conn();
                $m = $db->exec($req);
                return $m;
            }
            catch(Exception $e){
                echo ("Error: " . $e->getMessage());
            }
        }

        // Selection method
        public static function selection($req){
            try{
                $db = dbAccess::conn();
                $rq = $db->query($req);
                return $rq;
            }
            catch(Exception $e){
                echo ("Error: " . $e->getMessage());
            }
        }
    }