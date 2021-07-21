-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 10:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `trans_id` int(10) NOT NULL,
  `from_id` int(10) NOT NULL,
  `to_id` int(10) NOT NULL,
  `date_time` datetime NOT NULL,
  `message` text NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `account_number` int(10) NOT NULL,
  `account_type` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `address` text NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`account_number`, `account_type`, `name`, `email`, `phone`, `address`, `balance`) VALUES
(101, 'savings', 'Akshata', 'aksh@abc.com', 7654387654, '#10 Bangalore, India', 56000),
(102, 'curent', 'Benjamin', 'ben@abc.com', 9876785676, '#15 Mumbai, India.', 80000),
(101, 'savings', 'Akshata', 'aksh@abc.com', 7654387654, '#10 Bangalore, India', 56000),
(102, 'curent', 'Benjamin', 'ben@abc.com', 9876785676, '#15 Mumbai, India.', 80000),
(103, 'savings', 'Chaitra', 'chaitra@abc.com', 3547890890, '#21 Busan, South Korea', 100000),
(104, 'savings', 'Dhvani', 'dhvani@1abc.com', 9865468699, '#98 , Kaula Lampur. Malaysia', 20000),
(105, 'savings', 'Esha', 'esha@abc.com', 1233432031, '#12 Beirut, Lebanon', 98500),
(106, 'current', 'Manav', 'manav@abc.com', 1234988969, '#3, Bangalore, India', 800000),
(107, 'current', 'Karim', 'karim@abc.com', 9997891235, '#87 Hamilton, New Zealand', 1000000),
(108, 'savings', 'Shruti', 'shruti@abc.com', 8364478525, '#420, Birmingham, England', 80000),
(109, 'current', 'Gauri', 'gauri@abc.com', 6483645372, '#21 New Delhi, India ', 60000),
(110, 'savings', 'Vincent', 'vince@abc.com', 8887536549, '#13 Madrid, Spain', 500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `trans_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
