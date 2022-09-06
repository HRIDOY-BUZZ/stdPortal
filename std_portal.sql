-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 06, 2022 at 11:05 AM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samvqsub_std`
--

-- --------------------------------------------------------

--
-- Table structure for table `Board_Q`
--

CREATE TABLE `Board_Q` (
  `id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `question` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Board_Q`
--

INSERT INTO `Board_Q` (`id`, `semester`, `year`, `course`, `question`, `updated_at`, `created_at`) VALUES
(1, 1, 2022, 'Test Subject', 'Test Subject_1_2022.pdf', '2022-09-05 03:59:21', '2022-09-05 03:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `credits` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`id`, `course_name`, `course_code`, `credits`, `semester`, `year`, `duration`, `updated_at`, `created_at`) VALUES
(1, 'test', 't11', 3, 1, 2022, 4, '2022-09-05 05:47:17', '2022-09-05 05:47:17'),
(2, 'Test-2', 'T32', 4, 2, 2022, 4, '2022-09-05 05:47:41', '2022-09-05 05:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `Notice`
--

CREATE TABLE `Notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `notice` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Results`
--

CREATE TABLE `Results` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `grade` float NOT NULL,
  `highest` float NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Results`
--

INSERT INTO `Results` (`id`, `course_id`, `std_id`, `grade`, `highest`, `updated_at`, `created_at`) VALUES
(2, 2, 14, 3.2, 3.9, '2022-09-05 06:13:43', '2022-09-05 06:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `Schedule`
--

CREATE TABLE `Schedule` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `tchr_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `duration` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Schedule`
--

INSERT INTO `Schedule` (`id`, `course_id`, `tchr_id`, `date`, `time`, `duration`, `updated_at`, `created_at`) VALUES
(3, 1, 15, '2022-09-14', '00:34:00', 2, '2022-09-06 08:06:09', '2022-09-06 08:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `Std_exam`
--

CREATE TABLE `Std_exam` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `ques_id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Std_schedule`
--

CREATE TABLE `Std_schedule` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Std_schedule`
--

INSERT INTO `Std_schedule` (`id`, `std_id`, `course_id`, `semester`, `updated_at`, `created_at`) VALUES
(1, 14, 1, 1, '2022-09-06 08:19:49', '2022-09-06 08:19:49'),
(2, 14, 1, 1, '2022-09-06 08:21:04', '2022-09-06 08:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `Students`
--

CREATE TABLE `Students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `nid` bigint(20) DEFAULT NULL,
  `birthreg` bigint(20) DEFAULT NULL,
  `std_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `present_addr` text NOT NULL,
  `parma_addr` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interests` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Students`
--

INSERT INTO `Students` (`id`, `name`, `image`, `father`, `mother`, `nid`, `birthreg`, `std_id`, `gender`, `blood`, `religion`, `present_addr`, `parma_addr`, `phone`, `email`, `interests`, `updated_at`, `created_at`) VALUES
(2, 'Test Student', '236256456345.jpg', 'Al-Amin Islam', 'dsfghsdfg', 236256456345, 3456345634563456, 14, '1', 'gfjhf', 'fgjhfh', 'fgjhfgh', 'fgjhfgjh', '123-45-678', 'dfgds@dfg.fgi', '', '2022-09-05 07:32:05', '2022-08-31 04:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `Tchr_question`
--

CREATE TABLE `Tchr_question` (
  `id` int(11) NOT NULL,
  `tchr_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Teachers`
--

CREATE TABLE `Teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father` varchar(100) NOT NULL,
  `mother` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `nid` bigint(20) DEFAULT NULL,
  `birthreg` bigint(20) DEFAULT NULL,
  `tchr_id` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `blood` varchar(5) DEFAULT NULL,
  `religion` varchar(20) DEFAULT NULL,
  `present_addr` text NOT NULL,
  `parma_addr` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `interests` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Teachers`
--

INSERT INTO `Teachers` (`id`, `name`, `father`, `mother`, `image`, `nid`, `birthreg`, `tchr_id`, `gender`, `blood`, `religion`, `present_addr`, `parma_addr`, `phone`, `email`, `interests`, `updated_at`, `created_at`) VALUES
(9, 'Test Teacher', 'fcghfxcgh', 'fghfcgh', '236256456345.jpg', 236256456345, 3456345634563456, 15, '2', 'gfjhf', 'fgjhfh', 'fgjhfgh', 'fgjhfgjh', '01999999999', 'example@email.com', '', '2022-09-06 07:27:20', '2022-09-01 10:08:21');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `user_type`, `name`, `email`, `password`, `status`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'Super Admin', 'admin@email.com', 'admin123', 1, '2022-07-09 11:35:39', '2022-07-09 11:35:39'),
(14, 'student', 'Orlando International Airport', 'dfgds@dfg.fgi', '12345678', 1, '2022-08-31 04:44:12', '2022-08-31 04:44:12'),
(15, 'teacher', 'Test Teacher', 'example@email.com', '12345678', 1, '2022-09-06 07:27:11', '2022-09-01 10:08:20');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Courses`
--
ALTER TABLE `Courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Notice`
--
ALTER TABLE `Notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Results`
--
ALTER TABLE `Results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Schedule`
--
ALTER TABLE `Schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Std_exam`
--
ALTER TABLE `Std_exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Std_schedule`
--
ALTER TABLE `Std_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Students`
--
ALTER TABLE `Students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Tchr_question`
--
ALTER TABLE `Tchr_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Teachers`
--
ALTER TABLE `Teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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