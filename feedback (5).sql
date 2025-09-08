-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2024 at 10:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

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
-- Table structure for table `offline`
--

CREATE TABLE `offline` (
  `id` int(10) NOT NULL,
  `ctrl_num` int(100) NOT NULL,
  `controlNumber` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `client` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `other_service` varchar(100) NOT NULL,
  `c` int(100) NOT NULL,
  `cc` int(100) NOT NULL,
  `ccc` int(100) NOT NULL,
  `sqd` int(100) NOT NULL,
  `sqd_one` int(100) NOT NULL,
  `sqd_two` int(100) NOT NULL,
  `sqd_three` int(100) NOT NULL,
  `sqd_four` int(100) NOT NULL,
  `sqd_five` int(100) NOT NULL,
  `sqd_six` int(100) NOT NULL,
  `sqd_seven` int(100) NOT NULL,
  `sqd_eight` int(100) NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offline`
--

INSERT INTO `offline` (`id`, `ctrl_num`, `controlNumber`, `date`, `client`, `gender`, `age`, `region`, `service`, `other_service`, `c`, `cc`, `ccc`, `sqd`, `sqd_one`, `sqd_two`, `sqd_three`, `sqd_four`, `sqd_five`, `sqd_six`, `sqd_seven`, `sqd_eight`, `suggestion`, `email`) VALUES
(1, 253, '', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(2, 254, 'ROX-2024-CDO-RC-04-00254', '2024-04-12', 'Citizen', 'Male', '55-64', 'x', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `poll`
--

CREATE TABLE `poll` (
  `id` int(8) NOT NULL,
  `controlNumber` varchar(100) NOT NULL,
  `ctrl_num` int(100) NOT NULL,
  `date` date NOT NULL,
  `client` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `service` varchar(100) NOT NULL,
  `other_service` varchar(100) NOT NULL,
  `c` int(100) NOT NULL,
  `cc` int(100) NOT NULL,
  `ccc` int(100) NOT NULL,
  `sqd` int(100) NOT NULL,
  `sqd_one` int(100) NOT NULL,
  `sqd_two` int(100) NOT NULL,
  `sqd_three` int(100) NOT NULL,
  `sqd_four` int(100) NOT NULL,
  `sqd_five` int(100) NOT NULL,
  `sqd_six` int(100) NOT NULL,
  `sqd_seven` int(100) NOT NULL,
  `sqd_eight` int(100) NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `controlNumber`, `ctrl_num`, `date`, `client`, `gender`, `age`, `region`, `service`, `other_service`, `c`, `cc`, `ccc`, `sqd`, `sqd_one`, `sqd_two`, `sqd_three`, `sqd_four`, `sqd_five`, `sqd_six`, `sqd_seven`, `sqd_eight`, `suggestion`, `email`) VALUES
(1, 'ROX-2024-CDO-RC-04-00179', 179, '0000-00-00', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(3, 'ROX-2024-CDO-RC-04-00180', 180, '0000-00-00', 'Citizen', 'Female', 'Below 25', 'x', '1. Issuance of Letter of Approval/Disapproval of Construction Safety and Health Program (CSHP) Appli', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'ty', ''),
(4, 'ROX-2024-CDO-RC-04-00181                \r\n        \r\n                \r\n                \r\n            ', 181, '2024-04-12', '', 'Male', 'Below 25', 'x', '1. Application for Livelihood Project Assistance ', '', 1, 1, 1, 5, 5, 2, 4, 1, 5, 5, 5, 5, 'tyyy', ''),
(5, 'ROX-2028-CDO-RC-10-00182                \r\n        \r\n                \r\n                \r\n            ', 182, '2024-04-12', 'Citizen', 'Male', '45-54', 'x', '1. Application for Livelihood Project Assistance ', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(6, 'ROX-2024-CDO-RC-04-00183', 183, '2024-04-12', 'Citizen', 'Male', '45-54', 'x', '3. Registration of Establishment under Rule 1020 of the Occupational Safety and Health Standards', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(7, 'ROX-2024-CDO-RC-04-00184', 184, '2024-04-12', 'Citizen', 'Male', '64 Above', 'x', '4. Registration of Union ', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'roy', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `tbl_user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`tbl_user_id`, `first_name`, `last_name`, `contact_number`, `email`, `username`, `password`, `verification_code`) VALUES
(1, 'Lorem', 'Ipsum', '2147483647', 'lorem.ipsum.sample.email@gail.com', 'admin', 'admin', 965225),
(2, 'christian', 'Escol', '9351485144', 'winsboro35@gmail.com', 'wins', 'boro', 838582),
(7, 'bojack', 'grill', '9351485144', 'rjaycun@gmail.com', 'bojay', 'bojacy', 426385),
(9, 'max', 'wyn', '12', 'miguelmaxene16@gmail.com', 'admins', '123', 210246),
(10, 'roy', 'LUCERO', '0', 'winsboro35@gmail.com', 'wins', 'boro', 864307);

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offline`
--
ALTER TABLE `offline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll`
--
ALTER TABLE `poll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`tbl_user_id`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offline`
--
ALTER TABLE `offline`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `tbl_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users_tbl`
--
ALTER TABLE `users_tbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
