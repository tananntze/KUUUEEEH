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
            session_start();
            $address = $postal_code = $mobile_no = $card_type = $card_name = $card_no = $ccv = $exp_month = $exp_year = $exp_date = $errorMsg = ""; 
            $success = true; 
            $date_now = new DateTime("now", new DateTimeZone('Asia/Singapore')); //retrieves current date
            if ($_POST["radioDel"] == "radioHome") {
                $_SESSION["delivery"] = 5.00;
                $_SESSION["total"] = $_SESSION["subtotal"] + $_SESSION["delivery"];
            } else {
                $_SESSION["delivery"] = 0.00;
                $_SESSION["total"] = $_SESSION["subtotal"] + $_SESSION["delivery"];
            }
            if (empty($_POST["address"])) {
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
            } if (empty($_POST["card_name"])) {
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
            } if (!$success) {
                echo "<h1>Error processing checkout!</h1>";
                echo "<h4>The following input errors were detected:</h4>";     
                echo "<p>" . $errorMsg . "</p>";
            } else {
                ?>
                <section>
                    <div class="container-fluid" style= 'margin-top:20px'>
                        <h1>Successful checkout!</h1>
                        <h1>Thank you for ordering with KUUUEEEH!</h1>
                        <p>Bon Appetit!</p>
                        <section class="row justify-content-center standardfont">
                            <section class="col-md-12">
                                <h2 class = "fontheader">MY ORDER</h2>
                            </section>
                            <div class="col-md-10">
                                <section id="paragraph" class="scrollTable">
                                    <section id="myOrder text-center">
                                    <p id="quantity">Total Quantity: <?php echo $_SESSION["totalQty"]?></p>
                                    <?php //display message cart is empty
                                        echo "<table id='tblOrders'>"
                                        . "<tr>"
                                        . "<th>Image</th>"
                                        . "<th>Category</th>"
                                        . "<th>Name</th>"
                                        . "<th>Price</th>"
                                        . "<th>Quantity</th>"
                                        . "<th>Total</th>"
                                        . "</tr>";
                                        foreach ($_SESSION["my_orders"] as $row=>$kueh_array) {
                                            echo "<tr>";
                                            for ($c = 1; $c < 7; $c++) {
                                                if ($c == 1) {
                                                    echo "<td><img id='imgKueh' src='". $kueh_array[$c] ."' alt='Kueh Order'/></td>";
                                                } else if ($c == 4) {
                                                    echo "<td>$" . number_format($kueh_array[$c], 2) . "/pc";
                                                } else if ($c == 6) {
                                                    echo "<td>$" . number_format($kueh_array[$c], 2);
                                                } 
                                                else {
                                                    echo "<td>" . $kueh_array[$c]. "</td>";  
                                                }
                                            }
                                            echo "</tr>";
                                        }
                                        echo "</table>";
                                    ?>
                                </section>
                                    <p id="subTotal">Subtotal: <?php echo "$" . number_format($_SESSION["subtotal"], 2)?></p>
                                    <p id="delivery">Delivery: <?php echo "$" . number_format($_SESSION["delivery"], 2)?></p>
                                    <p id="totalDel">Total: <?php echo "$" . number_format($_SESSION["total"], 2)?></p>
                                    <a href='index.php' id='btnHome' class='btn btn-default'>Return to Home</a>
                                </section>
                            </div>
                        </section>
                    </div>
                </section>
                <?php    //kill current session, reset all variables            
                if (session_status() == PHP_SESSION_ACTIVE) {
                        session_destroy();                      
                    }
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