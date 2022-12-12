-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 06:24 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esakip`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `opd` varchar(50) NOT NULL,
  `rpjmd` varchar(50) NOT NULL,
  `renstra` varchar(50) NOT NULL,
  `iku` varchar(50) NOT NULL,
  `renja` varchar(50) NOT NULL,
  `pk` varchar(50) NOT NULL,
  `renaksi` varchar(50) NOT NULL,
  `lakip` varchar(50) NOT NULL,
  `lainnya` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`opd`, `rpjmd`, `renstra`, `iku`, `renja`, `pk`, `renaksi`, `lakip`, `lainnya`) VALUES
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', '', '', '', '', ''),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', '', '', '', '', ''),
('Badan Pendapatan Daerah', '', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check'),
('Badan Pendapatan Daerah', '', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check', 'fa-solid fa-circle-check'),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', 'fa-solid fa-circle-check', '', '', '', ''),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', 'fa-solid fa-circle-check', '', '', '', ''),
('Badan Pendapatan Daerah', '', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', ''),
('Badan Pendapatan Daerah', '', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', ''),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', '', '', '', 'fa-solid fa-circle-check', ''),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', '', '', '', 'fa-solid fa-circle-check', ''),
('Badan Pendapatan Daerah', '', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', ''),
('Badan Pendapatan Daerah', '', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', '', 'fa-solid fa-circle-check', ''),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', '', '', 'fa-solid fa-circle-check', '', ''),
('Provinsi Sulawesi Utara', 'fa-solid fa-circle-check', '', '', '', '', 'fa-solid fa-circle-check', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelaporan_kinerja_admin`
--

CREATE TABLE `pelaporan_kinerja_admin` (
  `opd` varchar(50) NOT NULL,
  `dokumen_lakip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelaporan_kinerja_admin`
--

INSERT INTO `pelaporan_kinerja_admin` (`opd`, `dokumen_lakip`) VALUES
('Badan Pendapatan Daerah', 'fa-solid fa-download'),
('Provinsi Sulawesi Utara', 'fa-solid fa-download'),
('Provinsi Sulawesi Utara', 'fa-solid fa-download'),
('Badan Pendapatan Daerah', 'fa-solid fa-download'),
('Provinsi Sulawesi Utara', 'fa-solid fa-download'),
('Provinsi Sulawesi Utara', 'fa-solid fa-download');

-- --------------------------------------------------------

--
-- Table structure for table `perencanaan_kinerja_admin`
--

CREATE TABLE `perencanaan_kinerja_admin` (
  `id` int(11) NOT NULL,
  `opd` varchar(50) NOT NULL,
  `jenis_dok` varchar(90) NOT NULL,
  `nama_dok` varchar(50) NOT NULL,
  `File_dok` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perencanaan_kinerja_admin`
--

INSERT INTO `perencanaan_kinerja_admin` (`id`, `opd`, `jenis_dok`, `nama_dok`, `File_dok`, `date`) VALUES
(1, 'Provinsi Sulawesi Utara', 'fa-solid fa-download', '', '', '0000-00-00'),
(2, 'Provinsi Sulawesi Utara', 'fa-solid fa-download', '', '', '0000-00-00'),
(3, 'Badan Pendapatan Daerah', 'fa-solid fa-download', 'fa-solid fa-download', '', '0000-00-00'),
(4, 'Badan Pendapatan Daerah', 'fa-solid fa-download', 'fa-solid fa-download', '', '0000-00-00'),
(5, 'Provinsi Sulawesi Utara', 'fa-solid fa-download', '', '', '0000-00-00'),
(6, 'Provinsi Sulawesi Utara', 'fa-solid fa-download', '', '', '0000-00-00'),
(7, 'user', '3', 'dokumen sakip', 'Abelard_CV1.pdf', '2022-12-03'),
(8, 'user', 'RPJMD', 'ch', 'Ch_9_-_CRM.pdf', '2022-12-10'),
(9, 'user', 'Crosscutting', 'dokumen sakip', 'surat_wawancara_beasiswa_unklab_sem_ii_20222.pdf', '2022-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_dokumen`
--

CREATE TABLE `tbl_jenis_dokumen` (
  `id_dokumen` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_dokumen`
--

INSERT INTO `tbl_jenis_dokumen` (`id_dokumen`, `name`) VALUES
(1, 'Renstra'),
(2, 'RPJMD'),
(3, 'IKU'),
(4, 'Renja'),
(5, 'PK'),
(6, 'Rencana Aksi'),
(7, 'Laporan Kerja'),
(8, 'Cascading Kerja'),
(9, 'Pohon Kinerja'),
(10, 'Crosscutting');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(300) NOT NULL,
  `user_akses` int(11) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_akses`, `user_status`) VALUES
(2, 'abelard', 'abelardpangalila@gmail.com', 'b759497cf50772b2452434b3983eebcc1772f1e03bbd76dc2a139da7', 1, 1),
(5, 'user', 'user@gmail.com', 'ef6868fe47958067cf0f396891d6f4de11f038e4a93a70557d9f8e20', 2, 1),
(7, 'user2', 'user2@gmail.com', 'ef6868fe47958067cf0f396891d6f4de11f038e4a93a70557d9f8e20', 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perencanaan_kinerja_admin`
--
ALTER TABLE `perencanaan_kinerja_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_dokumen`
--
ALTER TABLE `tbl_jenis_dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perencanaan_kinerja_admin`
--
ALTER TABLE `perencanaan_kinerja_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_jenis_dokumen`
--
ALTER TABLE `tbl_jenis_dokumen`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
