-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Okt 2018 pada 11.57
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
-- Database: `id6534530_b4`
--
CREATE DATABASE IF NOT EXISTS `id6534530_b4` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id6534530_b4`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `kode_film` varchar(12) NOT NULL,
  `kode_genre` varchar(10) NOT NULL,
  `kode_negara` varchar(5) NOT NULL,
  `kode_kategori` varchar(10) NOT NULL,
  `kode_kualitas` varchar(10) NOT NULL,
  `kode_rating` varchar(12) NOT NULL,
  `tgl_rilis` int(11) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `img` text NOT NULL,
  `link_film` text NOT NULL,
  `durasi` varchar(10) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`id_film`, `kode_film`, `kode_genre`, `kode_negara`, `kode_kategori`, `kode_kualitas`, `kode_rating`, `tgl_rilis`, `judul_film`, `img`, `link_film`, `durasi`, `desk`) VALUES
(7, '00270005023B', '0027', '0005', '023B', '', '', 0, 'Dilan 1990', 'Dilan_1990.jpg', 'https://drive.google.com/file/d/1Szusyqa5qPU2ZbLPmM-x5C5gEsvBPXZE/preview', '1:45:00', 'Milea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung. Itu adalah tahun 1990, saat Milea pindah dari Jakarta ke Bandung. Perkenalan yang tidak biasa kemudian membawa Milea mulai mengenal keunikan Dilan lebih jauh. Dilan yang pintar, baik hati dan romantis... semua dengan caranya sendiri. Cara Dilan mendekati Milea tidak sama dengan teman-teman lelakinya yang lain, bahkan Beni, pacar Milea di Jakarta. Bahkan cara berbicara Dilan yang terdengar kaku, lambat laun justru membuat Milea kerap merindukannya jika sehari saja ia tak mendengar suara itu. Perjalanan hubungan mereka tak selalu mulus. Beni, gank motor, tawuran, Anhar, Kang Adi, semua mewarnai perjalanan itu. Dan Dilan... dengan caranya sendiri...selalu bisa membuat Milea percaya ia bisa tiba di tujuan dengan selamat. Tujuan dari perjalanan ini. Perjalanan mereka berdua. Katanya, dunia SMA adalah dunia paling indah. Dunia Milea dan Dilan satu tingkat lebih indah daripada itu.'),
(8, '00300001023B', '0030', '0001', '023B', '', '', 0, 'Second Summer Never See You Again', 'second_summer_never_see_you_again.jpg', 'https://drive.google.com/file/d/1jevQyl1Q0PF7TjF4VT_ZrYHmBTNeAQrN/preview', '1:47:05', 'Satoshi (Nijiro Murakami) berada di kelas 3 SMA. Ia dan murid transfer Rin (Madoka Yoshida) sedang sibuk membentuk band untuk tampil di festival budaya sekolah meski ada larangan membentuk band di sekolah. Mereka tampil live di festival budaya sekolah, namun Rin kemudian ambruk. Tragedi terjadi kemudian Rin dan Satoshi menjadi hancur.Satoshi kemudian kembali pada waktunya saat bertemu dengan Rin untuk pertama kalinya.\r\n'),
(9, '00280001023B', '0028', '0001', '023B', '', '', 0, 'Sakurada Reset Part 1', 'sakurada_reset_part_1.jpg', 'https://drive.google.com/file/d/1nALBoVj3McCrA_WWLgs2mluyKS00d065/preview', '1:43:07', 'Di kota Sakurada, di mana sekitar setengah dari penduduk memiliki kemampuan khusus, Kei Asai ( Shuhei Nomura ) adalah seorang siswa sekolah menengah dan mampu mengingat segalanya. Misora ??Haruki ( Yuina Kuroshima ) juga seorang siswa SMA dan dia memiliki kekuatan untuk mengatur ulang dunia dengan 3 hari. Jika mereka menggunakan kedua kekuatan mereka bersama, mereka dapat kembali dalam waktu 3 hari dan mempertahankan ingatan mereka. Mereka diawasi oleh biro administrasi.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `kode_genre` varchar(10) NOT NULL,
  `nm_genre` varchar(20) NOT NULL,
  `desk_genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`kode_genre`, `nm_genre`, `desk_genre`) VALUES
('0021', 'Action', ''),
('0022', 'Adventure', ''),
('0023', 'Biography', ''),
('0024', 'Child', ''),
('0025', 'Comedy', ''),
('0026', 'Documentary', ''),
('0027', 'Drama', ''),
('0028', 'Fantasy', ''),
('0029', 'Horror', ''),
('0030', 'Musical', ''),
('0031', 'Mystery', ''),
('0032', 'Romantic', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` varchar(10) NOT NULL,
  `nm_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nm_kategori`) VALUES
('011A', 'Artikel'),
('022A', 'Anime'),
('023B', 'Movie');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kualitas`
--

CREATE TABLE `kualitas` (
  `kode_kualitas` varchar(10) NOT NULL,
  `nm_kualitas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kualitas`
--

INSERT INTO `kualitas` (`kode_kualitas`, `nm_kualitas`) VALUES
('0240P', '240p'),
('0360P', '360p'),
('0480P', '480p'),
('0720P', '720p'),
('1080P', '1080p'),
('2160P', '2160p'),
('4000P', '4k');

-- --------------------------------------------------------

--
-- Struktur dari tabel `negara`
--

CREATE TABLE `negara` (
  `kode_negara` varchar(5) NOT NULL,
  `nm_negara` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `negara`
--

INSERT INTO `negara` (`kode_negara`, `nm_negara`) VALUES
('0001', 'Jepang'),
('0002', 'Korea'),
('0003', 'China'),
('0004', 'Thailand'),
('0005', 'Indonesia'),
('0006', 'Amerika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `kd_rating` varchar(10) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `skor` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`kode_genre`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indeks untuk tabel `kualitas`
--
ALTER TABLE `kualitas`
  ADD PRIMARY KEY (`kode_kualitas`);

--
-- Indeks untuk tabel `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`kode_negara`);

--
-- Indeks untuk tabel `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
