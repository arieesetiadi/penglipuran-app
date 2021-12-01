-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 01:28 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penglipuran_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Penglipuran Festival 2014', '1637577713 2014.jpg', '2021-11-22 10:41:53', NULL),
(2, 'Penglipuran Festival 2014 - 2', '1637577741 2014.2.jpg', '2021-11-22 10:42:21', NULL),
(3, 'Penglipuran Festival 2014 - 3', '1637577828 2014.3.jpg', '2021-11-22 10:43:48', NULL),
(4, 'Penglipuran Festival 2014 - 4', '1637577851 2014.4.jpg', '2021-11-22 10:44:11', NULL),
(5, 'Penglipuran Festival 2014 - 5', '1637577888 2014.5.jpg', '2021-11-22 10:44:48', NULL),
(6, 'Penglipuran Festival 2013', '1637577923 2013.jpg', '2021-11-22 10:45:23', NULL),
(7, 'Penglipuran Festival 2013 - 2', '1637577964 2013.2.jpg', '2021-11-22 10:46:04', NULL),
(8, 'Penglipuran Festival 2013 - 3', '1637577989 2013.3.jpg', '2021-11-22 10:46:29', NULL),
(9, 'Penglipuran Festival 2013 - 4', '1637578033 2013.4.jpg', '2021-11-22 10:47:13', NULL),
(10, 'Penglipuran Festival 2013 - 5', '1637578078 2013.5.jpg', '2021-11-22 10:47:58', NULL),
(11, 'Kunjungan Pejabat', '1637578098 pejabat.jpg', '2021-11-22 10:48:18', NULL),
(12, 'Kunjungan Pejabat 2', '1637578110 pejabat2.jpg', '2021-11-22 10:48:30', NULL),
(13, 'Kunjungan Pejabat 3', '1637578121 pejabat3.jpg', '2021-11-22 10:48:41', NULL),
(14, 'Kunjungan Pejabat 4', '1637578144 pejabat4.jpg', '2021-11-22 10:49:04', NULL),
(15, 'Kunjungan Pejabat 5', '1637578156 pejabat5.jpg', '2021-11-22 10:49:16', NULL);

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2021_11_01_173313_create_galleries_table', 2),
(4, '2021_11_02_074841_create_news_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `image`, `content`, `created_at`, `updated_at`) VALUES
(8, 1, 'Makna Tugu Pahlawan', '1636266261 berita-1.jpeg', 'Makna dan Arti Bangunan Tugu Pahiawan Untuk Mengenang detik detik Proklamasi yang dikumandangkan pada tanggal 17 Agustus 1945 warga desa Adat Penglipuran membangun Tugu Peringatan dalam bentuk candi yang tingginya dari dasar 7 meter yang mengandung makna: \r\n- 1 (satu ) buah buah bangunan tugu ( candi) melambangkan angka 1.\r\n- 7 (Tujuh) tinggi candi dan dasar 7 meter melambangkan angka 7.\r\n- 8( delapan) dasar candi melambangkan angka 8 yang mengandung makna Bulan  Agustus. \r\n- 1 (satu) kembali kepada 1 buah bangunan candi.\r\n- 9 (sembilan) Candi bertumpang (beratap) tingkat 9.\r\n- 4 ( empat) candi berpintu empat.\r\n- 5 (Lima) tiap-tiap pintu bertangga 5 dan uraian tersebut mengandung makna tahun 1945.', '2021-11-07 06:24:21', NULL),
(9, 1, 'Kerajinan Bambu', '1636268009 berita-2.jpg', 'Kerajinan bambu berupa \'bedeg\' adalah anyaman bambu berbentuk persegi panjang. Bedeg biasanya digunakan pada tembok maupun langit-langit atap rumah. Kerajinan ini dapat di Desa Penglipuran, sehingga tidak heran beberapa rumah di penglipuran ditemukan dengan bedeg.', '2021-11-07 06:53:29', NULL),
(10, 1, 'Sertifikat CHSE', '1636268212 berita-3.png', 'Sertifikasi CHSE adalah proses pemberian sertifikat kepada Usaha Pariwisata, Destinasi Pariwisata, dan Produk Pariwisata lainnya untuk memberikan jaminan kepada wisatawan terhadap pelaksanaan Kebersihan, Kesehatan, Keselamatan, dan Kelestarian Lingkungan.', '2021-11-07 06:56:52', NULL),
(11, 1, 'Suhu Tubuh', '1636268347 berita-5.jpeg', 'Suhu tubuh Corona adalah salah satu hal yang perlu diperhatikan pada pasien COVID-19, khususnya ketika mereka mengalami demam. Suhu tubuh corona yang perlu diwaspadai yakni diatas 37 derajat celcius. Sehingga di Desa Wisata Penglipuran menerapkan cek suhu kepada semua pengunjung sebelum memasuki kawasan wisata.', '2021-11-07 06:59:07', NULL),
(12, 1, 'Program We Love Bali', '1636268513 berita-6.jpeg', 'Rabu, 7 Oktober 2020 Program We Love Bali adalah bentuk edukasi sekaligus kampanye penerapan protokol kesehatan berbasis kebersihan, kesehatan, keselamatan, Lingkungan, bagi pelaku usaha Pariwisata dan ekonomi kreatif di era adaptasi kebiasaan baru', '2021-11-07 07:01:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `jenis_kelamin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sutha Pramana', 'admin', 'admin@gmail.com', NULL, '$2b$10$MvEjyR9aJcilfSqzRoL3U.KkqJuZZW4BTtIJ2oZF81pgg/dAAaERy', 'Pria', NULL, '2021-10-26 06:06:51', NULL),
(4, 'Putu Baru', 'putubaru', 'putubaru@gmail.com', NULL, '$2y$10$GAbwtp2OKpl5zk7mXyo//uJpBelmIZxxHj2eLeBvDII6z6.77K84C', 'Pria', NULL, '2021-10-26 06:06:51', NULL),
(5, 'Made', 'made', 'made@gmail.com', NULL, '$2y$10$Lxt2ry4oqKo2/ydBKYYip.p12pwmdL4xBLS7u/iwctui/KWKHQ/XC', 'Pria', NULL, '2021-10-26 14:14:13', NULL),
(6, 'Ayu', 'ayu', 'ayu@gmail.com', NULL, '$2y$10$XtTghpHU6i3H9xWIZvjm/eeRXUYiF4i8L6Vr/ODBmECLvfEAE4hAa', 'Wanita', NULL, '2021-10-27 01:18:55', NULL),
(8, 'Administrator 3', 'admin3', 'admin3@gmail.com', NULL, '$2y$10$XaKS2xlAJVqBCQJMUImIjO6o5rbkdT9t/Ri5bfj3D5Av.S7AG3I3u', 'Wanita', NULL, '2021-11-07 07:20:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
