-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 28, 2022 at 04:50 AM
-- Server version: 8.0.29-0ubuntu0.22.04.2
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
  `course` varchar(10) NOT NULL,
  `question` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Notice`
--

CREATE TABLE `Notice` (
  `id` int NOT NULL,
  `notice` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Results`
--

CREATE TABLE `Results` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `std_id` int NOT NULL,
  `grade` float NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Std_exam`
--

CREATE TABLE `Std_exam` (
  `id` int NOT NULL,
  `std_id` int NOT NULL,
  `ques_id` int NOT NULL,
  `answer` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Std_schedule`
--

CREATE TABLE `Std_schedule` (
  `id` int NOT NULL,
  `std_id` int NOT NULL,
  `schedule` int NOT NULL,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `nid` int DEFAULT NULL,
  `birthreg` int DEFAULT NULL,
  `std_id` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `present_addr` text NOT NULL,
  `parma_addr` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interests` text,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
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
  `nid` int DEFAULT NULL,
  `birthreg` int DEFAULT NULL,
  `tchr_id` int NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `present_addr` text NOT NULL,
  `parma_addr` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interests` text,
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `updated_at` timestamp NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  ADD UNIQUE KEY `course_id` (`course_id`),
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
  ADD KEY `Std_schedule_fk0` (`std_id`),
  ADD KEY `Std_schedule_fk1` (`schedule`);

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
  ADD UNIQUE KEY `phone` (`phone`),
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
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Notice`
--
ALTER TABLE `Notice`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Results`
--
ALTER TABLE `Results`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Schedule`
--
ALTER TABLE `Schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Std_exam`
--
ALTER TABLE `Std_exam`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Std_schedule`
--
ALTER TABLE `Std_schedule`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tchr_question`
--
ALTER TABLE `Tchr_question`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Results`
--
ALTER TABLE `Results`
  ADD CONSTRAINT `Results_fk0` FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`),
  ADD CONSTRAINT `Results_fk1` FOREIGN KEY (`std_id`) REFERENCES `Students` (`id`);

--
-- Constraints for table `Schedule`
--
ALTER TABLE `Schedule`
  ADD CONSTRAINT `Schedule_fk0` FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`),
  ADD CONSTRAINT `Schedule_fk1` FOREIGN KEY (`tchr_id`) REFERENCES `Teachers` (`id`);

--
-- Constraints for table `Std_exam`
--
ALTER TABLE `Std_exam`
  ADD CONSTRAINT `Std_exam_fk0` FOREIGN KEY (`std_id`) REFERENCES `Students` (`id`),
  ADD CONSTRAINT `Std_exam_fk1` FOREIGN KEY (`ques_id`) REFERENCES `Tchr_question` (`id`);

--
-- Constraints for table `Std_schedule`
--
ALTER TABLE `Std_schedule`
  ADD CONSTRAINT `Std_schedule_fk0` FOREIGN KEY (`std_id`) REFERENCES `Students` (`id`),
  ADD CONSTRAINT `Std_schedule_fk1` FOREIGN KEY (`schedule`) REFERENCES `Schedule` (`id`);

--
-- Constraints for table `Students`
--
ALTER TABLE `Students`
  ADD CONSTRAINT `Students_fk0` FOREIGN KEY (`std_id`) REFERENCES `Users` (`id`);

--
-- Constraints for table `Tchr_question`
--
ALTER TABLE `Tchr_question`
  ADD CONSTRAINT `Tchr_question_fk0` FOREIGN KEY (`tchr_id`) REFERENCES `Teachers` (`id`),
  ADD CONSTRAINT `Tchr_question_fk1` FOREIGN KEY (`course_id`) REFERENCES `Courses` (`id`);

--
-- Constraints for table `Teachers`
--
ALTER TABLE `Teachers`
  ADD CONSTRAINT `Teachers_fk0` FOREIGN KEY (`tchr_id`) REFERENCES `Users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
