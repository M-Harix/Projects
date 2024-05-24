<?php
	
require_once 'conn.php';
$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn->connect_error) die($conn->connect_error);
	//error_reporting(0);
if(isset($_POST['done']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$fee=$_POST['fee'];
	$q="INSERT INTO degree VALUES ($id, '$name','$fee')";
	$query= mysqli_query($conn, $q);

	$subject=$_POST['subject'];
	if($subject != Null )
	{
		// $q1="DELETE FROM students_courses WHERE d_id=$i";
		// $query= mysqli_query($conn, $q1);

		foreach ($subject as $x) 
		{
			$q2="INSERT INTO students_courses VALUES ($id, '$x')";
			$query= mysqli_query($conn, $q2);
		}
	}
	//$c=implode(',',$subject);
	

	// $q="INSERT INTO students_courses VALUES ($id, '$name','$fee')";
	// $query= mysqli_query($conn, $q);
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
		<div class="container">
			<div class="col-lg12 m-auto">
				<br><br>
				<h1 class="text-light bg-dark text-center">Degrees</h1>
				<br>
				<a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success" style="float:right; margin-top:-23px; margin-right:164px;">Add New</a><br>
				<a href="logout.php" class="btn btn-dark" style="float:right; margin-top:-47px;">Logout</a>
				<a href="three.php" class="btn btn-secondary" style="float:right; margin-top:-47px; margin-right:85px;">Home</a>
				<table class="table table-striped table-hover table-bordered">
					<tr class="text-danger text-center">
						<th>Degree Id</th>
						<th>Degree Name</th>
						<th>Fee</th>
						<th>Courses</th>
						<th colspan="2"> Actions </th>		
					</tr>
					<?php
						
						require_once 'conn.php';	
						$q="SELECT * FROM degree";
						$query= mysqli_query($conn, $q);
						while($res = mysqli_fetch_array($query))
						{
?>
						
							<tr class="text-center">
<?php
							echo "<td>".$res['d_id']."</td>";
							echo "<td>".$res['name']."</td>";
							echo "<td>".$res['fee']."</td>";
							echo "<td>";
							$x = $res['d_id'];
 							$qll="SELECT *
							FROM	course, students_courses
							WHERE	students_courses.course_id=course.course_id 
							AND		students_courses.d_id = '$x'";
							$quryy= mysqli_query($conn, $qll);
							while($c = mysqli_fetch_array($quryy))
							{
								echo $c['course_name']."<br>";
							}
							echo "</td>";
							echo "<td><a class='btn-danger btn'
							href='deld.php?id=". $res['d_id']."' class='text-white'> Delete </a></button> </td>";
							echo "<td><button class='btn-primary btn'><a href='ud.php?id=". $res['d_id']."' class='text-white'>Edit</a></button></td></tr>";
						}
					?>
				</table>
			</div>
		</div>
	</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post">
    <div class="imgcontainer">
	<h5>Add New Degree</h5>
    </div>

    <div class="container" style="background-color:#f1f1f1">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <label><b>Degree Id</b></label>
      <input type="text" name="id" required>

      <label><b>Degree Name</b></label>
      <input type="text" name="name" required>
	  
	  <label><b>Fee</b></label>
      <input type="text" name="fee" required>
	  
	  <?php
		echo "<div class='mb-4'>
		<label class='form-label'>Available Courses</label>
		<br><div style='border-style:groove;'>";
		$ql="SELECT * FROM course";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{
			echo "<div style='width:25%; margin:0; display:inline-block;'>";
			echo "<input type='checkbox' name='subject[]' style='margin:5px;' value=".$r['course_id'].">".$r['course_name'];
			echo "</div>";
		}
		echo "</div></div><span style='color:red;'>You need to check at least one Course.</span>";
	  ?>
        
      <button class="btn btn-success" style="margin-left:17%; width:10%;" name="done" type="submit">Add</button>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>