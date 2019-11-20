
<?php

session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
}

include "adminheader.php";
// Constants for accessing our DB:
define("DBHOST", "161.117.122.252");
define("DBNAME", "p1_1");
define("DBUSER", "p1_1");
define("DBPASS", "F3ms97bpZA");

$editCategory = $editName = $editDescription = $editPrice = $editStatus = $updateImg = "";
$cerrorMsg = $nerrorMsg = $derrorMsg = $perrorMsg = $ierrorMsg = "";
$nsuccess = $dsuccess = $psuccess = $isuccess = true;

//Edit category
$editCategory = sanitize_input($_POST["editCategory"]);


//Edit name
if (empty($_POST["editName"])) 
{
    $nerrorMsg .= "Name is required for the kueh.<br>";
    $nsuccess = false;
}
else 
{
    $editname = sanitize_input($_POST["editName"]);
    
    if (!preg_match("/^[a-zA-Z](?!.* {2,6})[ \w.-]{2,15}$/", $editname)) 
    {
        $nerrorMsg .= "Name is not valid. It must not contain numbers, special characters or double spaces.<br>";
        $nsuccess = false;
    }
}

//Edit description
if (empty($_POST["editDescription"])) 
{
    $derrorMsg .= "Description is required to describe the kueh.<br>";
    $dsuccess = false;
} 
else 
{
    $editdescription = sanitize_input($_POST["editDescription"]);
    
    if (!preg_match("/[\w\s\-,.]{10,160}$/", $editescription))
    {
        $derrorMsg .= "Description given is not a valid format.<br>";
        $dsuccess = false;
    }
}

//Edit price
if (empty($_POST["editPrice"])) 
{
    $perrorMsg .= "Price is required.<br>";
    $psuccess = false;
} 
else 
{
    $editprice = sanitize_input($_POST["editPrice"]);
    
    //0.01 to 99.99 validation Credited By: https://stackoverflow.com/questions/3727052/0-01-to-99-99-in-a-regular-expression
    if (!preg_match("/^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$/", $editprice)) 
    {
        $perrorMsg .= "Price is not valid. Only 2 decimal places are allowed and the price cannot be zero.<br>";
        $psuccess = false;
    }
}

//Edit status
$editstatus = sanitize_input($_POST["editStatus"]);

//Edit file
//References: https://stackoverflow.com/questions/10456113/php-check-file-extension-in-upload-form
//https://www.php.net/manual/en/function.filesize.php 
//Reference: https://stackoverflow.com/questions/41517897/move-upload-file-is-failed-to-open-stream-and-unable-to-move-file
//insert img into database using file path method

//Setting variables
$maxfilesize = 2048000; //MAX File Size 2MB allowed file size
$allowed =  array('jpg','jpeg'); //allowed extensions
$filetype = pathinfo($_FILES['updateImg']['name'], PATHINFO_EXTENSION); //file extension

if(isset($_POST['submit']))
{
    //If there is no files
    if (empty($_FILES['updateImg']['name']) || $_FILES['updateImg']['name'] = "")
    {
        $ierrorMsg .= "Please insert a file.";
    }
    
    //If a file is included
    else
    {
        //Ensure the size is less than maxfilesize
        if (filesize($_FILES['updateImg']['name']) > $maxfilesize)
        {
            $ierrorMsg .= "Max file size exceeded. Please upload a smaller file.";
            $isuccess = false;  
        }

        //Ensure only certain file extesions are accepted.
        else if (!in_array($filetype,$allowed))
        {
            $ierrorMsg .= "File extension not accepted. Please upload a file with either jpg pr jpeg extension.";
            $isuccess = false;  
        }
        
        else
        {
            // Where the file is going to be stored
            if(($_POST['editCategory']) == "Kueh with Character") 
            {

                $target_dir = "img/Kueh with Character/"; //target folder
            } 

            elseif (($_POST['editCategory']) == "The Basic Kuehs") 
            {

                $target_dir = "img/The Basic Kuehs/"; //target folder

            } 

            else 
            {

                $target_dir = "img/The Heavyweight Kuehs/"; //target folder

            }

//Reference: https://stackoverflow.com/questions/41517897/move-upload-file-is-failed-to-open-stream-and-unable-to-move-file
//insert img into database using file path method
            $file = $_FILES['insertImg']['name'];//creating file path
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['insertImg']['tmp_name'];
            $path_filename_ext = $target_dir.$filename.".".$ext; 
            $insertImg = $path_filename_ext; //declaring insertImg = file path 
            move_uploaded_file($temp_name,$path_filename_ext); //move the image into the folder
        }
    }
}

//success
if ($nsuccess && $dsuccess && $psuccess && $isuccess) 
{
    editData();
    echo "<h2>You have successfully updated!!</h2>";
    echo "<br>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-primary'>Back to Admin Panel</button></a>";
} 
else 
{
    echo "<h1>Oh No!</h1>";
    echo "<h4>The following input errors were detected:</h4>";
    echo "<p>" . $nerrorMsg . "</p>";
    echo "<p>" . $derrorMsg . "</p>";
    echo "<p>" . $perrorMsg . "</p>";
    echo "<p>" . $ierrorMsg . "</p>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-primary'>Back to Admin Panel</button></a>";
}

//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
        if (($_FILES['updateImg']['name'] != "")) {
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
?>

<html lang="en">
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
</html>