<?php
session_start();

// include database connection
include ("functions.php");

if(!isset($_SESSION["username"])) {
    echo "You are not logged in";

}else {
    $id = $_GET["songID"];

    // Connect to the database
    $connection = connect();

    $connection->query("UPDATE wadsongs SET downloads=downloads+1 WHERE ID=$id");
}


