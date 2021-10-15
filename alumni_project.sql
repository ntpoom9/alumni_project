-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 05:19 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_data`
--

CREATE TABLE `stu_data` (
  `user_id` int(10) NOT NULL,
  `stu_id` int(9) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name_prefix` varchar(250) NOT NULL,
  `FName` varchar(250) NOT NULL,
  `LName` varchar(250) NOT NULL,
  `FName_eng` varchar(250) NOT NULL,
  `LName_eng` varchar(250) NOT NULL,
  `id_cardnumber` varchar(13) NOT NULL,
  `sex` varchar(13) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `major` varchar(255) NOT NULL,
  `section` varchar(250) NOT NULL,
  `edu_level` varchar(250) NOT NULL,
  `first_year` varchar(250) NOT NULL,
  `d_m_y_birth` date NOT NULL,
  `province_birth` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL,
  `religion` varchar(250) NOT NULL,
  `blood_type` varchar(20) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `SubDistrict` varchar(255) NOT NULL,
  `District` varchar(255) NOT NULL,
  `Province` varchar(255) NOT NULL,
  `Zipcode` int(10) NOT NULL,
  `phone_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_data`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_data`
--
ALTER TABLE `stu_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_data`
--
ALTER TABLE `stu_data`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
