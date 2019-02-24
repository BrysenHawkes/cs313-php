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

	$name = htmlspecialchars($_POST['name']);
	
	$ingredient_1 = htmlspecialchars($_POST['ingredient_1']);
	$ingredient_1_amount = htmlspecialchars($_POST['ingredient_1_amount']);

	$ingredient_2 = htmlspecialchars($_POST['ingredient_2']);
	$ingredient_2_amount = htmlspecialchars($_POST['ingredient_2_amount']);

	$ingredient_3 = htmlspecialchars($_POST['ingredient_3']);
	$ingredient_3_amount = htmlspecialchars($_POST['ingredient_3_amount']);

	$ingredient_4 = htmlspecialchars($_POST['ingredient_4']);
	$ingredient_4_amount = htmlspecialchars($_POST['ingredient_4_amount']);

	$ingredient_5 = htmlspecialchars($_POST['ingredient_5']);
	$ingredient_5_amount = htmlspecialchars($_POST['ingredient_5_amount']);

	$ingredient_6 = htmlspecialchars($_POST['ingredient_6']);
	$ingredient_6_amount = htmlspecialchars($_POST['ingredient_6_amount']);

	$ingredient_7 = htmlspecialchars($_POST['ingredient_7']);
	$ingredient_7_amount = htmlspecialchars($_POST['ingredient_7_amount']);

	$ingredient_8 = htmlspecialchars($_POST['ingredient_8']);
	$ingredient_8_amount = htmlspecialchars($_POST['ingredient_8_amount']);

	$ingredient_9 = htmlspecialchars($_POST['ingredient_9']);
	$ingredient_9_amount = htmlspecialchars($_POST['ingredient_9_amount']);

	$ingredient_10 = htmlspecialchars($_POST['ingredient_10']);
	$ingredient_10_amount = htmlspecialchars($_POST['ingredient_10_amount']);

	$directions = htmlspecialchars($_POST['directions']); 

	echo $name;
	echo $ingredient_1 . $ingredient_1_amount;

	$id_string = "'{";
	$amount_string = "'{";

	if($ingredient_1 != 0){
		$id_string = $id_string . $ingredient_1;
	}

	echo '<br/>' . $id_string;

	//$stmt = $db->prepare('INSERT INTO ingredient(name,price) VALUES (:ingredient_name, 1.00);');
	//$stmt->bindValue(':ingredient_name', $ingredient_name, PDO::PARAM_STR);
	//$stmt->bindValue(':ingredient_price', $ingredient_price, PDO::PARAM_);
	//$stmt->execute();

	//$new_page = "homechef_recipes.php";
	//header("Location: $new_page");
	//die();
// name
// ingredient_1 , ingredient_1_amount (1-10)
// directions

?>