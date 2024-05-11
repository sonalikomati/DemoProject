<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-4" >
                <div class="row g-4">
                    <div class="col-sm-10 col-xl-10">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-3 px-4">
                            <div class="m-n2" style="padding-bottom:10px;padding-left:650px">
                            </div>
                            <h6 class="mb-4">About</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Destination</th>
                                        <th>Adult</th>
                                        <th>Child</th>
                                        <th>flight</th>
                                        <th>train</th>
                                        <th>bus</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>            
                                <?php
                                $sql="select * from booking";
                                $res=mysqli_query($con,$sql);
                                while($rw=mysqli_fetch_row($res))
                                {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rw[0]?></td>
                                        <td><?php echo $rw[1]?></td>
                                        <td><?php echo $rw[2]?></td>
                                        <td><?php echo $rw[3]?></td>
                                        <td><?php echo $rw[4]?></td>
                                        <td><?php echo $rw[5]?></td>
                                        <td><?php echo $rw[6]?></td>
                                        <td><?php echo $rw[7]?></td>
                                        <td><?php echo $rw[8]?></td>
                                        <td><a href="about_delete.php"><i class="fa fa-trash-alt me-2" style='color:red;padding-left:15px'></i></a></td>
                                        <td><a href="about_update.php"><i class="fa fa-edit me-2" style='color:green;padding-left:15px'></i></a></td>
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