-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 04:11 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inven_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoice_tbl`
--

CREATE TABLE `invoice_tbl` (
  `invoice_id` int(20) NOT NULL,
  `customer_name` varchar(20) NOT NULL,
  `trans_code` varchar(20) NOT NULL,
  `total` int(20) NOT NULL,
  `trans_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice_tbl`
--

INSERT INTO `invoice_tbl` (`invoice_id`, `customer_name`, `trans_code`, `total`, `trans_date`) VALUES
(7, 'John Lloyd Mariano', '1101110111', 240, '2022-05-03'),
(8, 'Jo-Ann Barretto', '1101110111', 940, '2022-05-10'),
(10, 'Jerome Pangan', '101110111', 300, '2022-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `product_id` int(20) NOT NULL,
  `prod_name` varchar(20) NOT NULL,
  `prod_price` int(20) NOT NULL,
  `prod_qty` int(20) NOT NULL,
  `date_received` varchar(20) NOT NULL,
  `prod_exp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`product_id`, `prod_name`, `prod_price`, `prod_qty`, `date_received`, `prod_exp`) VALUES
(24, 'COLLAGEN (80)  ', 400, 50, '2022-04-28', '2025-12-28'),
(25, 'COLLAGEN (60)', 640, 30, '2022-04-20', '2025-12-28'),
(26, 'MULTIVITAMINS (60)', 300, 23, '2022-04-22', '2025-12-28'),
(27, 'VIT B (60)', 270, 48, '2022-04-12', '2030-05-04'),
(28, 'VIT E (60)', 370, 21, '2022-04-21', '2023-05-03'),
(29, 'VIT D (60)', 320, 33, '2022-04-14', '2023-02-23'),
(30, 'MULTIVITAMINS (20)', 140, 35, '2022-04-18', '2024-02-03'),
(35, 'VIT E (20)', 300, 10, '2022-05-11', '2025-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fullname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `username`, `fullname`, `email`, `password`) VALUES
(26, 'admin', 'John Lloyd Mariano', 'admin@gmail.com', 'admin '),
(27, 'admin2', 'Jerome Pangan', 'admin@gmail.com', 'admin ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoice_tbl`
--
ALTER TABLE `invoice_tbl`
  MODIFY `invoice_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
