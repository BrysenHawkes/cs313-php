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

	$id_string = "{";
	$amount_string = "{";

	if($ingredient_1 != 0){
		$id_string = $id_string . $ingredient_1;
		$amount_string = $amount_string . $ingredient_1_amount;
	}

	if($ingredient_2 != 0){
		$id_string = $id_string . "," . $ingredient_2;
		$amount_string = $amount_string . "," . $ingredient_2_amount;
	}

	if($ingredient_3 != 0){
		$id_string = $id_string . "," . $ingredient_3;
		$amount_string = $amount_string . "," . $ingredient_3_amount;
	}

	if($ingredient_4 != 0){
		$id_string = $id_string . "," . $ingredient_4;
		$amount_string = $amount_string . "," . $ingredient_4_amount;
	}

	if($ingredient_5 != 0){
		$id_string = $id_string . "," . $ingredient_5;
		$amount_string = $amount_string . "," . $ingredient_5_amount;
	}

	if($ingredient_6 != 0){
		$id_string = $id_string . "," . $ingredient_6;
		$amount_string = $amount_string . "," . $ingredient_6_amount;
	}

	if($ingredient_7 != 0){
		$id_string = $id_string . "," . $ingredient_7;
		$amount_string = $amount_string . "," . $ingredient_7_amount;
	}

	if($ingredient_8 != 0){
		$id_string = $id_string . "," . $ingredient_8;
		$amount_string = $amount_string . "," . $ingredient_8_amount;
	}

	if($ingredient_9 != 0){
		$id_string = $id_string . "," . $ingredient_9;
		$amount_string = $amount_string . "," . $ingredient_9_amount;
	}

	if($ingredient_10 != 0){
		$id_string = $id_string . "," . $ingredient_10;
		$amount_string = $amount_string . "," . $ingredient_10_amount;
	}

	$id_string = $id_string . "}";
	$amount_string = $amount_string . "}";

	echo '<br/>' . $id_string;
	echo '<br/>' . $amount_string;
	echo '<br/>' . $name;
	echo '<br/>' . $directions;

	$stmt = $db->prepare('INSERT INTO recipe(name,ingredient_id,amount,direction) VALUES (:recipe_name, :ingredient_id, :amount, :direction);');
	$stmt->bindValue(':recipe_name', $name, PDO::PARAM_STR);
	$stmt->bindValue(':igredient_id', $id_string, PDO::PARAM_STR);
	$stmt->bindValue(':amount', $amount_string, PDO::PARAM_STR);
	$stmt->bindValue(':direction', $directions, PDO::PARAM_STR);
	//$stmt->bindValue(':ingredient_price', $ingredient_price, PDO::PARAM_);
	$stmt->execute();

	echo '<br/>' . $id_string;
	echo '<br/>' . $amount_string;
	echo '<br/>' . $name;
	echo '<br/>' . $directions;

	$new_page = "homechef_recipes.php";
	header("Location: $new_page");
	die();

	echo '<br/>' . $id_string;
	echo '<br/>' . $amount_string;
	echo '<br/>' . $name;
	echo '<br/>' . $directions;
// name
// ingredient_1 , ingredient_1_amount (1-10)
// directions

?>