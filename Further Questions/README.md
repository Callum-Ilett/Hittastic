<h1 align="center">Further Questions</h1>

## Question-6
You'll probably notice that the PHP signup script writes everything out on one line.
Change the code so it writes out the message on separate lines, like this.

You have signed up with:  
Name: Tim Smith  
Username: ts282  
Date of birth: 2 June 1970  

## Question-7
Add code to your PHP signup script to check that the year is valid. If the year is before
1890 (no-one alive today was born before 1890), write a message telling the user that the
year is invalid.

## Question-8
Apply the CSS stylesheet you wrote last week to your two PHP scripts. You will need to
mix HTML and PHP for this!  

<h3 align="center">Loops, Arrays and Associative Arrays</h3>

## Question-9
Alter your signup form so that it's dynamically created using PHP, using loops and arrays.
(You'll need to rename it from 'signup.html' to 'signup_form.php').
You are going to change the day, month and year fields so that each is a <select> box,
containing appropriate values, rather than a simple input box - and generate each <select>
box dynamically using PHP.
Remember that the syntax of an HTML select box is:
``` html
<select name='day'>
<option>1</option>
<option>2</option>
... etc...
<select>
```
a) Use a for loop within PHP to dynamically create a select box for the day of birth,
containing the numbers 1-31 as its options.  

b) Create an array containing the months of the year, January through to December. Use a
foreach loop to loop through this array and create another select box for the month of 
birth, with an <option> for each month of the year.  

c) Use getdate() (see the lecture notes) and a for loop, to create a select box for the year
of birth. This should contain every year from 1890 to the current year minus 18, so that it
works no matter what the current year is.  

## Question-10
Write a new HitTastic! "about" page, about.php (why .php and not .html? - You are
going to add some PHP to it shortly).  

This about page should contain some information about the HitTastic! company. If you can't
think of anything, use this:
```
HitTastic! was founded in 1998 by Alex Martin in a garden shed in rural Northern California in order to
provide an online search facility for music. It was one of the first sites to use the newly-released PHP
3.0. The site was highly successful and by linking up with record companies, expanded to the search
and download site that you see today. HitTastic! now has its own premises in Silicon Valley, and can be
contacted at:
HitTastic! Inc,
One HitTastic! Way,
Sunnyvale, California.
```
You are going to use a PHP associative array to generate three hyperlinks, to the index
page, the signup form and the about page.
Resave your index page as index.php, and write some PHP code to create an associative
array containing the hyperlink text and URL. The associative array should be as follows:  

|   Key  |      Value      |
|:------:|:---------------:|
| index  | index.php       |
| signup | signup_form.php |
| about  | about.php       |

Use a foreach loop to loop through this associative array and generate the three hyperlinks
on index.php. Use the key for the hyperlink text, and the value for the URL.   

Repeat this code on signup_form.php and about.php, so that each page is linked to each
other.

## Question-11
Preview of functions - preventing code repetition
Obviously it's rather inefficient to repeat this code on three pages. Wouldn't it be better to
write it just once and use it in all three pages?    

You can do this with PHP functions. We will look at these later, but here's a quick
introduction. A function is a reusable block of code which can be called at any point from
your code. In PHP, it's common practice to put your functions in an external include file and 
include them into each script which needs them. Here is an example of a function:  

```phph
function hello()
{
echo "Hello world!";
}
```
To use this function:
- place the function in a separate PHP file, `functions.php`;
- include `functions.php` in each PHP script which needs it with the include() statement, e.g.  
`include("functions.php");`
- call the function at the point in your PHP code where it is needed, e.g.
`hello();`  

Exercise: write the code to generate your hyperlinks in its own function. Save it in an
external PHP file, include it in each of your three pages (index, signup form and about),
and call the function from your PHP code at the point where you want to display the
hyperlinks.  

If you get that done, try writing a second function, writeCSSLink(), to generate your link to
your CSS stylesheet. This function should take a parameter of the CSS filename (ask your
tutor for help on parameters if need be), and write out the
<link rel='stylesheet' ... />
line so that it contains the parameter passed in.
Change each of your PHP scripts so that this function is called to write out your CSS link,
rather than placing the <link> tag directly in your file.
