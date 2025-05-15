-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2024 at 08:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updationDate` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'admin@123', '2021-02-07 10:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `consultancyFees` int(11) NOT NULL,
  `appointmentDate` date NOT NULL,
  `appointmentTime` time(6) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `userStatus` int(11) NOT NULL,
  `doctorStatus` int(11) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `appoinmentStatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctorId`, `userId`, `reason`, `consultancyFees`, `appointmentDate`, `appointmentTime`, `postingDate`, `userStatus`, `doctorStatus`, `updationDate`, `appoinmentStatus`) VALUES
(8, 'General Surgeons', 3, 6, 'General Checkup', 2000, '2024-11-19', '12:30:00.000000', '2024-11-20 06:59:00', 0, 1, '2024-11-20 07:11:45', 'Pending'),
(9, 'General Surgeons', 7, 6, 'General Checkup', 4500, '2024-11-19', '12:30:00.000000', '2024-11-20 06:59:53', 1, 1, '2024-11-20 06:59:53', 'Pending'),
(10, 'General Surgeons', 7, 7, 'Pre-Surgical Assessment', 4500, '2024-11-19', '01:30:00.000000', '2024-11-20 07:02:53', 1, 1, '2024-11-20 07:02:53', 'Pending'),
(11, 'General Surgeons', 8, 6, 'General Checkup', 4500, '2024-11-19', '12:45:00.000000', '2024-11-20 07:12:31', 1, 1, '2024-11-22 17:57:53', 'Completed'),
(12, 'General Surgeons', 8, 7, 'Pre-Surgical Assessment', 4500, '2024-11-20', '01:00:00.000000', '2024-11-20 07:14:23', 1, 1, '2024-11-22 17:57:22', 'Confirmed'),
(13, 'General Surgeons', 3, 9, 'General Checkup', 2000, '2024-11-21', '11:15:00.000000', '2024-11-22 17:46:01', 1, 1, '2024-11-22 17:46:01', 'Pending'),
(14, 'Cardiologists', 5, 9, 'Pre-Surgical Assessment', 1800, '2024-11-23', '05:30:00.000000', '2024-11-22 17:47:01', 1, 1, '2024-11-22 17:56:56', 'Confirmed'),
(15, 'General Surgeons', 3, 10, 'Fever', 2000, '2024-12-01', '01:00:00.000000', '2024-11-30 05:51:55', 1, 1, '2024-11-30 05:51:55', 'Pending'),
(16, 'General Surgeons', 8, 11, 'Fever', 4500, '2024-12-01', '01:00:00.000000', '2024-11-30 05:52:53', 1, 1, '2024-11-30 05:52:53', 'Pending'),
(17, 'General Surgeons', 3, 12, 'Fever', 2000, '2024-12-01', '01:00:00.000000', '2024-11-30 05:56:38', 1, 1, '2024-11-30 05:56:38', 'Pending'),
(18, 'General Surgeons', 3, 13, 'Fever', 2000, '2024-12-01', '01:00:00.000000', '2024-11-30 05:59:05', 1, 1, '2024-11-30 05:59:05', 'Pending'),
(19, 'General Surgeons', 3, 14, 'Fever', 2000, '2024-12-12', '10:00:00.000000', '2024-11-30 05:59:42', 1, 1, '2024-11-30 05:59:42', 'Pending'),
(20, 'General Surgeons', 3, 15, 'General Checkup', 2000, '2024-12-02', '01:30:00.000000', '2024-11-30 06:53:06', 1, 1, '2024-11-30 06:56:47', 'Confirmed'),
(21, 'General Surgeons', 8, 15, 'General Checkup', 4500, '2024-12-07', '12:30:00.000000', '2024-11-30 06:58:42', 1, 1, '2024-11-30 06:59:09', 'Confirmed'),
(22, 'General Surgeons', 8, 16, 'General Checkup', 4500, '2024-11-27', '01:30:00.000000', '2024-12-01 10:52:57', 1, 1, '2024-12-01 10:52:57', 'Pending'),
(23, 'General Surgeons', 3, 17, 'General Checkup', 2000, '2024-12-01', '10:00:00.000000', '2024-12-01 11:13:46', 1, 1, '2024-12-01 11:13:46', 'Pending'),
(24, 'General Surgeons', 3, 18, 'General Checkup', 2000, '2024-12-12', '12:00:00.000000', '2024-12-01 11:14:23', 1, 1, '2024-12-01 11:14:23', 'Pending'),
(25, 'General Surgeons', 8, 19, 'Pre-Surgical Assessment', 4500, '2024-12-02', '12:00:00.000000', '2024-12-01 11:17:38', 1, 1, '2024-12-01 11:18:33', 'Confirmed'),
(26, 'General Surgeons', 3, 21, 'General Checkup', 2000, '2024-12-12', '01:30:00.000000', '2024-12-01 15:10:04', 1, 1, '2024-12-01 15:10:04', 'Pending'),
(27, 'General Surgeons', 3, 22, 'General Checkup', 2000, '2024-12-02', '05:30:00.000000', '2024-12-01 15:10:43', 1, 1, '2024-12-01 15:10:43', 'Pending'),
(28, 'General Surgeons', 8, 23, 'Pre-Surgical Assessment', 4500, '2024-12-01', '12:00:00.000000', '2024-12-01 15:11:21', 1, 1, '2024-12-01 15:11:21', 'Pending'),
(29, 'General Surgeons', 8, 24, 'Fever', 4500, '2024-12-01', '12:15:00.000000', '2024-12-01 15:12:08', 1, 1, '2024-12-01 15:12:08', 'Pending'),
(30, 'General Surgeons', 8, 25, 'General Checkup', 4500, '2024-12-01', '12:00:00.000000', '2024-12-01 15:13:30', 1, 1, '2024-12-01 15:13:30', 'Pending'),
(31, 'General Surgeons', 3, 26, 'General Checkup', 2000, '2024-12-01', '12:00:00.000000', '2024-12-01 15:16:29', 1, 1, '2024-12-01 15:16:29', 'Pending'),
(32, 'General Surgeons', 3, 27, 'Fever', 2000, '2024-12-01', '12:00:00.000000', '2024-12-01 15:18:11', 1, 1, '2024-12-01 15:18:11', 'Pending'),
(33, 'General Surgeons', 8, 28, 'General Checkup', 4500, '2024-12-05', '10:00:00.000000', '2024-12-01 15:21:10', 1, 1, '2024-12-01 15:21:10', 'Pending'),
(34, 'General Surgeons', 8, 29, 'General Checkup', 4500, '2024-12-01', '05:30:00.000000', '2024-12-01 15:24:35', 1, 1, '2024-12-01 15:24:35', 'Pending'),
(35, 'General Surgeons', 3, 30, 'General Checkup', 2000, '2024-12-05', '01:00:00.000000', '2024-12-04 09:28:37', 1, 1, '2024-12-04 09:29:06', 'Confirmed'),
(36, 'General Surgeons', 8, 31, 'General Checkup', 4500, '2024-12-12', '12:00:00.000000', '2024-12-04 09:30:37', 1, 1, '2024-12-04 09:30:58', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `docFees` varchar(255) NOT NULL,
  `contactno` int(10) NOT NULL,
  `docEmail` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `doctorName`, `address`, `docFees`, `contactno`, `docEmail`, `password`, `creationDate`, `updationDate`) VALUES
(3, 'General Surgeons', 'Dr. Anil Kumar', 'No. 23, Colombo', '2000', 712345678, 'anil@abc.com', 'a2af486ce7125f6a0ee4524f435cb5e8', '2024-11-20 06:38:00', '2024-11-20 06:38:00'),
(4, 'General Surgeons', 'Dr. Nisha Perera', 'No. 45, Kandy', '1500', 718765432, 'nisha@abc.com', 'd0ddb4c9f14d3a5827f6a76587da5ae4', '2024-11-20 06:39:20', '2024-11-20 06:39:20'),
(5, 'Cardiologists', 'Dr. Maya Silva', 'No. 18, Galle', '1800', 721234567, 'maya@abc.com', 'f4a637ba636f4a3b258273c5605d4266', '2024-11-20 06:40:26', '2024-11-20 06:40:26'),
(6, 'Cardiothoracic Surgeons', 'Dr. Ravi Jayasuriya', 'No. 9, Matara', '2500', 759876543, 'ravi@abc.com', '1790f19d6edb09a7a94870e99c7b0689', '2024-11-20 06:41:33', '2024-11-20 06:41:33'),
(8, 'General Surgeons', 'Dr. Kumar', 'No. 32, Garden Rd', '4500', 784321098, 'dr@abc.com', 'b3666d14ca079417ba6c2a99f079b2ac', '2024-11-20 07:09:22', '2024-11-20 07:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslog`
--

