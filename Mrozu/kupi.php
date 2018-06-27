<?php
	
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$id=$_SESSION['towar'];
//echo $id;
$wynik = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
while ($rek = $wynik ->fetch_assoc())
{$ilosc=$rek['ilosc'];
$cena=$rek['cena'];
$nazwa=$rek['nazwa'];
$sprzedawca=$rek['sprzedawca'];
}
if($ilosc<$_POST['ile'])
{echo "<script language='javascript'>alert('Nie mamy tyle towaru');</script>";
	echo '<meta http-equiv="Refresh" content="0 url=Sklep.php" >';}
	else{
$log=$_SESSION['logg'];
$data=date('Y-m-d');
$towar=$nazwa.'_'.$sprzedawca.'_sprzedaz';
$ile=$ilosc-$_POST['ile'];
$i=$_POST['ile'];
$wartosc=$i*$cena;
$zwrot=$nazwa.'_'.$sprzedawca.'_zwrot';
$wynik =$link -> query ("UPDATE towar SET ilosc='".$ile."' WHERE id='".$id."'")or die ("blad w zapytaniu1");
$wstaw = $link->query("insert into ".$towar." (data, uzytkownik, ilosc, wartosc) values ('$data', '$log','$i', '$wartosc' )")
or die("Blad w zapytaniu3");	
	header("Location: Sklep.php");
	}





?>