<?php
include('header.php');

if(isset($_POST['btn']))
    {
        $datetime=$_POST['datetime'];
      
        $sql="insert into train(datetime) values('$datetime')";
            if(mysqli_query($con,$sql))
            {
                 echo "inserted";
            }
            else
            {
                 echo "not inserted".mysqli_error($con);
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
                                    <label for="exampleInputPassword1" class="form-label">Flight Day , Date and time:</label>
                                    <input class="form-control" name="datetime">
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