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
			<center>
			<h2>Laptopy w przecenie!</h2>
		<form action="order.php" method="post">
		Asus(3000.00PLN/szt):<br>
		<input type="text" name="as"/>
	
			<br /><br />
		Lenovo (4000.00PLN/szt):<br>
		<input type="text" name="le"/>
		
			<br /><br />
			
		<input type="submit" value="Wyślij Zamówienie" />
		<br><br>
		
		</form>
		</center>
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

