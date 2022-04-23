<?php
session_start();
require_once "connect.php";
    $polaczenie = new mysqli($host,$login,$password,$db);
    $koszyk = "SELECT * FROM ksiazki;";
    $rezultat = $polaczenie->query($koszyk) or die ('<center><span class="die">Błąd w zapytaniu!</span></center>');
    $ile = mysqli_num_rows($rezultat);
for($i=0; $i<=ile; $i++)
{
    $row = $rezultat->fetch_assoc();
	$isbn=$row['isbn'];
	if(isset($_SESSION[$isbn]))
	{
		if($_SESSION[$isbn]==1)
		{
            $zapis=fopen("zamowienie.txt", "ab");
			$zapisz="Login: ".$_SESSION['login']." Ksiązka: ".$row['tytul']." Sztuk:".$_SESSION[$isbn."n"]." ";
			fwrite ($zapis, $zapisz);
					fclose ($zapis);
				unset($_SESSION[$isbn]);
				unset($_SESSION[$isbn."n"]);
		}
	
	$rezultat->free_result();
	}
}
$polaczenie->close();
header('Location: kasuj.php');
?>