<html>
    <head>
        <title>PHP Testing on KUUUEEEH Checkout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <main>
            <?php 
            include "dbConfig.php";
            $email = $first_name = $last_name  = $mobile_no = $errorMsg = ""; 
            $success = true; 
            if (empty($_POST["email"])) {     
               $errorMsg .= "Email is required.<br>";     
               $success = false; 
            } else {     
                $email = sanitize_input($_POST["email"]); // Additional check to make sure e-mail address is well-formed.     
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {         
                    $errorMsg .= "Invalid email format.";         
                    $success = false;       
                }
            } if (empty($_POST["first_name"])) {
                $errorMsg .= "First name is required.<br>";     
                $success = false; 
            } else {
                $first_name = sanitize_input($_POST["first_name"]);
                if (!preg_match("/^([a-zA-Z' ]+)$/", $first_name)) {
                    $errorMsg .= "Please enter a proper first name.<br>";     
                    $success = false; 
                }
            } if (empty($_POST["last_name"])) {
                $errorMsg .= "Last name is required.<br>";     
                $success = false; 
            } else {
                $last_name = sanitize_input($_POST["last_name"]);
                if (!preg_match("/^([a-zA-Z' ]+)$/", $last_name)) {
                    $errorMsg .= "Please enter a proper last name.<br>";     
                    $success = false; 
                }
            } if (empty($_POST["mobile_no"])) {
                $errorMsg .= "Mobile Number is required.<br>";     
                $success = false; 
            } else {
                $mobile_no = sanitize_input($_POST["mobile_no"]);
                if (!preg_match("/([0-9]{8})/", $mobile_no)) {
                    $errorMsg .= "Please enter a proper mobile number.<br>";     
                    $success = false; 
                }
            } if (!$success) {
                echo "<h1>Error processing checkout!</h1>";
                echo "<h4>The following input errors were detected:</h4>";     
                echo "<p>" . $errorMsg . "</p>";
            } else { //Successful form submission, add to database first then move on to Delivery Details page
                $conn = connectToDB();
                $sql = "SELECT * FROM p1_1.customer WHERE email='$email'";
                $result = $conn->query($sql); 
                if ($result->num_rows == 0) {                      
                    insertNewCustomer($email, $mobile_no, $last_name, $first_name);
                }
                header('Location: delivery_checkout.php'); 
            }
            $result->free_result(); 
            //Helper function that checks input for malicious or unwanted content. 
            function sanitize_input($data) {   
                $data = trim($data);   
                $data = stripslashes($data);   
                $data = htmlspecialchars($data);   
                return $data; 
            }
            //function to insert new customer details if the credentials are not stored in database yet
            function insertNewCustomer($email, $mobile_no, $last_name, $first_name) {
                $conn = connectToDB();
                $sql = "INSERT INTO p1_1.customer (email, hp, lname, fname)";         
                $sql .= " VALUES ('$email', '$mobile_no', '$last_name', '$first_name')"; 
                if (!$conn->query($sql)) {             
                    $errorMsg = "Database error: " . $conn->error;             
                    $success = false;                             
                } 
            }
            ?>
        </main>
    </body>
</html>