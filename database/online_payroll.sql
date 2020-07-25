-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2020 at 09:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee`, `password`) VALUES
(2, 'employee_id002', '92e9b3e4e9888369b3ecbb18efa8101ca0d3478b'),
(4, 'employee_id001', 'abe7a3e0e032dc19b30115c96facabd03ee7fc8c');

-- --------------------------------------------------------

--
-- Table structure for table `employee_record`
--

CREATE TABLE `employee_record` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `middleName` varchar(255) NOT NULL,
  `payPeriod` varchar(255) NOT NULL,
  `basicPay` varchar(255) NOT NULL,
  `overtimePeriod` varchar(255) NOT NULL,
  `incentives` varchar(255) NOT NULL,
  `sssContribution` varchar(255) NOT NULL,
  `phicContribution` varchar(255) NOT NULL,
  `hdmfContribution` varchar(255) NOT NULL,
  `pagIbigContribution` varchar(255) NOT NULL,
  `sssLoan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_record`
--

INSERT INTO `employee_record` (`id`, `employee_id`, `name`, `lastName`, `middleName`, `payPeriod`, `basicPay`, `overtimePeriod`, `incentives`, `sssContribution`, `phicContribution`, `hdmfContribution`, `pagIbigContribution`, `sssLoan`) VALUES
(1, 2, 'John', 'Doe', 'Bill', '', '', '', '', '', '', '', '', ''),
(2, 4, 'Juan ', 'Cruz', 'Dela', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `total_income`
--

CREATE TABLE `total_income` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `undertime/late` int(11) NOT NULL,
  `otreg` int(11) NOT NULL,
  `nightDiff` int(11) NOT NULL,
  `otsun` int(11) NOT NULL,
  `otLegalHoliday` int(11) NOT NULL,
  `totalDeductions` int(11) NOT NULL,
  `netPay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_record`
--
ALTER TABLE `employee_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `total_income`
--
ALTER TABLE `total_income`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_record`
--
ALTER TABLE `employee_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `total_income`
--
ALTER TABLE `total_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
