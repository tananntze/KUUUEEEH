<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html class="header">

<head>
        <title>Kueh Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/editadmin.css">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body class="overlay">
    <?php include "adminheader.php" ?>

    <div class="container">
        <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
        <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
    </div>

  


    <section class="container standardfont">
        <h2 class="fontheader" id="order_header">Orders & Deliveries</h2>
        <section class="card">
            <section class="card-body">
                <form>
                    <div class="row">
                        <div class="col-4">
                            <section class="form-group">
                                <label for="OrderId">Order Id</label>
                                <input type="text" name="orderId" id="orderId" class="form-control" value="" placeholder="Enter Order Id">
                            </section>
                        </div>

                        <div class="col-4">
                            <button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><span class="fas fa-search"></span> Search</button>
                            <a href="#" class="btn btn-danger"><span class="fas fa-sync-alt"></span> Clear</a>
                        </div>
                    </div>
                </form>
            </section>
        </section>
    </section>

    <section class="container standardfont">
        <section class="card">
            <table class="table table-hover table-responsive">
                <thead>
                    <tr class="d-flex">
                        <th class="col-2">OrderId</th>
                        <th class="col-6">Customer Email</th>
                        <th class="col-5">Delivery Mode</th>
                        <th class="col-4">Status</th>
                        <th class="col-3">Total</th>
                        <th class="col-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-light d-flex">
                        <td class="col-2 data">1</td>
                        <td class="col-6 data">jflsajf@gmail.com</td>
                        <td class="col-5 data">Home Delivery</td>
                        <td class="col-4 data">Paid</td>
                        <td class="col-3 data">$8.90</td>
                        <td class="col-3">
                            <a href=# class="view" data-toggle="modal" data-target="#viewModal"><span class="fa fa-eye">View</span></a> <br>
                            <a href=# class="edit" data-toggle="modal" data-target="#editModal"><span class="fa fa-edit"> Edit</span></a> <br>
                            <a href=# class="delete" data-toggle="modal" data-target="#deleteModal"><span class="fas fa-trash-alt"> Delete</span></a></td>

                    </tr>
                </tbody>
            </table>
        </section>
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