-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2018 at 06:11 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interest`
--

-- --------------------------------------------------------

--
-- Table structure for table `cd_interest`
--

CREATE TABLE `cd_interest` (
  `id` int(11) UNSIGNED NOT NULL,
  `catid` int(11) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cd_interest`
--

INSERT INTO `cd_interest` (`id`, `catid`, `value`, `name`) VALUES
(1, 1, 'photography', 'Photography'),
(2, 1, 'drawing', 'Drawing'),
(3, 1, 'painting', 'Painting'),
(4, 2, 'hard-rock', 'Hard Rock'),
(5, 2, 'live-music', 'Live music'),
(6, 3, 'walking', 'Walking'),
(8, 3, 'golf', 'Golf'),
(9, 3, 'volleyball', 'Volleyball'),
(10, 3, 'skiing-snowboarding', 'Skiing / Snowboarding'),
(12, 99, 'karaoke', 'Karaoke'),
(13, 99, 'nature', 'Nature'),
(14, 99, 'restaurant', 'Restaurant'),
(50, 99, 'small-theatres', 'Small theatres');

-- --------------------------------------------------------

--
-- Table structure for table `cd_interest_category`
--

CREATE TABLE `cd_interest_category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cd_interest_category`
--

INSERT INTO `cd_interest_category` (`id`, `name`) VALUES
(1, 'Art'),
(2, 'Musical taste'),
(3, 'Sports'),
(99, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `cd_interest_user`
--

CREATE TABLE `cd_interest_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `userid` varchar(11) DEFAULT NULL,
  `interest` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cd_interest_user`
--

INSERT INTO `cd_interest_user` (`id`, `userid`, `interest`) VALUES
(1, '1001', 'photography,painting,skiing-snowboarding,nature,small-theatres,walking,'),
(8, '1000', 'photography,drawing,hard-rock,live-music,golf,skiing-snowboarding,nature,'),
(9, '1000', 'photography,hard-rock,live-music,walking,skiing-snowboarding,nature,small-theatres,'),
(10, '1000', 'photography,hard-rock,live-music,walking,skiing-snowboarding,nature,small-theatres,'),
(16, '1000', 'photography,drawing,volleyball,skiing-snowboarding,restaurant,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cd_interest`
--
ALTER TABLE `cd_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_interest_category`
--
ALTER TABLE `cd_interest_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cd_interest_user`
--
ALTER TABLE `cd_interest_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cd_interest`
--
ALTER TABLE `cd_interest`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `cd_interest_category`
--
ALTER TABLE `cd_interest_category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `cd_interest_user`
--
ALTER TABLE `cd_interest_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
