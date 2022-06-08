-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2021 at 02:20 PM
-- Server version: 10.3.27-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aamizavt_wp967`
--

-- --------------------------------------------------------

--
-- Table structure for table `wpxs_employee`
--

CREATE TABLE `wpxs_employee` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` int(11) NOT NULL,
  `EyeColor` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Salary` double NOT NULLZ
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wpxs_employee`
--

INSERT INTO `wpxs_employee` (`ID`, `Name`, `Age`, `EyeColor`, `Salary`) VALUES
(1, 'Bill', 29, 'Green', 28500.3),
(2, 'Jin', 50, 'Blue', 80500),
(3, 'Mary', 21, 'Brown', 65310.2),
(4, 'Sue', 45, 'Brown', 600000),
(5, 'Randy', 58, 'Blue', 450000.1),
(6, 'Nate', 44, 'Gray', 310560.3),
(7, 'Jay', 71, 'Blue', 156233),
(8, 'Rob', 81, 'Gray', 456000.21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wpxs_employee`
--
ALTER TABLE `wpxs_employee`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wpxs_employee`
--
ALTER TABLE `wpxs_employee`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
