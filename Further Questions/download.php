<?php

// include database connection
include ("functions.php");

$id = $_GET["songID"];

// Connect to the database
$connection = connect();

$connection->query("UPDATE wadsongs SET downloads=downloads+1 WHERE ID=$id");