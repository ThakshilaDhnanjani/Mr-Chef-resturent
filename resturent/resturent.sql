-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 07:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resturent`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `del_id` int(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `phone_number` int(10) DEFAULT NULL,
  `del_address` varchar(30) DEFAULT NULL,
  `del_city` varchar(30) DEFAULT NULL,
  `del_date` date DEFAULT NULL,
  `del_time` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`del_id`, `name`, `phone_number`, `del_address`, `del_city`, `del_date`, `del_time`) VALUES
(2, 'ert', 1234567890, 'dfghjkl', 'fjk', '2023-12-24', '19:58:07.000000'),
(3, 'ygfueial', 123456789, 'sdfghjkl;', 'asdfghjkl', '2023-12-24', '21:05:20.000000'),
(4, 'dfghjkl;', 234567890, 'dfghjkl;', 'asdfghjk', '2023-12-24', '23:08:05.000000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `card_num` int(30) DEFAULT NULL,
  `ex_mon` varchar(30) DEFAULT NULL,
  `ex_year` int(4) DEFAULT NULL,
  `cvv` int(3) DEFAULT NULL,
  `pay_date` date DEFAULT NULL,
  `pay_time` time(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `name`, `card_num`, `ex_mon`, `ex_year`, `cvv`, `pay_date`, `pay_time`) VALUES
(1, 'isuru', 2147483647, 'march', 2024, 123, '2023-12-24', '15:46:43.000000'),
(2, 'thakshi', 2147483647, 'jan', 2026, 456, '2023-12-24', '19:04:58.000000'),
(3, 'dfghjkl', 2147483647, 'june', 2030, 740, '2023-12-24', '19:58:40.000000'),
(5, 'ertyuio', 2147483647, 'asdfg', 1234, 456, '2023-12-24', '23:08:31.000000');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(23, 'thakshila', 'qwe@gmail.com', 'abc'),
(24, 'piyumi', 'abc123@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`del_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `del_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
