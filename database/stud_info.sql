-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 07:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud_grades`
--

CREATE TABLE `stud_grades` (
  `stud_id` int(11) NOT NULL,
  `stud_name` text NOT NULL,
  `prelims_q1` int(5) NOT NULL,
  `prelims_q2` int(5) NOT NULL,
  `prelims_cs` int(5) NOT NULL,
  `prelims_exam` int(5) NOT NULL,
  `midterms_q1` int(5) NOT NULL,
  `midterms_q2` int(5) NOT NULL,
  `midterms_cs` int(5) NOT NULL,
  `midterms_exam` int(5) NOT NULL,
  `finals_q1` int(5) NOT NULL,
  `finals_q2` int(5) NOT NULL,
  `finals_cs` int(5) NOT NULL,
  `finals_exam` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud_grades`
--

INSERT INTO `stud_grades` (`stud_id`, `stud_name`, `prelims_q1`, `prelims_q2`, `prelims_cs`, `prelims_exam`, `midterms_q1`, `midterms_q2`, `midterms_cs`, `midterms_exam`, `finals_q1`, `finals_q2`, `finals_cs`, `finals_exam`) VALUES
(1, 'Lara Joy Cuison', 92, 96, 100, 98, 92, 87, 100, 98, 91, 85, 100, 100),
(21, 'Yoshi Sasamoto', 90, 93, 92, 86, 83, 90, 98, 98, 94, 87, 87, 78),
(23, 'Try sample', 90, 90, 78, 100, 98, 67, 66, 100, 80, 90, 77, 93),
(24, 'Lj ', 90, 90, 90, 92, 90, 90, 90, 92, 90, 90, 90, 90),
(25, 'Jl', 90, 90, 90, 100, 90, 90, 90, 100, 90, 90, 90, 90),
(26, 'Jeremy', 89, 94, 96, 54, 90, 90, 90, 97, 78, 98, 98, 79),
(27, 'Joy Cuison', 65, 90, 89, 90, 84, 98, 85, 90, 78, 90, 100, 89),
(28, 'Scotie', 89, 90, 67, 90, 64, 68, 90, 67, 90, 92, 95, 96);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stud_grades`
--
ALTER TABLE `stud_grades`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stud_grades`
--
ALTER TABLE `stud_grades`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
