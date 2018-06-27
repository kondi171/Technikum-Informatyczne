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
										$potwierdzenie="Zostałeś zarejestrowany";
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
	<title>The part of shadow</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE-edge,chrome=1" />
	<link rel="stylesheet" href="css/fontello.css" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Keania+One" rel="stylesheet">
	<link rel="stylesheet" href="style/style2.css" type="text/css" />
	<script src="timer.js"></script>
	<style>
		.error
		{
			color:red;
			margin-top: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>

<body onload="odliczanie()">
	
	<div id="container">
	<div id="logo">
		The Part of Shadow
		</div>
		<div id="headstoper">
				Zarejestruj się aby móc swobodnie korzystać z naszych usług!
		</div>
		
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
		<?php
		if(isset($potwierdzenie))
		{
		echo $potwierdzenie;
		}
		?>
		<div id="zegar">12:00:00</div>
	</center>
</form>

<div class="socials">
			
				<div class="socialdivs">
					<div class="fb">
						<a href="http://www.facebook.com" target="_blank" class="tilelink" />
						<i class="icon-facebook"></a></i>
					</div>
				<div class="yt">
					<a href="http://www.youtube.com" target="_blank" class="tilelink" />
					<i class="icon-youtube"></a></i>
				</div>
				<div class="tw">
					<a href="http://www.twitter.com" target="_blank" class="tilelink" />
					<i class="icon-twitter"></a></i>
				</div>
				<div style="clear:both;"></div>
	
				</div>
				</div>
		<div id="footer">Wszelkie prawa Zastrzeżone &copy Czerwiec 2017</div>
	</div>
</body>
</html>