-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 02:25 PM
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
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_staff`
--

INSERT INTO `admin_staff` (`id`, `ID_no`, `name`, `gender`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(1, '00343', 'Hagos Fisaha', 'Male', 'Engineering', 'Electrical Engineering', 'On-work', '2022-08-09', '2022-08-09'),
(21, '00002', 'testHRM', 'unspecified', 'Human-Resource-Directorate', 'HRM', 'On-Work', '2022-08-10', '2022-08-10'),
(22, '00003', 'testLibrary', 'Male', 'Library-Directorate', 'Main-Library', 'On-Work', '2022-08-10', '2022-08-10'),
(23, '00004', 'testRegistrar', 'unspecified', 'Human-Resource-Directorate', 'Registrar', 'On-Work', '2022-08-10', '2022-08-10'),
(24, '00005', 'testDining', 'unspecified', 'Human-Resource-Directorate', 'Dining', 'On-Work', '2022-08-10', '2022-08-10'),
(25, '00513', 'MARU WUBENEH', 'Male', 'Human-Resource-Directorate', 'Registrar', 'On-Work', '2022-08-10', '2022-08-10'),
(26, '00519', 'GIRMA	ANIMUT', 'Male', 'Library-Directorate', 'Law-Library', 'On-Work', '2022-08-10', '2022-08-10'),
(27, '00529', 'YENESEW	MULUNEH', 'Male', 'Human-Resource-Directorate', 'StudResidence', 'On-Work', '2022-08-10', '2022-08-10'),
(28, '00530', 'YIHUN	YIMENU', 'Male', 'Human-Resource-Directorate', 'Dining', 'On-Work', '2022-08-10', '2022-08-10'),
(29, '00561', 'WENDMAYEWU	ASMARE', 'Male', 'Human-Resource-Directorate', 'EngCollege-Finance', 'On-Work', '2022-08-10', '2022-08-10'),
(30, '00563', 'BEAKAL	MITIKU', 'Male', 'Human-Resource-Directorate', 'HRM', 'On-Work', '2022-08-10', '2022-08-10'),
(31, '00567', 'KIDANU	ADERA', 'Male', 'Human-Resource-Directorate', 'Anti Corruption', 'On-Work', '2022-08-10', '2022-08-10'),
(32, '00570', 'MULUKEN JEMERE', 'Male', 'Engineering', 'Mechanical  Engineering', 'On-Work', '2022-08-10', '2022-08-10'),
(33, '00605', 'DEGNET	GONCHE', 'Male', 'Finance-Directorate', 'Cashier', 'On-Work', '2022-08-10', '2022-08-10'),
(34, '00607', 'BINIAM	EMEYE', 'Male', 'Finance-Directorate', 'Finance', 'On-Work', '2022-08-10', '2022-08-10'),
(35, '00611', 'GURSHA	BELETF', 'Male', 'Human-Resource-Directorate', 'ICT Property', 'On-Work', '2022-08-10', '2022-08-10'),
(36, '00635', 'ASEBELIGN	CHEBUD', 'Male', 'Human-Resource-Directorate', 'Research', 'On-Work', '2022-08-10', '2022-08-10'),
(37, '00641', 'DEJEN	KEBEDE', 'Male', 'Human-Resource-Directorate', 'General Service', 'On-Work', '2022-08-10', '2022-08-10'),
(38, '00654', 'GETINET	ZEWUDIE', 'Male', 'Human-Resource-Directorate', 'Property Officer', 'On-Work', '2022-08-10', '2022-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `anti_corruption_users`
--

CREATE TABLE `anti_corruption_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `update_date` date NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `barcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `library` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cashier_users`
--

