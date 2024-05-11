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

    <!--fab fa icon guides-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--boooking-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
-->
    <!--sweet alert--->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Ashok Chowk , Solapur</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <!--<small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>-->
                        <?php
						if(isset($_SESSION['email'])&&$_SESSION['email']==true)
						{
							$user=true;
						}
						else
						{
							$user=false;
						}
						if($user)
						{
						?>
							<small class="text-light"><i class="fa fa-envelope me-2"></i><?php echo $_SESSION['email'];?></small>
						<?php
						}
						?>
						
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
                    <a href="gallery.php" class="nav-item nav-link">Gallery</a>
                    <a href="services.php" class="nav-item nav-link">Services</a>
                    <a href="state.php" class="nav-item nav-link">State</a>
                    <a href="package.php" class="nav-item nav-link">Packages</a>
                                        
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">More</a>
                        <div class="dropdown-menu m-0">                            
                            <a href="backend/index.php" class="dropdown-item">View Profile</a>
                            <a href="contact.php" class="dropdown-item">Contact</a>
                            <a href="feedback.php" class="dropdown-item">Feedback</a>
                            <?php
                            if(isset($_SESSION['email']) && $_SESSION['email']==true)
                            {
                            ?>
                                <a href="b_receipt.php" class="dropdown-item">Booking Details</a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>        					
                    </div>
                    <?php
						if(isset($_SESSION['email']) && $_SESSION['email']==true)
						{
							$user=true;
						}
						else
						{
							$user=false;
						}
						if(!$user)
						{
						?>
                            <a href="../hindu_temple/login1/login.php" class="btn btn-warning rounded-pill py-2 px-4">Login / Register</a>
						<?php
						}
                        else
                        {
                           $user=$_SESSION['email'];
                           $namequery="select * from registration where email='$user'";
                           $res1=mysqli_query($con,$namequery);
                           $rs=mysqli_fetch_array($res1);
                           $name=$rs[1];
                           //$profile=$rw1[7];
                        ?>
                           <a href="login1/logout.php" class="btn btn-warning rounded-pill py-2 px-4">Logout</a>
                        <?php
                        }
                        ?>
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
                                <!--<input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Eg:kerla">-->
                                <option value="<?php $rw[1];?>"><?php echo $rw[1];?></option>
                            <?php
                            }
                            ?>
                        </select>
                        <button type="button" class="btn btn-warning rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->
