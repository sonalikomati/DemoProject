<?php
include('header.php');
if(isset($_POST['btn']))
{
	$room_type=$_POST['room_type'];
	$n_room=$_POST['n_room'];
	
	$sql="insert into booking(room_type,n_room)values('$room_type',$n_room)";
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
<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form" style="padding-top:60px;padding-bottom:60px">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
							</div>
						</div>
						<form method="post">
							<div class="row">
								<div class="form-group">
									<span class="form-label">Room Type</span>
									<select class="form-control" name="room_type">
										<option value="" selected hidden>Select</option>
											<?php
											$sql="select * from room";
											$res=mysqli_query($con,$sql);
											while($rw=mysqli_fetch_array($res))
											{
											?>
												<option value="<?php echo $rw[1];?>"><?php echo $rw[1];?></option>
											<?php
											}
											?>			
									</select>
									<span class="select-arrow"></span>
								</div>	
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">No. of Rooms</span>
                                        <input class="form-control" type="number" name="n_room">
									</div>
								</div>
							</div>
							<label style="color:red">[This is an optional , if you don't want to book rooms you can go to next]</label>
							<div class="form-btn">
								<a href="order_details.php">
									<button class="submit-btn" name="btn">Check Booking Details</button>
								</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
include('footer.php');
?>