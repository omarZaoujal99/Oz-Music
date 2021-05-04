<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my styles -->
    <link rel="stylesheet" href="../css/signUp.css">
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
        <div class="firstDivSignUp">
            <div class="secondDivSignUp">
                <h3 class="h3SignUp">SignUp</h3>
                <form action="../actions/signUp.action.php" method="post">
                    <!-- inputs -->
                    <!-- username -->
                    <div class="divInputsSignUp">
                        <input type="text" name="username" id="un" placeholder="Username" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noUN" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesUN" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUUN"><label></label></div>
                    </div>
                    <!-- email -->
                    <div class="divInputsSignUp">
                        <input type="email" name="email" id="em" placeholder="Email" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noEM" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesEM" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUEM"><label class="lblerr"></label></div>
                    </div>
                    <!-- password -->
                    <div class="divInputsSignUp">
                        <input type="password" name="password" id="pa" placeholder="Password" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noPA" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesPA" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUPA"><label class="lblerr"></label></div>
                    </div>
                    <!-- password confirmation -->
                    <div class="divInputsSignUp">
                        <input type="password" name="password2" id="pa2" placeholder="Password Confirmation" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noPA2" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesPA2" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUPA2"><label class="lblerr"></label></div>
                    </div>
                    <!-- nationality -->
                    <div class="divInputsSignUp">
                        <input type="text" name="nationality" id="na" placeholder="Nationality" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noNA" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesNA" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUNA"><label class="lblerr"></label></div>
                    </div>
                    <!-- adress -->
                    <div class="divInputsSignUp">
                        <input type="text" name="adress" id="ad" placeholder="Adress" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noAD" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesAD" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUAD"><label class="lblerr"></label></div>
                    </div>
                    <!-- phone number -->
                    <div class="divInputsSignUp">
                        <input type="text" name="phonenumber" id="pn" placeholder="Phone Number" required class="inpSignUp"><br>
                        <i class="far fa-times-circle no" id="noPN" style="display: none;"></i>
                        <i class="far fa-check-circle yes" id="yesPN" style="display: none;"></i>
                        <!-- err area -->
                        <div class="divErrsSU" id="lblErrsSUPN"><label class="lblerr"></label></div>
                    </div><br>
                    <div class="ivereadtherules">
                        <input type="checkbox" name="ivereadtherules" id="rr" required>
                        <label for="rr" class="lblrr">I've read the rules <a href="#">here</a></label>
                    </div>
                    <br><input type="submit" name="signUp" value="Create" class="btnSubSignUp" id="btnSubSU">
                </form>
                <a href="#" class="aBackHomeSignUp">Back to Home</a>
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
<!-- ----- JQuery ------ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- my scripts -->
<script src="../js/SUFormValidation.js"></script>
<script>
    // check if an email is already exists
    $(document).ready(()=>{
        $("#btnSubSU").click((e)=>{
            // email icons validation
            const noEM = document.getElementById("noEM");
            const yesEM = document.getElementById("yesEM");
            // email input
            const em = document.getElementById("em");
            var emailVal = $("#em").val();
            var myRes;
            $.ajax({
                url : "../functions/checkEmail.php",
                method : "post",
                data : {
                    "checkIfYes" : 0,
                    "email_key" : emailVal
                },
                success:(res)=>{
                    if(res === 1){
                        myRes = res;
                    }
                    else{
                        myRes = res;
                    }
                },
                async: false
            });
            if(myRes == 1){
                em.style.color = "red";
                alert("This email is already taken (and you are single </3)");
                e.preventDefault();
            }
            else{
                em.style.color = "green";
            }
        })
    })
</script>
</body>
</html>