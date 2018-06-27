<?php
session_start();
    require_once "connect.php";
    $polaczenie = new mysqli($host,$login,$password,$db);
    $koszyk = "SELECT * FROM ksiazki;";
    $rezultat = $polaczenie->query($koszyk) or die ('<center><span class="die">Błąd w zapytaniu!</span></center>');
    $ile = mysqli_num_rows($rezultat);

for ($i=0; $i <= $ile; $i++)
    { 	
        $row = $rezultat->fetch_assoc();
        $isbn=$row['isbn'];
        if(isset($_POST[$isbn]) ) 
        {
            $_SESSION[$isbn]=1;
            if(isset($_SESSION[$isbn."n"]))
            {
                $_SESSION[$isbn."n"]=$_SESSION[$isbn."n"]+$_POST[$isbn."n"];
            }
            else
            {
                $_SESSION[$isbn."n"]=$_POST[$isbn."n"];
            }
            $sum=$row['stan']-$_POST[$isbn."n"];
            $update = "UPDATE ksiazki SET stan = '$sum' WHERE ksiazki.isbn = '$isbn';";
            $rezultatupdate = $polaczenie->query($update) or die ('<center><span class="die">Błąd w zapytaniu!</span></center>');
        }	
    }
    $polaczenie->close();
header('Location: koszyk.php');
?>