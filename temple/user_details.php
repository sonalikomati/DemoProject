<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Booking Details Receipt</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            text-align: center;
        }
        .booking-details {
            margin-top: 20px;
            ;
        }
        .booking-details table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        .booking-details th,
        .booking-details td {
            padding: 8px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        .total-cost {
            margin-top: 20px;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>User Details</h2>
        <?php
        if(isset($_SESSION['email']) && $_SESSION['email']==true)
        {
            $con=mysqli_connect("localhost","root","","temple1");
                $email = $_SESSION['email']; // Retrieve the email from the session
                $sql="select * from registration where email='$email'";
                $res=mysqli_query($con,$sql);
                while($rw=mysqli_fetch_array($res))
                {
            ?>
            <div class="booking-details">
                <h3>Customer Information</h3>
                <table>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $rw[1];?></td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td><?php echo $rw[2];?></td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td><?php echo $rw[3];?></td>
                    </tr>
                </table>
            </div>
            <?php
            }
        }
        ?>
    </div>


</body>
</html>
