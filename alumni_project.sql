-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2021 at 05:28 PM
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
  `phone_number` varchar(10) NOT NULL,
  `status_work` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_data`
--

INSERT INTO `stu_data` (`user_id`, `stu_id`, `password`, `name_prefix`, `FName`, `LName`, `FName_eng`, `LName_eng`, `id_cardnumber`, `sex`, `faculty`, `major`, `section`, `edu_level`, `first_year`, `d_m_y_birth`, `province_birth`, `nationality`, `religion`, `blood_type`, `Address`, `SubDistrict`, `District`, `Province`, `Zipcode`, `phone_number`, `status_work`, `company_name`) VALUES
(1, 624259013, '$2y$10$iCGW/CwFnV7PCiB877Mw2.O.GBS9xUoUFav.TKK7SKLotgaFh65C2', 'นาย', 'ณัฐภูมิ', 'พันธ์มี', 'NATTAPOOM', 'PUNMEE', '1730201363493', 'Mr.', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'วิศวกรรมซอฟต์แวร์', '62/45', 'ปริญาญาตรี (4 ปี) ภาคปกติ', '2562', '2021-10-17', 'นครปฐม', 'ไทย', 'คริสต์', 'B', '96/1 ม.18', 'ห้วยขวาง', 'กำแพงแสน', 'นครปฐม', 73140, '0985497532', 'ไม่ได้ทำงาน', ''),
(2, 624259015, '$2y$10$pigti2tubUSPCJO0su7Z6uEuAL.R5mOSQKTjDOPdwgRKlN13quSka', 'นาย', 'ธีรวัตร', 'ขวัญเพิ่มพร', 'TIRAWAT', 'KHWANPERMPORN', '1104200142144', 'Mr.', 'คณะวิทยาศาสตร์และเทคโนโลยี', 'วิศวกรรมซอฟต์แวร์', '62/45', 'ปริญาญาตรี (4 ปี) ภาคปกติ', '2562', '2021-09-26', 'กาญจนบุรี', 'ไทย', 'พุทธ', 'B', '146 ม.14', 'เลาขวัญ', 'เลาขวัญ', 'กาญจนบุรี', 71210, '0626788113', 'ทำงานแล้ว', 'Youtube company');

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
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
