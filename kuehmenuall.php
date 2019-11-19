<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>All Kuehs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/kuehmenuall.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="js/main.js"></script>
    </head>
    
    <body class="overlay">
        <?php include "header.php";
            $conn = connectToDB();
            $sql = "SELECT * FROM product WHERE ";
            $sql .= "status='Active'";
            $result = $conn->query($sql);
            if($result-> num_rows > 0){  
                while ($row = $result->fetch_assoc()) {
                    if (isset($_POST[$row["prodId"]])) {
                        $imgSrc = $row["image"];
                        $kuehName = $row["name"];
                        $description = $row["description"];
                        $category = $row["category"];
                        $kuehPrice = $row["price"];  
                        $_SESSION["kueh".$row["prodId"]."_qty"]++;
                        $kuehTotalPrice = $kuehPrice * $_SESSION["kueh".$row["prodId"]."_qty"];
                        if (sizeof($_SESSION["kueh".$row["prodId"]."_orders"]) == 0) {
                            array_push($_SESSION["kueh".$row["prodId"]."_orders"], $row["prodId"], $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh".$row["prodId"]."_qty"], $kuehTotalPrice);
                        } else {
                        //update the quantity and total price of the kueh
                            $_SESSION["kueh".$row["prodId"]."_orders"][5] = $_SESSION["kueh".$row["prodId"]."_qty"];
                            $_SESSION["kueh".$row["prodId"]."_orders"][6] = $kuehTotalPrice;
                        }
                        addKuehDetails($kuehName, $_SESSION["kueh".$row["prodId"]."_orders"], $kuehPrice);                  
                    }           
                }
                $result->free_result();
                $conn->close();
            }
            function addKuehDetails($kuehName, $kuehArr, $kuehPrice) {
                $index = 0;
                $_SESSION["totalQty"]++;
                $_SESSION["subtotal"] += $kuehPrice;
                $_SESSION["total"] = $_SESSION["subtotal"];
                //if list is empty, the first entry will be added to list
                if (empty($_SESSION["my_orders"])) 
                {
                    array_push($_SESSION["my_orders"], $kuehArr); 
                }

                else 
                {
                    //if list is not empty, but if the name is already in the list, simply update the list
                    for ($index = 0; $index < sizeof($_SESSION["my_orders"]); $index++) {
                        if ($_SESSION["my_orders"][$index][3] == $kuehName) {
                            $_SESSION["my_orders"][$index] = $kuehArr;
                            break;
                        }
                    }
                    if ($index == sizeof($_SESSION["my_orders"])) {
                        array_push($_SESSION["my_orders"], $kuehArr); 
                    }
                }
                header('Location: kuehmenuall.php');    
            }
            ?>
        <div class="container">
            <!-- The animated kueh images for the banner are taken and credited by ladyironchef: Beginnerâ€™s Guide to Kuehs â€“ 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/ -->
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>
        
        <nav class="nav2">
            <ul>
                <li><a href ="#basic">Basic Kuehs</a></li>
                <li><a href ="#character">Kuehs with Character</a></li>
                <li><a href ="#heavyweight">Heavyweight Kuehs</a></li>
            </ul>
        </nav>
        
        <!-- The Basic Kuehs -->
       <form method="post" action="#">
        <section>
            <h1 class="fontheader" id="basic">The Basic Kuehs</h1>

            <div class="d-flex justify-content-center flex-fill flex-wrap">
                <?php                    
                    $conn = connectToDB();

                    $sql = "SELECT * FROM p1_1.product WHERE category='The Basic Kuehs' AND status='Active'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                            ?>
                            <div class="kuehMenu">
                                <figure class="imgholder">
                                    <img class="zoom" src = "<?php echo $row ['image']; ?>" alt = "">
                                    <figcaption>
                                        <?php echo $row['name']; ?> ($ <?php echo $row['price']; ?>): <?php echo $row['description']; ?>
                                    </figcaption>
                                </figure>
                                <button class='btn' type='submit' name='<?php echo $row ['prodId']; ?>'><i class='fa fa-shopping-cart fa-2x'></i></button>
                            </div>
                            <?php 
                    }

                    $result->free_result();
                    $conn->close();
                ?>
            </div>
        </section>

        <!-- The Kuehs with Character -->
        <section>
            <h1 class="fontheader" id="character">Kuehs with Character</h1>

            <div class="d-flex justify-content-center flex-sm-row flex-column flex-wrap">
                <?php
                    $conn = connectToDB();

                    $sql = "SELECT * FROM p1_1.product WHERE category='Kueh with Character' AND status='Active'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {             
                        ?>
                        <div class="kuehMenu"> 
                            <figure class="imgholder">
                                <img class="zoom" src = "<?php echo $row ['image']; ?>" alt = "">
                                <figcaption>
                                    <?php echo $row['name']; ?> ($ <?php echo $row['price']; ?>): <?php echo $row['description']; ?>
                                </figcaption>
                            </figure>
                            <button class='btn' type='submit' name='<?php echo $row ['prodId']; ?>'><i class='fa fa-shopping-cart fa-2x'></i></button>
                        </div>
                <?php
                    }

                    $result->free_result();
                    $conn->close();
                ?>
            </div>
        </section>
        
        <!-- The Heavyweight Kuehs -->
        <section>
            <h1 class="fontheader" id="heavyweight">The Heavyweight Kuehs</h1>

            <div class="d-flex justify-content-center flex-sm-row flex-column flex-wrap">
                <?php
                    $conn = connectToDB();

                    $sql = "SELECT * FROM p1_1.product WHERE category='The Heavyweight Kuehs' AND status='Active'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                        ?>
                        <div class="kuehMenu">
                            <figure class="imgholder">
                                <img class="zoom" src = "<?php echo $row ['image']; ?>" alt = "">
                                <figcaption>
                                    <?php echo $row['name']; ?> ($ <?php echo $row['price']; ?>): <?php echo $row['description']; ?>
                                </figcaption>
                            </figure>
                            <button class='btn' type='submit' name='<?php echo $row ['prodId']; ?>'><i class='fa fa-shopping-cart fa-2x'></i></button>
                        </div>
                <?php
                    }

                    $result->free_result();
                    $conn->close();
                ?>
            </div>
        </section>
       </form>
    </body>
    
    <?php include "footer_include.php" ?>
</html>