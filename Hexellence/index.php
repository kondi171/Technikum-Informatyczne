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
	<title>Hexellence</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Orbitron|Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link rel="stylesheet" href="style/style.css" type="text/css" />
</head>

<body>
	
	<div id="container">
	
		<div id="logo">
		Hexellence
		</div>
		<div id="top">ss</div>
		<div id="content">
		It’s easy to see the value of a comfortable, 
		modern bathtub, sink and toilet. If your bathrooms are old, 
		dark and drab and can use an upgrade, ProTub Refinish is
		here to help. As an established refinishing and reglazing 
		company in Norwalk, CA, our goals are always to achieve 
		your complete satisfaction by transforming your bathroom, 
		kitchen or other area into spaces with improved functionality
		and aesthetics.
		</div>
		<div id="menu">
		<center>
		<?php
	if(isset($_SESSION['blad']))
		echo $_SESSION['blad'];
?>
				<form action="zaloguj.php" method="post">
				<br /> <input type="text" placeholder="Login" name="login" /> <br />
	
				<br /> <input type="password" placeholder="Hasło" name="haslo" /> <br /><br />
				<input type="submit" value="Zaloguj się" /><br>
				<button><a href="rejestracja.php">Zarejestruj się</a></button>
	</div>
	
		<div id="media">
		
			<div class="insta">
				<a href="https://www.instagram.com/" target="_blank" class="insta" title="Nasz Instagram" /><i class="icon-instagram-filled"></a></i>
			</div>
			<div class="tw">
				<a href="https://www.snapchat.com/" target="_blank" class="twitter" title="Nasz Twitter"/><i class="icon-twitter-bird"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="facebook" title="Nasz Facebook"/><i class="icon-facebook-rect"></a></i>
			</div>
			<div class="vi">
				<a href="http://www.vimeo.com" target="_blank" class="vimeo" title="Nasz Vimeo"/><i class="icon-vimeo"></a></i>
			</div>
			
		</div>
		<div id="stopka">
			Copyright &copy Seweryn Bartkiewicz.
		</div>
	
	</div>
</body>
</html>
