-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 08:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `port`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortdesc` varchar(3000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `desc`, `shortdesc`, `image`, `created_at`, `updated_at`) VALUES
(1, '<p><strong>Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation, and narration. In practice it would be difficult to write literature that drew on just one of the four basic modeshhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh</strong></p>', 'A title is one or more words used before or after a person\'s name, in certain contexts. It may signify either generation, an official position, or a professional or academic qualification. In some languages, titles may be inserted between the first and last name. Some titles are hereditary.', '1649581356_14.jpg', '2022-04-10 08:57:31', '2022-04-24 01:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `u_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `desc`, `created_at`, `updated_at`, `view_count`, `slider`) VALUES
(1, 'Electronicsf', '1650798283_3.jpg', '<p>electronics item</p>', '2022-04-09 23:41:20', '2022-04-29 15:10:54', '3', 1),
(2, 'Fruits', '1650798380_1.jpg', '<p>FruitsFruits</p>', '2022-04-09 23:41:48', '2022-04-29 15:10:57', '1', 1),
(4, 'Brevage', '1649569012_download1.jpg', 'BrevageBrevageBrevage', '2022-04-09 23:51:52', '2022-04-24 05:23:05', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `phone`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Martina Rodgers', '+1 (466) 842-3548', 'zakewod@mailinator.com', 'Veniam sed ut sunt', 'Duis enim rerum alia', '2022-04-10 01:23:57', '2022-04-10 01:23:57'),
(2, 'Leo Rodgers', '+1 (135) 775-7765', 'dyquhi@mailinator.com', 'Saepe dolore volupta', 'Qui qui ipsum molest', '2022-04-10 01:29:48', '2022-04-10 01:29:48'),
(3, 'Kendall Pacheco', '+1 (727) 251-9822', 'vopyno@mailinator.com', 'Amet odit debitis m', 'Corrupti tempor adi', '2022-04-10 01:37:46', '2022-04-10 01:37:46'),
(4, 'Cade Justice', '+1 (776) 516-8164', 'jovymaxusu@mailinator.com', 'Porro ex ab sed exce', 'Non doloribus provid', '2022-04-10 01:38:26', '2022-04-10 01:38:26'),
(5, 'Cruz Massey', '+1 (419) 835-6652', 'quxipy@mailinator.com', 'Magnam et proident', 'Quod mollit dolorum', '2022-04-10 01:39:38', '2022-04-10 01:39:38'),
(6, 'Jana Castaneda', '+1 (382) 536-9543', 'cyke@mailinator.com', 'Et inventore volupta', 'Deleniti sit pariatu', '2022-04-10 11:25:00', '2022-04-10 11:25:00'),
(7, 'Grady Rivas', '+1 (168) 632-4345', 'fyjikobuxa@mailinator.com', 'Cillum aspernatur no', 'Quia dolor doloremqu', '2022-04-24 02:09:26', '2022-04-24 02:09:26'),
(8, 'Merrill Whitney', '+1 (102) 338-2474', 'wohe@mailinator.com', 'Earum aliquam except', 'Voluptatum blanditii', '2022-04-24 02:09:40', '2022-04-24 02:09:40'),
(9, 'Fay Mccullough', '+1 (576) 747-1289', 'bagypu@mailinator.com', 'Cupidatat fugit rep', 'Placeat minima plac', '2022-04-24 02:59:07', '2022-04-24 02:59:07'),
(10, 'Clarke Hines', '+1 (416) 799-3695', 'zugyva@mailinator.com', 'In in ut cillum solu', 'Id impedit reprehen', '2022-04-24 03:00:28', '2022-04-24 03:00:28'),
(11, 'Byron Campos', '+1 (703) 977-4238', 'tuxyjobah@mailinator.com', 'Et sit duis adipisci', 'Molestiae iure solut', '2022-04-24 03:02:17', '2022-04-24 03:02:17'),
(12, 'Ferdinand Bruce', '+1 (854) 903-5147', 'gafup@mailinator.com', 'Irure nihil eius pro', 'Non dolor corrupti', '2022-04-24 03:03:49', '2022-04-24 03:03:49'),
(13, 'Lani Richards', '+1 (765) 145-6707', 'zobazuqyho@mailinator.com', 'Vel odit quia verita', 'Non sunt natus illum', '2022-04-24 03:06:35', '2022-04-24 03:06:35'),
(14, 'Hiram Ingram', '+1 (589) 289-7445', 'muwixycad@mailinator.com', 'Adipisci voluptatum', 'Assumenda aut fugiat', '2022-04-24 03:08:30', '2022-04-24 03:08:30');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `logo`, `title`, `desc`, `created_at`, `updated_at`) VALUES
(3, '1649577216_35.jpg', 'Bday', '<p>BdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBdayBday</p>', '2022-04-10 02:08:36', '2022-04-10 02:08:36');

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
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(2, 'Dolorem et in offici', 'rahul', '2022-04-18 01:12:17', '2022-04-24 01:28:51'),
(3, 'Dolore vel similique', 'Consequatur quibusd', '2022-04-18 04:27:33', '2022-04-18 04:27:33'),
(4, 'Ullam libero consequ', 'Voluptas ut veniam', '2022-04-18 04:27:44', '2022-04-18 04:27:44'),
(5, 'Velit aliquid ex eos', 'Qui voluptatum omnisQui voluptatum omnisQui voluptatum omnisQui voluptatum omnis', '2022-04-18 04:28:10', '2022-04-18 04:28:10'),
(6, 'Eu hic eligendi et v', 'Lorem ipsum In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before the final copy is available.', '2022-04-18 04:29:10', '2022-04-18 04:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '1649568691_tree-736885__480.webp', 1, '2022-04-09 23:46:31', '2022-04-09 23:46:31'),
(2, '1649568691_uwp1382523.jpeg', 1, '2022-04-09 23:46:31', '2022-04-09 23:46:31'),
(3, '1649568838_images (8).jpg', 2, '2022-04-09 23:48:58', '2022-04-09 23:48:58'),
(4, '1649569180_images (7).jpg', 3, '2022-04-09 23:54:40', '2022-04-09 23:54:40'),
(5, '1649569446_2.png', 4, '2022-04-09 23:59:06', '2022-04-09 23:59:06'),
(6, '1649569535_10.png', 5, '2022-04-10 00:00:35', '2022-04-10 00:00:35'),
(7, '1649569622_6.jpg', 6, '2022-04-10 00:02:02', '2022-04-10 00:02:02'),
(8, '1649569722_5.png', 7, '2022-04-10 00:03:42', '2022-04-10 00:03:42'),
(9, '1649569965_Capture.PNG', 8, '2022-04-10 00:07:45', '2022-04-10 00:07:45'),
(10, '1650871876_1.png', 9, '2022-04-25 01:46:16', '2022-04-25 01:46:16');

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
(5, '2022_03_27_152553_create_category_table', 1),
(6, '2022_03_27_152719_create_subcategory_table', 1),
(7, '2022_03_27_152911_create_product_table', 1),
(8, '2022_03_27_153039_create_order_table', 1),
(9, '2022_03_27_153135_create_ordertrackhistory_table', 1),
(10, '2022_03_27_153201_create_wishlist_table', 1),
(11, '2022_03_28_062844_create_image_table', 1),
(12, '2022_03_29_053214_create_setting_table', 1),
(13, '2022_03_29_053345_create_suscribers_table', 1),
(14, '2022_03_29_053614_create_aboutus_table', 1),
(15, '2022_03_29_053635_create_event_table', 1),
(16, '2022_03_29_053731_create_faq_table', 1),
(17, '2022_03_29_053753_create_contact_table', 1),
(18, '2022_03_29_053810_create_team_table', 1),
(19, '2022_03_29_053912_create_testinominal_table', 1),
(20, '2022_03_29_053944_create_services_table', 1),
(21, '2022_04_04_055729_create_offres_table', 1),
(22, '2022_04_04_073929_add_column_to_offres', 1),
(23, '2022_04_04_110749_add_column_to_offres', 1),
(24, '2022_04_06_054519_add_column_to_product', 1),
(25, '2022_04_06_064435_add_column_to_product', 1),
(26, '2022_04_06_111850_add_column_to_product', 1),
(27, '2022_04_07_060858_add_column_to_product', 1),
(28, '2022_04_07_065010_create_rating_table', 1),
(29, '2022_04_08_110237_add_column_to_subcategory', 1),
(30, '2022_04_10_063449_add_colum_to_setting', 2),
(31, '2022_04_14_105557_create_cart_table', 3),
(32, '2022_04_17_065849_add_column_to_services', 4),
(33, '2022_04_20_063450_create_policy_table', 5),
(34, '2022_04_20_091451_add_column_to_setting', 6),
(35, '2022_04_20_095320_add_column_to_category', 7),
(36, '2022_04_20_110122_add_column_to_subcategory', 8),
(37, '2022_04_24_102427_add_column_to_category', 9);

-- --------------------------------------------------------

--
-- Table structure for table `offres`
--

CREATE TABLE `offres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expire_date` date DEFAULT NULL,
  `desc_long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_short` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offres`
--

INSERT INTO `offres` (`id`, `image`, `status`, `created_at`, `updated_at`, `expire_date`, `desc_long`, `desc_short`) VALUES
(1, '1650784976_4.jpg', 1, '2022-04-24 01:31:53', '2022-04-24 01:42:07', '2026-02-25', '<p>Discount</p>', '<p>30%</p>'),
(2, '1650785038_5.jpg', 1, '2022-04-24 01:34:39', '2022-04-24 01:41:35', '2028-01-27', '<p>Discount offer</p>', '<p>20%</p>'),
(3, '1650785118_6.jpg', 1, '2022-04-24 01:40:18', '2022-04-24 01:40:18', '2027-02-02', '<p>offer</p>', '<p>25%</p>');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `quantity`, `status`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 8, 3, '2022-04-29 05:54:07', '2022-04-29 05:54:07'),
(2, 1, 0, 4, 3, '2022-04-29 05:59:26', '2022-04-29 05:59:26'),
(3, 2, 0, 9, 4, '2022-04-29 06:05:36', '2022-04-29 06:05:36'),
(4, 1, 0, 7, 3, '2022-04-29 09:39:26', '2022-04-29 09:39:26'),
(5, 1, 0, 8, 3, '2022-04-29 10:08:01', '2022-04-29 10:08:01'),
(6, 1, 0, 6, 3, '2022-04-29 10:12:43', '2022-04-29 10:12:43'),
(7, 4, 0, 9, 3, '2022-04-29 10:13:31', '2022-04-29 10:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `remark` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `desc`, `term`, `condition`, `created_at`, `updated_at`) VALUES
(2, '<p>Descriptions</p>', '<p>Term</p>', '<p>Condition</p>', '2022-04-20 02:40:56', '2022-04-24 01:51:06'),
(3, '<p>Description</p>', '<p>Term</p>', '<p>Condition</p>', '2022-04-20 02:41:24', '2022-04-20 02:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `discountedprice` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `desc`, `price`, `discountedprice`, `category_id`, `sub_category_id`, `created_at`, `updated_at`, `feature_image`, `view_count`, `slug`, `title`, `review`) VALUES
(1, 'samsung galaxy s20ultra', '<p>samsung galaxy s20ultrasamsung galaxy s20ultrasamsung galaxy s20ultra</p>', 2000000, 195000, 1, 1, '2022-04-09 23:46:31', '2022-04-24 10:45:41', '1649568691_images (7).jpg', '2', 'samsung-galaxy-s20ultra', 'samsung galaxy phone', NULL),
(3, 'coke', '<p>cokecokecoke</p>', 190, 180, 4, 4, '2022-04-09 23:54:40', '2022-04-29 10:51:02', '1649569180_images (1).jpg', '2', 'coke', 'deuw', NULL),
(4, 'pepsi', '<p>pepsipepsipepsipepsi</p>', 190, 190, 4, 4, '2022-04-09 23:59:06', '2022-04-29 10:50:53', '1649569446_2.png', '1', 'pepsi', 'pepsi', NULL),
(5, 'mango', '<p>mangomangomango</p>', 200, 190, 2, 2, '2022-04-10 00:00:35', '2022-04-26 04:30:17', '1649569535_10.png', '10', 'mango', 'mango', NULL),
(6, 'orange', '<p>orangeorange</p>', 145, 140, 2, 2, '2022-04-10 00:02:02', '2022-04-29 06:04:45', '1649569622_6.jpg', '4', 'orange', 'orangeorange', NULL),
(7, 'almond', '<p>almondalmond</p>', 1200, 1185, 2, 3, '2022-04-10 00:03:42', '2022-04-30 11:51:25', '1649569722_74.png', '7', 'almond', 'almond', NULL),
(8, 'cashew nut', '<p>cashew nutcashew nut</p>', 1500, 1400, 2, 3, '2022-04-10 00:07:45', '2022-04-29 10:07:51', '1649569965_Capture.PNG', '35', 'cashew-nut', 'cashew nut', NULL),
(9, 'Fortune oil', '<p>forture is a pure sunflower oil made in nepal</p>', 780, 700, 2, 3, '2022-04-25 01:46:16', '2022-04-29 10:50:47', '1650871876_1.png', '16', 'fortune-oil', 'forture pure sunflower oil', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `u_id` bigint(20) UNSIGNED NOT NULL,
  `p_id` bigint(20) UNSIGNED NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `u_id`, `p_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 3, 8, '1', '2022-04-24 03:30:09', '2022-04-24 03:30:09'),
