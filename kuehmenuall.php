<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>All Kuehs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/kuehmenuall.css">
        <link rel="stylesheet" href="css/checkout.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="js/main.js"></script>
        <script src="js/myorderspopup.js"></script>
    </head>

    
    <body>


    <body background="img/Pink Dots Tumblr BG.jpg">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler custom-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>

                <div class ="collapse navbar-collapse" id="navbar">

                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="home.php">Home</a></li>
                        <li class ="nav-item"><a href="aboutus.php">About Us</a></li>
                        <li class ="nav-item"><a href="kuehmenuall.php">Kueh</a></li>
                        <li class ="nav-item"><a href="contactus.php">Contact Us</a></li>
                        <li class ="nav-item"><a href="faq.php">FAQ's</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="javascript:displayOrder()" data-toggle="modal" data-target="#orderPopup"><span class="fas fa-directions"> <span id="badgeQuantity" class="badge badge-danger"> </span> My Order </span></a>
                            <a class ="nav-link" href="login.php"><span class="fas fa-directions">Login</span></a>
                        </li>
                    </ul>
                </div>  
            </nav>
        </header>
        
        <section class="modal fade" id="orderPopup" role="dialog">
            <section class="modal-dialog">
                <section class="modal-content">
                    <section class="modal-header text-center d-block">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3 id ="orderHeader">My Order</h3>
                    </section>
                    <section id="paragraph" class="modal-body">
                        <section id="myOrder">
                            <p id="quantity">Total Quantity:</p>
                            <table id="tblOrders"></table>
                        </section>
                        <p id="subTotal">Subtotal:</p>
                        <a href="kuehcheckout.php" id="btnCheckout" class="btn btn-block btn-primary">Proceed to Checkout</a>
                    </section>
                </section>
            </section>
        </section>

        <div class="container">
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>
        
        <nav role="navigation" class="nav2">
            <ul>
                <li><a href ="#basic">Basic Kuehs</a></li>
                <li><a href ="#character">Kuehs with Character</a></li>
                <li><a href ="#heavyweight">Heavyweight Kuehs</a></li>
            </ul>
        </nav>

        <div class="container-fluid">

            <!-- The Basic Kueh -->      
            <div class="row" id ="basic" >
                <div class =" col-md-12">
                    <h1 id="border" class="fontheader" >The Basic Kuehs</h1>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-2">

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Ang Ku Kueh.jpg" alt = "Ang Ku Kueh">
                        <figcaption>Ang Ku Kueh ($0.50/pc): Small round or oval shaped pastry with soft sticky glutinous rice flour skin wrapped around a sweet filling in the centre.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                    
                    <figure class="imgholder">
                        <img  class="zoom" src = "img/The Basic Kuehs/Chai Kueh.jpg" alt = "Chai Kueh">
                        <figcaption>Chai Kueh ($0.50/pc): A typical and popular chinese snack. Stir fried crunchy jicama (yam bean) wrapped in soft, chewy and crystal skin.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                    
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Ambon.jpg" alt = "Kueh Ambon">
                        <figcaption>Kueh Ambon ($0.50/pc): This is a soft, springy, and chewy yeast cake originated from Medan (Indonesia).</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                    
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Bangkit.jpg" alt = "Kueh Bangkit">
                        <figcaption>Kueh Bangkit ($0.50/pc): Light and crumbly coconut cream cookies that melt in your mouth. These cookies are made with tapioca flour and have a creamy rich coconut taste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>    
                    
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Bingkah.jpg" alt = "Kueh Bingkah">
                        <figcaption>Kueh Bingkah ($0.50/pc): Made from grated tapioca (cassava), baked until the top and sides are crispy brown. Soft and chewy inside. A Nyonya delicacies of the Peranakans and goes well with coffee or tea.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                 
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Bongkong.jpg" alt = "Kueh Bongkong">
                        <figcaption>Kueh Bongkong ($0.50/pc): Made with various starches and coconut milk, filled with Gula Melaka filling that melts and oozes to flood the kueh as it steams. Nice soft and slightly bouncy texture.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Dadar.jpg" alt = "Kueh Dadar">
                        <figcaption>Kueh Dadar ($0.50/pc): Bite-sized sweet and savoury dessert which stuffed with luscious Gula Melaka grated coconut and wrapped in a fragrant pandan pancake.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Koci.jpg" alt = "Kueh Koci">
                        <figcaption>Kueh Koci ($0.50/pc): A sweet dumpling using glutinous rice flour and stuffed with grated coconut sweetened using palm sugar.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Kodok.jpg" alt = "Kueh Kodok">
                        <figcaption>Kueh Kodok ($0.50/pc): Known as Cekodok Pisang, simple but delicious snack. Using the freshest bananas to deep fry it. Giving a sweet and savoury taste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Kosui.jpg" alt = "Kueh Kosui">
                        <figcaption>Kueh Kosui ($0.50/pc): Known as Kueh Ko Swee, made from tapioca starch and rice flour and sweetened with Gula Melaka sugar. Served with freshly grated coconuts for more texture and taste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Lapis.jpg" alt = "Kueh Lapis">
                        <figcaption>Kueh Lapis ($0.50/pc): Most popular and well-loved Nonya dessert for all people known as ‘thousand-layer cake’. Made with tapioca, rice flour, coconut milk and natural colouring to make it pretty for eating.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Sago.jpg" alt = "Kueh Sago">
                        <figcaption>Kueh Sago ($0.50/pc): Made from small sago pearls, giving a texture that is soft but chewy. Natural colouring used and it is topped with Gula Melaka and Shredded Coconut.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Salat.jpg" alt = "Kueh Salat">
                        <figcaption>Kueh Salat ($0.50/pc): Two-tiered Nonya dessert with a base of steamed glutinous rice. Topped with a thick layer of custard flavour and squeezed coconut milk and pandan juice.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder"> 
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Seri Muka.jpg" alt = "Kueh Seri Muka">
                        <figcaption>Kueh Seri Muka ($0.50/pc):  Classic and authentic dessert, breakfast or snack. Steamed layer of sweet coconut glutinous rice with a layer of caramel pandan custard on top.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Kueh Talam.jpg" alt = "Kueh Talam">
                        <figcaption>Kueh Talam ($0.50/pc): Two-layer Nyonya Kueh, the top layer is made from coconut milk and rice flour. The bottom layer is made from rice and mung bean flour with green colouring from pandan leaves.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Lepat Pisang.jpg" alt = "Lepat Pisang">
                        <figcaption>Lepat Pisang ($0.50/pc): Indonesian steamed snack made from glutinous rice flour filled with brown sugar and banana. Wrapped using banana leaves.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Ondeh Ondeh.jpg" alt = "Ondeh Ondeh">
                        <figcaption>Ondeh Ondeh ($0.50/pc): One of the all-time favourite Nonya desserts, soft glutinous rice balls, infused in pandan juice, filled with aromatic palm sugar, then coated in a sweet, fresh and pleasant taste of grated white coconut.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Pulut Inti.jpg" alt = "Pulut Inti">
                        <figcaption>Pulut Inti ($0.50/pc): Pulut Inti is a traditional Malaysian dessert of steamed glutinous rice with a sweet coconut topping. They are usually wrapped in banana leaves.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Pulut Tekan.jpg" alt = "Pulut Tekan">
                        <figcaption>Pulut Tekan ($0.50/pc): Presented in a pyramid shaped dessert that wrapped with the banana leaf. Made from a mound of steamed glutinous rice topped with inti, a sweet coconut filling.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Basic Kuehs/Rempah Udang.jpg" alt = "Rempah Udang">
                        <figcaption>Rempah Udang ($0.50/pc): A traditional Peranakan dumpling dessert snack, typically comes as an oblong-shaped glutinous rice roll, filled in the middle with shrimp paste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>
                <div class="col-md-2"></div>
            </div>

            <!-- The Kuehs with Character -->       
            <div class="row" id ="character" >
                <div class =" col-md-12 text-center">                    
                
                <h1 id="border" class="fontheader">Kuehs with Character</h1>
                </div>
            </div>
            
            <div class="row" >
               
                <div class="col-md-2"></div>

                <div class="col-md-2">

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Apom Berkuah.jpg" alt = "Apom Berkuah">
                        <figcaption>Apom Berkuah ($0.50/pc): Fluffy and soft yeasted rice pancakes dipped in a kuah pengat pisang, a sweet sauce made with fresh coconut milk, gula melaka and pisang rajah or pisang mas.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Chwee Kueh.JPG" alt = "Chwee Kueh">
                        <figcaption>Chwee Kueh ($0.70/pc): A popular breakfast item which rice cakes are topped with diced preserved radish and served with chilli sauce.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Chye Tow Kueh.jpg" alt = "Chye Tow Kueh">
                        <figcaption>Chye Tow Kueh ($0.50/pc): Known as fried carrot cake, made with radish cake (steamed rice flour and shredded white daikon), which is then stir-fried with eggs, preserved radish.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Dodol.jpg" alt = "Dodol">
                        <figcaption>Dodol ($0.50/pc): A popular sweet treat in Southeast Asia. Chewy, sweet and thick cake made from glutinous rice flour, coconut milk and palm sugar (jaggery).</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Hoon Kueh.jpg" alt = "Hoon Kueh">
                        <figcaption>Hoon Kueh ($0.50): Soft and tender texture, made from coconut cream, mung bean flour and corn, wrapped in banana leaf.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Huat Kueh.jpg" alt = "Huat Kueh" style="max-width: 100%">
                        <figcaption>Huat Kueh ($0.50/pc): Huat means “to rise” or “to prosper”. Some people call huat kueh as smiling cake too. Soft and fluffy, not too sweet and comes in different colours.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Bahulu.jpg" alt = "Kueh Bahulu" style="max-width: 100%">
                        <figcaption>Kueh Bahulu ($0.50/pc): Soft, light and fluffy with a mildly sweet taste and has the fragrance of baked cake.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Bakar.jpg" alt = "Kueh Bakar" style="max-width: 100%">
                        <figcaption>Kueh Bakar ($0.50/pc): A traditional Malay cake, sweet and soft. A baked custard that is full of pandan and egg aroma.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Belanda.jpg" alt = "Kueh Belanda" style="max-width: 100%">
                        <figcaption>Kueh Belanda ($0.50/pc): Known as love letters, made of rice and tapioca flour, fresh coconut milk and eggs. Giving a crunchy & reminisce taste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Kara Kara.jpg" alt = "Kueh Kara Kara" style="max-width: 100%">
                        <figcaption>Kueh Kara Kara ($0.50/pc): It’s a Peranakan sweet and crispy snacks, known as fragile rice krispies. Made from rice flour and sugar syrup.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Keria.jpg" alt = "Kueh Keria" style="max-width: 100%">
                        <figcaption>Kueh Keria ($0.50/pc): Delightful local mini doughnuts are made out of sweet potato and frosted with Gula Melaka.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Lapis.jpg" alt = "Kek Lapis" style="max-width: 100%">
                        <figcaption>Kek Lapis ($0.50/pc): Not to be confused with Kueh Lapis, it is made with a secret spice concoction. Aromatic and non-greasy, it also has a tender, bouncy texture.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Pinjaram.jpg" alt = "Kueh Pinjaram" style="max-width: 100%">
                        <figcaption>Kueh Pinjaram ($0.50/pc): Known as penyaram or kuih UFO. Made with rice flour, palm sugar. Deep fried giving a soft and crispy on the outside texture.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Putugal.jpg" alt = "Kueh Putugal" style="max-width: 100%">
                        <figcaption>Kueh Putugal ($0.50/pc): Made up of a banana encased a grated cassava (ubi kayu) and coconut milk concoction before being wrapped and steamed over banana leaves.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Tair.jpg" alt = "Kueh Tair" style="max-width: 100%">
                        <figcaption>Kueh Tair ($0.50/pc): Melt in your mouth shortcrust pastry shells filled with homemade pineapple jam.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Tutu.jpg" alt = "Kueh Tutu" style="max-width: 100%">
                        <figcaption>Kueh Tutu ($0.50/pc): Small steamed cake made of finely pounded rice flour and filled with either ground peanuts or grated coconut cooked in Gula Melaka.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Kueh Wajek.jpg" alt = "Kueh Wajek" style="max-width: 100%">
                        <figcaption>Kueh Wajek ($0.50/pc): A traditional sweet diamond-shaped kueh, made of steamed sticky glutinous rice, flavoured with palm sugar, coconut milk and a few knotted pandan leaves.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Lepat Kacang.jpg" alt = "Lepat Kacang" style="max-width: 100%">
                        <figcaption>Lepat Kacang ($0.50/pc): A glutinous rice and soya bean cooked in a leaf packet. Wrapped in triangular packets using Doan Nipah (Attap Leaves).</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Png Kueh.jpg" alt = "Png Kueh" style="max-width: 100%">
                        <figcaption>Png Kueh ($0.60/pc): Soft and tender and the glutinous rice filling with full of mushroom and dried shrimp flavour. Added some fried shallots, chopped spring onions and a trickle of sweet soy sauce.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/Kueh with Character/Soon Kueh.jpg" alt = "Soon Kueh" style="max-width: 100%">
                        <figcaption>Soon Kueh ($0.50/pc): The dumpling-like kueh is filled with a fragrant mixture of shredded bamboo shoots, turnip and dried shrimps wrapped in a smooth rice-tapioca flour skin.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>
                <div class="col-md-2"></div>
            </div>

            <!-- The Heavyweight Kuehs --> 
            <div class="row" id ="heavyweight" >
                <div class =" col-md-12 text-center">
                    <h1 id="border" class="fontheader">The Heavyweight Kuehs</h1>
                </div>
            </div>
            
            <div class="row">

                <div class="col-md-2"></div>

                <div class="col-md-2">

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Apam Balik.jpg" alt = "Apam Balik" style="max-width: 100%">
                        <figcaption>Apam Balik ($0.50/pc): A Southeast Asian fluffy pancake with cream corn or peanuts. This soft pancake has a thick surface with thin and crispy side.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Getuk Getuk.JPG" alt = "Getuk Getuk" style="max-width: 100%">
                        <figcaption>Getuk Getuk ($0.50/pc): Made from cassava. It is mixed with grated coconut, sugar and small amounts of salt. Chewy and soft.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Abok Abok.jpg" alt = "Kueh Abok Abok" style="max-width: 100%">
                        <figcaption>Kueh Abok Abok ($0.50/pc): This is a snack made from sago, sugar, coconut and Gula Melaka steamed in banana leaves. Giving a dumpling kind of shape.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Akok.jpg" alt = "Kueh Akok" style="max-width: 100%">
                        <figcaption>Kueh Akok ($0.50): A traditional snack made from eggs, flour, coconut milk and palm sugar.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Bakul.jpg" alt = "Kueh Bakul" style="max-width: 100%">
                        <figcaption>Kueh Bakul ($0.50/pc): Known as Nian Gao, prepared from glutinous rice flour and sugar. Giving a sticky, chewy and sweet texture and taste. This snack can be eaten in many ways.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Bulan.jpg" alt = "Kueh Bulan" style="max-width: 100%">
                        <figcaption>Kueh Bulan ($0.50/pc): Also known as Mooncakes, a rich thick lotus seed paste filling is surrounded thin crust and contain yolks from salted duck eggs.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Cara.jpg" alt = "Kueh Cara" style="max-width: 100%">
                        <figcaption>Kueh Cara ($0.50/pc): Made from pure coconut milk and vanilla juice, and stuffed with chopped coconut sugar for the explosion filling.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Cincin.jpg" alt = "Kueh Cincin" style="max-width: 100%">
                        <figcaption>Kueh Cincin ($0.50/pc): The tasty and crunchy or baked ring biscuit. Made of flour, rice flour, palm oil and brown sugar.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Jagung.jpg" alt = "Kueh Jagung" style="max-width: 100%">
                        <figcaption>Kueh Jagung ($0.50): It is made up of canned sweet corn with kernel bits atop a layer of coconut milk and pandan.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Kamir.jpg" alt = "Kueh Kamir" style="max-width: 100%">
                        <figcaption>Kueh Kamir ($0.50/pc): Typical food Pemalang origin Arab countries. This cake is made of flour dough, butter, and eggs, mixed with ingredients such as bananas or tape.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Kapit.jpg" alt = "Kueh Kapit" style="max-width: 100%">
                        <figcaption>Kueh Kapit ($0.50/pc): It is also called kuih sepit in Malay, the cookie is form on specialised mould which comprises two round iron plates held together by thongs. Crunchy and addicting.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Kasturi.jpg" alt = "Kueh Kasturi" style="max-width: 100%">
                        <figcaption>Kueh Kasturi ($0.50/pc): Known as mung bean fritters, a very simple yet delicious kueh. Deep fry mung bean coated with batter.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Lompang.jpg" alt = "Kueh Lompang" style="max-width: 100%">
                        <figcaption>Kueh Lompang ($0.50/pc): A traditional Malay cake. It is a sweet cake topped with steamed grated coconut that had been seasoned with little salt. This is to balance the sweetness of the cake and give it a creamy taste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Lopes.jpg" alt = "Kueh Lopes" style="max-width: 100%">
                        <figcaption>Kueh Lopes ($0.50/pc): Served with shredded coconut and Gula Melaka syrup, giving a chewy and soft texture</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Moho.jpg" alt = "Kueh Moho" style="max-width: 100%">
                        <figcaption>Kueh Moho ($0.50/pc): This belongs to steamed bun family and has distinctively tangy or sour taste. Combined it with brown sugar give a sweet and sour taste.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>

                <div class="col-md-2">
                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Neng Ko.jpg" alt = "Kueh Neng Ko" style="max-width: 100%">
                        <figcaption>Kueh Neng Ko ($0.50/pc): With a soft and fluffy texture, fragrant and eggy taste. Also known as Ji Dan Gao.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Tako.jpg" alt = "Kueh Tako" style="max-width: 100%">
                        <figcaption>Kueh Tako ($0.50/pc): A traditional two layered coconut and pandan jelly dessert made of mung bean flour with bits of Chinese turnips. Each layer tastes differently as one is salty while the other is sweet.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Talam Ubi.jpg" alt = "Kueh Talam Ubi" style="max-width: 100%">
                        <figcaption>Kueh Talam Ubi ($0.50/pc): It’s a 2 layered steamed kueh, fresh coconut milk at the top and tapioca at the bottom. Sweet and savoury at the same time.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/Marble Cake.jpg" alt = "Kueh Marmer" style="max-width: 100%">
                        <figcaption>Kueh Marmer ($0.50/pc): Known as marble cake is a cake with a streaked or mottled appearance (like marble). Freshly backed with a mixture of vanilla and chocolate, walnuts and butter.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>

                    <figure class="imgholder">
                        <img class="zoom" src = "img/The Heavyweight Kuehs/You Zha Kueh.jpg" alt = "You Zha Kueh" style="max-width: 100%">
                        <figcaption>You Zha Kueh ($0.50/pc): Also known as Fried Chinese Doughnut. Made from rice noodle roll, deep fried with it to golden brown. Crispy and soft in the inside.</figcaption>
                        <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                    </figure>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>
    </body>

</html>

