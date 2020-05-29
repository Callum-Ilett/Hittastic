<?php
	include ('functions.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$DOB = "";

	echo "You are signing  up with: <br/>";

	echo "Name: $name <br/>";
	echo "Username: $userName <br/>";

	if ($year < 1890) {
		$DOB = "N/A";
		$error = "No one is alive before 1890";
	} else {
		$DOB = "$day $month $year";
	}

	echo "Date of birth: $DOB <br/>";
	echo $error;

	try {
		// Connect to the database
		$connection = connect();

		$insert = $connection->query("
			INSERT INTO ht_users(username, password, name, dayofbirth, monthofbirth, yearofbirth)
			VALUES ('$username', '$password', '$name', '$day', '$month', '$year')
		");

		if($insert){
			echo "Succesfully added to database";
		}
	}
	
	// Catch any exceptions (errors) thrown from the 'try' block
	catch(PDOException $e) {
		echo "Error: $e";
	}