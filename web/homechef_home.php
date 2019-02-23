<?php
	session_start();

	if ( !isset($_SESSION["total"]) ) {
   		$_SESSION["total"] = array();
  	}
 

 	if ( isset($_GET["add"]) ) {
   		$i = $_GET["add"];
   		array_push($_SESSION["total"],$i);
 	}

	try
	{
  		$dbUrl = getenv('DATABASE_URL');

  		$dbOpts = parse_url($dbUrl);

  		$dbHost = $dbOpts["host"];
  		$dbPort = $dbOpts["port"];
  		$dbUser = $dbOpts["user"];
  		$dbPassword = $dbOpts["pass"];
  		$dbName = ltrim($dbOpts["path"],'/');

  		$db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $ex)
	{
  		echo 'Error!: ' . $ex->getMessage();
  		die();
	}




?>
	<head>
		<meta charset = "utf-8" />
    		<meta http-equiv = "X-UA-Compatible" content = "IE=edge" />
    		<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
		<title>Home Chef</title>
		<link REL="StyleSheet" TYPE="text/css" HREF="style.css">
		<script>
		</script>
	</head>
	
	<body>
		<div class = "head";>
			<h1>
			  Home Chef
			</h1>
		</div>
		<div class = "topnav";>
			<a href="homechef_home.php";>Home</a>
			<a href="homechef_recipes.php";>Recipes</a>
			<a href="homechef_ingredients.php";>Ingredients</a>
		</div>
		<div class = "sidebar";>
		</div>
		<div class = "body";>
			<h3>Choose Recipe</h3>
			<?php
				$rarray = array();
				foreach ($db->query('SELECT name FROM recipe') as $row)
					{
  						echo $row['name'];
  						echo '<br/>';
  						array_push($rarray, $row['name']);
					}
			?>
			<form>
				<select>
					<?php

					?>
				</select>
			</form>
		</div>
		<div class = "foot";>
		</div>
	</body>
