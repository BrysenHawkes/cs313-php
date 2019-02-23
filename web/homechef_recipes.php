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
		<link REL="StyleSheet" TYPE="text/css" HREF="style.css">
		<script>
		</script>
	</head>
	
	<body>
		<div class = "head";>
			<h1>
			   Recipes
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
			<?php
				foreach ($db->query('SELECT * FROM recipe') as $row)
				{
  					echo 'Name: ' . $row['name'] . '<br/>';

  					$str = $row['ingredient_id'];
  					echo $str;
  					echo 'ingredients: ' . $row['ingredient_id'];
  					echo 'amount: ' . $row['amount'];
  					echo 'Directions: ' . $row['direction'];
  					echo '<br/>';
				}
			?>
		</div>
		<div class = "foot";>
		</div>
	</body>
