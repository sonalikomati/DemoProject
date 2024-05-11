<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-0" >
                <h2 class="mb-4 px-3">About Details</h2>
                <div class="row g-4">
                    <div class="col-sm-10 col-xl-10">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-3 px-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th>image</th>
                                        <th>para</th>
                                        <th>p1</th>
                                        <th>p2</th>
                                        <th>p3</th>
                                        <th>p4</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>            
                                <?php
                                $sql="select * from about";
                                $res=mysqli_query($con,$sql);
                                while($rw=mysqli_fetch_row($res))
                                {
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $rw[0]?></td>
                                        <td><img class="rounded-circle" src="img/<?php echo $rw[1];?>" alt="image" style="height:40px"></td>
                                        <td><?php echo $rw[2]?></td>
                                        <td><?php echo $rw[3]?></td>
                                        <td><?php echo $rw[4]?></td>
                                        <td><?php echo $rw[5]?></td>
                                        <td><?php echo $rw[6]?></td>
                                        <td><a href="about_delete.php?aid=<?php echo $rw[0];?>"><i class="fa fa-trash-alt me-2" style='color:red;padding-left:15px'></i></a></td>
                                        <td><a href="about_update.php?aid=<?php echo $rw[0];?>"><i class="fa fa-edit me-2" style='color:green;padding-left:15px'></i></a></td>
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