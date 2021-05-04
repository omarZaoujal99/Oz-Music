<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OzMusic - Admin space</title>
    <link rel="stylesheet" href="admin.css">
    <!-- ----- bootstrap css: ----- -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <!-- header -->
    <header> 
        <nav class="navbar navbar-light bg-light">
            <span class="navbar-brand mb-0 h1 ml-5 text-primary">
                <img src="../pics/logo.png" alt="logo" width="200" height="80">
            </span>
            <a href="../pages/index.php" class="mr-5" style="font-family:serif; font-weight:bold;">Go To The Front</a>
        </nav>
    </header>

    <!-- main -->
    <main>
        <!-- products managment -->
        <section class="PMsec1">
            <div class="PMdiv1sec1">
                <h4 class="h4Admin">Products Managment</h4>

                <!-- table -->
                <div style="overflow: auto;">
                    <table class="tablePM mt-3">
                        <tr>
                            <th class="thPM">ID</th>
                            <th class="thPM">Name</th>
                            <th class="thPM">Description</th>
                            <th class="thPM">Category</th>
                            <th class="thPM">Pic1</th>
                            <th class="thPM">Pic2</th>
                            <th class="thPM">Pic3</th>
                            <th class="thPM">Colors</th>
                            <th class="thPM">Price($)</th>
                        </tr>
                        <?php
                            include_once "../functions/admin.method.php";
                            $res = admin::getAllRowsPro();
                        ?>
                        <?php
                            // including method
                            include_once "../functions/admin.method.php";

                            $page = 0;
                            if(!empty($_GET['page'])){
                                $pageNum = $_GET['page'];
                                $page =5 * ($pageNum - 1);
                            }
                            if(empty($_GET["page"])){
                                $pageNum = 1;
                            }
                            $r = admin::productPagination($page);
                            while($row = $r->fetch()){
                                $re = admin::selProColors($row[0]);
                                $colors = "";
                                while($row2 = $re->fetch()){
                                    $colors .= $row2[2] . "<br>";
                                }
                                echo "<tr class='trPro'>";
                                    echo "<form action='../actions/CRUDPro.action.php' method='POST'>";
                                    echo "<td><input type='text' class='classPro' value='$row[0]' name='idPro' readonly style='width:40px;text-align:center;'></td>";
                                        echo '<input type="hidden" name="page" value="'. $res .'">';
                                        echo "<td><input type='text' value='$row[1]' name='namePro' class='inpTablePro'></td>";
                                        echo "<td><textarea type='text' name='descPro' rows='4' class='inpTablePro areaDeqs'>$row[2]</textarea></td>";
                                        echo "<td><input type='text' value='$row[3]' name='categoryPro' class='inpTablePro'></td>";
                                        echo "<td><a href='$row[4]' target='_blank'><img src='$row[4]' alt='pic1' class='picPro'></a></td>";
                                        echo "<td><a href='$row[5]' target='_blank'><img src='$row[5]' alt='pic2' class='picPro'></a></td>";
                                        echo "<td><a href='$row[6]' target='_blank'><img src='$row[6]' alt='pic3' class='picPro'></a></td>";
                                        echo "<td class='pl-4 pr-4'>$colors</td>";
                                        echo "<td><input type='text' value='$row[7]' name='pricePro' class='inpTablePro'></td>";
                                        echo "<td><input type='button' name='addColor' value='Add Color' class='showClick btnsCruid' data-id='$row[0]' id='$row[0]' style='background-color:green;'></td>";
                                        echo "<td><input type='submit' value='Update' name='btnupdatepro' class='btnsCruid' style='background-color:purple;'></td>";
                                        echo "<td><input type='submit' value='Remove' name='btndeletepro' class='btnsCruid' style='background-color:red;'></td>";
                                        echo "<input type='hidden' value='". $pageNum ."' name='pageNumber' />"; 
                                        echo "</form>";
                                echo "</tr>";
                            }
                            $r->closeCursor();
                        ?>
                    </table>
                </div>
                <div class="PMdiv2sec1">
                    <button class="btnAddPro" id="addPro">Add Product</button>
                    <div class="divAddPro" id="divAddPro">
                        <h6 class="h6PM">Add Product</h6>
                        <form action="../actions/adminAddPro.action.php" id="frmAddPro" method="post" enctype="multipart/form-data">
                            <input type="text" name="product_name" required class="inpAP mt-3" placeholder="Name of product"><br>
                            <textarea name="product_desc" class="teAP" required placeholder="Description" rows="4"></textarea><br>
                            <select name="selCategory" required class="teAP mb-3">
                                <option disabled selected>Select Category</option>
                                <option value="machines">Machines</option>
                                <option value="audio">Audio</option>
                                <option value="other">Other</option>
                            </select><br>
                            <label for="pic1"><strong>Add picture N°1: </strong></label>
                            <input type="file" id="pic1" name="product_pic1" required multiple accept=".jpg,.png,.jpeg"><br>
                            <label for="pic2"><strong>Add picture N°2: </strong></label>
                            <input type="file" id="pic2" name="product_pic2" required multiple accept=".jpg,.png,.jpeg"><br>
                            <label for="pic3"><strong>Add picture N°3: </strong></label>
                            <input type="file" id="pic3" name="product_pic3" required multiple accept=".jpg,.png,.jpeg"><br>
                            <input type="text" name="product_price" placeholder="Add a price" required class="inpAP"><br>
                            <input type="submit" name="btnSubAddPro" class="inpSubAdd">
                        </form>
                        <button class="btnCloseAddPro" id="ClosePro">Close</button>
                    </div>
                </div>
                <div style="width: 100%;text-align:center;">
                    <ul class="pagination justify-content-center mt-5 ulPagination">
                        <?php
                            for($i = 1; $i <= $res; $i++){?>
                                <li class='page-item <?php if($pageNum == $i){echo "active";}?>'>
                                    <a class='page-link' href='admin.php?page=<?=$i?>'><?=$i?></a>
                                </li>
                            <?php
                            }
                            ?>
                    </ul>
                </div>
            </div>
        </section>

        <!-- div add color -->
        <div id="divAddingColor" class="divAddColor1" style="display: none">
            <div class="divAddColor2">
                <h4 class="h4Admin mb-5">Add Color ?</h4>
                <form action="../actions/addColor.action.php" id="formAddColor" method="POST" enctype="multipart/form-data">
                    <label for="addPic"><strong>Add picture: </strong></label>
                    <input type="file" name="colorPic" required id="addPic" multiple accept=".jpg,.png,.jpeg"><br>
                    <select name="colors" id="selColors" class="selColor" required>
                        <option value="0" selected disabled>Select a color</option>
                        <option value="black">Black</option>
                        <option value="blue">Blue</option>
                        <option value="brown">Brown</option>
                        <option value="gold">Gold</option>
                        <option value="green">Green</option>
                        <option value="grey">Grey</option>
                        <option value="orange">Orange</option>
                        <option value="red">Red</option>
                        <option value="silver">Silver</option>
                        <option value="yellow">Yellow</option>
                        <option value="white">White</option>
                    </select><br>
                    <input type="submit" name="btnSubCol" value="Add" id="btnSubAddColor" class="inpSubAdd">
                    <input type="hidden" id="proId" name="idOfPro" value='' style="background-color: red;">
                    <input type="hidden" name="page" value='<?php echo $pageNum ?>'>
                </form>
                <button id="btnCloseAddColor" class="btnCloseAddPro">Close</button>
            </div>
        </div>
    </main>
<!-- ----- bootstrap js: ----- -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- ----- JQuery ------ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- my scripts -->
<script src="admin.js"></script>
</body>
</html>