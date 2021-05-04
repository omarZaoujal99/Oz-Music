<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my styles -->
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/search.css">
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
    <header class="sticky-top">
        <div class="Div1Header" id="navHeader">
            <label id="lblBars" class="lblBar0">
                <i class="fa fa-bars iconBarsHeader" id="barsHeader"></i>
            </label>
            <ul class="ul1Header" id="ulHeader">
                <li><a href="../pages/index.php" class="aMenuHeader">Home</a></li>
                <li>
                    <button id="btnDropDownMenu" class="btnMenuHeader">Products</button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#" class="aDropDownMenu">Machines</a>
                        <a href="#" class="aDropDownMenu">Audio</a>
                        <a href="#" class="aDropDownMenu">Other Products</a>
                    </div>
                </li>
                <li><a href="#" class="aMenuHeader">About us</a></li>
                <li><a href="#" class="aMenuHeader">Contact</a></li>
                <li class="welcomeAnimation">Welcome</li>
            </ul>
            <img src="../pics/logo.png" alt="logo" class="logoHeader">
            <div class="iconHeader">
                <button class="aIconHeader btnAIconHeader" id="btnSearch"><i class="fas fa-search"></i></button>
                <a href="#" class="aIconHeader" id="aBag"><i class="fas fa-shopping-cart"></i><label class="BagContent">0</label></a>
                <select name="currency" id="cur" class="currency aIconHeader">
                    <option value="dollar" class="optionHeader" selected><a href="#">$</a></option>
                    <option value="euro" class="optionHeader"><a href="#">€</a></option>
                </select>
                <?php
                    // check if the user is logged in or not, then take him into login in page or profile page 
                    if(empty($_SESSION["id_client"])){
                        ?>
                            <a href="../pages/login.php" id="aCompte" class="aIconHeader aLoginHeader"><i class="fas fa-user-circle"></i></a>
                        <?php
                    }
                    else{
                        if(!empty($_SESSION["checkIfPicExists"])){
                            if(empty($_SESSION["picName"])){
                                ?>
                                <a href="../pages/profile.php" style="cursor: pointer;">
                                    <img src="<?php echo $_SESSION["checkIfPicExists"];?>" style="border-radius: 50%;position:relative;top:-5px;" alt="logo" class='aIconHeader aLoginHeader'>
                                </a>
                                <?php
                            }
                            else{
                                                            ?>
                            <a href="../pages/profile.php" style="cursor: pointer;">
                                <img src="../clientPics/<?php echo $_SESSION["picName"];?>" style="border-radius: 50%;position:relative;top:-5px;" alt="logo" class='aIconHeader aLoginHeader'>
                            </a>
                            <?php
                            }
                        }
                        elseif(empty($_SESSION["picName"])){
                            ?>
                            <a href="../pages/profile.php" style="cursor: pointer;">
                                <img src="../pics/loginPic.png" style="border-radius: 50%;" alt="logoLogin" width="100%" height="100%" class='aIconHeader aLoginHeader emptyLogo'>
                            </a>
                            <?php
                        }
                        else{
                            ?>
                            <a href="../pages/profile.php" style="cursor: pointer;">
                                <img src="../clientPics/<?php echo $_SESSION["picName"];?>" style="border-radius: 50%;position:relative;top:-5px;" alt="logo" class='aIconHeader aLoginHeader'>
                            </a>
                            <?php
                        }
                        ?>
                            <!-- <a href="../pages/profile.php" id="aCompte" class="aIconHeader aLoginHeader"><i class="fas fa-user-circle"></i></a> -->
                        <?php
                    }
                ?>
            </div>
        </div>
    </header>
    <div class="fixedErrPositionFixed"></div>

    <!-- search -->
    <section>
        <div class="firstDivSearch" id="divSearch">
            <div class="secondDivSearch">
                <form action="#" action="post">
                    <div class="thirdDivSeach">
                        <label for="searchInp" class="lblSearch">Search:</label>
                        <input type="text" name="search" id="searchInp" class="inpSearch" placeholder="...">  
                    </div>
                </form>
                <button class="btnCloseSearch" id="bCloseSearch">Close</button>
            </div>
        </div>
    </section>

<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<!-- my scripts -->
<script src="../js/barsButton.js"></script>
<script src="../js/dropDownMenu.js"></script>
<script src="../js/search.js"></script>
<script src="../js/stickyHeader.js"></script>
<!-- ----- bootstrap js: ----- -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ----- fontawesome js: ----- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js"></script>
</body>
</html>