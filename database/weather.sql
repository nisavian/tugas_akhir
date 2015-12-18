-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2015 at 02:58 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `weather`
--

-- --------------------------------------------------------

--
-- Table structure for table `weather`
--

CREATE TABLE IF NOT EXISTS `weather` (
  `id_cuaca` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(255) NOT NULL,
  `cuaca` varchar(255) NOT NULL,
  `suhumin` int(11) NOT NULL,
  `suhumax` int(11) NOT NULL,
  `kelembapanmin` int(11) NOT NULL,
  `kelembapanmax` int(11) NOT NULL,
  PRIMARY KEY (`id_cuaca`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `weather`
--

INSERT INTO `weather` (`id_cuaca`, `kota`, `cuaca`, `suhumin`, `suhumax`, `kelembapanmin`, `kelembapanmax`) VALUES
(1, 'Banda Aceh', 'Hujan Sedang', 22, 32, 71, 97),
(2, 'Medan', 'Berawan', 23, 33, 72, 96),
(3, 'Pekanbaru', 'Hujan Ringan', 23, 33, 63, 98),
(4, 'Batam', 'Hujan Ringan', 21, 31, 71, 94),
(5, 'Padang', 'Hujan Ringan', 22, 30, 70, 97),
(6, 'Jambi', 'Hujan Ringan', 24, 32, 65, 97),
(7, 'Palembang', 'Hujan Ringan', 23, 33, 55, 97),
(8, 'Pangkal Pinang', 'Hujan Ringan', 24, 31, 66, 96),
(9, 'Bengkulu', 'Hujan Sedang', 24, 31, 62, 97),
(10, 'Bandar Lampung', 'Hujan Sedang', 23, 33, 60, 98),
(11, 'Pontianak', 'Hujan Ringan', 24, 32, 60, 98),
(12, 'Samarinda', 'Berawan', 25, 31, 66, 96),
(13, 'Palangkaraya', 'Hujan Ringan', 24, 33, 58, 98),
(14, 'Banjarmasin', 'Hujan Sedang', 24, 30, 65, 98),
(15, 'Manado', 'Hujan Ringan', 23, 33, 60, 96),
(16, 'Gorontalo', 'Hujan Ringan', 23, 33, 72, 93),
(17, 'Palu', 'Hujan Ringan', 26, 33, 64, 91),
(18, 'Kendari', 'Hujan Ringan', 25, 32, 75, 95),
(19, 'Makassar', 'Hujan Sedang', 26, 32, 80, 97),
(20, 'Majene', 'Hujan Sedang', 24, 30, 71, 92),
(21, 'Ternate', 'Berawan', 25, 32, 67, 93),
(22, 'Ambon', 'Hujan Ringan', 23, 33, 82, 95),
(23, 'Jayapura', 'Berawan', 23, 32, 60, 95),
(24, 'Sorong', 'Berawan', 25, 31, 67, 96),
(25, 'Biak', 'Hujan Lebat', 25, 31, 74, 97),
(26, 'Manokwari', 'Hujan Ringan', 25, 32, 75, 98),
(27, 'Merauke', 'Hujan Ringan', 24, 32, 60, 90),
(28, 'Kupang', 'Hujan Ringan', 25, 32, 65, 94),
(29, 'Sumbawa Besar', 'Hujan Sedang', 25, 35, 60, 98),
(30, 'Mataram', 'Hujan Ringan', 24, 33, 64, 94),
(31, 'Denpasar', 'Hujan Sedang', 25, 33, 65, 90),
(32, 'Jakarta', 'Hujan Sedang', 24, 33, 84, 97),
(33, 'Serang', 'Hujan Ringan', 23, 32, 65, 95),
(34, 'Bandung', 'Hujan Sedang', 20, 28, 65, 96),
(35, 'Semarang', 'Berawan', 23, 33, 60, 90),
(36, 'Yogyakarta', 'Hujan Sedang', 23, 31, 66, 98),
(37, 'Surabaya', 'Hujan Sedang', 25, 34, 72, 97);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
