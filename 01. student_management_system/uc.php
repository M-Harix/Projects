<?php
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	
	if($conn->connect_error) die($conn->connect_error);
if(isset($_POST['done']))
{
	$i=$_POST['course_id'];
	$name=$_POST['course_name'];
	$ch=$_POST['credit_hours'];
	$q="UPDATE course SET course_id=$i, course_name='$name', credit_hours='$ch' WHERE course_id=$id";
	$query= mysqli_query($conn, $q);
	header('location:course.php');
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<style>
			body{
			margin: 75px 400px;
			}
			</style>
	</head>
	<body style="background: whitesmoke;">
	
	<nav class="navbar navbar-dark bg-primary">
	<h1 style="margin-left:20%; color:white;">Update Your Data</h1>
	</nav> 
<?php	
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	$q="SELECT * FROM course WHERE course_id=$id";
	$query= mysqli_query($conn, $q);
	while($res = mysqli_fetch_array($query))
	{
echo
	"<form class='col-lg6 m-auto' method='post'>
  <div class='mb-4' style='padding-top:20px;'>
    <label class='form-label'>Course code</label>
    <input type='text' class='form-control' name='course_id' value='".$res['course_id']."'>
	</div>
  <div class='mb-4'>
    <label class='form-label'>Course Title</label>
    <input type='text' class='form-control' name='course_name' value='".$res['course_name']."'>
  </div>
  <div class='mb-4'>
    <label class='form-label'>Credit Hours</label>
    <input type='text' class='form-control' name='credit_hours' value='".$res['credit_hours']."'>
  </div>";
	}
	?> 
  <button type="submit" class="btn btn-primary" style="margin-left:44%;" name="done">Submit</button>
</form>
</body>
</html>