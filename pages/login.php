<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my styles -->
    <link rel="stylesheet" href="../css/login.css">
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
        <div class="firstDivLogin">
            <div class="secondDivLogin">
                <h3 class="h3Login">Login</h3>
                <form action="../actions/login.action.php" method="post">
                    <div class="divInputsLogin">
                        <input type="email" name="email" id="em" placeholder="Email" required class="inpLogin"><br>
                    </div>
                    <div class="divInputsLogin">
                        <input type="password" name="password" id="pa" placeholder="Password" required class="inpLogin"><br>
                    </div>
                    <br><input type="submit" name="login" value="Login" class="btnSubLogin" id="btnSubLog">
                </form>
                <div class="lastDivLogin">
                    <a href="signUp.php" class="aLastDivLogin">Create Account</a>
                    <a href="#" class="aLastDivLogin2">Forgot Password</a>
                </div>
            </div>
        </div>
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
</body>
</html>