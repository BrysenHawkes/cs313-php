<?php

session_start();

if(empty($_SESSION['cart'])) {
	$_SESSION['cart'] = array();
}

array_push($_SESSION['cart'], $_GET['id']);

?>

<p>
	Product was successfully added to your cart.
	<a href="cart.php">View Shopping Cart</a>
</p>