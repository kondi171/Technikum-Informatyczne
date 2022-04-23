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
	<title>ThrustMaster</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada" rel="stylesheet">
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="timer.js"></script>

</head>

<body onload="odliczanie()">
	<div id="wrapper">
		<div id="logo">
		<font color="maroon">Thrust </font>Master
		</div>
		<div id="menu">
		
			<div class="optionL"><a href="glowna.php">Strona główna</a></div>
			<div class="optionL"><a href="rejestracja.php">Rejestracja</a></div>
			<div class="optionL"><a href="Opinie.php">Opinie</a></div>
			<div class="optionL"><a href="Sklep.php">Sklep</a></div>
				<?php
						echo '<div class="optionL"><a href="logout.php">Wyloguj się</a></div>';
				?>
			<div id="zegar">00:00:00</div>
		</div>
		
<center>
<div id="opinia">
<strong><font size="7">Twoja opinia</strong></font><br/>

<form action="" method="POST">

<textarea cols="40" rows="15" name="opinia">Tu wpisz tekst...</textarea></br>

	</br>
<input type="submit" value="Wyslij">

</form>
<?php
$serwer = "localhost";
$login = "root";
$haslo = "";
$baza = "fafara";
$link = new mysqli ($serwer, $login, $haslo, $baza);


if(isset($_POST['opinia']))
{
	$opinia=$_POST['opinia'];
	
	
	$link -> query ("INSERT INTO opinie (login,trescop) VALUES ('$login','$opinia')") or die ("blad w zapytaniu!");
	
	echo "</br> Opinia zostala wyslana. Dziekujemy!";
}

?>
<br><br>
<br><br>
</div>
</center>
		<div class="socials">
				<div class="socialdivs">
				<center>
				<div class="yt">
					<a href="http://www.youtube.com" target="_blank" class="tilelink" />
					<i class="icon-youtube"></a></i>
				</div>
					<div class="fb">
						<a href="http://www.facebook.com" target="_blank" class="tilelink" />
						<i class="icon-facebook"></a></i>
					</div>
					<div class="gplus">
					<a href="http://www.googleplus.com" target="_blank" class="tilelink" />
					<i class="icon-googleplus-rect"></a></i>
				</div>
					<div class="tw">
					<a href="http://www.twitter.com" target="_blank" class="tilelink" />
					<i class="icon-twitter"></a></i>
				</div>
				</center>
				<div style="clear:both;"></div>
			
				</div>
				</div>
				
		<div id="footer"> Wszelkie prawa zastrżeżone &copy Najlepsze na rynku konsole! </div>

	
	
</div>
</body>
</html>