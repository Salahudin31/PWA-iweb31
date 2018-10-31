-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Okt 2018 pada 11.56
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6534530_iweb31_art`
--
CREATE DATABASE IF NOT EXISTS `id6534530_iweb31_art` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6534530_iweb31_art`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `kode_artikel` varchar(12) NOT NULL,
  `kode_jenis` varchar(10) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `kode_rating` varchar(12) NOT NULL,
  `tgl_rilis` int(11) NOT NULL,
  `sub_jenis` varchar(15) NOT NULL,
  `judul_artikel` varchar(50) NOT NULL,
  `img_artikel` text NOT NULL,
  `link_artikel` text NOT NULL,
  `desk_artikel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `kode_artikel`, `kode_jenis`, `kode_kategori`, `kode_rating`, `tgl_rilis`, `sub_jenis`, `judul_artikel`, `img_artikel`, `link_artikel`, `desk_artikel`) VALUES
(1, '036W01023V', '036W', '023V', '', 1531935327, '036W01', 'Belajar HTML Dasar Untuk Pemula', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam.'),
(2, '036W02023V', '036W', '023V', '', 1531935327, '036W02', 'Tutorial CSS untuk Pemula', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam.'),
(3, '031M01021C', '031M', '021C', '', 1531935327, '031M01', 'One Piece ep 853', '', '', 'Hisashi dan Mai adalah pasangan bahagia di usia 20-an yang bertunangan untuk menikah. Tapi tiga bulan sebelum pernikahan mereka, Mai menjadi sakit parah. Jantungnya berhenti sejenak, dan dia jatuh ke dalam koma yang dalam.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `kode_jenis` varchar(10) NOT NULL,
  `nm_jenis` varchar(20) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`kode_jenis`, `nm_jenis`, `desk`) VALUES
('031M', 'Manga', ''),
('032P', 'Program', ''),
('033J', 'Jaringan', ''),
('034A', 'Android', ''),
('035M', 'Matematika', ''),
('036W', 'Website', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` varchar(10) NOT NULL,
  `kategori_tp` varchar(10) NOT NULL,
  `nm_kategori` varchar(20) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `kategori_tp`, `nm_kategori`, `desk`) VALUES
('021C', 'Artikel', 'Chapter', ''),
('0227E', 'Artikel', 'Edisi', ''),
('023V', 'Artikel', 'Volume', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `kode_rating` varchar(10) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `skor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_jenis`
--

CREATE TABLE `sub_jenis` (
  `kode_subjenis` varchar(15) NOT NULL,
  `kode_jenis` varchar(10) NOT NULL,
  `nm_subjenis` varchar(20) NOT NULL,
  `desk_subjenis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sub_jenis`
--

INSERT INTO `sub_jenis` (`kode_subjenis`, `kode_jenis`, `nm_subjenis`, `desk_subjenis`) VALUES
('031M01', '031M', 'Anime', ''),
('036W01', '036W', 'HTML', ''),
('036W02', '036W', 'CSS', ''),
('036W03', '036W', 'Javascript', ''),
('036W04', '036W', 'PHP', ''),
('036W05', '036W', 'Jquery', ''),
('036W06', '036W', 'SQL', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`kode_jenis`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indeks untuk tabel `sub_jenis`
--
ALTER TABLE `sub_jenis`
  ADD PRIMARY KEY (`kode_subjenis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
