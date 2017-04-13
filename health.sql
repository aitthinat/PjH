-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 08:21 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `chronic_disease_health`
--

CREATE TABLE `chronic_disease_health` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Chronic_disease` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `disability_health`
--

CREATE TABLE `disability_health` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Disability` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `environment_health`
--

CREATE TABLE `environment_health` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Environment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `food_allegies_health`
--

CREATE TABLE `food_allegies_health` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Food_allergies` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `have_health`
--

CREATE TABLE `have_health` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Risk_no` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `health_info`
--

CREATE TABLE `health_info` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Date_of_Health` datetime NOT NULL,
  `Weight` double(5,0) NOT NULL,
  `Height` double(6,0) NOT NULL,
  `BMI` double(5,0) NOT NULL,
  `Blood_group` char(1) NOT NULL,
  `Environment` varchar(100) NOT NULL,
  `Disability` varchar(150) NOT NULL,
  `Intolerance` varchar(150) NOT NULL,
  `Food_allergies` varchar(150) NOT NULL,
  `Blood_pressure` varchar(8) NOT NULL,
  `Chronic_Disease` varchar(150) NOT NULL,
  `Sex` char(1) NOT NULL,
  `Age` int(3) NOT NULL,
  `Behavior_of_smoke` int(1) NOT NULL,
  `Behavior_of_Alcohol` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `health_risks`
--

CREATE TABLE `health_risks` (
  `Risk_no` varchar(2) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Advice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `Village_no` varchar(8) NOT NULL,
  `ID_house` varchar(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Sub-district` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Postal_Code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `intolerance_health`
--

CREATE TABLE `intolerance_health` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Year` varchar(4) NOT NULL,
  `Intolerance` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Title` varchar(7) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Birth_date` varchar(8) NOT NULL,
  `Tel_No` varchar(10) NOT NULL,
  `Education` int(5) NOT NULL,
  `Job` int(5) NOT NULL,
  `Salary` int(5) NOT NULL,
  `Relationship_wOwnHouse` varchar(10) NOT NULL,
  `ID_house` varchar(11) NOT NULL,
  `Village_no` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Citizen_ID`, `Title`, `FirstName`, `LastName`, `Birth_date`, `Tel_No`, `Education`, `Job`, `Salary`, `Relationship_wOwnHouse`, `ID_house`, `Village_no`) VALUES
('1120911201921', 'นางสาว', 'จิรวดี', 'ศรีสุพรรณ์', '06101993', '0654494959', 5, 3, 3, '4', '56089654785', ''),
('1409901496220', 'นาย', 'อิทธิณัฐ', 'สุริยสมบูรณ์', '12111996', '0620354897', 5, 3, 1, '3', '12345678911', ''),
('3400123345510', 'นาง', 'สมิงดำ', 'ลำลูกกา', '12061997', '0823324344', 2, 1, 2, '2', '5624895754', ''),
('3401343210123', 'นาย', 'สมาน', 'สานใย', '17011980', '0811122234', 0, 2, 2, '1', '56025894612', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chronic_disease_health`
--
ALTER TABLE `chronic_disease_health`
  ADD KEY `FOREIGN KEY` (`Citizen_ID`,`Year`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `disability_health`
--
ALTER TABLE `disability_health`
  ADD KEY `FOREIGN KEY` (`Citizen_ID`,`Year`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `environment_health`
--
ALTER TABLE `environment_health`
  ADD KEY `FOREIGN KEY` (`Citizen_ID`,`Year`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `food_allegies_health`
--
ALTER TABLE `food_allegies_health`
  ADD KEY `FOREIGN KEY` (`Citizen_ID`,`Year`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `have_health`
--
ALTER TABLE `have_health`
  ADD KEY `FOREIGN KEY` (`Citizen_ID`,`Risk_no`);

--
-- Indexes for table `health_info`
--
ALTER TABLE `health_info`
  ADD PRIMARY KEY (`Year`),
  ADD KEY `COMPOSIST KEY` (`Citizen_ID`,`Year`);

--
-- Indexes for table `health_risks`
--
ALTER TABLE `health_risks`
  ADD PRIMARY KEY (`Risk_no`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`ID_house`),
  ADD KEY `ID_house` (`ID_house`);

--
-- Indexes for table `intolerance_health`
--
ALTER TABLE `intolerance_health`
  ADD KEY `FOREIGN KEY` (`Citizen_ID`,`Year`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Citizen_ID`),
  ADD KEY `FOREIGN_KEY` (`ID_house`),
  ADD KEY `Citizen_ID` (`Citizen_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chronic_disease_health`
--
ALTER TABLE `chronic_disease_health`
  ADD CONSTRAINT `chronic_disease_health_ibfk_1` FOREIGN KEY (`Year`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `disability_health`
--
ALTER TABLE `disability_health`
  ADD CONSTRAINT `disability_health_ibfk_1` FOREIGN KEY (`Citizen_ID`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `disability_health_ibfk_2` FOREIGN KEY (`Year`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `environment_health`
--
ALTER TABLE `environment_health`
  ADD CONSTRAINT `environment_health_ibfk_1` FOREIGN KEY (`Year`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `food_allegies_health`
--
ALTER TABLE `food_allegies_health`
  ADD CONSTRAINT `food_allegies_health_ibfk_1` FOREIGN KEY (`Citizen_ID`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `food_allegies_health_ibfk_2` FOREIGN KEY (`Year`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `have_health`
--
ALTER TABLE `have_health`
  ADD CONSTRAINT `have_health_ibfk_1` FOREIGN KEY (`Citizen_ID`) REFERENCES `person` (`Citizen_ID`);

--
-- Constraints for table `health_info`
--
ALTER TABLE `health_info`
  ADD CONSTRAINT `health_info_ibfk_1` FOREIGN KEY (`Citizen_ID`) REFERENCES `person` (`Citizen_ID`);

--
-- Constraints for table `intolerance_health`
--
ALTER TABLE `intolerance_health`
  ADD CONSTRAINT `intolerance_health_ibfk_1` FOREIGN KEY (`Citizen_ID`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `intolerance_health_ibfk_2` FOREIGN KEY (`Year`) REFERENCES `health_info` (`Year`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
