<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
		{
		header('Location: home.php');
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
	<link rel="stylesheet" href="style/style.css" type="text/css" />
</head>

<body>
	
	<div id="container">
		<div id="logo">
		<font color="darkred">Master</font>.Web
		</div>
		<div id="content">
			<div id="zaloguj">
				<font color="darkred" size="7">Zaloguj się!</font>
				<br /><br />
				<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
		<?php
			if(isset($_SESSION['blad']))
				echo $_SESSION['blad'];
		?>
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" />
			</div>
			<div id="zarejestruj">
			<BR>
			<BR>
			Nie masz jeszcze konta? Na co czekasz?<br>
			<a href="rejestracja.php" class="rejestracja">Zarejestruj się!</a>
			</div>
		</div>
		<div id="zawartosc">
		<p>Master.Web is a cloud-based web development platform that was first developed and popularized
		by the Israeli company also called Wix. It allows users to create HTML5 web sites and mobile sites 
		through the use of online drag and drop tools. Users may add functionality such as social plug-ins,
		e-commerce, contact forms, e-mail marketing, and community forums to their web sites using a variet
		y of Wix-developed and third-party applications.</p>

		<p>Wix is built on a freemium business model, earning its revenues through premium upgrades. 
		Users must purchase premium packages in order to connect their sites to their own domains, 
		remove Wix ads, add e-commerce capabilities, or buy extra data storage and bandwidth.</p>
		</div>
		<div id="footer">
		Master.Web &copy Piotr Lisowski Czerwiec 2017
		</div>
	
	
	
	
	
	</div>
</body>
</html>
