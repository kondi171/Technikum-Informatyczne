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
	
</head>

<body>
	
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
		
		<center>
		
		<?php
	
	$samsung = $_POST["samsung"];
	$sony = $_POST["sony"];
	
	$suma = $sony *3200.00 + $samsung *3000.00 ;
	
echo<<<END

	<h2>Zamówiłeś</h2>
	
	<table border="1"cellpadding="10" cellspacing="0">
	<tr>
		<td>Samsung</td><td>$samsung</td>
	</tr>
	<tr>
		<td>Sony</td><td>$sony</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
		</table>
	<br ><a href="sklep.php">Potrzeba ci czegoś jeszcze?</a>
END;
?>

</center>
	
	
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

	</div>
</body>
</html>
