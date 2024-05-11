<?php
$con=mysqli_connect("localhost","root","","temple1");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>HINDU TEMPLES</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
   <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        details{
            margin:30px;
            margin-right:350px;
            background:azure;
            padding:20px;
            border-radius:10px;
            box-shadow:0 8px 20px lightgrey;
        }
        details summary{
            font-size:25px;
            color:black;
            font-family:Book Antiqua;
        }
        details p{
            font-size:20px;
            color:grey;
            padding-left:20px;  
            padding-right:20px;  
        }
        details:hover{
            background:lightgrey;
        }
        .divfooter{
            color:orange;
        }
        .div4 i{
            font-size:1rem;
            color:green;
            margin-left:40px;
        }
        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }
        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }
        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }
        .topnav input[type=text] {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            border: none;
            font-size: 17px;
        }
        @media screen and (max-width: 600px) {
            .topnav a, .topnav input[type=text] {
            float: none;
            display: block;
            text-align: left;
            width: 100%;
            margin: 0;
            padding: 14px;
            }
            .topnav input[type=text] {
                border: 1px solid #ccc;  
                }
            .temple_div{
                margin-right:-70px;
            }
}


    </style>
</head>

<body>
    <!-- Spinner Start -->
   <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-warning" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>-->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street,india</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
	
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="" class="navbar-brand p-0">
                <h1 class="text-warning m-0"><i class="fas fa-om me-3"></i> Hindu temples</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="services.php" class="nav-item nav-link">Services</a>
                    <a href="state.php" class="nav-item nav-link">State</a>
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>    					
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Packages</a>
                        <div class="dropdown-menu m-0">         
                        <?php
                            $sql="select * from package";
                            $res=mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_array($res))
                            {
                            ?>
                            <a href="package.php" class="dropdown-item"><?php echo $rw[1];?></a>
                            <?php
                            }
                            ?>
                            <a href="package.php" class="dropdown-item">More Details</a>
                        </div>
                    </div>        					
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu m-0">                            
                            <a href="backend/index.php" class="dropdown-item">View Profile</a>
                            <a href="contact.php" class="dropdown-item">Contact</a>
                            <a href="feedback.php" class="dropdown-item">Feedback</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>        					

                    </div>
                        <a href="" class="btn btn-warning rounded-pill py-2 px-4">Login / Register</a>
                    </div>
                </div>
               
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 mb-5 hero-header" style="background-image:url(img/h1.jpg);height:700px">		 
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Welcome<br> To Indian Historical Temples</h1>
                        <!--<h4 class="fs-4 text-white mb-4 animated slideInDown"><h3>DO COME AND VISIT</h3>
                        <h5 class=" text-dark">Waking up in India is<br>
                        like waking up to life itself.
                        </h5></h4>--->
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                        <select class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg:kerla">
                            <?php
                            $sql="select * from temple_info";
                            $res=mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_array($res))
                            {
                            ?>
                                <option value="<?php $rw[0];?>"><?php echo $rw[1];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <button type="button" class="btn btn-warning rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                        <div class="topnav">
                        <select type="text" placeholder="Search here...">
                        <?php
                            $sql="select * from temple_info";
                            $res=mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_array($res))
                            {
                            ?>
                                <a href="state_temple.php?id=<?php echo $rw[0];?>">   <option>                             
                                   <?php echo $rw[1];?></option>
                                </a>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
