<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
    if(isset($_SESSION['id']) && isset($_SESSION['role'])=='artist')
    {
		  
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylesheet/artistprofile.css">

    <link rel="stylesheet" href="stylesheet/w3.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
	<title></title>
</head>
<body>
	<?php
    require_once 'headerartist.php'; 

	echo " <div class='container body'>";
    


    	$id = $_SESSION['id'];
      $sql = "SELECT * FROM artists WHERE userid=$id ";
	    $query_run= mysqli_query($conn, $sql);
	    foreach($query_run as $row)
	    {

echo "<form action='update-user.php' method='post' enctype='multipart/form-data'>
     
		    <div>
		      <img src='Images/logo.png'  class='img-circle'>
		     </div>
		        <div class='label'>
		          <span>First Name</span>
		          <div class='inputs'>
		            <input type='text' name='firstname' value='".$row['firstname']."' >
		          </div>
		        </div>
		        <div class='label'>
		          <span>Last Name</span>
		           <div class='inputs'>
		            <input type='text' name='lastname' value='".$row['lastname']."' />
		          </div>
		        </div>";
		      $sql1 = "SELECT * FROM users WHERE id=$id ";
			    $query_run1= mysqli_query($conn, $sql1);
			    foreach($query_run1 as $res)
			    {

	echo"    <div class='label'>
		          <span>Username</span>
		          <div class='inputs'>
		            <input type='text' name='username' value='".$res['username']."' />
		          </div>
		        </div>
		        <div class='label'>
		          <span>Password</span>
		           <div class='inputs'>
		            <input type='password' name='password' value='".$res['password']."' />
		          </div>
		        </div>";
		      }

echo "      <div class='label'>
		          <span>Email</span>
		           <div class='inputs'>
		            <input type='email' name='email' value='".$row['email']."' />
		          </div>
		        </div>
		        <div class='label'>
					  <span>Date of Birth</span>
					   <div class='inputs'>
					    <input type='date' name='dob' value='".$row['dob']."' />
					  </div>
					</div>
		        <span class='span'>Address</span>
		         <div class='inputs full'>
					    	<input type='text' name='address' value='".$row['address']."' />
					   </div>

					   <div class='label'>
					  <span>City</span>
					   <div class='inputs'>
					    <input type='text' name='city' value='".$row['city']."' />
					  </div>
					</div>
					<div class='label'>
					  <span>State</span>
					   <div class='inputs'>
					    <input type='text' name='state' value='".$row['state']."' />
					  </div>
					</div>

		      <div class='label'>
					  <span>Postal / Zip Code</span>
					   <div class='inputs'>
					    <input type='text' name='postal' value='".$row['postalcode']."' />
					  </div>
					</div>  
		      <div class='label'>
		        <span>Phone</span>
		         <div class='inputs'>
		          <input type='tel' name='phone' value='".$row['phone']."' />
		        </div>
		      </div> 
		      <span class='span'>Describe Your Art Accomplishments and Your Art Career, to date</span>
					<div class='inputs full des'>    	
				  	<input type='text' name='description' rows='6' value='".$row['description']."' >
					</div> 
				</div>";
    }
  
?>
        <div  class="inputs" style="margin-top:5%;">
            <button type="submit" name="update-artist" class="button" value="Update">Update</button>
        </div>
  </form>
</div>
</body>
</html>
<?php 
			}
    }
  else
  {
    header('location:login.php');
  }
?>