-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 03:48 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarahb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `mem_id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `emailAd` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthDate` date NOT NULL,
  `userName` varchar(50) NOT NULL,
  `passWord` varchar(50) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `bloodGrp` varchar(150) NOT NULL,
  `bloodPress` varchar(150) NOT NULL,
  `temp` varchar(150) NOT NULL,
  `pulseRt` varchar(150) NOT NULL,
  `weight` varchar(150) NOT NULL,
  `height` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`mem_id`, `firstName`, `lastName`, `emailAd`, `phone`, `address`, `birthDate`, `userName`, `passWord`, `userType`, `bloodGrp`, `bloodPress`, `temp`, `pulseRt`, `weight`, `height`) VALUES
(1, 'admin', 'admin', 'admin@mail.com', 123, '123admin', '2000-01-01', 'admin', 'admin', 'admin', '', '', '', '', '', ''),
(20, 'test', 'sample', 'test@sample.com', 12334546, 'test123sample', '2022-12-14', 'sample', '$2y$10$DHpkqPtwl0GYH5oC234nfeyDfqUZEtVn9VBD8fjqizz', 'user', 'A+', '120/70', '36.6', '120', '65kg', '165cm'),
(22, 'test', 'sample', 'test@sample.com', 123321, 'test123test', '2022-12-14', 'sample2', '123', 'user', 'O-', '120/70', '37', '100', '50kg', '155cm'),
(23, 'Juan', 'De La Cruz', 'JuanDeLaCruz@mail.com', 2147483647, 'JuanDeLaCruz Street', '2023-01-10', 'JuanCruz', '123456', 'user', 'A-', '130/70', '36', '120', '75kg', '170cm'),
(24, 'Example', 'One', 'Example@mail.com', 2147483647, 'Example Street', '2023-01-10', 'Example', '0123', 'user', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `mem_id` int(15) NOT NULL,
  `service` varchar(150) NOT NULL,
  `dateNow` datetime NOT NULL,
  `appointDate` date NOT NULL,
  `appointTime` time NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`mem_id`, `service`, `dateNow`, `appointDate`, `appointTime`, `status`) VALUES
(22, 'Test', '2023-01-12 08:40:17', '2023-01-16', '10:30:00', 'Pending'),
(23, 'Sample', '2023-01-12 08:41:27', '2023-01-18', '01:00:00', 'Pending'),
(24, 'Testing', '2023-01-12 08:42:33', '2023-01-13', '03:00:00', 'Pending'),
(24, 'Example', '2023-01-12 08:44:41', '2023-01-18', '01:00:00', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`mem_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
