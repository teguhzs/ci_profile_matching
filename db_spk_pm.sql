-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2018 at 07:35 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spk_pm`
--

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
('5c07ac27a9f7f', 'A3', 'Alternatif 3');

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
('5c0a2a2167452', 'J', 'Jarak', 10),
('5c0a2a3b87d03', 'L', 'Lokasi', 20),
('5c0a2a5902c8d', 'T', 'Transportasi', 40),
('5c0a2a7074dc9', 'I', 'Infrastruktur', 30);

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
('5c14e7e60a7ac', '5c07ab930d6b5', '5c0f0c4f5b6af', 5),
('5c14e7e60a7b5', '5c07ab930d6b5', '5c0f0c7ee072a', 2),
('5c14e7e60a7b6', '5c07ab930d6b5', '5c0f0b4f7d558', 1),
('5c14e7e60a7b7', '5c07ab930d6b5', '5c0f0b6cb7f6a', 3),
('5c14e7e60a7b8', '5c07ab930d6b5', '5c0f0bd7f11e5', 2),
('5c14e7e60a7b9', '5c07ab930d6b5', '5c0f0bf5353b4', 2),
('5c14e7e60a7ba', '5c07ab930d6b5', '5c0f0c1481601', 4),
('5c14e7e60a7bb', '5c07ab930d6b5', '5c0f0c2a2c71c', 3),
('5c14e7e60a7bc', '5c07abb380826', '5c0f0c4f5b6af', 3),
('5c14e7e60a7bd', '5c07abb380826', '5c0f0c7ee072a', 3),
('5c14e7e60a7be', '5c07abb380826', '5c0f0b4f7d558', 3),
('5c14e7e60a7bf', '5c07abb380826', '5c0f0b6cb7f6a', 6),
('5c14e7e60a7c0', '5c07abb380826', '5c0f0bd7f11e5', 4),
('5c14e7e60a7c1', '5c07abb380826', '5c0f0bf5353b4', 6),
('5c14e7e60a7c2', '5c07abb380826', '5c0f0c1481601', 6),
('5c14e7e60a7c3', '5c07abb380826', '5c0f0c2a2c71c', 3),
('5c14e7e60a7c4', '5c07ac27a9f7f', '5c0f0c4f5b6af', 3),
('5c14e7e60a7c5', '5c07ac27a9f7f', '5c0f0c7ee072a', 1),
('5c14e7e60a7c6', '5c07ac27a9f7f', '5c0f0b4f7d558', 4),
('5c14e7e60a7c7', '5c07ac27a9f7f', '5c0f0b6cb7f6a', 3),
('5c14e7e60a7c8', '5c07ac27a9f7f', '5c0f0bd7f11e5', 4),
('5c14e7e60a7c9', '5c07ac27a9f7f', '5c0f0bf5353b4', 3),
('5c14e7e60a7ca', '5c07ac27a9f7f', '5c0f0c1481601', 3),
('5c14e7e60a7cb', '5c07ac27a9f7f', '5c0f0c2a2c71c', 6);

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
  `id_user` varchar(64) NOT NULL,
  `nama_user` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `sandi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `sandi`) VALUES
('5c04a986bccd9', 'admin', 'arifrhm051@gmail.com', '123');

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
-- Indexes for table `tb_sub_kriteria`
--
ALTER TABLE `tb_sub_kriteria`
  ADD PRIMARY KEY (`id_sub_kriteria`),
  ADD KEY `id_aspek` (`id_aspek`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
