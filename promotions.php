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
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/promotions.js"></script>   
    </head>
    <body id="promotions">
        <?php
        // put your code here
        ?>
        <h2 id="txtPromotions">Add New Promotions Dashboard</h2>
        <section id="dashboard" class="col-md-8 col-md-offset-2">
            <form id="step1Form" action="" method="post">
                <section class="form-group">
                    <label for="title">*Promotion Title:</label>
                    <input class="form-control" id="title" name="title" placeholder="Enter promotion title">
                </section>
                <section class="form-group">
                    <label for="description">*Promotion Description:</label>
                    <input class="form-control" id="description" name="description" placeholder="Enter promotion description">
                </section>
                <section class="form-group">
                    <label for="banner_file">*Promotion Banner:</label>
                </section>
            </form>
        </section>
    </body>
</html>

