-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 24 feb 2022 om 10:12
-- Serverversie: 5.7.31
-- PHP-versie: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdo_toets`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizza`
--

DROP TABLE IF EXISTS `pizza`;
CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `bodemformaat` int(50) NOT NULL,
  `saus` varchar(30) NOT NULL,
  `pizzatoppings` varchar(30) NOT NULL,
  `kruiden` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pizza`
--

INSERT INTO `pizza` (`id`, `bodemformaat`, `saus`, `pizzatoppings`, `kruiden`) VALUES
(4, 35, 'crÃ©me_fraiche', 'vegetarisch', 'chili_flakes'),
(3, 30, 'extra_tomatensaus', 'vegen', 'chili_flakes'),
(5, 35, 'spicy_tomatensaus', 'vegen', 'chili_flakes'),
(7, 30, 'extra_tomatensaus', 'vegen', 'chili_flakes');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
