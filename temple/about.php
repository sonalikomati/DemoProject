<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>		
    <div class="container-fluid position-relative p-0">

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


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-warning px-3">Travel Guide</h6>
                <h1 class="mb-5">Meet Our Guide</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item" style="background-color:#fcefe1;">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="img/g1.png" alt="" style="height:250px;width:300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top:20px;">
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Rohan</h5>
                            <small>LOCAL TOUR GUIDE</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item"  style="background-color:#fcefe1;">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="img/g2.png" alt="" style="height:250px;width:300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top:20px;">
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Aman</h5>
                            <small>TOUR DIRECTOR</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item" style="background-color:#fcefe1;">
                        <div class="overflow-hidden">
                        <img class="img-fluid" src="img/g3.png" alt="" style="height:250px;width:300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top:20px;">
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Saanvi</h5>
                            <small>TRAVEL AGENCY MANAGER</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item" style="background-color:#fcefe1;">
                        <div class="overflow-hidden" style="margin-bottom:0px">
                            <img class="img-fluid" src="img/g5.png" alt="" style="height:250px;width:300px;">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top:20px;">
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square mx-1 text-warning" href=""><i class="fab fa-instagram"></i></a>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Teju</h5>
                            <small>RESERVATIONS SALES AGENT</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
</div>      
<?php
include('footer.php');
?>