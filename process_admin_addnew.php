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
    if (!preg_match("/^[a-zA-Z'-]+$/", $addName)) {
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
    if (!preg_match("/^[1-9]+(\.[0-9]{2})?$/", $addPrice)) {
        $errorMsg .= "Price is not valid. Only 2 decimal places are allowed and the price cannot be zero.<br>";
        $success = false;
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
    global $addCategory, $addName, $addDescription, $addPrice, $errorMsg, $success, $userId;

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    //Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed:" . $conn->connect_error;
        $success = false;
    } else {
        session_start();
        $userId = $_SESSION['userId'];
        $sql = "INSERT INTO product (description, category, name, price, user_userId)";
        $sql .= " VALUES ('$addDescription', '$addCategory', '$addName', $addPrice, '$userId')";

        //Execute the query
        if (!$conn->query($sql)) {
            $errorMsg = "Database error: " . $conn->error;
            $success = false;
        }
    }

    $conn->close();
}
?>

<body>


</body>
