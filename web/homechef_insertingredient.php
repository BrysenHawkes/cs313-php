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

	$ingredient_name = htmlspecialchars($_POST['name']);
	$ingredient_price = htmlspecialchars($_POST['price']);

	echo "$ingredient_name\n";
	echo "$ingredient_price\n";

	$stmt = $db->prepare('INSERT INTO ingredient(name,price) VALUES (:ingredient_name, 1.00);');
	$stmt->bindValue(':ingredient_name', $ingredient_name, PDO::PARAM_STR);
	//$stmt->bindValue(':ingredient_price', $ingredient_price, PDO::PARAM_);
	$stmt->execute();

	$new_page = "homechef_ingredients.php";
	header("Location: $new_page");
	die();
?>