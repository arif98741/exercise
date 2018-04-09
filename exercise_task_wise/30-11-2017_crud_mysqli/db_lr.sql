-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2018 at 05:25 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lr`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `address`, `username`, `email`, `password`) VALUES
(1, 'Ariful Islam', 'Elenga', 'arif1234', 'arif@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Jhon Adam', 'New york', 'jhon1234', 'jhon@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Brain More', 'City Bank', 'brain1234', 'brain@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'dsf', 'gdfgdfg', 'dsfdsfds', 'fdsfdsf@gfffff.fgdgfd', 'b6e8023ea0783606aa35d0f925e473d9'),
(7, 'Kristen Stone', 'dfdasfsda', 'abcdef', 'dsfsad@hdf.g', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, 'dfdd', 'dsfdsf', 'sfdsfsdfds', 'fdsfsadf@gfda.fgd', 'fef64006a4320fb3085b46634eb403b8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
