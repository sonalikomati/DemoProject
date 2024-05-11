<?php
include('header.php');
$fid=$_GET['fid'];

$sql="delete from feedback where fid=$fid";
if(mysqli_query($con,$sql))
{
    echo "Deleted";
    //header("Location:contact.php");
}
else
{
    echo "not Deleted".mysqli_error($con);
}
?>
<?php
include('footer.php');
?>
