-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 07:57 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
(4, 'Dekor Pelaminan', '2021-10-18 18:12:21', '2021-10-18 20:07:52'),
(8, 'Peralatan Masak', '2021-11-01 20:44:00', '2021-11-01 20:44:00');

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
(11, '2021_10_19_031325_create_produks_table', 7),
(16, '2021_10_15_063800_create_rosi_table', 8);

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
  `hari` int(11) NOT NULL,
  `jenisproduk` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bayar` int(11) NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_produk` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persewaan`
--

INSERT INTO `persewaan` (`id`, `qty`, `tanggal_sewa`, `hari`, `jenisproduk`, `status`, `bayar`, `id_user`, `id_produk`, `created_at`, `updated_at`) VALUES
(7, 4, '2020-12-12 00:00:00', 5, 'Peralatan Makan', 'Disewa', 8000000, 17, 6, '2021-11-04 21:58:07', '2021-11-04 22:13:45'),
(8, 4, '2020-12-12 00:00:00', 5, 'Peralatan Soundsystem', 'Disewa', 800000, 12, 7, '2021-11-04 22:11:19', '2021-11-04 22:11:45'),
(9, 6, '2020-12-12 00:00:00', 5, 'Peralatan Makan', 'Disewa', 700000, 6, 1, '2021-11-04 22:12:31', '2021-11-04 22:12:31');

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
(1, 'Piring Nasi', 'images/VWHJT0pBSf2IJSuUOt0zijO1Nehm7qUjv5YSyim6.jpg', 1000, 'Buah', 'Belum Sewa', 200, 1, '2021-10-26 00:26:20', '2021-11-04 22:18:06'),
(3, 'Sound System', 'images/MCSzhlRvAdoyQfLT1o4yRrIy5qjWIm3NHqyTYBgh.jpg', 200000, 'Speaker', 'Belum Sewa', 16, 3, '2021-10-29 21:51:55', '2021-11-04 22:20:21'),
(4, 'Lampu Biasa dan Lampu Dekorasi', 'images/w4aGLcIlqdHOhSBl33DhRgPHJ1IXhcOdJ7T31JSV.jpg', 6000, 'Set', 'Belum Sewa', 8, 2, '2021-10-29 22:14:39', '2021-11-04 22:18:43'),
(5, 'Kursi', 'images/lZlNL9yH5ZgoyEG5DqTdl4pOIw5b9w7fUqAjC3Pa.jpg', 5000, 'Set', 'Belum Sewa', 200, 2, '2021-10-29 22:17:12', '2021-11-04 22:19:01'),
(6, 'Sound System Box', 'images/dtpuDTfbL0UVK4mdw5gOvgALie5dDrgyiLPMSnz8.jpg', 200000, 'Box', 'Belum Sewa', 16, 3, '2021-11-01 20:16:42', '2021-11-04 22:21:03'),
(7, 'Diesel', 'images/o8yZhzrKdkaTW89C0Bqhzk2ieCvHCaoHPEdSeqUY.jpg', 150000, 'Set', 'Belum Sewa', 2, 3, '2021-11-01 20:20:32', '2021-11-04 22:21:38'),
(8, 'Terop Ukuran 4x3', 'images/dYT6qmmQtM5KDYlPqMzSYzcPVF0wFqV4iVglfHOM.jpg', 300000, 'Set', 'Belum Sewa', 1, 2, '2021-11-01 20:25:45', '2021-11-04 22:22:01'),
(9, 'Terop Ukuran 6x6', 'images/q9wlvu142MRBQwWK13oJeJgvBKp3juQOJw4C3j7W.jpg', 900000, 'Set', 'Belum Sewa', 1, 2, '2021-11-01 20:26:40', '2021-11-04 22:22:30'),
(10, 'Meja', 'images/7nNSykIhCh4NrCa1EGvPTR137Z4uYE6ElCDs4JiP.jpg', 11000, 'Set', 'Belum Sewa', 12, 2, '2021-11-01 20:28:49', '2021-11-04 22:22:58'),
(11, 'Taplak', 'images/C2iXhlDH9a4Swzu0ORmN3GaDEUOCKa0HIMDms67Z.jpg', 10000, 'Set', 'Belum Sewa', 20, 2, '2021-11-01 20:33:00', '2021-11-04 22:23:48'),
(12, 'Piring Kue', 'images/oHchP5hO8eJuDdMgc74DaLnF53UNkzYbqkp5s7x4.jpg', 2000, 'Buah', 'Belum Sewa', 24, 1, '2021-11-01 20:37:42', '2021-11-04 22:24:16'),
(13, 'Sendok', 'images/QApE6rNT8XMFXE5YDOYjglhRkU9aAMcpjc3y3IQY.jpg', 500, 'Buah', 'Belum Sewa', 200, 1, '2021-11-01 20:38:56', '2021-11-04 22:24:47'),
(14, 'Kursi Pelaminan', 'images/T6pmQqIXAE2IOC9YqoeiG28hdzt7w1amYxNS4Iy5.jpg', 2500000, 'Set', 'Belum Sewa', 1, 4, '2021-11-01 20:41:12', '2021-11-04 22:25:14'),
(15, 'Panci', 'images/IoLRB9hNEekHeulBqHBF72kQooupuCs7tMleG8Ee.jpg', 25000, 'Buah', 'Belum Sewa', 2, 8, '2021-11-01 20:43:45', '2021-11-04 22:25:41'),
(16, 'Talam Rantang', 'images/hiWUvtuHYLz5NfopVYfhQRXQINvupaooZXD95oas.jpg', 2000, 'Buah', 'Belum Sewa', 24, 1, '2021-11-01 20:47:09', '2021-11-04 22:26:24'),
(17, 'Dandang/Sablukan', 'images/hII81riXYQo750fSAsfeFG8WQaTaMsNUTu3stddE.jpg', 25000, 'Buah', 'Belum Sewa', 2, 8, '2021-11-01 20:48:56', '2021-11-04 22:26:53');

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
  `alamat` text NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `notelp` varchar(20) DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles`, `photo`, `alamat`, `jeniskelamin`, `notelp`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vinka', 'vinka@mail.com', '2021-10-26 08:02:49', '12345678', 'Administrator', NULL, '', '', '0', NULL, NULL, NULL),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$czh4RiIZzlyq3Syln.lv6uTJqKOaJfsvQQZisew.OGB0F.g0CByaO', 'Administrator', NULL, '', '', '0', 'Uxu2YK7zCFuzHv7FOSHvzQaC3CCOaP8RrabxWFYvpJ5EWky7q8E5QcsapwUC', '2021-10-29 06:31:49', '2021-10-29 06:31:49'),
