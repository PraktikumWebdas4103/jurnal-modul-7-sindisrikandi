-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2018 pada 11.52
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `sindi`
--

CREATE TABLE `sindi` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `gender` varchar(29) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL,
  `asal` varchar(200) NOT NULL,
  `moto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sindi`
--

INSERT INTO `sindi` (`nim`, `nama`, `gender`, `prodi`, `Fakultas`, `asal`, `moto`) VALUES
('5645667667', 'sdad', 'male', 'Teknik Telekomunikasi', 'FIT', 'daa', 'as');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `sindi`
--
ALTER TABLE `sindi`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
