-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 10:14 PM
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
-- Table structure for table `officers`
--

CREATE TABLE `officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_by` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `officers`
--

INSERT INTO `officers` (`id`, `ID_no`, `name`, `gender`, `college`, `department`, `add_by`, `created_at`, `updated_at`) VALUES
(20, '00002', 'testHRM', 'unspecified', 'Directorate', 'HRM', 'Ahmed Mehamedyesuf', '2022-08-08 12:34:21', '2022-08-08 12:34:21'),
(21, '00003', 'testLibrary', 'Male', 'Directorate', 'Library', 'Ahmed Mehamedyesuf', '2022-08-08 12:39:06', '2022-08-08 12:39:06'),
(22, '00004', 'testRegistrar', 'unspecified', 'Directorate', 'Registrar', 'Ahmed Mehamedyesuf', '2022-08-08 12:39:48', '2022-08-08 12:39:48'),
(23, '00005', 'testDining', 'unspecified', 'Directorate', 'Dining', 'Ahmed Mehamedyesuf', '2022-08-08 12:40:18', '2022-08-08 12:40:18'),
(3, '00343', 'HAGOS	FISAHA', 'Male', 'Engineering', 'Electrical & Computer Engineering', 'Ahmed Mehamedyesuf', '2022-08-05 12:06:47', '2022-08-05 12:06:47'),
(1, '00513', 'MARU WUBENEH', 'Male', 'Directorate', 'Registrar', 'Ahmed Mehamedyesuf', '2022-08-05 11:52:26', '2022-08-05 11:52:26'),
(5, '00519', 'GIRMA	ANIMUT', 'Male', 'Directorate', 'Library', 'Ahmed Mehamedyesuf', '2022-08-06 05:58:47', '2022-08-06 05:58:47'),
(6, '00529', 'YENESEW	MULUNEH', 'Male', 'Directorate', 'StudResidence', 'Ahmed Mehamedyesuf', '2022-08-06 05:59:09', '2022-08-06 05:59:09'),
(7, '00530', 'YIHUN	YIMENU', 'Male', 'Directorate', 'Dining', 'Ahmed Mehamedyesuf', '2022-08-06 05:59:35', '2022-08-06 05:59:35'),
(8, '00561', 'WENDMAYEWU	ASMARE', 'Male', 'Directorate', 'EngCollege Finance', 'Ahmed Mehamedyesuf', '2022-08-06 05:59:55', '2022-08-06 05:59:55'),
(9, '00563', 'BEAKAL	MITIKU', 'Male', 'Directorate', 'HRM', 'Ahmed Mehamedyesuf', '2022-08-06 06:00:17', '2022-08-06 06:00:17'),
(10, '00567', 'KIDANU	ADERA', 'Male', 'Directorate', 'Anti Corruption', 'Ahmed Mehamedyesuf', '2022-08-06 06:00:52', '2022-08-06 06:00:52'),
(4, '00570', 'MULUKEN JEMERE', 'Male', 'Engineering', 'Mechanical  Engineering', 'Ahmed Mehamedyesuf', '2022-08-05 15:57:44', '2022-08-05 15:57:44'),
(11, '00605', 'DEGNET	GONCHE', 'Male', 'Directorate', 'Cashier', 'Ahmed Mehamedyesuf', '2022-08-06 06:01:14', '2022-08-06 06:01:14'),
(14, '00607', 'BINIAM	EMEYE', 'Male', 'Directorate', 'Finance', 'Ahmed Mehamedyesuf', '2022-08-06 06:06:26', '2022-08-06 06:06:26'),
(15, '00611', 'GURSHA	BELETF', 'Male', 'Directorate', 'ICT Property', 'Ahmed Mehamedyesuf', '2022-08-06 06:07:24', '2022-08-06 06:07:24'),
(2, '00635', 'ASEBELIGN	CHEBUD', 'Male', 'Directorate', 'Research', 'Ahmed Mehamedyesuf', '2022-08-06 06:07:47', '2022-08-06 06:07:47'),
(12, '00641', 'DEJEN	KEBEDE', 'Male', 'Directorate', 'General Service', 'Ahmed Mehamedyesuf', '2022-08-06 06:08:59', '2022-08-06 06:08:59'),
(13, '00654', 'GETINET	ZEWUDIE', 'Male', 'Directorate', 'Property Officer', 'Ahmed Mehamedyesuf', '2022-08-06 06:09:37', '2022-08-06 06:09:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `officers_id_no_unique` (`ID_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
