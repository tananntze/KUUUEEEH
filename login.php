<html>

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/checkout.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="js/myorderspopup.js"></script>
    </head>

<body>
    <?php include "header.php"?>
    <!--https://bootsnipp.com/snippets/dldxB --> 
    <!-- Login Page -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2>STAFF LOGIN</h2>

            <!-- Login Form -->
            <form action="orders.php">
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email Address">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Forget Password -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
    <!-- Shopping cart -->
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
                    <a href="kuehcheckout.php" id="btnCheckout" class="btn btn-block btn-success">Proceed to Checkout</a>
                </section>
            </section>
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