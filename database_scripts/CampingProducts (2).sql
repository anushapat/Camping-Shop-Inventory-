-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: sql1.njit.edu
-- Generation Time: Apr 18, 2025 at 09:11 PM
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
-- Table structure for table `CampingProducts`
--

CREATE TABLE IF NOT EXISTS `CampingProducts` (
  `CampingProductID` int(11) NOT NULL,
  `CampingProductCode` varchar(10) NOT NULL,
  `CampingProductName` varchar(255) NOT NULL,
  `CampingDescription` text NOT NULL,
  `CampingCategoryID` int(11) NOT NULL,
  `CampingWholesalePrice` decimal(10,2) NOT NULL,
  `CampingListPrice` decimal(10,2) NOT NULL,
  `CampingColor` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `CampingProducts`
--

INSERT INTO `CampingProducts` (`CampingProductID`, `CampingProductCode`, `CampingProductName`, `CampingDescription`, `CampingCategoryID`, `CampingWholesalePrice`, `CampingListPrice`, `CampingColor`, `DateCreated`) VALUES
(1, 'SBAG', ' Semi-Rectangular Sleeping Bag', 'A sleeping bag that is meant to hug the sides of the person sleeping within the sleeping bag. Unlike the rectangular sleeping bag, this sleeping bad has less open space leading to a warmer enviroment. ', 1, 10.00, 30.01, 'green', '2025-03-14 11:54:36'),
(2, 'RBAG', 'Rectangular Sleeping Bag', 'This is a classic sleeping bag. It has sharp corners and easy to lay out. ', 1, 5.00, 20.00, 'Blue', '2025-03-14 11:57:13'),
(3, 'KBAG', 'Kid Sleeping Bag', 'This is a rectangular sleeping bag that is small for kids. Kids must have a sleeping bag appropriate to their size so they can effectively warm up their sleeping bag. ', 1, 15.00, 25.00, 'Pink', '2025-03-14 12:01:15'),
(4, 'PSTOVE', ' Propane Campground Stove', ' A classic campground stove that uses proprane. This can warm up many things in a fast and effective way. ', 2, 25.00, 52.00, 'Black', '2025-03-14 12:05:49'),
(5, 'CSTOVE', ' Canister Backpacking Stove', ' A portable stove ideal for backpcking. It is super light!', 2, 10.00, 20.00, 'Yellow', '2025-03-14 12:07:43'),
(6, 'LSTOVE', ' Liquid Fuel Backpacking Stove', ' A portable stove ideal for backpacking and uses liquid fuel. This allows for a a faster and easier use of a stove. ', 2, 50.00, 100.00, 'Purple', '2025-03-14 12:09:05'),
(7, 'CLANT', ' Candle Lanterns', ' This is an old but a classic form of light. This light can also be relaxing. ', 3, 25.00, 50.00, 'Green', '2025-03-14 12:14:09'),
(8, 'GLANT', ' Gas Camping Lantern', 'This lantern uses gas to get light fast. This lantern is made of Stainless Steel. ', 3, 15.00, 30.00, 'Black', '2025-03-14 12:15:43'),
(9, 'RLANT', ' Rechargeable Lantern', ' An enviromentally-friendly lantern that may require a powerbank. This lantern can even charge your phone', 3, 15.00, 50.00, 'Green', '2025-03-14 12:17:02'),
(10, 'CChair', ' Classic Camp Chair', ' A 4-legged chair with wide base. It is common and comfortable.  ', 4, 15.00, 30.00, 'Yellow', '2025-03-14 12:20:20'),
(11, 'LCHAIR', ' Low Camp Chair', 'This chair is ideal for uneven grounds. You can lean back and stretch your legs while sitting here as well. ', 4, 20.00, 40.00, 'Black', '2025-03-14 12:24:17'),
(12, 'TCHAIR', ' Three Legged Chair', ' A three legged chair ideal for tight spaces. You can easily balance on these chairs. ', 4, 5.00, 10.00, 'Pink', '2025-03-14 12:26:25'),
(13, 'MMULTI', ' LeatherMan Wave Multi', ' A 4 in multitool that consits of 18 tools. Some of these tools include a crimpers, a saw and a can opener.', 5, 60.00, 120.00, 'Silver', '2025-03-14 12:31:09'),
(14, 'RMULTI', ' LeatherMan Raptor', ' This is shaped like a scissor. This tool includes an oxygen tank wrench and glass breaker.', 5, 50.00, 100.00, 'Silver', '2025-03-14 12:32:45'),
(15, 'SMULTI', ' LeatherMan Skeltool cx', ' This is a pilar tool. It has wire cutters and a large screw driver attached to it.', 5, 45.00, 90.00, 'Silver', '2025-03-14 12:34:25'),
(95, 'DKJSFH', 'tes', 'fdkfhsklfsdkfnsdlkfnslk', 195, 254.20, 521.20, 'blue', '2025-04-18 16:22:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CampingProducts`
--
ALTER TABLE `CampingProducts`
 ADD PRIMARY KEY (`CampingProductID`), ADD UNIQUE KEY `CampingProductCode` (`CampingProductCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
