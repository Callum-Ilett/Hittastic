# SQL Injection  

This section allows you to explore the security risk of SQL injection, in which
crackers can link to your site and inject SQL into your site to force your site to
perform an unintended action.
Questions

a) Ensure that your session variable in your login script is set this way:
```php
$_SESSION["gatekeeper"] = $row["username"]
```

and not this way
```php
$_SESSION["gatekeeper"] = $un;
               or
$_SESSION["gatekeeper"] = $_POST["username"]
```

In other words, it should set the session variable to the username field
of the row returned from the SELECT statement in the login script.  

b) Go to your login page on your HitTastic! site. Login with the following:
Username: jbloggs
Password: password' OR '1=1
What happens? Can you see why? We will explain what is happening after
everyone has got this far.   

c) Modify the login script to use prepared statements to prevent the SQL
injection occurring. Try out the SQL injection attack again.   

d) Return to your HitTastic! work and change all your scripts which use
database queries to use prepared statements.