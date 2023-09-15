-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 03:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vision`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `account_holder` varchar(500) NOT NULL,
  `bank_name` varchar(500) NOT NULL,
  `iban` varchar(255) NOT NULL,
  `acc_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `user_id`, `account_holder`, `bank_name`, `iban`, `acc_no`) VALUES
(3, 1000, 'Muhammad Aaliyan', 'Standard Chartered Bank', 'PK2906189798', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `class_name` varchar(500) NOT NULL,
  `teacher_name` varchar(500) NOT NULL,
  `grade` int(255) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `user_id`, `school_id`, `teacher_id`, `class_name`, `teacher_name`, `grade`, `year`) VALUES
(3, 6, 1, 2, 'Math', 'Hussain Ali', 4, 2023),
(5, 37, 2, 4, 'Physics', 'Salah', 5, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_dates`
--

CREATE TABLE `exam_dates` (
  `id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `class_id` int(255) NOT NULL,
  `grade` int(255) NOT NULL,
  `exam_name` varchar(500) NOT NULL,
  `start_date` varchar(500) NOT NULL,
  `end_date` varchar(500) NOT NULL,
  `result_date` varchar(500) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam_dates`
--

INSERT INTO `exam_dates` (`id`, `school_id`, `class_id`, `grade`, `exam_name`, `start_date`, `end_date`, `result_date`, `year`) VALUES
(7, 1, 3, 4, 'Second Semester', '2023-08-21', '2023-08-25', '2023-08-22', 2023),
(10, 1, 3, 4, 'First Semester', '2023-05-10', '2023-06-10', '2023-09-10', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(255) NOT NULL,
  `teacher_id` int(255) NOT NULL,
  `student_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `subject_id` int(255) NOT NULL,
  `subject_name` varchar(500) NOT NULL,
  `sub_marks` float NOT NULL,
  `exam_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `teacher_id`, `student_id`, `school_id`, `subject_id`, `subject_name`, `sub_marks`, `exam_name`) VALUES
(46, 2, 1, 1, 3, 'Math', 99, 'Second Semester'),
(47, 2, 8, 1, 3, 'Math', 85, 'Second Semester');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `parent_name` varchar(500) NOT NULL,
  `child_name` varchar(500) NOT NULL,
  `child_id` int(255) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `user_id`, `school_id`, `parent_name`, `child_name`, `child_id`, `email`, `phone`, `image`) VALUES
(7, 32, 1, 'eg', 'egersgsg', 10, 'a@gmail.com', '0', 'Blue Navy Modern Mobo Tech Logo.png'),
(9, 42, 1, 'Ahmedfffg', 'nazir', 13, 'sskj@gmail.com', '0332154789', '368137873_278025348283022_3712428435664394477_n.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(255) NOT NULL,
  `std_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `exam_name` varchar(500) NOT NULL,
  `total_subjects` int(255) NOT NULL,
  `total_marks` float NOT NULL,
  `percentage` float NOT NULL,
  `grade` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `std_id`, `school_id`, `exam_name`, `total_subjects`, `total_marks`, `percentage`, `grade`, `status`) VALUES
(18, 1, 1, 'Second Semester', 7, 194, 27.7143, 'F', 'granted'),
(19, 8, 2, 'Second Semester', 7, 171, 24.4286, 'F', 'granted');

-- --------------------------------------------------------

--
-- Table structure for table `schools_list`
--

