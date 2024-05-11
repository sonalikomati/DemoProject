<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>
<?php


if(!isset($_SESSION['email'])) 
    {
        echo "<script>swal('Cannot accept Your feedback!', 'Please login!', 'error');
        </script>";
    }
    else
    {
		if(isset($_POST['btn']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            $message=$_POST['message'];

            $sql="insert into feedback(name,email,message)values('$name','$email','$message')";
            if(mysqli_query($con,$sql)) {
                // If booking is successful, show SweetAlert
                echo "<script>swal('Thank you for your feedback!', 'Your booking has been confirmed!', 'success');
                </script>";
            } 
            else 
            {
                echo "<script>swal('Booking unsuccessful!', 'Please Login!', 'error');
                </script>";
            }
}
    }
?>

    <!-- feedback Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Feedback</h6>
                <h1 class="mb-5">Give Feedback</h1>
            </div>
            
            <div class="col-lg-6 col-md-12 wow fadeInUp " data-wow-delay="0.3s" style="margin-left:330px;">
                <form method="post" enctype="multipart/form-data">
                <div class="bg-light rounded h-100 p-4 " >
                        <div class="row g-3">
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" value="">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" name="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-warning w-100 py-3" name="btn" type="submit">Send Message</button>
                            </div>
                        </div>
                        <?php
            ?>


                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- feedback End -->
<?php
include('footer.php');
?>