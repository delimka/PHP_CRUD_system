-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 03:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,3) NOT NULL,
  `features` varchar(1000) NOT NULL,
  `more` varchar(1000) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id`, `name`, `price`, `features`, `more`, `CreationDate`) VALUES
(44, 'Samsung Z3', '2323.000', 'ewe', 'ewew', '2022-12-15 10:37:05'),
(45, 'Moto Z2', '0.000', 'wew', 'ewe', '2022-12-15 10:37:43'),
(47, 'Apple S', '132.000', 'dwdqwdq', 'wsqwdqw', '2022-12-15 10:56:05'),
(49, 'Samsung Z3', '32.000', 'e2e', '32', '2022-12-15 11:23:14'),
(50, 'xiaomi', '323.000', '32ee2e', '32e2e2e', '2022-12-15 11:24:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
