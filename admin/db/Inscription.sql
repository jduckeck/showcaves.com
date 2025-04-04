-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 04, 2025 at 05:16 AM
-- Server version: 5.7.44-log
-- PHP Version: 8.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db8399_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Inscription`
--

CREATE TABLE `Inscription` (
  `Id` tinyint(4) NOT NULL,
  `Vorname` varchar(70) NOT NULL DEFAULT '',
  `VornamePublic` tinyint(4) NOT NULL DEFAULT '0',
  `Nachname` varchar(70) NOT NULL DEFAULT '',
  `Strasse` varchar(70) NOT NULL DEFAULT '',
  `StrassePublic` tinyint(4) NOT NULL DEFAULT '0',
  `Plz` varchar(7) NOT NULL DEFAULT '',
  `PlzPublic` tinyint(4) NOT NULL DEFAULT '0',
  `Wohnort` varchar(70) NOT NULL DEFAULT '',
  `Land` varchar(70) NOT NULL DEFAULT '',
  `MailAliasName` varchar(30) NOT NULL DEFAULT '',
  `MailForwardTo` varchar(70) NOT NULL DEFAULT '',
  `ForwardToUrl` varchar(70) NOT NULL DEFAULT '',
  `ExtraInfo` varchar(255) NOT NULL DEFAULT '',
  `ExtraInfoPublic` tinyint(4) NOT NULL DEFAULT '0',
  `Kommentar` varchar(255) NOT NULL DEFAULT '',
  `KommentarPublic` tinyint(4) NOT NULL DEFAULT '0',
  `password` varchar(12) DEFAULT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Inscription`
--

