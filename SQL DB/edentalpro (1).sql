-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 07:53 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edentalpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `username`, `password_2`) VALUES
(1, 'eesha', 'eesha123'),
(2, 'omama', 'omama123');

-- --------------------------------------------------------

--
-- Table structure for table `dentist_info`
--

CREATE TABLE `dentist_info` (
  `dentist_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `D_password` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dentist_info`
--

INSERT INTO `dentist_info` (`dentist_id`, `first_name`, `last_name`, `phone`, `username`, `D_password`, `category`) VALUES
(1, 'Dr.Ayesha', 'Farooqi', '03214569874', 'ayesha', 'ayesha123', 'SeniorDentist'),
(2, 'Dr.Areeb', 'Khan', '0312546878', 'areeb', 'areeb123', 'SeniorDentist'),
(3, 'Dr.Warisha', 'Javed', '03625485236', 'warisha', 'warisha123', 'SeniorDentist'),
(4, 'Dr.Wardah', 'Ali', '0354269872', 'warda', 'warda123', 'Consultant'),
(5, 'Dr.Rachel', 'Green', '0325478961', 'rachel', 'rachel123', 'JuniorDentist'),
(6, 'Dr.Joey', 'Parelta', '0325489654', 'joey', 'joey123', 'JuniorDentist'),
(7, 'Test', 'Subject', '03214568520', 'testu', 'test123', '');

-- --------------------------------------------------------

--
-- Table structure for table `patientappo`
--

CREATE TABLE `patientappo` (
  `pID` int(11) NOT NULL,
  `app_ID` int(11) NOT NULL,
  `appCNIC` bigint(13) UNSIGNED NOT NULL,
  `den_name` varchar(100) NOT NULL,
  `App_date` date NOT NULL,
  `App_time` time NOT NULL,
  `App_cause` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_login`
--

CREATE TABLE `patient_login` (
  `patient_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password_2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_login`
--

INSERT INTO `patient_login` (`patient_id`, `first_name`, `last_name`, `email`, `password_2`) VALUES
(1, 'eesha', 'qureshi', 'eesha@gmail.com', '123'),
(2, 'eeshaa', 'qureshii', 'eeshaa@gmail.com', 'abc'),
(3, 'abc', 'cba', 'abc@gmail.ccom', 'abc'),
(4, 'xyz', 'yzx', 'xyz@gmail.com', '123'),
(5, 'Levi ', 'Ackerman', 'free@gmail.com', '852'),
(6, 'fariha', 'kazmi', 'abc@gmail.com', '123'),
(7, 'test', 'subject', 'test@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `patient_message`
--

CREATE TABLE `patient_message` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `p_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_message`
--

INSERT INTO `patient_message` (`name`, `email`, `phone`, `p_message`) VALUES
('abc', 'abc@gmail.com', '0213666', 'sksk'),
('abc', 'abc@gmail.com', '0213666', 'henlo'),
('abc', 'abc@gmail.com', '0213666', 'cc'),
('abc', 'abc@gmail.com', '0213666', 'cc'),
('omama', 'omama.ahmed@gmail.com', '0213666', 'hello\r\n'),
('omama', 'omama.ahmed@gmail.com', '0213666', 'hello!'),
('omama', 'omama.ahmed@gmail.com', '0213666', 'hello!'),
('omama', 'omama.ahmed@gmail.com', '0213666', 'hello!'),
('abc', 'abc@gmail.com', '0213666', 'hello!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dentist_info`
--
ALTER TABLE `dentist_info`
  ADD PRIMARY KEY (`dentist_id`);

--
-- Indexes for table `patientappo`
--
ALTER TABLE `patientappo`
  ADD PRIMARY KEY (`app_ID`) USING BTREE,
  ADD UNIQUE KEY `appCNIC` (`appCNIC`);

--
-- Indexes for table `patient_login`
--
ALTER TABLE `patient_login`
  ADD PRIMARY KEY (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dentist_info`
--
ALTER TABLE `dentist_info`
  MODIFY `dentist_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patientappo`
--
ALTER TABLE `patientappo`
  MODIFY `app_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `patient_login`
--
ALTER TABLE `patient_login`
  MODIFY `patient_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
