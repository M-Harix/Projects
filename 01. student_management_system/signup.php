<?php
	session_start();
	require_once 'conn.php';
	$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn->connect_error) die($conn->connect_error);
	if(isset($_POST['done']))
	{
		$us=$_POST['us'];
		$pw= md5 ($_POST['pw']);
		$sid=$_POST['sid'];
		$sn=$_POST['sn'];
		$d=$_POST['d'];
		$qlu="INSERT INTO users VALUES ('NULL', 'student', '$us', '$pw', '$sn')";
		$queryu= mysqli_query($conn, $qlu);		
		
		$qs="INSERT INTO student VALUES ($sid, '$sn', '$d')";
		$queryr= mysqli_query($conn, $qs);
		header('location:filters.php');
	}
	
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
	  rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: whitesmoke;">
	<nav class="navbar navbar-expand-sm bg-success navbar-dark">
	<h1 class="card-title text-white">Create a new account</h1>
	</nav>
		<form method="post">
			<div class="form-group col-md-10">
							
				<div class="form-group col-md-5" style=" margin-left: 4%; padding-top: 10px;">
					<label><h5>Username</h5></label>
					<input type="text" name="us" class="form-control" placeholder="Enter a unique username" required>
				</div>
							
				<div class="form-group col-md-7" style=" margin-left: 4%; padding-top: 10px;">
					<label><h5>Password</h5></label>
					<input type="password" name="pw" class="form-control" placeholder="New password" required>
				</div>
							
				<div class="form-group col-md-4" style=" margin-left: 4%; padding-top: 10px;">
					<label ><h5>Student ID</h5></label>
					<input type="text" name="sid" class="form-control" placeholder="Enter your student id" required>
				</div>
				
				<div class="form-group col-md-7" style=" margin-left: 4%; padding-top: 10px;">
					<label><h5>Student Name</h5></label>
					<input type="text" name="sn" class="form-control" placeholder="Enter your full name" required>
				</div>
				
				<div class='form-group col-md-4' style=" margin-left: 4%; padding-top: 10px;">
					<label class='form-label'><h5>Degree</h5></label>
					<td><br>
					<select  class='form-select' aria-label='Default select example' style='height:40px;' name='d' required>
						<option selected>Select Your Degree</option>";
						<?php
							$ql="SELECT DISTINCT name FROM degree";
							$qry= mysqli_query($conn, $ql);
							while($r = mysqli_fetch_array($qry))
							{	
								echo "<option value='".$r['name']."'>".$r['name']."</option>";
							}
						?>
					</select>
				</div>							
				
				<div class='form-group col-md-4' style='margin-left:4%; padding-top: 30px;  padding-bottom: 30px;'>
					<button type='submit' class='btn btn-primary' style='width:35%;' name='done'>Sign Up</button>
				</div>
			</div>				
		</form>
	</body>
</html>