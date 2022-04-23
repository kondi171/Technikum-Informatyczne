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
		<?php
	
	$procesorow = $_POST["procesorow"];
	$kart = $_POST["kart"];
	
	$suma = $kart *1300.00 + $procesorow *1000.00 ;
	
echo<<<END

	<h2>Zamówiłeś</h2>
	
	<table border="1"cellpadding="10" cellspacing="0">
	<tr>
		<td>Procesor</td><td>$procesorow</td>
	</tr>
	<tr>
		<td>Karta</td><td>$kart</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
		</table>
	<br ><a href="sklep.php">Powróć do zakupów</a>
END;
?>

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
				

</div>
<div id="footer">
				 Wszelkie prawa zastrzeżone &copy Kacper Kotowicz 2017
				
				</div>

</body>
</html>
