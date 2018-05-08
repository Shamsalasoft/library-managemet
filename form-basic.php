<?php
    include_once("header.php");
    include_once("content.php");
     include_once("connection.php");
    if(isset($_POST['submit']))
        {
                $name = $_REQUEST['name'];
                $department = $_REQUEST['dept'];
                $rollno = $_REQUEST['rollno'];
                $date_admision = $_REQUEST['datepicker'];
                $age = $_REQUEST['age'];
                $gender = $_POST['gender'];
                //$gender;
    
                $sql = "INSERT INTO student (name, department, batch,date_of_admission,age,gender) VALUES ('$name', '$department', '$rollno' ,'$date_admision','$age','$gender')";
                //$sql = "insert into student student_book(std_id,book_id) values ('$std-id','$book_id')";
            
            if (mysqli_query($conn, $sql)) 
                {
                    //echo "New record created successfully";
               //     header("Location: student_page.php");

                } 
                else
                {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
        }
        else
        {
            echo "PLEASE FILL THE FORM";
        }

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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-title">
                                <h4>Input Style</h4>

                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " name="name" placeholder="Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <select name="dept" class="form-control input-flat" placeholder="Select department" required="">
                                                      <option value="Compuetr Science">Compuetr Science</option>
                                                      <option value="Electronics">Electronics</option>
                                                      <option value="Software">Software</option>
                                                      <option value="Telecom">Telecom</option>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default" name="rollno" placeholder="Roll Number" required="" >
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="datepicker" name="datepicker" placeholder="Date of Admission"  required="" >
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control input-default" name="age" placeholder="Age" required="" >
                                        </div>
                                        <div class="form-group" >
                                           Select Gender
                                           <input type="radio"  value="Male" name="gender">Male
                                            <input type="radio" value="FeMale" name="gender">FeMale
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="form-control input-default" name="rollno" placeholder="Roll Number" required="" >
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php
                include_once("footer.php");
            ?>