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
        foreach ($_SESSION["my_orders"] as $row=>$kueh_array) {
            if (isset($_POST["btnRemove".$row])) {
                //reset the kueh quantity to 0
                $_SESSION["subtotal"] -= $_SESSION["my_orders"][$row][6];
                $_SESSION["total"] -= $_SESSION["my_orders"][$row][6];
                $_SESSION["totalQty"] -= $_SESSION["kueh".$_SESSION["my_orders"][$row][0]."_qty"];
                $_SESSION["kueh".$_SESSION["my_orders"][$row][0]."_qty"] = 0;
                unset($_SESSION["my_orders"][$row]);
                $_SESSION["my_orders"] = array_values($_SESSION["my_orders"]); //reindex my array
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
                    <div class="col-md-10">
                        <section id="paragraph" class="scrollTable">
                            <section id="myOrder text-center">
                            <p id="quantity">Total Quantity: <?php echo $_SESSION["totalQty"]?></p>
                            <?php //display message cart is empty
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
                                . "<th>Price</th>"
                                . "<th>Quantity</th>"
                                . "<th>Total</th>"
                                . "<th>Action</th>"
                                . "</tr>";
                                foreach ($_SESSION["my_orders"] as $row=>$kueh_array) {
                                    echo "<tr>";
                                    for ($c = 1; $c < 7; $c++) {
                                        if ($c == 1) {
                                            echo "<td><img id='imgKueh' src='". $kueh_array[$c] ."' alt='Kueh Order'/></td>";
                                        } else if ($c == 4) {
                                            echo "<td>$" . number_format($kueh_array[$c], 2) . "/pc";
                                        } else if ($c == 6) {
                                            echo "<td>$" . number_format($kueh_array[$c], 2);
                                        } 
                                        else {
                                            echo "<td>" . $kueh_array[$c]. "</td>";  
                                        }
                                    }
                                    echo "<td><a href='kuehmenuall.php' class='btn' id='btnEdit'><span class='fa fa-pencil-square-o'></span>  Edit</a> <form method='post' action=''><button type='submit' class='btn' name='btnRemove".strval($row)."'><span class='fa fa-times'></span> Remove</button></form></td>";
                                    echo "</tr>";
                                }
                                echo "</table>";
                            }
                            ?>
                        </section>
                            <p id="subTotal">Subtotal: <?php echo "$" . number_format($_SESSION["subtotal"], 2)?></p>
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
    <footer class="footer-bs p-2 mb-0">
        <div class="row mx-0">
            <div class="col-md-3 footer-brand animated fadeInLeft">

                <p>© 2019 KUUUEEH</p>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Menu —</h4>

                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="kuehmenuall.php">Kueh</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="faq.php">FAQ's</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Follow Us @</h4>
                <ul class= "list-inline">
                    <li><a class ="fa fa-facebook-square" href="#"> Facebook</a></li>
                    <li><a class="fa fa-twitter-square" href="#"> Twitter</a></li>
                    <li ><a class= "fa fa-instagram" href="#"> Instagram</a></li>
                </ul>
            </div>
        </div>
    </footer>
</html>