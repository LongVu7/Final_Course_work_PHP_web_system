-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2025 at 11:10 PM
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
-- Database: `final_coursework`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `name`, `password`, `email`, `firstname`, `lastname`) VALUES
(33, 'longvutesting123', '$2y$10$tRUlOrfE6a54If1WdUCxbOWUy', 'longvu@gmail.com', 'testing', 'Vo'),
(34, '123', '123', '123', '123', '123'),
(36, 'usetest', '312', '32', '32', '32'),
(38, '312', '$2y$10$c5.g0ktrZNvQk6alliC8XuwEA', '312', '312', '312'),
(39, 'das', '$2y$10$gioEaRKeWBNgpyJYBC3ZFOBo8', 'das', 'das', 'das'),
(48, '312', '$2y$10$N8OUPFR7R/QhFXPSFDFtw.sR1', '31212', '312', '321'),
(49, '312', '$2y$10$77699lgAHqSbftcJ1H29mO4MK', '56', '65', '64'),
(50, 'aa', '$2y$10$yg1uMYFog2Yxvvh7EXQtCOC31', 'aaa312@123.com', 'aa312', 'aa312'),
(51, '22', '22', '22', '2222', '222'),
(52, 'User212', '$2y$10$ySN9dsC2Z9nDS3QOv4YEUOFwt', '21123', '32121', '12312'),
(56, 'da', '$2y$10$YSlEu4xS1XTyUdkwX/xwbuxm0', 'dsa', 'das', 'das'),
(57, '321', '$2y$10$Ev2bPFDlWMgytrmw/o0yeOv/6', '123123', '123', '321'),
(58, '321123', '$2y$10$emmGV5UJqWoERnMKX/bagem5a', 'longvu7702@gmail.com', 'Long Vu', 'Vo'),
(59, '42424', 'fe7ecc4de28b2c83c016b5c6c2acd826', '42424224', '3323', '3324'),
(60, 'usertest', '$2y$10$1Tfnq.FmdmfDLeyYhm32aeY6J', 'usertest@gmail.com', 'user', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `moduleName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `moduleName`) VALUES
(14, 'UX UI design '),
(15, 'Business'),
(16, '                IT        '),
(21, 'Front end'),
(36, 'UI UX'),
(37, 'User Design Interface');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `date` int(11) DEFAULT current_timestamp(),
  `image` text DEFAULT NULL,
  `authorid` int(11) NOT NULL,
  `moduleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `content`, `date`, `image`, `authorid`, `moduleid`) VALUES
(52, 'I have a questions	', 20250416, 'linux.png', 33, 16),
(53, 'I don\'t understand', 20250417, 'parrot.png', 33, 15),
(54, 'Window', 20250417, 'linux.png', 33, 14),
(55, 'What is the function of \"cd\" command in linux?', 20250418, 'parrot.png', 33, 14),
(60, 'How does DNS work?', 20250418, 'parrot.png', 33, 14),
(62, 'das', 20250418, 'kali.png', 33, 14),
(67, 'Questions', 20250423, 'kali.png', 33, 21),
(70, 'Questions', 20250423, 'kali.png', 50, 16),
(72, 'Question2', 20250424, 'kali.png', 51, 21),
(73, 'Do all DNS providers accept a final \".\" at the end of a domain name?\r\n', 20250424, 'linux.png', 33, 15),
(78, 'I don\'t understand the coursework', 20250424, 'kali.png', 33, 16),
(81, 'I have a questions about kali os', 20250425, 'kali.png', 33, 16),
(82, 'das', 20250425, 'parrot.png', 58, 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `authorid` (`authorid`),
  ADD KEY `moduleid` (`moduleid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`moduleid`) REFERENCES `module` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
