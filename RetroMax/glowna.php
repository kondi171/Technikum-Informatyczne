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
		
		
		
		<div id="img">
		<img src="red.jpg" style="-webkit-box-shadow: 0px 0px 148px 29px rgba(255,0,0,1);
-moz-box-shadow: 0px 0px 148px 29px rgba(255,0,0,1);
box-shadow: 0px 0px 148px 29px rgba(255,0,0,1)); 	border-radius: 310px;"/>
		</div>
		</div>
		<div id="content">
		<br>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est. Duis id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem. Nunc non massa 
		sit amet ligula posuere lacinia ut ac neque.
		Maecenas ornare diam sed lacinia pulvinar. 
		Phasellus ultrices purus ut justo iaculis ultrices.</p>

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
	

	<div id="stopka">
		<div id="tekst">Webdeveloperska sieć firmowa.</div>
		<div id="zegar">111</div>
	</div>
</div>
</body>
</html>
