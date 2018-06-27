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
	<title>Cerca Trova</title>
	<meta name="description" content="Jesteś fanem Cerca Trova? wejdź i kup nasz produkt. Specjalnie dla fanów" />
	<meta name="keywords" content="Sklep, Koszulki, Kubki, Cerca Trova" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="style/style.css" rel="stylesheet" type="text/css" />
	<script src="timer.js"></script>
</head>

<body onload="odliczanie();">

	<div id="container">
		<div id="logo">
		<font color="gold">Cerca</font>Trova
		</div>
		<div id="Media">
			<div class="insta">
				<a href="https://www.instagram.com/" target="_blank" class="tilelink" title="Nasz Instagram" /><i class="icon-instagram"></i>
			</div>
			<div class="snap">
				<a href="https://www.snapchat.com/" target="_blank" class="tilelink" title="Nasz Snapchat"/><i class="icon-snapchat-ghost"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" title="Nasz Facebook"/><i class="icon-facebook"></a></i>
			</div>
		</div>
		<div id="headstoper">
		Witaj użytkowniku!
		</div>
		
		<div id="phpline">
			<div id="optionL">
				<div id="zegar">00:00:00</div>
				<center><a class="rej" href="rejestracja.php" title="Tu założysz swoje konto!">Rejestracja</a></center>
				<center><font size="4">Załóż nowe darmowe konto online!</font></center>
			</div>
			<div id="optionR">
				<font color="gold" size="7">Zaloguj</font> się lub <font color="gold" size="7">Zarejestruj</font>
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
		</div>
		<div id="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est. Duis id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem. Nunc non massa 
		sit amet ligula posuere lacinia ut ac neque.
		Maecenas ornare diam sed lacinia pulvinar. 
		Phasellus ultrices purus ut justo iaculis ultrices.</p>

		<p>In consectetur id eros eget luctus. Nam 
		porttitor odio quam, a ornare ante posuere at. 
		Nunc justo tellus, laoreet ac pretium in, aliquet 
		at leo. Lorem ipsum dolor sit amet, consectetur
		adipiscing elit. Curabitur at luctus magna. Ut sit 
		amet orci mauris. Duis in augue ullamcorper,
		elementum purus vel, iaculis felis. Aliquam at 
		purus erat.</p>
		
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est. Duis id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem. Nunc non massa 
		sit amet ligula posuere lacinia ut ac neque.
		Maecenas ornare diam sed lacinia pulvinar. 
		Phasellus ultrices purus ut justo iaculis ultrices.</p>

		<p>In consectetur id eros eget luctus. Nam 
		porttitor odio quam, a ornare ante posuere at. 
		Nunc justo tellus, laoreet ac pretium in, aliquet 
		at leo. Lorem ipsum dolor sit amet, consectetur
		adipiscing elit. Curabitur at luctus magna. Ut sit 
		amet orci mauris. Duis in augue ullamcorper,
		elementum purus vel, iaculis felis. Aliquam at 
		purus erat.</p>
		</div>
		
		<div id="stopka">
		Wszelkie Prawa Zastrzeżone &copy Stronę wykonał Konrad Nowak
		</div>
		
	</div>
</body>
</html>
