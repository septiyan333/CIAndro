-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jun 2020 pada 17.54
-- Versi server: 10.1.40-MariaDB
-- Versi PHP: 7.3.5

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
-- Struktur dari tabel `tb_akun`
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
-- Dumping data untuk tabel `tb_akun`
--

INSERT INTO `tb_akun` (`id_akun`, `nama_lengkap`, `alamat`, `email`, `no_telpon`, `nama_pengguna`, `kata_sandi`, `jenis_kelamin`, `status`, `saldo`, `image`) VALUES
(18, 'Ekky Aulia Rahman', 'Jl. Danau Toba no. 22 Link Panji', 'ekkyrahmanx1@gmail.com', '082234827214', 'ekky', '123', 'Laki-Laki', 'Pengguna', 0, 'P_20181021_161905_BF_(edit).jpg'),
(19, 'Putri Rachmawati', 'Rambi Jember', 'putrirach33@gmail.com', '082234827216', 'putri', '123', 'Perempuan', 'Kurir', 0, 'default.png'),
(20, 'Septiyan Yuliono', 'Indonesia, Jawa Timur, Kabupaten Lumajang, Jatiroto B50', 'septiyan333@gmail.com', '082234827217', 'iyan', '123', 'Laki-Laki', 'Admin', 0, 'default.png'),
(21, 'Aidatul Fakhirah', 'Jember', 'Aidatul123@gmail.com', '082234827218', 'aida', '123', 'Perempuan', 'Pengguna', 0, 'default.png'),
(22, 'Desy Wahyuningtyas', 'Lumajang', 'deasywahyuningtyas@gmail.com', '081234567890', 'desy', '12345', 'Perempuan', 'Pengguna', 0, 'default.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `daerah` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id_jadwal`, `id_akun`, `tanggal`, `daerah`, `waktu`) VALUES
(1, 1, '2020-01-14', 'Sumbersari', 'Pagi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_paket_data`
--

CREATE TABLE `tb_paket_data` (
  `id_paket_data` int(11) NOT NULL,
  `jenis_paket_data` enum('Internet OMG','Paket Internet','','') NOT NULL,
  `kuota` int(11) NOT NULL,
  `jumlah_tukar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_paket_data`
--

INSERT INTO `tb_paket_data` (`id_paket_data`, `jenis_paket_data`, `kuota`, `jumlah_tukar`) VALUES
(1, 'Internet OMG', 5, 3400),
(2, 'Paket Internet', 500, 5000),
(3, 'Internet OMG', 10, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_point`
--

CREATE TABLE `tb_point` (
  `id_point` int(11) NOT NULL,
  `id_akun` int(3) NOT NULL,
  `point` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_point`
--

INSERT INTO `tb_point` (`id_point`, `id_akun`, `point`, `jumlah`) VALUES
(2, 9, 100000, 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pointukar`
--

CREATE TABLE `tb_pointukar` (
  `id_point_tukar` int(11) NOT NULL,
  `id_akun` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `tukar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pointukar`
--

INSERT INTO `tb_pointukar` (`id_point_tukar`, `id_akun`, `tanggal`, `tukar`) VALUES
(31, 9, '2020-01-11', 5000),
(34, 9, '2020-01-11', 5000),
(35, 9, '2020-01-11', 5000),
(43, 9, '2020-01-12', 100),
(44, 9, '2020-01-12', 3400),
(45, 9, '2020-01-12', 3400),
(46, 9, '2020-01-12', 3400),
(47, 9, '2020-01-12', 5000),
(50, 1, '2020-01-14', 2000),
(51, 9, '2020-01-12', 3400),
(52, 0, '2020-01-13', 3400),
(53, 0, '2020-01-13', 5000);

--
-- Trigger `tb_pointukar`
--
DELIMITER $$
CREATE TRIGGER `updatepoint` AFTER INSERT ON `tb_pointukar` FOR EACH ROW BEGIN
	UPDATE tb_point SET point = point - new.tukar WHERE id_akun=new.id_akun;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tambah_point`
--

CREATE TABLE `tb_tambah_point` (
  `id_tambah_point` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `point_tambah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `jenis_sampah` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `saldo` varchar(255) NOT NULL,
  `no_telpon` int(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_akun`, `nama_lengkap`, `tanggal`, `waktu`, `jenis_sampah`, `berat`, `saldo`, `no_telpon`, `alamat`, `detail`) VALUES
(57, 2, 'Septiyan Yuliono', '2020-01-10', '04:00', '', '0', '0', 2147483647, 'Indonesia, Jawa Timur, Kabupaten Lumajang, Jatiroto B50', 'Pojok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_tukar`
--

CREATE TABLE `tb_tukar` (
  `id_point` int(11) NOT NULL,
  `ditukar` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_tukar`
--

INSERT INTO `tb_tukar` (`id_point`, `ditukar`, `status`) VALUES
(1, '10000', 'PULSA'),
(2, '20000', 'PULSA'),
(4, '30000', 'PULSA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indeks untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD UNIQUE KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `tb_paket_data`
--
ALTER TABLE `tb_paket_data`
  ADD PRIMARY KEY (`id_paket_data`);

--
-- Indeks untuk tabel `tb_point`
--
ALTER TABLE `tb_point`
  ADD PRIMARY KEY (`id_point`),
  ADD UNIQUE KEY `id_akun` (`id_akun`);

--
-- Indeks untuk tabel `tb_pointukar`
--
ALTER TABLE `tb_pointukar`
  ADD PRIMARY KEY (`id_point_tukar`);

--
-- Indeks untuk tabel `tb_tambah_point`
--
ALTER TABLE `tb_tambah_point`
  ADD PRIMARY KEY (`id_tambah_point`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_akun` (`id_akun`) USING BTREE;

--
-- Indeks untuk tabel `tb_tukar`
--
ALTER TABLE `tb_tukar`
  ADD PRIMARY KEY (`id_point`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id_akun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_paket_data`
--
ALTER TABLE `tb_paket_data`
  MODIFY `id_paket_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_point`
--
ALTER TABLE `tb_point`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_pointukar`
--
ALTER TABLE `tb_pointukar`
  MODIFY `id_point_tukar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tb_tambah_point`
--
ALTER TABLE `tb_tambah_point`
  MODIFY `id_tambah_point` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `tb_tukar`
--
ALTER TABLE `tb_tukar`
  MODIFY `id_point` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
