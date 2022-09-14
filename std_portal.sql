-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2022 at 05:37 AM
-- Server version: 8.0.30-0ubuntu0.22.04.1
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `Board_Q`
--

CREATE TABLE `Board_Q` (
  `id` int NOT NULL,
  `semester` int NOT NULL,
  `year` int NOT NULL,
  `course` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Board_Q`
--

INSERT INTO `Board_Q` (`id`, `semester`, `year`, `course`, `question`, `updated_at`, `created_at`) VALUES
(1, 1, 2022, 'Test Subject', 'Test Subject_1_2022.pdf', '2022-09-05 03:59:21', '2022-09-05 03:59:21'),
(3, 1, 2020, 'CSE', 'CSE_1_2020.pdf', '2022-09-06 17:46:52', '2022-09-06 17:46:52');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `id` int NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `credits` int NOT NULL,
  `semester` int NOT NULL,
  `year` int NOT NULL,
  `duration` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`id`, `course_name`, `course_code`, `credits`, `semester`, `year`, `duration`, `updated_at`, `created_at`) VALUES
(1, 'test', 't11', 3, 1, 2022, 4, '2022-09-05 05:47:17', '2022-09-05 05:47:17'),
(2, 'Test-2', 'T32', 4, 2, 2022, 4, '2022-09-05 05:47:41', '2022-09-05 05:47:41'),
(3, 'Object Oriented Programming', 'CSE110', 4, 3, 2022, 6, '2022-09-06 17:42:46', '2022-09-06 17:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `Notice`
--

CREATE TABLE `Notice` (
  `id` int NOT NULL,
  `title` varchar(100) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Notice`
--

INSERT INTO `Notice` (`id`, `title`, `notice`, `updated_at`, `created_at`) VALUES
(4, 'Breaking news', 'Breaking news1662486501.pdf', '2022-09-06 17:48:21', '2022-09-06 17:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `Results`
--

CREATE TABLE `Results` (
  `id` int NOT NULL,
  `semester` int NOT NULL,
  `std_id` int NOT NULL,
  `grade` float NOT NULL,
  `highest` float NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Results`
--

INSERT INTO `Results` (`id`, `semester`, `std_id`, `grade`, `highest`, `updated_at`, `created_at`) VALUES
(2, 2, 14, 3.2, 3.9, '2022-09-05 06:13:43', '2022-09-05 06:13:43'),
(3, 3, 16, 3.2, 3.8, '2022-09-06 17:47:41', '2022-09-06 17:47:41'),
(4, 1, 16, 3.1, 3.8, '2022-09-14 04:41:48', '2022-09-14 04:41:48'),
(9, 4, 16, 3.4, 3.6, '2022-09-14 05:12:20', '2022-09-14 05:12:20'),
(10, 2, 16, 3.2, 3.3, '2022-09-14 05:13:14', '2022-09-14 05:13:14');

-- --------------------------------------------------------

--
-- Table structure for table `Schedule`
--

CREATE TABLE `Schedule` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `tchr_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Schedule`
--

INSERT INTO `Schedule` (`id`, `course_id`, `tchr_id`, `date`, `time`, `duration`, `updated_at`, `created_at`) VALUES
(3, 1, 15, '2022-09-14', '00:34:00', 2, '2022-09-06 08:06:09', '2022-09-06 08:06:09'),
(4, 3, 17, '2022-09-07', '12:10:00', 2, '2022-09-06 17:44:23', '2022-09-06 17:44:23'),
(5, 1, 15, '2022-09-17', '11:28:00', 1, '2022-09-10 17:25:27', '2022-09-10 17:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `Std_exam`
--

CREATE TABLE `Std_exam` (
  `id` int NOT NULL,
  `std_id` int NOT NULL,
  `ques_id` int NOT NULL,
  `answer` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Std_schedule`
--

CREATE TABLE `Std_schedule` (
  `id` int NOT NULL,
  `std_id` int NOT NULL,
  `course_id` int NOT NULL,
  `shdl_id` int NOT NULL,
  `semester` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Std_schedule`
--

INSERT INTO `Std_schedule` (`id`, `std_id`, `course_id`, `shdl_id`, `semester`, `updated_at`, `created_at`) VALUES
(1, 14, 1, 3, 1, '2022-09-14 04:21:04', '2022-09-06 08:19:49'),
(2, 14, 1, 4, 1, '2022-09-14 04:21:08', '2022-09-06 08:21:04'),
(3, 16, 3, 5, 3, '2022-09-14 04:21:12', '2022-09-06 17:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `nid` bigint DEFAULT NULL,
  `birthreg` bigint DEFAULT NULL,
  `std_id` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `present_addr` text NOT NULL,
  `parma_addr` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interests` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`id`, `name`, `image`, `father`, `mother`, `nid`, `birthreg`, `std_id`, `gender`, `blood`, `religion`, `present_addr`, `parma_addr`, `phone`, `email`, `interests`, `updated_at`, `created_at`) VALUES
(2, 'Test Student', '236256456345.jpg', 'Al-Amin Islam', 'dsfghsdfg', 236256456345, 3456345634563456, 14, '1', 'gfjhf', 'fgjhfh', 'fgjhfgh', 'fgjhfgjh', '123-45-678', 'dfgds@dfg.fgi', '', '2022-09-05 07:32:05', '2022-08-31 04:44:12'),
(3, 'dipu', '123412341234.jpg', 'sdfasdf', 'zXCsDd', 123412341234, 12341234123412, 16, '1', 'A-', '214asdf', 'adfvasd', 'gfxdgh', '01677472320', 'student@email.com', '', '2022-09-14 05:13:59', '2022-09-06 15:25:48');

-- --------------------------------------------------------

--
-- Table structure for table `Tchr_question`
--

CREATE TABLE `Tchr_question` (
  `id` int NOT NULL,
  `tchr_id` int NOT NULL,
  `course_id` int NOT NULL,
  `duration` int NOT NULL,
  `question` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nid` bigint DEFAULT NULL,
  `birthreg` bigint DEFAULT NULL,
  `tchr_id` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `present_addr` text NOT NULL,
  `parma_addr` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interests` text,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`id`, `name`, `father`, `mother`, `image`, `nid`, `birthreg`, `tchr_id`, `gender`, `blood`, `religion`, `present_addr`, `parma_addr`, `phone`, `email`, `interests`, `updated_at`, `created_at`) VALUES
(9, 'Test Teacher', 'fcghfxcgh', 'fghfcgh', '236256456345.jpg', 236256456345, 3456345634563456, 15, '2', 'gfjhf', 'fgjhfh', 'fgjhfgh', 'fgjhfgjh', '01999999999', 'example@email.com', '', '2022-09-06 07:27:20', '2022-09-01 10:08:21'),
(10, 'asdfasdf', 'sdfgsdfvdsfv', 'xgjnxcfgh', '234523452325.jpg', 234523452325, 234523452345234523, 17, '1', 'A-', 'Islam', 'adfgasdf dfgsdf', 'dfasdf dfsdafg', '01677472320', 'admin@splendor.com', 'sdasdfsaf', '2022-09-06 17:33:52', '2022-09-06 17:33:52');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `user_type`, `name`, `email`, `password`, `status`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'Super Admin', 'admin@email.com', 'admin123', 1, '2022-07-09 11:35:39', '2022-07-09 11:35:39'),
(14, 'student', 'Orlando International Airport', 'dfgds@dfg.fgi', '12345678', 1, '2022-08-31 04:44:12', '2022-08-31 04:44:12'),
(15, 'teacher', 'Test Teacher', 'example@email.com', '12345678', 1, '2022-09-06 07:27:11', '2022-09-01 10:08:20'),
(16, 'student', 'dipu', 'student@email.com', '12345678', 1, '2022-09-06 15:25:48', '2022-09-06 15:25:48'),
(17, 'teacher', 'asdfasdf', 'admin@splendor.com', '12345678', 1, '2022-09-06 17:33:52', '2022-09-06 17:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Board_Q`
--
ALTER TABLE `Board_Q`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `question` (`question`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_code` (`course_code`);

--
-- Indexes for table `Notice`
--
ALTER TABLE `Notice`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `notice` (`notice`);

--
-- Indexes for table `Results`
--
ALTER TABLE `Results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Results_fk1` (`std_id`);

--
-- Indexes for table `Schedule`
--
ALTER TABLE `Schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Schedule_fk0` (`course_id`),
  ADD KEY `Schedule_fk1` (`tchr_id`);

--
-- Indexes for table `Std_exam`
--
ALTER TABLE `Std_exam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Std_exam_fk0` (`std_id`),
  ADD KEY `Std_exam_fk1` (`ques_id`);

--
-- Indexes for table `Std_schedule`
--
ALTER TABLE `Std_schedule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Std_schedule_fk0` (`std_id`);

--
-- Indexes for table `Students`
--
ALTER TABLE `Students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `std_id` (`std_id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nid` (`nid`),
  ADD UNIQUE KEY `birthreg` (`birthreg`);

--
-- Indexes for table `Tchr_question`
--
ALTER TABLE `Tchr_question`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Tchr_question_fk0` (`tchr_id`),
  ADD KEY `Tchr_question_fk1` (`course_id`);

--
-- Indexes for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tchr_id` (`tchr_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nid` (`nid`),
  ADD UNIQUE KEY `birthreg` (`birthreg`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Board_Q`
--
ALTER TABLE `Board_Q`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Notice`
--
ALTER TABLE `Notice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Results`
--
ALTER TABLE `Results`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Schedule`
--
ALTER TABLE `Schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Std_exam`
--
ALTER TABLE `Std_exam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Std_schedule`
--
ALTER TABLE `Std_schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Tchr_question`
--
ALTER TABLE `Tchr_question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Std_exam`
--
ALTER TABLE `Std_exam`
  ADD CONSTRAINT `Std_exam_fk0` FOREIGN KEY (`std_id`) REFERENCES `Students` (`id`),
  ADD CONSTRAINT `Std_exam_fk1` FOREIGN KEY (`ques_id`) REFERENCES `Tchr_question` (`id`);

--
-- Constraints for table `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `Students_fk0` FOREIGN KEY (`std_id`) REFERENCES `Users` (`id`);

--
-- Constraints for table `Tchr_question`
--
ALTER TABLE `Tchr_question`
  ADD CONSTRAINT `Tchr_question_fk0` FOREIGN KEY (`tchr_id`) REFERENCES `Teachers` (`id`);

--
-- Constraints for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD CONSTRAINT `Teachers_fk0` FOREIGN KEY (`tchr_id`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;