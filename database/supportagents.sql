-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2020 at 11:36 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `supportagents`
--

CREATE TABLE `supportagents` (
  `supportAgents_id` int(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `image` varchar(50) NOT NULL,
  `role_id` int(6) NOT NULL,
  `dept_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supportagents`
--

INSERT INTO `supportagents` (`supportAgents_id`, `first_name`, `last_name`, `phone_number`, `email`, `password`, `address`, `gender`, `image`, `role_id`, `dept_id`) VALUES
(59, 'Robert', 'Dadzie', '0561318160', 'dadzierbert@gmail.com', '1234', 'C2', 'male', 'uploads/mkDdHMYES5.jpg', 1, 2),
(60, 'Charity', 'Dadzie', '0561318160', 'dadzierbert@gmail.com', '1234', 'B/2', 'female', 'uploads/xT8l3oc5AP.png', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supportagents`
--
ALTER TABLE `supportagents`
  ADD PRIMARY KEY (`supportAgents_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supportagents`
--
ALTER TABLE `supportagents`
  MODIFY `supportAgents_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
