<?php
include("functions.php");

$username = $_POST["username"];
$newPassword = $_POST["new-password"];

try {
	// Connect to the database
	$connection = connect();
	$results = $connection->query("SELECT username FROM ht_users WHERE username='$username'");
	$row = $results->fetch();

	if(!$row){
		echo "Unable to find username:" . $username;
	
	}else{
		$connection->query("UPDATE ht_users SET password='$newPassword' WHERE username='$username' ");
		echo "Password successfully changed for: $username";
	}
}

// Catch any exceptions (errors) thrown from the 'try' block
catch(PDOException $e) {
	echo "Error: $e";
}

