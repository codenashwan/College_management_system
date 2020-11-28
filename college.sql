-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 04:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `viewpassword` varchar(255) NOT NULL,
  `id_college` int(11) NOT NULL,
  `rule` int(11) NOT NULL,
  `date_of_created_admin` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `viewpassword`, `id_college`, `rule`, `date_of_created_admin`) VALUES
(1, 'nashwan', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', '1234', 1, 1, '2020-01-19 21:09:15'),
(4, 'open', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', '1234', 6, 3, '2020-01-19 22:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `id_college` int(11) NOT NULL,
  `name_college` varchar(255) NOT NULL,
  `date_of_created_college` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id_college`, `name_college`, `date_of_created_college`) VALUES
(1, 'کۆلێژی علوم', '2020-01-17 14:11:32'),
(2, 'کۆلێژی پەروەردە', '2020-01-17 14:58:50'),
(3, 'کۆلێژی ئەندازیاری', '2020-01-17 15:11:44'),
(4, 'کۆلێژی دەرمانسازی', '2020-01-18 07:06:20'),
(5, 'کۆلێژی پزشکی', '2020-01-18 07:07:02'),
(6, 'کۆلێژی زمان', '2020-01-18 07:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_departments` int(11) NOT NULL,
  `id_college` int(11) NOT NULL,
  `name_departments` varchar(255) NOT NULL,
  `stage` int(11) NOT NULL,
  `date_of_created_department` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_departments`, `id_college`, `name_departments`, `stage`, `date_of_created_department`) VALUES
(1, 1, 'کۆمپیوتەر', 4, '2020-01-18 12:36:57'),
(2, 1, 'بیرکاری', 4, '2020-01-18 12:37:00'),
(3, 1, 'کیمیا', 4, '2020-01-18 12:37:02'),
(4, 1, 'فیزیا', 5, '2020-01-18 12:37:05'),
(13, 1, 'بایۆلۆجی', 3, '2020-01-18 13:01:56');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `viewpassword` varchar(255) NOT NULL,
  `id_college` int(11) NOT NULL,
  `id_departments` int(11) NOT NULL,
  `stage` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `date_of_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fullname`, `username`, `password`, `viewpassword`, `id_college`, `id_departments`, `stage`, `class`, `date_of_created`) VALUES
(1, 'عەباس محمد ئەحمد', 'abas', '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457', '1234', 1, 1, 1, 'A', '2020-01-18 21:08:07'),
(6, 'محمد عبدللە محمد', '2023240402', 'a6f5692bc276ab366c11d1048b041b5a3e0cc571ec11067e43bd8da17487acd3', '1881235961', 1, 1, 3, 'A', '2020-01-18 21:08:43'),
(7, 'نەشوان عبدللە محمد', '1359259207', '9698a189636546f53d1c58d688896b72c660ac0522fc35282645724c33816982', '693466122', 1, 1, 4, 'D', '2020-01-18 21:08:46'),
(8, 'مەردان عبدللە محمد', '707788804', 'e5b5bab4186dfbd9908cabe0bcec9538e9cd2730ddb683668b1f98cfdeafb94c', '1590039762', 1, 1, 3, 'B', '2020-01-18 21:07:45'),
(9, 'شنیار عبدللە', '1562916744', 'a89a4e4ffa4cc7e80ea319694ed4f367a18c9fbcbd276760fa8eadf54a22479f', '88756051', 1, 2, 3, 'D', '2020-01-19 20:33:28');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id_subject` int(11) NOT NULL,
  `name_subject` varchar(255) NOT NULL,
  `stage` int(11) NOT NULL,
  `id_college` int(11) NOT NULL,
  `id_departments` int(11) NOT NULL,
  `date_of_created_subject` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id_subject`, `name_subject`, `stage`, `id_college`, `id_departments`, `date_of_created_subject`) VALUES
(1, 'Network', 4, 1, 1, '2020-01-18 15:36:38'),
(2, 'Calculas', 2, 1, 1, '2020-01-18 13:27:26'),
(3, 'OOP', 1, 1, 1, '2020-01-18 13:21:06'),
(4, 'webdesign', 3, 1, 1, '2020-01-18 16:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id`, `code`) VALUES
(1, '8a19de2e756035a3ece48cd01260b89ec36a510d9e18066e64ffc4d379c6e457');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`id_college`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_departments`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `id_college` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id_departments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id_subject` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `superadmin`
--
ALTER TABLE `superadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
