<?php

include "dbConfig.php";

function updateDetails(){
    global $errorMsg, $success;
    $success = true; 
    $updateCustomerSuccess = true;
    session_start();
    $orderId = $_SESSION["orderId"];
    $deliveryOption = $_POST['deliveryOption'];
    $status = $_POST['status'];

    if (empty($_POST["email"])){
        $errorMsg .= "Email is required.<br>";
        $success = false;
    }
    else
    {
        $email = sanitize_input($_POST["email"]);
        // Additional check to make sure e-mail address is well-formed. if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errorMsg .= "Invalid email format.";
            $success = false;
        }
    }

    if (empty($_POST["fname"])){
        $errorMsg .= "First Name is required.<br>";
        $success = false;
    }
    else
    {
        $fname = sanitize_input($_POST["fname"]);
        
    }

    if (empty($_POST["lname"])){
        $errorMsg .= "Last Name is required.<br>";
        $success = false;
    }
    else
    {
        $lname = sanitize_input($_POST["lname"]);
        
    }

    if (empty($_POST["phone"])){
        $errorMsg .= "Phone is required.<br>";
        $success = false;
    }
    else
    {
        $phone = sanitize_input($_POST["phone"]);
    }

    if (empty($_POST["address"])){
        $errorMsg .= "Address is required.<br>";
        $success = false;
    }
    else
    {
        $address = sanitize_input($_POST["address"]);
    }

    if (empty($_POST["postal_code"])){
        $errorMsg .= "Postal Code is required.<br>";
        $success = false;
    }
    else
    {
        $postal = sanitize_input($_POST["postal_code"]);
    }

    if($success){
        updateCustomerDetails($email, $fname, $lname, $phone);
        updateCheckoutDetails($orderId,$deliveryOption, $status, $address, $postal);
        header("Location: orders.php");
    }else{
        echo "<h4>The following input errors were detected:</h4>";
        echo "<p>" . $errorMsg . "</p>";
        echo "<h4>Your page will be redirected in 4 seconds.</h4>";
        //header("refresh:3; login.php");
    }



}


function updateCustomerDetails($email, $fname, $lname, $phone){
   $update_success = false; 
   $conn = connectToDB();
   $sql = "UPDATE customer SET hp='$phone', fname='$fname', lname='$lname' WHERE email='$email'";
   
   if($conn->query($sql) == true){
       $update_success == true;
       return $update_success;
   }else{
       return $update_success;
   }
   
}


function updateCheckoutDetails($orderId,$deliveryOption, $status, $address, $postal){
    $update_success = false; 
    $conn = connectToDB();
    $sql = $conn->prepare("UPDATE checkout_details SET address=?, deliveryType=?, status=?, postal_code=? WHERE orderId=?");
    $sql->bind_param('ssssi', $address, $deliveryOption, $status, $postal, $orderId);
    $sql->execute();
    $sql->close();
    $conn->close();
    if($conn->query($sql) == true){
       $update_success == true;
       return $update_success;
    }else{
       return $update_success;
    }
}

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data); $data = htmlspecialchars($data); 
    return $data;
}


updateDetails();


?>