-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 01:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nim` varchar(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `no_handphone` varchar(25) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nama`, `email`, `nim`, `alamat`, `password`, `no_handphone`, `jenis_kelamin`) VALUES
(4, 'Anggun Dwi Prabowo', 'anggun@gmail.com', '3042019010', 'JL.SIDUK', 'd41d8cd98f00b204e9800998e', '085344446788', 'Laki-laki'),
(5, 'Tiana Adela Pratiwi', 'tiana@gmail.com', '3042019014', 'JL.KS.TUBUN\r\n', 'f23efa1652ee17981d64b1e99', '085349466908', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `isbn` varchar(225) DEFAULT NULL,
  `barcode` varchar(225) DEFAULT NULL,
  `judul` varchar(225) DEFAULT NULL,
  `penulis` varchar(225) DEFAULT NULL,
  `penerbit` varchar(225) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `tersedia` int(11) DEFAULT NULL,
  `dipinjam` int(11) DEFAULT NULL,
  `cover` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `isbn`, `barcode`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `stok`, `tersedia`, `dipinjam`, `cover`) VALUES
(1, '12345578', '12345678', 'Metode Kuantitatif', 'Sugiyono', 'Hikam', 2008, 12, 5, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(12) NOT NULL,
  `nama` varchar(225) DEFAULT NULL,
  `alamat` varchar(225) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `kode_buku` int(11) DEFAULT NULL,
  `judul_buku` varchar(225) DEFAULT NULL,
  `penerbit` varchar(50) DEFAULT NULL,
  `pengarang` varchar(50) DEFAULT NULL,
  `lama_pinjam` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`id`, `nama`, `alamat`, `no_hp`, `kode_buku`, `judul_buku`, `penerbit`, `pengarang`, `lama_pinjam`) VALUES
(1, 'Tiana Adela Pratiwi', 'JL.KS.TUBUN', '085349466908', 1234, 'Metode Kualitatif', 'Sugiyono', 'Hendro', '12 Hari');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
