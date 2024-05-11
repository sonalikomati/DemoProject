<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-0" >
                <h2 class="mb-4 px-3">Gallery Details</h2>
                <div class="row g-4">
                    <div class="col-sm-10 col-xl-8">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-4 px-4">
                            <div class="m-n2" style="padding-bottom:30px;padding-left:450px">
                                <a href="gallery_form.php">
                                    <button type="button" class="btn btn-primary m-2"><i class="fa fa-plus"> Create New</i></button>
                                </a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">image</th>
                                        <th scope="col">Delete</th>
                                        <th scope="col">Update</th>
                                    </tr>
                                </thead>            
                                <?php
                                $sql="select * from gallery";
                                $res=mysqli_query($con,$sql);
                                while($rw=mysqli_fetch_row($res))
                                {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rw[0]?></td>
                                        <td><?php echo $rw[1]?></td>
                                        <td><img class="rounded-circle" src="img/<?php echo $rw[2];?>" alt="image" style="height:40px"></td>
                                        <td><a href="gallery_delete.php?gid=<?php echo $rw[0]?>"><i class="fa fa-trash-alt me-2" style='color:red;padding-left:15px'></i></a></td>
                                        <td><a href="gallery_update.php?gid=<?php echo $rw[0]?>"><i class="fa fa-edit me-2" style='color:green;padding-left:15px'></i></a></td>
                                    </tr>
                                </tbody>
                                <?php
                                }
                                ?>
                             </table>
                        </div>
                    </div>
                </div>
            </div>                   
<?php
include('footer.php');
?>