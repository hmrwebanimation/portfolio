-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 06:51 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelvideoone`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Business Card', '2019-08-30 21:52:22', '2019-08-30 21:52:22'),
(2, 'Folder Design', '2019-08-30 21:53:25', '2019-08-30 21:53:25'),
(3, 'Logo Design', '2019-08-30 21:54:50', '2019-08-30 21:54:50'),
(4, 'Flyer Design', '2019-08-30 22:07:23', '2019-08-30 22:07:23'),
(5, 'Cover Page Design', '2019-08-30 22:32:29', '2019-08-30 22:32:29'),
(6, 'Banner Ad', '2019-08-30 23:06:42', '2019-08-30 23:06:42'),
(7, 'Tv', '2019-09-02 18:57:35', '2019-09-02 18:57:35'),
(8, 'Football', '2019-09-04 04:56:09', '2019-09-04 04:56:09'),
(11, 'Text Effect', '2019-09-11 03:02:45', '2019-09-11 03:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'User Five', 9, 7, 'Good', '2019-09-10 06:59:46', '2019-09-10 06:59:46'),
(2, 'User Five', 9, 2, 'hi', '2019-09-10 22:13:03', '2019-09-10 22:13:03'),
(3, 'User Five', 9, 2, 'se', '2019-09-10 22:13:21', '2019-09-10 22:13:21'),
(4, 'User Five', 9, 6, 'Hello', '2019-09-10 22:51:59', '2019-09-10 22:51:59'),
(5, 'User Five', 9, 6, 's', '2019-09-10 22:56:06', '2019-09-10 22:56:06'),
(6, 'User Five', 9, 7, 'oh', '2019-09-11 01:01:09', '2019-09-11 01:01:09'),
(7, 'User Five', 9, 7, 'fine', '2019-09-11 01:01:25', '2019-09-11 01:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE `dislikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`id`, `name`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 'User Five', 9, 11, '2019-09-10 05:26:03', '2019-09-10 05:26:03'),
(2, 'User Five', 9, 3, '2019-09-10 05:26:50', '2019-09-10 05:26:50'),
(3, 'User Five', 9, 7, '2019-09-10 05:31:49', '2019-09-10 05:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `name`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(5, 'User Five', 9, 3, '2019-09-10 04:43:03', '2019-09-10 04:43:03'),
(6, 'User Five', 9, 11, '2019-09-10 04:43:44', '2019-09-10 04:43:44'),
(7, 'User Five', 9, 2, '2019-09-11 02:57:38', '2019-09-11 02:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_29_055528_create_likes_table', 1),
(4, '2019_08_30_075601_create_dislikes_table', 1),
(5, '2019_08_30_075628_create_posts_table', 1),
(6, '2019_08_30_075715_create_profiles_table', 1),
(7, '2019_08_30_075811_create_categories_table', 1),
(8, '2019_08_30_080549_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `post_title`, `post_video`, `category_id`, `post_body`, `created_at`, `updated_at`) VALUES
(13, 2, 'Gold Logo', 'http://127.0.0.1:8000/videos/Golden Logo Design.mp4', 3, 'Logo with Gold color has been designed with Adobe Illustrator CC.', '2019-09-09 03:09:32', '2019-09-11 11:07:13'),
(15, 9, 'Text Effect', 'http://127.0.0.1:8000/videos/Text Effect Adobe Illustrator CC Aug 2019.mp4', 11, 'Text Effect Usually made with gradient, color, shadow, outer glow, inner glow effects.', '2019-09-11 03:15:28', '2019-09-11 03:15:28'),
(17, 2, 'Make a Mockup with Photoshop CC', 'http://127.0.0.1:8000/videos/MockUp Photoshop Aug 2019.mp4', 5, 'This video will tell you to make a mock up with adobe photoshop cc for presenting design works.', '2019-09-11 10:42:51', '2019-09-11 10:42:51'),
(18, 2, 'Folder Design with Illustrator', 'http://127.0.0.1:8000/videos/Folder Design Blue Adobe Illustrator CC Aug 2019.mp4', 2, 'Corporate folder has been designed with Adobe Illustrator. Color is blue. Size is nearly square, print ready, resolution 300PPI.', '2019-09-11 10:49:05', '2019-09-11 10:49:05'),
(19, 2, 'Flyer Design', 'http://127.0.0.1:8000/videos/Flyer Three.mp4', 4, 'Flyer has been designed using Adobe Illustrator CC. Size is 8.5x 11 inches, print ready, 300PPI resolution.', '2019-09-11 11:30:08', '2019-09-11 11:30:08'),
(20, 2, 'Banner Ad Design', 'http://127.0.0.1:8000/videos/Adobe Illustrator CC Tutorial Banner Ad.mp4', 6, 'Banner Ad has been designed with Adobe Photoshop CC. Size is 300x250px for Digital Platform', '2019-09-11 11:36:43', '2019-09-11 11:36:43'),
(21, 2, 'Business Card', 'http://127.0.0.1:8000/videos/Business Card Four.mp4', 1, 'Business Card has been designed using Adobe Illustrator CC. Size is 3.5x2 inches, 300PPI, Print ready.', '2019-09-11 11:42:25', '2019-09-11 11:42:25');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `name`, `designation`, `profile_photo`, `created_at`, `updated_at`) VALUES
(9, 2, 'User Two', 'Cricekter', 'http://127.0.0.1:8000/profilephoto/barrett.jpg', '2019-09-06 05:03:34', '2019-09-06 05:03:34'),
(13, 9, 'User Five', 'Programmer', 'http://127.0.0.1:8000/profilephoto/fischer.jpg', '2019-09-06 06:15:07', '2019-09-06 06:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'User Two', 'usertwo@gmail.com', NULL, '$2y$10$j5yTSuPuoqPozwO4yw/73OnNtqQIIaYEWYLCOypxkeWEQOOoI322C', NULL, '2019-09-02 16:40:36', '2019-09-02 16:40:36'),
(9, 'User Five', 'userfive@gmail.com', NULL, '$2y$10$eBG7fQsypiLGse5Z4A/5Huf80ZgD5VKyHe.OtA5BfCWcD9e7dEZSO', NULL, '2019-09-06 06:06:25', '2019-09-06 06:06:25'),
(10, 'User Ten', 'userten@gmail.com', NULL, '$2y$10$RwBmdRvCnIIGCHzRVghyY.1UbT/4avmhlryFRzRmVRN/VTvfbYzVG', NULL, '2019-09-11 09:21:41', '2019-09-11 09:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dislikes`
--
ALTER TABLE `dislikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dislikes`
--
ALTER TABLE `dislikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
