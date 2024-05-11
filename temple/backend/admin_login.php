<?php
$con=mysqli_connect('localhost','root','','temple1');
?>	


<!--login-->
<?php
session_start();
if(isset($_POST['login'])) {
    // Check if the 'email' index exists in $_POST
    if(isset($_POST['email'])) {
        $email = $_POST['email'];
        $pass = $_POST['pass']; // Get the password from the form
    
        // Hash the password to match the hashed password stored in the database
        //$hashed_password = md5($password); // You should use a stronger hashing algorithm like bcrypt
    
        // Prepare SQL statement to check both email and password
        //$sql = "SELECT uid FROM registration WHERE email='$email' AND password='$hashed_password'";
        $sql = "SELECT aid FROM admin WHERE email='$email' AND password='$pass'";
        $res = mysqli_query($con, $sql);
    
        // Check if there is a matching row
        if(mysqli_num_rows($res) == 1) {
            // User exists with the provided email and password
            echo "Welcome to user";
            
            // Store user's email in session
            $_SESSION['email'] = $email;
            header('Location:index.php');
            exit(); // Make sure to exit after redirection
        } else {
            // No matching user found
            echo "User not registered or incorrect password";
        }
    }
}
    ?>
    <head>
        <style>
            body{
	margin:0;
	color:#6a6f8c;
	background:#c8c8c8;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
        </style>
    </head>
<body style="margin-top:30px;background-color:#dcf2fa;">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab" style="margin-top:70px;">Sign In</label>
		<input id="tab-" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
            <div class="login-form">
                <form method="post"  style="margin-bottom:0px;">
                    <div class="sign-in-htm">
                        <div class="group">
                            <label for="email" class="label">Email</label>
                            <input name="email" type="email" class="input">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input name="pass" type="password" class="input" data-type="password">
                        </div>
                        <div class="group">
                            <input type="submit" name="login" class="button" value="Login">
                        </div>
						<div class="group" style="text-align:center;margin:30px;">
							<a href="admin_register.php" class="signup-image-link"> <font color="white";>Don't have and account ? <p style="color:green;"> Create Account</p></font></a>
						</div>
                    </div>
                </form>
            </div>
	</div>
</div>
</body>
</html>