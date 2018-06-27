-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Maj 2017, 00:08
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kacu`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opinie`
--

CREATE TABLE `opinie` (
  `id` int(11) NOT NULL,
  `trescop` char(255) NOT NULL,
  `login` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `opinie`
--

INSERT INTO `opinie` (`id`, `trescop`, `login`) VALUES
(1, 'Fajna opinia', 'Adamas'),
(2, 'Dziekujm,y', 'Adamas'),
(3, 'sdasd', 'root');

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
(15, 'grtgdsf', '$2y$10$VFTk425YLtrsP/.iyB8dxOG7kqywXf5o9Y5vAhMExDWrkPyApy4w2', 'qwerty12qwe3@inter.pl'),
(16, 'Andrzej', '$2y$10$5JUvzTfAcfH/Td3OuHWW1u9PxSpzQn6noBuI/Xh20uZr3G0pn5uRG', 'Andrzej@duda.pl'),
(17, 'dasdasd', '$2y$10$IKgXg8ZT/TTTkrz1smIcr.5aLDOPlEX9mmis4vxKen0bZRtc.vu7W', 'qweqw@wqee.pl'),
(18, 'dsadww', '$2y$10$78I3iYqv0mfK7BIE76dUz.kPw41hGvqZyPk7Qp8YLja21k3hXbUki', 'qw@ww.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `opinie`
--
ALTER TABLE `opinie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `opinie`
--
ALTER TABLE `opinie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
