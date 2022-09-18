-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 08:29 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jjubms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `user`, `pass`) VALUES
(1, 'jjuadmin', 'jju@123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_plan`
--

CREATE TABLE `admin_plan` (
  `id` int(10) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `detail` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Hosaina Yirgalem', 'yhosaina@gmail.', 'Good Work', ''),
(2, 'Hosaina Yirgalem', 'yhosaina@gmail.', 'Good Work', 'Hey its good work'),
(3, 'h', 'd@f.com', 'd', 'd'),
(4, 'Hosaina Yirgalem', 'r@h.com', 'r', 'f'),
(5, 'hose', 'kjdh@jfgkl.com', 'fhd', 'hfdjfhjdkfhdkfhkj'),
(6, 'Hosaina Yirgalem', 'yhosaina@gmail.', 'Good Work', 'hey'),
(7, 'Mr X', 'hshdsi@fhjgd.co', 'thfgf', 'fgdhffdfhdfj'),
(8, 'bhhbh', 'hkhjk@gjgj.cuhj', 'yutgyugyu', 'iuyiu');

-- --------------------------------------------------------

--
-- Table structure for table `expense_report`
--

CREATE TABLE `expense_report` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `purpose` varchar(150) NOT NULL,
  `type` int(15) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `description` varchar(150) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense_report`
--

INSERT INTO `expense_report` (`id`, `name`, `purpose`, `type`, `amount`, `date`, `description`, `department`) VALUES
(1, 'Car', 'Buy a car', 0, '2222', '2020-10-14 10:43:05', 'hey', ''),
(42, 'bus', 'planning directorate', 3, '5000 birr', '2021-01-22 16:41:04', 'dsf', '');

-- --------------------------------------------------------

--
-- Table structure for table `planhead`
--

CREATE TABLE `planhead` (
  `id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `planhead`
--

INSERT INTO `planhead` (`id`, `amount`, `date`, `type`) VALUES
(14, '0.00003354', '2021-06-16', 'hgf');

-- --------------------------------------------------------

--
-- Table structure for table `plan_approved`
--

CREATE TABLE `plan_approved` (
  `id` int(10) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `detail` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_approved`
--

INSERT INTO `plan_approved` (`id`, `plan_name`, `date`, `detail`, `message`) VALUES
(16, '', '2020-10-27 16:24:33', '', ''),
(20, 'f', '2020-10-27 16:44:29', 'fdfd', ' Head of Teaching Stuff would like to request For Plan Approval.'),
(21, 'hose', '2020-10-27 16:47:48', 'HOse', ' Head of Teaching Stuff would like to request For Plan Approval.'),
(26, 'hose', '2020-10-28 16:32:59', 'Plan', ' Planning Directorate would like to request For Plan Approval.'),
(27, 'a', '2020-10-28 16:34:13', 'a', ' Planning Directorate would like to request For Plan Approval.'),
(28, 'buy car', '2020-12-30 09:24:38', 'we need to buy used car ', ' Head of Transport Service would like to request For Plan Approval.'),
(29, 'buy used car', '2020-12-30 10:42:18', 'i want to buy', ' Head of Transport Service would like to request For Plan Approval.'),
(30, 'car', '2021-01-08 17:11:25', 'to buy car', ' Head of Transport Service would like to request For Plan Approval.'),
(31, 'Total Plan', '2021-01-12 18:04:32', 'Some thing new ', ' Planning Directorate would like to request For Plan Approval.'),
(32, 'hose', '2021-01-21 05:24:29', 'ghghj', ' Head of Teaching Stuff would like to request For Plan Approval.'),
(33, 'yyrt', '2021-01-22 16:39:42', 'yrt', ' Planning Directorate would like to request For Plan Approval.'),
(34, 'Transport', '2021-01-22 17:26:59', 'hey', ' Head of Transport Service would like to request For Plan Approval.'),
(35, 'ghh', '2021-01-26 17:33:54', 'hhfhh', ' Head of Transport Service would like to request For Plan Approval.'),
(36, 'h', '2021-06-10 07:25:44', 'tet', ' Planning Directorate would like to request For Plan Approval.');

-- --------------------------------------------------------

--
-- Table structure for table `plan_request`
--

CREATE TABLE `plan_request` (
  `id` int(10) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `date` datetime DEFAULT NULL,
  `detail` varchar(150) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `referalhead`
--

CREATE TABLE `referalhead` (
  `id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `studenthead`
--

CREATE TABLE `studenthead` (
  `id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachinghead`
--

CREATE TABLE `teachinghead` (
  `id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachinghead`
--

INSERT INTO `teachinghead` (`id`, `amount`, `date`, `type`) VALUES
(2, '5000 birr', '2021-01-22', 'budget allocated'),
(3, '2222', '2021-01-07', 'budget allocated');

-- --------------------------------------------------------

--
-- Table structure for table `transporthead`
--

CREATE TABLE `transporthead` (
  `id` int(10) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `users` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` enum('plan','transport','teaching','student','referal') NOT NULL DEFAULT 'plan'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `users`, `pass`, `type`) VALUES
(1, 'jjuplan', 'jju@plan', 'plan'),
(2, 'jjutransport', 'jju@transport', 'transport'),
(3, 'jjuteaching', 'jju@teaching', 'teaching'),
(4, 'jjustudent', 'jju@student', 'student'),
(5, 'jjureferal', 'jju@referal', 'referal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_plan`
--
ALTER TABLE `admin_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_report`
--
ALTER TABLE `expense_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `planhead`
--
ALTER TABLE `planhead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_approved`
--
ALTER TABLE `plan_approved`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_request`
--
ALTER TABLE `plan_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referalhead`
--
ALTER TABLE `referalhead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studenthead`
--
ALTER TABLE `studenthead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachinghead`
--
ALTER TABLE `teachinghead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transporthead`
--
ALTER TABLE `transporthead`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_plan`
--
ALTER TABLE `admin_plan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expense_report`
--
ALTER TABLE `expense_report`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `planhead`
--
ALTER TABLE `planhead`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plan_approved`
--
ALTER TABLE `plan_approved`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `plan_request`
--
ALTER TABLE `plan_request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `referalhead`
--
ALTER TABLE `referalhead`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studenthead`
--
ALTER TABLE `studenthead`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teachinghead`
--
ALTER TABLE `teachinghead`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transporthead`
--
ALTER TABLE `transporthead`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
