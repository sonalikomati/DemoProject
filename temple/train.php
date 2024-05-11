<?php
include("header.php");
if(isset($_POST['btn']))
{
	$travel_date=$_POST['travel_date'];
	$adult=$_POST['adult'];
	$child=$_POST['child'];
	
	$sql="insert into booking(travel_date,adult,child)values('$travel_date','$adult','$child')";
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
  <!-- Booking Start -->
  <div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form" style="padding-top:90px;padding-bottom:90px">
						<div class="booking-bg">
							<div class="form-header">
								<h2>How do you want to travel ?</h2>
								<p>Hindu Temples Hindu TemplesHindu TemplesHindu TemplesHindu TemplesHindu TemplesHindu Temples</p>
							</div>
						</div>
						<form method="post">
							<div class="row">
                            <div class="form-group">
								<span class="form-label">Check The Dates</span>
								<select class="form-control" name="travel_date" required>
									<option value="" selected hidden>Select</option>
										<?php
										$sql="select * from train";
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
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adults</span>
                                        <input class="form-control" type="number" name="adult" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Childs</span>
                                        <input class="form-control" type="text" name="child" required>
									</div>
								</div>
							</div>
						
							<div class="">
                                <a href="room.php"><button class="submit-btn" name="btn">Next</button></a>
							</div>
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