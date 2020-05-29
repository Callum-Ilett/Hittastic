# Further Questions

These questions allow you to use hidden fields and also allow you to rewrite your purchasing system so that you use GET and POST appropriately.

5. This question allows you to practice with hidden form fields. Imagine that
a user can order physical copies of the song (e.g. on vinyl or CD) as well as
download it. A quantity column has been added to the wadsongs table to
indicate the number of physical copies currently in stock.
Make a script called order1.php containing a form which allows the user to
specify how many copies to order. Add a link to order1.php from
searchresults.php. You should pass across the song ID from searchresults.php
to order1.php using a query string, in the same way that you pass across
the ID to download.php.
The order1.php script should read in the ID from the query string and echo
out a form with two fields:
- a quantity field,
- and a hidden form field containing the ID. 
The form should send its information to a new script, order2.php, using a
method of "post" (why?)
c) Write a script called order2.php. It should read in the ID and quantity
from the form in Question 4, and uses it to reduce the quantity in stock of
physical copies of the selected hit by the selected amount.  

6. Alter the order1.php script so that it displays the full details of the hit
that the user has chosen. Use an SQL statement (what type?) to do this.  

7. Using an if statement, add error checking to the order2.php script, so
that the hit is not bought if the quantity available in stock is less than 0,
and instead an error message appears.  

8. Functions (this is an extension of an advanced exercise from session
2): If you have not done so already in earlier sessions, create a CSS layout
containing a sidebar (can be a top bar if you prefer) and main content area.
Then, create a PHP function to write out the sidebar as HTML. This should
take two parameters: the page title (e.g. "Main page", "Signup" etc), and an
associative array of links (to other pages), where the key is the link text and
the value, the page you're linking to. It should then write out a sidebar
```<div>```, using the title and the associative array of links supplied to it.
Using this function, give each HTML and PHP script you've written so far
(including the search results, the download script and the order form and
script) a sidebar with a title and links. Ensure the title is an appropriate
title for that page, and there are links to the search page, the signup page,
and the "about" page (see worksheet 2).