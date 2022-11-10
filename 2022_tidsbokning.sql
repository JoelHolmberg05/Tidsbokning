-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 08:43 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2022_tidsbokning`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookning`
--

CREATE TABLE `bookning` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `Customers_id` int(11) NOT NULL,
  `massage_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `firstname`, `lastname`, `phone`) VALUES
(1, 'Gaming', 'Man', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `massage-type`
--

CREATE TABLE `massage-type` (
  `mas_id` int(11) NOT NULL,
  `massagetype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massage-type`
--

INSERT INTO `massage-type` (`mas_id`, `massagetype`) VALUES
(1, 'Hot stone'),
(2, 'Aromatherapy'),
(3, 'Deep tissue'),
(4, 'Sport Massage');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookning`
--
ALTER TABLE `bookning`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Customer_id` (`Customers_id`),
  ADD KEY `Massage_id` (`massage_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `massage-type`
--
ALTER TABLE `massage-type`
  ADD PRIMARY KEY (`mas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookning`
--
ALTER TABLE `bookning`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `massage-type`
--
ALTER TABLE `massage-type`
  MODIFY `mas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookning`
--
ALTER TABLE `bookning`
  ADD CONSTRAINT `Customer_id` FOREIGN KEY (`Customers_id`) REFERENCES `customers` (`cus_id`),
  ADD CONSTRAINT `Massage_id` FOREIGN KEY (`massage_id`) REFERENCES `massage-type` (`mas_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
