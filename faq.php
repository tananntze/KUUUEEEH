<html class="header">

    <head>
        <title>FAQ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/checkout.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="js/main.js"></script>
        <script src="js/myorderspopup.js"></script>
    </head>

    <body class="overlay">

        <header>

            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">

                <a class="navbar-brand" href="#">Kuey Logo</a>

                <button class ="navbar-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">

                    <span class ="navbar-toggler-icon"></span>

                </button>

                <div class ="collapse navbar-collapse" id="navbar">

                    <ul class="nav navbar-nav">

                        <li class ="nav-item"><a href ="home.php">Home</a></li>

                        <li class ="nav-item"><a href="aboutus.php">About Us</a></li>

                        <li class ="nav-item"><a href="kuehmenuall.php">Kueh</a></li>

<!--                            <li class="dropdown nav-item">
                                <a href="" class="dropdown-toggle nav-item" data-toggle="dropdown">

                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">The Basics</a></li>
                                    <li><a href="#">The Ones with Character</a></li>
                                    <li><a href="#">The Heavyweights</a></li>
                                </ul>
                            </li>-->

                        <li class ="nav-item"><a href="contactus.php">Contact Us</a></li>

                        <li class ="nav-item"><a href="faq.php">FAQ's</a></li>

                    </ul>

                    <ul class ="nav navbar-nav ml-auto">

                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="javascript:displayOrder()" data-toggle="modal" data-target="#orderPopup"><span class="fas fa-directions"> <span id="badgeQuantity" class="badge badge-danger"> </span> My Order </span></a>
                            <a class ="nav-link" href="login.php"><span class="fas fa-directions">Login</span></a>

                        </li>

                    </ul>

                </div>  

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
                        <a href="kuehcheckout.php" id="btnCheckout" class="btn btn-block btn-primary">Proceed to Checkout</a>
                    </section>
                </section>
            </section>
        </section>
        
        <div class="container">
            <img src="img/Banner - White.png" alt="bannerimg" class="responsive">
        </div>

        <section>
            <div class="container-fluid">

                <div class =" row sectionheader standardfont text-center pt-4">

                    <div class="col-md-12">

                        <h2 class = fontheader>FAQ</h2>

                    </div>

                </div>
                <section>
                    <div class ="row justify-content-center standardfont pb-5">
                        <div class ="col-md-6">
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="clearfix mb-0">
                                            <a class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Ordering Information <span class="fa fa-angle-down"></span></a>									
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <p class="standardfont">All orders will take approximately 3 to 5 working days upon ordering.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="clearfix mb-0">
                                            <a class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Product Information <span class="fa fa-angle-down"></span></a>									
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <div class="card-body standardfont">Will be including the information here.</div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="clearfix mb-0">
                                            <a class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Business Opportunities<span class="fa fa-angle-down"></span></a>									
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <div class="card-body standardfont">Will be including the information here.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>



        </section>

    </body>
</html>
