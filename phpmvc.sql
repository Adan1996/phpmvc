-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2019 pada 14.57
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmvc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `npm` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `email`, `jurusan`) VALUES
(1, 'Syahdan Masyhuri', '123456789', 'syahdanmasyhuri@gmail.com', 'Teknik Informatika'),
(2, 'Enden Kurnaeli', '987654321', 'endenkurnaeli@gmail.com', 'Management Informatika'),
(3, 'Supriadi', '132435465', 'supriadi@yahoo.com', 'Teknik Komputer'),
(6, 'Raden Joko Tingkir', '120045678', 'jokotingkir@gmail.com', 'Teknik Mesin'),
(8, 'M. Thamrin', '109023156', 'thamrin@yahoo.com', 'Teknik Industri'),
(9, 'Ramli Widjatmoko', '123234345', 'ramliwidjatmoko@yahoo.com', 'Teknik Informatika'),
(11, 'Syafrudin', '121232345', 'syafrudin@gmail.com', 'Teknik Mesin'),
(12, 'Suprapto', '123123123', 'suprapto@gmail.com', 'Teknik Mesin'),
(13, 'Agung', '123234432', 'agung@gmail.com', 'Teknik Mesin'),
(18, 'Sukron Makmun', '212091209', 'syukron@gmail.com', 'Teknik Industri');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
