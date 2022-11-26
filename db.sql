-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 08:44 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minor_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `candi_course`
--

CREATE TABLE `candi_course` (
  `sl_no` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `crid` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `crid` int(11) NOT NULL,
  `crnaam` varchar(50) NOT NULL,
  `dur` bigint(20) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crid`, `crnaam`, `dur`, `amt`) VALUES
(1, 'javascript', 230400, 1349),
(2, 'php', 302400, 1499),
(3, 'html', 36000, 799),
(4, 'css', 81357, 899),
(5, 'mysql', 52000, 799);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `email` varchar(50) NOT NULL,
  `naam` text NOT NULL,
  `fh_naam` text NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `phn` int(11) NOT NULL,
  `wap` int(11) NOT NULL,
  `edu` varchar(255) NOT NULL,
  `aop` varchar(255) NOT NULL,
  `med_regno` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `dp` varchar(255) NOT NULL,
  `usign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candi_course`
--
ALTER TABLE `candi_course`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `Foregen_course` (`crid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`crid`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candi_course`
--
ALTER TABLE `candi_course`
  MODIFY `sl_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candi_course`
--
ALTER TABLE `candi_course`
  ADD CONSTRAINT `Foregen_course` FOREIGN KEY (`crid`) REFERENCES `courses` (`crid`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `Email` FOREIGN KEY (`email`) REFERENCES `login` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Add Image of the courses for table `courses`
--
ALTER TABLE `courses` ADD `crimg` VARCHAR(255) NOT NULL AFTER `crid`;