<?php
    session_start();

    include('functions.php');
    
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    

    // Try to do the following code. It might generate an exception (error)
    try 
    {
        // Connect to the database
        $connection = connect();

    
        // Send an SQL query to the database server
        $results = $connection->prepare("
        SELECT username, password
        FROM ht_users
        WHERE username=? AND password=?
        ");

        $results->execute([$username, $password]);
        
        $row=$results->fetch();
        if(!$row){
            echo "You dont match records in our database, please try again";
         } else {
            $_SESSION["username"] = $row["username"];
            header("Location: index.php?auth=sucess");
        }

    }
    // Catch any exceptions (errors) thrown from the 'try' block
    catch(PDOException $e) 
    {
        echo "Error: $e";
    }