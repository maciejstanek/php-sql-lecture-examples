-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 06 Maj 2017, 18:06
-- Wersja serwera: 5.7.18-0ubuntu0.16.04.1
-- Wersja PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ai_login`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `haslo` varchar(40) DEFAULT NULL,
  `imie` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `login`, `haslo`, `imie`) VALUES
(1, 'Prezydent', 'abc123', 'Blaise Compaore');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy_md5`
--

CREATE TABLE `uzytkownicy_md5` (
  `id` int(11) NOT NULL,
  `login` varchar(40) DEFAULT NULL,
  `haslo` varchar(32) DEFAULT NULL,
  `imie` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy_md5`
--

INSERT INTO `uzytkownicy_md5` (`id`, `login`, `haslo`, `imie`) VALUES
(1, 'Prezydent', 'cb8091bee995670a2b5f403fcb948650', 'Blaise Compaore');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownicy_md5`
--
ALTER TABLE `uzytkownicy_md5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT dla tabeli `uzytkownicy_md5`
--
ALTER TABLE `uzytkownicy_md5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
