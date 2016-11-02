-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2016 at 09:54 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_karyawan`
--

CREATE TABLE `detail_karyawan` (
  `ID_karyawan` int(5) NOT NULL,
  `kelamin` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon` int(20) NOT NULL,
  `peminatan_jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_karyawan`
--

INSERT INTO `detail_karyawan` (`ID_karyawan`, `kelamin`, `email`, `telepon`, `peminatan_jabatan`) VALUES
(16144, 'Pria', 'Agung@gmail.com', 1231, 'Manager'),
(16577, 'Wanita', 'Noona@yahoo.com', 122321, 'Programmer'),
(16850, 'Pria', 'abisa@gmail.com', 12123, 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `detail_tentang_diri`
--

CREATE TABLE `detail_tentang_diri` (
  `ID_karyawan` int(5) NOT NULL,
  `tentang_diri` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_tentang_diri`
--

INSERT INTO `detail_tentang_diri` (`ID_karyawan`, `tentang_diri`) VALUES
(16144, '<p>agung adalah anakyang baik</p>'),
(16577, '<p>Work hard play Hard</p>'),
(16850, '<p>Hidup itu indah</p>');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `ID_karyawan` int(5) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ID_karyawan`, `nama_karyawan`) VALUES
(16144, 'Agung'),
(16577, 'Nonaa'),
(16850, 'Abisa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_karyawan`
--
ALTER TABLE `detail_karyawan`
  ADD UNIQUE KEY `ID_karyawan_2` (`ID_karyawan`),
  ADD KEY `ID_karyawan` (`ID_karyawan`);

--
-- Indexes for table `detail_tentang_diri`
--
ALTER TABLE `detail_tentang_diri`
  ADD UNIQUE KEY `ID_karyawan_2` (`ID_karyawan`),
  ADD KEY `ID_karyawan` (`ID_karyawan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`ID_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_karyawan`
--
ALTER TABLE `detail_karyawan`
  MODIFY `ID_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16948;
--
-- AUTO_INCREMENT for table `detail_tentang_diri`
--
ALTER TABLE `detail_tentang_diri`
  MODIFY `ID_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16851;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `ID_karyawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36710;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_karyawan`
--
ALTER TABLE `detail_karyawan`
  ADD CONSTRAINT `detail_karyawan_ibfk_1` FOREIGN KEY (`ID_karyawan`) REFERENCES `karyawan` (`ID_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_tentang_diri`
--
ALTER TABLE `detail_tentang_diri`
  ADD CONSTRAINT `detail_tentang_diri_ibfk_1` FOREIGN KEY (`ID_karyawan`) REFERENCES `karyawan` (`ID_karyawan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
