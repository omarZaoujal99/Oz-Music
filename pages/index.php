<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- my styles -->
    <link rel="stylesheet" href="../css/index.css">
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
        <!-- first section -->
        <section>
            <div class="div1sec11">
                <!-- text slider -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <p class="pSliderSec1">Welcome To OzMusic</p>
                        </div>
                        <div class="carousel-item">
                            <p class="pSliderSec1">Best Music Products With Great Services</p>
                        </div>
                        <div class="carousel-item">
                            <p class="pSliderSec1">By High Quality & Low Prices</p>
                        </div>
                        <div class="carousel-item">
                            <p class="pSliderSec1">Guarantee Over Than Six Months</p>
                        </div>
                    </div>
                </div>
                <div class="div2sec1">
                    <p class="p1div2sec1">Enjoy Now<br>And Start Saving Money From Now</p>
                    <a href="#"><button class="btndiv2sec1">Save Money</button></a>
                    <p class="p2div2sec1">!!!</p>
                </div>
                <!-- social media -->
                <!-- <div class="div1sec4">
                    <p class="p1div1sec4">To be aware of our discounts and our services <br> please join us at</p>
                    <div class="socialmediadiv1sec4">
                        <div class="socialmedia2div1sec4">
                            <a href="#"><img src="../pics/facebook.png" alt="facebook" class="socialmediaicon"></a>
                        </div>
                        <div class="socialmedia2div1sec4">
                            <a href="#"><img src="../pics/instagram.png" alt="facebook" class="socialmediaicon"></a>
                        </div>                        
                        <div class="socialmedia2div1sec4">
                            <a href="#"><img src="../pics/twitter.png" alt="facebook" class="socialmediaicon"></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </section>

        <!-- second section -->
        <section>
            <div class="rowIndex">
                <?php
                    include_once "../functions/indexMethods.php";
                    $res = indexMethods::selRandomsPro();
                    while($row = $res->fetch()){
                        echo '<div class="col-md-3 col-sm-6 col-12 div1RandomProducts">';
                            echo '<div class="div2RandomProducts">';
                                echo '<a href="#" target="_blank" style="text-decoration:none;">';
                                    echo '<img src="'. $row[4] .'" alt="product" class="imgRandomPro">
                                        <h4 class="h4RanPro"><label>'. $row[7] .'<span> $</span></label></h4>
                                        <h5 class="h5RanPro">'. $row[1] .'</h5>
                                        <div class="divDescRanPro">
                                            <p class="pDivDescRanPro">'. $row[2] .'</p>
                                        </div>';
                                echo "</a>";

                                // buttons(buy and bag) div
                                echo '<div class="divBtnsRanPro">';

                                    // buy button
                                    echo "<div style='width:40%;'><a src='#' target='_blank' class='adivBtnsRanPro'>";
                                        echo "<button class='btnBuy'>Buy</button>";
                                    echo "</a></div>";

                                    // add to bag button
                                    echo "<div style='width:40%;'><form action='#' method='POST'>";
                                        echo "<input type='submit' value='Bag' name='addToBag' class='addtobag' />";
                                    echo "</form></div>";
                                echo '</div>';
                            echo "</div>";
                        echo "</div>";
                    }
                ?>
            </div>
        </section>
        <hr class="hrbetween">
        <section>
            <div class="rowIndex">
                <div class="col-md-3 col-sm-6 col-12 text-center">
                    <i class="fas fa-shield-alt iLast"></i>
                    <p class="pLast mt-1">Secure Shopping</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12 text-center">
                    <i class="fas fa-money-bill-wave iLast"></i>
                    <p class="pLast mt-1">Save Money</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12 text-center">
                    <i class="fas fa-plane-departure iLast"></i>
                    <p class="pLast mt-1">Fast Shipping</p>
                </div>
                <div class="col-md-3 col-sm-6 col-12 text-center">
                    <i class="fas fa-gifts iLast"></i>
                    <p class="pLast mt-1">Free Gifts</p>
                </div>
            </div>
        </section>

    </main>

    <!-- the gif -->
    <div class="divGifIndex">
        <img src="../pics/gif1.gif" alt="gif" height="100%" width="100%">
    </div>

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