<?php

	session_start();
	
	if (!isset($_SESSION['udanarejestracja']))
	{
		header('Location: index.php');
		exit();
	}
	else
	{
		unset($_SESSION['udanarejestracja']);
	}
	
	//Usuwanie zmiennych pamiętających wartości wpisane do formularza
	if (isset($_SESSION['fr_nick'])) unset($_SESSION['fr_nick']);
	if (isset($_SESSION['fr_email'])) unset($_SESSION['fr_email']);
	if (isset($_SESSION['fr_haslo1'])) unset($_SESSION['fr_haslo1']);
	if (isset($_SESSION['fr_haslo2'])) unset($_SESSION['fr_haslo2']);
	if (isset($_SESSION['fr_regulamin'])) unset($_SESSION['fr_regulamin']);
	
	//Usuwanie błędów rejestracji
	if (isset($_SESSION['e_nick'])) unset($_SESSION['e_nick']);
	if (isset($_SESSION['e_email'])) unset($_SESSION['e_email']);
	if (isset($_SESSION['e_haslo'])) unset($_SESSION['e_haslo']);
	if (isset($_SESSION['e_regulamin'])) unset($_SESSION['e_regulamin']);
	if (isset($_SESSION['e_bot'])) unset($_SESSION['e_bot']);
	
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Cerca Trova - Witamy!</title>
	<link href="style/regulamin.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
</head>

<body>
<center><h1><font color="gold">Cerca </font>Trova</h1></center>
<div id="container2">
	
	Dziękujemy za rejestrację w serwisie! Możesz już zalogować się na swoje konto!<br /><br />
	
	<a href="index.php">Zaloguj się na swoje konto!</a>
	<br /><br />
</div>
<div id="footer2">
<div id="media">
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
<div id="content">Strona Rejestracyjna do Serwisu Cerca trova. Wszelkie prawa zastrzeżone &copy Wykonawca: Webdeveloper Konrad Nowak. 2017</div>
</div>
</body>
</html>