<!DOCTYPE html>

<?php

include "dbConfig.php";

session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}


function getCustomerEmail()
{
    global $conn;
    $orderId = $email = "";
    //Get the order Id from the previous page using URL passing in orders.php in line 92
    $orderId = $_GET['orderId'];
    //connect to db and get customer email
    $conn = connectToDB();
    $sql = "SELECT customer_email FROM checkout_details WHERE orderId='$orderId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $email = $row['customer_email'];
        $result->free_result();
        return $email;
    }
    $conn->close();
}

function getCustomerDetails()
{
    global $email, $fname, $lname, $phone;
    $email = getCustomerEmail();
    $conn = connectToDB();
    $sql = "SELECT * FROM customer WHERE email='$email'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $fname = $row['fname'];
        $lname = $row['lname'];
        $phone = $row['hp'];
        $result->free_result();
    }
    $conn->close();
}

function getCheckoutDetails()
{
    global $address, $deliver_type, $status, $totalPrice; 
    $orderId = $_GET['orderId'];
    $conn = connectToDB();
    $sql = "SELECT * FROM checkout_details WHERE orderId='$orderId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $address = $row['address'];
        $deliver_type = $row['deliveryType'];
        $status = $row['status'];
        $totalPrice = $row['totalPrice'];
        $result->free_result();
    }
    $conn->close();
}

getCustomerDetails();
getCheckoutDetails();

?>

<html>

<head>
    <title>Kueh Menu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="KUUUEEEH website where you find the best kuehs">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/editOrder.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>

<body class="overlay">
    <?php include "adminheader.php" ?>
    <div class="container">
        <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
        <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
    </div>
    <form>
        <div class="form-group">
            <label for="email">Customer Email</label>
            <input type="email" name="email" class="form-control" id="email" value=<?php echo $email;?> placeholder="name@example.com" required>
        </div>
        
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" name="fname" class="form-control" id="firstName" value=<?php echo $fname;?> required>
        </div>

        <div class="form-group">
            <label for="lastName">First Name</label>
            <input type="text" name="lname" class="form-control" id="lastName" value=<?php echo $lname;?> required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" id="phone" value=<?php echo $phone;?> required>
        </div>

        <div class="form-group">
            <label for="deliveryOption">Delivery Option</label>
            <select class="form-control" name="deliveryOption" id="deliveryOption">
                    <option value="Home" <?php if($deliver_type == "Home"){ echo " selected='selected'"; } ?>>Home</option>
                    <option value="Collection" <?php if($deliver_type == "Home"){ echo " selected='selected'"; } ?>>Collection</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Address">Address</label>
            <textarea class="form-control" id="Address" rows="3"><?php echo $address;?></textarea>
        </div>
    </form>



</body>


</html>