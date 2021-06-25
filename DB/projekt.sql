-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 07:45 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulawy`
--

CREATE TABLE `bulawy` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DMG` int(11) NOT NULL,
  `MAX_DMG` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `MIN_DEX` int(11) NOT NULL,
  `Gniazda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `bulawy`
--

INSERT INTO `bulawy` (`id`, `Nazwa`, `MIN_DMG`, `MAX_DMG`, `MIN_STR`, `MIN_DEX`, `Gniazda`) VALUES
(1, 'Maczuga', 1, 6, 0, 0, 2),
(2, 'Kolczasta maczuga', 5, 8, 0, 0, 2),
(3, 'Buława', 3, 10, 27, 0, 2),
(4, 'Morgenstern', 7, 16, 36, 0, 3),
(5, 'Korbacz', 1, 24, 41, 35, 5);

-- --------------------------------------------------------

--
-- Table structure for table `helmy`
--

CREATE TABLE `helmy` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DEF` int(11) NOT NULL,
  `MAX_DEF` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `DUR` int(11) NOT NULL,
  `Gniazda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `helmy`
--

INSERT INTO `helmy` (`id`, `Nazwa`, `MIN_DEF`, `MAX_DEF`, `MIN_STR`, `DUR`, `Gniazda`) VALUES
(1, 'Kaptur', 3, 5, 0, 12, 2),
(2, 'Szyszak', 8, 11, 15, 18, 2),
(3, 'Hełm', 15, 18, 26, 24, 2),
(4, 'Pełny hełm', 23, 26, 41, 30, 2),
(5, 'Wielki hełm', 30, 35, 63, 40, 3),
(6, 'Korona', 25, 45, 55, 50, 3);

-- --------------------------------------------------------

--
-- Table structure for table `luki`
--

CREATE TABLE `luki` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DMG` int(11) NOT NULL,
  `MAX_DMG` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `MIN_DEX` int(11) NOT NULL,
  `Gniazda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `luki`
--

INSERT INTO `luki` (`id`, `Nazwa`, `MIN_DMG`, `MAX_DMG`, `MIN_STR`, `MIN_DEX`, `Gniazda`) VALUES
(1, 'Krótki łuk', 1, 4, 0, 15, 3),
(2, 'Myśliwski łuk', 2, 6, 0, 28, 4),
(3, 'Długi łuk', 3, 10, 22, 19, 5),
(4, 'Łuk kompozytowy', 4, 8, 25, 35, 4),
(5, 'Krótki łuk wojenny', 5, 11, 30, 40, 5);

-- --------------------------------------------------------

--
-- Table structure for table `miecze`
--

CREATE TABLE `miecze` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DMG` int(11) NOT NULL,
  `MAX_DMG` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `MIN_DEX` int(11) NOT NULL,
  `Gniazda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `miecze`
--

INSERT INTO `miecze` (`id`, `Nazwa`, `MIN_DMG`, `MAX_DMG`, `MIN_STR`, `MIN_DEX`, `Gniazda`) VALUES
(1, 'Krótki miecz', 2, 7, 0, 0, 2),
(2, 'Sejmitar', 2, 6, 0, 21, 2),
(3, 'Szabla', 3, 8, 25, 25, 2),
(4, 'Falchion', 9, 17, 33, 0, 2),
(5, 'Kryształowy miecz', 5, 15, 43, 0, 6),
(6, 'Szeroki miecz', 7, 14, 48, 0, 4),
(7, 'Długi miecz', 3, 19, 55, 39, 4),
(8, 'Miecz wojenny', 8, 20, 71, 45, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rekawice`
--

CREATE TABLE `rekawice` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DEF` int(11) NOT NULL,
  `MAX_DEF` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `DUR` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `rekawice`
--

INSERT INTO `rekawice` (`id`, `Nazwa`, `MIN_DEF`, `MAX_DEF`, `MIN_STR`, `DUR`) VALUES
(1, 'Skórzane rękawice', 2, 3, 0, 12),
(2, 'Ciężkie rękawice', 5, 6, 0, 14),
(3, 'Kolcze rękawice', 8, 9, 25, 16),
(4, 'Lekkie rękawice', 9, 11, 45, 18),
(5, 'Rękawice', 12, 15, 60, 24);

-- --------------------------------------------------------

--
-- Table structure for table `slowa`
--

CREATE TABLE `slowa` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Runy` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `Opis` varchar(500) COLLATE utf8mb4_polish_ci NOT NULL,
  `Item` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `slowa`
--

