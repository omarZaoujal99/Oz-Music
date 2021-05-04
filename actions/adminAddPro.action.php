<?php

    // including method
    include_once "../functions/admin.method.php";

    if(isset($_POST["btnSubAddPro"])){

        // inputs value
        $name = $_POST["product_name"];
        $desc = $_POST["product_desc"];
        $price = $_POST["product_price"];
        $selCategory = $_POST["selCategory"];
        $pageNumber = $_POST["page"];

        $pic1 = $_FILES["product_pic1"]["tmp_name"];
        $pic1_name = $_FILES["product_pic1"]["name"];
        $path1 = "http://localhost/php/ecommerce/product/$pic1_name";

        $pic2 = $_FILES["product_pic2"]["tmp_name"];
        $pic2_name = $_FILES["product_pic2"]["name"];
        $path2 = "http://localhost/php/ecommerce/product/$pic2_name";

        $pic3 = $_FILES["product_pic3"]["tmp_name"];
        $pic3_name = $_FILES["product_pic3"]["name"];
        $path3 = "http://localhost/php/ecommerce/product/$pic3_name";
        
        $res = admin::addPro($name,$desc,$selCategory,$path1,$path2,$path3,$price);

        move_uploaded_file($pic1,"../product/$pic1_name");
        move_uploaded_file($pic2,"../product/$pic2_name");
        move_uploaded_file($pic3,"../product/$pic3_name");
        echo "<script>alert('Adding product has been successfuly!')</script>";
        if($res === 1){
            $res = admin::lastIdInserted();
            header("location:../adminSpace/admin.php?page=" . $pageNumber);
        }
        else{
            echo "shit";
        }
    }