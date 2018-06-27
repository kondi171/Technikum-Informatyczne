<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Allegro</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/rejestracja.css" type="text/css" />
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
	<div id="tophead">.
	<a href="Sklep.php" class="sklep"></a>
	</div>
	<br>
<?php
	session_start();
	$p=0;
	if(isset($_SESSION['id']))
	{$p=$_SESSION['id'];
	}
	if ($p==1)
		{
			
		header('Location: glowna.php');
		}
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$i=0;
echo "<center>";
echo "<form action='' method='POST'>
Login:<br><input type='text' maxlength='30' name='log'><br>
Hasło:<br><input type='password' maxlength='30' minlength='8' name='has'><br>
Imie:<br><input type='text' maxlength='30' name='imie'><br>
Nazwisko:<br><input type='text' maxlength='30' name='naz'><br>
Miejscowość:<br><input type='text' maxlength='40' name='miej'><br>
Ulica:<br><input type='text' maxlength='50' name='ul'><br>
Nr. domu:<br><input type='text' maxlength='4' name='nrd'><br>
Nr. lokalu:<br><input type='text' maxlength='4' name='nrl'><br>
<input type='submit' name='przycisk'  value='Wyslij &#8811;'>
</form>";
if((isset($_POST['log']))&&(isset ($_POST['has']))&&(isset ($_POST['imie']))&&(isset ($_POST['naz']))&&(isset ($_POST['miej']))&&(isset ($_POST['ul']))&&(isset ($_POST['nrd']))&&(isset ($_POST['nrl'])) )
	{
		
	$log=$_POST['log'];
	$has=$_POST['has'];
	$im=$_POST['imie'];
	$naz=$_POST['naz'];
	$miej=$_POST['miej'];
	$ul=$_POST['ul'];
	$nrd=$_POST['nrd'];
	$nrl=$_POST['nrl'];
	if (!($log=='')&&!($has=='')&&!($im=='')&&!($naz=='')&&!($miej=='')&&!($nrd==''))
	{
	$wynik = $link->query("SELECT * FROM urzytkownik")
		   or die("Błąd w zapytaniu!0");
 while ($rek = $wynik -> fetch_assoc())
 {
	  if(!($rek['login']==$log))
	  {
		$i=2;
	  }
	  else
	  {
		  $i=1; 
	  }
}

	}
if ($i==1)
	echo "Podany login już istnieje<br>";
	
	else
	{
		if ($i==2)
		{
				$wstaw = $link->query("insert into urzytkownik (login, haslo, imie, nazwisko, miejscowosc, ulica, nr_domu, nr_mieszkania) values ('$log', '$has', '$im', '$naz', '$miej', '$ul', '$nrd', '$nrl')")
or die("Błąd w zapytaniu8!");
	echo "Zostałeś poprawnie zarejestrowany<br>";
	$wstaw = $link->query("create table wyslane_$log (id int primary key auto_increment, uzytkownik varchar (40), data date, tresc text(300))")
	or die("Błąd w zapytaniu1");
	$poczta = $link->query("create table odebrane_$log (id int primary key auto_increment,stan int, uzytkownik varchar (40), data date, tresc text(300))")
	or die("Błąd w zapytaniu2");
		}
		else
		{
			$i=0;
		echo "Wprowadzi dane<br>";
	}}
	}
		  

 

?>
<button><a href="index.php" class="rej">&#8810; Strona główna</a></button>
</center>
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
