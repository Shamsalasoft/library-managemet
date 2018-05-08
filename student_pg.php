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
                  <center><h1>WELCOME TO STUDENT PANEL</h1></center>
    <table border= 3px>
        <tr><td colspan="5" align="right"><a href="student_form.php">Add Student</a> </td></tr>
            <tr>
                <th>Serial #</th>
                <th>Student ID</th>
                <th>Name</th>
                <th>Batch</th>
                <th>Action</th>
            </tr>
                            <?php
                                include_once('connection.php');
                                $count =1;

                                // $sql =   "SELECT student.`std_id`,student.`name`,student.`batch`,book.`book_name`,book.`author_name`
                                //      FROM book 
                                //      INNER JOIN student ON student.std_id=book.`book_id`";
                                //      $result = $conn->query($sql);

                                $sql =  "SELECT * from student";
                                        $result = $conn->query($sql);
                            ?>
                            <?php
        /* Checking Row Count */
            if ($result->num_rows > 0) {
            ?>
                
            <?php
        // output data of each row
            while($row = $result->fetch_assoc()) {
                ?>
                <tr>
                <td><?php echo $count;?></td>
                <td><?php echo $row["std_id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["batch"];?></td>
                <td><a href="view_std.php?id=<?php echo $row["std_id"]; ?>">View</a> <a href="update_student.php?id=<?php echo $row["std_id"]; ?>">Update</a> <a href="delete_student.php?id=<?php echo $row["std_id"]; ?>">Delete</a></td>
                </tr>
   
<?php
$count++;
    }?>
     </table>
 
    <?php

} else {
    echo "0 results";
}
?>
    </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php
                include_once("footer.php");
            ?>