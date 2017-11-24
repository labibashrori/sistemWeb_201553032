-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 01:26 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsistemweb_201553032`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE IF NOT EXISTS `tbuser` (
  `nama` varchar(30) NOT NULL,
  `jekel` enum('Pria','Wanita') NOT NULL,
  `hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`nama`, `jekel`, `hp`, `alamat`, `foto`, `email`, `password`) VALUES
('Labib Ashrori', 'Pria', '085249229992', 'Gembong, Pati', '', 'labibashrori@outlook.com', 'toor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
