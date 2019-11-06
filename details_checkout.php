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
        <link rel="stylesheet" href="css/checkout.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/details_checkout.js"></script>
    </head>
    <body>
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
                            <p id="quantity">Total Quantity:</p>
                            <table id="tblOrders"></table>
                        </section>
                        <p id="subTotal">Subtotal:</p>
                        <p id="delivery">Delivery:</p>
                        <h4 id="totalAmt">Total Amount:</h4>
                    </section>
                </section>
            </section>
        </section>
        
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive">
        </div>
        
        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader standardfont text-center">
                    <div class="col-md-12">
                        <h2 class="fontheader">KUEH CHECKOUT</h2>
                    </div>
                </div>
                <form id="customerForm" action="process_customer_checkout.php" method="post">
                    <section class ="row justify-content-center ml-4 standardfont">
                        <div class="col-md-12">
                            <section id="step1">
                            <h3 class ="subheader">1) Select Delivery Type</h3>
                            <section id="paragraph">
                                <section id="step2Radio">
                                    <section class="radio_grp">
                                        <input class="radio_set" type="radio" name="radioDel" id="radioHome" value="delFast" checked="true"><label class="radio_lbl" for="delHome">Home Delivery</label>
                                        <p id="txtHomeAddress"></p>
                                        <p id="txtHomeDuration">Approximately 45-60 minutes</p>
                                        <p id="deliveryHomeCost">Delivery Cost: $5.00</p>
                                    </section>
                                    <section class="radio_grp">
                                        <input class="radio_set" type="radio" name="radioDel" id="radioStore" value="delNormal"><label class="radio_lbl" for="delNormal">Collect at our store</label>
                                        <p id="txtStoreAddress"></p>
                                        <p id="deliveryHomeCost">Delivery Cost: Free</p>
                                    </section>
                                    <!--<section id="collectionInstruction">
                                        <h4>Collection Address</h4>
                                        <p id="txtCollectionAddress">
                                        <h4>Collection Instructions</h4>
                                        <p>For those waiting to collect their orders, kindly wait for notification before pickup. For both home delivery and collection, feel free to contact us @+6592129999 to enquire both your delivery and pickup timings. Thank you!</p>
                                    </section>-->
                                </section>
                            </section>
                        </section>
                        </div>
                    </section>
                    <section class ="row justify-content-left ml-4 standardfont">
                        <div class="col-md-12">
                            <section id="step2">
                                <h3 class ="subheader">2) Enter Customer's Details</h3>
                                <section id="paragraph">
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
                                        <!--<section class="form-group">
                                            <label for="address">*Address:</label>
                                            <input class="form-control" id="address" name="address" placeholder="Enter your full address" type="text" required="true">
                                        </section>-->
                                        <!--<section class="form-group">
                                            <label for="postal_code">*Postal Code:</label>
                                            <input class="form-control" id="postal_code" name="postal_code" placeholder="Enter your postal code" type="tel" maxLength="6" required="true" pattern="[0-9]{6}">
                                        </section>-->
                                        <section class="form-group">
                                            <label for="mobile_no">*Mobile Number:</label>
                                            <input class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number" type="tel" maxLength="8" required="true" pattern="[0-9]{8}">
                                        </section>
                                    <button id="btnDetails" type="submit" class="btn btn-block btn-success">Proceed to Step 3  <span class="fa fa-arrow-circle-right"></span></button>
                                </section>
                            </section>
                    </section>
                </form>
                        <!--<div class="col-md-6">
                            <section id="step3">
                                <h3 class ="subheader">3) Enter Payment Details</h3>
                                <section id="paragraph">
                                    <section id="step3Radio">
                                        <section class="radio_grp">-->
                                            <!--The Image source is taken and credited by: https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1-->
                                            <!--<input class="radio_set" type="radio" name="radioPayment" id="payVisa" value="Visa" checked="true"><label class="radio_lbl" for="delVisa">Visa</label><img class="card_logo" src="img/visa.jpg" alt="Credits:https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1/">
                                        </section>
                                        <section class="radio_grp">-->
                                            <!--The Image source is taken and credited by: https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1-->
                                            <!--<input class="radio_set" type="radio" name="radioPayment" id="payMaster" value="MasterCard"><label class="radio_lbl" for="delMaster">MasterCard</label><img class="card_logo" src="img/mastercard.jpg" alt="Credits:https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1/">
                                        </section>
                                        <section class="form-group">
                                            <label for="card_name">*Name Of Card:</label>
                                            <input class="form-control" id="card_name" name="card_name" placeholder="Enter your name of the card" type="name" required="true" pattern="^[a-zA-Z][0-9a-zA-Z .,'-]*$">
                                        </section>
                                        <section class="form-group">
                                            <label for="card_number">*16-Digit Card Number:</label>
                                            <input class="form-control" id="card_number" name="card_number" placeholder="Enter your 16 digit card number" type="tel" maxlength="16" required="true" pattern="[0-9]{16}">
                                        </section>
                                        <section class="form-group">
                                            <label for="first_name">*CCV Number:</label>
                                            <input class="form-control" id="ccv" name="ccv" placeholder="Enter your CCV card number" type="tel" maxlength="3" required="true" pattern="[0-9]{3}">
                                        </section>
                                        <section class="form-group">
                                            <label for="expiry_month">*Card Expiry Month (in MM):</label>
                                            <select class="custom-select" id="expiry_month" name="expiry_month">
                                                <option selected>01</option>
                                                <option>02</option>
                                                <option>03</option>
                                                <option>04</option>
                                                <option>05</option>
                                                <option>06</option>
                                                <option>07</option>
                                                <option>08</option>
                                                <option>09</option>
                                                <option>10</option>
                                                <option>11</option>
                                                <option selected>12</option>
                                            </select>
                                        </section>
                                        <section class="form-group">
                                            <label for="expiry_year">*Card Expiry Year (in YYYY):</label>
                                            <select class="custom-select" id="expiry_year" name="expiry_year">
                                                <option selected>2019</option>
                                                <option>2020</option>
                                                <option>2021</option>
                                                <option>2022</option>
                                                <option>2023</option>
                                                <option>2024</option>
                                                <option>2025</option>
                                                <option>2026</option>
                                                <option>2027</option>
                                                <option>2028</option>
                                                <option>2029</option>
                                                <option>2030</option>
                                                <option>2031</option>
                                                <option>2032</option>
                                                <option>2033</option>
                                                <option>2034</option>
                                            </select>
                                        </section>  
                                    </section>
                                </section>
                            </section>
                            <p id="txtConfirm">Please confirm your order. Once done, click Place Order.</p>
                            <button id="btnOrder" type="submit" class="btn btn-block btn-success">Place Order  <span class="fa fa-clipboard"></span></button>
                        </div>-->
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