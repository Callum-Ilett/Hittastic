<?php
	include ("functions.php");
    $empty_fields = false;
    
    if (!isset($_POST["username"])) {
        echo "Please access this page through the form.";
   
	} else {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["name"];
		$day = $_POST["day"];
		$month = $_POST["month"];
		$year = $_POST["year"];

		foreach($_POST as $key => $value){
			if($value == ""){
				$empty_fields = true;
			}
		}
    
    }
    
        if(!$empty_fields){
            try 
            {
                // Connect to the database
                $connection = connect();

                $insert = $connection->query("
                    INSERT INTO ht_users(username, password, name, dayofbirth, monthofbirth, yearofbirth)
                    VALUES ('$username', '$password', '$name', '$day', '$month', '$year')
				");

				if(insert){
					echo "Succesfully added to database";
				}
            }
            
            // Catch any exceptions (errors) thrown from the 'try' block
            catch(PDOException $e) 
            {
                echo "Error: $e";
            }
        
        } else {
			header("Location: signup_form.php?fields=empty");
        }
    
?>