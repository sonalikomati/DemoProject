<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header.php');
?>

<!--Booking Details-->
<?php
$pname=$_GET['pname'];
$sql="select * from package1 where pname='$pname'";
$res=mysqli_query($con,$sql);
while($rw=mysqli_fetch_array($res))
{
?>
<?php
// Sample vehicle data (you can replace this with data from a database)
$vehicles = [
    'Car' => 10000,
    'Bus' => 8000,
    'Train' => 6000,
];  
if(isset($_POST['btn'])) 
{
    if(!isset($_SESSION['email'])) 
    {
        echo "<script>swal('Booking Unuccessful!', 'Please login!', 'error');</script>";
    }
    else
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
        {
            $selected_vehicle = $_POST['vehicle'];
            $adults = intval($_POST['adults']);
            $children = intval($_POST['children']);
            $package_p = intval($_POST['price1']);

            // Calculate the total cost based on the selected vehicle, adults, and children
            $total_cost = ($vehicles[$selected_vehicle] * $adults) + ($vehicles[$selected_vehicle] * 0.5 * $children) + $package_p;
            //echo "<p>Total Cost for $adults adults and $children children using $selected_vehicle: $$total_cost</p>";

            $destination=$_POST['destination'];
            $from=$_POST['from'];
            $to=$_POST['to'];
            $check_in=$_POST['check_in'];
            $check_out=$_POST['check_out'];
            $travel=$_POST['vehicle'];

            // Get the user ID based on the email
            $email = $_SESSION['email'];
            $user_query = mysqli_query($con, "SELECT uid FROM registration WHERE email = '$email'");
            $user_row = mysqli_fetch_assoc($user_query);
            $uid = $user_row['uid'];

            $sql="insert into booking(uid,date,destination,from_l,to_l,check_in,check_out,travel,adult,child,total)values($uid,now(),'$destination','$from','$to','$check_in','$check_out','$travel',$adults,$children,'$total_cost')";                    
            if(mysqli_query($con,$sql)) {
                // If booking is successful, show SweetAlert
                echo "<script>swal('Booking Successful!', 'Your booking has been confirmed!', 'success');
                </script>";
            } 
            else 
            {
                echo "<script>swal('Booking unsuccessful!', 'Please Login!', 'error');
                </script>";
            }
        }
    }
}
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</head>
<div class="container" style="background-color:#fff8e3;padding:30px;margin-top:60px">
        <div class="container-fluid">
            <form method="post">
                <h3 style="margin-bottom:40px;margin-left:0px;font-weight:bold;color:green">Travelling Details</h3>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Destination</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="inputEmail3" name="destination" value="<?php echo $rw[1]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">From</label>
                    <div class="col-sm-4">
                        <input type="text" readonly class="form-control" id="inputEmail3" name="from" value="<?php echo $rw[5]; ?>">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">To</label>
                    <div class="col-sm-4">
                        <input type="text" readonly class="form-control" id="inputPassword3" name="to" value="<?php echo $rw[6]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Check-in</label>
                    <div class="col-sm-4">
                        <input type="email" readonly class="form-control" id="inputEmail3" name="check_in" value="<?php echo $rw[7]; ?>">
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Check-out</label>
                    <div class="col-sm-4">
                        <input type="text" readonly class="form-control" id="inputPassword3" name="check_out" value="<?php echo $rw[8]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Package Price/Person</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="inputEmail3" name="price1" value="<?php echo $rw[9]; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Vehicle ?</label>
                    <div class="col-sm-10">
                        <select type="text" name="vehicle" id="vehicle" class="form-control" value="">
                        <?php foreach ($vehicles as $vehicle => $price): ?>
                            <option value="<?= $vehicle ?>"><?= $vehicle ?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Adults</label>
                    <div class="col-sm-4">
                        <input type="number" name="adults" id="adults" min="1" required>
                    </div>
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Childs</label>
                    <div class="col-sm-4">
                        <input type="number" name="children" id="children" min="0" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Total Cost</label>
                    <div class="col-sm-10">
                        <span id="total_cost">0</span>
                    </div>
                </div>

                <!--total cost of package-->
                <script>
                    // JavaScript function to calculate total cost
                    function calculateTotalCost() {
                        var selected_vehicle = document.getElementById('vehicle').value;
                        var adults = parseInt(document.getElementById('adults').value);
                        var children = parseInt(document.getElementById('children').value);
                        var package_price = parseInt(<?php echo $rw[9]; ?>);
                        var vehicle_price = <?php echo json_encode($vehicles); ?>[selected_vehicle];

                        // Calculate total cost
                        var total_cost = (vehicle_price * adults) + (vehicle_price * 0.5 * children) + package_price;
                        
                        // Display total cost
                        document.getElementById('total_cost').innerText = total_cost;
                    }

                    // Call the function initially
                    calculateTotalCost();

                    // Call the function whenever there's a change in the inputs
                    document.getElementById('vehicle').onchange = calculateTotalCost;
                    document.getElementById('adults').oninput = calculateTotalCost;
                    document.getElementById('children').oninput = calculateTotalCost;
                </script>
                <!--
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control" id="inputEmail3" value="Delux">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">No. Of Room</label>
                    <div class="col-sm-10">
                    <input type="number" readonly class="form-control" id="inputEmail3" value="1">
                    </div>
                </div>--> 
                <!--<div class="" style="text-align:center;">
                    <button type="submit" name="btn" class="btn btn-outline-warning" style="padding:15px 70px 15px 70px;font-weight:bold">Book</button>
                </div>
                -->

                <!--
                <button type="submit" name="btn" class="btn btn-warning">Conform</button>
                -->             
                <!-- Modal -->
                <div class="" style="text-align:center;">
                    <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#exampleModal" style="padding:15px 70px 15px 70px;font-weight:bold">
                        Book
                    </button>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                    <div class="modal-body" style="text-align:center;">
                        <?php
                            //echo "$vehicle=$total_cost";
                        ?>
                        Do you want to Book ?
                    </div>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" name="btn" class="btn btn-warning">Conform</button>
                    </div>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
<?php
}
?>
<?php
include('footer.php');
?>
