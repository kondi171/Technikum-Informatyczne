
<?php
session_start();

$serwer = "localhost";
$login = "root";
$haslo = "";
$baza = "allegro";
$i=0;
$link = new mysqli ($serwer, $login, $haslo, $baza);


$wynik = $link -> query ("select * from urzytkownik") or die ("blad w zapytaniu!");

if((isset($_POST['login']))&&(isset ($_POST['haslo'])))
	
{
	$log=$_POST['login'];	 
	 $has=$_POST['haslo'];
	
while ($rek = $wynik -> fetch_assoc())
{ 	
 if(($rek['login']==$_POST['login'])&&($rek['haslo']==$_POST['haslo']))
 {
	$p=1;
	
	$_SESSION['logg']=$log;
	$_SESSION['id']=$p;
	  header('Location: index.php');
	
}

else
{
	$i=1;
}
}
if ($i==1)
	echo "Błąd Logowania<br>";
}
header('Location: index.php');
?>

