<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
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
                        <!--<button type="button" class="btn btn-warning rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Search</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img\dwarka2.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-warning pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-warning"> To Indian Historical Temples</span></h1>
                    <p class="mb-4">A Hindu temple, or Devasthana or mandir or koil or kovil in Indian languages, is a house, seat and body of divinity for Hindus. It is a structure designed to bring human beings and gods together through worship, sacrifice, and devotion.

</p>
                    <p class="mb-4">A temple is a religious building that's meant for worshipping or praying. Hindu temples are typically devoted to one specific god. While temples tend to be associated with non-Christian religions like Islam, Judaism, and Buddhism, some sects of Orthodox Christianity worship in temples as well.</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Temple visit is a spiritual experience that makes a person better.
							<p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Temples bring you closer to God.</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>Your body is a temple because God resides in it.
</p>
                            <p class="mb-0"><i class="fa fa-arrow-right text-warning me-2"></i>The temple of our purest thoughts is silence</p>
                        </div>
                        
                    <a class="btn btn-warning py-3 px-5 mt-1" href="about.php"  style="width:190px;">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


	<!-- Gallery Start -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="margin-top:100px;">
        <h6 class="section-title bg-white text-center text-warning px-3">Gallery</h6>
        <h1 class="mb-5">Our Gallery</h1>
    </div>            
    <div class="container-xxl py-1">
        <div class="container">
            <div class="row g-4">
            <?php
            $sql="select * from gallery";
            $res=mysqli_query($con,$sql);
            while($rw=mysqli_fetch_array($res))
            {
            ?>
	            <div class="col-lg-3 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                    <div class="service-item rounded">
                        <a href="img\<?php echo $rw[2];?>"><img class="card-img-top" src="img\<?php echo $rw[2];?>" alt="Card image" style="height:200px";></a>
                        <h5 style="text-align:center;"><?php echo $rw[1];?></h5>
                    </div>
                </div>
            <?php
            }
            ?>
            </div>        
        </div>
    </div>
    <!-- Gallery End -->
  
    <!-- states Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Destination</h6>
                <h1 class="mb-5">States</h1>
            </div>
            <div class="row g-4 justify-content-center">
               <?php
                $sql="select * from temple_info group by state";
                $res=mysqli_query($con,$sql);
                while($rw=mysqli_fetch_array($res))
                {
                ?>
                    <div class="col-lg-4 col-sm-6 wow zoomIn" data-wow-delay="0.1s">
                        <div class="position-relative d-block overflow-hidden">
                            <img class="card-img-top" src="backend/img/<?php echo $rw[3];?>" alt="Card image" style="height:380px;width:410px;">
                            <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2"><a href="temple_info.php?name=<?php echo $rw[1];?>"><?php echo $rw[1];?></a></div>
                            <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2"><a href="state_temple.php?state=<?php echo $rw[2];?>"><?php echo $rw[2];?></a></div>                        
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- states end -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Packages</h6>
                <h1 class="mb-5">Awesome Packages</h1>
            </div>
            <div class="row g-4 justify-content-center">
            <?php
                    $sql="select * from package1";
                    $res=mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_array($res))
                    {
                    ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" id="package1">
                    <div class="package-item bg-light"  style="border-radius:20px 20px 20px 20px;">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="backend/img/<?php echo $rw[2]; ?>" alt="" style="border-radius:20px 20px 0 0;height:280px;width:400px;">
                        </div>
                        <div class="d-flex border-bottom">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-map-marker-alt text-info me-2"></i><?php echo $rw[1];?></small>
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-info me-2"></i><?php echo $rw[4];?></small>
                        </div>
                        <div class="text-center p-4">
                            <h4 class="mb-0"><!--<i class="fa fa-inr"></i>-->Rs.<?php echo $rw[9];?></h4>
                            <div class="mb-3">
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                                <small class="fa fa-star text-warning"></small>
                            </div>
                            <p><?php echo $rw[10];?></p>
                            <div class="d-flex justify-content-center mb-2">
                                <a href="package_info.php?package=<?php echo $rw[1];?>" class="btn btn-md btn-warning px-3 border-end" style="border-radius: 30px 30px 30px 30px;">Read More</a>
                                <!--<a href="order_details.php?pname=<?php echo $rw[1]; ?>" class="btn btn-sm btn-warning px-3" style="border-radius: 0 30px 30px 0;">Book Now</a>-->
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Testimonial Start -->
<!--
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-warning px-3">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!!!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
            <?php
            /*
                    $sql="select * from feedback";
                    $res=mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_array($res))
                    {
                        */
                    ?>
                    
                <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="img/<?php //echo $rw[0]; ?>" alt="img" style="width: 80px; height: 80px;">
                    <h3 class="mb-0"><?php// echo $rw[1]; ?></h3>
                    <p><?php// echo $rw[2]; ?></p>
                    <p class="mb-0"><?php //echo $rw[3]; ?></p>
                </div>
                <?php
                //}
                ?>
            </div>
        </div>
    </div>
    -->
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <div class="container bg-dark text-light footer pt-5 mt-5  wow fadeIn" data-wow-delay="0.1s" style="width:2000px;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3" id="divfooter">Hindu Temples</h4>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="state.php">State</a>
                    <a class="btn btn-link" href="package.php">Packages</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="">feedback</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Ashok Chowk,Solapur, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Maharashtra</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>hncc@gmail.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                            <?php
                            $sql="select * from gallery";
                            $res=mysqli_query($con,$sql);
                            while($rw=mysqli_fetch_array($res))
                            {
                            ?>
                            
                        <div class="col-4">
                            <a href="gallery.php">
                                <img class="img-fluid bg-light p-1" src="img/<?php echo $rw[2];?>" alt="gallery" style="height:60px;width:200px;">
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-warning w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-warning py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-warning btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>