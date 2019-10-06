<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html class="header">
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body class="overlay">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <div class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="home.php">Home</a></li>
                        <li class ="nav-item"><a href="aboutus.php">About Us</a></li>
                        <li class ="nav-item"><a href="#">Contact Us</a></li>
                        <li class ="nav-item"><a href="faq.php">FAQ's</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="#"><span class="fas fa-directions">Login</span></a>
                        </li>
                    </ul>
                </div>  
            </nav>
        </header>

        
        <div class="container">
            <img src="img/banner.jpg" alt="" class="responsive">
        </div>
        
        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader standardfont text-center">
                    <div class="col-md-12">
                        <h2 class = "fontheader">CONTACT</h2>
                    </div>
                </div>
                <div class ="row justify-content-left ml-4 standardfont">
                    <div class ="col-md-6">
                        <h3 class ="subheader">Contact Information</h3>
                        <div id="paragraph">
                            <p class="contactInfo">Telephone number : +65 6599 5599</p>
                            <p class="contactInfo"> Email : Kueh_for_you@kuey4you.com</p>
                            <p class="contactInfo"> 172 Ang Mo Kio Avenue 8, Singapore 567739</p>
                            <p class="contactInfo"> Business Hours: Mondays to Sundays 10.00 AM to 10.00 PM</p>
                            <p class="contactInfo"> Instagram : www.instagram.com/Kuey4you </p>
                            <p class="contactInfo"> Facebook : www.facebook.com/Kuey4you </p>
                        </div>
                        
                    </div>
                    <div class ="col-md-6">
                        <h3 class ="subheader"> Location </h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class ='embed-responsive-item' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1274.6247559636176!2d103.84831020185078!3d1.3777725466679476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da16e96db0a1ab%3A0x3d0be54fbbd6e1cd!2sSingapore%20Institute%20of%20Technology%20(SIT%40NYP)!5e0!3m2!1sen!2ssg!4v1570000602036!5m2!1sen!2ssg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class ="row justify-content-center ml-4 standardfont pt-5">


                    <div class =' col-md-4'>

                    </div>
                    <div class =' col-md-4'>
                        <h3 class ="fontheader">Get in Touch with us here!</h3>
                        <form name="myForm" action="demo_form.asp"
                              onsubmit="return validateForm()" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name" name="">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email Address" name="email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                            <input type="submit" class="btn btn-secondary btn-block"  value="Send" name="">
                        </form>
                    </div>
                    <div class =' col-md-4'>

                    </div>


                </div>
        </section>
    </body>
</html>
