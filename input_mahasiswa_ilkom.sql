-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 04:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `input_ip_mahasiswa_ilkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `input_mahasiswa_ilkom`
--

CREATE TABLE `input_mahasiswa_ilkom` (
  `Id_Mahasiswa` int(11) NOT NULL,
  `nama_mahasiswa` varchar(30) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `ip` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_mahasiswa_ilkom`
--

INSERT INTO `input_mahasiswa_ilkom` (`Id_Mahasiswa`, `nama_mahasiswa`, `nim`, `ip`) VALUES
(34, 'Rama', 'F1G117038', '3.454'),
(37, 'Muhammad Ryand January', 'F1G117040', '3.227');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input_mahasiswa_ilkom`
--
ALTER TABLE `input_mahasiswa_ilkom`
  ADD PRIMARY KEY (`Id_Mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input_mahasiswa_ilkom`
--
ALTER TABLE `input_mahasiswa_ilkom`
  MODIFY `Id_Mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
