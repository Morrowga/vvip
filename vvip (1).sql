-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 17, 2021 at 10:22 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vvip`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2019_08_19_000000_create_failed_jobs_table', 1),
(52, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(53, '2021_10_13_021539_create_packages_table', 1),
(54, '2021_10_15_032702_create_smart_card_designs_table', 1),
(56, '2021_10_15_075340_create_waiting_times_table', 2),
(57, '2021_10_17_093316_create_user_logs_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `token`, `image`, `plan_name`, `price`, `package_name`, `created_at`, `updated_at`) VALUES
(1, '5823656', 'http://vvip9.co/images/gold.png', 'yearly', '49$', 'normal', '2021-10-14 21:31:24', '2021-10-14 21:31:24'),
(2, '8577453', 'http://vvip9.co/images/diamond.png', 'yearly', '133$', 'standard', '2021-10-14 21:31:37', '2021-10-14 21:31:37'),
(3, '3635170', 'http://vvip9.co/images/ruby.png', 'yearly', '199$', 'luxury', '2021-10-14 21:31:47', '2021-10-14 21:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `smart_card_designs`
--

CREATE TABLE `smart_card_designs` (
  `id` bigint UNSIGNED NOT NULL,
  `front_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `back_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smart_card_designs`
--

INSERT INTO `smart_card_designs` (`id`, `front_image`, `back_image`, `created_at`, `updated_at`) VALUES
(1, 'https://i.pinimg.com/236x/a4/70/d0/a470d0805564b4e046f585c931c825b6.jpg', 'https://i.pinimg.com/236x/66/9f/dc/669fdccfe00f5eff6787e0014dc25781.jpg', '2021-10-14 21:23:58', '2021-10-14 21:23:58'),
(2, 'https://i.pinimg.com/236x/66/9f/dc/669fdccfe00f5eff6787e0014dc25781.jpg', 'https://i.pinimg.com/236x/66/9f/dc/669fdccfe00f5eff6787e0014dc25781.jpg', '2021-10-14 21:25:01', '2021-10-14 21:25:01'),
(3, 'https://i.pinimg.com/236x/0c/f9/94/0cf9949927610a17d51bb681a3528842.jpg', 'https://i.pinimg.com/236x/0c/f9/94/0cf9949927610a17d51bb681a3528842.jpg', '2021-10-14 21:25:16', '2021-10-14 21:25:16'),
(4, 'https://i.pinimg.com/236x/b5/51/23/b551238254b55edd57edf9671bd7dbca.jpg', 'https://i.pinimg.com/236x/b5/51/23/b551238254b55edd57edf9671bd7dbca.jpg', '2021-10-14 21:25:50', '2021-10-14 21:25:50'),
(5, 'https://i.pinimg.com/236x/a2/b4/c1/a2b4c17472732e7e928506789aa31e19.jpg', 'https://i.pinimg.com/236x/a2/b4/c1/a2b4c17472732e7e928506789aa31e19.jpg', '2021-10-14 21:26:13', '2021-10-14 21:26:13'),
(6, 'https://i.pinimg.com/236x/aa/fb/7f/aafb7f3e9b49e4a81f0b0729b6be902f.jpg', 'https://i.pinimg.com/236x/aa/fb/7f/aafb7f3e9b49e4a81f0b0729b6be902f.jpg', '2021-10-14 21:26:54', '2021-10-14 21:26:54'),
(7, 'https://i.pinimg.com/564x/e2/93/9b/e2939b46f0cdca02da2b479c69838b46.jpg', 'https://i.pinimg.com/564x/e2/93/9b/e2939b46f0cdca02da2b479c69838b46.jpg', '2021-10-14 21:27:14', '2021-10-14 21:27:14'),
(8, 'https://i.pinimg.com/236x/36/08/bf/3608bf39ffcc118e4c42412572d87487.jpg', 'https://i.pinimg.com/236x/36/08/bf/3608bf39ffcc118e4c42412572d87487.jpg', '2021-10-14 21:27:38', '2021-10-14 21:27:38'),
(9, 'https://i.pinimg.com/236x/9c/6c/5e/9c6c5edd3bd55b990767e30bb4fcc9ce.jpg', 'https://i.pinimg.com/236x/9c/6c/5e/9c6c5edd3bd55b990767e30bb4fcc9ce.jpg', '2021-10-14 21:27:54', '2021-10-14 21:27:54'),
(10, 'https://i.pinimg.com/236x/f1/64/99/f16499dd690ae0a253e7b6d38bfcf49b.jpg', 'https://i.pinimg.com/236x/f1/64/99/f16499dd690ae0a253e7b6d38bfcf49b.jpg', '2021-10-14 21:28:31', '2021-10-14 21:28:31'),
(11, 'https://i.pinimg.com/564x/cd/85/c2/cd85c21ec3dc0cdc43a89f4929c923d4.jpg', 'https://i.pinimg.com/564x/cd/85/c2/cd85c21ec3dc0cdc43a89f4929c923d4.jpg', '2021-10-14 21:29:14', '2021-10-14 21:29:14'),
(12, 'https://i.pinimg.com/236x/8a/36/9b/8a369b56360f175b6bf14a7c2c2daf5c.jpg', 'https://i.pinimg.com/236x/8a/36/9b/8a369b56360f175b6bf14a7c2c2daf5c.jpg', '2021-10-14 21:29:39', '2021-10-14 21:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secure_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'public',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smart_card_design_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remaining_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_start_date` datetime DEFAULT NULL,
  `package_end_date` datetime DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'null',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `url`, `secure_status`, `email`, `smart_card_design_id`, `package`, `package_status`, `remaining_days`, `package_start_date`, `package_end_date`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('1e1e91f5-9ff4-4b41-bb72-002ce51fd7b0', 'thihaaung', '09795864194', 'http://vvip9.co/11012354', 'public', 'thiha@gmail.com', '6', NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$R5Qi.BnCGcKd0gIAaiS1ueU/ccF8h82eSoosxecsKvQPDKbf0lmZi', NULL, '2021-10-17 03:08:24', '2021-10-17 03:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `name`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'thihaaung', '09795864194', '2021-10-17 03:08:02', '2021-10-17 03:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_times`
--

CREATE TABLE `waiting_times` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_left` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `waiting_times`
--

INSERT INTO `waiting_times` (`id`, `user_id`, `target_time`, `time_left`, `created_at`, `updated_at`) VALUES
(12, '1b0af236-6176-4077-a3cb-2876b43f1f12', '2021-10-17 09:29:36', '1 days, 23 hours, 59 minutes and 51 seconds', '2021-10-15 02:59:36', '2021-10-15 02:59:45'),
(13, '1e1e91f5-9ff4-4b41-bb72-002ce51fd7b0', '2021-10-19 09:53:54', '1 days, 23 hours, 31 minutes and 55 seconds', '2021-10-17 03:23:54', '2021-10-17 03:51:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `smart_card_designs`
--
ALTER TABLE `smart_card_designs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waiting_times`
--
ALTER TABLE `waiting_times`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `smart_card_designs`
--
ALTER TABLE `smart_card_designs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `waiting_times`
--
ALTER TABLE `waiting_times`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
