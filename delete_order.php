<?php

include "dbConfig.php";

session_start();
if (!isset($_SESSION['userId'])) {
    header("Location: login.php");
    exit();
}


function deleteOrder(){
    $conn = connectToDB();
    $orderId = $_GET['orderId'];
    $success = true;
    deleteProductCheckout($orderId);
    if ($success){
        $sql = "DELETE FROM checkout_details WHERE orderId='$orderId'";
        $conn->query($sql);
        if ($success){
            header("Location: orders.php");
        }else{
            echo "Error in deleting";
        }
    }else{
        $sql = "DELETE FROM checkout_details WHERE orderId='$orderId'";
        $conn->query($sql);
        if ($success){
            header("Location: orders.php");
        }else{
            echo "Error in deleting";
        }
    }
}

function deleteProductCheckout($orderId){
    $success = true;
    $conn = connectToDB();
    $sql = "DELETE FROM product_checkout WHERE checkout_details_orderId='$orderId'";
    $conn->query($sql);
    if($success){
        return $success;
    }else{
        $success = false;
        return $success;
    }
}

deleteOrder();


?>