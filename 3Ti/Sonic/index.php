<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Sonic</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />

	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<script src="czas.js"></script>
</head>

<body onload="odliczanie()">
	
	<div id="container">
	
		<div id="logo">
		Sonic
		<div id="zegar"></div>
		</div>
		
		<div id="headstoper">
		</div>
	
	<div id="log">

			<center>
				<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
		<?php
			if(isset($_SESSION['blad']))
				echo $_SESSION['blad'];
		?>
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" /><br>
				Nie masz konta? <a href="rejestracja.php" title="Tu założysz swoje konto!" class="rej">Załóż nowe konto</a>
				<br>
	</div>
	<div id="content">
	<p>Pellentesque ut nisi mi. Donec cursus eget ex
				non ullamcorper. Praesent finibus maximus 
				ullamcorper. Integer gravida dolor non 
				condimentum dapibus. Quisque id odio 
				commodo, maximus velit sed, varius sem.
				Pellentesque habitant morbi tristique senectus
				et netus et malesuada fames ac turpis egestas. Proin tempor 
				hendrerit leo, non interdum felis molestie quis. 
				Proin efficitur viverra eros, blandit ullamcorper
				turpis sollicitudin in. In consectetur vehicula nunc non facilisis.
				Fusce suscipit pellentesque ex, a posuere tortor aliquam non.</p>
			</div>
			
		<div id="content2">		
				<p>Pellentesque ut nisi mi. Donec cursus eget ex
				non ullamcorper. Praesent finibus maximus 
				ullamcorper. Integer gravida dolor non 
				condimentum dapibus. Quisque id odio 
				commodo, maximus velit sed, varius sem.
				Pellentesque habitant morbi tristique senectus
				et netus et malesuada fames ac turpis egestas. Proin tempor 
				hendrerit leo, non interdum felis molestie quis. 
				Proin efficitur viverra eros, blandit ullamcorper
				turpis sollicitudin in. In consectetur vehicula nunc non facilisis.
				Fusce suscipit pellentesque ex, a posuere tortor aliquam non.</p>
	</div>
		<div id="footer">Wszelkie prawa Zastrzeżone &copy Strona Internetowa wykonana na potrzeby firmy</div>
		
	
	
	
	
	</div>









</body>
</html>
