<?php 

session_start();

$products = array("Cheese Pizza","Pepperoni Pizza","Fudge Brownie","Soda");
$amounts = array("4.99","5.99","3.99","1.99");

//Start session
if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
    $_SESSION["qty"][0] = 0;
    $_SESSION["qty"][1] = 0;
    $_SESSION["qty"][2] = 0;
    $_SESSION["qty"][3] = 0;
  }
 }

//Add
if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["qty"][$i] = $qty;
 }

?>
<div class="product">
	<h3>Cheese Pizza</h3>
	<a href="?add=0">Add to Cart</a>
</div>
<div class="product">
	<h3>Pepperoni Pizza</h3>
	<a href="?add=1">Add to Cart</a>
</div>
<div class="product">
	<h3>Fudge Brownie</h3>
	<a href="?add=2">Add to Cart</a>
</div>
<div class="product">
	<h3>Soda</h3>
	<a href="?add=3">Add to Cart</a>
</div>
<div>
	<a href="cart.php">Cart</a>
</div>