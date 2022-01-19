-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 06:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bps`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_procurement`
--

CREATE TABLE `book_procurement` (
  `id` int(11) NOT NULL COMMENT '1',
  `year` varchar(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `reference_book_name` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `no_of_divisions` int(11) NOT NULL,
  `no_of_percentage_of_syllabus_covered` int(11) NOT NULL,
  `no_of_copies` int(11) NOT NULL,
  `required_copies` int(11) NOT NULL,
  `remaining_copies` int(11) NOT NULL,
  `Insyllabus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_procurement`
--

INSERT INTO `book_procurement` (`id`, `year`, `semester`, `department`, `stream`, `subject`, `reference_book_name`, `type`, `no_of_divisions`, `no_of_percentage_of_syllabus_covered`, `no_of_copies`, `required_copies`, `remaining_copies`, `Insyllabus`) VALUES
(14, 'FE', 'I', 'Computer Engineering', 'UG', 'Physics', 'A deep study in Physics', 'Division', 2, 90, 10, 10, 0, 'Yes'),
(15, 'SE', 'III', 'Information Technology', 'UG', 'Software Engineering', 'Software Engineering and analysis', 'Division', 4, 95, 15, 20, 5, 'Yes'),
(16, 'TE', 'IV', 'Information Technology', 'UG', 'Dbms', 'database management', 'Division', 2, 90, 10, 10, 0, 'Yes'),
(17, 'TE', 'VI', 'Electronics and Telecommunication', 'UG', 'Theory of computation', 'Deep  study of Toc', 'Division', 3, 97, 10, 15, 5, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE `book_request` (
  `id` int(11) NOT NULL COMMENT '1',
  `year` int(11) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `available_reference_book_name` varchar(255) NOT NULL,
  `no_of_copies_available` int(11) NOT NULL,
  `no_of_copies_required` int(11) NOT NULL,
  `no_of_percentage_of_syllabus_covered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_request`
--

INSERT INTO `book_request` (`id`, `year`, `semester`, `subject`, `available_reference_book_name`, `no_of_copies_available`, `no_of_copies_required`, `no_of_percentage_of_syllabus_covered`) VALUES
(1, 0, 'III', 'dfg', 'wqe', 2, 222, 23),
(2, 0, 'I', 'Physics', 'A deep study in Physics', 10, 2, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_procurement`
--
ALTER TABLE `book_procurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_procurement`
--
ALTER TABLE `book_procurement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `book_request`
--
ALTER TABLE `book_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
