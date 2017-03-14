-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 06:31 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afterlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `submission_id` varchar(50) NOT NULL,
  `form_id` varchar(50) NOT NULL,
  `ip_address` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `other_names` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(100) NOT NULL,
  `last_time_seen` varchar(12) NOT NULL,
  `last_location_seen` varchar(150) NOT NULL,
  `shirt_color` varchar(10) NOT NULL,
  `lower_garment` varchar(10) NOT NULL,
  `footwear` varchar(10) NOT NULL,
  `hair_length` varchar(10) NOT NULL,
  `hair_color` varchar(10) NOT NULL,
  `eye_color` varchar(10) NOT NULL,
  `skin_color` varchar(10) NOT NULL,
  `picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`submission_id`, `form_id`, `ip_address`, `name`, `other_names`, `age`, `gender`, `address`, `last_time_seen`, `last_location_seen`, `shirt_color`, `lower_garment`, `footwear`, `hair_length`, `hair_color`, `eye_color`, `skin_color`, `picture`) VALUES
('364037205638766231', '70574818390463', '180.190.118.36', 'Mr.. Kyle Vincent Lee', 'Kyle/Valoria/Kalbo', 19, 'Male', '', '02-28-2017', '2431 M. dela Cruz St, Pasay, Metro Manila, Philippines\r\n14.54853, 121.00682', 'Blue', 'Pants', 'Slippers', 'Short', 'Blonde', 'Brown', 'White', 0x31373031363334335f313339373133383238333634303237305f3135353533313233345f6f2e6a7067),
('364071373182222566', '70574818390463', '112.198.102.81', 'Mr.. Kyle Vincent Lee', 'Kyle/Valoria/Kalbo', 19, 'Male', '', '02-28-2017', '2431 M. dela Cruz St, Pasay, Metro Manila, Philippines\r\n14.54853, 121.00682', 'Blue', 'Pants', 'Slippers', 'Short', 'Blonde', 'Brown', 'White', 0x31373031363334335f313339373133383238333634303237305f3135353533313233345f6f2e6a7067),
('364071394182617895', '70574818390463', '112.198.102.81', 'Mr.. Kyle Vincent Lee', 'Kyle/Valoria/Kalbo', 19, 'Male', '', '02-28-2017', '2431 M. dela Cruz St, Pasay, Metro Manila, Philippines\r\n14.54853, 121.00682', 'Blue', 'Pants', 'Slippers', 'Short', 'Blonde', 'Brown', 'White', 0x31373031363334335f313339373133383238333634303237305f3135353533313233345f6f2e6a7067),
('364072317182634766', '70574818390463', '112.198.102.81', 'Mr.. Test Test Test', 'Test/Test/Test', 14, 'Male', '', '02-28-2017', 'Metro Manila Skyway, Quezon City, Metro Manila, Philippines\r\n14.53121, 121.02181', 'Orange', 'Skirt', 'Shoes', 'Medium', 'Blonde', 'Brown', 'Black', 0x31373031363334335f313339373133383238333634303237305f3135353533313233345f6f2e6a7067),
('364076125182587820', '70574818390463', '112.198.102.81', 'Ms.. qwd wed wsed', 'sdcffvsdc/wsde/sdf', 12, 'Female', '', '02-28-2017', '721 Muelle dela Industria, San Nicolas, Manila, 1010 Metro Manila, Philippines\r\n14.59550, 120.97210', '', '', '', '', '', '', '', 0x31373031363334335f313339373133383238333634303237305f3135353533313233345f6f2e6a7067);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`submission_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
