<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/w3css/w3.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/buy.css'); ?>" rel="stylesheet" type="text/css" >
	</head>
	<body> 
		<div>
			<div class="w3-main w3-content w3-padding" style="max-width:97%;">
				<div class="w3-row-padding w3-padding-16 w3-center">
<?php 
		        $propertyid = 0 ;
		          foreach($fetch as $row)
		          { 
		            if($propertyid != $row->propertyid)
		            {
		              $propertyid = $row->propertyid;
		              echo "
		              <div class='w3-quarter' style='margin: 4%;'>
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
		                <div class='delete'>
		                  <a class='w3-button w3-block w3-red w3-section' href='approve/reject/". $row->propertyid ."' title='Delete'>Delete</a>
		                </div>
		              </div>
		                </div>
		              </div>";
		            }
		          }
?>
				</div>
			</div>
		</div>
	</body>
</html>