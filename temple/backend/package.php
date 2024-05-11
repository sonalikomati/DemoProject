<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-0" >
            <h2 class="mb-4 px-3">Package Details</h2>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-11">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-4 px-4">
                            <div class="m-n2" style="padding-bottom:10px;padding-left:650px">
                                <a href="package_insert.php">
                                    <button type="button" class="btn btn-primary m-2"><i class="fa fa-plus"> Create New</i></button>
                                </a>
                            </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding-left:25px;">pid</th>
                                        <th style="padding-left:15px;">Package Name</th>
                                        <th style="padding-left:25px;">Temples</th>
                                        <th style="padding-left:25px;">Duration</th>
                                        <th style="padding-left:25px;">Price</th>
                                        <th style="padding-left:25px;">image</th>
                                        <th style="padding-left:25px;">Delete</th>
                                        <th style="padding-left:25px;">Update</th>
                                    </tr>
                                </thead>            
                                <?php
                                $sql="select * from package1";
                                $res=mysqli_query($con,$sql);
                                while($rw=mysqli_fetch_row($res))
                                {
                                ?>
                                <tbody>
                                    <tr>
                                        <td style="padding:25px;"><?php echo $rw[0]?></td>
                                        <td style="margin-right:-20px;"><?php echo $rw[1]?></td>
                                        <td style="padding:15px;"><?php echo $rw[3]?></td>
                                        <td style="padding:25px;"><?php echo $rw[4]?></td>
                                        <td style="padding:25px;"><?php echo $rw[5]?></td>
                                        <td style="padding:25px;"><img class="rounded-circle" src="img/<?php echo $rw[2];?>" alt="image" style="height:50px;width:60px;"></td>
                                        <td style="padding:25px;"><a href="package_delete.php?pid=<?php echo $rw[0]?>"><i class="fa fa-trash-alt me-2" style='color:red;padding-left:15px'></i></a></td>
                                        <td style="padding:25px;"><a href="package_update.php?pid=<?php echo $rw[0]?>"><i class="fa fa-edit me-2" style='color:green;padding-left:15px'></i></a></td>
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