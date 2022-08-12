-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 01:49 PM
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
-- Table structure for table `admin_staff`
--

CREATE TABLE `admin_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_staff`
--

INSERT INTO `admin_staff` (`id`, `ID_no`, `name`, `gender`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(1, '00343', 'Hagos Fisaha', 'Hagos Fisaha', 'Engineering', 'Electrical Engineering', 'On-work', '2022-08-09 17:48:39', '2022-08-09 17:48:39'),
(21, '00002', 'testHRM', 'unspecified', 'Human-Resource-Directorate', 'HRM', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(22, '00003', 'testLibrary', 'Male', 'Library-Directorate', 'Main-Library', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(23, '00004', 'testRegistrar', 'unspecified', 'Human-Resource-Directorate', 'Registrar', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(24, '00005', 'testDining', 'unspecified', 'Human-Resource-Directorate', 'Dining', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(25, '00513', 'MARU WUBENEH', 'Male', 'Human-Resource-Directorate', 'Registrar', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(26, '00519', 'GIRMA	ANIMUT', 'Male', 'Library-Directorate', 'Law-Library', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(27, '00529', 'YENESEW	MULUNEH', 'Male', 'Human-Resource-Directorate', 'StudResidence', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(28, '00530', 'YIHUN	YIMENU', 'Male', 'Human-Resource-Directorate', 'Dining', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(29, '00561', 'WENDMAYEWU	ASMARE', 'Male', 'Human-Resource-Directorate', 'EngCollege-Finance', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(30, '00563', 'BEAKAL	MITIKU', 'Male', 'Human-Resource-Directorate', 'HRM', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(31, '00567', 'KIDANU	ADERA', 'Male', 'Human-Resource-Directorate', 'Anti Corruption', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(32, '00570', 'MULUKEN JEMERE', 'Male', 'Engineering', 'Mechanical  Engineering', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(33, '00605', 'DEGNET	GONCHE', 'Male', 'Finance-Directorate', 'Cashier', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(34, '00607', 'BINIAM	EMEYE', 'Male', 'Finance-Directorate', 'Finance', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(35, '00611', 'GURSHA	BELETF', 'Male', 'Human-Resource-Directorate', 'ICT Property', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(36, '00635', 'ASEBELIGN	CHEBUD', 'Male', 'Human-Resource-Directorate', 'Research', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(37, '00641', 'DEJEN	KEBEDE', 'Male', 'Human-Resource-Directorate', 'General Service', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07'),
(38, '00654', 'GETINET	ZEWUDIE', 'Male', 'Human-Resource-Directorate', 'Property Officer', 'On-Work', '2022-08-10 05:55:07', '2022-08-10 05:55:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_staff`
--
ALTER TABLE `admin_staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_staff_id_no_unique` (`ID_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_staff`
--
ALTER TABLE `admin_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
