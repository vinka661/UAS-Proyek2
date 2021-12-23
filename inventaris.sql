-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 02:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenisproduks`
--

CREATE TABLE `jenisproduks` (
  `id` int(10) UNSIGNED NOT NULL,
  `namajenis` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenisproduks`
--

INSERT INTO `jenisproduks` (`id`, `namajenis`, `created_at`, `updated_at`) VALUES
(1, 'Peralatan Makan', '2021-10-15 03:58:12', '2021-10-15 03:58:12'),
(2, 'Peralatan Dekorasi', '2021-10-15 06:03:33', '2021-10-15 06:03:33'),
(3, 'Peralatan Soundsystem', '2021-10-15 06:06:41', '2021-10-18 20:21:01'),
(4, 'Dekor Pelaminan', '2021-10-18 18:12:21', '2021-10-18 20:07:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_10_15_012050_create_jenisbuku_table', 1),
(5, '2021_10_15_020510_create_jenisproduk_table', 2),
(6, '2021_10_15_021115_create_jenisproduks_table', 3),
(7, '2021_10_15_035203_create_jenisproduks_table', 4),
(8, '2021_10_15_035632_create_jenisproduks_table', 5),
(9, '2021_10_15_063439_create_produks_table', 6),
(10, '2021_10_15_063800_create_rosi_table', 6),
(11, '2021_10_19_031325_create_produks_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('jkl@gmail.com', '$2y$10$IGNjrmW3poBeeG.QJmOW7OzJ/wrCz3yCPYjSTXkDRP6qRvgnNq4vm', '2021-10-30 08:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `persewaan`
--

CREATE TABLE `persewaan` (
  `id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal_sewa` datetime NOT NULL,
  `harga_total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persewaan`
--

INSERT INTO `persewaan` (`id`, `qty`, `tanggal_sewa`, `harga_total`, `bayar`, `kembalian`, `id_user`, `id_produk`, `created_at`, `updated_at`) VALUES
(1, 3, '2021-10-26 13:11:25', 150000, 200000, 50000, 1, 1, '2021-10-26 11:11:25', '2021-10-26 11:11:25'),
(2, 3, '2021-10-30 08:43:02', 300000, 300000, 0, 6, 4, '2021-10-30 06:43:45', '2021-10-30 07:48:05');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaproduk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `id_jenis` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaproduk`, `image`, `harga`, `satuan`, `status`, `stok`, `id_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Piring', 'images/2InHMuvhhar6JZyXsd4M556DdBm6a7l3Z2Dvqrjh.jpg', 50000, 'Lusin', 'Belum Sewa', 50, 1, '2021-10-26 00:26:20', '2021-10-29 21:53:45'),
(3, 'Sound System', 'images/gOzdtLQIAaiwQNZCMkuIDgaQ0dOUekI0qp7xZaEE.jpg', 10000, 'lusin', 'Belum Sewa', 30, 3, '2021-10-29 21:51:55', '2021-10-29 22:15:18'),
(4, 'Lampu Dekorasi', 'images/NpUldiAL7ovY8efxvKi7EeqxZjnMrMSKML5adnnn.jpg', 100000, 'set', 'Belum Sewa', 20, 2, '2021-10-29 22:14:39', '2021-10-29 22:14:39'),
(5, 'Kursi Pelaminan', 'images/dvS3Oz9oWLNjhVZTZqZ1bNDRKW6gI185BVpZl8K8.jpg', 500000, 'Set', 'Belum Sewa', 10, 4, '2021-10-29 22:17:12', '2021-10-29 22:17:12');

-- --------------------------------------------------------

--
-- Table structure for table `rosi`
--

CREATE TABLE `rosi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Administrator',
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vinka', 'vinka@mail.com', '2021-10-26 08:02:49', '12345678', 'Administrator', NULL, NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$czh4RiIZzlyq3Syln.lv6uTJqKOaJfsvQQZisew.OGB0F.g0CByaO', 'Administrator', NULL, NULL, '2021-10-29 06:31:49', '2021-10-29 06:31:49'),
(6, 'fitriyah putri', 'fitriyah@gmail.com', NULL, '$2y$10$RjaSSS6smYCG.hoYebM8COrBoUNP69Kh8z0g.nZn8/D33TQXJYtLK', 'Customer', NULL, NULL, '2021-10-30 05:38:21', '2021-10-30 05:43:45'),
(7, 'abc', 'abc@gmail.com', NULL, '$2y$10$BQCVmZ/9sdvIE55W//ZsYOY9goQHud4/HmZLWRo7dEz5PdTMrhPFa', 'Administrator', NULL, NULL, '2021-10-30 07:53:40', '2021-10-30 07:53:40'),
(8, 'def', 'def@gmail.com', NULL, '$2y$10$Wslfj9hfm5U9PQxvPn1Hs.vDxGWW7nqQbEy4x4mAloygWe4QqtUuS', 'Administrator', NULL, NULL, '2021-10-30 07:57:06', '2021-10-30 07:57:06'),
(9, 'ghi', 'ghi@gmail.com', NULL, '$2y$10$mdTiPC8UpidrljwToGu5wubCKqgxMsA3WNLFzZkFQ40AljILanROW', 'Administrator', NULL, NULL, '2021-10-30 08:02:09', '2021-10-30 08:02:09'),
(10, 'jkl', 'jkl@gmail.com', NULL, '$2y$10$liVWO21SSWrGpalOBs530.vWC07HPuLpdCFBtvd5GLGl25SZRSjqu', 'Customer', NULL, NULL, '2021-10-30 08:08:05', '2021-10-30 08:08:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisproduks`
--
ALTER TABLE `jenisproduks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `persewaan`
--
ALTER TABLE `persewaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `rosi`
--
ALTER TABLE `rosi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisproduks`
--
ALTER TABLE `jenisproduks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `persewaan`
--
ALTER TABLE `persewaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rosi`
--
ALTER TABLE `rosi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `persewaan`
--
ALTER TABLE `persewaan`
  ADD CONSTRAINT `persewaan_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`),
  ADD CONSTRAINT `persewaan_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenisproduks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
