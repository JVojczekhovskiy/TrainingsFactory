-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 04 apr 2017 om 12:34
-- Serverversie: 5.7.14
-- PHP-versie: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trainingfactory`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lesson`
--

CREATE TABLE `lesson` (
  `id` int(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `maxpersons` int(50) NOT NULL,
  `instructor_id` int(50) DEFAULT NULL,
  `training_id` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `lesson`
--

INSERT INTO `lesson` (`id`, `time`, `date`, `location`, `maxpersons`, `instructor_id`, `training_id`) VALUES
(1, '09:00', '2017-04-22', '1', 20, 5, 1),
(2, '11:00', '2017-06-24', '2', 20, 6, 2),
(3, '12:45', '2017-07-28', '1', 20, 7, 3);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `person`
--

CREATE TABLE `person` (
  `id` int(50) NOT NULL,
  `loginname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `preprovision` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` enum('female','male','non') NOT NULL,
  `emailadress` varchar(50) NOT NULL,
  `hiringdate` date DEFAULT NULL,
  `salary` int(50) DEFAULT NULL,
  `street` varchar(40) DEFAULT NULL,
  `postalcode` varchar(6) DEFAULT NULL,
  `place` varchar(40) DEFAULT NULL,
  `recht` enum('instructor','member','admin') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `person`
--

INSERT INTO `person` (`id`, `loginname`, `password`, `firstname`, `preprovision`, `lastname`, `dateofbirth`, `gender`, `emailadress`, `hiringdate`, `salary`, `street`, `postalcode`, `place`, `recht`) VALUES
(1, 'jvliet', 'welkom01', 'Jan', 'van', 'Vliet', '2017-04-04', 'male', 'jvliet@caiway.nl', NULL, NULL, 'Schroot 78', '2568HF', 'Delft', 'member'),
(2, 'ptol', 'welkom01', 'pim', 'van', 'tol', '2017-04-26', 'male', 'ptol@caiway.nl', NULL, NULL, 'Leeghwaterplein 12', '2846WS', '\'s-Gravenhage', 'member'),
(3, 'sgroot', 'welkom01', 'Sakia', 'de', 'Groot', '2017-04-21', 'female', 'sgroot@caiway.nl', NULL, NULL, 'Platanenhof 67', '9345YE', 'Vlaardingen', 'member'),
(4, 'pklus', 'welkom01', 'Pertra', 'de', 'Klus', '2017-04-11', 'male', 'pklus@telnet.nl', NULL, NULL, 'Waaier 34', '8620SD', 'Schiedam', 'member'),
(5, 'tchi', 'welkom01', 'tengju', '', 'chi', '2017-03-09', 'male', 'tchi@trainingcentrum.nl', '2017-03-09', 500, 'Somewhere10', '9001ON', 'OverTheOcean', 'admin'),
(6, 'mvzetten', 'welkom01', 'Mandy', 'van', 'Zetten', '2017-03-09', 'female', 'mvzetten@trainingcentrum.nl', '2017-03-09', 500, 'Somewhere12', '9002ON', 'OverTheOcean', 'instructor'),
(7, 'rjainandanjha', 'welkom01', 'Ryan', '', 'Jainandanjha', '2017-03-09', 'male', 'rjainandanjha@trainingcentrum.nl', '2017-03-09', 500, 'Somewhere14', '9003ON', 'OverTheOcean', 'instructor');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `payment` tinyint(1) NOT NULL DEFAULT '0',
  `member_id` int(50) DEFAULT NULL,
  `lesson_id` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `registration`
--

INSERT INTO `registration` (`id`, `payment`, `member_id`, `lesson_id`) VALUES
(1, 1, 1, 1),
(2, 0, 1, 2),
(3, 0, 1, 3),
(4, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `training`
--

CREATE TABLE `training` (
  `id` int(50) NOT NULL,
  `description` text NOT NULL,
  `duration` int(50) NOT NULL,
  `extracosts` int(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `training`
--

INSERT INTO `training` (`id`, `description`, `duration`, `extracosts`) VALUES
(1, 'Kickboksen', 3, 8),
(2, 'Stootzak training', 3, 12),
(3, 'MMA', 3, 8),
(4, 'MMA', 3, 6);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT voor een tabel `person`
--
ALTER TABLE `person`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT voor een tabel `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `training`
--
ALTER TABLE `training`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
