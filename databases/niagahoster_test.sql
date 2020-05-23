-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2020 at 06:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niagahoster_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hosting_package`
--

CREATE TABLE `hosting_package` (
  `id_package` int(5) NOT NULL,
  `name_package` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `price_after_discount` int(20) NOT NULL,
  `total_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hosting_package`
--

INSERT INTO `hosting_package` (`id_package`, `name_package`, `price`, `price_after_discount`, `total_user`) VALUES
(0, 'Bayi', 19900, 14900, 938),
(1, 'Pelajar', 46900, 23450, 4168),
(2, 'Personal', 58900, 38900, 10017),
(3, 'Bisnis', 109900, 65900, 3552);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hosting_package`
--
ALTER TABLE `hosting_package`
  ADD PRIMARY KEY (`id_package`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hosting_package`
--
ALTER TABLE `hosting_package`
  MODIFY `id_package` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
