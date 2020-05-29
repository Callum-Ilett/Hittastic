<?php
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
        <form method="get" action="filter-search.php">
            <fieldset>
                <label for="search-query">Search :</label>
				<input id="search-query" name="query"/>

				<label for="search-filter">Filter by:</label>
				<select name="column" id="search-filter">
					<option value="title">title</option>
					<option value="artist">artist</option>
					<option value="year">year</option>
				</select>

                
                <input type="submit" value="Go!" />
            </fieldset>
        </form>
    </body>
</html>