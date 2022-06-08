-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Gru 2021, 21:19
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `moneybilans`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `biedronka2021-12-14t16:08`
--

CREATE TABLE `biedronka2021-12-14t16:08` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `biedronka2021-12-14t16:08`
--

INSERT INTO `biedronka2021-12-14t16:08` (`ID`, `kwota`, `who`) VALUES
(1, 250, 'User1'),
(2, -60, 'User1'),
(3, -60, 'User2'),
(4, -60, 'User1'),
(5, -60, 'User2'),
(10, -10, 'User1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bills`
--

CREATE TABLE `bills` (
  `ID` int(9) NOT NULL,
  `DATA` varchar(11) DEFAULT NULL,
  `NAME-BILL` varchar(30) DEFAULT NULL,
  `SUM` float DEFAULT NULL,
  `HOWPAID` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `bills`
--

INSERT INTO `bills` (`ID`, `DATA`, `NAME-BILL`, `SUM`, `HOWPAID`) VALUES
(42, '2021-12-08T', 'Lidl2021-12-08T19:03', 120, 'User2'),
(43, '2021-12-14T', 'Biedronka2021-12-14T16:08', 250, 'User1'),
(44, '2021-12-07T', 'Narzędzia2021-12-07T17:04', 400, 'User1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lidl2021-12-08t19:03`
--

CREATE TABLE `lidl2021-12-08t19:03` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lidl2021-12-08t19:03`
--

INSERT INTO `lidl2021-12-08t19:03` (`ID`, `kwota`, `who`) VALUES
(1, 120, 'User2'),
(2, -20, 'User1'),
(3, -20, 'User1'),
(4, -40, 'User1'),
(5, -40, 'User1'),
(6, -40, 'User2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `narzędzia2021-12-07t17:04`
--

CREATE TABLE `narzędzia2021-12-07t17:04` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `narzędzia2021-12-07t17:04`
--

INSERT INTO `narzędzia2021-12-07t17:04` (`ID`, `kwota`, `who`) VALUES
(1, 400, 'User1'),
(2, -200, 'User1'),
(3, -200, 'User2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(9) NOT NULL,
  `USER` varchar(30) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `PASSWORD` varchar(30) COLLATE utf8mb4_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `USER`, `PASSWORD`) VALUES
(1, 'WR', '123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `biedronka2021-12-14t16:08`
--
ALTER TABLE `biedronka2021-12-14t16:08`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `lidl2021-12-08t19:03`
--
ALTER TABLE `lidl2021-12-08t19:03`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `narzędzia2021-12-07t17:04`
--
ALTER TABLE `narzędzia2021-12-07t17:04`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `biedronka2021-12-14t16:08`
--
ALTER TABLE `biedronka2021-12-14t16:08`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `bills`
--
ALTER TABLE `bills`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT dla tabeli `lidl2021-12-08t19:03`
--
ALTER TABLE `lidl2021-12-08t19:03`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `narzędzia2021-12-07t17:04`
--
ALTER TABLE `narzędzia2021-12-07t17:04`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
