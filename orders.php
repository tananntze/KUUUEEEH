<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}
?>

<html class="header">

<head>
    <title>Kueh Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="KUUUEEEH website where you find the best kuehs">
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
    <?php include "adminheader.php"; 

?>
    
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
                    <?php
                    include "dbConfig.php";
                    $conn = connectToDB();
                    $sql = "SELECT * FROM checkout_details";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                        $orderId = $row['orderId'];
                        ?>
                        <tr class="table-light d-flex">
                            <td class="col-2 data"><?php echo $orderId ?></td>
                            <td class="col-6 data"><?php echo $row['customer_email']; ?></td>
                            <td class="col-5 data"><?php echo $row['deliveryType']; ?></td>
                            <td class="col-4 data"><?php echo $row['status']; ?></td>
                            <td class="col-3 data"><?php echo $row['totalPrice']; ?></td>
                            <td class="col-3">
                                <a href="edit_order.php?orderId=<?php echo $orderId ?>" class="edit"><span class="fa fa-edit"> Edit</span></a> <br>
                                <a href=# class="delete" data-toggle="modal" data-target="#deleteModal"><span class="fas fa-trash-alt"> Delete</span></a></td>

                        </tr>
                    <?php
                    }
                    $result->free_result();
                    $conn->close();
                    ?>
                </tbody>
            </table>
        </section>


</body>

</html>