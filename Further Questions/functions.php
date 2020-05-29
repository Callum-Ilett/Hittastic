<?php
function generateLinks(){
	$pages = [
	"index"=> "./index.php",
	"about"=>"./about.php",
	"signup"=>"./signup_form.php"
	];

	foreach ($pages as $text => $url) {
		echo "<a href=" .$url. ">$text</a> <br/>";
	}
}

function connect() {
    $conn = new PDO ("mysql:host=localhost;dbname=ephp021;", "root", "root");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}