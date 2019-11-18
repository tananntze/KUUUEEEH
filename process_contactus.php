<html>
    <head>
        <meta charset="UTF-8">
        <title>Process Contact Us Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
        <script defer src="js/main.js"></script>
    </head>

    <body>

        <?php
        // Database initializing and inserting values//
        define("DBHOST", "161.117.122.252");
        define("DBNAME", "p1_1");
        define("DBUSER", "p1_1");
        define("DBPASS", "F3ms97bpZA");

        $name = $text = $email = $errorMsg = "";

        function connectToDB($name, $email, $text) {
            $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                $sql = $conn->prepare("INSERT INTO p1_1.contact_us (name, email, message) VALUES (?, ?, ?)");
                $sql->bind_param("sss", $name, $email, $text);
                $sql->execute();
                $sql->close();
                $conn->close();
            }
            //execute the query
        }

        $success = true;
        //Name//
        if (empty($_POST["name"])) {
            $errorMsg = "First Name is required.<br>";
            $success = false;
        } else if (!preg_match("/^[a-zA-Z]*$/", $name)) {
            $errorMsg = "Only letters and white space allowed";
            $success = false;
        } else {
            $name = sanitize_input($_POST["name"]);
        }
        //Email//

        if (empty($_POST["email"])) {
            $errorMsg = "Email is required.<br>";
            $success = false;
        } else {
            $email = sanitize_input($_POST["email"]);
// Additional check to make sure e-mail address is well-formed.
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorMsg .= "Invalid email format.";
                $success = false;
            }
        }
        //Text Field//
        if (empty($_POST["text"])) {
            $errorMsg = "Do enter your question in the text field";
        } else if (!preg_match("/^[A-Za-z _.,''!]*$/", $text)) {
            $errorMsg = "Only letters and white space allowed";
            $success = false;
        } else {
            $text = sanitize_input($_POST["text"]);
        }

        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($success) {
            connectToDB($name, $email, $text);
            echo "<hr>";
            echo "<section class='container'>";
            echo "<h3>Thank you for your feedback/question!</h3>";
            echo "<a href='contactus.php' class='btn btn-primary' role='button'>Return to Contact Us</a>";
            echo "</section>";
            echo "<hr>";
        } else {
            echo "<hr>";
            echo "<section class='container'>";
            echo "<h2>Opps!</h2>";
            echo "<h3>The following errors were detected:</h3>";
            echo "<p>" . $errorMsg . "</p>";
            echo "<a href='contactus.php' class='btn btn-primary' role='button'>Return to Contact Us</a>";
            echo "</section>";
            echo "<hr>";
        }
        ?>


    </body>
</html>