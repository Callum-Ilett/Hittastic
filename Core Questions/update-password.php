<?php
include("functions.php");

$username = $_POST["username"];
$newPassword = $_POST["new-password"];

try {
	// Connect to the database
	$connection = connect();
    $results = $connection->prepare("SELECT username FROM ht_users WHERE username=?");
    $results->execute([$username]);
	$row = $results->fetch();

	if(!$row){
		echo "Unable to find username:" . $username;
	
	}else{
        $query = $connection->prepare("UPDATE ht_users SET password=? WHERE username=? ");
        $query->execute([$newPassword, $username]);
		echo "Password successfully changed for: $username";
	}
}

// Catch any exceptions (errors) thrown from the 'try' block
catch(PDOException $e) {
	echo "Error: $e";
}

