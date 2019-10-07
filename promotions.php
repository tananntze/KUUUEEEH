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
       
        <h2 id="txtPromotions">Add New Promotions Dashboard</h2>
        <button id="btnLogout" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span> Logout</button>
        <section id="dashboard" class="col-md-8 col-md-offset-2">
            <form id="promoForm" action="" method="post">
                <section class="form-group">
                    <label for="title">*Promotion Title:</label>
                    <input class="form-control" id="title" name="title" placeholder="Enter promotion title">
                </section>
                <section class="form-group">
                    <label for="description">*Promotion Description:</label>
                    <textarea class="form-control" id="description" name="description" placeholder="Enter promotion description" rows="2"></textarea>
                </section>
                <section class="form-group">
                    <label>*Promotion Banner:</label>
                    <input id="file_input" type="file" accept="image/*" style="display:none;"/>
                    <button id="banner_file_upload" type="button" class="btn btn-info">Upload Promotion Banner <span class="glyphicon glyphicon-upload"></span></button>
                    <section id="banner_dropzone">
                        <img id="banner">
                    </section>
                    <p id="filePath">No File Path specified</p>
                </section>
                <button id="btnOrder" type="button" class="btn btn-block btn-success">Add Promotion <span class="glyphicon glyphicon-plus-sign"></span></button>
            </form>
        </section>
    </body>
</html>