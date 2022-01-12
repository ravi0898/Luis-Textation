-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 09:44 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `user_id`, `images`, `created_at`, `updated_at`) VALUES
(1, '1', 'download.jpg', NULL, NULL),
(2, '2', 'download.jpg', NULL, NULL),
(3, '3', 'Wireframe-CD.jpg', NULL, NULL),
(4, '4', 'download.jpg', NULL, NULL),
(5, '5', 'Wireframe-CD.jpg', NULL, NULL),
(6, '6', 'download.jpg', NULL, NULL),
(7, '7', '', NULL, NULL),
(8, '8', '', NULL, NULL),
(9, '9', '', NULL, NULL),
(10, '10', '', NULL, NULL),
(11, '11', '', NULL, NULL),
(12, '12', '', NULL, NULL),
(13, '13', '', NULL, NULL),
(14, '14', '', NULL, NULL),
(15, '15', 'download.jpg', NULL, NULL),
(16, '1', 'download.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `msg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender` int(11) DEFAULT NULL,
  `receiver` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `msg`, `sender`, `receiver`, `created_at`, `updated_at`, `title`) VALUES
(1, 'this one is demo', NULL, NULL, '2021-11-30 20:45:41', '2021-11-30 20:45:41', 'demo'),
(2, 'Hello John how are you !  n wht r  u doind right now !!!!', 19, 11, '2021-11-30 23:17:27', '2021-11-30 23:17:27', 'Hello Chat'),
(3, '“Things work out best for those who make the best of how things work out.” ..........Trust because you are willing to accept the risk, not because it’s safe or certain', 19, 11, '2021-12-01 01:49:13', '2021-12-01 01:49:13', 'welcome'),
(4, 'hi.........................', 19, 11, '2021-12-01 02:19:03', '2021-12-01 02:19:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2021_11_15_072403_create_products_table', 2),
(10, '2021_11_15_093626_add_status_to_users_table', 3),
(11, '2021_11_15_095220_add_status_to_users_table', 4),
(12, '2021_11_15_100220_add_status_to_products_table', 5),
(13, '2021_11_22_082752_create_users_panel_table', 6),
(14, '2021_11_22_085712_create_userpanels_table', 7),
(15, '2021_11_25_121352_create_tickets_table', 8),
(16, '2021_11_26_115312_create_files_table', 8),
(17, '2021_11_26_121010_create_files_table', 9),
(18, '2021_11_26_132454_create_tickets_table', 10),
(19, '2021_11_27_065412_create_files_table', 10),
(20, '2021_11_27_070623_create_files_table', 11),
(21, '2021_11_27_072037_add_ticket_id_to_tickets_table', 12),
(22, '2021_11_27_072137_add_status_to_tickets_table', 12),
(23, '2021_11_27_074139_add_ticket_id_to_tickets_table', 13),
(24, '2021_11_27_074201_add_status_to_tickets_table', 13),
(25, '2021_11_30_162423_create_messages_table', 14),
(26, '2021_12_01_010210_add_title_to_messages_table', 15),
(27, '2021_12_01_011305_create_replies_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0027ab9204eee0c667aa92940e32e9989a0581e5109cdb39b7ede9d97a48e68df92585fa3feb9132', 4, 1, 'TutsForWeb', '[]', 0, '2021-11-16 02:12:34', '2021-11-16 02:12:34', '2022-11-16 07:42:34'),
('01adc068778f88b7231d6e0a94433cbae47640430bb39eeb212e3faf740e56c9c38a63069ce47c72', 4, 1, 'TutsForWeb', '[]', 0, '2021-11-15 01:48:00', '2021-11-15 01:48:00', '2022-11-15 07:18:00'),
('100b66f22ab173a225634b7656efe2dc284fd18b10d6c24c01c81a2a7ac3d9be32390a1f98428b3e', 5, 1, 'TutsForWeb', '[]', 0, '2021-11-22 23:36:20', '2021-11-22 23:36:20', '2022-11-23 05:06:20'),
('245fe7e7478fa782b9f245b631d0520e951e5b5f3f78291f01fec9021c458add52d3349bc1ca475a', 3, 1, 'TutsForWeb', '[]', 0, '2021-11-15 01:46:32', '2021-11-15 01:46:32', '2022-11-15 07:16:32'),
('2574c65786f6d06147b1ddfa5f1f48e2c47f8eb91ad326f74d55cc09afb590be0a495156efb5c2d4', 8, 1, 'TutsForWeb', '[]', 0, '2021-11-23 00:05:11', '2021-11-23 00:05:11', '2022-11-23 05:35:11'),
('29e480a633232ba552222d5015e49f930c21006fec76e97e4364a74d2a9e1eb199fb27dd75fc91da', 4, 1, 'TutsForWeb', '[]', 0, '2021-11-17 02:37:09', '2021-11-17 02:37:09', '2022-11-17 08:07:09'),
('5acde1d8474ad410cc2e3bb8dc7fcaf92ec2739983baea9bd200d8fe384ee873b15d5b17ef649936', 7, 1, 'TutsForWeb', '[]', 0, '2021-11-22 23:58:19', '2021-11-22 23:58:19', '2022-11-23 05:28:19'),
('677bb664afd2a2d7453051d35c05bb377ed19a9e43c60df7f31de333453db36b6ab83bfa17cd5d66', 6, 1, 'TutsForWeb', '[]', 0, '2021-11-22 23:47:01', '2021-11-22 23:47:01', '2022-11-23 05:17:01'),
('6c15be0fab52ca962f01c01c5a682348c545871100a035e603975a934a8e12f81d08e57f2f2d0178', 4, 1, 'TutsForWeb', '[]', 0, '2021-11-17 02:47:38', '2021-11-17 02:47:38', '2022-11-17 08:17:38'),
('7ccd3dba8f316bfb2310a79b055085f33ac4d9bc0821d0d687802d1db2bd8ba6955f89d9607bb334', 9, 1, 'TutsForWeb', '[]', 0, '2021-11-23 00:32:59', '2021-11-23 00:32:59', '2022-11-23 06:02:59'),
('a477cae7763e59903d77d453e365bb86f2394186cd932a7e9783d0b155b235cceb527988c600ae70', 8, 1, 'TutsForWeb', '[]', 0, '2021-11-23 00:03:47', '2021-11-23 00:03:47', '2022-11-23 05:33:47'),
('d424d8b7b8629e2dbe05e483a4d524943b9a9bc687903a45382689a142b807fe13ef4dc1043119e1', 10, 1, 'TutsForWeb', '[]', 0, '2021-11-23 00:33:53', '2021-11-23 00:33:53', '2022-11-23 06:03:53'),
('e1049a20af11bbd3d614490d17d71d38ce4f7d16d25262c19a4d18629ab19639cba0f07ee86a1632', 4, 1, 'TutsForWeb', '[]', 1, '2021-11-15 01:50:03', '2021-11-15 01:50:03', '2022-11-15 07:20:03'),
('e2440707748a0166294c0b21371ff0a853ef49fad25d6283481133a9fa63b62d4613cca6ec8d08c7', 8, 1, 'TutsForWeb', '[]', 0, '2021-11-23 00:06:30', '2021-11-23 00:06:30', '2022-11-23 05:36:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'qOSl2EHeyDc3ZytrYiGtUBEjGe2VW3Syg5hsywa5', NULL, 'http://localhost', 1, 0, 0, '2021-11-15 01:45:30', '2021-11-15 01:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-11-15 01:45:30', '2021-11-15 01:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priority` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `password` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `client_name`, `company_name`, `email`, `mobile_no`, `priority`, `created_at`, `updated_at`, `status`, `password`, `data_id`) VALUES
(1, 8, 'vijendra', 'abc', 'v@gmail.com', '1234567890', 'Medium', '2021-11-23 00:10:55', '2021-11-23 00:10:55', 0, '', 0),
(2, 8, 'Sharukh', 'developer Bazaar', 'dbsharukh@gmail.com', '3434343434', 'High', '2021-11-23 00:11:42', '2021-11-23 00:11:42', 1, '123456', 0),
(4, 9, 'Arpit Vaishnav', 'Dbtech', 'dbtech@gmail.com', '9111201209', 'High', '2021-11-24 08:16:30', '2021-11-24 08:16:30', 0, '', 0),
(5, 9, 'test', 'hhghghgf', 'tr@gmail.com', '1234567893', 'Medium', '2021-11-26 07:59:31', '2021-11-26 07:59:31', 0, '', 0),
(6, 9, 'suresh', 'wipro', 'suresh1@gmail.comm', '9898989898', 'High', '2021-11-30 10:16:10', '2021-11-30 10:16:10', 1, NULL, 0),
(7, 9, 'test', 'test', 'superadmin99@gmail.com', '8888888888', 'High', '2021-11-30 10:30:10', '2021-11-30 10:30:10', 1, '123456', 0),
(8, 17, 'shuruti', 'satyam', 's@gmail.com', '8989898989', 'Low', '2021-11-30 18:36:30', '2021-11-30 18:36:30', 0, '123456', 18),
(9, 18, 'pradeep', 'wipro', 'p@gmail.com', '1212121212', 'High', '2021-11-30 23:10:23', '2021-11-30 23:10:23', 1, '123456', 19);

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `images`, `created_at`, `updated_at`) VALUES
(1, '1', 'demo.PNG', NULL, NULL),
(2, '2', 'demo1.PNG', NULL, NULL),
(3, '3', 'demo1.PNG', NULL, NULL),
(4, '4', 'demo1.PNG', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `ticket_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `subject`, `created_at`, `updated_at`, `ticket_id`, `status`) VALUES
(1, 'Hello luis please taxation document it\'s too important for me  Hello luis please taxation document it\'s too important for me Hello luis please taxation document it\'s too important for me Hello luis please taxation document it\'s too important for me Hello luis please taxation document it\'s too important for me Hello luis please taxation document it\'s too important for me', '2021-11-27 11:45:25', '2021-11-27 11:45:25', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userpanels`
--

CREATE TABLE `userpanels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userpanels`
--

INSERT INTO `userpanels` (`id`, `mobile_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, '9755444818', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 'admin', 'admin123@gmail.com', NULL, '$2y$10$DbIG3zM1qiWIHu9Isc4T9.yrXSD.gfUcziEpMQkpnrjhUQhY1jERu', NULL, '2021-11-23 00:03:47', '2021-11-23 00:03:47'),
(9, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$10$XTq8A57ssPauvVrPoG1bd.lop/L49.nTf2PxHOZN.MFIvnPw7aHNK', NULL, '2021-11-23 00:32:59', '2021-11-23 00:32:59'),
(10, 'vijendra', 'vijendra@gmail.com', NULL, '$2y$10$KZeqkgsOAKD0BnbIRS4aRO2qCvqsS9W7AwvY7h8Q1Ul8NHudDUW7G', NULL, '2021-11-23 00:33:53', '2021-11-23 00:33:53'),
(11, 'test', 'superadmin99@gmail.com', NULL, '$2y$10$lmSFES4r.ZKE7UJdbIaa2.xFzBYq4kwxkZexVF1Sx6jG/1Wx7jpC.', NULL, '2021-11-30 10:30:10', '2021-11-30 10:30:10'),
(12, 'ram1', 'r1@gmail.com', NULL, '$2y$10$mWW2d.chfm2lUAFf0WXXtOiA1kkQ2IphXepo92k8r4h1y/cywIWYC', NULL, '2021-11-30 10:40:51', '2021-11-30 10:40:51'),
(14, 'suresh', 'suresh11@gmail.com', NULL, '$2y$10$CFb3MW/.7q2/hJuq2PwCx./nGN73pddyIB6/jRPn3TqQn48wnBkgW', NULL, '2021-11-30 10:42:55', '2021-11-30 10:42:55'),
(15, 'ram1', 'suresh1@gmail.com', NULL, '$2y$10$4qp2VI3usGjWLp3YV5yWPOkRpqZ.L70cmHBtMqUnvZRSjM5GAQlEu', NULL, '2021-11-30 10:46:24', '2021-11-30 10:46:24'),
(17, 'suresh', 'suresh31@gmail.com', NULL, '$2y$10$H7u4X2VuttIzuy1ud2nkGukcAysnJhYL9rlQpdaCXt1TAXIvlDj22', NULL, '2021-11-30 10:47:29', '2021-11-30 10:47:29'),
(18, 'shuruti', 's@gmail.com', NULL, '$2y$10$upPjxYqWL2b9eSESvmCWH.LR81pS5HxPI0xnyRd27.m/1kYuPdPnW', NULL, '2021-11-30 18:36:30', '2021-11-30 18:36:30'),
(19, 'pradeep', 'p@gmail.com', NULL, '$2y$10$yevy9VsTD3KJrf80/huHVOIevyyubSME2iLrCAmcCXRToHwhT4ddi', NULL, '2021-11-30 23:10:23', '2021-11-30 23:10:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userpanels`
--
ALTER TABLE `userpanels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userpanels_mobile_no_unique` (`mobile_no`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userpanels`
--
ALTER TABLE `userpanels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
