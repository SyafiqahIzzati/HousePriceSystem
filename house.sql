-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2016 at 04:53 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `housecheck`
--

CREATE TABLE `housecheck` (
  `houseId` int(15) NOT NULL,
  `bedrooms` decimal(2,0) NOT NULL,
  `bathrooms` decimal(2,0) NOT NULL,
  `sqftLiving` decimal(25,0) NOT NULL,
  `sqftLot` decimal(25,0) NOT NULL,
  `sqftAbove` decimal(25,0) NOT NULL,
  `sqftBasement` decimal(25,0) NOT NULL,
  `floor` decimal(2,0) NOT NULL,
  `waterfront` decimal(2,0) NOT NULL,
  `price` decimal(25,0) NOT NULL,
  `userId` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `housecheck`
--

INSERT INTO `housecheck` (`houseId`, `bedrooms`, `bathrooms`, `sqftLiving`, `sqftLot`, `sqftAbove`, `sqftBasement`, `floor`, `waterfront`, `price`, `userId`) VALUES
(1, '4', '2', '900', '800', '400', '0', '2', '0', '78954', 'Suraya'),
(4, '3', '2', '800', '670', '500', '200', '2', '1', '957089', 'Suraya');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `password`, `email`) VALUES
('IffahDiyana', '123', 'sky.gurlz93@gmail.com'),
('Suraya', '789', 'suraya96@gmail.com'),
('Zainal', 'aaa', 'zainal21@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `housecheck`
--
ALTER TABLE `housecheck`
  ADD PRIMARY KEY (`houseId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `housecheck`
--
ALTER TABLE `housecheck`
  MODIFY `houseId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
