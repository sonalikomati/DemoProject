<?php
$con=mysqli_connect("localhost","root","","temple1");
session_start();
include('header1.php');
?>

<!--user registration details-->
<?php
if(isset($_SESSION['email'])&&$_SESSION['email']==true)
{
    $email = $_SESSION['email'];
    $sql = "SELECT * FROM registration WHERE email='$email'";
    $res = mysqli_query($con, $sql);
?>

            <div class="container-fluid pt-1 px-0" >
                <h2 class="mb-4 px-1" style="margin-top:80px;">User Details</h2>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-11">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-4 px-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">uid</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">image</th>
                                    </tr>
                                </thead>            
                                <?php
                                    while($rw=mysqli_fetch_row($res))
                                    {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rw[0]?></td>
                                        <td><?php echo $rw[1]?></td>
                                        <td><?php echo $rw[2]?></td>
                                        <td><?php echo $rw[3]?></td>
                                        <td><?php echo $rw[4]?></td>
                                        <td><img class="rounded-circle" src="img/<?php echo $rw[5];?>" alt="image" style="height:40px"></td>
                                    </tr>
                                </tbody>
                                <?php
                                }
                                ?>
                             </table>
                        </div>
                    </div>
                </div>
            </div>                   
<?php
}
?>


<?php
if(isset($_SESSION['email'])&&$_SESSION['email']==true)
{

    $email = $_SESSION['email'];
    $user_query = mysqli_query($con, "SELECT uid FROM registration WHERE email = '$email'");
    $user_row = mysqli_fetch_assoc($user_query);
    $uid = $user_row['uid'];

    $sql = "SELECT * FROM booking WHERE uid=$uid";
    $res = mysqli_query($con, $sql);
?>

            <div class="container-fluid pt-1 px-0" >
                <h2 class="mb-4 px-1" style="margin-top:80px;">Booking Details</h2>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-11">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-4 px-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">uid</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Password</th>
                                        <th scope="col">image</th>
                                    </tr>
                                </thead>            
                                <?php
                                    while($rw=mysqli_fetch_row($res))
                                    {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rw[0]?></td>
                                        <td><?php echo $rw[1]?></td>
                                        <td><?php echo $rw[2]?></td>
                                        <td><?php echo $rw[3]?></td>
                                        <td><?php echo $rw[4]?></td>
                                        <td><img class="rounded-circle" src="img/<?php echo $rw[5];?>" alt="image" style="height:40px"></td>
                                    </tr>
                                </tbody>
                                <?php
                                }
                                ?>
                             </table>
                        </div>
                    </div>
                </div>
            </div>                   
<?php
}
?>


<?php
include('footer1.php');
?>