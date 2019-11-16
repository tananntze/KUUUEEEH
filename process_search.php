<!DOCTYPE html>

<html>
     <head>
        <title>Kueh Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/editadmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
        <script src="js/editadmin.js"></script> 
    </head>
    
    <body>
        <?php        
        //Accessing our DB:
        require "dbConfig.php";
        
        //Helper function that checks input for malicious or unwanted content.
        function sanitize_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
        $search = $errorMsg = "";
        $success = true;
        
        //Validate search
        if (empty($_POST["search"]))
        {
            $errorMsg .= "Enter the category to search.<br>";
            $success = false;
        }
        else
        {
            $search = sanitize_input($_POST["search"]);

            // Additional check to make sure search string is well-formed: More than two alphabets, no double spacing etc. 
            if (!preg_match("/^[a-zA-Z](?!.* {2})[ \w.-]{2,}$/", $search))
            {
                $errorMsg .= "Invalid search format.";
                $success = false;
            }
        }
        
        //Attempt to connect to DB
        if ($Success)
        {
            //Create connection
            $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
            
            //Check connection
            if ($conn->connect_error)
            {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            }
            
            else
            {
                $sql = "SELECT * FROM p1_1.product WHERE ";
                $sql .= "category='$search'";

                // Execute the query
                // https://stackoverflow.com/questions/9361894/php-mysql-how-to-get-multiple-values-from-a-php-database-method
                $columns = array();
                $result = $conn->query($sql);
                while($row = $conn->query($result))
                {
                    $column[] =  $row[$prodId];
                }
                
                //
                if ($result->num_rows > 0)
                {
                    //Multiple data is returned
                    foreach($column as $value)
                    {
                        echo "<li>" . $value . "</li>";
                    }
                }

                else
                {
                    $errorMsg = "Category not found.";
                    $success = false;
                }

                $result->free_result();
            }

            $conn->close();
        }
        ?>
    </body>
        
        
</html>