-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2018 at 09:48 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactlist`
--

CREATE TABLE `contactlist` (
  `name` varchar(25) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactlist`
--

INSERT INTO `contactlist` (`name`, `phoneNumber`) VALUES
('Abusa', '012-9875243'),
('Amer', '013-5741235'),
('Aris', '018-9586578'),
('Bakri', '019-7541358'),
('Hakeem', '016-5687125'),
('Haris', '016-88954221'),
('Hidayah', '012-3578412'),
('Kamal', '017-8523694'),
('Kiza', '016-6324781'),
('Lee', '016-5741225'),
('mamat', '012-8974661'),
('Mansor', '019-6543289'),
('Mari', '013-5847214'),
('Maria', '019-4385712'),
('Musa', '019-5743663'),
('Nouman', '014-2254687'),
('Parsi', '017-8542257'),
('Rama', '017-8977452'),
('Samsul', '011-5435753'),
('Sarah', '014-1234567'),
('Sulaiman', '014-8895324');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactlist`
--
ALTER TABLE `contactlist`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
