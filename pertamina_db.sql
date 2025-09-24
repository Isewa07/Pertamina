-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2025 at 06:24 PM
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
  `ID` int(11) NOT NULL,
  `dtCreatedAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `dtUpdatedAt` timestamp NULL DEFAULT NULL,
  `dtDeletedAt` timestamp NULL DEFAULT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Is_sell` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabproducts`
--

INSERT INTO `tabproducts` (`ID`, `dtCreatedAt`, `dtUpdatedAt`, `dtDeletedAt`, `Name`, `Price`, `Stock`, `Is_sell`) VALUES
(1, '2025-09-23 13:40:06', NULL, '2025-09-24 08:59:57', 'test', 1000.00, 10, 1),
(2, '2025-09-23 13:40:28', NULL, '2025-09-24 09:02:26', 'test2', 10000.00, 10, 0),
(3, '2025-09-23 13:45:49', NULL, '2025-09-24 09:04:09', 'test3', 1000.00, 100, 1),
(4, '2025-09-23 13:47:08', '2025-09-24 09:46:47', NULL, 'test40', 100.00, 10001, 1),
(5, '2025-09-23 14:04:31', '2025-09-24 10:49:03', NULL, 'test5', 100000.00, 10, 1),
(6, '2025-09-23 14:29:12', NULL, NULL, 'test6', 1000.00, 1, 1),
(7, '2025-09-23 15:06:25', NULL, NULL, 'test7', 111.00, 1, 1),
(8, '2025-09-24 12:10:07', NULL, NULL, 'test7', 111.00, 111, 1),
(9, '2025-09-24 14:06:38', NULL, NULL, 'Rinso', 10000.00, 10, 1),
(10, '2025-09-24 14:28:00', '2025-09-24 09:33:16', NULL, 'Sunlight', 9900.00, 99, 0),
(11, '2025-09-24 14:47:11', NULL, NULL, 'Miyako kipas angin', 100000.00, 1, 0),
(12, '2025-09-24 15:23:12', '2025-09-24 10:29:16', NULL, 'test10', 10000.00, 1, 1),
(13, '2025-09-24 15:28:35', NULL, NULL, 'test11', 1.00, 1, 1),
(14, '2025-09-24 15:29:24', NULL, NULL, 'test12', 1.00, 1, 1),
(15, '2025-09-24 15:29:42', NULL, '2025-09-24 10:40:33', 'test13', 1.00, 1, 1),
(16, '2025-09-24 15:34:01', NULL, NULL, 'tisu', 1.00, 1, 1),
(17, '2025-09-24 15:37:41', NULL, '2025-09-24 10:38:57', 'tisu111', 1.00, 1, 1),
(18, '2025-09-24 15:49:30', NULL, '2025-09-24 10:49:43', 'test55', 111.00, 11, 1),
(19, '2025-09-24 15:54:50', '2025-09-24 10:55:03', NULL, 'cermin', 100.00, 14, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabproducts`
--
ALTER TABLE `tabproducts`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabproducts`
--
ALTER TABLE `tabproducts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
