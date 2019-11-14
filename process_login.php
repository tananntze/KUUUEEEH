<?php

    /*
        User Account 1
        username: testing@gmail.com
        password: 123456

        User Account 2
        username: test@gmail.com
        password: admin
    */

    require "dbConfig.php";
    include "header.php";

    function login($email, $password){
        $conn = connectToDB();
        $sql = $errorMsg = $fname = $lname = $retrievedEmail = "";
        $userId = 0;
        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = $conn->query($sql);

        if($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            $userId = $row["userId"];
            $fname = $row["fname"];
            $lname = $row["lname"];
            session_start();
            $_SESSION["userId"] = $userId;
            $_SESSION["fname"] = $fname;
            $_SESSION["lname"] = $lname;
            header("Location: orders.php");
            $result->free_result();
        }else{
            $errorMsg = "Email or password is invalid";
            echo "<h4>The following input errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<h4>Your page will be redirected in 4 seconds.</h4>";
            header("refresh:3; login.php");
        }
        
        $conn->close();
        
    }

    function validate_user(){
        $email = $password = $errorMsg = $hashedpassword = "";
        $success = true;

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

        if (empty($_POST["password"])){
            $errorMsg .= "Password is required.<br>";
            $success = false;
        }
        else
        {
            $password = sanitize_input($_POST["password"]);
            $hashedpassword = md5($password);
        }

        if ($success){
            login($email,$hashedpassword);
        }else{
            echo "<h4>The following input errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<h4>Your page will be redirected in 4 seconds.</h4>";
            header("refresh:3; login.php");
        }
        
        
    }

    function sanitize_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data); $data = htmlspecialchars($data); 
        return $data;
    }
    
validate_user();


?>

<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/checkout.css"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
</head>




</html>