<?php

session_start();

?>

<head>
	<title>Confirmation</title>
	<link REL="StyleSheet" TYPE="text/css" HREF="style_doorza.css">
</head>
<body>
	<div class="border">
		<h3>You Have Ordered:</h3>
		<div class="product">
			<?php if($_SESSION["qty"][0] != 0){ ?>
					Cheese Pizza: 
					<?php echo ($_SESSION["qty"][0]); ?>
			<?php } ?>
		</div>
		<div class="product">
			<?php if($_SESSION["qty"][1] != 0){ ?>
					Pepperoni Pizza: 
					<?php echo ($_SESSION["qty"][1]); ?>
			<?php } ?>
		</div>
		<div class="product">
			<?php if($_SESSION["qty"][2] != 0){ ?>
					Fudge Brownie: 
					<?php echo ($_SESSION["qty"][2]); ?>
			<?php } ?>
		</div>
		<div class="product">
			<?php if($_SESSION["qty"][3] != 0){ ?>
					Soda: 
					<?php echo ($_SESSION["qty"][3]); ?>
			<?php } ?>
		</div>
		<p>
			This will be sent to the following address within the next 30 min 
		</p>

		<?php echo htmlspecialchars($_POST["street"]);?></br>
		<?php echo $_POST["city"];?>, <?php echo $_POST["state"];?> <?php echo $_POST["zip"];?>

		<p>
			Thank You.
		</p>
	</div>
</body>