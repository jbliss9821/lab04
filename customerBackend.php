<?php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$ship = $_POST["shipping"];
	$hat_count = $_POST["hats"];
	$shoe_count = $_POST["shoes"];
	$car_count = $_POST["cars"];
	$hat_total = $hat_count * 20;
	$shoe_total = $shoe_count *45;
	$car_total = $car_count * 2500000;
	$sale_total = $hat_total + $shoe_total + $car_total + $ship;
	echo '<link href="style.css" rel="stylesheet" type="text/css"/>';
	echo '<html><head><h1>Receipt for Sale</h1></head><body>';
	echo '<h2>Thank you for your purchase!</h2>';
	echo '<div class="user_back">Username: '.$user.'<br>';
	echo 'Password: '.$pass.'</div><br>';
	echo '<div class="receipt">Shipping Fees: $'.$ship.'<br>';
	echo 'Hats: '.$hat_count.' hat(s) at $20/each = $';
	echo $hat_total.'<br>';
	echo 'Shoes: '.$shoe_count.' pair(s) of shoes at $45/pair = $';
	echo $shoe_total.'<br>';
	echo 'Cars: '.$car_count.' car(s) at $2.5 million/car = $';
	echo $car_total.'</div><br>';
	echo '<div class="total">Total Sale including shipping: $'.$sale_total.'<br></div>';
	echo '</body></html>'
?>
