-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 08:51 AM
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID_no`, `name`, `password`, `program`, `year`, `college`, `department`, `status`, `created_at`, `updated_at`) VALUES
('00002', 'testHRM', 'testHRM@gmail.com', '1234', 'HRM', 'Ahmed Mehamedyesuf', '2022-08-08 12:38:26', '2022-08-08 12:38:26'),

INSERT INTO `user_logins` (`ID_no`, `name`, `email`, `password`, `role`, `add_by`) VALUES
('00573', 'TADESSE MUNYE', 'munye@gmail.com', '1234tad', 'User', 'Ahmed Mehamedyesuf'),
('00578', 'KASSAHUN MENGIE', 'mengie@gmail.com', '1234kas', 'User', 'Ahmed Mehamedyesuf'),
('00326', 'DANIAL MEBRAHTU', 'mebrahtu@gmail.com', '1234dan', 'User', 'Ahmed Mehamedyesuf'),
('00359', 'ABRHAM GIRMAY', 'girmay@gmail.com', '1234abr', 'User', 'Ahmed Mehamedyesuf'),
('00378', 'Kiflom Kidanemariam', 'kidanemariam@gmail.com', '1234kif', 'User', 'Ahmed Mehamedyesuf'),
('00383', 'BIRHANU GADISA', 'gadisa@gmail.com', '1234bir', 'User', 'Ahmed Mehamedyesuf'),
('00393', 'ROBEL MELAKE', 'melake@gmail.com', '1234rob', 'User', 'Ahmed Mehamedyesuf'),
('00397', 'Askeberew	Agegnehu', 'agegnehu@gmail.com', '1234ask', 'User', 'Ahmed Mehamedyesuf'),
( '00417', 'JEMAL MEHAMED', 'mehamed@gmail.com', '1234jem', 'User', 'Ahmed Mehamedyesuf'),
( '00422', 'DESTAW GEDAMU', 'gedamu@gmail.com', '1234des', 'User', 'Ahmed Mehamedyesuf'),
( '00424', 'GETNET GIRMA', 'girma@gmail.com', '1234get', 'User', 'Ahmed Mehamedyesuf'),
( '00427', 'YENEW TAMIR', 'tamir@gmail.com', '1234yen', 'User', 'Ahmed Mehamedyesuf'),
( '01129', 'HAFTOM TEKLAY', 'teklay@gmail.com', '1234haf', 'User', 'Ahmed Mehamedyesuf'),
( '00578', 'KASSAHUN MENGIE', 'mengie@gmail.com', '1234kas', 'User', 'Ahmed Mehamedyesuf'),
( '00808', 'ATEFRACHEW SEYFU', 'seyfu@gmail.com', '123ate4', 'User', 'Ahmed Mehamedyesuf'),
( '00981', 'WENDU KEMAL', 'kemal@gmail.com', '1234wen', 'User', 'Ahmed Mehamedyesuf'),
( '01309', 'BELETE BELACHEW', 'belachew@gmail.com', '1234bel', 'User', 'Ahmed Mehamedyesuf'),
( '02157', 'MELKAMU DERSO', 'derso@gmail.com', '1234mel', 'User', 'Ahmed Mehamedyesuf'),
( '02220', 'SILESH ALAMIR', 'alamir@gmail.com', '1234sil', 'User', 'Ahmed Mehamedyesuf'),
( '00663', 'ABRHAM BEKELE', 'bekele@gmail.com', '1234abr', 'User', 'Ahmed Mehamedyesuf'),
( '00692', 'BIRHANU NIGUSE', 'niguse@gmail.com', '1234bir', 'User', 'Ahmed Mehamedyesuf'),
( '00857', 'Bzuayehu Asegedew', 'asegedew@gmail.com', '1234bzu', 'User', 'Ahmed Mehamedyesuf'),
( '00911', 'NIBRET AWOKE', 'awoke@gmail.com', '1234nib', 'User', 'Ahmed Mehamedyesuf'),
( '00988', 'GELENA GEZMU', 'gezmu@gmail.com', '1234gel', 'User', 'Ahmed Mehamedyesuf'),
( '00441', 'ABEBAW HAYMANOT', 'haymanot@gmail.com', '1234abe', 'User', 'Ahmed Mehamedyesuf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
