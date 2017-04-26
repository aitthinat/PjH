-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 06:02 PM
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
  `Ccid` varchar(13) NOT NULL,
  `Cyear` year(4) DEFAULT NULL,
  `Chronic_disease` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chronic_disease_health`
--

INSERT INTO `chronic_disease_health` (`Ccid`, `Cyear`, `Chronic_disease`) VALUES
('1409901496220', 2016, '1'),
('1120911201921', 2015, '0'),
('3401343210123', 2013, '0'),
('3400123345510', 2014, '1');

-- --------------------------------------------------------

--
-- Table structure for table `disability_health`
--

CREATE TABLE `disability_health` (
  `Dcid` varchar(13) NOT NULL,
  `Dyear` year(4) DEFAULT NULL,
  `Disability` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `disability_health`
--

INSERT INTO `disability_health` (`Dcid`, `Dyear`, `Disability`) VALUES
('1409901496220', 2016, '1'),
('3401343210123', 2013, '0'),
('3400123345510', 2014, '0'),
('1120911201921', 2015, '1');

-- --------------------------------------------------------

--
-- Table structure for table `environment_health`
--

CREATE TABLE `environment_health` (
  `Ecid` varchar(13) NOT NULL,
  `Eyear` year(4) DEFAULT NULL,
  `Environment` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `environment_health`
--

INSERT INTO `environment_health` (`Ecid`, `Eyear`, `Environment`) VALUES
('1409901496220', 2016, 'มีแหล่งน้ำ, ใกล้แหล่งอุตสาหกรรม'),
('3401343210123', 2013, 'มีแหล่งน้ำ'),
('3400123345510', 2014, 'ใกล้แหล่งอุตสาหกรรม'),
('1120911201921', 2015, 'มีแหล่งน้ำและใกล้แหล่งอุตสาหกรรม');

-- --------------------------------------------------------

--
-- Table structure for table `food_allegies_health`
--

CREATE TABLE `food_allegies_health` (
  `Fcid` varchar(13) NOT NULL,
  `Fyear` year(4) DEFAULT NULL,
  `Food_allergies` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_allegies_health`
--

INSERT INTO `food_allegies_health` (`Fcid`, `Fyear`, `Food_allergies`) VALUES
('1409901496220', 2016, '1'),
('3401343210123', 2013, '1'),
('3400123345510', 2014, '0'),
('1120911201921', 2015, '0');

-- --------------------------------------------------------

--
-- Table structure for table `have_health`
--

