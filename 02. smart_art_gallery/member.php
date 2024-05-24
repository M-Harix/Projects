<?php
  session_start();
  require_once 'conn.php';
//  if (isset ($_SESSION['username']))
//  {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" >
<style> 
    body {
        color: #000;
        background: #ce979d;
        font-family: "Roboto", sans-serif;
    }
    .container{
    	margin-top: 3%;
    }
    .col-md-8 col-md-offset-2{
       background: white;
    	margin-left: 16.66666667%;
    	margin-top: 10%;
    	margin-bottom: 5%;
    	    
    }
    .contact-form {
        padding: 50px;
        margin: 30px auto;
        border-radius: 5px;
        background: white;
    }
    .h1{
    	font-family: 'Merriweather', serif;
    	text-align: center;
    	color: #d0021b;
    }
    .h2{
    	font-family: 'Merriweather', serif;
    	text-align: center;
    	padding-bottom: 6%;
    	color: #d0021b;
    }
    .p{
    	padding-top: 3%;
    	padding-bottom: 6%;
    	font-weight: 5px;
    	font-size: large;
    }
    .h3{
    	color: #d0021b;
    	padding-top: 5%;
    }
    .h5{
    	color: #a5747a;
    }
    
    .contact-form .form-group {
    	padding-top: 5%;
        margin-bottom: 20px;
    }
    .contact-form .form-control, .contact-form .btn {
        min-height: 38px;
        border-radius: 5px;
    }
	.contact-form .form-control {
		border-color: #d0021b;
	}
	.contact-form .form-control:focus {
		border-color: #d8b012;
		box-shadow: 0 0 8px #dcae10;
	}
    .contact-form .btn-primary {
        min-width: 250px;
        color: white;
        background: #d0021b;
        margin-top: 20px;
        border: none;
        border-radius: 10px;
    }
    .contact-form .btn-primary:hover {
        background: black; 
    }
    .contact-form .btn-primary i {
        margin-right: 5px;
    }
    .contact-form label {
        opacity: 0.9;
        font-size: 16px;
        color: #ae0303;
    }
    .contact-form textarea {
        resize: vertical;
    }
    .bs-example {
    	margin: 20px;
    }

</style>
</head>
<body>
    <?php
    if (isset ($_SESSION['username']))
      {
        if($_SESSION['role'] == 'artist')
        {
          require_once 'headerartist.php';
        }
        else if($_SESSION['role'] == 'artist')
        {
          require_once 'headerartist.php';
        }
        else
        {
          require_once 'headercustomer.php';
        }
      }
    else
    {
      require_once 'header.php';
    }

    ?> 
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2" style="padding-left: 20%; width: 80%;">		
			<div class="contact-form">
				<h1 class="h1">NEW GALLERY MEMBER</h1>
				<h2 class="h2">Application for Acceptance</h2>
				<hr>
				<p class="p"><b>Instructions to Complete Form:</b> Please take your time when completing this form.  The more information you can give us, the better we will know you and your art. In addition, this information will be used to create your portfolio page, if accepted.  We want the buying public to fall in love with you and your art!  So please... more is more!</p>
				<p class="p">Thank you for your interest in Smart Art Gallery!</p>
				<hr>
        		<h3 class="h3">Information About You:</h3>
        		<h4 class="h5">All questions are required</h5>
        		<hr>

				<form action="memberinsert.php" method="post" enctype="multipart/form-data">
					<div class="row">	
						<div class="col-xs-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" name="inputFName" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="inputLName" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>Date</label>
								<input type="date" name="inputDate" class="form-control" required>
							</div>
						</div>
						
						<div class="col-xs-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="inputEmail" class="form-control" required>
							</div>
						</div>
					</div> 
					<div class="form-group">
						<label>Address</label>
						<input type="text" name="inputAddress" class="form-control" required>
					</div>	        
					<div class="row">						
						<div class="col-xs-6">
							<div class="form-group">
								<label>City</label>
								<input type="text" name="inputCity" class="form-control" required>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="form-group">
								<label>State</label>
								<input type="text" name="inputState" class="form-control" required>
							</div>
						</div>
					</div>    
					<div class="form-group">
						<label>Postal / Zip Code</label>
						<input type="text" name="inputPostal" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Phone No.</label>
						<input type="tel" name="inputPhone" class="form-control" placeholder="0300-1234567" pattern="[0-9]{4}-[0-9]{7}">
					</div>
					<div class="form-group">
						<label>Describe Your Art Accomplishments and Your Art Career, to date</label>
						<textarea name="inputDescription" class="form-control" rows="5" required></textarea>
					</div>
					<div class="form-group">
						<label>Please Upload a Picture of You.</label>
						<br><br><input type="file" name="pic" required>
					</div>					
					<div class="text-center">
						<input type="submit" class="btn btn-primary" value="Submit" name="artist-signup"></i> 
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<?php 
/*	}
		else
	{
		header('location:login.php');
	}
*/

?>