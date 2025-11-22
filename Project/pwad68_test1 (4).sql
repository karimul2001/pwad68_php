-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2025 at 08:23 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwad68_test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'karimul Islam', 'karimul.bd501@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pwadstudent`
--

CREATE TABLE `pwadstudent` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pwadstudent`
--

INSERT INTO `pwadstudent` (`id`, `name`, `email`, `phone`) VALUES
(1, 'karimul', 'karimul.bd501@gmail.com', '01791887904'),
(2, 'Tuhin', 'tuhin@gmail.com', '012545454545'),
(3, 'Akash', 'akash@gmail.com', '01807319320'),
(4, 'Sabib', 'sabib@gmail.com', '01745926598');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `employeeID` int(11) NOT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text NOT NULL,
  `birthdate` date DEFAULT NULL,
  `notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`employeeID`, `first_name`, `last_name`, `birthdate`, `notes`) VALUES
(1, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(2, 'Rakib', 'Raz', '2025-11-20', 'i am Rakib'),
(3, 'Fardin', 'Islam', '2025-10-29', 'i am Fardin'),
(4, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(16, 'Atikur', 'Rahamin', '2025-11-20', 'i am Atikur'),
(17, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(18, 'Neloy', 'Ahamed', '2022-01-20', 'i am Neloy'),
(20, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(21, 'Abu', 'Sadik', '2025-11-20', 'i am Sadik'),
(22, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(23, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(25, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(26, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(27, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(29, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(30, 'karimul', 'Islam', '2025-11-20', 'i am Karimul'),
(31, 'Hasibur', 'Rahaman', '2025-11-12', 'I am hasibur');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `pwadstudent`
--
ALTER TABLE `pwadstudent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pwadstudent`
--
ALTER TABLE `pwadstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
