-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 01:06 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ratankala`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm password` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `number` varchar(100) NOT NULL,
  `companyname` varchar(100) NOT NULL,
  `country` varchar(250) NOT NULL,
  `wp_num` varchar(250) NOT NULL,
  `skype_id` varchar(250) NOT NULL,
  `qq_id` varchar(250) NOT NULL,
  `wechat_id` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `password`, `confirm password`, `date`, `number`, `companyname`, `country`, `wp_num`, `skype_id`, `qq_id`, `wechat_id`, `file`) VALUES
(226, 'test', 'test@gmail.com', 'test123', 'test123', '2024-01-24', '8511061281', 'leafway', 'Australia', '8511061281', '', '', '', 'Array'),
(227, 'RUSHIKA', 'rushika121@gmail.com', '1212', '1212', '2024-03-15', '8511061281', 'test12', 'Bangladesh', '741251111', '', '', '', ''),
(228, 'ayaman', 'test12@gmail.com', '12345', '12345', '2024-01-25', '7041491662', 'ratnakala', 'American Samoa', '52369874125', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
