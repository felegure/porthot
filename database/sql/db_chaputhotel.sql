-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 déc. 2019 à 15:01
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_hotel`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
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
  `created_on` date NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`adminID`, `username`, `email`, `password`, `fname`, `lname`, `gender`, `dob`, `contact`, `address`, `image`, `created_on`, `group_id`) VALUES
(1, 'admin', 'ndbhalerao91@gmail.com', 'aa7f019c326413d5b8bcad4314228bcd33ef557f5d81c7cc977f7728156f4357', 'Nikhil', 'Bhalerao', 'Male', '2011-05-02', '9423979339', 'Nashik', 'nikhilpng.png', '2018-04-30', 1),
(2, 'user1', 'user1@yahoo.com', 'user1', 'Felicien', 'Nezzi', 'M', '', 'Mr NEZZI', 'straat', '', '2019-11-04', 1);

-- --------------------------------------------------------

--
-- Structure de la table `manage_website`
--

CREATE TABLE `manage_website` (
  `webID` int(11) NOT NULL,
  `title` varchar(600) NOT NULL,
  `short_title` varchar(600) NOT NULL,
  `logo` text NOT NULL,
  `footer` text NOT NULL,
  `currency_code` varchar(600) NOT NULL,
  `currency_symbol` varchar(600) NOT NULL,
  `login_logo` text NOT NULL,
  `invoice_logo` text NOT NULL,
  `background_login_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `manage_website`
--

INSERT INTO `manage_website` (`webID`, `title`, `short_title`, `logo`, `footer`, `currency_code`, `currency_symbol`, `login_logo`, `invoice_logo`, `background_login_image`) VALUES
(1, '', '', 'logo png.png', '', '', '', 'logo png.png', '', '1 (1).jpg');

-- --------------------------------------------------------

--
-- Structure de la table `Chapbooking`
--

