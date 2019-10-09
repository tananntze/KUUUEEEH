<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body>
<header>
        <nav class="nav navbar navbar-expand-md bg-pink navbar-dark" role="navigation">
            <a class="navbar-brand" href="#">Kuey Logo</a>
            <button class="navbar-toggler" type='button' data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="home.php">Home</a></li>
                    <li class="nav-item"><a href="aboutus.php">About Us</a></li>
                    <li class ="nav-item"><a href="kuehmenuall.php">Kueh</a></li>
                    <li class="nav-item"><a href="contactus">Contact Us</a></li>
                    <li class="nav-item"><a href="faq.php">FAQ's</a></li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav navbar-nav">
                        <a class="nav-link" href="login.php"><span class="fas fa-directions">Login</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2>STAFF LOGIN</h2>

            <!-- Login Form -->
            <form>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Email Address">
                <input type="text" id="password" class="fadeIn third" name="login" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Forgot Password?</a>
            </div>

        </div>
    </div>
</body>


</html>