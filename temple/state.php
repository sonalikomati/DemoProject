<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>
    <!-- states Start -->
    <div class="container-xxl py-5 destination">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Destination</h6>
                <h1 class="mb-5">States</h1>
            </div>
            <div class="container-xxl py-1">
        <div class="container">
            <div class="row g-4">
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
    </div>
            </div>
    <!-- states end -->

      
<?php
include('footer.php');
?>