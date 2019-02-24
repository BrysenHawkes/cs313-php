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
			<a href="homechef_recipes.php";>Recipes</a>
			<a href="homechef_ingredients.php";>Ingredients</a>
		</div>
		<div class = "sidebar";>
			<h3>Add New Recipe</h3>
			<form method="post" action="homechef_insertrecipe.php">
				NAME: <input type="textbox" name="name"><br/><br/>
				1st INGREDIENT<br/>
				<select name="ingredient_1">
				<?php
					foreach ($db->query('SELECT name FROM ingredient') as $row)
					{
  						echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
					}
				?>
				</select>
				<select name="ingredient_1_amount">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<br/><br/>
				<input type="submit">
			</form>
		</div>
		<div class = "body";>
			<h3>Registered Recipes:</h3><br/><hr/>
			<?php
				//DISPLAY RECIPE
				foreach ($db->query('SELECT * FROM recipe') as $row)
				{
  					echo $row['name'] . '<br/><br/>';

  					//CONVERT STRING INTO ARRAY
  					$str = $row['ingredient_id'];
  					preg_match_all('!\d+!', $str, $matches);

  					//CONVERT STRING INTO ARRAY
  					$str_amount = $row['amount'];
  					preg_match_all('!\d+!', $str_amount, $amount);

  					//INPUT ARRAY INTO A SQL QUERY
  					$i = 0;
  					foreach ($matches[0] as $value)
  					{
						$stmt = $db->prepare('SELECT name FROM ingredient where id=:id');
						$stmt->bindValue(':id', $value, PDO::PARAM_INT);
						$stmt->execute();
						$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

						//display
						echo $rows[0]['name'] . ' ';
						echo $amount[0][$i] . '<br/>';
  					}

  					echo '<br/><br/>';
  					echo 'Directions: ' . $row['direction'];
  					echo '<br/><hr/>';
				}
			?>
		</div>
		<div class = "foot";>
		</div>
	</body>
