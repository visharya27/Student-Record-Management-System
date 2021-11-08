-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 10:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `semester` tinyint(2) NOT NULL,
  `rollno` varchar(10) NOT NULL,
  `dept` varchar(10) NOT NULL,
  `notes` varchar(50) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`name`, `age`, `gender`, `dob`, `email`, `phone`, `fname`, `mname`, `address`, `semester`, `rollno`, `dept`, `notes`, `date`) VALUES
('Raghav', 19, 'male', '2002-02-13', 'raghav@gmail.com', 4878985826, 'Dont know', 'Dont know', 'Dont know', 5, '19509', 'Computer S', '', '2021-11-08'),
('Vish', 20, 'male', '2000-02-25', 'cish@gmail.com', 9588587458, 'Trial', 'Trial', 'asd', 5, '195092', 'Computer', '', '2021-11-08'),
('Gaurav', 21, 'male', '2021-11-03', 'gaurav@gmail.com', 9541258466, 'Umesh', 'Rajni', 'sfsdf', 5, '195102', 'Computer', '', '2021-11-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD UNIQUE KEY `rollno` (`rollno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
