-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 19, 2019 at 04:43 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kesmavet_silawas`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenisUnitUsaha` varchar(191) DEFAULT NULL,
  `kapasitasPemeliharaan` varchar(191) DEFAULT NULL,
  `populasiTernak` varchar(191) DEFAULT NULL,
  `kategoriUsaha` varchar(191) DEFAULT NULL,
  `totalProduksiSusu` varchar(191) DEFAULT NULL,
  `wilayahPeredaran` varchar(191) DEFAULT NULL,
  `jumlahKaryawan` varchar(191) DEFAULT NULL,
  `check_p1_1` tinyint(1) DEFAULT NULL,
  `P1_1` varchar(191) DEFAULT NULL,
  `check_p1_2` tinyint(1) DEFAULT NULL,
  `P1_2` varchar(191) DEFAULT NULL,
  `check_p1_3` tinyint(1) DEFAULT NULL,
  `P1_3` varchar(191) DEFAULT NULL,
  `check_p1_4` tinyint(1) DEFAULT NULL,
  `P1_4` varchar(191) DEFAULT NULL,
  `check_p1_5` tinyint(1) DEFAULT NULL,
  `P1_5` varchar(191) DEFAULT NULL,
  `check_p2` tinyint(1) DEFAULT NULL,
  `P2` text,
  `check_p3` tinyint(1) DEFAULT NULL,
  `P3` text,
  `check_p4` tinyint(1) DEFAULT NULL,
  `P4` text,
  `check_p5` tinyint(1) DEFAULT NULL,
  `P5_1` varchar(191) DEFAULT NULL,
  `P5_2` varchar(191) DEFAULT NULL,
  `P5_3` varchar(191) DEFAULT NULL,
  `P5_4` text,
  `P5_5` text,
  `check_p6` tinyint(1) DEFAULT NULL,
  `P6` text,
  `check_p7` tinyint(1) DEFAULT NULL,
  `P7` text,
  `check_p8` tinyint(1) DEFAULT NULL,
  `P8` text,
  `check_p9` tinyint(1) DEFAULT NULL,
  `P9` text,
  `check_p10` tinyint(1) DEFAULT NULL,
  `P10` text,
  `check_p11` tinyint(1) DEFAULT NULL,
  `P11` text,
  `check_p12` tinyint(1) DEFAULT NULL,
  `P12` text,
  `check_p13` tinyint(1) DEFAULT NULL,
  `P13` text,
  `check_p14` tinyint(1) DEFAULT NULL,
  `P14` text,
  `check_p15` tinyint(1) DEFAULT NULL,
  `P15` text,
  `check_p16` tinyint(1) DEFAULT NULL,
  `P16` text,
  `check_p17` tinyint(1) DEFAULT NULL,
  `P17` text,
  `check_p18` tinyint(1) DEFAULT NULL,
  `P18` text,
  `check_p19` tinyint(1) DEFAULT NULL,
  `P19` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `jenisUnitUsaha`, `kapasitasPemeliharaan`, `populasiTernak`, `kategoriUsaha`, `totalProduksiSusu`, `wilayahPeredaran`, `jumlahKaryawan`, `check_p1_1`, `P1_1`, `check_p1_2`, `P1_2`, `check_p1_3`, `P1_3`, `check_p1_4`, `P1_4`, `check_p1_5`, `P1_5`, `check_p2`, `P2`, `check_p3`, `P3`, `check_p4`, `P4`, `check_p5`, `P5_1`, `P5_2`, `P5_3`, `P5_4`, `P5_5`, `check_p6`, `P6`, `check_p7`, `P7`, `check_p8`, `P8`, `check_p9`, `P9`, `check_p10`, `P10`, `check_p11`, `P11`, `check_p12`, `P12`, `check_p13`, `P13`, `check_p14`, `P14`, `check_p15`, `P15`, `check_p16`, `P16`, `check_p17`, `P17`, `check_p18`, `P18`, `check_p19`, `P19`) VALUES
(1, 'Perusahaan', '100', '50', 'Sedang', '1000', 'Lokal, Lintas Kab-kota', '25', 1, '123', 1, '123', 1, '123', 1, '123', 1, 'asd', 0, 'asd', 1, 'asd', 1, 'asd', 1, '123', 'asd', 'asd', 'asd', NULL, 1, 'asd', 1, 'asd', 1, 'asd', 0, 'asd', 1, 'asd', 1, 'asd', 1, 'asd', 1, 'asd', 0, 'asd', 1, 'asd', 1, 'asd', 0, 'asd', 1, 'asd', 1, 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