CREATE TABLE `doctorslog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorslog`
--

INSERT INTO `doctorslog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(8, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-20 07:17:10', '20-11-2024 12:47:28 PM', 1),
(9, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-20 11:05:25', '20-11-2024 04:38:17 PM', 1),
(10, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 08:44:08', '', 1),
(11, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 15:00:44', '22-11-2024 08:35:37 PM', 1),
(12, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 16:10:11', '22-11-2024 09:40:34 PM', 1),
(13, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 16:10:56', '', 1),
(14, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 17:52:40', '22-11-2024 11:26:30 PM', 1),
(15, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 17:57:40', '22-11-2024 11:50:37 PM', 1),
(16, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-29 13:07:10', '29-11-2024 06:42:38 PM', 1),
(17, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-30 06:33:49', '30-11-2024 12:05:35 PM', 1),
(18, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-30 06:36:03', '', 1),
(19, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-30 06:57:06', '30-11-2024 12:28:09 PM', 1),
(20, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-30 06:59:22', '', 1),
(21, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-01 14:58:12', '01-12-2024 08:28:15 PM', 1),
(22, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-03 06:35:47', '03-12-2024 12:37:03 PM', 1),
(23, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:03:54', '04-12-2024 11:33:59 AM', 1),
(24, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:07:24', '04-12-2024 11:37:26 AM', 1),
(25, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 07:08:13', '04-12-2024 12:38:17 PM', 1),
(26, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 09:27:44', '04-12-2024 02:57:47 PM', 1),
(27, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 09:29:22', '04-12-2024 02:59:58 PM', 1),
(28, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 09:31:13', '04-12-2024 03:01:21 PM', 1),
(29, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 06:35:20', '06-12-2024 12:05:27 PM', 1),
(30, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 16:20:26', '', 1),
(31, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 16:36:37', '', 1),
(32, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 16:41:47', '', 1),
(33, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 17:34:25', '', 1),
(34, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 19:18:13', '07-12-2024 12:48:20 AM', 1),
(35, 8, 'dr@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 19:18:40', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(1, 'General Surgeons', '2021-09-23 07:01:38', '2021-09-23 07:01:38'),
(2, 'Anaesthetists', '2021-09-23 07:02:11', '2021-09-23 07:02:11'),
(3, 'Cardiothoracic Surgeons', '2021-09-23 07:02:41', '2021-09-23 07:02:41'),
(4, 'Plastic Surgeons', '2021-09-23 07:04:18', '2021-09-23 07:04:18'),
(5, 'Neuro Surgeons', '2021-09-23 07:04:31', '2021-09-23 07:04:31'),
(6, 'Genito Urinary Surgeons', '2021-09-23 07:04:45', '2021-09-23 07:04:45'),
(7, 'Vascular Surgeons', '2021-09-23 07:05:11', '2021-09-23 07:05:11'),
(8, 'Gastroenterology Surgeon', '2021-09-23 07:05:37', '2021-09-23 07:05:37'),
(9, 'ENT Surgeons', '2021-09-23 07:05:52', '2021-09-23 07:05:52'),
(10, 'General Physicians', '2021-09-23 07:09:45', '2021-09-23 07:09:45'),
(11, 'Cardiologists', '2021-09-23 07:10:19', '2021-09-23 07:10:19'),
(12, 'Dermatologists', '2021-09-23 07:10:49', '2021-09-23 07:10:49');

-- --------------------------------------------------------

--
-- Table structure for table `receptionist`
--

CREATE TABLE `receptionist` (
  `id` int(11) NOT NULL,
  `fullName` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `regDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `receptionist`
