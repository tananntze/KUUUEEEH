<?php
    define("DBHOST", "161.117.122.252");
    define("DBNAME", "p1_1");
    define("DBUSER", "p1_1");
    define("DBPASS", "F3ms97bpZA");
    function connectToDB(){
        global $conn, $errorMsg, $success;
        $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
 
        if ($conn->connect_error){
            $errorMsg = "Connection failed: " . $conn->connect_error;
            $success = false;
        }
 
        else{  
            $success = true;  
        }
    return $conn;
    $conn->close();
    }
    

    
?>