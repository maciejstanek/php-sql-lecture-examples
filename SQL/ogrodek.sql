-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas generowania: 03 Maj 2017, 23:33
-- Wersja serwera: 5.7.18-0ubuntu0.16.04.1
-- Wersja PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ogrodek`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grzadki`
--

CREATE TABLE `grzadki` (
  `id` int(11) NOT NULL,
  `id_roslinki` int(11) NOT NULL,
  `lokalizacja` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `grzadki`
--

INSERT INTO `grzadki` (`id`, `id_roslinki`, `lokalizacja`) VALUES
(1, 2, 'ogrod'),
(2, 5, 'ogrod'),
(3, 5, 'ogrod'),
(4, 6, 'dzialka'),
(5, 8, 'dzialka'),
(6, 1, 'dzialka'),
(7, 3, 'u babci na wsi'),
(8, 4, 'u babci na wsi'),
(9, 1, 'u babci na wsi'),
(10, 6, 'u babci na wsi');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roslinki`
--

CREATE TABLE `roslinki` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(40) NOT NULL,
  `cena_obsiania_grzadki` float NOT NULL,
  `rodzaj` varchar(40) NOT NULL DEFAULT 'warzywo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `roslinki`
--

INSERT INTO `roslinki` (`id`, `nazwa`, `cena_obsiania_grzadki`, `rodzaj`) VALUES
(1, 'marchewka', 3, 'warzywo'),
(2, 'cebula', 3.5, 'warzywo'),
(3, 'ogorek', 6.8, 'warzywo'),
(4, 'groszek', 5.25, 'warzywo'),
(5, 'truskawka', 9.34, 'owoc'),
(6, 'majeranek', 9.34, 'ziolo'),
(7, 'rozmaryn', 8.59, 'ziolo'),
(8, 'fasola', 5.99, 'warzywo'),
(13, 'pomidor', 7.12, 'warzywo');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `grzadki`
--
ALTER TABLE `grzadki`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_roslinki` (`id_roslinki`);

--
-- Indexes for table `roslinki`
--
ALTER TABLE `roslinki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `grzadki`
--
ALTER TABLE `grzadki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `roslinki`
--
ALTER TABLE `roslinki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `grzadki`
--
ALTER TABLE `grzadki`
  ADD CONSTRAINT `grzadki_ibfk_1` FOREIGN KEY (`id_roslinki`) REFERENCES `roslinki` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
