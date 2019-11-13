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
    }
?>

<html>
    <head>
        <title>Kueh Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/editadmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script type="text/javascript" src="js/editadmin.js"></script> 


    </head>
    <body class="overlay">
        <?php include "adminheader.php" ?>
        
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>
                
<!--Admin header and search by category or food name and add food item function-->
        <section class="container standardfont">
            <h2 class="fontheader" id="editadmin_header">Admin Panel</h2>

            <section class="card">
                <section class="card-header">
                        <span class="fas fa-search" class = "searchIcon" id="search" ></span><strong> Search by</strong> 
                        <a href="#" class="btn btn-dark addItem btn-sm" role="button" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus-circle"></span> Add New Item</a>
                </section>

                <section class="card-body">
                    <form action="process_search.php" method="post">>
                        <div class="row">
                            <div class="col-2">
                                <section class="form-group">
                                <label for="scategory">Category</label>
                                <input type="text" name="scategory" id="searchCategory" class="form-control" value="" placeholder="Enter Category">
                                </section>
                            </div>

                            <div class="col-2">
                                <section class="form-group">
                                <label for="sname">Name</label>
                                <input type="text" name="sname" id="searchName" class="form-control" value="" placeholder="Enter Name">
                                </section>
                            </div>

                            <div class="col-4">
                                <button type="submit" name="submit" value="search" id="submit" class="btn btn-primary"><span class="fas fa-search"></span> Search</button>
                                <a href="editadmin.php" class="btn btn-danger"><span class="fas fa-sync-alt"></span> Clear</a>
                            </div>
                        </div>
                    </form>
                </section>
            </section>
        </section>
        
<!--add new item modal-->
        <aside class="modal fade standardfont" id="addModal">
            <section class="modal-dialog modal-dialog-centered">
                <section class="modal-content">
                    <form action="editadmin.php">
                    
                    <section class="modal-header">
                        <h4 class="modal-title">Add New Item</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </section>
                    
                    <section class="modal-body">
                        <section class="form-group">
                            <label for="acategory">Category</label>
                            <input type="text" name="addCategory" id="addCategory" class="form-control" value="" placeholder="Enter Category" required>
                        </section>

                        <section class="form-group">
                            <label for="aname">Name</label>
                            <input type="text" name="addName" id="addName" class="form-control" value="" placeholder="Enter Name" required>
                        </section>

                        <section class="form-group">
                            <label for="adescription">Description</label>
                            <textarea name="addDescription" id="addDescription" class="form-control" rows="5" value="" placeholder="Enter Description" required></textarea>
                        </section>

                        <section class="form-group">
                            <label for="aprice">Price</label>
                            <input type="text" name="addPrice" id="addPrice" class="form-control" value="" placeholder="Enter Price" required>
                        </section>

                        <p>Insert Image</p>
                        <section class="custom-file">
                            <input type="file" class="custom-file-input" id="insertImg" name="filename">
                            <label class="custom-file-label" for="insertImg">Choose file</label>
                        </section>
                    </section>
                    
                    <section class="modal-footer">
                        <button type="submit" class="btn btn-success" name="submit">Submit</button>    
                    </section>
                    </form>
                </section>         
            </section>
        </aside>