CREATE TABLE `cashier_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` double(8,2) NOT NULL,
  `withdraw` double(8,2) NOT NULL,
  `balance` double(8,2) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clearance_regulars`
--

CREATE TABLE `clearance_regulars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clearance_regulars`
--

INSERT INTO `clearance_regulars` (`id`, `ID_no`, `name`, `gender`, `program`, `year`, `college`, `department`, `reason`, `created_at`, `updated_at`) VALUES
(1, '00383', 'BIRHANU GADISA', 'Male', 'Regular', 4, 'Computing', 'Information Technology', 'end_of_year', '2022-08-12', '2022-08-12');

-- --------------------------------------------------------

--
-- Table structure for table `clearance_staffs`
--

CREATE TABLE `clearance_staffs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clearance_students`
--

CREATE TABLE `clearance_students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clearance_students`
--

INSERT INTO `clearance_students` (`id`, `ID_no`, `name`, `gender`, `program`, `year`, `college`, `department`, `reason`, `created_at`, `updated_at`) VALUES
(3, '00578', 'KASSAHUN MENGIE', 'Male', 'Extension', 4, 'Computing', 'Software Engineering', 'Dismissed', '2022-08-13', '2022-08-13'),
(4, '00578', 'KASSAHUN MENGIE', 'Male', 'Regular', 4, 'Computing', 'Software Engineering', 'Dismissed', '2022-08-13', '2022-08-13'),
(5, '00441', 'ABEBAW HAYMANOT', 'Male', 'Distance', 3, 'Computational', 'Physics', 'Dismissed', '2022-08-13', '2022-08-13');

-- --------------------------------------------------------

--
-- Table structure for table `department_items`
--

CREATE TABLE `department_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dining_non_cafes`
--

CREATE TABLE `dining_non_cafes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Birr_monthly` int(11) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(8, '00692', 'BIRHANU NIGUSE', 'Female', 3, 'Law', 'Law', 'Dismissed', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(9, '00857', 'BZUAYEHU ASEGIDEW', 'Male', 2, 'Business', 'Acounting', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(10, '00911', 'NIBRET AWOKE', 'Male', 3, 'Agriculture', 'Agriculture Economics', 'Dismissed', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(11, '00988', 'GELENA GEZMU', 'Male', 2, 'Social-Science', 'English', 'On-Class', '2022-08-07 18:47:59', '2022-08-07 18:47:59'),
(12, '00441', 'ABEBAW HAYMANOT', 'Male', 3, 'Computational', 'Physics', 'Dismissed', '2022-08-07 18:47:59', '2022-08-07 18:47:59');

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
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `ID_no`, `name`, `gender`, `birth_date`, `employee_type`, `guarentor_name`, `guarentor_phone`, `level_of_education`, `job_title`, `age`, `salary`, `created_at`, `updated_at`) VALUES
(6, '00343', 'Hagos Fisaha', 'Male', '1995-04-04', 'Admin_Staff', 'ajay sani', 956562323, 'Bachelor', 'HRM officer', 27, NULL, '2022-08-09', '2022-08-09'),
(1, '00464', 'ANDUALEM ENYEW', 'Male', '1990-04-05', 'Teacher', 'seid ali', 956233556, 'Bachelor', 'teacher', 32, NULL, '2022-08-08', '2022-08-08'),
(7, '00513', 'MARU WUBENEH', 'Male', '1994-04-05', 'Admin Staff', 'seid YENESEW', 955233556, 'Bachelor', 'Registrar officer', 28, NULL, '2022-08-10', '2022-08-10'),
(8, '00519', 'GIRMA ANIMUT', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Law-Library', 32, NULL, '2022-08-10', '2022-08-10'),
(9, '00529', 'YENESEW	MULUNEH', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Studet Residence', 32, NULL, '2022-08-10', '2022-08-10'),
(10, '00530', 'YIHUN	YIMENU', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Dining', 32, NULL, '2022-08-10', '2022-08-10'),
(11, '00561', 'WENDMAYEWU	ASMARE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'EngCollege Finance', 32, NULL, '2022-08-10', '2022-08-10'),
(12, '00563', 'BEAKAL	MITIKU', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'HRM', 32, NULL, '2022-08-10', '2022-08-10'),
(13, '00567', 'KIDANU	ADERA', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'EngCollege Finance', 32, NULL, '2022-08-10', '2022-08-10'),
(14, '00570', 'MULUKEN JEMERE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Anti Corruption', 32, NULL, '2022-08-10', '2022-08-10'),
(20, '00605', 'DEGNET	GONCHE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Cashier', 32, NULL, '2022-08-10', '2022-08-10'),
(19, '00607', 'BINIAM	EMEYE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Finance', 32, NULL, '2022-08-10', '2022-08-10'),
(18, '00611', 'GURSHA	BELETF', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'ICT Property', 32, NULL, '2022-08-10', '2022-08-10'),
(17, '00635', 'ASEBELIGN CHEBUD', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Research officer', 32, NULL, '2022-08-10', '2022-08-10'),
(16, '00641', 'DEJEN	KEBEDE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'General Service', 32, NULL, '2022-08-10', '2022-08-10'),
(15, '00654', 'GETINET	ZEWUDIE', 'Male', '1990-04-05', 'Admin Staff', 'MULUNEH ali', 956233556, 'Bachelor', 'Property Officer', 32, NULL, '2022-08-10', '2022-08-10');

-- --------------------------------------------------------

--
-- Table structure for table `eng_college_finances`
--

CREATE TABLE `eng_college_finances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` double(8,2) NOT NULL,
  `withdraw` double(8,2) NOT NULL,
  `balance` double(8,2) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

INSERT INTO `extension_studs` (`id`, `ID_no`, `name`, `gender`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(7, '00578', 'KASSAHUN MENGIE', 'Female', 4, 'Computing', 'Software Engineering', 'Withdrow', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(8, '00808', 'ATEFRACHEW SEYFU', 'Male', 2, 'Business', 'Management', 'On-Class', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(9, '00981', 'WENDU KEMAL', 'Male', 3, 'Agriculture', 'Animal  Science', 'Dismissed', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(10, '01309', 'BELETE BELACHEW', 'Male', 1, 'Freshman', 'Social Freshman', 'Dismissed', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(11, '02157', 'MELKAMU DERSO', 'Male', 3, 'Social-Science', 'Civics', 'Dismissed', '2022-08-07 18:47:08', '2022-08-07 18:47:08'),
(12, '02220', 'SILESH ALAMIR', 'Male', 2, 'Computational', 'Physics', 'Transfered', '2022-08-07 18:47:08', '2022-08-07 18:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `finance_users`
--

CREATE TABLE `finance_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit` double(8,2) NOT NULL,
  `withdraw` double(8,2) NOT NULL,
  `balance` double(8,2) NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_service_users`
