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
	<title>Sonic</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />

	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="czas.js"></script>
</head>

<body onload="odliczanie()">
	
	<div id="container">
	
		<div id="logo">
		Sonic
		<div id="zegar"></div>
		</div>
		<br>
		
		<div id="headstoper">
		<ol>
						<li><a href="glowna.php" >Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank" >Rejestracja</a></li>	
						<li><a href="Sklep.php" >Sklep</a></li>
						<li><a href="opinie.php" >Opinie</a></li>
						<?php
						echo '<li><a href="logout.php">Wyloguj się</a></li>';
						?>
					</ol>		
		
		</div>
	<br>
	<div id="content">
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

	<div class="socials">
			
				<div class="socialdivs">
					<div class="fb">
						<a href="http://www.facebook.com" target="_blank" class="tilelink" />
						<i class="icon-facebook"></a></i>
					</div>
				<div class="yt">
					<a href="http://www.youtube.com" target="_blank" class="tilelink" />
					<i class="icon-youtube"></a></i>
				</div>
				<div class="tw">
					<a href="http://www.twitter.com" target="_blank" class="tilelink" />
					<i class="icon-twitter"></a></i>
				</div>
				<div style="clear:both;"></div>
	
				</div>
				</div>
	<div id="footer">Wszelkie prawa Zastrzeżone</div>
	</div>

	
</body>
</html>
