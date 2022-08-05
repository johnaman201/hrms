-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 05:43 AM
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
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounting`
--

CREATE TABLE `tbl_accounting` (
  `id` int(11) NOT NULL,
  `acct_forms` varchar(255) NOT NULL,
  `forms_stats` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `id` int(255) NOT NULL,
  `deptname` varchar(255) NOT NULL,
  `deptstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`id`, `deptname`, `deptstatus`) VALUES
(1, 'ACCOUNTING DEPARTMENT', '1'),
(2, 'ADMIN DEPARTMENT', '1'),
(3, 'AUDIT DEPARTMENT', '1'),
(4, 'CALIVE', '1'),
(5, 'COMMISSARY DEPARTMENT', '1'),
(6, 'EL BURRITO', '1'),
(7, 'ELYARA', '1'),
(8, 'INVENTORY CLERK', '1'),
(9, 'IT DEPARTMENT', '1'),
(10, 'LERUE', '1'),
(11, 'MICHELENE AND MARIANNE CHICKEN MART', '1'),
(12, 'MICHELENES MART / ALL STORE', '1'),
(13, 'MICHELENES MART / MMCM', '1'),
(14, 'MICHELENES MART / PAMS', '1'),
(15, 'MICHELENES MART / RELIEVER CASHIER', '1'),
(16, 'MMV HOUSEHOLD', '1'),
(17, 'NAGCARLAN MANUKAN SHOP', '1'),
(18, 'OFFICERS', '1'),
(19, 'PALENGKE', '1'),
(20, 'PAM HOUSEHOLD', '1'),
(21, 'PAMS CHICKEN MART', '1'),
(22, 'PILA', '1'),
(23, 'PUREGOLD', '1'),
(24, 'SALESMAN', '1'),
(25, 'STA. CRUZ MEAT SHOP', '1'),
(26, 'STORAGE DEPARTMENT', '1'),
(27, 'WAREHOUSE STAFF', '1'),
(28, 'WAREHOUSE TRUCK DRIVER', '1'),
(29, 'WAREHOUSE TRUCK HELPER', '1'),
(30, 'PUBLIC MARKET', '1'),
(31, 'YAEL BREAD HOUSE', '1'),
(32, 'YIGOS DOUGH BOX CROSSING', '1'),
(33, 'YIGOS DOUGH BOX', '1'),
(34, 'YMV MEAT SHOP', '1'),
(37, 'WAREHOUSE', '1'),
(38, 'BRIGHT FACE', '1'),
(39, 'VMPV', '1'),
(40, 'KONAM', '1'),
(41, 'MICHELENE\'S FASTFOOD', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `id` int(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(10) DEFAULT NULL,
  `bday` varchar(255) DEFAULT NULL,
  `bplace` varchar(100) DEFAULT NULL,
  `readd` varchar(100) DEFAULT NULL,
  `retype` varchar(10) DEFAULT NULL,
  `restay` varchar(20) DEFAULT NULL,
  `peadd` varchar(100) DEFAULT NULL,
  `petype` varchar(10) DEFAULT NULL,
  `pestay` varchar(20) DEFAULT NULL,
  `zipcode` varchar(10) DEFAULT NULL,
  `civilstats` varchar(20) DEFAULT NULL,
  `cellno` varchar(20) DEFAULT NULL,
  `teleno` varchar(20) DEFAULT NULL,
  `sss` varchar(50) DEFAULT NULL,
  `tin` varchar(50) DEFAULT NULL,
  `philhealth` varchar(50) DEFAULT NULL,
  `pagibig` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `spouse` varchar(100) DEFAULT NULL,
  `spouseplace` varchar(100) DEFAULT NULL,
  `spouseoccu` varchar(20) DEFAULT NULL,
  `spousebday` varchar(255) DEFAULT NULL,
  `child1` varchar(100) DEFAULT NULL,
  `bday1` varchar(255) DEFAULT NULL,
  `place1` varchar(50) DEFAULT NULL,
  `child2` varchar(100) DEFAULT NULL,
  `bday2` varchar(255) DEFAULT NULL,
  `place2` varchar(50) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `fplace` varchar(50) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `mplace` varchar(50) DEFAULT NULL,
  `parentadd` varchar(100) DEFAULT NULL,
  `precompany1` varchar(100) DEFAULT NULL,
  `preposition1` varchar(50) DEFAULT NULL,
  `prefdate1` varchar(255) DEFAULT NULL,
  `preldate1` varchar(255) DEFAULT NULL,
  `precompany2` varchar(100) DEFAULT NULL,
  `preposition2` varchar(50) DEFAULT NULL,
  `prefdate2` varchar(255) DEFAULT NULL,
  `preldate2` varchar(255) DEFAULT NULL,
  `dole` varchar(10) DEFAULT NULL,
  `issuecom` varchar(50) DEFAULT NULL,
  `assoc` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL,
  `empid` varchar(150) DEFAULT NULL,
  `empdate` varchar(255) DEFAULT NULL,
  `lempdate` varchar(255) DEFAULT NULL,
  `empsalary` varchar(255) DEFAULT NULL,
  `empallowance` varchar(255) DEFAULT NULL,
  `emptotal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`id`, `fname`, `mname`, `lname`, `gender`, `age`, `bday`, `bplace`, `readd`, `retype`, `restay`, `peadd`, `petype`, `pestay`, `zipcode`, `civilstats`, `cellno`, `teleno`, `sss`, `tin`, `philhealth`, `pagibig`, `email`, `nickname`, `spouse`, `spouseplace`, `spouseoccu`, `spousebday`, `child1`, `bday1`, `place1`, `child2`, `bday2`, `place2`, `father`, `fplace`, `mother`, `mplace`, `parentadd`, `precompany1`, `preposition1`, `prefdate1`, `preldate1`, `precompany2`, `preposition2`, `prefdate2`, `preldate2`, `dole`, `issuecom`, `assoc`, `status`, `designation`, `position`, `empid`, `empdate`, `lempdate`, `empsalary`, `empallowance`, `emptotal`) VALUES
(307, 'JANE', 'DOE', 'DOE', 'FEMALE', '29', '1993-12-31', 'PHILIPPINES', 'PHILIPPINES', 'OWNED', '', 'PHILIPPINES', 'OWNED', '', '1233', 'SINGLE', '23', '123', '123', '123', '123', '123', '123@GMAIL.COM', 'JANE', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7', '1', '9', '123', '2022-08-05', '2022-08-06', '123', '123', '246');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE `tbl_events` (
  `id` int(10) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `color` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_positions`
--

CREATE TABLE `tbl_positions` (
  `id` int(255) NOT NULL,
  `positionname` varchar(255) NOT NULL,
  `positionstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_positions`
--

INSERT INTO `tbl_positions` (`id`, `positionname`, `positionstatus`) VALUES
(1, 'OPERATION MANAGER', '1'),
(2, 'SALES MANAGER', '1'),
(3, 'HR HEAD', '1'),
(4, 'PURCHASER', '1'),
(5, 'ADMIN CLERK', '1'),
(6, 'SUPPLIES CUSTODIAN', '1'),
(7, 'ASSET CUSTODIAN', '1'),
(8, 'ASSISTANT PURCHASING', '1'),
(9, 'ADMIN ASSISTANT', '1'),
(10, 'HR ASSISTANT', '1'),
(11, 'ACCOUNTING STAFF', '1'),
(12, 'ENCODER', '1'),
(13, 'BOOKKEEPER', '1'),
(14, 'IT', '1'),
(15, 'STORAGE SUPERVISOR', '1'),
(16, 'CASHIER', '1'),
(17, 'UTILITY DRIVER', '1'),
(18, 'HELPER', '1'),
(19, 'SUPERVISOR', '1'),
(20, 'BUTCHER', '1'),
(21, 'COMMISSARY HELPER', '1'),
(22, 'PACKER', '1'),
(23, 'CASHIER / SALESLADY', '1'),
(24, 'MERCHANDISER', '1'),
(25, 'SALESLADY', '1'),
(26, 'CHECKER', '1'),
(30, 'BAKER', '1'),
(31, 'COOK / SERVICE CREW', '1'),
(32, 'MARKET SUPERVISOR', '1'),
(33, 'SALESMAN', '1'),
(34, 'UTILITY HELPER', '1'),
(35, 'TRICYCLE DRIVER', '1'),
(36, 'COMMISSARY PERSONNEL', '1'),
(37, 'OFFICE STAFF', '1'),
(38, 'TRAINEE SUPERVISOR', '1'),
(39, 'TRUCK DRIVER', '1'),
(42, 'TRUCK HELPER', '1'),
(43, 'HOUSEHOLD HELPER', '1'),
(44, 'JUNIOR SALESMAN', '1'),
(45, 'DRIVER\'S SALESMAN', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(255) NOT NULL,
  `userrole_id` int(50) NOT NULL,
  `role_desc` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `id` int(11) NOT NULL,
  `statusname` varchar(255) NOT NULL,
  `statusstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `statusname`, `statusstatus`) VALUES
(1, 'REGULAR', 1),
(2, 'PROBATIONARY', 1),
(3, 'RESIGNED', 1),
(4, 'SEASONAL', 1),
(5, 'AWOL', 1),
(6, 'RELIEVER', 1),
(7, 'BACK OUT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userroles`
--

CREATE TABLE `tbl_userroles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(255) NOT NULL,
  `emp_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `emp_id`, `username`, `pword`, `status`) VALUES
(1, '0', 'master', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounting`
--
ALTER TABLE `tbl_accounting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_events`
--
ALTER TABLE `tbl_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_positions`
--
ALTER TABLE `tbl_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userroles`
--
ALTER TABLE `tbl_userroles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounting`
--
ALTER TABLE `tbl_accounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=308;

--
-- AUTO_INCREMENT for table `tbl_events`
--
ALTER TABLE `tbl_events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_positions`
--
ALTER TABLE `tbl_positions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_userroles`
--
ALTER TABLE `tbl_userroles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
