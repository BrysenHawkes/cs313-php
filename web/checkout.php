<?php

session_start();

?>

<form action="confirm.php" method="post">
	Street: <input name="street" type="text"></br>
	City: <input name="city" type="text"></br>
	State: <input name="state" type="text"></br>
	Zip: <input name="zip" type="text"></br>
	<input name="submit" type="submit">
</form>
<div>
	<a href="cart.php">Cart</a>
</div>