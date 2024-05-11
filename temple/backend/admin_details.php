<?php
include("header.php")
?>
            <div class="container-fluid pt-4 px-0" >
                <h2 class="mb-4 px-3">Admin Details</h2>
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-10">
                        <div class="bg-light rounded h-100 p-4">
                        <div class="container-fluid pt-4 px-4">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">aid</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">image</th>
                                    </tr>
                                </thead>            
                                <?php
                                $email = $_SESSION['email'];            
                                $sql="select * from admin where email='$email'";
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
                                        <td><img class="rounded-circle" src="img/<?php echo $rw[5];?>" alt="image" style="height:40px"></td>
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