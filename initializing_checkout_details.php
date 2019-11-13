<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();   
    }
    if (!isset($_SESSION["customer_email"])) {
        $_SESSION["customer_email"] = "";
    }
    if (!isset($_SESSION["customer_hp"])) {
        $_SESSION["customer_hp"] = "";
    }
    if (!isset($_SESSION["customer_fn"])) {
        $_SESSION["customer_fn"] = "";
    }
    if (!isset($_SESSION["customer_ln"])) {
        $_SESSION["customer_ln"] = "";
    }
    if (!isset($_SESSION["delivery_address"])) {
        $_SESSION["delivery_address"] = "";
    }
    if (!isset($_SESSION["address"])) {
        $_SESSION["address"] = "";
    } 
    if (!isset($_SESSION["delivery_type"])) {
        $_SESSION["delivery_type"] = "";
    } 
?>