-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2017 at 03:59 PM
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
-- Table structure for table `dead`
--

CREATE TABLE `dead` (
  `id` int(11) NOT NULL,
  `submission_id` varchar(255) NOT NULL,
  `general_condition` varchar(20) NOT NULL,
  `body_part_found` varchar(15) NOT NULL,
  `body_condition` varchar(15) NOT NULL,
  `apparent_sex` varchar(12) NOT NULL,
  `age_group` varchar(15) NOT NULL,
  `height` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `hair_length` varchar(10) NOT NULL,
  `hair_color` varchar(10) NOT NULL,
  `facial_hair_type` varchar(15) NOT NULL,
  `facial_hair_length` varchar(10) NOT NULL,
  `facial_hair_color` varchar(15) NOT NULL,
  `distinguishing_features` varchar(40) NOT NULL,
  `scar_location` varchar(255) NOT NULL,
  `tattoo_location` varchar(255) NOT NULL,
  `birthmark_location` varchar(255) NOT NULL,
  `mole_location` varchar(255) NOT NULL,
  `upper_garment` varchar(25) NOT NULL,
  `upper_garment_color` varchar(15) NOT NULL,
  `lower_garment` varchar(25) NOT NULL,
  `lower_garment_color` varchar(15) NOT NULL,
  `footwear` varchar(15) NOT NULL,
  `eyewear` varchar(15) NOT NULL,
  `glasses_color` varchar(15) NOT NULL,
  `contact_lens_color` varchar(15) NOT NULL,
  `photo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dead`
--

INSERT INTO `dead` (`id`, `submission_id`, `general_condition`, `body_part_found`, `body_condition`, `apparent_sex`, `age_group`, `height`, `weight`, `hair_length`, `hair_color`, `facial_hair_type`, `facial_hair_length`, `facial_hair_color`, `distinguishing_features`, `scar_location`, `tattoo_location`, `birthmark_location`, `mole_location`, `upper_garment`, `upper_garment_color`, `lower_garment`, `lower_garment_color`, `footwear`, `eyewear`, `glasses_color`, `contact_lens_color`, `photo`) VALUES
(1, '364972106491808198', 'Complete Body', '', 'Fully Skeletoni', 'Female', 'Child', 'Average', 'Slim', 'Short', 'Brunette', 'Beard', 'Medium', 'Brown', 'Scars; Birthmarks', 'Upper Back; Legs', '', 'Lower Back; Palm', '', 'Polo Shirt', 'Yellow', 'Shorts', 'Pink', 'Shoes', 'Glasses', 'Maroon', '', 0x7b227769646765745f6d65746164617461223a7b2274797065223a22696d6167656c696e6b73222c2276616c7565223a5b7b226e616d65223a2231373132313534395f313430353832353639393433383139355f3831313432363435335f6f2e6a7067222c2275726c223a2268747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6a6f74666f726d576964676574732f696d616765507265766965772f37303631313233323032353434302f6538323333646631373132313534395f313430353832353639393433383139355f3831313432363435335f6f2e6a7067227d5d7d7d);

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

CREATE TABLE `missing` (
  `id` int(11) NOT NULL,
  `submission_id` varchar(75) NOT NULL,
  `photo` longblob NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `birthdate` varchar(15) NOT NULL,
  `age` varchar(5) NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `date_of_disappearance` varchar(15) NOT NULL,
  `time_of_disappearance` varchar(15) NOT NULL,
  `last_seen` varchar(255) NOT NULL,
  `relationship_with_person` varchar(20) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `eye_color` varchar(15) NOT NULL,
  `hair_length` varchar(10) NOT NULL,
  `hair_color` varchar(10) NOT NULL,
  `facial_hair` varchar(10) NOT NULL,
  `facial_hair_color` varchar(15) NOT NULL,
  `facial_hair_length` varchar(15) NOT NULL,
  `ear_shape` varchar(15) NOT NULL,
  `eyebrows_size` varchar(10) NOT NULL,
  `nose_size` varchar(10) NOT NULL,
  `hand_size` varchar(10) NOT NULL,
  `feet_size` varchar(10) NOT NULL,
  `distinguishing_features` varchar(50) NOT NULL,
  `scar_location` varchar(255) NOT NULL,
  `tattoo_location` varchar(255) NOT NULL,
  `birthmark_location` varchar(255) NOT NULL,
  `mole_location` varchar(255) NOT NULL,
  `upper_garment` varchar(10) NOT NULL,
  `upper_garment_color` varchar(10) NOT NULL,
  `lower_garment` varchar(10) NOT NULL,
  `lower_garment_color` varchar(10) NOT NULL,
  `footwear` varchar(15) NOT NULL,
  `eyewear` varchar(15) NOT NULL,
  `glasses_color` varchar(15) NOT NULL,
  `contact_lens_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dead`
--
ALTER TABLE `dead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missing`
--
ALTER TABLE `missing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dead`
--
ALTER TABLE `dead`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `missing`
--
ALTER TABLE `missing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
