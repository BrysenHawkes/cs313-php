<html>
	<head>
		<meta charset = "utf-8" />
    		<meta http-equiv = "X-UA-Compatible" content = "IE=edge" />
    		<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
		<title>Homepage</title>
		<link REL="StyleSheet" TYPE="text/css" HREF="style.css">
		<script>
		</script>
	</head>
	
	<body>
		<div class = "head";>
			<h1>
			  ASSIGNMENTS
			</h1>
			<div>
				<a href="doorza.php";>Shopping Cart</a>
			</div>
		</div>
		<div class = "topnav";>
			<a href="homepage.php";>Home</a>
			<a href="assignments.php";>Assignments</a>
			<a href="https://www.igda.org/";>IGDA</a>
		</div>
		<div class = "sidebar";>
			  <?php
			  echo "Today is " . date("l") . "</br>";
			  echo date("d/m/Y");
			  ?>
			</br>
			<h3>Coming Soon</h3>
			
		</div>
		<div class = "body";>
		</div>
		<div class = "foot";>
		</div>
	</body>
</html>