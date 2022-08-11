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
-- Table structure for table `regular_studs`
--

CREATE TABLE `regular_studs` (
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
-- Dumping data for table `regular_studs`
--

INSERT INTO `regular_studs` (`id`, `ID_no`, `name`, `gender`, `program`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(4, '00326', 'DANIAL MEBRAHTU', 'Female', 'Regular', 2, 'Computational', 'Mathematics', 'Dismissed', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(5, '00359', 'ABRHAM GIRMAY', 'Male', 'Regular', 3, 'Agriculture', 'Horticulture', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(6, '00378', 'Kiflom Kidanemariam', 'Male', 'Regular', 3, 'Agriculture', 'Plant Science', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(7, '00383', 'BIRHANU GADISA', 'Male', 'Regular', 4, 'Computing', 'Information Technology', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(8, '00393', 'ROBEL MELAKE', 'Male', 'Regular', 5, 'Engineering', 'Chemical Engineering', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(9, '00397', 'Askeberew	Agegnehu', 'Male', 'Regular', 4, 'Social-Science', 'History', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(10, '00417', 'JEMAL MEHAMED', 'Male', 'Regular', 4, 'Computing', 'Information System', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(11, '00419', 'WONDIYFRAW ALEMIE', 'Male', 'Regular', 5, 'Engineering', 'Industrial Engineering', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(12, '00422', 'DESTAW GEDAMU', 'Male', 'Regular', 2, 'Business', 'Economics', 'Dismissed', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(13, '00424', 'GETNET GIRMA', 'Male', 'Regular', 1, 'Freshman', 'Social Freshman', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(14, '00427', 'YENEW TAMIR', 'Male', 'Regular', 2, 'Business', 'Logistics', 'Dismissed', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(1, '00573', 'TADESSE MUNYE', 'Male', 'Regular', 3, 'Engineering', 'CoTM Engineering', 'On-Class', '2022-08-05 16:12:12', '2022-08-05 16:12:12'),
(2, '00578', 'KASSAHUN MENGIE', 'Female', 'Regular', 4, 'Computing', 'Software Engineering', 'Withdrow', '2022-08-05 16:13:03', '2022-08-05 16:13:03'),
(15, '01129', 'HAFTOM TEKLAY', 'Male', 'Regular', 1, 'Freshman', 'Natural Freshman', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `regular_studs`
--
ALTER TABLE `regular_studs`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `regular_studs_id_no_unique` (`ID_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `regular_studs`
--
ALTER TABLE `regular_studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
