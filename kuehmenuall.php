<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <title>All Kuehs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/kuehmenuall.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script defer src="js/main.js"></script>
    </head>

    <body background="img/Pink Dots Tumblr BG.jpg">
        <?php 
        include "header.php";
        
        if (isset($_POST["btnKueh1"])) {
            //TODO, retrieve all the values from Products Database once database value is up!
            //assign a unique id to reference each kueh
            $unique_id = 1;
            $category = "The Basic Kuehs";
            $kuehName = "Ang Ku Kueh";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh1"];
            $_SESSION["kueh1_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh1_qty"];
            //if the kueh array is empty, add the entry
            if (sizeof($_SESSION["kueh1_orders"]) == 0) {
                array_push($_SESSION["kueh1_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh1_qty"], $kuehTotalPrice);
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh1_orders"][5] = $_SESSION["kueh1_qty"];
                $_SESSION["kueh1_orders"][6] = $kuehTotalPrice;
            } 
            addKuehDetails($kuehName, $_SESSION["kueh1_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh2"])) {
            $unique_id = 2;
            $category = "The Basic Kuehs";
            $kuehName = "Chai Kueh";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh2"];
            $_SESSION["kueh2_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh2_qty"];
            //if the kueh array is empty, add the entry
            if (sizeof($_SESSION["kueh2_orders"]) == 0) {
                array_push($_SESSION["kueh2_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh2_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh2_orders"][5] = $_SESSION["kueh2_qty"];
                $_SESSION["kueh2_orders"][6] = $kuehTotalPrice;
            } 
            addKuehDetails($kuehName, $_SESSION["kueh2_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh3"])) { 
            $unique_id = 3;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Ambon";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh3"];
            $_SESSION["kueh3_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh3_qty"];
            if (sizeof($_SESSION["kueh3_orders"]) == 0) {
                array_push($_SESSION["kueh3_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh3_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh3_orders"][5] = $_SESSION["kueh3_qty"];
                $_SESSION["kueh3_orders"][6] = $kuehTotalPrice;
            } 
            addKuehDetails($kuehName, $_SESSION["kueh3_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh4"])) {
            $unique_id = 4;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Bangkit";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh4"];
            $_SESSION["kueh4_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh4_qty"];
            if (sizeof($_SESSION["kueh4_orders"]) == 0) {
                array_push($_SESSION["kueh4_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh4_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh4_orders"][5] = $_SESSION["kueh4_qty"];
                $_SESSION["kueh4_orders"][6] = $kuehTotalPrice;
            } 
            addKuehDetails($kuehName, $_SESSION["kueh4_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh5"])) {
            $unique_id = 5;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Bingkah";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh5"];
            $_SESSION["kueh5_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh5_qty"];
            if (sizeof($_SESSION["kueh5_orders"]) == 0) {
                array_push($_SESSION["kueh5_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh5_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh5_orders"][5] = $_SESSION["kueh5_qty"];
                $_SESSION["kueh5_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh5_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh6"])) {
            $unique_id = 6;            
            $category = "Kueh with Character";
            $kuehName = "Apom Berkuah";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh6"];
            $_SESSION["kueh6_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh6_qty"];
            if (sizeof($_SESSION["kueh6_orders"]) == 0) {
                array_push($_SESSION["kueh6_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh6_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh6_orders"][5] = $_SESSION["kueh6_qty"];
                $_SESSION["kueh6_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh6_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh7"])) {
            $unique_id = 7;
            $category = "Kueh with Character";
            $kuehName = "Chwee Kueh";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh7"];
            $_SESSION["kueh7_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh7_qty"];
            if (sizeof($_SESSION["kueh7_orders"]) == 0) {
                array_push($_SESSION["kueh7_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh7_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh7_orders"][5] = $_SESSION["kueh7_qty"];
                $_SESSION["kueh7_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh7_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh8"])) {
            $unique_id = 8;
            $category = "Kueh with Character";
            $kuehName = "Chye Tow Kueh";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh8"];
            $_SESSION["kueh8_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh8_qty"];
            if (sizeof($_SESSION["kueh8_orders"]) == 0) {
                array_push($_SESSION["kueh8_orders"], 8, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh8_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh8_orders"][5] = $_SESSION["kueh8_qty"];
                $_SESSION["kueh8_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh8_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh9"])) {
            $unique_id = 9;
            $category = "Kueh with Character";
            $kuehName = "Dodol";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh9"];
            $_SESSION["kueh9_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh9_qty"];
            if (sizeof($_SESSION["kueh9_orders"]) == 0) {
                array_push($_SESSION["kueh9_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh9_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh9_orders"][5] = $_SESSION["kueh9_qty"];
                $_SESSION["kueh9_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh9_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh10"])) {
            $unique_id = 10;
            $category = "Kueh With Character";
            $kuehName = "Hoon Kueh";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh10"];
            $_SESSION["kueh10_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh10_qty"];
            if (sizeof($_SESSION["kueh10_orders"]) == 0) {
                array_push($_SESSION["kueh10_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh10_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh10_orders"][5] = $_SESSION["kueh10_qty"];
                $_SESSION["kueh10_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh10_orders"], $kuehPrice);
        } /*if (isset($_POST["btnKueh11"])) {
            $unique_id = 11;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Apam Balik";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh11"];
            $_SESSION["kueh11_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh11_qty"];
            if (sizeof($_SESSION["kueh11_orders"]) == 0) {
                array_push($_SESSION["kueh11_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh11_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh11_orders"][5] = $_SESSION["kueh11_qty"];
                $_SESSION["kueh11_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh11_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh12"])) {
            $unique_id = 12;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Getuk Getuk";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh12"];
            $_SESSION["kueh12_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh12_qty"];
            if (sizeof($_SESSION["kueh12_orders"]) == 0) {
                array_push($_SESSION["kueh12_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh12_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh12_orders"][5] = $_SESSION["kueh12_qty"];
                $_SESSION["kueh12_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh12_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh13"])) {
            $unique_id = 13;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Abok Abok";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh13"];
            $_SESSION["kueh13_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh13_qty"];
            if (sizeof($_SESSION["kueh13_orders"]) == 0) {
                array_push($_SESSION["kueh13_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh13_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh13_orders"][5] = $_SESSION["kueh13_qty"];
                $_SESSION["kueh13_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh13_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh14"])) {
            $unique_id = 14;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Akok";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh14"];
            $_SESSION["kueh14_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh14_qty"];
            if (sizeof($_SESSION["kueh14_orders"]) == 0) {
                array_push($_SESSION["kueh14_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh14_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh14_orders"][5] = $_SESSION["kueh14_qty"];
                $_SESSION["kueh14_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh14_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh15"])) {
            $unique_id = 15;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Bakul";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh15"];
            $_SESSION["kueh15_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh15_qty"];
            if (sizeof($_SESSION["kueh15_orders"]) == 0) {
                array_push($_SESSION["kueh15_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh15_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh15_orders"][5] = $_SESSION["kueh15_qty"];
                $_SESSION["kueh15_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh15_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh16"])) {
            $unique_id = 16;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Bongkong";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh16"];
            $_SESSION["kueh16_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh16_qty"];
            if (sizeof($_SESSION["kueh16_orders"]) == 0) {
                array_push($_SESSION["kueh16_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh16_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh16_orders"][5] = $_SESSION["kueh16_qty"];
                $_SESSION["kueh16_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh16_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh17"])) {
            $unique_id = 17;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Dadar";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh17"];
            $_SESSION["kueh17_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh17_qty"];
            if (sizeof($_SESSION["kueh17_orders"]) == 0) {
                array_push($_SESSION["kueh17_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh17_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh17_orders"][5] = $_SESSION["kueh17_qty"];
                $_SESSION["kueh17_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh17_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh18"])) {
            $unique_id = 18;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Koci";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh18"];
            $_SESSION["kueh18_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh18_qty"];
            if (sizeof($_SESSION["kueh18_orders"]) == 0) {
                array_push($_SESSION["kueh18_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh18_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh18_orders"][5] = $_SESSION["kueh18_qty"];
                $_SESSION["kueh18_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh18_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh19"])) {
            $unique_id = 19;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Kodok";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh19"];
            $_SESSION["kueh19_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh19_qty"];
            if (sizeof($_SESSION["kueh19_orders"]) == 0) {
                array_push($_SESSION["kueh19_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh19_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh19_orders"][5] = $_SESSION["kueh19_qty"];
                $_SESSION["kueh19_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh19_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh20"])) {
            $unique_id = 20;
            $category = "The Basic Kuehs";
            $kuehName = "Kueh Kosui";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh20"];
            $_SESSION["kueh20_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh20_qty"];
            if (sizeof($_SESSION["kueh20_orders"]) == 0) {
                array_push($_SESSION["kueh20_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh20_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh20_orders"][5] = $_SESSION["kueh20_qty"];
                $_SESSION["kueh20_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh20_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh21"])) {
            $unique_id = 21;
            $category = "Kueh with Character";
            $kuehName = "Huat Kueh";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh21"];
            $_SESSION["kueh21_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh21_qty"];
            if (sizeof($_SESSION["kueh21_orders"]) == 0) {
                array_push($_SESSION["kueh21_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh21_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh21_orders"][5] = $_SESSION["kueh21_qty"];
                $_SESSION["kueh21_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh21_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh22"])) {
            $unique_id = 22;
            $category = "Kueh with Character";
            $kuehName = "Kueh Bahulu";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh22"];
            $_SESSION["kueh22_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh22_qty"];
            if (sizeof($_SESSION["kueh22_orders"]) == 0) {
                array_push($_SESSION["kueh22_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh22_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh22_orders"][5] = $_SESSION["kueh22_qty"];
                $_SESSION["kueh22_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh22_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh23"])) {
            $unique_id = 23;
            $category = "Kueh with Character";
            $kuehName = "Kueh Bakar";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh23"];
            $_SESSION["kueh23_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh23_qty"];
            if (sizeof($_SESSION["kueh23_orders"]) == 0) {
                array_push($_SESSION["kueh23_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh23_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh23_orders"][5] = $_SESSION["kueh23_qty"];
                $_SESSION["kueh23_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh23_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh24"])) {
            $unique_id = 24;
            $category = "Kueh with Character";
            $kuehName = "Kueh Belanda";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh24"];
            $_SESSION["kueh24_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh24_qty"];
            if (sizeof($_SESSION["kueh24_orders"]) == 0) {
                array_push($_SESSION["kueh24_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh24_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh24_orders"][5] = $_SESSION["kueh24_qty"];
                $_SESSION["kueh24_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh24_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh25"])) {
            $unique_id = 25;
            $category = "Kueh with Character";
            $kuehName = "Kueh Kara Kara";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh25"];
            $_SESSION["kueh25_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh25_qty"];
            if (sizeof($_SESSION["kueh25_orders"]) == 0) {
                array_push($_SESSION["kueh25_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh25_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh25_orders"][5] = $_SESSION["kueh25_qty"];
                $_SESSION["kueh25_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh25_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh26"])) {
            $unique_id = 26;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Bulan";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh26"];
            $_SESSION["kueh26_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh26_qty"];
            if (sizeof($_SESSION["kueh26_orders"]) == 0) {
                array_push($_SESSION["kueh26_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh26_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh26_orders"][5] = $_SESSION["kueh26_qty"];
                $_SESSION["kueh26_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh26_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh27"])) {
            $unique_id = 27;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Cara";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh27"];
            $_SESSION["kueh27_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh27_qty"];
            if (sizeof($_SESSION["kueh27_orders"]) == 0) {
                array_push($_SESSION["kueh27_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh27_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh27_orders"][5] = $_SESSION["kueh27_qty"];
                $_SESSION["kueh27_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh27_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh28"])) {
            $unique_id = 28;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Cincin";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh28"];
            $_SESSION["kueh28_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh28_qty"];
            if (sizeof($_SESSION["kueh28_orders"]) == 0) {
                array_push($_SESSION["kueh28_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh27_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh28_orders"][5] = $_SESSION["kueh28_qty"];
                $_SESSION["kueh28_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh28_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh29"])) {
            $unique_id = 29;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Jagung";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh29"];
            $_SESSION["kueh29_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh29_qty"];
            if (sizeof($_SESSION["kueh29_orders"]) == 0) {
                array_push($_SESSION["kueh29_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh27_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh29_orders"][5] = $_SESSION["kueh29_qty"];
                $_SESSION["kueh29_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh29_orders"], $kuehPrice);
        } if (isset($_POST["btnKueh30"])) {
            $unique_id = 30;
            $category = "The Heavyweight Kuehs";
            $kuehName = "Kueh Kamir";
            $imgSrc = "img/".$category."/".$kuehName.".jpg";
            $kuehPrice = $_POST["btnKueh30"];
            $_SESSION["kueh30_qty"]++;
            $kuehTotalPrice = $kuehPrice * $_SESSION["kueh30_qty"];
            if (sizeof($_SESSION["kueh30_orders"]) == 0) {
                array_push($_SESSION["kueh30_orders"], $unique_id, $imgSrc, $category, $kuehName, $kuehPrice, $_SESSION["kueh27_qty"], $kuehTotalPrice);     
            } else {
                //update the quantity and total price of the kueh
                $_SESSION["kueh30_orders"][5] = $_SESSION["kueh30_qty"];
                $_SESSION["kueh30_orders"][6] = $kuehTotalPrice;
            }
            addKuehDetails($kuehName, $_SESSION["kueh30_orders"], $kuehPrice);
        }*/
        function addKuehDetails($kuehName, $kuehArr, $kuehPrice) {
            $index = 0;
            $_SESSION["totalQty"]++;
            $_SESSION["subtotal"] += $kuehPrice;
            $_SESSION["total"] = $_SESSION["subtotal"];
            //if list is empty, the first entry will be added to list
            if (empty($_SESSION["my_orders"])) {
                array_push($_SESSION["my_orders"], $kuehArr); 
            } else {
                //if list is not empty, but if the name is already in the list, simply update the list
                for ($index = 0; $index < sizeof($_SESSION["my_orders"]); $index++) {
                    if ($_SESSION["my_orders"][$index][3] == $kuehName) {
                        $_SESSION["my_orders"][$index] = $kuehArr;
                        break;
                    }
                }
                //else if list is not empty, but if kueh is not in the list, add a new kueh entry
                if ($index == sizeof($_SESSION["my_orders"])) {
                   array_push($_SESSION["my_orders"], $kuehArr); 
                }
            }
            header('Location: kuehmenuall.php');            
        }
        ?>

        <div class="container">
            <!--The animated kueh images for the banner are taken and credited by ladyironchef: Beginner’s Guide to Kuehs – 9 Traditional Kuehs You Must Try https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
            <img src="img/Banner - White.png" alt="Kueh Banner" class="responsive" id="bannerresize">
        </div>
        
        <nav role="navigation" class="nav2">
            <ul>
                <li><a href ="#basic">Basic Kuehs</a></li>
                <li><a href ="#character">Kuehs with Character</a></li>
                <li><a href ="#heavyweight">Heavyweight Kuehs</a></li>
            </ul>
        </nav>

        <div class="container-fluid">

            <!-- The Basic Kueh -->
            <form method="post" action=""> 
                <div class="row" id ="basic" >
                    <div class =" col-md-12">
                        <h1 id="border" class="fontheader" >The Basic Kuehs</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">

                        <figure class="imgholder">
                            <img class="zoom" id="angKK" src = "img/The Basic Kuehs/Ang Ku Kueh.jpg" alt = "Ang Ku Kueh">

                            <!--https://www.stovve.com/peranakan-patisserie-->                      
                            <figcaption>Ang Ku Kueh ($0.50/pc): Small round or oval shaped pastry with soft sticky glutinous rice flour skin wrapped around a sweet filling in the centre.</figcaption>

                            <!--https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->              
                            <button class="btn" type="submit" name="btnKueh1" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Chai Kueh.jpg" alt = "Chai Kueh">

                            <!--https://www.pinterest.com/pin/459930180676369189/-->
                            <figcaption>Chai Kueh ($0.50/pc): A typical and popular chinese snack. Stir fried crunchy jicama (yam bean) wrapped in soft, chewy and crystal skin.</figcaption>

                            <button class="btn" type="submit" name="btnKueh2" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Ambon.jpg" alt = "Kueh Ambon">

                            <!--https://www.stovve.com/peranakan-patisserie-->
                            <figcaption>Kueh Ambon ($0.50/pc): This is a soft, springy, and chewy yeast cake originated from Medan (Indonesia).</figcaption>
                            <button class="btn" type="submit" name="btnKueh3" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Bangkit.jpg" alt = "Kueh Bangkit">

                            <!--https://www.youtube.com/watch?v=m_DFoFlXG_M-->
                            <figcaption>Kueh Bangkit ($0.50/pc): Light and crumbly coconut cream cookies that melt in your mouth. These cookies are made with tapioca flour and have a creamy rich coconut taste.</figcaption>
                            <button class="btn" type="submit" name="btnKueh4" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>    

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Bingkah.jpg" alt = "Kueh Bingkah">

                            <!--https://snapguide.com/guides/bake-tapioca-cake-kuih-bingka-ubi/-->
                            <figcaption>Kueh Bingkah ($0.50/pc): Made from grated tapioca (cassava), baked until the top and sides are crispy brown. Soft and chewy inside. A Nyonya delicacies of the Peranakans and goes well with coffee or tea.</figcaption>

                            <!--https://www.shiokmanrecipes.com/2017/06/15/kueh-bingka-ubi-baked-tapioca-cassava-cake/-->
                            <button class="btn" type="submit" name="btnKueh5" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Bongkong.jpg" alt = "Kueh Bongkong">

                            <!--https://sethlui.com/disappearing-nostalgic-foods-singapore/-->
                            <figcaption>Kueh Bongkong ($0.50/pc): Made with various starches and coconut milk, filled with Gula Melaka filling that melts and oozes to flood the kueh as it steams. Nice soft and slightly bouncy texture.</figcaption>
                            <button class="btn" type="submit" name="btnKueh16" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Dadar.jpg" alt = "Kueh Dadar">

                            <!--https://www.asianfoodchannel.com/en/recipes/nyonya-kuih-dadar-->
                            <figcaption>Kueh Dadar ($0.50/pc): Bite-sized sweet and savoury dessert which stuffed with luscious Gula Melaka grated coconut and wrapped in a fragrant pandan pancake.</figcaption>
                            <button class="btn" type="submit" name="btnKueh17" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Koci.jpg" alt = "Kueh Koci">

                            <!--https://www.nyonyacooking.com/recipes/kuih-koci-black-glutinous-rice~Hk34uvoPf5bX-->    
                            <figcaption>Kueh Koci ($0.50/pc): A sweet dumpling using glutinous rice flour and stuffed with grated coconut sweetened using palm sugar.</figcaption>

                            <!--https://www.nyonyacooking.com/recipes/kuih-koci-black-glutinous-rice~Hk34uvoPf5bX-->
                            <button class="btn" type="submit" name="btnKueh18" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Kodok.jpg" alt = "Kueh Kodok">

                            <!--https://www.rotinrice.com/kuih-kodok-mashed-banana-fritters-a-guest-post-for-ang-sarap/-->
                            <figcaption>Kueh Kodok ($0.50/pc): Known as Cekodok Pisang, simple but delicious snack. Using the freshest bananas to deep fry it. Giving a sweet and savoury taste.</figcaption>

                            <!--https://coasterkitchen.wordpress.com/2016/09/09/kuih-kodok-cocodok-recipe/-->                       
                            <button class="btn" type="submit" name="btnKueh19" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Kosui.jpg" alt = "Kueh Kosui">

                            <!--https://www.anncoojournal.com/kuih-kosui/--> 
                            <figcaption>Kueh Kosui ($0.50/pc): Known as Kueh Ko Swee, made from tapioca starch and rice flour and sweetened with Gula Melaka sugar. Served with freshly grated coconuts for more texture and taste.</figcaption>

                            <!--https://mykitchen101en.com/pandan-kuih-kosui/-->                        
                            <button class="btn" type="submit" name="btnKueh20" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" id="lapis" src = "img/The Basic Kuehs/Kueh Lapis.jpg" alt = "Kueh Lapis">

                            <!--https://www.stovve.com/peranakan-patisserie-->
                            <figcaption>Kueh Lapis ($0.50/pc): Most popular and well-loved Nonya dessert for all people known as ‘thousand-layer cake’. Made with tapioca, rice flour, coconut milk and natural colouring to make it pretty for eating.</figcaption>

                            <!--http://www.indochili.com/kueh-lapis-singapore.html-->
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Sago.jpg" alt = "Kueh Sago">

                            <!--https://www.nyonyacooking.com/recipes/rose-flavoured-sago-cake~SyLXdviPMqWX-->
                            <figcaption>Kueh Sago ($0.50/pc): Made from small sago pearls, giving a texture that is soft but chewy. Natural colouring used and it is topped with Gula Melaka and Shredded Coconut.</figcaption>

                            <!--https://mykitchen101en.com/kuih-sago-with-gula-melaka-and-shredded-coconut/-->
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Salat.jpg" alt = "Kueh Salat">

                            <!--https://www.pinterest.com/pin/507640189242347900/-->  
                            <figcaption>Kueh Salat ($0.50/pc): Two-tiered Nonya dessert with a base of steamed glutinous rice. Topped with a thick layer of custard flavour and squeezed coconut milk and pandan juice.</figcaption>
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder"> 
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Seri Muka.jpg" alt = "Kueh Seri Muka">

                            <!--https://rasamalaysia.com/seri-muka/-->  
                            <figcaption>Kueh Seri Muka ($0.50/pc):  Classic and authentic dessert, breakfast or snack. Steamed layer of sweet coconut glutinous rice with a layer of caramel pandan custard on top.</figcaption>  
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Kueh Talam.jpg" alt = "Kueh Talam">

                            <!--https://www.stovve.com/peranakan-patisserie-->  
                            <figcaption>Kueh Talam ($0.50/pc): Two-layer Nyonya Kueh, the top layer is made from coconut milk and rice flour. The bottom layer is made from rice and mung bean flour with green colouring from pandan leaves.</figcaption>

                            <!--https://www.penang-traveltips.com/kuih-talam.htm-->  
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Lepat Pisang.jpg" alt = "Lepat Pisang">

                            <!--https://www.youtube.com/watch?v=51DQdlJQDpk-->
                            <figcaption>Lepat Pisang ($0.50/pc): Indonesian steamed snack made from glutinous rice flour filled with brown sugar and banana. Wrapped using banana leaves.</figcaption>

                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Ondeh Ondeh.jpg" alt = "Ondeh Ondeh">

                            <!--https://www.elmundoeats.com/pandan-balls-with-coconut-sugar-ondeh-ondeh/-->
                            <figcaption>Ondeh Ondeh ($0.50/pc): One of the all-time favourite Nonya desserts, soft glutinous rice balls, infused in pandan juice, filled with aromatic palm sugar, then coated in a sweet, fresh and pleasant taste of grated white coconut.</figcaption>

                            <!--https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Pulut Inti.jpg" alt = "Pulut Inti">

                            <!--https://www.stovve.com/peranakan-patisserie--> 
                            <figcaption>Pulut Inti ($0.50/pc): Pulut Inti is a traditional Malaysian dessert of steamed glutinous rice with a sweet coconut topping. They are usually wrapped in banana leaves.</figcaption>

                            <!--https://www.rotinrice.com/pulut-inti-glutinous-rice-with-sweet-coconut-topping/-->
                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Pulut Tekan.jpg" alt = "Pulut Tekan">

                            <!--http://www.seasaltwithfood.com/2017/01/pulut-tekan-pulot-tai-tai.html-->                        
                            <figcaption>Pulut Tekan ($0.50/pc): Presented in a pyramid shaped dessert that wrapped with the banana leaf. Made from a mound of steamed glutinous rice topped with inti, a sweet coconut filling.</figcaption>

                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Basic Kuehs/Rempah Udang.jpg" alt = "Rempah Udang">

                            <!--http://theinformalchef.blogspot.com/2017/03/simple-pulut-panggangrempah-udang.html-->
                            <figcaption>Rempah Udang ($0.50/pc): A traditional Peranakan dumpling dessert snack, typically comes as an oblong-shaped glutinous rice roll, filled in the middle with shrimp paste.</figcaption>

                            <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <!-- The Kuehs with Character -->       
                <div class="row" id ="character" >
                    <div class =" col-md-12 text-center">                                   
                        <h1 id="border" class="fontheader">Kuehs with Character</h1>
                    </div>
                </div>

                <div class="row" >

                    <div class="col-md-2"></div>

                    <div class="col-md-2">

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Apom Berkuah.jpg" alt = "Apom Berkuah">

                            <!--https://foodieadvice.com/food/apom-berkuah-->
                            <figcaption>Apom Berkuah ($0.50/pc): Fluffy and soft yeasted rice pancakes dipped in a kuah pengat pisang, a sweet sauce made with fresh coconut milk, gula melaka and pisang rajah or pisang mas.</figcaption>

                            <!--https://thechubbychefsg.wordpress.com/2017/09/19/apom-berkuahbokwa/-->                        
                           <button class="btn" type="submit" name="btnKueh6" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" id="chwee" src = "img/Kueh with Character/Chwee Kueh.JPG" alt = "Chwee Kueh">

                            <!--http://www.mykitchensnippets.com/2011/04/chwee-kuehquar-ko-kuehsteamed-rice-cake.html-->
                            <figcaption>Chwee Kueh ($0.70/pc): A popular breakfast item which rice cakes are topped with diced preserved radish and served with chilli sauce.</figcaption>

                            <!--https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
                            <button class="btn" type="submit" name="btnKueh7" value=0.70><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Chye Tow Kueh.jpg" alt = "Chye Tow Kueh">

                            <!--https://www.flickr.com/photos/vkeong/27245673335/in/dateposted-public/-->
                            <figcaption>Chye Tow Kueh ($0.50/pc): Known as fried carrot cake, made with radish cake (steamed rice flour and shredded white daikon), which is then stir-fried with eggs, preserved radish.</figcaption>
                            <button class="btn" type="submit" name="btnKueh8" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Dodol.jpg" alt = "Dodol">

                            <!--http://www.jamiesinz.com/2008/09/thai-sweets-jelly-candies-and-crispy-pancakes-khanom-buang/-->
                            <figcaption>Dodol ($0.50/pc): A popular sweet treat in Southeast Asia. Chewy, sweet and thick cake made from glutinous rice flour, coconut milk and palm sugar (jaggery).</figcaption>

                            <!--https://mykitchen101en.com/kuih-dodol-durian-chewy-and-sweet-glutinous-rice-durian-cake/#targetText=Dodol%20is%20a%20chewy%2C%20sweet,grease%20and%20patience%20is%20needed.-->
                            <button class="btn" type="submit" name="btnKueh9" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Hoon Kueh.jpg" alt = "Hoon Kueh">

                            <!--https://www.stovve.com/peranakan-patisserie?lightbox=dataItem-iu7pgpm0-->
                            <figcaption>Hoon Kueh ($0.50): Soft and tender texture, made from coconut cream, mung bean flour and corn, wrapped in banana leaf.</figcaption>

                            <!--http://whattobaketoday.blogspot.com/2015/09/kueh-jagung-corn-hoon-kueh_11.html-->
                            <button class="btn" type="submit" name="btnKueh10" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Huat Kueh.jpg" alt = "Huat Kueh" style="max-width: 100%">

                            <!--https://www.stovve.com/peranakan-patisserie?lightbox=dataItem-iu7pgpm0-->
                            <figcaption>Huat Kueh ($0.50/pc): Huat means “to rise” or “to prosper”. Some people call huat kueh as smiling cake too. Soft and fluffy, not too sweet and comes in different colours.</figcaption>

                            <!--https://whattocooktoday.com/pandan-coconut-huat-kueh.html-->
                            <button class="btn" type="submit" name="btnKueh21" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Bahulu.jpg" alt = "Kueh Bahulu" style="max-width: 100%">

                            <!--https://www.nyonyacooking.com/recipes/kuih-bahulu~rJTWOwsPM9W7-->
                            <figcaption>Kueh Bahulu ($0.50/pc): Soft, light and fluffy with a mildly sweet taste and has the fragrance of baked cake.</figcaption>

                            <!--http://www.friedchillies.com/recipes/detail/kuih-bahulu-->
                            <button class="btn" type="submit" name="btnKueh22" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Bakar.jpg" alt = "Kueh Bakar" style="max-width: 100%">

                            <!--https://www.123rf.com/photo_19285424_locally-known-as-kuih-bakar-a-malaysian-sweet-delicacy-with-sesame-seeds-toppings.html-->
                            <figcaption>Kueh Bakar ($0.50/pc): A traditional Malay cake, sweet and soft. A baked custard that is full of pandan and egg aroma.</figcaption>

                            <!--https://kwgls.wordpress.com/2014/06/26/local-baked-custard-kuih-bakar-pandan-or-kuih-kemboja-%EF%BC%88%E9%A6%99%E5%85%B0%E7%83%98%E7%B3%95%EF%BC%89/-->
                            <button class="btn" type="submit" name="btnKueh23" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Belanda.jpg" alt = "Kueh Belanda" style="max-width: 100%">

                            <!--https://www.pgcake.com/products/pandan-love-letter-226--> 
                            <figcaption>Kueh Belanda ($0.50/pc): Known as love letters, made of rice and tapioca flour, fresh coconut milk and eggs. Giving a crunchy & reminisce taste.</figcaption>

                            <!--https://lovewholesome.com/recipe/kueh-belanda-or-peranakan-love-letters/-->
                            <button class="btn" type="submit" name="btnKueh24" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Kara Kara.jpg" alt = "Kueh Kara Kara" style="max-width: 100%">

                            <!--https://www.facebook.com/pages/category/Kitchen-Cooking/Kuih-jala-KS-1427200010732675/-->
                            <figcaption>Kueh Kara Kara ($0.50/pc): It’s a Peranakan sweet and crispy snacks, known as fragile rice krispies. Made from rice flour and sugar syrup.</figcaption>

                            <!--http://thebakerwoman.blogspot.com/2010/02/kueh-kara-kara.html-->
                            <button class="btn" type="submit" name="btnKueh25" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Keria.jpg" alt = "Kueh Keria" style="max-width: 100%">

                            <!--https://daridapur.com/resepi-kuih-keria/-->
                            <figcaption>Kueh Keria ($0.50/pc): Delightful local mini doughnuts are made out of sweet potato and frosted with Gula Melaka.</figcaption>

                            <!--http://www.friedchillies.com/recipes/detail/kuih-keria-gula-melaka-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Lapis.jpg" alt = "Kek Lapis" style="max-width: 100%">
                            <!--https://www.stovve.com/peranakan-patisserie?lightbox=dataItem-iu7sc5hj2-->
                            <figcaption>Kek Lapis ($0.50/pc): Not to be confused with Kueh Lapis, it is made with a secret spice concoction. Aromatic and non-greasy, it also has a tender, bouncy texture.</figcaption>

                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Pinjaram.jpg" alt = "Kueh Pinjaram" style="max-width: 100%">

                            <!--https://www.123rf.com/photo_55951428_mixed-of-green-and-brown-kuih-pinjaram-on-a-plate-kuih-pinjaram-is-a-traditional-kuih-for-bajau-brun.html-->
                            <figcaption>Kueh Pinjaram ($0.50/pc): Known as penyaram or kuih UFO. Made with rice flour, palm sugar. Deep fried giving a soft and crispy on the outside texture.</figcaption>

                            <!--https://kwgls.wordpress.com/2015/06/03/penyaram-pinjaram-or-kue-cucur-gula-merah-ufo-kuih-mexican-hats/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Putugal.jpg" alt = "Kueh Putugal" style="max-width: 100%">

                            <!--https://www.channelnewsasia.com/news/cnainsider/eurasian-putugal-the-recipe-8941704-->
                            <figcaption>Kueh Putugal ($0.50/pc): Made up of a banana encased a grated cassava (ubi kayu) and coconut milk concoction before being wrapped and steamed over banana leaves.</figcaption>

                            <!--https://travelling-foodies.com/2013/09/25/putugal/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Tair.jpg" alt = "Kueh Tair" style="max-width: 100%">

                            <!--https://www.channelnewsasia.com/news/cnainsider/eurasian-putugal-the-recipe-8941704-->
                            <figcaption>Kueh Tair ($0.50/pc): Melt in your mouth shortcrust pastry shells filled with homemade pineapple jam.</figcaption>
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Tutu.jpg" alt = "Kueh Tutu" style="max-width: 100%">

                            <!--https://www.information.sg/index.php/story/malay-cuisine/375-kue-putu-mangkok-kueh-tutu-kue-putu-ayu-or-putu-piring-->
                            <figcaption>Kueh Tutu ($0.50/pc): Small steamed cake made of finely pounded rice flour and filled with either ground peanuts or grated coconut cooked in Gula Melaka.</figcaption>
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Kueh Wajek.jpg" alt = "Kueh Wajek" style="max-width: 100%">

                            <!--https://www.information.sg/index.php/story/malay-cuisine/375-kue-putu-mangkok-kueh-tutu-kue-putu-ayu-or-putu-piring-->
                            <figcaption>Kueh Wajek ($0.50/pc): A traditional sweet diamond-shaped kueh, made of steamed sticky glutinous rice, flavoured with palm sugar, coconut milk and a few knotted pandan leaves.</figcaption>

                            <!--https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Lepat Kacang.jpg" alt = "Lepat Kacang" style="max-width: 100%">

                            <!--http://letsmasak.com/recipe/7008-lepat-kacang-mata-hitam-->
                            <figcaption>Lepat Kacang ($0.50/pc): A glutinous rice and soya bean cooked in a leaf packet. Wrapped in triangular packets using Doan Nipah (Attap Leaves).</figcaption>

                            <!--http://stangee.blogspot.com/2006/06/long-forgotten-food-3-lepat-kacang.html-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom"  id="png" src = "img/Kueh with Character/Png Kueh.jpg" alt = "Png Kueh" style="max-width: 100%">

                            <!--http://www.pbs.org/food/fresh-tastes/hungry-ghost-festival-singapore/-->
                            <figcaption>Png Kueh ($0.60/pc): Soft and tender and the glutinous rice filling with full of mushroom and dried shrimp flavour. Added some fried shallots, chopped spring onions and a trickle of sweet soy sauce.</figcaption>

                            <!--http://ieatishootipost.sg/teochew-kueh-why-is-there-red-and-white-png-kueh/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/Kueh with Character/Soon Kueh.jpg" alt = "Soon Kueh" style="max-width: 100%">

                            <!--https://eatwhattonight.com/2016/08/soon-kueh/-->
                            <figcaption>Soon Kueh ($0.50/pc): The dumpling-like kueh is filled with a fragrant mixture of shredded bamboo shoots, turnip and dried shrimps wrapped in a smooth rice-tapioca flour skin.</figcaption>

                            <!--http://mysingaporefood.com/recipe/soon-kueh/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>
                    <div class="col-md-2"></div>
                </div>

                <!-- The Heavyweight Kuehs --> 
                <div class="row" id ="heavyweight" >
                    <div class =" col-md-12 text-center">
                        <h1 id="border" class="fontheader">The Heavyweight Kuehs</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="col-md-2">

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Apam Balik.jpg" alt = "Apam Balik" style="max-width: 100%">

                            <!--https://www.elmundoeats.com/asian-peanut-pancake-turnover-apam-balik/-->
                            <figcaption>Apam Balik ($0.50/pc): A Southeast Asian fluffy pancake with cream corn or peanuts. This soft pancake has a thick surface with thin and crispy side.</figcaption>

                            <!--https://www.nyonyacooking.com/recipes/apam-balik~SJ5WuvsDf9WQ-->
                            <button class="btn" type="submit" name="btnKueh11" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Getuk Getuk.JPG" alt = "Getuk Getuk" style="max-width: 100%">

                            <!--https://www.stovve.com/peranakan-patisserie?lightbox=dataItem-iudmw79a-->
                            <figcaption>Getuk Getuk ($0.50/pc): Made from cassava. It is mixed with grated coconut, sugar and small amounts of salt. Chewy and soft.</figcaption>

                            <!--https://www.guaishushu1.com/getuk-ubi-%E6%9C%A8%E8%96%AF%E6%A4%B0%E4%B8%9D%E7%B3%95%EF%BC%89/-->
                            <button class="btn" type="submit" name="btnKueh12" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Abok Abok.jpg" alt = "Kueh Abok Abok" style="max-width: 100%">

                            <!--https://whattocooktoday.com/abok-abok-sago.html-->
                            <figcaption>Kueh Abok Abok ($0.50/pc): This is a snack made from sago, sugar, coconut and Gula Melaka steamed in banana leaves. Giving a dumpling kind of shape.</figcaption>
                            <button class="btn" type="submit" name="btnKueh13" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Akok.jpg" alt = "Kueh Akok" style="max-width: 100%">

                            <!--https://www.nst.com.my/news/2016/09/174078/eats-jerry-serves-only-best-akok-->
                            <figcaption>Kueh Akok ($0.50/pc): A traditional snack made from eggs, flour, coconut milk and palm sugar.</figcaption>

                            <!--http://foodnframe.com/2012/02/kuih-akok-kelantan/-->
                            <button class="btn" type="submit" name="btnKueh14" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Bakul.jpg" alt = "Kueh Bakul" style="max-width: 100%">

                            <!--https://www.pinterest.com/pin/845691636252200861/-->
                            <figcaption>Kueh Bakul ($0.50/pc): Known as Nian Gao, prepared from glutinous rice flour and sugar. Giving a sticky, chewy and sweet texture and taste. This snack can be eaten in many ways.</figcaption>

                            <!--https://en.wikipedia.org/wiki/Glutinous_rice_flour-->
                            <button class="btn" type="submit" name="btnKueh15" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Bulan.jpg" alt = "Kueh Bulan" style="max-width: 100%">

                            <!--https://www.sunnysidecircus.com/countries/china/food-drinks-china/mooncakes-filled-pastry-mid-autumn-festival/-->
                            <figcaption>Kueh Bulan ($0.50/pc): Also known as Mooncakes, a rich thick lotus seed paste filling is surrounded thin crust and contain yolks from salted duck eggs.</figcaption>

                            <!--https://en.wikipedia.org/wiki/Yolk-->
                            <button class="btn" type="submit" name="btnKueh26" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Cara.jpg" alt = "Kueh Cara" style="max-width: 100%">

                            <!--https://www.kuali.com/recipe/kuih-cara-manis-pandan-sponge-cake/-->
                            <figcaption>Kueh Cara ($0.50/pc): Made from pure coconut milk and vanilla juice, and stuffed with chopped coconut sugar for the explosion filling.</figcaption>
                            <button class="btn" type="submit" name="btnKueh27" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Cincin.jpg" alt = "Kueh Cincin" style="max-width: 100%">

                            <!--https://my.carousell.com/p/kuih-cincin-186810032/-->
                            <figcaption>Kueh Cincin ($0.50/pc): The tasty and crunchy or baked ring biscuit. Made of flour, rice flour, palm oil and brown sugar.</figcaption>
                            <button class="btn" type="submit" name="btnKueh28" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Jagung.jpg" alt = "Kueh Jagung" style="max-width: 100%">

                            <!--http://1resepikuih.blogspot.com/2009/09/kuih-jagung.html-->
                            <figcaption>Kueh Jagung ($0.50/pc): It is made up of canned sweet corn with kernel bits atop a layer of coconut milk and pandan.</figcaption>

                            <!--http://whattobaketoday.blogspot.com/2015/09/kueh-jagung-corn-hoon-kueh_11.html-->
                            <button class="btn" type="submit" name="btnKueh29" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Kamir.jpg" alt = "Kueh Kamir" style="max-width: 100%">

                            <!--http://1resepikuih.blogspot.com/2009/09/kuih-jagung.html    -->
                            <figcaption>Kueh Kamir ($0.50/pc): Typical food Pemalang origin Arab countries. This cake is made of flour dough, butter, and eggs, mixed with ingredients such as bananas or tape.</figcaption>

                            <!--http://whattobaketoday.blogspot.com/2015/09/kueh-jagung-corn-hoon-kueh_11.html-->
                            <button class="btn" type="submit" name="btnKueh30" value=0.50><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Kapit.jpg" alt = "Kueh Kapit" style="max-width: 100%">

                            <!--https://www.123rf.com/photo_29724154_kuih-kapit-or-the-chinese-love-letter-biscuit-over-white-background.html-->
                            <figcaption>Kueh Kapit ($0.50/pc): It is also called kuih sepit in Malay, the cookie is form on specialised mould which comprises two round iron plates held together by thongs. Crunchy and addicting.</figcaption>

                            <!--https://www.penang-traveltips.com/kuih-kapit.html-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Kasturi.jpg" alt = "Kueh Kasturi" style="max-width: 100%">

                            <!--https://www.shutterstock.com/video/clip-1023424930-close-footage-malay-desert-kuih-rengas-kasturi-->
                            <figcaption>Kueh Kasturi ($0.50/pc): Known as mung bean fritters, a very simple yet delicious kueh. Deep fry mung bean coated with batter.</figcaption>

                            <!--http://nasilemaklover.blogspot.com/2011/10/kuih-kasturi-mung-bean-fritters.html-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Lompang.jpg" alt = "Kueh Lompang" style="max-width: 100%">

                            <!--https://bacaterus.com/resep-kue-lumpang-pandan/-->
                            <figcaption>Kueh Lompang ($0.50/pc): A traditional Malay cake. It is a sweet cake topped with steamed grated coconut that had been seasoned with little salt. This is to balance the sweetness of the cake and give it a creamy taste.</figcaption>

                            <!--https://themalaykitchen.wordpress.com/2013/08/30/kueh-lompang/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Lopes.jpg" alt = "Kueh Lopes" style="max-width: 100%">

                            <!--http://www.friedchillies.com/recipes/detail/kuih-lopes-kedah-->
                            <figcaption>Kueh Lopes ($0.50/pc): Served with shredded coconut and Gula Melaka syrup, giving a chewy and soft texture</figcaption>

                            <!--https://kwgls.wordpress.com/2015/04/29/kuih-lopes-or-kue-lupis-%E4%B8%89%E8%A7%92%E6%A4%B0%E4%B8%9D%E7%B3%AF%E7%B1%B3%E7%B3%95%EF%BC%89/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Moho.jpg" alt = "Kueh Moho" style="max-width: 100%">

                            <!--http://vivianpangkitchen.blogspot.com/2012/04/moho-kuih-sour-dough-method.html-->
                            <figcaption>Kueh Moho ($0.50/pc): This belongs to steamed bun family and has distinctively tangy or sour taste. Combined it with brown sugar give a sweet and sour taste.</figcaption>

                            <!--http://vivianpangkitchen.blogspot.com/2012/04/moho-kuih-sour-dough-method.html#.XZjZpFUzapo-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>

                    <div class="col-md-2">
                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Neng Ko.jpg" alt = "Kueh Neng Ko" style="max-width: 100%">

                            <!--https://www.okclips.net/rev/traditional+chinese+steamed+egg+cake+recipe/-->
                            <figcaption>Kueh Neng Ko ($0.50/pc): With a soft and fluffy texture, fragrant and eggy taste. Also known as Ji Dan Gao.</figcaption>

                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Tako.jpg" alt = "Kueh Tako" style="max-width: 100%">

                            <!--https://www.stovve.com/peranakan-patisserie?lightbox=dataItem-iudmw79a-->
                            <figcaption>Kueh Tako ($0.50/pc): A traditional two layered coconut and pandan jelly dessert made of mung bean flour with bits of Chinese turnips. Each layer tastes differently as one is salty while the other is sweet.</figcaption>

                            <!--https://www.ladyironchef.com/2015/08/guide-traditional-kueh/-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Kueh Talam Ubi.jpg" alt = "Kueh Talam Ubi" style="max-width: 100%">

                            <!--https://www.aynorablogs.com/2018/11/resepi-kuih-talam-ubi-yang-sedap.html-->
                            <figcaption>Kueh Talam Ubi ($0.50/pc): It’s a 2 layered steamed kueh, fresh coconut milk at the top and tapioca at the bottom. Sweet and savoury at the same time.</figcaption>

                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/Marble Cake.jpg" alt = "Kueh Marmer" style="max-width: 100%">

                            <!--https://www.pinterest.com/pin/399061216963998229/-->
                            <figcaption>Kueh Marmer ($0.50/pc): Known as marble cake is a cake with a streaked or mottled appearance (like marble). Freshly backed with a mixture of vanilla and chocolate, walnuts and butter.</figcaption>

                            <!--https://en.wikipedia.org/wiki/Marble_cake-->
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>

                        <figure class="imgholder">
                            <img class="zoom" src = "img/The Heavyweight Kuehs/You Zha Kueh.jpg" alt = "You Zha Kueh" style="max-width: 100%">

                            <!--http://netsenger.com/topwok/best-you-char-kueh-you-tiao.htm-->
                            <figcaption>You Zha Kueh ($0.50/pc): Also known as Fried Chinese Doughnut. Made from rice noodle roll, deep fried with it to golden brown. Crispy and soft in the inside.</figcaption>
                            <button class="btn"><i class="fa fa-shopping-cart"></i></button>
                        </figure>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                </form>
            </div>                     
    </body>
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

</html>