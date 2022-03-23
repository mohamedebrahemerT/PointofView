-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2022 at 10:11 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('admin','superadmin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `phone`, `image`, `type`, `created_at`, `updated_at`, `group_id`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$CFwL0JZz.LqFlYECIKhVpeqaJk1cf4QckFbMBRF6m1CU0Sh3mMdMK', NULL, NULL, 'superadmin', NULL, '2021-12-30 09:57:43', 1),
(2, 'mohamed', 'zz@zz.com', '$2y$10$LovSqCvt7cYzDRt3l1QvreCXl132XyGV1ArOwYkp1YzbmbVC6qkPi', '0555555', NULL, 'admin', '2022-01-04 18:53:05', '2022-01-04 18:53:05', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_groups`
--

CREATE TABLE `admin_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_groups`
--

INSERT INTO `admin_groups` (`id`, `group_name`, `admin_id`, `created_at`, `updated_at`) VALUES
(1, 'السوبر ادمن', 1, '2021-12-30 09:43:55', '2022-01-03 19:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `admin_group_roles`
--

CREATE TABLE `admin_group_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_groups_id` bigint(20) UNSIGNED DEFAULT NULL,
  `show` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `add` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `edit` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `delete` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_group_roles`
--

INSERT INTO `admin_group_roles` (`id`, `name`, `admin_groups_id`, `show`, `add`, `edit`, `delete`, `created_at`, `updated_at`) VALUES
(143, 'group', 1, 'no', 'no', 'no', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(144, 'dashboard', 1, 'yes', 'no', 'no', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(145, 'users', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(146, 'Sliders', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(147, 'Department', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(148, 'Courses', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(149, 'news', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(150, 'Certificate', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(151, 'UserCourses', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(152, 'ContactUs', 1, 'yes', 'yes', 'yes', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(153, 'subscriptions', 1, 'yes', 'yes', 'yes', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(154, 'Reports', 1, 'yes', 'yes', 'yes', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(155, 'AdminNotifications', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(156, 'admins', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(157, 'AdminGroup', 1, 'yes', 'yes', 'yes', 'yes', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(158, 'settings', 1, 'yes', 'no', 'yes', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54'),
(159, 'admin', 1, 'no', 'no', 'no', 'no', '2022-01-03 19:25:54', '2022-01-03 19:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('User','AllUsers','All') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `type`, `user_id`, `message`, `created_at`, `updated_at`) VALUES
(13, 'User', 2, '<p>السلام عليكم مساء الخير</p>', '2022-01-03 22:24:41', '2022-01-03 22:24:41');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `desc`, `img`, `created_at`, `updated_at`) VALUES
(1, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(2, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(3, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(4, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(5, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(6, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(7, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(8, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(9, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(10, 'عنوان الموضوع', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', 'Forentend/img/blog.jpg', '2021-12-28 19:23:21', '2021-12-28 19:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `name`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'شهادة', '<!doctype html>\n<html lang=\"en\">\n\n<head>\n    <!-- Required meta tags -->\n    <meta charset=\"utf-8\">\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">\n\n    <!-- Bootstrap CSS -->\n    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\">\n    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.5.0/css/all.css\"\n          integrity=\"sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU\" crossorigin=\"anonymous\">\n    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css\">\n    <link rel=\"stylesheet\"\n          href=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css\">\n\n    <link rel=\"stylesheet\" href=\"https://learning.magic-chat.com/Forentend/css/icons.css\">\n    <link rel=\"stylesheet\" href=\"https://learning.magic-chat.com/Forentend/css/style.css\">\n    <title>مؤسسة الغد أجمل</title>\n</head>\n\n<body>\n\n<!--start top header-->\n\n<!--end top header-->\n<!--start header-->\n\n<!--end header-->\n\n<section class=\"p-5 bg-light login\">\n    <div class=\"container\">\n        <div class=\"row justify-content-center\">\n            <table class=\"cert\">\n                <tr>\n                    <td align=\"center\" class=\"crt_logo\">\n                        <img src=\"https://learning.magic-chat.com/Forentend/img/logo-footer.png\" alt=\"logo\">\n\n                    </td>\n                </tr>\n                <tr>\n                    <td align=\"center\">\n                        <h1 class=\"crt_title\">شهادة حضور\n                            <h2>هذه الشهادة مقدمة للمتدرب</h2>\n                            <h1 class=\"colorGreen crt_user\" style=\"font-size: 30px!important;\">{user_name}</h1>\n                            <h3 class=\"afterName\">على اكتمال {course_name}\n                            </h3>\n                            <h3> {course_date} </h3>\n                        </h1>\n                    </td>\n                </tr>\n                <tr class=\"tfooter\">\n                    <td align=\"center\">\n                        <h3>إسم المتدرب: {user_name}</h3>\n                        <h3>اسم القسم: {department_name}</h3>\n                        <h3>إسم الدورة: {course_name}</h3>\n                    </td>\n                </tr>\n            </table>\n        </div>\n\n    </div>\n\n</section>\n\n<!--start footer-->\n\n<!--end footer-->\n\n\n<!-- jQuery first, then Popper.js, then Bootstrap JS -->\n<script src=\"https://code.jquery.com/jquery-3.4.1.min.js\">\n</script>\n<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>\n<script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js\">\n</script>\n<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js\">\n</script>\n<script src=\"https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js\"></script>\n\n<script src=\"https://learning.magic-chat.com/Forentend/js/custome.js\"></script>\n\n</body>\n\n</html>\n', 1, '2021-12-30 14:25:48', '2022-01-04 17:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_replied` tinyint(4) NOT NULL DEFAULT 0,
  `reply` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `address`, `phone`, `content`, `is_replied`, `reply`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'mohamedchi2013@gmail.com', 'الشرقية', '01149880297', 'sdasd', 1, '<p>ggfdfgdfg</p>', '2021-12-30 13:34:22', '2021-12-30 14:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `what_you_will_learn` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `registered_users_count` int(11) DEFAULT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `certificate` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `department_id`, `title`, `desc`, `what_you_will_learn`, `img`, `price`, `registered_users_count`, `lang`, `duration`, `certificate`, `created_at`, `updated_at`) VALUES
(1, 1, 'مقدمة فى التسويق عبر وسائل التواصل الاجتماعى', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', '<h4 class=\"mb-3\">ما سوف تتعلم فى هذه الدورة</h4>\r\n\r\n            <div class=\"row courseitems\">\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>التسويق الالكترونى</li>\r\n                                                <li>صفحات ومجموعات الفيس بوك</li>\r\n                                                <li>منصات تويتر ولينكد ان</li>\r\n\r\n                                            </ul>\r\n                                        </div>\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>منصات سناب شات</li>\r\n                                                <li>الاعلانات المدفوعة والمميزة</li>\r\n                                                <li>الوصول للجمهور المستهدف</li>\r\n                                            </ul>\r\n                                        </div>\r\n                                    </div>', 'Courses/c1.jpg', 4492, 6, 'العربية', 10, 1, '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(2, 1, 'مقدمة فى التسويق عبر وسائل التواصل الاجتماعى', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', '<h4 class=\"mb-3\">ما سوف تتعلم فى هذه الدورة</h4>\r\n\r\n            <div class=\"row courseitems\">\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>التسويق الالكترونى</li>\r\n                                                <li>صفحات ومجموعات الفيس بوك</li>\r\n                                                <li>منصات تويتر ولينكد ان</li>\r\n\r\n                                            </ul>\r\n                                        </div>\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>منصات سناب شات</li>\r\n                                                <li>الاعلانات المدفوعة والمميزة</li>\r\n                                                <li>الوصول للجمهور المستهدف</li>\r\n                                            </ul>\r\n                                        </div>\r\n                                    </div>', 'Courses/c1.jpg', 7751, 6, 'العربية', 10, 1, '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(3, 2, 'مقدمة فى التسويق عبر وسائل التواصل الاجتماعى', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', '<h4 class=\"mb-3\">ما سوف تتعلم فى هذه الدورة</h4>\r\n\r\n            <div class=\"row courseitems\">\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>التسويق الالكترونى</li>\r\n                                                <li>صفحات ومجموعات الفيس بوك</li>\r\n                                                <li>منصات تويتر ولينكد ان</li>\r\n\r\n                                            </ul>\r\n                                        </div>\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>منصات سناب شات</li>\r\n                                                <li>الاعلانات المدفوعة والمميزة</li>\r\n                                                <li>الوصول للجمهور المستهدف</li>\r\n                                            </ul>\r\n                                        </div>\r\n                                    </div>', 'Courses/c1.jpg', 6981, 6, 'العربية', 10, 1, '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(4, 2, 'مقدمة فى التسويق عبر وسائل التواصل الاجتماعى', '<p>\r\n                                    مرحبًا بكم في أفضل مورد على الإنترنت لتعلم نُشر هذا البرنامج في أبريل 2019 ،\r\n                                    وهو جديد تمامًا ويغطي الأحدث في . تتبع هذه الدورة نفس منهج بالضبط الذي يتبعه\r\n                                    طلاب المعسكر التدريبي الشخصي في المملكة ، حيث استمر الطلاب في الحصول\r\n                                    على وظائف في أماكن مثل هذه هي دورة الأكثر مصقولة عبر الإنترنت ، وهي الدورة\r\n                                    التدريبية الوحيدة التي تستند إلى منهج الذي تم تجربته واختباره في الفصل\r\n                                    الدراسي.\r\n\r\n                                </p>\r\n\r\n                                <p>\r\n                                    تقوم هذه الدورة التدريبية بتكوين مفاهيم واحدة في كل مرة ، مما يعزز كل موضوع\r\n                                    جديد بممارسة أو مشروع مصمم بخبرة لاختبار معرفتك. ويشمل مجموعة كبيرة من\r\n                                    التدريبات والمشاريع والألعاب الجميلة التي نقوم بإنشائها معًا من الصفر.\r\n                                    أحيانًا نخلط بين الأشياء ونمنحك تطبيق مكسور ونطلب منك إصلاحه أو تحسين الكود.\r\n                                    تحقق من الفيديو الترويجي لرؤية اثنين من التدريبات بالطبع. تتوج الدورة\r\n                                    التدريبية بمشروع كابستون الضخم ، وهو أكبر مشروع قمت بإنشائه في أي دورة\r\n                                    تدريبية على الإنترنت. أنا متحمس للغاية حيال ذلك.\r\n                                </p>', '<h4 class=\"mb-3\">ما سوف تتعلم فى هذه الدورة</h4>\r\n\r\n            <div class=\"row courseitems\">\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>التسويق الالكترونى</li>\r\n                                                <li>صفحات ومجموعات الفيس بوك</li>\r\n                                                <li>منصات تويتر ولينكد ان</li>\r\n\r\n                                            </ul>\r\n                                        </div>\r\n                                        <div class=\"col\">\r\n                                            <ul class=\"list-unstyled p-0\">\r\n                                                <li>منصات سناب شات</li>\r\n                                                <li>الاعلانات المدفوعة والمميزة</li>\r\n                                                <li>الوصول للجمهور المستهدف</li>\r\n                                            </ul>\r\n                                        </div>\r\n                                    </div>', 'Courses/c1.jpg', 4194, 6, 'العربية', 10, 1, '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(8, 1, 'دورة فشجول بيزك', '<p>دورة فشجول بيزك</p>', '<p>دورة فشجول بيزك</p>', 'Courses/1641256013.jpg', 10, NULL, '10', 10, 1, '2022-01-03 22:26:53', '2022-01-03 22:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courses_count` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `courses_count`, `created_at`, `updated_at`) VALUES
(1, 'دورات صحية', 1, '2021-12-28 19:23:21', '2022-01-03 22:26:53'),
(2, 'دورات مهنية', 0, '2021-12-28 19:23:21', '2021-12-30 13:32:57');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_27_095621_create_departments_table', 1),
(6, '2021_12_27_095748_create_courses_table', 1),
(7, '2021_12_27_103128_create_blogs_table', 1),
(8, '2021_12_27_103940_create_contact_us_table', 1),
(9, '2021_12_27_104252_create_sliders_table', 1),
(10, '2021_12_27_104724_create_settings_table', 1),
(11, '2021_12_27_105310_create_certificates_table', 1),
(12, '2021_12_27_105444_create_user_courses_table', 1),
(13, '2021_12_28_184948_create_subscriptions_table', 1),
(14, '2021_12_30_102607_create_admins_table', 2),
(15, '2021_12_30_110657_create_admin_groups_table', 3),
(16, '2021_12_30_110951_create_admin_group_roles_table', 3),
(17, '2021_12_30_111155_add_group_id_to_admins', 4),
(18, '2021_12_30_121613_add_status_to_users', 5),
(19, '2021_12_30_171938_create_admin_notifications_table', 6),
(20, '2021_12_30_173259_add_name_to_settings', 7),
(24, '2021_12_31_055725_add_status_to_user_courses', 8),
(25, '2022_01_04_005454_add__whatsapp_to_settings', 9),
(27, '2022_01_03_223329_create_user_coursescertificates_table', 10),
(28, '2022_01_04_203013_add_blogstatus_to_settings', 11),
(30, '2022_01_04_210223_add__fivacon_to_settings', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mohamedchi2013@gmail.com', '1R2MAaGKINgh1rAZ1a3ppBiJvMpwT15oXE2KuFuLFTPeqv9xKliBQ9RRMZptJdGy', '2021-12-29 02:30:57'),
('mohamedchi2013@gmail.com', 'fwa2otYdKpkSVTWQfvWjfDRaLGxF3LMqQQNJVjbnQMLt6IKt1dV7tjj10ZlsGvjO', '2021-12-29 02:31:50'),
('mohamedchi2013@gmail.com', '3AvArEJFZPtO60xeDpIgX5xvxoZYflFwzSXXtPW80Kpv5249qYsOAkMNIS9OZyQR', '2021-12-29 02:32:34'),
('mohamedchi2013@gmail.com', '6MTWjySNOFFwy6G8Mk4tQiUjmmEms33HzvgTUdMSGIrtGuOTEHV1srZ7p3xAnbgX', '2021-12-29 02:32:53'),
('mohamedchi2013@gmail.com', 'fPS9PZIv6oHJubVgb2KO39OZOW9O0M8enxv5SUonqpHRSR3JlH4TFNpeeUL9zN1a', '2021-12-29 02:33:28'),
('mohamedchi2013@gmail.com', 'vLlZHhSq24DUSKGoGteOJF4fXXrzWwLFXHeoxF0HL02e6XSxFG7PTDWMxxX7Cm6M', '2021-12-29 02:33:53'),
('mohamedchi2013@gmail.com', 'bczPNq352G3zktHtsSGMW8dB1a5cnaa2qCb6TojOfSIHVyxPZfgoZkflndoAGM9l', '2021-12-29 02:49:32'),
('mohamedchi2013@gmail.com', 'lHqSYjyHACwhq7oVnawG5B968pwTQUIW6DFBRwL9wfTlsBzwp2QZEJnCkoMkxKe1', '2021-12-29 08:06:17'),
('mohamedchi2013@gmail.com', 'dwYSbiXHI0TUpLqPuJW5cWXZ5sguRrrVfR6giIoyEuEuib6GwYZi45dKsRfurrI5', '2021-12-29 08:07:09'),
('admin@admin.com', '0VG4DHVMj6w2g2Tejyw0I2uUZ2fwmD7gcYr5NL3jX55Mpzu4zRc7cA4t2vTTvxzS', '2021-12-30 09:53:57'),
('admin@admin.com', 'ijHXJJKWGklnqgcPULGBAoFm9evyVnvtLMcy2kqJTgEMGDkkhIqR96EIiQ2Jz5Uk', '2021-12-30 09:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `What_Makes_Us_unique_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `What_Makes_Us_unique_desc` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Whatsapp_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `snapchat_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Blogstatus` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Fivacon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `phone`, `email`, `address`, `facebook_link`, `twitter_link`, `linkedin_link`, `copy_right`, `about_title`, `about_desc`, `about_img`, `What_Makes_Us_unique_title`, `What_Makes_Us_unique_desc`, `created_at`, `updated_at`, `name`, `logo_footer`, `Whatsapp_link`, `insta_link`, `snapchat_link`, `Blogstatus`, `Fivacon`) VALUES
(1, 'Setting/1641329309.png', 966123456, 'info@learningek.com', 'الرياض . المملكة العربية السعودية', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', '©2021All Rights Reserved', 'مؤسسة الغد أجمل', '<p>لا شك أن الحصول على شهادة علمية أمر ضروري لجميع المهن المرتبطة بمجال الطب والصحة, وبالنسبة لمن يفكر في الدخول إلى هذا المجال بدون الحصول على درجة علمية، فهناك شهادات ,دبلومات ودورات قصيرة متوفرة هنا تساعدك كي تصبح مساعدًا طبيًا أو إداريًا. فيمكنك من تأسيس نفسك عن طريق هذه الدورات والشهادات ومن ثم دراسة شهادة علمية لاحقا او اذا كنت تملك شهادة علمية فيوجد ايضا دورات تطور مهاراتك وتكسبك خبرات جديدة مثل دورات العلاج الطبيعي ودورات الرياضة واللياقة البدنية وبرامج الإسعافات الأولية. كما ان ليمون يحتوي على قسم خاص بالوظائف في هذا المجال, يمكنك مشاهدة الوظائف في مجال الطب والصحة</p>', 'Setting/1641329533.webp', 'ما يميزنا', '<p>لا شك أن الحصول على شهادة علمية أمر ضروري لجميع المهن المرتبطة بمجال الطب والصحة, وبالنسبة لمن يفكر في الدخول إلى هذا المجال بدون الحصول على درجة علمية، فهناك شهادات ,دبلومات ودورات قصيرة متوفرة هنا تساعدك كي تصبح مساعدًا طبيًا أو إداريًا. فيمكنك من تأسيس نفسك عن طريق هذه الدورات والشهادات ومن ثم دراسة شهادة علمية لاحقا او اذا كنت تملك شهادة علمية فيوجد ايضا دورات تطور مهاراتك وتكسبك خبرات جديدة مثل دورات العلاج الطبيعي ودورات الرياضة واللياقة البدنية وبرامج الإسعافات الأولية. كما ان ليمون يحتوي على قسم خاص بالوظائف في هذا المجال, يمكنك مشاهدة الوظائف في مجال الطب والصحة</p>', '2021-12-28 19:23:21', '2022-01-04 19:08:54', 'مؤسسة الغد أجمل', 'Setting/1641329370.png', 'http://127.0.0.1:8000/Settings/edit', 'http://127.0.0.1:8000/Settings/edit', 'http://127.0.0.1:8000/Settings/edit', '1', 'Setting/1641330534.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `desc`, `img`, `url`, `created_at`, `updated_at`) VALUES
(2, '', '', 'Slider/banner2.jpg', '', '2021-12-28 19:23:21', '2021-12-28 19:23:21'),
(13, NULL, NULL, 'Slider/1640870629.jpg', NULL, '2021-12-30 11:23:49', '2021-12-30 11:23:49'),
(15, NULL, NULL, 'Slider/1641329732.webp', NULL, '2022-01-04 18:55:32', '2022-01-04 18:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mohamedchi2013@gmail.com', '2021-12-30 15:07:19', '2021-12-30 15:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(2, 'محمد', 'ابراهيم', 1149880297, 'mohamedchi2013@gmail.com', NULL, '$2y$10$0dGuIb0mcHXfi.OgtLp4IuwAbAYL/vVgNu8zKwQOjM7h9AQU92dya', NULL, '2021-12-29 08:03:34', '2021-12-30 12:17:44', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_courses`
--

CREATE TABLE `user_courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `certificate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `National_ID` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationaly` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_num` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Where_Didyou_SeeThe_Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('pending','accepted','completed','canceled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `certificate_status` enum('','requested','accpted','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_courses`
--

INSERT INTO `user_courses` (`id`, `course_id`, `user_id`, `certificate_id`, `National_ID`, `name_ar`, `name_en`, `nationaly`, `Qualification`, `phone`, `sex`, `org_num`, `Where_Didyou_SeeThe_Address`, `created_at`, `updated_at`, `status`, `certificate_status`) VALUES
(18, 1, 2, 1, '02255555', 'محمد ابراهيم رفعت', 'mohamed ebrahem refaat', 'مصري', 'كلية الحاسبات والمعلموات', 1149880297, 'ذكر', '255555', 'واتساب', '2022-01-03 22:28:33', '2022-01-04 17:58:22', 'accepted', 'accpted'),
(19, 8, 2, 1, 'محمد ابراهيم رفعت', 'محمد    ابراهيم', 'fdgdfg', 'fdgdfg', 'dfgdfg', 1149880297, 'ذكر', 'bbbvcb121212', 'واتساب', '2022-01-04 18:22:58', '2022-01-04 18:24:03', 'accepted', 'accpted');

-- --------------------------------------------------------

--
-- Table structure for table `user_coursescertificates`
--

CREATE TABLE `user_coursescertificates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_courses_id` bigint(20) UNSIGNED DEFAULT NULL,
  `certificate_id` bigint(20) UNSIGNED DEFAULT NULL,
  `National_ID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationaly` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `org_num` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Where_Didyou_SeeThe_Address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_status` enum('requested','accpted','rejected') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_coursescertificates`
--

INSERT INTO `user_coursescertificates` (`id`, `course_id`, `user_id`, `user_courses_id`, `certificate_id`, `National_ID`, `name_ar`, `name_en`, `nationaly`, `Qualification`, `phone`, `sex`, `org_num`, `Where_Didyou_SeeThe_Address`, `certificate_status`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 18, 1, '02255555', 'محمد ابراهيم رفعت', 'mohamed ebrahem refaat', 'مصري', 'محمد ابراهيم رفعت', '1149880297', 'ذكر', '255555', 'واتساب', 'accpted', '2022-01-03 22:30:00', '2022-01-04 17:58:22'),
(4, 8, 2, 19, 1, 'محمد ابراهيم رفعت', 'محمد    ابراهيم', 'fdgdfg', 'fdgdfg', 'محمد    ابراهيم', '1149880297', 'ذكر', 'bbbvcb121212', 'واتساب', 'accpted', '2022-01-04 18:23:47', '2022-01-04 18:24:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_phone_unique` (`phone`),
  ADD KEY `admins_group_id_foreign` (`group_id`);

--
-- Indexes for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_groups_admin_id_foreign` (`admin_id`);

--
-- Indexes for table `admin_group_roles`
--
ALTER TABLE `admin_group_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_group_roles_admin_groups_id_foreign` (`admin_groups_id`);

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_notifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_department_id_foreign` (`department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_courses_course_id_foreign` (`course_id`),
  ADD KEY `user_courses_user_id_foreign` (`user_id`),
  ADD KEY `user_courses_certificate_id_foreign` (`certificate_id`);

--
-- Indexes for table `user_coursescertificates`
--
ALTER TABLE `user_coursescertificates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_coursescertificates_course_id_foreign` (`course_id`),
  ADD KEY `user_coursescertificates_user_id_foreign` (`user_id`),
  ADD KEY `user_coursescertificates_user_courses_id_foreign` (`user_courses_id`),
  ADD KEY `user_coursescertificates_certificate_id_foreign` (`certificate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_groups`
--
ALTER TABLE `admin_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_group_roles`
--
ALTER TABLE `admin_group_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_courses`
--
ALTER TABLE `user_courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user_coursescertificates`
--
ALTER TABLE `user_coursescertificates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `admin_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_groups`
--
ALTER TABLE `admin_groups`
  ADD CONSTRAINT `admin_groups_admin_id_foreign` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_group_roles`
--
ALTER TABLE `admin_group_roles`
  ADD CONSTRAINT `admin_group_roles_admin_groups_id_foreign` FOREIGN KEY (`admin_groups_id`) REFERENCES `admin_groups` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD CONSTRAINT `admin_notifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_courses`
--
ALTER TABLE `user_courses`
  ADD CONSTRAINT `user_courses_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_courses_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_coursescertificates`
--
ALTER TABLE `user_coursescertificates`
  ADD CONSTRAINT `user_coursescertificates_certificate_id_foreign` FOREIGN KEY (`certificate_id`) REFERENCES `certificates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_coursescertificates_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_coursescertificates_user_courses_id_foreign` FOREIGN KEY (`user_courses_id`) REFERENCES `user_courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_coursescertificates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
