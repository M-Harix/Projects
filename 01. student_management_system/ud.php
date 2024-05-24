<?php
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	
	if($conn->connect_error) die($conn->connect_error);
if(isset($_POST['done']))
{
	$i=$_POST['d_id'];
	$name=$_POST['name'];
	$f=$_POST['fee'];

	$q="UPDATE degree SET d_id=$i, name='$name', fee='$f' WHERE d_id=$id";
	$query= mysqli_query($conn, $q);
	
	
	
	$subject=$_POST['subject'];
	if($subject != Null )
	{
		$q1="DELETE FROM students_courses WHERE d_id=$i";
		$query= mysqli_query($conn, $q1);

		foreach ($subject as $x) 
		{
			$q2="INSERT INTO students_courses VALUES ($i, '$x')";
			$query= mysqli_query($conn, $q2);
		}
	}
	//$c=implode(',',$subject);
	header('location:degree.php');
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

	</head>
	<body style="background: whitesmoke;">
	
	<nav class="navbar navbar-dark bg-primary">
	<h1 style="margin-left:34%; color:white;">Update Degree Detail</h1>
	</nav> 
<?php	
	require_once 'conn.php';
	$id=(int)$_GET['id'];
	$q="SELECT * FROM degree WHERE d_id=$id";
	$query= mysqli_query($conn, $q);
	while($res = mysqli_fetch_array($query))
	{
		echo"<form class='col-lg6 m-auto' method='post'>
	  <div class='mb-4' style='padding-top:20px; margin:0; display:inline-block; width:49%;'>
		<label class='form-label'>Degree ID</label>
		<input type='text' class='form-control' name='d_id' value='".$res['d_id']."'>
		</div>
		
	  <div class='mb-4' style='margin:0; display:inline-block; width:49%;'>
		<label class='form-label'>Degree Name</label>
		<input type='text' class='form-control' name='name' value='".$res['name']."'>
	  </div>
	  
	  <div class='mb-4' style='margin:0; display:inline-block; width:49%;'>
		<label class='form-label'>Fees</label>
		<input type='text' class='form-control' name='fee' value='".$res['fee']."'>
	  </div>
	  
		<div class='mb-4' style='margin:0; display:inline-block; width:49%;'>
		<label class='form-label'>Selected Courses</label>
		<input type='text' class='form-control' name='courses' value='";
		
		$q="SELECT * FROM course, students_courses WHERE students_courses.d_id=$id AND course.course_id=students_courses.course_id";
		$query= mysqli_query($conn, $q);
		while($ress = mysqli_fetch_array($query))
		{
			echo $ress['course_name'].", ";
		}

		echo "'readonly>
		</div>
		
		<div class='mb-4'>
		<label class='form-label'>Available Courses</label><br>
		<div style='border-style:groove;'>";
		$ql="SELECT * FROM course";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{
			echo "<div style='width:25%; margin:0; display:inline-block;'>";
			echo "<input type='checkbox' name='subject[]' style='margin:5px;' value=".$r['course_id'].">".$r['course_name'];
			echo "</div>";
		}
		echo "</div></div>";
	}
	?> 	
  <button type="submit" class="btn btn-primary" style="margin-left:46%;" name="done">Submit</button>
</form>
</body>
</html>