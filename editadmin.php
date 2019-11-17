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
        <script src="js/editadmin.js"></script> 
        


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
                    <form action="process_search.php" method="post">
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
                    <form action="process_admin_addnew.php" method="post" enctype="multipart/form-data">
                        <section class="modal-header">
                            <h4 class="modal-title">Add New Item</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </section>

                        <section class="modal-body">
                            <section class="form-group">
                                <label for="acategory">Select Category:</label>
                                <select class="form-control" name="addCategory" id="addCategory" required>
                                    <option>Kueh with Character</option>
                                    <option>The Basic Kuehs</option>
                                    <option>The Heavyweight Kuehs</option>
                                </select>
                            </section>

                            <section class="form-group">
                                <label for="aname">Name</label>
                                <input type="text" name="addName" id="addName" class="form-control" placeholder="Enter Name" required>
                            </section>

                            <section class="form-group">
                                <label for="adescription">Description</label>
                                <textarea name="addDescription" id="addDescription" class="form-control" rows="5" placeholder="Enter Description" required></textarea>
                            </section>

                            <section class="form-group">
                                <label for="aprice">Price</label>
                                <input type="text" name="addPrice" id="addPrice" class="form-control" placeholder="Enter Price" required>
                            </section>

                            <p>Insert Image</p>
                            <section class="custom-file">
                                <label class="custom-file-label" for="insertImg">Choose file</label>
                                <input type="file" class="custom-file-input" name="insertImg" id="insertImg">
                            </section>
                        </section>

                        <section class="modal-footer">
                            <button type="submit" class="btn btn-success" name="submit" id="submit">Submit</button>    
                        </section>
                    </form>
                </section>         
            </section>
        </aside>

        <!--Edit/update & display food items in the menu table-->
        <section class="container standardfont">
            <section class="card">
                <table class="table table-hover table-responsive">
                    <thead>
                        <tr class="d-flex">
                            <th class="col-1">Prod No.</th>
                            <th class="col-2">Category</th>
                            <th class="col-2">Name</th>
                            <th class="col-2">Description</th>
                            <th class="col-1">Price</th>
                            <th class="col-2">Image</th>
                            <th class="col-1">Status</th>
                            <th class="col-1">Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include "dbConfig.php";
                        $conn = connectToDB();
                        $sql = "SELECT * FROM product";
                        $result = $conn->query($sql);

                       
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                        ?>
                       
                                <tr class="table-light d-flex">
                                    <td class="col-1 data"><?php echo $row['prodId']; ?></td>
                                    <td class="col-2 data"><?php echo $row['category']; ?></td>
                                    <td class="col-2 data"><?php echo $row['name']; ?></td>
                                    <td class="col-2 data"><?php echo $row['description'];?></td> 
                                    <td class="col-1 data"><?php echo $row['price']; ?></td>
                                    <td class="col-2"><img src="<?php echo $row['image']; ?>" class="img-fluid img-thumbnail" alt="<?php echo $row['name']; ?>"></td> 
                                    <td class="col-1 data"><?php echo $row['status']; ?></td>
                                    <td class="col-1"><button type="button" class="btn editbtn"><span class="fa fa-edit"> Edit</span></button> 
                                </tr>
                              
                                <?php
                            }
                        } else {
                            echo "0 results found";
                        }
                       $result->free_result();
                        ?>
                    </tbody>
                </table>
            </section>
        </section>

        <!--Edit modal-->
<!--        https://www.youtube.com/watch?v=mh4MVFiMZTM to retrieve and display in the fields-->
        <aside>
            <section class="modal fade standardfont" id="editModal">
                <section class="modal-dialog modal-dialog-centered">
                    <section class="modal-content">
                        <form action="process_admin_edit.php" method="post" enctype="multipart/form-data">
                            <section class="modal-header">
                                <h4 class="modal-title">Edit Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </section>

                            <section class="modal-body">

                                    <section class="form-group">
                                        <label for="eprodId">Product Id</label>
                                        <input type="text" name="updateProdId" id="updateProdId" class="form-control" placeholder="Product ID" readonly>
                                    </section>
                                    <section class="form-group">
                                    <label for="ecategory">Select Category:</label>
                                        <select class="form-control" name="editCategory" id="editCategory" required>
                                        <option>Kueh with Character</option>
                                        <option>The Basic Kuehs</option>
                                        <option>The Heavyweight Kuehs</option>
                                    </select>
                                </section>

                                <section class="form-group">
                                    <label for="ename">Name</label>
                                    <input type="text" name="editName" id="editName" class="form-control" placeholder="Enter Name" required>
                                </section>

                                <section class="form-group">
                                    <label for="edescription">Description</label>
                                    <textarea name="editDescription" id="editDescription" class="form-control" rows="5" placeholder="" required></textarea>
                                </section>

                                <section class="form-group">
                                    <label for="eprice">Price</label>
                                    <input type="text" name="editPrice" id="editPrice" class="form-control" required>
                                </section>

                                <section class="form-group">
                                    <label for="estatus">Select Status:</label>
                                    <select class="form-control" name="editStatus" id="editStatus" required>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </section>

                                <p>Update Image</p>
                                <section class="custom-file">
                                    <label class="custom-file-label" for="updateImg">Choose file</label>
                                    <input type="file" class="custom-file-input" id="updateImg" name="updateImg">
                                </section>
                            </section>

                            <section class="modal-footer">
                                <button type="submit" class="btn btn-success" id="update" name="update">Update</button>    
                            </section>
                        </form>
                    </section>         
                </section>
            </section>
        </aside>

    </body>

</html>