<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" class="header">
    <head>
        <title>Kueh Checkout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/delivery_checkout.js"></script>
    </head>
    <body>
        <?php include "header.php";
        if ($_SESSION["totalQty"] == 0) {
            header("Location: index.php");
        }
        ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/BannerWhite.png" alt="" class="responsive" id="bannerresize">
        </div>

        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader standardfont text-center">
                    <div class="col-md-12">
                        <h1 class="fontheader">KUEH CHECKOUT (DELIVERY DETAILS)</h1>
                    </div>
                </div>
                <form id="detailsForm" action="process_details_checkout.php" method="post">
                    <section class ="row justify-content-center ml-4 standardfont">
                        <section class="col-md-12">
                            <section id="step2">
                                <h3 class ="subheader">Step 2: Select Delivery Type</h3>
                                <section id="paragraph">
                                    <section id="step2Radio">
                                        <section class="radio_grp">
                                            <input class="radio_set" type="radio" name="radioDel" id="radioHome" value="radioHome" checked><label class="radio_lbl" for="radioHome">Home Delivery</label>
                                            <p id="txtHomeAddress"></p>
                                            <p id="txtHomeDuration">Approximately 45-60 minutes</p>
                                            <p id="deliveryHomeCost">Delivery Cost: Subtotal (<?php echo "$" . number_format($_SESSION["subtotal"], 2)?>) + Delivery Charge ($5.00)</p>
                                        </section>
                                        <section class="radio_grp">
                                            <input class="radio_set" type="radio" name="radioDel" id="radioStore" value="radioStore"><label class="radio_lbl" for="radioStore">Collect at our store</label>
                                            <p id="txtStoreAddress"></p>
                                            <p id="txtStoreDuration">Approximately 45-60 minutes</p>
                                            <p id="deliveryStoreCost">Delivery Cost: Subtotal (<?php echo "$" . number_format($_SESSION["subtotal"], 2)?>) + Delivery Charge (Free)</p>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                    </section>
                    <section class ="row justify-content-center ml-4 standardfont">
                        <div class="col-md-12">
                            <section id="step3">
                                <h3 class ="subheader">Step 3: Enter Delivery & Billing Details</h3>
                                <section id="paragraph2">
                                    <section id="collectionInstruction">
                                        <h4>Collection Address</h4>
                                        <p id="txtCollectionAddress">
                                        <h4>Collection Instructions</h4>
                                        <p>For those waiting to collect their orders, kindly wait for notification before pickup. For both home delivery and collection, feel free to contact us @+6592129999 to enquire both your delivery and pickup timings. Thank you!</p>
                                    </section>
                                </section>
                                <section class="form-group">
                                    <label for="address">*Address:</label>
                                    <input class="form-control" id="address" name="address" placeholder="Enter your full address" type="text" required>
                                </section>
                                <section class="form-group">
                                    <label for="postal_code">*Postal Code:</label>
                                    <input class="form-control" id="postal_code" name="postal_code" placeholder="Enter the 6 digit Singapore postal code" type="tel" maxLength="6" required pattern="[0-9]{6}">
                                </section>
                                <section id="step3Radio">
                                    <label for="payVisa">*Select a card:</label>
                                    <section class="radio_grp">
                                        <!--The Image source is taken and credited by: https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1-->
                                        <input class="radio_set" type="radio" name="radioPayment" id="payVisa" value="Visa" checked><label class="radio_lbl" for="payVisa">Visa</label><img class="card_logo" src="img/visa.jpg" alt="Credits:https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1/">
                                    </section>
                                    <section class="radio_grp">
                                        <!--The Image source is taken and credited by: https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1-->
                                        <input class="radio_set" type="radio" name="radioPayment" id="payMaster" value="MasterCard"><label class="radio_lbl" for="payMaster">MasterCard</label><img class="card_logo" src="img/mastercard.jpg" alt="Credits:https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1/">
                                    </section>
                                    <section class="form-group">
                                        <label for="card_name">*Name Of Card:</label>
                                        <input class="form-control" id="card_name" name="card_name" placeholder="Enter your name of the card" type="text" required pattern="^[a-zA-Z][0-9a-zA-Z .,'-]*$">
                                    </section>
                                    <section class="form-group">
                                        <label for="card_number">*16-Digit Card Number:</label>
                                        <input class="form-control" id="card_number" name="card_number" placeholder="Enter your 16 digit card number" type="tel" maxlength="16" required pattern="[0-9]{16}">
                                    </section>
                                    <section class="form-group">
                                        <label for="ccv">*CCV Number:</label>
                                        <input class="form-control" id="ccv" name="ccv" placeholder="Enter your 3 digit CCV number" type="tel" maxlength="3" required pattern="[0-9]{3}">
                                    </section>
                                    <section class="form-group">
                                        <label for="expiry_month">*Card Expiry Month (in MM):</label>
                                        <select class="custom-select" id="expiry_month" name="expiry_month">
                                            <option>01</option>
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
                                        <p id="txtConfirm">Please confirm your order. Once done, click Place Order.</p>
                                        <button id="btnOrder" type="submit" class="btn btn-block btn-success">Place Order  <span class="fa fa-clipboard"></span></button>
                                    </section>  
                                </section>
                            </section>
                        </div>
                    </section>
                </form>
            </section>
        </section>
    </body>
    <?php include "footer_include.php" ?>
</html>