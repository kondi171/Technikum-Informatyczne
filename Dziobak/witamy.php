<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	

	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);

	

	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);

	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Dziobak Inc.</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<script src="timer.js"></script>
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
</head>
<body onload="odliczanie()">
	<div id="pojemnik">
		<div id="logo">Dziobak Inc.</div>
		<div id="zegar">00:00:00</div>
	<div id="top"></div>
	<div class="wrapper">
		<div id="witaj">
			<center>
				Zarejestrowałeś się! Teraz mozesz się zalogować!
				<br>
				<a href="index.php"><br />Zaloguj się na swoje konto!</a>
				</center>
				</div>
		</div>
		<div id="stopka2">
		Dziobak 2k17 &copy 
		</div>
				
	</div>
</body>
</html>
