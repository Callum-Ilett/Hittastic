<?php
include("functions.php");
$songID = $_POST['ID'];

$query = "UPDATE wadsongs SET";
$comma = " ";
foreach($_POST as $key => $val) {
    if( ! empty($val)) {
        $query .= $comma . $key . " = '" . $val . "'";
        $comma = ", ";
    }
}

$query = $query . "WHERE ID = $songID";

try {
	// Connect to the database
	$connection = connect();

	$update = $connection->query($query);	
	$count = $update->rowCount();
	print("Updated $count row");
} catch(PDOException $e){
	echo "Error: $e";
}