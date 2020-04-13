-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2020 at 05:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karim_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oldpassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `oldpassword`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '1234', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dsrs`
--

CREATE TABLE `dsrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dsrs`
--

INSERT INTO `dsrs` (`id`, `name`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(2, 'Anik', '01688', 'Dhaka', '2020-02-25 03:44:32', '2020-02-25 03:44:32'),
(3, 'Rasel', '016886', 'Dhaka', '2020-02-29 11:58:25', '2020-02-29 11:58:25'),
(4, 'Md Anik Islam', '01688', 'Dhaka', '2020-03-02 10:06:22', '2020-03-02 10:06:22');

-- --------------------------------------------------------

--
-- Table structure for table `dworks`
--

CREATE TABLE `dworks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dsrid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dworks`
--

INSERT INTO `dworks` (`id`, `date`, `name`, `route`, `phone`, `dsrid`, `created_at`, `updated_at`) VALUES
(1, '2020-03-01', 'Anik', 'aaa 123', '01688', '2', '2020-03-01 11:43:58', '2020-03-01 11:43:58'),
(2, '2020-03-02', 'Anik', 'aaa 123', '01688', '2', '2020-03-02 07:59:10', '2020-03-02 07:59:10'),
(3, '2020-03-02', 'Anik', 'Dhaka, Bangladesh', '01688', '2', '2020-03-02 10:00:53', '2020-03-02 10:00:53'),
(4, '2020-03-02', 'Md Anik Islam', 'aaa 123', '01688', '4', '2020-03-02 10:06:39', '2020-03-02 10:06:39'),
(5, '2020-03-02', 'Md Anik Islam', 'New Market', '01688', '4', '2020-03-02 10:22:03', '2020-03-02 10:22:03');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Pran', '2020-03-02 09:58:45', '2020-03-02 09:58:45'),
(7, 'ACME', '2020-03-02 09:58:50', '2020-03-02 09:58:50'),
(8, 'Pran BD', '2020-03-02 10:19:24', '2020-03-02 10:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `inexes`
--

CREATE TABLE `inexes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dsrid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purpase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inexes`
--

INSERT INTO `inexes` (`id`, `dsrid`, `date`, `route`, `type`, `purpase`, `amount`, `created_at`, `updated_at`) VALUES
(2, '2', '2020-03-01', 'aaa 123', 'Income', 'baal', '22', '2020-03-02 06:53:34', '2020-03-02 06:53:34'),
(3, '2', '2020-03-02', 'aaa 123', 'Income', 'baal', '2200', '2020-03-02 08:09:04', '2020-03-02 08:09:04'),
(4, '2', '2020-03-02', 'aaa 123', 'Expenditure', 'sirsi', '100', '2020-03-02 08:09:04', '2020-03-02 08:09:04'),
(5, '4', '2020-03-02', 'aaa 123', 'Expenditure', 'gari nosto', '100', '2020-03-02 10:14:13', '2020-03-02 10:14:13'),
(6, '4', '2020-03-02', 'aaa 123', 'Income', 'Taka Paisi', '100', '2020-03-02 10:14:13', '2020-03-02 10:14:13');

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
(3, '2020_02_24_190604_create_groups_table', 1),
(4, '2020_02_24_203212_create_products_table', 2),
(5, '2020_02_25_091144_create_dsrs_table', 3),
(22, '2020_02_25_132219_create_dworks_table', 4),
(28, '2020_03_01_191656_create_inexes_table', 5),
(29, '2020_03_01_191715_create_payments_table', 5),
(30, '2020_02_25_132432_create_workdetails_table', 6),
(31, '2020_03_02_150325_create_admins_table', 7);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dsrid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `dsrid`, `date`, `route`, `date1`, `amount`, `created_at`, `updated_at`) VALUES
(2, '2', '2020-03-01', 'aaa 123', '2020-03-02', '10000', '2020-03-02 07:16:16', '2020-03-02 07:16:16'),
(3, '2', '2020-03-02', 'aaa 123', '2020-03-12', '10000', '2020-03-02 08:09:20', '2020-03-02 08:09:20'),
(4, '4', '2020-03-02', 'aaa 123', '2020-03-02', '197', '2020-03-02 10:14:35', '2020-03-02 10:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `groupName`, `productName`, `unit`, `price`, `created_at`, `updated_at`) VALUES
(3, 'Pran', 'Juice', 'Packet', '16', '2020-03-02 09:59:27', '2020-03-02 09:59:27'),
(4, 'ACME', 'water bottle', 'Piece', '15', '2020-03-02 10:00:12', '2020-03-02 10:00:12'),
(5, 'Pran BD', 'Juice futika', 'Gm', '112', '2020-03-02 10:19:48', '2020-03-02 10:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `workdetails`
--

CREATE TABLE `workdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dsrid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `return` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `returnam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workdetails`
--

INSERT INTO `workdetails` (`id`, `dsrid`, `date`, `name`, `phone`, `route`, `gname`, `pname`, `quantity`, `quantity1`, `unit`, `return`, `returnam`, `price`, `created_at`, `updated_at`) VALUES
(1, '2', '2020-03-02', 'Anik', '01688', 'aaa 123', 'asd', 'sdfadsf', '123 Gm', '123', '12332', '1', '1 Gm', '1516836', '2020-03-02 07:59:18', '2020-03-02 08:09:04'),
(2, '2', '2020-03-02', 'Anik', '01688', 'aaa 123', 'asd', 'sdfadsf', '32 Gm', '32', '12332', '2', '2 Gm', '394624', '2020-03-02 07:59:24', '2020-03-02 08:09:04'),
(3, '2', '2020-03-02', 'Anik', '01688', 'Dhaka, Bangladesh', 'Pran', 'Juice', '12 Packet', '12', '16', '0', '0', '192', '2020-03-02 10:01:02', '2020-03-02 10:01:02'),
(4, '4', '2020-03-02', 'Md Anik Islam', '01688', 'aaa 123', 'ACME', 'water bottle', '12 Piece', '12', '15', '1', '1 Piece', '180', '2020-03-02 10:12:16', '2020-03-02 10:13:35'),
(5, '4', '2020-03-02', 'Md Anik Islam', '01688', 'aaa 123', 'Pran', 'Juice', '12 Packet', '12', '16', '10', '10 Packet', '192', '2020-03-02 10:12:38', '2020-03-02 10:13:35'),
(6, '4', '2020-03-02', 'Md Anik Islam', '01688', 'New Market', 'Pran BD', 'Juice futika', '12 Gm', '12', '112', '0', '0', '1344', '2020-03-02 10:23:36', '2020-03-02 10:23:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dsrs`
--
ALTER TABLE `dsrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dworks`
--
ALTER TABLE `dworks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inexes`
--
ALTER TABLE `inexes`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `workdetails`
--
ALTER TABLE `workdetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dsrs`
--
ALTER TABLE `dsrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dworks`
--
ALTER TABLE `dworks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inexes`
--
ALTER TABLE `inexes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `workdetails`
--
ALTER TABLE `workdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
