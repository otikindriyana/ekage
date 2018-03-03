-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 03:44 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekage`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_barang`
--

CREATE TABLE `mst_barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(50) NOT NULL,
  `nm_barang` varchar(200) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `id_kategori` varchar(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_barang`
--

INSERT INTO `mst_barang` (`id_barang`, `kode_barang`, `nm_barang`, `harga_beli`, `harga_jual`, `stok`, `id_kategori`, `status`) VALUES
(1, '1', 'a', 1000, 1200, 10, 'C001', 1),
(2, '0002', 'Pisang', 500, 1000, 1000, 'C003', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_kategori`
--

CREATE TABLE `mst_kategori` (
  `id_kategori` varchar(11) NOT NULL,
  `nm_kategori` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_kategori`
--

INSERT INTO `mst_kategori` (`id_kategori`, `nm_kategori`, `status`) VALUES
('C001', 'Obat-obatan', 1),
('C002', 'Minuman', 1),
('C003', 'Makanan Pokok', 1),
('C004', 'Makanan Ringan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_roles`
--

CREATE TABLE `mst_roles` (
  `id_role` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_roles`
--

INSERT INTO `mst_roles` (`id_role`, `role_name`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roles` int(1) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`id_user`, `username`, `password`, `roles`, `last_login`, `status`) VALUES
(1, 'admin', 'ec5c48d23b01dbc5e12c52d501f686a2', 1, '2018-02-23 03:08:37', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_barang`
--
ALTER TABLE `mst_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `mst_kategori`
--
ALTER TABLE `mst_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `mst_roles`
--
ALTER TABLE `mst_roles`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_barang`
--
ALTER TABLE `mst_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_roles`
--
ALTER TABLE `mst_roles`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_barang`
--
ALTER TABLE `mst_barang`
  ADD CONSTRAINT `mst_barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `mst_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
