<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>

    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-warning px-3">Destination</h6>
        <h1 class="mb-5">Temples from State</h1>
    </div>    

<div class="container-xxl py-5">
<div class="img_color wow fadeInUp" data-wow-delay="0.3s" style="padding:0 0 0 0px;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-8">
                <div class="row pb-3">
                <?php
                    $snm=$_GET['state'];
                    $sql="select * from temple_info where state='$snm'";
                    $res=mysqli_query($con,$sql);
                    while($rw=mysqli_fetch_row($res))
                    {
                    ?>
                    <div class="col-lg-6" style="background-color:#fff8e3;margin-left:0px;margin-bottom:30px;">
                        <div class="position-relative">
                            <img class="img-fluid" src="backend/img/<?php echo $rw[3]?>" alt="" style="height:210px;width:350px;margin-left:-40px">
                        </div>
                    </div>
                    <div class="col-lg-5" style="background-color:#fff8e3;padding-top:40px;margin-bottom:30px;">
                        <h5 class="mb-1"><?php echo $rw[1]?></h5>
                        <div class="row gx-5 text-center">                        
                            <!--<a class="btn btn-warning px-1 mt-5 p-2" href="booking.php"  style="width:140px;">Book Now</a>-->
                            <a class="btn btn-warning px-1 mt-5 p-2" href="temple_info.php?name=<?php echo $rw[1];?>" style="width:140px;margin-left:40px">View Details</a>
                        </div>
                        </div> 
                   
                   
                    
                    <?php
                    }
                    ?>
                     </div>
                </div>
                
                <div class="col-lg-4" style="margin-top:250px;">
                <h3 class="mb-5 text-center">Contact For Any Query</h3>
                <?php
                if(isset($_POST['btn']))
                {
                    $fname=$_POST['fname'];
                    $lname=$_POST['lname'];
                    $email=$_POST['email'];
                    $msg=$_POST['msg'];

                    $sql="insert into contact(fname,lname,email,message)values('$fname','$lname','$email','$msg')";
                    if(mysqli_query($con,$sql))
                    {
                        echo "";
                    }
                    else
                    {
                        echo "not inserted";
                    }
                }
                ?>
                <div class="col-lg- col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="fname" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">First Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="lname" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Last Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" name="msg" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" name="btn" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
  
                </div>  
                
            </div>
        </div>
    </div>       
</div>    
</div>

 <!--   <div class="container-xxl py-5">
        <div class="container">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img\h1.jpg" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="mb-4">A Hindu temple, or , seat and body of designed to bringand body of divinity for Hindus. It is a structure designed to bring human beings and gods together through worship, sacrifice, and devotHindu temple, or , seat and body of divinity for Hindus. It is a structure designed to bring human beings and gods together through worship, sacrifice, and devotion.</p>
                        <div class="row gy-2 gx-4 mb-1">                        
                            <a class="btn btn-warning py-3 px-5 mt-1" href="booking.php"  style="width:190px;">Book Now</a>
                            <a class="btn btn-warning py-3 px-1 mt-1" href="booking.php"  style="width:190px;margin-left:40px">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    <div class="container-xxl py-5">
        <div class="container">
            <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img\h2jpg.jpg" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <p class="mb-4">A .  body of divinity for Hindus. It is a structure designed to bringand body of divinity for Hindus. It is a structure designed to bring human beings and gods together through worship, sacrifice, and devotHindu temple, or , seat and body of divinity for Hindus. It is a structure designed to bring human beings and gods together through worship, sacrifice, and devotion.</p>
                        <div class="row gy-2 gx-4 mb-1">                        
                            <a class="btn btn-warning py-3 px-5 mt-1" href="booking.php"  style="width:190px;">Book Now</a>
                            <a class="btn btn-warning py-3 px-1 mt-1" href="booking.php"  style="width:190px;margin-left:40px">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>-->
<?php
include("footer.php");
?>
