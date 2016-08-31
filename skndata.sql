-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 23. 02 2015 kl. 12:48:58
-- Serverversion: 5.6.21
-- PHP-version: 5.6.3

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
(1, 'admin', 'f60198ed366ef9a8f6fcb53f8bbb6dde');

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `klienter`
--

CREATE TABLE IF NOT EXISTS `klienter` (
`id` int(11) NOT NULL,
  `img` varchar(500) COLLATE utf16_danish_ci NOT NULL,
  `name` varchar(50) COLLATE utf16_danish_ci NOT NULL,
  `result` text COLLATE utf16_danish_ci NOT NULL,
  `citat` text COLLATE utf16_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_danish_ci;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `nyheder`
--

CREATE TABLE IF NOT EXISTS `nyheder` (
`id` int(11) NOT NULL,
  `´timestamp´` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `overskrift` varchar(255) NOT NULL,
  `manchet` text,
  `indhold` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `klienter`
--
ALTER TABLE `klienter`
 ADD PRIMARY KEY (`id`);

--
-- Indeks for tabel `nyheder`
--
ALTER TABLE `nyheder`
 ADD PRIMARY KEY (`id`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `klienter`
--
ALTER TABLE `klienter`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `nyheder`
--
ALTER TABLE `nyheder`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
