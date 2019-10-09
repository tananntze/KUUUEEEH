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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/checkout.css"/> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/checkout.js"></script>
    </head>
    <body>
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <nav class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="home.php">Home</a></li>
                        <li class ="nav-item"><a href="aboutus.php">About Us</a></li>
                        <li class ="nav-item"><a href="contactus.php">Contact Us</a></li>
                        <li class ="nav-item"><a href="faq.php">FAQ's</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="#"><span class="fas fa-directions">Login</span></a>
                        </li>
                    </ul>
                </nav>  
            </nav>
        </header>
        
        <div class="container">
            <img src="img/banner.jpg" alt="" class="responsive">
        </div>
        
        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <section class =" row sectionheader standardfont text-center">
                    <section class="col-md-12">
                        <h2 class="fontheader">KUEH CHECKOUT</h2>
                    </section>
                    <section class="col-md-12 text-right">
                        <button id="btnShopping" type="button" class="btn btn-warning">Continue Shopping</button>
                    </section>
                </section>               
                <form id="billingForm" action="" method="post">
                    <section class ="row justify-content-left ml-4 standardfont">
                        <section id="step12" class="col-md-4">
                            <section id="step1">
                                <h3 class ="subheader">1) Enter Billing Details</h3>
                                <section id="paragraph">
                                    <section class="form-group">
                                        <label for="email">*Email address:</label>
                                        <input class="form-control" id="email" name="email" tabindex="1" placeholder="Enter your email address">
                                    </section>
                                    <section class="form-group">
                                        <label for="first_name">*First Name:</label>
                                        <input class="form-control" id="first_name" name="first_name" placeholder="Enter your first name">
                                    </section>
                                    <section class="form-group">
                                        <label for="last_name">*Last Name:</label>
                                        <input class="form-control" id="last_name" name="last_name" placeholder="Enter your last name">
                                    </section>
                                    <section class="form-group">
                                        <label for="address">*Address:</label>
                                        <input class="form-control" id="address" name="address" placeholder="Enter your full address">
                                    </section>
                                    <section class="form-group">
                                        <label for="postal_code">*Postal Code:</label>
                                        <input class="form-control" id="postal_code" name="postal_code" placeholder="Enter your postal code" maxLength="6">
                                    </section>
                                    <section class="form-group">
                                        <label for="mobile_no">*Mobile Number:</label>
                                        <input class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number" maxLength="10">
                                    </section>
                                </section>
                            </section>
                            <section id="step2">
                                <h3 class ="subheader">2) Select Delivery Type</h3>
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
                                        <section id="collectionInstruction">
                                            <h4>Collection Address</h4>
                                            <p id="txtCollectionAddress">    
                                            </p>
                                            <h4>Collection Instructions</h4>
                                            <p>For those waiting to collect their orders, kindly wait for notification before pickup. For both home delivery and collection, feel free to contact us @+6592129999 to enquire both your delivery and pickup timings. Thank you!</p>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section id="step34" class="col-md-4">
                            <section id="step3">
                                <h3 class ="subheader">3) Enter Payment Details</h3>
                                <section id="paragraph">
                                    <section id="step3Radio">
                                        <section class="radio_grp">
                                            <input class="radio_set" type="radio" name="radioPayment" id="payVisa" value="Visa" checked="true"><label class="radio_lbl" for="delVisa">Visa</label><img class="card_logo" src="img/visa.jpg" alt="Credits:https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1/">
                                        </section>
                                        <section class="radio_grp">
                                            <input class="radio_set" type="radio" name="radioPayment" id="payMaster" value="MasterCard"><label class="radio_lbl" for="delMaster">MasterCard</label><img class="card_logo" src="img/mastercard.jpg" alt="Credits:https://newinnpubwinchelsea.co.uk/rooms/visa-mastercard-logo-1/">
                                        </section>
                                        <section class="form-group">
                                            <label for="card_name">*Name Of Card:</label>
                                            <input class="form-control" id="card_name" name="card_name" placeholder="Enter your name of the card">
                                        </section>
                                        <section class="form-group">
                                            <label for="card_number">*16-Digit Card Number:</label>
                                            <input class="form-control" id="card_number" name="card_number" placeholder="Enter your 16 digit card number" maxlength="16">
                                        </section>
                                        <section class="form-group">
                                            <label for="first_name">*CCV Number:</label>
                                            <input class="form-control" id="ccv" name="ccv" placeholder="Enter your CCV card number" maxlength="3">
                                        </section>
                                        <section class="form-group">
                                            <label for="expiry_date">*Card Expiry Date:</label>
                                        </section>  
                                    </section>
                                </section>
                                <section id="step4">
                                    <h3 class ="subheader">4) Place An Order</h3>  
                                    <section id="paragraph">
                                        <section id="step4Order">
                                            <p>Please confirm your order. Once done, click Place Order.
                                                <button id="btnOrder" type="button" class="btn btn-block btn-success">Place Order</button>
                                            </p>
                                        </section>
                                    </section>
                                </section>
                            </section>
                        </section>
                        <section class="sticky-top col-md-4">
                            <h3 class ="subheader">My Order</h3>
                            <section id="paragraph">
                                <section id="myOrder">
                                    <p id="quantity">Total Quantity:</p>
                                    <table id="tblOrders"></table>
                                    <button type="button" id="btnEdit" class="btn btn-block btn-primary">Edit Order</button>
                                </section>
                                <p id="subTotal">Subtotal:</p>
                                <p id="delivery">Delivery:</p>
                                <h4 id="totalAmt">Total Amount:</h4>
                            </section>
                        </section>
                    </section>
                </form>
            </section>
        </section>
    </body>
</html>