<?php
    include_once("header.php");
    include_once("content.php");
    include_once("connection.php");
?>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Export</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <tr><td colspan="5" align="right"><a href="student_form.php">Add Student</a> </td></tr>
                                                <tr>
                                                    <th>Serial #</th>
                                                    <th>Student ID</th>
                                                    <th>Name</th>
                                                    <th>Batch</th>
                                                    <th>Action</th>
                                                </tr>
                                                    <?php
                                                        $count =1;
                                                        $sql =  "SELECT * from student";
                                                        $result = $conn->query($sql);
                                                    ?>
                                                    <?php
                                                    if ($result->num_rows > 0) {
                                                    ?>
                
                                                    <?php
        // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                    ?>
                                            </tr>
                                        </thead>
                                        
                                            <tr>
                                                <td><?php echo $count;?></td>
                                                <td><?php echo $row["std_id"];?></td>
                                                <td><?php echo $row["name"];?></td>
                                                <td><?php echo $row["batch"];?></td>
                                                <td><a href="view_std.php?id=<?php echo $row["std_id"]; ?>">View</a> <a href="update_student.php?id=<?php echo $row["std_id"]; ?>">Update</a> <a href="delete_student.php?id=<?php echo $row["std_id"]; ?>">Delete</a></td>
                                            </tr>
                                                <?php
                                                    $count++;
                                                }
                                                ?>
                                        
                                    </table>
                                    <?php
                                        } else {
                                    echo "0 results";
                                                }
                                    ?>
                                </div>
                            </div>
                        </div>
                        
                 
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php
                include_once("footer.php");
            ?>