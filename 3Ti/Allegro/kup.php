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
	
<div id="content">


<?php
	
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
if(isset($_SESSION['towar']))
{$id=$_SESSION['towar'];}
if(isset($_POST['id']))
{$id=$_POST['id'];}
$_SESSION['towar']=$id;
$wynik = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
$wyniki = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
$wynikii = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");

while ($rek = $wyniki ->fetch_assoc())
{$sprzed=$rek['sprzedawca'];}

echo"
<center>
<form action='kupi.php'  method='POST'>
<table>
<tr><td>";
while ($rek = $wynik ->fetch_assoc())
{
if($rek['ikona']==1)
{echo "<img src='towary/".$rek['nazwa']."_".$rek['sprzedawca'].".jpg' width='50' height='50'/>";}
else{
	echo "<img src='towary/Brak_obrazka.jpg' width='50' height='50'/>";
}}
echo"</td><td></td></tr><tr><td>
Nazwa towaru
</td><td> ";
$wyniki = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
while ($rek = $wyniki ->fetch_assoc())
{
	echo $rek['nazwa'];
}
echo "
</td></tr><tr><td>
Ile szt. </td><td>
 <input type='text' name='ile'><br></td></tr><tr><td>
 cena za szt  </td><td>";
while ($rek = $wynikii ->fetch_assoc())
{echo $rek['cena'];
}
echo "</td></tr><tr><td>";
echo "Dostępna ilość </td><td>";
$wynikiii = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
while ($rek = $wynikiii ->fetch_assoc())
echo $rek['ilosc'];
	echo "</td></tr><tr><td>sprzedawca</td><td>";
	

echo $sprzed;
echo "

</td></tr></table>";

echo "<input type='submit'  value='zatwierdź'>
</form>";
echo" <form action='kom.php' method='POST'>
<input type='submit'  value='Dodaj swoją opinie'>
</form>";
$wyniki = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
while ($rek = $wyniki ->fetch_assoc())
{$nazwa=$rek['nazwa'];}
$tab=$nazwa."_".$sprzed;


echo "<table>";
$obraz = $link -> query ("select * from ".$tab." ") or die ("blad w zapytaniu!");
while ($rek = $obraz ->fetch_assoc())
{
	
	echo "<tr><td>".$rek['uzytkownik']."</td><td>".$rek['komentarz']."</td><td>".$rek['data']."</td></tr>";
}
echo "</table>";
echo "</center>"
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
