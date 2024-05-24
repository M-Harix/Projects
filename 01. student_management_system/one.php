<?php
	session_start();
	if (!isset ($_SESSION['username']) && !isset ($_SESSION['id']))
	{	
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: whitesmoke;">
	<div class="container d-flex justify-content-center align-items-center"
	style="min-height: 100vh">
		
	<form  method="post" action="two.php" class="border shadow p-3 rounded" style="width: 450px">
		
		<br><br><div class="card">
		<div class="card-header bg-dark">
		<h4 class="text-white text-center">Log in to System</h4>
		</div><br>
<?php
		if (isset($_GET['error']))
		{
?>
		<div class="alert alert-danger" role="alert">
		<?=$_GET['error']?>
		</div>
<?php
		}
?>
		<label> Username:</label>
		<input type="text" name="username" class="form-control"><br>
		
		<label> Password:</label>
		<input type="password" name="password" class="form-control"><br>
		
		<button class="btn btn-primary" type="submit">Login</button><br>
		<a href="signup.php" style="margin-left:155px; text-decoration: none;">Sign up here!</a>
		
		</div>
		
		</form>
	
	</div>
	
</body>
</html>
<?php
	}
	else
	{
		header("location:index.php"); 
	}
?>