<?php 
session_start();
?><!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Cerca Trova</title>
	<meta name="description" content="Jesteś fanem Cerca Trova? wejdź i kup nasz produkt. Specjalnie dla fanów" />
	<meta name="keywords" content="Sklep, Koszulki, Kubki, Cerca Trova" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="style/order.css" rel="stylesheet" type="text/css" />
	<script src="timer.js"></script>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>

<body onload="odliczanie();">

	<div class="container">
		<a href="#" class="order"></a>
		<div id="logo">
		<font color="gold">Cerca</font>Trova
		</div>
		
		<div id="Media">
			<div class="insta">
				<a href="https://www.instagram.com/" target="_blank" class="tilelink" title="Nasz Instagram" /><i class="icon-instagram"></i>
			</div>
			<div class="snap">
				<a href="https://www.snapchat.com/" target="_blank" class="tilelink" title="Nasz Snapchat"/><i class="icon-snapchat-ghost"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" title="Nasz Facebook"/><i class="icon-facebook"></a></i>
			</div>
		</div>
		</div>
		<div class="headstoper">
					<ol>
						<li><a href="home.php" title="Strona Główna serwisu Cerca Trova">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank" title="Tutaj się zarejestrujesz!">Rejestracja</a></li>	
						<li><a href="Regulamin.html" target="_blank" title="Przeczytaj regulamin aby móc korzystaćz naszych usług!">Regulamin</a></li>
						<li><a href="Sklep.php" title="Zamów nasze produkty!">Sklep</a></li>
						<li><a href="Portfolio/linkowanie.html" target="_blank" title="Zapoznaj sie z moimi kwalifikacjami">O Autorze</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
		</div>
	<div class="container">
<center>
<?php
	
	$user=$_SESSION['user'];
	$koszulek = $_POST["koszulek"];
	$kubkow = $_POST["kubkow"];
	$poduszek = $_POST["poduszek"];
	$czapek = $_POST["czapek"];
	$suma = $koszulek *29.99 + $kubkow *9.99 + $poduszek *19.29 + $czapek *40.00;
	require_once "connect.php";
	$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
	$wstaw = $polaczenie->query("insert into zakupy (klient,koszulka,kubek,poduszka,czapka,razem) values ('$user', '$koszulek', '$kubkow', '$poduszek', '$czapek', '$suma')")
or die("Blad w zapytaniu3");
echo<<<END

	<h2>Podsumowanie zamówienia</h2>
	
	<table border="1"cellpadding="10" cellspacing="0">
	<tr>
		<td>Koszulka(29.99PLN/szt)</td><td>$koszulek</td>
	</tr>
	<tr>
		<td>Kubek(9.99PLN/szt)</td><td>$kubkow</td>
	</tr>
	<tr>
		<td>Poduszka(19.29PLN/szt)</td><td>$poduszek</td>
	</tr>
	<tr>
		<td>Czapka(40.00PLN/szt)</td><td>$czapek</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
	
	</table>
	<br ><a href="index.php">Powrót do strony głównej</a>
END;

?>
</center>

</div>

	<div id="pause">
			<img src="pause2.png"/>
		<div id="zegar">12:00:00</div>
	</div>

</body>
</html>
