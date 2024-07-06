-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Des 2022 pada 16.49
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkmfep`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(30) NOT NULL,
  `nbp` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `preferensi` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `nbp`, `nama`, `jurusan`, `preferensi`, `tanggal`) VALUES
('A01', '19181152610510', 'Nur Aini Pratiwi', 'Sistem Informasi', 0.41, '2022-12-03'),
('A02', '19181152610511', 'Nanda Wira Andika', 'Teknik Industri', 0.36, '2022-12-03'),
('A03', '20101152610510', 'Fitri Anggraini', 'Sistem Informasi', 0.37, '2022-12-03'),
('A04', '20101152610511', 'M. Yasir', 'Sistem Informasi', 0.47, '2022-12-03'),
('A05', '18101152610515', 'Syahyudi Tanjung', 'Teknik Informatika', 0.3, '2022-12-03'),
('A06', '18101152610512', 'Alhabib Husein', 'Ekonomi Bisinis', 0.39, '2022-12-03'),
('A07', '18101152610516', 'Zahrawatul Khairi', 'Ekonomi Bisinis', 0.41, '2022-12-03'),
('A08', '18101152610520', 'Tio Refanza', 'Teknik Informatika', 0.37, '2022-12-03'),
('A09', '18101152610544', 'Nini Yusvi Maria', 'Ekonomi Bisinis', 0.44, '2022-12-03'),
('A10', '18101152610323', 'Salsa Ayu Pratiwi', 'Sistem Informasi', 0.38, '2022-12-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_kriteria`
--

CREATE TABLE `bobot_kriteria` (
  `id_kriteria` varchar(30) NOT NULL,
  `nilai_bobot` double NOT NULL,
  `hasil_bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bobot_kriteria`
--

INSERT INTO `bobot_kriteria` (`id_kriteria`, `nilai_bobot`, `hasil_bobot`) VALUES
('C1', 15, 0.15),
('C2', 20, 0.2),
('C3', 15, 0.15),
('C4', 25, 0.25),
('C5', 25, 0.25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(30) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`) VALUES
('C1', 'Test Program'),
('C2', 'IPK'),
('C3', 'Semester'),
('C4', 'Kesanggupan'),
('C5', 'Interview');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` varchar(30) NOT NULL,
  `id_kriteria` varchar(30) NOT NULL,
  `nilai_rangking` double NOT NULL,
  `nilai_vektor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_alternatif`, `id_kriteria`, `nilai_rangking`, `nilai_vektor`) VALUES
(1, 'A01', 'C1', 2, 0.3),
(2, 'A01', 'C2', 3, 0.6),
(3, 'A01', 'C3', 1, 0.15),
(4, 'A01', 'C4', 1, 0.25),
(5, 'A01', 'C5', 3, 0.75),
(6, 'A02', 'C1', 1, 0.15),
(7, 'A02', 'C2', 1, 0.2),
(8, 'A02', 'C3', 3, 0.45),
(9, 'A02', 'C4', 3, 0.75),
(10, 'A02', 'C5', 1, 0.25),
(11, 'A03', 'C1', 3, 0.45),
(12, 'A03', 'C2', 1, 0.2),
(13, 'A03', 'C3', 3, 0.45),
(14, 'A03', 'C4', 1, 0.25),
(15, 'A03', 'C5', 2, 0.5),
(16, 'A04', 'C1', 3, 0.45),
(17, 'A04', 'C2', 1, 0.2),
(18, 'A04', 'C3', 3, 0.45),
(19, 'A04', 'C4', 2, 0.5),
(20, 'A04', 'C5', 3, 0.75),
(21, 'A05', 'C1', 1, 0.15),
(22, 'A05', 'C2', 1, 0.2),
(23, 'A05', 'C3', 1, 0.15),
(24, 'A05', 'C4', 3, 0.75),
(25, 'A05', 'C5', 1, 0.25),
(26, 'A06', 'C1', 2, 0.3),
(27, 'A06', 'C2', 3, 0.6),
(28, 'A06', 'C3', 2, 0.3),
(29, 'A06', 'C4', 1, 0.25),
(30, 'A06', 'C5', 2, 0.5),
(31, 'A07', 'C1', 2, 0.3),
(32, 'A07', 'C2', 1, 0.2),
(33, 'A07', 'C3', 2, 0.3),
(34, 'A07', 'C4', 3, 0.75),
(35, 'A07', 'C5', 2, 0.5),
(36, 'A08', 'C1', 3, 0.45),
(37, 'A08', 'C2', 1, 0.2),
(38, 'A08', 'C3', 3, 0.45),
(39, 'A08', 'C4', 2, 0.5),
(40, 'A08', 'C5', 1, 0.25),
(41, 'A09', 'C1', 2, 0.3),
(42, 'A09', 'C2', 3, 0.6),
(43, 'A09', 'C3', 2, 0.3),
(44, 'A09', 'C4', 1, 0.25),
(45, 'A09', 'C5', 3, 0.75),
(46, 'A10', 'C1', 2, 0.3),
(47, 'A10', 'C2', 1, 0.2),
(48, 'A10', 'C3', 1, 0.15),
(49, 'A10', 'C4', 2, 0.5),
(50, 'A10', 'C5', 3, 0.75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_kriteria`
--

CREATE TABLE `nilai_kriteria` (
  `id_nilaikriteria` int(11) NOT NULL,
  `id_kriteria` varchar(30) NOT NULL,
  `nilai` float NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nilai_kriteria`
--

INSERT INTO `nilai_kriteria` (`id_nilaikriteria`, `id_kriteria`, `nilai`, `keterangan`) VALUES
(1, 'C1', 1, 'Kurang Baik'),
(2, 'C1', 2, 'Baik'),
(3, 'C1', 3, 'Sangat Baik'),
(4, 'C2', 1, '3.00'),
(5, 'C2', 2, '3.00 s.d 3.50'),
(6, 'C2', 3, '4.00'),
(7, 'C3', 1, 'Semesster 4'),
(8, 'C3', 2, 'Semesster 5'),
(9, 'C3', 3, 'Semesster 6'),
(10, 'C4', 1, 'Kurang Sanggup'),
(11, 'C4', 2, 'Sanggup'),
(12, 'C4', 3, 'Sangat Sanggup'),
(13, 'C5', 1, 'Kurang Baik'),
(14, 'C5', 2, 'Baik'),
(15, 'C5', 3, 'Sangat Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`, `foto`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'koala.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `bobot_kriteria`
--
ALTER TABLE `bobot_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  ADD PRIMARY KEY (`id_nilaikriteria`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `nilai_kriteria`
--
ALTER TABLE `nilai_kriteria`
  MODIFY `id_nilaikriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
