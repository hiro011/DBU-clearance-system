-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 07:55 PM
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
-- Table structure for table `library_users`
--

CREATE TABLE `library_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Card_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `add_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_users`
--

INSERT INTO `library_users` (`id`, `Card_no`, `name`, `gender`, `catagory`, `college`, `department`, `email`, `phone`, `add_by`, `created_at`, `updated_at`) VALUES
(6, '00343', 'Hagos Fisaha', 'Male', 'Admin_Staff', 'Engineering', ' Electrical Engineering', 'fisha@gmail.com', 95656363, 'test library', '2022-08-11 09:23:16', '2022-08-11 09:23:16'),
(2, '00611', 'GURSHA	BELETF', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'ICT Property', 'beletf@gmail.com', 952553622, 'GIRMA	ANIMUT', '2022-08-11 11:58:19', '2022-08-11 11:58:19'),
(3, '00635', 'ASEBELIGN	CHEBUD', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'Research', 'chebud@gmail.com', 925423622, 'GIRMA	ANIMUT', '2022-08-11 11:58:19', '2022-08-11 11:58:19'),
(4, '00641', 'DEJEN	KEBEDE', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'General Service', 'kebede@gmail.com', 963223622, 'GIRMA	ANIMUT', '2022-08-11 11:58:19', '2022-08-11 11:58:19'),
(5, '00654', 'GETINET	ZEWUDIE', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'Property Officer', 'zewudie@gmail.com', 922123622, 'GIRMA	ANIMUT', '2022-08-11 11:58:19', '2022-08-11 11:58:19'),
(1, '02513', 'ANDUALEM ENYEW', 'Male', 'Teacher', 'Engineering', 'Mechanical  Engineering', NULL, NULL, 'GIRMA	ANIMUT', '2022-08-08 04:19:24', '2022-08-08 04:19:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library_users`
--
ALTER TABLE `library_users`
  ADD PRIMARY KEY (`Card_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `library_users`
--
ALTER TABLE `library_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
