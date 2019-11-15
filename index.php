<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<<<<<<< HEAD
<html lang ="en" class="header">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    </head>

    <body>
        =======
    <html class="header">

        <head>
            <title>Home</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="css/home.css">
            <link rel="stylesheet" href="css/shoppingcart.css"/>
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        </head>

        <body>
            <?php
            include "header.php";
            if (isset($_SESSION["checkout_successful"])) {
                unset($_SESSION["checkout_successful"]);
                session_destroy();
                header("Location: index.php");
            }
            ?>
            <?php
            include "header.php";

            define("DBHOST", "161.117.122.252");
            define("DBNAME", "p1_1");
            define("DBUSER", "p1_1");
            define("DBPASS", "F3ms97bpZA");

            function connectToDB() {

                global $file_path;

                $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

                if ($conn->connect_error) {
                    $errorMsg = "Connection failed: " . $conn->connect_error;
                    $success = false;
                } else {

                    $stmt = $conn->prepare("SELECT image FROM p1_1.promotion");
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row_data = $result->fetch_assoc();
                    $file_path = $row_data['image'];
                    $conn->close();
                }
            }

            connectToDB();
            ?>

            <!--This is the banner for inserting of promotion-->
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!--https://www.pexels.com/search/cake/-->
                    <div class="carousel-item active" data-interval="2000">
                        <img id = "updatebanner"src="<?php echo $file_path ?>" class="d-block w-100" alt="...">
                        <!--<h1><?php echo $file_path; ?></h1>-->
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
                    <!--        need to be able to update the image apon uploading of banner from admin page-->
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