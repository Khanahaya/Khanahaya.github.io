-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2024 pada 18.20
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
-- Database: `pj_jam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_normal` decimal(10,2) NOT NULL,
  `harga_diskon` decimal(10,2) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_brand`, `nama_produk`, `harga_normal`, `harga_diskon`, `stok`, `gambar_produk`) VALUES
(5, 11, '11', 11.00, 11.00, 11, '23.png'),
(6, 113233, '3123131', 1313.00, 13131.00, 1313, 'Screenshot 2024-11-06 154325.png'),
(7, 12123, '1212', 313213.00, 313.00, 313, '2.2.png'),
(8, 1212, '1213', 1244.00, 2344.00, 344, 'adres.png'),
(9, 12344, '3434', 344.00, 344.00, 344, 'Cuplikan layar 2023-11-14 171511.png'),
(10, 4, 'werg', 12345.00, 234.00, 23, 'image2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'Aktar', 'aktar@gmail.com', '$2y$10$Jmf9Xk2y8m.fo3c/ZgKmzOrdIRkU05KSGLI0picKLEtr68ll7hjB.'),
(4, 'iswan', 'wdiki9565@gmail.com', '$2y$10$9BDM09gK9I1P8VLG1FR84.5wwA27maBWukeCCb/u8uDE2HaVhGVue'),
(5, 'admin', 'admin@gmail.com', '123456789'),
(6, 'admin', 'admin@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
