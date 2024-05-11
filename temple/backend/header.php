<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
?>

<?php
if(isset($_SESSION['email']) && $_SESSION['email']==true)
{
    $email = $_SESSION['email']; // Retrieve the email from the session
    $sql="select * from admin where email='$email'";
    $res=mysqli_query($con,$sql);
    while($rw=mysqli_fetch_array($res))
    {
?>
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">

        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.php" class="navbar-brand mx-4 mb-3">
                    <h4 class="text-primary"><i class="fa fa-gopuram me-2"></i>Hindu Temple</h4>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $rw[1]; ?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link active"><i class="fa fa-home me-2"></i>Home</a>
                    <!--<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Tables</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="about.php" class="dropdown-item">About</a>
                            <a href="gallery.php" class="dropdown-item">Gallery</a>
                            <a href="package.php" class="dropdown-item">Packages</a>
                            <a href="temple_info.php" class="dropdown-item">Temple Details</a>
                        </div>
                    </div>
                    <a href="about.php" class="nav-item nav-link"><i class="fa fa-globe me-2"></i>About</a>-->
                    <a href="admin_details.php" class="nav-item nav-link"><i class="fa fa-comments me-2"></i>Admin</a>
                    <a href="gallery.php" class="nav-item nav-link"><i class="fa fa-camera me-2"></i>Gallery</a>
                    <a href="package.php" class="nav-item nav-link"><i class="fa fa-map me-2"></i>Packages</a>
                    <a href="temple_info.php" class="nav-item nav-link"><i class="fa fa-gopuram me-2"></i>Temple Details</a>
                    <a href="contact.php" class="nav-item nav-link"><i class="fa fa-phone me-2"></i>Contact</a>
                    <a href="feedback.php" class="nav-item nav-link"><i class="fa fa-comments me-2"></i>Reviews</a>
                    <a href="users.php" class="nav-item nav-link"><i class="fa fa-user me-2"></i>Users</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/<?php echo $rw[5]; ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $rw[1]; ?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="admin_details.php" class="dropdown-item">My Profile</a>
                            <?php
						if(isset($_SESSION['email']) && $_SESSION['email']==true)
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
                            <a href="admin_logout.php" class="dropdown-item">Logout</a>
						<?php
						}
                        ?>
                    </div>
                </div>
            </nav>
            
            <!-- Navbar End -->
  <?php
    }
}
?>