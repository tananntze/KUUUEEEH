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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="js/promotions.js"></script>   
    </head>
    <body id="overlay">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <nav class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="#">Orders of the Day</a></li>
                        <li class ="nav-item"><a href ="editadmin.php">Kueh Menu</a></li>
                        <li class ="nav-item"><a href ="#">Promotions</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="home.php"><span class="fas fa-directions">Logout</span></a>
                        </li>
                    </ul>
                </nav>  
            </nav>
        </header>
        
        <div class="container">
            <img src="img/Banner - White.png" alt="" class="responsive">
        </div>
        
        <section>
            <div class="container-fluid" style= 'margin-top:20px'>
                <div class ="row justify-content-center standardfont">
                    <div class="col-md-12">
                        <h2 class="fontheader">Add New Promotions Dashboard</h2>
                    </div>
                    <div class="col-md-10">
                        <section id="paragraph">
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
                                    <button id="banner_file_upload" type="button" class="btn btn-primary">Upload Promotion Banner <span class="glyphicon glyphicon-upload"></span></button>
                                    <section id="banner_dropzone">
                                        <img id="banner">
                                    </section>
                                    <p id="filePath">No File Path specified</p>
                                </section>
                                <section class="form-group">
                                    <label for="title">*Date of Promotion:</label>
                                </section>
                                <button id="btnAdd" type="button" class="btn btn-block">Add Promotion <span class="glyphicon glyphicon-plus-sign"></span></button>
                            </form>
                        </section>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>