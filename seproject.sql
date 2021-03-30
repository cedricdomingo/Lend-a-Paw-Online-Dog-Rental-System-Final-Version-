-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 05:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 0, 'admin', 'admin', '2021-03-24 05:00:13'),
(2, 0, 'admin', 'admin', '2021-03-24 05:00:16');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` bigint(11) NOT NULL,
  `user_id` bigint(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dog_name` varchar(20) NOT NULL,
  `dog_owner_name` varchar(50) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `dog_id` bigint(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `duration` int(11) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `user_name`, `email`, `dog_name`, `dog_owner_name`, `client_name`, `dog_id`, `time`, `date`, `duration`, `location`) VALUES
(1, 6157276, 'erer', '123@emample.com', '', '', '', 0, '00:00:00', '0000-00-00', 0, ''),
(2, 11679042207150, 'ab', 'ab@example.com', '', '', '', 0, '00:00:00', '0000-00-00', 0, ''),
(3, 9223372036854775807, 'qw', 'qw@example.com', '', '', '', 0, '18:17:00', '0000-00-00', 0, ''),
(4, 338097, 'aa', '123@emample.com', '', '', '', 0, '09:17:00', '0000-00-00', 0, ''),
(5, 15532770584859, 'qw', 'wq@example.com', '', '', '', 0, '18:19:00', '0000-00-00', 0, ''),
(6, 4458751072659094, 'ee', '123@emample.com', '', '', '', 0, '09:20:00', '0000-00-00', 0, ''),
(7, 5389018214394729, 'er', '123@emample.com', '', '', '', 0, '00:00:18', '0000-00-00', 0, ''),
(8, 46406712, 'op', 'op@example.com', '', '', '', 0, '13:24:00', '0000-00-00', 0, ''),
(9, 756792188445325432, 'zx', '123@emample.com', '', '', '', 0, '17:26:00', '0000-00-00', 0, ''),
(10, 373855, 'aw', '123@emample.com', '', '', '', 0, '18:30:00', '0000-00-00', 0, ''),
(11, 5867054813089, 'af', '123@emample.com', '', '', '', 0, '00:31:00', '0000-00-00', 0, ''),
(12, 4126823260862097, 'qq', '123@emample.com', '', '', '', 0, '18:42:00', '2021-04-09', 0, ''),
(13, 18958260, 'we', '123@emample.com', '', '', '', 0, '18:43:00', '2021-04-08', 0, ''),
(14, 828342475731, 'rr', '123@emample.com', '', '', '', 0, '18:45:00', '2021-04-10', 0, ''),
(15, 9254, 'jj', '123@emample.com', '', '', '', 0, '18:45:00', '2021-04-10', 0, ''),
(16, 6828612319660379610, 'aza', '123@emample.com', '', '', '', 0, '18:51:00', '2021-04-10', 0, ''),
(17, 97400752, 'xx', '123@emample.com', '', '', '', 0, '11:51:00', '2021-04-30', 0, ''),
(18, 529570300148, 'yu', '123@emample.com', '', '', '', 0, '18:56:00', '2021-04-10', 0, ''),
(19, 46746212044887, 'qw1', 'qw@example.com', '', '', '', 0, '14:55:00', '2021-04-09', 0, ''),
(20, 45409882922849, 'aq', 'aq@example.com', '', '', '', 0, '18:00:00', '2021-05-22', 0, ''),
(21, 8471405854, 'zz', 'zz@example.com', '', '', '', 0, '09:30:00', '2021-06-05', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `user_id`, `user_name`, `password`, `email`, `phone`, `date`) VALUES
(1, 5452139, 'aa', 'aa', 'aa@example.com', 666666666, '2021-03-20 17:57:12'),
(2, 8431046487, 'ab', 'ab', 'ab@example.com', 1212112, '2021-03-20 17:59:47'),
(3, 8538260125, 'ac', 'ac', 'ac', 0, '2021-03-20 18:06:47'),
(4, 19609945862551458, 'erer', 'erer', '', 0, '2021-03-20 18:11:20'),
(5, 8737538641186, 'qw', 'qw', '', 0, '2021-03-20 18:14:18'),
(6, 20679605, 'qa', 'qa', 'qa@example', 89898989, '2021-03-20 18:23:32'),
(7, 18570633373524597, 'zz', 'zz', 'zz@example.com', 888899, '2021-03-20 22:41:46'),
(8, 7480259449, 'aa', 'aa', 'aa@example.com', 54986532, '2021-03-24 04:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `dog`
--

CREATE TABLE `dog` (
  `id` int(11) NOT NULL,
  `dog_name` varchar(50) NOT NULL,
  `dog_owner_name` varchar(50) NOT NULL,
  `price` bigint(10) NOT NULL,
  `size` varchar(20) NOT NULL,
  `breed` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dogowner`
--

CREATE TABLE `dogowner` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `dog_name` varchar(20) NOT NULL,
  `dog_age` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `price` bigint(10) NOT NULL,
  `breed` varchar(10) NOT NULL,
  `location` varchar(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dogowner`
--

INSERT INTO `dogowner` (`id`, `user_id`, `user_name`, `dog_name`, `dog_age`, `password`, `email`, `phone`, `price`, `breed`, `location`, `start_time`, `end_time`, `date`) VALUES
(1, 656021410531, 'ab', 'alice', 1, 'ab', 'ab@example.com', 45152453, 20, 'medium', '888van', '14:11:00', '00:00:00', '2021-03-24 03:05:41'),
(2, 9223372036854775807, 'qw1', 'qw1', 4, 'qw1', 'qw@example.com', 2147483647, 20, 'large', '888van', '00:00:00', '00:00:00', '2021-03-24 03:11:49'),
(3, 7413989036280, 'qe', 'anne', 2, 'qe', 'qe@example.com', 56523, 40, 'large', '888van', '00:00:00', '00:00:00', '2021-03-24 03:13:55'),
(4, 73868126344, 'ac', 'll', 3, 'ac', 'ac@example.com', 8952336, 100, 'large', '888van', '14:30:00', '15:30:00', '2021-03-24 03:26:18'),
(5, 5584728527288208, 'qq', 'qq', 2, 'qq', 'qq@example.com', 45652, 20, 'small', '888van', '14:32:00', '15:27:00', '2021-03-24 03:27:09'),
(6, 21840797747085, 'we', 'hey', 2, 'we', 'we@example.com', 566221233, 34, 'small', '888van', '15:33:00', '18:33:00', '2021-03-24 04:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `card_holder_name` varchar(20) NOT NULL,
  `amount` bigint(10) NOT NULL,
  `card_cvc` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `expiry_date` date NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `user_id`, `user_name`, `email`, `first_name`, `last_name`, `address`, `card_holder_name`, `amount`, `card_cvc`, `type`, `expiry_date`, `date`) VALUES
(1, 7334088885794, 'ab', '123@emample.com', 'a', 'a', '6666van', 'as', 78, 852, '', '2021-08-03', '2021-03-21'),
(2, 73470047715, 'ab', '23@example.com', 'a', 'a', '123van', 'er', 12, 361, '', '2025-11-08', '2021-03-21'),
(3, 922524, 'qw', 'qw@example.com', 'qw', 'qw', '567vcan', 'qw', 89, 852, 'on', '2025-09-01', '2021-03-21'),
(4, 849310, 'ed', 'ed@example.com', 'as', 'ee', '123van', 'we', 23, 895, 'paypal', '2024-11-21', '2021-03-21'),
(5, 6219648774986725472, 'yu', 'ty@example.com', 'ty', 'ty', '45van', 'ty', 89, 852, 'visa', '2023-12-26', '2021-03-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin` (`user_name`),
  ADD KEY `password` (`password`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dog_name` (`dog_name`),
  ADD KEY `dog_owner_name` (`dog_owner_name`),
  ADD KEY `client_name` (`client_name`),
  ADD KEY `dog_id` (`dog_id`),
  ADD KEY `time` (`time`),
  ADD KEY `date` (`date`),
  ADD KEY `duration` (`duration`),
  ADD KEY `location` (`location`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `password` (`password`),
  ADD KEY `email` (`email`),
  ADD KEY `phone` (`phone`),
  ADD KEY `phone_2` (`phone`),
  ADD KEY `password_2` (`password`);

--
-- Indexes for table `dog`
--
ALTER TABLE `dog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dog_name` (`dog_name`),
  ADD KEY `dog_owner_name` (`dog_owner_name`),
  ADD KEY `price` (`price`),
  ADD KEY `size` (`size`),
  ADD KEY `breed` (`breed`),
  ADD KEY `location` (`location`);

--
-- Indexes for table `dogowner`
--
ALTER TABLE `dogowner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `name` (`user_name`),
  ADD KEY `price` (`price`),
  ADD KEY `breed` (`breed`),
  ADD KEY `location` (`location`),
  ADD KEY `password` (`password`),
  ADD KEY `email` (`email`),
  ADD KEY `age` (`dog_age`),
  ADD KEY `time` (`start_time`),
  ADD KEY `phone` (`phone`),
  ADD KEY `end_time` (`end_time`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`),
  ADD KEY `address` (`address`),
  ADD KEY `amount` (`amount`),
  ADD KEY `card_holder_name` (`card_holder_name`),
  ADD KEY `type` (`type`),
  ADD KEY `expiry_date` (`expiry_date`),
  ADD KEY `email` (`email`),
  ADD KEY `type_2` (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `dog`
--
ALTER TABLE `dog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dogowner`
--
ALTER TABLE `dogowner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
