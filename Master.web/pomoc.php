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
<div id="pomoc">
<center>

<dl>
<br><br>
<dt><strong><font size="5">1.Za pomocą polecenia BACKUP LOG w MS SQL Server można:</strong></font></dt>
<font color="maroon" style="text-shadow: 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000;"><dd>Wykonać kopię bezpieczeństwa dziennika transakcyjnego.</dd></font>
<dt><strong><font size="5">2.Które z pól są umieszczone w formularzu?</strong></font></dt>
<font color="maroon" style="text-shadow: 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000;"><dd>Input(Text), Select, Input(Radio), Input(Radio), Input(Submit), Input(Reset)</dd></font>
<dt><strong><font size="5">3.Zadaniem funkcji PHP o nazwie mysql_num_rows() jest</strong></font></dt>
<font color="maroon" style="text-shadow: 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000;"><dd>zwrócić liczbę wierszy znajdujących się w wyniku zapytania</dd></font>
<dt><strong><font size="5">4.Najprostszą i najmniej pracochłonną metodą przetestowania działania witryny internetowej w wielu przeglądarkach i ich różnych wersjach jest</strong></font></dt>
<font color="maroon" style="text-shadow: 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000;"><dd>skorzystanie z emulatora przeglądarek internetowych np. Browser Sandbox</dd></font>
<dt><strong><font size="5">5.Jak nazywa się podzbiór strukturalnego języka zapytań, związany z formułowaniem zapytań do bazy danych za pomocą polecenia SELECT?</strong></font></dt>
<font color="maroon" style="text-shadow: 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000, 2px 2px 0 #000;"><dd>SQL DQL (ang. Data Query Language)</dd></font>
</dl>
Twojego pytania nie ma na liście? Napisz do nas! w ciągu 24h udzielimy ci odpowiedzi!</br></br>
<form action="" method="POST">
<textarea name="pomoc" cols="40" rows="10">Tutaj wpisz tekst...</textarea></br>
<input type="submit" value="Wyslij">
</form>
</div>
		<?php
$serwer = "localhost";
$login = "root";
$haslo = "";
$db_name = "masterweb";
$link = new mysqli ($serwer, $login, $haslo, $db_name);

if(isset($_POST['pomoc']))
{
	$pomoc=$_POST['pomoc'];
	$user=$_SESSION['user'];
	
	$wstaw = $link->query("insert into pomoc (user,trpo) values ('$user', '$pomoc')")
or die("Blad w zapytaniu");

	echo "</br> Wiadomość wysłana! Odpowiedź uzyskasz jako wiadomość w poczcie w ciągu 24h.<br /><br> ";
}

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
		<div id="footer">
		Master.Web &copy Piotr Lisowski Czerwiec 2017
		</div>
	
	
	
	
	
	</div>
</body>
</html>
