
# Creating a basic HTML page and uploading it to the server
**Create a webpage**  
Using vscode create `index.html` by copying and pasting this code:

```html
<h1>HitTastic!</h1>

<p>Search and download your favorite 40 hits on
HitTastic! Whether it's pop, rock, rap, or pure liquid
cheese you're into, you can be sure to find it on
HitTastic! With the full range of top 40 hits from the
past 60 years on our database, you can guarantee you'll
find what you're looking for. Plus with our Year Search
(coming soon!) find out exactly what was in the chart in
any year in the past 60 years. </p>

<form method="get">
    <fieldset>
        <label>Please enter an artist:</label>
        <input name="theArtist" />
        <input type="submit" value="Go!" />
    </fieldset>
</form>
```  

<br/>

**The Neptune Server**  
You will upload the webpage to a server called Neptune. You each will
have your own Neptune login of the form ephpXXX, where XXX is a three digit number.  

<br/>

**Uploading work using FileZilla**  
Open FileZilla to transfer the HTML page above to Neptune. FileZilla is an
FTP client. It is used to transfer files from one machine to another. Login to Neptune with the details:  

<pre>
  <b>host</b>     : ephp.solent.ac.uk
  <b>username</b> : Neptune username
  <b>password</b> : Neptune password
</pre>

Prove that it has indeed uploaded to Neptune by opening your web browser
and going to this address:
http://ephp.solent.ac.uk/~ephpXXX/index.html
