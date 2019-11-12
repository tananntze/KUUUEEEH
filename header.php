 <!-- Nav Bar-->
<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (!isset($_SESSION["totalQty"])) { //if not initialized from session, set it to 0 first
        $_SESSION["totalQty"] = 0;
    }
    if (!isset($_SESSION["subtotal"])) {
        $_SESSION["subtotal"] = 0.0;
    }
    for ($i = 1; $i <= 10; $i++) {
        if (!isset($_SESSION["kueh" . $i. "_qty"])) {
            $_SESSION["kueh" . $i. "_qty"] = 0;
        }
        if (!isset($_SESSION["kueh" . $i. "_orders"])) {
            $_SESSION["kueh" . $i. "_orders"] = array();
        }   
    }
    if (!isset($_SESSION["my_orders"])) {
        $_SESSION["my_orders"] = array();
    }
    $qty = $_SESSION["totalQty"];
?>

<header>
    <nav class="nav navbar navbar-expand-md bg-pink navbar-dark" role="navigation">
        <a class="navbar-brand logocolor" href="#">KUUUEEEH</a>
        <button class="navbar-toggler custom-toggler" type='button' data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="aboutus.php">About Us</a></li>
                <li class ="nav-item"><a href="kuehmenuall.php">Kueh</a></li>
                <li class="nav-item"><a href="contactus.php">Contact Us</a></li>
                <li class="nav-item"><a href="faq.php">FAQ's</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav navbar-nav">
                    <a class ="nav-link" href="" data-toggle="modal" data-target="#orderPopup"><span class="fas fa-directions"> <span id="badgeQuantity" class="badge badge-danger"> <?php echo $qty ?> </span> My Order </span></a>
                    <a class="nav-link" href="login.php"><span class="fas fa-directions">Login</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>