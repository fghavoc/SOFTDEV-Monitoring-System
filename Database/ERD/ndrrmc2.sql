-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 05:21 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndrrmc2`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisory`
--

CREATE TABLE `advisory` (
  `id` int(11) NOT NULL,
  `date` varchar(45) NOT NULL,
  `subject` varchar(45) NOT NULL,
  `disaster_category` varchar(45) NOT NULL,
  `ndrrmc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advisory`
--

INSERT INTO `advisory` (`id`, `date`, `subject`, `disaster_category`, `ndrrmc_id`) VALUES
(1, '-', 'advisory1', 'disaster category 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_information`
--

CREATE TABLE `city_information` (
  `id` int(11) NOT NULL,
  `region_name` varchar(45) NOT NULL,
  `city_name` varchar(45) NOT NULL,
  `no_of_brgy` varchar(45) NOT NULL,
  `lgu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_information`
--

INSERT INTO `city_information` (`id`, `region_name`, `city_name`, `no_of_brgy`, `lgu_id`) VALUES
(1, 'Region 1 ', 'City 1', '15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city_questionnaire`
--

CREATE TABLE `city_questionnaire` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `city_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_questionnaire`
--

INSERT INTO `city_questionnaire` (`id`, `question`, `city_information_id`) VALUES
(1, 'Q 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lgu`
--

CREATE TABLE `lgu` (
  `id` int(11) NOT NULL,
  `city` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL,
  `advisory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lgu`
--

INSERT INTO `lgu` (`id`, `city`, `email`, `password`, `contact`, `advisory_id`) VALUES
(1, 'city 1', 'email@email.com', 'password', '0988278341', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1487473988),
('m130524_201442_init', 1487473992);

-- --------------------------------------------------------

--
-- Table structure for table `ndrrmc`
--

CREATE TABLE `ndrrmc` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `contact` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ndrrmc`
--

INSERT INTO `ndrrmc` (`id`, `email`, `username`, `password`, `contact`) VALUES
(1, 'email@email', 'username', 'password', '098766521'),
(2, 'email@email', 'username', 'password', '098766521'),
(3, 'email2@email.com', 'localhost', 'clinicapc', '12092489173401');

-- --------------------------------------------------------

--
-- Table structure for table `suggested_supplies`
--

CREATE TABLE `suggested_supplies` (
  `id` int(11) NOT NULL,
  `disaster_type` varchar(45) DEFAULT NULL,
  `equipment_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggested_supplies`
--

INSERT INTO `suggested_supplies` (`id`, `disaster_type`, `equipment_name`) VALUES
(1, 'D type 1', 'Equipment 1');

-- --------------------------------------------------------

--
-- Table structure for table `supplies_needed`
--

CREATE TABLE `supplies_needed` (
  `id` int(11) NOT NULL,
  `requested_supplies` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `destination` varchar(45) DEFAULT NULL,
  `lgu_id` int(11) NOT NULL,
  `lgu_advisory_id` int(11) NOT NULL,
  `suggested_supplies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplies_needed`
--

INSERT INTO `supplies_needed` (`id`, `requested_supplies`, `quantity`, `destination`, `lgu_id`, `lgu_advisory_id`, `suggested_supplies_id`) VALUES
(1, 'R supplies 1', '5', 'Destination 1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisory`
--
ALTER TABLE `advisory`
  ADD PRIMARY KEY (`id`,`ndrrmc_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_advisory_ndrrmc_idx` (`ndrrmc_id`);

--
-- Indexes for table `city_information`
--
ALTER TABLE `city_information`
  ADD PRIMARY KEY (`id`,`lgu_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_city_information_lgu1_idx` (`lgu_id`);

--
-- Indexes for table `city_questionnaire`
--
ALTER TABLE `city_questionnaire`
  ADD PRIMARY KEY (`id`,`city_information_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_city_questionnaire_city_information1_idx` (`city_information_id`);

--
-- Indexes for table `lgu`
--
ALTER TABLE `lgu`
  ADD PRIMARY KEY (`id`,`advisory_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_lgu_advisory1_idx` (`advisory_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `ndrrmc`
--
ALTER TABLE `ndrrmc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indexes for table `suggested_supplies`
--
ALTER TABLE `suggested_supplies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplies_needed`
--
ALTER TABLE `supplies_needed`
  ADD PRIMARY KEY (`id`,`lgu_id`,`lgu_advisory_id`,`suggested_supplies_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_supplies_needed_lgu1_idx` (`lgu_id`,`lgu_advisory_id`),
  ADD KEY `fk_supplies_needed_suggested_supplies1_idx` (`suggested_supplies_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisory`
--
ALTER TABLE `advisory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city_information`
--
ALTER TABLE `city_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `city_questionnaire`
--
ALTER TABLE `city_questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lgu`
--
ALTER TABLE `lgu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ndrrmc`
--
ALTER TABLE `ndrrmc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suggested_supplies`
--
ALTER TABLE `suggested_supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplies_needed`
--
ALTER TABLE `supplies_needed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisory`
--
ALTER TABLE `advisory`
  ADD CONSTRAINT `fk_advisory_ndrrmc` FOREIGN KEY (`ndrrmc_id`) REFERENCES `ndrrmc` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city_information`
--
ALTER TABLE `city_information`
  ADD CONSTRAINT `fk_city_information_lgu1` FOREIGN KEY (`lgu_id`) REFERENCES `lgu` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city_questionnaire`
--
ALTER TABLE `city_questionnaire`
  ADD CONSTRAINT `fk_city_questionnaire_city_information1` FOREIGN KEY (`city_information_id`) REFERENCES `city_information` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `lgu`
--
ALTER TABLE `lgu`
  ADD CONSTRAINT `fk_lgu_advisory1` FOREIGN KEY (`advisory_id`) REFERENCES `advisory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplies_needed`
--
ALTER TABLE `supplies_needed`
  ADD CONSTRAINT `fk_supplies_needed_lgu1` FOREIGN KEY (`lgu_id`,`lgu_advisory_id`) REFERENCES `lgu` (`id`, `advisory_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_supplies_needed_suggested_supplies1` FOREIGN KEY (`suggested_supplies_id`) REFERENCES `suggested_supplies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
