<!DOCTYPE html>
<html>
	<head>
		<title>Easy Realty</title>
		<link rel="icon" href="<?php echo base_url('assets/images/logo.png'); ?>" type="image/x-icon">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="<?php echo base_url('assets/w3css/w3.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/rent.css'); ?>" rel="stylesheet" type="text/css" >
<script> 
	<a href="javascript;" id="link">See more</a>
	$('#link').click(function() {
	    $('#myform').submit();
	});
</script>
	</head> 
	<body>
		<div>
			<div class="w3-main w3-content w3-padding" style="max-width:97%;">
				<h2>For Rent</h2>
				<div class="w3-row-padding w3-padding-16 w3-center">
<?php
					$propertyid = 0 ;
					foreach($fetch as $row)
					{
						if($propertyid != $row->propertyid)
						{
							$propertyid = $row->propertyid;
							echo "
							<div class='w3-quarter'>
								<div>
									<div>
										
										<a href='Description/description/". $row->propertyid ."'>
											<img src='".base_url()."assets/images/databaseimages/".$row->imagename."' height='240px' width='240'>
										</a>
									</div>
									<label><span class='label'>Area:&nbsp;<span>".$row->area."</label><br>
									<label><span class='label'>PKR:&nbsp;<span>".$row->price."</label><br>
									<a href='Description/description/". $row->propertyid ."'>Details..</a>
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