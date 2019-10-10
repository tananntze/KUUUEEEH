<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="header">
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/checkout.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="js/main.js"></script>
        <script src="js/myorderspopup.js"></script>
    </head>

    <body class="overlay">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler custom-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <nav class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="home.php">Home</a></li>
                        <li class ="nav-item"><a href="aboutus.php">About Us</a></li>
                        <li class ="nav-item"><a href="kuehmenuall.php">Kueh</a></li>
                        <li class ="nav-item"><a href="#">Contact Us</a></li>
                        <li class ="nav-item"><a href="faq.php">FAQ's</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="javascript:displayOrder()" data-toggle="modal" data-target="#orderPopup"><span class="fas fa-directions"> <span id="badgeQuantity" class="badge badge-danger"> </span> My Order </span></a>
                            <a class="nav-link" href="login.php"><span class="fas fa-directions">Login</span></a>
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
                        <a href="kuehcheckout.php" id="btnCheckout" class="btn btn-block btn-primary">Proceed to Checkout  <span class="fa fa-arrow-circle-right"></span></a></a>
                    </section>
                </section>
            </section>
        </section>

        <div class="container">
            <img src="img/Banner - White.png" alt="" class="responsive "id="bannerresize">
        </div>

        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <section class =" row sectionheader standardfont text-center">
                    <section class="col-md-12">
                        <h2 class = "fontheader">CONTACT</h2>
                    </section>
                </section>
                <section class ="row justify-content-left ml-4 standardfont">
                    <section class ="col-md-6">
                        <h3 class ="subheader">Contact Information</h3>
                        <section id="paragraph">
                            <p class="contactInfo">Telephone number : +65 6599 5599</p>
                            <p class="contactInfo"> Email : Kueh_for_you@kuey4you.com</p>
                            <p class="contactInfo"> 172 Ang Mo Kio Avenue 8, Singapore 567739</p>
                            <p class="contactInfo"> Business Hours: Mondays to Sundays 10.00 AM to 10.00 PM</p>
                            <p class="contactInfo"> Instagram : www.instagram.com/Kuey4you </p>
                            <p class="contactInfo"> Facebook : www.facebook.com/Kuey4you </p>
                        </section>                       
                    </section>
                    <section class ="col-md-6">
                        <h3 class ="subheader"> Location </h3>
                        <section class="embed-responsive embed-responsive-16by9">
                            <iframe class ='embed-responsive-item' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1274.6247559636176!2d103.84831020185078!3d1.3777725466679476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da16e96db0a1ab%3A0x3d0be54fbbd6e1cd!2sSingapore%20Institute%20of%20Technology%20(SIT%40NYP)!5e0!3m2!1sen!2ssg!4v1570000602036!5m2!1sen!2ssg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </section>
                    </section>
                </section>
                <section class ="row justify-content-center ml-4 standardfont pt-5">
                    <section class =' col-md-4'>
                    </section>
                    <section class =' col-md-4'>
                        <h3 class ="subheader">Get in Touch with us here!</h3>
                        <form name="myForm" action=""
                              onsubmit="return validateForm()" method="post">
                            <section class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="" maxlength="30">
                            </section>
                            <section class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address" name="email"maxlength="50">
                            </section>
                            <section class="form-group">
                                <textarea class="form-control"maxlength="450" rows="3"></textarea>
                            </section>
                            <input type="submit" class="btn btn-secondary btn-block"  value="Submit" >
                        </form>
                    </section>
                    <section class =' col-md-4'></section>
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
                        <li><a href="home.php">Home</a></li>
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
