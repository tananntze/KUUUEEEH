<html>
    <head>
        <title>PHP Testing on KUUUEEEH Checkout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/checkout.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <main>
            <?php 
            $email = $first_name = $last_name  = $mobile_no = $errorMsg = ""; 
            //$email = $first_name = $last_name = $address = $postal_code = $mobile_no = $card_type = $card_name = $card_no = $ccv = $exp_month = $exp_year = $exp_date = $errorMsg = ""; 
            $success = true; 
            $date_now = new DateTime("now", new DateTimeZone('Asia/Singapore')); //retrieves current date
            if (isset($_POST["radioPayment"])) {
                $card_type = sanitize_input($_POST["radioPayment"]);
            } if (empty($_POST["email"])) {     
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
            } /*if (empty($_POST["address"])) {
                $errorMsg .= "Delivery Address is required.<br>";     
                $success = false; 
            } else {
                $address = sanitize_input($_POST["address"]);
            } if (empty($_POST["postal_code"])) {
                $errorMsg .= "Postal Code is required.<br>";     
                $success = false; 
            } else {
                $postal_code = sanitize_input($_POST["postal_code"]);
                if (!preg_match("/([0-9]{6})/", $postal_code)) {
                    $errorMsg .= "Please enter a proper postal code.<br>";     
                    $success = false; 
                }
            }*/ if (empty($_POST["mobile_no"])) {
                $errorMsg .= "Mobile Number is required.<br>";     
                $success = false; 
            } else {
                $mobile_no = sanitize_input($_POST["mobile_no"]);
                if (!preg_match("/([0-9]{8})/", $mobile_no)) {
                    $errorMsg .= "Please enter a proper mobile number.<br>";     
                    $success = false; 
                }
            } /*if (empty($_POST["card_name"])) {
                $errorMsg .= "Card Name is required.<br>";     
                $success = false; 
            } else {
                $card_name = sanitize_input($_POST["card_name"]);
                if (!preg_match("/^([a-zA-Z' ]+)$/", $card_name)) {
                    $errorMsg .= "Please enter a proper card name.<br>";     
                    $success = false; 
                }
            } if (empty($_POST["card_number"])) {
                $errorMsg .= "Card Number is required.<br>";     
                $success = false; 
            } else {
                $card_no = sanitize_input($_POST["card_number"]);
                if (!preg_match("/([0-9]{16})/", $card_no)) {
                    $errorMsg .= "Please enter a proper 16-digit card number.<br>";     
                    $success = false; 
                }
            } if (empty($_POST["ccv"])) {
                $errorMsg .= "CCV is required.<br>";     
                $success = false; 
            } else {
                $ccv = sanitize_input($_POST["ccv"]);
                if (!preg_match("/([0-9]{3})/", $ccv)) {
                    $errorMsg .= "Please enter a proper 3-digit CCV number.<br>";     
                    $success = false; 
                }
            } if(isset($_POST["expiry_month"]) && isset($_POST["expiry_year"])) {
                $exp_month = $_POST["expiry_month"];
                $exp_year = $_POST["expiry_year"];
                $exp_month = sanitize_input($_POST["expiry_month"]);
                $exp_year = sanitize_input($_POST["expiry_year"]);
                $exp_date = DateTime::createFromFormat('Y-m-d H:i:s', $exp_year . '-' . $exp_month . '-01 00:00:00')->format('Y-m-d H:i:s'); //Credits by: https://stackoverflow.com/questions/6238992/converting-string-to-date-and-datetime
                $exp_date = sanitize_input($exp_date);
            }
            $date_now = date_format($date_now, 'Y-m-d H:i:s');   
            if ($exp_date < $date_now) {
                $success = false;
                $errorMsg .= "Your card has expired!<br>";  
            }*/
            if (!$success) {
                echo "<h1>Error processing checkout!</h1>";
                echo "<h4>The following input errors were detected:</h4>";     
                echo "<p>" . $errorMsg . "</p>";
            } else {
                /*echo "<h1>Successful checkout!</h1>";
                echo "<p>Bon Appetit!</p>";*/
            }
            //Helper function that checks input for malicious or unwanted content. 
            function sanitize_input($data) {   
                $data = trim($data);   
                $data = stripslashes($data);   
                $data = htmlspecialchars($data);   
                return $data; 
            }   
            ?>
        </main>
    </body>
</html>