<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']) && isset ($_SESSION['id']))
	{	
		$u=$_SESSION['username'];
		?>
		<!DOCTYPE html>
		<html>
		<head>
		  <title></title>
		  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		</head>
		<body style="background: whitesmoke;">
			
				
				<?php 
				if($_SESSION['role'] == 'admin')
				{
				?>
						<nav class="navbar navbar-expand-sm bg-secondary navbar-dark"><h1 class="card-title text-white"><?=$_SESSION['name']?></h1>
						<div class="card-body">
						<a href="logout.php" class="btn btn-dark" style="float:right;">Logout</a>
						</div>
						</div>
						</nav>
						
						<div class="container d-flex justify-content-center align-items-center"
						style="min-height:80vh; color:black;">
						
						<div class="card" style="width: 18rem; margin:25px;">
						<img src="https://icon-library.com/images/course-icon/course-icon-8.jpg"
						class="card-img-top" alt="admin image">
						<div class="card-body text-center">
						<a href="course.php" class="btn btn-primary">Courses</a>
						</div>
						</div>
						<div class="card" style="width: 18rem; margin:50px;">
						<img src="https://previews.123rf.com/images/martialred/martialred1603/martialred160300054/55005032-teacher-with-stick-in-classroom-with-students-flat-icon-for-education-apps-and-websites.jpg"
						class="card-img-top" alt="admin image">
						<div class="card-body text-center">
						<h5 class="card-title"></h5>
						<a href="students.php" class="btn btn-primary">Students</a>
						</div>
						</div>
						<div class="card" style="width: 18rem; margin:25px;">
						<img src="https://thumbs.dreamstime.com/b/degree-glyph-flat-icon-degree-icon-100514955.jpg"
						class="card-img-top" alt="admin image">
						<div class="card-body text-center">
						<a href="degree.php" class="btn btn-primary">Degrees</a>
						</div>
						</div>
						<br>
<?php						
				}
				else
				{
					header("location:filters.php");
				}
?>
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