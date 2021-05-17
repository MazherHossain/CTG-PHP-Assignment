-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 11:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `trash` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` varchar(50) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `password`, `photo`, `status`, `trash`, `created_at`, `updated_at`) VALUES
(6, 'Mazher', 'mazher_hossain', 'hossainmazher@gmail.com', '01703723146', '$2y$10$jXUwEZvsgvzOg1pB.ftRLONwXZJrdd7WTcpkQsmkpa.GyHhH7oV7m', '437d886873ced9ff61d80c99fb1b46dc.jpg', 1, 0, '2021-05-13 06:46:55', NULL),
(7, 'Monica', 'monica_b', 'monica@gmail.com', '01703723147', '$2y$10$DcEy1VsT8nrGDvui1sCCRuNklSQZZFSghbkpg7273hEtu0zkPXHkq', '45447644ccee06c48808782d99ce5d96.jpg', 1, 0, '2021-05-18 03:31:45', NULL),
(8, 'Batman', 'batman_g', 'batman@gmail.com', '01703723148', '$2y$10$WfdsuUnO4gzCYrIP6C1sKesf9YRKyyaVkr/SasQyJuOA.EeQs3LdS', '7b41a691be5ba6e5db09ec2c7463588c.jpg', 1, 0, '2021-05-18 03:32:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
