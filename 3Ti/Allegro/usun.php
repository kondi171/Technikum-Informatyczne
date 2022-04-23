<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$log=$_SESSION['logg'];
$odebrane="odebrane_".$log;
$wynik= $link -> query ("DELETE FROM ".$odebrane." WHERE id='".$_POST['id']."'");
echo '<meta http-equiv="Refresh" content="0 url=poczta.php" >';