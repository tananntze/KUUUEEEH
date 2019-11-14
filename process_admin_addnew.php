<?php

include "adminheader.php";
// Constants for accessing our DB:
define("DBHOST", "161.117.122.252");
define("DBNAME", "p1_1");
define("DBUSER", "p1_1");
define("DBPASS", "F3ms97bpZA");

$addCategory = $addName = $addDescription = $addPrice = $insertImg = "";
$errorMsg = "";
$success = true;

//addCategory
if (empty($_POST["addCategory"])) {
    $errorMsg .= "Category is required.<br>";
    $success = false;
}  else { 
    $addCategory = sanitize_input($_POST["addCategory"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $addCategory)) {
        $errorMsg .= "Category is not valid. It must not contain numbers or special characters.<br>";
        $success = false;
    }
}

//addName
if (empty($_POST["addName"])) {
    $errorMsg .= "Name is required for the kueh.<br>";
    $success = false;
} else {
    $addName = sanitize_input($_POST["addName"]);
    if (!preg_match("/^[a-zA-Z ]*$/", $addName)) {
        $errorMsg .= "Name is not valid. It must not contain numbers or special characters.<br>";
        $success = false;
}
}

//addDescription
if (empty($_POST["addDescription"])) {
    $errorMsg .= "Description is required to describe the kueh.<br>";
    $success = false;
} else {
    $addDescription = sanitize_input($_POST["addDescription"]);
}

//addPrice
if (empty($_POST["addPrice"])) {
    $errorMsg .= "Price is required.<br>";
    $success = false;
} else {
    $addPrice = sanitize_input($_POST["addPrice"]);
    //0.01 to 99.99 validation Credited By: https://stackoverflow.com/questions/3727052/0-01-to-99-99-in-a-regular-expression
    if (!preg_match("/^(?=.*[1-9])\d{0,2}(?:\.\d{0,2})?$/", $addPrice)) {
        $errorMsg .= "Price is not valid. Only 2 decimal places are allowed and the price cannot be zero.<br>";
        $success = false;
    }
}

//reference: https://stackoverflow.com/questions/41517897/move-upload-file-is-failed-to-open-stream-and-unable-to-move-file
//insert img into database using file path method
if(isset($_POST['submit'])){
    if (($_FILES['insertImg']['name']!="")){
        // Where the file is going to be stored
        if(($_POST['addCategory']) == "Kueh with Character") {
            
            $target_dir = "img/Kueh with Character/"; //target folder
            
        } elseif (($_POST['addCategory']) == "The Basic Kuehs") {
            
            $target_dir = "img/The Basic Kuehs/"; //target folder
            
        } else {
            
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


if ($success) {
    saveFoodItemToDB();
    echo "<h2>Your item, </h2>" . $addName . "<h2>have successfully added!!</h2>";
    echo "<br>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-default'>Back to Admin Panel</button></a>";

} else {
    echo "<h1>Oh No!</h1>";
    echo "<h4>The following input errors were detected:</h4>";
    echo "<p>" . $errorMsg . "</p>";
    echo "<a href ='editadmin.php'><button type='button' class='btn btn-default'>Back to Admin Panel</button></a>";
}

//Helper function that checks input for malicious or unwanted content.
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Helper function to write the data to the DB
function saveFoodItemToDB() {
    global $addCategory, $addName, $addDescription, $addPrice, $errorMsg, $success, $userId, $insertImg;

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    //Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed:" . $conn->connect_error;
        $success = false;
    } else {
        session_start();
        $userId = $_SESSION['userId'];
        $sql = "INSERT INTO product (image, description, category, name, price, user_userId)";
        $sql .= " VALUES ('$insertImg','$addDescription', '$addCategory', '$addName', $addPrice, '$userId')";
        //Execute the query
        if (!$conn->query($sql)) {
            $errorMsg = "Database error: " . $conn->error;
            $success = false;
        }
    }

    $conn->close();
}



