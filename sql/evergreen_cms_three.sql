-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 08:36 AM
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
-- Database: `evergreen_cms_three`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactes`
--

CREATE TABLE `contactes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` text NOT NULL,
  `number` varchar(255) NOT NULL,
  `map_embedded` text NOT NULL,
  `work_hour` text NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `banner_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactes`
--

INSERT INTO `contactes` (`id`, `address`, `email`, `website`, `number`, `map_embedded`, `work_hour`, `contact_email`, `banner_image`, `created_at`, `updated_at`) VALUES
(9, 'Unit-6A, Level-6, Rupayan Shopping Square, Plot # 2, Sayem Sobhan Anvir Road, Bashundhara R/A, Dhaka-1229.', 'sujyham@mailinator.com', 'www.evergreen92property.com', '8801730588098', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1534.5747118537915!2d90.42915898819285!3d23.823778427315823!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c647b763c915%3A0x21d7dbcd42c27567!2z4Kaw4KeC4Kaq4Ka-4Kef4KaoIOCmtuCmquCmv-CmgiDgprjgp43gppXgp5_gpr7gprA!5e0!3m2!1sen!2sbd!4v1679383239390!5m2!1sen!2sbd', 'Saturday - Thursday : 10am - 07pm', 'nypyzabyny@mailinator.com', '20230622110640.jpg', '2023-06-22 02:58:21', '2023-06-22 05:40:47');

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
-- Table structure for table `homepages`
--

CREATE TABLE `homepages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_section_title` text NOT NULL,
  `about_description` text NOT NULL,
  `experience_year` text NOT NULL,
  `about_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepages`
--

INSERT INTO `homepages` (`id`, `about_section_title`, `about_description`, `experience_year`, `about_image`, `created_at`, `updated_at`) VALUES
(2, 'We Are The Leader In The Architectural', 'Evergreen’92 is a dream of green time that started in Covid-19. It’s an emotional birth of our fiends Architect , Farhad Mostafa Chowdhury, Md. Mostofa Monwar Bhuiyan, Md. Nasim Haider, Mahidul Munsur khan. We started our journey 16 December 2020 from Chuti Resort in Purbachal by keeping in mind to build affordable living for maintaining a luxuries lifestyle and quality time with your family in our resort…..Evergreen’92 is a dream of green time that started in Covid-19. It’s an emotional birth of our fiends Architect , Farhad Mostafa Chowdhury, Md. Mostofa Monwar Bhuiyan, Md. Nasim Haider, Mahidul Munsur khan. We started our journey 16 December 2020 from Chuti Resort in Purbachal by keeping in mind to build affordable living for maintaining a luxuries lifestyle and quality time with your family in our resort…..', '04', '20230622110631.jpg', '2023-06-22 05:31:46', '2023-06-22 05:31:46');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `project_id`, `filename`, `created_at`, `updated_at`) VALUES
(1, '1', '1687435366.jpg', '2023-06-22 06:02:46', '2023-06-22 06:02:46'),
(2, '1', '1687435366.jpg', '2023-06-22 06:02:46', '2023-06-22 06:02:46'),
(3, '1', '1687435366.jpg', '2023-06-22 06:02:46', '2023-06-22 06:02:46'),
(4, '1', '1687435366.jpg', '2023-06-22 06:02:46', '2023-06-22 06:02:46'),
(5, '1', '1687435366.jpg', '2023-06-22 06:02:46', '2023-06-22 06:02:46'),
(6, '1', '1687435366.jpg', '2023-06-22 06:02:46', '2023-06-22 06:02:46');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_14_072956_create_table_projects_table', 1),
(6, '2023_06_18_081752_create_categories_table', 1),
(7, '2023_06_18_101701_create_newes_table', 1),
(8, '2023_06_19_102402_create_newsdetails_table', 1),
(9, '2023_06_21_050059_create_images_table', 2),
(12, '2023_06_21_050610_create_settings_table', 3),
(16, '2023_06_21_101215_create_reviews_table', 4),
(20, '2023_06_21_123619_create_contactes_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `newes`
--

CREATE TABLE `newes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_title` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `t_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newsdetails`
--

CREATE TABLE `newsdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` varchar(255) NOT NULL,
  `fileName` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_name` text NOT NULL,
  `client_review` text NOT NULL,
  `client_img` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` text NOT NULL,
  `copyrite_text` text NOT NULL,
  `facebook_link` text NOT NULL,
  `instagram_link` text NOT NULL,
  `youtube_link` text NOT NULL,
  `linked_in_link` text NOT NULL,
  `logo_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `copyrite_text`, `facebook_link`, `instagram_link`, `youtube_link`, `linked_in_link`, `logo_image`, `created_at`, `updated_at`) VALUES
(2, 'Soluta asperiores te', 'Nobis voluptas est q', 'Enim culpa expedita', 'Nihil qui totam sit', 'Dignissimos', 'Sed', NULL, '2023-06-21 00:09:08', '2023-06-22 03:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `table_projects`
--

CREATE TABLE `table_projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` text NOT NULL,
  `description` text NOT NULL,
  `video_url` text NOT NULL,
  `thumbnail_image` text DEFAULT NULL,
  `project_image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_projects`
--

INSERT INTO `table_projects` (`id`, `project_name`, `description`, `video_url`, `thumbnail_image`, `project_image`, `created_at`, `updated_at`) VALUES
(1, 'Chuti Cox\'s Bazar', 'This response is important for our ability to learn from mistakes, but it alsogives rise to self-criticism, because it is part of the threat-protection system. In other words, what keeps us safe can go too far, and keep us too safe. In fact it can trigger self-censoring.\r\n\r\nOne touch of a red-hot stove is usually all we need to avoid that kind of discomfort in the future. The same is true as we experience the emotional sensation of stress from our first instances of social rejection or ridicule. We quickly learn to fear and thus automatically avoid potentially stressful situations of all kinds, including the most common of all: making mistakes.', 'https://www.youtube.com/embed/kyMThicQawk', '20230622120602.jpeg', NULL, '2023-06-22 06:02:46', '2023-06-22 06:02:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$NXF2obMbod0HavGbqkegAuxIdSu23CVxVOGA.xp6sBIIufx8AcZg6', NULL, '2023-06-20 05:03:59', '2023-06-20 05:03:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactes`
--
ALTER TABLE `contactes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homepages`
--
ALTER TABLE `homepages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newes`
--
ALTER TABLE `newes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsdetails`
--
ALTER TABLE `newsdetails`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_projects`
--
ALTER TABLE `table_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactes`
--
ALTER TABLE `contactes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepages`
--
ALTER TABLE `homepages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `newes`
--
ALTER TABLE `newes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsdetails`
--
ALTER TABLE `newsdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_projects`
--
ALTER TABLE `table_projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
