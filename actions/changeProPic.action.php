<?php 

    // including the method
    include_once "../functions/addClientPics.php";
    // starting the session
    session_start();

    if(isset($_POST["btnSubChangePic"])){

        // values
        $id_client = $_SESSION["id_client"];
        $pics = $_FILES["newPic"]["tmp_name"];
        $_SESSION["pics"] = $pics;
        $picName = $_FILES["newPic"]["name"];
        $_SESSION["picName"] = $picName;
        $destination = "http://localhost/php/ecommerce/clientPics/$picName";
        addClientPic::addCP($destination,$id_client);
        move_uploaded_file($pics,"../clientPics/$picName");
        echo "<script>window.open('../pages/profile.php','_self')</script>";
    }