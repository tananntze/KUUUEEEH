<?php
    function logout(){
        session_start();
        if (isset($_SESSION["userId"])){
            unset($_SESSION["userId"]);
        }
        session_destroy();
        header("Location: login.php");
    }

    logout();

?>