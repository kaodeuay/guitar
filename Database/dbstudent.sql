-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2020 at 10:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstudent`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_api`
--

CREATE TABLE `student_api` (
  `StudentID` varchar(12) NOT NULL,
  `Prefix` varchar(4) DEFAULT NULL,
  `FirstName` varchar(40) DEFAULT NULL,
  `LastName` varchar(40) DEFAULT NULL,
  `GPAX` decimal(3,2) DEFAULT NULL,
  `School` varchar(32) DEFAULT NULL,
  `Program` varchar(20) DEFAULT NULL,
  `Advisor` varchar(17) DEFAULT NULL,
  `Dean` varchar(15) DEFAULT NULL,
  `Status` varchar(10) DEFAULT NULL,
  `No_sd` int(4) DEFAULT NULL,
  `Date_sd` date DEFAULT NULL,
  `Time_sd` time DEFAULT NULL,
  `Semester` varchar(8) DEFAULT NULL,
  `AcademicYear` int(4) DEFAULT NULL,
  `StudentLevel` varchar(32) DEFAULT NULL,
  `StudyIn` varchar(100) DEFAULT NULL,
  `MobilePhone` varchar(12) DEFAULT NULL,
  `Reasons` varchar(300) DEFAULT NULL,
  `Head_of_Division_of_Registrer` varchar(32) DEFAULT NULL,
  `ThePresident` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_api`
--

INSERT INTO `student_api` (`StudentID`, `Prefix`, `FirstName`, `LastName`, `GPAX`, `School`, `Program`, `Advisor`, `Dean`, `Status`, `No_sd`, `Date_sd`, `Time_sd`, `Semester`, `AcademicYear`, `StudentLevel`, `StudyIn`, `MobilePhone`, `Reasons`, `Head_of_Division_of_Registrer`, `ThePresident`) VALUES
('1', 'Choo', '', '', NULL, 'Liberal Arts', '', '', 'Rachanee Sanser', NULL, 0, '0000-00-00', '00:00:00', 'Choose..', 0, 'Choose...', '', '0', '', '', ''),
('2', 'Choo', '', '', NULL, 'Science', '', '', 'Siriporn Wajjwa', NULL, 0, '0000-00-00', '00:00:00', 'Choose..', 0, 'Choose...', '', '0', '', '', ''),
('58001', 'MISS', 'Denpong', 'Khetpong', NULL, 'Management', 'Computer Engineering', 'DDDDD', 'DDD', NULL, 2, '2020-11-29', '11:59:00', 'first', 4, 'Graduate student', 'Technology Information', '951658961', 'DDDD', 'DDDD', 'DDDD'),
('58010001', 'MISS', 'fname01', 'lname01', NULL, 'Law', 'pro01', 'ad01', 'dean01', NULL, 1, '2020-11-28', '12:50:00', 'first', 3, 'Undergraduate student', 'study in01', '0', 'I love you', 'hdr01', 'ps01'),
('58010002', 'MR.', 'fname02', 'lname02', NULL, 'Science', 'pro02', 'ad02', 'dean02', NULL, 2, '2020-11-29', '13:52:00', 'second', 3, 'Undergraduate student', 'study in02', '0', '55555555555555555555555555555555', 'hdr02', 'ps02'),
('58010010', 'MISS', '00000', 'EFGH', NULL, 'Science', 'pro', 'ad', 'dean', NULL, 4, '2020-11-27', '00:00:00', 'second', 3, 'Undergraduate student', 'study in', '555555555', '6666666666', 'hdr', 'ssss'),
('58010113', 'MISS', 'Bailey', 'Carter', '3.00', 'School of Information Technology', 'Computer Engineering', 'Lincoln  Kingsley', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010339', 'MISS', 'Brady', 'Brady', '1.76', 'School of Information Technology', 'Computer Engineering', 'Lane  Lewis', 'Greyson  Taylor', 'Probation1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010459', 'MR.', 'Cooper', 'Parker', '3.57', 'School of Information Technology', 'Computer Engineering', 'Parker  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010518', 'MISS', 'Ellis', 'Carter', '2.60', 'School of Information Technology', 'Computer Engineering', 'Bailey  McKenzie', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010585', 'MR.', 'Finley', 'Fallon', '3.06', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010766', 'MR.', 'Lincoln', 'Smith', '2.83', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010796', 'MISS', 'Lennon', 'Carter', '2.56', 'School of Information Technology', 'Computer Engineering', 'Nixon  Cassidy', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010820', 'MR.', 'Lennox', 'Anderson', '0.96', 'School of Information Technology', 'Computer Engineering', 'Bailey  Monroe', 'Greyson  Taylor', 'Probation2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58010938', 'MR.', 'Jagger', 'Campbell', '2.79', 'School of Information Technology', 'Computer Engineering', 'Lincoln  Kingsley', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58100057', 'MISS', 'Quinn', 'Addison', '2.41', 'School of Information Technology', 'Computer Engineering', 'Lane  Lewis', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58100284', 'MR.', 'Reagan', 'Sullivan', '3.38', 'School of Information Technology', 'Computer Engineering', 'Parker  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58100290', 'MR.', 'Taylor', 'Lane', '3.05', 'School of Information Technology', 'Computer Engineering', 'Bailey  McKenzie', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58110050', 'MR.', 'Tyler', 'Jackson', '3.09', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58110063', 'MR.', 'Sawyer', 'Nash', '3.59', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58110611', 'MISS', 'Anderson', 'Jagger', '3.28', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58110791', 'MR.', 'Beckett', 'Miller', '1.14', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Probation2', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58110869', 'MR.', 'Campbell', 'Taylor', '2.79', 'School of Information Technology', 'Computer Engineering', 'Nixon  Cassidy', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58110953', 'MISS', 'Cash', 'Davis', '2.94', 'School of Information Technology', 'Computer Engineering', 'Bailey  Monroe', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58200447', 'MISS', 'Carson', 'Greyson', '3.44', 'School of Information Technology', 'Computer Engineering', 'Lincoln  Kingsley', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300002', 'MISS', 'Sullivan', 'West', '2.55', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300003', 'MISS', 'West', 'West', '3.00', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300004', 'MR.', 'Vaugh', 'Hudson', '2.93', 'School of Information Technology', 'Computer Engineering', 'Nixon  Cassidy', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300005', 'MISS', 'Addison', 'McKenzie', '2.64', 'School of Information Technology', 'Computer Engineering', 'Bailey  Monroe', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300011', 'MR.', 'Cassidy', 'Brady', '2.39', 'School of Information Technology', 'Computer Engineering', 'Lincoln  Kingsley', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300012', 'MR.', 'Delaney', 'Greyson', '3.30', 'School of Information Technology', 'Computer Engineering', 'Lane  Lewis', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300013', 'MISS', 'Fallon', 'Addison', '3.87', 'School of Information Technology', 'Computer Engineering', 'Parker  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300015', 'MR.', 'Harlow', 'Lennox', '2.60', 'School of Information Technology', 'Computer Engineering', 'Bailey  McKenzie', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300016', 'MISS', 'Lane', 'Nixon', '3.52', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300021', 'MR.', 'Kennedy', 'Addison', '1.88', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58300022', 'MR.', 'Monroe', 'Anderson', '2.32', 'School of Information Technology', 'Computer Engineering', 'Nixon  Cassidy', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400075', 'MR.', 'Cohen', 'Cohen', '3.09', 'School of Information Technology', 'Computer Engineering', 'Lane  Lewis', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400272', 'MISS', 'Carter', 'Harrison', '2.96', 'School of Information Technology', 'Computer Engineering', 'Parker  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400278', 'MR.', 'Davis', 'Addison', '1.70', 'School of Information Technology', 'Computer Engineering', 'Bailey  McKenzie', 'Greyson  Taylor', 'Probation1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400417', 'MISS', 'Dawson', 'Taylor', '3.28', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400623', 'MR.', 'Easton', 'Sullivan', '2.81', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400666', 'MISS', 'Greyson', 'Lennon', '3.43', 'School of Information Technology', 'Computer Engineering', 'Nixon  Cassidy', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58400696', 'MISS', 'Griffin', 'Lennox', '2.94', 'School of Information Technology', 'Computer Engineering', 'Bailey  Monroe', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58410180', 'MISS', 'Harrison', 'Quinn', '3.22', 'School of Information Technology', 'Computer Engineering', 'Lincoln  Kingsley', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58410197', 'MISS', 'Hendrix', 'Griffin', '3.09', 'School of Information Technology', 'Computer Engineering', 'Lane  Lewis', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58430538', 'MISS', 'Hudson', 'Harlow', '3.26', 'School of Information Technology', 'Computer Engineering', 'Parker  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58430847', 'MISS', 'Jackson', 'Dawson', '2.93', 'School of Information Technology', 'Computer Engineering', 'Bailey  McKenzie', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58430997', 'MISS', 'Kingsley', 'Griffin', '3.16', 'School of Information Technology', 'Computer Engineering', 'McKenzie  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58431136', 'MISS', 'Lewis', 'Campbell', '3.50', 'School of Information Technology', 'Computer Engineering', 'Griffin  Addison', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58700002', 'MR.', 'Miller', 'Davis', '2.43', 'School of Information Technology', 'Computer Engineering', 'Nixon  Cassidy', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58700026', 'MISS', 'Nash', 'Anderson', '2.84', 'School of Information Technology', 'Computer Engineering', 'Bailey  Monroe', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58700029', 'MR.', 'Nixon', 'Taylor', '1.76', 'School of Information Technology', 'Computer Engineering', 'Lincoln  Kingsley', 'Greyson  Taylor', 'Probation1', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58700031', 'MISS', 'Parker', 'Parker', '3.04', 'School of Information Technology', 'Computer Engineering', 'Lane  Lewis', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('58700190', 'MR.', 'Reed', 'Reagan', '3.17', 'School of Information Technology', 'Computer Engineering', 'Parker  Carson', 'Greyson  Taylor', 'Normal', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_api`
--
ALTER TABLE `student_api`
  ADD PRIMARY KEY (`StudentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
