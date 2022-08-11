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
-- Table structure for table `extension_studs`
--

CREATE TABLE `extension_studs` (
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
-- Dumping data for table `extension_studs`
--

INSERT INTO `extension_studs` (`id`, `ID_no`, `name`, `gender`, `program`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(7, '00578', 'KASSAHUN MENGIE', 'Female', 'Extension', 4, 'Computing', 'Software Engineering', 'Withdrow', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(8, '00808', 'ATEFRACHEW SEYFU', 'Male', 'Extension', 2, 'Business', 'Management', 'On-Class', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(9, '00981', 'WENDU KEMAL', 'Male', 'Extension', 3, 'Agriculture', 'Animal  Science', 'On-Class', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(10, '01309', 'BELETE BELACHEW', 'Male', 'Extension', 1, 'Freshman', 'Social Freshman', 'Transfered', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(11, '02157', 'MELKAMU DERSO', 'Male', 'Extension', 3, 'Social-Science', 'Civics', 'On-Class', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(12, '02220', 'SILESH ALAMIR', 'Male', 'Extension', 2, 'Computational', 'Physics', 'Transfered', '2022-08-07 18:47:08', '2022-08-07 18:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `extension_studs`
--
ALTER TABLE `extension_studs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `extension_studs_id_no_unique` (`ID_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `extension_studs`
--
ALTER TABLE `extension_studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
