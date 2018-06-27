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
	<title>Future Technology &#174;</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/style3.css" type="text/css" />
	<script src="timer.js"></script>
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
</head>

<body onload="odliczanie()">
<div id="wrapper">
	<div id="logo">Future Technology &#174;</div>
	<div id="headstopper">
		<ol>
						<div id="zegar">00:00:00</div>
						<li><a href="glowna.php">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank">Rejestracja</a></li>	
						<li><a href="Sklep.php">Sklep</a></li>
						<li><a href="opinie.php">Opinie</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
	</div>
	<div id="log">
			<center>
<table border="4px solid grey " width="50%"  cellpadding="4">
<tr> <td colspan="2"> <h1> <center> Cennik  </center> </h1> </td> </tr>
<tr>
<td><b>Procesor</b></td><td><b>1000zł</b></td>
</tr>

<tr>
<td><b>Karta</b></td><td><b>1300zł</b></td>
</tr>
</table>
</center>
		</div>
		<center>
		<div id="content">
		<h2>Kup nasz produkt!</h2>
		<form action="order.php" method="post">
		Procesor(1000.00PLN/szt):
		<input type="text" name="procesorow"/>
	
			<br /><br />
	
		Karta(1300.00PLN/szt):
		<input type="text" name="kart"/>
		
			<br /><br />
			
		<input type="submit" value="Wyślij Zamówienie" />
		<br>
		<br>
		</form>
</center>
	</div>
	
				<div class="socials">
			<center>
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
				
				</center>
				<div style="clear:both;"></div>
			
				</div>
				</div>
				<div id="footer">
				 Wszelkie prawa zastrzeżone &copy Kacper Kotowicz 2017</div>
</body>
</html>
