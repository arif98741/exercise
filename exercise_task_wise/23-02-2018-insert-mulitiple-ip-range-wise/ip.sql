-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 11:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `ip_address`
--

CREATE TABLE `ip_address` (
  `serial` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ip_address`
--

INSERT INTO `ip_address` (`serial`, `ip`) VALUES
(283, '92.115.48.2'),
(284, '92.115.48.3'),
(285, '92.115.48.4'),
(286, '92.115.48.5'),
(287, '92.115.48.6'),
(288, '92.115.48.7'),
(289, '92.115.48.8'),
(290, '92.115.48.9'),
(291, '92.115.48.10'),
(292, '92.115.48.11'),
(293, '92.115.48.12'),
(294, '92.115.48.13'),
(295, '92.115.48.14'),
(296, '92.115.48.15'),
(297, '92.115.48.16'),
(298, '92.115.48.17'),
(299, '92.115.48.18'),
(300, '92.115.48.19'),
(301, '92.115.48.20'),
(302, '92.115.48.21'),
(303, '92.115.48.22'),
(304, '92.115.48.23'),
(305, '92.115.48.24'),
(306, '92.115.48.25'),
(307, '92.115.48.26'),
(308, '92.115.48.27'),
(309, '92.115.48.28'),
(310, '92.115.48.29'),
(311, '92.115.48.30'),
(312, '92.115.48.31'),
(313, '92.115.48.32'),
(314, '92.115.48.33'),
(315, '92.115.48.34'),
(316, '92.115.48.35'),
(317, '92.115.48.36'),
(318, '92.115.48.37'),
(319, '92.115.48.38'),
(320, '92.115.48.39'),
(321, '92.115.48.40'),
(322, '92.115.48.41'),
(323, '92.115.48.42'),
(324, '92.115.48.43'),
(325, '92.115.48.44'),
(326, '92.115.48.45'),
(327, '92.115.48.46'),
(328, '92.115.48.47'),
(329, '92.115.48.48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ip_address`
--
ALTER TABLE `ip_address`
  ADD PRIMARY KEY (`serial`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ip_address`
--
ALTER TABLE `ip_address`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=330;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
