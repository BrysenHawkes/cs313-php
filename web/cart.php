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
	<?php
	echo ("Cheese Pizza: ");
	echo ($_SESSION["qty"][0]);
	echo ("<a href="?delete=0">Add to Cart</a>");
	?>
</div>
<div class="product">
	<?php
	echo ("Pepperoni Pizza: ");
	echo ($_SESSION["qty"][1]);
	echo ("<a href="?delete=1">Add to Cart</a>");
	?>
</div>
<div class="product">
	<?php
	echo ("Fudge Brownie: ");
	echo ($_SESSION["qty"][2]);
	echo ("<a href="?delete=2">Add to Cart</a>");
	?>
</div>
<div class="product">
	<?php
	echo ("Soda: ");
	echo ($_SESSION["qty"][3]);
	echo ("<a href="?delete=3">Add to Cart</a>");
	?>
</div>

<div>
	<a href="doorza.php">Order</a>
</div>