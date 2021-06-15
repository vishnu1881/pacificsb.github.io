-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 06:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `SNO` int(10) NOT NULL COMMENT 'Serial No',
  `NAME` varchar(20) NOT NULL COMMENT 'Customer Name',
  `EMAIL` varchar(40) NOT NULL COMMENT 'Customer email',
  `PHONENO` bigint(10) NOT NULL COMMENT 'Customer Phone Number',
  `BALANCE` bigint(20) NOT NULL COMMENT 'Customer Balance'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`SNO`, `NAME`, `EMAIL`, `PHONENO`, `BALANCE`) VALUES
(1, 'John Doe', 'johndoe121@gmail.com', 9567489856, 70000),
(2, 'Katherine', 'katherine155561@gmail.com', 9978564232, 60000),
(3, 'Hannah', 'hannah986@gmail.com', 7568961245, 50600),
(4, 'Joe', 'joejin5612@gmail.com', 7456832159, 50500),
(5, 'Tom', 'tomthefun121@gmail.com', 6589574135, 75200),
(6, 'Jerry Smith', 'jerrysmith878@gmail.com', 5478321489, 86600),
(7, 'Jack', 'jacknjill656@gmail.com', 7456896321, 35000),
(8, 'Olivia', 'oliviathegirl545@gmail.com', 6543219874, 60000),
(9, 'Raju', 'rajus8888@gmail.com', 8564123789, 32250),
(10, 'Stephanie', 'stepahniecutie656@gmail.com', 6547231589, 65500);

-- --------------------------------------------------------

--
-- Table structure for table `transfer_history`
--

CREATE TABLE `transfer_history` (
  `sender` varchar(40) NOT NULL,
  `receiver` varchar(40) NOT NULL,
  `amount_transf` int(11) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`SNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
