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
 
echo ("Cheese Pizza: ");
echo ($_SESSION["qty"][0]);
echo ("Pepperoni Pizza: ");
echo ($_SESSION["qty"][1]);
echo ("Fudge Brownie: ");
echo ($_SESSION["qty"][2]);
echo ("Soda: ");
echo ($_SESSION["qty"][3]);

?>
<div class="product">
	<?php if($_SESSION["qty"][0] != 0){ ?>
			Cheese Pizza: 
			<?php echo ($_SESSION["qty"][0]); ?>
			<a href="?delete=0">Remove From Cart</a>
	<?php } ?>
</div>
<div class="product">
	<?php
		if($_SESSION["qty"][1] != 0){
			echo ("Pepperoni Pizza: ");
			echo ($_SESSION["qty"][1]);
		}
	?>
</div>
<div class="product">
	<?php
		if($_SESSION["qty"][2] != 0){
			echo ("Fudge Brownie: ");
			echo ($_SESSION["qty"][2]);
		}
	?>
</div>
<div class="product">
	<?php
		if($_SESSION["qty"][3] != 0){
			echo ("Soda: ");
			echo ($_SESSION["qty"][3]);
		}
	?>
</div>
<div>
	<a href="doorza.php">Order</a>
</div>