(2, 3, 8, '3', '2022-04-24 11:59:34', '2022-04-24 11:59:34'),
(3, 3, 8, '3', '2022-04-24 11:59:40', '2022-04-24 11:59:40'),
(4, 3, 8, '3', '2022-04-24 11:59:40', '2022-04-24 11:59:40');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `created_at`, `updated_at`, `title`, `desc`, `image`, `image_text`) VALUES
(1, '2022-04-17 03:32:30', '2022-04-24 01:56:52', '<p><strong>Laboris voluptatum oh</strong></p>', '<p>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be&nbsp;</p>', '1650191762_14.jpg', '<ul>\r\n	<li>In publishing and graphic de</li>\r\n	<li>In publishing and graphic de</li>\r\n	<li>In publishing and graphic de</li>\r\n	<li>In publishing and graphic de</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `email`, `image`, `link`, `phone`, `created_at`, `updated_at`, `address`, `name`, `desc`) VALUES
(1, 'xyhiwega@mailinator.com', '1650785879_1.jpg', 'In pariatur Quia fa', '123', '2022-04-24 01:52:59', '2022-04-24 01:53:54', 'Commodi qui beatae e', 'Carla Pickett', 'Quis voluptatibus ve');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `desc`, `image`, `category_id`, `created_at`, `updated_at`, `slug`, `view_count`) VALUES
(1, 'Phone', '<p>Smart phone</p>', '1650782399_3.png', 1, '2022-04-09 23:43:38', '2022-04-30 11:53:10', 'phone', '30'),
(2, 'Seasional fruits', '<p>Seasional fruitsSeasional fruits</p>', '1649568587_images.png', 2, '2022-04-09 23:44:47', '2022-04-30 11:59:09', 'seasional-fruits', '29'),
(3, 'Dry-Fruits', '<p>Dry-FruitsDry-Fruits</p>', '1649568624_images (1).jpg', 2, '2022-04-09 23:45:24', '2022-04-26 05:18:39', 'dry-fruits', '19'),
(4, 'Hard-drink', '<p>Hard-drinkHard-drinkHard-drink</p>', '1649569098_download (2).jpg', 4, '2022-04-09 23:53:18', '2022-04-30 11:53:14', 'hard-drink', '30');

