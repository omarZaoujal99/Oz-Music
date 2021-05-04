<?php

    // including data access
    include_once "dbConnection.php";

    class admin{

        // add product
        static function addPro($name,$desc,$selCategory,$pic1,$pic2,$pic3,$price){
            $req = "INSERT INTO products(product_name,product_description,category,first_pic,second_pic,third_pic,price) 
                    values ('$name','$desc','$selCategory','$pic1','$pic2','$pic3','$price');";
            $res = dbAccess::modify($req);
            return $res;
        }

        // getting the last id inserted
        static function lastIdInserted(){
            $req = "SELECT id_product from products ORDER BY id_product desc LIMIT 1;";
            $fetch = dbAccess::selection($req);
            if($fetch->rowCount() >  0 ){
                $res = $fetch->fetch(PDO::FETCH_ASSOC);
                return $res;
            }
            return 0 ;
        }

        // adding a color for product
        static function addProductColor($lastId,$color,$pic){
            $req = "INSERT INTO product_infos(id_product,color,picture) values ($lastId,'$color','$pic');";
            $res = dbAccess::modify($req);
            return $res;
        }

        // selecting all colors
        static function selProColors($id){
            $req = "SELECT * from product_infos where id_product = $id";
            $res = dbAccess::selection($req);
            return $res;
        }

        // get number of rows in product table
        public static function getAllRowsPro(){
            $sql = "Select count(*) from products;";
            $res = dbAccess::selection($sql);
            while($row = $res->fetch()){
                $r = $row[0];
            }
            $finalRes = ceil($r / 5);
            return $finalRes;
        }

        // update in products table
        static function updatePro($id,$name,$desc,$categ,$price){
            $req = "UPDATE products set product_name = '$name', product_description = '$desc', category = '$categ',
                    price = '$price' where id_product = $id;";
            $res = dbAccess::modify($req);
            return $res;
        }
        
        // remove in products table
        static function removePro($id){
            $req = "DELETE from products where id_product = $id;";
            $res = dbAccess::modify($req);
            return $res;
        }

        // pagination for products
        static function productPagination($page){
            $sql = "select * from products limit $page,5";
            $res = dbAccess::selection($sql);
            return $res;
        }

    }