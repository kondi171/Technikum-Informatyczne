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
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="timer.js"></script>
	<script type="text/javascript">
	
		var numer = Math.floor(Math.random()*5)+1;
		
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

<body onload='odliczanie();slajd();'>

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
			echo "<b>Witaj ".$_SESSION['user']."!</b>";
		?>
		<div id="phpline">
			<div id="optionL">
			<center><table bgcolor="grey" border="6"  width="40%"  cellpadding="6">
<tr><td colspan="2"><h1><center>Cennik</center></h1></td></tr>
<tr>
<td><b>Koszulka</b></td><td>29.99PLN<tr/>
</tr>

<tr>
<td><b>Kubek</b></td><td>9.99PLN</td>
</tr><tr>

<td><b>Poduszka</b></td><td>19.29PLN</td>
</tr>

<tr>
<td><b>Czapka</b></td><td>40.00PLN</td>
</tr>

<tr>
<td colspan="2"><i>Cennik uwzględnia VAT</i></td>
</tr>
</table>
</center>
			</div>
	<div id="optionR">
	<h2>Zamówienie online</h2>
	<form action="order.php" method="post">
		Ile Koszulek(29.99PLN/szt):
		<input type="text" name="koszulek"/>
	
			<br /><br />
	
		Ile Kubków(9.99PLN/szt):
		<input type="text" name="kubkow"/>
		
			<br /><br />
			
		Ile Poduszek(19.29PLN/szt):
		<input type="text" name="poduszek"/>
	
			<br /><br />
	
		Ile Czapek(40.00PLN/szt):
	
		<input type="text" name="czapek"/>
		
			<br /><br />
			
		<input type="submit" value="Wyślij Zamówienie" />
	</form>
	</div>
		</div>
		<div id="content">
			<div id="ss">
				<div id="slider"></div>
					<div id="panel">
					<h1>Panel Administratora </h1>
					<form action="pobierzz.php" method="post">
					<input  type="submit" value="Pobierz zamowienia" onclick="pobierzz.php" ></a>
					</div>
			</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum iaculis pretium tincidunt.
				Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere 
				vitae urna ac egestas. Pellentesque venenatis lectus ac mauris commodo auctor ut sodales neque. 
				Suspendisse condimentum metus in felis porttitor consectetur. Aliquam magna arcu, suscipit nec nibh non,
				suscipit volutpat elit. Etiam interdum magna neque, malesuada ornare risus aliquet sit amet. Quisque ac
				urna iaculis, dapibus libero sodales, blandit purus. Nam ac laoreet erat, at lacinia urna.</p>
			
	<?php
	if(isset($_SESSION['blad']))
		echo $_SESSION['blad'];
?>
	</div>
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
