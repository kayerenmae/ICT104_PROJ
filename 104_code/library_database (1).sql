-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2023 at 03:04 AM
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
-- Database: `library_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `library_db`
--

CREATE TABLE `library_db` (
  `Book Title` text NOT NULL,
  `Call no.` varchar(50) NOT NULL,
  `Author` text NOT NULL,
  `Published/Created` varchar(90) NOT NULL,
  `LCCN` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Status` text NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `library_db`
--

INSERT INTO `library_db` (`Book Title`, `Call no.`, `Author`, `Published/Created`, `LCCN`, `ISBN`, `Subject`, `Status`, `Location`) VALUES
('The Secret History', 'F F T179s', 'Donna Tartt', 'c1992', '92-53053', '978044991151', 'Fiction', 'On shelf', 'HS Lib'),
('The Secret History', 'F F T179s', 'Donna Tartt', 'c1992', '92-53053', '978044991151', 'Fiction', 'On shelf', 'HS Lib');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(40) NOT NULL,
  `id_number` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `repeat password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `id_number`, `username`, `password`, `repeat password`) VALUES
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '0', '0', '0'),
('0', 0, '2147483647', '0', '0'),
('0', 2147483647, '0', '0', '0'),
('0', 2147483647, '0', '0', '0'),
('0', 2147483647, '0', '0', '0'),
('0', 12345678, '0', '0', '0'),
('pancake@example.com', 123456789, 'b887eb0760403bb0a081', 'pankeki', ''),
('pancake@example.com', 1432567890, '4b49bece97dc72589b05', 'pankeki', ''),
('pancakes@example.com', 1432567899, '39b761821b8f8ccdc67e8fd987d950f6', 'pankekis', ''),
('pompompurin@example.com', 98098123, 'pompompurin', 'eb119723f262c6321f170d8c5a9b54f1', ''),
('pompompudding@example.com', 2147483647, 'pudding', 'eb119723f262c6321f170d8c5a9b54f1', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
