-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2024 at 03:31 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_tbl`
--

CREATE TABLE `login_tbl` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tbl`
--

INSERT INTO `login_tbl` (`id`, `name`, `lname`, `username`, `password`) VALUES
(1, 'christian', 'escol', 'chanchan', 'd19ef6b456211e8a3de294044b0137b9');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` int(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `other_service` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `cc` varchar(100) NOT NULL,
  `ccc` varchar(100) NOT NULL,
  `sqd` varchar(100) NOT NULL,
  `sqd_one` varchar(100) NOT NULL,
  `sqd_two` varchar(100) NOT NULL,
  `sqd_three` varchar(100) NOT NULL,
  `sqd_four` varchar(100) NOT NULL,
  `sqd_five` varchar(100) NOT NULL,
  `sqd_six` varchar(100) NOT NULL,
  `sqd_seven` varchar(100) NOT NULL,
  `sqd_eight` varchar(100) NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `client`, `date`, `gender`, `age`, `region`, `service`, `other_service`, `c`, `cc`, `ccc`, `sqd`, `sqd_one`, `sqd_two`, `sqd_three`, `sqd_four`, `sqd_five`, `sqd_six`, `sqd_seven`, `sqd_eight`, `suggestion`, `email`) VALUES
(115, 'Government', '2024-03-06', 'Male', 25, ' X\r\n                ', '', 'Assist', 'I_Know_what_a_CC_is_and_I_saw_this_offices_CC', 'Easy_to_see', 'Helped_very_much', 'Strongly_Agree', 'Agree', 'Strongly_Agree', 'Strongly_disagree', 'Neither_Agree_nor_Disagree', 'N/A_not_Applicable', '', 'Agree', 'Disagree', 'Thank you so much for the amazing service', 'dole@gmail.com'),
(116, 'Business', '2024-03-06', 'Female', 35, ' X\r\n                ', '14. Clearing of Technical Plans for Mechanical Equipment and Electrical Installation', '', 'I_Know_what_a_CC_is_and_I_saw_this_offices_CC', 'Easy_to_see', 'Helped_very_much', 'Disagree', 'Neither_Agree_nor_Disagree', 'Disagree', 'N/A_not_Applicable', 'Strongly_disagree', 'N/A_not_Applicable', 'Neither_Agree_nor_Disagree', 'Strongly_disagree', 'Strongly_disagree', 'Thanks for the service', 'dole@gmail.com'),
(117, 'Government', '2024-03-06', 'Female', 23, ' \r\n          X      ', '', 'service', 'I_Know_what_a_CC_is_and_I_saw_this_offices_CC', 'Easy_to_see', 'Helped_very_much', 'Strongly_Agree', 'Agree', 'Strongly_Agree', 'Strongly_disagree', 'Neither_Agree_nor_Disagree', 'N/A_not_Applicable', '', 'Agree', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_tbl`
--
ALTER TABLE `login_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_tbl`
--
ALTER TABLE `login_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
