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
    global $address, $deliver_type, $status, $totalPrice,$postal_code;
    $orderId = $_GET['orderId'];
    $conn = connectToDB();
    $sql = "SELECT * FROM checkout_details WHERE orderId='$orderId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION["orderId"] = $orderId;
        $address = $row['address'];
        $deliver_type = $row['deliveryType'];
        $status = $row['status'];
        $totalPrice = $row['totalPrice'];
        $postal_code = $row['postal_code'];
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

    <div class="row justify-content-center standardfont">
        <div class="col-md-12">
            <form method="POST" action="update_order_details.php">
                <div class="form-group">
                    <label for="email">Customer Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value=<?php echo $email; ?> readOnly="readOnly">
                </div>

                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" name="fname" class="form-control" id="firstName" required value=<?php echo $fname; ?> >
                </div>

                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="lastName" required value=<?php echo $lname; ?> >
                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="phone" name="phone" class="form-control" id="phone" required value=<?php echo $phone; ?> >
                </div>

                <div class="form-group">
                    <label for="deliveryOption">Delivery Option</label>
                    <select class="form-control" name="deliveryOption" id="deliveryOption">
                        <option value="Home" <?php if ($deliver_type == "Home") {
                                                    echo " selected='selected'";
                                                } ?>>Home</option>
                        <option value="Collection" <?php if ($deliver_type == "Collection") {
                                                        echo " selected='selected'";
                                                    } ?>>Collection</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select class="form-control" name="status" id="status">
                        <option value="Not Delivered" <?php if ($deliver_type == "Not Delivered") {
                                                            echo " selected='selected'";
                                                        } ?>>Not Delivered</option>
                        <option value="Delivering" <?php if ($deliver_type == "Delivering") {
                                                        echo " selected='selected'";
                                                    } ?>>Delivering</option>
                        <option value="Delivered" <?php if ($deliver_type == "Delivered") {
                                                        echo " selected='selected'";
                                                    } ?>>Delivered</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Address">Address</label>
                    <textarea class="form-control" name="address" id="Address" rows="3"><?php echo $address; ?></textarea>
                </div>

                <div class="form-group">
                    <label for="postal_code">Postal</label>
                    <input type="phone" name="postal_code" class="form-control" id="postal_code" value=<?php echo $postal_code; ?> required>
                </div>

                <button type="submit" id="btnSubmit" name="submit" class="btn btn-block btn-success">Update</button>

            </form>

        </div>
    </div>



</body>


</html>