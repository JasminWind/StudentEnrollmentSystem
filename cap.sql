-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 02:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cap`
--

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `courseCode` varchar(255) NOT NULL,
  `courseName` varchar(255) NOT NULL,
  `courseUnit` varchar(255) NOT NULL,
  `noofSeats` int(11) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `courseenrollments`
--

CREATE TABLE `courseenrollments` (
  `semester` varchar(11) NOT NULL,
  `courseName` varchar(11) NOT NULL,
  `studentName` varchar(100) NOT NULL,
  `courseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseenrollments`
--

INSERT INTO `courseenrollments` (`semester`, `courseName`, `studentName`, `courseID`) VALUES
('Fall', 'course 3', 'Jessie Spano', 2),
('Fall', 'course 3', 'Jessie Spano', 3),
('Spring', 'Course 2', 'Jessie Spano', 4),
('Spring', 'Course 2', 'Jessie Spano', 5),
('Spring', 'Course 2', 'Zach Morris', 6),
('Summer', 'Course 4', 'Zach Morris', 7),
('Summer', 'Course 4', 'Zach Morris', 8),
('Fall', 'Course 1', 'Zach Morris', 9);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `semester` varchar(100) NOT NULL,
  `courseName` varchar(100) NOT NULL,
  `seatLimit` varchar(100) NOT NULL,
  `courseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`semester`, `courseName`, `seatLimit`, `courseID`) VALUES
('Fall', 'Course 1', '2', 2),
('Spring', 'Course 2', '4', 9),
('summer', 'course 3', '5', 10),
('Summer', 'Course 4', '4', 13),
('', '', '', 14);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `ssn` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `phone`, `salary`, `ssn`) VALUES
(11, 'zachM@sbb.com', '12345', 'Zach', 'Morris', '124 Bayside, Belding, CA 65423', '5558889901', 90, 111223333),
(12, 'KK@sbb.com', '12345', 'Kelly', 'Kapowski', '789 Belding Avenue, Bayside, CA 78945', '1118886666', 10000, 11),
(14, 'LisaT@sbb.com', '12345', 'Lisa', 'Turtle', '1234 Belding Drive', '8885552222', 20000, 777559999),
(15, 'JessieP@sbb.com', '12345', 'Jessica', 'Spano', '1234 Belding Drive', '9996663355', 7887645, 777553355),
(20, 'ACSlater@sbb.com', '12345', 'AC', 'Slater', '1234 Belding Drive', '7894446655', 7862, 444883333);

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `student` int(11) NOT NULL,
  `course` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`student`, `course`) VALUES
(11, 2),
(11, 13);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `salary` int(20) NOT NULL,
  `ssn` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `phone`, `salary`, `ssn`) VALUES
(11, 'zachM@sbb.com', '123', 'Zach', 'Morris', '124 Bayside, Belding, CA 65423', '5558889901', 90, 111223333),
(12, 'KK@sbb.com', '12345', 'Kelly', 'Kapowski', '789 Belding Avenue, Bayside, CA 78945', '1118886666', 10000, 11),
(14, 'LisaT@sbb.com', '12345', 'Lisa', 'Turtle', '1234 Belding Drive', '8885552222', 20000, 777559999),
(15, 'JessieP@sbb.com', '123', 'Jessica', 'Spano', '1234 Belding Drive', '9996663355', 7887645, 777553355),
(20, 'ACSlater@sbb.com', '123', 'AC', 'Slater', '1234 Belding Drive', '7777774444', 7862, 444883333),
(21, 'ted', '123', 'Ted', 'Mosby', '456', '5287496661', 0, 7896),
(22, 'stutter@gmail.com', '123', 'Stutter', 'Butter', '789', '789', 0, 9654);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courseenrollments`
--
ALTER TABLE `courseenrollments`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`student`,`course`),
  ADD KEY `Student` (`student`),
  ADD KEY `Student_2` (`student`),
  ADD KEY `Student_3` (`student`),
  ADD KEY `course` (`course`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alogin`
--
ALTER TABLE `alogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courseenrollments`
--
ALTER TABLE `courseenrollments`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
