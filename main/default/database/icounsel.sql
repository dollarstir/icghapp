-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2021 at 09:23 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icounsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `cid` varchar(100) DEFAULT NULL,
  `cname` text DEFAULT NULL,
  `ctype` text DEFAULT NULL,
  `clocation` text DEFAULT NULL,
  `userlocation` text DEFAULT NULL,
  `appdate` text DEFAULT NULL,
  `apptime` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `cpic` text DEFAULT NULL,
  `ccontact` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `counsellors`
--

CREATE TABLE `counsellors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `pic` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ptest`
--

CREATE TABLE `ptest` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supper`
--

CREATE TABLE `supper` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `pic` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supper`
--

INSERT INTO `supper` (`id`, `name`, `email`, `password`, `contact`, `pic`) VALUES
(3, 'Frederick  Ennin', 'kpin463@gmail.com', '7b7f50a6836e9aa947492fbb19ee53bd', '0556676471', '{}_1635057044.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `tupsu`
--

CREATE TABLE `tupsu` (
  `id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `pic` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `utable`
--

CREATE TABLE `utable` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `passcode` text DEFAULT NULL,
  `status` text DEFAULT NULL,
  `datejoined` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellors`
--
ALTER TABLE `counsellors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptest`
--
ALTER TABLE `ptest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supper`
--
ALTER TABLE `supper`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tupsu`
--
ALTER TABLE `tupsu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utable`
--
ALTER TABLE `utable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counsellors`
--
ALTER TABLE `counsellors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptest`
--
ALTER TABLE `ptest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supper`
--
ALTER TABLE `supper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tupsu`
--
ALTER TABLE `tupsu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utable`
--
ALTER TABLE `utable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