INSERT INTO `slowa` (`id`, `Nazwa`, `Runy`, `Opis`, `Item`) VALUES
(1, 'Holy Thunder', 'ETH, RAL, ORT, TAL', '  +60% Enhanced Damage\r\n  -25% Target Defense\r\n  Adds 5-30 Fire Damage\r\n  Adds 21-110 Lightning Damage\r\n  +75 Poison Damage Over 5 Seconds\r\n  +10 To Maximum Damage\r\n  Lightning Resistance +60%\r\n  +5 To Maximum Lightning Resistance\r\n  +3 To Holy Shock (Paladin Only)\r\n  Level 7 Chain Lightning (60 Charges)', 'Buławy'),
(2, 'Leaf', 'TIR, RAL', '  Adds 5-30 Fire Damage\r\n  +3 To Fire Skills\r\n  +3 To Fire Bolt (Sorceress Only)\r\n  +3 To Inferno (Sorceress Only)\r\n  +3 To Warmth (Sorceress Only)\r\n  +2 To Mana After Each Kill\r\n  + (2 Per Character Level) +2-198 To Defense (Based On Character Level)\r\n  Cold Resist +33%', 'Buławy');

-- --------------------------------------------------------

--
-- Table structure for table `topory`
--

CREATE TABLE `topory` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DMG` int(11) NOT NULL,
  `MAX_DMG` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `MIN_DEX` int(11) NOT NULL,
  `Gniazda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `topory`
--

INSERT INTO `topory` (`id`, `Nazwa`, `MIN_DMG`, `MAX_DMG`, `MIN_STR`, `MIN_DEX`, `Gniazda`) VALUES
(1, 'Ręczny topór', 3, 6, 0, 0, 2),
(2, 'Topór', 4, 11, 32, 0, 4),
(3, 'Podwójny topór', 5, 13, 43, 0, 5),
(4, 'Nadziak', 7, 11, 49, 33, 6),
(5, 'Bojowy topór', 10, 18, 67, 0, 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `type` varchar(10) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `pass`, `email`, `type`) VALUES
(1, 'admin', '$2y$10$9UUw51RxsKLR4/b4Qmyq/u4octQ9RwnYMNQelMWp2va7twGwxmhDe', 'karol6888@gmail.com', 'admin'),
(5, 'testtest', '$2y$10$4FnU6ItJM5Us/izj256Io.mHuVAmuLbc8KyLxXCruO91PxaO5pzmW', 'test@gmail.com', 'normal'),
(6, 'testtest2', '$2y$10$k5GekPJ1dsFWOsGJk36rL.LX4iWVdTExvbgU5WZEN9d8kdILsnrpS', 'test2@gmail.com', 'normal'),
(7, 'testtest3', '$2y$10$40zxhyZTZi9X16HCkxr2mOFEQTXOSrZbvDSwENx2xskZmpOhzWNZG', 'test3@gmail.com', 'normal');

-- --------------------------------------------------------

--
-- Table structure for table `zbroje`
--

CREATE TABLE `zbroje` (
  `id` int(11) NOT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `MIN_DEF` int(11) NOT NULL,
  `MAX_DEF` int(11) NOT NULL,
  `MIN_STR` int(11) NOT NULL,
  `DUR` int(11) NOT NULL,
  `Gniazda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `zbroje`
--

INSERT INTO `zbroje` (`id`, `Nazwa`, `MIN_DEF`, `MAX_DEF`, `MIN_STR`, `DUR`, `Gniazda`) VALUES
(1, 'Pikowana zbroja', 8, 11, 12, 20, 2),
(2, 'Skórzana zbroja', 14, 17, 15, 24, 2),
(3, 'Ciężka skórzana zbroja', 21, 24, 20, 28, 2),
(4, 'Ćwiekowana zbroja', 32, 35, 27, 32, 2),
(5, 'Zbroja pierścieniowa', 45, 48, 36, 26, 3),
(6, 'Napierśnik', 65, 68, 30, 50, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulawy`
--
ALTER TABLE `bulawy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `helmy`
--
ALTER TABLE `helmy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `luki`
--
ALTER TABLE `luki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miecze`
--
ALTER TABLE `miecze`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekawice`
--
ALTER TABLE `rekawice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slowa`
--
ALTER TABLE `slowa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topory`
--
ALTER TABLE `topory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zbroje`
--
ALTER TABLE `zbroje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulawy`
--
ALTER TABLE `bulawy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `helmy`
--
ALTER TABLE `helmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `luki`
--
ALTER TABLE `luki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `miecze`
--
ALTER TABLE `miecze`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rekawice`
--
ALTER TABLE `rekawice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slowa`
--
ALTER TABLE `slowa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topory`
--
ALTER TABLE `topory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `zbroje`
--
ALTER TABLE `zbroje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
