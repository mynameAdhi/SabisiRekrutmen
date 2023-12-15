-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 05:40 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rekrutmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `notelp` int(15) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `jenjang` varchar(30) NOT NULL,
  `thn_mulai` date NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `thn_selesai` date NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `negara` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `tempat_lahir`, `email`, `tgl_lahir`, `notelp`, `agama`, `jenjang`, `thn_mulai`, `pendidikan`, `thn_selesai`, `jurusan`, `negara`, `alamat`, `provinsi`, `kecamatan`, `kelurahan`, `kode`) VALUES
(1, 'Okta Wicaksono', 'jas', 'adhi@gmail.com', '2023-12-18', 123123123, 'islam', 's1', '0000-00-00', 's2', '0000-00-00', '', 'asdasd', 'asdasda', 'asdasd', 'sadad', 'adasda', 1232);

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id` int(11) NOT NULL,
  `jenjang` varchar(75) NOT NULL,
  `posisi` varchar(75) NOT NULL,
  `batas_akhir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `no_telp`, `pesan`) VALUES
(10, 'Has Adhi Rian', 'hasadhirian@gmail.com', 2147483647, 'web ini sangat membantu saya menemukan lowongan pekerjaa'),
(11, 'Ryan Prasojo', 'prasojoryan196@gmail.com', 2147483647, 'Kerenn!!'),
(12, 'Okta Wicaksono', 'OktaW@gmail.com', 2147483647, 'Kerenn!!'),
(13, 'Aji Fajar', 'hasadhi93@gmail.com', 2147483647, 'Anjay'),
(14, 'Bayu al', 'bayual@gmail.com', 2147483647, 'Mantul keren wkwk'),
(15, 'Adjie Fajar Rahayu', 'adjiefajar@gmail.com', 2147483647, 'Lowongan masih sedikit');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(75) NOT NULL,
  `image` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_input` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `email`, `image`, `password`, `role_id`, `is_active`, `tanggal_input`) VALUES
(1, 'adhi', '', 'adhi@gmail.com', 'default.jpg', '$2y$10$LeSuwLJCDhCruiZ2r0bBWel3/5yqzuaAduO2npRLsZFV5sdR/h9bS', 2, 1, 1701793756),
(2, 'Has Adhi Rian', '', 'hasadhirian@gmail.com', 'default.jpg', '$2y$10$NhnJWqE2swd6Dlzv8qHncuBTRhCybIE3dXvOESbqxyMrQ.BvjGlX.', 2, 1, 1701799473),
(3, 'Ryan Prasojo', '', 'prasojoryan196@gmail.com', 'default.jpg', '$2y$10$c.1XjjqrYU7chZ2geY4o6egGCWP5CaqNBnmdEsC7/rVoBZdTRb/KK', 2, 1, 1701837161);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
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
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lowongan`
--
ALTER TABLE `lowongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