CREATE TABLE `Chapbooking` (
  `bookID` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `roomname` varchar(500) NOT NULL,
  `kidno` int(200) NOT NULL,
  `adultno` int(200) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `taxamount` int(200) NOT NULL,
  `totalamount` int(200) NOT NULL,
  `paid` int(200) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chapbooking`
--

INSERT INTO `Chapbooking` (`bookID`, `name`, `roomname`, `kidno`, `adultno`, `fromdate`, `todate`, `taxamount`, `totalamount`, `paid`, `created_date`) VALUES
(12, '1', '11', 1, 2, '2019-09-03', '2019-09-01', 1199, 1100, 500, '2019-09-09'),
(13, '1', '11', 1, 2, '2019-09-11', '2019-09-02', 5841, 4950, 0, '2019-09-09'),
(14, '1', '11', 1, 2, '2019-09-04', '2019-09-03', 649, 550, 0, '2019-09-09'),
(15, '2', '14', 1, 2, '2019-09-01', '2019-09-30', 25288, 23200, 0, '2019-09-10'),
(16, '2', '12', 1, 1, '2019-09-01', '2019-09-30', 16240, 14500, 0, '2019-09-10'),
(17, '2', '11', 1, 1, '2019-09-01', '2019-09-30', 15399, 13050, 0, '2019-09-10'),
(19, '3', '11', 0, 3, '2019-09-17', '2019-09-10', 6867, 6300, 0, '2019-09-10'),
(20, '3', '12', 0, 2, '2019-09-04', '2019-09-03', 784, 700, 0, '2019-09-10'),
(21, '3', '13', 0, 1, '2019-09-02', '2019-09-01', 436, 400, 0, '2019-09-10'),
(22, '2', '12', 1, 2, '2019-09-18', '2019-09-11', 7021, 5950, 0, '2019-09-10'),
(23, '1', '11,', 3, 2, '2019-10-21', '2019-10-24', 3717, 3150, 0, '2019-10-20');

-- --------------------------------------------------------

--
-- Structure de la table `Chapcurrency`
--

CREATE TABLE `Chapcurrency` (
  `curID` int(11) NOT NULL,
  `currcode` varchar(50) NOT NULL,
  `currsymbol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chapcurrency`
--

INSERT INTO `vcurrency` (`curID`, `currcode`, `currsymbol`) VALUES
(2, 'INR', 'rs'),
(3, 'USD', '$');

-- --------------------------------------------------------

--
-- Structure de la table `Chapcustomer`
--

CREATE TABLE `Chapcustomer` (
  `custID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `contact` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chapcustomer`
--

INSERT INTO `Chapcustomer` (`custID`, `name`, `email`, `gender`, `birthdate`, `contact`, `address`, `created_date`) VALUES
(1, 'Atul Pethkar', 'atul@gmail.com', 'Female', '1991-05-29', '9423979339', 'India', '2019-09-09'),
(2, 'John Smith', 'john@gmail.com', 'Male', '1998-06-17', '9090909090', 'India', '2019-09-09'),
(3, 'Dhanu G', 'dhanu@gmail.com', 'Female', '2013-06-15', '9090909090', 'India', '2019-09-10');

-- --------------------------------------------------------

--
-- Structure de la table `Chapdiscount`
--

CREATE TABLE `Chapdiscount` (
  `discID` int(50) NOT NULL,
  `discountname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `expirydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chapdiscount`
--

INSERT INTO `Chapdiscount` (`discID`, `discountname`, `percentage`, `expirydate`) VALUES
(1, 'Flat', 25, '2019-07-27'),
(2, 'upto', 50, '2019-07-31');

-- --------------------------------------------------------

--
-- Structure de la table `Chapemail_config`
--

CREATE TABLE `Chapemail_config` (
  `emailID` int(21) NOT NULL,
  `name` varchar(500) NOT NULL,
  `mail_driver_host` varchar(5000) NOT NULL,
  `mail_port` int(50) NOT NULL,
  `mail_username` varchar(50) NOT NULL,
  `mail_password` varchar(30) NOT NULL,
  `mail_encrypt` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chapemail_config`
--

INSERT INTO `Chapemail_config` (`emailID`, `name`, `mail_driver_host`, `mail_port`, `mail_username`, `mail_password`, `mail_encrypt`) VALUES
(1, '<hotal_booking> ', 'mail.upturnit.com', 587, 'contact.info@upturnit.com', 'x(ilz?cWumI2', 'sdsad');

-- --------------------------------------------------------

--
-- Structure de la table `Chappayment`
--

CREATE TABLE `Chappayment` (
  `paymentID` int(100) NOT NULL,
  `bookingID` int(100) NOT NULL,
  `amount` decimal(12) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chappayment`
--

INSERT INTO `Chappayment` (`paymentID`, `bookingID`, `amount`, `datee`) VALUES
(3, 14, 649, '2019-09-09'),
(4, 13, 5000, '2019-09-07'),
(6, 12, 500, '2019-09-10'),
(7, 12, 500, '2019-09-25');

-- --------------------------------------------------------

--
-- Structure de la table `Chaprooms`
--

CREATE TABLE `Chaprooms` (
  `roomID` int(50) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `room_typeID` varchar(3)NOT NULL,
  `floorno` int(50) NOT NULL,
  `peradultprice` int(50) NOT NULL,
  `perkidprice` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `Chaproom_type` (
  `room_typeID` varchar(3) NOT NULL,
  `room_typeDE varchar(50) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chaprooms`
--

INSERT INTO `Chaprooms` (`room_typeID`, `floorno`, `roomname`, `peradultprice`, `perkidprice`, `color`) VALUES
(11, 1, 'Superior', 300, 150, 'SLATEBLUE'),
(12, 1, 'double', 350, 150, 'pink'),
(13, 1, 'superior', 400, 300, 'orange'),
(14, 1, 'triple', 300, 200, 'yellow'),
(15, 1, 'Quad', 300, 200, 'green'),
(18, 1, 'deluxe', 300, 200, 'pink');

-- --------------------------------------------------------

--
-- Structure de la table `Chaptax`
--

CREATE TABLE `Chaptax` (
  `taxID int(50) NOT NULL,
  `taxname` varchar(50) NOT NULL,
  `percentage` int(50) NOT NULL,
  `shortcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Chaptax`
--

INSERT INTO `Chaptax` (`taxID`, `taxname`, `percentage`, `shortcode`) VALUES
(1, 'Goods And Services Tax', 18, 'GST'),
(2, 'Central GST', 9, 'CGST'),
(4, 'service tax', 12, 'st'),
(6, 'Goods Tax', 9, 'GT');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `manage_website`
--
ALTER TABLE `manage_website`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chapbooking`
--
ALTER TABLE `Chapbooking`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chapcurrency`
--
ALTER TABLE `Chapcurrency`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chapcustomer`
--
ALTER TABLE `Chapcustomer`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chapdiscount`
--
ALTER TABLE `Chapdiscount`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chapemail_config`
--
ALTER TABLE `Chapemail_config`
  ADD PRIMARY KEY (`e_id`);

--
-- Index pour la table `Chappayment`
--
ALTER TABLE `Chappayment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chaprooms`
--
ALTER TABLE `Chaprooms`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Chaptax`
--
ALTER TABLE `Chaptax`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `manage_website`
--
ALTER TABLE `manage_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Chapbooking`
--
ALTER TABLE `Chapbooking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `Chapcurrency`
--
ALTER TABLE `Chapcurrency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `Chapcustomer`
--
ALTER TABLE `Chapcustomer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `Chapdiscount`
--
ALTER TABLE `Chapdiscount`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `Chapemail_config`
--
ALTER TABLE `Chapemail_config`
  MODIFY `e_id` int(21) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `Chappayment`
--
ALTER TABLE `Chappayment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `Chaprooms`
--
ALTER TABLE `Chaprooms`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `Chaptax`
--
ALTER TABLE `Chaptax`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
