<?php

include_once "../functions/admin.method.php";

if(isset($_POST["btnSubCol"])){

    $color = $_POST["colors"];
    $productId = $_POST["idOfPro"];
    $pageNum = $_POST["page"];

    $colorPic = $_FILES["colorPic"]["tmp_name"];
    $colorPic_name = $_FILES["colorPic"]["name"];
    $path = "http://localhost/php/ecommerce/product/$colorPic_name";

    admin::addProductColor($productId,$color,$path);

    move_uploaded_file($colorPic,"../product/$colorPic_name");

    echo "<script>alert('Adding product color has been successfuly!')</script>";
    header("location:../adminSpace/admin.php?page=$pageNum");
}