CREATE TABLE `have_health` (
  `Hhcid` varchar(13) NOT NULL,
  `Rno` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `have_health`
--

INSERT INTO `have_health` (`Hhcid`, `Rno`) VALUES
('1120911201921', '01'),
('1120911201921', '02'),
('1120911201921', '03'),
('1234423443546', '01'),
('1234423443546', '02'),
('1409901496220', '01'),
('1409901496220', '02'),
('1500900334567', '01'),
('1500900334567', '02'),
('3400123345510', '01'),
('3400123345510', '02'),
('3400123345510', '03'),
('3401343210123', '01'),
('3401343210123', '02'),
('3401343210123', '03'),
('7654321098879', '01'),
('7654321098879', '02');

-- --------------------------------------------------------

--
-- Table structure for table `health_info`
--

CREATE TABLE `health_info` (
  `Hcid` varchar(13) NOT NULL,
  `Year` year(4) NOT NULL,
  `Date_of_Health` date NOT NULL,
  `Blood_group` char(2) NOT NULL,
  `BP_SYS` int(3) NOT NULL,
  `BP_DIA` int(3) NOT NULL,
  `FBS` int(3) NOT NULL,
  `Weight` double(5,0) NOT NULL,
  `Height` double(6,0) NOT NULL,
  `Chronic_Disease` varchar(150) NOT NULL,
  `Intolerance` varchar(150) NOT NULL,
  `Food_allergies` varchar(150) NOT NULL,
  `Disability` int(1) NOT NULL,
  `BOA` int(1) NOT NULL,
  `BOS` int(1) NOT NULL,
  `Exercise` int(1) NOT NULL,
  `Water_area` int(1) NOT NULL,
  `Near_factory` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_info`
--

INSERT INTO `health_info` (`Hcid`, `Year`, `Date_of_Health`, `Blood_group`, `BP_SYS`, `BP_DIA`, `FBS`, `Weight`, `Height`, `Chronic_Disease`, `Intolerance`, `Food_allergies`, `Disability`, `BOA`, `BOS`, `Exercise`, `Water_area`, `Near_factory`) VALUES
('1120911201921', 2015, '2015-01-08', 'O', 120, 81, 0, 45, 152, '-', '-', '-', 1, 0, 3, 0, 1, 1),
('1120911201921', 2017, '2017-04-09', 'AB', 140, 78, 80, 66, 160, '-', '-', '-', 0, 0, 0, 0, 0, 0),
('1234423443546', 2016, '2016-06-17', 'A', 120, 80, 76, 52, 165, '-', '-', '-', 0, 0, 0, 0, 1, 0),
('1234423443546', 2017, '2017-04-25', 'O', 123, 87, 78, 56, 150, '-', '-', 'ถั่ว', 0, 0, 0, 1, 0, 0),
('1409901496220', 2016, '2016-06-17', 'A', 120, 80, 0, 52, 165, 'ทาลัสซีเมีย, เบาหวาน', 'พาราเซตามอล', 'กุ้ง', 1, 0, 0, 0, 1, 1),
('1500900334567', 2017, '2017-04-30', 'O', 130, 80, 70, 56, 169, '-', '-', '-', 0, 0, 0, 0, 0, 0),
('3400123345510', 2014, '2017-04-07', 'B', 123, 80, 76, 56, 169, '-', '-', '-', 0, 0, 0, 0, 0, 0),
('3400123345510', 2017, '2017-04-07', 'B', 123, 80, 76, 56, 169, '-', '-', '-', 0, 0, 0, 0, 0, 0),
('3401343210123', 2013, '2013-02-12', 'A', 140, 90, 60, 50, 160, '-', '-', 'ปลาหมึก', 0, 2, 2, 0, 1, 0),
('3500900445678', 2017, '2017-04-23', 'AB', 130, 80, 76, 45, 150, '-', 'แอสไพริน', '-', 0, 0, 0, 0, 0, 0),
('7654321098879', 2015, '2017-04-01', 'A', 123, 88, 80, 76, 177, 'โรคหัวใจ', 'แอสไพริน', 'กุ้ง', 0, 1, 1, 0, 0, 0),
('7654321098879', 2016, '2016-06-17', 'A', 140, 90, 78, 65, 178, '-', '-', '-', 0, 0, 0, 0, 1, 0),
('7654321098879', 2017, '2017-04-01', 'A', 123, 88, 80, 76, 177, 'โรคหัวใจ', 'แอสไพริน', 'กุ้ง', 0, 1, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `health_risks`
--

CREATE TABLE `health_risks` (
  `Risk_no` varchar(2) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `health_risks`
--

INSERT INTO `health_risks` (`Risk_no`, `Name`) VALUES
('01', 'โรคเบาหวาน'),
('02', 'โรคความดันโลหิตสูง'),
('03', 'โรคหัวใจ'),
('04', 'โรคตับ');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `HomeNo` varchar(8) NOT NULL,
  `HomeID` varchar(11) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `Sub_district` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Postal_Code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`HomeNo`, `HomeID`, `Status`, `Sub_district`, `District`, `Province`, `Postal_Code`) VALUES
('123/123', '12345678911', 'เช่า', 'สุเทพ', 'เมือง', 'เชียงใหม่', '50200'),
('12/3', '20010549965', 'เป็นเจ้าของ', 'สัตหีบ', 'สัตหีบ', 'ชลบุรี', '20180'),
('33/7', '53050998965', 'เช่า', 'ท่าอิฐ', 'เมือง', 'อุตรดิตถ์', '53000'),
('43', '56087649567', 'เป็นเจ้าของ', 'เวียง', 'ฝาง', 'เชียงใหม่', '50110'),
('112/5', '56130123965', 'เป็นเจ้าของ', 'ศรีถ้อย', 'แม่ใจ', 'พะเยา', '56130');

-- --------------------------------------------------------

--
-- Table structure for table `intolerance_health`
--

CREATE TABLE `intolerance_health` (
  `Icid` varchar(13) NOT NULL,
  `Iyear` year(4) DEFAULT NULL,
  `Intolerance` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `intolerance_health`
--

INSERT INTO `intolerance_health` (`Icid`, `Iyear`, `Intolerance`) VALUES
('1409901496220', 2016, '1'),
('3401343210123', 2013, '0'),
('3400123345510', 2014, '1'),
('1120911201921', 2015, '0');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Citizen_ID` varchar(13) NOT NULL,
  `Title` varchar(7) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Birth_date` date NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `Education` int(5) NOT NULL,
  `Job` int(5) NOT NULL,
  `Salary` int(5) NOT NULL,
  `RWO` varchar(10) NOT NULL,
  `Hid` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Citizen_ID`, `Title`, `Fname`, `Lname`, `Birth_date`, `Tel`, `Education`, `Job`, `Salary`, `RWO`, `Hid`) VALUES
('1120911201921', 'นางสาว', 'จิรวดี', 'ศรีสุพรรณ์', '1993-06-10', '0654494959', 5, 3, 3, '4', '20010549965'),
('1234423443546', 'นาง', 'จันทร์ดี', 'แซ่ตั้ง', '1975-09-09', '0850324564', 3, 2, 2, '2', '12345678911'),
('1409901496220', 'นาย', 'อิทธิณัฐ', 'สุริยสมบูรณ์', '1996-11-12', '0620354897', 5, 3, 1, '3', '12345678911'),
('1500900098765', 'นางสาว', 'หรรษา', 'สานใย', '1997-08-19', '0987865654', 5, 3, 3, '3', '56087649567'),
('1500900334567', 'นางสาว', 'หรรษา', 'แซ่ตั้ง', '1990-08-23', '0901234567', 5, 3, 3, '2', '12345678911'),
('3400123345510', 'นาง', 'สมิงดำ', 'สานใย', '1977-06-12', '0823324344', 2, 1, 2, '2', '53050998965'),
('3401343210123', 'นาย', 'สมาน', 'สานใย', '1980-01-17', '0811122234', 0, 2, 2, '1', '56130123965'),
('3500900445678', 'นางสาว', 'พอใจ', 'เหรียญทอง', '1990-06-17', '0834531234', 5, 2, 3, '3', '56130123965'),
('7654321098879', 'นาย', 'สมชาย', 'แซ่ตั้ง', '1972-09-09', '0900087898', 2, 2, 2, '1', '12345678911'),
('9876543210987', 'นาย', 'กรกช', 'น้ำใส', '1997-09-18', '0906542345', 5, 3, 2, '3', '56087649567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chronic_disease_health`
--
ALTER TABLE `chronic_disease_health`
  ADD KEY `FOREIGN KEY` (`Ccid`,`Cyear`),
  ADD KEY `Year` (`Cyear`),
  ADD KEY `Cyear` (`Cyear`),
  ADD KEY `Cyear_2` (`Cyear`);

--
-- Indexes for table `disability_health`
--
ALTER TABLE `disability_health`
  ADD KEY `FOREIGN KEY` (`Dcid`,`Dyear`),
  ADD KEY `Year` (`Dyear`);

--
-- Indexes for table `environment_health`
--
ALTER TABLE `environment_health`
  ADD KEY `FOREIGN KEY` (`Ecid`,`Eyear`),
  ADD KEY `Year` (`Eyear`);

--
-- Indexes for table `food_allegies_health`
--
ALTER TABLE `food_allegies_health`
  ADD KEY `FOREIGN KEY` (`Fcid`,`Fyear`),
  ADD KEY `Year` (`Fyear`);

--
-- Indexes for table `have_health`
--
ALTER TABLE `have_health`
  ADD PRIMARY KEY (`Hhcid`,`Rno`),
  ADD KEY `Rno` (`Rno`);

--
-- Indexes for table `health_info`
--
ALTER TABLE `health_info`
  ADD PRIMARY KEY (`Hcid`,`Year`),
  ADD KEY `COMPOSIST KEY` (`Hcid`,`Year`),
  ADD KEY `Year` (`Year`);

--
-- Indexes for table `health_risks`
--
ALTER TABLE `health_risks`
  ADD PRIMARY KEY (`Risk_no`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`HomeID`),
  ADD KEY `ID_house` (`HomeID`);

--
-- Indexes for table `intolerance_health`
--
ALTER TABLE `intolerance_health`
  ADD KEY `FOREIGN KEY` (`Icid`,`Iyear`),
  ADD KEY `Year` (`Iyear`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Citizen_ID`),
  ADD KEY `FOREIGN_KEY` (`Hid`),
  ADD KEY `Citizen_ID` (`Citizen_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chronic_disease_health`
--
ALTER TABLE `chronic_disease_health`
  ADD CONSTRAINT `chronic_disease_health_ibfk_1` FOREIGN KEY (`Cyear`) REFERENCES `health_info` (`Year`),
  ADD CONSTRAINT `chronic_disease_health_ibfk_2` FOREIGN KEY (`Ccid`) REFERENCES `person` (`Citizen_ID`);

--
-- Constraints for table `disability_health`
--
ALTER TABLE `disability_health`
  ADD CONSTRAINT `disability_health_ibfk_1` FOREIGN KEY (`Dcid`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `disability_health_ibfk_2` FOREIGN KEY (`Dyear`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `environment_health`
--
ALTER TABLE `environment_health`
  ADD CONSTRAINT `environment_health_ibfk_1` FOREIGN KEY (`Eyear`) REFERENCES `health_info` (`Year`),
  ADD CONSTRAINT `environment_health_ibfk_2` FOREIGN KEY (`Ecid`) REFERENCES `person` (`Citizen_ID`);

--
-- Constraints for table `food_allegies_health`
--
ALTER TABLE `food_allegies_health`
  ADD CONSTRAINT `food_allegies_health_ibfk_1` FOREIGN KEY (`Fcid`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `food_allegies_health_ibfk_2` FOREIGN KEY (`Fyear`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `have_health`
--
ALTER TABLE `have_health`
  ADD CONSTRAINT `have_health_ibfk_1` FOREIGN KEY (`Hhcid`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `have_health_ibfk_2` FOREIGN KEY (`Rno`) REFERENCES `health_risks` (`Risk_no`);

--
-- Constraints for table `health_info`
--
ALTER TABLE `health_info`
  ADD CONSTRAINT `health_info_ibfk_1` FOREIGN KEY (`Hcid`) REFERENCES `person` (`Citizen_ID`);

--
-- Constraints for table `intolerance_health`
--
ALTER TABLE `intolerance_health`
  ADD CONSTRAINT `intolerance_health_ibfk_1` FOREIGN KEY (`Icid`) REFERENCES `person` (`Citizen_ID`),
  ADD CONSTRAINT `intolerance_health_ibfk_2` FOREIGN KEY (`Iyear`) REFERENCES `health_info` (`Year`);

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`Hid`) REFERENCES `home` (`HomeID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
