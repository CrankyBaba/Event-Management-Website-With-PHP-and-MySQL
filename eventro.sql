-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 07:30 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eventro`
--

-- --------------------------------------------------------

--
-- Table structure for table `eloc`
--

CREATE TABLE `eloc` (
  `lid` int(10) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `lloc` varchar(255) DEFAULT NULL,
  `lprice` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eloc`
--

INSERT INTO `eloc` (`lid`, `lname`, `lloc`, `lprice`) VALUES
(1, 'Myrah Banquets', '164, Prasad Square,\r\nAcharya Jagadish Chandra Bose,\r\nKolkata, West Bengal 700014', NULL),
(2, 'Longia Banquet', '36 PWD Road,Longia Tower,\r\nDebigarh,U B Colony,Ariadaha,\r\nKolkata,West Bengal 700035', NULL),
(3, 'Khushali', '29, Jessore Rd, K.B.Sarani,\r\nAmarpalli, South Dum Dum,\r\nKolkata, West Bengal 700028', NULL),
(4, 'Filigree Banquets', 'Raghunathpur Road,\r\nRaghunathpur, Baguiati,\r\nKolkata, West Bengal 700059', NULL),
(5, 'The Cindrerella Hotel', '3rd,Sevoke Road,\r\nWard No 42,\r\nSiliguri, West Bengal 734008', NULL),
(6, 'The Forresta', 'Eastern ypass,\r\nDon Bosco Colony\r\nSiliguri,West Bengal 734004', NULL),
(7, 'Rajdarbar Banquet', 'Hill Cart Road,Ward No 1,\r\nMahananda Bridge,Gurung Basty\r\nSiliguri, West Bengal 734003', NULL),
(8, 'Mount Milestone Banquets', 'Opposite of Bhaktinagar P.S,\r\nCheck post, Sevoke Road,\r\nSiliguri, West Bengal 734001', NULL),
(9, 'Hotel Sevoke Valley Residency', 'Sishir Bhaduri Srani,Khudirampally\r\nWard 11,Hakim Para,\r\nSiliguri, West Bengal 734001', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `evbook`
--

CREATE TABLE `evbook` (
  `id` int(10) NOT NULL,
  `ebname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phno` int(10) NOT NULL,
  `elid` int(10) NOT NULL,
  `did` int(10) NOT NULL,
  `guest` int(10) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evbook`
--

INSERT INTO `evbook` (`id`, `ebname`, `email`, `phno`, `elid`, `did`, `guest`, `checkin`, `checkout`, `price`) VALUES
(1, 'The Cindrerella Hotel', '', 23132131, 5, 1, 2, '2018-07-01', '2018-07-04', 12000000),
(2, 'The Cindrerella Hotel', 'b@g.com', 65466, 5, 1, 300, '2018-07-07', '2018-07-09', 1350000000);

-- --------------------------------------------------------

--
-- Table structure for table `userstable`
--

CREATE TABLE `userstable` (
  `Id` int(10) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userstable`
--

INSERT INTO `userstable` (`Id`, `FullName`, `Email`, `PASSWORD`) VALUES
(9, 'Amit Kumar Dey', 'am@g.com', 'am'),
(10, 'b', 'b@g.com', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eloc`
--
ALTER TABLE `eloc`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `evbook`
--
ALTER TABLE `evbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userstable`
--
ALTER TABLE `userstable`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eloc`
--
ALTER TABLE `eloc`
  MODIFY `lid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `evbook`
--
ALTER TABLE `evbook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userstable`
--
ALTER TABLE `userstable`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
