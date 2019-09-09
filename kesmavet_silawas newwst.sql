-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2019 at 03:06 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `accessrole`
--

CREATE TABLE `accessrole` (
  `id` int(11) NOT NULL,
  `roleName` varchar(60) NOT NULL,
  `roleDescription` varchar(250) DEFAULT NULL,
  `ruleSettings` text,
  `dateCreate` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessrole`
--

INSERT INTO `accessrole` (`id`, `roleName`, `roleDescription`, `ruleSettings`, `dateCreate`, `dateUpdate`) VALUES
(1, 'Administrator', 'admin', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Admin Kesmavet', 'admin kesmavet', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Admin Dinas Prov', 'admin Dinas Provinsi', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Admin Dinas Kab/Kota', 'Admin Dinas Kab/Kota', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Otovet', 'otovet', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Pelaku Usaha', 'Pelaku Usaha', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Petugas Kesmavet', 'Petugas Survey kesmavet', NULL, '2019-08-27 15:54:36', '2019-08-27 15:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `dokterhewanpenanggungjawab`
--

CREATE TABLE `dokterhewanpenanggungjawab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaLengkap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notlp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyUnitUsaha_idsurveyUnitusaha` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokterhewanpenanggungjawab`
--

INSERT INTO `dokterhewanpenanggungjawab` (`id`, `namaLengkap`, `status`, `notlp`, `surveyUnitUsaha_idsurveyUnitusaha`) VALUES
(1, '2eq2e', 'wqeeq', NULL, 11),
(2, NULL, 'wqeqwe', NULL, 11),
(3, 'qweqw', 'wqeeq', 'weqeq', 11),
(4, 'ada', 'ada', NULL, 23),
(5, 'tt', 'ee', NULL, 23),
(6, 'ds', 'ewe', NULL, 23),
(7, 'ada', 'ada', NULL, 24),
(8, 'tt', 'ee', NULL, 24),
(9, 'ds', 'ewe', NULL, 24),
(10, '2131dasd', NULL, NULL, 26),
(11, 'asdasd', NULL, NULL, 26),
(12, 'Dr hakim', 'swasta', '1213', 28),
(13, 'Dr aa', NULL, NULL, 28),
(14, 'sadas', 'asdasd', 'asdasd', 29),
(15, 'dasdasd', 'asdasd', 'asdasd', 29);

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kapasitasPemeliharaan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `populasiTernak` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kategoriUsaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `totalProduksiSusu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wilayahPeredaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahKaryawan` int(11) DEFAULT NULL,
  `P1-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P1-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P1-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P1-4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P5-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P5-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P5-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P12` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P13` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P14` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P15` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P16` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P17` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P18` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P19` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P3_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P4_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P6_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P7_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P8_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P9_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P10_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P12_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P13_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P14_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P15_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P16_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P17_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P18_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P19_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `kapasitasPemeliharaan`, `populasiTernak`, `kategoriUsaha`, `totalProduksiSusu`, `wilayahPeredaran`, `jumlahKaryawan`, `P1-1`, `P1-2`, `P1-3`, `P1-4`, `P2`, `P3`, `P4`, `P5-1`, `P5-2`, `P5-3`, `P6`, `P7`, `P8`, `P9`, `P10`, `P11`, `P12`, `P13`, `P14`, `P15`, `P16`, `P17`, `P18`, `P19`, `P3_ket`, `P4_ket`, `P6_ket`, `P7_ket`, `P8_ket`, `P9_ket`, `P10_ket`, `P11_ket`, `P12_ket`, `P13_ket`, `P14_ket`, `P15_ket`, `P16_ket`, `P17_ket`, `P18_ket`, `P19_ket`) VALUES
(3, 'ww', '2132', '1', '123', '1', 1231, '13', NULL, NULL, NULL, '', '0', '1', NULL, NULL, NULL, '0', '1', NULL, '0', NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123123', '31231', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'files/cJkM2aNS4cBcDOMeOyQdMYjOhdLy99alNTz9rO5y.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, '1', NULL, '1', NULL, NULL, NULL, NULL, NULL, 'files/VdStHzVx1atNUC17La9kpomJI5jW31TpvLUPEDoC.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, 'Kecil', NULL, 'Lintas Kab-Kota', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

CREATE TABLE `form6` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipeUnitUsaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jenisProduk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `karyawanProduksi_L` int(11) DEFAULT NULL,
  `karyawanProduksi_P` int(11) DEFAULT NULL,
  `karyawanAdm_L` int(11) DEFAULT NULL,
  `karyawanAdm_P` int(11) DEFAULT NULL,
  `karyawanAMPM` int(11) DEFAULT NULL,
  `karyawanAWO` int(11) DEFAULT NULL,
  `juruSembelih` int(11) DEFAULT NULL,
  `operatorStunning` int(11) DEFAULT NULL,
  `b1_niu_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_niu_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_npwp_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_npwp_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_siup_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_siup_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_nib_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_nib_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_pks_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b1_pks_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b2` tinyint(1) DEFAULT NULL,
  `check_b3` tinyint(1) DEFAULT NULL,
  `b3_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b3_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b3_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b4` tinyint(1) DEFAULT NULL,
  `b4_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b4_file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b5_1` tinyint(1) DEFAULT NULL,
  `b5_1_nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5_1_alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5_1_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b5_2` tinyint(1) DEFAULT NULL,
  `b5_2_nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5_2_alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5_2_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b5_3` tinyint(1) DEFAULT NULL,
  `b5_3_nama` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5_3_alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b5_3_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b6` tinyint(1) DEFAULT NULL,
  `b6_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b6_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b6_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b6_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b7` tinyint(1) DEFAULT NULL,
  `b7` text COLLATE utf8mb4_unicode_ci,
  `check_b8` tinyint(1) DEFAULT NULL,
  `b8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b8_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b8_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b9` tinyint(1) DEFAULT NULL,
  `b9` text COLLATE utf8mb4_unicode_ci,
  `check_b10` tinyint(1) DEFAULT NULL,
  `b10` text COLLATE utf8mb4_unicode_ci,
  `check_b11` tinyint(1) DEFAULT NULL,
  `b11` text COLLATE utf8mb4_unicode_ci,
  `check_b12` tinyint(1) DEFAULT NULL,
  `b12` text COLLATE utf8mb4_unicode_ci,
  `check_b13` tinyint(1) DEFAULT NULL,
  `b13` text COLLATE utf8mb4_unicode_ci,
  `check_b14` tinyint(1) DEFAULT NULL,
  `b14` text COLLATE utf8mb4_unicode_ci,
  `check_b15` tinyint(1) DEFAULT NULL,
  `b15` text COLLATE utf8mb4_unicode_ci,
  `check_b16` tinyint(1) DEFAULT NULL,
  `b16` text COLLATE utf8mb4_unicode_ci,
  `check_b17` tinyint(1) DEFAULT NULL,
  `b17` text COLLATE utf8mb4_unicode_ci,
  `check_b18` tinyint(1) DEFAULT NULL,
  `b18` text COLLATE utf8mb4_unicode_ci,
  `b19` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b20` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b21_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b21_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b22` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b23_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b23_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b24` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b25_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b25_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b26_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b26_2` int(100) DEFAULT NULL,
  `b27_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b27_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b27_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b28` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b28` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b28_1` int(100) DEFAULT NULL,
  `b28_2` int(100) DEFAULT NULL,
  `b28_3` int(100) DEFAULT NULL,
  `check_b29` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b29_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b29_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b29_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b30` tinyint(1) DEFAULT NULL,
  `b30_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b30_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b30_3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b30_4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b31` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b32` int(191) DEFAULT NULL,
  `b32_jenis` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b32_jenisAlat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b32_jumlahAlat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `b32_kapasitas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_b33` tinyint(1) DEFAULT NULL,
  `b33` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form6`
--

INSERT INTO `form6` (`id`, `tipeUnitUsaha`, `jenisProduk`, `karyawanProduksi_L`, `karyawanProduksi_P`, `karyawanAdm_L`, `karyawanAdm_P`, `karyawanAMPM`, `karyawanAWO`, `juruSembelih`, `operatorStunning`, `b1_niu_id`, `b1_niu_date`, `b1_npwp_id`, `b1_npwp_date`, `b1_siup_id`, `b1_siup_date`, `b1_nib_id`, `b1_nib_date`, `b1_pks_id`, `b1_pks_date`, `check_b2`, `check_b3`, `b3_1`, `b3_2`, `b3_3`, `check_b4`, `b4_id`, `b4_file`, `check_b5_1`, `b5_1_nama`, `b5_1_alamat`, `b5_1_sertifikat`, `check_b5_2`, `b5_2_nama`, `b5_2_alamat`, `b5_2_sertifikat`, `check_b5_3`, `b5_3_nama`, `b5_3_alamat`, `b5_3_sertifikat`, `check_b6`, `b6_1`, `b6_2`, `b6_3`, `b6_4`, `check_b7`, `b7`, `check_b8`, `b8`, `b8_1`, `b8_2`, `check_b9`, `b9`, `check_b10`, `b10`, `check_b11`, `b11`, `check_b12`, `b12`, `check_b13`, `b13`, `check_b14`, `b14`, `check_b15`, `b15`, `check_b16`, `b16`, `check_b17`, `b17`, `check_b18`, `b18`, `b19`, `b20`, `b21_1`, `b21_2`, `b22`, `b23_1`, `b23_2`, `b24`, `b25_1`, `b25_2`, `b26_1`, `b26_2`, `b27_1`, `b27_2`, `b27_3`, `check_b28`, `b28`, `b28_1`, `b28_2`, `b28_3`, `check_b29`, `b29_1`, `b29_2`, `b29_3`, `check_b30`, `b30_1`, `b30_2`, `b30_3`, `b30_4`, `b31`, `check_b32`, `b32_jenis`, `b32_jenisAlat`, `b32_jumlahAlat`, `b32_kapasitas`, `check_b33`, `b33`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 1, NULL, 'files/p2FOXtEA5Pp1BnQxFADPM6uiNGqFEPjH51mzghBH.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi, Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 1, NULL, 'files/p2FOXtEA5Pp1BnQxFADPM6uiNGqFEPjH51mzghBH.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi, Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 1, NULL, 'files/p2FOXtEA5Pp1BnQxFADPM6uiNGqFEPjH51mzghBH.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi, Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 1, NULL, 'files/p2FOXtEA5Pp1BnQxFADPM6uiNGqFEPjH51mzghBH.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi, Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 1, NULL, 'files/p2FOXtEA5Pp1BnQxFADPM6uiNGqFEPjH51mzghBH.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi, Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'wqeqwe', 'eqwew', 'qweqwe', 'qweqwe', NULL, NULL, '', NULL, '', NULL, 0, NULL, 'ewqew', 'weqew', 'qwee', NULL, NULL, '', NULL, 'qweqwe', 'qweeq', 'ewqe', NULL, 'qwe', 'qqwee', 'weqe', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Kabupaten/Kota, Antar Kabupaten/Kota', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Tradisional', 'Dingin/Beku', 12, 2, 12, 2, 21, 2, 12, 2, '212', NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Menengah', 'Dingin/Beku', 1, 2, 2, 2, 2, 3, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 1, NULL, 'files/49e9K2WMs9JuC8NfPTV2yC3i2W13Ui2nvW9Mm7z8.zip', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Menengah', 'Dingin/Beku', 1, 2, 2, 2, 2, 3, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, 'awd', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Menengah', 'Dingin/Beku', 1, 2, 2, 2, 2, 3, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, 'awd', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Menengah', 'Dingin/Beku', 1, 2, 2, 2, 2, 3, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, 'awd', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Menengah', 'Dingin/Beku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Menengah', 'Dingin/Beku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Menengah', 'Dingin/Beku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Tradisional', 'Hangat/Segar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Menengah', 'Dingin/Beku', 1, 2, 1, 2, 2, 2, 3, 2, 'aw', 'ds', NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Menengah', 'Dingin/Beku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Menengah', 'Dingin/Beku', 10, 2, 2, 21, 33, 12, 4, 5, '555/sddcxx', NULL, '123123123', NULL, '213213', NULL, '', NULL, '', NULL, 0, NULL, 'ewae', 'ewe', NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Menengah', 'Dingin/Beku', 10, 2, 2, 21, 33, 12, 4, 5, '555/sddcxx', NULL, '123123123', NULL, '213213', NULL, '', NULL, '', NULL, 0, NULL, 'ewae', 'ewe', NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Menengah', 'Dingin/Beku', 10, 2, 2, 21, 33, 12, 4, 5, '555/sddcxx', NULL, '123123123', NULL, '213213', NULL, '', NULL, '', NULL, 0, NULL, 'ewae', 'ewe', NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'Menengah', 'Dingin/Beku', 10, 2, 2, 21, 33, 12, 4, 5, '555/sddcxx', NULL, '123123123', NULL, '213213', NULL, '', NULL, '', NULL, 0, NULL, 'ewae', 'ewe', NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Antar Provinsi', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Tradisional', 'Dingin/Beku', 100, 21, 21, 21, 21, 31, 21, 32, NULL, NULL, '333212442131', '12 Agustus 2001', NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 'seryakala', 'Jl Ahmad Troik', '5622133123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'iya', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '120', NULL, 'laut', '12', NULL, '120', '12', '56', '45', '32', '432', NULL, '12', '123', '131', '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dalam Kabupaten/Kota', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Menengah', 'Dingin/Beku', 23, 231, 132, 123, 123, 1231, 12313, 1231, 'e21331', '34 Agustus 2009', NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12`', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Menengah', 'Dingin/Beku', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Menengah', 'Dingin/Beku', 23, 5, 65, 54, 45, 465, 456, 456, '556', '12 agustus 2019', NULL, NULL, NULL, NULL, '', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, 0, NULL, '', NULL, 'asada', 'sadasda', 'wadas', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, 0, 0, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Menengah', 'Dingin/Beku', 123, 123, 1231, 123123, 1231, 123, 4, 5, 'dasdasa', 'sdasd', 'dasdasd', 'asdsad', 'sadd', 'asdasd', NULL, 'asdasd', NULL, 'asdasd', NULL, NULL, 'sadasd', 'asdasd', 'dsada', 1, '13123123', 'files/KJdEDUNJuxTN9HTCXa0FcfbmA7ohjQiRyoQOvDlT.png', NULL, NULL, NULL, NULL, 1, 'qeq', 'dsadas', 'dasda', NULL, NULL, NULL, NULL, 1, 'add', 'dasd', 'sadd', 'ssada', 0, NULL, 0, NULL, NULL, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 0, NULL, 1, 'asdsad', NULL, NULL, 1, 'asdasd', 0, NULL, 0, NULL, '13', NULL, '123', '231', NULL, '12', '21', '231', '123', '213', '123', NULL, '13', '12', '123', NULL, NULL, 0, 0, 0, '0', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 'Dalam Kabupaten/Kota', NULL, 'dsa', NULL, NULL, '123', NULL, '132', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form10`
--

CREATE TABLE `form10` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenisUnitUsaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `komoditas` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kapasitasGudang` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `realisasiPenyimpanan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wilayahPeredaran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahKaryawan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p1_niu` tinyint(1) DEFAULT NULL,
  `P1-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p1_npwp` tinyint(1) DEFAULT NULL,
  `P1-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p1_siup` tinyint(1) DEFAULT NULL,
  `P1-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p1_nib` tinyint(1) DEFAULT NULL,
  `P1-4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p1_pks` tinyint(1) DEFAULT NULL,
  `P1-5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p2` tinyint(1) DEFAULT NULL,
  `P2-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P2-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P2-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P2-4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p3` tinyint(1) DEFAULT NULL,
  `p3_count` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_p4` tinyint(1) DEFAULT NULL,
  `P4-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P4-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P4-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P5_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P6` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P6-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P6-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P7` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P7-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P7-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P8` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P8-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P8-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P9` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P9_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P10` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P10-4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11-1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11-4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P11-5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P12` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P12-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P12-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P13` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P13_ket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P14` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P14-3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P14-4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P15` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `P15-2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form10`
--

INSERT INTO `form10` (`id`, `jenisUnitUsaha`, `komoditas`, `kapasitasGudang`, `realisasiPenyimpanan`, `wilayahPeredaran`, `jumlahKaryawan`, `check_p1_niu`, `P1-1`, `check_p1_npwp`, `P1-2`, `check_p1_siup`, `P1-3`, `check_p1_nib`, `P1-4`, `check_p1_pks`, `P1-5`, `check_p2`, `P2-1`, `P2-2`, `P2-3`, `P2-4`, `check_p3`, `p3_count`, `check_p4`, `P4-1`, `P4-2`, `P4-3`, `P5`, `P5_ket`, `P6`, `P6-1`, `P6-2`, `P7`, `P7-1`, `P7-2`, `P8`, `P8-1`, `P8-2`, `P9`, `P9_ket`, `P10`, `P10-4`, `P11`, `P11-1`, `P11-2`, `P11-3`, `P11-4`, `P11-5`, `P12`, `P12-2`, `P12-3`, `P13`, `P13_ket`, `P14`, `P14-3`, `P14-4`, `P15`, `P15-2`) VALUES
(1, 'Chilled Room', 'Daging Kerbau, Daging Babi', NULL, NULL, 'Lintas Kab-Kota', NULL, NULL, NULL, NULL, NULL, 1, 'gfhgf', NULL, NULL, NULL, NULL, 1, 'hgh', NULL, NULL, NULL, 1, '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL),
(2, 'Chilled Room', 'Daging Sapi, Daging Babi', '1', '2', 'Ekspor', '21', NULL, NULL, NULL, NULL, 1, 'asd', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL),
(3, 'Chilled Room', 'Daging Sapi, Daging Babi', '1', '2', 'Ekspor', '21', NULL, NULL, NULL, NULL, 1, 'asd', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, '2', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL, '0', NULL),
(4, 'Chilled Room', 'Daging Sapi, Daging Babi', '1', '2', 'Ekspor', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_08_30_111024_create_form1_table', 1),
(2, '2019_09_05_090430_create_form6_table', 2),
(3, '2019_09_05_103430_create__dokter_hewan_penanung_jawab__table', 2),
(4, '2019_09_05_103851_create_penerima__produk_distribusi__table', 2),
(5, '2014_10_12_000000_create_users_table', 3),
(6, '2019_09_07_083352_create_suplier_table', 4),
(7, '2019_09_07_090318_create_form10_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `idOrang` int(11) NOT NULL,
  `NamaLengkap` varchar(45) DEFAULT NULL,
  `TempatLahir` varchar(45) DEFAULT NULL,
  `TanggalLahir` date DEFAULT NULL,
  `NomorKTP` varchar(45) DEFAULT NULL,
  `NomorHandphone` varchar(20) DEFAULT NULL,
  `NPWP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`idOrang`, `NamaLengkap`, `TempatLahir`, `TanggalLahir`, `NomorKTP`, `NomorHandphone`, `NPWP`) VALUES
