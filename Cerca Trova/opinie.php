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
			echo "<b>Witaj ".$_SESSION['user']."!</b>";
		?>
<center>

<strong><font size="7" color="gold">Opinie</strong></font><br/>
<font size="4">Wspomóż nas swoją opinią na temat serwisu! To cię nic nie kosztuje a nas <font color="gold" size="6">Motywuje!</font></font></br><br/>
<form action="" method="POST">

<textarea cols="40" rows="15" name="opinia" >Oceń nas! Wady zalety, co się spodobało co nie lub co można poprawić :) </textarea></br>

	</br>
<input type="submit" value="Wyslij">

</form>
<?php
$serwer = "localhost";
$login = "root";
$haslo = "";
$baza = "cerca trova";
$link = new mysqli ($serwer, $login, $haslo, $baza);


if(isset($_POST['opinia']))
{
	$opinia=$_POST['opinia'];
	$user=$_SESSION['user'];
	
	
	$link -> query ("INSERT INTO opinie (login,trop) VALUES ('$user','$opinia')") or die ("blad w zapytaniu!");
	
	echo "</br> Opinia zostala wyslana. Dziekujemy!";
}

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
