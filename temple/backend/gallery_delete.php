<?php
include('header.php');
$id=$_GET['gid'];

$sql="delete from gallery where id=$id";
if(mysqli_query($con,$sql))
{
    echo "Deleted";
}
else
{
    echo "not Deleted".mysqli_error($con);
}
?>
<?php
include('footer.php');
?>
