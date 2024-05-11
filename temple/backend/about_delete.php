<?php
include('header.php');
$id=$_GET['cid'];

$sql="delete from about where id=$id";
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
