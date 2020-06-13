-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 08:30 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sampah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_akun` int(3) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_telpon` varchar(15) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `kata_sandi` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `saldo` int(55) NOT NULL,
  `image` varchar(126) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama_lengkap`, `alamat`, `email`, `no_telpon`, `nama_pengguna`, `kata_sandi`, `jenis_kelamin`, `status`, `saldo`, `image`) VALUES
(18, 'Ekky Aulia Rahman', 'Jl. Danau Toba no. 22 Link Panji', 'ekkyrahmanx1@gmail.com', '082234827214', 'ekky', '123', 'Laki-Laki', 'Pengguna', 0, 'P_20181021_161905_BF_(edit).jpg'),
(19, 'Putri Rachmawati', 'Rambi Jember', 'putrirach33@gmail.com', '082234827216', 'putri', '123', 'Perempuan', 'Kurir', 0, 'default.png'),
(20, 'Septiyan Yuliono', 'Indonesia, Jawa Timur, Kabupaten Lumajang, Jatiroto B50', 'septiyan333@gmail.com', '082234827217', 'iyan', '123', 'Laki-Laki', 'Admin', 0, 'default.png'),
(21, 'Aidatul Fakhirah', 'Jember', 'Aidatul123@gmail.com', '082234827218', 'aida', '123', 'Perempuan', 'Pengguna', 0, 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
