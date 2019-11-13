<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Promotion</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/promotions.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>   
    </head>

    <body id="overlay">
        <?php
        // Database initializing and inserting values//
        define("DBHOST", "161.117.122.252");
        define("DBNAME", "p1_1");
        define("DBUSER", "p1_1");
        define("DBPASS", "F3ms97bpZA");

        $file_input = $start_date = $end_date = $errorMsg = "";

        function connectToDB() {
            
        global $file_input, $start_date, $end_date, $errorMsg, $success, $userId;
        
            $conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

            if ($conn->connect_error) {
                $errorMsg = "Connection failed: " . $conn->connect_error;
                $success = false;
            } else {
                session_start();
                $userId = $_SESSION['userId'];
                $sql = "INSERT INTO p1_1.promotion (image, startDate, endDate, user_userId) ";
                $sql .= "VALUES ('$file_input','$start_date','$end_date', '$userId')";
            }
            //execute the query
            if (!$conn->query($sql)) {
                $errorMsg = "Database error: " . $conn->error;
                $success = false;
            }
            $conn->close();
        }

        $success = true;
        $date_now = new DateTime("now", new DateTimeZone('Asia/Singapore')); //retrieves current date
        if (empty($_POST["start_date"])) {
            $errorMsg .= "Start date is required.<br>";
            $success = false;
        } else {
            $start_date = sanitize_input($_POST["start_date"]);
            $start_date = date('Y-m-d H:i:s', strtotime($_POST['start_date']));
        }
        if (empty($_POST["end_date"])) {
            $errorMsg .= "End date is required.<br>";
            $success = false;
        } else {
            $end_date = sanitize_input($_POST["end_date"]);
            $end_date = date('Y-m-d H:i:s', strtotime($_POST['end_date'] . "23:59:59"));
        }
        $date_now = date_format($date_now, 'Y-m-d H:i:s');
        if ($start_date < $date_now || $end_date < $date_now) {
            $success = false;
            $errorMsg .= "Start date and End date must be later than current date!<br>";
        } else {
            if ($start_date > $end_date) {
                $success = false;
                $errorMsg .= "End date must be later than start date!<br>";
            }
        }
        //INCLUDE THE DB UPLOAD INPUT HERE//
        if (empty($_FILES['file_input']['name'])) { //check if the image file has uploaded or not
            $success = false;
            $errorMsg .= "Please upload an image file!<br>";
        } else { //PHP's validation of checking if file uploaded is a file with image extensions, Credited By: https://stackoverflow.com/questions/6755192/how-to-check-uploaded-file-type-in-php
            $file_name = $_FILES['file_input']['tmp_name'];
            $allowedTypes = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
            $detectedType = exif_imagetype($file_name);
            if (!in_array($detectedType, $allowedTypes)) {
                $success = false;
                $errorMsg .= "Please upload a proper image file with .jpeg, .png or .gif extensions!<br>";
            }
        }
        //include the upload image database file here
        if (isset($_POST['submit'])) {
            if (($_FILES['file_input']['name'] != "")) {
                // Where the file is going to be stored
                $target_dir = "img/banner/"; //target folder 
                $file = $_FILES['file_input']['name']; //creating file path
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['file_input']['tmp_name'];
                $path_filename_ext = $target_dir . $filename . "." . $ext;
                $file_input = $path_filename_ext; //declaring insertImg = file path 
                move_uploaded_file($temp_name, $path_filename_ext); //move the image into the folder
            }
        }
        if (!$success) {
            echo "<h1>Error processing promotions!</h1>";
            echo "<h4>The following input errors were detected:</h4>";
            echo "<p>" . $errorMsg . "</p>";
        } else {
            connectToDB();
            echo "<h1>Successfully added KUEH Promotion!</h1>";
        }

        function sanitize_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

</html>