CREATE TABLE `schools_list` (
  `id` int(255) NOT NULL,
  `school_name` varchar(500) NOT NULL,
  `school_address` varchar(500) NOT NULL,
  `admin_name` varchar(500) NOT NULL,
  `admin_email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` int(255) NOT NULL DEFAULT 0,
  `reg_date` varchar(500) NOT NULL,
  `period` int(255) NOT NULL,
  `plan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools_list`
--

INSERT INTO `schools_list` (`id`, `school_name`, `school_address`, `admin_name`, `admin_email`, `password`, `status`, `reg_date`, `period`, `plan`) VALUES
(1, 'Programmer School', 'Sector  11 b North Karachi', 'Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 0, '23/08/18', 2, 1),
(2, 'Bexan', 'effegmeeffmfwefewf', 'Aaliyana', 'aliyana@gmail.com', '7acfd08ecfb562f848d71f9c7c34b61e', 0, '23/08/22', 1, 1),
(3, 'City Sxhool', 'Sector  11 b North Karachi', 'Aaliyan', 'aliyanaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5', 0, '23/09/05', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `name` varchar(150) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `grade` int(255) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `roll_no` int(100) NOT NULL,
  `religion` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_no` varchar(500) NOT NULL,
  `image` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `user_id`, `school_id`, `name`, `gender`, `grade`, `dob`, `roll_no`, `religion`, `email`, `phone_no`, `image`) VALUES
(1, 2, 1, 'Ali Ahmed dsxs', 'male', 4, '28-07-2023', 234, 'Others', 'ali@gmail.com', '03323848014', 'download.jfif'),
(8, 26, 1, 'Ahsan', 'male', 4, '05-08-2023', 654, 'islam', 'ahsan@gmail.com', '03125478910', NULL),
(9, 28, 1, 'Aleena', 'female', 9, '', 2125, 'islam', 'alina@gmail.com', '2554959498', NULL),
(10, 31, 1, 'egersgsg', 'male', 3, '22-08-2023', 12533, 'islam', 'wgegseetwt@gmail.com', '03323848012', NULL),
(11, 33, 1, 'Zehra', 'male', 8, '22-07-2023', 659, 'islam', 'zehrairfan9040@gmail.com', '02456897552', NULL),
(12, 38, 2, 'Khalil', 'male', 8, '14-08-2023', 899, 'christian', 'khalil@gmail.com', '02154879632', NULL),
(13, 41, 1, 'nazir', 'male', 4, '09-08-2023', 546, 'islam', 'alifff@gmail.com', '(332) 384-8012', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `school_id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `join_date` varchar(500) NOT NULL,
  `qualification` varchar(500) NOT NULL,
  `experience` varchar(500) NOT NULL,
  `faculty_roll_id` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `picture` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `user_id`, `school_id`, `name`, `email`, `gender`, `dob`, `mobile`, `join_date`, `qualification`, `experience`, `faculty_roll_id`, `address`, `picture`) VALUES
(2, 6, 1, 'Hussain Ali', 'hussain@gmail.com', 'Male', '04-08-2023', '0215855222', '18-08-2023', 'ddwegew', '10 Years', '12', 'rgrsgrsgsegseges', 'download.jfif'),
(3, 35, 1, 'Shahzaib', 'shahzaib@gmail.com', 'Male', '11-01-2000', '03325647894', '21-08-2023', 'Lab Instructor', '2 Years', '111', 'Near khyber Park', ''),
(4, 37, 2, 'Salah', 'skfj@gmail.com', 'Male', '08-08-2023', '', '22-08-2023', 'expert', '10 Years', '12654', 'gwrgwregwewrg', 'download.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `phone` varchar(500) NOT NULL,
  `age` int(255) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `school_id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `age`, `gender`, `school_id`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', '', 0, '', 1, 'admin'),
(2, 'Ali', 'ali@gmail.com', 'c94b91d4341ec6a439e5204515255158', '03323848012', 15, 'male', 1, 'student'),
(3, 'Aaliyan', 'salah@gmail.com', '28b5d710a98ccf0f8c313c8c2967724d', '03323848012', 20, 'Male', 1, 'teacher'),
(6, 'Hussain', 'hussain@gmail.com', 'c8cf0ae09be859f8310119a80515747b', '03312849040', 19, 'Male', 1, 'teacher'),
(26, 'Ahsan', 'ahsan@gmail.com', '7c31e76d0abec9c30920a84f257eea83', '03125478910', 15, 'male', 1, 'student'),
(27, 'Khan', 'khan@gmail.com', '47125b79a8a73448bbd797adf61c2b55', '', 0, '', 1, 'parent'),
(28, 'Aleena', 'alina@gmail.com', '43b1edf5d23be5e9d12bafa8b2f7597c', '2554959498', 12, 'female', 1, 'student'),
(29, 'efeuh', 'kdfj@gmail.com', '1c72994fe07d5eaec6839e8d764a1bd3', '', 0, '', 1, 'parent'),
(30, 'Alibnd', 'saladvsdvh@gmail.com', 'f5c0a1c9384c2e25e79ba1abf5d9a037', '0319 4088114', 11, 'male', 1, 'student'),
(31, 'egersgsg', 'wgegseetwt@gmail.com', 'bd8a91031a12d58542435ebe4e1a368c', '03323848012', 20, 'male', 1, 'student'),
(32, 'geAhmedeg', 'ahddmed@gmail.com', 'ef6b4ae41b7d94642e5aa521e4d45eb8', '', 0, '', 1, 'parent'),
(33, 'Zehra', 'zehrairfan9040@gmail.com', '8179141ccf88ee1f414b972d7aa4573e', '02456897552', 16, 'male', 1, 'student'),
(34, 'Bano', 'bano@gmail.com', 'd158d9b5a698731445bdee2c35dfd16f', '', 0, '', 1, 'parent'),
(35, 'Shahzaib', 'shahzaib@gmail.com', 'e51c04ecbe4ce577876d116806be8e53', '03325647894', 23, 'Male', 1, 'teacher'),
(36, 'Aaliyana', 'aliyana@gmail.com', '7acfd08ecfb562f848d71f9c7c34b61e', '', 0, '', 2, 'admin'),
(37, 'Salah', 'skfj@gmail.com', 'c71dd84ac47296cc9ca7d4d141d14a7e', '0319 4088114', 18, 'Male', 2, 'teacher'),
(38, 'Khalil', 'khalil@gmail.com', '9b93e08888b24629590f89082db0fad5', '02154879632', 14, 'male', 1, 'student'),
(39, 'Ahmed', 'khalil_p@gmail.com', 'b2a3b0103e30988fded06ef64c4eb99e', '', 0, '', 1, 'parent'),
(40, 'Aaliyan', 'aliyanaa@gmail.com', '74b87337454200d4d33f80c4663dc5e5', '', 0, '', 3, 'admin'),
(41, 'nazir', 'alifff@gmail.com', '1b702840e0a00218fd537f2f63ad1411', '(332) 384-8012', 18, 'male', 1, 'student'),
(42, 'Ahmedfffg', 'sskj@gmail.com', '56c5535c31024d31cf8bda20baa6b8c8', '', 0, '', 1, 'parent');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `teacher_id_foreignkey` (`teacher_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_dates`
--
ALTER TABLE `exam_dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id_foreign_key_exam` (`school_id`),
  ADD KEY `class_id_foreign_key_exam` (`class_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id_foreign_key_marks` (`teacher_id`),
  ADD KEY `school_id_foreign_key_marks` (`school_id`),
  ADD KEY `std_id` (`student_id`),
  ADD KEY `sub_id` (`subject_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`),
  ADD KEY `child_id` (`child_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id_foreign_key_result` (`school_id`),
  ADD KEY `std_id_foreignkey` (`std_id`);

--
-- Indexes for table `schools_list`
--
ALTER TABLE `schools_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id` (`school_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_dates`
--
ALTER TABLE `exam_dates`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `schools_list`
--
ALTER TABLE `schools_list`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `classes_ibfk_3` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_id_foreignkey` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `exam_dates`
--
ALTER TABLE `exam_dates`
  ADD CONSTRAINT `class_id_foreign_key_exam` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `school_id_foreign_key_exam` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `school_id_foreign_key_marks` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `std_id` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sub_id` FOREIGN KEY (`subject_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_id_foreign_key_marks` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `parent_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `parent_ibfk_3` FOREIGN KEY (`child_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `school_id_foreign_key_result` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `std_id_foreignkey` FOREIGN KEY (`std_id`) REFERENCES `student` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_2` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_ibfk_4` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools_list` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
