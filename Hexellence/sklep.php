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
	<title>Hexellence</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Orbitron|Shadows+Into+Light" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
	<link rel="stylesheet" href="style/style3.css" type="text/css" />
</head>

<body>
	
	<div id="container">
	
		<div id="logo">
		Hexellence
		</div>
		<div id="top">
		<a href="glowna.php" class="powrot">&#8658; Powrót do strony Głównej  &#8656;</a>
		</div>
						
<div id="content">
			<center>
			<h2>Nasze Meble na ciebie czekają!</h2>
		<form action="order.php" method="post">
		Szafa(2000.00PLN/szt):<br>
		<input type="text" name="szafa"/>
	
			<br /><br />
		Biurko(1200.00PLN/szt):<br>
		<input type="text" name="biurko"/>
		
			<br /><br />
			
		<input type="submit" value="Wyślij Zamówienie" />
		<br><br>
		
		</form>
		</center>
</center>
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
