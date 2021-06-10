-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2021 at 05:38 PM
-- Server version: 10.3.29-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doubleks_fairy_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `prid` int(11) NOT NULL,
  `primage` varchar(100) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `prtype` varchar(100) NOT NULL,
  `prprice` varchar(100) NOT NULL,
  `prqty` int(11) NOT NULL,
  `datecreated` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`prid`, `primage`, `prname`, `prtype`, `prprice`, `prqty`, `datecreated`) VALUES
(65, '60c0c3f71f72a.png', 'Strawberry', 'Berries', '15.00', 5, '2021-06-09'),
(66, '60c0c4208e2d7.png', 'Korea Pear', 'Apples and Pears', '2.00', 6, '2021-06-09'),
(67, '60c0c4e34389d.png', 'Korea Fuji Apple', 'Apples and Pears', '2.00', 3, '2021-06-09'),
(68, '60c0c53851de8.png', 'Nectarine', 'Stone Fruit', '2.00', 23, '2021-06-09'),
(69, '60c0d44f5b980.png', 'New Zealand Queen', 'Apples and Pears', '12.00', 10, '2021-06-09'),
(70, '60c0eacf90497.png', 'Rockmelon', 'Melons', '12.00', 3, '2021-06-10'),
(71, '60c18873d515b.png', 'Watermelon', 'Melons', '12.00', 3, '2021-06-10'),
(76, '60c1beccec967.png', 'Orange', 'Citrus', '12.00', 3, '2021-06-10'),
(77, '60c1c196e846a.png', 'Orange', 'Citrus', '5.00', 3, '2021-06-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`prid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
