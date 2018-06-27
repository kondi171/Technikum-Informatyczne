<?php
$serwer = "localhost";  // nazwa serwera mysql
$login  = "root";      // login do bazy
$haslo  = "";   // haslo do bazy
$baza   = "allegro";  // nazwa bazy
$link= new mysqli($serwer, $login, $haslo,$baza);

$wstaw = $link->query("create table towar (id int primary key auto_increment, nazwa varchar (50), sprzedawca varchar(50), cena float, ikona int, ilosc int)")
or die("Blad w zapytaniu1");
$wstaw = $link->query("create table urzytkownik (login varchar (40), haslo varchar (40), imie varchar (30), nazwisko varchar (30), miejscowosc varchar (40), ulica varchar (40), nr_domu int, nr_mieszkania int) ")
or die("Blad w zapytaniu2");
$wstaw = $link->query("insert into urzytkownik (login,haslo) values ('admin', 'admin')")
or die("Blad w zapytaniu3");
$wstaw = $link->query("create table wyslane_admin (id int primary key auto_increment, uzytkownik varchar (40), data date, tresc text(300))")
	or die("Błąd w zapytaniu4");
	$poczta = $link->query("create table odebrane_admin (id int primary key auto_increment,stan int, uzytkownik varchar (40), data date, tresc text(300))")
	or die("Błąd w zapytaniu5");

header('location:index.php');
?>