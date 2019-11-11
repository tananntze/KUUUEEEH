<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Promotion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/promotions.js"></script>   
    </head>
    
    <body id="overlay">
        <?php include "adminheader.php" ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>

        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <div class ="row justify-content-center standardfont">
                    <div class="col-md-12">
                        <h2 class="fontheader">Add New Promotions Dashboard</h2>
                    </div>
                    <div class="col-md-12">
                        <section id="paragraph">
                            <form id="promoForm" action="processpromotions.php" method="post" enctype="multipart/form-data">
                                <section class="form-group">
                                    <label>*Promotion Banner:</label>
                                    <input id="file_input" type="file" name="file_input" accept="image/*" style="display:none;"/>
                                    <button id="banner_file_upload" type="button" class="btn btn-primary"><span class="fa fa-upload"></span> Upload Promotion Banner</button>
                                    <section id="banner_dropzone">
                                        <img id="banner">
                                    </section>
                                    <p id="filePath">No File Path specified</p>
                                </section>
                                <section class="form-group">
                                    <label for="start_date">*Promotion Start Date: </label>
                                    <input id="start_date" min="2019-10-01" max="2029-01-01" type="date" name="start_date"/>
                                </section>
                                <section class="form-group">
                                    <label for="end_date">*Promotion End Date: </label>
                                    <input id="end_date" min="2019-10-01" max="2029-01-01" type="date" name="end_date"/>
                                </section>
                                <button id="btnAdd" type="button" class="btn btn-block btn-success"><span class="fa fa-plus-circle"></span> Add Promotion</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
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