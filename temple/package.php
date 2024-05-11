<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>
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
                    <div class="package-item"  style="border-radius:20px 20px 20px 20px;background-color:#fff8e3;">
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


   
      
<?php
include('footer.php');
?>