--

CREATE TABLE `general_service_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `floor_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Water_bill_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marriage` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ict_property_users`
--

CREATE TABLE `ict_property_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_checkouts`
--

CREATE TABLE `library_checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `barcode` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `library` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charge` int(11) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `checkout` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `add_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_users`
--

INSERT INTO `library_users` (`id`, `Card_no`, `name`, `gender`, `catagory`, `college`, `department`, `checkout`, `email`, `phone`, `add_by`, `created_at`, `updated_at`) VALUES
(1, '02513', 'ANDUALEM ENYEW', 'Male', 'Teacher', 'Engineering', 'Mechanical  Engineering', '0', NULL, NULL, 'GIRMA	ANIMUT', '2022-08-08', '2022-08-08'),
(2, '00611', 'GURSHA	BELETF', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'ICT Property', '0', 'beletf@gmail.com', 952553622, 'GIRMA	ANIMUT', '2022-08-11', '2022-08-11'),
(3, '00635', 'ASEBELIGN	CHEBUD', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'Research', '0', 'chebud@gmail.com', 925423622, 'GIRMA	ANIMUT', '2022-08-11', '2022-08-11'),
(4, '00641', 'DEJEN	KEBEDE', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'General Service', '0', 'kebede@gmail.com', 963223622, 'GIRMA	ANIMUT', '2022-08-11', '2022-08-11'),
(5, '00654', 'GETINET	ZEWUDIE', 'Male', 'Admin_Staff', 'Human-Resource-Directorate', 'Property Officer', '0', 'zewudie@gmail.com', 922123622, 'GIRMA	ANIMUT', '2022-08-11', '2022-08-11'),
(6, '00343', 'Hagos Fisaha', 'Male', 'Admin_Staff', 'Engineering', ' Electrical Engineering', '0', 'fisha@gmail.com', 95656363, 'test library', '2022-08-11', '2022-08-11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_30_182502_create_regular_studs_table', 1),
(6, '2022_07_30_214945_create_extension_studs_table', 1),
(7, '2022_07_30_215211_create_distance_studs_table', 1),
(8, '2022_08_03_173808_create_user_logins_table', 1),
(11, '2022_08_07_063924_create_officers_table', 1),
(12, '2022_08_07_064050_create_teachers_table', 1),
(14, '2022_08_07_192803_create_books_table', 2),
(19, '2022_08_08_082648_create_employees_table', 4),
(21, '2022_08_09_203759_create_admin_staff_table', 5),
(23, '2022_08_10_131845_create_students_table', 6),
(24, '2022_08_11_025035_create_tbl_customers_table', 7),
(25, '2022_08_11_092414_create_clearance_regulars_table', 8),
(29, '2022_08_11_180346_create_library_users_table', 11),
(31, '2022_08_11_182303_create_stud_residences_table', 12),
(32, '2022_08_12_065207_create_dining_non_cafes_table', 13),
(33, '2022_08_12_115105_create_finance_users_table', 14),
(36, '2022_08_12_121338_create_property_checkouts_table', 16),
(37, '2022_08_12_121624_create_department_items_table', 17),
(38, '2022_08_12_122239_create_ict_property_users_table', 18),
(39, '2022_08_12_122731_create_eng_college_finances_table', 18),
(40, '2022_08_12_123639_create_researcher_lists_table', 19),
(41, '2022_08_12_124249_create_general_service_users_table', 20),
(42, '2022_08_12_124432_create_anti_corruption_users_table', 20),
(43, '2022_08_12_134418_create_anti_corruption_users_table', 21),
(44, '2022_08_12_141447_create_clearance_students_table', 22),
(45, '2022_08_12_141521_create_clearance_staffs_table', 22),
(46, '2022_08_12_175128_create_cashier_users_table', 22),
(47, '2022_08_12_192702_create_library_checkouts_table', 23),
(48, '2022_08_13_042136_create_clearance_staffs_table', 24);

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
(3, '00343', 'HAGOS	FISAHA', 'Male', 'Engineering', 'Electrical Engineering', 'Ahmed Mehamedyesuf', '2022-08-05 12:06:47', '2022-08-05 12:06:47'),
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

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_checkouts`
--

CREATE TABLE `property_checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` double(8,2) NOT NULL,
  `receipt_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rcpt_issued_date` date NOT NULL,
  `itemStatus` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

INSERT INTO `regular_studs` (`id`, `ID_no`, `name`, `gender`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(4, '00326', 'DANIAL MEBRAHTU', 'Male', 2, 'Computational', 'Mathematics', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(5, '00359', 'ABRHAM GIRMAY', 'Male', 3, 'Agriculture', 'Horticulture', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(6, '00378', 'Kiflom Kidanemariam', 'Male', 3, 'Agriculture', 'Plant Science', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(7, '00383', 'BIRHANU GADISA', 'Male', 4, 'Computing', 'Information Technology', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(8, '00393', 'ROBEL MELAKE', 'Male', 5, 'Engineering', 'Chemical Engineering', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(9, '00397', 'Askeberew	Agegnehu', 'Male', 4, 'Social-Science', 'History', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(10, '00417', 'JEMAL MEHAMED', 'Male', 4, 'Computing', 'Information System', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(11, '00419', 'WONDIYFRAW ALEMIE', 'Male', 5, 'Engineering', 'Industrial Engineering', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(12, '00422', 'DESTAW GEDAMU', 'Male', 2, 'Business', 'Economics', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(13, '00424', 'GETNET GIRMA', 'Male', 1, 'Freshman', 'Social Freshman', 'Dismissed', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(14, '00427', 'YENEW TAMIR', 'Male', 2, 'Business', 'Logistics', 'On-Class', '2022-08-07 18:43:33', '2022-08-07 18:43:33'),
(1, '00573', 'TADESSE MUNYE', 'Male', 3, 'Engineering', 'CoTM Engineering', 'On-Class', '2022-08-05 16:12:12', '2022-08-05 16:12:12'),
(2, '00578', 'KASSAHUN MENGIE', 'Female', 4, 'Computing', 'Software Engineering', 'On-Class', '2022-08-05 16:13:03', '2022-08-05 16:13:03'),
(17, '00663', 'ABRHAM BEKELE', 'Male', 4, 'Computing', 'Computer Science', 'On-Class', '2022-08-10 23:06:54', '2022-08-10 23:06:54'),
(15, '01129', 'HAFTOM TEKLAY', 'Male', 1, 'Freshman', 'Natural Freshman', 'Dismissed', '2022-08-07 18:43:33', '2022-08-07 18:43:33');

-- --------------------------------------------------------

--
-- Table structure for table `researcher_lists`
--

CREATE TABLE `researcher_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `ID_no`, `name`, `gender`, `program`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(1, '00573', 'TADESSE MUNYE', 'Male', 'Extension', 3, 'Engineering', 'CoTM Engineering', 'Dismissed', '2022-08-05', '2022-08-05'),
(2, '00578', 'KASSAHUN MENGIE', 'Male', 'Regular', 4, 'Computing', 'Software Engineering', 'On-Class', '2022-08-05', '2022-08-05'),
(4, '00326', 'DANIAL MEBRAHTU', 'Male', 'Regular', 2, 'Computational', 'Mathematics', 'On-Class', '2022-08-07', '2022-08-07'),
(5, '00359', 'ABRHAM GIRMAY', 'Male', 'Regular', 3, 'Agriculture', 'Horticulture', 'On-Class', '2022-08-07', '2022-08-07'),
(6, '00378', 'Kiflom Kidanemariam', 'Male', 'Regular', 3, 'Agriculture', 'Plant Science', 'On-Class', '2022-08-07', '2022-08-07'),
(7, '00383', 'BIRHANU GADISA', 'Male', 'Regular', 4, 'Computing', 'Information Technology', 'On-Class', '2022-08-07', '2022-08-07'),
(8, '00393', 'ROBEL MELAKE', 'Male', 'Regular', 5, 'Engineering', 'Chemical Engineering', 'On-Class', '2022-08-07', '2022-08-07'),
(9, '00397', 'Askeberew	Agegnehu', 'Male', 'Regular', 4, 'Social-Science', 'History', 'On-Class', '2022-08-07', '2022-08-07'),
(10, '00417', 'JEMAL MEHAMED', 'Male', 'Regular', 4, 'Computing', 'Information System', 'On-Class', '2022-08-07', '2022-08-07'),
(12, '00422', 'DESTAW GEDAMU', 'Male', 'Regular', 2, 'Business', 'Economics', 'On-Class', '2022-08-07', '2022-08-07'),
(13, '00424', 'GETNET GIRMA', 'Male', 'Regular', 1, 'Freshman', 'Social Freshman', 'On-Class', '2022-08-07', '2022-08-07'),
(14, '00427', 'YENEW TAMIR', 'Male', 'Regular', 2, 'Business', 'Logistics', 'On-Class', '2022-08-07', '2022-08-07'),
(15, '01129', 'HAFTOM TEKLAY', 'Male', 'Regular', 1, 'Freshman', 'Natural Freshman', 'On-Class', '2022-08-07', '2022-08-07'),
(16, '00578', 'KASSAHUN MENGIE', 'Male', 'Extension', 4, 'Computing', 'Software Engineering', 'Dismissed', '2022-08-07', '2022-08-07'),
(17, '00808', 'ATEFRACHEW SEYFU', 'Male', 'Regular', 2, 'Business', 'Management', 'On-Class', '2022-08-07', '2022-08-07'),
(18, '00981', 'WENDU KEMAL', 'Male', 'Extension', 3, 'Agriculture', 'Animal  Science', 'Dismissed', '2022-08-07', '2022-08-07'),
(19, '01309', 'BELETE BELACHEW', 'Male', 'Extension', 1, 'Freshman', 'Social Freshman', 'Dismissed', '2022-08-07', '2022-08-07'),
(20, '02157', 'MELKAMU DERSO', 'Male', 'Extension', 3, 'Social-Science', 'Civics', 'Dismissed', '2022-08-07', '2022-08-07'),
(21, '02220', 'SILESH ALAMIR', 'Male', 'Extension', 2, 'Computational', 'Physics', 'Dismissed', '2022-08-07', '2022-08-07'),
(22, '00663', 'ABRHAM BEKELE', 'Male', 'Regular', 4, 'Computing', 'Computer Science', 'On-Class', '2022-08-07', '2022-08-07'),
(23, '00692', 'BIRHANU NIGUSE', 'Male', 'Distance', 3, 'Law', 'Law', 'On-Class', '2022-08-07', '2022-08-07'),
(24, '00857', 'Bzuayehu Asegedew', 'Male', 'Distance', 2, 'Business', 'Acounting', 'On-Class', '2022-08-07', '2022-08-07'),
(25, '00911', 'NIBRET AWOKE', 'Male', 'Distance', 3, 'Agriculture', 'Agriculture Economics', 'On-Class', '2022-08-07', '2022-08-07'),
(26, '00988', 'GELENA GEZMU', 'Male', 'Distance', 2, 'Social-Science', 'English', 'On-Class', '2022-08-07', '2022-08-07'),
(27, '00441', 'ABEBAW HAYMANOT', 'Male', 'Distance', 3, 'Computational', 'Physics', 'Dismissed', '2022-08-07', '2022-08-07');

