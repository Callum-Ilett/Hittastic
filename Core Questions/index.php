<?php
    session_start();
	include("functions.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <title>HitTastic!</title>
    </head>
    <body>
		<?php
            generateLinks();
            echo "<br>";
            if(isset($_SESSION["username"])){
                echo "Logged in as: " . $_SESSION["username"];
            
            }else {
                echo "You are not logged in:" . "<br>";
                echo "<a href='login.html'>Login</a>";
            }
            
		?>

        <h1>HitTastic!</h1>
        <p>Search and download your favorite 40 hits on
        HitTastic! Whether it's pop, rock, rap, or pure liquid
        cheese you're into, you can be sure to find it on
        HitTastic! With the full range of top 40 hits from the
        past 60 years on our database, you can guarantee you'll
        find what you're looking for. Plus with our Year Search
        (coming soon!) find out exactly what was in the chart in
        any year in the past 60 years. </p>
        <form method="get" action="search-results.php">
            <fieldset>
                <label>Please enter an artist:</label>
                <input name="artist" />
                <input type="submit" value="Go!" />
            </fieldset>
        </form>
    </body>
</html>