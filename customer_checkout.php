<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
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
        <script src="js/customer_checkout.js"></script>
    </head>
    <body>
        <?php include "header.php";
        //redirect users back to home page if total kueh quantity is resetted back to 0 (after session is killed due to successful checkout)
        if ($_SESSION["totalQty"] == 0) {
            header("Location: index.php");
        }
        ?>
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive" id="bannerresize">
        </div>

        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader standardfont text-center">
                    <div class="col-md-12">
                        <h1 class="fontheader">KUEH CHECKOUT (CUSTOMER DETAILS)</h1>
                    </div>
                </div>
                <form id="customerForm" action="process_customer_checkout.php" method="post">
                    <section class ="row justify-content-left ml-4 standardfont">
                        <div class="col-md-12">
                            <section id="step1">
                                <h3 class ="subheader">Step 1: Enter Customer's Details</h3>
                                <section class="form-group">
                                    <label for="email">*Email address:</label>
                                    <input class="form-control" id="email" name="email" placeholder="Enter your email address" type="email" required></section>
                                <section class="form-group">
                                    <label for="first_name">*First Name:</label>
                                    <input class="form-control" id="first_name" name="first_name" placeholder="Enter your first name" pattern="^[a-zA-Z][0-9a-zA-Z .,'-]*$">
                                </section>
                                <section class="form-group">
                                    <label for="last_name">*Last Name:</label>
                                    <input class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" pattern="^[a-zA-Z][0-9a-zA-Z .,'-]*$">
                                </section>
                                <section class="form-group">
                                    <label for="mobile_no">*Mobile Number:</label>
                                    <input class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter your mobile number" type="tel" maxLength="8" pattern="[0-9]{8}">
                                    <button id="btnDetails" type="submit" class="btn btn-block btn-success">Proceed to Delivery Details  <span class="fa fa-arrow-circle-right"></span></button>
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