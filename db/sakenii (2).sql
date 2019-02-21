-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2019 at 06:35 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sakenii`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(10) UNSIGNED NOT NULL,
  `flat_booking_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `flat_id` int(10) UNSIGNED NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flat_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `flat_id` int(10) UNSIGNED NOT NULL,
  `flat_location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flat_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flat_price` int(11) NOT NULL,
  `bed_price` int(11) NOT NULL,
  `flat_services` tinyint(1) NOT NULL,
  `flat_description` text COLLATE utf8_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`flat_id`, `flat_location`, `flat_address`, `flat_price`, `bed_price`, `flat_services`, `flat_description`, `cover_image`, `status`, `id`, `created_at`, `updated_at`) VALUES
(1, 'دماريس', '20 شارع الميدان بدماريس', 4444, 55, 1, 'FlatBookingControllerFlatBookingControllerFlatBookingControllerFlatBookingControllerFlatBookingControllerFlatBookingControllerFlatBookingController', '946559537.jpg', 1, 1, '2019-02-12 16:04:33', '2019-02-12 16:04:33'),
(2, 'شلبي', 'Dayr Atiyyah', 555, 22, 1, 'uuhbjoihoihpoighpigpigoigiogpogog', '2061691447.jpg', 1, 1, '2019-02-13 12:40:27', '2019-02-13 12:40:27'),
(3, 'دماريس', '20 شارع الميدان بدماريس', 5000, 200, 1, 'هذه الشقه توجد بها كل  الامكانيات حيت  تحتوي  علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء  وغاز طبيعي وقريبه من الجامعه', '2050262578.jpg', 1, 1, '2019-02-13 13:02:12', '2019-02-13 13:02:12'),
(4, 'شلبي', '23 شارع البوستان بشلبي', 6000, 420, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '869316079.jpg', 1, 1, '2019-02-13 13:03:17', '2019-02-13 13:03:17'),
(5, 'اخصاص', '30 شارع الامل بالاخصاص', 5620, 253, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1501749208.jpg', 1, 1, '2019-02-13 13:04:01', '2019-02-13 13:04:01'),
(6, 'طه حسين', '12 شارع وبور النور بطه حسين', 5000, 520, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1689145518.jpg', 1, 1, '2019-02-13 13:04:38', '2019-02-13 13:04:38'),
(7, 'الحسيني', '14 شارع وبور النور', 4000, 400, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1835047519.jpg', 1, 1, '2019-02-13 13:05:51', '2019-02-13 13:05:51'),
(8, 'ابو هلال', '14 شارع عمر بن الخطاب بابو هلال', 6320, 125, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '677271258.jpg', 1, 1, '2019-02-13 13:06:53', '2019-02-13 13:06:53'),
(9, 'دماريس', '12 شارع مدحت', 4555, 555, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1857335866.jpg', 1, 1, '2019-02-13 13:07:51', '2019-02-13 13:07:51'),
(10, 'شلبي', '23 شارع االامل بشلبي', 5620, 256, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1571742986.jpg', 1, 1, '2019-02-13 13:08:58', '2019-02-13 13:08:58'),
(11, 'اخصاص', '14 شارع وبور النور', 6230, 266, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1810616785.jpg', 1, 1, '2019-02-13 13:09:36', '2019-02-13 13:09:36'),
(12, 'طه حسين', '15 شارع النادي الرياضي', 6320, 562, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '1043901590.jpg', 1, 1, '2019-02-13 13:10:24', '2019-02-13 13:10:24'),
(13, 'الحسيني', '12 شارع القشيري', 9652, 230, 1, 'هذه الشقه توجد بها كل الامكانيات حيت تحتوي علي 5 غرف و2 حمام ومطبخ وبها ايضا ماء وكهرباء وغاز طبيعي وقريبه من الجامعه', '2138744475.jpg', 1, 1, '2019-02-13 13:11:56', '2019-02-13 13:11:56');

-- --------------------------------------------------------

--
-- Table structure for table `flat_bookings`
--

CREATE TABLE `flat_bookings` (
  `flat_booking_id` int(10) UNSIGNED NOT NULL,
  `book_duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `flat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flat_comments`
--

CREATE TABLE `flat_comments` (
  `flat_comment_id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `flat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `flat_comments`
--

INSERT INTO `flat_comments` (`flat_comment_id`, `body`, `user_id`, `flat_id`, `created_at`, `updated_at`) VALUES
(1, 'حنا شبح الحته', 1, 1, '2019-02-13 03:51:52', '2019-02-13 03:51:52'),
(2, 'بشوي فايز حامد', 1, 1, '2019-02-13 03:52:40', '2019-02-13 03:52:40'),
(3, 'kkkkkk', 1, 1, '2019-02-13 04:00:11', '2019-02-13 04:00:11'),
(4, 'امل حياتي  ي ليل', 1, 5, '2019-02-13 13:13:02', '2019-02-13 13:13:02'),
(5, 'ابو انس', 2, 12, '2019-02-13 13:18:49', '2019-02-13 13:18:49'),
(6, 'حنا شبح الحته', 3, 12, '2019-02-13 13:20:37', '2019-02-13 13:20:37'),
(7, 'بشوي فايز حامد', 4, 12, '2019-02-13 13:22:18', '2019-02-13 13:22:18'),
(8, 'نور محمد  الشريف', 1, 12, '2019-02-13 13:24:01', '2019-02-13 13:24:01');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `flat_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(23, '2019_02_03_195610_create_students_table', 1),
(24, '2019_02_03_195725_create_owners_table', 1),
(137, '2014_10_12_000000_create_users_table', 2),
(138, '2014_10_12_100000_create_password_resets_table', 2),
(139, '2019_02_03_195814_create_flats_table', 2),
(140, '2019_02_03_195914_create_comments_table', 2),
(141, '2019_02_03_195952_create_images_table', 2),
(142, '2019_02_03_200033_create_flat_comments_table', 2),
(143, '2019_02_03_200111_create_flat_bookings_table', 2),
(144, '2019_02_03_200151_create_bookings_table', 2),
(145, '2019_02_06_080848_create_sakenii_infos_table', 2),
(146, '2019_02_06_081101_create_contacts_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sakenii_infos`
--

CREATE TABLE `sakenii_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT '1',
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'male',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone_number`, `email`, `email_verified_at`, `password`, `role`, `gender`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'نور محمد  الشريف', 'نور', '01119399781', 'nourmuhammed20121994@gmail.com', NULL, '$2y$10$Hs643nq4Mu3U30sVPHk2dOdBh2EJKlDx2Dcu/ppY9.FPA0QUbnNyK', 2, 'male', 'e9zHcFCjv97Byafx7m0J1TvzpfgToMcXMkpnFKu8TFqwReXVgF39uHJ1oK76', '2019-02-12 16:03:53', '2019-02-12 16:03:53'),
(2, 'محمود سيد', 'محمود', '01007826789', 'mahmoud@gmail.com', NULL, '$2y$10$0P2AuEEc/xVG8Q6L8pDhUeWu4tAVbEZrYTvxkurL6WZfEGpSn9F/i', 2, 'male', 'rcOVME24nwgXn2MUq9kHOudVmjjqXopLFELrWR2Tp5PF9e2jFUEDm3EDxkKj', '2019-02-13 13:18:09', '2019-02-13 13:18:09'),
(3, 'حنا كميل', 'حنا', '01279514048', 'hanna@gmail.com', NULL, '$2y$10$VLLIsFaMlbGaL75Vc08Nfe0kJ5a/ie7DFWv.u4fZHJ07xfw2pj57e', 2, 'male', 'iaM46iJCwcNqgwDwFzJqVXcE86mI234EiUVoqWb2asyHjjehKGCvuSgwLSzv', '2019-02-13 13:19:55', '2019-02-13 13:19:55'),
(4, 'بشوي فايز حامد', 'بشوي', '01279514048', 'besho@gmail.com', NULL, '$2y$10$WnJ5Wddt1hIln2SEd6PP5.2IA0jFAHeJQbAPnjF4Air.kcJtWFrcG', 2, 'male', 'KI71cwrxui3ErskX0zs4GkfJityddkVTlMdoHJaLqi5XVp7a8E2FgKRChKaq', '2019-02-13 13:21:41', '2019-02-13 13:21:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `bookings_flat_booking_id_foreign` (`flat_booking_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_flat_id_foreign` (`flat_id`),
  ADD KEY `comments_id_foreign` (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`flat_id`),
  ADD KEY `flats_id_foreign` (`id`);

--
-- Indexes for table `flat_bookings`
--
ALTER TABLE `flat_bookings`
  ADD PRIMARY KEY (`flat_booking_id`),
  ADD KEY `flat_bookings_id_foreign` (`id`),
  ADD KEY `flat_bookings_flat_id_foreign` (`flat_id`);

--
-- Indexes for table `flat_comments`
--
ALTER TABLE `flat_comments`
  ADD PRIMARY KEY (`flat_comment_id`),
  ADD KEY `flat_comments_user_id_foreign` (`user_id`),
  ADD KEY `flat_comments_flat_id_foreign` (`flat_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `images_flat_id_foreign` (`flat_id`);

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
-- Indexes for table `sakenii_infos`
--
ALTER TABLE `sakenii_infos`
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
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `flat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `flat_bookings`
--
ALTER TABLE `flat_bookings`
  MODIFY `flat_booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flat_comments`
--
ALTER TABLE `flat_comments`
  MODIFY `flat_comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `sakenii_infos`
--
ALTER TABLE `sakenii_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_flat_booking_id_foreign` FOREIGN KEY (`flat_booking_id`) REFERENCES `flat_bookings` (`flat_booking_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_flat_id_foreign` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`flat_id`),
  ADD CONSTRAINT `comments_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `flats`
--
ALTER TABLE `flats`
  ADD CONSTRAINT `flats_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `flat_bookings`
--
ALTER TABLE `flat_bookings`
  ADD CONSTRAINT `flat_bookings_flat_id_foreign` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`flat_id`),
  ADD CONSTRAINT `flat_bookings_id_foreign` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Constraints for table `flat_comments`
--
ALTER TABLE `flat_comments`
  ADD CONSTRAINT `flat_comments_flat_id_foreign` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`flat_id`),
  ADD CONSTRAINT `flat_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_flat_id_foreign` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`flat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
