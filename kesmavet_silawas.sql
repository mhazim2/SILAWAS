-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 06:38 PM
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
(6, 'Pelaku Usaha', 'Pelaku Usaha', 'NULL', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `form9`
--

CREATE TABLE `form9` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kapasitasPemeliharaan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `populasiTernak` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategoriUsaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `totalProduksiSusu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wilayahPeredaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlahKaryawan` int(11) NOT NULL,
  `P1-1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P1-2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P1-3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P1-4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P3` tinyint(1) NOT NULL,
  `P4` tinyint(1) NOT NULL,
  `P5-1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `P5-2` date NOT NULL,
  `P7` tinyint(1) NOT NULL,
  `P8` tinyint(1) NOT NULL,
  `P9` tinyint(1) NOT NULL,
  `P10` tinyint(1) NOT NULL,
  `P11` tinyint(1) NOT NULL,
  `P12` tinyint(1) NOT NULL,
  `P13` tinyint(1) NOT NULL,
  `P14` tinyint(1) NOT NULL,
  `P15` tinyint(1) NOT NULL,
  `P16` tinyint(1) NOT NULL,
  `P17` tinyint(1) NOT NULL,
  `P18` tinyint(1) NOT NULL,
  `P19` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_22_081736_create_unit_usahas_table', 1),
(3, '2019_08_22_094232_create_survey_unit_usaha_table', 1),
(4, '2019_08_22_150444_create_form9_table', 1),
(5, '2019_08_22_161634_change_id_increment', 2);

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
(52, 'Alin', 'Jakarta', '1994-07-01', '000000000000000000', NULL, '0000000000');

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
(1, 'PT. Maju Mundur', '123456', '23456', 1, 1, 161, NULL),
(2, 'CV. Semesta Ayam Negeri', '12345678910111213', '1234567788', 2, 2, 179, NULL),
(3, 'Wisard17 .inc', '201-as', '1231', 3, 1, 382, NULL),
(4, 'Manado inc', '201-as', '1231', 4, 1, 382, NULL),
(5, 'IPB', '223214223', '1234567890', 5, 1, 179, NULL),
(6, 'dahri', '12345678910', '123', 6, 1, 26, NULL),
(7, 'Abc', '98765', '32/g/2016', 7, 1, 1, NULL),
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
(27, 'gorengan', '123456789', '123/456', 27, 8, 169, NULL),
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
(41, 'cv morat marit', '1234567890', '1234567890', 41, 4, 264, NULL),
(42, 'PT selalu rugi', '987654321', '14/15-2016', 42, 8, 169, NULL),
(43, 'PT Agus', '12345678901234', '1234', 43, 8, 181, NULL),
(44, 'PT. ARTA MANDIRI PERKASA', '088967543', '080198120793', 44, 4, 220, NULL),
(45, 'PT ABCDEF', '1234567', '9876353', 45, 1, 2, NULL),
(46, 'Bakso Bogor', '454672829191', '738210127390', 46, 1, 1, NULL),
(47, 'PT DAGING SEJAHTERA', '123456788', '987654321', 47, 1, 1, NULL),
(48, 'CV Murni Abadi', '12356', '372674628789', 48, 8, 161, NULL),
(49, 'Dummy', '0123456789', '-', 49, 8, 161, NULL);

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
-- Table structure for table `surveyunitusaha`
--

CREATE TABLE `surveyunitusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUnitUsaha` int(11) NOT NULL,
  `idPerusahaan` int(11) NOT NULL,
  `idPemilikUsaha` int(11) NOT NULL,
  `idPengawas` int(11) NOT NULL,
  `catatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rekomendasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idForm9` int(11) NOT NULL,
  `idForm10` int(11) NOT NULL,
  `idForm11` int(11) NOT NULL,
  `idForm12` int(11) NOT NULL,
  `idForm13` int(11) NOT NULL,
  `idForm14` int(11) NOT NULL,
  `idForm15` int(11) NOT NULL,
  `idForm16` int(11) NOT NULL,
  `idForm17` int(11) NOT NULL,
  `idForm18` int(11) NOT NULL,
  `idForm19` int(11) NOT NULL,
  `idForm20` int(11) NOT NULL,
  `idForm21` int(11) NOT NULL,
  `idForm22` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unitusaha`
--

CREATE TABLE `unitusaha` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PelakuUsaha_idPerusahaan` int(11) NOT NULL,
  `PelakuUsaha_idPemilikUsaha` int(11) NOT NULL,
  `NamaUnitUsaha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlamatUnitUsaha` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlamatKantorPusat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telepon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fax` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PenangungJawabTeknis` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TahunOperasional` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(56, 'adminSUper', '$2y$10$pBE3wfvSu4uyDSeqaO84hOzJbWLLy9/fCaoMnoeUjfGSaFOnM5gJy', '123', NULL, 10, NULL, 'admin@admin.com', NULL, '2019-08-22 16:29:14', '2019-08-22 16:29:14', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form9`
--
ALTER TABLE `form9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form9`
--
ALTER TABLE `form9`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surveyunitusaha`
--
ALTER TABLE `surveyunitusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unitusaha`
--
ALTER TABLE `unitusaha`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
