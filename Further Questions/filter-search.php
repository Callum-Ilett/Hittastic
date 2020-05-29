<html>
    <body>
        <?php
            // include database connection
			include ("functions.php");
			        
            // Read in a course from an HTML form
			$query = $_GET["query"];
			$column = $_GET["column"];
			
			echo "<h1>Search results for $query:</h1>";
            
            // Try to do the following code. It might generate an exception (error)
            try 
            {
                // Connect to the database
                $connection = connect();

            
				// Send an SQL query to the database server
				// $sql = "SELECT * FROM wadsongs WHERE ".$column."=" . "'$query'";
				$sql = "SELECT * FROM wadsongs WHERE $column = '$query' "; 
				$results = $connection->query($sql);
					while($row = $results->fetch()){
						echo "<p>";
						echo "Song Title:". $row["song"] ."<br/> ";
						echo "Year Released:". $row["year"] ."<br/> ";
						echo "Title: " . $row["title"] ."<br/> ";
						echo "Artist: " . $row["artist"] ."<br/> ";
						echo "Day: " . $row["day"] ."<br/> ";
						echo "Month: " . $row["month"] ."<br/> ";
						echo "Year: " . $row["year"] ."<br/> ";
						echo "Chart: " . $row["chart"] ."<br/> ";
						echo "Likes: " . $row["likes"] ."<br/> ";
						echo "Downloads: " . $row["downloads"] ."<br/> ";
						echo "Genre: " . $row["genre"] ."<br/> ";
						echo "Price: " . $row["price"] ."<br/> ";
						echo "Quantity: " . $row["quantity"] ."<br/> ";
						echo "</p>";   
					}
			}
            // Catch any exceptions (errors) thrown from the 'try' block
            catch(PDOException $e) 
            {
                echo "Error: $e";
            }
            
        
        ?>
    </body>
</html>