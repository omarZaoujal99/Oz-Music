<?php

    //including method
    include_once "admin.method.php";


    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['action']) && $_POST['action']== true){

        $lastId = $_POST["lastInd"];
        $color = $_POST["color"];
        $pic = $_POST["picture"];

        echo $lastId;

    }

    // if(isset($_POST["btnSubCol"])){



        // getting values
        // $lastId = $_POST["lastInd"];
        // $color = $_POST["color"];

        // $pic = $_FILES["colorPic"]["tmp_name"];
        // $picName = $_FILES["colorPic"]["name"];
        // $path = "http://localhost/php/ecommerce/product/$picName";



        // admin::addProductColor($lastId,$color,$path);
        // move_uploaded_file($pic,"../product/$picName");
        // $r = 1;
        // return $r;

    // }