<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Allegro</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/sklep.css" type="text/css" />
	<script src="odliczanie.js"></script>
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
</head>

<body onload="odliczanie()">
<div class="pojemnik">
	<div id="logo">
		<img src="allegro.png" />
	</div>
	<div id="zegar">00:00:00</div>
	</div>
	<div id="tophead">
	<a href="Sklep.php" class="sklep"></a>
	</div>
	<div class="pojemnik">
					<div id="menu">
						<div class="option"><a href="glowna.php" class="menu">Strona Główna</a></div>
						<div class="option"><a href="sprzedaz.php" class="menu">Sprzedaj</a></div>
						<div class="option"><a href="Sklep.php" class="menu">Sklep</a></div>	
						<div class="option"><a href="poczta.php" class="menu">Poczta</a></div>
						<div class="option"><a href="wyloguj.php" title="Wyloguj się z serwisu" class="menu">Wyloguj się</a></div>
						<br>
						<br>
					</div>
					<div id="header"></div>
		<br>
		<br>
		<br>
		<br>
	
<?php
echo "<center>";
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$wynik = $link -> query ("select * from towar") or die ("blad w zapytaniu!");
echo "<table border='5'><tr><td></td><td>Nazwa</td><td>Sprzedawca</td><td>cena</td><td>Dostępna ilość</td><td></td></tr>";
while ($rek = $wynik ->fetch_assoc())
	{echo "<tr><td>";
if($rek['ikona']==1)
{echo "<img src='towary/".$rek['nazwa']."_".$rek['sprzedawca'].".jpg' width='50' height='50'/>";}
else{
	echo "<img src='towary/Brak_obrazka.jpg' width='50' height='50'/>";
}
echo"</td><td>";
echo $rek['nazwa'];
echo "</td><td>";
echo $rek['sprzedawca'];
echo "</td><td>";
	echo $rek['cena'];
	echo "</td><td>";
	echo $rek['ilosc'];
	echo "</td><td>";
	echo "<form action='kup.php' method='POST'>
	<input type='hidden' name='id' value='".$rek['id']."' />
	<input type='submit' value='Podgląd'>
	</form>";
	echo "</td></tr>";
	}
	echo "</table>";
	echo "<br><br><br>";
	echo "</center>";
?>
		</div>
<div id="nas">
	Śledź nas również na:
	</div>
		<div class="socials">
			<div class="socialdivs">
				
				<div class="fb">
						<a href="http://www.facebook.com" target="_blank" class="tilelink" />
						<i class="icon-facebook"></a></i>
					</div>
					
				<div class="tw">
					<a href="http://www.twitter.com" target="_blank" class="tilelink" />
					<i class="icon-twitter"></a></i>
				</div>
				
				<div class="gplus">
					<a href="http://www.googleplus.com" target="_blank" class="tilelink" />
					<i class="icon-googleplus-rect"></a></i>
			
				</div>
				</div>
				<div style="clear:both;"></div>
	
				</div>

		<div id="stopka">
		Wszelkie Prawa Zatrzeżone &copy Mrozu 2k17 &#174;
		</div>
</body>
</html>
