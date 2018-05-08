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
                    <!-- column -->
                   

                  
                  
    <body>
        <div class="container">
            <div class="row"> 
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    <form method="post" action="">
                        <table border="3px" bgcolor="grey">
                            <tr><center>WELCOME TO STUDENT REGISTRATION</center></tr>
                            <tr>
                                <td>Name</td><td><input type="text" name="name"></td>
                            </tr>
                            <tr>
                                <td>Select department</td><td> <select name="dept" >
                                      <option value="Compuetr Science">Compuetr Science</option>
                                      <option value="Electronics">Electronics</option>
                                      <option value="Software">Software</option>
                                      <option value="Telecom">Telecom</option>
                                    </select> 
                                </td>
                            </tr>
                            <tr>
                                <td>Roll Number</td><td><input type="text" name="rollno"></td>
                            </tr>
                            <tr>
                                <td>Date of Admission</td><td><input type="text" class="datepicker" name="datepicker"></td>
                            </tr>
                            <tr>
                                <td>Age</td><td><input type="number" name="age"></td>
                            </tr>
                            <tr>
                                <td>Choose Gender</td><td><input type="radio" value="Male" name="gender">Male
                                <input type="radio" value="FeMale" name="gender">FeMale</td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-sm-4">
                    
                </div>
            </div>
        </div>
    </body>


                </div>

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <?php
                include_once("footer.php");
            ?>