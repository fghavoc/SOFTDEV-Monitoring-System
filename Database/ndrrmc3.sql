-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2017 at 01:00 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `city_information`
--

CREATE TABLE `city_information` (
  `id` int(11) NOT NULL,
  `region_name` varchar(45) NOT NULL,
  `city_name` varchar(45) NOT NULL,
  `no_of_brgy` varchar(45) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city_questionnaire`
--

CREATE TABLE `city_questionnaire` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `city_information_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `suggested_supplies`
--

CREATE TABLE `suggested_supplies` (
  `id` int(11) NOT NULL,
  `disaster_type` varchar(45) DEFAULT NULL,
  `equipment_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplies_needed`
--

CREATE TABLE `supplies_needed` (
  `id` int(11) NOT NULL,
  `requested_supplies` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `destination` varchar(45) DEFAULT NULL,
  `suggested_supplies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `contact` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `contact`, `city`, `status`, `created_at`, `updated_at`) VALUES
(1, 'username', '8a02YK2eaqQ8TnXmF3IHPO470VaicE9U', '$2y$13$q9aCqJP9K6uHHLBoPUHdSOsH/OJjJgNxdi1ofbGdCn3eKqvQx9mFG', NULL, 'localhost@email.com', '', '', 10, 1487505450, 1487505450),
(2, 'username2', '0Bt2XJ34X7-u4LBYWo5GceZDqeE-SUpU', '$2y$13$MBtqEmoGmzN6UC2KrcpxyugSghl/W6f4SaspV9OI.yqUi4RMDlCE6', NULL, 'localhost2@email.com', '', '', 10, 1487505474, 1487505474);

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
  ADD PRIMARY KEY (`id`,`user_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_city_information_user1_idx` (`user_id`);

--
-- Indexes for table `city_questionnaire`
--
ALTER TABLE `city_questionnaire`
  ADD PRIMARY KEY (`id`,`city_information_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_city_questionnaire_city_information1_idx` (`city_information_id`);

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
  ADD PRIMARY KEY (`id`,`suggested_supplies_id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city_information`
--
ALTER TABLE `city_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `city_questionnaire`
--
ALTER TABLE `city_questionnaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ndrrmc`
--
ALTER TABLE `ndrrmc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suggested_supplies`
--
ALTER TABLE `suggested_supplies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplies_needed`
--
ALTER TABLE `supplies_needed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  ADD CONSTRAINT `fk_city_information_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `city_questionnaire`
--
ALTER TABLE `city_questionnaire`
  ADD CONSTRAINT `fk_city_questionnaire_city_information1` FOREIGN KEY (`city_information_id`) REFERENCES `city_information` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `supplies_needed`
--
ALTER TABLE `supplies_needed`
  ADD CONSTRAINT `fk_supplies_needed_suggested_supplies1` FOREIGN KEY (`suggested_supplies_id`) REFERENCES `suggested_supplies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
