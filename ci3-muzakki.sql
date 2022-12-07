-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 07 Des 2022 pada 23.08
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci3-muzakki`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `murid`
--

CREATE TABLE `murid` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nisn` varchar(100) NOT NULL,
  `kelas` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `murid`
--

INSERT INTO `murid` (`id`, `nama`, `nisn`, `kelas`, `alamat`) VALUES
(1, 'Ardi', '9048609457', 'dftre', 'ertretger'),
(2, 'nasi6', '435345', 'svdsv', 'dsvds'),
(3, 'fb', '345345', 'vfd', 'cvdskmvhdsjkvds'),
(4, 'fsgds', '3244322', 'fafas', 'afasf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mustahik`
--

CREATE TABLE `mustahik` (
  `id_mustahik` int(11) NOT NULL,
  `nama_mustahik` varchar(50) NOT NULL,
  `alamat_mustahik` varchar(100) DEFAULT NULL,
  `ket_mustahik` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mustahik`
--

INSERT INTO `mustahik` (`id_mustahik`, `nama_mustahik`, `alamat_mustahik`, `ket_mustahik`) VALUES
(1, 'kjlglgjhl', '', ''),
(2, 'kl;j;kl', 'kjbhkbk', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `muzakki`
--

CREATE TABLE `muzakki` (
  `id_muzakki` int(11) NOT NULL,
  `nama_muzakki` varchar(50) NOT NULL,
  `alamat_muzakki` varchar(100) DEFAULT NULL,
  `ket_muzakki` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `muzakki`
--

INSERT INTO `muzakki` (`id_muzakki`, `nama_muzakki`, `alamat_muzakki`, `ket_muzakki`) VALUES
(1, 'gegewg', 'hryhasD', 'FHTRYTJT'),
(2, 'js,fghljsd', 'askndbsjalkdu', 'asdlf;has;iof'),
(3, 'd,jsvfhjsdf', 'sakl;djfiaso;', 'safoasfh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salur`
--

CREATE TABLE `salur` (
  `id_salur` int(11) NOT NULL,
  `id_mustahik` int(11) DEFAULT NULL,
  `tgl_salur` date NOT NULL,
  `total_salur` int(11) NOT NULL,
  `jenis_salur` varchar(20) DEFAULT NULL,
  `ket_salur` varchar(100) DEFAULT NULL,
  `validasi_salur` enum('ya','tidak') NOT NULL DEFAULT 'tidak'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `terima`
--

CREATE TABLE `terima` (
  `id_terima` int(11) NOT NULL,
  `id_muzakki` int(11) DEFAULT NULL,
  `tgl_terima` date NOT NULL,
  `total_terima` int(11) NOT NULL,
  `jenis_terima` varchar(20) DEFAULT NULL,
  `ket_terima` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `terima`
--

INSERT INTO `terima` (`id_terima`, `id_muzakki`, `tgl_terima`, `total_terima`, `jenis_terima`, `ket_terima`) VALUES
(1, 1, '2022-12-07', 100000, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`) VALUES
(1, 'alfi', 'admin@gmail.com', '$2y$10$dtd/Naip7yHYDsFFbqceUuNabwjg5ChZzNRFQBdItH0sJCbslgjYm', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mustahik`
--
ALTER TABLE `mustahik`
  ADD PRIMARY KEY (`id_mustahik`);

--
-- Indeks untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  ADD PRIMARY KEY (`id_muzakki`);

--
-- Indeks untuk tabel `salur`
--
ALTER TABLE `salur`
  ADD PRIMARY KEY (`id_salur`),
  ADD KEY `id_mustahik` (`id_mustahik`);

--
-- Indeks untuk tabel `terima`
--
ALTER TABLE `terima`
  ADD PRIMARY KEY (`id_terima`),
  ADD KEY `id_muzakki` (`id_muzakki`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mustahik`
--
ALTER TABLE `mustahik`
  MODIFY `id_mustahik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_muzakki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `salur`
--
ALTER TABLE `salur`
  MODIFY `id_salur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `terima`
--
ALTER TABLE `terima`
  MODIFY `id_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `salur`
--
ALTER TABLE `salur`
  ADD CONSTRAINT `salur_ibfk_1` FOREIGN KEY (`id_mustahik`) REFERENCES `mustahik` (`id_mustahik`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `terima`
--
ALTER TABLE `terima`
  ADD CONSTRAINT `terima_ibfk_1` FOREIGN KEY (`id_muzakki`) REFERENCES `muzakki` (`id_muzakki`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
