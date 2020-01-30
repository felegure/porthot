-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2020 at 11:10 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.7

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
-- Table structure for table `chapbookings`
--

CREATE TABLE `chapbookings` (
  `bookID` int(10) NOT NULL,
  `custID` int(10) NOT NULL,
  `roomID` int(10) NOT NULL,
  `kidno` int(2) NOT NULL DEFAULT '0',
  `adultno` int(2) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `taxamount` int(10) NOT NULL,
  `totalamount` int(10) NOT NULL,
  `paid` int(200) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapbookings`
--

INSERT INTO `chapbookings` (`bookID`, `custID`, `roomID`, `kidno`, `adultno`, `fromdate`, `todate`, `taxamount`, `totalamount`, `paid`, `created_at`, `updated_at`, `fname`, `lname`, `email`, `address`, `postalcode`, `city`, `country`) VALUES
(12, 1, 11, 1, 2, '2019-12-20', '2019-12-23', 1199, 1100, 500, '2020-01-09', '2020-01-09 14:05:30', '', '', '', '', '', '', ''),
(93, 887, 18, 0, 1, '2020-02-05', '2020-02-10', 0, 1590, NULL, '2020-01-27', '2020-01-27 19:51:10', 'Nezzi', 'Felicien', 'fnezzi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(111, 171, 12, 0, 1, '2019-09-02', '2019-10-06', 0, 12614, NULL, '2020-01-28', '2020-01-28 15:00:16', 'Nezzi', 'Felicien', 'ddd@gmail.coma', 'rue de corde', '1000', 'bruxelles', 'France'),
(112, 278, 12, 0, 1, '2019-10-06', '2019-10-15', 0, 3339, NULL, '2020-01-28', '2020-01-28 15:02:01', 'fffffffffffffffffff', 'qqqqqqqqqqqqqqq', 'koffi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(113, 637, 13, 0, 1, '2019-10-06', '2020-02-15', 0, 55968, NULL, '2020-01-28', '2020-01-28 15:03:24', 'rrrrrr', 'eeee', 'fnezzi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(114, 963, 11, 0, 1, '2020-02-01', '2020-02-29', 0, 8904, NULL, '2020-01-28', '2020-01-28 15:04:39', 'uuuuu', 'yyyyy', 'koffi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(115, 992, 12, 0, 1, '2020-02-20', '2020-03-30', 0, 14469, NULL, '2020-01-28', '2020-01-28 15:05:40', 'NEZZI KOUAKOUJOHN', 'azerty', 'fnezzi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(116, 507, 13, 0, 1, '2020-03-02', '2020-03-30', 0, 11872, NULL, '2020-01-28', '2020-01-28 15:06:38', 'fd', 'gffff', 'fnezzi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(117, 1297, 12, 0, 1, '2020-04-06', '2020-04-10', 0, 1484, NULL, '2020-01-28', '2020-01-28 15:08:04', 'kkkk', 'gkljkhhj', 'fnezzi@gmail.com', 'g', '9300', 'gf', 'gf'),
(118, 1147, 14, 0, 1, '2019-12-01', '2020-04-30', 0, 48018, NULL, '2020-01-28', '2020-01-28 15:09:33', 'ezerer', 'zzzerzer', 'fnezzi@gmail.com', 'zererzerz', 'ererz', 're', 'French Guiana'),
(119, 1446, 15, 0, 1, '2019-12-01', '2020-04-30', 0, 48018, NULL, '2020-01-28', '2020-01-28 15:10:12', 'etrtrtr', 'Felicien', 'koffi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium'),
(120, 1439, 14, 0, 1, '2020-05-01', '2020-05-02', 0, 318, NULL, '2020-01-28', '2020-01-28 16:25:12', 'Nezzi', 'Felicien', 'fnezzi@gmail.com', 'Denderstraat 76', '9300', 'Alost', 'Belgium');

-- --------------------------------------------------------

--
-- Table structure for table `chapbookingsold`
--

CREATE TABLE `chapbookingsold` (
  `bookID` int(10) NOT NULL DEFAULT '0',
  `custID` int(10) NOT NULL,
  `roomID` int(10) NOT NULL,
  `kidno` int(2) NOT NULL DEFAULT '0',
  `adultno` int(2) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `taxamount` int(10) NOT NULL,
  `totalamount` int(10) NOT NULL,
  `paid` int(200) DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chapbookingsold`
--

INSERT INTO `chapbookingsold` (`bookID`, `custID`, `roomID`, `kidno`, `adultno`, `fromdate`, `todate`, `taxamount`, `totalamount`, `paid`, `created_at`, `updated_at`) VALUES
(12, 1, 11, 1, 2, '2019-12-20', '2019-12-23', 1199, 1100, 500, '2020-01-09', '2020-01-09 14:05:30'),
(13, 1, 11, 1, 2, '2019-12-24', '2019-12-26', 5841, 4950, 0, '2020-01-09', '2020-01-09 14:05:30'),
(14, 1, 11, 1, 2, '2019-09-04', '2019-09-03', 649, 550, 0, '2020-01-09', '2020-01-09 14:05:30'),
(15, 2, 14, 1, 2, '2019-09-01', '2019-09-30', 25288, 23200, 0, '2020-01-09', '2020-01-09 14:05:30'),
(16, 2, 12, 1, 1, '2019-09-01', '2019-09-30', 16240, 14500, 0, '2020-01-09', '2020-01-09 14:05:30'),
(17, 2, 11, 1, 1, '2019-09-01', '2019-09-30', 15399, 13050, 0, '2020-01-09', '2020-01-09 14:05:30'),
(19, 3, 11, 0, 3, '2019-09-17', '2019-09-10', 6867, 6300, 0, '2020-01-09', '2020-01-09 14:05:30'),
(20, 3, 12, 0, 2, '2019-09-04', '2019-09-03', 784, 700, 0, '2020-01-09', '2020-01-09 14:05:30'),
(21, 3, 13, 0, 1, '2019-09-02', '2019-09-01', 436, 400, 0, '2020-01-09', '2020-01-09 14:05:30'),
(22, 2, 12, 1, 2, '2019-09-18', '2019-09-11', 7021, 5950, 0, '2020-01-09', '2020-01-09 14:05:30'),
(23, 1, 11, 3, 2, '2019-10-21', '2019-10-24', 3717, 3150, 0, '2020-01-09', '2020-01-09 14:05:30'),
(48, 999, 15, 1, 2, '2020-01-12', '2020-01-12', 0, 0, NULL, '2020-01-15', '2020-01-15 11:28:40'),
(51, 999, 18, 1, 2, '2020-01-16', '2020-01-17', 0, 300, NULL, '2020-01-15', '2020-01-15 12:47:13'),
(52, 999, 12, 15, 2, '2020-01-03', '2020-01-04', 0, 350, NULL, '2020-01-15', '2020-01-15 12:48:43'),
(53, 999, 11, 0, 1, '2020-01-05', '2020-01-06', 0, 300, NULL, '2020-01-15', '2020-01-15 13:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `chapcurrencies`
--

CREATE TABLE `chapcurrencies` (
  `curID` int(11) NOT NULL,
  `currcode` varchar(50) NOT NULL,
  `currsymbol` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapcustomers`
--

CREATE TABLE `chapcustomers` (
  `custID` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `postalcode` varchar(20) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chapcustomers`
--

INSERT INTO `chapcustomers` (`custID`, `fname`, `lname`, `email`, `gender`, `birthdate`, `contact`, `address`, `postalcode`, `city`, `country`, `phone`, `created_date`, `updated_date`) VALUES
(1, 'Atul', 'Pethkar', 'atul@gmail.com', 'Female', '1991-05-29', '9423979339', 'India', '', '', '', '', '2019-09-09', NULL),
(2, 'John', 'Smith', 'john@gmail.com', 'Male', '1998-06-17', '9090909090', 'India', '', '', '', '', '2019-09-09', NULL),
(3, 'Dhanu', 'Ghandi', 'dhanu@gmail.com', 'Female', '2013-06-15', '9090909090', 'India', '', '', '', '', '2019-09-10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chapdiscounts`
--

CREATE TABLE `chapdiscounts` (
  `discID` int(50) NOT NULL,
  `discountname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `expirydate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chapemailconfigs`
--

CREATE TABLE `chapemailconfigs` (
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
-- Dumping data for table `chapemailconfigs`
--

INSERT INTO `chapemailconfigs` (`emailID`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`, `created_at`, `updated_at`) VALUES
(1, '<hotal_booking> ', 'mail.upturnit.com', 587, 'contact.info@upturnit.com', 'x(ilz?cWumI2', 'sdsad', '2019-12-17 14:15:13', '2019-12-17 14:15:13');

-- --------------------------------------------------------

--
-- Stand-in structure for view `chapfreeroomes`
-- (See below for the actual view)
--
CREATE TABLE `chapfreeroomes` (
`roomID` int(50)
,`roomname` varchar(50)
,`peradultprice` int(50)
,`image` varchar(50)
,`status` char(1)
,`todate` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chapfreerooms`
-- (See below for the actual view)
--
CREATE TABLE `chapfreerooms` (
`roomID` int(50)
,`roomname` varchar(50)
,`status` char(1)
,`floorno` int(50)
,`peradultprice` int(50)
,`perkidprice` int(50)
,`image` varchar(50)
,`room_typeDE` varchar(50)
,`fromdate` date
,`todate` date
,`taxamount` int(10)
,`totalamount` int(10)
,`paid` int(200)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `chapfreerooms2`
-- (See below for the actual view)
--
CREATE TABLE `chapfreerooms2` (
`roomID` int(50)
,`roomname` varchar(50)
,`peradultprice` int(50)
,`image` varchar(50)
,`status` char(1)
,`max(todate)` date
);

-- --------------------------------------------------------

--
-- Table structure for table `chappayments`
--

CREATE TABLE `chappayments` (
  `paymentID` int(100) NOT NULL,
  `bookingID` int(100) NOT NULL,
  `amount` decimal(12,0) NOT NULL,
  `datee` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chaprooms`
--

CREATE TABLE `chaprooms` (
  `roomID` int(50) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `room_typeID` varchar(3) NOT NULL,
  `floorno` int(50) NOT NULL,
  `peradultprice` int(50) NOT NULL,
  `perkidprice` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chaprooms`
--

INSERT INTO `chaprooms` (`roomID`, `roomname`, `room_typeID`, `floorno`, `peradultprice`, `perkidprice`, `color`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Room 11', 'lu1', 1, 300, 150, 'SLATEBLUE', 'img/bedroom-11.jpg', 'A', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(12, 'Room 12', 'lu2', 2, 350, 150, 'pink', 'img/bedroom-12.jpg', 'A', '2019-12-19 14:12:03', '2019-12-27 14:12:03'),
(13, 'Room 13', 'lu4', 1, 400, 300, 'orange', 'img/bedroom-9.jpg', 'A', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(14, 'Room 14', 'st1', 2, 300, 200, 'yellow', 'img/bedroom-4.jpg', 'A', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(15, 'Room 15', 'st2', 2, 300, 200, 'green', 'img/bedroom-8.jpg', 'A', '2019-12-17 14:12:03', '2019-12-17 14:12:03'),
(18, 'Room 18', 'lu6', 3, 300, 200, 'pink', 'img/bedroom-6.jpg', 'A', '2019-12-17 14:12:03', '2019-12-17 14:12:03');

-- --------------------------------------------------------

--
-- Table structure for table `chaproomtypes`
--

CREATE TABLE `chaproomtypes` (
  `room_typeID` varchar(3) NOT NULL,
  `room_typeDE` varchar(50) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'A',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chaproomtypes`
--

INSERT INTO `chaproomtypes` (`room_typeID`, `room_typeDE`, `status`, `created_at`, `updated_at`) VALUES
('lu1', 'Room lux 1 bed', 'A', '2019-12-17 20:51:22', '2019-12-17 20:51:22'),
('lu2', 'Room lux 2 bed', 'A', '2019-12-17 20:52:29', '2019-12-17 20:52:29'),
('lu3', 'Royal Suite', 'A', '2019-12-17 20:54:14', '2019-12-17 20:54:14'),
('lu4', 'Super Suite - Sauna', 'A', '2019-12-17 20:54:14', '2019-12-17 20:54:14'),
('lu5', 'Room Presidential Suite', 'A', '2019-12-19 22:57:35', '2019-12-19 22:57:35'),
('lu6', 'Room Suite 3 beds + 3 beds', 'A', '2019-12-19 22:57:35', '2019-12-19 22:57:35'),
('st1', 'Room Standard one bed', 'A', '2019-12-17 20:50:25', '2019-12-17 20:50:25'),
('st2', 'Room Standard double beds', 'A', '2019-12-17 20:50:25', '2019-12-17 20:50:25'),
('st3', 'Room standard 3 beds', 'A', '2019-12-17 20:51:22', '2019-12-17 20:51:22');

-- --------------------------------------------------------

--
-- Table structure for table `chaptaxs`
--

CREATE TABLE `chaptaxs` (
  `taxID` int(10) NOT NULL,
  `taxname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `shortcode` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `chapfreeroomes`
--
DROP TABLE IF EXISTS `chapfreeroomes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chapfreeroomes`  AS  select `chapfreerooms`.`roomID` AS `roomID`,`chapfreerooms`.`roomname` AS `roomname`,`chapfreerooms`.`peradultprice` AS `peradultprice`,`chapfreerooms`.`image` AS `image`,`chapfreerooms`.`status` AS `status`,max(`chapfreerooms`.`todate`) AS `todate` from `chapfreerooms` group by `chapfreerooms`.`roomID` ;

-- --------------------------------------------------------

--
-- Structure for view `chapfreerooms`
--
DROP TABLE IF EXISTS `chapfreerooms`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chapfreerooms`  AS  select distinct `r`.`roomID` AS `roomID`,`r`.`roomname` AS `roomname`,`r`.`status` AS `status`,`r`.`floorno` AS `floorno`,`r`.`peradultprice` AS `peradultprice`,`r`.`perkidprice` AS `perkidprice`,`r`.`image` AS `image`,`t`.`room_typeDE` AS `room_typeDE`,`b`.`fromdate` AS `fromdate`,`b`.`todate` AS `todate`,`b`.`taxamount` AS `taxamount`,`b`.`totalamount` AS `totalamount`,`b`.`paid` AS `paid` from ((`chaprooms` `r` left join `chapbookings` `b` on((`r`.`roomID` = `b`.`roomID`))) join `chaproomtypes` `t` on((`r`.`room_typeID` = `t`.`room_typeID`))) where (`r`.`status` = 'A') order by `r`.`roomID` ;

-- --------------------------------------------------------

--
-- Structure for view `chapfreerooms2`
--
DROP TABLE IF EXISTS `chapfreerooms2`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chapfreerooms2`  AS  select `chapfreerooms`.`roomID` AS `roomID`,`chapfreerooms`.`roomname` AS `roomname`,`chapfreerooms`.`peradultprice` AS `peradultprice`,`chapfreerooms`.`image` AS `image`,`chapfreerooms`.`status` AS `status`,max(`chapfreerooms`.`todate`) AS `max(todate)` from `chapfreerooms` group by `chapfreerooms`.`roomID` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapbookings`
--
ALTER TABLE `chapbookings`
  ADD PRIMARY KEY (`bookID`),
  ADD UNIQUE KEY `bookID` (`bookID`),
  ADD KEY `Chapbookings_ibfk_1` (`roomID`);

--
-- Indexes for table `chapcurrencies`
--
ALTER TABLE `chapcurrencies`
  ADD PRIMARY KEY (`curID`);

--
-- Indexes for table `chapcustomers`
--
ALTER TABLE `chapcustomers`
  ADD PRIMARY KEY (`custID`),
  ADD KEY `lname` (`lname`);

--
-- Indexes for table `chapdiscounts`
--
ALTER TABLE `chapdiscounts`
  ADD PRIMARY KEY (`discID`);

--
-- Indexes for table `chapemailconfigs`
--
ALTER TABLE `chapemailconfigs`
  ADD PRIMARY KEY (`emailID`),
  ADD UNIQUE KEY `mail_username` (`mail_username`);

--
-- Indexes for table `chappayments`
--
ALTER TABLE `chappayments`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `chaprooms`
--
ALTER TABLE `chaprooms`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `chaproomtypes`
--
ALTER TABLE `chaproomtypes`
  ADD PRIMARY KEY (`room_typeID`);

--
-- Indexes for table `chaptaxs`
--
ALTER TABLE `chaptaxs`
  ADD PRIMARY KEY (`taxID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapbookings`
--
ALTER TABLE `chapbookings`
  MODIFY `bookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapbookings`
--
ALTER TABLE `chapbookings`
  ADD CONSTRAINT `Chapbookings_ibfk_1` FOREIGN KEY (`roomID`) REFERENCES `chaprooms` (`roomID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
