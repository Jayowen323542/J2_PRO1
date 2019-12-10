-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 10 dec 2019 om 08:53
-- Serverversie: 5.7.23
-- PHP-versie: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentastudent`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijf_gegevens`
--

DROP TABLE IF EXISTS `bedrijf_gegevens`;
CREATE TABLE IF NOT EXISTS `bedrijf_gegevens` (
  `iduser` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `plaats` varchar(45) DEFAULT NULL,
  `Bedrijf` varchar(45) DEFAULT NULL,
  `postcode` varchar(12) DEFAULT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `bedrijf_gegevens`
--

INSERT INTO `bedrijf_gegevens` (`iduser`, `email`, `naam`, `plaats`, `Bedrijf`, `postcode`, `createDate`, `updateDate`) VALUES
(10, 'Mbou@bedrijf.nl', 'Mbou', 'Utrecht', NULL, '1234AV', '2019-12-09 23:44:49', '2019-12-09 23:44:49'),
(13, 's@s', 's', 's', NULL, 's', '2019-12-10 08:50:18', '2019-12-10 08:50:18'),
(14, 'd@d', 's', '', NULL, 's', '2019-12-10 08:51:14', '2019-12-10 08:51:14'),
(15, 'bedrijf@bedrijf.nl', 'Bedrijf', 'Utrecht', NULL, '1234Ab', '2019-12-10 09:17:40', '2019-12-10 09:17:40'),
(16, 'Testbedrijf@bedrijf.nl', 'Testbedrijf', 'utrecht', NULL, '1111AA', '2019-12-10 09:37:27', '2019-12-10 09:37:27');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `factuur`
--

DROP TABLE IF EXISTS `factuur`;
CREATE TABLE IF NOT EXISTS `factuur` (
  `idfactuur` int(11) NOT NULL,
  `idopdracht` int(11) NOT NULL,
  `prijs_ex` int(11) NOT NULL,
  `prijs_inc` int(11) NOT NULL,
  `btw` int(11) DEFAULT NULL,
  `tot_uur` int(11) NOT NULL,
  `loon` decimal(10,0) NOT NULL,
  `datum` datetime NOT NULL,
  `factuurdatum` datetime NOT NULL,
  `vervaldatum` datetime NOT NULL,
  `bank` varchar(100) NOT NULL,
  `iban` varchar(100) NOT NULL,
  `bic` varchar(100) NOT NULL,
  `btwnr` varchar(100) NOT NULL,
  PRIMARY KEY (`idfactuur`),
  KEY `idopdracht_idx` (`idopdracht`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `createDate` varchar(24) NOT NULL,
  `updateDate` varchar(24) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`iduser`, `email`, `password`, `createDate`, `updateDate`) VALUES
(3, 'Admin@mbou.nl', '$2y$10$qnqbnO5UTYH95m97kd1PAuVesAZK.nACMQ1gD8VtFX08Bl1eUR6gi', '09-12-2019 14:36:02', '09-12-2019 14:36:02'),
(4, 'Bedrijf@mbou.nl', '$2y$10$7Bu0N07iNcqIVWNoRFXoDu4xr1GXxuQyD8isUYKQDP64P0zVyur7S', '09-12-2019 14:56:40', '09-12-2019 14:56:40'),
(5, 'Student@mbou.nl', '$2y$10$sj.hNGO.eH0vLdodhR6V4OStiljdAJMmrsjnqOBA7BMr5Wd4pty5G', '09-12-2019 14:56:52', '09-12-2019 14:56:52'),
(6, 'Root@root.nl', '$2y$10$Wl/nSzB/kaExpiLhd8bpiOeRghdC4JAMHE/.HjiZ6dBTWgG7IDoES', '09-12-2019 19:03:40', '09-12-2019 19:03:40'),
(7, 'EchtBedrijf@Co.nl', '$2y$10$CJ0G3s6Y24DYNsaKTNWhuO1VKn8fmWchMdw/HNO3a8rK9Qy6eT0w2', '09-12-2019 23:33:24', '09-12-2019 23:33:24'),
(10, 'Mbou@bedrijf.nl', '$2y$10$0toL7yWgZ6Jqp6XDkU4dpOZZ7B2iHfe2jz9quFSKX0ghZJxwS8CK2', '09-12-2019 23:44:49', '09-12-2019 23:44:49'),
(13, 's@s', '$2y$10$T1waARHbvbjrnGEW6UnmBenF0.b01qifZoPGr1DKJ3gnj4bqmw8oW', '10-12-2019 08:50:17', '10-12-2019 08:50:17'),
(14, 'd@d', '$2y$10$mf/qPxXnI4UX3c704844T.utmtHwHLMCPgpzG72to1TuSR/gEvn.S', '10-12-2019 08:51:14', '10-12-2019 08:51:14'),
(15, 'bedrijf@bedrijf.nl', '$2y$10$mN5vLXGtpSPWiTKxdDDx/e8I1zswptn15l.p.pH4K5a8WdoVYiAee', '10-12-2019 09:17:40', '10-12-2019 09:17:40');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opdrachten`
--

DROP TABLE IF EXISTS `opdrachten`;
CREATE TABLE IF NOT EXISTS `opdrachten` (
  `idopdracht` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `idstudent` int(11) DEFAULT NULL,
  `titel` varchar(45) NOT NULL,
  `loon` varchar(45) NOT NULL,
  `tot_uur` varchar(45) NOT NULL,
  `datum` varchar(45) NOT NULL,
  `beschrijving` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idopdracht`) USING BTREE,
  KEY `iduser_idx` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `opdrachten`
--

INSERT INTO `opdrachten` (`idopdracht`, `iduser`, `idstudent`, `titel`, `loon`, `tot_uur`, `datum`, `beschrijving`, `createDate`, `updateDate`) VALUES
(7, 15, 5, 'Schoonmaker gezocht', '222', '22', '12/12/2222', 'Schoonmaker gezocht.', '2019-12-10 09:19:06', '2019-12-10 09:44:53'),
(8, 16, NULL, 'schoonmaken', '7', '12', '12/12/2020', 'schoonmaken van 12/12 voor 2 weken op elke zaterdag.', '2019-12-10 09:40:39', '2019-12-10 09:40:39');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `opdrachten_reacties`
--

DROP TABLE IF EXISTS `opdrachten_reacties`;
CREATE TABLE IF NOT EXISTS `opdrachten_reacties` (
  `idopdracht` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idopdracht`,`iduser`),
  KEY `idopdracht_idx` (`idopdracht`),
  KEY `iduser_idx` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `opdrachten_reacties`
--

INSERT INTO `opdrachten_reacties` (`idopdracht`, `iduser`, `createDate`, `updateDate`) VALUES
(1, 5, '2019-12-09 20:39:56', '2019-12-09 20:39:56'),
(2, 5, '2019-12-09 23:05:09', '2019-12-09 23:05:09'),
(7, 5, '2019-12-10 09:21:09', '2019-12-10 09:21:09');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollen`
--

DROP TABLE IF EXISTS `rollen`;
CREATE TABLE IF NOT EXISTS `rollen` (
  `idrollen` int(11) NOT NULL AUTO_INCREMENT,
  `titel` varchar(45) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idrollen`),
  UNIQUE KEY `idrollen_UNIQUE` (`idrollen`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `rollen`
--

INSERT INTO `rollen` (`idrollen`, `titel`, `createDate`, `updateDate`) VALUES
(1, 'student', '2019-12-09 13:07:46', '2019-12-09 13:07:46'),
(2, 'bedrijf', '2019-12-09 13:08:12', '2019-12-09 13:08:12'),
(3, 'administrator', '2019-12-09 13:09:06', '2019-12-09 13:09:06'),
(4, 'root', '2019-12-09 14:47:39', '2019-12-09 14:47:39');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rollen_link`
--

DROP TABLE IF EXISTS `rollen_link`;
CREATE TABLE IF NOT EXISTS `rollen_link` (
  `iduser` int(11) NOT NULL,
  `idrollen` int(11) NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`,`idrollen`),
  KEY `idrollen_idx` (`idrollen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `rollen_link`
--

INSERT INTO `rollen_link` (`iduser`, `idrollen`, `createDate`, `updateDate`) VALUES
(1, 1, '2019-12-09 23:43:07', '2019-12-09 23:43:07'),
(3, 3, '2019-12-09 14:36:36', '2019-12-09 14:36:36'),
(4, 2, '2019-12-09 19:03:13', '2019-12-09 19:03:13'),
(5, 1, '2019-12-09 19:03:13', '2019-12-09 19:03:13'),
(13, 2, '2019-12-10 08:50:18', '2019-12-10 08:50:18'),
(14, 2, '2019-12-10 08:51:14', '2019-12-10 08:51:14'),
(15, 2, '2019-12-10 09:17:40', '2019-12-10 09:17:40'),
(16, 2, '2019-12-10 09:37:27', '2019-12-10 09:37:27');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `student_gegvens`
--

DROP TABLE IF EXISTS `student_gegvens`;
CREATE TABLE IF NOT EXISTS `student_gegvens` (
  `iduser` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `tussenvoegsel` varchar(45) DEFAULT NULL,
  `achternaam` varchar(45) NOT NULL,
  `woonplaats` varchar(45) DEFAULT NULL,
  `straat` varchar(45) DEFAULT NULL,
  `huisnummer` int(11) DEFAULT NULL,
  `cv` blob,
  `postcode` varchar(12) DEFAULT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updateDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `student_gegvens`
--

INSERT INTO `student_gegvens` (`iduser`, `email`, `naam`, `tussenvoegsel`, `achternaam`, `woonplaats`, `straat`, `huisnummer`, `cv`, `postcode`, `createDate`, `updateDate`) VALUES
(5, 'Student@mbou.nl', 'Jay', NULL, 'Lub', 'Soest', 'Ereprijsstraat', 55, NULL, '4444AA', '2019-12-18 01:00:00', '2019-12-10 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
