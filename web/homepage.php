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
			  HOME PAGE
			</h1>
		</div>
		<div class = "topnav";>
			<a href="#";>Link 1</a>
			<a href="#";>Link 2</a>
			<a href="#";>Link 3</a>
			<a href="#";>Link 4</a>
			<a href="#";>Link 5</a>
		</div>
		<div class = "sidebar";>
			  <?php
			  echo "Today is " . date("l") . "</br>";
			  echo date("d/m/Y");
			  ?>
		</div>
		<div class = "body";>
			<p>
			  This is my webpage for my new web design class
			</p>
			<p>
			  This is my webpage for my new web design class
			</p>
			<p>
			  This is my webpage for my new web design class
			</p>
			<p>
			  This is my webpage for my new web design class
			</p>
		</div>
		<div class = "foot";>
			<p>
			  Contact Us
			</p>
		</div>
	</body>
</html>