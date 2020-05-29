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