<!DOCTYPE html>
<html lang="en" class="header">

    <head>
        <title>FAQ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs" content="Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today! Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received. Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body class="overlay">
        <?php include "header.php";
        ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="bannerimg" class="responsive" id="bannerresize">
        </div>

        <section>
            <div class="container-fluid">

                <div class =" row sectionheader standardfont text-center pt-4">

                    <div class="col-md-12">

                        <h2 class = fontheader>FAQ</h2>

                    </div>

                </div>
                <section>
                    <div class ="row justify-content-center standardfont pb-5">
                        <div class ="col-md-6">
                            <div class="accordion mt-4" id="accordionExample">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="clearfix mb-0">
                                            <a href="#" class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Ordering Information <span class="fa fa-angle-down"></span></a>									
                                        </h2>
                                    </div>
                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <article class="card-body standardfont">
                                            <p>All orders will take approximately 3 to 5 working days upon ordering.</p>
                                            <p>All deliveries will be subjected to a $SGD 5.00 fee without a minimum order criteria.</p>
                                            <p>Our deliveries take approximately 45 to 60 minutes in accordance with when the order was made.</p>
                                            <p>Take note that there is a no refund policy applied after an order is made.</p>
                                        </article>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="clearfix mb-0">
                                            <a href="#" class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Product Information <span class="fa fa-angle-down"></span></a>									
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                        <article class="card-body standardfont">
                                            <p>At KUUUEEEH, we use ingredients that are natural and our kuehs are always freshly made from the oven.</p>
                                            <p>Uniquely to our kueh shop, our kuehs do not contain preservatives, artificial flavors and contains less sugar and oil.</p>
                                            <p>This is in part of our way of ensuring our kuehs are delicious yet promoting healthy lifestyle in Singapore to our valued customers!</p>

                                        </article>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="clearfix mb-0">
                                            <a href="#" class="btn btn-link mt-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Business Opportunities<span class="fa fa-angle-down"></span></a>									
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                        <article class="card-body standardfont">
                                            <p>For any business opportunities kindly <a href="contactus.php">Contact Us.</a>
                                            </p>


                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>



        </section>

    </body>

    <?php include "footer_include.php" ?>
</html>
