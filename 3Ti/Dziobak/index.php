<?php

	session_start();
	
	if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
		{
		header('Location: glowna.php');
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
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<script src="timer.js"></script>
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
</head>

<body onload="odliczanie()">
<div id="pojemnik">
	<div id="logo">Dziobak Inc.</div>
	<div id="zegar">00:00:00</div>
	<div id="top"></div>
	<div id="left">
		<div id="pas">
		<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
		<?php
			if(isset($_SESSION['blad']))
				echo $_SESSION['blad'];
		?>
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" />
		</form>
		</div>
		<div id="rej"><a href="rejestracja.php" class="link">Zarejestruj się</a></div>
		<div id="Media">
			<div class="yt">
				<a href="https://www.youtube.com" target="_blank" class="tilelink"  /><i class="icon-youtube"></i>
			</div>
			<div class="tw">
				<a href="https://twitter.com" target="_blank" class="tilelink" /><i class="icon-twitter"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" /><i class="icon-facebook"></a></i>
			</div>
		</div>
		</div>
		<div id="content">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Donec metus mi, gravida vel posuere ut, maximus at libero.
		Suspendisse potenti. Cras at scelerisque mi, non semper tellus. 
		In finibus molestie urna. Fusce ac rutrum elit. Donec consectetur 
		aliquam libero, in congue nibh blandit quis. Phasellus tincidunt 
		tincidunt ligula, quis dapibus mauris pellentesque et. 
		Curabitur fringilla lorem metus, condimentum semper felis c
		ondimentum sed. Duis eros urna, hendrerit in interdum faucibus, 
		iaculis ac erat. Aenean fringilla volutpat porta. Cras tristique diam
		ut aliquet scelerisque. Duis quam felis, commodo quis lorem sed,
		finibus tempor ante. Mauris vel massa odio. 
		Vestibulum ac erat sed turpis ultrices aliquet
		convallis sed lacus. Aliquam lobortis odio ac risus 
		maximus, ac volutpat nunc vestibulum.</p>

		</div>
		<div id="stopka">
		Dziobak 2k17 &copy 
		</div>
		
		
		
	</div>


</body>
</html>
