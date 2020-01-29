-- phpMyadmins SQL Dump
-- version 4.9.2
-- https://www.phpmyadmins.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2019 at 02:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chaput_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapadmins`
--

CREATE TABLE `chapadmins` (
  `adminID` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` text NOT NULL,
  `contact` text NOT NULL,
  `address` varchar(500) NOT NULL,
  `image` varchar(2000) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapadmins`
--

INSERT INTO `chapadmins` (`adminID`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_at`, `updated_at`, `group_id`) VALUES
(1, 'admin', 'ndbhalerao91@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'Nikhil', 'Bhalerao', 'Male', '2011-05-02', '9423979339', 'Nashik', 'nikhilpng.png', '2018-04-30', '0000-00-00 00:00:00', 1),
(2, 'user1', 'user1@yahoo.com', 'user1', 'Felicien', 'Nezzi', 'M', '', 'Mr NEZZI', 'straat', '', '2019-11-04', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `Chapbookings`
--

CREATE TABLE `Chapbookings` (
  `bookID` int(10) NOT NULL,
  `custID` int(10) NOT NULL,
  `roomID` int(10) NOT NULL,
  `kidno` int(200) NOT NULL,
  `adultno` int(200) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `taxamount` int(200) NOT NULL,
  `totalamount` int(200) NOT NULL,
  `paid` int(200) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Chapbookings`
--

INSERT INTO `Chapbookings` (`bookID`, `custID`, `roomID`, `kidno`, `adultno`, `fromdate`, `todate`, `taxamount`, `totalamount`, `paid`, `created_date`, `updated_date`) VALUES
(12, 1, 11, 1, 2, '2019-09-03', '2019-09-01', 1199, 1100, 500, '2019-09-09', '0000-00-00 00:00:00'),
(13, 1, 11, 1, 2, '2019-09-11', '2019-09-02', 5841, 4950, 0, '2019-09-09', '0000-00-00 00:00:00'),
(14, 1, 11, 1, 2, '2019-09-04', '2019-09-03', 649, 550, 0, '2019-09-09', '0000-00-00 00:00:00'),
(15, 2, 14, 1, 2, '2019-09-01', '2019-09-30', 25288, 23200, 0, '2019-09-10', '0000-00-00 00:00:00'),
(16, 2, 12, 1, 1, '2019-09-01', '2019-09-30', 16240, 14500, 0, '2019-09-10', '0000-00-00 00:00:00'),
(17, 2, 11, 1, 1, '2019-09-01', '2019-09-30', 15399, 13050, 0, '2019-09-10', '0000-00-00 00:00:00'),
(19, 3, 11, 0, 3, '2019-09-17', '2019-09-10', 6867, 6300, 0, '2019-09-10', '0000-00-00 00:00:00'),
(20, 3, 12, 0, 2, '2019-09-04', '2019-09-03', 784, 700, 0, '2019-09-10', '0000-00-00 00:00:00'),
(21, 3, 13, 0, 1, '2019-09-02', '2019-09-01', 436, 400, 0, '2019-09-10', '0000-00-00 00:00:00'),
(22, 2, 12, 1, 2, '2019-09-18', '2019-09-11', 7021, 5950, 0, '2019-09-10', '0000-00-00 00:00:00'),
(23, 1, 11, 3, 2, '2019-10-21', '2019-10-24', 3717, 3150, 0, '2019-10-20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Chapcurrencies`
--

CREATE TABLE `Chapcurrencies` (
  `curID` int(11) NOT NULL,
  `currcode` varchar(50) NOT NULL,
  `currsymbol` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Chapcustomers`
--

CREATE TABLE `Chapcustomers` (
  `custID` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Chapcustomers`
--

INSERT INTO `Chapcustomers` (`custID`, `fname`, `lname`, `email`, `gender`, `birthdate`, `contact`, `address`, `created_date`, `updated_date`) VALUES
(1, 'Atul', 'Pethkar', 'atul@gmail.com', 'Female', '1991-05-29', '9423979339', 'India', '2019-09-09', NULL),
(2, 'John', 'Smith', 'john@gmail.com', 'Male', '1998-06-17', '9090909090', 'India', '2019-09-09', NULL),
(3, 'Dhanu', 'Ghandi', 'dhanu@gmail.com', 'Female', '2013-06-15', '9090909090', 'India', '2019-09-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Chapdiscounts`
--

CREATE TABLE `Chapdiscounts` (
  `discID` int(50) NOT NULL,
  `discountname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `expirydate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Chapemailconfigs`
--

CREATE TABLE `Chapemailconfigs` (
  `emailID` int(21) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Chapemailconfigs`
--

INSERT INTO `Chapemailconfigs` (`emailID`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`, `created_at`, `updated_at`) VALUES
(1, '<hotal_booking> ', 'mail.upturnit.com', 587, 'contact.info@upturnit.com', 'x(ilz?cWumI2', 'sdsad', '2019-12-17 14:15:13', '2019-12-17 14:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `Chappayments`
--

CREATE TABLE `Chappayments` (
  `paymentID` int(100) NOT NULL,
  `bookingID` int(100) NOT NULL,
  `amount` decimal(12,0) NOT NULL,
  `datee` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Chaprooms`
--

CREATE TABLE `Chaprooms` (
  `roomID` int(50) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `room_typeID` varchar(3) NOT NULL,
  `floorno` int(50) NOT NULL,
  `peradultprice` int(50) NOT NULL,
  `perkidprice` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Chaprooms`
--

INSERT INTO `Chaprooms` (`roomID`, `roomname`, `room_typeID`, `floorno`, `peradultprice`, `perkidprice`, `color`, `image`, `created_at`, `updated_at`) VALUES
(11, '', '1', 1, 300, 150, 'SLATEBLUE', '/img/bedroom-11.jpg', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(12, '', '1', 2, 350, 150, 'pink', '/img/bedroom-12.jpg', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(13, '', '2', 1, 400, 300, 'orange', '/img/bedroom-13.jpg', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(14, '', '2', 2, 300, 200, 'yellow', '/img/bedroom-14.jpg', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(15, '', '3', 2, 300, 200, 'green', '/img/bedroom-15.jpg', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(18, '', '3', 3, 300, 200, 'pink', '/img/bedroom-18.jpg', '2019-12-17 14:12:03', '2019-12-17 14:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `Chaproomstypes`
--

CREATE TABLE `Chaproomstypes` (
  `room_typeID` varchar(3) NOT NULL,
  `room_typeDE` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Chaptaxs`
--

CREATE TABLE `Chaptaxs` (
  `taxID` int(10) NOT NULL,
  `taxname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `shortcode` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Chapbookings`
--
ALTER TABLE `Chapbookings`
  ADD PRIMARY KEY (`bookID`),
  ADD UNIQUE KEY `bookID` (`bookID`),
  ADD KEY `Chapbookings_ibfk_1` (`roomID`);

--
-- Indexes for table `Chapcurrencies`
--
ALTER TABLE `Chapcurrencies`
  ADD PRIMARY KEY (`curID`);

--
-- Indexes for table `Chapcustomers`
--
ALTER TABLE `Chapcustomers`
  ADD PRIMARY KEY (`custID`),
  ADD KEY `lname` (`lname`);

--
-- Indexes for table `Chapdiscounts`
--
ALTER TABLE `Chapdiscounts`
  ADD PRIMARY KEY (`discID`);

--
-- Indexes for table `Chapemailconfigs`
--
ALTER TABLE `Chapemailconfigs`
  ADD PRIMARY KEY (`emailID`),
  ADD UNIQUE KEY `mail_username` (`mail_username`);

--
-- Indexes for table `Chappayments`
--
ALTER TABLE `Chappayments`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `Chaprooms`
--
ALTER TABLE `Chaprooms`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `Chaproomstypes`
--
ALTER TABLE `Chaproomstypes`
  ADD PRIMARY KEY (`room_typeID`);

--
-- Indexes for table `Chaptaxs`
--
ALTER TABLE `Chaptaxs`
  ADD PRIMARY KEY (`taxID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Chapbookings`
--
ALTER TABLE `Chapbookings`
  ADD CONSTRAINT `Chapbookings_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `Chaprooms` (`roomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
