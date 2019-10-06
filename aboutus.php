<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>About Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/aboutus.css"/> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/checkout.js"></script>  
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
                        <li class ="nav-item"><a href="#">About Us</a></li>
                        <li class ="nav-item"><a href="contactus.php">Contact Us</a></li>
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
        <div class="jumbotron text-center jumbotronbg"></div>
        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <div class =" row sectionheader standardfont text-center">
                    <div class="col-md-12">
                        <h2 class = "fontheader">ABOUT US</h2>
                    </div>
                </div>
                <div class ="row justify-content-left ml-4 standardfont">
                    <div class ="col-md-6">
                        <h3 class ="subheader">About KUUUEEEH</h1>
                        <div id="paragraph">
                            <p>Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today!</p>
                            <p>Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received.</p>
                            <p>Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class ="subheader">Why Choose KUUUEEEH?</h3>                       
                        <div id="paragraph">
                            <p>At KUUUEEEH, we use ingredients that are natural and our kuehs are always freshly made from the oven.</p> 
                            <p>Uniquely to our kueh shop, our kuehs do not contain preservatives, artificial flavors and contains less sugar and oil. This is in part of our way of ensuring our kuehs are delicious yet promoting healthy lifestyle in Singapore to our valued customers!</p>
                        </div>
                    </div>
                </div>
                <div class ="row justify-content-left ml-4 standardfont">
                    <div class="col-md-6">  
                        <h3 class ="subheader">What kuehs are we selling?</h3>                        
                        <div id="paragraph">
                            <p>Our menu offers a wide range of kuehs that you, your family and friends are surely craving for!</p>
                            <p>Some of our signature kuehs from our menu includes: Ang Ku Kueh, Chwee Kueh, Kueh Lapis, Kueh Tako etc that are highly recommended for y'all to try out!</p>
                            <p id="bon_appetit">"Bon Appétit!"</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class ="subheader">MUST TRY!!!</h3>
                        <div id="paragraph">
                            <p>Here are a few of our signature kuehs from our menu:</p>
                            <img class="img_kueh" src="img/Ang Ku Kueh.jpg" alt="Ang Ku Kueh">
                            <img class="img_kueh" src="img/Chwee Kueh.jpg" alt="Chwee Kueh">
                            <img class="img_kueh" src="img/Kueh Lapis.jpg" alt="Kueh Lapis">
                            <img class="img_kueh" src="img/Png Kueh.jpg" alt="Png Kueh">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>