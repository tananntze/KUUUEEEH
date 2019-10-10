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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/order.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="js/checkout.js"></script>


</head>

<body class="overlay">
    <header>
        <nav class="nav navbar navbar-expand-md bg-pink navbar-dark" role="navigation">
            <a class="navbar-brand" href="#">Kuey Logo</a>
            <button class="navbar-toggler" type='button' data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="#">Orders of the day </a></li>

                    <li class="nav-item"><a href="editadmin.php">Kueh Menu</a></li>

                    <li class="nav-item"><a href="promotions.php">Promotions</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav navbar-nav">
                        <a class="nav-link" href="home.php"><span class="fas fa-directions">Logout</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="container">
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

</html>