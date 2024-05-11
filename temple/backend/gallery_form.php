<?php
include('header.php');
if(isset($_POST['btn']))
{
    $name=$_POST['name'];

    $filename=$_FILES['image']['name'];
	$filesize=$_FILES['image']['size'];
	$filetemnm=$_FILES['image']['tmp_name'];
	$filetype=$_FILES['image']['type'];
	$filestore="img/".$filename;
	
    if(move_uploaded_file($filetemnm,$filestore))
    {
        $sql="insert into gallery(name,image) values('$name','$filename')";
        if(mysqli_query($con,$sql))
        {
            echo "inserted";
        }
        else
        {
            echo "not inserted".mysqli_error($con);
        }
    }
}
?>
        <!-- Gallery start-->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Gallery Image Insert</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Temple Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <button type="submit" name="btn" class="btn btn-primary">Insert</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Gallery End -->

<?php
include('footer.php');
?>
