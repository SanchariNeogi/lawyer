-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 08:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_headding` varchar(255) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `blog_desc` text DEFAULT NULL,
  `post_date` date DEFAULT NULL,
  `status` enum('0','1') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_name`, `blog_headding`, `images`, `blog_desc`, `post_date`, `status`) VALUES
(19, 'Best Education Law And Training', 'Best Education Law And Training', 'blog_19.jpg', '<p><span style=\"color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</span></p>', '2022-11-24', '1'),
(20, 'Flexible Working Hours', 'Flexible Working Hours', 'blog_20.jpg', '<p>&nbsp;<span style=\"color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will...</span></p>', '2022-11-24', '1'),
(21, 'The Top Law Students', 'The Top Law Students', 'blog_21.jpg', '<p>&nbsp;<span style=\"color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 15px;\">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will</span></p>', '2022-11-24', '1');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(10) NOT NULL,
  `session_token` varchar(255) NOT NULL,
  `session_string` varchar(255) NOT NULL,
  `cookies_data` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL,
  `userId` int(10) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `session_token`, `session_string`, `cookies_data`, `status`, `userId`, `create_at`) VALUES
(7, 'DJHJHHHAJJ9JKK73F7AJS9SKK6ADDH47K6HDH6A6DJAAAH7VAH', 'JDKJFG67A6D8DJ42J8DFHAJH8H667AKH6J26KAFJAFD4AAD9HA', NULL, '1', 0, '2022-11-25 13:36:53'),
(11, 'DAAJAAA54J5A36H6SH8D9FDJAHJ9JJ277KHVD6A7FA9KDHJSD6', '66FJDA56S4KKAD44JHH7AJ3AJ478FJJJAVK968HAJ66HAHD6KJ', NULL, '1', 1, '2023-03-02 11:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(10) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `country` int(10) NOT NULL,
  `state` int(10) NOT NULL,
  `city` int(10) NOT NULL,
  `role` enum('1','2','3','4','5') NOT NULL,
  `status` enum('0','1') NOT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `profile_name`, `username`, `password`, `email`, `mobile_no`, `country`, `state`, `city`, `role`, `status`, `create_at`) VALUES
(1, 'Athar ali', 'admin', '123456', 'ali.athar24@gmail.com', '', 0, 0, 0, '1', '1', '2022-07-12 10:24:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
