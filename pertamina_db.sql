-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2025 at 05:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pertamina_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabproducts`
--

CREATE TABLE `tabproducts` (
  `ProductID` int(11) NOT NULL,
  `dtCreatedAt` datetime NOT NULL DEFAULT current_timestamp(),
  `dtUpdatedAt` datetime DEFAULT NULL,
  `dtDeletedAt` datetime DEFAULT NULL,
  `ProductName` varchar(50) NOT NULL,
  `ProductPrice` int(11) NOT NULL,
  `ProductStock` int(11) NOT NULL,
  `ProductStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabproducts`
--

INSERT INTO `tabproducts` (`ProductID`, `dtCreatedAt`, `dtUpdatedAt`, `dtDeletedAt`, `ProductName`, `ProductPrice`, `ProductStock`, `ProductStatus`) VALUES
(1, '2025-09-23 20:40:06', NULL, NULL, 'test', 1000, 10, 1),
(2, '2025-09-23 20:40:28', NULL, NULL, 'test2', 10000, 10, 0),
(3, '2025-09-23 20:45:49', NULL, NULL, 'test3', 1000, 100, 1),
(4, '2025-09-23 20:47:08', NULL, NULL, 'test4', 10000, 1000, 1),
(5, '2025-09-23 21:04:31', NULL, NULL, 'test5', 100000, 10, 0),
(6, '2025-09-23 21:29:12', NULL, NULL, 'test6', 1000, 1, 1),
(7, '2025-09-23 22:06:25', NULL, NULL, 'test7', 111, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabproducts`
--
ALTER TABLE `tabproducts`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabproducts`
--
ALTER TABLE `tabproducts`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
