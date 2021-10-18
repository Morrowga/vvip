-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2021 at 03:24 AM
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
-- Table structure for table `home_infos`
--

CREATE TABLE `home_infos` (
  `id` bigint UNSIGNED NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_infos`
--

INSERT INTO `home_infos` (`id`, `text`, `image`, `created_at`, `updated_at`) VALUES
(1, 'action', 'http://vvip9.co/images/action.jpeg\r\n', '2021-10-18 03:16:15', '2021-10-18 03:16:15'),
(2, 'create', 'http://vvip9.co/images/create.jpeg', '2021-10-18 03:16:15', '2021-10-18 03:16:15'),
(3, 'profile', 'http://vvip9.co/images/profile.jpeg\r\n', '2021-10-18 03:20:20', '2021-10-18 03:20:20'),
(4, 'setting', 'http://vvip9.co/images/setting.jpeg\r\n', '2021-10-18 03:20:20', '2021-10-18 03:20:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home_infos`
--
ALTER TABLE `home_infos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home_infos`
--
ALTER TABLE `home_infos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
