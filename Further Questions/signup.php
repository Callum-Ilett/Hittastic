<?php
$userName = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];

$DOB = "";

echo "You have signed up with: <br/>";
// echo "Name: $name, Username:$userName, Password: $password, Day: $day, Month: $month, Year: $year";

echo "Name: $name <br/>";
echo "Username: $userName <br/>";

if ($year < 1890) {
	$DOB = "N/A";
	$error = "No one is alive before 1890";
} else {
    $DOB = "$day $month $year";
}

echo "Date of birth: $DOB <br/>";
echo $error;