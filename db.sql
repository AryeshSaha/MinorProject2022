-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 08:04 AM
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
  `s/n` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
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
  `crimg` varchar(255) NOT NULL,
  `crnaam` varchar(50) NOT NULL,
  `dur` bigint(20) NOT NULL,
  `amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`crid`, `crimg`, `crnaam`, `dur`, `amt`) VALUES
(1, 'https://domf5oio6qrcr.cloudfront.net/medialibrary/7728/f9c50076-c282-4c08-a146-65611f579eae16207267394332.jpg', 'Hormone Health and Testosterone Levels', 28800, 1349),
(2, 'https://coursesxpert.com/wp-content/uploads/2020/10/Acupuncture-Courses.jpg', 'Medical Acupuncture treatment and Training', 14400, 1499),
(3, 'https://assets.thehansindia.com/h-upload/2019/10/05/223433-hormones.jpg', 'The dopamine cure- hack to happiness and motivatio', 36000, 799),
(4, 'https://thecaregivercafe.files.wordpress.com/2021/03/menopause-pitches-signs-600x400-1.jpg', 'Menopause master class course', 81357, 899),
(5, 'https://www.coursejoiner.com/wp-content/uploads/2020/09/Fundamentals-of-Medical-Neuroscience-Part-1.jpg', 'Fundamentals of Medical Neuroscience', 52000, 799),
(7, 'https://study.com/cimages/course-image/biology-107l-clinical-microbiology-w-lab_4170562_large.jpeg', 'Comprehensive Medical Microbiology course', 123456, 1299),
(8, 'http://static1.squarespace.com/static/5d3ebea19ecd3a00019c88d2/t/5fa57dcaa2b0a5703a7efc91/1604681169035/bonhealth-fb-peri-menopausal2.jpg?format=1500w', 'Perimenopause master class course ', 541200, 1199),
(9, 'https://www.psypost.org/wp-content/uploads/2019/11/Psychologist-having-psychotherapy-counseling-session-with-her-patient.jpg', 'Stress & Anxiety Management: Psychology', 849474, 2999),
(10, 'https://i.ytimg.com/vi/dcsc_EsJmsA/maxresdefault.jpg', 'Introduction to Personality Psychology', 456545, 1449),
(11, 'https://www.gep.com/prod/s3fs-public/blog-images/inflation-impact-on-the-pharmaceutical-industry-1920x1274.jpg', 'Industrial Pharmacy', 123456, 499),
(12, 'https://www.yogajournal.com/wp-content/uploads/2007/08/food-yogi-chefs.jpg', 'Diploma in Yogic Nutrition', 123456, 499);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `naam` text NOT NULL,
  `email` varchar(255) NOT NULL,
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
  ADD PRIMARY KEY (`s/n`),
  ADD KEY `Foreign_Key1` (`email`),
  ADD KEY `Foreign_Key2` (`crid`);

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
  ALTER TABLE `courses` ADD FULLTEXT KEY `crnaam` (`crnaam`);
  ALTER TABLE `courses` ADD FULLTEXT KEY `crnaam_2` (`crnaam`);

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
  MODIFY `s/n` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candi_course`
--
ALTER TABLE `candi_course`
  ADD CONSTRAINT `Foreign_Key1` FOREIGN KEY (`email`) REFERENCES `details` (`email`),
  ADD CONSTRAINT `Foreign_Key2` FOREIGN KEY (`crid`) REFERENCES `courses` (`crid`);

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `Foreign_Key` FOREIGN KEY (`email`) REFERENCES `login` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
