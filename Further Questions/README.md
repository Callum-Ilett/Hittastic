# Further questions


## Question-1
If the user didn’t enter anything in the form, display an error to the user.
Only perform the database search if the user entered something. Hint: test for
a blank field ("")  

## Question-2
Modify your code so that an error ("Sorry, no results" or similar) is shown if
there are no results from the database search. See the example in the lecture
notes to get started with this.  

## Question-3
Add a new way to search for music on your site, one which allows the user to
enter a search term and then to choose (by means of a select box) what to
search on: title, artist or year. Add a new HTML form to your index page as an
entirely separate HTML form (do not remove your old form!) and create an
entirely separate, new PHP script to do the search.
UPDATE statement
You will all get the chance to practice with UPDATE statements next week.
However, if you have completed the core exercises above, you can start to
explore it now.

## Question-4
Create a new file. Copy and paste this code into it. It is an HTML form to
allow the site administrator to update the password of a user. Save it as
updatepass.html.
```html
    <html>
      <head>
        <title>Change password</title>
      </head>
      
      <body>
        <h1>Update a password</h1>
        <form method="post" action="fill this in">
          Username: <br />
          <input name="username" /><br/>
          New password:
          <br />
          <input name="newpassword" type="password" /><br />
          <input type="submit" value="go"/>
        </form>
      </body>
  </html>
```
If you are not sure how to do an UPDATE query, look in the Databases and
SQL lecture notes.

## Question-5
Write a PHP script called updatepass.php which reads in the username
and the new password from the form and updates the password to the value
supplied. It should use an UPDATE query.
Upload to the server using FileZilla and test.

## Question-6
Add error-checking to the update hit script, so that an error message is
displayed if the username is invalid (there is no user with that username in the
database). Hint: use a SELECT statement to search the database for a user with
that username, and then test whether any results were returned. See the
example in the SQL revision notes which tests if any results were returned from
a query.
