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
	<title>Dziobak Inc.</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="timer.js"></script>
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	
</head>

<body onload="odliczanie()">
<div id="pojemnik">
	<div id="logo">Dziobak Inc.</div>
	<div id="zegar">00:00:00</div>
	<div id="top">
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
	<div id="left">
		<div id="pas">
			<center>
<table width="50%"  cellpadding="4">
<tr> <td colspan="2"> <h1> <center> Cennik  </center> </h1> </td> </tr>
<tr>
<td><b>Herbata</b></td><td><b>6.00zł</b></td>
</tr>

<tr>
<td><b>Kawa</b></td><td><b>9.00zł</b></td>
</tr>
</table>
</center>
		</div>
		
		<div id="Media">
			<div class="yt">
				<a href="https://www.youtube.com" target="_blank" class="tilelink"  /><i class="icon-youtube"></i>
			</div>
			<div class="tw">
				<a href="https://twitter.com" target="_blank" class="tilelink" /><i class="icon-twitter"></a></i>
			</div>
			<div class="fb">
				<a href="http://www.facebook.com" target="_blank" class="tilelink" /><i class="icon-facebook"></a></i>
			</div>
		</div>
		</div>
		<div id="content">
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		Donec metus mi, gravida vel posuere ut, maximus at libero.
		Suspendisse potenti. Cras at scelerisque mi, non semper tellus. 
		In finibus molestie urna. Fusce ac rutrum elit. Donec consectetur 
		aliquam libero, in congue nibh blandit quis. Phasellus tincidunt 
		tincidunt ligula, quis dapibus mauris pellentesque et. 
		Curabitur fringilla lorem metus, condimentum semper felis c
		ondimentum sed. Duis eros urna, hendrerit in interdum faucibus, 
		iaculis ac erat. Aenean fringilla volutpat porta. Cras tristique diam
		ut aliquet scelerisque. Duis quam felis, commodo quis lorem sed,
		finibus tempor ante. Mauris vel massa odio. 
		Vestibulum ac.</p>

		</div>
		<div id="stopka">
		Dziobak 2k17 &copy 
		</div>
		
		
		
	</div>


</body>
</html>
