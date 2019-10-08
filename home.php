<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="header">

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <nav class="nav navbar navbar-expand-md bg-pink navbar-dark" role="navigation">
            <a class="navbar-brand" href="#">Kuey Logo</a>
            <button class="navbar-toggler" type='button' data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="home.php">Home</a></li>
                    <li class="nav-item"><a href="aboutus.php">About Us</a></li>
                    <li class="nav-item"><a href="#">Contact Us</a></li>
                    <li class="nav-item"><a href="faq.php">FAQ's</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav navbar-nav">
                        <a class="nav-link" href="#"><span class="fas fa-directions">Login</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>


    <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="2000">
                <img src="img/cake.jpeg" class="d-block w-100" alt="...">
            </div>
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

    <section class="aboutSection">
        <div class="aboutus col-md-6 d-inline-block">
            <h1 id="about_us_header">ABOUT US</h1>
            <p>US Foods® is one of America's great food companies and a leading foodservice distributor, partnering with approximately 250,000 restaurants and foodservice operators to help their businesses succeed.</p>
        </div>   
        
        <div class="view overlay col-md-6">            
            <img src="img/cake.jpeg" class="about-img d-inline-block img-cake rounded-circle responsive" alt="">
            <div class="mask flex-center rgba-white-strong">
                <div class="button responsive"><a class="white-text"href="aboutus.php">About us</a></div>
            </div>
        </div>



    </section>
</body>

</html>