 <!-- Nav Bar-->
<?php
    include "dbConfig.php";
    if (session_status() == PHP_SESSION_NONE) {
        session_start();   
    }
    if (!isset($_SESSION["totalQty"])) { //if not initialized from session, set it to 0 first
        $_SESSION["totalQty"] = 0;
    }
    $qty = $_SESSION["totalQty"];
    if (!isset($_SESSION["subtotal"])) {
        $_SESSION["subtotal"] = 0.0;
    }
    if (!isset($_SESSION["delivery"])) {
        $_SESSION["delivery"] = 0.0;
    }
    if (!isset($_SESSION["total"])) {
        $_SESSION["total"] = 0.0;
    }
    $conn = connectToDB();
    $sql = "SELECT * FROM product WHERE ";
    $sql .= "status='Active'";
    $result = $conn->query($sql);
    if($result-> num_rows > 0){
        while ($row = $result->fetch_assoc()) {
            if (!isset($_SESSION["kueh" . $row["prodId"]. "_qty"])) {
                $_SESSION["kueh" . $row["prodId"]. "_qty"] = 0;
            }
            if (!isset($_SESSION["kueh" . $row["prodId"]. "_orders"])) {
                $_SESSION["kueh" . $row["prodId"]. "_orders"] = array();
            }     
        }
    }
    $result->free_result();
    $conn->close();
    if (!isset($_SESSION["my_orders"])) {
        $_SESSION["my_orders"] = array();
    }
?>

<header>
    <nav class="nav navbar navbar-expand-md bg-pink navbar-dark">
        <a class="navbar-brand logocolor" href="index.php">KUUUEEEH</a>
        <button class="navbar-toggler custom-toggler" type='button' data-toggle="collapse" aria-label="navbarToggle" data-target="#navbar">
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
                    <a class ="nav-link" href="my_order.php"><span class="fas fa-directions"> <span id="badgeQuantity" class="badge badge-danger"> <?php echo $qty ?> </span> My Order </span></a>
                    <a class="nav-link" href="login.php"><span class="fas fa-directions">Login</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>