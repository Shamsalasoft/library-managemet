
<?php
include_once('connection.php');
if(isset($_POST['submit']))
{
  $uname = $_POST['uname'];
  $designation = $_POST['designation'];
  $pword = $_POST['pword'];
  $pwd = md5($pword);
  $sql  = "INSERT INTO staff (NAME,designation,pswd) VALUES ('$uname' ,'$designation','$pwd')";

  if(mysqli_query($conn,$sql))
  {
    ?>
      <script type="text/javascript">
        alert("record added")
      </script>
        <?php  /*header('Location: index.php');*/ ?>
    <?php
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
    <!-- <script src="bootstrap.min.css"></script>
    <script src="bootstrap.min.js"></script> -->
    <script src="login.js"></script>
    <link rel="stylesheet" media="all" href="login.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
  </head>
    

<body>

  <div class="form">
    <form class="login-form" action="" method="post">
      <input type="text" name="uname" placeholder="username" required="insert" />
      <div class="form-group">
      <select class="form-control" name="designation">
        <option value="Admin">Admin</option>
        <option value="Manager">Manager</option>
        <option value="Librarian">Librarian</option>
      </select>
    </div>
      <input type="password" name="pword" placeholder="password" required="insert" />
      <input type="submit" name="submit">
      <p class="message">Already Registered? <a href="index.php">SignIn</a></p>
    </form>
  </div>

  </body>
</html>

