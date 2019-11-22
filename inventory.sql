-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 04:11 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--
-- --------------------------------------------------------

--
-- Table structure for table `attend`
--

CREATE TABLE `attend` (
  `eid` int(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attend`
--

INSERT INTO `attend` (`eid`, `status`, `date`) VALUES
(5, 'Present', '2019-11-01'),
(6, 'Half Day', '2019-11-01'),
(7, 'Present', '2019-11-01'),
(8, 'Absent', '2019-11-01'),
(5, 'Present', '2019-11-02'),
(6, 'Present', '2019-11-02'),
(7, 'Present', '2019-11-02'),
(8, 'Present', '2019-11-02'),
(5, 'Half Day', '2019-11-04'),
(6, 'Present', '2019-11-04'),
(7, 'Absent', '2019-11-04'),
(8, 'Present', '2019-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `emp_payroll`
--

CREATE TABLE `emp_payroll` (
  `eid` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `emp_payroll`
--

INSERT INTO `emp_payroll` (`eid`, `salary`, `date`) VALUES
(5, 10000, '2019-10-01'),
(5, 10000, '2019-11-04'),
(6, 10500, '2019-10-03'),
(6, 10500, '2019-11-04'),
(7, 10000, '2019-10-02'),
(7, 10000, '2019-11-01'),
(8, 10800, '2019-10-03'),
(8, 10800, '2019-11-01');

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE `reg_users` (
  `empname` text NOT NULL,
  `eid` int(6) NOT NULL,
  `aadhar` int(16) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phno` int(11) NOT NULL,
  `alph` int(11) DEFAULT NULL,
  `dob` date NOT NULL,
  `desig` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `pass` varchar(15) NOT NULL,
  `verify` varchar(20) NOT NULL DEFAULT 'not verified',
  `pin` int(5) NOT NULL,
  `salary` int(10) NOT NULL DEFAULT 0,
  `jdate` date NOT NULL,
  `ldate` date NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'Not working'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`empname`, `eid`, `aadhar`, `email`, `phno`, `alph`, `dob`, `desig`, `sex`, `pass`, `verify`, `pin`, `salary`, `jdate`, `ldate`, `status`) VALUES
('Admin', 1, 2147483647, 'admin@gmail.com', 987654321, 0, '1989-11-20', 'Administrator', 'Male', 'admin123', 'verified', 0, 0, '0000-00-00', '0000-00-00', 'Not working'),
('Cashier', 2, 2147483647, 'cashier@gmail.com', 987154320, 0, '1991-08-11', 'Cashier', 'Male', 'cashier098', 'verified', 0, 0, '0000-00-00', '2019-11-30', 'Not working'),
('Security', 3, 2147483647, 'security@gmail.com', 789564321, 2147483647, '1983-07-17', 'Security', 'Male', 'sec567', 'verified', 0, 0, '2019-11-21', '2019-11-23', 'Not working'),
('Worker', 4, 2147483647, 'worker@gmail.com', 2147483647, 2147483647, '1987-02-19', 'Worker', 'Male', '*wrk999', 'verified', 0, 0, '0000-00-00', '0000-00-00', 'Not working'),
('rashi', 5, 2147483647, 'rashi@gmail.com', 2147483647, 0, '1998-12-13', 'worker', 'suggestion', 'rashi098', 'verified', 8888, 0, '0000-00-00', '0000-00-00', 'Not working'),
('abc', 6, 2147483647, 'abc@gmail.com', 182936285, 0, '1999-05-08', 'worker', 'seeking', 'abc@999', 'verified', 0, 0, '0000-00-00', '0000-00-00', 'Not working'),
('khushi', 7, 2147483647, 'khush@gmail.com', 2147483647, 0, '2000-08-20', 'Manager', 'Female', 'khush', 'verified', 1234, 10000, '2019-11-21', '0000-00-00', 'Not working'),
('xyz', 8, 2147483647, 'xyz@yahoo.com', 2147483647, 1111111111, '1992-09-14', 'seeking', 'suggestion', 'xyz666', 'verified', 1000, 10000, '2019-11-22', '2019-11-22', 'Not working'),
('akshay', 11, 2147483647, 'ak@gmail.com', 999999999, 0, '1996-11-24', 'complaint', 'complaint', 'akshay123', 'verified', 1111, 10000, '2019-11-22', '2019-11-22', 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `supname` varchar(20) NOT NULL,
  `supph` int(11) NOT NULL,
  `alph` int(11) NOT NULL,
  `gstid` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `supname`, `supph`, `alph`, `gstid`, `email`) VALUES
(4, 'zainab', 2147483647, 2147483647, '345545', 'zai@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `eid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
