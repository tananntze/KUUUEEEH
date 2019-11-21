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

<html lang="en">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        
        <script src="js/editadmin.js"></script> 
        <script src="js/process_editadmin.js"></script>
    </head>
    
    <body class="overlay">
        <?php include "adminheader.php" ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/BannerWhite.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>

        <!--Admin header and search by category or food name and add food item function-->
        <section class="container standardfont"> 
            <h1 class="fontheader" id="editadmin_header">Admin Panel</h1>

            <section class="card">
                <section class="card-header">
                    <span class="fas fa-search searchIcon"></span><strong> Search by</strong> 
                    <a href="#" class="btn btn-dark addItem btn-sm" data-toggle="modal" data-target="#addModal" aria-label="Add New Item"><span class="fa fa-plus-circle"></span> Add New Item</a>
                </section>

                <section class="card-body">
                    <form name = "searchform" action="process_search.php" onsubmit="return validateSearch()" method="post">
                        <div class="row">
                            <div class="col-2">
                                <section class="form-group">
                                    <label for="scategory" class="formtitle">Category</label>
                                    <input type="text"  name="scategory"  id="scategory" class="form-control" placeholder="Enter Category" pattern="^[a-zA-Z](?!.* {2})[ \w.-]{2,}$">
                                </section>
                            </div>

                            <div class="col-2">
                                <section class="form-group">
                                    <label for="sname">Name</label>
                                    <input type="text" name="sname" id="sname" class="form-control" placeholder="Enter Name" pattern="^[a-zA-Z](?!.* {2,})[ \w.-]{2,}$">
                                </section>
                            </div>

                            <div class="col-4">
                                <button type="submit" name="submit" value="search" id="search" class="btn btn-primary" aria-label="Submit Search"><span class="fas fa-search"></span> Search</button>
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
                    <form name = "addform" action="process_admin_addnew.php" onsubmit="return validateAdd()"  method="post" enctype="multipart/form-data">
                        <section class="modal-header">
                            <h4 class="modal-title">Add New Item</h4>
                            <button type="button" class="close" data-dismiss="modal" role="button" aria-label="Close Add New Item">&times;</button>
                        </section>

                        <section class="modal-body">
                            <section class="form-group">
                                <label for="addCategory">Select Category:</label>
                                <select class="form-control" name="addCategory" id="addCategory" required>
                                    <option value="" disabled selected>Please select an category</option>
                                    <option value="Kueh with Character">Kueh with Character</option>
                                    <option value ="The Basic Kuehs">The Basic Kuehs</option>
                                    <option value ="The Heavyweight Kuehs">The Heavyweight Kuehs</option>
                                </select>
                            </section>


                            <section class="form-group">

                            <section class="form-group">            

                                <label for="addName">Name</label>
                                <input type="text" name="addName" id="addName" class="form-control" placeholder="Enter Name" required pattern="/^[a-zA-Z ](?!.*{2,})[ \w.-]{2,}$/" max="15">
                            </section>

                            <section class="form-group">
                                <label for="addDescription">Description</label>
                                <textarea name="addDescription" id="addDescription" class="form-control" rows="5" placeholder="Enter Description" required pattern="/[\w\s\-,.]{10,}$/" max="200"></textarea>
                            </section>

                            <section class="form-group">
                                <label for="addPrice">Price</label>
                                <input type="text" name="addPrice" id="addPrice" class="form-control" placeholder="Enter Price" required pattern="^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$">
                            </section>

                            <p>Insert Image</p>
                            <section class="custom-file">
                                <label class="custom-file-label" for="insertImg">Choose file</label>

                                <input type="file" class="custom-file-input" name="insertImg" id="insertImg" required accept=".jpg, .jpeg">

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
                                    <td class="col-1"><button type="button" class="btn editbtn" aria-label="Edit Item"><span class="fa fa-edit"> Edit</span></button> 
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
                        <form name = "editform" action="process_admin_edit.php" onsubmit="return validateEdit()" method="post" enctype="multipart/form-data">
                            <section class="modal-header">
                                <h4 class="modal-title">Edit Item</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </section>

                            <section class="modal-body">

                                    <section class="form-group">
                                        <label for="updateProdId">Product Id</label>
                                        <input type="text" name="updateProdId" id="updateProdId" class="form-control" placeholder="Product ID" readonly>
                                    </section>
                                    <section class="form-group">
                                    <label for="editCategory">Select Category:</label>
                                        <select class="form-control" name="editCategory" id="editCategory" required>
                                            <option value="" disabled>Please select a category</option>
                                            <option value ="Kueh with Character">Kueh with Character</option>
                                            <option value ="The Basic Kuehs">The Basic Kuehs</option>
                                            <option value ="The Heavyweight Kuehs">The Heavyweight Kuehs</option>
                                    </select>
                                </section>

                                <section class="form-group">

                                    <label for="ename">Name</label>
                                    <input type="text" name="editName" id="editName" class="form-control" placeholder="Enter Name" required pattern="/^[a-zA-Z ](?!.*{2,})[ \w.-]{2,}$/" max="15">
                                </section>

                                <section class="form-group">
                                    <label for="edescription">Description</label>
                                    <textarea name="editDescription" id="editDescription" class="form-control" rows="5" placeholder="" required pattern="/[\w\s\-,.]{10,}$/" max="200"></textarea>
                                </section>

                                <section class="form-group">
                                    <label for="eprice">Price</label>
                                    <input type="text" name="editPrice" id="editPrice" class="form-control" required pattern="^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$">
                                </section>
                                <section class="form-group">
                                    <label for="editStatus">Select Status:</label>
                                    <select class="form-control" name="editStatus" id="editStatus" required>
                                        <option value="" disabled>Please select a status</option>
                                        <option>Active</option>
                                        <option>Inactive</option>
                                    </select>
                                </section>

                                <p>Update Image</p>
                                <section class="custom-file">
                                    <label class="custom-file-label" for="updateImg">Choose file</label>
                                    <input type="file" class="custom-file-input" id="updateImg" name="updateImg" accept=".jpg, .jpeg">
                                </section>
                            </section>

                            <section class="modal-footer">
                                <button type="submit" class="btn btn-success" id="update" name="update" aria-label="Update Item">Update</button>    
                            </section>
                        </form>
                    </section>         
                </section>
            </section>
        </aside>

    </body>

</html>
