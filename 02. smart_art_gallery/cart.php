<?php
	session_start();
	require_once 'conn.php';
	if (isset ($_SESSION['username']))
	{
//$page = $_SERVER['PHP_SELF'];
// $sec = "2";
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
	case "add":
		if(!empty($_POST["quantity"])) {

			$q = "SELECT * FROM arts WHERE id='" . $_GET['id'] . "'";
			$query= mysqli_query($conn, $q);
			while($row=mysqli_fetch_assoc($query)) {
				$resultset[] = $row;
	 		}		 
			if(!empty($resultset))
			$productByCode = $resultset;
		
					

			$itemArray = array($productByCode[0]["id"]=>array('type'=>$productByCode[0]["type"], 'id'=>$productByCode[0]["id"], 'artist'=>$productByCode[0]["artist"], 'medium'=>$productByCode[0]["medium"], 'size'=>$productByCode[0]["size"], 'code'=>$productByCode[0]["code"], 'price'=>$productByCode[0]["price"], 'pic'=>$productByCode[0]["pic"]));

			
			if(!empty($_SESSION["cart_item"])) {
				if(in_array($productByCode[0]["id"],array_keys($_SESSION["cart_item"]))) {
					foreach($_SESSION["cart_item"] as $k => $v) {
							if($productByCode[0]["id"] == $k) {
								//if(empty($_SESSION["cart_item"][$k]["quantity"])) {
								//	$_SESSION["cart_item"][$k]["quantity"] = 0;
								//}
								//$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else {
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			} else {
				$_SESSION["cart_item"] = $itemArray;
			}
		}
	break;
	case "remove":
		if(!empty($_SESSION["cart_item"])) {
			foreach($_SESSION["cart_item"] as $k => $v) {
					if($_GET["id"] == $k)
						unset($_SESSION["cart_item"][$k]);				
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	break;
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>Smart Art Gallery</TITLE>
		<meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
		<link href="stylesheet/cart.css" type="text/css" rel="stylesheet" />
	</HEAD>
	<BODY style="min-height: 0;">
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
		<div id="shopping-cart">
			<div class="txt-heading">Shopping Cart</div>

			<a id="btnEmpty" href="cart.php?action=empty">Empty Cart</a>
			<a id="btnOrder" href="orderform.php?id=	  ">Order Now</a>
			<?php

			if(isset($_SESSION["cart_item"])){
			    $total_quantity = 0;
			    $total_price = 0;
			?>	
			<table class="tbl-cart" cellpadding="10" cellspacing="1">
				<tbody>
					<tr>
						<th width="10%">Art</th>
						<th width="10%">type</th>
						<th width="10%">Artist</th>
						<th width="10%">Medium</th>
						<th width="5%">Szie</th>
						<th width="10%">Code</th>
						<th width="5%">Price</th>
						<th width="5%">Remove</th>
					</tr>	
					<?php		
					    foreach ($_SESSION["cart_item"] as $item){
					        $item_price = $item["price"];
							?>
								<tr style="height: 10em;">
									<td><img src="<?php echo "Images/arts images/".$item["pic"];?>" 
										class="cart-item-image" /></td>
									<td><?php echo $item["type"]; ?></td>
									<td><?php echo $item["artist"]; ?></td>
									<td><?php echo $item["medium"]; ?></td>
									<td><?php echo $item["size"]; ?></td>
									<td style="text-align:right;"><?php echo $item["code"]; ?></td>
									<td  style="text-align:right;"><?php echo $item["price"]." PKR"; ?></td>
									<td style="text-align:center;">
										<a href="cart.php?action=remove&id=<?php echo $item["id"]; ?>" class="btnRemoveAction">
											<img src="icon-delete.png" alt="Remove Item" />
										</a>
									</td>
								</tr>
									<?php
									$total_price += $item["price"];
							}
							?>

					<tr>
					<td colspan="3" align="right"><strong>Total:</strong></td>
					<td align="right" colspan="4"><strong><?php echo $total_price." PKR"; ?></strong></td>
					<td></td>
					</tr>
				</tbody>
			</table>		
			  <?php
			} else {
			?>
			<div class="no-records">Your Cart is Empty</div>
			<?php 
			}
			//header('Location: cart.php');
			?>
		</div>
		<?php
		//	require_once 'footer.php';
		?>
	</BODY>
</HTML>
<?php
}
		else
	{
		header('location:login.php');
	}
?>