<?php
session_start();
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);

$name = $_POST['name'];
$log=$_SESSION['logg'];
if(isset($_FILES['plik']))
{$fota = $_FILES['plik']['tmp_name'];
$f=1;
if ($_FILES['plik']['error'] > 0)
{
	if($_FILES['plik']['error']==4)
	{$f=0;}
	else
	{echo "<script language='javascript'>alert('Zdjęcie jest za dużewgraj inne albo wcale');</script>";
header('Location: sprzedaz.php');
exit();
}}
else{
$fi = $_FILES['plik'];
IF(isset($fi['name']))
{
	$adr = 'towary/' .$name.'_'.$log. '.jpg';
	$open = fopen ("$adr","a+");
	move_uploaded_file($fi['tmp_name'], $adr);
	fclose($open);
}



}



$cena= $_POST['cena'];
$ile=$_POST['ile'];
$nazwa=$name.'_'.$log;
$sp=$nazwa.'_sprzedaz';
//echo $log." ".$name." ".$cena." ".$f;
$dodaj = $link->query("insert into towar (nazwa, sprzedawca, cena, ikona, ilosc) values ('$name', '$log', '$cena', '$f', '$ile')")
or die("Błąd w zapytaniu8!");
$wstaw = $link->query("create table $nazwa (id int primary key auto_increment, uzytkownik varchar (50), komentarz varchar(50), data date)")
or die("Blad w zapytaniu1");
$wstaw = $link->query("create table $sp (id int primary key auto_increment, data date, uzytkownik varchar (50), ilosc int, wartosc float)")
or die("Blad w zapytaniu2");
echo "<script language='javascript'>alert('Towar został poprawnie umieszczony w naszej bazie dziękujemy');</script>";
echo '<meta http-equiv="Refresh" content="0 url=sprzedaz.php" >';

/*echo $_FILES['plik']['type'];
echo "<br>";
// wyświetlanie rozmiaru
echo $_FILES['plik']['size'];
echo "<br>";
// wyświetlanie nazwy pliku
echo $_FILES['plik']['name'];
echo "<br>";
// wyświetlanie nazwy tymczasowej
echo $_FILES['plik']['tmp_name'];
echo "<br>";
// wyświetlanie ewentualnych błędów
echo $_FILES['plik']['error'];*/
}
?>