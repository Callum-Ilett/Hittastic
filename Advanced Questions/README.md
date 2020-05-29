# Advanced Questions – Change Song Details
This question should only be done if you are thoroughly comfortable with
everything you’ve done so far.  

## Question-7
Below is a third form, which allows the administrator to update the details
of an existing song (chart position and price) by ID. (This might be used in case
of errors in the database, e.g. typos)
```html
<html>
  <head>
    <title>Change details of existing song</title>
  </head>
  <body>
    <h1>Change details of an existing song</h1>
    <form method="post" action="changedetails1.php">
      <label for="id">ID of song: </label> <br />
      <input name="id" /><br/>
      <input type="submit" value="Go!" />
    </form>
  </body>
</html>
```

When the administrator enters a song ID, another form should come up (you’ll
write this in Question 8 below), with the fields filled with the details of that
song The administrator can then change one or more fields and then submit
that form.

## Question-8
Write a new script, `changedetails1.php`, to respond to the first form and
auto-generate the second form with the chart position and price fields filled in.
The script should read in the ID from the form, retrieve the details of the song
with that ID from the database, and display (using echo statements) a new
form with fields for chart position and price. Each form field should be filled in
with the current value (retrieved from the database) for that song. The form
should also contain a field for ID, but this should be a hidden field so that the
user cannot change the ID. A hidden field can be done HTML similar to that
below:

 ```html
 <input type='hidden' name='id' value='the song ID' />
 ```
 
The user will then be able to alter the values in the fields and hit Go.
Not sure how to do this? Remember that in PHP you can echo out any HTML
tags. So write down, in your logbook, the HTML for each form field required,
and then work out how to echo out that field from PHP.

## Question-9
You should then write a further script, `changedetails2.php`, which actually
does the update. To update several values at once use the multi-field-update
version of the SQL UPDATE statement:
```sql
UPDATE table SET column1='value1', column2='value2' WHERE column3='value3'
```
