<?php
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
		<link REL="StyleSheet" TYPE="text/css" HREF="style2.css">
		<script>
		</script>
	</head>
	
	<body>
		<div class = "head";>
			<h1>
			   Ingredients
			</h1>
		</div>
		<div class = "topnav";>
			<a href="homechef_recipes.php";>Recipes</a>
			<a href="homechef_ingredients.php";>Ingredients</a>
		</div>
		<div class = "sidebar";>
			<h3>Add new Ingredient</h3>
			<form method="post" action="homechef_insertingredient.php">
				NAME: <input type = "textbox" name = "name">
				<input type = "submit">
			</form>
		</div>
		<div class = "body";>
			<h3>Registered Ingredients</h3><br/><hr/>
			<?php
				foreach ($db->query('SELECT name FROM ingredient') as $row)
				{
  					echo $row['name'];
  					echo '<br/>';
				}
			?>
			<hr/>
			<br/><br/>
			
		</div>
		<div class = "foot";>
		</div>
	</body>
