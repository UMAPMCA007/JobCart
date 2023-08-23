-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 02:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `applyed_jobs`
--

CREATE TABLE `applyed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applyed_jobs`
--

INSERT INTO `applyed_jobs` (`id`, `job_id`, `name`, `email`, `phone`, `resume`, `created_at`, `updated_at`) VALUES
(1, '1', 'chacko vk', 'chacko@gmail.com', '9744221775', '1692784654.pdf', '2023-08-23 04:27:34', '2023-08-23 04:27:34'),
(2, '2', 'chacko vk', 'chacko@gmail.com', '9567712958', '1692784710.pdf', '2023-08-23 04:28:30', '2023-08-23 04:28:30'),
(3, '3', 'chacko vk', 'chackovk@gmail.com', '957712958', '1692789338.pdf', '2023-08-23 05:45:38', '2023-08-23 05:45:38'),
(4, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692791485.pdf', '2023-08-23 06:21:25', '2023-08-23 06:21:25'),
(5, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692791549.pdf', '2023-08-23 06:22:29', '2023-08-23 06:22:29'),
(6, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692791644.pdf', '2023-08-23 06:24:04', '2023-08-23 06:24:04'),
(7, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692791760.pdf', '2023-08-23 06:26:00', '2023-08-23 06:26:00'),
(8, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692791866.pdf', '2023-08-23 06:27:46', '2023-08-23 06:27:46'),
(9, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692791913.pdf', '2023-08-23 06:28:33', '2023-08-23 06:28:33'),
(10, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792082.pdf', '2023-08-23 06:31:22', '2023-08-23 06:31:22'),
(11, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792092.pdf', '2023-08-23 06:31:33', '2023-08-23 06:31:33'),
(12, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792094.pdf', '2023-08-23 06:31:34', '2023-08-23 06:31:34'),
(13, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792106.pdf', '2023-08-23 06:31:47', '2023-08-23 06:31:47'),
(14, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792108.pdf', '2023-08-23 06:31:48', '2023-08-23 06:31:48'),
(15, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792117.pdf', '2023-08-23 06:31:58', '2023-08-23 06:31:58'),
(16, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792125.pdf', '2023-08-23 06:32:05', '2023-08-23 06:32:05'),
(17, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792131.pdf', '2023-08-23 06:32:11', '2023-08-23 06:32:11'),
(18, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792135.pdf', '2023-08-23 06:32:15', '2023-08-23 06:32:15'),
(19, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792139.pdf', '2023-08-23 06:32:20', '2023-08-23 06:32:20'),
(20, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792149.pdf', '2023-08-23 06:32:29', '2023-08-23 06:32:29'),
(21, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792153.pdf', '2023-08-23 06:32:33', '2023-08-23 06:32:33'),
(22, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792159.pdf', '2023-08-23 06:32:39', '2023-08-23 06:32:39'),
(23, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792165.pdf', '2023-08-23 06:32:46', '2023-08-23 06:32:46'),
(24, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792173.pdf', '2023-08-23 06:32:53', '2023-08-23 06:32:53'),
(25, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792176.pdf', '2023-08-23 06:32:56', '2023-08-23 06:32:56'),
(26, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792181.pdf', '2023-08-23 06:33:02', '2023-08-23 06:33:02'),
(27, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792187.pdf', '2023-08-23 06:33:07', '2023-08-23 06:33:07'),
(28, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792216.pdf', '2023-08-23 06:33:36', '2023-08-23 06:33:36'),
(29, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792221.pdf', '2023-08-23 06:33:41', '2023-08-23 06:33:41'),
(30, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792229.pdf', '2023-08-23 06:33:49', '2023-08-23 06:33:49'),
(31, '4', 'chacko vk', 'chackovk@gmail.com', '9567712958', '1692792233.pdf', '2023-08-23 06:33:53', '2023-08-23 06:33:53'),
(32, '1', 'Jonson Thomas', 'jonson@gmail.com', '9544070825', '1692792382.pdf', '2023-08-23 06:36:22', '2023-08-23 06:36:22'),
(33, '2', 'Jaicob ml', 'jecob@gmail.com', '9644070825', '1692792442.pdf', '2023-08-23 06:37:22', '2023-08-23 06:37:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_discription` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `company_name`, `email`, `phone`, `location`, `job_title`, `job_discription`, `job_type`, `created_at`, `updated_at`) VALUES
(1, 'Company 1', 'company1@gmail.com', '1234567890', 'calicut', 'laravel developer', 'lead programmer', 'Full Time', '2023-08-23 03:23:04', '2023-08-23 03:45:39'),
(2, 'Company 2', 'com2@gmail.com', '9544056012', 'kochi', 'php developer', 'jr dev', 'Part Time', '2023-08-23 03:24:01', '2023-08-23 03:46:36'),
(3, 'Company 3', 'comp3@gmail.com', '9566601200', 'kochi', 'python dev', 'jr dev', 'Contract', '2023-08-23 03:25:02', '2023-08-23 03:46:45'),
(4, 'Company 4', 'comp4@gmail.com', '9544079825', 'calicut', 'Java developer', 'jr dev', 'Freelance', '2023-08-23 03:25:58', '2023-08-23 03:46:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_23_043521_create_jobs_table', 1),
(6, '2023_08_23_092920_create_applyed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `admin` int(20) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Midhun Chacko', 'thomas.midhun1@gmail.com', 1, NULL, '$2y$10$enJUkkeTQjBYf5LlsCb1tex4WRc.3xMb86gNlLFAyYK4Bam8JmJp.', NULL, '2023-08-22 23:32:37', '2023-08-22 23:32:37'),
(2, 'chacko vk', 'chackovk@gmail.com', NULL, NULL, '$2y$10$Ki23K2z5SABQ/3CdPav7Y.LMo7P9wSKablKVkb.YT0wMXoeDfDUFu', NULL, '2023-08-22 23:40:51', '2023-08-22 23:40:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applyed_jobs`
--
ALTER TABLE `applyed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `applyed_jobs`
--
ALTER TABLE `applyed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
