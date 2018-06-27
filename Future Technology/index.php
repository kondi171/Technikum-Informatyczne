<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Future Technology</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style/style.css" type="text/css" />
</head>

<body>
	<div class="wrapper">
		<div id="logo">Future Technology &#174;</div>
	</div>
		<div id="headstopper"></div>
	<div class="wrapper">
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
		<div id="log">
			<center>
				<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
		<?php
			if(isset($_SESSION['blad']))
				echo $_SESSION['blad'];
		?>
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" />
				<br /><br />Nie masz konta ? <a href="rejestracja.php" class="rej">Zarejestruj się</a>
			</div>
			</center>
			</div>
			<div class="socials">
			<center>
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
				</center>
				<div style="clear:both;"></div>
			
				</div>
				</div>
				
				<div id="footer">
				 Wszelkie prawa zastrzeżone &copy Kacper Kotowicz 2017
				
				</div>
			

</body>
</html>
