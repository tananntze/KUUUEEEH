<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kueh Checkout</title>
        <link rel="stylesheet" href="css/checkout.css"/> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/checkout.js"></script>   
    </head>
    <body id="checkout">
        <h2 id="txtCheckout">Checkout</h2>
        <button id="btnShopping" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-arrow-left"></span> Continue Shopping</button>
        <form id="billingForm" action="" method="post">
            <section id="step12" class="col-md-4">
            <section id="step1">
                <h3>1) Enter Billing Details</h3>
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
            <section id="step2">
                <h3>2) Select Delivery Type</h3>
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
                    <section id="collectionInstruction" class="bg-info">
                        <h4>Collection Address</h4>
                        <p id="txtCollectionAddress">    
                        </p>
                        <h4>Collection Instructions</h4>
                        <p>For those waiting to collect their orders, kindly wait for notification before pickup. For both home delivery and collection, feel free to contact us @+6592129999 to enquire both your delivery and pickup timings. Thank you!</p>
                    </section>
                </section>
            </section>
            </section>
            <section id="step34" class="col-md-4">
            <section id="step3">
                <h3>3) Enter Payment Details</h3>
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
                    <section id="step4">
                        <h3>4) Place An Order</h3>                
                        <section id="step4Order">
                            <p>Please confirm your order. Once done, click Place Order.
                                <button id="btnOrder" type="button" class="btn btn-block btn-success">Place Order <span class="glyphicon glyphicon-ok-circle"></span></button>
                            </p>
                        </section>
                    </section>
                </section>
            </section>
        </form>
        <section id="order_sidebar" class="sticky-top col-md-4 bg-info">
            <section id="myOrder">
                <h3 id="txtOrder">My Order</h3>
                <p id="quantity">Total Quantity:</p>
                <table id="tblOrders"></table>
                <button type="button" id="btnEdit" class="btn btn-block btn-primary">Edit Order <span class="glyphicon glyphicon-file"></span></button>
            </section>
            <p id="subTotal">Subtotal:</p>
            <p id="delivery">Delivery:</p>
            <h4 id="totalAmt">Total Amount:</h4>
        </section>
    </body>
</html>