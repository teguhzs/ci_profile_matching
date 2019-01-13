-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2019 at 11:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_pm`
--
CREATE DATABASE IF NOT EXISTS `db_spk_pm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_spk_pm`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` varchar(70) NOT NULL,
  `kode_alternatif` varchar(10) NOT NULL,
  `nama_alternatif` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `kode_alternatif`, `nama_alternatif`) VALUES
('5c07ab930d6b5', 'A1', 'Alternatif 1'),
('5c07abb380826', 'A2', 'Alternatif 2'),
('5c07ac27a9f7f', 'A3', 'Alternatif 3'),
('5c235a78768d1', 'A4', 'Alternatif 4');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aspek`
--

CREATE TABLE `tb_aspek` (
  `id_aspek` varchar(70) NOT NULL,
  `kode_aspek` varchar(6) NOT NULL,
  `nama_aspek` varchar(150) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aspek`
--

INSERT INTO `tb_aspek` (`id_aspek`, `kode_aspek`, `nama_aspek`, `bobot`) VALUES
('5c0a2a2167452', 'JK', 'Jarak', 10),
('5c0a2a3b87d03', 'L', 'Lokasi', 20),
('5c0a2a5902c8d', 'T', 'Transportasi', 10),
('5c0a2a7074dc9', 'I', 'Infrastruktur', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE `tb_hasil` (
  `id_hasil` varchar(70) NOT NULL,
  `id_alternatif` varchar(70) NOT NULL,
  `hasil` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`id_hasil`, `id_alternatif`, `hasil`) VALUES
('5c30b4aba38a0', '5c07ab930d6b5', 1.43),
('5c30b4abb0e83', '5c07abb380826', 1.39),
('5c30b4abbea15', '5c07ac27a9f7f', 1.2225),
('5c30b4abcc1ec', '5c235a78768d1', 1.5375);

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `id_penilaian` varchar(70) NOT NULL,
  `id_alternatif` varchar(70) NOT NULL,
  `id_sub_kriteria` varchar(70) NOT NULL,
  `skor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`id_penilaian`, `id_alternatif`, `id_sub_kriteria`, `skor`) VALUES
('5c30b46376e31', '5c07ab930d6b5', '5c0f0b4f7d558', 6),
('5c30b46376e43', '5c07ab930d6b5', '5c0f0b6cb7f6a', 7),
('5c30b46376e46', '5c07ab930d6b5', '5c0f0bd7f11e5', 4),
('5c30b46376e48', '5c07ab930d6b5', '5c0f0bf5353b4', 7),
('5c30b46376e4b', '5c07ab930d6b5', '5c0f0c1481601', 5),
('5c30b46376e4c', '5c07ab930d6b5', '5c0f0c2a2c71c', 5),
('5c30b46376e4e', '5c07ab930d6b5', '5c0f0c4f5b6af', 5),
('5c30b46376e51', '5c07ab930d6b5', '5c0f0c7ee072a', 7),
('5c30b46376e54', '5c07abb380826', '5c0f0b4f7d558', 4),
('5c30b46376e5a', '5c07abb380826', '5c0f0b6cb7f6a', 4),
('5c30b46376e5b', '5c07abb380826', '5c0f0bd7f11e5', 2),
('5c30b46376e62', '5c07abb380826', '5c0f0bf5353b4', 7),
('5c30b46376e63', '5c07abb380826', '5c0f0c1481601', 7),
('5c30b46376e64', '5c07abb380826', '5c0f0c2a2c71c', 7),
('5c30b46376e65', '5c07abb380826', '5c0f0c4f5b6af', 6),
('5c30b46376e67', '5c07abb380826', '5c0f0c7ee072a', 7),
('5c30b46376e68', '5c07ac27a9f7f', '5c0f0b4f7d558', 7),
('5c30b46376e69', '5c07ac27a9f7f', '5c0f0b6cb7f6a', 7),
('5c30b46376e6a', '5c07ac27a9f7f', '5c0f0bd7f11e5', 7),
('5c30b46376e6b', '5c07ac27a9f7f', '5c0f0bf5353b4', 7),
('5c30b46376e6c', '5c07ac27a9f7f', '5c0f0c1481601', 3),
('5c30b46376e6d', '5c07ac27a9f7f', '5c0f0c2a2c71c', 3),
('5c30b46376e6e', '5c07ac27a9f7f', '5c0f0c4f5b6af', 3),
('5c30b46376e6f', '5c07ac27a9f7f', '5c0f0c7ee072a', 5),
('5c30b46376e70', '5c235a78768d1', '5c0f0b4f7d558', 4),
('5c30b46376e71', '5c235a78768d1', '5c0f0b6cb7f6a', 4),
('5c30b46376e72', '5c235a78768d1', '5c0f0bd7f11e5', 7),
('5c30b46376e74', '5c235a78768d1', '5c0f0bf5353b4', 7),
('5c30b46376e76', '5c235a78768d1', '5c0f0c1481601', 7),
('5c30b46376e77', '5c235a78768d1', '5c0f0c2a2c71c', 7),
('5c30b46376e79', '5c235a78768d1', '5c0f0c4f5b6af', 6),
('5c30b46376e7a', '5c235a78768d1', '5c0f0c7ee072a', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sub_kriteria`
--

CREATE TABLE `tb_sub_kriteria` (
  `id_sub_kriteria` varchar(70) NOT NULL,
  `id_aspek` varchar(70) NOT NULL,
  `kode_sub_kriteria` varchar(50) NOT NULL,
  `nama_sub_kriteria` varchar(150) NOT NULL,
  `nilai_sub_kriteria` int(3) NOT NULL,
  `bobot` int(3) NOT NULL,
  `keterangan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sub_kriteria`
--

INSERT INTO `tb_sub_kriteria` (`id_sub_kriteria`, `id_aspek`, `kode_sub_kriteria`, `nama_sub_kriteria`, `nilai_sub_kriteria`, `bobot`, `keterangan`) VALUES
('5c0f0b4f7d558', '5c0a2a2167452', 'JT', 'Jarak Lokasi tempuh dosen ke lokasi penelitian', 5, 60, 'CF'),
('5c0f0b6cb7f6a', '5c0a2a2167452', 'JL', 'Jarak Lokasi Penelitian dengan Kecamatan atau Kabupaten ', 6, 40, 'SF'),
('5c0f0bd7f11e5', '5c0a2a3b87d03', 'AK', 'Akses Kendaraan', 6, 70, 'CF'),
('5c0f0bf5353b4', '5c0a2a3b87d03', 'AJ', 'Akses Jaringan', 5, 30, 'SF'),
('5c0f0c1481601', '5c0a2a5902c8d', 'BT', 'Biaya Transportasi', 7, 70, 'CF'),
('5c0f0c2a2c71c', '5c0a2a5902c8d', 'BMM', 'Biaya Makan Minum ', 5, 30, 'SF'),
('5c0f0c4f5b6af', '5c0a2a7074dc9', 'TP', 'Tempat Penelitian', 6, 50, 'CF'),
('5c0f0c7ee072a', '5c0a2a7074dc9', 'KDJP', 'Ketersediaan Data yang dibutuhkan dengan Judul Penelitian ', 4, 50, 'SF');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_ubah` datetime NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `jenis_kelamin`, `telepon`, `tgl_buat`, `tgl_ubah`, `status`) VALUES
(1, 'superadmin', 'superadmin@admin.com', '21232f297a57a5a743894a0e4a801fc3', 'L', '085383345262', '2018-12-01 03:10:19', '2018-12-05 02:06:07', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_aspek`
--
ALTER TABLE `tb_aspek`
  ADD PRIMARY KEY (`id_aspek`);

--
-- Indexes for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `fk_hasil_alternatif` (`id_alternatif`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD KEY `fk_sub_kriteria` (`id_sub_kriteria`),
  ADD KEY `fk_alternatif` (`id_alternatif`);

--
-- Indexes for table `tb_sub_kriteria`
--
ALTER TABLE `tb_sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `id_aspek` (`id_aspek`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hasil`
--
ALTER TABLE `tb_hasil`
  ADD CONSTRAINT `fk_hasil_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `fk_alternatif` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sub_kriteria` FOREIGN KEY (`id_sub_kriteria`) REFERENCES `tb_sub_kriteria` (`id_sub_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_sub_kriteria`
--
ALTER TABLE `tb_sub_kriteria`
  ADD CONSTRAINT `fk_sub_aspek` FOREIGN KEY (`id_aspek`) REFERENCES `tb_aspek` (`id_aspek`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
