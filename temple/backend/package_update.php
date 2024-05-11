<?php
include('header.php');
$id=$_GET['pid'];
if(isset($_POST['btn']))
{
    $pname=$_POST['pname'];
    $tname=$_POST['tname'];
    $day=$_POST['day'];
    $from_l=$_POST['from_l'];
    $to_l=$_POST['to_l'];
    $check_in=$_POST['check_in'];
    $check_out=$_POST['check_out'];
    $price=$_POST['price'];
    $note=$_POST['note'];
    $overview=$_POST['overview'];
    $highlight=$_POST['highlight'];
    $itinerary=$_POST['itinerary'];

    $filename=$_FILES['image']['name'];
	$filesize=$_FILES['image']['size'];
	$filetemnm=$_FILES['image']['tmp_name'];
	$filetype=$_FILES['image']['type'];
	$filestore="img/".$filename;
	
    if(move_uploaded_file($filetemnm,$filestore))
    {

        $sql="update package1 set pname='$pname',tname='$tname',day='$day',from_l='$from_l',to_l='$to_l',check_in='$check_in',check_out='$check_out',price='$price',note='$note',overview='$overview',highlight='$highlight',itinerary='$itinerary',image='$filename' where pid=$id";
        if(mysqli_query($con,$sql))
        {
            header('Location:package.php');
        }
        else
        {
            echo "not updated".mysqli_error($con);
        }
    }
}

?>

 <!-- Package Start -->
 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-10">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Package Information</h6>
                            <form method="post" enctype="multipart/form-data">
                            <?php
                                $id=$_GET['pid'];
                                $sql="select * from package1 where pid=$id";
                                $res=mysqli_query($con,$sql);
                                $rw=mysqli_fetch_array($res);
                                ?>
                                <div class="mb-3">
                                    <label for="floatingTextarea">Package Name</label>
                                    <input type="text" name="pname"  value="<?php echo $rw[1]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Package Image</label>
                                    <input type="file" name="image" value="<?php echo $rw[2]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">Temple Name</label>
                                    <input type="text" name="tname" value="<?php echo $rw[3]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Days</label>
                                    <input type="text" name="day" value="<?php echo $rw[4]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="floatingTextarea">from location</label>
                                    <input type="text" name="from_l" value="<?php echo $rw[5]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">to location</label>
                                    <input type="text" name="to_l" value="<?php echo $rw[6]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">check in</label>
                                    <input type="date" name="check_in" value="<?php echo $rw[7]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">check out</label>
                                    <input type="date" name="check_out" value="<?php echo $rw[8]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">Price</label>
                                    <input type="text" name="price" value="<?php echo $rw[9]; ?>" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Note</label>
                                    <textarea class="form-control" placeholder="Text Here" name="note" value="<?php echo $rw[10]; ?>"
                                        id="exampleInputEmail" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Overview</label>
                                    <textarea class="form-control" placeholder="Text Here" name="overview" value="<?php echo $rw[11]; ?>"
                                        id="summernote4" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Highlights</label>
                                    <textarea class="form-control" placeholder="Text Here" name="highlight" value="<?php echo $rw[12]; ?>"
                                        id="summernote5" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Itinerary</label>
                                    <textarea class="form-control" placeholder="Text Here" name="itinerary" value="<?php echo $rw[13]; ?>"
                                        id="summernote6" style="height: 150px;"></textarea>
                                </div>

                                
                                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<?php
include('footer.php');
?>