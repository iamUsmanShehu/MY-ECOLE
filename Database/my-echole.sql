-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 06:27 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-echole`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `class_numeric` int(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `name`, `class_numeric`, `section`, `date_created`) VALUES
(1, 'One', 1, '1', '2023-10-13 14:08:27'),
(2, 'Two', 2, '1', '2023-10-13 14:08:39'),
(3, 'Three', 3, '1', '2023-10-13 14:08:50'),
(4, 'Four', 4, '1', '2023-10-13 14:09:15'),
(5, 'Five', 5, '1', '2023-10-13 14:09:58'),
(6, 'Six', 6, '1', '2023-10-13 14:10:08'),
(7, 'Graduate', 0, '1', '2023-10-13 14:13:42'),
(8, 'One', 1, '2', '2023-10-13 14:16:36'),
(9, 'Two', 2, '2', '2023-10-13 14:16:52'),
(10, 'Three', 3, '2', '2023-10-13 14:17:04'),
(11, 'Graduate', 0, '2', '2023-10-13 14:17:47'),
(12, 'One', 1, '3', '2023-10-13 14:18:13'),
(13, 'Two', 2, '3', '2023-10-13 14:18:23'),
(14, 'Three', 3, '3', '2023-10-13 14:18:59'),
(15, 'Graduate', 0, '3', '2023-10-13 14:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(11) NOT NULL,
  `student_id` int(20) NOT NULL,
  `class_id` int(5) NOT NULL,
  `subject_id` int(5) NOT NULL,
  `session_id` int(6) NOT NULL,
  `term_id` int(11) NOT NULL,
  `ca` int(5) NOT NULL,
  `exam` varchar(5) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `result_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `student_id`, `class_id`, `subject_id`, `session_id`, `term_id`, `ca`, `exam`, `total`, `status`, `result_status`) VALUES
(10, 1, 1, 2, 2, 2, 12, '30', 51, 0, 0),
(11, 2, 1, 2, 2, 2, 20, '10', 30, 0, 0),
(12, 4, 1, 2, 2, 2, 30, '40', 70, 0, 0),
(13, 1, 1, 1, 2, 2, 24, '30', 54, 0, 0),
(14, 2, 1, 1, 2, 2, 22, '20', 42, 0, 0),
(15, 4, 1, 1, 2, 2, 21, '50', 71, 0, 0),
(16, 1, 1, 3, 2, 2, 30, '35', 65, 0, 0),
(17, 2, 1, 3, 2, 2, 30, '40', 70, 0, 0),
(18, 4, 1, 3, 2, 2, 20, '21', 41, 0, 0),
(22, 1, 1, 4, 2, 2, 24, '28', 52, 0, 0),
(23, 2, 1, 4, 2, 2, 25, '30', 55, 0, 0),
(24, 4, 1, 4, 2, 2, 30, '23', 53, 0, 0),
(25, 1, 1, 5, 2, 2, 30, '70', 100, 0, 0),
(26, 2, 1, 5, 2, 2, 30, '60', 90, 0, 0),
(27, 4, 1, 5, 2, 2, 20, '30', 50, 0, 0),
(28, 1, 1, 3, 1, 1, 21, '45', 66, 0, 0),
(29, 1, 1, 0, 0, 0, 10, '35', 45, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pins`
--

CREATE TABLE `pins` (
  `id` int(11) NOT NULL,
  `pin` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pins`
--

INSERT INTO `pins` (`id`, `pin`) VALUES
(1, '684811443'),
(2, '25855090'),
(3, '1637667887'),
(4, '101411681'),
(5, '1494858386'),
(10, '33711-54365-18315-87632'),
(11, '74358-18995-82847-43466'),
(12, '76336-69314-10826-78858'),
(13, '46840-32766-26528-45538');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `pin_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`grade_id`, `student_id`, `class_id`, `session_id`, `term_id`, `pin_id`) VALUES
(10, 1, 1, 2, 2, 1),
(17, 2, 0, 2, 2, 2),
(27, 4, 0, 2, 2, 4),
(27, 4, 0, 2, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(11) NOT NULL,
  `section` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `section`, `status`) VALUES
(1, 'Primary', 1),
(2, 'JSS', 1),
(3, 'SSS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` int(11) NOT NULL,
  `session` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `session`, `status`) VALUES
