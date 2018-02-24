-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2018 at 08:33 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `credit` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `title`, `credit`) VALUES
(1, 'Database Management', 3),
(2, 'Database Management Lab', 1),
(3, 'Computer Fundamental ', 3),
(4, 'Object Oriented Programming', 3);

-- --------------------------------------------------------

--
-- Table structure for table `courseteacher`
--

CREATE TABLE `courseteacher` (
  `fid` int(5) NOT NULL,
  `cid` int(5) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseteacher`
--

INSERT INTO `courseteacher` (`fid`, `cid`, `semester`) VALUES
(1, 3, 'Spring 2018'),
(2, 3, 'Summer 2018'),
(1, 1, 'Spring 2018'),
(3, 4, 'Summer 2018');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `salary` float(5,2) DEFAULT NULL,
  `designation` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `contact`, `email`, `salary`, `designation`) VALUES
(1, 'Jhon Doe', '01584-XXTTNN', 'tanvir.rahman@gmail.com', 999.99, 'Lecturer'),
(2, 'Alan Kristen', '01256-XXTTNN', 'alan.kristen@gmail.com', 999.99, 'Professor'),
(3, 'Jhan Poker', '013fd-yydfnd', 'jahn.poker@gmail.com', 999.99, 'Professor');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `rserial` int(5) NOT NULL,
  `sid` int(5) NOT NULL,
  `cid` int(5) DEFAULT NULL,
  `semester` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`rserial`, `sid`, `cid`, `semester`) VALUES
(1, 1, 3, 'Spring 2018'),
(3, 2, 4, 'Spring 2018'),
(4, 2, 2, 'Spring 2018'),
(5, 2, 1, 'Spring 2018'),
(6, 3, 3, 'Summer 2017');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(5) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `contact`, `email`) VALUES
(1, 'Ariful Islam', '01751-XXyyjj', 'arif98741@gmail.com'),
(2, 'Shamim Al-Deen', '01875-mmoopp', 'shamimaldeen@gmail.com'),
(3, 'Mahabub Hasan', '01574-mkjdd', 'mahabub15-922@diu.edu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseteacher`
--
ALTER TABLE `courseteacher`
  ADD KEY `fid` (`fid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`rserial`),
  ADD KEY `sid` (`sid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `rserial` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courseteacher`
--
ALTER TABLE `courseteacher`
  ADD CONSTRAINT `courseteacher_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `faculty` (`id`),
  ADD CONSTRAINT `courseteacher_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
