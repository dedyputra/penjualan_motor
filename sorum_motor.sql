-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 05:39 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sorum_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `email`, `pass`, `level`) VALUES
(1, 'Dedy Putra Aditia', 'dedy@gmail.com', '1234', 'admin'),
(3, 'user', 'user@gmail.com', '123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `id_motor` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`id_motor`, `gambar`, `tipe`, `harga`, `nama`, `stok`, `detail`) VALUES
(5, 'upload/beat.jpg', 'Honda', '15000000', 'Beat', 4, 'Merah'),
(6, 'upload/Satria fu.png', 'Kawasaki', '17000000', 'Satria Fu', 5, 'Putih'),
(7, 'upload/mio1.png', 'Yamaha', '12000000', 'Mio', 4, 'Biru'),
(8, 'upload/supra_x.jpg', 'Honda', '13000000', 'Supra X 125', 6, 'Hitam'),
(9, 'upload/ninja 4 tak.jpg', 'Kawasaki', '5000000', 'Ninja', 5, 'Hitam');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `tgl_beli` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `jumlah_beli` varchar(255) NOT NULL,
  `total_bayar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_pemesan`, `no_telp`, `tgl_beli`, `alamat`, `catatan`, `jumlah_beli`, `total_bayar`) VALUES
(1, 'adi', '087656728', '07-07-202`', 'sidoarjo', 'biru', '2', '1000000'),
(3, 'Priyo', '0888557722', '07-08-2021', 'Surabaya', 'Pembelian Motor', '1', '13000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`id_motor`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `id_motor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
