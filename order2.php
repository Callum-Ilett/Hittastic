<?php
    include('functions.php');
    
    $songID = $_POST["songID"];
    $quantity = $_POST["quantity"];
    
    
    if($quantity <= 0){
        header("Location: order1.php?songID=$songID&error=1&quantitySearched=$quantity");
    }else {
        try {
        // Connect to the database
        $connection = connect();

        $results = $connection->query("SELECT quantity FROM wadsongs WHERE ID='$songID'");
        $row = $results->fetch();
        if($quantity > $row["quantity"]){
            // echo "Cannot order more than what we have in stock";
            header("Location: order1.php?songID=$songID&error=2&quantitySearched=$quantity&quantityTotal=".$row["quantity"]);
        } else {
            $connection->query("UPDATE wadsongs SET quantity = quantity - $quantity WHERE ID='$songID'");
            echo "<p>";
            echo "Quantity left: ". $row["quantity"] ."<br/> ";
            echo "</p>";
        }
        // Send an SQL query to the database server
    }
    // Catch any exceptions (errors) thrown from the 'try' block
    catch(PDOException $e) 
    {
        echo "Error: $e";
    }
    }

    