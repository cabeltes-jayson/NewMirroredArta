-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql206.infinityfree.com
-- Generation Time: Jul 18, 2024 at 01:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `if0_36144549_testing_db`
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
  `suggestion` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offline`
--

INSERT INTO `offline` (`id`, `ctrl_num`, `controlNumber`, `date`, `client`, `gender`, `age`, `region`, `service`, `other_service`, `c`, `cc`, `ccc`, `sqd`, `sqd_one`, `sqd_two`, `sqd_three`, `sqd_four`, `sqd_five`, `sqd_six`, `sqd_seven`, `sqd_eight`, `suggestion`, `email`) VALUES
(1, 384, 'ROX-2024-CDO-07-00384', '0000-00-00', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(3, 385, 'ROX-2024-CDO-06-00385', '2024-06-30', 'Citizen', 'Male', '45', 'EL SALVADOR', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(4, 386, 'ROX-2024-CDO-06-00386', '2024-06-30', 'Citizen', 'Male', '35', '10', '', '', 3, 1, 1, 6, 6, 6, 6, 6, 6, 6, 6, 6, 'WALA PO AKONG MASASABI NA MALI ANG KANILANG SERBESYO KONDI AY MAYUS ANG KANILANG PAG ASIST SA MGA TAO', ''),
(5, 387, 'ROX-2024-CDO-06-00387', '2024-06-30', 'Citizen', 'Male', '25', 'CARMEN', '', '', 1, 1, 1, 5, 2, 5, 6, 5, 6, 5, 5, 5, '', ''),
(6, 388, 'ROX-2024-CDO-07-00388', '2024-07-01', 'Citizen', 'Female', '25', 'CAGAYAN DE ORO CITY MISAMIS ORIENTAL', '', '', 3, 1, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', 'cabactulan.joanna@yahoo.com'),
(7, 389, 'ROX-2024-CDO-07-00389', '2024-07-01', 'Citizen', 'Female', '35', 'carmen', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 6, 5, 5, '', ''),
(8, 390, 'ROX-2024-CDO-07-00390', '2024-07-01', 'Citizen', 'Female', '35', 'CARMEN', '', '', 1, 1, 1, 5, 5, 4, 6, 5, 6, 5, 5, 5, '', ''),
(9, 391, 'ROX-2024-CDO-07-00391', '2024-07-01', 'Citizen', 'Male', '55', '10', '1', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'VERY HEPFUL', ''),
(10, 392, 'ROX-2024-CDO-07-00392', '2024-07-02', 'Citizen', 'Male', '35', 'Carmen', '', '', 2, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(11, 393, 'ROX-2024-CDO-07-00393', '2024-07-02', 'Citizen', 'Male', '35', 'Cugman', '', '', 4, 5, 4, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(12, 394, 'ROX-2024-CDO-07-00394', '2024-07-02', 'Citizen', 'Male', '45', 'Kauswagan', '', '', 4, 5, 4, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(13, 395, 'ROX-2024-CDO-07-00395', '2024-07-02', 'Citizen', 'Male', '55', 'Carmen', '', '', 3, 1, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(14, 396, 'ROX-2024-CDO-07-00396', '2024-07-02', 'Citizen', 'Male', '35', 'Carmen', '', '', 3, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 3, '', ''),
(15, 397, 'ROX-2024-CDO-07-00397', '2024-07-02', 'Citizen', 'Male', '25', 'Bonbon', '', '', 4, 5, 4, 5, 4, 5, 4, 4, 6, 5, 4, 5, '', ''),
(16, 398, 'ROX-2024-CDO-07-00398', '2024-07-02', 'Citizen', 'Male', '55', 'Bonbon', '', '', 3, 2, 2, 5, 5, 5, 4, 4, 6, 4, 4, 4, '', ''),
(17, 399, 'ROX-2024-CDO-07-00399', '2024-07-02', 'Citizen', 'Female', '55', 'Lapasan', '', '', 4, 5, 4, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(18, 400, 'ROX-2024-CDO-07-00400', '2024-07-02', 'Citizen', 'Male', '35', 'Iponan', '', '', 3, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'Daghan salamat sa DOLE dako na kaayo tabang sa familya', ''),
(19, 401, 'ROX-2024-CDO-07-00401', '2024-07-02', 'Citizen', 'Male', '55', 'Kauswagan', '', '', 3, 2, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'Pasalamat ko og dako sa Dole', ''),
(20, 402, 'ROX-2024-CDO-07-00402', '2024-07-02', 'Citizen', 'Male', '45', 'Gusa', '', '', 1, 1, 1, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(21, 403, 'ROX-2024-CDO-07-00403', '2024-07-02', 'Citizen', 'Male', '25', 'Bulua', '', '', 3, 3, 1, 5, 5, 4, 2, 4, 6, 5, 5, 4, '', ''),
(22, 404, 'ROX-2024-CDO-07-00404', '2024-07-02', 'Citizen', 'Male', '55', 'Tablon', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(23, 405, 'ROX-2024-CDO-07-00405', '2024-07-02', 'Citizen', 'Male', '45', 'Kauswagan', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(24, 406, 'ROX-2024-CDO-07-00406', '2024-07-02', 'Citizen', 'Male', '35', 'Balulang', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'I am satisfied with the service', ''),
(25, 407, 'ROX-2024-CDO-07-00407', '2024-07-02', 'Citizen', 'Male', '35', 'Cugman', '', '', 3, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(26, 408, 'ROX-2024-CDO-07-00408', '2024-07-02', 'Citizen', 'Male', '45', 'Lumbia', '', '', 1, 1, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'Para sa akin po maayos napo lahat na mga serbisyo na binigay ninyo sa amin. ', ''),
(27, 409, 'ROX-2024-CDO-07-00409', '2024-07-02', 'Citizen', 'Male', '45', 'Bugo', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'DAGHAN SALAMAT SA DOLE DAKO TABANG SA AMO NGA FAMILYA', ''),
(28, 410, 'ROX-2024-CDO-07-00410', '2024-07-02', 'Citizen', 'Male', '25', 'Gusa', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'DAGHAN SALAMAT SA DOLE DAKO TABANG SA AMO NGA FAMILYA', ''),
(29, 411, 'ROX-2024-CDO-07-00411', '2024-07-02', 'Citizen', 'Male', '45', 'Camaman-an', '', '', 1, 1, 1, 3, 3, 3, 3, 3, 6, 3, 3, 3, '', ''),
(30, 411, 'ROX-2024-CDO-07-00411', '2024-07-02', 'Citizen', 'Male', '55', 'Carmen, Cagayan de Oro', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(31, 412, 'ROX-2024-CDO-07-00412', '2024-07-02', 'Citizen', 'Male', '35', 'Bonbon', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(32, 413, 'ROX-2024-CDO-07-00413', '2024-07-02', 'Citizen', 'Male', '55', 'Mambuaya, Cagayan de Oro City', '', '', 1, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(33, 414, 'ROX-2024-CDO-07-00414', '2024-07-03', 'Citizen', 'Female', '24', 'Nazareth', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'Than you for considering my application, God bless', ''),
(34, 415, 'ROX-2024-CDO-07-00415', '2024-07-03', 'Citizen', 'Female', '24', 'Bulua', '', '', 1, 1, 1, 5, 6, 5, 6, 5, 5, 5, 5, 5, '', ''),
(35, 416, 'ROX-2024-CDO-07-00416', '2024-07-03', 'Citizen', 'Male', '24', 'Nazareth', '', '', 1, 1, 1, 5, 6, 5, 5, 5, 5, 5, 5, 5, '', ''),
(36, 417, 'ROX-2024-CDO-07-00417', '2024-07-03', 'Citizen', 'Female', '24', 'CAGAYAN', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(37, 418, 'ROX-2024-CDO-07-00418', '2024-07-03', 'Citizen', 'Female', '25', '10', '', '', 1, 2, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(38, 419, 'ROX-2024-CDO-07-00419', '2024-07-03', 'Citizen', 'Female', '25', '10', '', '', 1, 1, 1, 4, 4, 4, 4, 4, 4, 4, 4, 5, '', 'JOSERRYBARTOLOME@GMAIL.COM'),
(39, 420, 'ROX-2024-CDO-07-00420', '2024-07-03', 'Citizen', 'Female', '24', 'Region X- Cagayan de Oro City', '', '', 1, 1, 1, 5, 5, 5, 6, 6, 6, 6, 5, 5, 'Thank you so much for being able to accommodate me rightaway in Applying for the G.I.P . I hope you`ll be giving me response for my application, soon. Thank you!', ''),
(40, 421, 'ROX-2024-CDO-07-00421', '2024-07-03', 'Citizen', 'Male', '45', 'agora lapasan', '', '', 4, 4, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(41, 422, 'ROX-2024-CDO-07-00422', '2024-07-04', 'Citizen', 'Female', '45', 'mambuaya', '1', '', 1, 1, 1, 4, 4, 5, 6, 5, 6, 4, 4, 5, 'Welcoming and smiling ang staff. ', ''),
(42, 423, 'ROX-2024-CDO-07-00423', '2024-07-04', 'Citizen', 'Female', '25', 'cdo', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(43, 424, 'ROX-2024-CDO-07-00424', '2024-07-04', 'Citizen', 'Female', '24', '10', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(44, 425, 'ROX-2024-CDO-07-00425', '2024-07-04', 'Citizen', 'Male', '24', '10', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(45, 426, 'ROX-2024-CDO-07-00426', '2024-07-04', 'Citizen', 'Male', '45', '10', '', '', 2, 2, 2, 4, 4, 3, 4, 4, 4, 4, 4, 4, '', ''),
(46, 427, 'ROX-2024-CDO-07-00427', '2024-07-04', 'Citizen', 'Male', '35', 'puntod', '1', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(47, 428, 'ROX-2024-CDO-07-00428', '2024-07-04', 'Citizen', 'Male', '24', 'CAGAYAN DE ORO CITY', '', '', 3, 2, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', ''),
(48, 429, 'ROX-2024-CDO-07-00429', '2024-07-04', 'Citizen', 'Female', '24', 'CAGAYAN DE ORO CITY', '', '', 1, 2, 1, 5, 5, 5, 5, 5, 6, 6, 6, 5, 'N/A', ''),
(49, 430, 'ROX-2024-CDO-07-00430', '2024-07-05', 'Citizen', 'Male', '35', '10', '', '', 4, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(50, 431, 'ROX-2024-CDO-07-00431', '2024-07-05', 'Citizen', 'Male', '35', '10', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(51, 432, 'ROX-2024-CDO-07-00432', '2024-07-05', 'Citizen', 'Male', '35', '10', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(52, 433, 'ROX-2024-CDO-07-00433', '2024-07-05', 'Citizen', 'Male', '24', 'Region 10', '', '', 4, 5, 4, 5, 4, 4, 4, 4, 4, 4, 4, 4, '', ''),
(53, 434, 'ROX-2024-CDO-07-00434', '2024-07-07', 'Citizen', 'Female', '55', 'IPONAN', '', '', 1, 1, 1, 5, 5, 5, 5, 4, 6, 6, 6, 5, '', ''),
(54, 435, 'ROX-2024-CDO-07-00435', '2024-07-07', 'Citizen', 'Female', '24', 'CAGAYAN', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(55, 436, 'ROX-2024-CDO-07-00436', '2024-07-07', 'Citizen', 'Female', '24', 'CAGAYAN DE ORO CITY', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(56, 437, 'ROX-2024-CDO-07-00437', '2024-07-08', 'Citizen', 'Female', '25', 'CAGAYAN DE ORO CITY', '', '', 4, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'GOOD CUSTOMER SERVICE BECAUSE THEY ARE ALL IN GOOD MOOD AND STILL SMILING AT CUSTOMERS/CLIENTS. =)', ''),
(57, 438, 'ROX-2024-CDO-07-00438', '2024-07-09', 'Citizen', 'Male', '35', 'Cugman, Cagayan de Oro', '', '', 1, 1, 1, 5, 4, 5, 5, 5, 6, 5, 5, 5, '', ''),
(58, 438, 'ROX-2024-CDO-07-00438', '2024-07-09', 'Citizen', 'Male', '55', 'Gusa, Cagayan de Oro', '1', '', 3, 1, 1, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(59, 439, 'ROX-2024-CDO-07-00439', '2024-07-09', 'Citizen', 'Female', '55', 'Balulang, Cagayan de Oro', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(60, 439, 'ROX-2024-CDO-07-00439', '2024-07-09', 'Citizen', 'Male', '45', 'Macabalan, CDO', '1', '', 3, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(61, 439, 'ROX-2024-CDO-07-00439', '2024-07-09', 'Citizen', 'Male', '45', 'Bonbon', '1', '', 1, 1, 1, 5, 4, 5, 5, 5, 6, 5, 5, 5, '', ''),
(62, 440, 'ROX-2024-CDO-07-00440', '2024-07-09', 'Citizen', 'Male', '35', 'Balulang, Cagayan de Oro', '1', '', 1, 1, 1, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(63, 439, 'ROX-2024-CDO-07-00439', '2024-07-09', 'Citizen', 'Male', '35', 'Carmen, CDO, Misamis Oriental, Region 10', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(64, 440, 'ROX-2024-CDO-07-00440', '2024-07-09', 'Citizen', 'Male', '55', 'Carmen, Cagayan de Oro', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(65, 440, 'ROX-2024-CDO-07-00440', '2024-07-09', 'Citizen', 'Male', '35', 'CARMEN, CDO', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(66, 441, 'ROX-2024-CDO-07-00441', '2024-07-09', 'Citizen', 'Male', '45', 'Carmen ', '1', '', 3, 1, 1, 5, 5, 5, 5, 4, 6, 5, 5, 5, '', ''),
(67, 440, 'ROX-2024-CDO-07-00440', '2024-07-09', 'Citizen', 'Male', '35', 'Lapasan, Cagayan de Oro', '', '', 3, 1, 1, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(68, 441, 'ROX-2024-CDO-07-00441', '2024-07-09', 'Citizen', 'Male', '55', 'KAUSWAGAN, CDO', '', '', 1, 1, 1, 5, 4, 5, 5, 5, 6, 5, 5, 4, '', ''),
(69, 441, 'ROX-2024-CDO-07-00441', '2024-07-09', 'Citizen', 'Male', '25', 'Lumbia, Cagayan de Oro', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(70, 441, 'ROX-2024-CDO-07-00441', '2024-07-09', 'Citizen', 'Male', '25', 'Lumbia, Cagayan de Oro', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(71, 442, 'ROX-2024-CDO-07-00442', '2024-07-09', 'Citizen', 'Male', '25', '10', '', '', 1, 1, 1, 5, 4, 5, 5, 5, 6, 5, 5, 5, '', ''),
(72, 442, 'ROX-2024-CDO-07-00442', '2024-07-09', 'Citizen', 'Male', '35', 'Indahag, Cagayan de Oro', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(73, 443, 'ROX-2024-CDO-07-00443', '2024-07-09', 'Government', 'Male', '25', 'baliwagan, balingasag, misamis oriental', '', '', 1, 1, 4, 5, 5, 4, 4, 4, 4, 4, 4, 4, '', ''),
(74, 444, 'ROX-2024-CDO-07-00444', '2024-07-09', 'Citizen', 'Male', '25', 'bugo cdoc', '', '', 1, 1, 2, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', ''),
(75, 445, 'ROX-2024-CDO-07-00445', '2024-07-10', 'Business', 'Female', '24', 'Kauswagan', '', '', 4, 5, 4, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(76, 446, 'ROX-2024-CDO-07-00446', '2024-07-10', 'Citizen', 'Female', '25', '10', '13', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(77, 447, 'ROX-2024-CDO-07-00447', '2024-07-10', 'Citizen', 'Female', '24', ' bulua', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(78, 448, 'ROX-2024-CDO-07-00448', '2024-07-10', 'Citizen', 'Female', '24', 'cugman', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'very nice', ''),
(79, 449, 'ROX-2024-CDO-07-00449', '2024-07-10', 'Citizen', 'Male', '24', 'carmen', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(80, 450, 'ROX-2024-CDO-07-00450', '2024-07-10', 'Citizen', 'Male', '24', 'iponan', '1', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(81, 451, 'ROX-2024-CDO-07-00451', '2024-07-10', 'Citizen', 'Female', '25', 'carmen cdo', '', '', 4, 2, 1, 5, 2, 5, 6, 4, 6, 5, 4, 5, '', ''),
(82, 452, 'ROX-2024-CDO-07-00452', '2024-07-11', 'Business', 'Male', '35', '10', '', '', 3, 1, 1, 5, 5, 5, 4, 5, 4, 5, 5, 5, '', ''),
(83, 453, 'ROX-2024-CDO-07-00453', '2024-07-14', 'Business', 'Female', '35', 'region 10', '', '', 1, 1, 1, 5, 5, 5, 6, 4, 6, 4, 4, 4, '', ''),
(84, 454, 'ROX-2024-CDO-07-00454', '2024-07-14', 'Citizen', 'Female', '24', 'Cagayan de Oro, Mis. Or', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(85, 455, 'ROX-2024-CDO-07-00455', '2024-07-15', 'Citizen', 'Female', '35', 'LUMBIA', '', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'I AM SATISFIED WITH THE SERVICE.', ''),
(86, 456, 'ROX-2024-CDO-07-00456', '2024-07-16', 'Citizen', 'Male', '35', 'IPONAN', '1', '', 3, 2, 2, 5, 3, 4, 4, 5, 6, 4, 3, 5, '', ''),
(87, 457, 'ROX-2024-CDO-07-00457', '2024-07-16', 'Citizen', 'Female', '55', 'IPONAN', '', '', 3, 2, 2, 5, 1, 5, 1, 5, 6, 5, 4, 5, '', ''),
(88, 458, 'ROX-2024-CDO-07-00458', '2024-07-16', 'Citizen', 'Female', '45', 'Tumpagon', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(89, 459, 'ROX-2024-CDO-07-00459', '2024-07-16', 'Citizen', 'Female', '55', 'Bulua, CDO', '', '', 4, 5, 4, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(90, 458, 'ROX-2024-CDO-07-00458', '2024-07-16', 'Citizen', 'Female', '35', 'Tumpagon, CDOC', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(91, 460, 'ROX-2024-CDO-07-00460', '2024-07-16', 'Citizen', 'Female', '35', 'Rio, Bonbon, Cagayan de Oro City ', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(92, 459, 'ROX-2024-CDO-07-00459', '2024-07-16', 'Citizen', 'Male', '55', 'Tumpagon, CDOC', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(93, 460, 'ROX-2024-CDO-07-00460', '2024-07-16', 'Citizen', 'Female', '35', 'Bulua, CDOC', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(94, 460, 'ROX-2024-CDO-07-00460', '2024-07-16', 'Citizen', 'Female', '45', 'Kauswagan, Cagayan de Oro City ', '', '', 2, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(95, 461, 'ROX-2024-CDO-07-00461', '2024-07-16', 'Citizen', 'Female', '45', 'Bulua, CDOC', '', '', 3, 2, 2, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(96, 462, 'ROX-2024-CDO-07-00462', '2024-07-16', 'Citizen', 'Female', '35', 'Bulua, CDOC', '', '', 3, 2, 2, 5, 4, 5, 4, 5, 6, 5, 5, 5, '', ''),
(97, 463, 'ROX-2024-CDO-07-00463', '2024-07-16', 'Citizen', 'Female', '55', 'Iponan, Cagayan de Oro City ', '', '', 4, 5, 4, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(98, 463, 'ROX-2024-CDO-07-00463', '2024-07-16', 'Citizen', 'Female', '35', 'BULUA, CDOC', '', '', 1, 1, 1, 4, 4, 4, 4, 4, 6, 4, 4, 4, '', ''),
(99, 464, 'ROX-2024-CDO-07-00464', '2024-07-16', 'Citizen', 'Female', '45', 'Bulua, Cagayan de Oro City ', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(100, 464, 'ROX-2024-CDO-07-00464', '2024-07-16', 'Citizen', 'Male', '45', 'TUMPAGON CDO', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(101, 465, 'ROX-2024-CDO-07-00465', '2024-07-16', 'Citizen', 'Female', '45', 'BULUA, CDOC', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(102, 466, 'ROX-2024-CDO-07-00466', '2024-07-16', 'Citizen', 'Male', '25-34', 'X', '', 'ADVICE', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'SALAMAT KAAYU SA ADVICE', ''),
(103, 467, 'ROX-2024-CDO-07-00467', '2024-07-16', 'Citizen', 'Female', '25-34', 'X', '', 'ADVICE', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'DAGHANG SALAMAT DOLE SA INYUNG SERBISYO', ''),
(104, 468, 'ROX-2024-CDO-07-00468', '2024-07-16', 'Citizen', 'Female', '25-34', 'X', '', 'Advice', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'DAGHANG SALAMAT SA SERBISYO DOLE', ''),
(105, 469, 'ROX-2024-CDO-07-00469', '2024-07-12', 'Citizen', 'Female', '25-34', 'X', '', 'Advice', 1, 1, 1, 5, 6, 5, 6, 5, 5, 5, 5, 5, 'thank you dole for the service\r\n', ''),
(106, 470, 'ROX-2024-CDO-07-00470', '2024-07-17', 'Citizen', 'Male', '45', 'BALUBAL', '1', '', 1, 1, 1, 4, 4, 4, 5, 5, 6, 5, 5, 4, 'Sana matutukan ang mga kinahanglan sa kabos nga sektor labi na ang farmers', ''),
(107, 471, 'ROX-2024-CDO-07-00471', '2024-07-17', 'Citizen', 'Female', '55', 'BALUBAL', '1', '', 3, 3, 1, 5, 5, 5, 5, 5, 6, 3, 3, 4, 'Dakong pasalamat sa binigay para sa negosyo', ''),
(108, 472, 'ROX-2024-CDO-07-00472', '2024-07-17', 'Citizen', 'Female', '55', 'BALUBAL', '1', '', 3, 3, 1, 5, 4, 5, 4, 5, 6, 5, 5, 5, 'Andam pa mi modawat kung naay ihatag sa amo', ''),
(109, 473, 'ROX-2024-CDO-07-00473', '2024-07-17', 'Citizen', 'Female', '64', 'BALUBAL', '1', '', 2, 4, 1, 5, 4, 4, 4, 4, 6, 5, 5, 5, 'Kung naa pay mahatag, andam modawat', ''),
(110, 474, 'ROX-2024-CDO-07-00474', '2024-07-17', 'Citizen', 'Female', '55', 'BALUBAL', '1', '', 2, 4, 1, 5, 4, 5, 5, 4, 6, 5, 5, 5, 'Okay ang serbisyo og nagpasalamat kami', ''),
(111, 475, 'ROX-2024-CDO-07-00475', '2024-07-18', 'Citizen', 'Female', '25', 'CUGMAN, CAGAYAN DE ORO CITY', '', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', '');

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
  `suggestion` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll`
--

INSERT INTO `poll` (`id`, `controlNumber`, `ctrl_num`, `date`, `client`, `gender`, `age`, `region`, `service`, `other_service`, `c`, `cc`, `ccc`, `sqd`, `sqd_one`, `sqd_two`, `sqd_three`, `sqd_four`, `sqd_five`, `sqd_six`, `sqd_seven`, `sqd_eight`, `suggestion`, `email`) VALUES
(1, 'ROX-2024-CDO-RC-07-00299', 299, '2024-07-01', 'Business', 'Female', '25', 'Region X', '3.', '', 1, 1, 1, 5, 5, 5, 5, 4, 5, 4, 5, 5, 'Good Service', ''),
(10, 'ROX-2024-CDO-RC-07-00300', 300, '2024-07-01', 'Business', 'Male', '45', '10', '3.', '', 2, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(11, 'ROX-2024-CDO-RC-07-00301', 301, '2024-07-01', 'Citizen', 'Female', '35', 'Region 10', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'Staffs are all approachable ', ''),
(12, 'ROX-2024-CDO-RC-07-00302', 302, '2024-07-01', 'Citizen', 'Female', '45', 'J.V SeriÃ±a St.  Carmen\r\nCagayan de Oro City', '3.', '', 1, 1, 1, 5, 5, 4, 4, 4, 6, 4, 4, 5, '', ''),
(13, 'ROX-2024-CDO-RC-07-00303', 303, '2024-07-01', 'Business', 'Male', '25', 'Region X', '3.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(14, 'ROX-2024-CDO-RC-07-00303', 303, '2024-07-01', 'Business', 'Male', '25', 'Region X', '3.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(15, 'ROX-2024-CDO-RC-07-00304', 304, '2024-07-01', 'Citizen', 'Female', '55', 'PUERTO', '4.', '', 4, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, 'PASPAS ANG PROSESO. BUOTAN ANG MGA TAO. SALAMAT', ''),
(16, 'ROX-2024-CDO-RC-07-00305', 305, '2024-07-02', 'Citizen', 'Female', '45', 'MACASANDIG ,CDO', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(17, 'ROX-2024-CDO-RC-07-00306', 306, '2024-07-03', 'Citizen', 'Male', '25', 'Carmen', '4.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'The staffs are very helpful.', ''),
(18, 'ROX-2024-CDO-RC-07-00307', 307, '2024-07-03', 'Citizen', 'Female', '25', 'Agusan', '2.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'They assisted me very well', ''),
(19, 'ROX-2024-CDO-RC-07-00308', 308, '2024-07-03', 'Government', 'Male', '25', 'Cagayan de Oro', '2.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(20, 'ROX-2024-CDO-RC-07-00309', 309, '2024-07-03', 'Citizen', 'Female', '25', 'Macabalan', '2.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'Thank you so much for helping.', ''),
(21, 'ROX-2024-CDO-RC-07-00310', 310, '2024-07-03', 'Business', 'Male', '35', 'R10', '3.', '', 4, 5, 4, 5, 5, 5, 5, 5, 6, 4, 4, 4, '', ''),
(22, 'ROX-2024-CDO-RC-07-00311', 311, '2024-07-04', 'Business', 'Female', '35', 'REGION 10', '3.', '', 3, 2, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, '', ''),
(23, 'ROX-2024-CDO-RC-07-00312', 312, '2024-07-04', 'Citizen', 'Male', '45', 'CDO', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', 'davojoyfulcdo@yahoo.com.ph'),
(24, 'ROX-2024-CDO-RC-07-00313', 313, '2024-07-04', 'Citizen', 'Male', '25', 'INDAHAG CDO', '3.', '', 3, 1, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, '', ''),
(25, 'ROX-2024-CDO-RC-07-00314', 314, '2024-07-05', 'Business', 'Male', '35', '10', '3.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'VERY FAST TRANSACTION.', ''),
(26, 'ROX-2024-CDO-RC-07-00315', 315, '2024-07-05', 'Business', 'Male', '35', '10', '3.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'NONE', ''),
(27, 'ROX-2024-CDO-RC-07-00316', 316, '2024-07-05', 'Citizen', 'Female', '45', '10', '3.', '', 4, 2, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(28, 'ROX-2024-CDO-RC-07-00317', 317, '2024-07-05', 'Business', 'Female', '35', '10', '3.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(29, 'ROX-2024-CDO-RC-07-00318', 318, '2024-07-05', 'Business', 'Female', '35', '10', '3.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'staffs are very accommodating.', ''),
(30, 'ROX-2024-CDO-RC-07-00319', 319, '2024-07-05', 'Citizen', 'Male', '24', 'blk 1 ramonal vill.camaman-an c.d.o', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(31, 'ROX-2024-CDO-RC-07-00320', 320, '2024-07-07', 'Citizen', 'Male', '25', 'CDO', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(32, 'ROX-2024-CDO-RC-07-00321', 321, '2024-07-07', 'Citizen', 'Female', '35', 'REGION 10', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 6, 5, 5, 5, 'KEEP UP THE VERY ACCOMODATING TREATMENT TO ALL THE INCOMING CLIENTS', ''),
(33, 'ROX-2024-CDO-RC-07-00322', 322, '2024-07-08', 'Citizen', 'Female', '25', '10', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(34, 'ROX-2024-CDO-RC-07-00323', 323, '2024-07-08', 'Citizen', 'Male', '25', 'X', '3.', '', 1, 2, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(35, 'ROX-2024-CDO-RC-07-00324', 324, '2024-07-08', 'Citizen', 'Male', '45', 'X', '3.', '', 3, 2, 2, 5, 5, 5, 6, 5, 6, 5, 5, 5, '', ''),
(36, 'ROX-2024-CDO-RC-07-00325', 325, '2024-07-09', 'Business', 'Male', '25', 'REGION X', '2.', '', 1, 1, 1, 5, 5, 5, 4, 4, 5, 5, 5, 5, '', ''),
(37, 'ROX-2024-CDO-RC-07-00326', 326, '2024-07-09', 'Business', 'Male', '25', 'Region 10 Cagayan de oro City', '2.', '', 1, 1, 1, 5, 5, 5, 5, 4, 4, 4, 4, 4, '', 'jhonmarkdetablan90@gmail.com'),
(38, 'ROX-2024-CDO-RC-07-00327', 327, '2024-07-10', 'Citizen', 'Male', '35', 'indahag cdo', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(39, 'ROX-2024-CDO-RC-07-00328', 328, '2024-07-10', 'Government', 'Female', '35', 'region x', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(40, 'ROX-2024-CDO-RC-07-00329', 329, '2024-07-10', 'Business', 'Female', '25', '10', '2.', '', 3, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(41, 'ROX-2024-CDO-RC-07-00330', 330, '2024-07-10', 'Citizen', 'Male', '25', 'Region 10', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(42, 'ROX-2024-CDO-RC-07-00331', 331, '2024-07-10', 'Government', 'Male', '25', 'z-7,kabalalahan agusan ,cagayan de oro city', '2.', '', 3, 1, 1, 4, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(43, 'ROX-2024-CDO-RC-07-00332', 332, '2024-07-11', 'Business', 'Female', '25', 'CDO', '2.', '', 1, 2, 1, 5, 5, 5, 5, 5, 6, 4, 4, 5, '', ''),
(44, 'ROX-2024-CDO-RC-07-00333', 333, '2024-07-11', 'Citizen', 'Male', '55', 'X', '4.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', ''),
(45, 'ROX-2024-CDO-RC-07-00312', 312, '2024-07-04', 'Citizen', 'Male', '45', 'CDO', '3.', '', 1, 1, 1, 5, 5, 5, 5, 5, 5, 5, 5, 5, '', 'davojoyfulcdo@yahoo.com.ph'),
(46, 'ROX-2024-CDO-RC-07-00313', 313, '2024-07-16', 'Citizen', 'Female', '25', 'REGION 10', '4.', '', 1, 2, 1, 5, 2, 5, 5, 5, 2, 5, 5, 5, '', ''),
(47, 'ROX-2024-CDO-RC-07-00314', 314, '2024-07-16', 'Business', 'Female', '35', 'Bulua, Cagayan de Oro City', '2.', '', 1, 1, 1, 5, 5, 5, 5, 4, 4, 4, 5, 5, '', ''),
(48, 'ROX-2024-CDO-RC-07-00315', 315, '2024-07-17', 'Citizen', 'Female', '55', 'region 10', '2.', '', 1, 1, 1, 4, 4, 4, 6, 4, 6, 5, 5, 5, '', ''),
(49, 'ROX-2024-CDO-RC-07-00316', 316, '2024-07-17', 'Citizen', 'Female', '24', '10', '2.', '', 1, 1, 1, 5, 5, 5, 6, 6, 6, 5, 5, 5, '', ''),
(50, 'ROX-2024-CDO-RC-07-00317', 317, '2024-07-17', 'Business', 'Male', '55', 'LAPASAN', '2.', '', 1, 1, 1, 5, 5, 5, 6, 5, 6, 5, 5, 5, 'NONE', ''),
(51, 'ROX-2024-CDO-RC-07-00318', 318, '2024-07-18', 'Business', 'Female', '25', 'Corrales Ext. Cagayan de Oro, Misamis Oriental, 9000', '4.', '', 3, 2, 1, 5, 4, 5, 5, 5, 4, 5, 4, 5, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `tbl_user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_role` varchar(15) NOT NULL,
  `contact_number` varchar(15) NOT NULL,
  `office_address` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_code` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`tbl_user_id`, `first_name`, `last_name`, `user_role`, `contact_number`, `office_address`, `email`, `username`, `password`, `verification_code`) VALUES
(1, 'Emmanuel', 'Toledo', 'Super Admin', '09161352701', 'Yacapin Street, Trinidad Building, Cagayan de Oro City', 'sample.email@gmail.com', 'toledo.admin', '123456', 965225),
(2, 'Mark Anthony', 'Señeres', 'admin', '', '', '', 'seneres.admin', '123', 838582),
(7, 'Jay', 'Luchavez', 'dev', '9351485144', '', 'rjaycun@gmail.com', 'itdev3', '123', 426385),
(11, 'Christian Jan', 'Escol', 'dev', '09676629818', 'DOLE CDO FO', '', 'itdev4', '123456', 101),
(13, 'Loy', 'Wigi', 'dev', '9162034449', 'DOLE CDO FO', 'cabarlesluigi26@gmail.com', 'loywigi', 'iulsmke2001', 102),
(14, 'Sitti Nashiba', 'Talon-Alonto', 'Admin', '', 'DOLE X FO', '', 'talon-alonto.admin', '123456', 201),
(15, 'Roy Albert', 'Bug-os', 'dev', '09676629818', 'CDO FO', 'royalbertb@gmail.com', 'itdev2', '123456', 101),
(16, '', '', '', '', '', '', '', '', 0),
(17, 'Welnessa', 'Neri', 'receiving', '', 'DOLE X CDO-FO', '', 'neri.receiving', '12345', 404404);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offline`
--
ALTER TABLE `offline`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `poll`
--
ALTER TABLE `poll`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `tbl_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
