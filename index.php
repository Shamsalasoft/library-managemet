
<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
  $uname = $_POST['uname'];
  $pword = $_POST['pword'];
  $pwd = md5($pword);
  $sql  = "SELECT * FROM staff where name = '$uname' AND pswd = '$pwd'";

  if ($result=mysqli_query($conn,$sql))
  {
    if(mysqli_num_rows($result) > 0)
    {
      while($row = mysqli_fetch_array($result))
      {
        // echo  "success";
        header("Location: welcome.php");
      }
      
    }
  }
}
  else
{
    echo "not";
}

?>
<html>
  <head>
    <script src="jquery-3.3.1.min.js"></script>
    <script src="login.js"></script>
    <link rel="stylesheet" media="all" href="login.css">
  </head>
    

<body>

  <div class="form">
    <form class="login-form" action="" method="post">
      <input type="text" name="uname" placeholder="username"/>
      <input type="password" name="pword" placeholder="password"/>
      <input type="submit" name="submit">
      <p class="message">Not registered? <a href="register.php">Create an account</a></p>
    </form>
  </div>

  </body>
</html>

