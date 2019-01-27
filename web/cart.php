<?php

session_start();

//Delete
if ( isset($_GET["delete"]) )
   {
   $i = $_GET["delete"];
   $qty = $_SESSION["qty"][$i];
   $qty--;
   if($qty < 0){
   	$qty = 0;
   }
   $_SESSION["qty"][$i] = $qty;
  }

?>

<head>
	<title>Cart</title>
	<link REL="StyleSheet" TYPE="text/css" HREF="style_doorza.css">
</head>
<body>
	<div class="border">
		<h3>CART</h3>
		<div class="product">
			<?php if($_SESSION["qty"][0] != 0){ ?>
					Cheese Pizza: 
					<?php echo ($_SESSION["qty"][0]); ?>
					<a href="?delete=0">Remove From Cart</a>
			<?php } ?>
		</div>
		<div class="product">
			<?php if($_SESSION["qty"][1] != 0){ ?>
					Pepperoni Pizza: 
					<?php echo ($_SESSION["qty"][1]); ?>
					<a href="?delete=1">Remove From Cart</a>
			<?php } ?>
		</div>
		<div class="product">
			<?php if($_SESSION["qty"][2] != 0){ ?>
					Fudge Brownie: 
					<?php echo ($_SESSION["qty"][2]); ?>
					<a href="?delete=2">Remove From Cart</a>
			<?php } ?>
		</div>
		<div class="product">
			<?php if($_SESSION["qty"][3] != 0){ ?>
					Soda: 
					<?php echo ($_SESSION["qty"][3]); ?>
					<a href="?delete=3">Remove From Cart</a>
			<?php } ?>
		</div>
		<div>
			<a href="doorza.php">Order More</a>
		</div>
		<div>
			<a href="checkout.php">Check Out</a>
		</div>
	</div>
</body>