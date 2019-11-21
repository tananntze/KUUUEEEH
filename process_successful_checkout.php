<?php
include "initializing_checkout_details.php";
include "dbConfig.php";
session_destroy();
header("Location: kuehmenuall.php");   
?>