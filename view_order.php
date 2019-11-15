<!DOCTYPE html>

<?php

include "dbConfig.php";

session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}


function getCustomerEmail(){
    global $conn;
    $orderId = $email = "";
    //Get the order Id from the previous page using URL passing in orders.php in line 92
    $orderId = $_GET['orderId'];
    //connect to db and get customer email
    $conn = connectToDB();
    $sql = "SELECT customer_email FROM checkout_details WHERE orderId='$orderId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0){
        $row = $result -> fetch_assoc();
        $email = $row['customer_email'];
        $result -> free_result();
        return $email;
    }
    $conn->close();
}

function getCustomerDetails(){
    global $email, $fname, $lname, $phone;
    $email = getCustomerEmail();
    $conn = connectToDB();
    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = $conn -> query($sql);
    if($result->num_rows > 0){
        $row = $result-> fetch_assoc();
        $fname = $row['fname'];
        $lname = $row['lname'];
        $phone = $row['hp'];
        $result->free_result();
    }
    $conn->close();   
}


getCustomerDetails();


?>

<html>
    <head>
        <title>Kueh Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>

    <body class="overlay">
        <?php include "adminheader.php"?>
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>

        <section id="customer_details">
            <h3>Customer Email:</h3> 
            <h4><?php echo $email ?></h4>
            <h3>Customer Name</h3> 
            <h4><?php echo $fname . $lname ?></h4>
            <h3>Customer Phone</h3> 
            <h4><?php echo $phone ?></h4>    
        </section>

    </body>


</html>


