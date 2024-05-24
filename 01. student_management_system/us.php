<?php
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	
	if($conn->connect_error) die($conn->connect_error);
	if(isset($_POST['done']))
	{
		$i=$_POST['student_id'];
		$name=$_POST['student_name'];
		$d=$_POST['degree'];
		$q="UPDATE student SET student_id=$i, student_name='$name', degree='$d' WHERE student_id=$id";
		$query= mysqli_query($conn, $q);
		header('location:students.php');
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
			body
			{
			margin: 75px 400px;
			padding: 0;
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
	$q="SELECT * FROM student WHERE student_id=$id";
	$query= mysqli_query($conn, $q);
	while($res = mysqli_fetch_array($query))
	{
echo
		"<form class='col-lg6 m-auto' method='post'>
		<div class='mb-4' style='padding-top:20px;'>
		<label class='form-label'>Student ID</label>
		<input type='text' class='form-control' name='student_id' value='".$res['student_id']."'>
		</div>
		
		<div class='mb-4'>
		<label class='form-label'>Student Name</label>
		<input type='text' class='form-control' name='student_name' value='".$res['student_name']."'>
		</div>
		
		<div class='mb-4'>
		<label class='form-label'>Degree</label>
		<td><br><select class='form-select' aria-label='Default select example' style='width:565px; height:40px;' name='degree'>
		<option selected>".$res['degree']."</option>";
		
		$ql="SELECT name FROM degree";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{	
			echo "<option value=".$r['name'].">".$r['name']."</option>";
		}
		echo "</select></div>";
	}
?> 
  <button type="submit" class="btn btn-primary" style="margin-left:44%;" name="done">Submit</button>
</form>
</body>
</html>