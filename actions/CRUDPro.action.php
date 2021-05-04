<?php

    include_once "../functions/admin.method.php";

    // update product
    if(isset($_POST["btnupdatepro"])){
        $name = $_POST["namePro"];
        $desc = $_POST["descPro"];
        $categ = $_POST["categoryPro"];
        $price = $_POST["pricePro"];
        $id = $_POST["idPro"];
        $pageNum = $_POST["pageNumber"];

        admin::updatePro($id,$name,$desc,$categ,$price);
        echo '<script>alert("Product ID: '.$id.' has changed")</script>';
        echo '<script>window.open("../adminSpace/admin.php?page='.$pageNum.'","_self")</script>';
    }

    // remove product
    if(isset($_POST["btndeletepro"])){
        $id = $_POST["idPro"];
        $pageNum = $_POST["pageNumber"];

        admin::removePro($id);
        echo '<script>alert("Product ID: '.$id.' has removed")</script>';
        echo '<script>window.open("../adminSpace/admin.php?page='.$pageNum.'","_self")</script>';
    }