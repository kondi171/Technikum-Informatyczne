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
		<?php
	
	$as = $_POST["as"];
	$le = $_POST["le"];
	
	$suma = $as *3000.00 + $le *4000.00 ;
	
echo<<<END
<center>
	<h2>Zamówiłeś Laptopa:</h2>
	
	<table border="1"cellpadding="10" cellspacing="0">
	<tr>
		<td>Asus</td><td>$as</td>
	</tr>
	<tr>
		<td>Lenovo</td><td>$le</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
		</table>
	<br ><a href="sklep.php" class="rej">Zmieniłeś zdanie?</a>
	<br>
	</center>
END;
?>

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
	<div id="footer">Wszelkie prawa Zastrzeżone &copy Czerwiec 2017</div>
	</div>

	</div>
</body>
</html>
