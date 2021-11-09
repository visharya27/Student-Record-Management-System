-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2021 at 02:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_records`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `name` varchar(60) NOT NULL,
  `age` tinyint(2) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `mname` varchar(60) NOT NULL,
  `address` varchar(250) NOT NULL,
  `yoadm` smallint(4) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `dept` varchar(60) NOT NULL,
  `notes` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `age`, `gender`, `dob`, `email`, `phone`, `fname`, `mname`, `address`, `yoadm`, `rollno`, `dept`, `notes`, `date`) VALUES
('Gaurav Choudhary', 22, 'male', '1999-01-01', '181064@nith.ac.in', 9000490004, 'Test Name', 'Test Name', 'Test Address', 2018, '181064', 'Civil', '', '2021-11-09'),
('Vishwas Arya', 21, 'male', '2000-08-21', 'vishwasarya2000@gmail.com', 9413977291, 'Vijay Prakash', 'Sangeeta', 'Plot-30, Sector-12, Hanumangarh, Rajasthan', 2019, '195091', 'Computer Science', '', '2021-11-09'),
('Gaurav Pandey', 21, 'male', '2000-05-25', '195102@nith.ac.in', 9669233493, 'Umesh Pandey', 'Rajni Pandey', '30, Sai Temple Road, Bilaspur, Chhatisgarh', 2019, '195102', 'Computer Science', 'Library Fee due Rs.60', '2021-11-09'),
('Gaurav Negi', 20, 'male', '2001-01-01', '195578@nith.ac.in', 9000390003, 'Test Name', 'Test Name', 'Test Address', 2019, '195578', 'Computer Science Dual', 'Hostel Fee Due', '2021-11-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('admin', '2eea0e02d74191937b06ae8ab6923f3dea846166');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `rollno` (`rollno`);
ALTER TABLE `students` ADD FULLTEXT KEY `name` (`name`,`rollno`);
ALTER TABLE `students` ADD FULLTEXT KEY `name_2` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