--

INSERT INTO `receptionist` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`) VALUES
(5, 'Anjali Fernando', 'No. 25, Main Road', 'Colombo', 'female', 'anjali@abc.com', '73cf25d56e3fe00e398b81fef7c32615', '2024-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactus`
--

CREATE TABLE `tblcontactus` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` int(10) NOT NULL,
  `message` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext NOT NULL,
  `LastupdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `IsRead` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontactus`
--

INSERT INTO `tblcontactus` (`id`, `fullname`, `email`, `contactno`, `message`, `PostingDate`, `AdminRemark`, `LastupdationDate`, `IsRead`) VALUES
(1, 'Mohamed Ilham', 'ilham@gmail.com', 123456789, 'Ward No 6 Not clean', '2024-12-01 15:30:32', '', '2024-12-01 15:30:32', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblmedicalhistory`
--

CREATE TABLE `tblmedicalhistory` (
  `ID` int(11) NOT NULL,
  `PatientID` int(11) NOT NULL,
  `BloodPressure` varchar(255) NOT NULL,
  `BloodSugar` varchar(255) NOT NULL,
  `Weight` varchar(255) NOT NULL,
  `Temperature` varchar(255) NOT NULL,
  `MedicalPres` mediumtext NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblpatient`
--

CREATE TABLE `tblpatient` (
  `ID` int(11) NOT NULL,
  `Docid` int(11) NOT NULL,
  `PatientName` varchar(255) NOT NULL,
  `PatientContno` int(10) NOT NULL,
  `PatientEmail` varchar(255) NOT NULL,
  `PatientGender` varchar(7) NOT NULL,
  `PatientAdd` mediumtext NOT NULL,
  `PatientAge` int(11) NOT NULL,
  `PatientMedhis` mediumtext NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(16, 6, 'anushka@abc.com ', 0x3a3a3100000000000000000000000000, '2024-11-20 06:56:47', '20-11-2024 12:30:09 PM', 1),
(17, 7, 'asela@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-20 07:00:32', '20-11-2024 12:32:57 PM', 1),
(18, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-20 07:11:33', '20-11-2024 12:42:34 PM', 1),
(19, 7, 'asela@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-20 07:13:06', '20-11-2024 12:44:45 PM', 1),
(20, 0, 'ilham@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 09:05:36', '', 0),
(21, 0, 'ilham@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 09:05:52', '', 0),
(22, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 09:06:07', '22-11-2024 02:36:30 PM', 1),
(23, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 15:12:08', '22-11-2024 09:04:42 PM', 1),
(24, 0, 'ilham@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 17:39:13', '', 0),
(25, 0, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 17:39:27', '', 0),
(26, 0, 'ilham@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 17:39:44', '', 0),
(27, 0, 'ilham@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-22 17:40:12', '', 0),
(28, 9, 'ilham@abcd', 0x3a3a3100000000000000000000000000, '2024-11-22 17:41:18', '22-11-2024 11:22:19 PM', 1),
(29, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-29 13:14:23', '29-11-2024 06:46:52 PM', 1),
(30, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-11-29 13:55:49', '29-11-2024 07:26:04 PM', 1),
(31, 15, 'rais@abc', 0x3a3a3100000000000000000000000000, '2024-11-30 06:52:40', '30-11-2024 12:23:10 PM', 1),
(32, 15, 'rais@abc', 0x3a3a3100000000000000000000000000, '2024-11-30 06:58:21', '30-11-2024 12:28:44 PM', 1),
(33, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-01 14:58:52', '01-12-2024 08:28:55 PM', 1),
(34, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:04:27', '', 1),
(35, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:07:56', '', 1),
(36, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:08:56', '', 1),
(37, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:13:47', '', 1),
(38, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:33:59', '', 1),
(39, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:36:33', '', 1),
(40, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:38:52', '', 1),
(41, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:45:56', '', 1),
(42, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:49:33', '', 1),
(43, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:52:14', '', 1),
(44, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 06:58:00', '04-12-2024 12:28:05 PM', 1),
(45, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 07:03:17', '', 1),
(46, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 07:05:45', '', 1),
(47, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 07:07:39', '04-12-2024 12:37:44 PM', 1),
(48, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-04 09:26:59', '04-12-2024 02:57:03 PM', 1),
(49, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 06:06:07', '06-12-2024 11:36:10 AM', 1),
(50, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 06:35:56', '', 1),
(51, 6, 'anushka@abc.com', 0x3a3a3100000000000000000000000000, '2024-12-06 19:26:29', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `address`, `city`, `gender`, `email`, `password`, `regDate`, `updationDate`) VALUES
(6, 'Anushka Silva', 'No. 42, Temple Rd', 'Matara', 'female', 'anushka@abc.com', 'fd19b410825a3c76df06071ffab85a4e', '2024-11-20 06:50:54', '2024-11-20 06:50:54'),
(7, 'Asela Fernando', 'No. 34, Green St', 'Jaffna', 'male', 'asela@abc.com', '9f640e36323b7bd08971f42f0a74b706', '2024-11-20 06:53:13', '2024-11-20 06:53:13'),
(8, 'Ishani Weerasinghe', 'No. 14, Market Rd', 'Anuradhapura', 'female', 'ishani@abc.com', '5b644fc6dc9d52c3672bed289307a371', '2024-11-20 06:55:27', '2024-11-20 06:55:27'),
(9, 'Mohamed Ilham', '425 B/3 Sailan Road Kalmunai 04', 'Kalmunai', 'male', 'ilham@abcd', '77c4bc9342c6d7bc4219a9eacaedb5d6', '2024-11-22 17:40:55', '2024-11-22 17:40:55'),
(10, 'Rais', 'No. 25, Main Road', 'Kalmunai', 'male', '', '', '2024-11-30 05:51:55', '2024-11-30 05:51:55'),
(11, 'Rais', 'No. 25, Main Road', 'Kalmunai', 'male', '', '', '2024-11-30 05:52:53', '2024-11-30 05:52:53'),
(12, 'Rais', 'No. 25, Main Road', 'Kalmunai', 'male', '', '', '2024-11-30 05:56:38', '2024-11-30 05:56:38'),
(13, 'Rais', 'No. 25, Main Road', 'Kalmunai', 'male', '', '', '2024-11-30 05:59:05', '2024-11-30 05:59:05'),
(14, 'Rais', 'No. 25, Main Road', 'Kalmunai', 'male', '', '', '2024-11-30 05:59:42', '2024-11-30 05:59:42'),
(15, 'Rais', 'No. 25, Main Road', 'Colombo', 'male', 'rais@abc', '10d2510a2cede2df1e531044b3af3c3a', '2024-11-30 06:52:27', '2024-11-30 06:52:27'),
(16, 'Rais', 'No. 25, Main Road', 'Colombo', 'male', '', '', '2024-12-01 10:52:57', '2024-12-01 10:52:57'),
(17, 'Rais', 'No. 25, Main Road', 'Jaffna', 'male', '', '', '2024-12-01 11:13:46', '2024-12-01 11:13:46'),
(18, 'Rais', 'No. 42, Temple Rd', 'Jaffna', 'male', '', '', '2024-12-01 11:14:23', '2024-12-01 11:14:23'),
(19, 'Sajith', 'No. 34, Green St', 'Colombo', 'female', '', '', '2024-12-01 11:17:38', '2024-12-01 11:17:38'),
(20, 'sajith', '425 dfhhijl, hjajka', 'Matara', 'female', 'bekati5388@luxyss.com', '71b3b26aaa319e0cdf6fdb8429c112b0', '2024-12-01 15:04:42', '2024-12-01 15:04:42'),
(21, 'Mohamed Ilham', '425 B/3 Sailan Road Kalmunai 04', 'Jaffna', 'male', '', '', '2024-12-01 15:10:04', '2024-12-01 15:10:04'),
(22, 'Rais', 'No. 25, Main Road', 'Jaffna', 'male', '', '', '2024-12-01 15:10:43', '2024-12-01 15:10:43'),
(23, 'Rais', 'No. 42, Temple Rd', 'Matara', 'male', '', '', '2024-12-01 15:11:21', '2024-12-01 15:11:21'),
(24, 'Ishani Weerasinghe', '425 dfhhijl, hjajka', 'Jaffna', 'female', '', '', '2024-12-01 15:12:08', '2024-12-01 15:12:08'),
(25, 'Rais', 'No. 25, Main Road', 'Colombo', 'male', '', '', '2024-12-01 15:13:30', '2024-12-01 15:13:30'),
(26, 'Mohamed Ilham', '425 B/3 Sailan Road Kalmunai 04', 'Colombo', 'male', '', '', '2024-12-01 15:16:29', '2024-12-01 15:16:29'),
(27, 'Ajwath', '425 B/3 Sailan Road Kalmunai 04', 'Colombo', 'male', '', '', '2024-12-01 15:18:11', '2024-12-01 15:18:11'),
(28, 'Fathima', 'No. 42, Temple Rd', 'Colombo', 'female', '', '', '2024-12-01 15:21:10', '2024-12-01 15:21:10'),
(29, 'Ajith', 'No. 25, Main Road', 'Jaffna', 'male', '', '', '2024-12-01 15:24:35', '2024-12-01 15:24:35'),
(30, 'Silma', 'No. 14, Market Rd', 'Jaffna', 'female', '', '', '2024-12-04 09:28:37', '2024-12-04 09:28:37'),
(31, 'Muneer', 'No. 42, Temple Rd', 'Colombo', 'male', '', '', '2024-12-04 09:30:37', '2024-12-04 09:30:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorslog`
--
ALTER TABLE `doctorslog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receptionist`
--
ALTER TABLE `receptionist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpatient`
--
ALTER TABLE `tblpatient`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctorslog`
--
ALTER TABLE `doctorslog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `receptionist`
--
ALTER TABLE `receptionist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcontactus`
--
ALTER TABLE `tblcontactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblmedicalhistory`
--
ALTER TABLE `tblmedicalhistory`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblpatient`
--
ALTER TABLE `tblpatient`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
