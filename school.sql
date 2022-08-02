-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 05:00 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `username`) VALUES
(1, 'saindanevaishnavi89@gmail.com', '$2y$10$FRAbmxq924Ovfqazc0eao.KM6ddYACMSVnhy9LSp9wdfhjnujcId.', 'Vaishnavi');

-- --------------------------------------------------------

--
-- Table structure for table `co_currs`
--

CREATE TABLE `co_currs` (
  `id` int(10) NOT NULL,
  `stu_id` int(10) NOT NULL,
  `std` int(10) NOT NULL,
  `relay` int(10) NOT NULL,
  `art` int(10) NOT NULL,
  `chess` int(10) NOT NULL,
  `cricket` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `obtained_points` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_currs`
--

INSERT INTO `co_currs` (`id`, `stu_id`, `std`, `relay`, `art`, `chess`, `cricket`, `total`, `obtained_points`) VALUES
(1, 101, 1, 10, 10, 10, 10, 50, 40);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stu_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `std` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `roll` int(10) NOT NULL,
  `login_pass` int(10) NOT NULL,
  `month` int(1) NOT NULL,
  `year` int(10) NOT NULL,
  `present` int(10) NOT NULL,
  `working` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stu_id`, `name`, `std`, `email`, `roll`, `login_pass`, `month`, `year`, `present`, `working`) VALUES
(1, 'Vaishnavi', 1, 'vaish@g', 101, 101, 0, 0, 0, 0),
(2, 'hgu', 2, 'hioiy', 102, 102, 0, 0, 0, 0),
(3, 'abc', 3, 'abc@', 301, 301, 7, 2022, 30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(11) NOT NULL,
  `stu_id` int(10) NOT NULL,
  `std` int(10) NOT NULL,
  `eng` varchar(255) NOT NULL,
  `hin` varchar(255) NOT NULL,
  `mar` int(10) NOT NULL,
  `ss` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `obtained` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `stu_id`, `std`, `eng`, `hin`, `mar`, `ss`, `total`, `obtained`) VALUES
(1, 101, 1, '20', '20', 20, 20, 100, 80),
(2, 102, 2, '20', '20', 20, 20, 20, 80);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `u_name`, `email`, `password`) VALUES
(1, 'Vaishnavi', 'v@gmail', 'v123'),
(2, 'Chetana', 'c@gmail', 'c123'),
(3, 'sir', 'sir@', 's123'),
(4, 'nimish', 'n@gmai', 'n123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `co_currs`
--
ALTER TABLE `co_currs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `co_currs`
--
ALTER TABLE `co_currs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stu_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