(1, 'Doni', 'Ciamis', '1992-04-04', '312122', NULL, '334343'),
(2, 'Mien Sukoharjo', 'Sukoharjo', '1996-08-17', '123646597785462222', NULL, '123456879997776'),
(3, 'Wisard', 'Pinasungkulan', '2012-01-10', '001231', NULL, 'q-03-1'),
(4, 'Wisard', 'Pinasungkulan', '2016-12-05', '001231', NULL, 'q-03-1'),
(5, 'Heru Sukoco', 'Jakarta', '2000-05-02', '3102123344', NULL, '123456689'),
(6, 'dahri', 'padangsidimpuan', '2015-03-19', '213456789', NULL, '132456789'),
(7, 'Karnaen', 'Cirebon', '2016-12-02', '12345', NULL, '1234567'),
(8, 'Rafika', 'Majalengka', '1990-10-31', '321123456789', NULL, '10908920202020'),
(9, 'Fika', 'Majalengka', '2006-02-01', '12121212', NULL, '12121213'),
(10, 'Agus MS', 'Bogor', '2011-12-01', '327110101010009', NULL, '12345678904321'),
(11, 'Irman Hermadi', 'Bogor', '2011-12-01', '123456', NULL, '123456'),
(12, 'Pungki', 'Banda Aceh', '1974-03-09', '12345678910', '086464646464', '123456789'),
(13, 'Wisard K', 'Pinasungkulan', '2016-12-08', '0-21-', NULL, '1021-'),
(14, 'nuria', 'surabaya', '1990-12-31', '1234567890', NULL, '1234567890'),
(15, 'Dahri', 'bogor', '2016-12-08', '123-456-789', NULL, '12-34-56-78-9'),
(16, 'habib husein', 'bogor', '1996-12-03', '12345678910', NULL, '12345678910'),
(17, 'Goemz', 'Depok', '1987-12-02', '1234567890', NULL, '1234567890'),
(18, 'abah', 'london', '1987-12-06', '09800900000000000', NULL, '00009999999999999'),
(19, 'Theodorus Pramudya Aristo', 'yogyakarta', '2004-06-13', '3404065805780005', NULL, '12345678'),
(20, 'DWI NAWANG WICAKSANA', 'BANTUL', '1992-10-21', '3401072110920002', NULL, '357246297009'),
(21, 'Agam', 'bogor', '1987-08-05', '3244444993889008990', NULL, '22222240404'),
(22, 'habib husein', 'bogor', '1996-12-03', '12345678910', NULL, '12345678910'),
(23, 'Mas Nud', 'yogyakarta', '1960-02-24', '123456', NULL, '123456'),
(24, 'lilis', 'bogor', '1982-05-18', '1213312778900', NULL, '1236777890900'),
(25, 'drh Fatia Yusriah Aksa', 'Bandung', '2012-07-17', '12345678910', NULL, '15.876.1-356.000'),
(26, 'OTONG,SE,MM', 'BEKASI', '2011-12-01', '1252503754100', NULL, '123123123'),
(27, 'Basuki Wijaya', 'malang', '1977-12-08', '199012901619', NULL, '7891011121415'),
(28, 'alex', 'batang', '1976-12-08', '12345678910', NULL, '987654321'),
(29, 'Mas Nud', 'yogyakarta', '1960-02-24', '123456', NULL, '123456'),
(30, 'Chandra Yudha Apriza', 'Sukarame B. lampung', '1981-12-15', '3673031504810002', NULL, '46.167.909.4-401.000'),
(31, 'Sri Hartati', 'Bandung', '1961-07-11', '123456789', NULL, '123456'),
(32, 'RANI HANDAYANI', 'SUMEDANG', '1992-10-09', '3275114910720003', NULL, '09101972'),
(33, 'Rani Erlina', 'bogor', '1982-12-17', '3271065712820002', NULL, '670622604404000'),
(34, 'Ely Marini', 'Singkawang', '1979-03-17', '6171015703790002', NULL, '12344556667778889'),
(35, 'Raja', 'Rantau prapat', '1991-08-02', '231456789', NULL, '567892'),
(36, 'Heru Sukoco', 'Jakarta', '2016-12-08', '22355235225252', NULL, '2232211.000.22-22'),
(37, 'Deny Abdul Rahman', 'Bogor', '1978-05-11', '32.05.77980.765', NULL, '80.756.441.9-412.000'),
(38, 'Inez Endri Satriani', 'Semarang ', '1971-12-27', '12071993 ', NULL, '120-690-080-198'),
(39, 'Tri Utami', 'Pekalongan', '1987-05-28', '3271066805800014', NULL, '72.962.348.8-411.000'),
(40, 'Supriyono', 'Pontianak', '2016-12-08', '2704600000001', NULL, '1234567800000'),
(41, 'loka', 'cirebon', '2013-10-01', '3205200310018899', NULL, '123456789001'),
(42, 'nuria', 'surabaya', '1991-12-31', '1234567890', NULL, '1234567890'),
(43, 'acong', 'cirebon', '2006-12-02', '2222222222222', NULL, '3333333333333333'),
(44, 'Agus MS', 'Bandung', '2016-12-08', '327110101010009', NULL, '12345678904321'),
(45, 'Inez Endri Satriani', 'Semarang', '1971-12-07', '12071993', NULL, '120-690-080-198'),
(46, 'Rafika', 'Majalengka', '2016-12-20', '321123456654', NULL, '8198171818191'),
(47, 'Zaki', 'Bogor', '1990-10-31', '3200123123123', NULL, '9019282010190'),
(48, 'Try', 'Bogor', '1990-01-01', '1231445151', '01424156161', '10101918716'),
(49, 'Heru Sukoco', 'Jakarta', '2012-04-19', '123141412', '08123124141', '121412.3242'),
(50, 'fika nur z', 'bogor', '1994-10-25', '8696686', NULL, '1011911771'),
(51, 'Hanif Affandi Hartanto', 'Klaten', '1988-01-02', '769709797097', NULL, '767676'),
(52, 'Alin', 'Jakarta', '1994-07-01', '000000000000000000', NULL, '0000000000'),
(53, NULL, NULL, NULL, '324324', '4324234', '2234234234'),
(64, 'kuncoro', NULL, NULL, NULL, NULL, NULL),
(66, '2113', NULL, NULL, NULL, NULL, NULL),
(67, '12333', NULL, NULL, NULL, NULL, NULL),
(68, '123123', NULL, NULL, NULL, '123123123', NULL),
(69, 'wdad', NULL, NULL, NULL, '13123', NULL),
(70, '1221', NULL, NULL, NULL, '3123213add', NULL),
(71, 'sadasd', NULL, NULL, NULL, 'adsdsad', NULL),
(72, 'sadasd', NULL, NULL, NULL, 'adsdsad', NULL),
(73, 'sadasd', NULL, NULL, NULL, 'adsdsad', NULL),
(74, 'sadasd', NULL, NULL, NULL, 'adsdsad', NULL),
(75, 'sadasd', NULL, NULL, NULL, 'adsdsad', NULL),
(76, 'Cahaya Utami Rachman', NULL, NULL, NULL, '0-227-006-6036', NULL),
(77, 'Cahaya Utami Rachman', NULL, NULL, NULL, '0-227-006-6036', NULL),
(78, 'Susila Suhendra Sudjarwadi', NULL, NULL, NULL, '0-21-563-4182', NULL),
(79, 'Suharto Ari Tan', NULL, NULL, NULL, '021 2505091', NULL),
(80, 'asdasd', NULL, NULL, NULL, NULL, NULL),
(81, 'Petugas Kesmavet', NULL, NULL, NULL, '0000022221', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelakuusaha`
--

CREATE TABLE `pelakuusaha` (
  `idPerusahaan` int(11) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `NPWP` varchar(45) DEFAULT NULL,
  `SIUP` varchar(45) DEFAULT NULL,
  `idPemilikUsaha` int(11) NOT NULL,
  `idWilayahKerja` int(11) NOT NULL,
  `idRegencyCity` int(11) UNSIGNED NOT NULL,
  `JenisUsaha` int(11) DEFAULT NULL COMMENT 'Peternakan, RPH, Pengolahan, Ritel'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelakuusaha`
--

INSERT INTO `pelakuusaha` (`idPerusahaan`, `Nama`, `NPWP`, `SIUP`, `idPemilikUsaha`, `idWilayahKerja`, `idRegencyCity`, `JenisUsaha`) VALUES
(1, 'PT. Maju Gunung Sejahtera', '123456', '23456', 1, 1, 161, NULL),
(2, 'CV. Semesta Ayam Negeri', '12345678910111213', '1234567788', 2, 2, 179, NULL),
(3, 'Wisard17 .inc', '201-as', '1231', 3, 1, 382, NULL),
(4, 'Manado inc', '201-as', '1231', 4, 1, 382, NULL),
(5, 'IPB', '223214223', '1234567890', 5, 1, 179, NULL),
(6, 'dahri', '12345678910', '123', 6, 1, 26, NULL),
(7, 'Abc Digital INC', '98765', '32/g/2016', 7, 1, 1, NULL),
(8, 'CARE IPB', '109082928292', '191919191919', 8, 2, 179, NULL),
(9, 'PT Kucing', '1234567', '1234567', 9, 2, 1, NULL),
(10, 'Agus PT', '12345678901234', 'SIUPP', 10, 2, 179, NULL),
(11, 'PT JAYA ABADI', '1234567890', '1234567890', 11, 1, 161, NULL),
(12, 'Wisard17 .inc', '1231', '12312', 12, 7, 382, NULL),
(13, 'cv angin anginan', '1234567890', '1234567890', 13, 4, 264, NULL),
(14, 'CARE', '123456789', '123456789', 14, 8, 179, NULL),
(15, 'CV. Agniyaalbaqy', '12345678910', '12345678910', 15, 8, 161, NULL),
(16, 'UD. GoeMz aZhe', '9012345678910', '1234567890', 16, 8, 184, NULL),
(17, 'pt.angin ribut', '0298101098191919191', '8898917181991999199', 17, 8, 161, NULL),
(18, 'RPU MAJU MAKMUR', '12345678', '12345678910', 18, 4, 227, NULL),
(19, 'CV. BUMIKU HIJAU', '357246297009', 'TN.250.SN.441', 19, 4, 226, NULL),
(20, 'CV. Basalab Alga Prima', '121213131313', '2123130sdsakjdhasjak', 20, 8, 161, NULL),
(21, 'CV. Agniyaalbaqy', '12345678910', '12345678910', 21, 8, 161, NULL),
(22, 'WLannet', '123456', '123456', 22, 4, 226, NULL),
(23, 'OTO BENTO', '12345678910', '123123123', 23, 8, 179, NULL),
(24, 'PT. Global Sarana', '13.256.1-345.000', '123456789', 24, 1, 1, NULL),
(25, 'PT.MAJU AJAH', '123456789', '987654321', 25, 1, 176, NULL),
(26, 'PT. Usaha Jaya', '1234567891011', '91011121314', 26, 4, 242, NULL),
(27, 'CV Jaya Guna', '123456789', '123/456', 27, 8, 169, NULL),
(28, 'WLannet', '123456', '123456', 28, 4, 226, NULL),
(29, 'PT. Sukses Mandiri', '46.167.909.4-401.000', '090404110 – B  ', 29, 8, 272, NULL),
(30, 'Peternakan ', '123456789', 'No.12345', 30, 8, 158, NULL),
(31, 'PT SARIMELATI KENCANA', '123456789', '987654321', 31, 8, 183, NULL),
(32, 'PT. ASR Meat Supplier', '67.062.260.4-404.000', '0469/1.845.52', 32, 8, 161, NULL),
(33, 'CV. Larasindo', '12345678910111111', '1122349599596', 33, 5, 327, NULL),
(34, 'PT Manfaat', '1234', '24567', 34, 1, 161, NULL),
(35, 'PT. Aneka Hewan Sehat', '999-888-111.22-000', '1234558294', 35, 5, 179, NULL),
(36, 'PT. Gemilang Anugerah Sejahtera', '72.962.348.8-411.00', '503/000648-BP2T/30-08/PK/VI/2015', 36, 8, 268, NULL),
(37, 'PT. ARTA MANDIRI PERKASA ', '220-766-121-066', '080198120793', 37, 4, 220, NULL),
(38, 'PT.  Gemilang Anugrah Sejahtera', '72.962.348.8-411.000', '503/000648-BP2T/30-08/PK/VI/2015', 38, 8, 273, NULL),
(39, 'CV. Cahaya Permai', '15.617.027.8-701000', '12/SiUP/TL/11/2016', 39, 1, 327, NULL),
(40, 'pt cirebon kota', '19934568879900020', '19872003901001', 40, 8, 169, NULL),
(41, 'cv Solve Code', '1234567890', '1234567890', 41, 4, 264, NULL),
(42, 'PT Code Singa', '987654321', '14/15-2016', 42, 8, 169, NULL),
(43, 'PT Agus', '12345678901234', '1234', 43, 8, 181, NULL),
(44, 'PT. ARTA MANDIRI PERKASA', '088967543', '080198120793', 44, 4, 220, NULL),
(45, 'PT ABCDEF', '1234567', '9876353', 45, 1, 2, NULL),
(46, 'Digital Area inc', '454672829191', '738210127390', 46, 1, 1, NULL),
(47, 'PT DAGING SEJAHTERA', '123456788', '987654321', 47, 1, 1, NULL),
(48, 'CV Murni Abadi', '12356', '372674628789', 48, 8, 161, NULL),
(49, 'PT ID Pedia', '0123456789', '-', 49, 8, 161, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pemilikusaha`
--

CREATE TABLE `pemilikusaha` (
  `idPemilikUsaha` int(11) NOT NULL,
  `idOrang` int(11) NOT NULL,
  `TMTPemilikUsaha` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemilikusaha`
--

INSERT INTO `pemilikusaha` (`idPemilikUsaha`, `idOrang`, `TMTPemilikUsaha`) VALUES
(1, 1, '2016-12-01'),
(2, 2, '2016-12-01'),
(3, 3, '2016-12-01'),
(4, 4, '2016-12-02'),
(5, 5, '2016-12-02'),
(6, 6, '2016-12-02'),
(7, 7, '2016-12-02'),
(8, 8, '2016-12-05'),
(9, 9, '2016-12-05'),
(10, 10, '2016-12-06'),
(11, 11, '2016-12-08'),
(12, 13, '2016-12-08'),
(13, 14, '2016-12-08'),
(14, 15, '2016-12-08'),
(15, 16, '2016-12-08'),
(16, 17, '2016-12-08'),
(17, 18, '2016-12-08'),
(18, 19, '2016-12-08'),
(19, 20, '2016-12-08'),
(20, 21, '2016-12-08'),
(21, 22, '2016-12-08'),
(22, 23, '2016-12-08'),
(23, 24, '2016-12-08'),
(24, 25, '2016-12-08'),
(25, 26, '2016-12-08'),
(26, 27, '2016-12-08'),
(27, 28, '2016-12-08'),
(28, 29, '2016-12-08'),
(29, 30, '2016-12-08'),
(30, 31, '2016-12-08'),
(31, 32, '2016-12-08'),
(32, 33, '2016-12-08'),
(33, 34, '2016-12-08'),
(34, 35, '2016-12-08'),
(35, 36, '2016-12-08'),
(36, 37, '2016-12-08'),
(37, 38, '2016-12-08'),
(38, 39, '2016-12-08'),
(39, 40, '2016-12-08'),
(40, 41, '2016-12-08'),
(41, 42, '2016-12-08'),
(42, 43, '2016-12-08'),
(43, 44, '2016-12-08'),
(44, 45, '2016-12-08'),
(45, 46, '2016-12-20'),
(46, 47, '2017-01-11'),
(47, 50, '2017-06-21'),
(48, 51, '2017-11-27'),
(49, 52, '2019-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaprodukdistribusi`
--

CREATE TABLE `penerimaprodukdistribusi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `NamaPenerima` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JenisProduk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `JumlahProduk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AlamatPenerima` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surveyUnitUsaha_idsurveyUnitusaha` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penerimaprodukdistribusi`
--

INSERT INTO `penerimaprodukdistribusi` (`id`, `NamaPenerima`, `JenisProduk`, `JumlahProduk`, `AlamatPenerima`, `surveyUnitUsaha_idsurveyUnitusaha`) VALUES
(1, 'AS', 'sad', '121', 'dasdsa', '24'),
(2, 'asdads', 'asd', '212', 'asdasd', '24'),
(3, 'CV karya', 'Daging', '12', 'JL Malang Raya no 5', '25'),
(4, 'adsasd', 'dasasd', 'asd123', '1312dewdsds', '29'),
(5, '1312', 'dsad', 'sdaa', 'asd', '29');

-- --------------------------------------------------------

--
-- Table structure for table `pengawaskesmavet`
--

CREATE TABLE `pengawaskesmavet` (
  `idPengawasKesmavet` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `TMT` date DEFAULT NULL,
  `NoSK` varchar(45) DEFAULT NULL,
  `PNS_idPegawai` int(11) NOT NULL,
  `idWilayahKerja` int(11) NOT NULL,
  `idRegencyCity` int(10) UNSIGNED NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `isDokter` tinyint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengawaskesmavet`
--

INSERT INTO `pengawaskesmavet` (`idPengawasKesmavet`, `idUser`, `TMT`, `NoSK`, `PNS_idPegawai`, `idWilayahKerja`, `idRegencyCity`, `isActive`, `isDokter`) VALUES
(2, 81, '2019-09-01', '125878998', 1, 1, 1, 0, 1),
(3, 82, '2019-09-01', '8859667722', 2, 4, 33, 0, 0),
(4, 83, '2019-09-01', '9282808080', 3, 6, 13, 0, 0),
(6, 85, '2019-09-02', '1200002', 3, 8, 60, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `regencycity`
--

CREATE TABLE `regencycity` (
  `idRegencyCity` int(10) UNSIGNED NOT NULL COMMENT 'Surrogate key of Kabupaten/Kota',
  `RegencyCityCode` char(4) CHARACTER SET utf8 NOT NULL COMMENT 'Kode Kabupaten/Kota berdasarkan standar BPS',
  `ProvinceID` tinyint(3) UNSIGNED NOT NULL COMMENT 'Surrogate key of Propinsi',
  `RegencyCityNameID` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'Nama Kabupaten/Kota dalam Bahasa Indonesia',
  `RegencyCityNameEN` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT 'Nama Kabupaten/Kota dalam Bahasa Inggris'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `regencycity`
--

INSERT INTO `regencycity` (`idRegencyCity`, `RegencyCityCode`, `ProvinceID`, `RegencyCityNameID`, `RegencyCityNameEN`) VALUES
(1, '1101', 11, 'KABUPATEN SIMEULUE', 'KABUPATEN SIMEULUE'),
(2, '1102', 11, 'KABUPATEN ACEH SINGKIL', 'KABUPATEN ACEH SINGKIL'),
(3, '1103', 11, 'KABUPATEN ACEH SELATAN', 'KABUPATEN ACEH SELATAN'),
(4, '1104', 11, 'KABUPATEN ACEH TENGGARA', 'KABUPATEN ACEH TENGGARA'),
(5, '1105', 11, 'KABUPATEN ACEH TIMUR', 'KABUPATEN ACEH TIMUR'),
(6, '1106', 11, 'KABUPATEN ACEH TENGAH', 'KABUPATEN ACEH TENGAH'),
(7, '1107', 11, 'KABUPATEN ACEH BARAT', 'KABUPATEN ACEH BARAT'),
(8, '1108', 11, 'KABUPATEN ACEH BESAR', 'KABUPATEN ACEH BESAR'),
(9, '1109', 11, 'KABUPATEN PIDIE', 'KABUPATEN PIDIE'),
(10, '1110', 11, 'KABUPATEN BIREUEN', 'KABUPATEN BIREUEN'),
(11, '1111', 11, 'KABUPATEN ACEH UTARA', 'KABUPATEN ACEH UTARA'),
(12, '1112', 11, 'KABUPATEN ACEH BARAT DAYA', 'KABUPATEN ACEH BARAT DAYA'),
(13, '1113', 11, 'KABUPATEN GAYO LUES', 'KABUPATEN GAYO LUES'),
(14, '1114', 11, 'KABUPATEN ACEH TAMIANG', 'KABUPATEN ACEH TAMIANG'),
(15, '1115', 11, 'KABUPATEN NAGAN RAYA', 'KABUPATEN NAGAN RAYA'),
(16, '1116', 11, 'KABUPATEN ACEH JAYA', 'KABUPATEN ACEH JAYA'),
(17, '1117', 11, 'KABUPATEN BENER MERIAH', 'KABUPATEN BENER MERIAH'),
(18, '1118', 11, 'KABUPATEN PIDIE JAYA', 'KABUPATEN PIDIE JAYA'),
(19, '1171', 11, 'KOTA BANDA ACEH', 'KOTA BANDA ACEH'),
(20, '1172', 11, 'KOTA SABANG', 'KOTA SABANG'),
(21, '1173', 11, 'KOTA LANGSA', 'KOTA LANGSA'),
(22, '1174', 11, 'KOTA LHOKSEUMAWE', 'KOTA LHOKSEUMAWE'),
(23, '1175', 11, 'KOTA SUBULUSSALAM', 'KOTA SUBULUSSALAM'),
(24, '1201', 12, 'KABUPATEN NIAS', 'KABUPATEN NIAS'),
(25, '1202', 12, 'KABUPATEN MANDAILING NATAL', 'KABUPATEN MANDAILING NATAL'),
(26, '1203', 12, 'KABUPATEN TAPANULI SELATAN', 'KABUPATEN TAPANULI SELATAN'),
(27, '1204', 12, 'KABUPATEN TAPANULI TENGAH', 'KABUPATEN TAPANULI TENGAH'),
(28, '1205', 12, 'KABUPATEN TAPANULI UTARA', 'KABUPATEN TAPANULI UTARA'),
(29, '1206', 12, 'KABUPATEN TOBA SAMOSIR', 'KABUPATEN TOBA SAMOSIR'),
(30, '1207', 12, 'KABUPATEN LABUHAN BATU', 'KABUPATEN LABUHAN BATU'),
(31, '1208', 12, 'KABUPATEN ASAHAN', 'KABUPATEN ASAHAN'),
(32, '1209', 12, 'KABUPATEN SIMALUNGUN', 'KABUPATEN SIMALUNGUN'),
(33, '1210', 12, 'KABUPATEN DAIRI', 'KABUPATEN DAIRI'),
(34, '1211', 12, 'KABUPATEN KARO', 'KABUPATEN KARO'),
(35, '1212', 12, 'KABUPATEN DELI SERDANG', 'KABUPATEN DELI SERDANG'),
(36, '1213', 12, 'KABUPATEN LANGKAT', 'KABUPATEN LANGKAT'),
(37, '1214', 12, 'KABUPATEN NIAS SELATAN', 'KABUPATEN NIAS SELATAN'),
(38, '1215', 12, 'KABUPATEN HUMBANG HASUNDUTAN', 'KABUPATEN HUMBANG HASUNDUTAN'),
(39, '1216', 12, 'KABUPATEN PAKPAK BHARAT', 'KABUPATEN PAKPAK BHARAT'),
(40, '1217', 12, 'KABUPATEN SAMOSIR', 'KABUPATEN SAMOSIR'),
(41, '1218', 12, 'KABUPATEN SERDANG BEDAGAI', 'KABUPATEN SERDANG BEDAGAI'),
(42, '1219', 12, 'KABUPATEN BATU BARA', 'KABUPATEN BATU BARA'),
(43, '1220', 12, 'KABUPATEN PADANG LAWAS UTARA', 'KABUPATEN PADANG LAWAS UTARA'),
(44, '1221', 12, 'KABUPATEN PADANG LAWAS', 'KABUPATEN PADANG LAWAS'),
(45, '1222', 12, 'KABUPATEN LABUHAN BATU SELATAN', 'KABUPATEN LABUHAN BATU SELATAN'),
(46, '1223', 12, 'KABUPATEN LABUHAN BATU UTARA', 'KABUPATEN LABUHAN BATU UTARA'),
(47, '1224', 12, 'KABUPATEN NIAS UTARA', 'KABUPATEN NIAS UTARA'),
(48, '1225', 12, 'KABUPATEN NIAS BARAT', 'KABUPATEN NIAS BARAT'),
(49, '1271', 12, 'KOTA SIBOLGA', 'KOTA SIBOLGA'),
(50, '1272', 12, 'KOTA TANJUNG BALAI', 'KOTA TANJUNG BALAI'),
(51, '1273', 12, 'KOTA PEMATANG SIANTAR', 'KOTA PEMATANG SIANTAR'),
(52, '1274', 12, 'KOTA TEBING TINGGI', 'KOTA TEBING TINGGI'),
(53, '1275', 12, 'KOTA MEDAN', 'KOTA MEDAN'),
(54, '1276', 12, 'KOTA BINJAI', 'KOTA BINJAI'),
(55, '1277', 12, 'KOTA PADANGSIDIMPUAN', 'KOTA PADANGSIDIMPUAN'),
(56, '1278', 12, 'KOTA GUNUNGSITOLI', 'KOTA GUNUNGSITOLI'),
(57, '1301', 13, 'KABUPATEN KEPULAUAN MENTAWAI', 'KABUPATEN KEPULAUAN MENTAWAI'),
(58, '1302', 13, 'KABUPATEN PESISIR SELATAN', 'KABUPATEN PESISIR SELATAN'),
(59, '1303', 13, 'KABUPATEN SOLOK', 'KABUPATEN SOLOK'),
(60, '1304', 13, 'KABUPATEN SIJUNJUNG', 'KABUPATEN SIJUNJUNG'),
(61, '1305', 13, 'KABUPATEN TANAH DATAR', 'KABUPATEN TANAH DATAR'),
(62, '1306', 13, 'KABUPATEN PADANG PARIAMAN', 'KABUPATEN PADANG PARIAMAN'),
(63, '1307', 13, 'KABUPATEN AGAM', 'KABUPATEN AGAM'),
(64, '1308', 13, 'KABUPATEN LIMA PULUH KOTA', 'KABUPATEN LIMA PULUH KOTA'),
(65, '1309', 13, 'KABUPATEN PASAMAN', 'KABUPATEN PASAMAN'),
(66, '1310', 13, 'KABUPATEN SOLOK SELATAN', 'KABUPATEN SOLOK SELATAN'),
(67, '1311', 13, 'KABUPATEN DHARMASRAYA', 'KABUPATEN DHARMASRAYA'),
(68, '1312', 13, 'KABUPATEN PASAMAN BARAT', 'KABUPATEN PASAMAN BARAT'),
(69, '1371', 13, 'KOTA PADANG', 'KOTA PADANG'),
(70, '1372', 13, 'KOTA SOLOK', 'KOTA SOLOK'),
(71, '1373', 13, 'KOTA SAWAH LUNTO', 'KOTA SAWAH LUNTO'),
(72, '1374', 13, 'KOTA PADANG PANJANG', 'KOTA PADANG PANJANG'),
(73, '1375', 13, 'KOTA BUKITTINGGI', 'KOTA BUKITTINGGI'),
(74, '1376', 13, 'KOTA PAYAKUMBUH', 'KOTA PAYAKUMBUH'),
(75, '1377', 13, 'KOTA PARIAMAN', 'KOTA PARIAMAN'),
(76, '1401', 14, 'KABUPATEN KUANTAN SINGINGI', 'KABUPATEN KUANTAN SINGINGI'),
(77, '1402', 14, 'KABUPATEN INDRAGIRI HULU', 'KABUPATEN INDRAGIRI HULU'),
(78, '1403', 14, 'KABUPATEN INDRAGIRI HILIR', 'KABUPATEN INDRAGIRI HILIR'),
(79, '1404', 14, 'KABUPATEN PELALAWAN', 'KABUPATEN PELALAWAN'),
(80, '1405', 14, 'KABUPATEN S I A K', 'KABUPATEN S I A K'),
(81, '1406', 14, 'KABUPATEN KAMPAR', 'KABUPATEN KAMPAR'),
(82, '1407', 14, 'KABUPATEN ROKAN HULU', 'KABUPATEN ROKAN HULU'),
(83, '1408', 14, 'KABUPATEN BENGKALIS', 'KABUPATEN BENGKALIS'),
(84, '1409', 14, 'KABUPATEN ROKAN HILIR', 'KABUPATEN ROKAN HILIR'),
(85, '1410', 14, 'KABUPATEN KEPULAUAN MERANTI', 'KABUPATEN KEPULAUAN MERANTI'),
(86, '1471', 14, 'KOTA PEKANBARU', 'KOTA PEKANBARU'),
(87, '1473', 14, 'KOTA D U M A I', 'KOTA D U M A I'),
(88, '1501', 15, 'KABUPATEN KERINCI', 'KABUPATEN KERINCI'),
(89, '1502', 15, 'KABUPATEN MERANGIN', 'KABUPATEN MERANGIN'),
(90, '1503', 15, 'KABUPATEN SAROLANGUN', 'KABUPATEN SAROLANGUN'),
(91, '1504', 15, 'KABUPATEN BATANG HARI', 'KABUPATEN BATANG HARI'),
(92, '1505', 15, 'KABUPATEN MUARO JAMBI', 'KABUPATEN MUARO JAMBI'),
(93, '1506', 15, 'KABUPATEN TANJUNG JABUNG TIMUR', 'KABUPATEN TANJUNG JABUNG TIMUR'),
(94, '1507', 15, 'KABUPATEN TANJUNG JABUNG BARAT', 'KABUPATEN TANJUNG JABUNG BARAT'),
(95, '1508', 15, 'KABUPATEN TEBO', 'KABUPATEN TEBO'),
(96, '1509', 15, 'KABUPATEN BUNGO', 'KABUPATEN BUNGO'),
(97, '1571', 15, 'KOTA JAMBI', 'KOTA JAMBI'),
(98, '1572', 15, 'KOTA SUNGAI PENUH', 'KOTA SUNGAI PENUH'),
(99, '1601', 16, 'KABUPATEN OGAN KOMERING ULU', 'KABUPATEN OGAN KOMERING ULU'),
(100, '1602', 16, 'KABUPATEN OGAN KOMERING ILIR', 'KABUPATEN OGAN KOMERING ILIR'),
(101, '1603', 16, 'KABUPATEN MUARA ENIM', 'KABUPATEN MUARA ENIM'),
(102, '1604', 16, 'KABUPATEN LAHAT', 'KABUPATEN LAHAT'),
(103, '1605', 16, 'KABUPATEN MUSI RAWAS', 'KABUPATEN MUSI RAWAS'),
(104, '1606', 16, 'KABUPATEN MUSI BANYUASIN', 'KABUPATEN MUSI BANYUASIN'),
(105, '1607', 16, 'KABUPATEN BANYU ASIN', 'KABUPATEN BANYU ASIN'),
(106, '1608', 16, 'KABUPATEN OGAN KOMERING ULU SELATAN', 'KABUPATEN OGAN KOMERING ULU SELATAN'),
(107, '1609', 16, 'KABUPATEN OGAN KOMERING ULU TIMUR', 'KABUPATEN OGAN KOMERING ULU TIMUR'),
(108, '1610', 16, 'KABUPATEN OGAN ILIR', 'KABUPATEN OGAN ILIR'),
(109, '1611', 16, 'KABUPATEN EMPAT LAWANG', 'KABUPATEN EMPAT LAWANG'),
(110, '1612', 16, 'KABUPATEN PENUKAL ABAB LEMATANG ILIR', 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
(111, '1613', 16, 'KABUPATEN MUSI RAWAS UTARA', 'KABUPATEN MUSI RAWAS UTARA'),
(112, '1671', 16, 'KOTA PALEMBANG', 'KOTA PALEMBANG'),
(113, '1672', 16, 'KOTA PRABUMULIH', 'KOTA PRABUMULIH'),
(114, '1673', 16, 'KOTA PAGAR ALAM', 'KOTA PAGAR ALAM'),
(115, '1674', 16, 'KOTA LUBUKLINGGAU', 'KOTA LUBUKLINGGAU'),
(116, '1701', 17, 'KABUPATEN BENGKULU SELATAN', 'KABUPATEN BENGKULU SELATAN'),
(117, '1702', 17, 'KABUPATEN REJANG LEBONG', 'KABUPATEN REJANG LEBONG'),
(118, '1703', 17, 'KABUPATEN BENGKULU UTARA', 'KABUPATEN BENGKULU UTARA'),
(119, '1704', 17, 'KABUPATEN KAUR', 'KABUPATEN KAUR'),
(120, '1705', 17, 'KABUPATEN SELUMA', 'KABUPATEN SELUMA'),
(121, '1706', 17, 'KABUPATEN MUKOMUKO', 'KABUPATEN MUKOMUKO'),
(122, '1707', 17, 'KABUPATEN LEBONG', 'KABUPATEN LEBONG'),
(123, '1708', 17, 'KABUPATEN KEPAHIANG', 'KABUPATEN KEPAHIANG'),
(124, '1709', 17, 'KABUPATEN BENGKULU TENGAH', 'KABUPATEN BENGKULU TENGAH'),
(125, '1771', 17, 'KOTA BENGKULU', 'KOTA BENGKULU'),
(126, '1801', 18, 'KABUPATEN LAMPUNG BARAT', 'KABUPATEN LAMPUNG BARAT'),
(127, '1802', 18, 'KABUPATEN TANGGAMUS', 'KABUPATEN TANGGAMUS'),
(128, '1803', 18, 'KABUPATEN LAMPUNG SELATAN', 'KABUPATEN LAMPUNG SELATAN'),
(129, '1804', 18, 'KABUPATEN LAMPUNG TIMUR', 'KABUPATEN LAMPUNG TIMUR'),
(130, '1805', 18, 'KABUPATEN LAMPUNG TENGAH', 'KABUPATEN LAMPUNG TENGAH'),
(131, '1806', 18, 'KABUPATEN LAMPUNG UTARA', 'KABUPATEN LAMPUNG UTARA'),
(132, '1807', 18, 'KABUPATEN WAY KANAN', 'KABUPATEN WAY KANAN'),
(133, '1808', 18, 'KABUPATEN TULANGBAWANG', 'KABUPATEN TULANGBAWANG'),
(134, '1809', 18, 'KABUPATEN PESAWARAN', 'KABUPATEN PESAWARAN'),
(135, '1810', 18, 'KABUPATEN PRINGSEWU', 'KABUPATEN PRINGSEWU'),
(136, '1811', 18, 'KABUPATEN MESUJI', 'KABUPATEN MESUJI'),
(137, '1812', 18, 'KABUPATEN TULANG BAWANG BARAT', 'KABUPATEN TULANG BAWANG BARAT'),
(138, '1813', 18, 'KABUPATEN PESISIR BARAT', 'KABUPATEN PESISIR BARAT'),
(139, '1871', 18, 'KOTA BANDAR LAMPUNG', 'KOTA BANDAR LAMPUNG'),
(140, '1872', 18, 'KOTA METRO', 'KOTA METRO'),
(141, '1901', 19, 'KABUPATEN BANGKA', 'KABUPATEN BANGKA'),
(142, '1902', 19, 'KABUPATEN BELITUNG', 'KABUPATEN BELITUNG'),
(143, '1903', 19, 'KABUPATEN BANGKA BARAT', 'KABUPATEN BANGKA BARAT'),
(144, '1904', 19, 'KABUPATEN BANGKA TENGAH', 'KABUPATEN BANGKA TENGAH'),
(145, '1905', 19, 'KABUPATEN BANGKA SELATAN', 'KABUPATEN BANGKA SELATAN'),
(146, '1906', 19, 'KABUPATEN BELITUNG TIMUR', 'KABUPATEN BELITUNG TIMUR'),
(147, '1971', 19, 'KOTA PANGKAL PINANG', 'KOTA PANGKAL PINANG'),
(148, '2101', 21, 'KABUPATEN KARIMUN', 'KABUPATEN KARIMUN'),
(149, '2102', 21, 'KABUPATEN BINTAN', 'KABUPATEN BINTAN'),
(150, '2103', 21, 'KABUPATEN NATUNA', 'KABUPATEN NATUNA'),
(151, '2104', 21, 'KABUPATEN LINGGA', 'KABUPATEN LINGGA'),
(152, '2105', 21, 'KABUPATEN KEPULAUAN ANAMBAS', 'KABUPATEN KEPULAUAN ANAMBAS'),
(153, '2171', 21, 'KOTA B A T A M', 'KOTA B A T A M'),
(154, '2172', 21, 'KOTA TANJUNG PINANG', 'KOTA TANJUNG PINANG'),
(155, '3101', 31, 'KABUPATEN KEPULAUAN SERIBU', 'KABUPATEN KEPULAUAN SERIBU'),
(156, '3171', 31, 'KOTA JAKARTA SELATAN', 'KOTA JAKARTA SELATAN'),
(157, '3172', 31, 'KOTA JAKARTA TIMUR', 'KOTA JAKARTA TIMUR'),
(158, '3173', 31, 'KOTA JAKARTA PUSAT', 'KOTA JAKARTA PUSAT'),
(159, '3174', 31, 'KOTA JAKARTA BARAT', 'KOTA JAKARTA BARAT'),
(160, '3175', 31, 'KOTA JAKARTA UTARA', 'KOTA JAKARTA UTARA'),
(161, '3201', 32, 'KABUPATEN BOGOR', 'KABUPATEN BOGOR'),
(162, '3202', 32, 'KABUPATEN SUKABUMI', 'KABUPATEN SUKABUMI'),
(163, '3203', 32, 'KABUPATEN CIANJUR', 'KABUPATEN CIANJUR'),
(164, '3204', 32, 'KABUPATEN BANDUNG', 'KABUPATEN BANDUNG'),
(165, '3205', 32, 'KABUPATEN GARUT', 'KABUPATEN GARUT'),
(166, '3206', 32, 'KABUPATEN TASIKMALAYA', 'KABUPATEN TASIKMALAYA'),
(167, '3207', 32, 'KABUPATEN CIAMIS', 'KABUPATEN CIAMIS'),
(168, '3208', 32, 'KABUPATEN KUNINGAN', 'KABUPATEN KUNINGAN'),
(169, '3209', 32, 'KABUPATEN CIREBON', 'KABUPATEN CIREBON'),
(170, '3210', 32, 'KABUPATEN MAJALENGKA', 'KABUPATEN MAJALENGKA'),
(171, '3211', 32, 'KABUPATEN SUMEDANG', 'KABUPATEN SUMEDANG'),
(172, '3212', 32, 'KABUPATEN INDRAMAYU', 'KABUPATEN INDRAMAYU'),
(173, '3213', 32, 'KABUPATEN SUBANG', 'KABUPATEN SUBANG'),
(174, '3214', 32, 'KABUPATEN PURWAKARTA', 'KABUPATEN PURWAKARTA'),
(175, '3215', 32, 'KABUPATEN KARAWANG', 'KABUPATEN KARAWANG'),
(176, '3216', 32, 'KABUPATEN BEKASI', 'KABUPATEN BEKASI'),
(177, '3217', 32, 'KABUPATEN BANDUNG BARAT', 'KABUPATEN BANDUNG BARAT'),
(178, '3218', 32, 'KABUPATEN PANGANDARAN', 'KABUPATEN PANGANDARAN'),
(179, '3271', 32, 'KOTA BOGOR', 'KOTA BOGOR'),
(180, '3272', 32, 'KOTA SUKABUMI', 'KOTA SUKABUMI'),
(181, '3273', 32, 'KOTA BANDUNG', 'KOTA BANDUNG'),
(182, '3274', 32, 'KOTA CIREBON', 'KOTA CIREBON'),
(183, '3275', 32, 'KOTA BEKASI', 'KOTA BEKASI'),
(184, '3276', 32, 'KOTA DEPOK', 'KOTA DEPOK'),
(185, '3277', 32, 'KOTA CIMAHI', 'KOTA CIMAHI'),
(186, '3278', 32, 'KOTA TASIKMALAYA', 'KOTA TASIKMALAYA'),
(187, '3279', 32, 'KOTA BANJAR', 'KOTA BANJAR'),
(188, '3301', 33, 'KABUPATEN CILACAP', 'KABUPATEN CILACAP'),
(189, '3302', 33, 'KABUPATEN BANYUMAS', 'KABUPATEN BANYUMAS'),
(190, '3303', 33, 'KABUPATEN PURBALINGGA', 'KABUPATEN PURBALINGGA'),
(191, '3304', 33, 'KABUPATEN BANJARNEGARA', 'KABUPATEN BANJARNEGARA'),
(192, '3305', 33, 'KABUPATEN KEBUMEN', 'KABUPATEN KEBUMEN'),
(193, '3306', 33, 'KABUPATEN PURWOREJO', 'KABUPATEN PURWOREJO'),
(194, '3307', 33, 'KABUPATEN WONOSOBO', 'KABUPATEN WONOSOBO'),
(195, '3308', 33, 'KABUPATEN MAGELANG', 'KABUPATEN MAGELANG'),
(196, '3309', 33, 'KABUPATEN BOYOLALI', 'KABUPATEN BOYOLALI'),
(197, '3310', 33, 'KABUPATEN KLATEN', 'KABUPATEN KLATEN'),
(198, '3311', 33, 'KABUPATEN SUKOHARJO', 'KABUPATEN SUKOHARJO'),
(199, '3312', 33, 'KABUPATEN WONOGIRI', 'KABUPATEN WONOGIRI'),
(200, '3313', 33, 'KABUPATEN KARANGANYAR', 'KABUPATEN KARANGANYAR'),
(201, '3314', 33, 'KABUPATEN SRAGEN', 'KABUPATEN SRAGEN'),
(202, '3315', 33, 'KABUPATEN GROBOGAN', 'KABUPATEN GROBOGAN'),
(203, '3316', 33, 'KABUPATEN BLORA', 'KABUPATEN BLORA'),
(204, '3317', 33, 'KABUPATEN REMBANG', 'KABUPATEN REMBANG'),
(205, '3318', 33, 'KABUPATEN PATI', 'KABUPATEN PATI'),
(206, '3319', 33, 'KABUPATEN KUDUS', 'KABUPATEN KUDUS'),
(207, '3320', 33, 'KABUPATEN JEPARA', 'KABUPATEN JEPARA'),
(208, '3321', 33, 'KABUPATEN DEMAK', 'KABUPATEN DEMAK'),
(209, '3322', 33, 'KABUPATEN SEMARANG', 'KABUPATEN SEMARANG'),
(210, '3323', 33, 'KABUPATEN TEMANGGUNG', 'KABUPATEN TEMANGGUNG'),
(211, '3324', 33, 'KABUPATEN KENDAL', 'KABUPATEN KENDAL'),
(212, '3325', 33, 'KABUPATEN BATANG', 'KABUPATEN BATANG'),
(213, '3326', 33, 'KABUPATEN PEKALONGAN', 'KABUPATEN PEKALONGAN'),
(214, '3327', 33, 'KABUPATEN PEMALANG', 'KABUPATEN PEMALANG'),
(215, '3328', 33, 'KABUPATEN TEGAL', 'KABUPATEN TEGAL'),
(216, '3329', 33, 'KABUPATEN BREBES', 'KABUPATEN BREBES'),
(217, '3371', 33, 'KOTA MAGELANG', 'KOTA MAGELANG'),
(218, '3372', 33, 'KOTA SURAKARTA', 'KOTA SURAKARTA'),
(219, '3373', 33, 'KOTA SALATIGA', 'KOTA SALATIGA'),
(220, '3374', 33, 'KOTA SEMARANG', 'KOTA SEMARANG'),
(221, '3375', 33, 'KOTA PEKALONGAN', 'KOTA PEKALONGAN'),
(222, '3376', 33, 'KOTA TEGAL', 'KOTA TEGAL'),
(223, '3401', 34, 'KABUPATEN KULON PROGO', 'KABUPATEN KULON PROGO'),
(224, '3402', 34, 'KABUPATEN BANTUL', 'KABUPATEN BANTUL'),
(225, '3403', 34, 'KABUPATEN GUNUNG KIDUL', 'KABUPATEN GUNUNG KIDUL'),
(226, '3404', 34, 'KABUPATEN SLEMAN', 'KABUPATEN SLEMAN'),
(227, '3471', 34, 'KOTA YOGYAKARTA', 'KOTA YOGYAKARTA'),
(228, '3501', 35, 'KABUPATEN PACITAN', 'KABUPATEN PACITAN'),
(229, '3502', 35, 'KABUPATEN PONOROGO', 'KABUPATEN PONOROGO'),
(230, '3503', 35, 'KABUPATEN TRENGGALEK', 'KABUPATEN TRENGGALEK'),
(231, '3504', 35, 'KABUPATEN TULUNGAGUNG', 'KABUPATEN TULUNGAGUNG'),
(232, '3505', 35, 'KABUPATEN BLITAR', 'KABUPATEN BLITAR'),
(233, '3506', 35, 'KABUPATEN KEDIRI', 'KABUPATEN KEDIRI'),
(234, '3507', 35, 'KABUPATEN MALANG', 'KABUPATEN MALANG'),
(235, '3508', 35, 'KABUPATEN LUMAJANG', 'KABUPATEN LUMAJANG'),
(236, '3509', 35, 'KABUPATEN JEMBER', 'KABUPATEN JEMBER'),
(237, '3510', 35, 'KABUPATEN BANYUWANGI', 'KABUPATEN BANYUWANGI'),
(238, '3511', 35, 'KABUPATEN BONDOWOSO', 'KABUPATEN BONDOWOSO'),
(239, '3512', 35, 'KABUPATEN SITUBONDO', 'KABUPATEN SITUBONDO'),
(240, '3513', 35, 'KABUPATEN PROBOLINGGO', 'KABUPATEN PROBOLINGGO'),
(241, '3514', 35, 'KABUPATEN PASURUAN', 'KABUPATEN PASURUAN'),
(242, '3515', 35, 'KABUPATEN SIDOARJO', 'KABUPATEN SIDOARJO'),
(243, '3516', 35, 'KABUPATEN MOJOKERTO', 'KABUPATEN MOJOKERTO'),
(244, '3517', 35, 'KABUPATEN JOMBANG', 'KABUPATEN JOMBANG'),
(245, '3518', 35, 'KABUPATEN NGANJUK', 'KABUPATEN NGANJUK'),
(246, '3519', 35, 'KABUPATEN MADIUN', 'KABUPATEN MADIUN'),
(247, '3520', 35, 'KABUPATEN MAGETAN', 'KABUPATEN MAGETAN'),
(248, '3521', 35, 'KABUPATEN NGAWI', 'KABUPATEN NGAWI'),
(249, '3522', 35, 'KABUPATEN BOJONEGORO', 'KABUPATEN BOJONEGORO'),
(250, '3523', 35, 'KABUPATEN TUBAN', 'KABUPATEN TUBAN'),
(251, '3524', 35, 'KABUPATEN LAMONGAN', 'KABUPATEN LAMONGAN'),
(252, '3525', 35, 'KABUPATEN GRESIK', 'KABUPATEN GRESIK'),
(253, '3526', 35, 'KABUPATEN BANGKALAN', 'KABUPATEN BANGKALAN'),
(254, '3527', 35, 'KABUPATEN SAMPANG', 'KABUPATEN SAMPANG'),
(255, '3528', 35, 'KABUPATEN PAMEKASAN', 'KABUPATEN PAMEKASAN'),
(256, '3529', 35, 'KABUPATEN SUMENEP', 'KABUPATEN SUMENEP'),
(257, '3571', 35, 'KOTA KEDIRI', 'KOTA KEDIRI'),
(258, '3572', 35, 'KOTA BLITAR', 'KOTA BLITAR'),
(259, '3573', 35, 'KOTA MALANG', 'KOTA MALANG'),
(260, '3574', 35, 'KOTA PROBOLINGGO', 'KOTA PROBOLINGGO'),
(261, '3575', 35, 'KOTA PASURUAN', 'KOTA PASURUAN'),
(262, '3576', 35, 'KOTA MOJOKERTO', 'KOTA MOJOKERTO'),
(263, '3577', 35, 'KOTA MADIUN', 'KOTA MADIUN'),
(264, '3578', 35, 'KOTA SURABAYA', 'KOTA SURABAYA'),
(265, '3579', 35, 'KOTA BATU', 'KOTA BATU'),
(266, '3601', 36, 'KABUPATEN PANDEGLANG', 'KABUPATEN PANDEGLANG'),
(267, '3602', 36, 'KABUPATEN LEBAK', 'KABUPATEN LEBAK'),
(268, '3603', 36, 'KABUPATEN TANGERANG', 'KABUPATEN TANGERANG'),
(269, '3604', 36, 'KABUPATEN SERANG', 'KABUPATEN SERANG'),
(270, '3671', 36, 'KOTA TANGERANG', 'KOTA TANGERANG'),
(271, '3672', 36, 'KOTA CILEGON', 'KOTA CILEGON'),
(272, '3673', 36, 'KOTA SERANG', 'KOTA SERANG'),
(273, '3674', 36, 'KOTA TANGERANG SELATAN', 'KOTA TANGERANG SELATAN'),
(274, '5101', 51, 'KABUPATEN JEMBRANA', 'KABUPATEN JEMBRANA'),
(275, '5102', 51, 'KABUPATEN TABANAN', 'KABUPATEN TABANAN'),
(276, '5103', 51, 'KABUPATEN BADUNG', 'KABUPATEN BADUNG'),
(277, '5104', 51, 'KABUPATEN GIANYAR', 'KABUPATEN GIANYAR'),
(278, '5105', 51, 'KABUPATEN KLUNGKUNG', 'KABUPATEN KLUNGKUNG'),
(279, '5106', 51, 'KABUPATEN BANGLI', 'KABUPATEN BANGLI'),
(280, '5107', 51, 'KABUPATEN KARANG ASEM', 'KABUPATEN KARANG ASEM'),
(281, '5108', 51, 'KABUPATEN BULELENG', 'KABUPATEN BULELENG'),
(282, '5171', 51, 'KOTA DENPASAR', 'KOTA DENPASAR'),
(283, '5201', 52, 'KABUPATEN LOMBOK BARAT', 'KABUPATEN LOMBOK BARAT'),
(284, '5202', 52, 'KABUPATEN LOMBOK TENGAH', 'KABUPATEN LOMBOK TENGAH'),
(285, '5203', 52, 'KABUPATEN LOMBOK TIMUR', 'KABUPATEN LOMBOK TIMUR'),
(286, '5204', 52, 'KABUPATEN SUMBAWA', 'KABUPATEN SUMBAWA'),
(287, '5205', 52, 'KABUPATEN DOMPU', 'KABUPATEN DOMPU'),
(288, '5206', 52, 'KABUPATEN BIMA', 'KABUPATEN BIMA'),
(289, '5207', 52, 'KABUPATEN SUMBAWA BARAT', 'KABUPATEN SUMBAWA BARAT'),
(290, '5208', 52, 'KABUPATEN LOMBOK UTARA', 'KABUPATEN LOMBOK UTARA'),
(291, '5271', 52, 'KOTA MATARAM', 'KOTA MATARAM'),
(292, '5272', 52, 'KOTA BIMA', 'KOTA BIMA'),
(293, '5301', 53, 'KABUPATEN SUMBA BARAT', 'KABUPATEN SUMBA BARAT'),
(294, '5302', 53, 'KABUPATEN SUMBA TIMUR', 'KABUPATEN SUMBA TIMUR'),
(295, '5303', 53, 'KABUPATEN KUPANG', 'KABUPATEN KUPANG'),
(296, '5304', 53, 'KABUPATEN TIMOR TENGAH SELATAN', 'KABUPATEN TIMOR TENGAH SELATAN'),
(297, '5305', 53, 'KABUPATEN TIMOR TENGAH UTARA', 'KABUPATEN TIMOR TENGAH UTARA'),
(298, '5306', 53, 'KABUPATEN BELU', 'KABUPATEN BELU'),
(299, '5307', 53, 'KABUPATEN ALOR', 'KABUPATEN ALOR'),
(300, '5308', 53, 'KABUPATEN LEMBATA', 'KABUPATEN LEMBATA'),
(301, '5309', 53, 'KABUPATEN FLORES TIMUR', 'KABUPATEN FLORES TIMUR'),
(302, '5310', 53, 'KABUPATEN SIKKA', 'KABUPATEN SIKKA'),
(303, '5311', 53, 'KABUPATEN ENDE', 'KABUPATEN ENDE'),
(304, '5312', 53, 'KABUPATEN NGADA', 'KABUPATEN NGADA'),
(305, '5313', 53, 'KABUPATEN MANGGARAI', 'KABUPATEN MANGGARAI'),
(306, '5314', 53, 'KABUPATEN ROTE NDAO', 'KABUPATEN ROTE NDAO'),
(307, '5315', 53, 'KABUPATEN MANGGARAI BARAT', 'KABUPATEN MANGGARAI BARAT'),
(308, '5316', 53, 'KABUPATEN SUMBA TENGAH', 'KABUPATEN SUMBA TENGAH'),
(309, '5317', 53, 'KABUPATEN SUMBA BARAT DAYA', 'KABUPATEN SUMBA BARAT DAYA'),
(310, '5318', 53, 'KABUPATEN NAGEKEO', 'KABUPATEN NAGEKEO'),
(311, '5319', 53, 'KABUPATEN MANGGARAI TIMUR', 'KABUPATEN MANGGARAI TIMUR'),
(312, '5320', 53, 'KABUPATEN SABU RAIJUA', 'KABUPATEN SABU RAIJUA'),
(313, '5321', 53, 'KABUPATEN MALAKA', 'KABUPATEN MALAKA'),
(314, '5371', 53, 'KOTA KUPANG', 'KOTA KUPANG'),
(315, '6101', 61, 'KABUPATEN SAMBAS', 'KABUPATEN SAMBAS'),
(316, '6102', 61, 'KABUPATEN BENGKAYANG', 'KABUPATEN BENGKAYANG'),
(317, '6103', 61, 'KABUPATEN LANDAK', 'KABUPATEN LANDAK'),
(318, '6104', 61, 'KABUPATEN MEMPAWAH', 'KABUPATEN MEMPAWAH'),
(319, '6105', 61, 'KABUPATEN SANGGAU', 'KABUPATEN SANGGAU'),
(320, '6106', 61, 'KABUPATEN KETAPANG', 'KABUPATEN KETAPANG'),
(321, '6107', 61, 'KABUPATEN SINTANG', 'KABUPATEN SINTANG'),
(322, '6108', 61, 'KABUPATEN KAPUAS HULU', 'KABUPATEN KAPUAS HULU'),
(323, '6109', 61, 'KABUPATEN SEKADAU', 'KABUPATEN SEKADAU'),
(324, '6110', 61, 'KABUPATEN MELAWI', 'KABUPATEN MELAWI'),
(325, '6111', 61, 'KABUPATEN KAYONG UTARA', 'KABUPATEN KAYONG UTARA'),
(326, '6112', 61, 'KABUPATEN KUBU RAYA', 'KABUPATEN KUBU RAYA'),
(327, '6171', 61, 'KOTA PONTIANAK', 'KOTA PONTIANAK'),
(328, '6172', 61, 'KOTA SINGKAWANG', 'KOTA SINGKAWANG'),
(329, '6201', 62, 'KABUPATEN KOTAWARINGIN BARAT', 'KABUPATEN KOTAWARINGIN BARAT'),
(330, '6202', 62, 'KABUPATEN KOTAWARINGIN TIMUR', 'KABUPATEN KOTAWARINGIN TIMUR'),
(331, '6203', 62, 'KABUPATEN KAPUAS', 'KABUPATEN KAPUAS'),
(332, '6204', 62, 'KABUPATEN BARITO SELATAN', 'KABUPATEN BARITO SELATAN'),
(333, '6205', 62, 'KABUPATEN BARITO UTARA', 'KABUPATEN BARITO UTARA'),
(334, '6206', 62, 'KABUPATEN SUKAMARA', 'KABUPATEN SUKAMARA'),
(335, '6207', 62, 'KABUPATEN LAMANDAU', 'KABUPATEN LAMANDAU'),
(336, '6208', 62, 'KABUPATEN SERUYAN', 'KABUPATEN SERUYAN'),
(337, '6209', 62, 'KABUPATEN KATINGAN', 'KABUPATEN KATINGAN'),
(338, '6210', 62, 'KABUPATEN PULANG PISAU', 'KABUPATEN PULANG PISAU'),
(339, '6211', 62, 'KABUPATEN GUNUNG MAS', 'KABUPATEN GUNUNG MAS'),
(340, '6212', 62, 'KABUPATEN BARITO TIMUR', 'KABUPATEN BARITO TIMUR'),
(341, '6213', 62, 'KABUPATEN MURUNG RAYA', 'KABUPATEN MURUNG RAYA'),
(342, '6271', 62, 'KOTA PALANGKA RAYA', 'KOTA PALANGKA RAYA'),
(343, '6301', 63, 'KABUPATEN TANAH LAUT', 'KABUPATEN TANAH LAUT'),
(344, '6302', 63, 'KABUPATEN KOTA BARU', 'KABUPATEN KOTA BARU'),
(345, '6303', 63, 'KABUPATEN BANJAR', 'KABUPATEN BANJAR'),
(346, '6304', 63, 'KABUPATEN BARITO KUALA', 'KABUPATEN BARITO KUALA'),
(347, '6305', 63, 'KABUPATEN TAPIN', 'KABUPATEN TAPIN'),
(348, '6306', 63, 'KABUPATEN HULU SUNGAI SELATAN', 'KABUPATEN HULU SUNGAI SELATAN'),
(349, '6307', 63, 'KABUPATEN HULU SUNGAI TENGAH', 'KABUPATEN HULU SUNGAI TENGAH'),
(350, '6308', 63, 'KABUPATEN HULU SUNGAI UTARA', 'KABUPATEN HULU SUNGAI UTARA'),
(351, '6309', 63, 'KABUPATEN TABALONG', 'KABUPATEN TABALONG'),
(352, '6310', 63, 'KABUPATEN TANAH BUMBU', 'KABUPATEN TANAH BUMBU'),
(353, '6311', 63, 'KABUPATEN BALANGAN', 'KABUPATEN BALANGAN'),
(354, '6371', 63, 'KOTA BANJARMASIN', 'KOTA BANJARMASIN'),
(355, '6372', 63, 'KOTA BANJAR BARU', 'KOTA BANJAR BARU'),
(356, '6401', 64, 'KABUPATEN PASER', 'KABUPATEN PASER'),
(357, '6402', 64, 'KABUPATEN KUTAI BARAT', 'KABUPATEN KUTAI BARAT'),
(358, '6403', 64, 'KABUPATEN KUTAI KARTANEGARA', 'KABUPATEN KUTAI KARTANEGARA'),
(359, '6404', 64, 'KABUPATEN KUTAI TIMUR', 'KABUPATEN KUTAI TIMUR'),
(360, '6405', 64, 'KABUPATEN BERAU', 'KABUPATEN BERAU'),
(361, '6409', 64, 'KABUPATEN PENAJAM PASER UTARA', 'KABUPATEN PENAJAM PASER UTARA'),
(362, '6411', 64, 'KABUPATEN MAHAKAM HULU', 'KABUPATEN MAHAKAM HULU'),
(363, '6471', 64, 'KOTA BALIKPAPAN', 'KOTA BALIKPAPAN'),
(364, '6472', 64, 'KOTA SAMARINDA', 'KOTA SAMARINDA'),
(365, '6474', 64, 'KOTA BONTANG', 'KOTA BONTANG'),
(366, '6501', 65, 'KABUPATEN MALINAU', 'KABUPATEN MALINAU'),
(367, '6502', 65, 'KABUPATEN BULUNGAN', 'KABUPATEN BULUNGAN'),
(368, '6503', 65, 'KABUPATEN TANA TIDUNG', 'KABUPATEN TANA TIDUNG'),
(369, '6504', 65, 'KABUPATEN NUNUKAN', 'KABUPATEN NUNUKAN'),
(370, '6571', 65, 'KOTA TARAKAN', 'KOTA TARAKAN'),
(371, '7101', 71, 'KABUPATEN BOLAANG MONGONDOW', 'KABUPATEN BOLAANG MONGONDOW'),
(372, '7102', 71, 'KABUPATEN MINAHASA', 'KABUPATEN MINAHASA'),
(373, '7103', 71, 'KABUPATEN KEPULAUAN SANGIHE', 'KABUPATEN KEPULAUAN SANGIHE'),
(374, '7104', 71, 'KABUPATEN KEPULAUAN TALAUD', 'KABUPATEN KEPULAUAN TALAUD'),
(375, '7105', 71, 'KABUPATEN MINAHASA SELATAN', 'KABUPATEN MINAHASA SELATAN'),
(376, '7106', 71, 'KABUPATEN MINAHASA UTARA', 'KABUPATEN MINAHASA UTARA'),
(377, '7107', 71, 'KABUPATEN BOLAANG MONGONDOW UTARA', 'KABUPATEN BOLAANG MONGONDOW UTARA'),
(378, '7108', 71, 'KABUPATEN SIAU TAGULANDANG BIARO', 'KABUPATEN SIAU TAGULANDANG BIARO'),
(379, '7109', 71, 'KABUPATEN MINAHASA TENGGARA', 'KABUPATEN MINAHASA TENGGARA'),
(380, '7110', 71, 'KABUPATEN BOLAANG MONGONDOW SELATAN', 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
(381, '7111', 71, 'KABUPATEN BOLAANG MONGONDOW TIMUR', 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
(382, '7171', 71, 'KOTA MANADO', 'KOTA MANADO'),
(383, '7172', 71, 'KOTA BITUNG', 'KOTA BITUNG'),
(384, '7173', 71, 'KOTA TOMOHON', 'KOTA TOMOHON'),
(385, '7174', 71, 'KOTA KOTAMOBAGU', 'KOTA KOTAMOBAGU'),
(386, '7201', 72, 'KABUPATEN BANGGAI KEPULAUAN', 'KABUPATEN BANGGAI KEPULAUAN'),
(387, '7202', 72, 'KABUPATEN BANGGAI', 'KABUPATEN BANGGAI'),
(388, '7203', 72, 'KABUPATEN MOROWALI', 'KABUPATEN MOROWALI'),
(389, '7204', 72, 'KABUPATEN POSO', 'KABUPATEN POSO'),
(390, '7205', 72, 'KABUPATEN DONGGALA', 'KABUPATEN DONGGALA'),
(391, '7206', 72, 'KABUPATEN TOLI-TOLI', 'KABUPATEN TOLI-TOLI'),
(392, '7207', 72, 'KABUPATEN BUOL', 'KABUPATEN BUOL'),
(393, '7208', 72, 'KABUPATEN PARIGI MOUTONG', 'KABUPATEN PARIGI MOUTONG'),
(394, '7209', 72, 'KABUPATEN TOJO UNA-UNA', 'KABUPATEN TOJO UNA-UNA'),
(395, '7210', 72, 'KABUPATEN SIGI', 'KABUPATEN SIGI'),
(396, '7211', 72, 'KABUPATEN BANGGAI LAUT', 'KABUPATEN BANGGAI LAUT'),
(397, '7212', 72, 'KABUPATEN MOROWALI UTARA', 'KABUPATEN MOROWALI UTARA'),
(398, '7271', 72, 'KOTA PALU', 'KOTA PALU'),
(399, '7301', 73, 'KABUPATEN KEPULAUAN SELAYAR', 'KABUPATEN KEPULAUAN SELAYAR'),
(400, '7302', 73, 'KABUPATEN BULUKUMBA', 'KABUPATEN BULUKUMBA'),
(401, '7303', 73, 'KABUPATEN BANTAENG', 'KABUPATEN BANTAENG'),
(402, '7304', 73, 'KABUPATEN JENEPONTO', 'KABUPATEN JENEPONTO'),
(403, '7305', 73, 'KABUPATEN TAKALAR', 'KABUPATEN TAKALAR'),
(404, '7306', 73, 'KABUPATEN GOWA', 'KABUPATEN GOWA'),
(405, '7307', 73, 'KABUPATEN SINJAI', 'KABUPATEN SINJAI'),
(406, '7308', 73, 'KABUPATEN MAROS', 'KABUPATEN MAROS'),
(407, '7309', 73, 'KABUPATEN PANGKAJENE DAN KEPULAUAN', 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
(408, '7310', 73, 'KABUPATEN BARRU', 'KABUPATEN BARRU'),
(409, '7311', 73, 'KABUPATEN BONE', 'KABUPATEN BONE'),
(410, '7312', 73, 'KABUPATEN SOPPENG', 'KABUPATEN SOPPENG'),
(411, '7313', 73, 'KABUPATEN WAJO', 'KABUPATEN WAJO'),
(412, '7314', 73, 'KABUPATEN SIDENRENG RAPPANG', 'KABUPATEN SIDENRENG RAPPANG'),
(413, '7315', 73, 'KABUPATEN PINRANG', 'KABUPATEN PINRANG'),
(414, '7316', 73, 'KABUPATEN ENREKANG', 'KABUPATEN ENREKANG'),
(415, '7317', 73, 'KABUPATEN LUWU', 'KABUPATEN LUWU'),
(416, '7318', 73, 'KABUPATEN TANA TORAJA', 'KABUPATEN TANA TORAJA'),
(417, '7322', 73, 'KABUPATEN LUWU UTARA', 'KABUPATEN LUWU UTARA'),
(418, '7325', 73, 'KABUPATEN LUWU TIMUR', 'KABUPATEN LUWU TIMUR'),
(419, '7326', 73, 'KABUPATEN TORAJA UTARA', 'KABUPATEN TORAJA UTARA'),
(420, '7371', 73, 'KOTA MAKASSAR', 'KOTA MAKASSAR'),
(421, '7372', 73, 'KOTA PAREPARE', 'KOTA PAREPARE'),
(422, '7373', 73, 'KOTA PALOPO', 'KOTA PALOPO'),
(423, '7401', 74, 'KABUPATEN BUTON', 'KABUPATEN BUTON'),
(424, '7402', 74, 'KABUPATEN MUNA', 'KABUPATEN MUNA'),
(425, '7403', 74, 'KABUPATEN KONAWE', 'KABUPATEN KONAWE'),
(426, '7404', 74, 'KABUPATEN KOLAKA', 'KABUPATEN KOLAKA'),
(427, '7405', 74, 'KABUPATEN KONAWE SELATAN', 'KABUPATEN KONAWE SELATAN'),
(428, '7406', 74, 'KABUPATEN BOMBANA', 'KABUPATEN BOMBANA'),
(429, '7407', 74, 'KABUPATEN WAKATOBI', 'KABUPATEN WAKATOBI'),
(430, '7408', 74, 'KABUPATEN KOLAKA UTARA', 'KABUPATEN KOLAKA UTARA'),
(431, '7409', 74, 'KABUPATEN BUTON UTARA', 'KABUPATEN BUTON UTARA'),
(432, '7410', 74, 'KABUPATEN KONAWE UTARA', 'KABUPATEN KONAWE UTARA'),
(433, '7411', 74, 'KABUPATEN KOLAKA TIMUR', 'KABUPATEN KOLAKA TIMUR'),
(434, '7412', 74, 'KABUPATEN KONAWE KEPULAUAN', 'KABUPATEN KONAWE KEPULAUAN'),
(435, '7413', 74, 'KABUPATEN MUNA BARAT', 'KABUPATEN MUNA BARAT'),
(436, '7414', 74, 'KABUPATEN BUTON TENGAH', 'KABUPATEN BUTON TENGAH'),
(437, '7415', 74, 'KABUPATEN BUTON SELATAN', 'KABUPATEN BUTON SELATAN'),
(438, '7471', 74, 'KOTA KENDARI', 'KOTA KENDARI'),
(439, '7472', 74, 'KOTA BAUBAU', 'KOTA BAUBAU'),
(440, '7501', 75, 'KABUPATEN BOALEMO', 'KABUPATEN BOALEMO'),
(441, '7502', 75, 'KABUPATEN GORONTALO', 'KABUPATEN GORONTALO'),
(442, '7503', 75, 'KABUPATEN POHUWATO', 'KABUPATEN POHUWATO'),
(443, '7504', 75, 'KABUPATEN BONE BOLANGO', 'KABUPATEN BONE BOLANGO'),
(444, '7505', 75, 'KABUPATEN GORONTALO UTARA', 'KABUPATEN GORONTALO UTARA'),
(445, '7571', 75, 'KOTA GORONTALO', 'KOTA GORONTALO'),
(446, '7601', 76, 'KABUPATEN MAJENE', 'KABUPATEN MAJENE'),
(447, '7602', 76, 'KABUPATEN POLEWALI MANDAR', 'KABUPATEN POLEWALI MANDAR'),
(448, '7603', 76, 'KABUPATEN MAMASA', 'KABUPATEN MAMASA'),
(449, '7604', 76, 'KABUPATEN MAMUJU', 'KABUPATEN MAMUJU'),
(450, '7605', 76, 'KABUPATEN MAMUJU UTARA', 'KABUPATEN MAMUJU UTARA'),
(451, '7606', 76, 'KABUPATEN MAMUJU TENGAH', 'KABUPATEN MAMUJU TENGAH'),
(452, '8101', 81, 'KABUPATEN MALUKU TENGGARA BARAT', 'KABUPATEN MALUKU TENGGARA BARAT'),
(453, '8102', 81, 'KABUPATEN MALUKU TENGGARA', 'KABUPATEN MALUKU TENGGARA'),
(454, '8103', 81, 'KABUPATEN MALUKU TENGAH', 'KABUPATEN MALUKU TENGAH'),
(455, '8104', 81, 'KABUPATEN BURU', 'KABUPATEN BURU'),
(456, '8105', 81, 'KABUPATEN KEPULAUAN ARU', 'KABUPATEN KEPULAUAN ARU'),
(457, '8106', 81, 'KABUPATEN SERAM BAGIAN BARAT', 'KABUPATEN SERAM BAGIAN BARAT'),
(458, '8107', 81, 'KABUPATEN SERAM BAGIAN TIMUR', 'KABUPATEN SERAM BAGIAN TIMUR'),
(459, '8108', 81, 'KABUPATEN MALUKU BARAT DAYA', 'KABUPATEN MALUKU BARAT DAYA'),
(460, '8109', 81, 'KABUPATEN BURU SELATAN', 'KABUPATEN BURU SELATAN'),
(461, '8171', 81, 'KOTA AMBON', 'KOTA AMBON'),
(462, '8172', 81, 'KOTA TUAL', 'KOTA TUAL'),
(463, '8201', 82, 'KABUPATEN HALMAHERA BARAT', 'KABUPATEN HALMAHERA BARAT'),
(464, '8202', 82, 'KABUPATEN HALMAHERA TENGAH', 'KABUPATEN HALMAHERA TENGAH'),
(465, '8203', 82, 'KABUPATEN KEPULAUAN SULA', 'KABUPATEN KEPULAUAN SULA'),
(466, '8204', 82, 'KABUPATEN HALMAHERA SELATAN', 'KABUPATEN HALMAHERA SELATAN'),
(467, '8205', 82, 'KABUPATEN HALMAHERA UTARA', 'KABUPATEN HALMAHERA UTARA'),
(468, '8206', 82, 'KABUPATEN HALMAHERA TIMUR', 'KABUPATEN HALMAHERA TIMUR'),
(469, '8207', 82, 'KABUPATEN PULAU MOROTAI', 'KABUPATEN PULAU MOROTAI'),
(470, '8208', 82, 'KABUPATEN PULAU TALIABU', 'KABUPATEN PULAU TALIABU'),
(471, '8271', 82, 'KOTA TERNATE', 'KOTA TERNATE'),
(472, '8272', 82, 'KOTA TIDORE KEPULAUAN', 'KOTA TIDORE KEPULAUAN'),
(473, '9101', 91, 'KABUPATEN FAKFAK', 'KABUPATEN FAKFAK'),
(474, '9102', 91, 'KABUPATEN KAIMANA', 'KABUPATEN KAIMANA'),
(475, '9103', 91, 'KABUPATEN TELUK WONDAMA', 'KABUPATEN TELUK WONDAMA'),
(476, '9104', 91, 'KABUPATEN TELUK BINTUNI', 'KABUPATEN TELUK BINTUNI'),
(477, '9105', 91, 'KABUPATEN MANOKWARI', 'KABUPATEN MANOKWARI'),
(478, '9106', 91, 'KABUPATEN SORONG SELATAN', 'KABUPATEN SORONG SELATAN'),
(479, '9107', 91, 'KABUPATEN SORONG', 'KABUPATEN SORONG'),
(480, '9108', 91, 'KABUPATEN RAJA AMPAT', 'KABUPATEN RAJA AMPAT'),
(481, '9109', 91, 'KABUPATEN TAMBRAUW', 'KABUPATEN TAMBRAUW'),
(482, '9110', 91, 'KABUPATEN MAYBRAT', 'KABUPATEN MAYBRAT'),
(483, '9111', 91, 'KABUPATEN MANOKWARI SELATAN', 'KABUPATEN MANOKWARI SELATAN'),
(484, '9112', 91, 'KABUPATEN PEGUNUNGAN ARFAK', 'KABUPATEN PEGUNUNGAN ARFAK'),
(485, '9171', 91, 'KOTA SORONG', 'KOTA SORONG'),
(486, '9401', 94, 'KABUPATEN MERAUKE', 'KABUPATEN MERAUKE'),
(487, '9402', 94, 'KABUPATEN JAYAWIJAYA', 'KABUPATEN JAYAWIJAYA'),
(488, '9403', 94, 'KABUPATEN JAYAPURA', 'KABUPATEN JAYAPURA'),
(489, '9404', 94, 'KABUPATEN NABIRE', 'KABUPATEN NABIRE'),
(490, '9408', 94, 'KABUPATEN KEPULAUAN YAPEN', 'KABUPATEN KEPULAUAN YAPEN'),
(491, '9409', 94, 'KABUPATEN BIAK NUMFOR', 'KABUPATEN BIAK NUMFOR'),
(492, '9410', 94, 'KABUPATEN PANIAI', 'KABUPATEN PANIAI'),
(493, '9411', 94, 'KABUPATEN PUNCAK JAYA', 'KABUPATEN PUNCAK JAYA'),
(494, '9412', 94, 'KABUPATEN MIMIKA', 'KABUPATEN MIMIKA'),
(495, '9413', 94, 'KABUPATEN BOVEN DIGOEL', 'KABUPATEN BOVEN DIGOEL'),
(496, '9414', 94, 'KABUPATEN MAPPI', 'KABUPATEN MAPPI'),
(497, '9415', 94, 'KABUPATEN ASMAT', 'KABUPATEN ASMAT'),
(498, '9416', 94, 'KABUPATEN YAHUKIMO', 'KABUPATEN YAHUKIMO'),
(499, '9417', 94, 'KABUPATEN PEGUNUNGAN BINTANG', 'KABUPATEN PEGUNUNGAN BINTANG'),
(500, '9418', 94, 'KABUPATEN TOLIKARA', 'KABUPATEN TOLIKARA'),
(501, '9419', 94, 'KABUPATEN SARMI', 'KABUPATEN SARMI'),
(502, '9420', 94, 'KABUPATEN KEEROM', 'KABUPATEN KEEROM'),
(503, '9426', 94, 'KABUPATEN WAROPEN', 'KABUPATEN WAROPEN'),
(504, '9427', 94, 'KABUPATEN SUPIORI', 'KABUPATEN SUPIORI'),
(505, '9428', 94, 'KABUPATEN MAMBERAMO RAYA', 'KABUPATEN MAMBERAMO RAYA'),
(506, '9429', 94, 'KABUPATEN NDUGA', 'KABUPATEN NDUGA'),
(507, '9430', 94, 'KABUPATEN LANNY JAYA', 'KABUPATEN LANNY JAYA'),
(508, '9431', 94, 'KABUPATEN MAMBERAMO TENGAH', 'KABUPATEN MAMBERAMO TENGAH'),
(509, '9432', 94, 'KABUPATEN YALIMO', 'KABUPATEN YALIMO'),
(510, '9433', 94, 'KABUPATEN PUNCAK', 'KABUPATEN PUNCAK'),
(511, '9434', 94, 'KABUPATEN DOGIYAI', 'KABUPATEN DOGIYAI'),
(512, '9435', 94, 'KABUPATEN INTAN JAYA', 'KABUPATEN INTAN JAYA'),
(513, '9436', 94, 'KABUPATEN DEIYAI', 'KABUPATEN DEIYAI'),
(514, '9471', 94, 'KOTA JAYAPURA', 'KOTA JAYAPURA'),
(515, '006', 71, 'modoinding', 'modo');

-- --------------------------------------------------------

--
-- Table structure for table `suplierproduk`
--

CREATE TABLE `suplierproduk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surveyUnitUsaha_idsurveyUnitusaha` int(11) NOT NULL,
  `namaSuplier` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `negara` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suplierproduk`
--

INSERT INTO `suplierproduk` (`id`, `surveyUnitUsaha_idsurveyUnitusaha`, `namaSuplier`, `negara`, `tanggal`, `jumlah`) VALUES
(1, 4, 'das', 'asd', 111, 11),
(2, 4, 'asd', 'asd', 122, 1);

-- --------------------------------------------------------

--
-- Table structure for table `surveyunitusaha`
--

CREATE TABLE `surveyunitusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUnitUsaha` int(11) NOT NULL,
  `idPerusahaan` int(11) DEFAULT NULL,
  `idPemilikUsaha` int(11) DEFAULT NULL,
  `idPengawas` int(11) DEFAULT NULL,
  `idPengawas2` int(10) DEFAULT NULL,
  `idPengawas3` int(10) DEFAULT NULL,
  `pjUnitUsaha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci,
  `rekomendasi` text COLLATE utf8mb4_unicode_ci,
  `buktiFile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idForm1` int(11) DEFAULT NULL,
  `idForm2` int(11) DEFAULT NULL,
  `idForm3` int(11) DEFAULT NULL,
  `idForm4` int(11) DEFAULT NULL,
  `idForm5` int(11) DEFAULT NULL,
  `idForm6` int(11) DEFAULT NULL,
  `idForm7` int(11) DEFAULT NULL,
  `idForm8` int(11) DEFAULT NULL,
  `idForm9` int(11) DEFAULT NULL,
  `idForm10` int(11) DEFAULT NULL,
  `idForm11` int(11) DEFAULT NULL,
  `idForm12` int(11) DEFAULT NULL,
  `idForm13` int(11) DEFAULT NULL,
  `idForm14` int(11) DEFAULT NULL,
  `idForm15` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `surveyunitusaha`
--

INSERT INTO `surveyunitusaha` (`id`, `idUnitUsaha`, `idPerusahaan`, `idPemilikUsaha`, `idPengawas`, `idPengawas2`, `idPengawas3`, `pjUnitUsaha`, `catatan`, `rekomendasi`, `buktiFile`, `idForm1`, `idForm2`, `idForm3`, `idForm4`, `idForm5`, `idForm6`, `idForm7`, `idForm8`, `idForm9`, `idForm10`, `idForm11`, `idForm12`, `idForm13`, `idForm14`, `idForm15`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL, 2, 6, 6, NULL, '13123', '23123', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-03 22:52:54', '2019-09-03 22:52:54'),
(2, 1, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:10:54', '2019-09-05 07:10:54'),
(3, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'asds', 'dasda', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:17:16', '2019-09-05 07:17:16'),
(4, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'asds', 'dasda', NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:18:52', '2019-09-05 07:18:52'),
(5, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'asds', 'dasda', NULL, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:22:05', '2019-09-05 07:22:05'),
(6, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'qweqwe', 'weqeqe', NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:23:36', '2019-09-05 07:23:36'),
(7, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:30:18', '2019-09-05 07:30:18'),
(8, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'asdasd', 'asdsad', NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:35:19', '2019-09-05 07:35:19'),
(9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:42:21', '2019-09-05 07:42:21'),
(10, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:42:41', '2019-09-05 07:42:41'),
(11, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-05 07:47:30', '2019-09-05 07:47:30'),
(12, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-06 00:06:21', '2019-09-06 00:06:21'),
(13, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-06 11:34:56', '2019-09-06 11:34:56'),
(14, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-06 11:36:26', '2019-09-06 11:36:26'),
(15, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-06 22:24:23', '2019-09-06 22:24:23'),
(16, 2, NULL, NULL, 2, 3, 2, NULL, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-07 00:26:08', '2019-09-07 00:26:08'),
(17, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-07 00:28:52', '2019-09-07 00:28:52'),
(18, 4, NULL, NULL, 2, NULL, NULL, NULL, 'asd', 'asdad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2019-09-07 09:16:19', '2019-09-07 09:16:19'),
(19, 4, NULL, NULL, 2, NULL, NULL, NULL, 'asd', 'asdad', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL, NULL, NULL, NULL, NULL, '2019-09-07 09:17:08', '2019-09-07 09:17:08'),
(20, 4, NULL, NULL, 2, NULL, NULL, NULL, 'sc', 'zcx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, '2019-09-07 09:17:58', '2019-09-07 09:17:58'),
(21, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'asda', NULL, NULL, NULL, NULL, NULL, NULL, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 01:14:21', '2019-09-08 01:14:21'),
(22, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'asda', NULL, NULL, NULL, NULL, NULL, NULL, 20, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 01:14:56', '2019-09-08 01:14:56'),
(23, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'asda', NULL, NULL, NULL, NULL, NULL, NULL, 21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 01:15:31', '2019-09-08 01:15:31'),
(24, 3, NULL, NULL, NULL, NULL, NULL, NULL, 'asd', 'asda', NULL, NULL, NULL, NULL, NULL, NULL, 22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 01:16:57', '2019-09-08 01:16:57'),
(25, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'Lakukan Perbaikan', 'Lakukan Perbaikan', NULL, NULL, NULL, NULL, NULL, NULL, 23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 06:49:33', '2019-09-08 06:49:33'),
(26, 5, NULL, NULL, NULL, NULL, NULL, NULL, '213123saddsds', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, 24, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 06:56:18', '2019-09-08 06:56:18'),
(27, 2, NULL, NULL, 2, 2, 3, NULL, 'xxxxxxxxxxxx', 'xxxxxxxxx', NULL, NULL, NULL, NULL, NULL, NULL, 25, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 06:59:17', '2019-09-08 06:59:17'),
(28, 4, NULL, NULL, 2, 2, 4, NULL, 'tidak ada', 'ada rekomendasi lanjtu', NULL, NULL, NULL, NULL, NULL, NULL, 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-08 23:54:39', '2019-09-08 23:54:39'),
(29, 3, NULL, NULL, 2, 3, 6, NULL, 'fs', 'sdf', NULL, NULL, NULL, NULL, NULL, NULL, 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-09 05:05:14', '2019-09-09 05:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `unitusaha`
--

CREATE TABLE `unitusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PelakuUsaha_idPerusahaan` int(11) DEFAULT NULL,
  `PelakuUsaha_idPemilikUsaha` int(11) DEFAULT NULL,
  `NamaUnitUsaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlamatUnitUsaha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlamatKantorPusat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PenangungJawabTeknis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `KontakPJ` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TahunOperasional` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unitusaha`
--

INSERT INTO `unitusaha` (`id`, `PelakuUsaha_idPerusahaan`, `PelakuUsaha_idPemilikUsaha`, `NamaUnitUsaha`, `AlamatUnitUsaha`, `AlamatKantorPusat`, `Telepon`, `Fax`, `Email`, `PenangungJawabTeknis`, `KontakPJ`, `TahunOperasional`) VALUES
(1, NULL, 3, 'CV Citra Bangsa', 'Jln.Harsono RM Ragunan', 'Jln.Harsono RM Ragunan', '0999999999999', '0999999999999', 'citra@bangsa.co.id', 'Rovert Hall', '0822252111111', '2015'),
(2, NULL, 1, 'Energy Aviation', 'Jl Lebak Bulus IV 9-D RT 001/04,Cilandak Barat', 'Jl Lebak Bulus IV 9-D RT 001/04,Cilandak Barat', '021 7662022', '021 7662022', 'Energy@flyav.com', 'Indah Sari Tedjo', '08222222', '2011'),
(3, NULL, 49, 'Nimblemart', 'Gedung P3H Lantai 2, Jl. A.M. Sangaji No.29, Jakarta Pusat', 'Gedung P3H Lantai 2, Jl. A.M. Sangaji No.29, Jakarta Pusat', '62-21-6315550', '62-21-6315550', 'buure@gavi.com', 'Hartanti Tri Widjaja', '62-21-6315550', '2012'),
(4, NULL, 42, 'Apexi', 'Jl Moch Kahfi II 9,Jaga Karsa', 'Jl Moch Kahfi II 9,Jaga Karsa', '021 7870746', '021 7870746', 'faxi@gmail.com', 'Djaja Susila Johan', '021 7870746', '2000'),
(5, NULL, 16, 'Chiefpaw', 'Jl Jend Sudirman Kav 29-31 Wisma Metropolitan II Lt 3,Karet', 'Jl Jend Sudirman Kav 29-31 Wisma Metropolitan II Lt 3,Karet', '021 5262855', '021 5262855', 'paw@paw.com', 'Ratna Devi Hermanto', '021 5262850/021 5262855', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passwordHash` varchar(200) DEFAULT NULL,
  `authKey` varchar(200) NOT NULL,
  `accessToken` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `passwordResetToken` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `accessRoleId` int(11) DEFAULT NULL,
  `dateCreate` datetime NOT NULL,
  `dateUpdate` datetime NOT NULL,
  `Orang_idOrang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `passwordHash`, `authKey`, `accessToken`, `status`, `passwordResetToken`, `email`, `accessRoleId`, `dateCreate`, `dateUpdate`, `Orang_idOrang`) VALUES
(1, 'admin', '$2y$13$l79vernTMF8KF9vj32eUMe9uFp8rJBTvFWAUf0b1NVnmCJm3YvEZ6', 'FTZPNfTNU29JGsunOMDm5CyXaPqu7lHM', NULL, 10, '3uAIxFwyr_uhEXiw2xRX3NjkNsSvbDAr_1480860258', 'hsrkom@gmail.com', 1, '2016-08-12 15:26:26', '2016-12-02 10:14:41', NULL),
(16, 'doni', '$2y$13$7qvGKFdrMl6oHHMormCFEuG5cIjh2NISMJSZYFxu8io70FpsF0FnK', 'I0InxaJlQvO8J4RC_S3cpLmpA4ayhco6', NULL, 10, NULL, 'd.ramdhani46@gmail.com', 6, '2016-12-01 12:50:28', '2016-12-01 12:50:28', NULL),
(17, 'pelakuusaha', '$2y$13$ikvxaZKiIrQ7iFvzNZeOtuXl83/hzy3CsEpJBVSO2sdhjuDawjYGq', 'wiq8LrU6bjJU__w4JA6iQPKOfvfiNYHe', NULL, 10, NULL, 'pungki@apps.ipb.ac.id', 6, '2016-12-01 14:17:13', '2016-12-01 14:17:13', NULL),
(18, 'wisard2', '$2y$13$AN82moXBJ2TQ0mezw1X.XO227nZ2.0QIadXYqMivryPi9Xu4ytw22', 'sht8owu5tkZQTZYZvYCZufqWYSxsehoq', NULL, 10, NULL, 'wisard.kalengkongan@gmail.com', 6, '2016-12-02 10:25:48', '2017-04-13 15:52:56', NULL),
(19, 'dahri123', '$2y$13$1MAT9H2WIqA0XDXc88Qr.e1oNeAyM9CuufZ3i65u23XTaarve2/8S', 'sexFt2kx943hLAtPJrdrsmsaRIVsASQG', NULL, 10, NULL, 'dahri@careipb.or.id', 6, '2016-12-02 13:46:42', '2017-01-13 16:05:38', NULL),
(20, 'herusukoco', '$2y$13$l79vernTMF8KF9vj32eUMe9uFp8rJBTvFWAUf0b1NVnmCJm3YvEZ6', 'X3DoiEO-GWnp5O7baao0HkKxa5ZxXGW3', NULL, 10, '3uAIxFwyr_uhEXiw2xRX3NjkNsSvbDAr_1480860258', 'hsrkom@gmail.com', 5, '2016-12-02 13:48:36', '2016-12-04 21:04:18', NULL),
(21, 'Fika90', '$2y$13$aXlO6Vf.zh1T9f7AU2vC7ODr1C.MNd76T9iusVfiFZre6Ryv9fVoa', 'MuTxZxmPH15ZLfwPn2JdP3N00im3Ws_K', NULL, 10, NULL, 'fika@careipb.or.id', 6, '2016-12-05 07:28:21', '2017-04-13 16:06:29', NULL),
(22, 'wisard3', '$2y$13$O4mDPHrFf/L6BlcA5q5CLeKOfVeM/qAADDXpaK6SFcKBIKf8/P54y', '1uCnScmm-XUaCjatCpvc5hCdWNSOpe-r', NULL, 10, NULL, 'excell_17@yahoo.com', 5, '2016-12-06 18:08:15', '2016-12-06 18:08:15', 3),
(23, 'otovet9', '$2y$13$oIcukLBIej2wM1IWt.8cL.049xg7mTwFNQPHe4inavRU/9zBMW2ky', 'cv2wFDoMH0B0hM3tM7msalawpLkbf8LX', NULL, 10, NULL, 'pungki.pr9@gmail.com', 5, '2016-12-08 13:56:12', '2016-12-08 13:56:12', 12),
(24, 'irman', '$2y$13$.ssbvHkoV25BxRCpyQD0MO0PX2EcIPJqxkiQAqpZFe1E.04hONKky', 'SU8d5oHnMmxaWizSQnsACOd1quLXvtd9', NULL, 10, NULL, 'irman.hermadi@gmail.com', 6, '2016-12-08 14:08:24', '2016-12-08 14:08:24', NULL),
(25, 'agusms', '$2y$13$zU/RuPh1D5XkxT.kIv/TYO0qQXD6QjzXRnWAhhcGeEx.KqF5HLk16', 'KZCeRf5-wh5VdF7jjwt0ReEd0BYCUB9T', NULL, 10, NULL, 'amsstk@gmail.com', 6, '2016-12-08 14:11:49', '2016-12-08 14:11:49', NULL),
(26, 'wisard17', '$2y$13$7HL61EKatWvzJtdebmUqLuZ0ORGJUWV8zkydw10TV46rkOVfXlr72', 'k9UZwcbArOCYSAKGoBZBBZCIMc3kzfpc', NULL, 10, NULL, 'wisard1709@gmail.com', 6, '2016-12-08 16:03:47', '2016-12-08 16:03:47', NULL),
(27, 'agustriana0872', '$2y$13$s6EkdPRUg3vxJo8jmm1xA.wYkvuKjimWD4r2J15wRZw6DeHTvAH3G', 'BO_Wu_LsYYoO0L2a-krXIO_38JZuc7iO', NULL, 10, NULL, 'agustriana0872@gmail.com', 6, '2016-12-08 19:39:45', '2016-12-08 19:39:45', NULL),
(28, 'masnud', '$2y$13$amWx4r7HcbPDSga8LuGQjO7aMPtivn1s73xfwosG96ZHDU3tPH0B2', 'Zq5RyGUuUFbytEKIQHJQcrIYIj1vssQs', NULL, 10, NULL, 'astho@pertanian.go.id', 6, '2016-12-08 19:39:59', '2016-12-08 19:39:59', NULL),
(29, 'Goe2xmz', '$2y$13$QFhIz5/QJyYOq9UE92EZveoOuEFLwkWXQarMcBZdXkrRreqi7sRq2', 'CXdsY75vsbQGh-ThYY6HoPNiozR5KeZM', NULL, 10, NULL, 'goe2xmz@gmail.com', 6, '2016-12-08 19:40:13', '2016-12-08 19:40:13', NULL),
(30, 'dwinawang92', '$2y$13$teNIgOa5mRJLyqhvPm9zSeCnUwnZgnqJij2KkfaBN3y1t4xEvm64K', 'xaoNEaJL5U9AEt6ulfqAROIQnlwsY_WN', NULL, 10, NULL, 'dwinawangwicaksana@gmail.com', 6, '2016-12-08 19:41:17', '2016-12-08 19:41:17', NULL),
(31, 'loka', '$2y$13$xpa1d2albEgRAQRC5CjDgemZBek9XfimVNRtvnmUWOzRMK.DuUq4W', 'qQMyvXZmtt3oZAorz5uaNSJFa9U7_ECv', NULL, 10, NULL, 'loka.setia@gmail.com', 6, '2016-12-08 19:41:24', '2016-12-08 19:41:24', NULL),
(32, 'Supriyono', '$2y$13$0cpQxwd03hQwWBfgWBvw9e/.ovuPBTTiOyLLrHsY8kZ7J9VOa4WsO', 'ttVLqiBwPdm-eKH3BbgX8EtoVXcAlqsZ', NULL, 10, NULL, 'priyo.supriyono@gmail.com', 6, '2016-12-08 19:41:33', '2016-12-08 19:41:33', NULL),
(33, 'angin ribut', '$2y$13$56..wJ/pdIIeeUvZJ5rEnOD/.JiJSHAjRRTKQtgQJGOC5lY5j.oF6', 'jTayTWl_bIISOsBhquVvM64z8g6DVv2P', NULL, 10, NULL, 'toif.hidayatullah@gmail.com', 6, '2016-12-08 19:41:48', '2016-12-08 19:41:48', NULL),
(34, 'Chandra Apriza', '$2y$13$VnFzkMf.YySi7Hdq15pni.qjmaAkle83NJOevLZKs1wJD2v5wIwAe', 'anpwhYDI9TnpWL4Ux3sZHE3aphUMpWNz', NULL, 10, NULL, 'chandrayudha2014@gmail.com', 6, '2016-12-08 19:41:55', '2016-12-08 19:41:55', NULL),
(35, 'Theodorus', '$2y$13$hOkw2nRPs1ICnN8Q9LE83.HZ.M91KK3DnYCBIpBn.aSV93Gzjnp12', 'cmlXo5mKi-sd_HWqzqNAUXhvJplJ56P6', NULL, 10, NULL, 'drh.caecilia@gmail.com', 6, '2016-12-08 19:42:20', '2016-12-08 19:42:20', NULL),
(36, 'hariha', '$2y$13$yV4Bf3hpek1RsExC9Iso5O9QMntQ/E15jbJRgLWYnSCMOnVP05C1G', 'UAfD0OMEXE0fizT7y9Hh0SNvVJD4tDSN', NULL, 10, NULL, 'harishovie@gmail.com', 6, '2016-12-08 19:42:34', '2016-12-08 19:42:34', NULL),
(37, 'elyrini', '$2y$13$Od/aQP5nEpfK.nSStdAx0uwk8xzmh9mRlQi/tXs9Ou9M4ReWnvwlC', 'hcg-z6hU4Ifv1VNDkS39u2ZyyadBuXuP', NULL, 10, '9XyJ1ud3ZKToUoc0C62fYYx0tRCswn-W_1481203509', 'elyrini@gmail.com', 6, '2016-12-08 19:42:40', '2016-12-08 20:25:09', NULL),
(38, 'ranierlina', '$2y$13$AK4EmTa1cEjsO7Ur./qC3u5jYw6h4i2m9jXmeoId2y4.ybLD9kZCe', 'Q54wfzYuc_cNGHa7hOkUUOnV7axmPa4t', NULL, 10, NULL, 'ranierlina@gmail.com', 6, '2016-12-08 19:42:46', '2016-12-08 19:42:46', NULL),
(39, 'lilishaswati', '$2y$13$Glz8cyfHOCEVesNPuJxyduH9pCtNlRSGgfLNMxp5fpcfRoFvV00.a', 's33GcAIllV1j8eiDB1uz9vlLZmH5A8yn', NULL, 10, NULL, 'lilis.haswati@gmail.com', 6, '2016-12-08 19:42:50', '2016-12-08 19:42:50', NULL),
(40, 'ranihandayani', '$2y$13$TqTa0Vy4IsFI6OPw/VAr.enoA9TlbfXNluMLXDTWGRtGy6aurEMNu', 'AJ1Z26n9ftIW-jzhyjddph0A_HTUYY8A', NULL, 10, NULL, 'ranihandayani649@yahoo.com', 6, '2016-12-08 19:42:50', '2016-12-08 19:42:50', NULL),
(41, 'Fatia Yusriah Aksa', '$2y$13$B/myfj4JI/fC/mRVFk1YL.JTArLMILOTcFXxOFAVUCdZP40zT6NJ2', '53lZSVuSBNHOHRH5hcqIHkCfi1sewPE4', NULL, 10, NULL, 'kesmavetjabar@yahoo.com', 6, '2016-12-08 19:43:01', '2016-12-08 19:43:01', NULL),
(42, 'JUMATAN', '$2y$13$4wjg8OCPdkX9wAd/X63Hye4u1J.pIVqRsuqNJIh5.WdYTHTuh4soW', '58qvYwM9vgtCJXg2CwQQvnw0L0fKk-5W', NULL, 10, NULL, 'arief_pria@yahoo.co.id', 6, '2016-12-08 19:43:29', '2016-12-08 19:43:29', NULL),
(43, 'Tri Utami', '$2y$13$QFubJg5F/zreN4Ks/t1VIuy1.qaNlfq.FnCKC5s/ypTNm3v0ejX/u', 'I5VQtUyImVtoq0mH4YtvtB9qxYo_QCSC', NULL, 10, NULL, 'adun_doetme@yahoo.com', 6, '2016-12-08 19:43:48', '2016-12-08 19:43:48', NULL),
(44, 'Sri Hartati', '$2y$13$7mUsXsMQNLGhoSIDB7wh..VITVRSBVB24L3LJhV2hHQ9PO/Z5CQ8C', 'J96cE3WabuRi7je2D7CiRfm5WuRV1w00', NULL, 10, NULL, 'tatimarwin@yahoo.com', 6, '2016-12-08 19:44:42', '2016-12-08 19:44:42', NULL),
(45, 'rismi', '$2y$13$4AomMT5YKBwsseuMOAPif.LtYJZ2Rhgu25GS7O2mPfUJlkUp.NJNK', 'c0-8ShEF4DdGJRhMjXIKR1oy4XOz3HYH', NULL, 10, NULL, 'rismiperangin@gmail.com', 6, '2016-12-08 19:45:00', '2016-12-08 19:45:00', NULL),
(46, 'dahri1234', '$2y$13$pF3lq74Yv7deylQNv2KiOuOIwrD6QDn7mTYjCo5MCR4fQoA60AAa6', 'jzeeItXu9abL7sT1IHaW_olBES79k0qH', NULL, 10, NULL, 'dahritanjung@careipb.or.id', 6, '2016-12-08 19:45:14', '2016-12-08 19:45:14', NULL),
(47, 'noeria', '$2y$13$RvW9NYhlmTbFliHJj4ZGCucntiydezXUCa8GLmOpH6i1I2qU8VnHW', '88vMhpG4d3KFx0g6xM8pM0KhnxRAYVyE', NULL, 10, NULL, 'nuriawibisono@yahoo.co.id', 6, '2016-12-08 19:45:33', '2016-12-08 19:45:33', NULL),
(48, 'heru', '$2y$13$tY3IcEwmOgnzZbQL9wH8pODmwPtxtw4zRTipW7/wnpwJgNSWBjrxa', '3rLCJMuT1Y5dXvxHSt7KPYEXoo1Z9zPI', NULL, 10, NULL, 'hsrkom@apps.ipb.ac.id', 6, '2016-12-08 19:47:12', '2016-12-08 19:47:12', NULL),
(49, 'ASAPASAP', '$2y$13$a8w.aQ6ZSYIuBvkz6OHeHOgX/L6n5iSpjflf8acuuutKYFTuh7N82', 'fgmueoNTBkUrHoj-49LtJJVncOz5gt2X', NULL, 10, NULL, 'indah_3af@yahoo.com', 6, '2016-12-08 19:47:47', '2016-12-08 19:47:47', NULL),
(50, 'renieryani', '$2y$13$uLA2rrU.U.tfuke9EQGqt.xBolumNlEuzIPn1hP7zHvey1bQhw7im', 'yOW6Uno2phlnAwYY76Ij8ywfsd2VEHdJ', NULL, 10, NULL, 'nieants@yahoo.com', 6, '2016-12-08 19:48:35', '2016-12-08 19:48:35', NULL),
(51, 'agusms75', '$2y$13$.M4tDC9cYB3u/6x8zkr78ufwnbVYzuu78nhKwXPaMfM4w9fC.0lMC', '-2EvfODKShYz2baIInkEbrZsvVSJdKiq', NULL, 10, NULL, 'agusms75@gmail.com', 6, '2016-12-08 20:02:01', '2016-12-08 20:02:01', NULL),
(52, 'endah', '$2y$13$1P6YCG0tAV7gh1Do69nS2.Q/eYHyqkUSn2eU7RR.nkPjAv7aMF5Oy', 'GyKW2TsxBeQK8tIWt4_H5A22qyOqrFTr', NULL, 10, NULL, 'endah_enba@yahoo.com', 6, '2016-12-08 20:03:01', '2016-12-08 20:03:01', NULL),
(53, 'zaki', '$2y$13$rNRN/E.srGE.pLXUV8fgfuwmiAjgzCh0/BQMtzjD1ok0PDD0pMHqC', 'Gc3Rf8HfMJmgDkJ_3BHYt1bhyOdtsgWa', NULL, 10, NULL, 'muliyanti.yayan@apps.ipb.ac.id', 6, '2017-01-11 13:50:31', '2017-01-11 13:50:31', NULL),
(54, 'otovetfika', '$2y$13$PzVCrBR0cQrrYTkJbAynkeGUYNbjcdXNKTB7YqC00ReMoGXc3DY56', 'wph4UdKXyxEFkZRkU3VBjtmz7PHnF18B', NULL, 10, NULL, 'yuliawulandari@apps.ipb.ac.id', 5, '2017-01-11 16:51:40', '2017-01-11 16:51:40', 8),
(55, 'hanf_aff', '$2y$13$zRxu3e1.yyZuLwIa1PyoG.dp9b3Oz6XYdBuBOSVerdeMLMs5c5EGy', 'DCsqWqL7LRCjmTIeNL4OGJP8Zi22hOjc', NULL, 10, NULL, 'hanf_aff@apps.ipb.ac.id', 6, '2017-11-27 05:06:30', '2017-11-27 05:06:30', NULL),
(56, 'adminSuper', '$2y$10$pBE3wfvSu4uyDSeqaO84hOzJbWLLy9/fCaoMnoeUjfGSaFOnM5gJy', '123', NULL, 10, NULL, 'admin@admin.com', NULL, '2019-08-22 16:29:14', '2019-08-22 16:29:14', 53),
(80, 'cahya@kesmavet', '$2y$10$mVlksVndqDulDSuWOLC9Lea/Zem8W8md5SwH9BKc1on/l9cy3.38S', '123', NULL, 10, NULL, 'cahaya@kesmavey.gov.id', 7, '2019-09-01 11:45:47', '2019-09-01 11:45:47', 76),
(81, 'cahya@kesmavet', '$2y$10$vwRABLdYs.UaHH3Rtlnoz.iYw63nW5YGxz4oaVt3WAp3zKnoF7spm', '123', NULL, 10, NULL, 'cahaya@kesmavey.gov.id', 7, '2019-09-01 11:46:25', '2019-09-01 11:46:25', 77),
(82, 'susila@kesmavet', '$2y$10$ILHRkkEYaovSZO8o1gG/0ekOWIio8szzvCwZ5hsoE8ymZcT9DIw4e', '123', NULL, 10, NULL, 'ssusila@kesmavet.go.id', 7, '2019-09-01 11:47:33', '2019-09-01 11:47:33', 78),
(83, 'ari@kesmaveg2', '$2y$10$m3G3pdWAhTFPiEL.M3Bpw.D1f1mjtKGUJjOJz6vK923dNta0l4LKe', '123', NULL, 10, NULL, 'ss@kesmavet.go.id', 7, '2019-09-01 11:48:32', '2019-09-01 11:48:32', 79),
(85, 'petugasKesmavet1', '$2y$10$2Yl8Xd4FNeeqT4q//coKbuRCKdmX/5RSMGIgMHQ0EJJQAQ.3VmYbi', '123', NULL, 10, NULL, 'petugas@mail.com', 7, '2019-09-02 05:59:58', '2019-09-02 05:59:58', 81);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ktp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wilayahkerja`
--

CREATE TABLE `wilayahkerja` (
  `idWilayahKerja` int(11) NOT NULL,
  `Nama` varchar(255) DEFAULT NULL COMMENT 'Kesmavet, Dinas Provinsi, Kab/Kota, Check Point, Karantina (Wilayah Kerja)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wilayahkerja`
--

INSERT INTO `wilayahkerja` (`idWilayahKerja`, `Nama`) VALUES
(1, 'Sumatera dan Aceh'),
(2, 'Sumbar, Riau, Jambi dan Kepri'),
(3, 'Lampung, Sumsel, Bengkulu, dan Bangka Belitun'),
(4, 'Jateng, DIY, Jatim'),
(5, 'Kalsel, Kalbar, Kalteng, Kaltim, dan Kalut'),
(6, 'Bali, NTB, dan NTT'),
(7, 'Sulsel, Sulawesi Tenggara, Sulteng, Sulut, Sulbar, Gorontalo, Maluku, Maluku Utara, Papua Barat dan Papua'),
(8, 'Jabar, DKI Jakarta, dan Banten');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokterhewanpenanggungjawab`
--
ALTER TABLE `dokterhewanpenanggungjawab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form6`
--
ALTER TABLE `form6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form10`
--
ALTER TABLE `form10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`idOrang`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelakuusaha`
--
ALTER TABLE `pelakuusaha`
  ADD PRIMARY KEY (`idPerusahaan`);

--
-- Indexes for table `penerimaprodukdistribusi`
--
ALTER TABLE `penerimaprodukdistribusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengawaskesmavet`
--
ALTER TABLE `pengawaskesmavet`
  ADD PRIMARY KEY (`idPengawasKesmavet`);

--
-- Indexes for table `suplierproduk`
--
ALTER TABLE `suplierproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surveyunitusaha`
--
ALTER TABLE `surveyunitusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unitusaha`
--
ALTER TABLE `unitusaha`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokterhewanpenanggungjawab`
--
ALTER TABLE `dokterhewanpenanggungjawab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `form6`
--
ALTER TABLE `form6`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `form10`
--
ALTER TABLE `form10`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `idOrang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `penerimaprodukdistribusi`
--
ALTER TABLE `penerimaprodukdistribusi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengawaskesmavet`
--
ALTER TABLE `pengawaskesmavet`
  MODIFY `idPengawasKesmavet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suplierproduk`
--
ALTER TABLE `suplierproduk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `surveyunitusaha`
--
ALTER TABLE `surveyunitusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `unitusaha`
--
ALTER TABLE `unitusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
