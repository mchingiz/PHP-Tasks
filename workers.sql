-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 09:20 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeacademy`
--

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(3) NOT NULL,
  `name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `surname`, `position`, `birthdate`) VALUES
(1, 'sd', 'ds', 'sdasd', '0000-00-00'),
(2, 'sd', 'ds', 'sdasd', '2016-12-12'),
(3, 'Chingiz ', 'Mammadli', 'asdsad', '2014-11-12'),
(4, 'Chingiz', 'Mammadli', 'student', '2016-12-12'),
(5, 'Chingiz', 'Mammad', 'student', '2016-12-12'),
(6, 'Nigar', 'Jafar', 'student', '2016-09-05'),
(7, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(8, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(9, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(10, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(11, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(12, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(13, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(14, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(15, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(16, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(17, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(18, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(19, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(20, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(21, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(22, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(23, 'Nigar', 'Jafarova', 'student', '2016-09-05'),
(24, 'Nigar', 'Jafarova', 'student', '2016-09-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
