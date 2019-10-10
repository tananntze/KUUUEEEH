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
        <link rel="stylesheet" href="css/editadmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/editadmin.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>


    </head>
    <body class="overlay">
        <header>
            <nav class="nav navbar navbar-expand-md bg-pink navbar-dark"  role ="navigation">
                <a class="navbar-brand" href="#">Kuey Logo</a>
                <button class ="navbar-toggler custom-toggler" type = 'button' data-toggle="collapse" data-target ="#navbar">
                    <span class ="navbar-toggler-icon"></span>
                </button>
                <div class ="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <li class ="nav-item"><a href ="#">Orders of the day </a></li>

                        <li class ="nav-item"><a href="editadmin.php">Kueh Menu</a></li>

                        <li class ="nav-item"><a href="promotions.php">Promotions</a></li>
                    </ul>
                    <ul class ="nav navbar-nav ml-auto">
                        <li class="nav navbar-nav">
                            <a class ="nav-link" href="home.php"><span class="fas fa-directions">Logout</span></a>
                        </li>
                    </ul>
                </div>  
            </nav>
        </header>
        
        <div class="container">
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>
        
        <section class="container standardfont">
                <section class="card">
                    <section class="card-header">
                            <span class="fas fa-search"></span><strong> Search by</strong> 
                            <a href="#" class="btn btn-dark addItem btn-sm" role="button" data-toggle="modal" data-target="#addModal"><span class="fa fa-plus-circle"></span> Add New Item</a>
                    </section>
                <section class="card-body">
                        <form>
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
        <!--                add new item modal-->
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
                                                <input type="text" name="acategory" id="addCategory" class="form-control" value="" placeholder="Enter Category" required>
                                            </section>
                                        
                                            <section class="form-group">
                                                <label for="aname">Name</label>
                                                <input type="text" name="aname" id="addName" class="form-control" value="" placeholder="Enter Name" required>
                                            </section>
                                        
                                            <section class="form-group">
                                                <label for="adescription">Description</label>
                                                <textarea name="adescription" id="addDescription" class="form-control" rows="5" value="" placeholder="Enter Description" required></textarea>
                                            </section>
                                        
                                            <section class="form-group">
                                                <label for="aprice">Price</label>
                                                <input type="text" name="aprice" id="addPrice" class="form-control" value="" placeholder="Enter Price" required>
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
                            <td class="col-2 data">A popular breakfast item which rice cakes are topped with diced preserved radish and served with chili sauce.</td>
                            <td class="col-2 data">$0.50/pc</td>
                            <td class="col-2"><img src="img/Kueh with Character/Chwee Kueh.jpg" class="img-fluid img-thumbnail" alt="Chwee Kueh"></td>
                            <td class="col-1"><a href = # class="edit" data-toggle="modal" data-target="#editModal"><span class="fa fa-edit"> Edit</span></a> 
                                <a href = # class="delete" data-toggle="modal" data-target="#deleteModal"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">2</td>
                            <td class="col-2 data">Kueh with Character</td>
                            <td class="col-2 data">Png Kueh</td>
                            <td class="col-2 data">Soft and tender and the glutinous rice filling with full of mushroom and dried shrimp flavour. Added some fried shallots, chopped spring onions and a trickle of sweet soy sauce.</td>
                            <td class="col-2 data">$0.60/pc</td>
                            <td class="col-2"><img src="img/Kueh with Character/Png Kueh.jpg" class="img-fluid img-thumbnail" alt="Png Kueh"></td>
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">3</td>
                            <td class="col-2 data">The Basic Kuehs</td>
                            <td class="col-2 data">Ang Ku Kueh</td>
                            <td class="col-2 data">Small round or oval shaped pastry with soft sticky glutinous rice flour skin wrapped around a sweet filling in the centre.</td>
                            <td class="col-2 data">$0.50/pc</td>
                            <td class="col-2"><img src="img/The Basic Kuehs/Ang Ku Kueh.jpg" class="img-fluid img-thumbnail" alt="Ang Ku Kueh"></td>
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                         <tr class="table-light d-flex">
                            <td class="col-1 data">4</td>
                            <td class="col-2 data">The Basic Kuehs</td>
                            <td class="col-2 data">Ondeh Ondeh</td>
                            <td class="col-2 data">One of the all-time favourite Nonya desserts, soft glutinous rice balls, infused in pandan juice, filled with aromatic palm sugar, then coated in a sweet, fresh and pleasant taste of grated white coconut.</td>
                            <td class="col-2 data">$0.30/pc</td>
                            <td class="col-2"><img src="img/The Basic Kuehs/Ondeh Ondeh.jpg" class="img-fluid img-thumbnail" alt="Ondeh Ondeh"></td>
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">5</td>
                            <td class="col-2 data">The Heavyweight Kuehs</td>
                            <td class="col-2 data">Apam Balik</td>
                            <td class="col-2 data">A Southeast Asian fluffy pancake with cream corn or peanuts. This soft pancake has a thick surface with thin and crispy side.</td>
                            <td class="col-2 data">$0.70/pc</td>
                            <td class="col-2"><img src="img/The Heavyweight Kuehs/Apam Balik.jpg" class="img-fluid img-thumbnail" alt="Apam Balik"></td>
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">6</td>
                            <td class="col-2 data">The Heavyweight Kuehs</td>
                            <td class="col-2 data">Kueh Cara</td>
                            <td class="col-2 data">Made from pure coconut milk and vanilla juice and stuffed with chopped coconut sugar for the explosion filling.</td>
                            <td class="col-2 data">$0.40/pc</td>
                            <td class="col-2"><img src="img/The Heavyweight Kuehs/Kueh Cara.jpg" class="img-fluid img-thumbnail" alt="Kueh Cara"></td>
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                        <tr class="table-light d-flex">
                            <td class="col-1 data">7</td>
                            <td class="col-2 data">The Heavyweight Kuehs</td>
                            <td class="col-2 data">Kueh Talam Ubi</td>
                            <td class="col-2 data">It’s a 2 layered steamed kueh, fresh coconut milk at the top and tapioca at the bottom. Sweet and savoury at the same time.</td>
                            <td class="col-2 data">$0.50/pc</td>
                            <td class="col-2"><img src="img/The Heavyweight Kuehs/Kueh Talam Ubi.jpg" class="img-fluid img-thumbnail" alt="Kueh Talam Ubi"></td>
                            <td class="col-1"><a href = # class="edit"><span class="fa fa-edit"> Edit</span></a>
                                <a href = # class="delete"><span class="fas fa-trash-alt"> Delete</span></a></td>
                        </tr>
                    </tbody>
                </table>
                </section>
        </section>
        <!--                edit modal-->
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
 <!--                delete modal-->
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
</html>