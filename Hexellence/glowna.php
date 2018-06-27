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
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	var numer = Math.floor(Math.random()*1)+1;
		
		var timer1 =0;
		var timer2 =0;
		
		function ustawslajd(nrslajdu)
			{
				clearTimeout(timer1);
				clearTimeout(timer2);
				numer = nrslajdu -1;
				
				schowaj();
				setTimeout("slajd()", 1000);
			}
			
		function schowaj()
		{
			$("#slider").fadeOut(500);
		}
		function slajd()
		{
			numer++; if(numer>1) numer=1;
		
			var plik ="<img src=\"img/slajd"+ numer + ".jpg\"/>";
			
			document.getElementById("slider").innerHTML = plik;
			$("#slider").fadeIn(1000);
			
			
			timer1= setTimeout("slajd()", 5000);
			timer2= setTimeout("schowaj()",4000);
			}
	</script>
</head>

<body onload="slajd();">
	
	<div id="container">
	
		<div id="logo">
		Hexellence
		</div>
		<div id="top">.</div>
		<div id="content">
			<div id="slider"></div>
		</div>
		<div id="menu">
		<center>
			
			<div class="optionR"><a href="glowna.php" class="optionR">Strona główna</a></div>
			<div class="optionR"><a href="Sklep.php" class="optionR">Sklep</a></div>
			<div class="optionR"><a href="rejestracja.php" target="_blank" class="optionR">Rejestracja</a></div>
			<div class="optionR"><a href="Opinie.php" class="optionR">Reklamacja</a></div>
				<?php
						echo '<div class="optionR"><a href="logout.php" class="optionR">Wyloguj się</a></div>';
				?>
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
