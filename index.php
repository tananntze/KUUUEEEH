<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="header">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/checkout.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="js/myorderspopup.js"></script>
</head>

<body>
   <?php include "header.php"?>
    <!--Shopping cart -->
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
                                <span class='fa fa-times-circle fa-2x'></span><p> Sorry, your shopping cart is empty!</p>
                                </section>";
                            } else {
                                echo "<table id='tblOrders'></table>"; 
                            }
                            ?>
                    </section>
                    <p id="subTotal">Subtotal:</p>
                    <?php 
                    if ($_SESSION["kuehqty"] == 0) {
                        echo "<a style='pointer-events: none; cursor: default;' id='btnCheckout' class='btn btn-block text-muted'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";                      
                    } else {
                        echo "<a href='customer_checkout.php' id='btnCheckout' class='btn btn-block btn-success'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";                        
                    }
                    ?>
                </section>
            </section>
        </section>
    </section>

    <!--This is the banner for inserting of promotion-->
    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <!--https://www.pexels.com/search/cake/-->
            <div class="carousel-item active" data-interval="2000">
                <img src="img/cake.jpeg" class="d-block w-100" alt="...">
            </div>
            <!--https://www.pexels.com/search/cake/-->
            <div class="carousel-item" data-interval="2000">
                <img src="img/bg2.jpg" class="d-block w-100" alt="...">
            </div>
            
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!--This is a brief section on about us-->
    <section class="aboutSection">
        
        <div class="view overlay col-md-6 d-inline-block">            
            <img src="img/cake.jpeg" class="about-img  img-cake rounded-circle responsive" alt="">
            <div class="mask flex-center rgba-white-strong">
                <div class="button responsive"><a class="white-text"href="aboutus.php">About us</a></div>
            </div>
        </div>

        <div class="aboutus col-md-6 d-inline-block">
            <h1 id="about_us_header">ABOUT US</h1>
            <p>Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today!

Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received.

Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.</p>
        </div>   
        
    </section>

    


</body>

</html>