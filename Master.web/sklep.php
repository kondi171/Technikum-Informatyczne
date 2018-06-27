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
	<title>Master.web</title>
	<meta name="description" content="Lubisz programować? uważasz że jesteś w tym dobry ale brak ci odpowiednich materiałów do nauki? zajrzyj do nas! napewno coś dla ciebie znajdziemy!" />
	<meta name="keywords" content="JS,PHP, programowanie" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="zegarek.js"></script>
</head>

<body onload ="zegarek()">
	
	<div id="container">
		<div id="logo">
		<font color="darkred">Master</font>.Web
		</div>
		<div id="topmenu">
			<ol>
						<li><a href="home.php" title="Strona Główna serwisu Cerca Trova">Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank" title="Tutaj się zarejestrujesz!">Rejestracja</a></li>	
						<li><a href="Sklep.php" title="Zamów nasze produkty!">Sklep</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
			<div id="zegar"></div>
		</div>
		<div id="content">
					
						<div class="leftmenu"><a href="opinie.php" title="Opinie naszych użytkowników" class="menu">Opinie</a></div>
						<div class="leftmenu"><a href="reklamacje.php" title="Możliwość zwrotu towaru w 14 dni!" class="menu">Reklamacje</a></div>
						<div class="leftmenu"><a href="poczta.php" title="Skontaktuj się z innymi użytkownikami" class="menu">Poczta</a></div>
						<div class="leftmenu"><a href="pomoc.php" title="Potrzebujesz pomocy?" class="menu">Pomoc</a></div>
		</div>
		<br>

			<center>
			<h2>Ucz się razem z nami!</h2>
		<form action="order.php" method="post">
		Podręcznik i DVD PHP:<br>
		<input style="text-align:center;" type="text" name="php" placeholder="(200.00PLN/szt)"/>
	 
			<br /><br />
		Podręcznik i DVD JS:<br>
		<input style="text-align:center;" type="text" name="js" placeholder="(150.00PLN/szt)"/>
		
			<br /><br />
			
		<input type="submit" value="Wyślij Zamówienie" />
		<br><br>
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
		<div id="footer">
		Master.Web &copy Piotr Lisowski Czerwiec 2017
		</div>
	
	
	
	
	
	</div>
</body>
</html>