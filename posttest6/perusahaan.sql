-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Okt 2024 pada 13.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perusahaan`
--
CREATE DATABASE IF NOT EXISTS `perusahaan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `perusahaan`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonpendaftar`
--

CREATE TABLE `calonpendaftar` (
  `ID` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `NoTelepon` varchar(15) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `PendidikanTerakhir` varchar(100) DEFAULT NULL,
  `PosisiDilamar` varchar(50) DEFAULT NULL,
  `TanggalDaftar` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `calonpendaftar`
--

INSERT INTO `calonpendaftar` (`ID`, `Nama`, `Email`, `NoTelepon`, `Alamat`, `PendidikanTerakhir`, `PosisiDilamar`, `TanggalDaftar`) VALUES
(5, 'asdsad', 'shasdandh@gmail.com', '081282828282', 'uhuy', 'asdasd', 'asdsad', '2024-10-08'),
(6, 'mbooo', 'shasdaadadsndh@gmail.com', '081282828282', 'werew', 'affah', 'asdadadaa', '2024-10-08'),
(7, 'asdasdsad', 'shandhy@gmail.com222', '2222', '22', '22', '22', '2024-10-08'),
(8, 'shandy', 'asdadasdasd@gmail.com', '081282828282', 'ajsduyfv hsd', 'affah', '123123123', '2024-10-08'),
(9, 'asdsad', 'shansdadhy@gmail.com', '2222', 'asdad', 'asdas', 'asdasd', '2024-10-08'),
(13, 'shandy', 'shandh@gmail.com', '081282828282', 'dasjads', 'asdasd', 'asdsad', '2024-10-09'),
(15, 'test terakhir', 'iyahiniterakhhri@gmail.com222', '081282828282', 'asdasd', 'affah', '22', '2024-10-09');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `calonpendaftar`
--
ALTER TABLE `calonpendaftar`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `calonpendaftar`
--
ALTER TABLE `calonpendaftar`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
