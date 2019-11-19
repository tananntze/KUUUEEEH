<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs" content="Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today! Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received. Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css"/> 
        <link rel="stylesheet" href="css/shoppingcart.css"/>
        <link rel="stylesheet" href="css/aboutus.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    </head>
    <body class="overlay">
        <?php include "header.php";
        ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive" id="bannerresize">
        </div>

        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <section class =" row sectionheader text-center">
                    <section class="col-md-12">
                        <h2 class="abtUsHeader">ABOUT KUUUEEEH</h2>
                        <p class="abtUsCaption">Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today!</p>
                        <p class="abtUsCaption">Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received.</p>
                        <p class="abtUsCaption">Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.</p>
                    </section>
                </section>
                <section>
                    <section class ="row md-12">
                        <!--Video 1 Credit: https://www.youtube.com/watch?v=NfuroHPHi9E-->
                        <section class ="col-md-6">
                            <video id="video1" height="350" controls>
                                <source src="video/kueh_video_1.mp4" type="video/mp4">
                            </video> 
                        </section>
                        <!--Video 2 Credit: https://www.youtube.com/watch?v=0_p_qL1WXI0-->
                        <section class ="col-md-6">
                            <video id="video2" height="350" controls>
                                <source src="video/kueh_video_2.mp4" type="video/mp4">
                            </video> 
                        </section>
                    </section>
                </section>
                <section>
                    <section class ="row ml-12 standardfont">
                        <section class ="col-md-3 text-center">
                            <a href="kuehmenuall.php">
                                <figure>
                                   <img class="zoom rounded-circle" id="btnAngKk" src="img/The Basic Kuehs/Ang Ku Kueh.jpg" alt="Ang Ku Kueh"/>
                                   <figcaption><span>Check Us Out In Our Menus!</span></figcaption>
                                </figure>
                            </a>
                        </section>
                        <section class ="col-md-3 text-center">
                            <a href="kuehmenuall.php">
                                <figure>
                                   <img class="zoom rounded-circle" id="btnLapis" src="img/The Basic Kuehs/Kueh Lapis.jpg" alt="Kueh Lapis"/>
                                   <figcaption><span>Check Us Out In Our Menus!</span></figcaption>
                                </figure>
                            </a>
                        </section>
                        <section class ="col-md-3 text-center">
                            <a href="kuehmenuall.php">
                                <figure>
                                   <img class="zoom rounded-circle" id="btnChwee" src="img/Kueh with Character/Chwee Kueh.JPG" alt="Chwee Kueh"/>
                                   <figcaption><span>Check Us Out In Our Menus!</span></figcaption>
                                </figure>
                            </a>
                        </section>
                        <section class ="col-md-3 text-center">
                            <a href="kuehmenuall.php">
                                <figure>
                                   <img class="zoom rounded-circle" id="btnPng" src="img/Kueh with Character/Png Kueh.jpg" alt="Png Kueh">
                                   <figcaption><span>Check Us Out In Our Menus!</span></figcaption>
                                </figure>
                            </a>
                        </section>
                    </section>
                    <section class ="row ml-6 standardfont">
                        <section class ="col-md-6">
                            <h2 class="abtUsSubHeader">Why Choose KUUUEEEH?</h2>
                            <p class="abtUsCaption">At KUUUEEEH, we use ingredients that are natural and our kuehs are always freshly made from the oven.</p> 
                            <p class="abtUsCaption">Uniquely to our kueh shop, our kuehs do not contain preservatives, artificial flavors and contains less sugar and oil. This is in part of our way of ensuring our kuehs are delicious yet promoting healthy lifestyle in Singapore to our valued customers!</p>
                        </section>
                        <section class ="col-md-6">
                            <h2 class="abtUsSubHeader">What kuehs are we selling?</h2>
                            <p class="abtUsCaption">Our menu offers a wide range of kuehs that you, your family and friends are surely craving for!</p>
                            <p class="abtUsCaption">We offer 3 different types of Kuehs: Kueh with Character, The Basic Kuehs &amp; The Heavyweight Kuehs respectively so that our customers can choose a variety of kuehs to enjoy!</p>
                            <p class="abtUsCaption">Some of our signature kuehs from our menu includes: Ang Ku Kueh, Chwee Kueh, Kueh Lapis, Kueh Tako and many more that are highly recommended for y'all to try out!</p>
                            <p id="bon_appetit">"Bon Appétit!"</p>
                        </section>
                    </section>
                </section>
            </div>
        </section>
</body>
<?php include "footer_include.php" ?>
</html>