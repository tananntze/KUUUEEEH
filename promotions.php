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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/promotions.js"></script>   
    </head>
    
    <body id="overlay">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand logocolor" href="index.php">KUUUEEEH</a>
                <button class ="navbar-toggler custom-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <nav class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="orders.php">Orders of the Day</a></li>
                        <li class ="nav-item"><a href ="editadmin.php">Kueh Menu</a></li>
                        <li class ="nav-item"><a href ="promotions.php">Promotions</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="index.php"><span class="fas fa-directions">Logout</span></a>
                        </li>
                    </ul>
                </nav>  
            </nav>
        </header>

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
                    <div class="col-md-10">
                        <section id="paragraph">
                            <form id="promoForm" action="" method="post">
                                <section class="form-group">
                                    <label for="title">*Promotion Title:</label>
                                    <input class="form-control" id="title" name="title" placeholder="Enter promotion title">
                                </section>
                                <section class="form-group">
                                    <label for="description">*Promotion Description:</label>
                                    <textarea class="form-control" id="description" name="description" placeholder="Enter promotion description" rows="2"></textarea>
                                </section>
                                <section class="form-group">
                                    <label>*Promotion Banner:</label>
                                    <input id="file_input" type="file" accept="image/*" style="display:none;"/>
                                    <button id="banner_file_upload" type="button" class="btn btn-primary"><span class="fa fa-upload"></span> Upload Promotion Banner</button>
                                    <section id="banner_dropzone">
                                        <img id="banner">
                                    </section>
                                    <p id="filePath">No File Path specified</p>
                                </section>
                                <section class="form-group">
                                    <label for="title">*Date of Promotion:</label>
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