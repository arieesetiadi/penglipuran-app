-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 03:14 PM
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
(1, 'Kunjungan Pejabat e', '1637578156 pejabat5.jpg', '2021-11-22 10:49:16', NULL),
(2, 'Kunjungan Pejabat d', '1637578144 pejabat4.jpg', '2021-11-22 10:49:04', NULL),
(3, 'Kunjungan Pejabat c', '1637578121 pejabat3.jpg', '2021-11-22 10:48:41', NULL),
(4, 'Kunjungan Pejabat b', '1637578110 pejabat2.jpg', '2021-11-22 10:48:30', NULL),
(5, 'Kunjungan Pejabat a', '1637578098 pejabat.jpg', '2021-11-22 10:48:18', NULL),
(6, 'Penglipuran Festival 2013 e', '1637578078 2013.5.jpg', '2021-11-22 10:47:58', NULL),
(7, 'Penglipuran Festival 2013 d', '1637578033 2013.4.jpg', '2021-11-22 10:47:13', NULL),
(8, 'Penglipuran Festival 2013 c', '1637577989 2013.3.jpg', '2021-11-22 10:46:29', NULL),
(10, 'Penglipuran Festival 2013 b', '1637577964 2013.2.jpg', '2021-11-22 10:46:04', NULL),
(11, 'Penglipuran Festival 2013 a', '1637577923 2013.jpg', '2021-11-22 10:45:23', NULL),
(12, 'Penglipuran Festival 2014 e', '1637577888 2014.5.jpg', '2021-11-22 10:44:48', NULL),
(13, 'Penglipuran Festival 2014 d', '1637577851 2014.4.jpg', '2021-11-22 10:44:11', NULL),
(14, 'Penglipuran Festival 2014 c', '1637577828 2014.3.jpg', '2021-11-22 10:43:48', NULL),
(15, 'Penglipuran Festival 2014 b', '1637577741 2014.2.jpg', '2021-11-22 10:42:21', NULL),
(16, 'Penglipuran Festival 2014 a', '1637577713 2014.jpg', '2021-11-22 10:41:53', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
