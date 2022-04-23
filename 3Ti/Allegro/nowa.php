<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Allegro</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/poczta.css" type="text/css" />
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
					<div id="header">Poczta - nowa wiadomość</div>
		<br>
		<br>
	
<div id="content">



<?php
session_start();
	$p=0;
	if(isset($_SESSION['id']))
	{$p=$_SESSION['id'];
	}
	if($p==0)
	{
		header('Location: index.php');
	}
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$wynik = $link -> query ("select login from urzytkownik") or die ("blad w zapytaniu5!");
$log=$_SESSION['logg'];
echo "<center>
<form action='wyslij.php' method='POST'>
<select name='nazwa'>";
while ($rek = $wynik ->fetch_assoc())
{
	echo "<option>".$rek['login']."</option>";
}
echo "</select><input type='text'  name='tresc'><br>
<input type='submit' name='przycisk'  value='Wyslij'>
</form>
</center>";
?>

</div>
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




