<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
$nm=$_GET['name'];
$sql="select * from temple_info where name='$nm'";
$res=mysqli_query($con,$sql);
while($rw=mysqli_fetch_row($res))
{
?>
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-warning px-3">Details</h6>
    </div>

    <div class="temple_div" style="margin-left:80px">
        <p  class="text-center wow fadeInUp" data-wow-delay="0.1s" style="font-size:4rem;font-family:Book Antiqua;color:orange">
            <?php echo $rw[1];?></p>
        </p>
        
        <img src="backend/img/<?php echo $rw[3];?>" height=400px width=700px style="margin-left:350px;border:outset 7px #eb8934;margin-bottom:30px" >
    
        <p style="text-align:justify;margin-right:80px;color:black;">
            <?php echo $rw[4];?>
        </p>
   
        <p  class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange">
            History of <?php echo $rw[1];?> 
        </p>
        <p style="text-align:justify;margin-right:80px">
            <?php echo $rw[5];?>
        </p>

        <p  class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange;">
            Architecture of <?php echo $rw[1];?></p>
        </p>
            <p style="text-align:justify;margin-right:80px">
        <?php echo $rw[6];?>

        </p>

        <p  class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange;">
            Temple Details
        </p>
        <p style="text-align:justify;margin-right:80px;">
            <?php echo $rw[7];?>
        </p>
    
        <p  class=" wow fadeInUp" data-wow-delay="0.1s" style="font-size:3rem;font-family:Book Antiqua;color:orange">
            <i class="fas fa-gopuram"></i>
                Photos
            </i>
        </p>

        <img src="backend/img/<?php echo $rw[8];?>" height=280px width=440px style="margin-right:10px;margin-bottom:20px;border:solid 3px orange">
        <img src="backend/img/<?php echo $rw[9];?>" height=280px width=440px style="margin-right:10px;margin-bottom:20px;border:solid 3px orange">
        <img src="backend/img/<?php echo $rw[10];?>" height=280px width=440px style="margin-right:10px;margin-bottom:20px;border:solid 3px orange">

    </div>      
<?php
}
?>
<?php
include('footer.php');
?>