-- --------------------------------------------------------

--
-- Table structure for table `suscribers`
--

CREATE TABLE `suscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suscribers`
--

INSERT INTO `suscribers` (`id`, `email`, `name`, `created_at`, `updated_at`) VALUES
(8, 'user@itsolutionstuff.com', 'User', '2022-04-21 13:03:14', '2022-04-21 13:03:14'),
(9, 'admin@itsolutionstuff.com', 'User', '2022-04-24 03:09:05', '2022-04-24 03:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `post`, `name`, `fb`, `gmail`, `twitter`, `image`, `created_at`, `updated_at`) VALUES
(1, 'manager', 'Marsden Cain', 'Nostrum esse aliquam', 'Pariatur Minim et m', 'Dolorem id eveniet', '1649581788_32.jpg', '2022-04-10 03:24:48', '2022-04-10 03:24:48'),
(3, 'Marketing-Manager', 'Sharon Morris', 'Obcaecati distinctio', 'Voluptatibus qui qui', 'Doloremque neque dig', '1649581881_34.jpg', '2022-04-10 03:26:21', '2022-04-10 03:26:21'),
(4, 'DesigneR', 'Garrison Goff', 'Aut eum sed ipsum do', 'Ipsum alias ut et a', 'Necessitatibus conse', '1649581902_35.jpg', '2022-04-10 03:26:42', '2022-04-10 03:27:10'),
(5, 'Dolore blanditiis do', 'Cyrus Leach', 'Officia facere ea ve', 'Iste sit suscipit d', 'Similique mollitia c', '1650795036_33.jpg', '2022-04-24 04:25:36', '2022-04-24 04:25:36');

-- --------------------------------------------------------

--
-- Table structure for table `testinominal`
--

CREATE TABLE `testinominal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stakeholders` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testinominal`
--

INSERT INTO `testinominal` (`id`, `name`, `stakeholders`, `message`, `created_at`, `updated_at`) VALUES
(1, 'praul', 'customer', 'hello my name is prajulyfd', NULL, '2022-04-24 01:27:28'),
(3, 'manish', 'vendor', 'hello my name is manishzxcvbnm,', NULL, '2022-04-10 05:56:31'),
(4, 'mukesh', 'dealer', 'hello my name is mukesh', NULL, NULL),
(5, 'Clark Velasquez', 'Mollit officiis aut', '<p>kjhb</p>', '2022-04-10 05:55:12', '2022-04-10 05:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin', NULL, '$2y$10$R3iEzTbTEk7HZsVnmLW50uHBS07vkGQBrsitydjYW/hZqQ6CsR.nK', 0, NULL, '2022-04-09 23:37:46', '2022-04-30 03:59:24'),
(2, 'Admin', 'admin@itsolutionstuff.com', NULL, '$2y$10$PeHipvrUXJXwwmh6606DdebWsgB0t4xGLSHY8hsW6vSss/RWZ2kLi', 1, NULL, '2022-04-09 23:38:54', '2022-04-30 03:58:58'),
(3, 'User', 'user@itsolutionstuff.com', NULL, '$2y$10$XXt8JQf5dWGTQ0ZSohCZ6eH/fBDq0ceNA/g24/gZ.knytNc5cPfz.', 0, NULL, '2022-04-09 23:38:54', '2022-04-09 23:38:54'),
(4, 'prajul khatiwada', 'prajul@gmail.com', NULL, '$2y$10$LBnAnr1R0Ny3/gR4Za44ceskb5hyfNcfaTZf4lcsL1D5zxLL4zzyu', 0, NULL, '2022-04-10 11:17:41', '2022-04-30 03:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_u_id_foreign` (`u_id`),
  ADD KEY `cart_p_id_foreign` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offres`
--
ALTER TABLE `offres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_product_id_foreign` (`product_id`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordertrackhistory_order_id_foreign` (`order_id`);

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
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`),
  ADD KEY `product_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rating_u_id_foreign` (`u_id`),
  ADD KEY `rating_p_id_foreign` (`p_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategory_category_id_foreign` (`category_id`);

--
-- Indexes for table `suscribers`
--
ALTER TABLE `suscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinominal`
--
ALTER TABLE `testinominal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlist_user_id_foreign` (`user_id`),
  ADD KEY `wishlist_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `offres`
--
ALTER TABLE `offres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suscribers`
--
ALTER TABLE `suscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testinominal`
--
ALTER TABLE `testinominal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `cart_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD CONSTRAINT `ordertrackhistory_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `subcategory` (`id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_p_id_foreign` FOREIGN KEY (`p_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `rating_u_id_foreign` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `wishlist_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
