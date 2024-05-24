<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="<?php echo base_url('assets/w3css/w3.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/www.w3schools.com/lib/w3-theme-blue-grey.css'); ?>"/>
  		<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css');?>"/>
		<link href="<?php echo base_url('assets/css/dashboard.css'); ?>" rel="stylesheet" type="text/css" >
	</head>
	<body class="w3-theme-l5">
    <div class="box"> 
 
      <div id="mySidenav" class="sidenav">
        <a href="approval">Requests</a>
        <a href="rent">Tolet</a>
        <a href="buy">Selling</a>
        <a href="members">Members</a>
      </div>
      <div class="inner-box">
        <div class="table-responsive-sm">
          <table class="table">
            <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">FirstName</th>
              <th scope="col">LastName</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
<?php 
          $propertyid = 0 ;
          foreach($fetch as $row)
          {
            echo"
            <tr>
              <td>". $row->userid ."</td>
              <td>". $row->firstname ."</td>
              <td>". $row->lastname ."</td>
              <td>". $row->email ."</td>
              <td>". $row->phone ."</td>
            </tr>";
          }
?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
	</body>
</html>