<?php

include "adminheader.php";
// Constants for accessing our DB:
define("DBHOST", "161.117.122.252");
define("DBNAME", "p1_1");
define("DBUSER", "p1_1");
define("DBPASS", "F3ms97bpZA");

$editCategory = $editName = $editDescription = $editPrice = $editStatus = $errorMsg = $updateImg = "";
$success = true;

//reference: https://stackoverflow.com/questions/41517897/move-upload-file-is-failed-to-open-stream-and-unable-to-move-file
//insert img into database using file path method

if(isset($_POST['update'])){

    if (($_FILES['updateImg']['name']!="")){
        
        // Where the file is going to be stored
        if (($_POST['editCategory']) == "Kueh with Character") {

            $target_dir = "img/Kueh with Character/"; //target folder
        } elseif (($_POST['editCategory']) == "The Basic Kuehs") {

            $target_dir = "img/The Basic Kuehs/"; //target folder
        } else {

            $target_dir = "img/The Heavyweight Kuehs/"; //target folder
        }

        $file = $_FILES['updateImg']['name']; //creating file path
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['updateImg']['tmp_name'];
        $path_filename_ext = $target_dir . $filename . "." . $ext;
        $updateImg = $path_filename_ext; //declaring updateImg = file path 
        move_uploaded_file($temp_name, $path_filename_ext); //move the image into the folder
    } 

}

//success
if ($success) {
    editData();
    echo "<h2>You have successfully updated!!</h2>";
    echo "<br>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-default'>Back to Admin Panel</button></a>";

} else {
    echo "<h1>Oh No!</h1>";
    echo "<h4>The following input errors were detected:</h4>";
    echo "<p>" . $errorMsg . "</p>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-default'>Back to Admin Panel</button></a>";
    

}

//To update data
function editData() {

    global $editCategory, $editName, $editDescription, $editPrice, $errorMsg, $success, $updateProdId, $updateImg;

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
    
    //passing values into variables 
    $updateProdId = $_POST['updateProdId'];
    $editCategory = $_POST['editCategory'];
    $editName = $_POST['editName'];
    $editDescription = $_POST['editDescription'];
    $editPrice = $_POST['editPrice'];
    $editStatus = $_POST['editStatus'];

//Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed:" . $conn->connect_error;
        $success = false;
    } else {
        if (($_FILES['updateImg']['name']!="")){ 
        $sql = $conn->prepare("UPDATE product SET image= ?, description = ?, category = ?, name = ?, price = ?, status = ? WHERE prodId = ?");
        $sql->bind_param('ssssdsi', $updateImg, $editDescription, $editCategory, $editName, $editPrice, $editStatus, $updateProdId);
        $sql->execute();
        $sql->close();
        $conn->close();
        } else {
            $sql = $conn->prepare("UPDATE product SET description = ?, category = ?, name = ?, price = ?, status = ? WHERE prodId = ?");
            $sql->bind_param('sssdsi', $editDescription, $editCategory, $editName, $editPrice, $editStatus, $updateProdId);
            $sql->execute();
            $sql->close();
            $conn->close();
        }
    }
}

