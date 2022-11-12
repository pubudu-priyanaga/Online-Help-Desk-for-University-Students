-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 06:27 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_profile`
--

CREATE TABLE `db_profile` (
  `UID` int(11) NOT NULL,
  `userType` varchar(20) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `NIC` varchar(20) NOT NULL,
  `uPhone` varchar(10) NOT NULL,
  `uEmail` varchar(50) NOT NULL,
  `uAddress` varchar(50) NOT NULL,
  `uGender` varchar(10) NOT NULL,
  `uAge` int(11) NOT NULL,
  `uCampus` varchar(50) NOT NULL,
  `uDepartment` varchar(20) NOT NULL,
  `uYear` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_profile`
--

INSERT INTO `db_profile` (`UID`, `userType`, `fullName`, `username`, `password`, `NIC`, `uPhone`, `uEmail`, `uAddress`, `uGender`, `uAge`, `uCampus`, `uDepartment`, `uYear`) VALUES
(3, 'Student', 'Sinhalage Supun Dilshan Gunarathne', 'supun123', 'Supun12345', '990545627V', '0774568294', 'supun.dilshan@gmail.com', '2/45, Weliwita Road, Malabe.', 'male', 23, 'SLIIT', 'Computing', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_profile`
--
ALTER TABLE `db_profile`
  ADD PRIMARY KEY (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
