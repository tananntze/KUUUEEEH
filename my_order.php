<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="header">

    <head>
        <title>My Orders</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/shoppingcart.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    </head>

    <body background="img/Pink Dots Tumblr BG.jpg">
        <?php
        include "header.php";
        foreach ($_SESSION["my_orders"] as $row => $kueh_array) {;
            if (isset($_POST["btnDecrement".$row])) {
                //Decrement the kueh quantity that is based on kueh ID
                $kueh_id = $_SESSION["my_orders"][$row][0];
                $kueh_name = $_SESSION["my_orders"][$row][3];
                $_SESSION["totalQty"]--;
                $_SESSION["subtotal"] -= $_SESSION["my_orders"][$row][5];
                $_SESSION["total"] -= $_SESSION["my_orders"][$row][5];
                $_SESSION["kueh".$kueh_id."_qty"]--;
                if ($_SESSION["kueh".$kueh_id."_qty"] == 0) {
                    unset($_SESSION["my_orders"][$row]);
                    $_SESSION["my_orders"] = array_values($_SESSION["my_orders"]); 
                } else {
                    $_SESSION["my_orders"][$row][6] = $_SESSION["kueh".$kueh_id."_qty"];
                    $_SESSION["my_orders"][$row][7] -= $_SESSION["my_orders"][$row][5];
                }
                header('Location: my_order.php');
            }
            if (isset($_POST["btnIncrement".$row])) {
                //Increment the kueh quantity that is based on kueh ID
                $kueh_id = $_SESSION["my_orders"][$row][0];
                $kueh_name = $_SESSION["my_orders"][$row][3];
                $_SESSION["totalQty"]++;
                $_SESSION["subtotal"] += $_SESSION["my_orders"][$row][5];
                $_SESSION["total"] += $_SESSION["my_orders"][$row][5];
                $_SESSION["kueh".$kueh_id."_qty"]++;
                $_SESSION["my_orders"][$row][6] = $_SESSION["kueh".$kueh_id."_qty"];
                $_SESSION["my_orders"][$row][7] += $_SESSION["my_orders"][$row][5];
                header('Location: my_order.php');
            }
        }
        ?>
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive"id="bannerresize">
        </div>
        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <section class="row justify-content-center standardfont">
                    <section class="col-md-12">
                        <h2 class = "fontheader">MY ORDER</h2>
                    </section>
                    <div class="col-md-12">
                        <section id="paragraph" class="scrollTable">
                            <section id="myOrder text-center">
                                <p id="quantity">Total Quantity: <?php echo $_SESSION["totalQty"] ?></p>
                                <?php
                                //display message cart is empty
                                if ($_SESSION["totalQty"] == 0) {
                                    echo "<section class='alert alert-danger' role='alert'>
                                    <span class='fa fa-times-circle fa-2x'></span><p> Sorry, your shopping cart is currently empty!</p>
                                    </section>";
                                } else {
                                    echo "<table id='tblOrders'>"
                                    . "<tr>"
                                    . "<th>Image</th>"
                                    . "<th>Category</th>"
                                    . "<th>Name</th>"
                                    . "<th>Description</th>"
                                    . "<th>Price</th>"
                                    . "<th>Quantity</th>"
                                    . "<th>Total</th>"
                                    . "<th>Action</th>"
                                    . "</tr>";
                                    foreach ($_SESSION["my_orders"] as $row => $kueh_array) {
                                        echo "<tr>";
                                        for ($c = 1; $c < 8; $c++) {
                                            if ($c == 1) {
                                                echo "<td><img id='imgKueh' src='" . $kueh_array[$c] . "' alt='Kueh Order'/></td>";
                                            } else if ($c == 5) {
                                                echo "<td>$" . number_format($kueh_array[$c], 2) . "/pc";
                                            } else if ($c == 7) {
                                                echo "<td>$" . number_format($kueh_array[$c], 2);
                                            } else {
                                                echo "<td>" . $kueh_array[$c] . "</td>";
                                            }
                                        }
                                        echo "<td>"
                                        . "<a href='kuehmenuall.php' class='btn' id='btnEdit'><span class='fa fa-pencil-square-o'></span>  Edit</a> <form method='post' action=''><button type='submit' class='btn' name='btnIncrement" . strval($row) . "'><span class='fa fa-plus-circle fa-2x'></span></button><button type='submit' class='btn' name='btnDecrement" . strval($row) . "'><span class='fa fa-minus-circle fa-2x'></span></button></form></td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                }
                                ?>
                            </section>
                            <p id="subTotal">Subtotal: <?php echo "$" . number_format($_SESSION["subtotal"], 2) ?></p>
                            <?php
                            if ($_SESSION["totalQty"] == 0) {
                                echo "<a id='btnCheckout' class='btn btn-block text-muted'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";
                            } else {
                                echo "<a href='customer_checkout.php' id='btnCheckout' class='btn btn-block btn-success'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";
                            }
                            ?>
                        </section>
                    </div>
                </section>
            </div>
        </section>
    </body>
    <?php include "footer_include.php" ?>
</html>