INSERT INTO `Inscription` (`Id`, `Vorname`, `VornamePublic`, `Nachname`, `Strasse`, `StrassePublic`, `Plz`, `PlzPublic`, `Wohnort`, `Land`, `MailAliasName`, `MailForwardTo`, `ForwardToUrl`, `ExtraInfo`, `ExtraInfoPublic`, `Kommentar`, `KommentarPublic`, `password`, `Status`) VALUES
(1, 'Jochen', 1, 'Duckeck', 'Archivstr. 11', 1, '90408', 1, 'Nürnberg', 'Deutschland', 'Jochen', 'Jochen@showcaves.com', 'http://www.JochenDuckeck.de/', 'I am the webmaster of this site.', 1, 'This first entry is a little useless, as I am the owner of this site. I made it to test the functionality and to show you how it looks like, as long as no one has inscribed.', 1, 'burgel', 2),
(4, 'Ralf', 1, 'Duckeck', 'Zierenbergstr. 11', 0, '31137', 0, 'Hildesheim', 'Germany', 'ralf', 'ralf@duckeck.de', 'http://www.duckeck.de', 'Editor of the German family site of <a target=\"_blank\"\r\nhref=\"http://www.duckeck.de/\">Duckeck</a>', 1, 'You may get many results on patents for RDS-TMC from me by\r\nsearching the<a target=\"_blank\"\r\nhref=\"http://www.depatisnet.de/\">German Patents Office</a>\r\n.', 1, 'dasg4a3', 2),
(5, 'Dorothea Elisabeth Kathrin', 1, 'Duckeck', 'Odos Apteron 35 A', 0, '71303', 0, 'Iraklio/Kriti', 'Greece', 'Elisabeth', 'elisabeth.duckeck@arcor.de', 'http://', '', 0, 'I\'m proud to be the first inscripted after the site-owner', 0, NULL, 2),
(6, 'Joachim', 1, 'Duckeck', 'Osterstrasse 5', 0, 'D-31134', 0, 'Hildesheim', 'Germany', 'Joachim', 'Joachim@Duckeck.de', 'http://', '', 0, '', 0, '$orel!cat', 2),
(8, 'Hans-Stefan', 1, 'Duckeck', 'Peiner str. 38', 0, '31228', 0, 'Peine', 'Deutschland', 'Hans-Stefan', 'Hans-Stefan@Duckeck.de', 'http://www.Duckeck.de', 'Owner of the German family site of Duckeck', 1, 'none', 1, 'gaston', 2),
(9, 'Renato', 1, 'Duckeck', 'Schwerzelweg 21', 0, '6315', 0, 'Oeraegeri', 'Switzerland', 'renato', 'duckeck@bluewin.ch', 'http://', '', 0, '', 0, 'caracas', 2),
(20, 'Hans Peter', 1, 'Dukeck', 'Pfeifferswiese 8', 0, '72525', 0, 'Bremelau', 'Germany', 'h.p.dukeck', 'dukeck@t-online.de', 'http://', 'I\'m not a real Duckeck as you mentioned how a real Duckeck has to be written, but in my opinion it doesn\'t matter.', 0, 'It\'s a very good idea to establish such a site', 0, 'auschlau', 2),
(11, 'Marc', 1, 'Duckeck', 'Berry College', 1, '30149', 1, 'Mount Berry GA', 'USA', 'marc', 'marcduckeck@hotmail.com', 'http://', '', 0, '', 0, 'venezuela', 2),
(12, 'Patricia Jenny', 1, 'Duckeck', 'Schwerzelweg 21 POB 119', 1, '6315', 1, 'Oberaegeri ZG', 'Switzerland', 'patty', 'jenny1311@hotmail.com', 'http://', '', 0, '', 0, 'chico', 2),
(15, 'Mathias', 1, 'Duckeck', 'Foelltorstr 14', 0, '89150', 0, 'Laichingen', 'Germany', 'mathias', 'mduckeck@freenet.de', 'http://mathias.duckeck.com', '', 0, '', 0, 'joerg', 2),
(18, 'Ursula', 1, 'Duckeck', 'Schwerzelweg 21 POB 119', 0, '6315', 0, 'Oberaegeri', 'Switzerland', 'ursula', 'ursuladuckeck@hotmail.com', 'http://', '', 0, '', 0, 'Chico', 2),
(22, 'Andreas', 1, 'Duckek', 'Parkstr. 9', 0, '56203', 1, 'Höhr-Grenzhausen', 'Germany', 'andreas-duckek', 'info@andreasduckek.de', 'http://www.andreasduckek.de', 'Hallo, gehöre auch zur Sippe', 0, '', 0, 'jannis', 2),
(23, 'Daniela', 1, 'Duckeck', 'Schulplatz 6', 0, '89191', 0, 'Nellingen', 'Germany', 'dom-pfaff', 'dom-pfaff@gmx.de', 'http://dom-pfaff.de', '', 0, '', 0, 'flateric', 0),
(26, 'Hannes', 1, 'Duckeck', 'Lindenweg 7', 0, '89198', 0, 'Westerstetten', 'Germany', 'hannes', 'hduckeck@web.de', 'http://', '', 0, '', 0, 'flyingd14', 2),
(45, 'Johannes', 1, 'Duckeck', 'Peiner Str. 38', 0, '31228', 0, 'Peine', 'Germany', 'johannes', 'johannes@duckeck.de', 'http://www.duckeck.de', 'Son of Hans-Stefan Duckeck, Grandson of Hans Duckeck, great Grandson of Johann Georg Duckeck (Jochen\'s grandfather)', 1, '', 0, 'starwars', 2),
(47, 'Katja', 1, 'Duckeck', 'Alte Dorfstr. 24 A', 0, '70599', 0, 'Stuttgart', 'Deutschland', 'katja', 'katja.duckek@web.de', 'http://www.mikadu.info', '', 0, '', 0, 'allround', 2),
(56, 'Hans-Peter', 1, 'Dukeck', 'Pfeifferswiese 8', 0, '72525', 0, 'Münsingen-Bremelau', 'Deutschland', '', 'hpdukeck', 'http://', '1. Die bestehende E-mail Adresse ist falsch.\r\n2. Ich schreibe mich Dukeck.', 0, '', 0, 'DPH', 1),
(58, 'Elzbieta', 0, 'Duckeck', 'Schleitweg 21', 0, '31137', 0, 'Hildesheim', 'Germany', 'elzbieta', 'ralf.duckeck@gmail.com', 'http://', '', 0, '', 0, 'Astiraki', 1),
(59, 'Guenter', 1, 'Duckeck', 'Kapellenwiese 12', 0, '82377', 0, 'Penzberg', 'germany', 'guenter', 'gduckeck@gmail.com', 'http://', 'Vetter von Stefan und Jochen, in Oberbayern haengen geblieben', 0, '', 0, 'ente', 1),
(60, 'Andreas', 1, 'Duckeck', 'Moosenerstraße 17', 0, '84405', 0, 'Dorfen', 'Germany', 'Andreas', 'andreasduckeck@gmx.de', 'http://', '', 0, '', 0, 'password', 1),
(61, 'Axel', 1, 'Duckeck', 'Kaiser-Friedrich-Höhe 4', 0, '56179', 0, 'Vallendar', 'Deutschland', 'axel.duckek', 'axelduckek@web.de', 'http://', '', 0, '', 0, 'Ducki61', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Inscription`
--
ALTER TABLE `Inscription`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Id` (`Id`),
  ADD UNIQUE KEY `MailAliasName` (`MailAliasName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Inscription`
--
ALTER TABLE `Inscription`
  MODIFY `Id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
