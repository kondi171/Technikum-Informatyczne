<?php
session_start();
require_once "connect.php";
$polaczenie = new mysqli ($host,$login,$password,$db);
$polaczenie->set_charset("utf8");
$select = "SELECT * FROM ksiazki;";
$rezultat = $polaczenie ->query ($select) or die ("blad w zapytaniu!");
$ile = mysqli_num_rows($rezultat);
for($i=0; $i<= $ile; $i++) 
{
        $row = $rezultat->fetch_assoc();
	   $isbn = $row['isbn'];
	if(isset($_SESSION[$isbn]))
	{
		if($_SESSION[$isbn]==1)
		{
				unset($_SESSION[$isbn]);
				unset($_SESSION[$isbn."n"]);
		}
	
	$rezultat->free_result();
	}
}
$polaczenie->close();
header('Location: koszyk.php');
?>