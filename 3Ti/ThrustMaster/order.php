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
		<div id="content">
			<center>
<table border="4px solid grey " width="50%"  cellpadding="4">
<tr> <td colspan="2"> <h1> <center> Cennik  </center> </h1> </td> </tr>
<tr>
<td><b>Procesor</b></td><td><b>1000zł</b></td>
</tr>

<tr>
<td><b>Karta</b></td><td><b>1300zł</b></td>
</tr>
</table>
</center>
		</div>
		<center>
		
		<?php
	
	$xbox = $_POST["xbox"];
	$ps = $_POST["ps"];
	
	$suma = $ps *1500.00 + $xbox *1000.00 ;
	
echo<<<END

	<h2>Zamówiłeś</h2>
	
	<table border="1"cellpadding="10" cellspacing="0">
	<tr>
		<td>Xbox One</td><td>$xbox</td>
	</tr>
	<tr>
		<td>PS4</td><td>$ps</td>
	</tr>
	<tr>
		<td>SUMA</td><td>$suma PLN</td>
	</tr>
		</table>
	<br ><a href="sklep.php">Powróć do zakupów</a>
END;
?>
<br><br>
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
