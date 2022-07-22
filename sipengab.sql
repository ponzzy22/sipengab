-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2022 at 05:19 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sipengab`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir_apl2`
--

CREATE TABLE `formulir_apl2` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `unikom_id` bigint(20) DEFAULT NULL,
  `unikom_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `asesmen_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skema_id` bigint(20) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `data_register_id` bigint(20) DEFAULT NULL,
  `kode` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formulir_apl2`
--

INSERT INTO `formulir_apl2` (`id`, `kriteria`, `user_id`, `unikom_id`, `unikom_name`, `asesmen_name`, `skema_name`, `skema_id`, `image`, `status`, `created_at`, `updated_at`, `data_register_id`, `kode`) VALUES
(241, 'sdasd', 5, 42, 'Melakukan komunikasi dengan pihak IKM', 'sdasd', 'Konsultan Manajemen Mutu', 14, NULL, 'Tidak Kompeten', '2022-05-05 15:31:43', '2022-05-05 15:31:43', 514, 15),
(242, '<ol><li>dasdasdasdasdasdas</li><li>sdasdasdasdasdasd</li><li>asdasdasdasdasdasdasdasd</li><li>asdasdadsdas<br></li></ol>', 5, 43, 'Melakukan komunikasi dengan pihak IKM', 'asdasdasd', 'Konsultan Manajemen Mutu', 14, 'public/uploads/1651789910ceb99d0f22759041b43f10a726f0a392.jpg', 'Kompeten', '2022-05-05 15:31:43', '2022-05-05 15:31:50', 514, 25),
(243, '<ol><li>dfsdfsdfsdfsdfsdfsdfsdf</li><li>3423423423423423</li><li>34234234234234234</li><li>34234234234234</li><li>234234234234</li><li>234234234</li><li>234234<br></li></ol>', 5, 44, 'Melakukan komunikasi dengan pihak IKM', '23123123', 'Konsultan Manajemen Mutu', 14, NULL, 'Tidak Kompeten', '2022-05-05 15:31:43', '2022-05-05 15:31:43', 514, 35);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_frontdesk_users`
--

CREATE TABLE `tbl_frontdesk_users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_holidays`
--

CREATE TABLE `tbl_holidays` (
  `id` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_holidays`
--

INSERT INTO `tbl_holidays` (`id`, `date`, `reason`, `bdate`) VALUES
(5, '2021-12-22', 'laasfkhjasdfjkasdfd', '2021-12-25 03:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservations`
--

CREATE TABLE `tbl_reservations` (
  `id` int(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `ucount` int(10) NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `comments` varchar(250) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reservations`
--

INSERT INTO `tbl_reservations` (`id`, `uid`, `ucount`, `rdate`, `status`, `comments`, `bdate`) VALUES
(7, 16, 30, '2021-12-16 12:00', 'PENDING', '', '2021-12-15 20:17:02'),
(8, 15, 56, '2021-12-20 21:00', 'APPROVED', '', '2021-12-25 03:44:16'),
(9, 18, 45, '2022-01-01 12:00', 'APPROVED', '', '2022-01-04 19:08:44'),
(10, 21, 10, '2022-01-10 20:00', 'APPROVED', '', '2022-01-07 10:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bdate` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `pwd`, `address`, `phone`, `email`, `type`, `status`, `bdate`) VALUES
(15, 'admin', 'admin', 'some addresses', '11223344', 'myemail@gmail.com', 'admin', 'active', '2016-12-20 10:00:08'),
(18, 'testdosen', 'HHWPYOFY', 'fgjfghjhjgfhjgh', '5456456345654', 'jopi22@gmail.com', 'teacher', 'active', '2021-12-25 03:37:39'),
(19, 'testmahasiswa', 'V8SD6DI8', 'ghjghjghjghj', '56456456', 'ponzzy22@gmail.com', 'student', 'active', '2021-12-25 03:41:37'),
(20, 'test123', '2TGIP6VK', 'rytrytrydfghfythty', '5645656', 'teamrazer5fdfg5@gmail.com', 'student', 'active', '2022-01-07 10:16:20'),
(21, 'test222', 'TOZS9QYE', 'ghtyhjyjytjtyjtyj', '67575675', 'jopi@gmail.com', 'teacher', 'active', '2022-01-07 10:19:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir_apl2`
--
ALTER TABLE `formulir_apl2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `xnxxes_data_register_id_foreign` (`data_register_id`);

--
-- Indexes for table `tbl_frontdesk_users`
--
ALTER TABLE `tbl_frontdesk_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir_apl2`
--
ALTER TABLE `formulir_apl2`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=244;

--
-- AUTO_INCREMENT for table `tbl_frontdesk_users`
--
ALTER TABLE `tbl_frontdesk_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_holidays`
--
ALTER TABLE `tbl_holidays`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_reservations`
--
ALTER TABLE `tbl_reservations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
