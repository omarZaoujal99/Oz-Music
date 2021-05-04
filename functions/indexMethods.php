<?php

include_once "dbConnection.php";

class indexMethods{

    // select randoms row from products
    static function selRandomsPro(){
        $req = "SELECT * FROM products ORDER BY RAND() LIMIT 12;";
        $res = dbAccess::selection($req);
        return $res;
    }
}