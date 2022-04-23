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
	<title>Future Technology</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<script src="timer.js"></script>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
	
		var numer = Math.floor(Math.random()*4)+1;
		
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
			numer++; if(numer>4) numer=1;
		
			var plik ="<img src=\"img/slajd"+ numer + ".jpg\"/>";
			
			document.getElementById("slider").innerHTML = plik;
			$("#slider").fadeIn(1000);
			
			
			timer1= setTimeout("slajd()", 5000);
			timer2= setTimeout("schowaj()",4000);
			}
	</script>
	
</head>

<body onload="odliczanie(); slajd()">
	<div class="wrapper">
		<div id="logo">Future Technology &#174;</div>
	</div>
		<div id="headstopper">
		
					<ol>
						<div id="zegar">12:00:00</div>
						<li><a href="glowna.php">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank">Rejestracja</a></li>	
						<li><a href="opinie.php">Opinie</a></li>
						<li><a href="Sklep.php">Sklep</a></li>
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
		
		</div>
	<div class="wrapper">
		<div id="content">
		
				<p>Firmę Intel założyli 18 lipca 1968 Gordon E. Moore oraz Robert 
				Noyce, a nazwa pochodzi od słów Integrated Electronics. Wkrótce 
				dołączył do nich Andrew Grove, późniejszy wieloletni prezes firmy. 
				Siedziba główna znajduje się w Santa Clara w stanie Kalifornia w Stanach
				Zjednoczonych. Oprócz mikroprocesorów wytwarza między innymi płyty
				główne, chipsety do płyt głównych, zintegrowane układy graficzne,
				pamięci Flash, mikrokontrolery, procesory do systemów wbudowanych
				(embedded), sprzęt sieciowy (np. karty sieciowe, chipsety WiFi i WiMAX),
				systemy zarządzania pamięcią masową (SAN, NAS, DAS)[5]. O sile firmy
				stanowią zdolność projektowania zaawansowanych procesorów, 
				których kolejne generacje zwiększają swoją moc obliczeniową 
				zgodnie z prawem Moore'a oraz bardzo wysoki poziom zdolności
				produkcyjnych. Początkowo znana wśród inżynierów i technologów,
				dzięki przeprowadzonej w latach 90. udanej kampanii marketingowej 
				"Intel Inside", sama firma oraz marka procesorów Pentium stały się 
				powszechnie znane.<p>

			
				</div>
		</div>
		
			<div id="slider"></div>
		
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
