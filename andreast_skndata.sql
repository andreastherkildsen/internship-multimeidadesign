-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 04. 03 2015 kl. 13:25:38
-- Serverversion: 5.6.16
-- PHP-version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skndata`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin1', 'f60198ed366ef9a8f6fcb53f8bbb6dde'),
(2, 'admin2', 'd28c9bd53299f7ed48c873bfc9b5c921');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `klienter`
--

CREATE TABLE IF NOT EXISTS `klienter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(500) CHARACTER SET utf16 COLLATE utf16_danish_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf16 COLLATE utf16_danish_ci NOT NULL,
  `result` text CHARACTER SET utf16 COLLATE utf16_danish_ci NOT NULL,
  `citat` text CHARACTER SET utf16 COLLATE utf16_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=2 ;

--
-- Data dump for tabellen `klienter`
--

INSERT INTO `klienter` (`id`, `img`, `name`, `result`, `citat`) VALUES
(1, 'img_128245801504274860050.jpg', '123', '123', '123');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `klienterne`
--

CREATE TABLE IF NOT EXISTS `klienterne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `beforeimg` varchar(500) COLLATE utf8_danish_ci NOT NULL,
  `afterimg` varchar(500) COLLATE utf8_danish_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_danish_ci NOT NULL,
  `result` text COLLATE utf8_danish_ci NOT NULL,
  `citat` text COLLATE utf8_danish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=7 ;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `nyheder`
--

CREATE TABLE IF NOT EXISTS `nyheder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `overskrift` varchar(100) CHARACTER SET utf8 NOT NULL,
  `manchet` text CHARACTER SET utf8 NOT NULL,
  `indhold` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_danish_ci AUTO_INCREMENT=4 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
