-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jun 2024 pada 19.16
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wedding_jewepe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_catalogues`
--

CREATE TABLE `tb_catalogues` (
  `catalogue_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `package_name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `status_publish` enum('Y','N') NOT NULL,
  `user_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_catalogues`
--

INSERT INTO `tb_catalogues` (`catalogue_id`, `image`, `package_name`, `description`, `price`, `status_publish`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '20240615_2118988216.jpeg', 'paket wedding lengkap ', 'bisa sesuai dengan apa yang di request pelanggan', 50000000, 'Y', 1, '2024-06-15 08:47:30', '2024-06-15 11:32:12'),
(3, '20240615_1991050000.png', 'nguwawor', '<p>ahay</p>', 100000, 'Y', 1, '2024-06-15 11:35:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `catalogue_id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `wedding_date` date NOT NULL,
  `status` enum('requested','approved') NOT NULL,
  `user_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `catalogue_id`, `name`, `email`, `phone_number`, `wedding_date`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'aku kaget lho wak', 'aduhaihampirjantoengan@gmail.com', '088888888888', '2024-06-15', 'approved', 1, '2024-06-15 11:39:12', '0000-00-00 00:00:00'),
(2, 1, 'awoawkaowk', 'wawdduhhaiA@gamil.com', '077777777777', '2024-06-15', 'approved', 1, '2024-06-15 11:40:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_settings`
--

CREATE TABLE `tb_settings` (
  `id` int(2) NOT NULL,
  `website_name` varchar(256) NOT NULL,
  `phone_number1` varchar(15) NOT NULL,
  `phone_number2` varchar(15) NOT NULL,
  `email1` varchar(80) NOT NULL,
  `email2` varchar(80) NOT NULL,
  `address` text NOT NULL,
  `maps` text NOT NULL,
  `logo` varchar(80) NOT NULL,
  `facebook_url` varchar(256) NOT NULL,
  `instagram_url` varchar(256) NOT NULL,
  `youtube_url` varchar(256) NOT NULL,
  `header_bussines_hour` varchar(160) NOT NULL,
  `time_bussines_hour` varchar(160) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_settings`
--

INSERT INTO `tb_settings` (`id`, `website_name`, `phone_number1`, `phone_number2`, `email1`, `email2`, `address`, `maps`, `logo`, `facebook_url`, `instagram_url`, `youtube_url`, `header_bussines_hour`, `time_bussines_hour`, `created_at`, `updated_at`) VALUES
(1, 'JeWePe Wedding Organizer', '08111122222', '0988383883', 'jwpo@gmail.com', 'jwpo2@gmail.com', 'jl . nguwawur no 4003030303', '</iframe>>', '20240615_771381137.png', 'alamak@gmail.com', 'limak@gmail.com', 'jewepe@gmail,com', '1 hour', '100 hour', '2024-06-14 04:18:06', '2024-06-15 08:33:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `name`, `username`, `password`, `created_at`, `update_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$VdCfs/eqTGMmFE0i8tnSKevHqE29kRVfldVN6S.yjOVZkUo.va7JS', '2024-06-13 05:06:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_catalogues`
--
ALTER TABLE `tb_catalogues`
  ADD PRIMARY KEY (`catalogue_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `catologue_id` (`catalogue_id`);

--
-- Indeks untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_catalogues`
--
ALTER TABLE `tb_catalogues`
  MODIFY `catalogue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_settings`
--
ALTER TABLE `tb_settings`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_catalogues`
--
ALTER TABLE `tb_catalogues`
  ADD CONSTRAINT `user_id_catalogue_idx` FOREIGN KEY (`user_id`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `catalogue_id_order_idx` FOREIGN KEY (`catalogue_id`) REFERENCES `tb_catalogues` (`catalogue_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
