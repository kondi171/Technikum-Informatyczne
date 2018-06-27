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

?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Allegro</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/style.css" type="text/css" />
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
	<a href="Sklep.php" class="sklep">Przejrzyj nasze Towary!</a>
	</div>
	<div class="pojemnik">
	<div id="logowanie">
		<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
		<?php
			if(isset($_SESSION['blad']))
				echo $_SESSION['blad'];
		?>
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
					Nie masz konta? <div id="rej"><a href="rejestracja.php" class="link">Zarejestruj się!</a></div>
				<input type="submit" value="Zaloguj się" />
		</form>
	
		</div>
	
		<div id="zawartosc">
		Allegro, Więcej niż Aukcje !
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
