<?php
session_start();
	$p=0;
	if(isset($_SESSION['id']))
	{$p=$_SESSION['id'];
	}
	if($p==0)
	{
		header('Location: index.php');
	}
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$log=$_SESSION['logg'];
$tresc=$_POST['tresc'];
$adres=$_POST['nazwa'];
$odebrane="odebrane_".$adres;
$wyslane="wyslane_".$log;
$data=date('Y-m-d');
$wstaw = $link->query("insert into ".$wyslane." (uzytkownik,data,tresc) values ('$adres', '$data', '$tresc')")
or die("Blad w zapytaniu1");
$wstaw = $link->query("insert into ".$odebrane." (uzytkownik,data,tresc) values ('$log', '$data', '$tresc')")
or die("Blad w zapytaniu2");
echo '<meta http-equiv="Refresh" content="0 url=wyslane.php" >';