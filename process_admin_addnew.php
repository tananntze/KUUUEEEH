<?php

include "adminheader.php";
// Constants for accessing our DB:
define("DBHOST", "161.117.122.252");
define("DBNAME", "p1_1");
define("DBUSER", "p1_1");
define("DBPASS", "F3ms97bpZA");

$addCategory = $addName = $addDescription = $addPrice = $insertImg = "";
$cerrorMsg = $nerrorMsg = $derrorMsg = $perrorMsg = $ierrorMsg = ""; //Category, name, description, price, image error messages
$csuccess = $nsuccess = $dsuccess = $psuccess = $isuccess = true; //Category, name, description, price, image success status

//addCategory - Dont need validate as there is a default value
//if (empty($_POST["addCategory"])) 
//{
//    $cerrorMsg .= "Category is required.<br>";
//    $csuccess = false;
//}  
//else 
//{ 
//    $addCategory = sanitize_input($_POST["addCategory"]);
//}

//addName
if (empty($_POST["addName"])) 
{
    $nerrorMsg .= "Name is required for the kueh.<br>";
    $nsuccess = false;
}
else 
{
    $addName = sanitize_input($_POST["addName"]);
    
    if (!preg_match("/^[a-zA-Z](?!.* {2,6})[ \w.-]{2,15}$/", $addName)) 
    {
        $nerrorMsg .= "Name is not valid. It must not contain numbers, special characters or double spaces.<br>";
        $nsuccess = false;
    }
}

//addDescription
if (empty($_POST["addDescription"])) 
{
    $derrorMsg .= "Description is required to describe the kueh.<br>";
    $dsuccess = false;
} 
else 
{
    $addDescription = sanitize_input($_POST["addDescription"]);
    if (!preg_match("/^[\w-,.]{10,280}$/", $addDescription))
    {
        $derrorMsg .= "Description given is not a valid format.<br>";
        $dsuccess = false;
    }
}

//addPrice
if (empty($_POST["addPrice"])) 
{
    $perrorMsg .= "Price is required.<br>";
    $psuccess = false;
} 
else 
{
    $addPrice = sanitize_input($_POST["addPrice"]);
    
    //0.01 to 99.99 validation Credited By: https://stackoverflow.com/questions/3727052/0-01-to-99-99-in-a-regular-expression
    if (!preg_match("/^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$/", $addPrice)) 
    {
        $perrorMsg .= "Price is not valid. Only 2 decimal places are allowed and the price cannot be zero.<br>";
        $psuccess = false;
    }
}

//reference: https://stackoverflow.com/questions/41517897/move-upload-file-is-failed-to-open-stream-and-unable-to-move-file
//insert img into database using file path method

//Setting variables
$maxfilesize = 2048000; //MAX File Size 2MB allowed file size
$allowed =  array('jpg','jpeg'); //allowed extensions
$ext = pathinfo($_FILES['insertImg']['name'], PATHINFO_EXTENSION); //file extension

if(isset($_POST['submit']))
{
    if (empty($_FILES['insertImg']['name']) || $_FILES['insertImg']['name']!="")
    {
        $ierrorMsg .= "Please insert a file.";
    }
    
    else
    {
        if (filesize($_FILES['insertImg']['name']) > $maxfilesize)
        {
            $ierrorMsg .= "Max file size exceeded. Please upload a smaller file.";
            $isuccess = false;        
        }
        
        else if (!in_array($ext,$allowed))
        {
            $ierrorMsg .= "File extension not accepted. Please upload a file with either jpg pr jpeg extension.";
        }
        
        else
        {
            // Where the file is going to be stored
            if(($_POST['addCategory']) == "Kueh with Character") 
            {

                $target_dir = "img/Kueh with Character/"; //target folder
            } 

            elseif (($_POST['addCategory']) == "The Basic Kuehs") 
            {

                $target_dir = "img/The Basic Kuehs/"; //target folder

            } 

            else 
            {

                $target_dir = "img/The Heavyweight Kuehs/"; //target folder

            }

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
    //saveFoodItemToDB();
    echo "<h2>Your item, </h2>" . $addName . "<h2>have successfully added!!</h2>";
    echo "<br>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-default'>Back to Admin Panel</button></a>";

} 
else 
{
    echo "<h1>Oh No!</h1>";
    echo "<h4>The following input errors were detected:</h4>";
    echo "<p>" . $nerrorMsg . "</p>";
    echo "<p>" . $derrorMsg . "</p>";
    echo "<p>" . $perrorMsg . "</p>";
    echo "<p>" . $ierrorMsg . "</p>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-default'>Back to Admin Panel</button></a>";
}

//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Helper function to write the data to the DB
function saveFoodItemToDB() 
{
    global $addCategory, $addName, $addDescription, $addPrice, $errorMsg, $success, $userId, $insertImg;

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    //Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed:" . $conn->connect_error;
        $success = false;
    } else {
        session_start();
        $userId = $_SESSION['userId']; //retrieve userId from session
        $sql = $conn->prepare("INSERT INTO product (image, description, category, name, price, user_userId) VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssdi", $insertImg, $addDescription, $addCategory, $addName, $addPrice, $userId);
        $sql->execute();
        $sql->close();
        $conn->close();
    }
}