(1, '1991/1992', 1),
(2, '1992/1993', 1),
(3, '', 0),
(4, '', 0),
(5, '', 0),
(6, '', 0),
(7, '', 0),
(8, '', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '122', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `dob` date NOT NULL,
  `disability` varchar(10) NOT NULL,
  `state_of_origin` varchar(20) NOT NULL,
  `lga_of_origin` varchar(20) NOT NULL,
  `home_address` varchar(20) NOT NULL,
  `state_of_residence` varchar(20) NOT NULL,
  `lga_of_residence` varchar(20) NOT NULL,
  `address_of_residence` varchar(50) NOT NULL,
  `section_id` int(1) NOT NULL,
  `class_id` int(1) NOT NULL,
  `serial_no` varchar(10) NOT NULL,
  `passport` text NOT NULL,
  `gurdian_name` varchar(30) NOT NULL,
  `gurdian_state` varchar(20) NOT NULL,
  `gurdian_lga` varchar(20) NOT NULL,
  `gurdian_address` text NOT NULL,
  `gurdian_ocupation` varchar(20) NOT NULL,
  `gurdian_phone` varchar(15) NOT NULL,
  `joined_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`, `gender`, `dob`, `disability`, `state_of_origin`, `lga_of_origin`, `home_address`, `state_of_residence`, `lga_of_residence`, `address_of_residence`, `section_id`, `class_id`, `serial_no`, `passport`, `gurdian_name`, `gurdian_state`, `gurdian_lga`, `gurdian_address`, `gurdian_ocupation`, `gurdian_phone`, `joined_date`) VALUES
(1, 'Usman', 'Shehu', 'M', '2023-09-20', 'none', 'Jigawa', 'Dutse', 'kasarau', 'Adamawa', 'Matsango', 'ffjgrjf', 1, 1, '473', 'index.php', 'Solve Cycle Icon', 'Jigawa', 'Kombotso', 'kd', 'Civil Servant', '+2349040306788', '2023-10-14 07:29:26'),
(2, 'Mustapha', 'ibrahim', 'M', '2023-09-21', 'none', 'Jigawa', 'Gwaram', 'Kofar Gabas', 'Jigawa', 'Dutse', 'Gida-Dubu', 1, 2, '848', '02.jpg', 'Solve Cycle Icon', 'Jigawa', 'Dutse', 'Gida-Dubu', 'Civil Servant', '+2349040306788', '2023-10-14 07:41:56'),
(3, 'Nura', 'mustapha', 'M', '2023-09-12', 'none', 'Kano', 'Kombotso', 'jjas', 'Kano', 'Kombotso', 'kfdsd', 3, 15, '631', '00000IMG_00000_BURST20230131164153918_COVER.jpg', 'Solve Cycle Icon', 'Nasarawa', 'Matsango', 'dfgh', 'Civil Servant', '+2349040306788', '2023-10-13 14:44:23'),
(4, 'Rumaisa', 'Sarki', 'F', '2007-02-21', 'none', 'Jigawa', 'Dutse', 'fghdj', 'Kano', 'Matsango', 'assdd', 3, 15, '988', 'IMG-6527eadc41ddd3.22745411.jpg', 'Solve Cycle Icon', 'Jigawa', 'Gwaram', 'sddf', 'Civil Servant', '+2349040306788', '2023-10-13 14:43:47');

-- --------------------------------------------------------

--
-- Table structure for table `subjectcombinations`
--

CREATE TABLE `subjectcombinations` (
  `id` int(11) NOT NULL,
  `class_id` int(1) NOT NULL,
  `subject_id` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `date_combined` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjectcombinations`
--

INSERT INTO `subjectcombinations` (`id`, `class_id`, `subject_id`, `status`, `date_combined`) VALUES
(1, 1, 1, 1, '2023-09-24 03:26:10'),
(2, 1, 3, 1, '2023-10-02 02:54:30'),
(3, 2, 1, 1, '2023-10-02 03:41:24'),
(6, 1, 4, 1, '2023-10-02 03:37:28'),
(7, 1, 5, 1, '2023-10-02 03:41:03'),
(8, 1, 6, 1, '2023-10-14 07:53:34');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `status`) VALUES
(1, 'Mathematics', 1),
(2, 'English', 1),
(3, 'Hausa', 1),
(4, 'Social Studies', 1),
(5, 'Elementary Science', 1),
(6, '', 0),
(7, '', 0),
(8, '', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '', 0),
(19, '', 0),
(20, '', 0),
(21, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE `system` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `font` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system`
--

INSERT INTO `system` (`id`, `name`, `theme`, `color`, `font`, `description`, `logo`) VALUES
(1, 'My-Echole', '#17a2b8', 'white', 'Poppins', 'A system that Simplify Education Sector', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(11) NOT NULL,
  `term` varchar(30) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `term`, `status`) VALUES
(1, '1st Term', 1),
(2, '2nd Term', 0),
(3, '3rd Term', 0),
(4, '', 0),
(5, '', 0),
(6, '', 0),
(7, '', 0),
(8, '', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '', 0),
(19, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` int(1) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `username`, `password`, `role`, `last_login`) VALUES
(1, 'Usman', 'Shehu', 'iamusmanshehu@gmail.com', 'iamusman', '12345', 1, '2023-09-13 00:53:10'),
(2, 'Nura', 'Muhammad', '', 'nurr', '12345', 2, '2023-09-13 00:48:51'),
(3, 'Mustapha', 'Ibrahim', '', 'musty', '12345', 3, '2023-09-13 01:02:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectcombinations`
--
ALTER TABLE `subjectcombinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
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
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pins`
--
ALTER TABLE `pins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sessions`
--
ALTER TABLE `sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subjectcombinations`
--
ALTER TABLE `subjectcombinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
