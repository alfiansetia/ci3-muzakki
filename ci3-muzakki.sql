-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2022 pada 16.04
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

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
(1, 'kjlglgjhl', 'sdfgsd', ''),
(3, 'dfgerger', 'eryherher', 'erhre'),
(4, 'erherher', 'erherh', 'erherh'),
(5, 'hehrher', 'rehre', 'herh'),
(6, 'herher', 'rehre', 'rehr'),
(7, 'herherh', '', ''),
(8, 'erherh', '', 'erher');

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
(6, 'erhreh', '', ''),
(7, 'ehrreher', 'hreh', 'erher'),
(8, 'tyj', 'rthewwg', 'rggher'),
(9, 'rehre', 'erhre', 'hreherh'),
(10, 'ryutyi', 'iutweew', 'weweqw'),
(11, 'ewrweew', 'wetsdfdsfg', 'trjurj');

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

--
-- Dumping data untuk tabel `salur`
--

INSERT INTO `salur` (`id_salur`, `id_mustahik`, `tgl_salur`, `total_salur`, `jenis_salur`, `ket_salur`, `validasi_salur`) VALUES
(3, 1, '2022-12-10', 45662, 'Riqab', 'ok', 'ya');

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
(1, 1, '2022-12-07', 100000, NULL, NULL),
(2, 1, '2022-12-08', 100000, 'Zakat Fitrah', '');

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
(1, 'alfi', 'admin@gmail.com', '$2y$10$D2oPaGYMpTgv8KAheq12yu891biL6OmnSbUX5ZitsJ8Yh948R6z3y', 'admin'),
(3, 'kentang12', 'admin1@gmail.com', '$2y$10$kcnGDoHu8NqOw/B9v6cB6.2MFCCPJSEiNjdycZjhf.j21UOiMYjnu', 'user'),
(4, 'alfi', 'alfian.setia100@gmail.com', '$2y$10$s5aHob31fH4PJMfB/vB8Teshs9FYNHxibMttgX86iAGff8CszEP7K', 'user');

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
  MODIFY `id_mustahik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `muzakki`
--
ALTER TABLE `muzakki`
  MODIFY `id_muzakki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `salur`
--
ALTER TABLE `salur`
  MODIFY `id_salur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `terima`
--
ALTER TABLE `terima`
  MODIFY `id_terima` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
