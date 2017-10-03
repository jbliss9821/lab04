<?php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$ship = $_POST["shipping"];
	$hat_count = $_POST["hats"];
	$shoe_count = $_POST["shoes"];
	$car_count = $_POST["cars"];
	
	echo 'Username: '.$user.'<br>';
	echo 'Password: '.$pass.'<br>';
	echo 'Shipping Fees: $'.$ship.'<br>';
	echo 'Hats: '.$hat_count.' hat(s)<br>';
	echo 'Shoes: '.$shoe_count.' pair(s) of shoes<br>';
	echo 'Cars: '.$car_count.' car(s)<br>';	
?>