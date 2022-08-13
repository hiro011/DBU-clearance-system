-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2022 at 01:41 PM
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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `employee_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarentor_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guarentor_phone` int(11) NOT NULL,
  `level_of_education` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `salary` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `ID_no`, `name`, `gender`, `birth_date`, `employee_type`, `guarentor_name`, `guarentor_phone`, `level_of_education`, `job_title`, `age`, `salary`, `created_at`, `updated_at`) VALUES
(6, '00343', 'Hagos Fisaha', 'Male', '1995-04-04', 'Admin_Staff', 'ajay sani', 956562323, 'Bachelor', 'HRM officer', 27, NULL, '2022-08-09 17:48:39', '2022-08-09 17:48:39'),
(1, '00464', 'ANDUALEM ENYEW', 'Male', '1990-04-05', 'Teacher', 'seid ali', 956233556, 'Bachelor', 'teacher', 32, NULL, '2022-08-08 05:27:15', '2022-08-08 05:27:15'),
(7, '00513', 'MARU WUBENEH', 'Male', '1994-04-05', 'Admin Staff', 'seid YENESEW', 955233556, 'Bachelor', 'Registrar officer', 28, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(8, '00519', 'GIRMA ANIMUT', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Law-Library', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(9, '00529', 'YENESEW	MULUNEH', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Studet Residence', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(10, '00530', 'YIHUN	YIMENU', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Dining', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(11, '00561', 'WENDMAYEWU	ASMARE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'EngCollege Finance', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(12, '00563', 'BEAKAL	MITIKU', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'HRM', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(13, '00567', 'KIDANU	ADERA', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'EngCollege Finance', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(14, '00570', 'MULUKEN JEMERE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Anti Corruption', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(20, '00605', 'DEGNET	GONCHE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Cashier', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(19, '00607', 'BINIAM	EMEYE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Finance', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(18, '00611', 'GURSHA	BELETF', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'ICT Property', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(17, '00635', 'ASEBELIGN CHEBUD', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Research officer', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(16, '00641', 'DEJEN	KEBEDE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'General Service', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51'),
(15, '00654', 'GETINET	ZEWUDIE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Property Officer', 32, NULL, '2022-08-10 06:09:51', '2022-08-10 06:09:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `ID_no` (`ID_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
