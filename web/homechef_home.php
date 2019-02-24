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

	if($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['clear']))
    {
        clear();
    }
    function clear()
    {
    	$_SESSION["total"] = array();
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
  						array_push($rarray, $row['name']);
					}
			?>
			<form action="homechef_home.php" method="get">
				<select name="add">
					<?php
						foreach ($rarray as $key => $value) {
							echo '<option value = " ' . $key . ' ">' . $value . '</option>';
						}
					?>
				</select>
				<br/>
				<input type="submit" value="ADD">
			</form>
			<form action="homechef_home.php" method="post">
    			<input type="submit" name="clear" value="CLEAR" />
			</form>
			<?php
				print_r($_SESSION["total"]);
				echo '<hr/>';
				
			?>
		</div>
		<div class = "foot";>
		</div>
	</body>
