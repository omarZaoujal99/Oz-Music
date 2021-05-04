<?php
    include_once "../functions/log.php";
    include_once "../functions/addClientPics.php";
    session_start();

    if( $_SERVER['REQUEST_METHOD']=='POST' && isset( $_POST["login"])){
        $email = $_POST["email"];
        $password = $_POST["password"];
        $res = loginIn::login($email);
        if($res != 0){
            if(password_verify($password,$res['password_'])){

                // stored client infos into a sessions
                $_SESSION["id_client"] = $res["id_client"];
                $_SESSION["username"] = $res["username"];
                $_SESSION["email"] = $res["email"];
                $_SESSION["password"] = $password;
                $_SESSION["nationality"] = $res["nationality"];
                $_SESSION["adress"] = $res["adress"];
                $_SESSION["phone_number"] = $res["phone_number"];

                echo "<script>alert('Login in has been successfuly')</script>";
                echo "<script>window.open('../pages/index.php','_self')</script>";

                $id = $_SESSION["id_client"];
                $r = addClientPic::proCliPicChecking($id);
                if($r->rowCount() > 0){
                    while($row = $r->fetch()){
                        $_SESSION["checkIfPicExists"] = $row[1];
                    }
                }
                else if($r->rowCount() === 0){
                    return false;
                }
            }
            else{
                echo "<script>alert('Password is incorrect, try again with the correct password')</script>";
                echo "<script>window.open('../pages/login.php','_self')</script>";
            }
            // shoud vs code hhh
        }
        else{
            echo "<script>alert('Email is incorrect, try again with the correct email')</script>";
            echo "<script>window.open('../pages/login.php','_self')</script>";
        }
    }
?>