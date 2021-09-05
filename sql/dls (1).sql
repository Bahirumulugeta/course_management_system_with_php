-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2017 at 05:48 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `course` varchar(11) NOT NULL,
  `path` varchar(11) NOT NULL,
  `lastdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `title`, `course`, `path`, `lastdate`) VALUES
(3, 'introductio', 'JSP', 'upload/Ch06', '2016-12-31'),
(4, 'Assignment2', 'java', 'upload/Heap', '2016-12-12'),
(5, '', '', 'upload/', '0000-00-00'),
(6, '', '', 'upload/', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `maxlimit` int(11) NOT NULL,
  `credits` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL,
  `registered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `maxlimit`, `credits`, `available_seats`, `registered`) VALUES
(1, 'Java', 15, 7, 10, 5),
(3, 'PHP', 10, 7, 5, 5),
(5, 'Python', 10, 7, 8, 2),
(7, 'C', 15, 7, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `course` varchar(11) NOT NULL,
  `title` varchar(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `course`, `title`, `date`) VALUES
(1, 'java', 'Inrto', '2016-12-22'),
(2, 'Ruby', 'Intro', '2016-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `gid` int(4) NOT NULL,
  `value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `title`, `course`, `path`) VALUES
(51, 'introduction', 'Python', 'upload/DAA module2.pptxDAA module2.pptx'),
(52, 'Inrto', 'Ruby', 'upload/CSE -Course Str and Syllabi 2013 Batches onwards - .pdfCSE -Course Str and Syllabi 2013 Batches onwards - .pdf'),
(53, 'Intro', 'JSP', 'upload/CSE Syllabi 2010 Batches onwards-1.docCSE Syllabi 2010 Batches onwards-1.doc'),
(54, 'Basics', 'Python', 'upload/DOC-20161108-WA0040-1.pdfDOC-20161108-WA0040-1.pdf'),
(55, 'Data Structure', 'Ruby', 'upload/substitution_method.pdf.pdfsubstitution_method.pdf.pdf'),
(56, 'write', 'Python', 'upload/CSE Syllabi 2010 Batches onwards-1.docCSE Syllabi 2010 Batches onwards-1.doc'),
(57, 'Week 2', 'JSP', 'upload/IMG_20170914_104213.jpgIMG_20170914_104213.jpg'),
(58, 'intro2', 'Python', 'upload/CSE Syllabi 2010 Batches onwards-1.docCSE Syllabi 2010 Batches onwards-1.doc');

-- --------------------------------------------------------

--
-- Table structure for table `reportcard`
--

CREATE TABLE `reportcard` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `emarks` int(11) NOT NULL,
  `imarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `timeslot` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teststudent`
--

CREATE TABLE `teststudent` (
  `sid` int(10) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `cid` int(4) NOT NULL,
  `course` varchar(10) NOT NULL,
  `credits` int(4) NOT NULL,
  `grade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `role`) VALUES
(1, '', '', '', 'admin', 'admin', 'admin'),
(4, '', '', '', 'userstudent', 'student', 'student'),
(5, '', '', '', 'faculty', 'faculty', 'prof'),
(7, 'Saumay', 'Paul', 'saumaypaul20@gmail.com', 'sammy', '12345', 'student'),
(8, 'Anurag', 'Narayan Sarmah', 'raagsarmah@gmail.com', 'anu', '12345', 'prof'),
(9, 'Anurag', 'Narayan Sarmah', 'raagsarmah@gmail.com', 'anu1', '123', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reportcard`
--
ALTER TABLE `reportcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `gid` int(4) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `reportcard`
--
ALTER TABLE `reportcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
