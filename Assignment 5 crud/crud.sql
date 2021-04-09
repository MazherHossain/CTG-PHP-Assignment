-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 06:06 PM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `email`, `cell`, `username`, `location`, `age`, `gender`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Batman', 'wayne@gmail.com', '01703723146', 'Bruce Wayne', 'Banani', 40, 'Male', '601270e37a2cebb1da53c0aac3e24500.jpg', '', '2021-04-09 21:57:08', '2021-04-09 6:03:06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Active',
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `cell`, `username`, `location`, `age`, `gender`, `dept`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fiha', 'fiha@gmail.com', '01703723146', 'Honufar Fiha', 'Banani', 19, 'Female', 'CSE', '252554be27374af34fd8f008183b2ba3.png', 'Active', '2021-04-09 21:36:49', '2021-04-09 5:40:05'),
(2, 'Supria', 'supria@gmail.com', '01703723147', 'Silviya Suppria', 'Bashundhara', 20, 'Female', 'EEE', '939f1081666a0eba7899022369835416.png', 'Active', '2021-04-09 21:41:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dept` varchar(15) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'active',
  `created_at` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `email`, `cell`, `username`, `location`, `age`, `gender`, `dept`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Mazher', 'hossainmazher@gmail.com', '01703723136', 'mazherhossain', 'Banani', 26, 'Male', 'CSE', '13d0b9953c6efdefd356ec9ded3674f8.jpg', 'active', '2021-04-07 14:31:08', '2021-04-08 10:00:10'),
(18, 'Bill', 'bill@gmail.com', '01703723147', 'Bill Gates', 'Gulshan', 65, 'Male', 'CSE', 'bd5bfcfd49bf4cd1a5f0aa3dd4fcd3a5.jpg', 'active', '2021-04-07 14:37:44', NULL),
(20, 'Mark', 'mark@gmail.com', '01703723148', 'Mark Zuckerberg', 'Mirpur', 36, 'Male', 'CSE', '44d3c1c0c458b426f665f30a4c71bc27.jpg', 'active', '2021-04-07 14:39:52', NULL),
(21, 'Albert', 'albert@yahoo.com', '01703723149', 'Albert Einstein', 'Uttara', 100, 'Male', 'EEE', 'd6c348e9f831e542dcdd8c76c3a46626.jpg', 'active', '2021-04-07 14:48:13', NULL),
(24, 'Monica', 'monica@gmail.com', '01703723151', 'Monica Bellucci', 'Mohammadpur', 56, 'Female', 'BBA', '801ffa3322747cce197d34d4f4b70b01.jpg', 'active', '2021-04-07 15:44:14', '2021-04-09 6:03:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
