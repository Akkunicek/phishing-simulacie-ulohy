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
-- Databáza: `phishing_simulacia`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `pokusy`
--

CREATE TABLE `pokusy` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `heslo_test` varchar(255) NOT NULL,
  `cas` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Sťahujem dáta pre tabuľku `pokusy`
--

INSERT INTO `pokusy` (`id`, `username`, `heslo_test`, `cas`) VALUES
(1, 'student@test.sk', 'Test1234', '2026-10-04 12:53:47'),
(2, 'ahoj', 'ANO', '2026-10-04 12:56:27');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `pokusy`
--
ALTER TABLE `pokusy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `pokusy`
--
ALTER TABLE `pokusy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
