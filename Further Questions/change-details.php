<html>
    <body>
        <?php
            // include database connection
			include ("functions.php");
			        
            // Read in a course from an HTML form
			$songID = $_POST["id"];
			
			echo "<h1>Search results from $songID:</h1>";
            
            // Try to do the following code. It might generate an exception (error)
            try 
            {
                // Connect to the database
                $connection = connect();

            
                // Send an SQL query to the database server
                $results = $connection->query("SELECT * FROM wadsongs WHERE ID = '$songID'");
				$row = $results->fetch(PDO::FETCH_ASSOC);
				if(!$row){
					echo "<h1>No results found</h1>";
				}
			}

			// Catch any exceptions (errors) thrown from the 'try' block
            catch(PDOException $e) 
            {
                echo "Error: $e";
            }
		?>

				<form method="post" action="change-details1.php">
					<?php
					foreach ($row as $key => $value) {
						if($key == "ID"){
							echo "<input type='hidden' name='$key' value='$value'>";
						
						}else{
							echo "<label for='$value'>$key</label>";
							echo "<input type='text' name='$key' value='$value'> <br/>";
						}
						
					}
					?>
					<input type="submit" value="Go!" />
				</form>
    </body>
</html>