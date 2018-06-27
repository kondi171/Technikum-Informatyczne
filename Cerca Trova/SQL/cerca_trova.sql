-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Cze 2017, 08:32
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `cerca trova`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id` int(11) NOT NULL,
  `trop` char(255) NOT NULL,
  `login` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id`, `trop`, `login`) VALUES
(3, 'OceÅ„ nas!', ''),
(4, 'OceÅ„ nas!', ''),
(5, 'OceÅ„ nas!', ''),
(6, 'OceÅ„ nas!', ''),
(7, 'OceÅ„ nas!', ''),
(8, 'OceÅ„ nas!', ''),
(9, 'OceÅ„ nas!', 'root'),
(10, 'ksdhfsduiof', 'root'),
(11, 'OceÅ„ nsdasd', 'root'),
(12, 'OceÅ„ nas!', 'root'),
(13, 'ocena', 'root'),
(14, 'test', 'root'),
(15, 'dfsd', 'root'),
(16, 'OceÅ„ nas!', 'adam'),
(17, 'OceÅ„ nas!', 'adam'),
(18, 'tylko Å¼ubr', 'konrad123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pomoc`
--

CREATE TABLE `pomoc` (
  `id` int(11) NOT NULL,
  `user` char(10) NOT NULL,
  `trpo` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pomoc`
--

INSERT INTO `pomoc` (`id`, `user`, `trpo`) VALUES
(5, '', 'Tutaj wpisz tekst...'),
(6, '', ''),
(7, 'adam', 'Tutaj wpisz tekst...'),
(8, 'adam', 'sdasdasdas'),
(9, 'adam', 'sdasdasdas');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reklamacja`
--

CREATE TABLE `reklamacja` (
  `id` int(11) NOT NULL,
  `login` char(10) NOT NULL,
  `trrek` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `reklamacja`
--

INSERT INTO `reklamacja` (`id`, `login`, `trrek`) VALUES
(2, 'adam', 'Tu wpisz tekst..'),
(3, 'adam', 'Tu wpisz tekst..');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `user` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `user`, `pass`, `email`) VALUES
(1, 'adam', '$2y$10$4sZdn0EaurMzGCAla1Up7OJ8vDmhJjKdsyCtQIAIuJ3AuxQ0m0Tly', 'adam@gmail.com'),
(12, 'Konrad', '$2y$10$NctUUEMXZ1mPSYx35dPiyuX6uH/SMXKr3wTz39id7isdVcyfotJK6', 'kondi.171@wp.pl'),
(13, 'krzysztof', '$2y$10$OcqE5wurApvaMUHUDgEro./F71xDOKidMxgXbUF4mY/mYENKEEAmG', 'kk@elo.com'),
(14, 'haszysz', '$2y$10$6GMb1nzsnRqHiGO7BdlxmuuejB.1bUQ0SH1wXlXrYGnXW8gGQ4eGu', 'hyk@wp.pl'),
(15, 'qweqweqweqw', '$2y$10$nxcy4xaWxU.NBs1qpv03gOFtzfTCgllW6JZ1rKW3ooYkIUANJDSFO', 'qwe@cc.com'),
(16, 'Ryszard', '$2y$10$5mhDBDVmK2SgnlOK7RPTHOmn1HS2zB6PQNl.fDPTKpcwvzXXt71Ce', 'TY@DRANIU.com'),
(17, 'qweqweqweqwww', '$2y$10$7yV8OgwdAAGZ1iVlhEFZZeBtcsW9Tt6li3KQm3VpIFb53o38F7W5y', 'sd@cc.pl'),
(18, 'kondi', '$2y$10$Hp5/UbJKRTXDCfs42aUr1.rXY2IcLmYdqndmMN6qhHm9Rc1lvEDN.', 'kondo@rrr.pl'),
(19, 'adsad', '$2y$10$mgIPnOARDgl0SI6HDbPIn.UKmplNoJICnZheNoBFSdxbDNSKi88k2', 'ddaw@cc.com'),
(20, 'sdas', '$2y$10$l8D4j5qCqg5E3KxU.nYvZeWBaCKdBC8beLsloN2ejKGlaT03tN9Vi', 'sss@wp.pl'),
(21, 'asdasdasd', '$2y$10$C.ANngCpw1jBZ4vYYC7Kw.SonYFP3Rii.Cl4D7qjENu5fBj5TwL/.', 'sadasd@wp.pl'),
(22, 'qwertyuiop', '$2y$10$ZCImJ5ex4DS1beeTHmzaFeJ4xnCJb7392mO.adpAF6dFoYu9oypaS', 'qwertyuiop@cc.pl'),
(23, 'eggdgdfg', '$2y$10$BNE8822nmBCIpGbCq1iml.xBJb5/jIU.W4gKFa8miL8nz/kq2LNcm', 'asdasdw@w.pl'),
(24, 'ewqeqwe', '$2y$10$BBSsaQ3ZJVbeQ9arK/EuVukbu3/cJS7Xhfo0UCNYkU7r1heAIhuMi', 'eqweqw@wp.pl'),
(25, 'fgfdg', '$2y$10$oR9jZaSgWJS/oLIA9kj1TeCwtJN54LubqeVIFmYQCuGBarnkv.0s6', 'qwer@wp.pl'),
(26, 'janusz123', '$2y$10$UL0OpLdzY237FFN/TsJ3Iusl5nf4r9QWjpXyLwplWzvQ/e1PzW.h.', 'janusz123@wp.pl'),
(27, 'ada', '$2y$10$pkSL2iHAAb.KQyhClx1Z/e3Zmj2IMMkdeMrRPw7Ep4U0vpTQC00P.', 'adaczyz@interia.pl'),
(28, 'blodrax', '$2y$10$MHRdSRXZdMcFMSDKiQO.G.cVh9I/IEkKwM8ny..uTITglM6zHWW3u', 'fixk@wp.pl'),
(29, 'dawdsdadsadaw', '$2y$10$Fk41b20Q9ClxPSj5tQWGBugBvzrcEpvRdMMGvSjRtwXr2rAnyT5OO', 'qwer@wdas.pl'),
(30, 'lipiec2323', '$2y$10$Ev9Eg55OrCL.uO5Tghr07eRM2kZISNZpMhgACyWwVPjxL2aaxwhYW', 'qwerty@222.com'),
(31, 'konrad123', '$2y$10$lRi/MpA8EkPv65WBBhtxduR7GeAso.5zeBMlEMd0RtGdYJAEEdkrO', 'konrad123@wp.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zakupy`
--

CREATE TABLE `zakupy` (
  `id` int(11) NOT NULL,
  `klient` text NOT NULL,
  `koszulka` int(11) NOT NULL,
  `kubek` int(11) NOT NULL,
  `poduszka` int(11) NOT NULL,
  `czapka` int(11) NOT NULL,
  `razem` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zakupy`
--

INSERT INTO `zakupy` (`id`, `klient`, `koszulka`, `kubek`, `poduszka`, `czapka`, `razem`) VALUES
(1, 'admin', 1, 0, 0, 0, 30),
(2, 'admin', 1, 0, 0, 0, 29.99),
(3, 'adam', 2, 3, 4, 5, 367.11);

create table poczta
(
id int auto_increment not null primary key,
nadawca char(20) not null,
odbiorca char(20) not null,
tresc text not null
);


INSERT INTO `poczta` (`id`, `nadawca`, `odbiorca`, `tresc`) VALUES
(1, 'adam', 'janek', 'text'),
(2, 'janek', 'adam', 'text'),
(3, 'janek', '', 'asdadsasasd'),
(4, 'janek', 'adam', 'Tresc wiadomosci... '),
(5, 'janek', 'adam', 'Tresc wiadomosci... '),
(6, 'janek', 'adam', 'Tresc wiadomosci... '),
(7, 'janek', 'adam', 'Tresc wiadomosci... ');


--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pomoc`
--
ALTER TABLE `pomoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reklamacja`
--
ALTER TABLE `reklamacja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `zakupy`
--
ALTER TABLE `zakupy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT dla tabeli `pomoc`
--
ALTER TABLE `pomoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `reklamacja`
--
ALTER TABLE `reklamacja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT dla tabeli `zakupy`
--
ALTER TABLE `zakupy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
