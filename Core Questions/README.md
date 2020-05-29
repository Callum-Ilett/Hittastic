# Core Questions
**Writing the Query String:**

Adding a "download" link to your script
1. Load your searchresults.php script from Worksheets 2 and 3 Within the
“while” loop which displays all the search results, add a hyperlink labelled
“Download” which will link to the download.php script (not yet written),
allowing the user to download that hit. For the moment, it should read
something like:  
```php
echo "<a href='download.php'>Download this hit</a>";
```

2. Add a query string to your link so that it passes across the ID of the
current song to a new script called download.php (which is not yet
written). The query string variable name should be “songID” and the query
string value should be the ID of the current song.

**Writing the download.php script**  
You are now going to actually write the download.php script. Do not worry
about correct use of GET and POST just yet, this is covered in the further
questions, below. For the moment you are just going to use a GET request
to run download.php.

3. The download.php script should actually download the user’s chosen
song. Downloading the song should increase the value of the “downloads”
column in the database by 1.  

The first thing you need to do is read in the information you passed across
from the searchresults.php script. Look at the lecture notes on query strings
to see how to obtain information sent across via a query string. Using this
information, start writing the download script, so that it reads in this
information into a variable called $id.  

Next, increase the number of downloads of the song by one, represented by
the downloads column in the database. You will need an SQL UPDATE
statement for this. Add an appropriate UPDATE statement to your script.  

THE SQL UPDATE should be as below (you need to complete it):
```sql
UPDATE ???? SET downloads=downloads+1 WHERE ????
```

Finally, complete your download script and test it.