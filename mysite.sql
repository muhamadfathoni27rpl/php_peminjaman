-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2019 pada 07.50
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysite`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `stok` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `stok`, `foto`) VALUES
(6, 'LAN TASTER', 6, '07052019043557lantaster.jpg'),
(7, 'TANG', 18, '04052019063908tang.jpg'),
(8, 'Proyektor LCD', 5, '04052019064607proyektor.jpg'),
(9, 'TANG Crimper', 6, '04052019064741tangc.jpg'),
(10, 'Kabel Proyektor', 10, '04052019064913kabel proyektor.jpg'),
(11, 'Kabel LAN', 50, '07052019034737kabellan.jpg'),
(12, 'qweqweqwe', 23, '08052019074311contoh-poster-kebersihan.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(255) NOT NULL,
  `id_barang` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jumlah` int(255) NOT NULL,
  `tglnyilih` date NOT NULL,
  `tglmbalek` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_barang`, `nama`, `kelas`, `jumlah`, `tglnyilih`, `tglmbalek`) VALUES
(0, 6, 'awokdaodkawo', 'X RPL7', 4, '2019-05-08', '2019-05-23'),
(0, 6, 'Muhamad fathoni greget', 'X RPL1', 3, '2019-05-08', '2019-05-24');

--
-- Trigger `penjualan`
--
DELIMITER $$
CREATE TRIGGER `stok` AFTER INSERT ON `penjualan` FOR EACH ROW BEGIN
 UPDATE barang SET stok=stok-NEW.jumlah
 WHERE id = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'cokcok', '$2y$10$DvQpgdhq0rg6x0lXhnumWOzPpsTqkLokXJI0VBhxMyAeIOdOJUavS', ''),
(2, 'toni', '$2y$10$mLaWJ2RKOM1Z6/AIE1VBdeCEEEmr/vC2t9ufthAwjA55Bncm0bPPG', ''),
(3, 'qweqwe', '$2y$10$dDA5RICriBowCj6vEhUOI.YKo0pvH.0LwOJ3iRrQEl23WT8v5G306', ''),
(4, 'hahaha', '$2y$10$zmTlNHCzqE5fhQhrBW4qfuNajl3eQxJtxNTcaNf2ecwHsuHptGUIu', ''),
(5, 'okeoke', '$2y$10$WDXbrOqTENfv9IXTadEUDuoZ9xcjZ5He3uOrc/vO3yXZH0ALRC9ZG', ''),
(6, 'ANJER', '$2y$10$M974H9D3RZrwietjE3e7G.eEMqvMRUcOdF2xet4mBKTNQl6X6Yz6i', ''),
(7, 'muhamadfathoni', '$2y$10$mL4E5IaRSrbExK3UU5f3cuaH66vqJyFBiQDV.IqWSykQZh18xzLpO', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
