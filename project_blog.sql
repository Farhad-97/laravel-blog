-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 10:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `lar_migrations`
--

CREATE TABLE `lar_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lar_migrations`
--

INSERT INTO `lar_migrations` (`id`, `migration`, `batch`) VALUES
(4, '2022_03_17_071707_create_roles_table', 4),
(5, '2022_03_17_072015_create_short_links_table', 5),
(6, '2022_03_17_071950_create_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `lar_roles`
--

CREATE TABLE `lar_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lar_roles`
--

INSERT INTO `lar_roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2022-03-16 19:49:55', '2022-03-16 19:49:55'),
(2, 'Editor', '2022-03-16 19:50:55', '2022-03-16 19:50:55'),
(3, 'User', '2022-03-16 19:51:55', '2022-03-16 19:51:55');

-- --------------------------------------------------------

--
-- Table structure for table `lar_short_links`
--

CREATE TABLE `lar_short_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lar_short_links`
--

INSERT INTO `lar_short_links` (`id`, `code`, `link`, `created_at`, `updated_at`) VALUES
(1, 'www.google.com', 'bv34nc', '2022-03-17 05:16:09', '2022-03-17 05:16:09'),
(2, 'https://docs.github.com/en/get-started/quickstart/hello-world', 'X6r9Ue', '2022-03-17 07:08:04', '2022-03-17 07:08:04'),
(3, 'https://docs.github.com/en/get-started/quickstart/hello-world', 'M1WrQm', '2022-03-17 10:49:04', '2022-03-17 10:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `lar_users`
--

CREATE TABLE `lar_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` blob NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inactive` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lar_users`
--

INSERT INTO `lar_users` (`id`, `role_id`, `username`, `full_name`, `password`, `email`, `photo`, `mobile`, `verify_code`, `inactive`, `created_at`, `updated_at`) VALUES
(1, 1, 'farhad97', 'MD. FARHAD AHMED', '123456', 'mentorbd86@gmail.com', 0x312e6a7067, '01994199850', 'fbv453nt', 0, '2022-03-17 05:38:06', '2022-03-17 05:38:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lar_migrations`
--
ALTER TABLE `lar_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lar_roles`
--
ALTER TABLE `lar_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lar_short_links`
--
ALTER TABLE `lar_short_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lar_users`
--
ALTER TABLE `lar_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lar_migrations`
--
ALTER TABLE `lar_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lar_roles`
--
ALTER TABLE `lar_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lar_short_links`
--
ALTER TABLE `lar_short_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lar_users`
--
ALTER TABLE `lar_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
