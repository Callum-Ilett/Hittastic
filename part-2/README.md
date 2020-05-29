# Exploring Web Communication In More Detail

We will be using a simple visualisation environment - EPHP - for basic PHP
web development, which has been developed by the unit leader of DFTI.
EPHP has been installed on Neptune, and is available at:  
http://ephp.solent.ac.uk/

## Question 1
a) Login to EPHP (http://ephp.solent.ac.uk) using your ephpXXX login, the
same one you used on FileZilla to transfer files to the server.
Enter the address of your index page on the Neptune server within EPHP,
not in a separate browser tab. To do this, go to the “Simulation” tab on the
client side (left hand side) of EPHP and enter:
http://ephp.solent.ac.uk/~ephpXXX/index.html
(where ephpXXX is your Neptune username). Click “Go”

b) Watch the animation until you see the page you asked for in the “client”
window of EPHP.
At this point, your lecturer will explain what happens in between the user
entering a URL in the web browser and the web page coming back as a
response.

## Question 2
a) Download the HitTastic! logo PNG image from the URL
http://ephp.solent.ac.uk/~ephp001/hittastic.png
and save it to your U: drive. Use FileZilla to transfer it to your space on
Neptune.

b) Type in the URL of your index page (not the image) once again in EPHP.
Stop the HTTP request half way across by pressing the "Stop" button and edit
it directly to request the PNG image instead.
Restart the request and allow the response to come back to the client side.
What appears and why?

## Question 3
Roll the mouse over the “HTTP response” box and examine the structure
of the HTTP response. At this point, we will discuss the structure of the
HTTP response in detail.

Write down two ways in which the HTTP response for the image differs
from that returned when your requested an HTML page. One should be
from the header, and one from the content.
i) Change in header:
ii) Change in content:

## Question 4
Using what you saw in the previous exercises (questions 2 and 3), how do
you think that your web browser knows how to display a web page sent
back from the website as a web page, and an image sent back from the
website as an image?

i) By the file extension, e.g. .html means a web page, and .jpg means a
JPEG image.

ii) By examining the HTTP response for the presence of tags such as
`<html>` and `<body>`. If tags are there, the browser displays it as an HTML
page. If not, it's treated as an image.

iii) By examining the content-type: line of the HTTP header.


## Question 5
a) Use EPHP to request the PNG image again. Stop the HTTP response
halfway back once again. Change the "content-type" (otherwise known as
the MIME type) to text/plain. Restart the HTTP response once again. Now
what happens when the response is loaded into the browser? Why? (answer
in logbook)

b) Now request your index page again in EPHP, I.e
http://ephp.solent.ac.uk/~ephpXXX/index.html
Once again, stop the HTTP response halfway through.
Change the content-type line in the HTTP header to the following:
i) text/plain
ii) image/png

What happens in each case, and why? (answer on the board, once again)

## Question 6
Now request this page in EPHP. It's a page that doesn't exist.
http://ephp.solent.ac.uk/~ephpXXX/imaginary.html
Look at the HTTP response returned this time. In what important way does
it differ from the previous HTTP responses?
