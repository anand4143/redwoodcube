-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 11:52 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rc`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `mobileno` bigint(20) NOT NULL,
  `comapnyName` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobileno`, `comapnyName`, `message`, `createdDate`) VALUES
(35, 'admin@muzicseries.com', 'sharad@less.com', 7406146121, 'sadfsadfa', 'sdfasdf', '2020-10-11 17:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `quickrequest`
--

CREATE TABLE `quickrequest` (
  `id` int(11) NOT NULL,
  `howCanhelp` varchar(300) NOT NULL,
  `projectDescription` text NOT NULL,
  `urgentNeed` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `contactNo` bigint(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quickrequest`
--

INSERT INTO `quickrequest` (`id`, `howCanhelp`, `projectDescription`, `urgentNeed`, `username`, `contactNo`, `email`, `createdDate`) VALUES
(11, 'Web Development', 'asdfasdf', 'Tomorrow', 'admin@lesssuperstars.com', 4353523542345234, 'anand.knp@gmail.com', '2020-10-11 17:40:12'),
(12, 'Digital Marketing', 'sdfsdf', 'Today', 'admin@lesssuperstars.com', 4353523542345234, 'gungun@gmail.com', '2020-10-25 09:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userType` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=>Admin,2=>participants',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `isActive` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0->inActive,1->Active',
  `aboutUser` text NOT NULL,
  `gender` enum('male','female','others') NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `cityID` int(10) NOT NULL COMMENT 'id of city table',
  `state` int(10) NOT NULL COMMENT 'id of state tabel',
  `countryID` int(10) NOT NULL DEFAULT '1' COMMENT 'Now default value 1 as India',
  `pincode` varchar(100) NOT NULL,
  `updatedData` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `isPasswordSet` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `isDeleted` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `email`, `firstName`, `lastName`, `password`, `userType`, `createdDate`, `isActive`, `aboutUser`, `gender`, `mobileno`, `address`, `cityID`, `state`, `countryID`, `pincode`, `updatedData`, `isPasswordSet`, `isDeleted`) VALUES
(1, 'admin', 'admin@redwoodcube.com', 'Admin', 'Admin', 'QWRtaW5AMTIz', 1, '2020-10-25 10:31:55', 1, '', 'male', 'xxxxxxxxxx', 'lesssuperstars', 0, 0, 1, '', '0000-00-00 00:00:00', 1, 0),
(10, 'anand4143', 'anand.knp@gmail.com', 'ANAND', 'SHUKLA', 'MTIzNDU2', 2, '2019-10-08 17:42:30', 1, 'testing testingv', 'male', '7406146121', 'Sr No 257/1/3A, Mukai Nagar', 1363, 16, 1, '411057', '0000-00-00 00:00:00', 1, 0),
(11, 'gungun', 'gungun@gmail.com', 'Manyayyyy', 'Shukla', 'MTIzNDU2', 2, '2020-01-07 05:42:58', 1, 'hello darling', 'female', '444444444444', 'Sr No 257/1/3A, Mukai Nagar', 4861, 38, 1, '411057', '0000-00-00 00:00:00', 1, 0),
(13, 'bbdfgdf', 'sdfgfdsgsdf', 'sdfg', '', '', 2, '2020-01-07 17:06:17', 1, '', '', '', '', 0, 0, 1, '', '0000-00-00 00:00:00', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quickrequest`
--
ALTER TABLE `quickrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `quickrequest`
--
ALTER TABLE `quickrequest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
