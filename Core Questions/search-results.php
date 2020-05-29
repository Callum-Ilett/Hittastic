<html>
    <body>
        <?php
            // include database connection
			include ("functions.php");
			        
            // Read in a course from an HTML form
			$a = $_GET["artist"];
			
			echo "<h1>Search results from $a:</h1>";
            
            // Try to do the following code. It might generate an exception (error)
            try 
            {
                // Connect to the database
                $connection = connect();

            
                // Send an SQL query to the database server
                $results = $connection->query("select * from wadsongs where artist = '$a'");
				$row = $results->fetch();
				if(!$row) {
					echo "<p>No search results found</p>";
				
				} else{
					while($row = $results->fetch()){
						echo "<p>";
						echo "Song Title:". $row["title"] ."<br/> ";
						echo "Artist: " . $row["artist"] ."<br/> ";
						echo "Year Released:". $row["year"] ."<br/> ";
						echo "Day: " . $row["day"] ."<br/> ";
						echo "Month: " . $row["month"] ."<br/> ";
						echo "Year: " . $row["year"] ."<br/> ";
						echo "Chart: " . $row["chart"] ."<br/> ";
						echo "Likes: " . $row["likes"] ."<br/> ";
						echo "Downloads: " . $row["downloads"] ."<br/> ";
						echo "Genre: " . $row["genre"] ."<br/> ";
						echo "Price: " . $row["price"] ."<br/> ";
                        echo "Quantity: " . $row["quantity"] ."<br/> ";
                        echo "<a href='download.php?songID=" . $row["ID"] . "'>Download</a>";
						echo "</p>";   
					}
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