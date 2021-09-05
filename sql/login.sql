-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2021 at 08:37 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `Center_ID` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(30) NOT NULL,
  `Pincode` bigint(30) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Contact No.` bigint(30) NOT NULL,
  `Timings` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `centers`
--

INSERT INTO `centers` (`Center_ID`, `Name`, `Address`, `City`, `State`, `Pincode`, `Type`, `Contact No.`, `Timings`) VALUES
('567800', 'Pallavi Blood Bank', 'Madan Mohan malviya shatabdi hospital 2ndfloor, MBPT Colony, Best Colony, Govandi East', 'Mumbai', 'Maharashtra ', 400088, 'Blood Bank', 9653482996, 'Open 24 hours'),
('567801', 'Sion Blood Bank', 'Opposite Sion bus depot, Near Sion circle', 'Mumbai', 'Maharashtra', 400022, 'Hospital', 2224022066, 'Open 24 hours');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `blood_grp` varchar(10) NOT NULL,
  `aadhaar_no` bigint(12) NOT NULL,
  `date` date NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `gender`, `blood_grp`, `aadhaar_no`, `date`, `contact_no`, `email`, `state`, `district`, `city`) VALUES
('khj', 'Male', 'B+', 875645, '2021-08-01', 875315767, 'kp@gmail.com', 'a', 'f', 'd'),
('Anjali', 'Female', 'o-', 12343434, '2020-07-21', 904955103, 'kash@gmail.com', 'Maharshtra', 'Thane', 'Ulhasnagar'),
('kashish', 'Female', 'o-', 12345678, '2020-07-21', 904955103, 'kash@gmail.com', 'Maharshtra', 'Thane', 'Ulhasnagar'),
('Vidhi Mehta', 'Female', 'AB+', 12398765, '2021-08-02', 7676767676, 'vidhi@gmail.com', 'Maharashtra', 'Thane', 'Thane'),
('Sohail Gidwani', 'Male', 'B+', 565656787, '2002-05-05', 7878787878, 'sohail@gmail.com', 'Maharashtra', 'Thane', 'Ulhasnagar'),
('Aryan Vidyarthi', 'male', 'B-', 897651235, '2002-05-05', 7777788888, 'aryan@gmail.com', 'Maharashtra', 'Raigad', 'Karjat'),
('Veronica', 'Female', 'O-', 897651421, '2020-07-21', 9049551036, 'kash@gmail.com', 'Maharshtra', 'Thane', 'Ulhasnagar'),
('Aryan', 'male', 'o_neg', 2147483647, '2020-07-21', 904955103, 'k@gmail.com', 'Maharshtra', 'Thane', 'Ulhasnagar'),
('a', 'Female', 'B-', 568995424564, '2021-08-07', 6655778800, 'a@gmail.com', 'a', 's', 'd'),
('Marina Truce', 'Female', 'AB-', 878712345421, '2001-01-03', 6262454510, 'marina@gmail.com', 'Kerala', 'Kollam', 'Kollam'),
('Arnav Kapoor', 'Male', 'AB+', 987653567866, '2011-07-20', 9049551036, 'arnav@gmail.com', 'Goa', 'Panaji', 'Panaji'),
('k', 'Female', 'A-', 987654327654, '2021-08-03', 8787990900, 'l@gmail.com', 'k', 'h', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `pwd`) VALUES
('A', 'a@gmail.com', 'aaaaaaaaa'),
('Arnav Kapoor', 'arnav@gmail.com', 'arnav@1234'),
('Aryan', 'aryan@gmail.com', 'aryan0502'),
('kashish', 'k@gmail.com', '12345678'),
('k', 'k@gmil.com', 'aaaaaaaaa'),
('kash', 'kash@gmail.com', 'kash1290'),
('khj', 'kp@gmail.com', 'kkkkkkkkk'),
('k', 'l@gmail.com', 'zxcvbnmzx'),
('Marina Truce', 'marina@gmail.com', 'marina@1234'),
('R', 'r@gmail.com', 'aaaaaaaaa'),
('Rishika Lulla', 'rish@gmail.com', 'rish@1234'),
('Sohail Gidwani', 'sohail@gmail.com', 'sohail0502'),
('Vidhi Mehta', 'vidhi@gmail.com', 'vidhi1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`Center_ID`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`aadhaar_no`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
