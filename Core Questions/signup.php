<?php
$userName = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

echo "You have signed up with:";
echo "Name: $name, Username:$userName, Password: $password, Day: $day, Month: $month, Year: $year";