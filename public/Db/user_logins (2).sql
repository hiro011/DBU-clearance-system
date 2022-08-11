-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 08:53 AM
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
-- Table structure for table `user_logins`
--

CREATE TABLE `user_logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_by` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `ID_no`, `name`, `email`, `password`, `role`, `add_by`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Ahmed Mehamedyesuf', 'mehamedseid001@gmail.com', '1234ahm', 'Admin', 'Ahmed Mehamedyesuf', '2022-08-05 14:16:33', '2022-08-05 14:16:33'),
(35, '00002', 'testHRM', 'testHRM@gmail.com', '1234', 'HRM', 'Ahmed Mehamedyesuf', '2022-08-08 12:38:26', '2022-08-08 12:38:26'),
(38, '00003', 'test library', 'testLibrary@gmail.com', '1234', 'Library', 'Ahmed Mehamedyesuf', '2022-08-08 12:43:04', '2022-08-08 12:43:04'),
(36, '00004', 'testRegistrar', 'testRegistrar@gmail.com', '1234', 'Registrar', 'Ahmed Mehamedyesuf', '2022-08-08 12:41:19', '2022-08-08 12:41:19'),
(37, '00005', 'testDining', 'testDining@gmail.com', '1234', 'Dining', 'Ahmed Mehamedyesuf', '2022-08-08 12:42:13', '2022-08-08 12:42:13'),
(3, '00343', 'HAGOS	FISAHA', 'fisahahagos@gmail.com', '1234hag', 'Department Head', 'Ahmed Mehamedyesuf', '2022-08-05 12:07:58', '2022-08-05 12:07:58'),
(39, '0045', 'ahmed mehamed', 'mehamed@gmail.com', '1234', 'User', 'Ahmed Mehamedyesuf', '2022-08-11 01:49:23', '2022-08-11 01:49:23'),
(2, '00513', 'MARU WUBENEH', 'wubenehmaru@gmail.com', '1234mar', 'Registrar', 'Ahmed Mehamedyesuf', '2022-08-05 11:45:49', '2022-08-05 11:45:49'),
(5, '00519', 'GIRMA	ANIMUT', 'animut@gmail.com', '1234gir', 'Library', 'Ahmed Mehamedyesuf', '2022-08-06 06:12:37', '2022-08-06 06:12:37'),
(8, '00529', 'YENESEW	MULUNEH', 'muluneh@gmail.com', '1234yen', 'StudResidence', 'Ahmed Mehamedyesuf', '2022-08-06 06:17:18', '2022-08-06 06:17:18'),
(9, '00530', 'YIHUN	YIMENU', 'yimenu@gmail.com', '1234yih', 'Dining', 'Ahmed Mehamedyesuf', '2022-08-06 06:18:01', '2022-08-06 06:18:01'),
(10, '00561', 'WENDMAYEWU	ASMARE', 'asmare@gmail.com', '1234web', 'EngCollege-Finance', 'Ahmed Mehamedyesuf', '2022-08-06 06:19:38', '2022-08-06 06:19:38'),
(11, '00563', 'BEAKAL MITIKU', 'mitiku@gmail.com', '1234bea', 'HRM', 'MARU WUBENEH', '2022-08-06 13:06:40', '2022-08-06 13:06:40'),
(27, '00567', 'KIDANU	ADERA', 'adera@gmail.com', '1234kid', 'Anti-Corruption', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23'),
(4, '00570', 'MULUKEN	JEMERE', 'jemeremuluken@gmail.com', '1234mul', 'Department-Head', 'Ahmed Mehamedyesuf', '2022-08-06 06:11:59', '2022-08-06 06:11:59'),
(28, '00605', 'DEGNET	GONCHE', 'gonchie@gmail.com', '1234deg', 'Cashier', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23'),
(29, '00607', 'BINIAM	EMEYE', 'emeye@gmail.com', '1234bin', 'Finance', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23'),
(30, '00611', 'GURSHA	BELETF', 'beletf@gmail.com', '1234gur', 'ICT-Property', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23'),
(31, '00635', 'ASEBELIGN	CHEBUD', 'chebud@gmail.com', '1234ase', 'Research', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23'),
(32, '00641', 'DEJEN	KEBEDE', 'kebede@gmail.com', '1234dej', 'General-Service', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23'),
(33, '00654', 'GETINET	ZEWUDIE', 'zewudie@gmail.com', '1234get', 'Property-Office', 'Ahmed Mehamedyesuf', '2022-08-07 08:47:23', '2022-08-07 08:47:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_logins`
--
ALTER TABLE `user_logins`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `user_logins_id_unique` (`id`),
  ADD UNIQUE KEY `user_logins_id_no_unique` (`ID_no`),
  ADD UNIQUE KEY `user_logins_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
