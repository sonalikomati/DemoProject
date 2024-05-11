<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-0" >
                <div class="row g-4">
                    <div class="col-sm-10 col-xl-10">
                    <h2 class="mb-4 px-3">Temple Details</h2>
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-4 px-4">
                        <div class="m-n2" style="padding-bottom:20px;padding-left:600px">
                                <a href="temple_info_insert.php">
                                    <button type="button" class="btn btn-primary m-2"><i class="fa fa-plus"> Create New</i></button>
                                </a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="color:black">id</th>
                                        <th style="color:black">Temple Name</th>
                                        <th style="color:black">image</th>
                                        <th style="color:black" style="padding-left:20px;">State</th>
                                        <th style="color:black">Delete</th>
                                        <th style="color:black">Update</th>
                                    </tr>
                                </thead>            
                                <?php
                                $sql="select * from temple_info";
                                $res=mysqli_query($con,$sql);
                                while($rw=mysqli_fetch_row($res))
                                {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rw[0]?></td>
                                        <td><?php echo $rw[1]?></td>
                                        <td style="padding:10px;"><?php echo $rw[2]?></td>
                                        <td style="padding:10px;"><img class="rounded-circle" src="img/<?php echo $rw[3];?>" alt="image" style="height:50px;width:60px;"></td>
                                        <td style="padding:20px 10px 0 10px;"><a href="temple_info_delete.php?tid=<?php echo $rw[0];?>"><i class="fa fa-trash-alt me-2" style='color:red;padding-left:15px'></i></a></td>
                                        <td style="padding:20px 10px 0 10px;"><a href="temple_info_update.php?tid=<?php echo $rw[0];?>"><i class="fa fa-edit me-2" style='color:green;padding-left:15px'></i></a></td>
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