-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 06:08 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlantic`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmcart`
--

CREATE TABLE `confirmcart` (
  `id` int(10) UNSIGNED NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` tinytext NOT NULL,
  `ContactNo` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmcart`
--

INSERT INTO `confirmcart` (`id`, `FullName`, `Email`, `ContactNo`) VALUES
(1, 'ah beng', 'ahbeng@hotmail.com', 123333);

-- --------------------------------------------------------

--
-- Table structure for table `customer_enquiry`
--

CREATE TABLE `customer_enquiry` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_enquiry`
--

INSERT INTO `customer_enquiry` (`customer_id`, `customer_name`, `customer_email`, `customer_comment`) VALUES
(1, 'ddd', '', ''),
(2, 'ddddddd', 'ddd@hotmail.com', ''),
(3, 'dddggg', 'sss@hotmail.com', 'dddd');

-- --------------------------------------------------------

--
-- Table structure for table `customer_newsletter`
--

CREATE TABLE `customer_newsletter` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_newsletter`
--

INSERT INTO `customer_newsletter` (`customer_id`, `customer_email`) VALUES
(1, 'ddd@hotmail.com'),
(2, 'dddddddd@hotmail.com'),
(3, 'f31ee@localhost'),
(4, 'f32ee@localhost'),
(5, 'f31ee@localhost'),
(6, 'Atlantic_Cinema@localhost');

-- --------------------------------------------------------

--
-- Table structure for table `hall1`
--

CREATE TABLE `hall1` (
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ticket_id` int(10) UNSIGNED DEFAULT NULL,
  `ticket_seat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hall1`
--

INSERT INTO `hall1` (`order_id`, `ticket_id`, `ticket_seat`) VALUES
(3, 1, ''),
(4, 1, ''),
(5, 1, ''),
(6, 1, ''),
(7, 1, ''),
(8, 1, ''),
(9, 1, ''),
(10, 1, ''),
(11, 1, ''),
(12, 1, ''),
(13, 1, ''),
(14, 1, ''),
(15, 1, ''),
(16, 1, ''),
(17, 1, ''),
(18, 1, 'A1'),
(19, 1, ''),
(20, 1, 'A3'),
(20, 1, 'A4'),
(21, 1, 'A3'),
(21, 1, 'A4'),
(22, 1, 'A3'),
(22, 1, 'A4'),
(23, 1, 'F9'),
(23, 1, 'F10'),
(24, 1, 'E1'),
(24, 1, 'E2'),
(25, 1, 'C9'),
(25, 1, 'C10'),
(26, 1, 'G3'),
(27, 1, 'G4'),
(28, 1, 'G4'),
(29, 1, 'G4'),
(30, 1, 'G4'),
(31, 1, 'A3'),
(32, 1, 'A3'),
(33, 1, 'A3'),
(34, 1, 'A3'),
(35, 1, 'A3'),
(36, 1, 'A3'),
(37, 1, 'G4'),
(37, 1, 'G5'),
(38, 1, 'G4'),
(38, 1, 'G5'),
(39, 1, 'G4'),
(39, 1, 'G5'),
(40, 1, 'G4'),
(40, 1, 'G5'),
(41, 1, 'G4'),
(41, 1, 'G5'),
(42, 1, 'G4'),
(42, 1, 'G5'),
(43, 1, 'G4'),
(43, 1, 'G5'),
(44, 1, 'B1'),
(45, 1, 'G4'),
(46, 1, 'G4'),
(47, 1, 'G4'),
(47, 1, 'G5'),
(48, 1, 'D2'),
(48, 1, 'D3');

-- --------------------------------------------------------

--
-- Table structure for table `hall2`
--

CREATE TABLE `hall2` (
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ticket_id` int(10) UNSIGNED DEFAULT NULL,
  `ticket_seat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hall3`
--

CREATE TABLE `hall3` (
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ticket_id` int(10) UNSIGNED DEFAULT NULL,
  `ticket_seat` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `ticket_name` varchar(30) NOT NULL,
  `ticket_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ticket_id`, `ticket_name`, `ticket_price`) VALUES
(1, 'BlackAdam', 12.5),
(2, 'Smile', 12.5),
(3, 'MrsHarry', 12.5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `current_sale` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `ticket_id`, `quantity`, `current_sale`) VALUES
(3, 1, 1, 12.5),
(4, 1, 1, 12.5),
(5, 1, 1, 12.5),
(6, 1, 1, 12.5),
(7, 1, 1, 12.5),
(8, 1, 1, 12.5),
(9, 1, 1, 12.5),
(10, 1, 1, 12.5),
(11, 1, 1, 12.5),
(12, 1, 1, 12.5),
(13, 1, 1, 12.5),
(14, 1, 1, 12.5),
(15, 1, 1, 12.5),
(16, 1, 1, 12.5),
(17, 1, 1, 12.5),
(18, 1, 1, 12.5),
(19, 1, 1, 12.5),
(20, 1, 2, 25),
(21, 1, 2, 25),
(22, 1, 2, 25),
(23, 1, 2, 25),
(24, 1, 2, 25),
(25, 1, 2, 25),
(26, 1, 1, 12.5),
(27, 1, 1, 12.5),
(28, 1, 1, 12.5),
(29, 1, 1, 12.5),
(30, 1, 1, 12.5),
(31, 1, 1, 12.5),
(32, 1, 1, 12.5),
(33, 1, 1, 12.5),
(34, 1, 1, 12.5),
(35, 1, 1, 12.5),
(36, 1, 1, 12.5),
(37, 1, 2, 25),
(38, 1, 2, 25),
(39, 1, 2, 25),
(40, 1, 2, 25),
(41, 1, 2, 25),
(42, 1, 2, 25),
(43, 1, 2, 25),
(44, 1, 1, 12.5),
(45, 1, 1, 12.5),
(46, 1, 1, 12.5),
(47, 1, 2, 25),
(48, 1, 2, 25);

-- --------------------------------------------------------

--
-- Table structure for table `totalsales`
--

CREATE TABLE `totalsales` (
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `totals` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'yh', '12345@hotmail.com', 'user', 'e66055e8e308770492a44bf16e875127'),
(2, 'Admin1', '12345@hotmail.com', 'admin', 'e66055e8e308770492a44bf16e875127');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmcart`
--
ALTER TABLE `confirmcart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_enquiry`
--
ALTER TABLE `customer_enquiry`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_newsletter`
--
ALTER TABLE `customer_newsletter`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `hall1`
--
ALTER TABLE `hall1`
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `hall2`
--
ALTER TABLE `hall2`
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `hall3`
--
ALTER TABLE `hall3`
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `ticket_id` (`ticket_id`);

--
-- Indexes for table `totalsales`
--
ALTER TABLE `totalsales`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmcart`
--
ALTER TABLE `confirmcart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_enquiry`
--
ALTER TABLE `customer_enquiry`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_newsletter`
--
ALTER TABLE `customer_newsletter`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hall1`
--
ALTER TABLE `hall1`
  ADD CONSTRAINT `hall1_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `movies` (`ticket_id`);

--
-- Constraints for table `hall2`
--
ALTER TABLE `hall2`
  ADD CONSTRAINT `hall2_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `movies` (`ticket_id`);

--
-- Constraints for table `hall3`
--
ALTER TABLE `hall3`
  ADD CONSTRAINT `hall3_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `movies` (`ticket_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `movies` (`ticket_id`);

--
-- Constraints for table `totalsales`
--
ALTER TABLE `totalsales`
  ADD CONSTRAINT `totalsales_ibfk_1` FOREIGN KEY (`ticket_id`) REFERENCES `movies` (`ticket_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
