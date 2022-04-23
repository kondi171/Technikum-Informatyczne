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
	<title>RetroMax</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="zegarek.js"></script>
</head>

<body onload="odliczanie()">
	
	<div id="container">
	
		<div id="logo">
		RetroMax
		</div>


		<div id="social">
			<div class="gplus">
				<a href="https://www.googleplus.com/" target="_blank" class="tilelink"/><i class="icon-googleplus-rect"></i>
			</div>
			<div class="tw">
				<a href="https://www.twitter.com/" target="_blank" class="tilelink"/><i class="icon-twitter"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" title="Nasz Facebook"/><i class="icon-facebook"></a></i>
			</div>
		</div>
		<div id="menu">
					<div class="top"><a href="glowna.php" class="menu">Home</a></div>
					<div class="top"><a href="rejestracja.php" class="menu" target="_blank">Rejestracja</a></div>
					<div class="top"><a href="opinie.php" class="menu">Opinie</a></div>
					<div class="top"><a href="sklep.php" class="menu">Sklep</a></div>
					<?PHP
					echo '<div class="top"><a href="logout.php" class="menu">Wyloguj się</a></div> ';
					?>
		
		
		
<center>
<div id="opinia">
<br><br>
<strong><font size="7">Twoja opinia nas reklamuje !</strong></font><br/>
<br>
<form action="" method="POST">

<textarea cols="40" rows="15" name="opinia">Tu wpisz tekst...</textarea></br>

	</br>
<input type="submit" value="Wyslij">
<br><br><br>
</form>
<?php
$serwer = "localhost";
$login = "root";
$haslo = "";
$baza = "retromax";
$link = new mysqli ($serwer, $login, $haslo, $baza);


if(isset($_POST['opinia']))
{
	$opinia=$_POST['opinia'];
	
	
	$link -> query ("INSERT INTO opinie (login,trescop) VALUES ('$login','$opinia')") or die ("blad w zapytaniu!");
	
	echo '</br><font color="red">Opinia zostala wyslana. Dziekujemy!</font><br><br>';
}

?>

</div>
</center>
	<div id="stopka">
		<div id="tekst">Webdeveloperska sieć firmowa.</div>
		<div id="zegar">111</div>
	</div>
	</div>
</body>
</html>
