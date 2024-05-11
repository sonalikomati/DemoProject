<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
$pnm=$_GET['package'];
$sql="select * from package1 where pname='$pnm'";
$res=mysqli_query($con,$sql);
while($rw=mysqli_fetch_row($res))
{
?>
<div class="container">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-warning px-3">Packages</h6>
    </div>

    <div>
        <p class="text-center wow fadeInUp" data-wow-delay="0.1s" style="font-size:4rem;font-family:Book Antiqua;color:orange">
            <?php echo $rw[1];?>
        </p>
        <p class="text-center wow fadeInUp" data-wow-delay="0.1s" style="font-size:1.3rem;font-family:Book Antiqua;color:green">
            <i class="fa fa-clock"> <?php echo $rw[4];?></i>
        </p>
        <p class="text-center wow fadeInUp" data-wow-delay="0.1s" style="font-size:1.5rem;font-family:Book Antiqua;color:red">
            <i class="fa fa-map-marker me-2"> <?php echo $rw[3]; ?></i>
        </p>

        <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
            <img src="backend/img/<?php echo $rw[2];?>" height=400px width=700px style="margin-left:0px;border:outset 7px #eb8934;margin-bottom:30px" >
        </div>
        
        <div class="" style="text-align:center;">
            <a href="order_details.php?pname=<?php echo $rw[1]; ?>">
                <h4>Do You want to book this package ?</h4>
            </a>
        </div>
        
        <p  class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange;">
            Overview
        </p>
        <p style="text-align:justify;margin-right:80px;color:black;margin-left:40px;">
        <?php echo $rw[11];?>
        </p>

        <p class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange">
            Hightlights
        </p>
        <p style="text-align:justify;margin-right:80px;color:black;">
        <div class="div4">
            <?php echo $rw[12]; ?>
        </div>
        </p>

        <p class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange">
            Itinerary
        </p>
        <p style="text-align:justify;margin-right:80px;color:black;">
            <?php echo $rw[13];?>
        </p>
        
        <!--
        <div class="details1">
            <details>
                <summary>
                    Day 1
                </summary>
                <p>
                </p>
            </details>
        </div>
        -->
    </div>
</div>
<?php
}
?>
<?php
include('footer.php');
?>