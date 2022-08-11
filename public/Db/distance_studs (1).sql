-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2022 at 03:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearancedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `distance_studs`
--

CREATE TABLE `distance_studs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `distance_studs`
--

INSERT INTO `distance_studs` (`id`, `ID_no`, `name`, `gender`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(7, '00663', 'ABRHAM BEKELE', 'Male', 4, 'Computing', 'Computer Science', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(8, '00692', 'BIRHANU NIGUSE', 'Female', 3, 'Law', 'Law', 'Transfered', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(9, '00857', 'BZUAYEHU ASEGIDEW', 'Male', 2, 'Business', 'Acounting', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(10, '00911', 'NIBRET AWOKE', 'Male', 3, 'Agriculture', 'Agriculture Economics', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(11, '00988', 'GELENA GEZMU', 'Male', 2, 'Social-Science', 'English', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(12, '00441', 'ABEBAW HAYMANOT', 'Male', 3, 'Computational', 'Physics', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `distance_studs`
--
ALTER TABLE `distance_studs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `distance_studs_id_no_unique` (`ID_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `distance_studs`
--
ALTER TABLE `distance_studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
