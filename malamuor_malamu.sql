-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 14, 2019 at 09:04 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `malamuor_malamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `country` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_verification` enum('verified','not verified') NOT NULL,
  `register_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `first_name`, `middle_name`, `last_name`, `phone_number`, `birthday`, `gender`, `country`, `username`, `password`, `phone_verification`, `register_date`) VALUES
(23, 'Kelvin', '', 'Cuma', '416-878-9432', '1980-01-01', 'male', 'COD', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'verified', '2018-12-26 21:14:04'),
(24, 'c', 'c', 'cc', '2', '1980-01-01', 'female', 'AFG', 'c', '84a516841ba77a5b4648de2cd0dfcb30ea46dbb4', 'verified', '2018-12-30 07:14:39'),
(28, 'Paulcy', '', 'Mboungou', '+919951817798', '1994-05-31', 'male', 'IND', 'mboungoup', '9733ad61471ef99b147638287265b62c4e263f51', 'verified', '2019-01-01 20:45:01'),
(30, 'praveen', 'hentry', 'tissera', '94713691344', '1980-01-01', 'male', 'LKA', 'praveen', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'verified', '2019-01-17 03:31:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
