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

    $u = $_SESSION["username"];
    $balance = getBalance();

    if($balance - 0.79 >= 0) {
        $connection->query("UPDATE wadsongs SET downloads=downloads+1 WHERE ID=$id");
        $connection->query("UPDATE ht_users SET balance=balance-0.79 WHERE username='$u'");

        echo "Purchase success";
    
    }else {
        echo "You don't have enough balance, your balance is £$balance";
        echo "<br>";
        echo "This Song costs £0.79";
    }
}


