-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2017 at 11:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namedescript` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci,
  `Display` tinyint(4) NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id`, `name`, `namedescript`, `Description`, `Display`, `parent_id`, `category_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'HTML5&CSS3', 'html_css', NULL, 1, NULL, 1, NULL, NULL, NULL),
(2, 'Javascript', 'Javascript', NULL, 1, NULL, 1, NULL, NULL, NULL),
(3, 'Bootstrap', 'Bootstrap', NULL, 1, NULL, 1, NULL, NULL, NULL),
(4, 'Laravel', 'Laravel', NULL, 1, NULL, 2, NULL, NULL, NULL),
(5, 'Javascript', 'Javascript_backend', NULL, 1, NULL, 2, NULL, NULL, NULL),
(6, 'MYSQl', 'MYSQl', NULL, 1, NULL, 3, NULL, NULL, NULL),
(7, 'JSON', 'JSON', NULL, 1, NULL, 3, NULL, NULL, NULL),
(8, 'XML', 'XML', NULL, 1, NULL, 3, NULL, NULL, NULL),
(9, 'Android Cơ bản', 'Android_CB', NULL, 1, NULL, 4, NULL, NULL, NULL),
(10, 'Android Nâng cao', 'Android_NC', NULL, 1, NULL, 4, NULL, NULL, NULL),
(11, 'Lập Trình Switf', 'LT_Swift', NULL, 1, NULL, 5, NULL, NULL, NULL),
(12, 'Lập Trình IOS', 'LT_IOS', NULL, 1, NULL, 5, NULL, NULL, NULL),
(13, 'Ajax', 'Ajax', NULL, 1, NULL, 6, NULL, NULL, NULL),
(14, 'Nodejs', 'Nodejs', NULL, 1, NULL, 6, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`parent_id`),
  ADD KEY `topic_category_id_foreign` (`category_id`),
  ADD KEY `topic_id_index` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `topic` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
