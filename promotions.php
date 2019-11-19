
<?php
session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" class="header">
    <head>

        <title>Promotions Page</title>
        <meta charset="UTF-8" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" property="">
        <meta name ="KUUUEEEH website where you find the best kuehs" content="" property="">

        <meta charset="UTF-8">
        <title>Add New Promotion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/editadmin.css">
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="js/editadmin.js"></script>
        <script defer src="js/promotions.js"></script>
    </head>
    <body id="overlay">
        <?php include "adminheader.php" ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/BannerWhite.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>

        <main>
            <div class="container-fluid" style= 'margin-top:20px'>
                <div class ="row justify-content-center standardfont">
                    <div class="col-md-12">
                        <h1 class="fontheader">Add New Promotions Dashboard</h1>
                    </div>
                    <div class="col-md-12">
                        <section id="paragraph">
                            <form id="promoForm" action="processpromotions.php" method="post" enctype="multipart/form-data">
                                <section class="form-group">
                                    <label>*Promotion Banner:</label>
                                    <input id="file_input" type="file" name="file_input" accept="image/*" style="display:none;"/>
                                    <button id="banner_file_upload" type="button" class="btn btn-primary"><span class="fa fa-upload"></span> Upload Promotion Banner</button>
                                    <section id="banner_dropzone">
                                        <img id="banner" alt="To upload display banner">
                                    </section>
                                    <p id="filePath">No File Path specified</p>
                                </section>
                                <section class="form-group">
                                    <label for="start_date">*Promotion Start Date: </label>
                                    <input id="start_date" min="2019-10-01" max="2029-01-01" type="date" name="start_date"/>
                                </section>
                                <section class="form-group">
                                    <label for="end_date">*Promotion End Date: </label>
                                    <input id="end_date" min="2019-10-01" max="2029-01-01" type="date" name="end_date"/>
                                </section>
                                <button type="submit" id="btnAdd" name="submit" class="btn btn-block btn-success"><span class="fa fa-plus-circle"></span> Add Promotion</button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </main>
    </body>

</html>