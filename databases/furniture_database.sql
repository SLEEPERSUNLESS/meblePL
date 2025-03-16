-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 09 Maj 2024, 22:15
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `furniture_database`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `furniture`
--

CREATE TABLE `furniture` (
  `Id` int(11) NOT NULL,
  `cena` decimal(10,2) DEFAULT NULL,
  `kolor` varchar(50) DEFAULT NULL,
  `rodzaj` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `furniture`
--

INSERT INTO `furniture` (`Id`, `cena`, `kolor`, `rodzaj`) VALUES
(1, '500.00', 'Brązowy', 'Sofa'),
(2, '250.00', 'Czarny', 'Stolik kawowy'),
(3, '150.00', 'Biały', 'Krzesło'),
(4, '800.00', 'Szary', 'Łóżko'),
(5, '300.00', 'Brązowy', 'Komoda'),
(6, '400.00', 'Zielony', 'Kanapa'),
(7, '150.00', 'Czerwony', 'Stolik nocny'),
(8, '180.00', 'Niebieski', 'Krzesło biurowe'),
(9, '700.00', 'Biały', 'Szafa'),
(10, '250.00', 'Brązowy', 'Stolik RTV'),
(11, '600.00', 'Czarny', 'Biurowy fotel obrotowy'),
(12, '350.00', 'Szary', 'Komplet wypoczynkowy'),
(13, '200.00', 'Żółty', 'Pufa'),
(14, '450.00', 'Beżowy', 'Regał na książki'),
(15, '300.00', 'Jasny brąz', 'Stół jadalniany'),
(16, '550.00', 'Granatowy', 'Fotel'),
(17, '280.00', 'Fioletowy', 'Stolik do kawy'),
(18, '380.00', 'Ciemny brąz', 'Biurko'),
(19, '480.00', 'Turkusowy', 'Szafka nocna'),
(20, '320.00', 'Pomarańczowy', 'Regał na buty'),
(21, '420.00', 'Różowy', 'Toaletka'),
(22, '520.00', 'Brązowy', 'Fotel bujany'),
(23, '230.00', 'Bordowy', 'Stolik boczny'),
(24, '360.00', 'Ciemnozielony', 'Komoda wysoka'),
(25, '680.00', 'Biały', 'Łóżko kontynentalne');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `furniture`
--
ALTER TABLE `furniture`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