(6, 'fitriyah putri', 'fitriyah@gmail.com', NULL, '$2y$10$RjaSSS6smYCG.hoYebM8COrBoUNP69Kh8z0g.nZn8/D33TQXJYtLK', 'Customer', NULL, '', '', '0', NULL, '2021-10-30 05:38:21', '2021-10-30 05:43:45'),
(7, 'abc', 'abc@gmail.com', NULL, '$2y$10$BQCVmZ/9sdvIE55W//ZsYOY9goQHud4/HmZLWRo7dEz5PdTMrhPFa', 'Administrator', NULL, '', '', '0', NULL, '2021-10-30 07:53:40', '2021-10-30 07:53:40'),
(8, 'def', 'def@gmail.com', NULL, '$2y$10$Wslfj9hfm5U9PQxvPn1Hs.vDxGWW7nqQbEy4x4mAloygWe4QqtUuS', 'Administrator', NULL, '', '', '0', NULL, '2021-10-30 07:57:06', '2021-10-30 07:57:06'),
(9, 'ghi', 'ghi@gmail.com', NULL, '$2y$10$mdTiPC8UpidrljwToGu5wubCKqgxMsA3WNLFzZkFQ40AljILanROW', 'Administrator', NULL, '', '', '0', NULL, '2021-10-30 08:02:09', '2021-10-30 08:02:09'),
(10, 'jkl', 'jkl@gmail.com', NULL, '$2y$10$liVWO21SSWrGpalOBs530.vWC07HPuLpdCFBtvd5GLGl25SZRSjqu', 'Customer', NULL, '', '', '0', NULL, '2021-10-30 08:08:05', '2021-10-30 08:08:05'),
(11, 'vinka', 'vinka@gmail.com', NULL, '$2y$10$x/7xN0LxQ6TzfUnaay3/XeKODWLrdHbXb6ANqCkpwZwc49MD2j06u', 'Customer', NULL, '', '', '0', NULL, '2021-11-01 20:51:21', '2021-11-01 20:51:21'),
(12, 'dika', '123@gmail.com', NULL, '$2y$10$ug9xLhS5bOzBTPUlHKsmPepyKfcR1rVur7G8/KvySiAopBpTByKbC', 'Customer', NULL, '', '', '0', NULL, '2021-11-04 08:06:12', '2021-11-04 08:06:12'),
(13, 'Dhika Ainul', '193171@gmail.com', NULL, '$2y$10$gVpY/hCcAOEPynjodVXP1uHYExCPdzWJIZEN4J9ovez5kYPsF6FbW', 'Administrator', NULL, '', '', '0', NULL, '2021-11-04 15:46:29', '2021-11-04 15:46:29'),
(14, 'Wahyu Budi', '123456@gmail.com', NULL, '$2y$10$IQepc64kIGUQ5GtFMV1OA.x12BfZH6JRzjqCL34q5yaY4ZgY64IOa', 'Administrator', NULL, 'Pasuruan', 'Laki-laki', '881026812', NULL, '2021-11-04 17:46:30', '2021-11-04 17:46:30'),
(15, 'aan', '193171@mail.com', NULL, '$2y$10$XPgX5ta359HhPtAGuQgM1OkA/Uo6nyDAkUdub/r5/fTN7TbuQ3paK', 'Administrator', NULL, 'Ds. Lecari Kec. Sukorejo Kab. Pasuruan Prov. Jawa Timur', 'Laki-laki', '881026812', NULL, '2021-11-04 17:59:37', '2021-11-04 17:59:37'),
(16, 'dika', '123456@mail.com', NULL, '$2y$10$QAKNtlgOZSN7ItaSbYyJbOUhgOXrRYh4sCBclc4AQoEFDYkPDpaZu', 'Administrator', NULL, 'Ds. Lecari Kec. Sukorejo Kab. Pasuruan Prov. Jawa Timur', 'Laki-laki', '081111111111', NULL, '2021-11-04 18:01:58', '2021-11-04 18:01:58'),
(17, 'Tuyul', 'tuyul@gmail.com', NULL, '$2y$10$zndlQfKEWhm0zSeu30IOtudLcYHmEwXuttGIhruDppSy.7azRtfNi', 'Customer', NULL, 'Pasuruan huihuihihjoijijio', 'Laki-laki', '0881026812234', NULL, '2021-11-04 18:03:08', '2021-11-04 18:03:08');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `persewaan`
--
ALTER TABLE `persewaan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `rosi`
--
ALTER TABLE `rosi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
