-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 18, 2025 at 09:10 PM
-- Server version: 8.0.17
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ap3235`
--

-- --------------------------------------------------------

--
-- Table structure for table `CampingCategories`
--

CREATE TABLE IF NOT EXISTS `CampingCategories` (
  `CampingCategoryID` int(11) NOT NULL,
  `CampingCategoryCode` varchar(255) NOT NULL,
  `CampingCategoryName` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `aisleNumber` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CampingCategories`
--

INSERT INTO `CampingCategories` (`CampingCategoryID`, `CampingCategoryCode`, `CampingCategoryName`, `DateCreated`, `aisleNumber`) VALUES
(1, 'SLP', 'SLeep Essentials', '2025-03-14 10:58:59', 1),
(2, 'COOK', 'Cooking Essentials', '2025-03-14 10:59:31', 2),
(3, 'SAFE', 'Safety Essentials', '2025-03-14 11:15:37', 3),
(4, 'COMFY', 'Comfort Essentials', '2025-03-14 11:12:46', 4),
(5, 'TOOL', 'Tools Essentials', '2025-03-14 11:16:21', 5),
(199, 'TESTSSSS', 'TESTSSSSSSSS', '2025-04-18 16:11:30', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CampingCategories`
--
ALTER TABLE `CampingCategories`
 ADD PRIMARY KEY (`CampingCategoryID`), ADD UNIQUE KEY `CampingCategoryCode` (`CampingCategoryCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
