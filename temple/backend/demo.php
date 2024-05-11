<?php
include('header.php');

if(isset($_POST['btn']))
    {
        $name=$_POST['name'];
        $state=$_POST['state'];
        $about=$_POST['about'];
        $history=$_POST['history'];
        $architecture=$_POST['architecture'];
        $temp_details=$_POST['temp_details'];

        $filename=$_FILES['image']['name'];
        $filesize=$_FILES['image']['size'];
        $filetemnm=$_FILES['image']['tmp_name'];
        $filetype=$_FILES['image']['type'];
        $filestore="img/".$filename;

       
        if(move_uploaded_file($filetemnm,$filestore))
        {
            $sql="insert into temple_info(name,state,image,about,history,archi,detail) values('$name','$state','$filename','$about','$history','$architecture','$temp_details')";
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

            <!-- Gallary Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                    <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Temple Information</h6>
                            <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Select Temple Name:</label>
                                    <select name="name">
                                    <?php                                
                                    $sql1="select * from all_temples";
                                    $res=mysqli_query($con,$sql1);
                                    while($rw=mysqli_fetch_row($res))
                                    {
                                    ?>
                                        <option value="<?php echo $rw[0];?>"><?php echo $rw[1];?></option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                </div>                               
                                
                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Select State:</label>
                                    <select name="state">
                                    <?php                                
                                    $sql1="select * from state";
                                    $res=mysqli_query($con,$sql1);
                                    while($rw=mysqli_fetch_row($res))
                                    {
                                    ?>
                                        <option value="<?php echo $rw[0];?>"><?php echo $rw[3];?></option>
                                    <?php
                                    }
                                    ?>
                                    </select>
                                </div>                               
                                

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">image</label>
                                    <input type="file" name="image" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="mb-3">
                                <label for="floatingTextarea">About</label>
                                <textarea class="form-control" placeholder="Text Here" name="about"
                                    id="temp1" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                <label for="floatingTextarea">History</label>
                                <textarea class="form-control" placeholder="Text Here" name="history"
                                    id="temp2" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                <label for="floatingTextarea">Architecture</label>
                                <textarea class="form-control" placeholder="Text Here" name="architecture"
                                    id="temp3" style="height: 150px;"></textarea>
                                </div>

                                <div class="mb-3">
                                <label for="floatingTextarea">Temple Details</label>
                                <textarea class="form-control" placeholder="Text Here" name="temp_details" 
                                    id="temp4" style="height: 150px;"></textarea>
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