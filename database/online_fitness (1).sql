-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 05:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Reg_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `EMail` varchar(30) NOT NULL,
  `Number` varchar(12) NOT NULL,
  `Subject` varchar(20) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Reg_id`, `Name`, `EMail`, `Number`, `Subject`, `Message`) VALUES
(1, 'Prabhjot singh', 'prabhjotpctebca21a@gmail.com', '12344656', 'test', 'Hi');

-- --------------------------------------------------------

--
-- Table structure for table `new_account`
--

CREATE TABLE `new_account` (
  `Reg_id` int(11) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Age` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` varchar(14) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_account`
--

INSERT INTO `new_account` (`Reg_id`, `Firstname`, `Lastname`, `Username`, `Age`, `Email`, `Contact`, `Password`) VALUES
(1, 'Prabhjot', 'singh', 'Prabh', '21', 'lprabh096@gmail.com', '8196931152', 'jotrajput'),
(2, 'Mohit', 'Dutta', 'mohitdutta', '21', 'mohitdutta@gmail.com', '8196931152', '2356'),
(3, 'Garima', 'dhingra', 'gd2002', '22', 'lprabh096@gmail.com', '8196931152', '9090');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Reg_id`);

--
-- Indexes for table `new_account`
--
ALTER TABLE `new_account`
  ADD PRIMARY KEY (`Reg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `new_account`
--
ALTER TABLE `new_account`
  MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
