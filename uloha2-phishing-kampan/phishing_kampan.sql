-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Po 05.Okt 2026, 10:12
-- Verzia serveru: 10.4.32-MariaDB
-- Verzia PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `phishing_kampan`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `rezervacie`
--

CREATE TABLE `rezervacie` (
  `id` int(11) NOT NULL,
  `meno` varchar(100) NOT NULL,
  `priezvisko` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `adresa` varchar(255) NOT NULL,
  `karta_format` varchar(20) NOT NULL,
  `platnost_format` varchar(20) NOT NULL,
  `cas` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `rezervacie`
--

INSERT INTO `rezervacie` (`id`, `meno`, `priezvisko`, `email`, `telefon`, `adresa`, `karta_format`, `platnost_format`, `cas`) VALUES
(1, 'Test', 'Student', 'student@test.sk', '0900000000', 'Testovacia 1', 'SPRAVNY', 'SPRAVNY', '2026-10-04 13:07:08'),
(2, 'Test2', 'Student2', 'student@test.cz', '0900000000', 'Testovacia 2', 'SPRAVNY', 'SPRAVNY', '2026-10-04 13:07:37');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `rezervacie`
--
ALTER TABLE `rezervacie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `rezervacie`
--
ALTER TABLE `rezervacie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
