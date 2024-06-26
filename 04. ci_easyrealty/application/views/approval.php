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

        <?php 
          $propertyid = 0 ;
          foreach($fetch as $row)
          { 
            if($propertyid != $row->propertyid)
            {
              $propertyid = $row->propertyid;
              echo "
              <div class='w3-quarter'>
                <div class='w3-card w3-round w3-white w3-center'>
                  <div class='w3-container'>
                    
                    <a href='Description/description/". $row->propertyid ."'>
                      <img src='".base_url()."assets/images/databaseimages/".$row->imagename."' height='230vw' width='240vw'>
                    </a>
                  </div>";
                  //<label><span class='label'>Category:&nbsp;<span>".$row->category."</label><br>
                  echo"
                  <label><span class='label'><b>Category:</b>&nbsp;<span>".$row->category."</label><br>
                  <label><span class='label'><b>PKR:</b>&nbsp;<span>".$row->price."</label><br>
                  <label><span class='label'><b>Purpose:</b>&nbsp;<span>".$row->purpose."</label><br>
                  <a href='Description/description/". $row->propertyid ."'><b>More..</b></a>
                  <div class='w3-row '>
                <div class='w3-half'>
                  <a class='w3-button w3-block w3-green w3-section' href='approve/accept/". $row->propertyid ."' title='Accept'>Accept</a>
                </div>
                <div class='w3-half'>
                  <a class='w3-button w3-block w3-red w3-section' href='approve/reject/". $row->propertyid ."' title='Decline'>Decline</a>
                </div>
              </div>
                </div>
              </div>";
            }
          }
?>
      </div>
    </div>
	</body>
</html>