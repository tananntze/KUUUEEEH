<!DOCTYPE html>
<?php     
        session_start();
        if(!isset($_SESSION['userId'])){
            header("Location: login.php");
        }
?>
<html lang="en" class="header">
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
        
        <script>
            $(document).ready(function(){
                $('.editbtn').on('click',function(){
                    
                    $('#editModal').modal('show'); //to make the edit modal pop up when on click
                        
                        
                        $tr = $(this).closest('tr');
                        var data = $tr.children("td").map(function() { //create a var to map the TD to the function returning text value.
                            
                            return $(this).text();
                            
                        }).get();
                        
                        console.log(data);
                        
                        //retrieving the data from table and store into form IDs
                        $('#updateProdId').val(data[0]);
                        $('#editCategory').val(data[1]);
                        $('#editName').val(data[2]);
                        $('#editDescription').val(data[3]);
                        $('#editPrice').val(data[4]);
                        $('#updateImg').val(data[5]);
                        $('#editStatus').val(data[6]);
                    
                });
                
            });
        
        </script>
    </head>
    
    <body>
        <?php include "adminheader.php" ?>
        
        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/BannerWhite.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>

        <!--Admin header and search by category or food name and add food item function-->
        <section class="container standardfont">
            <h2 class="fontheader" id="editadmin_header">Search Results</h2>

            <section class="card">
                <section class="card-header">
                    <a href="editadmin.php" class="btn btn-dark addItem btn-sm"><span class="fa fa-arrow-left"></span> Back</a>
                </section>
            </section>
        </section>  
   
        <?php 
    
        //Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        //Function to validate search name and category if fits format
        function validate($data)
        {
            if (!preg_match("/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/", $data))
            {
                $valsuccess = false;
            }
            else
            {
                $valsuccess = true;
            }
            return $valsuccess;
        }
        
        //Defining arguments
        $csuccess = $nsuccess = true;
        include "dbConfig.php";
        
        //If category is filled
        if (!empty($_POST['scategory']) && empty($_POST['sname']))
        {
            $searchcat = sanitize_input($_POST["scategory"]);
            $csuccess = validate($searchcat);
            
            if ($csuccess)
            {
                //Attempt to connect to DB
                $conn = connectToDB();

                //Failed to connect to DB
                if ($conn->connect_error)
                {
                    echo "<p class='searchdesign'>Connection failed. " . $conn->connect_error . ".</p>";
                }

                //Connected to DB
                else
                {
                    $sql = "SELECT * FROM p1_1.product WHERE category='$searchcat'";
                    $result = $conn->query($sql);

                    if ($result-> num_rows > 0)
                    {
                    ?>
                            
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
                        while ($row = $result->fetch_assoc()) 
                        {
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
                    }     
                                     
                    //If there are no results
                    else
                    {
                        echo "<p class='searchdesign'>No results found for " . $searchcat . ".</p>";
                    }
                }
            }
            
            else
            {
                echo "<p class='searchdesign'>Invalid category format.</p>";
            }
        }
        
        //If name is filled
        else if (empty($_POST['scategory']) && !empty($_POST['sname']))
        {
            $searchname = sanitize_input($_POST["sname"]);
            $nsuccess = validate($searchname);
            
            if ($nsuccess)
            {
                //Attempt to connect to DB
                $conn = connectToDB();

                //Failed to connect to DB
                if ($conn->connect_error)
                {
                    echo "<p class='searchdesign'>Connection failed. " . $conn->connect_error . ".</p>";
                }

                //Connected to DB
                else
                {
                    $sql = "SELECT * FROM p1_1.product WHERE name='$searchname'";
                    $result = $conn->query($sql);

                    /* Ensure email and password matches */
                    if ($result-> num_rows > 0)
                    {
                    ?>
                            
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
                        while ($row = $result->fetch_assoc()) 
                        {
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
                    }     
                                     
                    //If there are no results
                    else
                    {
                        echo "<p class='searchdesign'>No results found for " . $searchname . ".</p>";
                    }
                }
            }
            
            else
            {
                echo "<p class='searchdesign'>Invalid name format.</p>";
            }
        }
        
        //If both are filled
        else if (!empty($_POST['scategory']) && !empty($_POST['sname']))
        {
            $searchcat = sanitize_input($_POST["scategory"]);
            $csuccess = validate($searchcat);
            $searchname = sanitize_input($_POST["sname"]);
            $nsuccess = validate($searchname);
            
            if ($csuccess && $nsuccess)
            {
                //Attempt to connect to DB
                $conn = connectToDB();

                //Failed to connect to DB
                if ($conn->connect_error)
                {
                    echo "<p class='searchdesign'>Connection failed. " . $conn->connect_error . ".</p>";
                }

                //Connected to DB
                else
                {
                    $sql = "SELECT * FROM p1_1.product WHERE category = '$searchcat' AND name='$searchname'";
                    $result = $conn->query($sql);

                    /* Ensure email and password matches */
                    if ($result-> num_rows > 0)
                    {
                    ?>
                            
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
                        while ($row = $result->fetch_assoc()) 
                        {
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
                    }     
                                     
                    //If there are no results
                    else
                    {
                        echo "<p class='searchdesign'>No results found for " . $searchcat . " and " . $searchname . ".</p>";
                    }
                }
            }
        }
        
        //If both fields are empty
        else
        {
            echo "<p class='searchdesign'>Please fill in at least one of the search fields.</p>";
        }
        ?>
        
        <!-- Edit modal
        https://www.youtube.com/watch?v=mh4MVFiMZTM to retrieve and display in the fields -->
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