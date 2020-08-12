-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 11:21 AM
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
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(6) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(14, ''),
(2, 'Department of Education'),
(3, 'Disaster Management & Prevention'),
(4, 'Food & Agriculture'),
(5, 'Metro Public Health Department'),
(7, 'Office of The Mayor'),
(8, 'Social Welfare & Community Development'),
(11, 'Urban Roads'),
(9, 'Waste Management'),
(10, 'Works Department');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqs_id` int(6) NOT NULL,
  `faqs_name` varchar(255) NOT NULL,
  `faqs_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(6) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `ticket_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `priority_id` int(6) NOT NULL,
  `priority_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`priority_id`, `priority_name`) VALUES
(1, 'Urgent'),
(2, 'High'),
(3, 'Medium'),
(4, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(6) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'admin'),
(2, 'agent'),
(3, 'client');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(6) NOT NULL,
  `status_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Open'),
(3, 'Pending'),
(4, 'Solved');

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

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `ticket_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `ticket_description` varchar(255) NOT NULL,
  `attachment` varchar(50) NOT NULL,
  `ticket_number` varchar(50) NOT NULL,
  `ticket_date` date NOT NULL,
  `status_id` varchar(6) NOT NULL,
  `priority_id` varchar(6) NOT NULL,
  `dept_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`ticket_id`, `first_name`, `last_name`, `Subject`, `email`, `phone`, `address`, `ticket_description`, `attachment`, `ticket_number`, `ticket_date`, `status_id`, `priority_id`, `dept_id`) VALUES
(31, 'robert', 'adadzie', 'This comaint', 'dadzierbert@gmail.com', '0561318160', 'rtr', 'ffg', 'uploads/sk3utODwnH.jpg', '1603', '2020-08-09', '1', '4', '2'),
(32, 'Genelia ', 'Deshmukh', 'Drainage problem', 'genelia@gmail.com', '05677889900', 'C2', 'There is problem with our drainage', 'uploads/GN0tzA-k@p.jpg', '7517', '2020-08-09', '', '1', '3'),
(33, 'Rana ', 'Dagubati', 'Duis arcu tortor, suscipit eget, imperdiet nec, ', 'dadzierbert@gmail.com', '0561318160', 'Nm', 'There is problem with our drainage', 'uploads/Hujc3xJ0-B.png', '7517', '2020-08-09', '3', '3', '4'),
(38, 'Anokye', 'adadzie', '', 'admin@profohmed.org', '0561318160', 'rtr', '', '', '1972', '2020-08-09', '4', '3', '5'),
(39, 'Anokye', 'adadzie', 'This is subject', 'admin@profohmed.org', '0561318160', 'rtr', 'ttt', '', '4163', '2020-08-10', '4', '4', '7'),
(40, '', '', '', '', '', '', '', '', '8399', '2020-08-10', '3', '2', '10'),
(41, '', '', '', '', '', '', '', '', '5666', '2020-08-10', '1', '2', '9');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_replies`
--

CREATE TABLE `ticket_replies` (
  `ticket_replies-id` int(6) NOT NULL,
  `replies` varchar(255) NOT NULL,
  `ticket_id` int(6) NOT NULL,
  `date` date NOT NULL,
  `supportAgents_id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket_replies`
--

INSERT INTO `ticket_replies` (`ticket_replies-id`, `replies`, `ticket_id`, `date`, `supportAgents_id`) VALUES
(1, 'ghghhjhjhj', 32, '2020-08-10', 0),
(2, '', 32, '2020-08-10', 0),
(3, '44', 32, '2020-08-10', 0),
(4, '', 32, '2020-08-10', 0),
(5, '', 32, '2020-08-10', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqs_id`),
  ADD UNIQUE KEY `faqs_name` (`faqs_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`priority_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `supportagents`
--
ALTER TABLE `supportagents`
  ADD PRIMARY KEY (`supportAgents_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  ADD PRIMARY KEY (`ticket_replies-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqs_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `priority_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `supportagents`
--
ALTER TABLE `supportagents`
  MODIFY `supportAgents_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `ticket_replies`
--
ALTER TABLE `ticket_replies`
  MODIFY `ticket_replies-id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
