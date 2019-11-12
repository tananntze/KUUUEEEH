<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Kueh Checkout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/customer_checkout.js"></script>
    </head>
    <body>
        <?php 
        include "header.php";
        ?>
        
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive" id="bannerresize">
        </div>
        
        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader standardfont text-center">
                    <div class="col-md-12">
                        <h2 class="fontheader">KUEH CHECKOUT (CUSTOMER DETAILS)</h2>
                    </div>
                </div>
                <form id="customerForm" action="process_customer_checkout.php" method="post">
                    <section class ="row justify-content-left ml-4 standardfont">
                        <div class="col-md-12">
                            <section id="step1">
                                <h3 class ="subheader">Step 1: Enter Customer's Details</h3>
                                <section class="form-group">
                                    <label for="email">*Email address:</label>
                                    <input class="form-control" id="email" name="email" placeholder="Enter your email address" type="email" required="true"></section>
                                    <section class="form-group">
                                        <label for="first_name">*First Name:</label>
                                        <input class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" required="true" pattern="^[a-zA-Z][0-9a-zA-Z .,'-]*$">
                                    </section>
                                    <section class="form-group">
                                        <label for="last_name">*Last Name:</label>
                                        <input class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" required="true" pattern="^[a-zA-Z][0-9a-zA-Z .,'-]*$">
                                    </section>
                                    <section class="form-group">
                                        <label for="mobile_no">*Mobile Number:</label>
                                        <input class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number" type="tel" maxLength="8" required="true" pattern="[0-9]{8}">
                                        <button id="btnDetails" type="submit" class="btn btn-block btn-success">Proceed to Delivery Details  <span class="fa fa-arrow-circle-right"></span></button>
                                    </section>
                            </section>
                        </div>
                    </section>
                </form>
            </section>
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