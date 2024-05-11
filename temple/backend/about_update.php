<?php
include('header.php');
$id=$_GET['aid'];
if(isset($_POST['btn']))
{
    $para=$_POST['para'];
    $p1=$_POST['p1'];
    $p2=$_POST['p2'];
    $p3=$_POST['p3'];
    $p4=$_POST['p4'];

    $filename=$_FILES['image']['name'];
	$filesize=$_FILES['image']['size'];
	$filetemnm=$_FILES['image']['tmp_name'];
	$filetype=$_FILES['image']['type'];
	$filestore="img/".$filename;
	
    if(move_uploaded_file($filetemnm,$filestore))
    {
        $sql="update about set image='$filename',para='$para',p1='$p1',p2='$p2',p3='$p3',p4='$p4' where id=$id";
        if(mysqli_query($con,$sql))
        {
            echo "updated";
        }
        else
        {
            echo "not updated".mysqli_error($con);
        }
    }
}
?>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">About Form</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">About Image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Point 1</label>
                                    <input type="text" name="p1" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Point 2</label>
                                    <input type="text" name="p2" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Point 3</label>
                                    <input type="text" name="p3" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Point 4</label>
                                    <input type="text" name="p4" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Paragraph</label>
                                    <textarea type="text" name="para" id="abt" class="form-control"></textarea>                                
                                </div>
                                <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- Form End -->
            
<?php
include('footer.php');
?>