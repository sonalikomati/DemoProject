<?php
include('header.php');
$id=$_GET['pid'];

$sql="delete from package1 where pid=$id";
if(mysqli_query($con,$sql))
{
    header('Location:package.php');
}
else
{
    echo "not Deleted".mysqli_error($con);
}
?>
<?php
include('footer.php');
?>
