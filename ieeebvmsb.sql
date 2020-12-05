-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 01:30 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ieeebvmsb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `Sr.` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Role` varchar(20) NOT NULL,
  `AdminID` varchar(40) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`Sr.`, `Name`, `Role`, `AdminID`, `Password`) VALUES
(1, 'Zeelrajsinh Mahida', 'Joint Secratary', 'zrs@ieeebvmsb.com', 'zrs'),
(2, 'Yagnik Mehta', 'Chairperson', 'yagnik@ieeebvmsb.com', 'yagnik@123'),
(3, 'Nisarg Patel', 'Vice-Chairperson', 'nisarg@ieeebvmsb.com', 'nisarg@123'),
(4, 'Shreyans Patel', 'Secretary', 'shreyans@ieeebvmsb.com', 'shreyans@123'),
(5, 'Parth Shah', 'Treasure', 'parth@ieeebvmsb.com', 'parth@123');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Sr.` int(11) NOT NULL,
  `EventType` varchar(10) NOT NULL,
  `EventCode` varchar(5) NOT NULL,
  `EventTitle` varchar(100) NOT NULL,
  `EventAbstract` varchar(1000) NOT NULL,
  `EventThumbnail` varchar(100) NOT NULL,
  `EventTitleImage` varchar(100) NOT NULL,
  `EventDescription` varchar(5000) NOT NULL,
  `EventStartDate` varchar(12) NOT NULL,
  `EventEndDate` varchar(12) NOT NULL,
  `EventReport` varchar(100) NOT NULL,
  `EventPhoto0` varchar(100) NOT NULL,
  `EventPhoto1` varchar(100) NOT NULL,
  `EventPhoto2` varchar(100) NOT NULL,
  `EventPhoto3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`Sr.`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Sr.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `Sr.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Sr.` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