-- --------------------------------------------------------

--
-- Table structure for table `stud_residences`
--

CREATE TABLE `stud_residences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `block` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dorm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bed` int(11) DEFAULT NULL,
  `matterss` int(11) DEFAULT NULL,
  `pillow` int(11) DEFAULT NULL,
  `table` int(11) DEFAULT NULL,
  `chairs` int(11) DEFAULT NULL,
  `key` int(11) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_by` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `CustomerName` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `PostalCode` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `CustomerID` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`id`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`, `CustomerID`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'adama', 'adama', '0001', 'ethi', '0012', NULL, NULL),
(2, 'mehamed', 'adama', 'adama', '0001', 'ethi', '0012', NULL, NULL),
(3, 'yusuf', 'adma', 'adama', '0015', 'bthi', '0022', NULL, NULL),
(4, 'mehed', 'adma', 'adaa', '4001', 'cthi', '0032', NULL, NULL),
(5, 'memed', 'adaa', 'adma', '0401', 'dthi', '0042', NULL, NULL),
(6, 'mhamed', 'adam', 'aama', '0015', 'athi', '0052', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ID_no` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `ID_no`, `name`, `gender`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
(1, '00464', 'ANDUALEM ENYEW', 'Male', 'Computing', 'Information Technology', 'On-work', '2022-08-08', '2022-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_logins`
--

INSERT INTO `user_logins` (`id`, `ID_no`, `name`, `email`, `password`, `role`, `add_by`, `created_at`, `updated_at`) VALUES
(1, '00000', 'Ahmed Mehamedyesuf', 'mehamedseid001@gmail.com', '1234ahm', 'Admin', 'Ahmed Mehamedyesuf', '2022-08-05', '2022-08-05'),
(35, '00002', 'testHRM', 'testHRM@gmail.com', '1234', 'HRM', 'Ahmed Mehamedyesuf', '2022-08-08', '2022-08-08'),
(38, '00003', 'test library', 'testLibrary@gmail.com', '1234', 'Library', 'Ahmed Mehamedyesuf', '2022-08-08', '2022-08-08'),
(36, '00004', 'testRegistrar', 'testRegistrar@gmail.com', '1234', 'Registrar', 'Ahmed Mehamedyesuf', '2022-08-08', '2022-08-08'),
(37, '00005', 'testDining', 'testDining@gmail.com', '1234', 'Dining', 'Ahmed Mehamedyesuf', '2022-08-08', '2022-08-08'),
(3, '00343', 'HAGOS	FISAHA', 'fisahahagos@gmail.com', '1234hag', 'Department Head', 'Ahmed Mehamedyesuf', '2022-08-05', '2022-08-05'),
(90, '00383', 'BIRHANU GADISA', 'gadisa@gmail.com', '1234bir', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(91, '00393', 'ROBEL MELAKE', 'melake@gmail.com', '1234rob', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(92, '00397', 'Askeberew	Agegnehu', 'agegnehu@gmail.com', '1234ask', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(93, '00417', 'JEMAL MEHAMED', 'mehamedjemal@gmail.com', '1234jem', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(94, '00422', 'DESTAW GEDAMU', 'gedamu@gmail.com', '1234des', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(95, '00424', 'GETNET GIRMA', 'girma@gmail.com', '1234get', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(96, '00427', 'YENEW TAMIR', 'tamir@gmail.com', '1234yen', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(109, '00441', 'ABEBAW HAYMANOT', 'haymanot@gmail.com', '1234abe', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(39, '0045', 'ahmed mehamed', 'mehamed@gmail.com', '1234', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(110, '00464', 'ANDUALEM ENYEW', 'enyew@gmail.com', '1234and', 'User', 'Ahmed Mehamedyesuf', '2022-08-13', '2022-08-13'),
(2, '00513', 'MARU WUBENEH', 'wubenehmaru@gmail.com', '1234mar', 'Registrar', 'Ahmed Mehamedyesuf', '2022-08-05', '2022-08-05'),
(5, '00519', 'GIRMA	ANIMUT', 'animut@gmail.com', '1234gir', 'Library', 'Ahmed Mehamedyesuf', '2022-08-06', '2022-08-06'),
(8, '00529', 'YENESEW	MULUNEH', 'muluneh@gmail.com', '1234yen', 'StudResidence', 'Ahmed Mehamedyesuf', '2022-08-06', '2022-08-06'),
(9, '00530', 'YIHUN	YIMENU', 'yimenu@gmail.com', '1234yih', 'Dining', 'Ahmed Mehamedyesuf', '2022-08-06', '2022-08-06'),
(10, '00561', 'WENDMAYEWU	ASMARE', 'asmare@gmail.com', '1234web', 'EngCollege-Finance', 'Ahmed Mehamedyesuf', '2022-08-06', '2022-08-06'),
(11, '00563', 'BEAKAL MITIKU', 'mitiku@gmail.com', '1234bea', 'HRM', 'MARU WUBENEH', '2022-08-06', '2022-08-06'),
(27, '00567', 'KIDANU	ADERA', 'adera@gmail.com', '1234kid', 'Anti-Corruption', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(4, '00570', 'MULUKEN	JEMERE', 'jemeremuluken@gmail.com', '1234mul', 'Department-Head', 'Ahmed Mehamedyesuf', '2022-08-06', '2022-08-06'),
(98, '00578', 'KASSAHUN MENGIE', 'mengie@gmail.com', '1234kas', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(28, '00605', 'DEGNET	GONCHE', 'gonchie@gmail.com', '1234deg', 'Cashier', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(29, '00607', 'BINIAM	EMEYE', 'emeye@gmail.com', '1234bin', 'Finance', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(30, '00611', 'GURSHA	BELETF', 'beletf@gmail.com', '1234gur', 'ICT-Property', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(31, '00635', 'ASEBELIGN	CHEBUD', 'chebud@gmail.com', '1234ase', 'Research', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(32, '00641', 'DEJEN	KEBEDE', 'kebede@gmail.com', '1234dej', 'General-Service', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(33, '00654', 'GETINET	ZEWUDIE', 'zewudie@gmail.com', '1234get', 'Property-Office', 'Ahmed Mehamedyesuf', '2022-08-07', '2022-08-07'),
(104, '00663', 'ABRHAM BEKELE', 'bekele@gmail.com', '1234abr', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(105, '00692', 'BIRHANU NIGUSE', 'niguse@gmail.com', '1234bir', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(99, '00808', 'ATEFRACHEW SEYFU', 'seyfu@gmail.com', '123ate4', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(106, '00857', 'Bzuayehu Asegedew', 'asegedew@gmail.com', '1234bzu', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(107, '00911', 'NIBRET AWOKE', 'awoke@gmail.com', '1234nib', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(100, '00981', 'WENDU KEMAL', 'kemal@gmail.com', '1234wen', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(108, '00988', 'GELENA GEZMU', 'gezmu@gmail.com', '1234gel', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(97, '01129', 'HAFTOM TEKLAY', 'teklay@gmail.com', '1234haf', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(101, '01309', 'BELETE BELACHEW', 'belachew@gmail.com', '1234bel', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(102, '02157', 'MELKAMU DERSO', 'derso@gmail.com', '1234mel', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11'),
(103, '02220', 'SILESH ALAMIR', 'alamir@gmail.com', '1234sil', 'User', 'Ahmed Mehamedyesuf', '2022-08-11', '2022-08-11');

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
-- Indexes for table `anti_corruption_users`
--
ALTER TABLE `anti_corruption_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier_users`
--
ALTER TABLE `cashier_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance_regulars`
--
ALTER TABLE `clearance_regulars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance_staffs`
--
ALTER TABLE `clearance_staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clearance_students`
--
ALTER TABLE `clearance_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_items`
--
ALTER TABLE `department_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dining_non_cafes`
--
ALTER TABLE `dining_non_cafes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `distance_studs`
--
ALTER TABLE `distance_studs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `distance_studs_id_no_unique` (`ID_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `ID_no` (`ID_no`);

--
-- Indexes for table `eng_college_finances`
--
ALTER TABLE `eng_college_finances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `eng_college_finances_id_no_unique` (`ID_no`);

--
-- Indexes for table `extension_studs`
--
ALTER TABLE `extension_studs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `extension_studs_id_no_unique` (`ID_no`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `finance_users`
--
ALTER TABLE `finance_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `finance_users_id_no_unique` (`ID_no`);

--
-- Indexes for table `general_service_users`
--
ALTER TABLE `general_service_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ict_property_users`
--
ALTER TABLE `ict_property_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_checkouts`
--
ALTER TABLE `library_checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_users`
--
ALTER TABLE `library_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officers`
--
ALTER TABLE `officers`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `officers_id_no_unique` (`ID_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `property_checkouts`
--
ALTER TABLE `property_checkouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regular_studs`
--
ALTER TABLE `regular_studs`
  ADD PRIMARY KEY (`ID_no`),
  ADD UNIQUE KEY `regular_studs_id_no_unique` (`ID_no`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `researcher_lists`
--
ALTER TABLE `researcher_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stud_residences`
--
ALTER TABLE `stud_residences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_id_no_unique` (`ID_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `admin_staff`
--
ALTER TABLE `admin_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `anti_corruption_users`
--
ALTER TABLE `anti_corruption_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cashier_users`
--
ALTER TABLE `cashier_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clearance_regulars`
--
ALTER TABLE `clearance_regulars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clearance_staffs`
--
ALTER TABLE `clearance_staffs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clearance_students`
--
ALTER TABLE `clearance_students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `department_items`
--
ALTER TABLE `department_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dining_non_cafes`
--
ALTER TABLE `dining_non_cafes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `distance_studs`
--
ALTER TABLE `distance_studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `eng_college_finances`
--
ALTER TABLE `eng_college_finances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `extension_studs`
--
ALTER TABLE `extension_studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `finance_users`
--
ALTER TABLE `finance_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_service_users`
--
ALTER TABLE `general_service_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ict_property_users`
--
ALTER TABLE `ict_property_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_checkouts`
--
ALTER TABLE `library_checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_users`
--
ALTER TABLE `library_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `officers`
--
ALTER TABLE `officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_checkouts`
--
ALTER TABLE `property_checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regular_studs`
--
ALTER TABLE `regular_studs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `researcher_lists`
--
ALTER TABLE `researcher_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `stud_residences`
--
ALTER TABLE `stud_residences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_logins`
--
ALTER TABLE `user_logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
