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
	<title>Cerca Trova</title>
	<meta name="description" content="Jesteś fanem Cerca Trova? wejdź i kup nasz produkt. Specjalnie dla fanów" />
	<meta name="keywords" content="Sklep, Koszulki, Kubki, Cerca Trova" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="style/style2.css" rel="stylesheet" type="text/css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="timer.js"></script>
	<script src="jquery.scrollTomin.js"></script>
	<script>
		jQuery(function($)
		{
			$.scrollto(0);
			
				$('.scrollup').click(function() { $.scrollTo($('body'), 1000); });
		}
		);
		
		$(window).scroll(function()
		{
			if($(this).scrollTop()>300) $('.scrollup').fadeIn();
			else $('.scrollup').fadeOut();		
		}
		);
	
	
	</script>
</head>

<body onload="odliczanie();" >

	<div class="container">
		<a href="#" class="order"></a>
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
		</div>
		<div id="headstoper">
					<ol>
						<li><a href="home.php" title="Strona Główna serwisu Cerca Trova">Strona Główna</a></li>
						<li><a href="Rejestracja.php" target="_blank" title="Tutaj się zarejestrujesz!">Rejestracja</a></li>	
						<li><a href="Regulamin.html" target="_blank" title="Przeczytaj regulamin aby móc korzystaćz naszych usług!">Regulamin</a></li>
						<li><a href="Sklep.php" title="Zamów nasze produkty!">Sklep</a></li>
						<li><a href="opinie.php" title="Opinie naszych użytkowników">Opinie</a></li>
						<li><a href="reklamacje.php" title="Możliwość zwrotu towaru w 14 dni!">Reklamacje</a></li>
						<li><a href="poczta.php" title="Skontaktuj się z innymi użytkownikami">Poczta</a></li>
						<li><a href="pomoc.php" title="Potrzebujesz pomocy?">Pomoc</a></li>
						<li><a href="Portfolio/linkowanie.html" target="_blank" title="Zapoznaj sie z moimi kwalifikacjami">O Autorze</a></li>
						
						<?php
						echo '<li><a href="logout.php" title="Wyloguj się z serwisu">Wyloguj się</a></li>';
						?>
					</ol>		
		</div>
		<div class="container">
	
<?php
 $nazwa_pliku = 'zamowienie.txt';
 $plik = fopen($nazwa_pliku, 'r');
 $dane = fread($plik,filesize( $nazwa_pliku));
 fclose($plik);
 echo(nl2br($dane));
 ?>
 
 
 	</div>
	<div id="pause">
			<div id="img">
			<img src="pause2.png"/>
			</div>
			<div id="zegar">12:00:00</div>
	</div>
	<script src="jquery-3.2.1.min.js" ></script>
	
<script>

	$(document).ready(function() {
	var NavY = $('#headstoper').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('#headstoper').addClass('sticky');
	} else {
		$('#headstoper').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>
</body>
</html>

 