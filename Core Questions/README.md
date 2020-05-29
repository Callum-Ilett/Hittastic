# Core questions - essential to complete
## Question-1
In Notepad++, or in EPHP's own editor, write a PHP script to read the artist that the user
entered into a variable, $a, and display a message which tells the user what artist they
entered. Ensure that is saved as searchresults.php.
So, if the user entered Oasis for the artist, the script should display:
You are searching for songs by Oasis

## Question-2
Upload your PHP to the server using FileZilla or EPHP.

## Question-3
When most people have got to this stage, we will demonstrate using EPHP to request
and run PHP scripts.

i) First enter the URL of your form in the “Simulation” tab:
http://ephp.solent.ac.uk/~ephpXXX/index.html
Watch the HTTP animation as you did last time.  

ii) When the form returns to the EPHP browser, try typing in an artist in the form within the EPHP browser. What happens?  

iii) Correct your HTML form to fix the problem in ii). Upload the modified form using
FileZilla.

iv) Type in an artist again, watch the animation, and watch what happens on the server
carefully. Your PHP code will appear on the server once the request is received.
If there were no errors in your PHP, your PHP code will appear. EPHP shows a
list of variables in the 'Variables' window of the bottom of the screen. Does $a
contain the text you entered in the form? If not, try and figure out why not by
looking at your PHP and looking at the “Develop” window on the client side,
which should contain your HTML form.
If a “syntax error” message is displayed in a popup window, there’s an error in
your PHP code which prevents it running. Look at your code again and try to
figure out what was wrong. Correct the error, re-upload, and start question 4
again

v) Click on “Run PHP and send back output” to send the HTTP response to the client.
Answer these questions in your logbook:
- What happens in the EPHP browser?
- When you roll over the HTTP response, do you see PHP code? If not, what do
you see instead? Why do you not see PHP? (answer in your logbook)

## Question-4
Once you’ve got it working in EPHP, try requesting it in the browser outside EPHP. In a
new browser tab:
- Enter the URL of your form (http://ephp.solent.ac.uk/~ephpXXX/index.html)
- Enter an artist.
- Your PHP should output the expected result.

## Question-5
Ensure you’ve completed and uploaded the signup form from Topic 1. The form MUST
have a method of "post" as signing up is an action which will update the database,and by
convention, the "post" method is used whenever updates are being done.
Then, in Notepad++ or in EPHP, write the signup script to respond to the signup form.
This should simply read in the details that the user entered in the form and display
them back to the user, e.g.:

You have signed up with: Name Tim Smith, username ts282, Date of birth 2 June 1970
It should be saved as `signup.php`
