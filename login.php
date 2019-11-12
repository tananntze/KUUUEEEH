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
    <?php 
        include "header.php";
    ?>
    <!--https://bootsnipp.com/snippets/dldxB --> 
    <!-- Login Page -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2>STAFF LOGIN</h2>

            <!-- Login Form -->
            <form action="process_login.php" method="POST">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email Address">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
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
                        <p id="quantity">Total Quantity: <?php echo $_SESSION["totalQty"]?></p>
                        <?php //display message cart is empty
                            if ($_SESSION["totalQty"] == 0) {
                                echo "<section class='alert alert-danger' role='alert'>
                                <span class='fa fa-times-circle fa-2x'></span><p> Sorry, your shopping cart is currently empty!</p>
                                </section>";
                            } else {
                                echo "<table id='tblOrders'>"
                                . "<tr>"
                                . "<th>Image</th>"
                                . "<th>Category</th>"
                                . "<th>Name</th>"
                                . "<th>Price</th>"
                                . "<th>Quantity</th>"
                                . "<th>Total</th>"
                                . "<th>Action</th>"
                                . "</tr>";
                                foreach ($_SESSION["my_orders"] as $kueh_array) {
                                    echo "<tr>";
                                    for ($c = 0; $c < 6; $c++) {
                                        if ($c == 0) {
                                            echo "<td><img id='imgKueh' src='". $kueh_array[$c] ."' alt='Kueh Order'/></td>";
                                        } else if ($c == 3) {
                                            echo "<td>$" . number_format($kueh_array[$c], 2) . "/pc";
                                        } else if ($c == 5) {
                                            echo "<td>$" . number_format($kueh_array[$c], 2);
                                        } 
                                        else {
                                            echo "<td>" . $kueh_array[$c]. "</td>";  
                                        }
                                    }
                                    echo "<tr>";
                                }
                                echo "</table>";
                            }
                            ?>
                        </section>
                        <p id="subTotal">Subtotal: <?php echo "$" . number_format($_SESSION["subtotal"], 2)?></p>
                        <?php 
                        if ($_SESSION["totalQty"] == 0) {
                            echo "<a id='btnCheckout' class='btn btn-block text-muted'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";
                        } else {
                            echo "<a href='customer_checkout.php' id='btnCheckout' class='btn btn-block btn-success'>Proceed to Checkout  <span class='fa fa-arrow-circle-right'></span></a></a>";
                        }
                        ?>
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