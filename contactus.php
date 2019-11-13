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
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body class="overlay">
        <?php include "header.php" ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="" class="responsive "id="bannerresize">
        </div>

        <section>
            <section class="container-fluid" style= 'margin-top:20px'>
                <section class =" row sectionheader standardfont text-center">
                    <section class="col-md-12">
                        <h2 class = "fontheader">CONTACT</h2>
                    </section>
                </section>
                <section class ="row justify-content-left ml-4 standardfont">
                    <section class ="col-md-6">
                        <h3 class ="subheader">Contact Information</h3>
                        <section id="paragraph">
                            <p class="contactInfo">Telephone number : +65 6599 5599</p>
                            <p class="contactInfo"> Email : Kueh_for_you@kuey4you.com</p>
                            <p class="contactInfo"> 172 Ang Mo Kio Avenue 8, Singapore 567739</p>
                            <p class="contactInfo"> Business Hours: Mondays to Sundays 10.00 AM to 10.00 PM</p>
                            <p class="contactInfo"> Instagram : www.instagram.com/Kuey4you </p>
                            <p class="contactInfo"> Facebook : www.facebook.com/Kuey4you </p>
                        </section>                       
                    </section>
                    <section class ="col-md-6">
                        <h3 class ="subheader"> Location </h3>
                        <section class="embed-responsive embed-responsive-16by9">
                            <iframe class ='embed-responsive-item' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1274.6247559636176!2d103.84831020185078!3d1.3777725466679476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da16e96db0a1ab%3A0x3d0be54fbbd6e1cd!2sSingapore%20Institute%20of%20Technology%20(SIT%40NYP)!5e0!3m2!1sen!2ssg!4v1570000602036!5m2!1sen!2ssg" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                        </section>
                    </section>
                </section>
                <section class ="row justify-content-center ml-4 standardfont pt-5">
                    <section class =' col-md-4'>
                    </section>
                    <section class =' col-md-4'>
                        <h3 class ="subheader">Get in Touch with us here!</h3>

                        <form name="myForm" method = "post" action="process_contactus.php" action =" MAILTO:blazeking990@gmail.com" onsubmit="return validateForm()">

                            <section class="form-group">
                                <input type="text" class="form-control"  placeholder="Enter Your Name Here" name="name" maxlength="30" required pattern='/^[a-zA-Z ][a-zA-Z]+{3,}$'>
                            </section>
                            <section class="form-group">
                                <input type="email" class="form-control"  placeholder="Enter Your Email Address" name="email"maxlength="50" required pattern='[a-z0-9.%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'>
                            </section>
                            <section class="form-group">
                                <textarea class="form-control" name ="text" maxlength="200" placeholder ="Enter your message here!" required pattern="'/^[a-zA-Z][a-zA-Z\\s]+$/{3,}" rows="3"></textarea>
                            </section>
                            <input type="submit" class="btn btn-secondary btn-block"  value="Submit" >
                        </form>
                    </section>
                    <section class =' col-md-4'></section>
                </section>
            </section>
    </body>
    <?php include "footer_include.php" ?>
</html>

    