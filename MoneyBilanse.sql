-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Lip 2022, 23:19
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
CREATE DATABASE IF NOT EXISTS `moneybilans` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `moneybilans`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `biedrona2022-06-08t23:22:33`
--

CREATE TABLE `biedrona2022-06-08t23:22:33` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `biedrona2022-06-08t23:22:33`
--

INSERT INTO `biedrona2022-06-08t23:22:33` (`ID`, `kwota`, `who`) VALUES
(1, 400, 'User1'),
(2, -23, 'User1'),
(3, -23, 'User1'),
(4, -23, 'User1'),
(5, -165, 'User1'),
(6, -165, 'User2'),
(9, -1, 'User1');

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
(44, '2021-12-07T', 'Narzędzia2021-12-07T17:04', 400, 'User1'),
(45, '2022-01-04T', 'lidl2022-01-04T21:58', 120, 'User2'),
(46, '2022-06-10T', 'Nowy2022-06-10T21:31:08', 23, 'User1'),
(47, '2022-06-08T', 'default2022-06-08T21:50:18', 0, 'User1'),
(48, '2022-06-08T', 'BIedrona2022-06-08T23:22:33', 400, 'User1'),
(49, '2022-06-27T', 'default2022-06-27T22:18:32', 24, 'User1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `default2022-06-08t21:50:18`
--

CREATE TABLE `default2022-06-08t21:50:18` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `default2022-06-08t21:50:18`
--

INSERT INTO `default2022-06-08t21:50:18` (`ID`, `kwota`, `who`) VALUES
(1, 0, 'User1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `default2022-06-27t22:18:32`
--

CREATE TABLE `default2022-06-27t22:18:32` (
  `ID` int(11) NOT NULL,
  `kwota` float DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `default2022-06-27t22:18:32`
--

INSERT INTO `default2022-06-27t22:18:32` (`ID`, `kwota`, `who`) VALUES
(1, 24, 'User1'),
(2, -22, 'User1'),
(3, -2, 'User2');

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
(5, -40, 'User1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lidl2022-01-04t21:58`
--

CREATE TABLE `lidl2022-01-04t21:58` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `lidl2022-01-04t21:58`
--

INSERT INTO `lidl2022-01-04t21:58` (`ID`, `kwota`, `who`) VALUES
(1, 120, 'User2'),
(2, -23, 'User1'),
(3, -23, 'User1'),
(4, -23, 'User1'),
(5, -51, 'User2');

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
(6, -200, 'User2');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nowy2022-06-10t21:31:08`
--

CREATE TABLE `nowy2022-06-10t21:31:08` (
  `ID` int(11) NOT NULL,
  `kwota` int(11) DEFAULT NULL,
  `who` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `nowy2022-06-10t21:31:08`
--

INSERT INTO `nowy2022-06-10t21:31:08` (`ID`, `kwota`, `who`) VALUES
(1, 23, 'User1'),
(2, -5, 'User1'),
(3, -10, 'User1'),
(4, -4, 'User1'),
(5, -4, 'User2'),
(6, -4, 'User1');

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
(1, 'User1', '123');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `biedrona2022-06-08t23:22:33`
--
ALTER TABLE `biedrona2022-06-08t23:22:33`
  ADD PRIMARY KEY (`ID`);

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
-- Indeksy dla tabeli `default2022-06-08t21:50:18`
--
ALTER TABLE `default2022-06-08t21:50:18`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `default2022-06-27t22:18:32`
--
ALTER TABLE `default2022-06-27t22:18:32`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `lidl2021-12-08t19:03`
--
ALTER TABLE `lidl2021-12-08t19:03`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `lidl2022-01-04t21:58`
--
ALTER TABLE `lidl2022-01-04t21:58`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `narzędzia2021-12-07t17:04`
--
ALTER TABLE `narzędzia2021-12-07t17:04`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `nowy2022-06-10t21:31:08`
--
ALTER TABLE `nowy2022-06-10t21:31:08`
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
-- AUTO_INCREMENT dla tabeli `biedrona2022-06-08t23:22:33`
--
ALTER TABLE `biedrona2022-06-08t23:22:33`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `biedronka2021-12-14t16:08`
--
ALTER TABLE `biedronka2021-12-14t16:08`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `bills`
--
ALTER TABLE `bills`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT dla tabeli `default2022-06-08t21:50:18`
--
ALTER TABLE `default2022-06-08t21:50:18`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `default2022-06-27t22:18:32`
--
ALTER TABLE `default2022-06-27t22:18:32`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `lidl2021-12-08t19:03`
--
ALTER TABLE `lidl2021-12-08t19:03`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `lidl2022-01-04t21:58`
--
ALTER TABLE `lidl2022-01-04t21:58`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `narzędzia2021-12-07t17:04`
--
ALTER TABLE `narzędzia2021-12-07t17:04`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `nowy2022-06-10t21:31:08`
--
ALTER TABLE `nowy2022-06-10t21:31:08`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Baza danych: `wprg`
--
CREATE DATABASE IF NOT EXISTS `wprg` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wprg`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `countries`
--

CREATE TABLE `countries` (
  `Country_ID` int(11) NOT NULL,
  `Country_name` varchar(40) NOT NULL,
  `Region_ID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `countries`
--

INSERT INTO `countries` (`Country_ID`, `Country_name`, `Region_ID`) VALUES
(1, 'Polska', '1001'),
(2, 'Niemcy', '1002'),
(3, 'Francja', '1003');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `country`
--

CREATE TABLE `country` (
  `id` int(2) NOT NULL,
  `name` varchar(40) NOT NULL,
  `region_id` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `Firstname` varchar(255) NOT NULL,
  `Secondname` varchar(255) NOT NULL,
  `Salary` int(11) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `WorkId` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `secondname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `secondname`, `country`, `username`, `password`) VALUES
(1, '', 'wr', '', 'wr', '1234'),
(2, '', 'wr', '', 'dziadek', '1234'),
(3, 'emilian', 'niewiem', 'polaska', 'emi', '1234'),
(4, 'wr1234', '$logconn', 'pol', 'wr34', '123'),
(5, 'TestFirstname ', 'Test Secondname ', 'TEst Country ', 'User', '123');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `work`
--

CREATE TABLE `work` (
  `WorkID` bigint(20) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `CreateYear` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`Country_ID`),
  ADD UNIQUE KEY `Region_ID` (`Region_ID`);

--
-- Indeksy dla tabeli `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `region_id` (`region_id`);

--
-- Indeksy dla tabeli `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `FK_WorkID` (`WorkId`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeksy dla tabeli `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`WorkID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `countries`
--
ALTER TABLE `countries`
  MODIFY `Country_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `country`
--
ALTER TABLE `country`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `work`
--
ALTER TABLE `work`
  MODIFY `WorkID` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `FK_WorkID` FOREIGN KEY (`WorkId`) REFERENCES `work` (`WorkID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
