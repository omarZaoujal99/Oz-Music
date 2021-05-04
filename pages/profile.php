<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my styles -->
    <link rel="stylesheet" href="../css/profile.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- ----- fontawesome css: ----- -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
     <!-- ----- font family: "Audiowild" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <!-- ----- font family: "Sofia" ------ -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
</head>
<body>
    <!-- header and contact button -->
    <?php
        include_once "../fixedPages/header.php";
        include_once "../fixedPages/contactIcon.php";
    ?>

    <!-- main -->
    <main>
        <!-- first profile section -->
        <section class="container">
            <div class="rowPro div1sec1Pro">
                <!-- profile picture -->
                <div class="div2sec2Pro col-md-4 col-12">
                    <div class="profilePic">
                        <?php
                            if(!empty($_SESSION["checkIfPicExists"])){
                                if(empty($_SESSION["picName"])){
                                    ?>
                                    <a href="../pages/profile.php" target="_blank" style="cursor: pointer;">
                                        <img src="<?php echo $_SESSION["checkIfPicExists"];?>" style="border-radius: 50%;" alt="logoLogin" width="100%" height="100%">
                                    </a>
                                    <?php
                                }
                                else{
                                    ?>
                                    <a href="../clientPics/<?php echo $_SESSION["picName"];?>" target="_blank" style="cursor: pointer;">
                                        <img src="../clientPics/<?php echo $_SESSION["picName"];?>" style="border-radius: 50%;" alt="logo" width="100%" height="100%">
                                    </a>
                                    <?php
                                }
                            }
                            elseif(empty($_SESSION["picName"])){
                                ?>
                                <a href="../pics/loginPic.png" target="_blank" style="cursor: pointer;">
                                    <img src="../pics/loginPic.png" style="border-radius: 50%;" alt="logoLogin" width="100%" height="100%">
                                </a>
                                <?php
                            }
                            else{
                                ?>
                                <a href="../clientPics/<?php echo $_SESSION["picName"];?>" target="_blank" style="cursor: pointer;">
                                    <img src="../clientPics/<?php echo $_SESSION["picName"];?>" style="border-radius: 50%;" alt="logo" width="100%" height="100%">
                                </a>
                                <?php
                            }
                        ?>
                    </div>
                    <div class="profilePic2">
                        <button id="btnChangePicPro" class="btnChangePicProC">Change Picture <i class="fas fa-camera"></i></button>
                    </div>
                    <div style="position: relative;">
                        <div id="divAddPic">
                            <form action="../actions/changeProPic.action.php" method="POST" enctype="multipart/form-data">
                                <label for="fl" class="lblChoosePic">Choose Picture:</label>
                                <input type="file" name="newPic" id="fl" class="newpic">
                                <input type="submit" value="Change" name="btnSubChangePic" id="btnSubChanges">
                            </form>
                            <button class="btnCloseChanges" id="btnCloseChange">Close</button>
                        </div>
                    </div>
                </div>

                <!-- profile information -->
                <div class="div2sec2Pro col-md-7 col-12">
                    <h3 class="h3Profile1">Profile Information</h3>
                    <form action="../actions/saveChanges.action.php" method="post">
                        <table class="tableProfile">
                            <tr>
                                <td>
                                    <label for="un" class="lblProfile">Username:</label>
                                </td>
                                <td>
                                    <input type="text" id="un" name="username" required class="inptProfile" 
                                    value="<?php echo $_SESSION["username"] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="em" class="lblProfile">Email:</label>
                                </td>
                                <td>
                                    <input readonly type="email" id="em" name="email" required class="inptProfile" 
                                    value="<?php echo $_SESSION["email"] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pa" class="lblProfile">Password:</label>
                                </td>
                                <td>
                                    <input type="password" id="pa" name="password" required class="inptProfile" 
                                    value="<?php echo $_SESSION["password"] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="na" class="lblProfile">Nationality:</label>
                                </td>
                                <td>
                                    <input type="text" id="na" name="nationality" required class="inptProfile" 
                                    value="<?php echo $_SESSION["nationality"] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="ad" class="lblProfile">Adress:</label>
                                </td>
                                <td>
                                    <input type="text" id="ad" name="adress" required class="inptProfile" 
                                    value="<?php echo $_SESSION["adress"] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="pn" class="lblProfile">Phone:</label>
                                </td>
                                <td>
                                    <input type="text" id="pn" name="phoneNumber" required class="inptProfile" 
                                    value="<?php echo $_SESSION["phone_number"] ?>">
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <div class="divSubSave">
                                        <input type="submit" value="Save" id="saveChanges" name="btnSaveChanges" class="saveChanges">
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div id="divBtnsPro">
                <form action="../actions/logOut.action.php" method="post">
                    <input type="submit" name="logout" value="logOut" class="btnSubLogOut"> 
                </form>
            </div>
        </section>
    </main>

    <!-- footer -->
    <?php
        include_once "../fixedPages/footer.php";
    ?>

<!-- ----- fontawesome js: ----- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
<!-- ----- bootstrap js: ----- -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ----- JQuery ------ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- my own scripts -->
<script src="../js/profileChangeValidation.js"></script>
<script src="../js/addProPic.js"></script>
</body>
</html>