-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 09:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi_jamur`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(10) NOT NULL,
  `gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `id_user` varchar(5) DEFAULT NULL,
  `hp` text DEFAULT NULL,
  `gejala` text DEFAULT NULL,
  `id_hp` varchar(11) DEFAULT NULL,
  `cf_hasil` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `tanggal`, `id_user`, `hp`, `gejala`, `id_hp`, `cf_hasil`) VALUES
(1, '2022-07-22', 'A06', 'a:1:{s:3:\"P01\";s:6:\"0.1600\";}', 'a:1:{i:0;s:2:\"G1\";}', 'P01', 0.16),
(2, '2022-07-22', 'A06', 'a:1:{s:3:\"P01\";s:6:\"0.8140\";}', 'a:4:{i:0;s:3:\"G01\";i:1;s:3:\"G02\";i:2;s:3:\"G03\";i:3;s:3:\"G04\";}', 'P01', 0.814);

-- --------------------------------------------------------

--
-- Table structure for table `hp`
--

CREATE TABLE `hp` (
  `id_hp` varchar(5) NOT NULL,
  `nama_hp` varchar(50) NOT NULL,
  `jenis` enum('Hama','Penyakit') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nama_kondisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama_kondisi`) VALUES
(1, 'Sangat Yakin'),
(2, 'Yakin'),
(3, 'Cukup Yakin'),
(4, 'Sedikit Yakin'),
(5, 'Tidak Tahu');

-- --------------------------------------------------------

--
-- Table structure for table `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` varchar(10) NOT NULL,
  `id_hp` varchar(5) NOT NULL,
  `id_gejala` varchar(10) NOT NULL,
  `cf_pakar` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengobatan`
--

CREATE TABLE `pengobatan` (
  `id_pengobatan` varchar(10) NOT NULL,
  `id_hp` varchar(5) NOT NULL,
  `pengobatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(50) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `alamat`, `level`) VALUES
('A06', 'Administrator', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Padang', 'admin'),
('A07', 'User', 'user', 'e10adc3949ba59abbe56e057f20f883e', 'Padang', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`);

--
-- Indexes for table `hp`
--
ALTER TABLE `hp`
  ADD PRIMARY KEY (`id_hp`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indexes for table `pengobatan`
--
ALTER TABLE `pengobatan`
  ADD PRIMARY KEY (`id_pengobatan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
