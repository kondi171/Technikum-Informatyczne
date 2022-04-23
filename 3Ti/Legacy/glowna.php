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
	<title>The part of shadow</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Keania+One" rel="stylesheet">
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="czas.js"></script>
</head>

<body onload="odliczanie()">
	
	<div id="container">
	<div id="logo">
		The Part of Shadow
		</div>
		<div id="headstoper">
		<ol>
						<li><a href="glowna.php">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank">Rejestracja</a></li>	
						<li><a href="opinie.php">Opinie</a></li>
						<li><a href="Sklep.php">Sklep</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
		</div>
		<div id="menu">
			
			<div class="optionL"><a href="glowna.php">Strona główna</a></div>
			<div class="optionL"><a href="rejestracja.php" target="_blank">Rejestracja</a></div>
			<div class="optionL"><a href="Opinie.php">Opinie</a></div>
			<div class="optionL"><a href="Sklep.php">Sklep</a></div>
				<?php
						echo '<div class="optionL"><a href="logout.php">Wyloguj się</a></div>';
				?>
		</div>
		<div id="content">
		<br>
		<div id="zegar"></div>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing
		elit. Morbi at libero eu risus pulvinar accumsan eu 
		nec est. Duis id metus eu leo feugiat maximus et 
		nec nulla. Donec lorem metus, congue et velit eu,
		dignissim pellentesque libero. Cras at felis sed ligula
		venenatis pellentesque eu ut sem. Nunc non massa 
		sit amet ligula posuere lacinia ut ac neque.
		Maecenas ornare diam sed lacinia pulvinar. 
		Phasellus ultrices purus ut justo iaculis ultrices.</p>

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
	

	<div class="socials">
			
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
				<div style="clear:both;"></div>
	
				</div>
				</div>
	<div id="footer">Wszelkie prawa Zastrzeżone &copy Czerwiec 2017</div>
	</div>

	
</body>
</html>