<!--Edit/update & delete food items in the menu table-->
        <section class="container standardfont">
            <section class="card">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-1">SNo</th>
                            <th class="col-2">Category</th>
                            <th class="col-2">Name</th>
                            <th class="col-2">Description</th>
                            <th class="col-2">Price</th>
                            <th class="col-2">Image</th>
                            <th class="col-1">Action</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">1</td>
                            <td class="col-2 data">Kueh with Character</td>
                            <td class="col-2 data">Chwee Kueh</td>
                            <td class="col-2 data">A popular breakfast item which rice cakes are topped with diced preserved radish and served with chili sauce.</td> <!--https://en.wikipedia.org/wiki/Chwee_kueh-->
                            <td class="col-2 data">$0.50/pc</td>
                            <td class="col-2"><img src="img/Kueh with Character/Chwee Kueh.jpg" class="img-fluid img-thumbnail" alt="Chwee Kueh"></td> <!--http://www.mykitchensnippets.com/2011/04/chwee-kuehquar-ko-kuehsteamed-rice-cake.html-->
                            <td class="col-1"><a href = # class="edit" data-toggle="modal" data-target="#editModal"><span class="fa fa-edit"> Edit</span></a> 
                                <a href = # class="delete" data-toggle="modal" data-target="#deleteModal"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">2</td>
                            <td class="col-2 data">Kueh with Character</td>
                            <td class="col-2 data">Png Kueh</td>
                            <td class="col-2 data">Soft and tender and the glutinous rice filling with full of mushroom and dried shrimp flavour. Added some fried shallots, chopped spring onions and a trickle of sweet soy sauce.</td> <!-- http://ieatishootipost.sg/teochew-kueh-why-is-there-red-and-white-png-kueh/-->
                            <td class="col-2 data">$0.60/pc</td>
                            <td class="col-2"><img src="img/Kueh with Character/Png Kueh.jpg" class="img-fluid img-thumbnail" alt="Png Kueh"></td> <!-- http://www.pbs.org/food/fresh-tastes/hungry-ghost-festival-singapore/-->
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">3</td>
                            <td class="col-2 data">The Basic Kuehs</td>
                            <td class="col-2 data">Ang Ku Kueh</td>
                            <td class="col-2 data">Small round or oval shaped pastry with soft sticky glutinous rice flour skin wrapped around a sweet filling in the centre.</td> <!-- https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
                            <td class="col-2 data">$0.50/pc</td>
                            <td class="col-2"><img src="img/The Basic Kuehs/Ang Ku Kueh.jpg" class="img-fluid img-thumbnail" alt="Ang Ku Kueh"></td> <!-- https://www.stovve.com/peranakan-patisserie -->
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                         <tr class="table-light d-flex">
                            <td class="col-1 data">4</td>
                            <td class="col-2 data">The Basic Kuehs</td>
                            <td class="col-2 data">Ondeh Ondeh</td>
                            <td class="col-2 data">One of the all-time favourite Nonya desserts, soft glutinous rice balls, infused in pandan juice, filled with aromatic palm sugar, then coated in a sweet, fresh and pleasant taste of grated white coconut.</td> <!-- https://www.ladyironchef.com/2015/08/guide-traditional-kueh/ -->
                            <td class="col-2 data">$0.30/pc</td>
                            <td class="col-2"><img src="img/The Basic Kuehs/Ondeh Ondeh.jpg" class="img-fluid img-thumbnail" alt="Ondeh Ondeh"></td> <!-- https://www.elmundoeats.com/pandan-balls-with-coconut-sugar-ondeh-ondeh/-->
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">5</td>
                            <td class="col-2 data">The Heavyweight Kuehs</td>
                            <td class="col-2 data">Apam Balik</td>
                            <td class="col-2 data">A Southeast Asian fluffy pancake with cream corn or peanuts. This soft pancake has a thick surface with thin and crispy side.</td> <!-- https://www.nyonyacooking.com/recipes/apam-balik~SJ5WuvsDf9WQ -->
                            <td class="col-2 data">$0.70/pc</td>
                            <td class="col-2"><img src="img/The Heavyweight Kuehs/Apam Balik.jpg" class="img-fluid img-thumbnail" alt="Apam Balik"></td> <!-- https://www.elmundoeats.com/asian-peanut-pancake-turnover-apam-balik/ -->
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">6</td>
                            <td class="col-2 data">The Heavyweight Kuehs</td>
                            <td class="col-2 data">Kueh Cara</td>
                            <td class="col-2 data">Made from pure coconut milk and vanilla juice and stuffed with chopped coconut sugar for the explosion filling.</td> <!-- https://www.tasteatlas.com/kuih-cara-manis -->
                            <td class="col-2 data">$0.40/pc</td>
                            <td class="col-2"><img src="img/The Heavyweight Kuehs/Kueh Cara.jpg" class="img-fluid img-thumbnail" alt="Kueh Cara"></td> <!-- https://www.kuali.com/recipe/kuih-cara-manis-pandan-sponge-cake/ -->
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">7</td>
                            <td class="col-2 data">The Heavyweight Kuehs</td>
                            <td class="col-2 data">Kueh Talam Ubi</td>
                            <td class="col-2 data">It’s a 2 layered steamed kueh, fresh coconut milk at the top and tapioca at the bottom. Sweet and savoury at the same time.</td> <!-- http://fuzzymazing.blogspot.com/2011/10/talam-ubi.html-->
                            <td class="col-2 data">$0.50/pc</td>
                            <td class="col-2"><img src="img/The Heavyweight Kuehs/Kueh Talam Ubi.jpg" class="img-fluid img-thumbnail" alt="Kueh Talam Ubi"></td> <!-- https://www.aynorablogs.com/2018/11/resepi-kuih-talam-ubi-yang-sedap.html-->
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </section>
        
<!--Edit modal-->
        <aside>
            <section class="modal fade standardfont" id="editModal">
                <section class="modal-dialog modal-dialog-centered">
                    <section class="modal-content">
                        <form action="editadmin.php">
                            <section class="modal-header">
                                <h4 class="modal-title">Edit Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </section>

                            <section class="modal-body">
                                    <section class="form-group">
                                        <label for="acategory">Category</label>
                                        <input type="text" name="acategory" id="addCategory" class="form-control" value="Kueh with Character" placeholder="Enter Category" required>
                                    </section>

                                    <section class="form-group">
                                        <label for="aname">Name</label>
                                        <input type="text" name="aname" id="addName" class="form-control" value="Chwee Kueh" placeholder="Enter Name" required>
                                    </section>

                                    <section class="form-group">
                                        <label for="adescription">Description</label>
                                        <textarea name="adescription" id="addDescription" class="form-control" rows="5" placeholder="Enter Description" required>A popular breakfast item which rice cakes are topped with diced preserved radish and served with chili sauce.</textarea>
                                    </section>

                                    <section class="form-group">
                                        <label for="aprice">Price</label>
                                        <input type="text" name="aprice" id="addPrice" class="form-control" value="$0.50/pc" placeholder="Enter Price" required>
                                    </section>

                                    <p>Update Image</p>
                                    <section class="custom-file">
                                        <input type="file" class="custom-file-input" id="insertImg" name="filename">
                                        <label class="custom-file-label" for="insertImg">Choose file</label>
                                    </section>
                            </section>

                            <section class="modal-footer">
                                <button type="submit" class="btn btn-success" name="submit">Update</button>    
                            </section>
                        </form>
                    </section>         
                </section>
            </section>
        </aside>
 
<!--Delete modal-->
        <aside>
            <section class="modal fade standardfont" id="deleteModal">
                <section class="modal-dialog modal-dialog-centered">
                    <section class="modal-content">
                        <form action="editadmin.php">
                            <section class="modal-header">
                                <h4 class="modal-title">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </section>

                            <section class="modal-body">
                                <p>Are you sure you want to delete this record?</p>
                                <p id="warning">This action cannot be undone when deleted.</p>
                            </section>
                            <section class="modal-footer">
                                <button type="submit" class="btn btn-danger">Delete</button>    
                            </section>
                        </form>
                    </section>         
                </section>
            </section>
        </aside>
    </body>
    
    <?php include "footer_include.php" ?>
</html>