-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 06:00 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdamnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_user` varchar(16) NOT NULL,
  `no_pdam` int(16) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` int(32) NOT NULL,
  `no_rumah` int(4) NOT NULL,
  `no_kk` int(32) NOT NULL,
  `no_hp` int(16) NOT NULL,
  `telp_rumah` int(16) NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pemakaian`
--

CREATE TABLE `pemakaian` (
  `no_pdam` int(16) NOT NULL,
  `id_tagihan` int(16) NOT NULL,
  `pemakaian_per_m3` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(16) NOT NULL,
  `no_pdam` int(16) NOT NULL,
  `id_user` varchar(16) NOT NULL,
  `jmlbln_lalu` int(8) NOT NULL,
  `jmlbln_ini` int(8) NOT NULL,
  `harga_satuan` int(8) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `status_bayar` varchar(16) NOT NULL,
  `jumlah_bayar` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan_m`
--

CREATE TABLE `tagihan_m` (
  `id_tagihan` int(16) NOT NULL,
  `id_operator` int(16) NOT NULL,
  `tgl_gen` date NOT NULL,
  `thnbln_per` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tarif`
--

CREATE TABLE `tarif` (
  `no_pdam` int(16) NOT NULL,
  `batasbawahm3` int(8) NOT NULL,
  `batasatasm3` int(8) NOT NULL,
  `tarif_per_m3` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(16) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `no_pdam` (`no_pdam`),
  ADD UNIQUE KEY `no_kk` (`no_kk`),
  ADD UNIQUE KEY `no_hp` (`no_hp`),
  ADD UNIQUE KEY `telp_rumah` (`telp_rumah`);

--
-- Indexes for table `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD UNIQUE KEY `no_pdam` (`no_pdam`),
  ADD UNIQUE KEY `id_tagihan` (`id_tagihan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`),
  ADD UNIQUE KEY `no_pdam` (`no_pdam`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `tagihan_m`
--
ALTER TABLE `tagihan_m`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `tarif`
--
ALTER TABLE `tarif`
  ADD PRIMARY KEY (`no_pdam`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`no_pdam`) REFERENCES `pemakaian` (`no_pdam`),
  ADD CONSTRAINT `pelanggan_ibfk_3` FOREIGN KEY (`no_pdam`) REFERENCES `tarif` (`no_pdam`);

--
-- Constraints for table `pemakaian`
--
ALTER TABLE `pemakaian`
  ADD CONSTRAINT `pemakaian_ibfk_1` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan` (`id_tagihan`),
  ADD CONSTRAINT `pemakaian_ibfk_2` FOREIGN KEY (`no_pdam`) REFERENCES `tagihan` (`no_pdam`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`id_tagihan`) REFERENCES `tagihan_m` (`id_tagihan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `pelanggan` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
