<?php
include("header.php");
//session_start();
if(isset($_POST['btn']))
{
	$destination=$_POST['destination'];
	$start_d=$_POST['start_d'];
	$return_d=$_POST['return_d'];
	$start_date=$_POST['start_date'];
	$return_date=$_POST['return_date'];
	$travel=$_POST['travel'];

	
	$email=$_SESSION['email'];

	$uidQuery="select uid from registration where email='$email'";
	$res=mysqli_query($con,$uidQuery);
	$ct=mysqli_fetch_row($res);
	$uid=$ct[0];

	$sql="insert into booking(uid,destination,start_d,return_d,start_date,return_date,travel)values($uid,'$destination','$start_d','$return_d','$start_date','$return_date','$travel')";
	if(mysqli_query($con,$sql))
	{
		echo "inserted";
	}
	else
	{
		echo "not inserted";
	}
}
?>

<!--tname,package,start,check_in,check_out,travel,date,adult,child,room_type,no_of_rooms,-->
  <!-- Booking Start -->
  <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Hindu Temples Hindu TemplesHindu TemplesHindu TemplesHindu TemplesHindu TemplesHindu Temples</p>
							</div>
						</div>
						<form action="" method="post">
							<div class="row">
								<!--
								<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">Where to go ?</span>
											<select class="form-control" name="destination">
												<option value="" selected hidden>Select Temple</option>
												<?php
												/*
												$sql="select * from temple_info";
												$res=mysqli_query($con,$sql);
												while($rw=mysqli_fetch_array($res))
												{
												?>
												<option value="<?php echo $rw[1];?>"><?php echo $rw[1];?></option>
												<?php
												}
												*/
												?>			
											</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								-->
								<!--<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">OR</span>
											<select class="form-control" name="destination">
												<option value="" selected hidden>Select Package</option>
												<?php
												/*
												$sql="select * from temple_info";
												$res=mysqli_query($con,$sql);
												while($rw=mysqli_fetch_array($res))
												{
												?>
												<option value="<?php echo $rw[3];?>"><?php echo $rw[3];?></option>
												<?php
												}*/
												?>			
											</select>
										<span class="select-arrow"></span>
									</div>
								</div>
								-->
								<div class="form-group">
									<span class="form-label">Where to go ?</span>
									<input class="form-control" type="text" name="destination">
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Departure</span>
										<input class="form-control" type="text" name="start_d">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Return</span>
										<input class="form-control" type="text" name="return_d">
									</div>
								</div>
                                <div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Departure Date</span>
										<input class="form-control" type="date"  name="start_date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Return Date</span>
										<input class="form-control" type="date" name="return_date">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Flight</span>
                                        <input type="radio" name="travel" value="flight">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Train</span>
                                        <input type="radio" name="travel" value="train">
									</div>
								</div>
								<div class="col-md-2">
									<div class="form-group">
										<span class="form-label">Bus</span>
                                        <input type="radio" name="travel" value="bus">
									</div>
								</div>
							</div>
							<div class="form-btn">
								<button type="submit" class="submit-btn" name="btn">Check availability</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>  <!-- Booking Start -->
        

  
<?php
include("footer.php");
?>