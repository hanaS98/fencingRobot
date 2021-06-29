-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 11:49 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basecontroller`
--

-- --------------------------------------------------------

--
-- Table structure for table `robotbase`
--

CREATE TABLE `robotbase` (
  `ID` int(11) NOT NULL,
  `forward` varchar(20) NOT NULL,
  `backward` varchar(20) NOT NULL,
  `left` varchar(20) NOT NULL,
  `right` varchar(20) NOT NULL,
  `stop` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `robotbase`
--

INSERT INTO `robotbase` (`ID`, `forward`, `backward`, `left`, `right`, `stop`) VALUES
(1, 'forward', ' ', ' ', ' ', ' '),
(2, ' ', ' ', ' ', ' ', 'Stop'),
(3, ' ', ' ', 'left', ' ', ' '),
(4, 'forward', ' ', ' ', ' ', ' '),
(5, 'forward', ' ', ' ', ' ', ' '),
(6, 'forward', ' ', ' ', ' ', ' '),
(7, ' ', ' ', ' ', 'right', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `robotbase`
--
ALTER TABLE `robotbase`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `robotbase`
--
ALTER TABLE `robotbase`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
