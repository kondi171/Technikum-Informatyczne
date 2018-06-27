<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);
$id=$_SESSION['towar'];
$wynik = $link -> query ("select * from towar where id='".$id."'") or die ("blad w zapytaniu!");
if(isset($_POST['opinia']))
{
	while ($rek = $wynik ->fetch_assoc())
	{
		$nazwa=$rek['nazwa'];
		$sprzedawca=$rek['sprzedawca'];
}
	$tab=$nazwa."_".$sprzedawca;
	$log=$_SESSION['logg'];
	$opinia=$_POST['opinia'];
	$data=date('Y-m-d');
	$wstaw = $link->query("insert into ".$tab." (uzytkownik, komentarz, data) values ('$log', '$opinia', '$data')")
or die("Blad w zapytaniu3");
	echo '<meta http-equiv="Refresh" content="0 url=kup.php" >';
}
else
{
	echo "<script language='javascript'>alert('Twoja opinia nie jest za ciekawa');</script>";
	echo '<meta http-equiv="Refresh" content="0 url=kup.php" >';}
?>