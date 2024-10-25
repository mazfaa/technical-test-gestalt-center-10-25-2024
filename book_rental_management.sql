-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2024 at 10:55 AM
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
-- Database: `book_rental_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `price_rent` decimal(8,2) NOT NULL,
  `book_category` enum('MANGA','NOVEL','MAGAZINE') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `price_rent`, `book_category`, `created_at`, `updated_at`) VALUES
(1, 'One Piece', 'Eiichiro Oda', 3000.00, 'MANGA', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(2, 'Naruto', 'Masashi Kishimoto', 4000.00, 'MANGA', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 12.00, 'NOVEL', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(4, 'Harry Potter and the Sorcerer\'s Stone', 'J.K. Rowling', 14.75, 'NOVEL', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(5, 'National Geographic - October Edition', 'Various', 8.25, 'MAGAZINE', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(6, 'TIME Magazine - Special Issue', 'Various', 9.99, 'MAGAZINE', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(7, 'Attack on Titan: Humanity in Chains', 'Hajime Isayama', 16.50, 'MANGA', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(8, 'To Kill a Mockingbird', 'Harper Lee', 13.99, 'NOVEL', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(9, 'Forbes Magazine - Business Innovators Edition', 'Various', 10.25, 'MAGAZINE', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(10, 'Death Note: Black Edition', 'Tsugumi Ohba', 17.25, 'MANGA', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(11, 'Sherlock Holmes: The Complete Collection', 'Arthur Conan Doyle', 1550.00, 'NOVEL', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(12, 'Dragon Ball Z: Saiyan Saga', 'Akira Toriyama', 1600.00, 'MANGA', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(13, 'Pride and Prejudice', 'Jane Austen', 1300.00, 'NOVEL', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(14, 'Vogue Magazine - Fall Fashion Issue', 'Various', 1050.00, 'MAGAZINE', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(15, 'Bleach: Soul Society Arc', 'Tite Kubo', 1550.00, 'MANGA', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(16, 'The Hobbit', 'J.R.R. Tolkien', 1450.00, 'NOVEL', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(17, 'Test Book Title', 'Test Author Book', 1.00, 'MANGA', '2024-10-25 01:03:22', '2024-10-25 01:03:29'),
(18, 'Test Book Title 2', 'Test Book Author 2', 1.00, 'MANGA', '2024-10-25 01:26:02', '2024-10-25 01:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `identity_card_number` varchar(50) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `identity_card_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Isaac Newton', '3203011404040009', 'Jalan Pasteur, Kota Bandung.', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(2, 'Nikola Tesla', '3203011404040008', 'Jalan Ir. H. Juanda, Kota Cianjur.', '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(3, 'Test Customer Name', '320', 'Test Customer Address', '2024-10-25 01:03:52', '2024-10-25 01:03:52'),
(4, 'Test Customer Name 2', '320', 'Test Customer Address 2', '2024-10-25 01:26:36', '2024-10-25 01:26:36');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_25_015324_create_books_table', 1),
(5, '2024_10_25_015331_create_customers_table', 1),
(6, '2024_10_25_015337_create_rents_table', 1);

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
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `date_rent` date NOT NULL,
  `date_return` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`id`, `customer_id`, `book_id`, `date_rent`, `date_return`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2024-01-01', NULL, '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(2, 1, 2, '2024-01-01', NULL, '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(3, 1, 3, '2024-01-06', NULL, '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(4, 1, 4, '2024-01-06', NULL, '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(5, 1, 5, '2024-01-06', NULL, '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(6, 1, 6, '2024-01-06', NULL, '2024-10-25 00:42:42', '2024-10-25 00:42:42'),
(7, 1, 7, '2024-01-06', NULL, '2024-10-25 00:42:43', '2024-10-25 00:42:43'),
(8, 1, 8, '2024-01-06', NULL, '2024-10-25 00:42:43', '2024-10-25 00:42:43'),
(9, 1, 9, '2024-01-06', NULL, '2024-10-25 00:42:43', '2024-10-25 00:42:43'),
(10, 1, 10, '2024-01-06', NULL, '2024-10-25 00:42:43', '2024-10-25 00:42:43'),
(11, 1, 11, '2024-01-06', NULL, '2024-10-25 00:42:43', '2024-10-25 00:42:43'),
(12, 1, 1, '2024-10-25', NULL, '2024-10-25 01:09:35', '2024-10-25 01:09:35'),
(13, 3, 17, '2024-10-25', '2024-10-25', '2024-10-25 01:10:41', '2024-10-25 01:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AKUr8IiIZFx9dd2dPG4tKuxmyBoWxLv3N30CM2Vv', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS0FkNWpkY1QwdUtoTHNYOWRYTXJXT3h0WnVxemVORUNQOFNHeUEyMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NToiYWxlcnQiO2E6MDp7fX0=', 1729846205);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rents_customer_id_foreign` (`customer_id`),
  ADD KEY `rents_book_id_foreign` (`book_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rents`
--
ALTER TABLE `rents`
  ADD CONSTRAINT `rents_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rents_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;