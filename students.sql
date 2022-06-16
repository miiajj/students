-- phpMyAdmin SQL Dump
-- version 5.2.0-rc1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2022 at 04:05 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ghtk`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `school_name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `gender` tinyint(1) NOT NULL DEFAULT '0',
  `place_birth` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ethnic` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permanent_residence` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_point_1` tinyint(3) UNSIGNED NOT NULL,
  `total_point_2` tinyint(3) UNSIGNED NOT NULL,
  `total_point_3` tinyint(3) UNSIGNED NOT NULL,
  `total_point_4` tinyint(3) UNSIGNED NOT NULL,
  `total_point_5` tinyint(3) UNSIGNED NOT NULL,
  `total_point_years` tinyint(3) UNSIGNED NOT NULL,
  `priority_point` tinyint(3) UNSIGNED DEFAULT NULL,
  `total_prequalifi_point` tinyint(3) UNSIGNED NOT NULL,
  `note` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`school_name`, `district`, `id`, `class_name`, `name`, `dob`, `gender`, `place_birth`, `ethnic`, `permanent_residence`, `phone`, `total_point_1`, `total_point_2`, `total_point_3`, `total_point_4`, `total_point_5`, `total_point_years`, `priority_point`, `total_prequalifi_point`, `note`, `created_at`, `updated_at`) VALUES
('Dịch Vọng B', 'Cầu Giấy', '01176ANHU', '5A7', 'Đặng Mỹ Kiều Trinh', '2011-10-15', 0, 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494648', 20, 20, 30, 50, 50, 170, NULL, 170, 'Đủ điều kiện dự thi vòng 2', '2022-06-15 08:21:31', '2022-06-15 08:21:31'),
('Dịch Vọng A', 'Cầu Giấy', '06770DRAN', '5A7', 'Đặng Mỹ Kiều Trinh', '2019-10-15', 1, 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0967930264', 20, 20, 30, 50, 50, 170, 5, 175, 'Đủ điều kiện dự thi vòng 2', '2022-06-15 08:21:31', '2022-06-15 08:21:31'),
('Dịch Vọng C', 'Cầu Giấy', '09779DRAN', '5A7', 'Đặng Mỹ Kiều Trinh', '2019-10-15', 1, 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0967930264', 20, 20, 30, 50, 50, 170, 1, 171, 'Đủ điều kiện dự thi vòng 2', '2022-06-15 08:21:31', '2022-06-15 08:21:31'),
('Dịch Vọng A', 'Cầu Giấy', '12379ANAN', '5A7', 'Đặng Mỹ Kiều Trinh', '2011-10-15', 0, 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0976494642', 20, 20, 30, 50, 50, 170, NULL, 170, 'Đủ điều kiện dự thi vòng 2', '2022-06-15 08:21:31', '2022-06-15 08:21:31'),
('Dịch Vọng F', 'Cầu Giấy', '96779DRAN', '5A7', 'Đặng Mỹ Kiều Trinh', '2019-10-15', 1, 'Hà Nội', 'Kinh', 'Tổ 3, Quan Hoa, Cầu Giấy, Hà Nội', '0967930264', 20, 20, 30, 50, 50, 170, 5, 175, 'Đủ điều kiện dự thi vòng 2', '2022-06-15 08:21:31', '2022-06-15 08:21:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
