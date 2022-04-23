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
						<li><a href="Regulamin.html" target="_blank">Regulamin</a></li>
						<li><a href="Sklep.php">Sklep</a></li>
						<li><a href="Portfolio/linkowanie.html" target="_blank">O Autorze</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
	</div>
		<div class="container">
<center>
<?php
	
	$herbat = $_POST["herbat"];
	$kaw = $_POST["kaw"];
	
	$suma = $kaw *9.00 + $herbat *6.00 ;
	
echo<<<END

	<h2>Zamówiłeś</h2>
	
	<table border="1"cellpadding="10" cellspacing="0">
	<tr>
		<td>Herbata(6.00PLN/szt)</td><td>$herbat</td>
	</tr>
	<tr>
		<td>Kawa(9.00PLN/szt)</td><td>$kaw</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
		</table>
	<br ><a href="sklep.php">Powróć do zakupów</a>
END;
?>

<div id="stopka">
		Dziobak 2k17 &copy 
		</div>



</div>


</body>
</html>
