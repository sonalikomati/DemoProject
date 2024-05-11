<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();

if(isset($_POST['btn'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass']; // Get the password from the form

    // Hash the password to match the hashed password stored in the database
    //$hashed_password = md5($password); // You should use a stronger hashing algorithm like bcrypt

    // Prepare SQL statement to check both email and password
    //$sql = "SELECT uid FROM registration WHERE email='$email' AND password='$hashed_password'";
    $sql = "SELECT uid FROM registration WHERE email='$email' AND password='$pass'";
    $res = mysqli_query($con, $sql);

    // Check if there is a matching row
    if(mysqli_num_rows($res) == 1) {
        // User exists with the provided email and password
        echo "Welcome to user";
        
        // Store user's email in session
        $_SESSION['email'] = $email;
        header('Location:../index.php');
        exit(); // Make sure to exit after redirection
    } else {
        // No matching user found
        echo "User not registered or incorrect password";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
        
        <!-- Sign up form -->
        <section class="signup" style="margin-top:-100px;margin-bottom:-100px;">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title" style="padding-top:60px;">Log In</h2>
                        <form method="POST" class="register-form" id="register-form" style="padding-top:20px;">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="btn" id="signup" class="form-submit" value="Login"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="..\colorlib-regform-26\registration.php" class="signup-image-link">Don't have and account ? <font color="red";>Create Account</font></a>
                    </div>
                </div>
            </div>
        </section>

        
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>