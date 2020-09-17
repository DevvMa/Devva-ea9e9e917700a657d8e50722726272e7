-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 07:52 AM
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
-- Database: `mkm`
--

-- --------------------------------------------------------

--
-- Table structure for table `mkm_loginlog`
--

CREATE TABLE `mkm_loginlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mkm_loginlog`
--

INSERT INTO `mkm_loginlog` (`id`, `userId`, `status`, `time`) VALUES
(1, 6, 1, '00:00:00'),
(2, 6, 1, '00:00:00'),
(3, 6, 1, '06:25:04'),
(4, 6, 1, '11:26:48'),
(5, 6, 1, '11:35:48'),
(6, 6, 1, '11:36:40'),
(7, 6, 1, '11:39:17'),
(8, 6, 1, '11:47:14'),
(9, 6, 1, '12:30:10'),
(10, 6, 1, '12:30:12'),
(11, 6, 1, '12:30:15'),
(12, 6, 1, '12:31:34'),
(13, 6, 1, '12:31:35'),
(14, 6, 1, '12:31:37'),
(15, 6, 1, '12:32:00'),
(16, 6, 1, '12:33:08'),
(17, 6, 1, '12:33:10'),
(18, 6, 1, '12:33:48'),
(19, 6, 1, '12:33:50'),
(20, 6, 1, '12:33:51'),
(21, 6, 1, '12:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `mkm_user`
--

CREATE TABLE `mkm_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mkm_user`
--

INSERT INTO `mkm_user` (`id`, `username`, `password`) VALUES
(6, 'jon', '$2y$10$69eR177nGw5YQc1g7rI59uGcIhVhpUIg5KCYT4z2HJuJWL9NWejti'),
(7, 'jin', '$2y$10$LG7fTkiVW8GfvObF96Pw7.JALCycSKTo0Dgj/XnsZZ8.CEb7Ijnr2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mkm_loginlog`
--
ALTER TABLE `mkm_loginlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mkm_user`
--
ALTER TABLE `mkm_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mkm_loginlog`
--
ALTER TABLE `mkm_loginlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mkm_user`
--
ALTER TABLE `mkm_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
