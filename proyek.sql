-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 25 Nov 2021 pada 16.32
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_pengguna` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_pengguna`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin', 'admin'),
(2, 'ikhsan', 'icunasagaf', 'ikhsanhal', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(225) NOT NULL,
  `deskripsi_menu` varchar(225) NOT NULL,
  `harga` int(30) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `deskripsi_menu`, `harga`, `gambar`) VALUES
(1, 'Mie Kirin Kamu', 'Mie dengan varian rasa manis dengan topping melimpah', 18000, '1866194608_produk-unggulan4coba2.jpg'),
(2, 'Mie Kirin Dia', 'Mie dengan varian rasa asin dengan topping melimpah', 18000, '248065766_produk-unggulan5coba.jpg'),
(4, 'Mango Punch', 'Minuman dingin dengan mangga yang segar.', 12000, '725120787_mango punch.png'),
(5, 'Kopi Susu', 'Kopi susu dengan biji kopi asli', 8000, '278568037_kopisusu.jpg'),
(6, 'Kentang Goreng', 'Kentang goreng crispy dengan saos sambal dan tomat', 15000, '1862829726_frenchfries.jpg'),
(7, 'Es Krim', 'Es Krim dengan topping messes', 10000, '120478665_icecream.jpg'),
(8, 'Milkshake', 'Milkshake coklat menggunakan susu sapi segar dan coklat asli', 15000, '217096757_milkshake.jpg'),
(9, 'Burger', 'Burger dengan daging sapi terbaik dan sayuran', 18000, '298567084_burger.jpg'),
(10, 'Jus Jambu', 'Jus jambu biji segar dengan jambu pilihan dan gula asli', 12000, '1953887918_jusjambu.jpg'),
(11, 'Es Teh', 'Es teh dengan teh dan gula asli', 8000, '157984374_es teh.jpg'),
(12, 'Es Jeruk', 'Es Jeruk segar menggunakan jeruk peras terbaik', 9000, '1587621477_jusjeruk.jpg'),
(13, 'Air Mineral', 'Air Mineral 600ml', 4000, '1032698795_airputih.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
