<?php
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
    global $addCategory, $addName, $addDescription, $addPrice, $errorMsg, $success;

    // Create connection
    $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

    //Check connection
    if ($conn->connect_error) {
        $errorMsg = "Connection failed:" . $conn->connect_error;
        $success = false;
    } else {
        $sql = "INSERT INTO product (user_userId, description, category, name, price)";
        $sql .= " VALUES ((SELECT userId FROM p1_1.user WHERE email = 'tananntze@gmail.com'), '$addDescription', '$addCategory', '$addName', $addPrice)";

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

    <footer class="footer-bs p-2 mb-0">

        <div class="row mx-0">
            <div class="col-md-3 footer-brand animated fadeInLeft">

                <p>© 2019 KUUUEEH</p>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <h4>Menu —</h4>

                <div class="col-md-6">
                    <ul class="list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutus.php">About Us</a></li>
                        <li><a href="kuehmenuall.php">Kueh</a></li>
                        <li><a href="contactus.php">Contact Us</a></li>
                        <li><a href="faq.php">FAQ's</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown">
                <h4>Follow Us @</h4>
                <ul class= "list-inline">
                    <li><a class ="fa fa-facebook-square" href="#"> Facebook</a></li>
                    <li><a class="fa fa-twitter-square" href="#"> Twitter</a></li>
                    <li ><a class= "fa fa-instagram" href="#"> Instagram</a></li>
                </ul>
            </div>

        </div>
    </footer>

</body>
