<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-0" >
            <h2 class="mb-4 px-3">Contact Details</h2>
                <div class="row g-4">
                    <div class="col-sm-10 col-xl-10">
                        <div class="bg-light rounded h-100 p-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="padding:20px">id</th>
                                        <th style="padding:20px">Name</th>
                                        <th style="padding:20px">Email</th>
                                        <th style="padding:20px">Subject</th>
                                        <th style="padding:20px">Message</th>
                                        <th style="padding:20px">Delete</th>
                                    </tr>
                                </thead>            
                                <?php
                                $sql="select * from contact";
                                $res=mysqli_query($con,$sql);
                                while($rw=mysqli_fetch_row($res))
                                {
                                ?>
                                <tbody>
                                    <tr>
                                        <td style="padding:20px"><?php echo $rw[0]?></td>
                                        <td style="padding:20px"><?php echo $rw[1]?></td>
                                        <td style="padding:20px"><?php echo $rw[2]?></td>
                                        <td style="padding:20px"><?php echo $rw[3]?></td>
                                        <td style="padding:20px"><?php echo $rw[4]?></td>
                                        <td><a href="contact_delete.php?cid=<?php echo $rw[0]?>"><i class="fa fa-trash-alt me-2" style='color:red;padding-left:30px'></i></a></td>
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