<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/aboutus.css"/> 
        <link rel="stylesheet" href="css/checkout.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="js/myorderspopup.js"></script>
    </head>
    <body class="overlay">
        <?php include "header.php"?>
        <section class="modal fade" id="orderPopup" role="dialog">
            <section class="modal-dialog">
                <section class="modal-content">
                    <section class="modal-header text-center d-block">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 id ="orderHeader">My Order</h3>
                    </section>
                    <section id="paragraph" class="modal-body">
                        <section id="myOrder">
                            <p id="quantity">Total Quantity: <?php echo $_SESSION["kuehqty"]?></p>
                            <?php //display message cart is empty
                            if ($_SESSION["kuehqty"] == 0) {
                                echo "<section class='alert alert-danger' role='alert'>
                                <span class='fa fa-times-circle fa-2x'></span><p> Sorry, your shopping cart is currently empty!</p>
                                </section>";
                            } else {
                                echo "<table id='tblOrders'></table>"; 
                            }
                            ?>
                        </section>
                        <p id="subTotal">Subtotal: <?php echo "$". number_format($_SESSION["subtotal"], 2)?></p>
                        <?php 
                        if ($_SESSION["kuehqty"] == 0) {
                            echo "<a id='btnCheckout' class='btn btn-block text-muted btnDisabled'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";
                        } else {
                            echo "<a href='customer_checkout.php' id='btnCheckout' class='btn btn-block btn-success'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";
                        }
                        ?>
                    </section>
                </section>
            </section>
        </section>
              
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive"id="bannerresize">
        </div>
        
        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader text-center">
                    <div class="col-md-12">
                        <h2 class="abtUsHeader">ABOUT KUUUEEEH</h2>
                        <p class="abtUsCaption">Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today!</p>
                        <p class="abtUsCaption">Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received.</p>
                        <p class="abtUsCaption">Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.</p>
                    </div>
                </div>
                <section>
                    <div class ="row ml-12">
                        <div class ="col-md-6">
                            <iframe width="100%" height="350"
                                src="https://www.youtube.com/embed/NfuroHPHi9E">                               
                            </iframe>
                        </div>
                        <div class ="col-md-6">
                            <iframe width="100%" height="350"
                                src="https://www.youtube.com/embed/QGMRQj5Zk08">                               
                            </iframe>
                        </div>
                    </div>
                </section>
                <section>
                    <div class ="row ml-12 standardfont">
                        <div class ="col-md-3 text-center">
                            <a href="kuehmenuall.php"><img class="zoom rounded-circle" id="btnAngKk" src="img/The Basic Kuehs/Ang Ku Kueh.jpg" alt="Ang Ku Kueh">
                            <figcaption>Check Us Out In Our Menus!</figcaption></a>
                        </div>
                        <div class ="col-md-3 text-center">
                            <a href="kuehmenuall.php"><img class="zoom rounded-circle" id="btnLapis" src="img/The Basic Kuehs/Kueh Lapis.jpg" alt="Kueh Lapis">
                            <figcaption>Check Us Out In Our Menus!</figcaption></a>
                        </div>
                        <div class ="col-md-3 text-center">
                            <a href="kuehmenuall.php"><img class="zoom rounded-circle" id="btnChwee" src="img/Kueh with Character/Chwee Kueh.JPG" alt="Chwee Kueh">
                            <figcaption>Check Us Out In Our Menus!</figcaption></a>
                        </div>
                        <div class ="col-md-3 text-center">
                            <a href="kuehmenuall.php"><img class="zoom rounded-circle" id="btnPng" src="img/Kueh with Character/Png Kueh.jpg" alt="Png Kueh">
                            <figcaption>Check Us Out In Our Menus!</figcaption></a>
                        </div>
                    </div>
                    <div class ="row ml-6 standardfont">
                        <div class ="col-md-6">
                            <h2 class="abtUsSubHeader">Why Choose KUUUEEEH?</h2>
                            <p class="abtUsCaption">At KUUUEEEH, we use ingredients that are natural and our kuehs are always freshly made from the oven.</p> 
                            <p class="abtUsCaption">Uniquely to our kueh shop, our kuehs do not contain preservatives, artificial flavors and contains less sugar and oil. This is in part of our way of ensuring our kuehs are delicious yet promoting healthy lifestyle in Singapore to our valued customers!</p>
                        </div>
                        <div class ="col-md-6">
                            <h2 class="abtUsSubHeader">What kuehs are we selling?</h2>
                            <p class="abtUsCaption">Our menu offers a wide range of kuehs that you, your family and friends are surely craving for!</p>
                            <p class="abtUsCaption">Some of our signature kuehs from our menu includes: Ang Ku Kueh, Chwee Kueh, Kueh Lapis, Kueh Tako and many more that are highly recommended for y'all to try out!</p>
                            <p id="bon_appetit">"Bon Appétit!"</p>
                        </div>
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