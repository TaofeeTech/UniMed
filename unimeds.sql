-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2024 at 09:53 PM
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
-- Database: `unimeds`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `profile_image`, `email_verified_at`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$12$N.0O3Zg1YU246PsD1uoajObE95CFJ0grWwNQdV546Ixxr3xMXpbpa', NULL, '2024-10-01 03:26:25', '2024-10-01 03:26:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Clinical', NULL, '2024-10-02 05:56:32'),
(2, 'Non Clinical ', NULL, '2024-10-02 05:56:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `subcategory_id` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` text DEFAULT NULL,
  `hod_name` varchar(255) DEFAULT NULL,
  `hod_degrees` varchar(255) DEFAULT NULL,
  `hod_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `category_id`, `subcategory_id`, `short_description`, `description`, `image`, `hod_name`, `hod_degrees`, `hod_image`, `created_at`, `updated_at`) VALUES
(1, 'Dematology', '1', '2', 'shoet', '<p>Long</p>', 'upload/departments/1811956894056813.jpg', 'Chibuzor', 'MBBS', 'upload/departments/HOD/1811956894175271.jpg', '2024-10-03 10:33:35', '2024-10-04 04:28:02'),
(2, 'CLEANERS', '2', NULL, 'SHORT', '<p>THIS ONE IS A LONG ONE</p><p>&nbsp;</p>', 'upload/departments/1811956894056813.jpg', 'TEST', 'MPS', 'upload/departments/HOD/1811956894175271.jpg', '2024-10-04 03:05:39', '2024-10-04 03:56:18'),
(3, 'Ear, Nose', '1', NULL, 'short', '<p>long long long description</p>', 'upload/departments/1811956894056813.jpg', 'wesiledoye', 'b.sc, m.sc', 'upload/departments/HOD/1813085421614228.jpg', '2024-10-16 12:33:01', '2024-10-16 14:36:40'),
(4, 'cames bond', '1', NULL, 'dddd', '<p>ddd</p>', 'upload/departments/1813101118071792.jfif', 'dd', 'dd', 'upload/departments/HOD/1813101118315542.png', '2024-10-16 18:45:22', '2024-10-16 18:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `department_teams`
--

CREATE TABLE `department_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `department_id` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_teams`
--

INSERT INTO `department_teams` (`id`, `name`, `department_id`, `role`, `image`, `created_at`, `updated_at`) VALUES
(15, 'Check', '1', 'Dr', 'upload/departments/team/1811962926817485.jpg', '2024-10-04 05:17:48', '2024-10-04 05:17:48'),
(16, 'Hmmm', '1', 'Dennis', 'upload/departments/team/1811963025572147.jpg', '2024-10-04 05:17:48', '2024-10-04 05:17:48'),
(17, 'Nawa', '1', 'Lets see', 'upload/departments/team/1811963097912044.jpg', '2024-10-04 05:17:48', '2024-10-04 05:17:48'),
(20, 'wellsfergo', '3', 'nurse', 'upload/departments/team/1813081520539388.jpg', '2024-10-16 14:36:40', '2024-10-16 14:36:40'),
(21, 'Mrs Denis', '3', 'Doctor', 'upload/departments/team/1813081520595282.jpg', '2024-10-16 14:36:40', '2024-10-16 14:36:40'),
(23, 'wellsfergo', '4', 'nurse', 'upload/departments/team/1813101118513759.png', '2024-10-16 18:46:29', '2024-10-16 18:46:29');

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `gallery_category_id` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `gallery_category_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Appendicite', '1', 'upload/gallery/1811691731889657.png', '2024-10-01 05:24:35', '2024-10-01 05:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gallery_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `gallery_category`, `created_at`, `updated_at`) VALUES
(1, 'Surgery', '2024-10-01 05:23:51', NULL);

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_18_152439_create_admins_table', 1),
(6, '2024_03_11_081558_create_sellers_table', 1),
(7, '2024_10_01_043950_create_settings_table', 2),
(8, '2024_10_01_053822_create_services_table', 3),
(9, '2024_10_01_061501_create_gallery_categories_table', 4),
(10, '2024_10_01_061523_create_galleries_table', 4),
(11, '2024_10_02_055806_create_contacts_table', 5),
(12, '2024_10_02_063834_create_categories_table', 6),
(13, '2024_10_02_064259_create_sub_categories_table', 7),
(14, '2024_10_03_103504_create_departments_table', 8),
(15, '2024_10_03_105322_create_department_teams_table', 9);

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
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `profile_image`, `email_verified_at`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Seller', 'seller@gmail.com', NULL, NULL, '$2y$12$wUt2IhwCNYNQuF1eC9T1q.gPziIKqCHtXGd.H.e/Ul2umjJDL9Pxe', NULL, '2024-10-01 03:25:45', '2024-10-01 03:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `icon`, `image`, `short_description`, `description`, `created_at`, `updated_at`) VALUES
(2, 'All Surgical Sub-specialties', 'fa fa-user-md', NULL, 'Comprehensive care across various surgical fields, ensuring precise treatment and recovery.', '<p>Comprehensive care across various surgical fields, ensuring precise treatment and recovery.</p>', '2024-10-16 17:47:01', '2024-10-16 17:47:01'),
(3, 'All Medical Sub-specialties', 'fa fa-stethoscope', NULL, 'Offering expertise in diverse medical fields to diagnose and treat a wide range of conditions.', '<p>Offering expertise in diverse medical fields to diagnose and treat a wide range of conditions.</p>', '2024-10-16 17:48:18', '2024-10-16 17:48:18'),
(4, 'Ophthalmology', 'fa fa-eye', NULL, 'Focused on eye health, providing treatment for vision disorders and eye diseases.', '<p>Focused on eye health, providing treatment for vision disorders and eye diseases.</p>', '2024-10-16 17:49:06', '2024-10-16 17:49:06'),
(5, 'Oncology', 'fa fa-tooth', NULL, 'Comprehensive dental care, from oral hygiene to complex dental procedures.', '<p>Comprehensive dental care, from oral hygiene to complex dental procedures.</p>', '2024-10-16 17:49:51', '2024-10-16 17:49:51'),
(6, 'Laboratory Services', 'fa fa-vials', NULL, 'Advanced diagnostic tests to help accurately identify and treat medical conditions.', '<p>Advanced diagnostic tests to help accurately identify and treat medical conditions.</p>', '2024-10-16 17:50:36', '2024-10-16 17:50:36'),
(7, 'Obstetrics', 'fa fa-baby', NULL, 'Specialized in maternal care, including pregnancy, childbirth, and postnatal care.', '<p>Specialized in maternal care, including pregnancy, childbirth, and postnatal care.</p>', '2024-10-16 17:51:23', '2024-10-16 17:51:23'),
(8, 'Gyneacology', 'fa fa-female', NULL, 'Focuses on women\'s reproductive health, offering treatments for various conditions.', '<p>Focuses on women\'s reproductive health, offering treatments for various conditions.</p>', '2024-10-16 17:51:58', '2024-10-16 17:51:58'),
(9, 'Paediatrics', 'fa fa-child', NULL, 'Providing healthcare for children, from newborns to adolescents.', '<p>Providing healthcare for children, from newborns to adolescents.</p>', '2024-10-16 17:52:37', '2024-10-16 17:52:37'),
(10, 'Family Medicine', 'fa fa-users', NULL, 'Comprehensive healthcare for individuals and families across all ages and conditions.', '<p>Comprehensive healthcare for individuals and families across all ages and conditions.</p>', '2024-10-16 17:53:19', '2024-10-16 17:53:19'),
(11, 'Physiotherapy', 'fa fa-dumbbell', NULL, 'Restoring mobility and strength through physical therapy and rehabilitation services.', '<p>Restoring mobility and strength through physical therapy and rehabilitation services.</p>', '2024-10-16 17:53:54', '2024-10-16 17:53:54'),
(12, 'Health Insurance Scheme', 'fa fa-briefcase-medical', NULL, 'Providing financial coverage for medical expenses, ensuring access to essential healthcare services.', '<p>Providing financial coverage for medical expenses, ensuring access to essential healthcare services.</p>', '2024-10-16 17:54:33', '2024-10-16 17:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `favicon` text DEFAULT NULL,
  `footer_description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone1` varchar(255) DEFAULT NULL,
  `phone2` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `email1` varchar(255) DEFAULT NULL,
  `email2` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `logo`, `favicon`, `footer_description`, `address`, `phone1`, `phone2`, `contact_email`, `email1`, `email2`, `linkedin`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'hhh', 'upload/settings/1812058912307794.png', 'upload/settings/1812054202095761.png', 'footer description', '78 address street, ondo state', '08022658825', '08022658825', 'contact@unimed.com', 'info@unimed.com', 'support@unimed.com', 'https://linkedin.com', 'https://facebook.com', 'https://twitter.com', 'https://instagram.com', NULL, '2024-10-16 16:52:24');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `isdelete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `name`, `category_id`, `status`, `isdelete`, `created_at`, `updated_at`) VALUES
(1, 'DEMATOLOGY', 1, 0, 0, '2024-10-02 06:05:28', '2024-10-02 06:09:36'),
(2, 'WORKERS', 2, 0, 0, '2024-10-03 12:45:11', '2024-10-03 13:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `profile_image` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_teams`
--
ALTER TABLE `department_teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sellers_email_unique` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_teams`
--
ALTER TABLE `department_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
