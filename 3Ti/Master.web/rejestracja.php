<?php

	session_start();
	
	if(isset($_POST['email']))
		{
	
			$wszystko_ok=true;
			
		
			$nick=$_POST['nick'];
			
	
			
			if((strlen($nick)<3) || (strlen($nick)>20))
				{
					$wszystko_ok=false;
					$_SESSION['e_nick']="Nick musi posiadac od 3 do 20 znakow";
				}
				
			if(ctype_alnum($nick)==false)
				{
					$wszystko_ok=false;
					$_SESSION['e_nick']="Nick moze skladac sie tylko z liter i cyfr (bez polskich znakow)";
				}
				
				
				$email = $_POST['email'];
				$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
				if((filter_var($emailB,FILTER_VALIDATE_EMAIL)==false)|| ($emailB!=$email))
				{
					$wszystko_ok=false;
					$_SESSION['e_email']="Podaj poprawny adres e-mail";
				}
				
		
				$haslo1 =$_POST['haslo1'];
				$haslo2 =$_POST['haslo2'];
				if((strlen($haslo1)<8) || (strlen($haslo1)>20))
				{
					$wszystko_ok=false;
					$_SESSION['e_haslo']="Haslo musi posiadac od 8 do 20 znakow";
				}
				if($haslo1!=$haslo2)
				{
					$wszystko_ok=false;
					$_SESSION['e_haslo']="Podane hasla sa rozne";
				}
				
				$haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);
				
				 
					require_once"connect.php";
					
					mysqli_report(MYSQLI_REPORT_STRICT);
					
					try
					{
						$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
						if ($polaczenie->connect_errno!=0)
							{
								throw new Exception(mysqli_connect_errno());
							}
							else
							{
						
								$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
								
								if(!$rezultat) throw new Exception($polaczenie->error);
								
								$ile_takich_maili = $rezultat->num_rows;
								if($ile_takich_maili>0)
								{
									$wszystko_ok=false;
									$_SESSION['e_email']="Istnieje juz konto przypisane do tego adresu e-mail";
								}
								
									$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE user='$nick'");
								
								if(!$rezultat) throw new Exception($polaczenie->error);
								
								$ile_takich_nickow = $rezultat->num_rows;
								if($ile_takich_nickow>0)
								{
									$wszystko_ok=false;
									$_SESSION['e_nick']="Istnieje juz taki nick, wybierz inny";
								}
								
								if($wszystko_ok==true)
								{
									
							if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$nick', '$haslo_hash', '$email')"))
									{
										$_SESSION['udanarejestracja']=true;
										header('Location: witamy.php');
									}
									else
									{
										if(!$rezultat) throw new Exception($polaczenie->error);
									}
								}
								
								$polaczenie->close();
							}
					}
					catch(Exception $e)
					{
						echo'<span style="color:red;">Blad serwera! Przepraszamy za niedogodnosci i prosimy o rejestracje w innym terminie</span>';
						//echo'<br />Informacja developerska: '.$e;
					}
		}
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="UTF-8" />
	<title>Master.web</title>
	<meta name="description" content="Lubisz programować? uważasz że jesteś w tym dobry ale brak ci odpowiednich materiałów do nauki? zajrzyj do nas! napewno coś dla ciebie znajdziemy!" />
	<meta name="keywords" content="JS,PHP, programowanie" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="style/style.css" type="text/css" />
	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>

<body>
	
	<div id="container">
		<div id="logo">
		<font color="darkred">Master</font>.Web
		</div>
		<div id="content">
<form method="POST">
	<center>
	Nickname:<br /> <input type="text" name="nick"/><br />
	
	<?php
	
		if(isset($_SESSION['e_nick']))
			{
				echo '<div class="error">'.$_SESSION['e_nick'].'</div>';
				unset($_SESSION['e_nick']);
			}
	?>
	
	E-mail:<br /> <input type="text" name="email"/><br />
	<?php
	
		if(isset($_SESSION['e_email']))
			{
				echo '<div class="error">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
	?>
	Twoje Haslo:<br /> <input type="password" name="haslo1"/><br />
	Powtorz Haslo:<br /> <input type="password" name="haslo2"/><br />
	<?php
	
		if(isset($_SESSION['e_haslo']))
			{
				echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}
	?>
	<br><br>
		<input type="Submit" value="Zarejestruj sie!"/><br>
	<br><br>
	</center>
</form>
		<div id="zawartosc">
		<p>Master.Web is a cloud-based web development platform that was first developed and popularized
		by the Israeli company also called Wix. It allows users to create HTML5 web sites and mobile sites 
		through the use of online drag and drop tools. Users may add functionality such as social plug-ins,
		e-commerce, contact forms, e-mail marketing, and community forums to their web sites using a variet
		y of Wix-developed and third-party applications.</p>

		<p>Wix is built on a freemium business model, earning its revenues through premium upgrades. 
		Users must purchase premium packages in order to connect their sites to their own domains, 
		remove Wix ads, add e-commerce capabilities, or buy extra data storage and bandwidth.</p>
		</div>
		<div id="footer">
		Master.Web &copy Piotr Lisowski Czerwiec 2017
		</div>
	
	
	
	
	
	</div>
</body>
</html>