<?php

session_start();

?>

<head>
	<title>Checkout</title>
	<link REL="StyleSheet" TYPE="text/css" HREF="style_doorza.css">
</head>
<body>
	<div class="border">
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
	</div>
</body>