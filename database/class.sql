-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2020 at 10:46 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `adminid` char(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `name`, `adminid`, `password`) VALUES
(4, 'Karimul Hasan', 'khp53', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `class_venue`
--

CREATE TABLE `class_venue` (
  `id` int(100) NOT NULL,
  `cno` int(250) NOT NULL,
  `courses` varchar(250) NOT NULL,
  `venue` varchar(250) NOT NULL,
  `floor` int(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_venue`
--

INSERT INTO `class_venue` (`id`, `cno`, `courses`, `venue`, `floor`, `img`) VALUES
(1, 1, 'Application Development-1', 'LAB 2', 2, 'appdev.gif'),
(2, 2, 'Software Quality Assurence-2', 'MPK 6', 5, 'sqa-2.gif'),
(3, 3, 'Computational Inteligence-7', 'BK 3', 1, 'ci-7.gif'),
(4, 4, 'Web Technology-8', 'MPK 10', 5, 'web-8.gif'),
(5, 5, 'Advanced Academic English-47', 'BK 1', 1, 'eng-47.gif'),
(6, 6, 'Youth Development-1', 'BK 5', 1, 'yd-1.gif'),
(7, 7, 'Software Quality Assurence-6', 'MPK 8', 5, 'sqa-6.gif'),
(8, 8, 'Professional Academic English-29', 'BK 6', 1, 'peng--29.gif'),
(9, 9, 'Malay Language-40', 'BK 2', 1, 'malay-40.gif'),
(10, 10, 'Real Time Software Engineering-3', 'MPK2', 5, 'rse-3.gif'),
(11, 11, 'Digital logic-1', 'BK 3', 1, 'dl-1.gif');

-- --------------------------------------------------------

--
-- Table structure for table `courses_offered`
--

CREATE TABLE `courses_offered` (
  `time` int(11) NOT NULL,
  `course_o1` char(100) NOT NULL,
  `course_o2` char(100) NOT NULL,
  `course_o3` char(100) NOT NULL,
  `course_o4` char(100) NOT NULL,
  `course_o5` char(100) NOT NULL,
  `course_o6` char(100) NOT NULL,
  `course_o7` char(100) NOT NULL,
  `course_o8` char(100) NOT NULL,
  `course_o9` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_offered`
--

INSERT INTO `courses_offered` (`time`, `course_o1`, `course_o2`, `course_o3`, `course_o4`, `course_o5`, `course_o6`, `course_o7`, `course_o8`, `course_o9`) VALUES
(2, 'Application Development-1', 'Software Quality Assurence-2', 'Computational Inteligence-7', 'Software Quality Assurence-6', 'English-2', 'Real Time Software Engineering-3', 'Web Programming-2', 'Software Enginnering-7', 'Malaysian Studies-2'),
(3, 'Application Development-1', 'Software Quality Assurence-2', 'Computational Inteligence-7', 'Software Quality Assurence-6', 'Web Technology-8', 'Real Time Software Engineering-3', 'Web Programming-2', 'Software Enginnering-7', 'Malaysian Studies-2'),
(4, 'Application Development-1', 'Advanced Academic English-47', 'Youth Development-1', 'Software Quality Assurence-6', 'Web Technology-8', 'Professional Academic English-29', 'Digital Logic-1', 'Software Enginnering-7', 'English-2'),
(6, 'Computational Inteligence-7', 'Advanced Academic English-47', 'Software Quality Assurence-2', 'Malay Language-40', 'Web Technology-8', 'Professional Academic English-29', 'Digital Logic-1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `id` int(11) NOT NULL,
  `name` char(100) NOT NULL,
  `utmid` char(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `course1` char(100) NOT NULL,
  `course2` char(100) NOT NULL,
  `course3` char(100) NOT NULL,
  `course4` char(100) NOT NULL,
  `course5` char(100) NOT NULL,
  `course6` char(100) NOT NULL,
  `section1` varchar(100) NOT NULL,
  `section2` varchar(100) NOT NULL,
  `section3` varchar(100) NOT NULL,
  `section4` varchar(100) NOT NULL,
  `section5` varchar(100) NOT NULL,
  `section6` varchar(100) NOT NULL,
  `lecturer1` varchar(100) NOT NULL,
  `lecturer2` varchar(100) NOT NULL,
  `lecturer3` varchar(100) NOT NULL,
  `lecturer4` varchar(100) NOT NULL,
  `lecturer5` varchar(100) NOT NULL,
  `lecturer6` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`id`, `name`, `utmid`, `password`, `course1`, `course2`, `course3`, `course4`, `course5`, `course6`, `section1`, `section2`, `section3`, `section4`, `section5`, `section6`, `lecturer1`, `lecturer2`, `lecturer3`, `lecturer4`, `lecturer5`, `lecturer6`) VALUES
(4, 'Karimul', 'karimul1998', '12345', 'Application Development-1', 'Software Quality Assurence-2', 'Computational Inteligence-7', 'Web Technology-8', 'Advanced Academic English-47', 'Youth Development-1', 'Section 1', 'Section 2', 'Section 7', 'Section 8', 'Section 47', 'Section 1', 'Dr. Ahmad Fadhil Bin Yusof', 'Dr. Radziah Binti Mohamad', 'Dr Haza Nuzly Abdul Hamed', 'Dr Mohd Yazid Idris', 'Dr. Ali', 'Dr Mahyuddin Arsat'),
(5, 'Hekam', 'hekam1997', '1234578', 'Application Development-1', 'Software Quality Assurence-6', 'Malay Language-40', 'Web Technology-8', 'Professional Academic English-29', '', 'Section 1', 'Section 6', 'Section 40', 'Section 8', 'Section 29', '', 'Dr. Ahmad Fadhil Bin Yusof', 'Dr. Nor Azizah binti Saadon', 'Dr. Mazura binti Mat Din', 'Dr Mohd Yazid Idris', 'Assoc. Prof. Dr. Roselina binti Salleh @ Sallehuddin', '');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_info`
--

CREATE TABLE `lecturer_info` (
  `id` int(100) NOT NULL,
  `lno` int(100) NOT NULL,
  `lecturer_name` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `office` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_info`
--

INSERT INTO `lecturer_info` (`id`, `lno`, `lecturer_name`, `phone`, `email`, `office`, `picture`) VALUES
(1, 1, 'Dr. Ahmad Fadhil Bin Yusof', '07-5538821', 'ahmadfadhil@utm.my', 'UTM International, S19, UTM', 'drfadhil.jpg'),
(2, 2, 'Dr. Radziah Binti Mohamad', '07-5538769', 'radziahm@utm.my', 'Academic Office, School of Computing, N28A, UTM', 'drradziya.jpg'),
(3, 3, 'Dr Haza Nuzly Abdul Hamed', '07-5532430', 'haza@utm.my', 'School of Computing, UTM', 'drhaza.jpg'),
(4, 4, 'Dr Mohd Yazid Idris', '07-5532003', 'yazid@utm.my', 'School of Computing, UTM', 'dryazid.jpg'),
(6, 6, 'Dr Mahyuddin Arsat', '075534033', 'mahyuddin@utm.my', 'School of Science, UTM', 'drarsat.jpg'),
(7, 7, 'Dr. Nor Azizah binti Saadon', '07-5532351', 'azizahsaadon@utm.my', 'School of Computing, UTM', 'draziza.jpg'),
(8, 8, 'Dr. Nur Eiliyah @ Wong Yee Leng', '07-5532421', 'nureiliyah@utm.my', 'School of Computing, N28A, UTM', 'dreliyah.jpg'),
(9, 9, 'Assoc. Prof. Dr. Roselina binti Salleh @ Sallehuddin', '07-5532082', 'roselina@utm.my', 'School of Computing, UTM', 'drRoselina.jpg'),
(10, 10, 'Dr. Mazura binti Mat Din', '07-5532370', 'mazura@utm.my', 'School of Computing, UTM', 'drmazura.jpg'),
(11, 11, 'Dr. Mohd Foâ€™ad bin Rohani', '07-5538771', 'foad@utm.my', 'School of Computing, UTM', 'drfoad.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_venue`
--
ALTER TABLE `class_venue`
  ADD PRIMARY KEY (`id`,`courses`);

--
-- Indexes for table `courses_offered`
--
ALTER TABLE `courses_offered`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_info`
--
ALTER TABLE `lecturer_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `class_venue`
--
ALTER TABLE `class_venue`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `courses_offered`
--
ALTER TABLE `courses_offered`
  MODIFY `time` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lecturer_info`
--
ALTER TABLE `lecturer_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
