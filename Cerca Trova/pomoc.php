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
		<div id="content">

<center>

<dl>
<dt><strong><font size="5">1.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></font></dt>
<font color="gold"><dd>Pellentesque egestas nulla sed cursus sagittis.</dd></font>
<dt><strong><font size="5">2.Donec aliquam justo vel odio egestas pellentesque.</strong></font></dt>
<font color="gold"><dd>Praesent sagittis est viverra augue vulputate, eu tincidunt justo efficitur.</dd></font>
<dt><strong><font size="5">Aenean laoreet augue sit amet risus pharetra, eu suscipit ex dignissim.</strong></font></dt>
<font color="gold"><dd>Aenean quis risus rutrum, dignissim tortor eget, pharetra purus.</dd></font>
<dt><strong><font size="5">4.In et erat lobortis, fermentum lectus a, viverra lacus.</strong></font></dt>
<font color="gold"><dd>Nunc cursus augue nec ligula malesuada, sed porta arcu elementum.</dd></font>
<dt><strong><font size="5">5.Nam sed elit lobortis, dictum ex tempor, suscipit justo.</strong></font></dt>
<font color="gold"><dd>Aenean id neque eleifend ipsum viverra blandit.</dd></font>
<dt><strong><font size="5">6.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></font></dt>
<font color="gold"><dd>Pellentesque egestas nulla sed cursus sagittis.</dd></font>
<dt><strong><font size="5">7.In et erat lobortis, fermentum lectus a, viverra lacus.</strong></font></dt>
<font color="gold"><dd>Nunc cursus augue nec ligula malesuada, sed porta arcu elementum.</dd></font>

</dl>
Twojego pytania nie ma na liście? Napisz do nas! w ciągu 24h udzielimy ci odpowiedzi!</br></br>
<form action="" method="POST">
<textarea name="pomoc" cols="40" rows="10">Tutaj wpisz tekst...</textarea></br>
<input type="submit" value="Wyslij">
</form>
		</div>
		<?php
$serwer = "localhost";
$login = "root";
$haslo = "";
$db_name = "cerca trova";
$link = new mysqli ($serwer, $login, $haslo, $db_name);

if(isset($_POST['pomoc']))
{
	$pomoc=$_POST['pomoc'];
	$user=$_SESSION['user'];
	
	$wstaw = $link->query("insert into pomoc (user,trpo) values ('$user', '$pomoc')")
or die("Blad w zapytaniu");

	echo "</br> Wiadomość wysłana! Odpowiedź uzyskasz jako wiadomość w poczcie w ciągu 24h.<br/> ";
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
