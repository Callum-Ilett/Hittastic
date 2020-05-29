# Standard Questions
## Question-1  
I have setup music databases on Neptune for all of you. You can view these
by logging into PHPMyAdmin:

http://ephp.solent.ac.uk/phpmyadmin/  
Use your EPHP username and password to login. The table is called
“wadsongs”.

## Question-2
Load Notepad++ and open your searchresults.php from the previous exercise
(Worksheet 3). Add this code to the PHP script to connect to the database:  

```php
$conn = new PDO ("mysql:host=localhost;dbname=ephpXXX;", "Neptunelogin", "Neptune password");
```
Use your Neptune login and password to connect.  

## Question-3
Now add a line of PHP code to your searchresults.php script to do an SQL
query to search for all songs by the user’s chosen artist in the database. See
the example in the lecture notes for how to do this.  

## Question-4
Again using the lecture notes to help you, add a while loop to go through all
the hits returned from the database and echo the song title, artist, year and
genre of each back to the browser.  

## Question-5
Upload your script using FileZilla or EPHP.  

## Question-6
Test it in the simulator in EPHP. Enter the URL of your index, wait for the
form to be sent back, enter an artist (choose a well-known artist as the
database only stores number 1 hits) and watch carefully what happens on the
server. Watch how each line of code is stepped through and try and relate this
to each line of the database results being highlighted in turn.

**INSERT statements**  
Now you are going to write a script which use a different type of query: the
INSERT statement.  

## Question-7
Login to PHPMyAdmin on Neptune (http://ephp.solent.ac.uk/phpmyadmin)
with your Neptune username and password.  

## Question-8
Run Notepad++ and open your signup.php script from last time. Modify it so
that it adds a new record into the ht_users table, containing the details that
the user entered in the form. You will need to:
- Connect to the database (use your username and password)
- Send an INSERT statement to the database to add a new record;
- Display some sort of confirmation message.
When testing, do not use your real date of birth, date of birth of family
members, or anything resembling your real date of birth (e.g. right day,
wrong year) (for security reasons – e.g. identity theft). The databases on
Neptune are not secure from other students.
If you are not sure how to do this, look in the SQL revision lecture notes
for an example of an SQL INSERT statement.
If you do not have a signup.php script from last time, start one from scratch
now.  

Remember to access files uploaded, you go to the URL
http://ephp.solent.ac.uk/~yourusername/filename
Use PHPMyAdmin to test whether it worked (i.e. whether it inserted the user). 
