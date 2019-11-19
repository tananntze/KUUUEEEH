<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name ="KUUUEEEH website where you find the best kuehs" content="Founded in 2019 by an avid kueh lover, KUUUEEEH has been offering a tempting array of sumptuous kuehs till today! Customers have been savoring our kuehs through our unique blend of flavors and we are proud that our kuehs are generally well-received. Still we are 100% committed in continuously combining new flavors with tradition and improving based on customer's feedback.">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/login.css">
        <link rel="stylesheet" href="css/shoppingcart.css"/> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    </head>

    <body>
        <?php
        include "header.php";
        ?>
        <!--https://bootsnipp.com/snippets/dldxB --> 
        <!-- Login Page -->
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->
                <h2>STAFF LOGIN</h2>

                <!-- Login Form -->
                <form action="process_login.php" method="POST">
                    <input type="email" id="email" class="fadeIn second" name="email" placeholder="Email Address" required>
                    <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required>
                    <input type="submit" class="fadeIn fourth" value="Log In">
                </form>

                <!-- Forget Password -->
                <!--<div id="formFooter">
                    <a class="underlineHover" href="#">Forgot Password?</a>
                </div> -->
            </div>
        </div>
    </body>

    <?php include "footer_include.php" ?>

</html>