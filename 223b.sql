-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 29, 2018 at 01:07 PM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `223b`
--

-- --------------------------------------------------------

--
-- Table structure for table `infoTable`
--

CREATE TABLE IF NOT EXISTS `infoTable` (
  `firstname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `steamname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`steamname`),
  UNIQUE KEY `username` (`username`),
  KEY `firstname` (`firstname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `infoTable`
--

INSERT INTO `infoTable` (`firstname`, `lastname`, `username`, `steamname`) VALUES
('Cole', 'Kiekow', 'JamesTrickington', 'JamesTrickington'),
('Wesley', 'Melver', '', 'newSteamName');

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE IF NOT EXISTS `userInfo` (
  `firstname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(18) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `steamname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userTable`
--

CREATE TABLE IF NOT EXISTS `userTable` (
  `firstname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(18) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `userTable`
--

INSERT INTO `userTable` (`firstname`, `surname`, `username`, `password`) VALUES
('cole', 'IS MEga', ' cool', 'jk'),
('Hingle', 'McCringleberry', ' hmccringle', 'bepis'),
('hmm', 'hmm', ' hmm', 'hmm'),
('Hanna', 'Montana', ' mileyCirus', '12345'),
('Frodo', 'Baggins', ' Underhill', '2323'),
('Cole', 'Kiekow', 'JamesTrickington', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
