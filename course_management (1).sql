-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2024 at 08:35 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint UNSIGNED NOT NULL,
  `teacher_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `teacher_id`, `name`, `email`, `email_verified_at`, `address`, `phone`, `department`, `designation`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'CSE 1232055', 'Eqramul Sir', 'eqramul@gmail.com', NULL, 'Dhaka', '01521415098', 'BSC in CSE', 'Junior Lecturer', '$2y$10$oVN4jEDQ6dgoS7EGAx4PKe4bwJEsEBvOQBzS.Qc9u/R7Znfx9trFe', NULL, '2023-08-03 12:40:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2a$12$lJ3XOEzRifJnhD.lXptO/etGwaTowILaSxsbk740YZDvRsHK84.Xa', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_messages`
--

CREATE TABLE `admin_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `banner` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_routines`
--

CREATE TABLE `class_routines` (
  `id` bigint UNSIGNED NOT NULL,
  `semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `decided_courses`
--

CREATE TABLE `decided_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `std_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `decided_courses`
--

INSERT INTO `decided_courses` (`id`, `std_id`, `course_code`, `created_at`, `updated_at`) VALUES
(1, '1', 'ccde12', '2023-07-09 03:38:21', '2023-07-09 03:38:21'),
(2, '1', 'sss12', '2023-07-09 03:38:21', '2023-07-09 03:38:21');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `type`, `credit`, `fee`, `duration`, `department`, `image`, `created_at`, `updated_at`) VALUES
(3, 'BBA 121', 'The main objective of this course is to introduce the fundamentals of computing devices and reinforce computer vocabulary, particularly with respect to personal use of computer hardware and software, the Internet, networking and mobile computing.', 'Regular', '3.00', '9000', '6 month', 'BBA', 'uploads/slider/1773302322630203.jpg', '2023-08-04 06:41:20', NULL),
(4, 'EEE 222', 'The main objective of this course is to introduce the fundamentals of computing devices and reinforce computer vocabulary, particularly with respect to personal use of computer hardware and software, the Internet, networking and mobile computing.', 'Regular', '3.00', '9000', '6 month', 'EEE', 'uploads/slider/1773302351666515.png', '2023-08-04 06:41:48', NULL),
(6, 'ENG 777', 'The main objective of this course is to introduce the fundamentals of computing devices and reinforce computer vocabulary, particularly with respect to personal use of computer hardware and software, the Internet, networking and mobile computing.', 'Regular', '3.00', '9000', '6 month', 'English', 'uploads/slider/1773916614165579.jpg', '2023-08-11 01:25:15', NULL),
(7, 'QQ', 'The main objective of this course is to introduce the fundamentals of computing devices and reinforce computer vocabulary, particularly with respect to personal use of computer hardware and software, the Internet, networking and mobile computing.', 'Regular', '1', '1', '1', 'Pharmacy', 'uploads/slider/1781649605451362.jpg', '2023-11-04 09:57:50', NULL),
(8, 'WW', 'The main objective of this course is to introduce the fundamentals of computing devices and reinforce computer vocabulary, particularly with respect to personal use of computer hardware and software, the Internet, networking and mobile computing.', '2', '2', '2', '2', 'EEE', 'uploads/slider/1781649727436157.webp', '2023-11-04 09:59:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'exam', 'exam@gmail.com', NULL, '$2a$12$wd2FImNrXQjagWZKchYKV.T62RgAIu5E8cAFhas3sg1OS8ulQsUfS', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `libraries`
--

CREATE TABLE `libraries` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_08_23_104739_create_sessions_table', 1),
(7, '2021_08_23_110415_create_admins_table', 1),
(8, '2021_12_03_125042_create_sliders_table', 1),
(9, '2022_04_01_133501_create_banners_table', 1),
(13, '2022_11_09_060350_create_contact_messages_table', 1),
(14, '2022_11_19_181033_create_exams_table', 1),
(15, '2022_11_20_154531_create_registers_table', 1),
(17, '2022_11_20_161041_create_libraries_table', 1),
(18, '2022_12_05_104233_create_payments_table', 1),
(19, '2022_12_13_041253_create_admin_messages_table', 1),
(24, '2022_10_27_085348_create_registration_forms_table', 5),
(28, '2023_07_09_062211_create_decided_courses_table', 7),
(31, '2023_08_03_162029_create_teachers_table', 8),
(32, '2022_11_20_160945_create_accounts_table', 9),
(34, '2022_11_03_040834_create_departments_table', 11),
(38, '2023_04_19_115735_create_taken_courses_table', 13),
(39, '2014_10_12_000000_create_users_table', 14),
(41, '2022_11_01_201903_create_certificate__items_table', 15),
(42, '2023_08_21_160158_create_class_routines_table', 16),
(43, '2023_10_31_121201_create_registration_time_handles_table', 17),
(44, '2023_11_05_063836_create_offered_courses_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `offered_courses`
--

CREATE TABLE `offered_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offered_courses`
--

INSERT INTO `offered_courses` (`id`, `name`, `type`, `credit`, `fee`, `duration`, `department`, `batch`, `section`, `created_at`, `updated_at`) VALUES
(4, 'CSE 123', 'Regular', '3.00', '9000', '6 month', 'CSE', '65', 'A', '2023-11-10 06:25:14', NULL),
(5, 'EEE 222', 'Regular', '1.50', '9000', '6 month', 'CSE', '70', 'B', '2023-11-10 06:25:45', NULL),
(6, 'Math 444', 'Regular', '3.00', '9000', '6 month', 'EEE', '45', 'A', '2023-11-10 06:26:25', NULL),
(7, 'Math 444', 'Regular', '3.00', '9000', '6 month', 'CSE', '77', 'B', '2023-11-10 06:34:55', NULL),
(8, 'aa', 'aa', 'EEE', '11', '11', 'EEE', '65', 'A', '2023-11-10 19:59:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `certificate_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `expected_time` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_name`, `email`, `phone`, `department`, `student_id`, `certificate_type`, `expected_time`, `fee`, `payment_method`, `account_number`, `transaction_id`, `created_at`, `updated_at`) VALUES
(1, 'Food', 'qaqa@gmail.com', '01521415098', 'CSE', 'CSE06507222', 'Summer 2023', '4.5', '13500', 'Nogod (01521415098)', '01521415025', 'aqwer', '2023-07-21 11:24:28', NULL),
(2, 'Tata', 'tata@gmail.com', '01511223344', 'ECE', 'CSE06507600', 'Fall 2023', '4.5', '13500', 'Nogod (01521415098)', '01521415025', 'AbzWSS2311', '2023-07-30 09:49:37', NULL),
(3, 'new one', 'newone@gmail.com', '01521415098', 'BBA', 'CSE00507600', 'Spring 2023', '3', '9000', 'Nogod (01521415098)', '01521415098', 'ddeew12', '2023-08-05 03:01:48', NULL),
(4, 'Moin', 'moin@gmail.com', '01521415098', 'CSE', 'CSE04507655', 'Spring 2023', '3', '9000', 'Nogod (01521415098)', '01521415098', 'AASWWSS', '2023-08-05 08:42:08', NULL),
(5, 'Jamal', 'jamal@gmail.com', '01521415098', 'EEE', 'EEE06507600', 'Summer 2023', '3', '9000', 'Nogod (01521415098)', '01521415098', 'AASWWSS', '2023-08-11 05:43:40', NULL),
(6, 'Ahsan', 'jamal@gmail.com', '01521415098', 'EEE', 'EEE06507600', 'Summer 2023', '6', '9000', 'Nogod (01521415098)', '01521415000', 'AASWWSS', '2023-11-08 22:04:57', NULL),
(7, 'Ahsan', 'jamal@gmail.com', '01521415098', 'EEE', 'EEE06507600', 'Spring 2023', '3', '9000', 'Nogod (01521415098)', '01521415098', 'ddeew12', '2023-11-10 13:13:33', NULL),
(8, 'Rafi', 'rafi@gmail.com', '01521421234', 'CSE', 'rafi@gmail.com', 'Spring 2023', '3', '9000', 'Nogod (01521415098)', '01521415098', 'AASWWSS', '2023-11-10 21:03:55', NULL),
(9, 'ert', 'ert@gmail.com', '015214715091', 'CSE', 'ert123', 'Spring 2023', '4.5', '13500', 'Nogod (01521415098)', '01521415098', 'xsadadsfs', '2024-02-27 12:57:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration_forms`
--

CREATE TABLE `registration_forms` (
  `id` bigint UNSIGNED NOT NULL,
  `student_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration_forms`
--

INSERT INTO `registration_forms` (`id`, `student_name`, `student_id`, `department`, `batch`, `section`, `email`, `phone`, `semester`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Shourov', 'CSE06507600', 'EEE', '33', 'A', 'show@gmail.com', '01511224332', 'Spring 2020', '12', '2023-04-24 02:20:24', '2023-04-30 00:54:08'),
(14, 'Fahim', 'CSE06507222', 'CSE', '64', 'A', 'qaqa@gmail.com', '01521415050', 'Summer 2023', '1', '2023-07-21 10:45:07', '2023-07-21 10:45:07'),
(15, 'Nitu', 'CSE00507600', 'BBA', '66', 'D', 'newone@gmail.com', '01521415098', 'Summer 2023', '1', '2023-08-05 02:04:43', '2023-08-05 02:04:43'),
(17, 'Abir', 'CSE00507600', 'BBA', '66', 'D', 'newone@gmail.com', '01521415098', 'Summer 2023', '1', '2023-08-05 02:27:48', '2023-08-05 02:27:48'),
(20, 'Moin', 'CSE04507655', 'CSE', '45', 'A', 'moin@gmail.com', '01521415098', 'Spring 2023', '1', '2023-08-05 08:35:41', '2023-08-05 08:35:41'),
(22, 'Nabil', 'CSE00507600', 'BBA', '66', 'C', 'newone@gmail.com', '01521415098', 'Fall 2023', '1', '2023-08-10 10:09:43', '2023-08-10 10:09:43'),
(25, 'Ahsan', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-08-11 05:40:52', '2023-08-11 05:40:52'),
(27, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-10-31 03:19:32', '2023-10-31 03:19:32'),
(28, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-10-31 05:11:53', '2023-10-31 05:11:53'),
(29, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-10-31 05:14:55', '2023-10-31 05:14:55'),
(30, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-10-31 14:12:26', '2023-10-31 14:12:26'),
(31, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-10-31 14:14:46', '2023-10-31 14:14:46'),
(32, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-04 11:22:22', '2023-11-04 11:22:22'),
(33, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-04 11:23:15', '2023-11-04 11:23:15'),
(34, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-04 22:00:10', '2023-11-04 22:00:10'),
(35, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-04 22:01:13', '2023-11-04 22:01:13'),
(36, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-04 22:02:22', '2023-11-04 22:02:22'),
(37, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-04 23:18:20', '2023-11-04 23:18:20'),
(38, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-05 00:24:58', '2023-11-05 00:24:58'),
(39, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-05 02:33:26', '2023-11-05 02:33:26'),
(40, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-05 02:36:47', '2023-11-05 02:36:47'),
(41, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Spring 2023', '1', '2023-11-09 06:08:12', '2023-11-09 06:08:12'),
(42, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 00:58:22', '2023-11-10 00:58:22'),
(43, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 01:02:19', '2023-11-10 01:02:19'),
(44, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 01:05:39', '2023-11-10 01:05:39'),
(45, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 01:07:29', '2023-11-10 01:07:29'),
(46, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 01:08:49', '2023-11-10 01:08:49'),
(47, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 01:09:44', '2023-11-10 01:09:44'),
(48, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 01:10:37', '2023-11-10 01:10:37'),
(49, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 06:28:34', '2023-11-10 06:28:34'),
(50, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 06:32:09', '2023-11-10 06:32:09'),
(51, 'Jamal', 'EEE06507600', 'EEE', '70', 'B', 'jamal@gmail.com', '01521415098', 'Summer 2023', '1', '2023-11-10 12:45:18', '2023-11-10 12:45:18'),
(52, 'Rafi', 'rafi@gmail.com', 'CSE', '65', 'A', 'rafi@gmail.com', '01521421234', 'Summer 2023', '1', '2023-11-10 20:54:34', '2023-11-10 20:54:34'),
(53, 'ert', 'ert123', 'CSE', 'ert@gmail.com', 'A', 'ert@gmail.com', '015214715091', 'Spring 2023', '1', '2024-02-22 13:04:28', '2024-02-22 13:04:28'),
(54, 'ert', 'ert123', 'CSE', 'ert@gmail.com', 'A', 'ert@gmail.com', '015214715091', 'Spring 2023', '1', '2024-02-22 13:09:38', '2024-02-22 13:09:38'),
(55, 'ert', 'ert123', 'CSE', 'ert@gmail.com', 'A', 'ert@gmail.com', '015214715091', 'Spring 2023', '1', '2024-02-27 12:41:51', '2024-02-27 12:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `registration_time_handles`
--

CREATE TABLE `registration_time_handles` (
  `id` bigint UNSIGNED NOT NULL,
  `enable` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registration_time_handles`
--

INSERT INTO `registration_time_handles` (`id`, `enable`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '2023-10-31 14:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Bjy9UHlGLelu1qKXtEeDsHb0eksXt1HriUwCns5B', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoib1k0RkN1YjFibUc1QjNBV3hlM250MEJTT2JTb2JtcGRlWk84c3hIdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC90ZWFjaGVyL2xpc3QiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRadXhtblMvWkxNcm8wb0REYTAzblEuaHFYWGlWRnhnWUcybFFVaC9tSXB1Q0NhQS5ENVdJSyI7czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTk6InBhc3N3b3JkX2hhc2hfYWRtaW4iO3M6NjA6IiQyYSQxMiRsSjNYT0V6UmlmSm5oRC5sWHB0Ty9ldEd3YVRvd0lMYVN4c2JrNzQwWVpEdlJzSEs4NC5YYSI7fQ==', 1709060879),
('ihaHAfwfLVPIBLbHAhPOmBYGpfs9TFmMicDmWLh6', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36 Edg/122.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNUVOanY5U2FBYTFVOHlwSjBOR1NYeFgwT21BRXVYNTdEdnZkaVRQUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZGRfcGF5bWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFp1eG1uUy9aTE1ybzBvRERhMDNuUS5ocVhYaVZGeGdZRzJsUVVoL21JcHVDQ2FBLkQ1V0lLIjt9', 1710188933);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taken_courses`
--

CREATE TABLE `taken_courses` (
  `id` bigint UNSIGNED NOT NULL,
  `std_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_semester` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_batch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `allow_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taken_courses`
--

INSERT INTO `taken_courses` (`id`, `std_id`, `course_semester`, `course_name`, `credit`, `type`, `course_batch`, `allow_status`, `marks`, `created_at`, `updated_at`) VALUES
(50, 'rafi@gmail.com', 'Summer 2023', 'CSE 123', '3.00', 'Regular', '66', '1', '25', '2023-11-10 20:54:34', '2024-01-28 13:02:00'),
(51, 'rafi@gmail.com', 'Summer 2023', 'EEE 222', '1.50', 'Regular', '66', '1', '80', '2023-11-10 20:54:34', '2024-01-28 13:02:38'),
(55, 'ert123', 'Spring 2023', 'CSE 123', '3', 'Irrigular', '67', '1', '42', '2024-02-27 12:41:51', '2024-02-27 12:54:48'),
(56, 'ert123', 'Spring 2023', 'EEE 222', '1.50', 'Regular', '65', '1', '80', '2024-02-27 12:41:51', '2024-02-27 12:52:23');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint UNSIGNED NOT NULL,
  `teacher_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_id`, `name`, `email`, `email_verified_at`, `address`, `phone`, `department`, `designation`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'CSE 1232015', 'Adnan', 'adnan@gmail.com', NULL, 'Sherpur', '01521315522', 'BSC in CSE', 'Junior Lecturer', '123456789', NULL, NULL, NULL, '2023-08-03 11:58:03', NULL),
(2, 'CSE 1232017', 'Rasel Sir', 'rasel@gmail.com', NULL, 'Dhaka', '01521214432', 'BSC in CSE', 'Junior Lecturer', '123456789', NULL, NULL, NULL, '2023-08-03 12:11:42', NULL),
(3, 'CSE 1232022', 'aaa', 'aaa@gmail.com', NULL, 'Dhaka', '01521415098', 'BSC in EEE', 'Junior Lecturer', '123456789', NULL, NULL, NULL, '2023-08-03 12:18:07', NULL),
(4, 'CSE 1232013', 'qq', 'qq@gmail.com', NULL, 'Dhaka', '01521415098', 'BSC in CSE', 'Junior Lecturer', '$2y$10$KR5aYalbG7ksCklOfTmgLuTh6p839ZuJKRwtQrg78HMX9/8e1gF8W', NULL, NULL, NULL, '2023-08-03 12:24:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `student_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `name`, `department`, `batch`, `section`, `phone`, `email`, `email_verified_at`, `address`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(14, 'rafi@gmail.com', 'Rafi', 'CSE', '65', 'A', '01521421234', 'rafi@gmail.com', NULL, 'Dhaka', '$2y$10$FVCSFjWfkg3itcX/HkRVce1/L2NjE4ld66JC7miozh1ykyZbyhYny', NULL, NULL, NULL, '2023-11-10 20:52:15', NULL),
(15, 'aaa', 'A', 'EEE', 'a@gmail.com', 'A', '015214715096', 'a@gmail.com', NULL, 'rt', '$2y$10$oOVzU3CE6iFL9Bks308H0OTxOP3q1WP6Ut8yBKO/t91zDS419qMMK', NULL, NULL, NULL, '2024-01-26 23:49:11', NULL),
(18, 'aaag', 'EE', 'CSE', 'a@gmail.com', 'A', '015214715098', 'ang@gmail.com', NULL, 'rt', '$2y$10$A54yn6SFC0imr1TyiEtqOOzgwBpIRpOI0vXTJb17wBx2Y9.LnjLgu', NULL, NULL, NULL, '2024-01-26 23:54:32', NULL),
(19, 'abc123', 'abc', 'CSE', 'abc@gmail.com', 'A', '015214715093', 'abc@gmail.com', NULL, 'rt', '$2y$10$xUIQGSuDEyUS4Ybiqu8M0.WfbeJ8jp.zwPwghyFH98AxZF17dBTn.', NULL, NULL, NULL, '2024-01-27 10:35:26', NULL),
(20, 'dd', 'dd', 'CSE', 'ddd', 'dd', 'dd', 'add@gmail.com', NULL, 'ddd', '$2y$10$cA.r2L0.ixyELPoc45WFu.ddOxOo5NR8pDkSHtJ0nXMi30PhkXyEm', NULL, NULL, NULL, '2024-01-27 10:40:14', NULL),
(21, 'ert123', 'ert', 'CSE', 'ert@gmail.com', 'A', '015214715091', 'ert@gmail.com', NULL, 'rtert', '$2y$10$ZuxmnS/ZLMro0oDDa03nQ.hqXXiVFxgYG2lQUh/mIpuCCaA.D5WIK', NULL, NULL, NULL, '2024-01-28 09:16:06', NULL),
(22, 'CSE 123', 'kobir', 'CSE', '55', 'A', '015214715096', 'kobir@gmail.com', NULL, 'mirpur', '$2y$10$C3LMRJdVNqm.S9yMnfFaruOzBIjPyWsLJG02wHRmnjlZy2taGJM4e', NULL, NULL, NULL, '2024-01-28 13:19:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `accounts_teacher_id_unique` (`teacher_id`),
  ADD UNIQUE KEY `accounts_email_unique` (`email`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_messages`
--
ALTER TABLE `admin_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routines`
--
ALTER TABLE `class_routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `decided_courses`
--
ALTER TABLE `decided_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `exams_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `libraries`
--
ALTER TABLE `libraries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `libraries_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offered_courses`
--
ALTER TABLE `offered_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registers_email_unique` (`email`);

--
-- Indexes for table `registration_forms`
--
ALTER TABLE `registration_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration_time_handles`
--
ALTER TABLE `registration_time_handles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taken_courses`
--
ALTER TABLE `taken_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_teacher_id_unique` (`teacher_id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_student_id_unique` (`student_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_messages`
--
ALTER TABLE `admin_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_routines`
--
ALTER TABLE `class_routines`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `decided_courses`
--
ALTER TABLE `decided_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `libraries`
--
ALTER TABLE `libraries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `offered_courses`
--
ALTER TABLE `offered_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration_forms`
--
ALTER TABLE `registration_forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `registration_time_handles`
--
ALTER TABLE `registration_time_handles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taken_courses`
--
ALTER TABLE `taken_courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
