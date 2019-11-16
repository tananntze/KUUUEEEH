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
        <meta name ="KUUUEEEH website where you find the best kuehs">
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


    <body>
        <?php include "header.php" ?>
        
        <?php
        include "dbConfig.php"; //Get connection
        $conn = connectToDB();
        
        for ($i = 1; $i <= 15; $i++) {
            if (isset($_POST["btnKueh".$i])) {
                $sql = "SELECT * FROM product WHERE ";
                $sql .= "prodId='".($i)."'";
                $result = $conn->query($sql);
                if($result -> num_rows > 0){ 
                    $row = $result->fetch_assoc();  
                    $imgSrc = $row["image"];
                    $kuehName = $row["name"];
                    $description = $row["description"];
                    $category = $row["category"];
                    $kuehPrice = $row["price"];  
                    $_SESSION["kueh".$i."_qty"]++;
                    $kuehTotalPrice = $kuehPrice * $_SESSION["kueh".$i."_qty"];
                    if (sizeof($_SESSION["kueh".$i."_orders"]) == 0) {
                        array_push($_SESSION["kueh".$i."_orders"], $i, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh".$i."_qty"], $kuehTotalPrice);
                    } else {
                    //update the quantity and total price of the kueh
                        $_SESSION["kueh".$i."_orders"][5] = $_SESSION["kueh".$i."_qty"];
                        $_SESSION["kueh".$i."_orders"][6] = $kuehTotalPrice;
                    } 
                    addKuehDetails($kuehName, $_SESSION["kueh".$i."_orders"], $kuehPrice);
                }
            } 
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

            $result->free_result();
            $conn->close();
        ?>
        
        <div class="container">
            <!-- The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/ -->
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>
        
        <nav role="navigation" class="nav2">
            <ul>
                <li><a href ="#basic">Basic Kuehs</a></li>
                <li><a href ="#character">Kuehs with Character</a></li>
                <li><a href ="#heavyweight">Heavyweight Kuehs</a></li>
            </ul>
        </nav>
        
        <!-- The Basic Kuehs -->
        <section>
            <h1 class="fontheader" id="character">The Basic Kuehs</h1>

            <div class="d-flex justify-content-center flex-fill flex-wrap">
                <?php                    
                    $conn = connectToDB();

                    $sql = "SELECT * FROM p1_1.product WHERE category='The Basic Kuehs'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                        $status = $row['status'];
                        if ($status === 'Active')
                        {
                            ?>
                             <figure class="imgholder">
                                <img class="zoom" src = "<?php echo $row ['image']; ?>" alt = "">
                                <figcaption>
                                    <?php echo $row['name']; ?> ($ <?php echo $row['price']; ?> ): <?php echo $row['description']; ?>
                                </figcaption>
                                <div>
                                    <button class='btn' type='submit' id='<?php echo $row ['prodId']; ?>'><i class='fa fa-shopping-cart'></i></button>
                                </div>
                            </figure>
                            <?php 
                        }
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

                    $sql = "SELECT * FROM p1_1.product WHERE category='Kueh with Character'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                        $prodId = $row['prodId'];   
                ?>
                         <figure class="imgholder">
                            <img class="zoom" src = "<?php echo $row ['image']; ?>" alt = "">
                            <figcaption>
                                <?php echo $row['name']; ?> ($ <?php echo $row['price']; ?> ): <?php echo $row['description']; ?>
                            </figcaption>
                            <div>
                                <button class='btn' type='submit' id='<?php echo $row ['prodId']; ?>'><i class='fa fa-shopping-cart'></i></button>
                            </div>
                        </figure>
            </div>
        </section>
        
        <!-- The Heavyweight Kuehs -->
        <section>
            <h1 class="fontheader" id="heavyweight">The Heavyweight Kuehs</h1>

            <div class="d-flex justify-content-center flex-sm-row flex-column flex-wrap">
                <?php
                    $conn = connectToDB();

                    $sql = "SELECT * FROM p1_1.product WHERE category='The Heavyweight Kuehs'";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc())
                    {
                        $prodId = $row['prodId'];   
                ?>
                         <figure class="imgholder">
                            <img class="zoom" src = "<?php echo $row ['image']; ?>" alt = "">
                            <figcaption>
                                <?php echo $row['name']; ?> ($ <?php echo $row['price']; ?> ): <?php echo $row['description']; ?>
                            </figcaption>
                            <div>
                                <button class='btn' type='submit' id='<?php echo $row ['prodId']; ?>'><i class='fa fa-shopping-cart'></i></button>
                            </div>
                        </figure>
                <?php
                    }

                    $result->free_result();
                    $conn->close();
                ?>
            </div>
        </section>
    </body>
    
    <?php include "footer_include.php" ?>

</html>