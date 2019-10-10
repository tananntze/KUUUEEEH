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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/aboutus.css"/> 
        <link rel="stylesheet" href="css/myorderspopup.css"/> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="js/myorderspopup.js"></script>
    </head>
    <body class="overlay">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <nav class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="home.php">Home</a></li>
                        <li class ="nav-item"><a href="#">About Us</a></li>
                        <li class ="nav-item"><a href="kuehmenuall.php">Kueh</a></li>
                        <li class ="nav-item"><a href="contactus.php">Contact Us</a></li>
                        <li class ="nav-item"><a href="faq.php">FAQ's</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="javascript:displayOrder()" data-toggle="modal" data-target="#orderPopup"><span class="fas fa-directions">My Order</span></a>
                            <a class ="nav-link" href="#"><span class="fas fa-directions">Login</span></a>
                        </li>
                    </ul>
                </nav>  
            </nav>
        </header>
        
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
                        <button type="button" class="btn btn-block btn-primary">Edit Order</button>
                        <a href="kuehcheckout.php" id="btnCheckout" class="btn btn-block btn-primary">Proceed to Checkout</a>
                    </section>
                </section>
            </section>
        </section>
        <div class="container">
            <img src="img/Banner - White.png" alt="" class="responsive">
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
                    <div class ="row ml-12 standardfont">
                        <div class ="col-md-3 text-center">
                            <img class="img_kueh rounded-circle" src="img/The Basic Kuehs/Ang Ku Kueh.jpg" alt="Ang Ku Kueh">
                        </div>
                        <div class ="col-md-3 text-center">
                            <img class="img_kueh rounded-circle" src="img/The Basic Kuehs/Kueh Lapis.jpg" alt="Kueh Lapis">
                        </div>
                        <div class ="col-md-3 text-center">
                            <img class="img_kueh rounded-circle" src="img/Kueh with Character/Chwee Kueh.JPG" alt="Chwee Kueh">
                        </div>
                        <div class ="col-md-3 text-center">
                            <img class="img_kueh rounded-circle" src="img/Kueh with Character/Png Kueh.jpg" alt="Png Kueh">
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
            </div>
        </section>
    </body>
</html>