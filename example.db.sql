-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 11:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `q_pertanyaan`
--

CREATE TABLE `q_pertanyaan` (
  `type` char(50) CHARACTER SET utf8 NOT NULL,
  `pertanyaan` longtext CHARACTER SET utf8 NOT NULL,
  `platform_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `q_pertanyaan`
--

INSERT INTO `q_pertanyaan` (`type`, `pertanyaan`, `platform_id`) VALUES
('text', 'Siapa Nama Lengkap Kato?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `id_admin` int(10) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`username`, `password`, `id_admin`, `name`, `avatar`) VALUES
('katow', '$2y$10$12k5gNc1sEveW1Bbv/aEm.5YExLE/HIHdkhu5rrlFBBTXH4wnlI0K', 1, 'Muhammad Naufal Faqih', 'https://cdn.discordapp.com/avatars/458342161474387999/a_4e585e4e5dbc6f1acf5fb81565a780ae.gif?size=4096');

-- --------------------------------------------------------

--
-- Table structure for table `t_identitas`
--

CREATE TABLE `t_identitas` (
  `nama` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `umur` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `tinggal` longtext COLLATE utf8_unicode_ci NOT NULL,
  `discord` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `platform_id` int(11) NOT NULL,
  `calon_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_identitas`
--

INSERT INTO `t_identitas` (`nama`, `umur`, `tinggal`, `discord`, `facebook`, `instagram`, `platform_id`, `calon_id`) VALUES
('Kato', '18', 'Karawank', 'manlord3143', 'krawankfacebook', 'piyh', 1, 1),
('Katow', '18', 'Karawang', 'ManLord#3143', 'katowowo', 'katuwuwu', 2, 3),
('Kato', '18', '', 'ManLord#3143', 'ya', 'ya', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `t_pendaftar`
--

CREATE TABLE `t_pendaftar` (
  `platform_id` int(11) NOT NULL,
  `calon_id` int(11) NOT NULL,
  `pertanyaan_1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_2` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_3` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_4` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_5` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_6` longtext COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_7` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan_8` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_pendaftar`
--

INSERT INTO `t_pendaftar` (`platform_id`, `calon_id`, `pertanyaan_1`, `pertanyaan_2`, `pertanyaan_3`, `pertanyaan_4`, `pertanyaan_5`, `pertanyaan_6`, `pertanyaan_7`, `pertanyaan_8`) VALUES
(1, 1, 'Mengembangkan komunitas ini lebih baik lagi', 'tindakan moderasi yang tepat, dan sebagai sahabat para member', 'supaya bisa mencari teman dengan pengalaman moderasi yang lebih baik', 'ya', 'ya', 'ya', '', ''),
(2, 3, 'Sejak kemarin', 'kurang tahu hyung', 'ngeban member nakal', 'ya', 'ya', '', '', ''),
(3, 4, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `t_platform`
--

CREATE TABLE `t_platform` (
  `platform_id` int(10) NOT NULL,
  `platform` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_platform`
--

INSERT INTO `t_platform` (`platform_id`, `platform`, `status`) VALUES
(1, 'facebook', 'Y'),
(2, 'instagram', 'Y'),
(3, 'discord', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `q_pertanyaan`
--
ALTER TABLE `q_pertanyaan`
  ADD PRIMARY KEY (`platform_id`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_identitas`
--
ALTER TABLE `t_identitas`
  ADD PRIMARY KEY (`calon_id`);

--
-- Indexes for table `t_pendaftar`
--
ALTER TABLE `t_pendaftar`
  ADD PRIMARY KEY (`calon_id`);

--
-- Indexes for table `t_platform`
--
ALTER TABLE `t_platform`
  ADD PRIMARY KEY (`platform_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `q_pertanyaan`
--
ALTER TABLE `q_pertanyaan`
  MODIFY `platform_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_identitas`
--
ALTER TABLE `t_identitas`
  MODIFY `calon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `t_pendaftar`
--
ALTER TABLE `t_pendaftar`
  MODIFY `calon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
