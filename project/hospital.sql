-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2018 at 10:45 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `firstname`, `lastname`, `username`, `email`, `password`) VALUES
(3, 'firstname', 'lastname', 'nickie', 'yemail@gmail.com', '$2y$10$fysgGElDDryggaYGiwQqSObiLUscgHRboLVAl0SmACMDemXG9EqYW'),
(4, 'lydia', 'wanjiru', 'lavie', 'lydianjiru@gmail.com', '$2y$10$wr/ioLfUg7qMP/ueZrGDz.2rJP0CkEzWNetf.nFub1yFozIojKJgW'),
(5, 'michael', 'wangechian', 'landlord', 'michael@gmail.com', '$2y$10$kZJfvgY1onahHX6GGYlHE.P301nZ/Tlu8bNh60e3r4/HBs.dS2.1a'),
(6, 'simon', 'wangechi', 'admin', 'email97@gmail.com', '$2y$10$Rr51n/ZOReFGzWaSbPbmO.9ut6oFCWj4VP0IEYGhZhYmi2J8iMg9a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
