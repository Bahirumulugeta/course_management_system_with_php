-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2021 at 03:13 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dls`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

DROP TABLE IF EXISTS `assignment`;
CREATE TABLE IF NOT EXISTS `assignment` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `submissionDate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `cId` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `credits` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semister` varchar(100) NOT NULL,
  PRIMARY KEY (`cId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cId`, `cname`, `credits`, `department`, `year`, `semister`) VALUES
(4, 'c++', 4, 'computer siense', '1st year', '1st semister'),
(5, 'Economics', 4, 'Accounting', '1st year', '2nd semister'),
(3, 'Sysem programming', 3, 'computer siense', '2nd year', '1st semister'),
(2, 'distriibutedsytem', 4, 'computer siense', '2nd year', '1st semister'),
(1, 'java', 4, 'computer siense', '2nd year', '1st semister'),
(6, 'Compiler Design', 3, 'computer siense', '3rd year', '1st semister');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

DROP TABLE IF EXISTS `exam`;
CREATE TABLE IF NOT EXISTS `exam` (
  `examId` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  PRIMARY KEY (`examId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`examId`, `title`, `course`, `date`) VALUES
(1, 'Test Three', 'c++', '2021-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `instractors`
--

DROP TABLE IF EXISTS `instractors`;
CREATE TABLE IF NOT EXISTS `instractors` (
  `insID` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `salary` float NOT NULL,
  `department` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  PRIMARY KEY (`insID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instractors`
--

INSERT INTO `instractors` (`insID`, `fname`, `lname`, `username`, `salary`, `department`, `course`) VALUES
(1, 'Solomon', 'Abebe', 'Solomon1', 2000, 'computer siense', 'Sysem programming');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS `material` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studcourse`
--

DROP TABLE IF EXISTS `studcourse`;
CREATE TABLE IF NOT EXISTS `studcourse` (
  `studCourseId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `studUsername` varchar(100) NOT NULL,
  `addDrop` varchar(100) NOT NULL,
  PRIMARY KEY (`studCourseId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studcourse`
--

INSERT INTO `studcourse` (`studCourseId`, `courseId`, `studUsername`, `addDrop`) VALUES
(1, 1, 'abinet', 'add');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semister` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `docFile` varchar(100) NOT NULL,
  `isAccepted` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `email`, `username`, `program`, `department`, `year`, `semister`, `sex`, `photo`, `docFile`, `isAccepted`) VALUES
(3, 'Abebe', 'Kumlachew', 'abebe@gmail.com', 'abebe', 'Extension', 'marketing', '1st year', '1st semister', 'M', 'WIN_20210622_15_10_45_Pro.jpg', 'Resume.pdf', 'no'),
(2, 'abebe', 'Wolde', 'ab@gmail.com', 'abinet', 'Regular', 'computer siense', '2nd year', '1st semister', 'M', 'photo_2021-03-12_11-13-22.jpg', 'resume.pdf', 'no'),
(1, 'Bahiru', 'Mulugeta', 'bahirumulugeta1@gmail.com', 'bahiru', 'Regular', 'Accounting', '2nd year', '1st semister', 'M', '205100591_10218961171326727_4631890860698380789_n.jpg', '10.pdf', 'yes'),
(4, 'abc', 'def', 'yayehasme@gmail.com', 'abc', 'Regular', 'Accounting', '2nd year', '1st semister', 'F', '20200119_160853.jpg', 'Graduate project Proposal Template.pdf', 'no'),
(5, 'Asdenaki', 'Tamirat', 'asdu@gmail.com', 'asdu', 'Regular', 'computer siense', '2nd year', '1st semister', 'M', '20200119_160853.jpg', 'Graduate project Proposal Template.pdf', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `role`) VALUES
('asdu', '7890', 'student'),
('abc', 'abcd', 'student'),
('Solomon1', 'Abebe1', 'instractor'),
('abebe', '56789', 'student'),
('abinet', '54321', 'student'),
('bahiru', '54321', 'student');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
