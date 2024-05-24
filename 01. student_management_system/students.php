<?php
	
require_once 'conn.php';
$conn = mysqli_connect($servername, $username, $password, $database);
	if($conn->connect_error) die($conn->connect_error);
if(isset($_POST['done']))
{
	$id=$_POST['student_id'];
	$name=$_POST['student_name'];
	$degree=$_POST['degree'];
	$q="INSERT INTO student VALUES ($id, '$name', '$degree')";
	$query= mysqli_query($conn, $q);
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
				<h1 class="text-light bg-dark text-center">Students</h1>
				<br>
				<a onclick="document.getElementById('id01').style.display='block'" class="btn btn-success" style="float:right; margin-top:-23px; margin-right:164px;">Add New</a><br>
				<a href="logout.php" class="btn btn-dark" style="float:right; margin-top:-47px;">Logout</a>
				<a href="three.php" class="btn btn-secondary" style="float:right; margin-top:-47px; margin-right:85px;">Home</a>
				
				<table class="table table-striped table-hover table-bordered">
					<tr class="text-danger text-center">
						<th>ID</th>
						<th>Name</th>
						<th>Degree</th>
						<th colspan="2"> Actions </th>		
					</tr>
					<?php
						
						require_once 'conn.php';	
						$q="SELECT student_id, student_name, degree FROM student";
						$query= mysqli_query($conn, $q);
						while($res = mysqli_fetch_array($query))
						{
							echo "<tr class='text-center'>";
							echo "<td>".$res['student_id']."</td>";
							echo "<td>".$res['student_name']."</td>";
							echo "<td>".$res['degree']."</td>";
							echo "</td><td><a class='btn-danger btn'
							href='delstd.php?id=". $res['student_id']."' class='text-white'> Delete </a></button> </td>";
							echo "<td><button class='btn-primary btn'><a href='us.php?id=". $res['student_id']."' class='text-white'>Edit</a></button></td></tr>";						
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
	<h5>Add New Student</h5>
    </div>

    <div class="container" style="background-color:#f1f1f1">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

      <label><b>ID</b></label>
      <input type="text" name="student_id" required>

      <label><b>Name</b></label>
      <input type="text" name="student_name" required>
	  
		<label><b>Degree</b></label>
		<br><select class='form-select' aria-label='Default select example' style='width:1045px; height:50px;' name='degree'>
		<option selected>Select Degree</option>";
		
<?php		$ql="SELECT name FROM degree";
		$qry= mysqli_query($conn, $ql);
		while($r = mysqli_fetch_array($qry))
		{	
			echo "<option value=".$r['name'].">".$r['name']."</option>";
		}
?>
		</select>
      <button class="btn btn-success" style="margin-left:45%; width:10%; margin-top:15px;" name="done" type="submit">Add</button>
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