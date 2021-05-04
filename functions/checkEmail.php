<?php
    $conn = mysqli_connect("localhost","root","","ozmusic");

    if(isset($_POST["email_key"])){
        $email = $_POST["email_key"];
        $checkIfYes = $_POST["checkIfYes"];
        $query = "SELECT * from client where email = '$email'";
        $result = mysqli_query($conn,$query);
        if(mysqli_num_rows($result) > 0){
            $checkIfYes = 1;
            echo $checkIfYes;
        }
        else{
            $checkIfYes = 0;
            echo $checkIfYes;
        }
    }