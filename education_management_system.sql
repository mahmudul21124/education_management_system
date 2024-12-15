-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2024 at 11:50 PM
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
-- Database: `education_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_class_teacher`
--

CREATE TABLE `assign_class_teacher` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `teacher_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assign_class_teacher`
--

INSERT INTO `assign_class_teacher` (`id`, `class_id`, `teacher_id`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 2, 11, 0, 0, 1, '2024-12-15 06:59:06', '2024-12-15 11:35:07'),
(2, 2, 2, 0, 1, 1, '2024-12-15 06:59:06', '2024-12-15 16:36:22'),
(6, 1, 12, 0, 0, 1, '2024-12-15 11:10:26', '2024-12-15 11:38:48'),
(7, 1, 11, 0, 0, 1, '2024-12-15 11:10:26', '2024-12-15 11:10:26'),
(8, 1, 2, 0, 0, 1, '2024-12-15 11:10:26', '2024-12-15 11:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not, 1:yes',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Six', 0, 0, 1, '2024-12-12 16:01:58', '2024-12-12 18:51:29'),
(2, 'Seven', 0, 0, 1, '2024-12-12 16:03:21', '2024-12-12 18:49:37'),
(3, 'Eight', 0, 0, 1, '2024-12-15 13:08:43', '2024-12-15 13:08:43'),
(4, 'Nine', 0, 0, 1, '2024-12-15 13:08:50', '2024-12-15 13:08:50'),
(5, 'Ten', 0, 0, 1, '2024-12-15 13:08:57', '2024-12-15 13:08:57'),
(6, 'Eleven', 0, 0, 1, '2024-12-15 13:09:05', '2024-12-15 13:09:05'),
(7, 'Twelve', 0, 0, 1, '2024-12-15 13:09:18', '2024-12-15 13:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `class_subject`
--

CREATE TABLE `class_subject` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not, 1:yes',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject`
--

INSERT INTO `class_subject` (`id`, `class_id`, `subject_id`, `created_by`, `is_delete`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, 0, 0, '2024-12-13 23:15:20', '2024-12-13 23:46:37'),
(2, 1, 2, 1, 0, 0, '2024-12-13 23:36:09', '2024-12-14 10:45:57'),
(3, 1, 4, 1, 0, 0, '2024-12-13 23:36:10', '2024-12-14 10:46:05'),
(4, 1, 1, 1, 0, 0, '2024-12-13 23:36:10', '2024-12-13 23:36:10'),
(8, 2, 5, 1, 0, 0, '2024-12-15 05:39:55', '2024-12-15 05:39:55'),
(9, 2, 2, 1, 0, 0, '2024-12-15 05:39:55', '2024-12-15 05:39:55'),
(10, 2, 1, 1, 0, 0, '2024-12-15 05:39:55', '2024-12-15 05:39:55'),
(11, 3, 5, 1, 0, 0, '2024-12-15 20:27:49', '2024-12-15 20:27:49'),
(12, 3, 7, 1, 0, 0, '2024-12-15 20:27:50', '2024-12-15 20:27:50'),
(13, 3, 2, 1, 0, 0, '2024-12-15 20:27:50', '2024-12-15 20:27:50'),
(14, 3, 6, 1, 0, 0, '2024-12-15 20:27:50', '2024-12-15 20:27:50'),
(15, 3, 1, 1, 0, 0, '2024-12-15 20:27:50', '2024-12-15 20:27:50');

-- --------------------------------------------------------

--
-- Table structure for table `class_subject_timetable`
--

CREATE TABLE `class_subject_timetable` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `week_id` int(11) DEFAULT NULL,
  `start_time` varchar(25) DEFAULT NULL,
  `end_time` varchar(25) DEFAULT NULL,
  `room_number` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_subject_timetable`
--

INSERT INTO `class_subject_timetable` (`id`, `class_id`, `subject_id`, `week_id`, `start_time`, `end_time`, `room_number`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, '09:00', '10:10', '101', '2024-12-15 21:42:15', '2024-12-15 21:42:15'),
(2, 3, 1, 2, '08:45', '09:45', '103', '2024-12-15 21:42:15', '2024-12-15 21:42:15'),
(3, 1, 4, 1, '06:47', '09:48', '103', '2024-12-15 21:43:46', '2024-12-15 21:43:46'),
(4, 2, 1, 1, '07:39', '09:41', '103', '2024-12-15 22:37:11', '2024-12-15 22:37:11'),
(5, 2, 1, 2, '04:38', '04:40', '12', '2024-12-15 22:37:11', '2024-12-15 22:37:11'),
(6, 2, 1, 3, '04:38', '06:36', '2', '2024-12-15 22:37:12', '2024-12-15 22:37:12'),
(7, 2, 1, 6, '19:41', '07:40', '54', '2024-12-15 22:37:12', '2024-12-15 22:37:12'),
(8, 2, 5, 3, '07:37', '04:39', '4', '2024-12-15 22:37:27', '2024-12-15 22:37:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not, 1:yes',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `type`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Bangla 1st', 'Theory', 1, 0, 0, '2024-12-13 22:01:13', '2024-12-15 13:10:22'),
(2, 'English 1st', 'Theory', 1, 0, 0, '2024-12-13 22:07:09', '2024-12-15 13:10:32'),
(3, 'Biology', 'Practical', 1, 0, 0, '2024-12-13 22:07:24', '2024-12-13 22:09:29'),
(4, 'Biology', 'Theory', 1, 0, 0, '2024-12-13 22:07:36', '2024-12-15 13:10:07'),
(5, 'Mathemetics', 'Theory', 1, 0, 0, '2024-12-15 05:39:41', '2024-12-15 05:39:41'),
(6, 'Bangla 2nd', 'Theory', 1, 0, 0, '2024-12-15 13:10:47', '2024-12-15 13:10:47'),
(7, 'English 2nd', 'Theory', 1, 0, 0, '2024-12-15 13:10:59', '2024-12-15 13:10:59'),
(8, 'Science', 'Theory', 1, 0, 0, '2024-12-15 13:11:10', '2024-12-15 13:11:10'),
(9, 'Science', 'Practical', 1, 0, 0, '2024-12-15 13:11:23', '2024-12-15 13:11:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admission_number` varchar(50) DEFAULT NULL,
  `roll_number` varchar(50) DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `admission_date` date DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `merital_status` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `permanent_address` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `work_experience` varchar(255) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `user_type` tinyint(4) NOT NULL DEFAULT 3 COMMENT '1: admin, 2: teahcer, 3: student, 4: parent ',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:not deleted, 1:deleted',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:active, 1:inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `email`, `email_verified_at`, `password`, `admission_number`, `roll_number`, `class_id`, `gender`, `date_of_birth`, `religion`, `mobile_number`, `admission_date`, `profile_pic`, `blood_group`, `merital_status`, `address`, `permanent_address`, `qualification`, `work_experience`, `note`, `user_type`, `is_delete`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mahmudul', NULL, 'admin@gmail.com', NULL, '$2y$10$Aaqq5AhPBx3GhffTjQ7JlO8zlgoMN5loxFBjAlbdKLbEJrSkqFoWi', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, 'hLpQbXOWf8a6iRBDFSI7LPDzJG1ucJJ9CFKYT8N4pGiEOP10cWSV7fjRBPcR', NULL, '2024-12-10 09:22:59'),
(2, 'teacher', NULL, 'teacher@gmail.com', NULL, '$2y$10$Aaqq5AhPBx3GhffTjQ7JlO8zlgoMN5loxFBjAlbdKLbEJrSkqFoWi', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, 0, 0, NULL, NULL, NULL),
(3, 'student', 'd', 'student@gmail.com', NULL, '$2y$10$q69o6grdsexsThtUNUEECOhdK5hRM2bH/UCtixfYFdcChmUvfFDY6', 'asdfsadf', 'asdfsdafa', 2, 'Male', '2024-12-05', 'Islam', 'asfsdfsadfsdf', '2024-12-13', '20241214031019unvudyczciekjt3wyett.jpg', 'A+', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, 'Quy6iHVxNT9tDbq9AActsA53DU2eF7p8AcdtbgAqtoQ1NQQZtthY2O9IfQTw', NULL, '2024-12-14 09:19:36'),
(4, 'parent', NULL, 'parent@gmail.com', NULL, '$2y$10$Aaqq5AhPBx3GhffTjQ7JlO8zlgoMN5loxFBjAlbdKLbEJrSkqFoWi', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, 0, 0, NULL, NULL, NULL),
(5, 'Mahmudul Haque', NULL, 'rakib21124@gmail.com', NULL, '$2y$10$cksCc3AkKfL3RFQWDzj/kuCFA1R2YSrckHeoZ68St115hLGf/VR8y', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, '2024-12-10 12:11:20', '2024-12-10 13:12:16'),
(6, 'Rakib', NULL, 'rakib11@gmail.com', NULL, '$2y$10$7699Z.mHDu4M3uSX1t838.4zOUl0.hr4f8FtvMEQ.BPt8Xh6SLXli', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, '2024-12-10 12:31:34', '2024-12-12 12:48:23'),
(7, 'Dante Mendez1', 'Espinoza1', 'qeqodemaj1@mailinator.com', NULL, '$2y$10$bRre0WMANh3Bbqt2R4QZMe640.ANrpjudThsHP/0JfPvdztNZTeNe', '396111', '801111', 2, 'Male', '2001-02-25', 'Esse id provident', '62314256456546', '2002-05-30', '20241214025552yn04fcwujr6ufjjsa2us.jpg', 'Est ip', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, NULL, '2024-12-14 07:53:05', '2024-12-14 08:55:52'),
(8, 'Arden Kennedy', 'Guzman', 'toxomi@mailinator.com', NULL, '$2y$10$FIHu8vuqMFcZOoCq9G6s7.CDBobWVvc1TamMXxWBFp4zuJyAMIkA2', '450', '665', 2, 'Female', '1989-03-05', 'Mollit necessitatibu', '20045646456456', '1984-11-08', '20241214020211ldkugww6zydmgoknkhdi.jpg', 'Saepe', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, NULL, '2024-12-14 08:02:11', '2024-12-14 10:07:26'),
(9, 'Kristen Guthrie', 'Cochran', 'waku@mailinator.com', NULL, '$2y$10$.IQPaqWZEVrKuO.AgAnwdu9O43df6r9Uzsa7sCwbY4N/QEPABCmKy', '271', '168', 1, 'Female', '2017-05-29', 'Est tempor ut sint', '5251453645345', '2015-04-14', '20241214025954fbpjybwhdzcsxfjeme3c.png', 'Neces', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 1, NULL, '2024-12-14 08:18:05', '2024-12-14 11:01:41'),
(10, 'Sadia', 'Islam', 'sadia@gmail.com', NULL, '$2y$10$8XSntFVlrX6xb3cdbaklZOeXq233HFbW3yD.OaHKk.pdIWhTzyAVi', 'S1000', '142165', 2, 'Female', '2024-12-12', 'Islam', '01988674940', '2024-12-14', '20241214031908ijxcxrdlh17pah7bmgwk.png', 'lkjfds', NULL, NULL, NULL, NULL, NULL, NULL, 3, 0, 0, NULL, '2024-12-14 09:19:08', '2024-12-14 09:19:08'),
(11, 'Deanna Riley', 'Hays', 'xakimamy@mailinator.com', NULL, '$2y$10$eEKpy4np/SEIE8L7vgTa5ewgZtXy9e4fEf7TQ9/rqOI.jQIU0UAQq', NULL, NULL, NULL, 'Female', '1997-06-01', 'Rem minim unde praes', '888456546456456', '1977-09-15', '20241214062425tkchn5n6bohc8yqpglmj.jpg', NULL, 'Provident optio qu', 'Iusto maxime iste in', 'Veritatis nihil exce', 'Reprehenderit accus', 'In sit ducimus sed', 'Consequatur odio min', 2, 0, 0, NULL, '2024-12-14 12:08:10', '2024-12-14 12:24:25'),
(12, 'Stacey Black', 'Calhoun', 'byrekucyp@mailinator.com', NULL, '$2y$10$t3O7xjNRrRlhGBlhjm7.HOLfEd2n8xY7wfIteJtPamna7ZalE/mR2', NULL, NULL, NULL, 'Male', '2022-01-01', 'Cupidatat in ipsa e', '180456345645', '1992-09-12', '20241214060845mfzxrql7jyrndnyk3yk6.jpeg', NULL, 'Et labore sapiente s', 'Fugiat in velit est', 'Enim hic sapiente ul', 'Rerum mollit sint ma', 'Est dolorem aliquam', 'In exercitationem qu', 2, 0, 1, NULL, '2024-12-14 12:08:45', '2024-12-14 12:23:49');

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

CREATE TABLE `week` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Monday', NULL, NULL),
(2, 'Tuesday', NULL, NULL),
(3, 'Wednesday', NULL, NULL),
(4, 'Thursday', NULL, NULL),
(5, 'Friday', NULL, NULL),
(6, 'Saturday', NULL, NULL),
(7, 'Sunday', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_class_teacher`
--
ALTER TABLE `assign_class_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subject`
--
ALTER TABLE `class_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_subject_timetable`
--
ALTER TABLE `class_subject_timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `week`
--
ALTER TABLE `week`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_class_teacher`
--
ALTER TABLE `assign_class_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class_subject`
--
ALTER TABLE `class_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `class_subject_timetable`
--
ALTER TABLE `class_subject_timetable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `week`
--
ALTER TABLE `week`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
