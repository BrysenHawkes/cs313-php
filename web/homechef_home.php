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
			  Home Chef
			</h1>
		</div>
		<div class = "topnav";>
			<a href="homechef_home.php";>Home</a>
			<a href="homechef_home.php";>Meal Plans</a>
			<a href="homechef_home.php";>Recipes</a>
		</div>
		<div class = "sidebar";>
		</div>
		<div class = "body";>
			<?php
				foreach ($db->query('SELECT name FROM ingredient') as $row)
				{
  					echo 'ingredient name: ' . $row['name'];
  					echo '<br/>';
				}
			?>
		</div>
		<div class = "foot";>
		</div>
	</body>
