<?php
	
	session_start();
	
	if(!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>RetroMax</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="zegarek.js"></script>
</head>

<body onload="odliczanie()">
	
	<div id="container">
	
		<div id="logo">
		RetroMax
		</div>


		<div id="social">
			<div class="gplus">
				<a href="https://www.googleplus.com/" target="_blank" class="tilelink"/><i class="icon-googleplus-rect"></i>
			</div>
			<div class="tw">
				<a href="https://www.twitter.com/" target="_blank" class="tilelink"/><i class="icon-twitter"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" title="Nasz Facebook"/><i class="icon-facebook"></a></i>
			</div>
		</div>
		<div id="menu">
					<div class="top"><a href="glowna.php" class="menu">Home</a></div>
					<div class="top"><a href="rejestracja.php" class="menu" target="_blank">Rejestracja</a></div>
					<div class="top"><a href="opinie.php" class="menu">Opinie</a></div>
					<div class="top"><a href="sklep.php" class="menu">Sklep</a></div>
					<?PHP
					echo '<div class="top"><a href="logout.php" class="menu">Wyloguj się</a></div> ';
					?>
		
		
		
		<br><br>
		<div class="ss"><p>Pellentesque ut nisi mi. Donec cursus eget ex
				non ullamcorper. Praesent finibus maximus 
				ullamcorper. Integer gravida dolor non 
				condimentum dapibus. Quisque id odio 
				commodo, maximus velit sed, varius sem.
				Pellentesque habitant morbi tristique senectus
				et netus et malesuada fames ac turpis egestas. Proin tempor 
				hendrerit leo, non interdum felis molestie quis. 
				Proin efficitur viverra eros, blandit ullamcorper
				turpis sollicitudin in. In consectetur vehicula nunc non facilisis.
				Fusce suscipit pellentesque ex, a posuere tortor aliquam non.</p>
		</div>
<div id="shop">
			<center>
			<h2>Najlepsze perfumy w jednym miejscu</h2>
		<form action="order.php" method="post">
		Calvin Clain(200.00PLN/szt):<br>
		<input type="text" name="cc"/>
	
			<br /><br />
		Adidas(150.00PLN/szt):<br>
		<input type="text" name="ad"/>
		
			<br /><br />
			
		<input type="submit" value="Wyślij Zamówienie" />
		<br><br>
		
		</form>
		<div class="ss">
		<p>Pellentesque ut nisi mi. Donec cursus eget ex
				non ullamcorper. Praesent finibus maximus 
				ullamcorper. Integer gravida dolor non 
				condimentum dapibus. Quisque id odio 
				commodo, maximus velit sed, varius sem.
				Pellentesque habitant morbi tristique senectus
				et netus et malesuada fames ac turpis egestas. Proin tempor 
				hendrerit leo, non interdum felis molestie quis. 
				Proin efficitur viverra eros, blandit ullamcorper
				turpis sollicitudin in. In consectetur vehicula nunc non facilisis.
				Fusce suscipit pellentesque ex, a posuere tortor aliquam non.</p>
				</div>
		</center>
</center>
	</div>
	<div id="stopka">
		<div id="tekst">Webdeveloperska sieć firmowa.</div>
		<div id="zegar">111</div>
	</div>
	</div>
</body>
</html>
