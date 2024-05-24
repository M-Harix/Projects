<?php
	session_start();
	require_once 'conn.php';
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body style="background: whitesmoke;">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<h3 class="card-title text-white">All the students and their degree</h3>
<div class="card-body">
<a href="logout.php" class="btn btn-danger" style="float:right;">Logout</a>
</div>
</nav>
		<form method="post">
		<div class='row' style="width:30%; display: inline-block; margin-left: 1.5%; padding-top: 10px;">
		<label class='form-label'><h5>Degree</h5></label>
		<td><br><select class='form-select' aria-label='Default select example' style='height:40px;' name='d'>
		<option selected>Select</option>";
		<?php
		$ql="SELECT DISTINCT degree.name FROM student, degree WHERE student.degree=degree.name";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{	
			echo "<option value=".$r['name'].">".$r['name']."</option>";
		}
		?>
		</select></div>
		
		<div class='row' style="width:30%; display: inline-block; margin-left: 4%; padding-top: 10px;">
		<label class='form-label'><h5>Fee</h5></label>
		<td><br><select  class='form-select' aria-label='Default select example' style='height:40px;' name='f'>
		<option selected>Select</option>";
		<?php
		$ql="SELECT DISTINCT degree.fee FROM student, degree WHERE student.degree=degree.name";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{	
			echo "<option value=".$r['fee'].">".$r['fee']."</option>";
		}
		?>
		</select></div>
		
		<div class='row' style="width:30%; display: inline-block; margin-left: 4%; padding-top: 10px;">
		<label class='form-label'><h5>Course</h5></label>
		<td><br><select class='form-select' aria-label='Default select example' style='height:40px;' name='c'>
		<option selected>Select</option>";
		<?php
		$ql="SELECT DISTINCT course_id, course_name FROM course";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{	
			echo "<option value=".$r['course_id'].">".$r['course_name']."</option>";
		}
		?>
		</select></div>
		
		<div class='row' style="width:7%; margin-left: 46.5%; display: inline-block; padding-bottom: 30px;">
			<button type="submit" class="btn btn-primary" name="done">Submit</button>
		</div>
		<div class='row' style="width:7%; margin-left: 38.5%; display: inline-block; padding-top: 20px;">
			<a href="filters.php" class="btn btn-primary" style="float:right;">Refresh</a>
		</div>
		</form>
		
		<div class="row">
			<table class="table table-bordered border-primary" style="margin-left:11px;">
				<thead>
					<tr>
						<td><h5>ID</h5></td>
						<td><h5>Name</h5></td>
						<td><h5>Degree</h5></td>
						<td><h5>Fee</h5></td>
						<td><h5>Courses</h5></td>
					</tr>
				</thead>
				<tbody>
				<?php
					if(isset($_POST['done']))
					{
						$d=$_POST['d'];
						$f=$_POST['f'];
						$c=$_POST['c'];
						if($d != "" || $f != "" || $c != "")
						{
							$q = "SELECT student.student_id, student.student_name, student.degree,
							degree.name AS degree_name, degree.d_id, degree.fee,
							GROUP_CONCAT(course.course_name) AS enrolled_courses
							FROM student
							INNER JOIN degree ON student.degree = degree.name
							INNER JOIN students_courses ON degree.d_id = students_courses.d_id
							INNER JOIN course ON students_courses.course_id = course.course_id
							WHERE (student.degree = '$d' OR degree.fee = '$f' OR course.course_id = '$c')
							GROUP BY student.student_id, student.student_name, student.degree,
							degree.name, degree.fee;
					 		";
							$query= mysqli_query($conn, $q);
							while($res = mysqli_fetch_array($query))
							{
								echo "<tr>";
								echo "<td>".$res['student_id']."</td>";
								echo "<td>".$res['student_name']."</td>";
								echo "<td>".$res['degree']."</td>";
								echo "<td>".$res['fee']."</td>";
								echo "<td>";
								$rx = $res['d_id'];
								$qll="SELECT *
								FROM	course, students_courses
								WHERE	students_courses.course_id = course.course_id 
								AND		students_courses.d_id = '$rx'	
								";
								$quryy= mysqli_query($conn, $qll);
								while($cs = mysqli_fetch_array($quryy))
								{
									echo $cs['course_name'].", ";
								}
								echo "</td>";
								// echo "<td>".$res['enrolled_courses']."</td>";
								echo "</tr>";
							}
						}
					}
					else
					{
						$ql="SELECT DISTINCT student.student_id, student.degree, student.student_name, degree.name, degree.fee, degree.d_id
							FROM 	student, degree
							WHERE  student.degree=degree.name 
							";
						$qury= mysqli_query($conn, $ql);
						while($r = mysqli_fetch_array($qury))
						{
							echo "<tr>";
							echo "<td>".$r['student_id']."</td>";
							echo "<td>".$r['student_name']."</td>";
							echo "<td>".$r['degree']."</td>";
							echo "<td>".$r['fee']."</td>";
							echo "<td>";
							$x = $r['d_id'];
 							$qll="SELECT *
							FROM	course, students_courses
							WHERE	students_courses.course_id=course.course_id 
							AND		students_courses.d_id = '$x'";
							$quryy= mysqli_query($conn, $qll);
							while($c = mysqli_fetch_array($quryy))
							{
								echo $c['course_name'].", ";
							}
							echo "</td>";
						}
						echo "</tr>";
					}
				?>		
				</tbody>
			</table>
		</div>
	</body>	
</html>