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
	<title>Dziobak Inc.</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="timer.js"></script>
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
</head>

<body onload="odliczanie()">
<div id="pojemnik">
	<div id="logo">Dziobak Inc.</div>
	<div id="zegar">00:00:00</div>
	<div id="top">
		<ol>
						<li><a href="glowna.php">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank">Rejestracja</a></li>	
						<li><a href="opinie.php">Opinie</a></li>
						<li><a href="Sklep.php">Sklep</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
	</div>
<center>
<div id="opinia">
<strong><font size="7">Ocena użytkownika</strong></font><br/>

<form action="" method="POST">

<textarea cols="40" rows="15" name="opinia">Tu wpisz tekst...</textarea></br>

	</br>
<input type="submit" value="Wyslij">

</form>
<?php
$serwer = "localhost";
$login = "root";
$haslo = "";
$baza = "dziobak";
$link = new mysqli ($serwer, $login, $haslo, $baza);


if(isset($_POST['opinia']))
{
	$opinia=$_POST['opinia'];
	
	
	$link -> query ("INSERT INTO opinie (login,tres) VALUES ('$login','$opinia')") or die ("blad w zapytaniu!");
	
	echo "</br> Opinia zostala wyslana. Dziekujemy!";
}

?>
</div>
</center>
<div id="stopka">
		Dziobak 2k17 &copy 
		</div>
</div>
</body>
</html>