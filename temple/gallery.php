<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>
    <!-- Gallery Start -->
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
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
      
<?php
include('footer.php');
?>