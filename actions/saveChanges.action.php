<?php 

    // incliding the data method
    include_once "../functions/saveChanges.php";
    //starting the session
    session_start();

    if(isset($_POST["btnSaveChanges"])){

        // getting values
        $id = $_SESSION["id_client"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
        $nationality = $_POST["nationality"];
        $adress = $_POST["adress"];
        $phoneNumber = $_POST["phoneNumber"];

        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $_POST["password"];
        $_SESSION["nationality"] = $nationality;
        $_SESSION["adress"] = $adress;
        $_SESSION["phone_number"] = $phoneNumber;


        saveC::updateProfile($id,$username,$email,$password,$nationality,$adress,$phoneNumber);
        echo "<script>alert('Updating data has been successfuly')</script>";
        echo "<script>window.open('../pages/profile.php','_self')</script>";
    }