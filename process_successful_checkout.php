<?php
include "initializing_checkout_details.php";
include "dbConfig.php";
$conn = connectToDB();
//Adds the entry for overall checkout details (product_id + customer_email + order_id)
foreach ($_SESSION["my_orders"] as $row => $kueh_array) {    
    if ($conn->connect_error) {             
        $errorMsg = "Database error: " . $conn->error;             
        $success = false;                                          
    } else {
        $sql = $conn->prepare("INSERT INTO product_checkout (product_prodId, checkout_details_orderId, customer_email, kueh_quantity) VALUES (?, ?, ?, ?)");
        $sql->bind_param("iisi", $_SESSION['my_orders'][$row][0], $_SESSION['order_id'], $_SESSION['customer_email'], $_SESSION['my_orders'][$row][5]);
        $sql->execute();   
    }
}
$sql->close();
$conn->close();
session_destroy();
header("Location: index.php");   
?>