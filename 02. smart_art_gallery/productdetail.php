<?php
  session_start();
  require_once 'conn.php';
  if (isset ($_SESSION['username']))
  {
?>
<!DOCTYPE html>
<html lang="en">

	<head>
	    <meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	    <link rel="stylesheet" href="stylesheet/productdetail.css">
	    <script src="jquery/jquery.js"></script>

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
		if(isset($_GET['id']))
		{
			$id	= $_GET['id'];
			$query = "SELECT * FROM	arts WHERE id='$id'";		
			$query_run = mysqli_query($conn , $query); 
			foreach($query_run as $row)
			{
			   echo "<div class='container'>
				        <div class='imgBx'>
				            <img src='Images/arts images/".$row['pic']."'>
				        </div>
				        <div class='details'>
				            <div class='content'>
				                <h2>Artist: ".$row['artist']."<br>
				                    <span>Size: ".$row['size']."</span><br>
				                    <span>Type: ".$row['type']."</span><br>
				                    <span>Code: ".$row['code']."</span><br>
				                </h2>
				                <h3>PKR. ".$row['price']."</h3><br>
				                <form method='post' action='cart.php?action=add&id=".$row['id']."'>
										<a class='button'>
											<input type='hidden' name='quantity' value='1'/>
											<input type='submit' value='Add to Cart' class='btnAddAction' />
										</a>
								</form>
				            </div>
				        </div>
				      </div>";
			}
		}

		
	?>
	<div class="ftr" style="position:inherit;">
		<?php
			require_once 'footer.php';
		?>
		
	</div>

	    



	    <script>
	        // Change The Picture and Associated Element Color when Color Options Are Clicked.
	        $(".product-colors span").click(function() {
	            $(".product-colors span").removeClass("active");
	            $(this).addClass("active");
	            $(".active").css("border-color", $(this).attr("data-color-sec"))
	            $("body").css("background", $(this).attr("data-color-primary"));
	            $(".content h2").css("color", $(this).attr("data-color-sec"));
	            $(".content h3").css("color", $(this).attr("data-color-sec"));
	            $(".container .imgBx").css("background", $(this).attr("data-color-sec"));
	            $(".container .details button").css("background", $(this).attr("data-color-sec"));
	            $(".imgBx img").attr('src', $(this).attr("data-pic"));
	        });
	    </script>
	</body>
</html>
<?php 
	}
		else
	{
		header('location:login.php');
	}
?> 