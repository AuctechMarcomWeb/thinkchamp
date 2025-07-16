-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2025 at 10:01 AM
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
-- Database: `thinkchamp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_user`
--

CREATE TABLE `add_user` (
  `s_no` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `register` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `confirm_password` varchar(255) DEFAULT NULL,
  `TYPE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_user`
--

INSERT INTO `add_user` (`s_no`, `user_id`, `firstname`, `lastname`, `username`, `email`, `register`, `mobile_no`, `password`, `confirm_password`, `TYPE`) VALUES
(1, '1', 'Zaid', 'Rizvi', 'Admin', 'admin@gmail.com', 'test', '9335438189', 'Auctech@321', 'Auctech@321', 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_form`
--

CREATE TABLE `enrollment_form` (
  `s_no` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `student_age` varchar(20) NOT NULL,
  `class_grade` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `guardian_name` varchar(100) NOT NULL,
  `guardian_mobile` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `added_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_applications`
--

CREATE TABLE `teacher_applications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `education` varchar(150) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `subjects` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `message` text DEFAULT NULL,
  `cv_file` varchar(255) DEFAULT NULL,
  `added_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `s_no` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `paragraph` text DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`s_no`, `price_id`, `paragraph`, `name`, `image`) VALUES
(1, 1, 'I used to struggle with maths but now I enjoy solving questions every day. The classes are really helpful.', 'Emma Smith', 'user.png'),
(2, 2, 'The sessions are fun and I’ve improved a lot in grammar and spelling. I feel more confident in school now.', 'Michal Lee', 'user.png'),
(3, 3, 'I like the way they explain logic questions. It makes everything so easy to understand. Great support always.', 'Sophia', 'user.png'),
(4, 4, 'Every topic is taught clearly and the activities are very engaging. I enjoy learning this way much more.', 'Nolan', 'user.png'),
(5, 5, 'Creative thinking classes are my favorite. They teach in a way that keeps you interested and focused.', 'Levi', 'user.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_user`
--
ALTER TABLE `add_user`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment_form`
--
ALTER TABLE `enrollment_form`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `teacher_applications`
--
ALTER TABLE `teacher_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_user`
--
ALTER TABLE `add_user`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollment_form`
--
ALTER TABLE `enrollment_form`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_applications`
--
ALTER TABLE `teacher_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
