<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
    if(isset($_SESSION['id']))
  {
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id=$id AND role='admin'";
    $query_run= mysqli_query($conn, $sql);
    foreach($query_run as $row)
    {
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Smart Art Gallery</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="stylesheet/userprofile.css">
    <link rel="stylesheet" href="stylesheet/w3.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <title></title>
  </head>
<body style="background-color: #ecf0f3;">
<?php
    require_once 'headeradmin.php'; 

    
echo " <div class='container body' style='width:70%; height:20%;'>";
    
        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
    {
?>
      <div class="alert alert-success alert-dismissible fade show">
          <?php echo $_SESSION['status'];?>
          <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      </div>
<?php
    unset($_SESSION['status']);
    }


echo "    <form action='update-user.php' method='post' enctype='multipart/form-data'>
     
    <div>
          <img src='Images/logo.png'  class='img-circle'>";
      //  <div class="img-edit"><a href="#"> Edit <i class="fa-solid fa-pen-to-square"></i> </a></div>
        
echo "</div>
        <div class='label'>
          <span>Username</span>
          <div class='inputs'>
            <input type='text' name='username' value='".$row['username']."' required/>
          </div>
        </div>
        <div class='label'>
          <span>Password</span>
           <div class='inputs'>
            <input type='password' name='password' value='".$row['password']."' required/>
          </div>
        </div> ";
    }
  }
?>
        <div  class="inputs" style="margin-top:5%;">
            <button type="submit" name="update-admin" class="button" value="Update">Update</button>
        </div>
  </form>
</div>
</body>
</html>
<?php

  }
  else
  {
    header('location:login.php');
  }

?>