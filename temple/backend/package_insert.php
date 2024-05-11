<?php
include('header.php');

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

    $sql="insert into package1(pname,image,tname,day,from_l,to_l,check_in,check_out,price,note,overview,highlight,itinerary) values('$pname','$filename','$tname','$day','$from_l','$to_l','$check_in','$check_out','$price','$note','$overview','$highlight','$itinerary')";
        if(mysqli_query($con,$sql))
        {
            header('Location:package.php');
        }
        else
        {
            echo "not inserted".mysqli_error($con);
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

                                <div class="mb-3">
                                    <label for="floatingTextarea">Package Name</label>
                                    <input type="text" name="pname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Package Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Temple Name</label>
                                    <input type="text" name="tname" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Days</label>
                                    <input type="text" name="day" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">from location</label>
                                    <input type="text" name="from_l" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">to location</label>
                                    <input type="text" name="to_l" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">check in</label>
                                    <input type="text" name="check_in" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea">check out</label>
                                    <input type="text" name="check_out" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="floatingTextarea">Price</label>
                                    <input type="text" name="price" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Note</label>
                                    <textarea class="form-control" placeholder="Text Here" name="note"
                                        id="exampleInputEmail" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Overview</label>
                                    <textarea class="form-control" placeholder="Text Here" name="overview"
                                        id="summernote4" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Highlights</label>
                                    <textarea class="form-control" placeholder="Text Here" name="highlight"
                                        id="summernote5" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="floatingTextarea">Itinerary</label>
                                    <textarea class="form-control" placeholder="Text Here" name="itinerary"
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