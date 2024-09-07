-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 01:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mudaiieb_booking_core`
--

-- --------------------------------------------------------

--
-- Table structure for table `analytics`
--

CREATE TABLE `analytics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `view` int(11) DEFAULT NULL,
  `ch_id` int(11) DEFAULT NULL,
  `viewer_id` int(11) DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `analytics`
--

INSERT INTO `analytics` (`id`, `view`, `ch_id`, `viewer_id`, `ip`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 31, NULL, '127.0.0.1', '2022-11-21', '2022-11-21 07:52:06', '2022-11-21 07:56:28'),
(2, 1, 31, NULL, '127.0.0.2', '2022-11-21', '2022-11-21 07:55:34', '2022-11-21 07:56:23'),
(3, 1, 31, NULL, '127.0.0.1', '2022-11-20', '2022-11-20 07:52:06', '2022-11-20 07:56:28'),
(4, 1, 31, NULL, '127.0.0.2', '2022-11-19', '2022-11-19 07:55:34', '2022-11-19 07:56:23'),
(5, 1, 31, NULL, '127.0.0.1', '2022-10-20', '2022-10-20 07:52:06', '2022-10-20 07:52:06'),
(6, 1, 31, NULL, '127.0.0.2', '2022-10-19', '2022-10-19 07:55:34', '2022-10-19 07:56:23'),
(7, 1, 44, NULL, '127.0.0.1', '2022-11-22', '2022-11-22 11:00:17', '2022-11-22 11:00:17'),
(8, 1, 44, NULL, '127.0.0.1', '2022-11-23', '2022-11-23 09:42:41', '2022-11-23 09:42:41'),
(9, 1, 44, NULL, '127.0.0.1', '2022-11-24', '2022-11-24 11:16:03', '2022-11-24 11:16:03'),
(10, 1, 44, NULL, '127.0.0.1', '2022-11-28', '2022-11-28 11:04:51', '2022-11-28 11:04:51'),
(11, 1, 49, 48, '127.0.0.1', '2022-11-28', '2022-11-28 14:40:00', '2022-11-28 14:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `bc_attrs`
--

CREATE TABLE `bc_attrs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_in_filter_search` tinyint(4) DEFAULT NULL,
  `position` smallint(6) DEFAULT NULL,
  `display_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_in_single` tinyint(4) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_attrs`
--

INSERT INTO `bc_attrs` (`id`, `name`, `slug`, `service`, `hide_in_filter_search`, `position`, `display_type`, `hide_in_single`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Amenities', 'amenities', 'property', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 15:51:17', '2022-09-01 11:37:40', '2022-09-01 15:51:17'),
(2, 'Type', 'verified', 'property', NULL, NULL, NULL, NULL, 1, 1, NULL, '2022-09-01 15:50:03', '2022-11-06 14:09:15'),
(3, 'Languages', 'languages', 'property', NULL, NULL, NULL, NULL, 1, 1, NULL, '2022-11-06 14:08:59', '2022-11-06 14:09:06'),
(4, 'Budget', 'budget', 'property', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:10:57', '2022-11-06 14:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `bc_attrs_translations`
--

CREATE TABLE `bc_attrs_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hide_in_single` tinyint(4) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_bookings`
--

CREATE TABLE `bc_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  `gateway` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `total_guests` int(11) DEFAULT NULL,
  `currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` decimal(10,2) DEFAULT NULL,
  `deposit_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` decimal(10,2) DEFAULT NULL,
  `commission_type` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_credit_used` double DEFAULT NULL,
  `wallet_total_used` double DEFAULT NULL,
  `wallet_transaction_id` bigint(20) DEFAULT NULL,
  `is_refund_wallet` tinyint(4) DEFAULT NULL,
  `vendor_service_fee_amount` decimal(8,2) DEFAULT NULL,
  `vendor_service_fee` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyer_fees` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_before_fees` decimal(10,2) DEFAULT NULL,
  `pay_now` decimal(10,2) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `paid_vendor` tinyint(4) DEFAULT NULL,
  `object_child_id` bigint(20) DEFAULT NULL,
  `number` smallint(6) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_booking_meta`
--

CREATE TABLE `bc_booking_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_booking_payments`
--

CREATE TABLE `bc_booking_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_id` int(11) DEFAULT NULL,
  `payment_gateway` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `converted_amount` decimal(10,2) DEFAULT NULL,
  `converted_currency` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` decimal(10,2) DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `object_id` bigint(20) DEFAULT NULL,
  `object_model` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_transaction_id` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_contact`
--

CREATE TABLE `bc_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_contact_object`
--

CREATE TABLE `bc_contact_object` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` bigint(20) UNSIGNED NOT NULL,
  `object_model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vendor_id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_contact_object`
--

INSERT INTO `bc_contact_object` (`id`, `object_id`, `object_model`, `vendor_id`, `name`, `phone`, `email`, `message`, `status`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 5, 'property', 1, 'Mudassar Nazir', '0554379700', 'se.mudassarnazir@gmail.com', 'jdslkgj', 'sent', 2, NULL, NULL, '2022-09-01 13:55:31', '2022-09-01 13:55:31'),
(2, 2, 'property', 1, 'jkjkj', '3534', 'jkj@jkf.com', 'gdgdf gdfg', 'sent', NULL, NULL, NULL, '2022-09-08 02:51:07', '2022-09-08 02:51:07'),
(3, 2, 'property', 0, 'jfgkd', '523098', 'jkfsdj@fgjkl.com', 'jfdskljgdsh', 'sent', 1, NULL, NULL, '2022-09-12 14:28:52', '2022-09-12 14:28:52'),
(4, 2, 'property', 1, 'Mudassar', '066425523', 'se.mudassarnazir@gmail.com', 'Hey , jgdskksjd', 'sent', NULL, NULL, NULL, '2022-09-12 20:07:40', '2022-09-12 20:07:40'),
(5, 2, 'property', 1, 'Nazir Ahmed', '0554379700', 'nazir@tcs.com', 'This is called document', 'sent', NULL, NULL, NULL, '2022-09-12 20:08:13', '2022-09-12 20:08:13'),
(6, 3, 'property', 0, 'Mudassar Nazir', '0554379700', 'se.mudassarnazir@gmail.com', 'gff', 'sent', 3, NULL, NULL, '2022-09-20 00:24:53', '2022-09-20 00:24:53'),
(7, 7, 'property', 3, 'Mudassar Nazir', '0554379700', 'se.mudassarnazir@gmail.com', 'jkh', 'sent', 3, NULL, NULL, '2022-09-20 00:27:01', '2022-09-20 00:27:01'),
(8, 2, 'property', 1, 'gf', '563456', 'gfg@klgd.com', 'fg', 'sent', NULL, NULL, NULL, '2022-09-22 02:01:25', '2022-09-22 02:01:25'),
(9, 2, 'property', 1, 'mohamed', '052565889', 'mudaser@email.com', 'can you call back.', 'sent', NULL, NULL, NULL, '2022-09-27 22:46:59', '2022-09-27 22:46:59'),
(10, 3, 'property', 0, 'hellow', '0505223441', 'hellow@gail.com', 'hellow', 'sent', NULL, NULL, NULL, '2022-09-27 22:54:16', '2022-09-27 22:54:16'),
(11, 3, 'property', 0, 'sd', '050334442', 'dsd@gmail.com', 'sdf', 'sent', NULL, NULL, NULL, '2022-10-09 14:12:09', '2022-10-09 14:12:09'),
(12, 2, 'property', 1, 'Test', '9711234567545', 'test@test.com', 'Hi this is a test message', 'sent', 1, NULL, NULL, '2022-10-13 15:50:38', '2022-10-13 15:50:38'),
(13, 2, 'property', 1, 'test user', '9711245768784', 'test@test.com', 'This is another test message.', 'sent', 1, NULL, NULL, '2022-10-13 15:52:23', '2022-10-13 15:52:23'),
(14, 2, 'property', 1, 'Younas Mahmood', '03047222723', 'hm.younas22@gmail.com', 'abc', 'sent', NULL, NULL, NULL, '2022-11-15 16:43:23', '2022-11-15 16:43:23'),
(15, 9, 'property', 0, 'Hasna', '0554379700', 'info@doctorsae.com', 'dfgjkldfskjg', 'sent', NULL, NULL, NULL, '2022-11-15 20:44:53', '2022-11-15 20:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `bc_enquiries`
--

CREATE TABLE `bc_enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_inbox`
--

CREATE TABLE `bc_inbox` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `object_id` bigint(20) DEFAULT NULL,
  `object_model` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT 0,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_inbox_messages`
--

CREATE TABLE `bc_inbox_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `inbox_id` bigint(20) DEFAULT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` tinyint(4) DEFAULT 0,
  `is_read` tinyint(4) DEFAULT 0,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_languages`
--

CREATE TABLE `bc_languages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `last_build_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_languages`
--

INSERT INTO `bc_languages` (`id`, `locale`, `name`, `flag`, `status`, `create_user`, `update_user`, `last_build_at`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', 'gb', 'publish', 1, NULL, NULL, NULL, '2022-09-01 11:37:36', '2022-09-01 11:37:36'),
(2, 'ja', 'Japanese', 'jp', 'publish', 1, NULL, NULL, NULL, '2022-09-01 11:37:36', '2022-09-01 11:37:36'),
(3, 'egy', 'Egyptian', 'eg', 'publish', 1, NULL, NULL, NULL, '2022-09-01 11:37:36', '2022-09-01 11:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `bc_locations`
--

CREATE TABLE `bc_locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `trip_ideas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banner_images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_locations`
--

INSERT INTO `bc_locations` (`id`, `name`, `content`, `slug`, `image_id`, `map_lat`, `map_lng`, `map_zoom`, `status`, `banner_image_id`, `trip_ideas`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`, `banner_images`) VALUES
(1, 'Dubai', 'Find great places to stay, eat, shop, or visit from local experts.', 'miami', 92, '7.769992', '-22.434526', 12, 'publish', 97, NULL, 1, 2, NULL, 1, 1, NULL, NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:55:58', NULL),
(2, 'Abu Dhabi', 'Find great places to stay, eat, shop, or visit from local experts.', 'los-angeles', 93, '-10.027804', '-10.434659', 12, 'publish', NULL, NULL, 3, 4, NULL, 1, 1, NULL, NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:56:05', NULL),
(3, 'Sharjah', 'Find great places to stay, eat, shop, or visit from local experts.', 'florida', 94, '-27.317544', '-22.475498', 12, 'publish', NULL, NULL, 5, 6, NULL, 1, 1, NULL, NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:56:11', NULL),
(4, 'Ras Al Khaima', 'Find great places to stay, eat, shop, or visit from local experts.', 'new-york', 95, '22.376033', '57.572047', 12, 'publish', NULL, NULL, 7, 8, NULL, 1, 1, NULL, NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:56:23', NULL),
(5, 'Ajman', 'Find great places to stay, eat, shop, or visit from local experts.', 'los-angeles-1', 92, '5.390877', '-24.798459', 12, 'publish', NULL, NULL, 9, 10, NULL, 1, 1, NULL, NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:56:32', NULL),
(6, 'Umm ul Qawain', 'Find great places to stay, eat, shop, or visit from local experts.', 'new-jersey', 93, '23.606252', '-59.146457', 12, 'publish', NULL, NULL, 11, 12, NULL, 1, 1, NULL, NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:56:41', NULL),
(7, 'San Francisco', 'Find great places to stay, eat, shop, or visit from local experts.', 'san-francisco', 94, '8.565713', '46.683739', 12, 'publish', NULL, NULL, 13, 14, NULL, 1, NULL, '2022-09-01 15:57:04', NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:57:04', NULL),
(8, 'Virginia', 'Find great places to stay, eat, shop, or visit from local experts.', 'virginia', 95, '2.444673', '40.044579', 12, 'publish', NULL, NULL, 15, 16, NULL, 1, NULL, '2022-09-01 15:57:04', NULL, NULL, '2022-09-01 11:37:37', '2022-09-01 15:57:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_location_translations`
--

CREATE TABLE `bc_location_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trip_ideas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_menus`
--

CREATE TABLE `bc_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `items` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_menus`
--

INSERT INTO `bc_menus` (`id`, `name`, `items`, `create_user`, `update_user`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Main Menu', '[{\"name\":\"About\",\"url\":\"#\",\"item_model\":\"custom\",\"_open\":false},{\"name\":\"Why Contrafinder ?\",\"url\":\"#\",\"item_model\":\"custom\",\"_open\":false},{\"name\":\"Contact\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"is_removed\":true,\"_open\":false,\"target\":\"\",\"children\":[]}]', 1, 1, NULL, NULL, '2022-09-01 11:37:43', '2022-09-01 15:24:10');

-- --------------------------------------------------------

--
-- Table structure for table `bc_menu_translations`
--

CREATE TABLE `bc_menu_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `items` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_menu_translations`
--

INSERT INTO `bc_menu_translations` (`id`, `origin_id`, `locale`, `items`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'egy', '[{\"name\":\"Home\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Home\",\"url\":\"\\/egy\",\"item_model\":\"custom\",\"model_name\":\"Custom\"},{\"name\":\"Home 2\",\"url\":\"\\/egy\\/page\\/home-2\",\"item_model\":\"custom\",\"model_name\":\"Custom\"}]},{\"name\":\"Property\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Property List\",\"url\":\"\\/egy\\/property\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Property List V1\",\"url\":\"\\/egy\\/property?_layout=v1\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Property List V2\",\"url\":\"\\/egy\\/property?_layout=v5\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Property List Map\",\"url\":\"\\/egy\\/property?_layout=map1\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Property List Half map Right\",\"url\":\"\\/egy\\/property?_layout=half_map_right\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"Property Detail\",\"url\":\"\\/egy\\/property\\/adventure-high-ropes\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"Property Detail V1\",\"url\":\"\\/egy\\/property\\/adventure-high-ropes?layout=1\",\"item_model\":\"custom\",\"model_name\":\"Custom\"},{\"name\":\"Property Detail V3\",\"url\":\"\\/egy\\/property\\/adventure-high-ropes?layout=3\",\"item_model\":\"custom\",\"model_name\":\"Custom\"}]}]},{\"name\":\"Pages\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"News List\",\"url\":\"\\/egy\\/news\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"News Detail\",\"url\":\"\\/egy\\/news\\/morning-in-the-northern-sea\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"Location Detail\",\"url\":\"\\/egy\\/location\\/miami\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Vendor Profile\",\"url\":\"\\/egy\\/profile\\/1\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"About us\",\"url\":\"\\/egy\\/page\\/about-us\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"Gallery\",\"url\":\"\\/egy\\/page\\/gallery\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"Contact\",\"url\":\"\\/egy\\/contact\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]', 1, NULL, '2022-09-01 11:37:43', NULL),
(2, 1, 'ja', '[{\"name\":\"\\u30db\\u30fc\\u30e0\\u30db\\u30fc\\u30e0\",\"url\":\"\\/ja\",\"item_model\":\"custom\",\"model_name\":\"Custom\"},{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u30ea\\u30b9\\u30c8\",\"url\":\"\\/ja\\/property\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u30ea\\u30b9\\u30c8 V1\",\"url\":\"\\/ja\\/property?_layout=v1\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u30ea\\u30b9\\u30c8 V2\",\"url\":\"\\/ja\\/property?_layout=v5\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u30ea\\u30b9\\u30c8 V2\",\"url\":\"\\/ja\\/\\/property?_layout=map1\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]},{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u306e\\u8a73\\u7d30\",\"url\":\"\\/property\\/adventure-high-ropes\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u306e\\u8a73\\u7d30 V1\",\"url\":\"\\/property\\/adventure-high-ropes?layout=1\",\"item_model\":\"custom\",\"model_name\":\"Custom\"},{\"name\":\"\\u30d7\\u30ed\\u30d1\\u30c6\\u30a3\\u306e\\u8a73\\u7d30 V3\",\"url\":\"\\/property\\/adventure-high-ropes?layout=3\",\"item_model\":\"custom\",\"model_name\":\"Custom\"}]}]},{\"name\":\"\\u30da\\u30fc\\u30b8\",\"url\":\"#\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[{\"name\":\"\\u30cb\\u30e5\\u30fc\\u30b9\\u30ea\\u30b9\\u30c8\",\"url\":\"\\/ja\\/news\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u30cb\\u30e5\\u30fc\\u30b9\\u306e\\u8a73\\u7d30\",\"url\":\"\\/ja\\/news\\/morning-in-the-northern-sea\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]},{\"name\":\"\\u5834\\u6240\\u306e\\u8a73\\u7d30\",\"url\":\"\\/ja\\/location\\/miami\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"\\u30d9\\u30f3\\u30c0\\u30fc\\u30d7\\u30ed\\u30d5\\u30a1\\u30a4\\u30eb\",\"url\":\"\\/ja\\/profile\\/1\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"\\u79c1\\u305f\\u3061\\u306b\\u95a2\\u3057\\u3066\\u306f\",\"url\":\"\\/ja\\/page\\/about-us\",\"item_model\":\"custom\",\"children\":[]},{\"name\":\"\\u30ae\\u30e3\\u30e9\\u30ea\\u30fc\",\"url\":\"\\/ja\\/page\\/gallery\",\"item_model\":\"custom\",\"children\":[]}]},{\"name\":\"\\u63a5\\u89e6\",\"url\":\"\\/ja\\/contact\",\"item_model\":\"custom\",\"model_name\":\"Custom\",\"children\":[]}]', 1, NULL, '2022-09-01 11:37:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_news`
--

CREATE TABLE `bc_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `review_score` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_news`
--

INSERT INTO `bc_news` (`id`, `title`, `content`, `slug`, `status`, `cat_id`, `image_id`, `review_score`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'The day on Paris', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'the-day-on-paris', 'publish', 1, 100, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(2, 'Pure Luxe in Punta Mita', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'pure-luxe-in-punta-mita', 'publish', 2, 101, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(3, 'All Aboard the Rocky Mountaineer', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'all-aboard-the-rocky-mountaineer', 'publish', 1, 102, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(4, 'City Spotlight: Philadelphia', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'city-spotlight-philadelphia', 'publish', 1, 103, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(5, 'Tiptoe through the Tulips of Washington', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'tiptoe-through-the-tulips-of-washington', 'publish', 4, 104, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(6, 'A Seaside Reset in Laguna Beach', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'a-seaside-reset-in-laguna-beach', 'publish', 1, 105, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(7, 'America  National Parks with Denver', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'america-national-parks-with-denver', 'publish', 1, 106, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL),
(8, 'Morning in the Northern sea', ' From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception  From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception <br/>From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception<br/>\r\n    From the iconic to the unexpected, the city of San Francisco never ceases to surprise. Kick-start your effortlessly delivered Northern California holiday in the cosmopolitan hills of  The City . Join your Travel Director and fellow travellers for a Welcome Reception at your hotel.Welcome Reception', 'morning-in-the-northern-sea', 'publish', 3, 101, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_news_category`
--

CREATE TABLE `bc_news_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_news_category`
--

INSERT INTO `bc_news_category` (`id`, `name`, `content`, `slug`, `status`, `origin_id`, `lang`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Adventure Travel', NULL, 'adventure-travel', 'publish', NULL, NULL, 1, 2, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(2, 'Ecotourism', NULL, 'ecotourism', 'publish', NULL, NULL, 3, 4, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(3, 'Sea Travel ', NULL, 'sea-travel', 'publish', NULL, NULL, 5, 6, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(4, 'Hosted Tour', NULL, 'hosted-tour', 'publish', NULL, NULL, 7, 8, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(5, 'City trips ', NULL, 'city-trips', 'publish', NULL, NULL, 9, 10, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(6, 'Escorted Tour ', NULL, 'escorted-tour', 'publish', NULL, NULL, 11, 12, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `bc_news_category_translations`
--

CREATE TABLE `bc_news_category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_news_tag`
--

CREATE TABLE `bc_news_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `news_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_news_translations`
--

CREATE TABLE `bc_news_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_notifications`
--

CREATE TABLE `bc_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `is_read` tinyint(4) DEFAULT 0,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `target_parent_id` bigint(20) DEFAULT NULL,
  `params` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_pages`
--

CREATE TABLE `bc_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `template_id` int(11) DEFAULT NULL,
  `position` smallint(6) DEFAULT NULL,
  `header_style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_logo` int(11) DEFAULT NULL,
  `banner_image` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_pages`
--

INSERT INTO `bc_pages` (`id`, `slug`, `title`, `content`, `short_desc`, `status`, `publish_date`, `image_id`, `template_id`, `position`, `header_style`, `custom_logo`, `banner_image`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'home-page', 'Home Page', NULL, NULL, 'publish', NULL, NULL, 1, NULL, 'transparent', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(2, 'about-us', 'About us', NULL, NULL, 'publish', NULL, NULL, 2, NULL, 'normal', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(3, 'gallery', 'Gallery', NULL, NULL, 'publish', NULL, NULL, 4, NULL, 'normal', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(4, 'home-2', 'Home page 2', NULL, NULL, 'publish', NULL, NULL, 3, NULL, 'transparent', NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(5, 'privacy-policy', 'Privacy policy', '<h1>Privacy policy</h1>\n<p> This privacy policy (\"Policy\") describes how the personally identifiable information (\"Personal Information\") you may provide on the <a target=\"_blank\" href=\"http://dev.bookingcore.org\" rel=\"noreferrer noopener\">dev.bookingcore.org</a> website (\"Website\" or \"Service\") and any of its related products and services (collectively, \"Services\") is collected, protected and used. It also describes the choices available to you regarding our use of your Personal Information and how you can access and update this information. This Policy is a legally binding agreement between you (\"User\", \"you\" or \"your\") and this Website operator (\"Operator\", \"we\", \"us\" or \"our\"). By accessing and using the Website and Services, you acknowledge that you have read, understood, and agree to be bound by the terms of this Agreement. This Policy does not apply to the practices of companies that we do not own or control, or to individuals that we do not employ or manage.</p>\n<h2>Automatic collection of information</h2>\n<p>When you open the Website, our servers automatically record information that your browser sends. This data may include information such as your device\'s IP address, browser type and version, operating system type and version, language preferences or the webpage you were visiting before you came to the Website and Services, pages of the Website and Services that you visit, the time spent on those pages, information you search for on the Website, access times and dates, and other statistics.</p>\n<p>Information collected automatically is used only to identify potential cases of abuse and establish statistical information regarding the usage and traffic of the Website and Services. This statistical information is not otherwise aggregated in such a way that would identify any particular user of the system.</p>\n<h2>Collection of personal information</h2>\n<p>You can access and use the Website and Services without telling us who you are or revealing any information by which someone could identify you as a specific, identifiable individual. If, however, you wish to use some of the features on the Website, you may be asked to provide certain Personal Information (for example, your name and e-mail address). We receive and store any information you knowingly provide to us when you create an account, publish content,  or fill any online forms on the Website. When required, this information may include the following:</p>\n<ul>\n<li>Personal details such as name, country of residence, etc.</li>\n<li>Contact information such as email address, address, etc.</li>\n<li>Account details such as user name, unique user ID, password, etc.</li>\n<li>Information about other individuals such as your family members, friends, etc.</li>\n</ul>\n<p>Some of the information we collect is directly from you via the Website and Services. However, we may also collect Personal Information about you from other sources such as public databases and our joint marketing partners. You can choose not to provide us with your Personal Information, but then you may not be able to take advantage of some of the features on the Website. Users who are uncertain about what information is mandatory are welcome to contact us.</p>\n<h2>Use and processing of collected information</h2>\n<p>In order to make the Website and Services available to you, or to meet a legal obligation, we need to collect and use certain Personal Information. If you do not provide the information that we request, we may not be able to provide you with the requested products or services. Any of the information we collect from you may be used for the following purposes:</p>\n<ul>\n<li>Create and manage user accounts</li>\n<li>Send administrative information</li>\n<li>Request user feedback</li>\n<li>Improve user experience</li>\n<li>Enforce terms and conditions and policies</li>\n<li>Run and operate the Website and Services</li>\n</ul>\n<p>Processing your Personal Information depends on how you interact with the Website and Services, where you are located in the world and if one of the following applies: (i) you have given your consent for one or more specific purposes; this, however, does not apply, whenever the processing of Personal Information is subject to European data protection law; (ii) provision of information is necessary for the performance of an agreement with you and/or for any pre-contractual obligations thereof; (iii) processing is necessary for compliance with a legal obligation to which you are subject; (iv) processing is related to a task that is carried out in the public interest or in the exercise of official authority vested in us; (v) processing is necessary for the purposes of the legitimate interests pursued by us or by a third party.</p>\n<p> Note that under some legislations we may be allowed to process information until you object to such processing (by opting out), without having to rely on consent or any other of the following legal bases below. In any case, we will be happy to clarify the specific legal basis that applies to the processing, and in particular whether the provision of Personal Information is a statutory or contractual requirement, or a requirement necessary to enter into a contract.</p>\n<h2>Managing information</h2>\n<p>You are able to delete certain Personal Information we have about you. The Personal Information you can delete may change as the Website and Services change. When you delete Personal Information, however, we may maintain a copy of the unrevised Personal Information in our records for the duration necessary to comply with our obligations to our affiliates and partners, and for the purposes described below. If you would like to delete your Personal Information or permanently delete your account, you can do so by contacting us.</p>\n<h2>Disclosure of information</h2>\n<p> Depending on the requested Services or as necessary to complete any transaction or provide any service you have requested, we may share your information with your consent with our trusted third parties that work with us, any other affiliates and subsidiaries we rely upon to assist in the operation of the Website and Services available to you. We do not share Personal Information with unaffiliated third parties. These service providers are not authorized to use or disclose your information except as necessary to perform services on our behalf or comply with legal requirements. We may share your Personal Information for these purposes only with third parties whose privacy policies are consistent with ours or who agree to abide by our policies with respect to Personal Information. These third parties are given Personal Information they need only in order to perform their designated functions, and we do not authorize them to use or disclose Personal Information for their own marketing or other purposes.</p>\n<p>We will disclose any Personal Information we collect, use or receive if required or permitted by law, such as to comply with a subpoena, or similar legal process, and when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request.</p>\n<h2>Retention of information</h2>\n<p>We will retain and use your Personal Information for the period necessary to comply with our legal obligations, resolve disputes, and enforce our agreements unless a longer retention period is required or permitted by law. We may use any aggregated data derived from or incorporating your Personal Information after you update or delete it, but not in a manner that would identify you personally. Once the retention period expires, Personal Information shall be deleted. Therefore, the right to access, the right to erasure, the right to rectification and the right to data portability cannot be enforced after the expiration of the retention period.</p>\n<h2>The rights of users</h2>\n<p>You may exercise certain rights regarding your information processed by us. In particular, you have the right to do the following: (i) you have the right to withdraw consent where you have previously given your consent to the processing of your information; (ii) you have the right to object to the processing of your information if the processing is carried out on a legal basis other than consent; (iii) you have the right to learn if information is being processed by us, obtain disclosure regarding certain aspects of the processing and obtain a copy of the information undergoing processing; (iv) you have the right to verify the accuracy of your information and ask for it to be updated or corrected; (v) you have the right, under certain circumstances, to restrict the processing of your information, in which case, we will not process your information for any purpose other than storing it; (vi) you have the right, under certain circumstances, to obtain the erasure of your Personal Information from us; (vii) you have the right to receive your information in a structured, commonly used and machine readable format and, if technically feasible, to have it transmitted to another controller without any hindrance. This provision is applicable provided that your information is processed by automated means and that the processing is based on your consent, on a contract which you are part of or on pre-contractual obligations thereof.</p>\n<h2>Privacy of children</h2>\n<p>We do not knowingly collect any Personal Information from children under the age of 18. If you are under the age of 18, please do not submit any Personal Information through the Website and Services. We encourage parents and legal guardians to monitor their children\'s Internet usage and to help enforce this Policy by instructing their children never to provide Personal Information through the Website and Services without their permission. If you have reason to believe that a child under the age of 18 has provided Personal Information to us through the Website and Services, please contact us. You must also be old enough to consent to the processing of your Personal Information in your country (in some countries we may allow your parent or guardian to do so on your behalf).</p>\n<h2>Cookies</h2>\n<p>The Website and Services use \"cookies\" to help personalize your online experience. A cookie is a text file that is placed on your hard disk by a web page server. Cookies cannot be used to run programs or deliver viruses to your computer. Cookies are uniquely assigned to you, and can only be read by a web server in the domain that issued the cookie to you.</p>\n<p>We may use cookies to collect, store, and track information for statistical purposes to operate the Website and Services. You have the ability to accept or decline cookies. Most web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. To learn more about cookies and how to manage them, visit <a target=\"_blank\" href=\"https://www.internetcookies.org\" rel=\"noreferrer noopener\">internetcookies.org</a></p>\n<h2>Do Not Track signals</h2>\n<p>Some browsers incorporate a Do Not Track feature that signals to websites you visit that you do not want to have your online activity tracked. Tracking is not the same as using or collecting information in connection with a website. For these purposes, tracking refers to collecting personally identifiable information from consumers who use or visit a website or online service as they move across different websites over time. How browsers communicate the Do Not Track signal is not yet uniform. As a result, the Website and Services are not yet set up to interpret or respond to Do Not Track signals communicated by your browser. Even so, as described in more detail throughout this Policy, we limit our use and collection of your personal information.</p>\n<h2>Email marketing</h2>\n<p>We offer electronic newsletters to which you may voluntarily subscribe at any time. We are committed to keeping your e-mail address confidential and will not disclose your email address to any third parties except as allowed in the information use and processing section or for the purposes of utilizing a third party provider to send such emails. We will maintain the information sent via e-mail in accordance with applicable laws and regulations.</p>\n<p>In compliance with the CAN-SPAM Act, all e-mails sent from us will clearly state who the e-mail is from and provide clear information on how to contact the sender. You may choose to stop receiving our newsletter or marketing emails by following the unsubscribe instructions included in these emails or by contacting us. However, you will continue to receive essential transactional emails.</p>\n<h2>Links to other resources</h2>\n<p>The Website and Services contain links to other resources that are not owned or controlled by us. Please be aware that we are not responsible for the privacy practices of such other resources or third parties. We encourage you to be aware when you leave the Website and Services and to read the privacy statements of each and every resource that may collect Personal Information.</p>\n<h2>Information security</h2>\n<p>We secure information you provide on computer servers in a controlled, secure environment, protected from unauthorized access, use, or disclosure. We maintain reasonable administrative, technical, and physical safeguards in an effort to protect against unauthorized access, use, modification, and disclosure of Personal Information in its control and custody. However, no data transmission over the Internet or wireless network can be guaranteed. Therefore, while we strive to protect your Personal Information, you acknowledge that (i) there are security and privacy limitations of the Internet which are beyond our control; (ii) the security, integrity, and privacy of any and all information and data exchanged between you and the Website and Services cannot be guaranteed; and (iii) any such information and data may be viewed or tampered with in transit by a third party, despite best efforts.</p>\n<h2>Data breach</h2>\n<p>In the event we become aware that the security of the Website and Services has been compromised or users Personal Information has been disclosed to unrelated third parties as a result of external activity, including, but not limited to, security attacks or fraud, we reserve the right to take reasonably appropriate measures, including, but not limited to, investigation and reporting, as well as notification to and cooperation with law enforcement authorities. In the event of a data breach, we will make reasonable efforts to notify affected individuals if we believe that there is a reasonable risk of harm to the user as a result of the breach or if notice is otherwise required by law. When we do, we will post a notice on the Website, send you an email.</p>\n<h2>Changes and amendments</h2>\n<p>We reserve the right to modify this Policy or its terms relating to the Website and Services from time to time in our discretion and will notify you of any material changes to the way in which we treat Personal Information. When we do, we will post a notification on the main page of the Website. We may also provide notice to you in other ways in our discretion, such as through contact information you have provided. Any updated version of this Policy will be effective immediately upon the posting of the revised Policy unless otherwise specified. Your continued use of the Website and Services after the effective date of the revised Policy (or such other act specified at that time) will constitute your consent to those changes. However, we will not, without your consent, use your Personal Information in a manner materially different than what was stated at the time your Personal Information was collected. Policy was created with <a style=\"color:inherit;\" target=\"_blank\" href=\"https://www.websitepolicies.com/privacy-policy-generator\" rel=\"noreferrer noopener\">WebsitePolicies</a>.</p>\n<h2>Acceptance of this policy</h2>\n<p>You acknowledge that you have read this Policy and agree to all its terms and conditions. By accessing and using the Website and Services you agree to be bound by this Policy. If you do not agree to abide by the terms of this Policy, you are not authorized to access or use the Website and Services.</p>\n<h2>Contacting us</h2>\n<p>If you would like to contact us to understand more about this Policy or wish to contact us concerning any matter relating to individual rights and your Personal Information, you may do so via the <a target=\"_blank\" href=\"http://dev.bookingcore.org/contact\" rel=\"noreferrer noopener\">contact form</a></p>\n<p>This document was last updated on October 6, 2020</p>', NULL, 'publish', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, '2022-09-01 11:37:43', '2022-09-01 11:37:43'),
(6, 'privacy-policy-1', 'Privacy Policy', '<p style=\"color:#464855;font-family:Helvetica, Arial, sans-serif;font-size:18px;background-color:#ffffff;\">If your business collects or uses personal information, you will be legally required to have and post a Privacy Policy.</p>\n<p style=\"color:#464855;font-family:Helvetica, Arial, sans-serif;font-size:18px;background-color:#ffffff;\">In this article, we will discuss the elements of a Privacy Policy to help you better understand the constructs of an effective Privacy Policy agreement that instills faith and trust in your customers and protects you from a number of liability issues.</p>\n<div class=\"shortcode-wrapper sc-privacy-policy-generator-promo-steps\" style=\"color:#464855;font-family:Helvetica, Arial, sans-serif;font-size:18px;background-color:#ffffff;\">\n<div class=\"bg-promo\" style=\"background:#efecfe;padding:1rem 2rem;\">\n<p><span style=\"font-weight:bolder;\">Need a Privacy Policy? Our <a style=\"background-color:transparent;color:#025640;\" href=\"https://app.privacypolicies.com/wizard/privacy-policy\">Privacy Policy Generator</a> will help you create a custom policy that you can use on your website and mobile app</span>. Just follow these few easy steps:</p>\n<ol>\n<li><ol>\n<li style=\"margin-bottom:1rem;\">Click on \"<span style=\"font-weight:bolder;\">Start creating your Privacy Policy</span>\" on our website.</li>\n<li style=\"margin-bottom:1rem;\"><span style=\"font-weight:bolder;\">Select the platforms</span> where your Privacy Policy will be used and go to the next step.</li>\n</ol></li>\n</ol>\n<p><img style=\"border-style:none;height:auto;\" src=\"https://www.privacypolicies.com/public/uploads/2020/09/privacypolicies-privacy-policy-generator-select-platforms-step-1.jpg\" alt=\"PrivacyPolicies.com: Privacy Policy Generator - Select platforms - Step 1\" width=\"1000\" height=\"440\" /></p>\n<ol>\n<li><ol>\n<li style=\"margin-bottom:1rem;\"><span style=\"font-weight:bolder;\">Add information about your business</span>: your website and/or app.</li>\n</ol></li>\n</ol>\n<p><img style=\"border-style:none;height:auto;\" src=\"https://www.privacypolicies.com/public/uploads/2020/09/privacypolicies-privacy-policy-generator-add-business-info-step-2.jpg\" alt=\"PrivacyPolicies.com: Privacy Policy Generator - Add your business info - Step 2\" width=\"1000\" height=\"568\" /></p>\n<ol>\n<li><ol>\n<li style=\"margin-bottom:1rem;\"><span style=\"font-weight:bolder;\">Select the country</span>:</li>\n</ol></li>\n</ol>\n<p><img style=\"border-style:none;height:auto;\" src=\"https://www.privacypolicies.com/public/uploads/2020/09/privacypolicies-privacy-policy-generator-select-country-step-2.jpg\" alt=\"PrivacyPolicies.com: Privacy Policy Generator - Add your business info - Step 2\" width=\"1000\" height=\"359\" /></p>\n<ol>\n<li style=\"margin-bottom:1rem;\"><span style=\"font-weight:bolder;\">Answer the questions from our wizard</span> relating to what type of information you </li>\n</ol>\n</div>\n</div>', NULL, 'publish', NULL, NULL, NULL, NULL, 'normal', NULL, 128, 1, NULL, NULL, NULL, NULL, '2022-10-10 18:29:56', '2022-10-10 18:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `bc_page_translations`
--

CREATE TABLE `bc_page_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_payouts`
--

CREATE TABLE `bc_payouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_method` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_vendor` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_process_by` int(11) DEFAULT NULL,
  `pay_date` timestamp NULL DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_projects`
--

CREATE TABLE `bc_projects` (
  `id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `project_name` text NOT NULL,
  `project_cost` varchar(200) NOT NULL,
  `project_location` varchar(500) NOT NULL,
  `completion_year` varchar(200) NOT NULL,
  `project_description` text NOT NULL,
  `project_photos` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bc_projects`
--

INSERT INTO `bc_projects` (`id`, `property_id`, `project_name`, `project_cost`, `project_location`, `completion_year`, `project_description`, `project_photos`) VALUES
(7, 49, 'ploading photo 212', '1', 'Project name 212', '2020', '', '168,167,'),
(6, 49, '3BHK Bedroom Apartment', '1', 'ploading photo', 'ploading photo', '', ''),
(8, 49, 'dssdds 65', '1', 'dssdds 65', 'dssdds 6565', '', ''),
(9, 49, 'Project name 54', '1', 'Project name 54', 'Project name 54', '', ''),
(11, 49, 'abc', '1', 'abc', 'abc', '', '168,167,166,'),
(12, 49, 'abc', '1', 'pk. lahore, Lorem ipsum dolor sit amet, consectetur', '2021', '', '167,168,');

-- --------------------------------------------------------

--
-- Table structure for table `bc_properties`
--

CREATE TABLE `bc_properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `banner_image_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_zoom` int(11) DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_time_viewed` datetime DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `allow_children` tinyint(4) DEFAULT 0,
  `allow_infant` tinyint(4) DEFAULT 0,
  `max_guests` int(11) DEFAULT 0,
  `bed` tinyint(4) DEFAULT 0,
  `bathroom` tinyint(4) DEFAULT 0,
  `square` int(11) DEFAULT 0,
  `garages` tinyint(4) DEFAULT 0,
  `year_built` year(4) DEFAULT NULL,
  `area` int(11) DEFAULT 0,
  `area_unit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pool_size` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_zoom` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remodal_year` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amenities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `equipment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_extra_price` tinyint(4) DEFAULT NULL,
  `property_type` tinyint(4) DEFAULT 1,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_by_days` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_images` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_from` decimal(12,2) DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `socials` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable_open_hours` tinyint(4) DEFAULT NULL,
  `open_hours` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_range` tinyint(4) DEFAULT NULL,
  `property_logo` int(11) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `default_state` tinyint(4) DEFAULT 1,
  `view` int(11) DEFAULT 0,
  `review_score` int(11) DEFAULT 0,
  `recent_view` datetime DEFAULT NULL,
  `is_sold` tinyint(4) DEFAULT NULL,
  `license_number` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `certifications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_properties`
--

INSERT INTO `bc_properties` (`id`, `title`, `slug`, `content`, `image_id`, `banner_image_id`, `location_id`, `category_id`, `address`, `map_lat`, `map_lng`, `map_zoom`, `is_featured`, `gallery`, `video`, `faqs`, `last_time_viewed`, `price`, `sale_price`, `is_instant`, `allow_children`, `allow_infant`, `max_guests`, `bed`, `bathroom`, `square`, `garages`, `year_built`, `area`, `area_unit`, `deposit`, `pool_size`, `additional_zoom`, `remodal_year`, `amenities`, `equipment`, `enable_extra_price`, `property_type`, `extra_price`, `discount_by_days`, `banner_images`, `price_from`, `phone`, `email`, `website`, `socials`, `enable_open_hours`, `open_hours`, `price_range`, `property_logo`, `status`, `default_state`, `view`, `review_score`, `recent_view`, `is_sold`, `license_number`, `certifications`, `facebook`, `instagram`, `linkedin`, `twitter`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Galaxy Decors', 'adventure-high-ropes', '<p>Dishes are loosely based on Jewish cooking from the Middle East and Europe. Loosely, as a &lsquo;Russian salad&rsquo; wouldn&rsquo;t be recognised by its creator, Belgian chef Lucien Olivier, or many of his antecedents. Instead, whole green beans, large chunks of carrot, peas and potatoes were very lightly dressed with mayonnaise, and all the better for it.</p>\r\n<p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>', 83, 75, 1, NULL, '329 Queensberry Street, North Melbourne VIC 3051, Australia.', '0.397685', '-3.797259', 12, NULL, '68,69,70,71,72', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', NULL, '199.00', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '77,78,79,80', '135.00', '(877) 365-4248', 'contact@guido.com', 'www.guido.com', '[{\"icon_class\":\"fa fa-facebook\",\"url\":\"#\"},{\"icon_class\":\"fa fa-twitter\",\"url\":\"#\"},{\"icon_class\":\"fa fa-instagram\",\"url\":\"#\"},{\"icon_class\":\"fa fa-linkedin\",\"url\":\"#\"}]', 1, '{\"1\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"2\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"3\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"4\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"5\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"6\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"7\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"}}', 2, NULL, 'publish', NULL, 1, 2, NULL, NULL, '', '', '', '', '', '', 1, 1, NULL, '2022-09-01 11:37:39', '2022-10-11 15:04:22'),
(2, 'Martha O\'Hara Interiors', 'museum-of-new-york', '<p>Dishes are loosely based on Jewish cooking from the Middle East and Europe. Loosely, as a &lsquo;Russian salad&rsquo; wouldn&rsquo;t be recognised by its creator, Belgian chef Lucien Olivier, or many of his antecedents. Instead, whole green beans, large chunks of carrot, peas and potatoes were very lightly dressed with mayonnaise, and all the better for it.</p>\r\n<p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>', 84, 76, 2, NULL, 'Al Khatem Tower, ADGM,  Abu Dhabi', '3.696625', '-21.408805', 12, NULL, '105,104,103,102,101,93,94,95,96,68,69,70', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', NULL, '173.00', NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '90,86,104,', '47.00', '+971554379700', 'info@contrafinder.appstown.co', 'https://contrafinder.appstown.co/', '[{\"icon_class\":\"fa fa-facebook\",\"url\":\"#\"},{\"icon_class\":\"fa fa-twitter\",\"url\":\"#\"},{\"icon_class\":\"fa fa-instagram\",\"url\":\"#\"},{\"icon_class\":\"fa fa-linkedin\",\"url\":\"#\"}]', 1, '{\"1\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"2\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"3\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"4\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"5\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"6\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"7\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"}}', 5, NULL, 'publish', NULL, 314, 0, NULL, NULL, '', '', '', '', '', '', 1, 44, NULL, '2022-09-01 11:37:39', '2022-11-24 08:49:06'),
(3, 'The Palmas Hotel', 'the-palmas-hotel', '<p>Dishes are loosely based on Jewish cooking from the Middle East and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised by its creator, Belgian chef Lucien Olivier, or many of his antecedents. Instead, whole green beans, large chunks of carrot, peas and potatoes were very lightly dressed with mayonnaise, and all the better for it.</p><p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>', 85, 76, 3, NULL, '329 Queensberry Street, North Melbourne VIC 3051, Australia.', '-5.898278', '38.110684', 12, 0, '68,69,70,71,72', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', NULL, '199.00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '77,78,79,80', '102.00', '877.460.9438', 'contact@guido.com', 'www.guido.com', '[{\"icon_class\":\"fa fa-facebook\",\"url\":\"#\"},{\"icon_class\":\"fa fa-twitter\",\"url\":\"#\"},{\"icon_class\":\"fa fa-instagram\",\"url\":\"#\"},{\"icon_class\":\"fa fa-linkedin\",\"url\":\"#\"}]', 1, '{\"1\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"2\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"3\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"4\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"5\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"6\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"7\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"}}', 2, NULL, 'publish', 1, 1, 5, NULL, NULL, '', '', '', '', '', '', 1, NULL, '2022-10-11 14:57:29', '2022-09-01 11:37:39', '2022-10-11 14:57:29'),
(4, 'Wellness Fitness Club', 'wellness-fitness-club', '<p>Dishes are loosely based on Jewish cooking from the Middle East and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised by its creator, Belgian chef Lucien Olivier, or many of his antecedents. Instead, whole green beans, large chunks of carrot, peas and potatoes were very lightly dressed with mayonnaise, and all the better for it.</p><p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>', 86, 76, 4, NULL, '329 Queensberry Street, North Melbourne VIC 3051, Australia.', '-27.961412', '23.909984', 12, 0, '68,69,70,71,72', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', NULL, '173.00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '77,78,79,80', '130.00', '844-395-7819', 'contact@guido.com', 'www.guido.com', '[{\"icon_class\":\"fa fa-facebook\",\"url\":\"#\"},{\"icon_class\":\"fa fa-twitter\",\"url\":\"#\"},{\"icon_class\":\"fa fa-instagram\",\"url\":\"#\"},{\"icon_class\":\"fa fa-linkedin\",\"url\":\"#\"}]', 1, '{\"1\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"2\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"3\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"4\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"5\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"6\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"7\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"}}', 2, NULL, 'publish', 1, 1, 5, NULL, NULL, '', '', '', '', '', '', 1, 2, '2022-10-11 14:57:29', '2022-09-01 11:37:39', '2022-10-11 14:57:29'),
(5, 'Core by Clare Smyth', 'core-by-clare-smyth', '<p>Dishes are loosely based on Jewish cooking from the Middle East and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised by its creator, Belgian chef Lucien Olivier, or many of his antecedents. Instead, whole green beans, large chunks of carrot, peas and potatoes were very lightly dressed with mayonnaise, and all the better for it.</p><p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>', 87, 75, 1, NULL, '329 Queensberry Street, North Melbourne VIC 3051, Australia.', '21.430622', '0.307138', 12, 1, '68,69,70,71,72', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', NULL, '181.00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '77,78,79,80', '102.00', '1-877-318-8818', 'contact@guido.com', 'www.guido.com', '[{\"icon_class\":\"fa fa-facebook\",\"url\":\"#\"},{\"icon_class\":\"fa fa-twitter\",\"url\":\"#\"},{\"icon_class\":\"fa fa-instagram\",\"url\":\"#\"},{\"icon_class\":\"fa fa-linkedin\",\"url\":\"#\"}]', 1, '{\"1\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"2\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"3\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"4\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"5\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"6\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"7\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"}}', 5, NULL, 'publish', 1, 4, 2, NULL, NULL, '', '', '', '', '', '', 1, 2, '2022-10-11 14:57:29', '2022-09-01 11:37:40', '2022-10-11 14:57:29'),
(6, 'Luxary Hotel-Spa', 'luxary-hotel-spa', '<p>Dishes are loosely based on Jewish cooking from the Middle East and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised by its creator, Belgian chef Lucien Olivier, or many of his antecedents. Instead, whole green beans, large chunks of carrot, peas and potatoes were very lightly dressed with mayonnaise, and all the better for it.</p><p>Fully furnished. Elegantly appointed condominium unit situated on premier location. PS6. The wide entry hall leads to a large living room with dining area. This expansive 2 bedroom and 2 renovated marble bathroom apartment has great windows. Despite the interior views, the apartments Southern and Eastern exposures allow for lovely natural light to fill every room. The master suite is surrounded by handcrafted milkwork and features incredible walk-in closet and storage space.</p>', 88, 74, 1, NULL, '329 Queensberry Street, North Melbourne VIC 3051, Australia.', '-22.803795', '39.443547', 12, 0, '68,69,70,71,72', 'https://www.youtube.com/watch?v=UfEiKK-iX70', '[{\"title\":\"Check-in time?\",\"content\":\"As a rough guide, the check-in time is after 12 a.m. Let us know your arrival time in case you schedule and early check in we\\u2018ll do our best to have your room available.\"},{\"title\":\"Check-out time?\",\"content\":\"As a rough guide, the check-out time is before 12pm. If you plan a late check out kindly let us know your departure time, we\\u2019ll our best to satisfy your needs.\"},{\"title\":\"Is Reception open 24 hours?\",\"content\":\"Yes, Reception service is available 24 hours.\"},{\"title\":\"Which languages are spoken at Reception?\",\"content\":\"Italian, English, French, German and Spanish.\"},{\"title\":\"Can I leave my luggage?\",\"content\":\"Yes, we can look after your luggage. If at check in your room is not ready yet or in case of early check out after .We will store your luggage free of charge on your check-in and check-out days.\"},{\"title\":\"Internet connection?\",\"content\":\"A wireless internet connection is available throughout the hotel.\\r\\n\\r\\nThe guest rooms feature hi-speed web connectivity (both wireless and cabled).\"}]', NULL, '174.00', NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, '77,78,79,80', '96.00', '855-312-6078', 'contact@guido.com', 'www.guido.com', '[{\"icon_class\":\"fa fa-facebook\",\"url\":\"#\"},{\"icon_class\":\"fa fa-twitter\",\"url\":\"#\"},{\"icon_class\":\"fa fa-instagram\",\"url\":\"#\"},{\"icon_class\":\"fa fa-linkedin\",\"url\":\"#\"}]', 1, '{\"1\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"2\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"3\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"4\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"5\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"6\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"},\"7\":{\"enable\":\"1\",\"from\":\"06:30\",\"to\":\"16:00\"}}', 4, NULL, 'publish', 1, 0, 3, NULL, NULL, '', '', '', '', '', '', 1, NULL, '2022-10-11 14:57:29', '2022-09-01 11:37:40', '2022-10-11 14:57:29'),
(15, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(16, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(17, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(18, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(19, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(20, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(21, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(22, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(23, 'rter', 'rter', '<p>reter</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"1\":{\"from\":\"00:00\",\"to\":\"00:00\"},\"2\":{\"from\":\"00:00\",\"to\":\"00:00\"},\"3\":{\"from\":\"00:00\",\"to\":\"00:00\"},\"4\":{\"from\":\"00:00\",\"to\":\"00:00\"},\"5\":{\"from\":\"00:00\",\"to\":\"00:00\"},\"6\":{\"from\":\"00:00\",\"to\":\"00:00\"},\"7\":{\"from\":\"00:00\",\"to\":\"00:00\"}}', 1, NULL, 'publish', NULL, 0, 0, NULL, NULL, '', '', '', '', '', '', 21, 21, NULL, '2022-11-13 12:35:04', '2022-11-13 12:37:24'),
(24, 'Mudasar Nazir', 'fh', '<p><span style=\"color: #666666; font-family: FuturaBQ-Medium, sans-serif; font-size: 18px; background-color: #ffffff;\">Prices for the items mentioned on the Order <strong>Confirmation</strong> (&ldquo;Order Value&rdquo;) are inclusive of value-added taxes (VAT). Such VAT shall be paid by the Customer. The customer shall make advance payment for the amount corresponding to 100% of the Order Value and/or full payment of the Order Value immediately after <strong>receiving</strong> the Order <strong>Confirmation</strong> specifying the items ordered (&ldquo;Goods&rdquo;). Goods shall not be delivered unless the <em>Order</em> Value is paid in full.</span></p>', NULL, NULL, 4, NULL, '15th floor Al Khatem Tower , ADGM , Abu Dhabi , United Arab Emirates.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '139,141,138,', NULL, '+971554379700', NULL, 'https://appstown.co', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 1, 0, NULL, NULL, 'CN-23423553', '', '', '', '', '', 22, 45, NULL, '2022-11-14 01:25:12', '2022-11-26 08:42:54'),
(26, 'Olu Nigeria', 'olu-nigeria', '<p>rhtjker</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '144,', NULL, NULL, NULL, 'https://appstown.co', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'CN-23423553', '', '', '', '', '', 24, NULL, NULL, '2022-11-14 16:00:47', '2022-11-14 16:00:47'),
(27, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(28, 'Test Youna', 'test-youna', '<p>gjlkdfs fdjg dfsj fgjjkldf</p>', NULL, NULL, 3, NULL, 'fgdfdg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '145,', NULL, NULL, NULL, 'https://gjsdljkg.com', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'jfdkslg', '', '', '', '', '', 23, 23, NULL, '2022-11-14 17:39:03', '2022-11-14 17:39:13'),
(29, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(30, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(31, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(32, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(33, 'Test Test', 'test-test', '<p>Hey bro</p>', NULL, NULL, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gf', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'CN-23423553', '', '', '', '', '', 26, NULL, NULL, '2022-11-15 01:28:43', '2022-11-15 01:28:43'),
(34, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(35, 'ht', 'ht', '<p>krkyr</p>', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '148,147,146,', NULL, NULL, NULL, 'rkr', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'tjr', '', '', '', '', '', 27, 27, NULL, '2022-11-15 01:37:37', '2022-11-15 01:38:05'),
(36, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(37, 'Mudassar Nazir', 'mudassar-nazir', '<p>dskjlg sdjgsd jgs</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '154,153,152,151,150,152,151,152,151,150,', NULL, NULL, NULL, 'https://appstown.co', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'CN-23423553', '', '', '', '', '', 28, 28, NULL, '2022-11-15 02:12:23', '2022-11-15 03:55:56'),
(38, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(39, 'Mohamed Contractor', 'mohamed-contractor', '<p>ktjglk rlt je <strong>rwjl</strong> tjl j jlwer lj el wk kwr&nbsp;</p>', 157, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'www.mohamedcontracting.com', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'CN-123411', '', '', '', '', '', 29, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 12:06:14'),
(40, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(41, 'Yousaf Designs', 'yousaf-designs', '<p>Hey&nbsp;</p>', 158, NULL, 3, NULL, 'ADGM Al marayh Island', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '161,160,159,', NULL, '0554379700', NULL, 'https://appstown.co', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 0, 0, NULL, NULL, 'CN-23423553', '', '', '', '', '', 30, 30, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:58'),
(42, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(43, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(44, 'test property', 'test-property', '<p>this is my test property</p>', NULL, NULL, 1, NULL, 'Address Line 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '165,', NULL, NULL, NULL, 'www.testproperty.com', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 13, 0, NULL, NULL, '7797979', '', '', '', '', '', 31, 44, NULL, '2022-11-21 04:46:26', '2022-11-28 08:53:51'),
(45, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(46, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(47, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(48, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(49, 'Sterling Property Advisors', 'public-business-information', '<p><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px; background-color: #ffffff;\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available</span></p>', 166, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '167,168,', NULL, NULL, NULL, 'www.testproperty.com', NULL, NULL, NULL, NULL, NULL, 'publish', NULL, 81, 3, NULL, NULL, '7797979', '', 'Facebook', 'Instagram', 'Linkedin', 'Twitter', 44, 48, NULL, '2022-11-22 05:52:39', '2022-11-28 09:40:00'),
(50, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL),
(51, '  ', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, NULL, '', '', '', '', '', '', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_property_category`
--

CREATE TABLE `bc_property_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` bigint(20) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_property_category`
--

INSERT INTO `bc_property_category` (`id`, `name`, `content`, `icon`, `image_id`, `slug`, `status`, `_lft`, `_rgt`, `parent_id`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Outdoor Activity', '', 'flaticon-tent', 62, 'outdoor-activity', 'publish', 1, 2, NULL, NULL, NULL, '2022-09-01 15:53:53', NULL, NULL, '2022-09-01 11:37:42', '2022-09-01 15:53:53'),
(2, 'Restaurant', '', 'flaticon-cutlery', 63, 'restaurant', 'publish', 3, 4, NULL, NULL, NULL, '2022-11-06 14:18:52', NULL, NULL, '2022-09-01 11:37:42', '2022-11-06 14:18:52'),
(3, 'Cafe', '', 'flaticon-desk-bell', 64, 'hotels', 'publish', 5, 6, NULL, 1, NULL, '2022-11-06 14:18:52', NULL, NULL, '2022-09-01 11:37:42', '2022-11-06 14:18:52'),
(4, 'Beauty & Spa', '', 'flaticon-mirror', 65, 'beauty-spa', 'publish', 7, 8, NULL, NULL, NULL, '2022-09-01 15:53:54', NULL, NULL, '2022-09-01 11:37:42', '2022-09-01 15:53:54'),
(5, 'Retail Store', '', 'flaticon-shopping-bag', 66, 'shopping', 'publish', 9, 10, NULL, 1, NULL, '2022-11-06 14:18:52', NULL, NULL, '2022-09-01 11:37:42', '2022-11-06 14:18:52'),
(6, 'Gym', '', 'flaticon-brake', 67, 'automotive', 'publish', 11, 12, NULL, 1, NULL, '2022-11-06 14:18:52', NULL, NULL, '2022-09-01 11:37:42', '2022-11-06 14:18:52'),
(7, 'Fitout Contractor', NULL, NULL, NULL, 'fitout-contractor', 'publish', 13, 14, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-06 14:19:08', '2022-11-06 14:19:08'),
(8, 'Design & Build', NULL, NULL, NULL, 'design-build', 'publish', 15, 16, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-06 14:19:27', '2022-11-06 14:19:27'),
(9, 'FF&E', NULL, NULL, NULL, 'ffe', 'publish', 17, 18, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-06 14:19:46', '2022-11-06 14:19:46'),
(10, 'Interior Design/Decoration', NULL, NULL, NULL, 'interior-designdecoration', 'publish', 19, 20, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-06 14:20:02', '2022-11-06 14:20:02'),
(11, 'Remodeling', NULL, NULL, NULL, 'remodeling', 'publish', 21, 22, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-06 14:20:11', '2022-11-06 14:20:11'),
(12, 'Renovation', NULL, NULL, NULL, 'renovation', 'publish', 23, 24, NULL, 1, NULL, NULL, NULL, NULL, '2022-11-06 14:20:19', '2022-11-06 14:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `bc_property_category_relationships`
--

CREATE TABLE `bc_property_category_relationships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_property_category_relationships`
--

INSERT INTO `bc_property_category_relationships` (`id`, `property_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, NULL, NULL),
(4, 1, 5, NULL, NULL),
(5, 1, 6, NULL, NULL),
(7, 2, 2, NULL, NULL),
(9, 2, 5, NULL, NULL),
(10, 2, 6, NULL, NULL),
(11, 3, 3, NULL, NULL),
(12, 3, 5, NULL, NULL),
(13, 3, 6, NULL, NULL),
(14, 4, 1, NULL, NULL),
(15, 4, 2, NULL, NULL),
(16, 4, 3, NULL, NULL),
(17, 4, 4, NULL, NULL),
(18, 4, 5, NULL, NULL),
(19, 4, 6, NULL, NULL),
(20, 5, 1, NULL, NULL),
(21, 5, 2, NULL, NULL),
(22, 5, 3, NULL, NULL),
(23, 5, 5, NULL, NULL),
(24, 6, 2, NULL, NULL),
(25, 6, 3, NULL, NULL),
(26, 6, 4, NULL, NULL),
(27, 6, 5, NULL, NULL),
(28, 6, 6, NULL, NULL),
(29, 23, 9, NULL, NULL),
(30, 24, 8, NULL, NULL),
(31, 24, 7, NULL, NULL),
(32, 24, 9, NULL, NULL),
(33, 24, 10, NULL, NULL),
(34, 24, 11, NULL, NULL),
(35, 24, 12, NULL, NULL),
(36, 26, 7, NULL, NULL),
(37, 28, 11, NULL, NULL),
(38, 33, 7, NULL, NULL),
(39, 33, 10, NULL, NULL),
(40, 35, 7, NULL, NULL),
(41, 37, 7, NULL, NULL),
(42, 37, 10, NULL, NULL),
(43, 39, 7, NULL, NULL),
(44, 39, 9, NULL, NULL),
(45, 39, 11, NULL, NULL),
(46, 41, 7, NULL, NULL),
(47, 44, 7, NULL, NULL),
(48, 44, 9, NULL, NULL),
(49, 44, 11, NULL, NULL),
(58, 49, 7, NULL, NULL),
(59, 49, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_property_category_translations`
--

CREATE TABLE `bc_property_category_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_property_dates`
--

CREATE TABLE `bc_property_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `start_date` timestamp NULL DEFAULT NULL,
  `end_date` timestamp NULL DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `max_guests` tinyint(4) DEFAULT NULL,
  `active` tinyint(4) DEFAULT 0,
  `note_to_customer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note_to_admin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_instant` tinyint(4) DEFAULT 0,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_property_term`
--

CREATE TABLE `bc_property_term` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `term_id` int(11) DEFAULT NULL,
  `target_id` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_property_term`
--

INSERT INTO `bc_property_term` (`id`, `term_id`, `target_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(11, 1, 3, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(12, 4, 3, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(13, 5, 3, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(14, 4, 4, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(15, 6, 4, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(16, 2, 5, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(17, 6, 5, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(18, 1, 6, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(19, 3, 6, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(20, 4, 6, NULL, NULL, '2022-09-01 11:37:41', '2022-09-01 11:37:41'),
(21, 6, 6, NULL, NULL, '2022-09-01 11:37:42', '2022-09-01 11:37:42'),
(22, 8, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(23, 9, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(24, 10, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(25, 16, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(26, 17, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(27, 25, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(28, 26, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(29, 27, 2, 1, NULL, '2022-11-06 14:22:12', '2022-11-06 14:22:12'),
(30, 9, 23, 21, NULL, '2022-11-13 12:35:04', '2022-11-13 12:35:04'),
(31, 18, 23, 21, NULL, '2022-11-13 12:35:04', '2022-11-13 12:35:04'),
(32, 24, 23, 21, NULL, '2022-11-13 12:35:04', '2022-11-13 12:35:04'),
(33, 16, 24, 22, NULL, '2022-11-14 01:25:12', '2022-11-14 01:25:12'),
(34, 21, 24, 22, NULL, '2022-11-14 01:25:12', '2022-11-14 01:25:12'),
(37, 9, 24, 22, NULL, '2022-11-14 02:00:18', '2022-11-14 02:00:18'),
(38, 11, 24, 22, NULL, '2022-11-14 02:00:18', '2022-11-14 02:00:18'),
(39, 12, 24, 22, NULL, '2022-11-14 02:00:18', '2022-11-14 02:00:18'),
(41, 14, 24, 22, NULL, '2022-11-14 02:00:18', '2022-11-14 02:00:18'),
(43, 20, 24, 22, NULL, '2022-11-14 02:00:18', '2022-11-14 02:00:18'),
(44, 26, 24, 22, NULL, '2022-11-14 02:00:19', '2022-11-14 02:00:19'),
(45, 8, 24, 22, NULL, '2022-11-14 02:00:30', '2022-11-14 02:00:30'),
(46, 19, 24, 22, NULL, '2022-11-14 02:00:30', '2022-11-14 02:00:30'),
(50, 15, 24, 22, NULL, '2022-11-14 02:05:14', '2022-11-14 02:05:14'),
(53, 27, 24, 22, NULL, '2022-11-14 02:05:14', '2022-11-14 02:05:14'),
(54, 7, 26, 24, NULL, '2022-11-14 16:00:47', '2022-11-14 16:00:47'),
(55, 11, 28, 23, NULL, '2022-11-14 17:39:03', '2022-11-14 17:39:03'),
(56, 18, 28, 23, NULL, '2022-11-14 17:39:03', '2022-11-14 17:39:03'),
(57, 24, 28, 23, NULL, '2022-11-14 17:39:03', '2022-11-14 17:39:03'),
(58, 25, 28, 23, NULL, '2022-11-14 17:39:03', '2022-11-14 17:39:03'),
(59, 7, 33, 26, NULL, '2022-11-15 01:28:43', '2022-11-15 01:28:43'),
(60, 12, 33, 26, NULL, '2022-11-15 01:28:43', '2022-11-15 01:28:43'),
(61, 16, 33, 26, NULL, '2022-11-15 01:28:43', '2022-11-15 01:28:43'),
(62, 28, 33, 26, NULL, '2022-11-15 01:28:43', '2022-11-15 01:28:43'),
(63, 7, 35, 27, NULL, '2022-11-15 01:37:37', '2022-11-15 01:37:37'),
(64, 16, 35, 27, NULL, '2022-11-15 01:37:37', '2022-11-15 01:37:37'),
(65, 23, 35, 27, NULL, '2022-11-15 01:37:37', '2022-11-15 01:37:37'),
(66, 11, 37, 28, NULL, '2022-11-15 02:12:23', '2022-11-15 02:12:23'),
(67, 14, 37, 28, NULL, '2022-11-15 02:12:23', '2022-11-15 02:12:23'),
(68, 16, 37, 28, NULL, '2022-11-15 02:12:23', '2022-11-15 02:12:23'),
(69, 21, 37, 28, NULL, '2022-11-15 02:12:23', '2022-11-15 02:12:23'),
(70, 25, 37, 28, NULL, '2022-11-15 02:12:23', '2022-11-15 02:12:23'),
(71, 7, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(72, 9, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(73, 11, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(74, 16, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(75, 17, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(76, 19, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(77, 24, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(78, 26, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(79, 28, 39, 29, NULL, '2022-11-15 11:53:20', '2022-11-15 11:53:20'),
(80, 7, 41, 30, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:34'),
(81, 16, 41, 30, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:34'),
(82, 21, 41, 30, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:34'),
(83, 23, 41, 30, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:34'),
(84, 26, 41, 30, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:34'),
(85, 7, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(86, 9, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(87, 11, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(88, 16, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(89, 18, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(90, 20, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(91, 25, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(92, 27, 44, 31, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(115, 7, 49, 44, NULL, '2022-11-28 06:04:45', '2022-11-28 06:04:45'),
(116, 9, 49, 44, NULL, '2022-11-28 06:04:45', '2022-11-28 06:04:45'),
(117, 16, 49, 44, NULL, '2022-11-28 06:04:45', '2022-11-28 06:04:45'),
(118, 18, 49, 44, NULL, '2022-11-28 06:04:45', '2022-11-28 06:04:45'),
(119, 25, 49, 44, NULL, '2022-11-28 06:04:45', '2022-11-28 06:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `bc_property_translations`
--

CREATE TABLE `bc_property_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faqs` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_price` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_review`
--

CREATE TABLE `bc_review` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate_number` int(11) DEFAULT NULL,
  `author_ip` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` bigint(20) DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_review`
--

INSERT INTO `bc_review` (`id`, `object_id`, `object_model`, `title`, `content`, `rate_number`, `author_ip`, `vendor_id`, `status`, `publish_date`, `create_user`, `update_user`, `deleted_at`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'property', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 2, '127.0.0.1', 1, 'approved', '2022-09-01 07:37:40', 9, NULL, NULL, NULL, '2022-09-01 11:37:40', '2022-09-01 11:37:40'),
(2, 2, 'property', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 2, '127.0.0.1', 1, 'approved', '2022-09-01 07:37:40', 7, 1, '2022-10-11 15:07:38', NULL, '2022-09-01 11:37:40', '2022-10-11 15:07:38'),
(3, 3, 'property', 'Good Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 1, 'approved', '2022-09-01 07:37:40', 10, NULL, NULL, NULL, '2022-09-01 11:37:40', '2022-09-01 11:37:40'),
(4, 4, 'property', 'Trip was great', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 5, '127.0.0.1', 1, 'approved', '2022-09-01 07:37:40', 7, NULL, NULL, NULL, '2022-09-01 11:37:40', '2022-09-01 11:37:40'),
(5, 5, 'property', 'Great Trip', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 4, '127.0.0.1', 1, 'approved', '2022-09-01 07:37:40', 16, NULL, NULL, NULL, '2022-09-01 11:37:40', '2022-09-01 11:37:40'),
(6, 6, 'property', 'Easy way to discover the city', 'Eum eu sumo albucius perfecto, commodo torquatos consequuntur pro ut, id posse splendide ius. Cu nisl putent omittantur usu, mutat atomorum ex pro, ius nibh nonumy id. Nam at eius dissentias disputando, molestie mnesarchum complectitur per te', 3, '127.0.0.1', 1, 'approved', '2022-09-01 07:37:40', 11, NULL, NULL, NULL, '2022-09-01 11:37:40', '2022-09-01 11:37:40'),
(7, 5, 'property', NULL, 'hdssdjkg dsj gjds gsd gjdf hsf', 0, '94.203.112.254', 1, 'approved', NULL, 2, NULL, NULL, NULL, '2022-09-01 13:55:05', '2022-09-01 13:55:05'),
(8, 2, 'property', NULL, 'Testing review', 0, '31.215.7.147', 1, 'pending', NULL, 3, 1, NULL, NULL, '2022-09-12 20:14:30', '2022-09-12 20:22:08'),
(9, 49, 'property', NULL, 'Very nice contractor', 0, '31.215.7.147', 1, 'pending', NULL, 3, 1, NULL, NULL, '2022-09-12 20:16:56', '2022-09-12 20:21:48'),
(10, 49, 'property', NULL, 'Review Content has at least 10 character', 5, '127.0.0.1', 44, 'approved', NULL, 48, NULL, NULL, NULL, '2022-11-28 08:05:26', '2022-11-28 08:05:26'),
(11, 49, 'property', NULL, 'Review Content has at least 10 character', 5, '127.0.0.1', 44, 'approved', NULL, 48, NULL, NULL, NULL, '2022-11-28 08:06:32', '2022-11-28 08:06:32'),
(12, 49, 'property', NULL, 'Discover some of the most popular listings in Dubai based on user reviews and ratings.', 0, '127.0.0.1', 44, 'approved', NULL, 48, NULL, NULL, NULL, '2022-11-28 08:34:32', '2022-11-28 08:34:32'),
(13, 49, 'property', NULL, 'publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before fin', 0, '127.0.0.1', 44, 'approved', NULL, 48, NULL, NULL, NULL, '2022-11-28 08:37:13', '2022-11-28 08:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `bc_review_meta`
--

CREATE TABLE `bc_review_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `review_id` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_review_meta`
--

INSERT INTO `bc_review_meta` (`id`, `review_id`, `object_id`, `object_model`, `name`, `val`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 7, 5, 'property', 'Overall Rating', '0', 2, NULL, '2022-09-01 13:55:05', '2022-09-01 13:55:05'),
(2, 7, 5, 'property', 'Services', '0', 2, NULL, '2022-09-01 13:55:05', '2022-09-01 13:55:05'),
(3, 7, 5, 'property', 'Hospitality', '0', 2, NULL, '2022-09-01 13:55:05', '2022-09-01 13:55:05'),
(4, 7, 5, 'property', 'Pricing', '0', 2, NULL, '2022-09-01 13:55:05', '2022-09-01 13:55:05'),
(5, 8, 2, 'property', 'Overall Rating', '0', 3, NULL, '2022-09-12 20:14:30', '2022-09-12 20:14:30'),
(6, 8, 2, 'property', 'Services', '0', 3, NULL, '2022-09-12 20:14:30', '2022-09-12 20:14:30'),
(7, 8, 2, 'property', 'Hospitality', '0', 3, NULL, '2022-09-12 20:14:30', '2022-09-12 20:14:30'),
(8, 8, 2, 'property', 'Pricing', '0', 3, NULL, '2022-09-12 20:14:30', '2022-09-12 20:14:30'),
(9, 9, 2, 'property', 'Overall Rating', '0', 3, NULL, '2022-09-12 20:16:56', '2022-09-12 20:16:56'),
(10, 9, 2, 'property', 'Services', '0', 3, NULL, '2022-09-12 20:16:56', '2022-09-12 20:16:56'),
(11, 9, 2, 'property', 'Hospitality', '0', 3, NULL, '2022-09-12 20:16:56', '2022-09-12 20:16:56'),
(12, 9, 2, 'property', 'Pricing', '0', 3, NULL, '2022-09-12 20:16:56', '2022-09-12 20:16:56'),
(13, 10, 49, 'property', 'Overall Rating', '0', 48, NULL, '2022-11-28 08:05:26', '2022-11-28 08:05:26'),
(14, 10, 49, 'property', 'Services', '0', 48, NULL, '2022-11-28 08:05:26', '2022-11-28 08:05:26'),
(15, 10, 49, 'property', 'Hospitality', '0', 48, NULL, '2022-11-28 08:05:26', '2022-11-28 08:05:26'),
(16, 10, 49, 'property', 'Pricing', '0', 48, NULL, '2022-11-28 08:05:26', '2022-11-28 08:05:26'),
(17, 11, 49, 'property', 'Overall Rating', '0', 48, NULL, '2022-11-28 08:06:32', '2022-11-28 08:06:32'),
(18, 11, 49, 'property', 'Services', '0', 48, NULL, '2022-11-28 08:06:32', '2022-11-28 08:06:32'),
(19, 11, 49, 'property', 'Hospitality', '0', 48, NULL, '2022-11-28 08:06:32', '2022-11-28 08:06:32'),
(20, 11, 49, 'property', 'Pricing', '0', 48, NULL, '2022-11-28 08:06:32', '2022-11-28 08:06:32'),
(21, 12, 49, 'property', 'Overall Rating', '0', 48, NULL, '2022-11-28 08:34:32', '2022-11-28 08:34:32'),
(22, 12, 49, 'property', 'Services', '0', 48, NULL, '2022-11-28 08:34:32', '2022-11-28 08:34:32'),
(23, 12, 49, 'property', 'Hospitality', '0', 48, NULL, '2022-11-28 08:34:32', '2022-11-28 08:34:32'),
(24, 12, 49, 'property', 'Pricing', '0', 48, NULL, '2022-11-28 08:34:32', '2022-11-28 08:34:32'),
(25, 13, 49, 'property', 'Overall Rating', '0', 48, NULL, '2022-11-28 08:37:13', '2022-11-28 08:37:13'),
(26, 13, 49, 'property', 'Services', '0', 48, NULL, '2022-11-28 08:37:13', '2022-11-28 08:37:13'),
(27, 13, 49, 'property', 'Hospitality', '0', 48, NULL, '2022-11-28 08:37:13', '2022-11-28 08:37:13'),
(28, 13, 49, 'property', 'Pricing', '0', 48, NULL, '2022-11-28 08:37:13', '2022-11-28 08:37:13');

-- --------------------------------------------------------

--
-- Table structure for table `bc_seo`
--

CREATE TABLE `bc_seo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_index` tinyint(4) DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_image` int(11) DEFAULT NULL,
  `seo_share` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_seo`
--

INSERT INTO `bc_seo` (`id`, `object_id`, `object_model`, `seo_index`, `seo_title`, `seo_desc`, `seo_image`, `seo_share`, `create_user`, `update_user`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 1, 'location', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-09-01 15:55:58', '2022-09-01 15:55:58'),
(2, 2, 'location', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-09-01 15:56:05', '2022-09-01 15:56:05'),
(3, 3, 'location', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-09-01 15:56:11', '2022-09-01 15:56:11'),
(4, 4, 'location', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-09-01 15:56:23', '2022-09-01 15:56:23'),
(5, 5, 'location', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-09-01 15:56:32', '2022-09-01 15:56:32'),
(6, 6, 'location', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-09-01 15:56:41', '2022-09-01 15:56:41'),
(7, 2, 'property', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, 1, NULL, NULL, '2022-09-08 20:05:44', '2022-09-20 00:21:30'),
(8, 7, 'property', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 3, 1, NULL, NULL, '2022-09-20 00:26:33', '2022-09-22 01:20:32'),
(9, 6, 'page', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-10-10 18:29:56', '2022-10-10 18:29:56'),
(10, 1, 'property', 1, NULL, NULL, NULL, '{\"facebook\":{\"title\":null,\"desc\":null,\"image\":null},\"twitter\":{\"title\":null,\"desc\":null,\"image\":null}}', 1, NULL, NULL, NULL, '2022-10-11 15:04:22', '2022-10-11 15:04:22'),
(11, 23, 'property', NULL, NULL, NULL, NULL, NULL, 21, 21, NULL, NULL, '2022-11-13 12:35:04', '2022-11-13 12:37:24'),
(12, 24, 'property', NULL, NULL, NULL, NULL, NULL, 22, 22, NULL, NULL, '2022-11-14 01:25:12', '2022-11-14 01:26:51'),
(13, 26, 'property', NULL, NULL, NULL, NULL, NULL, 24, NULL, NULL, NULL, '2022-11-14 16:00:47', '2022-11-14 16:00:47'),
(14, 28, 'property', NULL, NULL, NULL, NULL, NULL, 23, 23, NULL, NULL, '2022-11-14 17:39:03', '2022-11-14 17:39:13'),
(15, 33, 'property', NULL, NULL, NULL, NULL, NULL, 26, NULL, NULL, NULL, '2022-11-15 01:28:43', '2022-11-15 01:28:43'),
(16, 35, 'property', NULL, NULL, NULL, NULL, NULL, 27, 27, NULL, NULL, '2022-11-15 01:37:37', '2022-11-15 01:38:05'),
(17, 37, 'property', NULL, NULL, NULL, NULL, NULL, 28, 28, NULL, NULL, '2022-11-15 02:12:23', '2022-11-15 02:16:24'),
(18, 39, 'property', NULL, NULL, NULL, NULL, NULL, 29, 29, NULL, NULL, '2022-11-15 11:53:20', '2022-11-15 11:58:45'),
(19, 41, 'property', NULL, NULL, NULL, NULL, NULL, 30, 30, NULL, NULL, '2022-11-15 20:37:34', '2022-11-15 20:37:58'),
(20, 44, 'property', NULL, NULL, NULL, NULL, NULL, 31, NULL, NULL, NULL, '2022-11-21 04:46:26', '2022-11-21 04:46:26'),
(21, 49, 'property', NULL, NULL, NULL, NULL, NULL, 44, 44, NULL, NULL, '2022-11-22 05:52:39', '2022-11-22 05:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `bc_services`
--

CREATE TABLE `bc_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lat` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_lng` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(4) DEFAULT NULL,
  `star_rate` tinyint(4) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL,
  `sale_price` decimal(12,2) DEFAULT NULL,
  `min_people` int(11) DEFAULT NULL,
  `max_people` int(11) DEFAULT NULL,
  `max_guests` int(11) DEFAULT NULL,
  `review_score` int(11) DEFAULT NULL,
  `min_day_before_booking` int(11) DEFAULT NULL,
  `min_day_stays` int(11) DEFAULT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_service_translations`
--

CREATE TABLE `bc_service_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_settings`
--

CREATE TABLE `bc_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autoload` tinyint(4) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_settings`
--

INSERT INTO `bc_settings` (`id`, `name`, `group`, `val`, `autoload`, `create_user`, `update_user`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'site_locale', 'general', 'en', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(2, 'site_enable_multi_lang', 'general', '1', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(3, 'enable_rtl_egy', 'general', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'news_page_list_title', 'news', 'News', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'news_page_list_banner', 'news', '107', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'news_sidebar', 'news', '[{\"title\":null,\"content\":null,\"type\":\"search_form\"},{\"title\":\"About Us\",\"content\":\"Nam dapibus nisl vitae elit fringilla rutrum. Aenean sollicitudin, erat a elementum rutrum, neque sem pretium metus, quis mollis nisl nunc et massa\",\"type\":\"content_text\"},{\"title\":\"Recent News\",\"content\":null,\"type\":\"recent_news\"},{\"title\":\"Categories\",\"content\":null,\"type\":\"category\"},{\"title\":\"Tags\",\"content\":null,\"type\":\"tag\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'news_enable_review', 'news', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'news_review_approved', 'news', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'property_page_search_title', 'property', 'Search for property', NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'property_page_search_background', 'property', '26', NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'property_page_search_layout', 'property', 'v1', NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'property_page_single_layout', 'property', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'property_enable_review', 'property', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'property_review_approved', 'property', '0', NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'property_review_stats', 'property', '[{\"title\":\"Overall Rating\"},{\"title\":\"Services\"},{\"title\":\"Hospitality\"},{\"title\":\"Pricing\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'property_booking_buyer_fees', 'property', '[{\"name\":\"Cleaning fee\",\"desc\":\"One-time fee charged by host to cover the cost of cleaning their property.\",\"name_ja\":\"\\u30af\\u30ea\\u30fc\\u30cb\\u30f3\\u30b0\\u4ee3\",\"desc_ja\":\"\\u30b9\\u30da\\u30fc\\u30b9\\u3092\\u6383\\u9664\\u3059\\u308b\\u8cbb\\u7528\\u3092\\u30db\\u30b9\\u30c8\\u304c\\u8acb\\u6c42\\u3059\\u308b1\\u56de\\u9650\\u308a\\u306e\\u6599\\u91d1\\u3002\",\"price\":\"100\",\"type\":\"one_time\"},{\"name\":\"Service fee\",\"desc\":\"This helps us run our platform and offer services like 24\\/7 support on your trip.\",\"name_ja\":\"\\u30b5\\u30fc\\u30d3\\u30b9\\u6599\",\"desc_ja\":\"\\u3053\\u308c\\u306b\\u3088\\u308a\\u3001\\u5f53\\u793e\\u306e\\u30d7\\u30e9\\u30c3\\u30c8\\u30d5\\u30a9\\u30fc\\u30e0\\u3092\\u5b9f\\u884c\\u3057\\u3001\\u65c5\\u884c\\u4e2d\\u306b\",\"price\":\"200\",\"type\":\"one_time\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'property_map_search_fields', 'property', '[{\"field\":\"service_name\",\"attr\":null,\"position\":\"1\"},{\"field\":\"location\",\"attr\":null,\"position\":\"2\"},{\"field\":\"category\",\"attr\":null,\"position\":\"3\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'property_search_fields', 'property', '{\"0\":{\"title\":\"What\",\"field\":\"category\",\"position\":\"1\"},\"3\":{\"title\":\"Where\",\"field\":\"location\",\"position\":\"2\"}}', NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'property_sidebar_search_fields', 'property', '[{\"title\":\"Location\",\"field\":\"location\",\"position\":\"3\"},{\"title\":\"What are you looking for\",\"field\":\"service_name\",\"position\":\"1\"},{\"title\":\"All Categories\",\"field\":\"category\",\"position\":\"2\"},{\"title\":\"Price\",\"field\":\"price\",\"position\":\"5\"},{\"title\":\"Amenities\",\"field\":\"amenities|1\",\"position\":\"6\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'menu_locations', 'general', '{\"primary\":1}', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:24:10'),
(21, 'admin_email', 'general', 'info@contrafinder.com', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(22, 'email_from_name', 'general', 'Guido', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(23, 'email_from_address', 'general', 'contact@bookingcore.com', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(24, 'logo_id', 'general', '11', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(25, 'logo_white_id', 'general', '12', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(26, 'footer_logo_id', 'general', '13', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(27, 'footer_bg_id', 'general', '122', NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'site_favicon', 'general', '15', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(29, 'topbar_left_text', 'general', '<div class=\"socials\">\r\n<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>\r\n<a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>\r\n<a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>\r\n</div>\r\n<span class=\"line\"></span>\r\n<a href=\"mailto:contact@bookingcore.com\">contact@bookingcore.com</a>', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(30, 'footer_text_left', 'general', '<div class=\"copyright-widget mt10 mb15-767\">\r\n<p>Copyright &copy; 2021 by Contrafinder</p>\r\n</div>', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(31, 'footer_text_right', 'general', '', NULL, 1, 1, NULL, NULL, '2022-09-01 15:20:59'),
(32, 'list_widget_footer', 'general', '[{\"title\":\"Contact Us\",\"size\":\"4\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"text-white df\\\"><span class=\\\"flaticon-pin mr15\\\"><\\/span><a href=\\\"#\\\">Al Khatem Tower, ADGM , United Arab Emirates<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"text-white\\\"><span class=\\\"flaticon-phone mr15\\\"><\\/span><a href=\\\"#\\\">+971 554379700<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li class=\\\"text-white\\\"><span class=\\\"flaticon-email mr15\\\"><\\/span><a href=\\\"#\\\"><span class=\\\"__cf_email__\\\" data-cfemail=\\\"a1d2d4d1d1ced3d5e1d2cacecdc08fc2cecc\\\">info@contrafinder.com<\\/span><\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t<\\/ul>\"},{\"title\":\"Company\",\"size\":\"2\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Help Center<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">About<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Career<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">How It Works<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Article & Tips<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Terms & Service<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t<\\/ul>\"},{\"title\":\"Discover\",\"size\":\"2\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Dubai<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Abu Dhabi<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Sharjah<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Ajman<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\t\\t\\t<li><a href=\\\"#\\\">Ras al Khaima<\\/a><\\/li>\\r\\n\\t\\t\\t\\t\\r\\n\\t\\t\\t\\t\\t\\t<\\/ul>\"}]', NULL, 1, 1, NULL, NULL, '2022-09-01 15:20:29'),
(33, 'list_widget_footer_ja', 'general', '[{\"title\":\"\\u52a9\\u3051\\u304c\\u5fc5\\u8981\\uff1f\",\"size\":\"3\",\"content\":\"<div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u304a\\u96fb\\u8a71\\u304f\\u3060\\u3055\\u3044\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            + 00 222 44 5678\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u90f5\\u4fbf\\u7269\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            hello@yoursite.com\\r\\n        <\\/div>\\r\\n    <\\/div>\\r\\n    <div class=\\\"contact\\\">\\r\\n        <div class=\\\"c-title\\\">\\r\\n            \\u30d5\\u30a9\\u30ed\\u30fc\\u3059\\u308b\\r\\n        <\\/div>\\r\\n        <div class=\\\"sub\\\">\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-facebook\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-twitter\\\"><\\/i>\\r\\n            <\\/a>\\r\\n            <a href=\\\"#\\\">\\r\\n                <i class=\\\"icofont-youtube-play\\\"><\\/i>\\r\\n            <\\/a>\\r\\n        <\\/div>\\r\\n    <\\/div>\"},{\"title\":\"\\u4f1a\\u793e\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">\\u7d04, \\u7565<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30b3\\u30df\\u30e5\\u30cb\\u30c6\\u30a3\\u30d6\\u30ed\\u30b0<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u5831\\u916c<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u3068\\u9023\\u643a<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30c1\\u30fc\\u30e0\\u306b\\u4f1a\\u3046<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"\\u30b5\\u30dd\\u30fc\\u30c8\",\"size\":\"3\",\"content\":\"<ul>\\r\\n    <li><a href=\\\"#\\\">\\u30a2\\u30ab\\u30a6\\u30f3\\u30c8<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u6cd5\\u7684<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u63a5\\u89e6<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u30a2\\u30d5\\u30a3\\u30ea\\u30a8\\u30a4\\u30c8\\u30d7\\u30ed\\u30b0\\u30e9\\u30e0<\\/a><\\/li>\\r\\n    <li><a href=\\\"#\\\">\\u500b\\u4eba\\u60c5\\u5831\\u4fdd\\u8b77\\u65b9\\u91dd<\\/a><\\/li>\\r\\n<\\/ul>\"},{\"title\":\"\\u8a2d\\u5b9a\",\"size\":\"3\",\"content\":\"<ul>\\r\\n<li><a href=\\\"#\\\">\\u8a2d\\u5b9a1<\\/a><\\/li>\\r\\n<li><a href=\\\"#\\\">\\u8a2d\\u5b9a2<\\/a><\\/li>\\r\\n<\\/ul>\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'home_page_id', 'general', '1', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(35, 'contact_form_title', 'general', 'Get in touch with us', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(36, 'contact_form_title_ja', 'general', '私たちと連絡を取る', NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'map_contact_lat', 'general', '36.401066', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(38, 'map_contact_long', 'general', '-88.312292', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(39, 'map_contact_zoom', 'general', '8', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(40, 'our_offices_title', 'general', 'Our Offices', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(41, 'our_offices_title_ja', 'general', '私たちのオフィス', NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'list_info_contact', 'general', '[{\"title\":\"London\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n     <li class=\\\"df\\\">\\r\\n          <i class=\\\"flaticon-pin mr15\\\"><\\/i>\\r\\n          <a href=\\\"#\\\">329 Queensberry Street, North<br>Melbourne VIC 3051, Australia.<\\/a>\\r\\n     <\\/li>\\r\\n      <li>\\r\\n            <i class=\\\"flaticon-phone mr15\\\"><\\/i>\\r\\n             <a href=\\\"#\\\">123 456 7890<\\/a>\\r\\n      <\\/li>\\r\\n       <li>\\r\\n              <i class=\\\"flaticon-email mr15\\\"><\\/i>\\r\\n              <a href=\\\"#\\\">[email&nbsp;protected]<\\/a>\\r\\n       <\\/li>\\r\\n<\\/ul>\\r\\n<a class=\\\"tdu text-thm direction\\\" href=\\\"#\\\">Get Direction<\\/a>\"},{\"title\":\"New York\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n     <li class=\\\"df\\\">\\r\\n          <i class=\\\"flaticon-pin mr15\\\"><\\/i>\\r\\n          <a href=\\\"#\\\">329 Queensberry Street, North<br>Melbourne VIC 3051, Australia.<\\/a>\\r\\n     <\\/li>\\r\\n      <li>\\r\\n            <i class=\\\"flaticon-phone mr15\\\"><\\/i>\\r\\n             <a href=\\\"#\\\">123 456 7890<\\/a>\\r\\n      <\\/li>\\r\\n       <li>\\r\\n              <i class=\\\"flaticon-email mr15\\\"><\\/i>\\r\\n              <a href=\\\"#\\\">[email&nbsp;protected]<\\/a>\\r\\n       <\\/li>\\r\\n<\\/ul>\\r\\n<a class=\\\"tdu text-thm direction\\\" href=\\\"#\\\">Get Direction<\\/a>\"}]', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(43, 'list_info_contact_ja', 'general', '[{\"title\":\"ロンドン\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n     <li class=\\\"df\\\">\\r\\n          <i class=\\\"flaticon-pin mr15\\\"><\\/i>\\r\\n          <a href=\\\"#\\\">329 Queensberry Street, North<br>Melbourne VIC 3051, Australia.<\\/a>\\r\\n     <\\/li>\\r\\n      <li>\\r\\n            <i class=\\\"flaticon-phone mr15\\\"><\\/i>\\r\\n             <a href=\\\"#\\\">123 456 7890<\\/a>\\r\\n      <\\/li>\\r\\n       <li>\\r\\n              <i class=\\\"flaticon-email mr15\\\"><\\/i>\\r\\n              <a href=\\\"#\\\">[email&nbsp;protected]<\\/a>\\r\\n       <\\/li>\\r\\n<\\/ul>\\r\\n<a class=\\\"tdu text-thm direction\\\" href=\\\"#\\\">Get Direction<\\/a>\"},{\"title\":\"ニューヨーク\",\"content\":\"<ul class=\\\"list-unstyled\\\">\\r\\n     <li class=\\\"df\\\">\\r\\n          <i class=\\\"flaticon-pin mr15\\\"><\\/i>\\r\\n          <a href=\\\"#\\\">329 Queensberry Street, North<br>Melbourne VIC 3051, Australia.<\\/a>\\r\\n     <\\/li>\\r\\n      <li>\\r\\n            <i class=\\\"flaticon-phone mr15\\\"><\\/i>\\r\\n             <a href=\\\"#\\\">123 456 7890<\\/a>\\r\\n      <\\/li>\\r\\n       <li>\\r\\n              <i class=\\\"flaticon-email mr15\\\"><\\/i>\\r\\n              <a href=\\\"#\\\">[email&nbsp;protected]<\\/a>\\r\\n       <\\/li>\\r\\n<\\/ul>\\r\\n<a class=\\\"tdu text-thm direction\\\" href=\\\"#\\\">Get Direction<\\/a>\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'contact_banner', 'general', '14', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(45, 'error_404_banner', 'general', '47', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(46, 'error_title', 'general', 'Ohh! Page Not Found', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(47, 'error_desc', 'general', 'We can’t seem to find the page you’re looking for', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(48, 'error_desc_ja', 'general', 'お探しのページが見つからないようです', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'maintenance_mode_title', 'general', 'We\'re coming soon.', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(50, 'maintenance_mode_desc', 'general', 'Our website is under construction. We\'ll be here soon with our new\r\nawesome site, subscribe to be notified.', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(51, 'maintenance_mode_img', 'general', '48', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(52, 'maintenance_mode_title_ja', 'general', 'もうすぐです。', NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'maintenance_mode_desc_ja', 'general', '当社のウェブサイトは現在作成中です。 私たちはすぐに私たちの新しいでここにいます\r\n素晴らしいサイト、通知を購読してください。', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'currency_main', 'payment', 'aed', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(55, 'currency_format', 'payment', 'left', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(56, 'currency_decimal', 'payment', ',', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(57, 'currency_thousand', 'payment', '.', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(58, 'currency_no_decimal', 'payment', '0', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(59, 'extra_currency', 'payment', '[{\"currency_main\":\"eur\",\"currency_format\":\"left\",\"currency_thousand\":\".\",\"currency_decimal\":\",\",\"currency_no_decimal\":\"2\",\"rate\":\"0.902807\"},{\"currency_main\":\"jpy\",\"currency_format\":\"right_space\",\"currency_thousand\":\".\",\"currency_decimal\":\",\",\"currency_no_decimal\":\"0\",\"rate\":\"0.00917113\"}]', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(60, 'map_provider', 'advance', 'gmap', NULL, 1, NULL, NULL, NULL, '2022-10-14 00:08:24'),
(61, 'map_gmap_key', 'advance', '', NULL, 1, NULL, NULL, NULL, '2022-10-14 00:08:24'),
(62, 'g_offline_payment_enable', 'payment', '1', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(63, 'g_offline_payment_name', 'payment', 'Offline Payment', NULL, 1, NULL, NULL, NULL, '2022-09-01 15:59:32'),
(64, 'date_format', 'general', 'm/d/Y', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(65, 'site_title', 'general', 'Contrafinder', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(66, 'site_timezone', 'general', 'UTC', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:28'),
(67, 'site_title', 'general', 'Guido', NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'email_header', 'general', '<h1 class=\"site-title\" style=\"text-align: center;\">Guido</h1>', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(69, 'email_footer', 'general', '<p class=\"\" style=\"text-align: center;\">&copy; 2021 Guido. All rights reserved</p>', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(70, 'enable_mail_user_registered', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'user_content_email_registered', 'user', '<h1 style=\"text-align: center\">Welcome!</h1>\r\n                    <h3>Hello [first_name] [last_name]</h3>\r\n                    <p>Thank you for signing up with Guido! We hope you enjoy your time with us.</p>\r\n                    <p>Regards,</p>\r\n                    <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'admin_enable_mail_user_registered', 'user', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'admin_content_email_user_registered', 'user', '<h3>Hello Administrator</h3>\r\n                    <p>We have new registration</p>\r\n                    <p>Full name: [first_name] [last_name]</p>\r\n                    <p>Email: [email]</p>\r\n                    <p>Regards,</p>\r\n                    <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'user_content_email_forget_password', 'user', '<h1>Hello!</h1>\r\n                    <p>You are receiving this email because we received a password reset request for your account.</p>\r\n                    <p style=\"text-align: center\">[button_reset_password]</p>\r\n                    <p>This password reset link expire in 60 minutes.</p>\r\n                    <p>If you did not request a password reset, no further action is required.\r\n                    </p>\r\n                    <p>Regards,</p>\r\n                    <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'email_driver', 'email', 'log', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(76, 'email_host', 'email', 'smtp.sendgrid.net', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(77, 'email_port', 'email', '587', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(78, 'email_encryption', 'email', 'tls', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(79, 'email_username', 'email', '', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(80, 'email_password', 'email', 'admin123', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(81, 'email_mailgun_domain', 'email', '', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(82, 'email_mailgun_secret', 'email', '', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(83, 'email_mailgun_endpoint', 'email', 'api.mailgun.net', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(84, 'email_postmark_token', 'email', '', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(85, 'email_ses_key', 'email', '', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(86, 'email_ses_secret', 'email', '', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(87, 'email_ses_region', 'email', 'us-east-1', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(88, 'email_sparkpost_secret', 'email', '5f287acb491e5669bf3c7c85ea1150b5ecb9b7be', NULL, 1, 1, NULL, NULL, '2022-11-07 20:07:58'),
(89, 'booking_enquiry_for_hotel', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'booking_enquiry_for_tour', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'booking_enquiry_for_space', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'booking_enquiry_for_car', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'booking_enquiry_for_event', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'booking_enquiry_type', 'enquiry', 'booking_and_enquiry', NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'booking_enquiry_enable_mail_to_vendor', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'booking_enquiry_mail_to_vendor_content', 'enquiry', '<h3>Hello [vendor_name]</h3>\r\n                            <p>You get new inquiry request from [email]</p>\r\n                            <p>Name :[name]</p>\r\n                            <p>Emai:[email]</p>\r\n                            <p>Phone:[phone]</p>\r\n                            <p>Content:[note]</p>\r\n                            <p>Service:[service_link]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>\r\n                            </div>', NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'booking_enquiry_enable_mail_to_admin', 'enquiry', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'booking_enquiry_mail_to_admin_content', 'enquiry', '<h3>Hello Administrator</h3>\r\n                            <p>You get new inquiry request from [email]</p>\r\n                            <p>Name :[name]</p>\r\n                            <p>Emai:[email]</p>\r\n                            <p>Phone:[phone]</p>\r\n                            <p>Content:[note]</p>\r\n                            <p>Service:[service_link]</p>\r\n                            <p>Vendor:[vendor_link]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'vendor_enable', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'vendor_commission_type', 'vendor', 'percent', NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'vendor_commission_amount', 'vendor', '10', NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'vendor_role', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'role_verify_fields', 'vendor', '{\"phone\":{\"name\":\"Phone\",\"type\":\"text\",\"roles\":[\"1\",\"2\",\"3\"],\"required\":null,\"order\":null,\"icon\":\"fa fa-phone\"},\"id_card\":{\"name\":\"ID Card\",\"type\":\"file\",\"roles\":[\"1\",\"2\",\"3\"],\"required\":\"1\",\"order\":\"0\",\"icon\":\"fa fa-id-card\"},\"trade_license\":{\"name\":\"Trade License\",\"type\":\"multi_files\",\"roles\":[\"1\",\"3\"],\"required\":\"1\",\"order\":\"0\",\"icon\":\"fa fa-copyright\"}}', NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'enable_mail_vendor_registered', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'vendor_content_email_registered', 'vendor', '<h1 style=\"text-align: center;\">Welcome!</h1>\r\n                            <h3>Hello [first_name] [last_name]</h3>\r\n                            <p>Thank you for signing up with Guido! We hope you enjoy your time with us.</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'admin_enable_mail_vendor_registered', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'admin_content_email_vendor_registered', 'vendor', '<h3>Hello Administrator</h3>\r\n                            <p>An user has been registered as Vendor. Please check the information bellow:</p>\r\n                            <p>Full name: [first_name] [last_name]</p>\r\n                            <p>Email: [email]</p>\r\n                            <p>Registration date: [created_at]</p>\r\n                            <p>You can approved the request here: [link_approved]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'cookie_agreement_enable', 'advance', '', NULL, 1, NULL, NULL, NULL, '2022-10-14 00:08:24'),
(109, 'cookie_agreement_button_text', 'advance', 'Got it', NULL, 1, NULL, NULL, NULL, '2022-10-14 00:08:24'),
(110, 'cookie_agreement_content', 'advance', '<p>This website requires cookies to provide all of its features. By using our website, you agree to our use of cookies. <a href=\"#\">More info</a></p>', NULL, 1, NULL, NULL, NULL, '2022-10-14 00:08:24'),
(111, 'logo_invoice_id', 'booking', '11', NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'invoice_company_info', 'booking', '<p><span style=\"font-size: 14pt;\"><strong>Guido Company</strong></span></p>\r\n                                <p>Ha Noi, Viet Nam</p>\r\n                                <p>www.bookingcore.org</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'enable_mail_vendor_registered', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'vendor_content_email_registered', 'vendor', '<h1 style=\"text-align: center;\">Welcome!</h1>\r\n                            <h3>Hello [first_name] [last_name]</h3>\r\n                            <p>Thank you for signing up with Guido! We hope you enjoy your time with us.</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'admin_enable_mail_vendor_registered', 'vendor', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'admin_content_email_vendor_registered', 'vendor', '<h3>Hello Administrator</h3>\r\n                            <p>An user has been registered as Vendor. Please check the information bellow:</p>\r\n                            <p>Full name: [first_name] [last_name]</p>\r\n                            <p>Email: [email]</p>\r\n                            <p>Registration date: [created_at]</p>\r\n                            <p>You can approved the request here: [link_approved]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'booking_enquiry_enable_mail_to_vendor_content', 'enquiry', '<h3>Hello [vendor_name]</h3>\r\n                            <p>You get new inquiry request from [email]</p>\r\n                            <p>Name :[name]</p>\r\n                            <p>Emai:[email]</p>\r\n                            <p>Phone:[phone]</p>\r\n                            <p>Content:[note]</p>\r\n                            <p>Service:[service_link]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>\r\n                            </div>', NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'booking_enquiry_enable_mail_to_admin_content', 'enquiry', '<h3>Hello Administrator</h3>\r\n                            <p>You get new inquiry request from [email]</p>\r\n                            <p>Name :[name]</p>\r\n                            <p>Emai:[email]</p>\r\n                            <p>Phone:[phone]</p>\r\n                            <p>Content:[note]</p>\r\n                            <p>Service:[service_link]</p>\r\n                            <p>Vendor:[vendor_link]</p>\r\n                            <p>Regards,</p>\r\n                            <p>Guido</p>', NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'wallet_module_disable', 'wallet', '1', NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'enable_search_header', 'general', '1', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(121, 'enable_category_box', 'general', '1', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(122, 'enable_location_box', 'general', '1', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(123, 'header_category_box', 'general', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\"]', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(124, 'header_location_box', 'general', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\"]', NULL, 1, 1, NULL, NULL, '2022-09-01 15:19:29'),
(125, 'check_db_engine', NULL, '1', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(126, 'wallet_credit_exchange_rate', NULL, '1', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(127, 'wallet_deposit_rate', NULL, '1', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(128, 'wallet_deposit_type', NULL, 'list', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(129, 'wallet_deposit_lists', NULL, '[{\"name\":\"100$\",\"amount\":100,\"credit\":100},{\"name\":\"Bonus 10%\",\"amount\":500,\"credit\":550},{\"name\":\"Bonus 15%\",\"amount\":1000,\"credit\":1150}]', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(130, 'wallet_new_deposit_admin_subject', NULL, 'New credit purchase', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(131, 'wallet_new_deposit_admin_content', NULL, '\r\n            <h1>Hello [first_name]!</h1>\r\n            <p>New order has been made:</p>\r\n            <p>User ID: [create_user]</p>\r\n            <p>Amount: [amount]</p>\r\n            <p>Credit: [credit]</p>\r\n            <p>Gateway: [payment_gateway]</p>\r\n            <p>Regards,<br>Guido</p>', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(132, 'wallet_new_deposit_customer_subject', NULL, 'Thank you for your purchasing', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(133, 'wallet_new_deposit_customer_content', NULL, '\r\n            <h1>Hello [first_name]!</h1>\r\n            <p>New order has been made:</p>\r\n            <p>User ID: [create_user]</p>\r\n            <p>Amount: [amount]</p>\r\n            <p>Credit: [credit]</p>\r\n            <p>Gateway: [payment_gateway]</p>\r\n            <p>Regards,<br>Guido</p>', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(134, 'wallet_update_deposit_admin_subject', NULL, 'Credit purchase updated', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(135, 'wallet_update_deposit_admin_content', NULL, '\r\n            <h1>Hello [first_name]!</h1>\r\n            <p>Order has been updated:</p>\r\n            <p>Order Status: <strong>[status_name]</strong></p>\r\n            <p>User ID: [create_user]</p>\r\n            <p>Amount: [amount]</p>\r\n            <p>Credit: [credit]</p>\r\n            <p>Gateway: [payment_gateway]</p>\r\n            <p>Regards,<br>Guido</p>', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(136, 'wallet_update_deposit_customer_subject', NULL, 'Your credit purchase updated', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(137, 'wallet_update_deposit_customer_content', NULL, '\r\n            <h1>Hello [first_name]!</h1>\r\n            <p>Order has been updated:</p>\r\n            <p>Order Status: <strong>[status_name]</strong></p>\r\n            <p>User ID: [create_user]</p>\r\n            <p>Amount: [amount]</p>\r\n            <p>Credit: [credit]</p>\r\n            <p>Gateway: [payment_gateway]</p>\r\n            <p>Regards,<br>Guido</p>', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(138, 'update_to_182', NULL, '1', NULL, NULL, NULL, NULL, '2022-09-01 11:38:05', '2022-09-01 11:38:05'),
(139, 'update_to_100', NULL, '1', NULL, NULL, NULL, NULL, '2022-09-01 11:38:06', '2022-09-01 11:38:06'),
(140, 'property_mobile_search_fields', 'property', '[{\"title\":\"Location\",\"field\":\"location\",\"position\":\"3\"},{\"title\":\"What are you looking for\",\"field\":\"service_name\",\"position\":\"1\"},{\"title\":\"All Categories\",\"field\":\"category\",\"position\":\"2\"},{\"title\":\"Price\",\"field\":\"price\",\"position\":\"5\"},{\"title\":\"Amenities\",\"field\":\"amenities|1\",\"position\":\"6\"}]', NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'update_to_110', NULL, '1', NULL, NULL, NULL, NULL, '2022-09-01 11:38:06', '2022-09-01 11:38:06'),
(142, 'site_desc', 'general', '', NULL, 1, 1, NULL, '2022-09-01 15:17:33', '2022-09-01 15:19:28'),
(143, 'site_first_day_of_the_weekin_calendar', 'general', '1', NULL, 1, 1, NULL, '2022-09-01 15:17:33', '2022-09-01 15:19:28'),
(144, 'enable_rtl', 'general', '', NULL, 1, 1, NULL, '2022-09-01 15:17:33', '2022-09-01 15:19:28'),
(145, 'enable_maintenance_mode', 'general', '', NULL, 1, 1, NULL, '2022-09-01 15:17:33', '2022-09-01 15:19:29'),
(146, 'maintenance_mode_time', 'general', '', NULL, 1, 1, NULL, '2022-09-01 15:17:33', '2022-09-01 15:19:29'),
(147, 'g_offline_payment_name_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(148, 'g_offline_payment_name_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(149, 'g_offline_payment_logo_id', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(150, 'g_offline_payment_payment_note', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(151, 'g_offline_payment_payment_note_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(152, 'g_offline_payment_payment_note_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(153, 'g_offline_payment_html', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(154, 'g_offline_payment_html_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:32', '2022-09-01 15:59:32'),
(155, 'g_offline_payment_html_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(156, 'g_paypal_enable', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(157, 'g_paypal_name', 'payment', 'Paypal', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(158, 'g_paypal_name_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(159, 'g_paypal_name_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(160, 'g_paypal_logo_id', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(161, 'g_paypal_html', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(162, 'g_paypal_html_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(163, 'g_paypal_html_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(164, 'g_paypal_test', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(165, 'g_paypal_convert_to', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(166, 'g_paypal_exchange_rate', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(167, 'g_paypal_test_account', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(168, 'g_paypal_test_client_id', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(169, 'g_paypal_test_client_secret', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(170, 'g_paypal_account', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(171, 'g_paypal_client_id', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(172, 'g_paypal_client_secret', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(173, 'g_stripe_enable', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(174, 'g_stripe_name', 'payment', 'Stripe', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(175, 'g_stripe_name_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(176, 'g_stripe_name_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(177, 'g_stripe_logo_id', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(178, 'g_stripe_html', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(179, 'g_stripe_html_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(180, 'g_stripe_html_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(181, 'g_stripe_stripe_secret_key', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(182, 'g_stripe_stripe_publishable_key', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(183, 'g_stripe_stripe_enable_sandbox', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:33', '2022-09-01 15:59:33'),
(184, 'g_stripe_stripe_test_secret_key', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(185, 'g_stripe_stripe_test_publishable_key', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(186, 'g_two_checkout_gateway_enable', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(187, 'g_two_checkout_gateway_name', 'payment', 'Two Checkout', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(188, 'g_two_checkout_gateway_name_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(189, 'g_two_checkout_gateway_name_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(190, 'g_two_checkout_gateway_logo_id', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(191, 'g_two_checkout_gateway_html', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(192, 'g_two_checkout_gateway_html_ja', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(193, 'g_two_checkout_gateway_html_egy', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(194, 'g_two_checkout_gateway_twocheckout_account_number', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(195, 'g_two_checkout_gateway_twocheckout_secret_word', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(196, 'g_two_checkout_gateway_twocheckout_enable_sandbox', 'payment', '', NULL, 1, NULL, NULL, '2022-09-01 15:59:34', '2022-09-01 15:59:34'),
(197, 'review_upload_picture', 'review', '', NULL, 1, 1, NULL, '2022-09-12 15:30:46', '2022-09-12 15:32:37'),
(198, 'google_client_secret', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(199, 'google_client_id', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(200, 'google_enable', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(201, 'facebook_client_secret', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(202, 'facebook_client_id', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(203, 'facebook_enable', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(204, 'twitter_enable', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(205, 'twitter_client_id', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(206, 'twitter_client_secret', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(207, 'recaptcha_enable', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(208, 'recaptcha_api_key', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(209, 'recaptcha_api_secret', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(210, 'head_scripts', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(211, 'body_scripts', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(212, 'footer_scripts', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(213, 'size_unit', 'advance', 'm2', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(214, 'broadcast_driver', 'advance', 'null', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(215, 'pusher_api_key', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(216, 'pusher_api_secret', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(217, 'pusher_app_id', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24'),
(218, 'pusher_cluster', 'advance', '', NULL, 1, NULL, NULL, '2022-10-14 00:08:24', '2022-10-14 00:08:24');

-- --------------------------------------------------------

--
-- Table structure for table `bc_subscribers`
--

CREATE TABLE `bc_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_subscribers`
--

INSERT INTO `bc_subscribers` (`id`, `email`, `first_name`, `last_name`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, '2022-09-20 22:47:02', '2022-09-20 22:47:02');

-- --------------------------------------------------------

--
-- Table structure for table `bc_tags`
--

CREATE TABLE `bc_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_tags`
--

INSERT INTO `bc_tags` (`id`, `name`, `slug`, `content`, `create_user`, `update_user`, `deleted_at`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'park', 'park', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(2, 'National park', 'national-park', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(3, 'Moutain', 'moutain', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(4, 'Travel', 'travel', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(5, 'Summer', 'summer', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(6, 'Walking', 'walking', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `bc_tag_translations`
--

CREATE TABLE `bc_tag_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_templates`
--

CREATE TABLE `bc_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_templates`
--

INSERT INTO `bc_templates` (`id`, `title`, `content`, `type_id`, `create_user`, `update_user`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Home Page', '[{\"type\":\"form_search_all_service\",\"name\":\"Form Search All Service\",\"model\":{\"service_types\":[\"hotel\",\"space\",\"tour\",\"car\",\"event\",\"property\"],\"title\":\"Find the right Contractor\",\"sub_title\":\"find whatever you want\",\"bg_image\":26,\"style\":\"\",\"list_slider\":[],\"title_for_property\":\"\",\"hide_form_search\":\"\",\"enable_category_box\":true,\"list_property_category\":[1,2,3,4,5,6],\"hide_tab_form_search\":true},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]\r\n\r\n', NULL, 1, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(2, 'About us', '[{\"type\":\"breadcrumb_section\",\"name\":\"Breadcrumb\",\"model\":{\"title\":\"About Us\",\"title_item_active\":\"About Us\",\"background_image\":31},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"video_player\",\"name\":\"Video Player\",\"model\":{\"title\":\"Our Mission Is To Golo\",\"sub_title\":\"Discover some of the most popular listings in Toronto based on user reviews and ratings.\",\"youtube\":\"https://www.youtube.com/watch?v=R7xbhKIiw4Y\",\"bg_image\":25,\"right_content\":\"<p class=\\\"large\\\" style=\\\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px; color: #222222; line-height: 21.68px; font-family: Jost, sans-serif; background-color: #ffffff;\\\">Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</p>\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px; color: #717171; line-height: 21.68px; font-family: Jost, sans-serif; background-color: #ffffff;\\\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque tempor faucibus tempor tincidunt egestas morbi at congue. Imperdiet blandit ac neque commodo integer turpis. Eget orci sed viverra in sed. Ipsum amet eu mauris ac. Semper netus gravida adipiscing consectetur velit aliquam tellus lobortis blandit. Adipiscing tincidunt maecenas et mattis lectus sit amet tellus.</p>\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px; color: #717171; line-height: 21.68px; font-family: Jost, sans-serif; background-color: #ffffff;\\\">Tincidunt nec condimentum lacus enim, ac arcu condimentum porttitor sollicitudin. Id elementum erat hendrerit a mi gravida iaculis non. Ullamcorper nisl vel pretium tellus, elit duis leo sed. Habitasse eget arcu tellus faucibus.</p>\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"counter_to_number\",\"name\":\"Counter to number\",\"model\":{\"title\":\"\",\"sub_title\":\"\",\"list_item\":[{\"_active\":true,\"title\":\"Happy customers\",\"number\":\"749\",\"suffix\":null},{\"_active\":true,\"title\":\"Listing pages\",\"number\":\"852\",\"suffix\":null},{\"_active\":true,\"title\":\"Best followers\",\"number\":\"28\",\"suffix\":\"K=\"},{\"_active\":true,\"title\":\"Team members\",\"number\":\"53\",\"suffix\":\"K+\"}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"title\":\"How it Works\",\"sub_title\":\"Bringing business and community members together.\",\"list_item\":[{\"_active\":true,\"title\":\"Find Businesses\",\"sub_title\":\"Discover & connect with great local businesses in your local neighborhood like dentists, hair stylists and more.\",\"icon\":\"flaticon-find-location\",\"order\":null},{\"_active\":true,\"title\":\"Review Listings\",\"sub_title\":\"Discover & connect with great local businesses in your local neighborhood like dentists, hair stylists and more.\",\"icon\":\"flaticon-comment\",\"order\":null},{\"_active\":true,\"title\":\"Make a Reservation\",\"sub_title\":\"Discover & connect with great local businesses in your local neighborhood like dentists, hair stylists and more.\",\"icon\":\"flaticon-date\",\"order\":null}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"Testimonials From Our Customers\",\"list_item\":[{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6},{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6}],\"sub_title\":\"Lorem ipsum dolor sit amet elit, sed do eiusmod tempor\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"how_it_works\",\"name\":\"How It Works\",\"model\":{\"title\":\"Get Business Exposure\",\"sub_title\":\"Your business deserves efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.\",\"link_title\":\"How it work\",\"link_more\":\"#\",\"background_image\":29},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"out_team\",\"name\":\"Our Team\",\"model\":{\"title\":\"Our Team\",\"sub_title\":\"Cities You Must Explore This Summer.\",\"list_item\":[{\"_active\":true,\"name\":\"Kathryn Murphy\",\"career\":\"Photographer\",\"avatar\":43,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null},{\"_active\":true,\"name\":\"Esther Howard\",\"career\":\"Co-manager associated\",\"avatar\":44,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null},{\"_active\":true,\"name\":\"Bessie Cooper\",\"career\":\"Designer\",\"avatar\":45,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null},{\"_active\":true,\"name\":\"Jacob Jones\",\"career\":\"Business consultant\",\"avatar\":46,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"partners\",\"name\":\"Our Partners\",\"model\":{\"title\":\"\",\"desc\":\"\",\"list_item\":[{\"_active\":true,\"avatar\":37},{\"_active\":true,\"avatar\":38},{\"_active\":true,\"avatar\":39},{\"_active\":true,\"avatar\":40},{\"_active\":true,\"avatar\":41},{\"_active\":true,\"avatar\":42}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"Submit Your Property Today!\",\"sub_title\":\"Explore some of the best tips from around the city from our partners and friends.\",\"link_title\":\"Submit now\",\"link_more\":\"#\",\"bg_color\":\"#2650D9\",\"background_image\":36},\"component\":\"RegularBlock\",\"open\":true}]', NULL, 1, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(3, 'Home Page 2', '[{\"type\":\"form_search_all_service\",\"name\":\"Form Search All Service\",\"model\":{\"service_types\":[\"hotel\",\"space\",\"tour\",\"car\",\"event\",\"property\"],\"title\":\"We Are In The Business Of Food Our Restaurants Do\",\"sub_title\":\"\",\"bg_image\":29,\"style\":\"home3\",\"list_slider\":[],\"title_for_property\":\"\",\"hide_form_search\":\"\",\"enable_category_box\":false,\"list_property_category\":[1,2,3,4,5,6],\"hide_tab_form_search\":true,\"show_quantity_list\":true,\"quantity_list_item\":[{\"_active\":true,\"item_name\":\"Restaurant\",\"item_quantity\":76},{\"_active\":true,\"item_name\":\"People Served\",\"item_quantity\":45},{\"_active\":true,\"item_name\":\"Registered Users\",\"item_quantity\":30}],\"show_counter_to\":true,\"counter_to_list\":[{\"_active\":false,\"title\":\"Restaurant\",\"number\":\"76\",\"suffix\":null},{\"_active\":false,\"title\":\"People Served\",\"number\":\"45\",\"suffix\":null},{\"_active\":false,\"title\":\"Registered Users\",\"number\":\"30\",\"suffix\":\"+\"}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"title\":\"How it Works\",\"sub_title\":\"Bringing business and community members together.\",\"list_item\":[{\"_active\":true,\"title\":\"Find Businesses\",\"sub_title\":\"Discover & connect with great local businesses in your local neighborhood like dentists, hair stylists and more.\",\"icon\":\"flaticon-find-location\",\"order\":null},{\"_active\":true,\"title\":\"Review Listings\",\"sub_title\":\"Discover & connect with great local businesses in your local neighborhood like dentists, hair stylists and more.\",\"icon\":\"flaticon-comment\",\"order\":null},{\"_active\":true,\"title\":\"Make a Reservation\",\"sub_title\":\"Discover & connect with great local businesses in your local neighborhood like dentists, hair stylists and more.\",\"icon\":\"flaticon-date\",\"order\":null}],\"display_type\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_property\",\"name\":\"Property: List Items\",\"model\":{\"title\":\"The Most Popular Things to Do in the City\",\"desc\":\"Discover some of the most popular listings in Toronto based on user reviews and ratings.\",\"number\":12,\"location_id\":\"\",\"order\":\"\",\"order_by\":\"\",\"is_featured\":\"\",\"display_type\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":[\"space\",\"hotel\",\"tour\",\"property\"],\"title\":\"Explore Hot Location\",\"desc\":\"Cities You Must Explore This Summer.\",\"number\":8,\"layout\":\"style_2\",\"order\":\"id\",\"order_by\":\"asc\",\"to_location_detail\":true,\"custom_ids\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"open_items_list\",\"name\":\"Open Items List\",\"model\":{\"title\":\"Search By Cuisine\",\"sub_title\":\"Discover some of the most popular listings in Toronto based on user reviews and ratings.\",\"list_item\":[{\"_active\":true,\"name\":\"Stakes\",\"url\":\"#\",\"background\":52},{\"_active\":true,\"name\":\"Pizza\",\"url\":\"#\",\"background\":53},{\"_active\":true,\"name\":\"Salad\",\"url\":\"#\",\"background\":54},{\"_active\":true,\"name\":\"Cheese Burger\",\"url\":\"#\",\"background\":55}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"Testimonials From Our Customers\",\"list_item\":[{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6},{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6}],\"sub_title\":\"Lorem ipsum dolor sit amet elit, sed do eiusmod tempor\",\"layout\":\"style_2\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_news\",\"name\":\"News: List Items\",\"model\":{\"title\":\"News & Tips\",\"desc\":\"Checkout Latest News And Articles From Our Blog.\",\"limit\":3,\"category_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"partners\",\"name\":\"Our Partners\",\"model\":{\"title\":\"\",\"desc\":\"\",\"list_item\":[{\"_active\":true,\"avatar\":37},{\"_active\":true,\"avatar\":38},{\"_active\":true,\"avatar\":39},{\"_active\":true,\"avatar\":40},{\"_active\":true,\"avatar\":41},{\"_active\":true,\"avatar\":42}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', NULL, 1, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL),
(4, 'Gallery', '[{\"type\":\"breadcrumb_section\",\"name\":\"Breadcrumb\",\"model\":{\"title\":\"Gallery\",\"title_item_active\":\"Gallery\",\"background_image\":31},\"component\":\"RegularBlock\",\"open\":true},{\"type\":\"gallery\",\"name\":\"Gallery\",\"model\":{\"list_item\":[{\"_active\":true,\"gallery_item_img\":68},{\"_active\":true,\"gallery_item_img\":69},{\"_active\":true,\"gallery_item_img\":70},{\"_active\":true,\"gallery_item_img\":71},{\"_active\":true,\"gallery_item_img\":72},{\"_active\":true,\"gallery_item_img\":73}]},\"component\":\"RegularBlock\",\"open\":true}]', NULL, 1, NULL, NULL, NULL, '2022-09-01 11:37:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_template_translations`
--

CREATE TABLE `bc_template_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_template_translations`
--

INSERT INTO `bc_template_translations` (`id`, `origin_id`, `locale`, `title`, `content`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 1, 'ja', 'ホームページ', '[{\"type\":\"form_search_all_service\",\"name\":\"Form Search All Service\",\"model\":{\"service_types\":[\"hotel\",\"space\",\"tour\",\"car\",\"event\",\"property\"],\"title\":\"素晴らしい目的地を探索する\",\"sub_title\":\"地元の専門家から滞在、食事、買い物、または訪問するのに最適な場所を見つける.\",\"bg_image\":26,\"style\":\"\",\"list_slider\":[],\"title_for_property\":\"\",\"hide_form_search\":\"\",\"enable_category_box\":true,\"list_property_category\":[1,2,3,4,5,6],\"hide_tab_form_search\":true},\r\n    \"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_property\",\"name\":\"Property: List Items\",\"model\":{\"title\":\"市内で最も人気のあること\",\"desc\":\"ユーザーレビューと評価に基づいてトロントで最も人気のあるリストのいくつかを発見する.\",\"number\":12,\"location_id\":\"\",\"order\":\"\",\"order_by\":\"\",\"is_featured\":\"\"},\"component\":\"RegularBlock\",\"open\":true},{\"type\":\"list_locations\",\"name\":\"List Locations\",\"model\":{\"service_type\":[\"space\",\"hotel\",\"tour\",\"property\"],\"title\":\"トレンド都市\",\"desc\":\"今年の夏に探検しなければならない都市\",\"number\":4,\"layout\":\"style_1\",\"order\":\"id\",\"order_by\":\"asc\",\"to_location_detail\":true,\"custom_ids\":\"\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"title\":\"使い方\",\"sub_title\":\"ビジネスとコミュニティのメンバーを結び付ける.\",\"list_item\":[{\"_active\":true,\"title\":\"ビジネスを探す\",\"sub_title\":\"歯科医、ヘアスタイリストなど、地元の優れた地元企業を見つけて交流しましょう.\",\"icon\":\"flaticon-find-location\",\"order\":null},{\"_active\":true,\"title\":\"リストを確認する\",\"sub_title\":\"歯科医、ヘアスタイリストなど、地元の優れた地元企業を見つけて交流しましょう.\",\"icon\":\"flaticon-comment\",\"order\":null},{\"_active\":true,\"title\":\"予約する\",\"sub_title\":\"歯科医、ヘアスタイリストなど、地元の優れた地元企業を見つけて交流しましょう.\",\"icon\":\"flaticon-date\",\"order\":null}]},\"component\":\"RegularBlock\",\"open\":true},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"お客様からの声\",\"list_item\":[{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6},{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"Front-end Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress Developer\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6}],\"sub_title\":\"Lorem ipsum dolor sit amet elit, sed do eiusmod tempor\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"how_it_works\",\"name\":\"How It Works\",\"model\":{\"title\":\"ビジネスの露出を得る\",\"sub_title\":\"あなたのビジネスは、クロスメディアの価値なしにクロスメディア情報を効率的に解き放つに値します。 リアルタイムスキーマのタイムリーな成果物をすばやく最大化.\",\"link_title\":\"それがどのように働きますか\",\"link_more\":\"#\",\"background_image\":29},\"component\":\"RegularBlock\",\"open\":true},{\"type\":\"list_news\",\"name\":\"News: List Items\",\"model\":{\"title\":\"ニュースとヒント\",\"desc\":\"私たちのブログから最新のニュースや記事をチェックアウト.\",\"limit\":3,\"category_id\":\"\",\"order\":\"id\",\"order_by\":\"asc\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"今日あなたの財産を提出してください!\",\"sub_title\":\"私たちのパートナーや友人からの街中からの最高のヒントのいくつかを探索してください.\",\"link_title\":\"Submit now\",\"link_more\":\"#\",\"bg_color\":\"#2650D9\",\"background_image\":36},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false}]', 1, NULL, '2022-09-01 11:37:43', NULL),
(2, 2, 'ja', '私たちに関しては', '[{\"type\":\"breadcrumb_section\",\"name\":\"Breadcrumb\",\"model\":{\"title\":\"私たちに関しては\",\"title_item_active\":\"私たちに関しては\",\"background_image\":31},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"video_player\",\"name\":\"Video Player\",\"model\":{\"title\":\"私たちの使命はゴロです\",\"sub_title\":\"ユーザーレビューと評価に基づいてトロントで最も人気のあるリストのいくつかを発見する.\",\"youtube\":\"https://www.youtube.com/watch?v=R7xbhKIiw4Y\",\"bg_image\":25,\"right_content\":\"<p class=\\\"large\\\" style=\\\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px; color: #222222; line-height: 21.68px; font-family: Jost, sans-serif; background-color: #ffffff;\\\">Mauris ac consectetur ante, dapibus gravida tellus. Nullam aliquet eleifend dapibus. Cras sagittis, ex euismod lacinia tempor.</p>\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px; color: #717171; line-height: 21.68px; font-family: Jost, sans-serif; background-color: #ffffff;\\\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut scelerisque tempor faucibus tempor tincidunt egestas morbi at congue. Imperdiet blandit ac neque commodo integer turpis. Eget orci sed viverra in sed. Ipsum amet eu mauris ac. Semper netus gravida adipiscing consectetur velit aliquam tellus lobortis blandit. Adipiscing tincidunt maecenas et mattis lectus sit amet tellus.</p>\\n<p style=\\\"box-sizing: border-box; margin: 0px 0px 30px; font-size: 15px; color: #717171; line-height: 21.68px; font-family: Jost, sans-serif; background-color: #ffffff;\\\">Tincidunt nec condimentum lacus enim, ac arcu condimentum porttitor sollicitudin. Id elementum erat hendrerit a mi gravida iaculis non. Ullamcorper nisl vel pretium tellus, elit duis leo sed. Habitasse eget arcu tellus faucibus.</p>\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"counter_to_number\",\"name\":\"Counter to number\",\"model\":{\"title\":\"\",\"sub_title\":\"\",\"list_item\":[{\"_active\":true,\"title\":\"幸せな顧客\",\"number\":\"749\",\"suffix\":null},{\"_active\":true,\"title\":\"ページの一覧\",\"number\":\"852\",\"suffix\":null},{\"_active\":true,\"title\":\"最高のフォロワー\",\"number\":\"28\",\"suffix\":\"K=\"},{\"_active\":true,\"title\":\"チームメンバー\",\"number\":\"53\",\"suffix\":\"K+\"}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"list_featured_item\",\"name\":\"List Featured Item\",\"model\":{\"title\":\"使い方\",\"sub_title\":\"ビジネスとコミュニティのメンバーを結び付ける.\",\"list_item\":[{\"_active\":true,\"title\":\"ビジネスを探す\",\"sub_title\":\"歯科医、ヘアスタイリストなど、地元の素晴らしい地元企業を見つけて交流しましょう.\",\"icon\":\"flaticon-find-location\",\"order\":null},{\"_active\":true,\"title\":\"リストを確認する\",\"sub_title\":\"歯科医、ヘアスタイリストなど、地元の素晴らしい地元企業を見つけて交流しましょう.\",\"icon\":\"flaticon-comment\",\"order\":null},{\"_active\":true,\"title\":\"予約する\",\"sub_title\":\"歯科医、ヘアスタイリストなど、地元の素晴らしい地元企業を見つけて交流しましょう.\",\"icon\":\"flaticon-date\",\"order\":null}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"testimonial\",\"name\":\"List Testimonial\",\"model\":{\"title\":\"お客様からの声\",\"list_item\":[{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"フロントエンドの開発者\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"フロントエンドの開発者\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress開発者\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6},{\"_active\":true,\"name\":\"Eva Hicks\",\"career\":\"フロントエンドの開発者\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":4},{\"_active\":true,\"name\":\"Daniel Parker\",\"career\":\"フロントエンドの開発者\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":5},{\"_active\":true,\"name\":\"Alison Dawn\",\"career\":\"WordPress開発者\",\"desc\":\"Faucibus tristique felis potenti ultrices ornare rhoncus semper hac facilisi Rutrum tellus lorem sem velit nisi non pharetra in dui. \",\"number_star\":5,\"avatar\":6}],\"sub_title\":\"Lorem ipsum dolor sit amet elit, sed do eiusmod tempor\"},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"how_it_works\",\"name\":\"How It Works\",\"model\":{\"title\":\"ビジネスの露出を得る\",\"sub_title\":\"あなたのビジネスは、クロスメディアの価値なしにクロスメディア情報を効率的に解き放つに値します。リアルタイムスキーマのタイムリーな成果物をすばやく最大化.\",\"link_title\":\"それがどのように働きますか\",\"link_more\":\"#\",\"background_image\":29},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"out_team\",\"name\":\"Our Team\",\"model\":{\"title\":\"私たちのチーム\",\"sub_title\":\"今年の夏に探検しなければならない都市.\",\"list_item\":[{\"_active\":true,\"name\":\"Kathryn Murphy\",\"career\":\"Photographer\",\"avatar\":43,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null},{\"_active\":true,\"name\":\"Esther Howard\",\"career\":\"Co-manager associated\",\"avatar\":44,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null},{\"_active\":true,\"name\":\"Bessie Cooper\",\"career\":\"Designer\",\"avatar\":45,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null},{\"_active\":true,\"name\":\"Jacob Jones\",\"career\":\"Business consultant\",\"avatar\":46,\"facebook\":\"#\",\"twitter\":\"#\",\"instagram\":\"#\",\"linkedin\":\"#\",\"order\":null}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"partners\",\"name\":\"Our Partners\",\"model\":{\"title\":\"\",\"desc\":\"\",\"list_item\":[{\"_active\":true,\"avatar\":37},{\"_active\":true,\"avatar\":38},{\"_active\":true,\"avatar\":39},{\"_active\":true,\"avatar\":40},{\"_active\":true,\"avatar\":41},{\"_active\":true,\"avatar\":42}]},\"component\":\"RegularBlock\",\"open\":true,\"is_container\":false},{\"type\":\"call_to_action\",\"name\":\"Call To Action\",\"model\":{\"title\":\"今日あなたの財産を提出してください!\",\"sub_title\":\"私たちのパートナーや友人からの街中からの最高のヒントのいくつかを探索してください.\",\"link_title\":\"Submit now\",\"link_more\":\"#\",\"bg_color\":\"#2650D9\",\"background_image\":36},\"component\":\"RegularBlock\",\"open\":true}]', 1, NULL, '2022-09-01 11:37:43', NULL),
(3, 4, 'ja', 'ギャラリー', '[{\"type\":\"breadcrumb_section\",\"name\":\"Breadcrumb\",\"model\":{\"title\":\"ギャラリー\",\"title_item_active\":\"Gallery\",\"background_image\":31},\"component\":\"RegularBlock\",\"open\":true},{\"type\":\"gallery\",\"name\":\"Gallery\",\"model\":{\"list_item\":[{\"_active\":true,\"gallery_item_img\":68},{\"_active\":true,\"gallery_item_img\":69},{\"_active\":true,\"gallery_item_img\":70},{\"_active\":true,\"gallery_item_img\":71},{\"_active\":true,\"gallery_item_img\":72},{\"_active\":true,\"gallery_item_img\":73}]},\"component\":\"RegularBlock\",\"open\":true}]', 1, NULL, '2022-09-01 11:37:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bc_terms`
--

CREATE TABLE `bc_terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attr_id` int(11) DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(11) DEFAULT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bc_terms`
--

INSERT INTO `bc_terms` (`id`, `name`, `content`, `attr_id`, `slug`, `icon`, `image_id`, `origin_id`, `lang`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'Restaurant/Food & Beverage', NULL, 2, 'restaurantfood-beverage', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:06:36', '2022-11-06 14:06:36'),
(8, 'Retail', NULL, 2, 'retail', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:06:56', '2022-11-06 14:06:56'),
(9, 'Office Space (Class A)', NULL, 2, 'office-space-class-a', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:07:07', '2022-11-06 14:07:07'),
(10, 'Office Space (Class B)', NULL, 2, 'office-space-class-b', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:07:18', '2022-11-06 14:07:18'),
(11, 'Office Space (Class C)', NULL, 2, 'office-space-class-c', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:07:34', '2022-11-06 14:07:34'),
(12, 'Industrial', NULL, 2, 'industrial', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:07:44', '2022-11-06 14:07:44'),
(13, 'Healthcare facilities', NULL, 2, 'healthcare-facilities', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:07:57', '2022-11-06 14:07:57'),
(14, 'Hotels/Resorts', NULL, 2, 'hotelsresorts', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:08:09', '2022-11-06 14:08:09'),
(15, 'Showroom/Gallery', NULL, 2, 'showroomgallery', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:08:22', '2022-11-06 14:08:22'),
(16, 'Speaks Arabic', NULL, 3, 'speaks-arabic', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:09:49', '2022-11-06 14:09:49'),
(17, 'Speaks English', NULL, 3, 'speaks-english', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:09:56', '2022-11-06 14:09:56'),
(18, 'Speaks French', NULL, 3, 'speaks-french', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:10:01', '2022-11-06 14:10:01'),
(19, 'Speaks Russian', NULL, 3, 'speaks-russian', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:10:10', '2022-11-06 14:10:10'),
(20, 'Speaks Urdu', NULL, 3, 'speaks-urdu', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:10:19', '2022-11-06 14:10:19'),
(21, 'Speaks Tagalog', NULL, 3, 'speaks-tagalog', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:10:25', '2022-11-06 14:10:25'),
(22, 'Speaks Spanish', NULL, 3, 'speaks-spanish', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:10:33', '2022-11-06 14:10:33'),
(23, 'AED 0 - 100K', NULL, 4, 'aed-0-100k', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:11:24', '2022-11-06 14:11:24'),
(24, 'AED 100K - 500K', NULL, 4, 'aed-100k-500k', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:11:36', '2022-11-06 14:11:36'),
(25, 'AED 500K - 800K', NULL, 4, 'aed-500k-800k', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:11:46', '2022-11-06 14:11:46'),
(26, 'AED 800K - 3M', NULL, 4, 'aed-800k-3m', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:11:55', '2022-11-06 14:11:55'),
(27, 'AED 3M - 5M', NULL, 4, 'aed-3m-5m', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:12:06', '2022-11-06 14:12:06'),
(28, 'Over AED 5M', NULL, 4, 'over-aed-5m', NULL, NULL, NULL, NULL, 1, NULL, NULL, '2022-11-06 14:12:20', '2022-11-06 14:12:20');

-- --------------------------------------------------------

--
-- Table structure for table `bc_terms_translations`
--

CREATE TABLE `bc_terms_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_translations`
--

CREATE TABLE `bc_translations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `string` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `last_build_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_vendor_plans`
--

CREATE TABLE `bc_vendor_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_commission` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bc_vendor_plan_meta`
--

CREATE TABLE `bc_vendor_plan_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_plan_id` int(11) NOT NULL,
  `post_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enable` tinyint(4) DEFAULT NULL,
  `maximum_create` int(11) DEFAULT NULL,
  `auto_publish` tinyint(4) DEFAULT NULL,
  `commission` int(11) DEFAULT NULL,
  `create_user` bigint(20) DEFAULT NULL,
  `update_user` bigint(20) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ch_messages`
--

INSERT INTO `ch_messages` (`id`, `type`, `sms_name`, `sms_email`, `sms_phone`, `from_id`, `to_id`, `body`, `attachment`, `seen`, `created_at`, `updated_at`) VALUES
(1, '', NULL, NULL, NULL, 1, 44, 'In a world full of marketing messages both online and offline, trying to reach customers is getter harder than ever. Thanks to the ease and personal touch of text messaging, businesses of all types are using texting to engage customers with promotions and drive sales both online and in-store.', NULL, 0, NULL, NULL),
(2, '', NULL, NULL, NULL, 30, 44, 'People usually need to be reminded when a payment is due. Even though email is the most common communication channel businesses use to issue payment reminders, text messaging has been an increasingly popular way for many businesses to send these reminders.', NULL, 0, '2022-11-21 06:46:04', NULL),
(3, '', 'demo user', 'newuser@gmail.com', '432423', 48, 44, 'I confirm that this message complies with the Contrafinder Review Policy, including that I do not work for, am not related to and am not a competitor of this professional.', NULL, 0, NULL, NULL),
(4, '', 'amjid khan', 'asad@gmil.com', '1111111111', 48, 44, 'I confirm that this message complies with the Contrafinder Review Policy, including that I do not work for, am not related to and am not a competitor of this professional.', NULL, 0, NULL, NULL),
(5, '', 'new khan', 'aaaaaaa@gmil.com', '00000000', 48, 44, 'abc', NULL, 0, NULL, NULL),
(6, '', 'ds', 'newudser@gmail.com', '4343', 48, 44, 'abcdsds', NULL, 0, NULL, NULL),
(7, '', 'ewew', 'newuser@gmail.com', '32322', 48, 44, 'dsdsdds3232', NULL, 0, NULL, NULL),
(8, '', 'null null', 'newuser@gmail.com', '3232', 48, 44, 'dsdsds', NULL, 0, NULL, NULL),
(9, '', 'dsds', 'newuser@gmail.com', '4342342', 48, 44, 'abc', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `core_model_has_permissions`
--

CREATE TABLE `core_model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `core_model_has_roles`
--

CREATE TABLE `core_model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_model_has_roles`
--

INSERT INTO `core_model_has_roles` (`role_id`, `model_type`, `model_id`, `deleted_at`, `updated_at`) VALUES
(1, 'App\\User', 16, '0000-00-00 00:00:00', '2022-11-07 15:44:47'),
(1, 'App\\User', 18, '0000-00-00 00:00:00', '2022-11-07 16:10:41'),
(1, 'App\\User', 19, '0000-00-00 00:00:00', '2022-11-12 10:40:35'),
(1, 'App\\User', 21, '0000-00-00 00:00:00', '2022-11-13 07:03:37'),
(1, 'App\\User', 22, '0000-00-00 00:00:00', '2022-11-13 20:22:57'),
(1, 'App\\User', 23, '0000-00-00 00:00:00', '2022-11-14 10:44:51'),
(1, 'App\\User', 24, '0000-00-00 00:00:00', '2022-11-14 10:59:23'),
(1, 'App\\User', 25, '0000-00-00 00:00:00', '2022-11-14 20:25:13'),
(1, 'App\\User', 26, '0000-00-00 00:00:00', '2022-11-14 20:26:43'),
(1, 'App\\User', 27, '0000-00-00 00:00:00', '2022-11-14 20:32:18'),
(1, 'App\\User', 28, '0000-00-00 00:00:00', '2022-11-14 21:08:14'),
(1, 'App\\User', 29, '0000-00-00 00:00:00', '2022-11-15 06:49:52'),
(1, 'App\\User', 30, '0000-00-00 00:00:00', '2022-11-15 15:35:29'),
(1, 'App\\User', 31, '0000-00-00 00:00:00', '2022-11-21 09:44:29'),
(1, 'App\\User', 32, '0000-00-00 00:00:00', '2022-11-21 09:39:35'),
(1, 'App\\User', 40, '0000-00-00 00:00:00', '2022-11-21 13:49:49'),
(1, 'App\\User', 42, '0000-00-00 00:00:00', '2022-11-21 14:13:23'),
(1, 'App\\User', 43, '0000-00-00 00:00:00', '2022-11-22 10:34:14'),
(1, 'App\\User', 44, '0000-00-00 00:00:00', '2022-11-22 10:40:44'),
(1, 'App\\User', 46, '0000-00-00 00:00:00', '2022-11-26 13:05:39'),
(2, 'App\\User', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 4, '0000-00-00 00:00:00', '2022-11-06 11:09:36'),
(2, 'App\\User', 14, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 17, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 20, '0000-00-00 00:00:00', '2022-11-13 07:01:56'),
(2, 'App\\User', 33, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 34, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 35, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 36, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 37, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 38, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 39, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 41, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'App\\User', 45, '0000-00-00 00:00:00', '2022-11-26 13:01:30'),
(2, 'App\\User', 47, '0000-00-00 00:00:00', '2022-11-26 13:12:57'),
(2, 'App\\User', 48, '0000-00-00 00:00:00', '2022-11-28 11:40:04'),
(3, 'App\\User', 1, '0000-00-00 00:00:00', '2022-11-07 15:47:36'),
(3, 'App\\User', 3, '0000-00-00 00:00:00', '2022-11-06 11:12:02'),
(3, 'App\\User', 11, '0000-00-00 00:00:00', '2022-11-07 15:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `core_permissions`
--

CREATE TABLE `core_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_permissions`
--

INSERT INTO `core_permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'report_view', 'web', '2022-09-01 11:37:23', '2022-09-01 11:37:23'),
(2, 'contact_manage', 'web', '2022-09-01 11:37:23', '2022-09-01 11:37:23'),
(3, 'newsletter_manage', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(4, 'language_manage', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(5, 'language_translation', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(6, 'booking_view', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(7, 'booking_update', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(8, 'booking_manage_others', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(9, 'enquiry_view', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(10, 'enquiry_update', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(11, 'enquiry_manage_others', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(12, 'template_view', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(13, 'template_create', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(14, 'template_update', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(15, 'template_delete', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(16, 'news_view', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(17, 'news_create', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(18, 'news_update', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(19, 'news_delete', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(20, 'news_manage_others', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(21, 'role_view', 'web', '2022-09-01 11:37:24', '2022-09-01 11:37:24'),
(22, 'role_create', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(23, 'role_update', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(24, 'role_delete', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(25, 'permission_view', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(26, 'permission_create', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(27, 'permission_update', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(28, 'permission_delete', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(29, 'dashboard_access', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(30, 'dashboard_vendor_access', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(31, 'dashboard_agent_access', 'web', '2022-09-01 11:37:25', '2022-09-01 11:37:25'),
(32, 'setting_update', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(33, 'menu_view', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(34, 'menu_create', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(35, 'menu_update', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(36, 'menu_delete', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(37, 'user_view', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(38, 'user_create', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(39, 'user_update', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(40, 'user_delete', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(41, 'page_view', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(42, 'page_create', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(43, 'page_update', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(44, 'page_delete', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(45, 'page_manage_others', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(46, 'setting_view', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(47, 'media_upload', 'web', '2022-09-01 11:37:26', '2022-09-01 11:37:26'),
(48, 'media_manage', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(49, 'tour_view', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(50, 'tour_create', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(51, 'tour_update', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(52, 'tour_delete', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(53, 'tour_manage_others', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(54, 'tour_manage_attributes', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(55, 'location_view', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(56, 'location_create', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(57, 'location_update', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(58, 'location_delete', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(59, 'location_manage_others', 'web', '2022-09-01 11:37:27', '2022-09-01 11:37:27'),
(60, 'review_manage_others', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(61, 'system_log_view', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(62, 'space_view', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(63, 'space_create', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(64, 'space_update', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(65, 'space_delete', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(66, 'space_manage_others', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(67, 'space_manage_attributes', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(68, 'hotel_view', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(69, 'hotel_create', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(70, 'hotel_update', 'web', '2022-09-01 11:37:28', '2022-09-01 11:37:28'),
(71, 'hotel_delete', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(72, 'hotel_manage_others', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(73, 'hotel_manage_attributes', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(74, 'car_view', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(75, 'car_create', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(76, 'car_update', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(77, 'car_delete', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(78, 'car_manage_others', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(79, 'car_manage_attributes', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(80, 'event_view', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(81, 'event_create', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(82, 'event_update', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(83, 'event_delete', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(84, 'event_manage_others', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(85, 'event_manage_attributes', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(86, 'social_manage_forum', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(87, 'property_view', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(88, 'property_create', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(89, 'property_update', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(90, 'property_delete', 'web', '2022-09-01 11:37:29', '2022-09-01 11:37:29'),
(91, 'property_manage_others', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(92, 'property_manage_attributes', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(93, 'agencies_view', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(94, 'agencies_create', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(95, 'agencies_update', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(96, 'agencies_delete', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(97, 'plugin_manage', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(98, 'vendor_payout_view', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(99, 'vendor_payout_manage', 'web', '2022-09-01 11:37:30', '2022-09-01 11:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `core_roles`
--

CREATE TABLE `core_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin_id` bigint(20) DEFAULT NULL,
  `lang` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_roles`
--

INSERT INTO `core_roles` (`id`, `name`, `guard_name`, `origin_id`, `lang`, `created_at`, `updated_at`) VALUES
(1, 'Contractor', 'web', NULL, NULL, '2022-09-01 11:37:30', '2022-09-01 11:37:30'),
(2, 'Customer', 'web', NULL, NULL, '2022-09-01 11:37:33', '2022-09-01 11:37:33'),
(3, 'administrator', 'web', NULL, NULL, '2022-09-01 11:37:33', '2022-09-01 11:37:33');

-- --------------------------------------------------------

--
-- Table structure for table `core_role_has_permissions`
--

CREATE TABLE `core_role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `core_role_has_permissions`
--

INSERT INTO `core_role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(5, 3),
(6, 3),
(7, 3),
(8, 3),
(9, 3),
(10, 3),
(11, 3),
(12, 3),
(13, 3),
(14, 3),
(15, 3),
(16, 3),
(17, 3),
(18, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 1),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3),
(36, 3),
(37, 3),
(38, 3),
(39, 3),
(40, 3),
(41, 3),
(42, 3),
(43, 3),
(44, 3),
(45, 3),
(46, 3),
(47, 1),
(47, 3),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 3),
(54, 3),
(55, 3),
(56, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 3),
(61, 3),
(62, 1),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3),
(66, 3),
(67, 3),
(68, 1),
(68, 3),
(69, 1),
(69, 3),
(70, 1),
(70, 3),
(71, 1),
(71, 3),
(72, 3),
(73, 3),
(74, 1),
(74, 3),
(75, 1),
(75, 3),
(76, 1),
(76, 3),
(77, 1),
(77, 3),
(78, 3),
(79, 3),
(80, 1),
(80, 3),
(81, 1),
(81, 3),
(82, 1),
(82, 3),
(83, 1),
(83, 3),
(84, 3),
(85, 3),
(86, 3),
(87, 1),
(87, 3),
(88, 1),
(88, 3),
(89, 1),
(89, 3),
(90, 1),
(90, 3),
(91, 3),
(92, 3),
(93, 3),
(94, 3),
(95, 3),
(96, 3),
(97, 3),
(98, 3),
(99, 3);

-- --------------------------------------------------------

--
-- Table structure for table `media_files`
--

CREATE TABLE `media_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_extension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `app_id` int(11) DEFAULT NULL,
  `app_user_id` int(11) DEFAULT NULL,
  `file_width` int(11) DEFAULT NULL,
  `file_height` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media_files`
--

INSERT INTO `media_files` (`id`, `file_name`, `file_path`, `file_size`, `file_type`, `file_extension`, `create_user`, `update_user`, `deleted_at`, `app_id`, `app_user_id`, `file_width`, `file_height`, `created_at`, `updated_at`) VALUES
(1, 'avatar', 'demo/general/avatar.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'avatar-2', 'demo/general/avatar-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'avatar-3', 'demo/general/avatar-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'testimonial', 'demo/testimonial/1.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'testimonial-2', 'demo/testimonial/2.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'testimonial-3', 'demo/testimonial/3.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'ico_adventurous', 'demo/general/ico_adventurous.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'ico_localguide', 'demo/general/ico_localguide.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'ico_maps', 'demo/general/ico_maps.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'ico_paymethod', 'demo/general/ico_paymethod.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'logo', 'demo/general/logo.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'logo_white', 'demo/general/logo_white.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'footer_logo', 'demo/general/footer-logo.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'contact_banner', 'demo/general/contact_banner.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'favicon', 'demo/general/favicon.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'thumb-vendor-register', 'demo/general/thumb-vendor-register.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'bg-video-vendor-register1', 'demo/general/bg-video-vendor-register1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'ico_chat_1', 'demo/general/ico_chat_1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'ico_friendship_1', 'demo/general/ico_friendship_1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'ico_piggy-bank_1', 'demo/general/ico_piggy-bank_1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'home-mix', 'demo/general/home-mix.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'image_home_mix_1', 'demo/general/image_home_mix_1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'image_home_mix_2', 'demo/general/image_home_mix_2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'image_home_mix_3', 'demo/general/image_home_mix_3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'about-1', 'demo/general/about-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'background-1', 'demo/background/1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'background-2', 'demo/background/2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'background-3', 'demo/background/3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'background-4', 'demo/background/4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'background-5', 'demo/background/5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'background-inner-page-1', 'demo/background/inner-page-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'background-inner-page-2', 'demo/background/inner-page-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'background-inner-page-3', 'demo/background/inner-page-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'pattern-1', 'demo/pattern/1.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'pattern-2', 'demo/pattern/2.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'pattern-3', 'demo/pattern/3.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'partner-1', 'demo/partners/1.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'partner-2', 'demo/partners/2.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'partner-3', 'demo/partners/3.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'partner-4', 'demo/partners/1.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'partner-5', 'demo/partners/2.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'partner-6', 'demo/partners/3.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'team-1', 'demo/team/1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'team-2', 'demo/team/2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'team-3', 'demo/team/3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'team-4', 'demo/team/4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'error_404_banner', 'demo/general/error.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'coming_soon', 'demo/general/coming-soon.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'avt-agent', 'demo/agencies/agent1.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'avt-agent-2', 'demo/agencies/agent2.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'avt-agent-3', 'demo/agencies/agent3.svg', NULL, 'image/svg+xml', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'property-pc-9', 'demo/property/pc9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'property-pc-10', 'demo/property/pc10.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'property-pc-11', 'demo/property/pc11.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'property-pc-12', 'demo/property/pc12.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'agencies-1', 'demo/agencies/agencies-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(57, 'agencies-2', 'demo/agencies/agencies-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'agencies-3', 'demo/agencies/agencies-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'agencies-4', 'demo/agencies/agencies-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'agencies-5', 'demo/agencies/agencies-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'agencies-6', 'demo/agencies/agencies-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'icon-property-category-1', 'demo/property/categories/icon-1.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'icon-property-category-2', 'demo/property/categories/icon-2.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'icon-property-category-3', 'demo/property/categories/icon-3.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'icon-property-category-4', 'demo/property/categories/icon-4.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'icon-property-category-5', 'demo/property/categories/icon-5.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'icon-property-category-6', 'demo/property/categories/icon-6.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'property-gallery-1', 'demo/property/gallery/property-gallery-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'property-gallery-2', 'demo/property/gallery/property-gallery-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'property-gallery-3', 'demo/property/gallery/property-gallery-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'property-gallery-4', 'demo/property/gallery/property-gallery-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'property-gallery-5', 'demo/property/gallery/property-gallery-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'property-gallery-6', 'demo/property/gallery/property-gallery-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'property-video-cover-1', 'demo/property/video-cover/property-video-cover-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'property-video-cover-2', 'demo/property/video-cover/property-video-cover-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'property-video-cover-3', 'demo/property/video-cover/property-video-cover-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'property-banner-1', 'demo/property/banner/property-banner-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'property-banner-2', 'demo/property/banner/property-banner-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'property-banner-3', 'demo/property/banner/property-banner-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'property-banner-4', 'demo/property/banner/property-banner-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'banner-search-property', 'demo/general/home-mix.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'banner-search-property-2', 'demo/general/home-mix.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'property-1', 'demo/property/property-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'property-2', 'demo/property/property-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'property-3', 'demo/property/property-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'property-4', 'demo/property/property-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'property-5', 'demo/property/property-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'property-6', 'demo/property/property-6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'property-7', 'demo/property/property-7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'property-8', 'demo/property/property-8.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'property-9', 'demo/property/property-9.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'location-1', 'demo/location/location-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'location-2', 'demo/location/location-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'location-3', 'demo/location/location-3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'location-4', 'demo/location/location-4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'location-5', 'demo/location/location-5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'banner-location-1', 'demo/location/banner-detail/banner-location-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'trip-idea-1', 'demo/location/trip-idea/trip-idea-1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'trip-idea-2', 'demo/location/trip-idea/trip-idea-2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'news-1', 'demo/news/1.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'news-2', 'demo/news/2.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'news-3', 'demo/news/3.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'news-4', 'demo/news/4.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'news-5', 'demo/news/5.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'news-6', 'demo/news/6.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'news-7', 'demo/news/7.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'news-banner', 'demo/news/news-banner.jpg', NULL, 'image/jpeg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'icon_global', 'demo/general/icon_global.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'icon_global_white', 'demo/general/icon_global_white.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'icon_price', 'demo/general/icon_price.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'icon_price_white', 'demo/general/icon_price_white.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'icon_support', 'demo/general/icon_support.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'icon_support_white', 'demo/general/icon_support_white.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'banner-new-1', 'demo/general/banner-new-1.jpg', NULL, 'image/jpg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'banner-new-2', 'demo/general/banner-new-2.jpg', NULL, 'image/jpg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'call-to-action-bg-1', 'demo/general/call-to-action-bg-1.jpg', NULL, 'image/jpg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'call-to-action-bg-2', 'demo/general/call-to-action-bg-2.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'call-to-action-bg-3', 'demo/general/call-to-action-bg-3.png', NULL, 'image/png', 'png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'customer-feedback', 'demo/general/customer-feedback.jpg', NULL, 'image/jpg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'customer-feedback-2', 'demo/general/customer-feedback-2.jpg', NULL, 'image/jpg', 'jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'logo-white', 'demo/general/logo_white.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'footer-bg', 'demo/background/footer-bg.svg', NULL, 'image/svg', 'svg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'screen-shot-2022-08-31-at-122414-pm', '0000/2/2022/09/01/screen-shot-2022-08-31-at-122414-pm.png', '1510591', 'image/png', 'png', 2, NULL, NULL, NULL, NULL, 2062, 1264, '2022-09-01 13:52:32', '2022-09-01 13:52:32'),
(124, '95657325-padded-logo', '0000/1/2022/09/02/95657325-padded-logo.png', '16156', 'image/png', 'png', 1, NULL, NULL, NULL, NULL, 1000, 1000, '2022-09-02 17:53:25', '2022-09-02 17:53:25'),
(125, 'screen-shot-2022-08-31-at-122238-am', '0000/1/2022/09/12/screen-shot-2022-08-31-at-122238-am.png', '83122', 'image/png', 'png', 1, NULL, NULL, NULL, NULL, 772, 410, '2022-09-12 16:09:58', '2022-09-12 16:09:58'),
(126, 'screen-shot-2022-08-31-at-122148-am', '0000/1/2022/09/12/screen-shot-2022-08-31-at-122148-am.png', '134266', 'image/png', 'png', 1, NULL, NULL, NULL, NULL, 802, 540, '2022-09-12 16:09:59', '2022-09-12 16:09:59'),
(127, 'screen-shot-2022-09-01-at-125513-pm', '0000/1/2022/09/12/screen-shot-2022-09-01-at-125513-pm.png', '415432', 'image/png', 'png', 1, NULL, NULL, NULL, NULL, 2282, 882, '2022-09-12 16:10:00', '2022-09-12 16:10:00'),
(128, 'group-70', '0000/3/2022/09/12/group-70.png', '233438', 'image/png', 'png', 3, NULL, NULL, NULL, NULL, 764, 500, '2022-09-12 20:13:19', '2022-09-12 20:13:19'),
(129, 'group-72', '0000/3/2022/09/19/group-72.png', '84493', 'image/png', 'png', 3, NULL, NULL, NULL, NULL, 582, 403, '2022-09-20 00:25:23', '2022-09-20 00:25:23'),
(130, 'macbook-pro-14-5', '0000/3/2022/09/19/macbook-pro-14-5.png', '57818', 'image/png', 'png', 3, NULL, NULL, NULL, NULL, 1487, 982, '2022-09-20 00:25:23', '2022-09-20 00:25:23'),
(131, 'group-72-1', '0000/3/2022/09/19/group-72-1.png', '227083', 'image/png', 'png', 3, NULL, NULL, NULL, NULL, 1163, 806, '2022-09-20 00:25:24', '2022-09-20 00:25:24'),
(132, 'group-71-1', '0000/3/2022/09/19/group-71-1.png', '580287', 'image/png', 'png', 3, NULL, NULL, NULL, NULL, 1474, 982, '2022-09-20 00:25:26', '2022-09-20 00:25:26'),
(133, 'group-71', '0000/3/2022/09/19/group-71.png', '2610413', 'image/png', 'png', 3, NULL, NULL, NULL, NULL, 1512, 986, '2022-09-20 00:25:36', '2022-09-20 00:25:36'),
(134, 'house-owner', '0000/1/2022/10/19/house-owner.svg', '4061', 'image/svg', 'svg', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-19 16:45:56', '2022-10-19 16:45:56'),
(135, 'engineer', '0000/1/2022/10/19/engineer.svg', '3185', 'image/svg', 'svg', 1, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-19 16:46:08', '2022-10-19 16:46:08'),
(136, '360-f-347548443-hyyk9dgqxtdpqkiefua87kz8hvtfkxer', '0000/22/2022/11/13/360-f-347548443-hyyk9dgqxtdpqkiefua87kz8hvtfkxer.jpeg', '21390', 'image/jpeg', 'jpeg', 22, NULL, NULL, NULL, NULL, 640, 360, '2022-11-14 01:24:16', '2022-11-14 01:24:16'),
(137, 'unnamed-3', '0000/22/2022/11/13/unnamed-3.png', '16192', 'image/png', 'png', 22, NULL, NULL, NULL, NULL, 512, 250, '2022-11-14 01:24:17', '2022-11-14 01:24:17'),
(138, 'istockphoto-1156456831-612x612', '0000/22/2022/11/13/istockphoto-1156456831-612x612.jpeg', '56272', 'image/jpeg', 'jpeg', 22, NULL, NULL, NULL, NULL, 612, 421, '2022-11-14 01:24:18', '2022-11-14 01:24:18'),
(139, 'unnamed-31', '0000/22/2022/11/13/unnamed-31.png', '16192', 'image/png', 'png', 22, NULL, NULL, NULL, NULL, 512, 250, '2022-11-14 02:09:54', '2022-11-14 02:09:54'),
(140, 'unnamed-2', '0000/22/2022/11/13/unnamed-2.png', '12037', 'image/png', 'png', 22, NULL, NULL, NULL, NULL, 770, 754, '2022-11-14 02:09:54', '2022-11-14 02:09:54'),
(141, 'image', '0000/22/2022/11/13/image.jpeg', '792086', 'image/jpeg', 'jpeg', 22, NULL, NULL, NULL, NULL, 1440, 1920, '2022-11-14 02:10:14', '2022-11-14 02:10:14'),
(142, 'mds-banner-2', '0000/22/2022/11/13/mds-banner-2.png', '1075690', 'image/png', 'png', 22, NULL, NULL, NULL, NULL, 1600, 625, '2022-11-14 02:10:17', '2022-11-14 02:10:17'),
(143, 'img-5269', '0000/22/2022/11/13/img-5269.PNG', '347700', 'image/png', 'PNG', 22, NULL, NULL, NULL, NULL, 1125, 2436, '2022-11-14 02:51:35', '2022-11-14 02:51:35'),
(144, 'mds-banner-2', '0000/24/2022/11/14/mds-banner-2.png', '1075690', 'image/png', 'png', 24, NULL, NULL, NULL, NULL, 1600, 625, '2022-11-14 16:00:38', '2022-11-14 16:00:38'),
(145, 'wes-number', '0000/23/2022/11/14/wes-number.png', '389076', 'image/png', 'png', 23, NULL, NULL, NULL, NULL, 2244, 808, '2022-11-14 17:38:47', '2022-11-14 17:38:47'),
(146, '360-f-347548443-hyyk9dgqxtdpqkiefua87kz8hvtfkxer', '0000/27/2022/11/14/360-f-347548443-hyyk9dgqxtdpqkiefua87kz8hvtfkxer.jpeg', '21390', 'image/jpeg', 'jpeg', 27, NULL, NULL, NULL, NULL, 640, 360, '2022-11-15 01:37:56', '2022-11-15 01:37:56'),
(147, 'unnamed-3', '0000/27/2022/11/14/unnamed-3.png', '16192', 'image/png', 'png', 27, NULL, NULL, NULL, NULL, 512, 250, '2022-11-15 01:37:56', '2022-11-15 01:37:56'),
(148, 'istockphoto-1156456831-612x612', '0000/27/2022/11/14/istockphoto-1156456831-612x612.jpeg', '56272', 'image/jpeg', 'jpeg', 27, NULL, NULL, NULL, NULL, 612, 421, '2022-11-15 01:37:57', '2022-11-15 01:37:57'),
(149, 'mds-banner-2', '0000/27/2022/11/14/mds-banner-2.png', '1075690', 'image/png', 'png', 27, NULL, NULL, NULL, NULL, 1600, 625, '2022-11-15 01:38:07', '2022-11-15 01:38:07'),
(150, 'wall-g296f1fd16-1280', '0000/28/2022/11/14/wall-g296f1fd16-1280.jpeg', '222681', 'image/jpeg', 'jpeg', 28, NULL, NULL, NULL, NULL, 1280, 720, '2022-11-15 02:11:54', '2022-11-15 02:11:54'),
(151, 'living-room-gf1074634d-1920', '0000/28/2022/11/14/living-room-gf1074634d-1920.jpeg', '423940', 'image/jpeg', 'jpeg', 28, NULL, NULL, NULL, NULL, 1920, 1152, '2022-11-15 02:11:55', '2022-11-15 02:11:55'),
(152, 'supermarket-ged386e1fd-1920', '0000/28/2022/11/14/supermarket-ged386e1fd-1920.jpeg', '1243970', 'image/jpeg', 'jpeg', 28, NULL, NULL, NULL, NULL, 1920, 1272, '2022-11-15 02:12:02', '2022-11-15 02:12:02'),
(153, 'screen-shot-2022-06-13-at-103445-pm', '0000/28/2022/11/14/screen-shot-2022-06-13-at-103445-pm.png', '1059489', 'image/png', 'png', 28, NULL, NULL, NULL, NULL, 780, 770, '2022-11-15 03:23:56', '2022-11-15 03:23:56'),
(154, 'screen-shot-2022-06-13-at-103445-pm1', '0000/28/2022/11/14/screen-shot-2022-06-13-at-103445-pm1.png', '1059489', 'image/png', 'png', 28, NULL, NULL, NULL, NULL, 780, 770, '2022-11-15 03:29:27', '2022-11-15 03:29:27'),
(155, 'bird-wings-flight-snowy-owl-wallpaper-preview', '0000/29/2022/11/15/bird-wings-flight-snowy-owl-wallpaper-preview.jpg', '55434', 'image/jpeg', 'jpg', 29, NULL, NULL, NULL, NULL, 728, 485, '2022-11-15 11:51:23', '2022-11-15 11:51:23'),
(156, 'high-resolution-logo', '0000/29/2022/11/15/high-resolution-logo.png', '32500', 'image/png', 'png', 29, NULL, NULL, NULL, NULL, 2000, 1500, '2022-11-15 11:52:33', '2022-11-15 11:52:33'),
(157, 'teacup-gc6a230381-1920', '0000/29/2022/11/15/teacup-gc6a230381-1920.jpg', '349757', 'image/jpeg', 'jpg', 29, NULL, NULL, NULL, NULL, 1920, 1280, '2022-11-15 11:58:35', '2022-11-15 11:58:35'),
(158, 'screen-shot-2022-06-13-at-103445-pm', '0000/30/2022/11/15/screen-shot-2022-06-13-at-103445-pm.png', '1059489', 'image/png', 'png', 30, NULL, NULL, NULL, NULL, 780, 770, '2022-11-15 20:36:25', '2022-11-15 20:36:25'),
(159, 'wall-g296f1fd16-1280', '0000/30/2022/11/15/wall-g296f1fd16-1280.jpeg', '222681', 'image/jpeg', 'jpeg', 30, NULL, NULL, NULL, NULL, 1280, 720, '2022-11-15 20:36:44', '2022-11-15 20:36:44'),
(160, 'living-room-gf1074634d-1920', '0000/30/2022/11/15/living-room-gf1074634d-1920.jpeg', '423940', 'image/jpeg', 'jpeg', 30, NULL, NULL, NULL, NULL, 1920, 1152, '2022-11-15 20:36:45', '2022-11-15 20:36:45'),
(161, 'supermarket-ged386e1fd-1920', '0000/30/2022/11/15/supermarket-ged386e1fd-1920.jpeg', '1243970', 'image/jpeg', 'jpeg', 30, NULL, NULL, NULL, NULL, 1920, 1272, '2022-11-15 20:36:52', '2022-11-15 20:36:52'),
(162, '01-0', '0000/32/2022/11/21/01-0.png', '53236', 'image/png', 'png', 32, NULL, NULL, NULL, NULL, 293, 188, '2022-11-21 04:40:31', '2022-11-21 04:40:31'),
(163, 'odi-records-list', '0000/32/2022/11/21/odi-records-list.jpg', '78179', 'image/jpeg', 'jpg', 32, NULL, NULL, NULL, NULL, 636, 356, '2022-11-21 04:40:33', '2022-11-21 04:40:33'),
(164, 'cricket-records', '0000/32/2022/11/21/cricket-records.png', '824216', 'image/png', 'png', 32, NULL, NULL, NULL, NULL, 1200, 675, '2022-11-21 04:40:36', '2022-11-21 04:40:36'),
(165, 'cricket-logo-vector', '0000/31/2022/11/21/cricket-logo-vector.jpg', '253710', 'image/jpeg', 'jpg', 31, NULL, NULL, NULL, NULL, 2480, 2480, '2022-11-21 04:45:53', '2022-11-21 04:45:53'),
(166, 'screenshot-36', '0000/44/2022/11/22/screenshot-36.png', '121977', 'image/png', 'png', 44, NULL, NULL, NULL, NULL, 881, 834, '2022-11-22 05:48:50', '2022-11-22 05:48:50'),
(167, 'screenshot-37', '0000/44/2022/11/22/screenshot-37.png', '840321', 'image/png', 'png', 44, NULL, NULL, NULL, NULL, 1661, 665, '2022-11-22 05:48:52', '2022-11-22 05:48:52'),
(168, 'screencapture-guido-bookingcore-org-user-dashboard-2022-11-15-17-26-10', '0000/44/2022/11/24/screencapture-guido-bookingcore-org-user-dashboard-2022-11-15-17-26-10.png', '123910', 'image/png', 'png', 44, NULL, NULL, NULL, NULL, 1920, 902, '2022-11-24 08:37:00', '2022-11-24 08:37:00');

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
(3, '2018_11_06_222923_create_transactions_table', 1),
(4, '2018_11_07_192923_create_transfers_table', 1),
(5, '2018_11_07_202152_update_transfers_table', 1),
(6, '2018_11_15_124230_create_wallets_table', 1),
(7, '2018_11_19_164609_update_transactions_table', 1),
(8, '2018_11_20_133759_add_fee_transfers_table', 1),
(9, '2018_11_22_131953_add_status_transfers_table', 1),
(10, '2018_11_22_133438_drop_refund_transfers_table', 1),
(11, '2019_03_13_174533_create_permission_tables', 1),
(12, '2019_03_17_114820_create_table_bc_pages', 1),
(13, '2019_03_17_140539_create_media_files_table', 1),
(14, '2019_03_20_081256_create_bc_news_category_table', 1),
(15, '2019_03_27_081940_create_bc_setting_table', 1),
(16, '2019_03_28_101009_create_bc_booking_table', 1),
(17, '2019_03_28_165911_create_booking_meta_table', 1),
(18, '2019_04_01_045229_create_user_meta_table', 1),
(19, '2019_04_01_150630_create_menu_table', 1),
(20, '2019_04_02_150630_create_bc_news_table', 1),
(21, '2019_04_03_080159_bc_location', 1),
(22, '2019_04_05_143248_create_bc_templates_table', 1),
(23, '2019_05_07_085430_create_bc_languages_table', 1),
(24, '2019_05_07_085442_create_bc_translations_table', 1),
(25, '2019_05_13_111553_update_status_transfers_table', 1),
(26, '2019_05_17_074008_create_bc_review', 1),
(27, '2019_05_17_074048_create_bc_review_meta', 1),
(28, '2019_05_17_113042_create_bc_attrs_table', 1),
(29, '2019_05_21_084235_create_bc_contact_table', 1),
(30, '2019_05_28_152845_create_bc_subscribers_table', 1),
(31, '2019_06_17_142338_bc_seo', 1),
(32, '2019_06_25_103755_add_exchange_status_transfers_table', 1),
(33, '2019_07_08_075436_create_bc_vendor_plans', 1),
(34, '2019_07_08_083733_create_vendors_plan_payments', 1),
(35, '2019_07_29_184926_decimal_places_wallets_table', 1),
(36, '2019_07_30_072810_create_property_table', 1),
(37, '2019_08_05_031018_create_bc_vendor_plan_meta_table', 1),
(38, '2019_08_09_163909_create_inbox_table', 1),
(39, '2019_08_20_162106_create_table_user_upgrade_requests', 1),
(40, '2019_09_22_192348_create_messages_table', 1),
(41, '2019_10_02_193759_add_discount_transfers_table', 1),
(42, '2019_10_16_211433_create_favorites_table', 1),
(43, '2019_10_18_223259_add_avatar_to_users', 1),
(44, '2019_10_20_211056_add_messenger_color_to_users', 1),
(45, '2019_10_22_000539_add_dark_mode_to_users', 1),
(46, '2019_10_22_151319_create_social_table', 1),
(47, '2019_10_25_214038_add_active_status_to_users', 1),
(48, '2020_04_02_150631_create_bc_tags_table', 1),
(49, '2020_08_13_073553_bc_property_category', 1),
(50, '2020_11_23_092238_create_notifications_table', 1),
(51, '2021_04_02_150632_create_bc_tag_new_table', 1),
(52, '2021_06_14_083730_user_wishlist_table', 1),
(53, '2021_06_14_083958_bc_payouts_table', 1),
(54, '2021_06_14_084318_bc_enquiries_table', 1),
(55, '2021_06_16_001149_create_bc_property_category_relationships_table', 1),
(56, '2021_06_23_154359_add_phone_column_to_bc_contact_table', 1),
(57, '2021_06_30_141547_add_banner_images_column_to_bc_locations_table', 1),
(58, '2021_07_17_104044_create_bc_property_category_translations_table', 1),
(59, '2021_07_18_050152_create_bc_contact_object_table', 1),
(60, '2022_11_21_073257_create_analytics_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('045c216b-0acb-43b6-a490-1503098478da', 'App\\Notifications\\AdminChannelServices', 'App\\User', 39, '{\"id\":\"045c216b-0acb-43b6-a490-1503098478da\",\"for_admin\":1,\"notification\":{\"id\":39,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=39\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:47:25', '2022-11-21 08:47:25'),
('09a10d2b-de10-4248-a6ce-166866bcb606', 'App\\Notifications\\AdminChannelServices', 'App\\User', 23, '{\"id\":\"09a10d2b-de10-4248-a6ce-166866bcb606\",\"for_admin\":1,\"notification\":{\"id\":23,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=23\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-14 15:44:42', '2022-11-14 15:44:42'),
('0df892e7-8203-49f4-9bbb-b86419b08414', 'App\\Notifications\\AdminChannelServices', 'App\\User', 36, '{\"id\":\"0df892e7-8203-49f4-9bbb-b86419b08414\",\"for_admin\":1,\"notification\":{\"id\":36,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=36\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:28:59', '2022-11-21 08:28:59'),
('0f4f7481-d74d-493b-b013-9a1026d65982', 'App\\Notifications\\AdminChannelServices', 'App\\User', 43, '{\"id\":\"0f4f7481-d74d-493b-b013-9a1026d65982\",\"for_admin\":1,\"notification\":{\"id\":43,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=43\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-22 05:34:06', '2022-11-22 05:34:06'),
('0fc888fb-ac35-41af-9b22-0aa41d9e03dc', 'App\\Notifications\\AdminChannelServices', 'App\\User', 17, '{\"id\":\"0fc888fb-ac35-41af-9b22-0aa41d9e03dc\",\"for_admin\":1,\"notification\":{\"id\":17,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=17\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-07 21:07:17', '2022-11-07 21:07:17'),
('1b380a53-887d-49eb-b01e-e9818c1d1a29', 'App\\Notifications\\AdminChannelServices', 'App\\User', 27, '{\"id\":\"1b380a53-887d-49eb-b01e-e9818c1d1a29\",\"for_admin\":1,\"notification\":{\"id\":27,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=27\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-15 01:32:08', '2022-11-15 01:32:08'),
('1ec2fd3f-6d6d-477a-8619-df6b875440d0', 'App\\Notifications\\AdminChannelServices', 'App\\User', 33, '{\"id\":\"1ec2fd3f-6d6d-477a-8619-df6b875440d0\",\"for_admin\":1,\"notification\":{\"id\":33,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=33\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:24:51', '2022-11-21 08:24:51'),
('23afad7a-58c5-40b5-bfab-7f7528c9f42d', 'App\\Notifications\\AdminChannelServices', 'App\\User', 48, '{\"id\":\"23afad7a-58c5-40b5-bfab-7f7528c9f42d\",\"for_admin\":1,\"notification\":{\"id\":49,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"null null has created a Review  on Business Information\"}}', NULL, '2022-11-28 08:37:13', '2022-11-28 08:37:13'),
('39daa9bf-05d9-431c-b516-96185b5e9fdf', 'App\\Notifications\\AdminChannelServices', 'App\\User', 24, '{\"id\":\"39daa9bf-05d9-431c-b516-96185b5e9fdf\",\"for_admin\":1,\"notification\":{\"id\":24,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=24\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-14 15:59:15', '2022-11-14 15:59:15'),
('410d4a2d-05a6-4104-9edb-91056edbb0df', 'App\\Notifications\\AdminChannelServices', 'App\\User', 48, '{\"id\":\"410d4a2d-05a6-4104-9edb-91056edbb0df\",\"for_admin\":1,\"notification\":{\"id\":48,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=48\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-28 06:39:57', '2022-11-28 06:39:57'),
('447e2636-ff12-422a-9f89-f37ecfce9a9a', 'App\\Notifications\\AdminChannelServices', 'App\\User', 21, '{\"id\":\"447e2636-ff12-422a-9f89-f37ecfce9a9a\",\"for_admin\":1,\"notification\":{\"id\":21,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=21\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-13 12:03:29', '2022-11-13 12:03:29'),
('50f7fce7-a174-48c6-94c1-7498bf82075a', 'App\\Notifications\\AdminChannelServices', 'App\\User', 15, '{\"id\":\"50f7fce7-a174-48c6-94c1-7498bf82075a\",\"for_admin\":1,\"notification\":{\"id\":15,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=15\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-07 20:31:44', '2022-11-07 20:31:44'),
('53e2c525-767d-49cf-ab38-c3aac44e8624', 'App\\Notifications\\AdminChannelServices', 'App\\User', 41, '{\"id\":\"53e2c525-767d-49cf-ab38-c3aac44e8624\",\"for_admin\":1,\"notification\":{\"id\":41,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=41\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 09:09:06', '2022-11-21 09:09:06'),
('5464f4ce-cb44-4e6d-ba4e-8c6072a22f62', 'App\\Notifications\\AdminChannelServices', 'App\\User', 48, '{\"id\":\"5464f4ce-cb44-4e6d-ba4e-8c6072a22f62\",\"for_admin\":1,\"notification\":{\"id\":49,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"null null has created a Review  on Business Information\"}}', NULL, '2022-11-28 08:06:32', '2022-11-28 08:06:32'),
('5529dace-6c86-4ec1-82e8-7063d7d1c396', 'App\\Notifications\\AdminChannelServices', 'App\\User', 30, '{\"id\":\"5529dace-6c86-4ec1-82e8-7063d7d1c396\",\"for_admin\":1,\"notification\":{\"id\":30,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=30\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-15 20:34:54', '2022-11-15 20:34:54'),
('56a6e6c0-0251-4726-adb6-760a19b4b7cb', 'App\\Notifications\\AdminChannelServices', 'App\\User', 48, '{\"id\":\"56a6e6c0-0251-4726-adb6-760a19b4b7cb\",\"for_admin\":1,\"notification\":{\"id\":49,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"null null has created a Review  on Business Information\"}}', NULL, '2022-11-28 08:34:32', '2022-11-28 08:34:32'),
('584c83da-053d-4b73-8ce5-de414a2959b0', 'App\\Notifications\\AdminChannelServices', 'App\\User', 18, '{\"id\":\"584c83da-053d-4b73-8ce5-de414a2959b0\",\"for_admin\":1,\"notification\":{\"id\":18,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=18\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-07 21:10:31', '2022-11-07 21:10:31'),
('5e72c813-9a19-4ecc-85ff-2a9164f6d0cd', 'App\\Notifications\\AdminChannelServices', 'App\\User', 48, '{\"id\":\"5e72c813-9a19-4ecc-85ff-2a9164f6d0cd\",\"for_admin\":1,\"notification\":{\"id\":49,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"null null has created a Review  on Business Information\"}}', NULL, '2022-11-28 08:05:26', '2022-11-28 08:05:26'),
('640f80d2-bf84-45a6-8ede-b9b278e5e84d', 'App\\Notifications\\AdminChannelServices', 'App\\User', 45, '{\"id\":\"640f80d2-bf84-45a6-8ede-b9b278e5e84d\",\"for_admin\":1,\"notification\":{\"id\":45,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=45\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-26 08:01:17', '2022-11-26 08:01:17'),
('66e0e8a7-e53a-4769-a971-9879fa6a1594', 'App\\Notifications\\AdminChannelServices', 'App\\User', 25, '{\"id\":\"66e0e8a7-e53a-4769-a971-9879fa6a1594\",\"for_admin\":1,\"notification\":{\"id\":25,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=25\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-15 01:20:00', '2022-11-15 01:20:00'),
('70004fe7-d91a-4a20-977f-1e8f64920716', 'App\\Notifications\\AdminChannelServices', 'App\\User', 16, '{\"id\":\"70004fe7-d91a-4a20-977f-1e8f64920716\",\"for_admin\":1,\"notification\":{\"id\":16,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=16\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-07 20:43:20', '2022-11-07 20:43:20'),
('76b6330b-0ff4-4605-a07b-edcdcbb8305f', 'App\\Notifications\\AdminChannelServices', 'App\\User', 40, '{\"id\":\"76b6330b-0ff4-4605-a07b-edcdcbb8305f\",\"for_admin\":1,\"notification\":{\"id\":40,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=40\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:49:44', '2022-11-21 08:49:44'),
('7fe31779-fa79-4398-bd75-c916f85caaf5', 'App\\Notifications\\AdminChannelServices', 'App\\User', 26, '{\"id\":\"7fe31779-fa79-4398-bd75-c916f85caaf5\",\"for_admin\":1,\"notification\":{\"id\":26,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=26\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-15 01:26:39', '2022-11-15 01:26:39'),
('99a55eff-7a6d-4fd9-9303-857117880cc3', 'App\\Notifications\\AdminChannelServices', 'App\\User', 29, '{\"id\":\"99a55eff-7a6d-4fd9-9303-857117880cc3\",\"for_admin\":1,\"notification\":{\"id\":29,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=29\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-15 11:49:42', '2022-11-15 11:49:42'),
('9a0d8ec6-478d-46b5-aa4e-010af5a5bbbd', 'App\\Notifications\\AdminChannelServices', 'App\\User', 37, '{\"id\":\"9a0d8ec6-478d-46b5-aa4e-010af5a5bbbd\",\"for_admin\":1,\"notification\":{\"id\":37,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=37\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:34:12', '2022-11-21 08:34:12'),
('a053e86b-2714-4385-87df-caa85b47adaa', 'App\\Notifications\\AdminChannelServices', 'App\\User', 47, '{\"id\":\"a053e86b-2714-4385-87df-caa85b47adaa\",\"for_admin\":1,\"notification\":{\"id\":47,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=47\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-26 08:09:31', '2022-11-26 08:09:31'),
('a2832f3d-c79b-4c08-b3ab-99f4f455121b', 'App\\Notifications\\AdminChannelServices', 'App\\User', 4, '{\"id\":\"a2832f3d-c79b-4c08-b3ab-99f4f455121b\",\"for_admin\":1,\"notification\":{\"id\":4,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=4\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-06 14:46:34', '2022-11-06 14:46:34'),
('b233e744-dd68-441c-b24f-d75acb0e6ec4', 'App\\Notifications\\AdminChannelServices', 'App\\User', 10, '{\"id\":\"b233e744-dd68-441c-b24f-d75acb0e6ec4\",\"for_admin\":1,\"notification\":{\"id\":10,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=10\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-06 15:46:33', '2022-11-06 15:46:33'),
('b344fa3a-f33d-4bcf-b3fc-9e9bfd8c6cd6', 'App\\Notifications\\AdminChannelServices', 'App\\User', 20, '{\"id\":\"b344fa3a-f33d-4bcf-b3fc-9e9bfd8c6cd6\",\"for_admin\":1,\"notification\":{\"id\":20,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=20\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-13 12:01:49', '2022-11-13 12:01:49'),
('be185f10-dff6-43b3-b2b3-4abb02603f15', 'App\\Notifications\\AdminChannelServices', 'App\\User', 2, '{\"id\":\"be185f10-dff6-43b3-b2b3-4abb02603f15\",\"for_admin\":1,\"notification\":{\"id\":5,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"Mudassar Nazir\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"Mudassar Nazir has created a Review  on Core by Clare Smyth\"}}', NULL, '2022-09-01 13:55:05', '2022-09-01 13:55:05'),
('be6960cf-942f-46ea-af91-50356196eb82', 'App\\Notifications\\AdminChannelServices', 'App\\User', 3, '{\"id\":\"be6960cf-942f-46ea-af91-50356196eb82\",\"for_admin\":1,\"notification\":{\"id\":2,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"Saqlain Nazir\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/uploads\\/0000\\/3\\/2022\\/09\\/12\\/group-70-150.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"Saqlain Nazir has created a Review  on Museum of New York\"}}', NULL, '2022-09-12 20:16:56', '2022-09-12 20:16:56'),
('c0dbf2d2-03d3-494b-b628-68743ad116d7', 'App\\Notifications\\AdminChannelServices', 'App\\User', 3, '{\"id\":\"c0dbf2d2-03d3-494b-b628-68743ad116d7\",\"for_admin\":1,\"notification\":{\"id\":3,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=3\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-09-12 20:12:26', '2022-09-12 20:12:26'),
('c0fe127d-9528-4d83-a6a0-786e0049a656', 'App\\Notifications\\AdminChannelServices', 'App\\User', 19, '{\"id\":\"c0fe127d-9528-4d83-a6a0-786e0049a656\",\"for_admin\":1,\"notification\":{\"id\":19,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=19\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-12 15:40:22', '2022-11-12 15:40:22'),
('c7282a3b-6430-4899-b535-cf5b4cf25a59', 'App\\Notifications\\AdminChannelServices', 'App\\User', 34, '{\"id\":\"c7282a3b-6430-4899-b535-cf5b4cf25a59\",\"for_admin\":1,\"notification\":{\"id\":34,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=34\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:26:10', '2022-11-21 08:26:10'),
('cd38d2f8-8f1c-4519-b89e-b11511b62f87', 'App\\Notifications\\AdminChannelServices', 'App\\User', 3, '{\"id\":\"cd38d2f8-8f1c-4519-b89e-b11511b62f87\",\"for_admin\":1,\"notification\":{\"id\":2,\"event\":\"CreateReviewEvent\",\"to\":\"admin\",\"name\":\"Saqlain Nazir\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/uploads\\/0000\\/3\\/2022\\/09\\/12\\/group-70-150.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/review\",\"type\":\"property\",\"message\":\"Saqlain Nazir has created a Review  on Museum of New York\"}}', NULL, '2022-09-12 20:14:30', '2022-09-12 20:14:30'),
('cee6a32c-bce2-433a-a0b8-34855c9fa2f8', 'App\\Notifications\\AdminChannelServices', 'App\\User', 11, '{\"id\":\"cee6a32c-bce2-433a-a0b8-34855c9fa2f8\",\"for_admin\":1,\"notification\":{\"id\":11,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=11\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-06 15:48:44', '2022-11-06 15:48:44'),
('d22b86a2-19dd-41b0-b79e-c812c37f80f2', 'App\\Notifications\\AdminChannelServices', 'App\\User', 38, '{\"id\":\"d22b86a2-19dd-41b0-b79e-c812c37f80f2\",\"for_admin\":1,\"notification\":{\"id\":38,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=38\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:40:03', '2022-11-21 08:40:03'),
('d27b0d34-bdc7-4d65-9d0e-e1cdfc937761', 'App\\Notifications\\AdminChannelServices', 'App\\User', 22, '{\"id\":\"d27b0d34-bdc7-4d65-9d0e-e1cdfc937761\",\"for_admin\":1,\"notification\":{\"id\":22,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=22\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-14 01:22:53', '2022-11-14 01:22:53'),
('d2fd30ce-5898-41ef-9345-54147ae3846f', 'App\\Notifications\\AdminChannelServices', 'App\\User', 32, '{\"id\":\"d2fd30ce-5898-41ef-9345-54147ae3846f\",\"for_admin\":1,\"notification\":{\"id\":32,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=32\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 04:36:52', '2022-11-21 04:36:52'),
('d508a95d-238c-4d19-8339-5efd7d6694d3', 'App\\Notifications\\AdminChannelServices', 'App\\User', 14, '{\"id\":\"d508a95d-238c-4d19-8339-5efd7d6694d3\",\"for_admin\":1,\"notification\":{\"id\":14,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=14\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-07 20:26:00', '2022-11-07 20:26:00'),
('d51edb5a-bd9a-4aea-a7d3-6a659add2d4f', 'App\\Notifications\\AdminChannelServices', 'App\\User', 2, '{\"id\":\"d51edb5a-bd9a-4aea-a7d3-6a659add2d4f\",\"for_admin\":1,\"notification\":{\"id\":2,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"Mudassar Nazir\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=2\",\"type\":\"user\",\"message\":\"Mudassar Nazir has been registered\"}}', NULL, '2022-09-01 13:49:44', '2022-09-01 13:49:44'),
('d8ac883c-0be6-4d90-906c-c5c903f835c6', 'App\\Notifications\\AdminChannelServices', 'App\\User', 1, '{\"id\":\"d8ac883c-0be6-4d90-906c-c5c903f835c6\",\"for_admin\":1,\"notification\":{\"id\":1,\"event\":\"UserSubscriberSubmit\",\"to\":\"admin\",\"name\":\"Someone\",\"avatar\":\"\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user\\/subscriber\",\"type\":\"subscriber\",\"message\":\"You have just gotten a new Subscriber\"}}', NULL, '2022-09-20 22:47:02', '2022-09-20 22:47:02'),
('da569ffd-8389-4bc3-a8a1-222616bf3efc', 'App\\Notifications\\AdminChannelServices', 'App\\User', 35, '{\"id\":\"da569ffd-8389-4bc3-a8a1-222616bf3efc\",\"for_admin\":1,\"notification\":{\"id\":35,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=35\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 08:28:12', '2022-11-21 08:28:12'),
('ddd52129-98af-4b69-b4eb-b89db195eb5b', 'App\\Notifications\\AdminChannelServices', 'App\\User', 44, '{\"id\":\"ddd52129-98af-4b69-b4eb-b89db195eb5b\",\"for_admin\":1,\"notification\":{\"id\":44,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=44\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-22 05:40:32', '2022-11-22 05:40:32'),
('df2fad30-14d6-48c4-90ed-c741ec49c4a9', 'App\\Notifications\\AdminChannelServices', 'App\\User', 42, '{\"id\":\"df2fad30-14d6-48c4-90ed-c741ec49c4a9\",\"for_admin\":1,\"notification\":{\"id\":42,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=42\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-21 09:10:55', '2022-11-21 09:10:55'),
('e87e73c1-d0c8-414a-ac87-634c07b6cca7', 'App\\Notifications\\AdminChannelServices', 'App\\User', 28, '{\"id\":\"e87e73c1-d0c8-414a-ac87-634c07b6cca7\",\"for_admin\":1,\"notification\":{\"id\":28,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/images\\/avatar.png\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user?s=28\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-15 02:08:11', '2022-11-15 02:08:11'),
('ecbaacc4-5d32-4b17-b6e8-d57d9c7c0c76', 'App\\Notifications\\AdminChannelServices', 'App\\User', 1, '{\"id\":\"ecbaacc4-5d32-4b17-b6e8-d57d9c7c0c76\",\"for_admin\":1,\"notification\":{\"id\":1,\"event\":\"UserVerificationSubmit\",\"to\":\"admin\",\"name\":\"Galaxy Interiors\",\"avatar\":\"https:\\/\\/contrafinder.appstown.co\\/uploads\\/demo\\/agencies\\/agent1.svg\",\"link\":\"https:\\/\\/contrafinder.appstown.co\\/admin\\/module\\/user\\/verification\",\"type\":\"user_verification_request\",\"message\":\"Galaxy Interiors has asked for verification\"}}', NULL, '2022-09-05 18:26:29', '2022-09-05 18:26:29'),
('edcb0de9-d8ea-441f-b9f9-c25e79dcf860', 'App\\Notifications\\AdminChannelServices', 'App\\User', 46, '{\"id\":\"edcb0de9-d8ea-441f-b9f9-c25e79dcf860\",\"for_admin\":1,\"notification\":{\"id\":46,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=46\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-26 08:05:32', '2022-11-26 08:05:32'),
('f4c0dc3f-4a4a-4066-86e5-bc28fee0c30d', 'App\\Notifications\\AdminChannelServices', 'App\\User', 31, '{\"id\":\"f4c0dc3f-4a4a-4066-86e5-bc28fee0c30d\",\"for_admin\":1,\"notification\":{\"id\":31,\"event\":\"SendMailUserRegistered\",\"to\":\"admin\",\"name\":\"null null\",\"avatar\":\"http:\\/\\/localhost\\/contrafinder\\/images\\/avatar.png\",\"link\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/module\\/user?s=31\",\"type\":\"user\",\"message\":\"null null has been registered\"}}', NULL, '2022-11-16 06:46:07', '2022-11-16 06:46:07');

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
-- Table structure for table `social_forums`
--

CREATE TABLE `social_forums` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_forums`
--

INSERT INTO `social_forums` (`id`, `name`, `content`, `slug`, `status`, `icon`, `icon_image`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 'Solo Travel', NULL, 'solo-travel', 'publish', 'fa fa-cloud', NULL, NULL, NULL, '2022-09-01 11:37:38', '2022-09-01 11:37:38'),
(2, 'Road Trips', NULL, 'road-trips', 'publish', 'fa fa-bear', NULL, NULL, NULL, '2022-09-01 11:37:39', '2022-09-01 11:37:39'),
(3, 'Travel Gadgets and Gear', NULL, 'travel-gadgets-and-gear', 'publish', 'fa fa-gear', NULL, NULL, NULL, '2022-09-01 11:37:39', '2022-09-01 11:37:39'),
(4, 'Family Travel', NULL, 'family-travel', 'publish', 'fa fa-map-o', NULL, NULL, NULL, '2022-09-01 11:37:39', '2022-09-01 11:37:39'),
(5, 'Honeymoons and Romance', NULL, 'honeymoons-and-romance', 'publish', 'fa fa-heartbeat', NULL, NULL, NULL, '2022-09-01 11:37:39', '2022-09-01 11:37:39'),
(6, 'Outdoors', NULL, 'outdoors', 'publish', 'fa fa-paper-plane-o', NULL, NULL, NULL, '2022-09-01 11:37:39', '2022-09-01 11:37:39'),
(7, 'Traveling with Pets', NULL, 'traveling-with-pets', 'publish', 'fa fa-paw', NULL, NULL, NULL, '2022-09-01 11:37:39', '2022-09-01 11:37:39');

-- --------------------------------------------------------

--
-- Table structure for table `social_groups`
--

CREATE TABLE `social_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` bigint(20) DEFAULT NULL,
  `banner_image` bigint(20) DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner_id` bigint(20) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_group_user`
--

CREATE TABLE `social_group_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_posts`
--

CREATE TABLE `social_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forum_id` bigint(20) DEFAULT NULL,
  `group_id` bigint(20) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `file_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `comment_disabled_by` bigint(20) DEFAULT NULL,
  `privary` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_post_comments`
--

CREATE TABLE `social_post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `file_id` bigint(20) DEFAULT NULL,
  `file_ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_user_follow`
--

CREATE TABLE `social_user_follow` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user` bigint(20) DEFAULT NULL,
  `to_user` bigint(20) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `last_login_at` datetime DEFAULT NULL,
  `avatar_id` bigint(20) DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verify_submit_status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_verified` smallint(6) DEFAULT NULL,
  `vendor_commission_amount` int(11) DEFAULT NULL,
  `vendor_commission_type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_before_fees` decimal(10,2) DEFAULT NULL,
  `payment_gateway` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_guests` int(11) DEFAULT NULL,
  `locale` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `messenger_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0,
  `profile_completed` int(1) NOT NULL,
  `property_created` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `first_name`, `last_name`, `user_name`, `business_name`, `email`, `email_verified_at`, `password`, `address`, `address2`, `phone`, `birthday`, `job`, `city`, `state`, `country`, `zip_code`, `last_login_at`, `avatar_id`, `bio`, `verify_submit_status`, `is_verified`, `vendor_commission_amount`, `vendor_commission_type`, `total_before_fees`, `payment_gateway`, `total_guests`, `locale`, `status`, `create_user`, `update_user`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`, `profile_completed`, `property_created`) VALUES
(1, 'Muhammed Horea', 'Muhammed', 'Horea', NULL, NULL, 'admin@contrafinder.com', '2022-09-01 11:37:37', '$2y$10$vWoeF4F0WICZNIJWoiVJtuL.SJLsDPl842bG8N5duuhpFy9rHjC/W', NULL, NULL, '67543245', NULL, 'Designer at guido', NULL, NULL, NULL, NULL, NULL, 49, 'We\'re designers who have fallen in love with creating spaces for others to reflect, reset, and create. We split our time between two deserts (the Mojave, and the Sonoran). We love the way the heat sinks into our bones, the vibrant sunsets, and the wildlife we get to call our neighbors.', 'new', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL, NULL, 'UYvCXVCZN2dhUgda1jrLOocvXdIlVmzx9rFz7sUjtnirGYNyTdc6Yvp8A8nA', '2022-09-01 11:37:37', '2022-09-05 18:26:29', 'avatar.png', '#2180f3', 0, 0, 1, 15),
(2, 'Mudassar Nazir', 'Mudassar', 'Nazir', NULL, NULL, 'se.mudassarnazir@gmail.com', '2022-10-11 14:34:27', '$2y$10$WMO4f.O4SQDSv9eqUFdxSuwtavl78iaC245fxzmypXG4h7LdvO1Ma', NULL, NULL, '0554379700', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-01 13:49:44', '2022-10-11 14:34:27', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(3, 'Saqlain Nazir', 'Saqlain', 'Nazir', 'fgfdg', NULL, 'saqlain@contra.com', '2022-09-12 20:24:44', '$2y$10$Bjb/LRUlmNQn2PYUUV11/eKVOEDcxNqQCJ.y6ag7ulR9iKvcSQiAK', 'hfddfh', 'hdfh', 'null', '2022-09-12', 'jfj', 'gjfg', 'jgfj', 'AW', 0, NULL, 128, '<p>fgjgj</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL, NULL, 'YEh6qAj5QBlxYq4g2q76DiP5681kHO5vN3VsB63igeeiDXyUxjnrOpTdOZ40', '2022-09-12 20:12:25', '2022-09-20 00:23:29', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(4, 'null null', 'null', 'null', 'jkjjkkjjkj', NULL, 'fhsjk@fjhkdhfgjk.com', NULL, '$2y$10$y8Gor871nM6e.UCGhaL/C.zB7SqV2CjeeXxaRkCZ44wBcY0Vcaip.', NULL, NULL, '63678271caac9', '1970-01-01', 'kjkkj', NULL, NULL, 'AQ', NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'publish', NULL, NULL, NULL, NULL, '2022-11-06 14:46:34', '2022-11-06 15:31:52', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(10, 'null null', 'null', 'null', NULL, NULL, 'admnhjin@contrafinder.com', NULL, '$2y$10$AKJ9rg6xpnyLqF9RTYKlKOIK8T1kPmbvNlNX9cFQx34oVy9406APS', NULL, NULL, '63678eee444c5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-06 15:46:33', '2022-11-06 15:46:33', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(11, 'null null', 'null', 'null', NULL, NULL, 'admin@contrafikgjhgfhfhgnder.com', NULL, '$2y$10$RQTWEJEaSzehl8YUmAzxDOqmZy6teODGVHr/CA/3rUNNvEtTFHpnq', NULL, NULL, '636790fde8908', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-06 15:48:44', '2022-11-06 15:48:44', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(12, 'Yaki', NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'avatar.png', '#2180f3', 0, 0, 0, 0),
(14, 'null null', 'null', 'null', NULL, NULL, 'test@fdkdfgh.com', NULL, '$2y$10$LgWVVL2wSyKiWKSd9cTjO.FNJtjickk0L/vitjR7mcxKfbjS6mLX2', NULL, NULL, '636923789b0d7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 20:25:59', '2022-11-07 20:25:59', 'avatar.png', '#2180f3', 0, 0, 0, 18),
(15, 'null null', 'null', 'null', NULL, NULL, 'hgbvkcjh@jfsdkl.com', NULL, '$2y$10$ZvYt4M8ylNA9CQ5BM0UmV.EdQGbAJ8BpiD3GeVK8ErxDCsiYXEWO2', NULL, NULL, '636924d2dc097', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 20:31:44', '2022-11-07 20:31:44', 'avatar.png', '#2180f3', 0, 0, 0, 20),
(16, 'null null', 'null', 'null', NULL, NULL, 'horea@contrafinder.com', NULL, '$2y$10$Kjn56uLKXKBtrOFag6lpsu94SPR9cat6JeRMYJHke9xlkBSfMuWIm', NULL, NULL, '63692786dc4cc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 20:43:20', '2022-11-07 20:43:20', 'avatar.png', '#2180f3', 0, 0, 1, 0),
(17, 'null null', 'null', 'null', NULL, NULL, 'mudassarhorea@contrafinder.com', NULL, '$2y$10$w1PtECitQtw6tDSmYdWbYOyXasxtTezH32D0DpcHbFQd5JLe7k4JC', NULL, NULL, '63692c77acf05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 21:07:17', '2022-11-07 21:07:17', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(18, 'null null', 'null', 'null', NULL, NULL, 'horea@testcontrafinder.com', NULL, '$2y$10$t6CvUEolHvP0/RwY7sE9Z.9ZB7zihzkJDCZDmcvz.FXaY2XqbFNam', NULL, NULL, '63692dba327cd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-07 21:10:31', '2022-11-07 21:10:31', 'avatar.png', '#2180f3', 0, 0, 1, 0),
(19, 'null null', 'null', 'null', NULL, NULL, 'fjkljlkgkdfgdf@contrafinder.com', NULL, '$2y$10$b28wiv7znJ9ciAR8laH9IuyvVWlkdjH7BID87ghM9s1Rr6u52DdCy', NULL, NULL, '636f780da5446', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-12 15:40:21', '2022-11-12 15:40:21', 'avatar.png', '#2180f3', 0, 0, 1, 0),
(20, 'null null', 'null', 'null', NULL, NULL, 'jdfklj@fjldjk.com', NULL, '$2y$10$dlKCvdus/gjgUoKg8NMsNu1CPEYjIvzjcUXgG1vdGRjIB9t19eCdG', NULL, NULL, '63709653855c4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-13 12:01:49', '2022-11-13 12:01:49', 'avatar.png', '#2180f3', 0, 0, 1, 0),
(21, 'null null', 'null', 'null', NULL, NULL, 'jsdfjh@fdjsjhsd.com', NULL, '$2y$10$LhINHQgm8hSuAkgd1aqCYOIh.aaLPKVr/iVT16oKewutslOJPbI4.', NULL, NULL, '637096b7ba63b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-13 12:03:29', '2022-11-13 12:03:29', 'avatar.png', '#2180f3', 0, 0, 1, 22),
(22, 'null null', 'null', 'null', NULL, NULL, 'fhdshjg@rjdjksgh.com', NULL, '$2y$10$85v6LRkUuW.XRaYnnNIR5.Nm6VIcQx1muR1DwFGlwsuTovdNhYp5K', NULL, NULL, '63715214a8a8d', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 01:22:53', '2022-11-14 01:22:53', 'avatar.png', '#2180f3', 0, 0, 1, 25),
(23, 'null null', 'null', 'null', NULL, NULL, 'hhjkg@dhfjkgh.com', NULL, '$2y$10$3f0FbBdVYffpxaLZAZBHE..4.DANLxItKMfUdclbJrGEGjAt2qtf6', NULL, NULL, '63721c0c0db6f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 15:44:42', '2022-11-14 15:44:42', 'avatar.png', '#2180f3', 0, 0, 1, 27),
(24, 'null null', 'null', 'null', NULL, NULL, 'ghfdjkfhk@gdfj.com', NULL, '$2y$10$TzK9POWX0nzwjv6gBre4YOBy81XHf1YDBw18/m8Di92EiMFKrkwr.', NULL, NULL, '63721ed8210e0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-14 15:59:15', '2022-11-14 15:59:15', 'avatar.png', '#2180f3', 0, 0, 1, 0),
(25, 'null null', 'null', 'null', NULL, NULL, 'admijkrjgn@contrafinder.com', NULL, '$2y$10$DB6kQpBxdrK9DrCjSscVb.FR2GjbSWppP5.G.2tfMAPRZQAALlntm', NULL, NULL, '6372a2e858439', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 01:20:00', '2022-11-15 01:20:00', 'avatar.png', '#2180f3', 0, 0, 1, 31),
(26, 'null null', 'null', 'null', NULL, NULL, 'mudassaer_admin@contrafinder.com', NULL, '$2y$10$NjvceY9scUJIiOOXKp/IquOxHzp4le/hXG2Pd9Ek.48YAS5JANsfC', NULL, NULL, '6372a475730f0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 01:26:39', '2022-11-15 01:26:39', 'avatar.png', '#2180f3', 0, 0, 1, 32),
(27, 'null null', 'null', 'null', NULL, NULL, 'Qasim_admin@contrafinder.com', NULL, '$2y$10$QRbMopw0aWZqrsOWpL3daef.JjaZsunoZwg7GYcMLY1607miGsUOi', NULL, NULL, '6372a5bf0d96a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 01:32:08', '2022-11-15 01:32:08', 'avatar.png', '#2180f3', 0, 0, 1, 34),
(28, 'null null', 'null', 'null', NULL, NULL, 'afjsjgkjdfgdmin@contrafinder.com', NULL, '$2y$10$sJg.lSQ8TdJoe4DsEzEPP.2qmrvdrLhq4ZaeyFOd8YeRgdRX1N5oi', NULL, NULL, '6372ae326f972', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 02:08:10', '2022-11-15 02:08:10', 'avatar.png', '#2180f3', 0, 0, 1, 36),
(29, 'null null', 'null', 'null', NULL, NULL, 'Email22331@gmail.com', NULL, '$2y$10$LX6Ah9ZxD07lAqgsk9Q59.vXreerM0xvBmZI89Hcp5vSZX4MjgY0O', NULL, NULL, '6373365217aed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 11:49:41', '2022-11-15 11:49:41', 'avatar.png', '#2180f3', 0, 0, 1, 38),
(30, 'yousaf', 'yousaf', 'khan', NULL, NULL, 'yousaf@contractor.com', NULL, '$2y$10$yrEDkDSof3zzoq0RCcVB9.Z27Wdx2/wkTsbyNY.Ybs7Nl3o2cANhW', NULL, NULL, '988776543', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-15 20:34:53', '2022-11-15 20:34:53', 'avatar.png', '#2180f3', 0, 0, 1, 40),
(31, 'johen smith', 'johen', 'smith', NULL, NULL, 'admin@admin.com', NULL, '$2y$10$kKGf4bolDtYyDLq7dysU/ulAiIg5zMeScBulKPp5uK7jYE7qOjRe6', NULL, NULL, '6374cd6565a66', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cMIhyCNaw0Bc2B9TwESlRPgT2ZlMlkxA53efCuiX8u9IgltPVieOSfNgCZBk', '2022-11-16 06:46:06', '2022-11-16 06:46:06', 'avatar.png', '#2180f3', 0, 0, 1, 43),
(32, 'null null', 'null', 'null', NULL, NULL, 'smith@admin.com', NULL, '$2y$10$l/ln..oge6xyEf4i/CSoaufV2UCIIe10BeZUH188yVq5rMQmKwdDy', NULL, NULL, '637b469dbb51b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 04:36:49', '2022-11-21 04:36:49', 'avatar.png', '#2180f3', 0, 0, 1, 42),
(33, 'null null', 'null', 'null', NULL, NULL, 'admin1@admin.com', NULL, '$2y$10$IECEeREg9SCgDbInmP.jT.dVQb2Hc2NkuekZ3A0lL3gXKlRq.n23q', NULL, NULL, '637b7c1047d15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:24:51', '2022-11-21 08:24:51', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(34, 'null null', 'null', 'null', NULL, NULL, 'admin2@admin.com', NULL, '$2y$10$3GxPQ.OX3YpAf6SpsOXWR.lps.v0U8xAY09dNnVpsowHzqY32DgMW', NULL, NULL, '637b7c68edcdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:26:10', '2022-11-21 08:26:10', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(35, 'null null', 'null', 'null', NULL, NULL, 'admin4@admin.com', NULL, '$2y$10$DFikLYsxaJxJJKHXYtOMMunScd.PQXgRc5A7QAKxmI/jPJ9JED6Aq', NULL, NULL, '637b7ce39319a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:28:11', '2022-11-21 08:28:11', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(36, 'null null', 'null', 'null', NULL, NULL, 'admin5@admin.com', NULL, '$2y$10$32zaBRQuUUJmp.EEvKq2fej6MH7u7grdrGfHWyveYQbw7dRrl1jRu', NULL, NULL, '637b7d1446026', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:28:59', '2022-11-21 08:28:59', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(37, 'null null', 'null', 'null', NULL, NULL, 'admin6@admin.com', NULL, '$2y$10$mN1S8vwTXKuf8uRTkvlc2eLWfpVTiNCnnqe.CGL/bmkgf8sVsVtru', NULL, NULL, '637b7d403c59a', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:34:12', '2022-11-21 08:34:12', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(38, 'null null', 'null', 'null', NULL, NULL, 'admins@admin.com', NULL, '$2y$10$sQ0z1d4eSRxhJAu9avpaRu2GVz7NfuDj/CZ.BVGGVaMOeI..qaYQ6', NULL, NULL, '637b7fab99721', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:40:03', '2022-11-21 08:40:03', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(39, 'null null', 'null', 'null', NULL, NULL, 'admin09@admin.com', NULL, '$2y$10$HqjE9stPNsQZeHO1n0KNLOsscw3y4jz68kg7XRGRtXUs.PnAy5BFy', NULL, NULL, '637b816436e3b', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:47:25', '2022-11-21 08:47:25', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(40, 'null null', 'null', 'null', NULL, NULL, 'admincd@admin.com', NULL, '$2y$10$ARB2adtzjBtgyZcy/qIBM.zevpjf.goahtwddUc7Q5H7Z1svJ4zxq', NULL, NULL, '637b81ef76568', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 08:49:44', '2022-11-21 08:49:44', 'avatar.png', '#2180f3', 0, 0, 1, 45),
(41, 'null null', 'null', 'null', NULL, NULL, 'adminl@admin.com', NULL, '$2y$10$RzCJ8WPp2bNRlqxORnLuL.St9RLvn3W9Jns1rWOUYVNIUHZDBzcTy', NULL, NULL, '637b867b2ebfc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 09:09:06', '2022-11-21 09:09:06', 'avatar.png', '#2180f3', 0, 0, 0, 0),
(42, 'null null', 'null', 'null', NULL, NULL, 'adminc@admin.com', NULL, '$2y$10$Atz4b5pyGTWZ..UHSR/XY.QoUiQRnmTaOS/rBZvoBJk0sqlgtaZcy', NULL, NULL, '637b86e7de8fa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-21 09:10:55', '2022-11-21 09:10:55', 'avatar.png', '#2180f3', 0, 0, 1, 46),
(43, 'null null', 'null', 'null', NULL, NULL, 'test@admin.com', NULL, '$2y$10$S0kHLXF4SC17qcaodIh3D.XbhJBEfISiHSm/L8AG/qyIktBqvDp1e', NULL, NULL, '637ca5825b1d5', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0IPp4dEGheTljyT6TVCwyKEhZnwJL6M3gGTCMOXQyBgCPooz9jAbRVcmrnJE', '2022-11-22 05:34:03', '2022-11-22 05:34:03', 'avatar.png', '#2180f3', 0, 0, 1, 47),
(44, 'Test User', 'Test', 'User', NULL, NULL, 'test1@admin.com', NULL, '$2y$10$HIlrf27pEvhOpbN0wtKxg.rqzqPvT6VkmC3I63yTZLTIDPPanVfL6', NULL, NULL, '637ca718e1444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'L5kJRCt7VdufHEet2Yn3NNJFETyO4sP1Qjg2ik1Asy2bi3E3vUMPYr9kEsfF', '2022-11-22 05:40:32', '2022-11-22 05:40:32', 'avatar.png', '#2180f3', 0, 0, 1, 48),
(45, 'null null', 'null', 'null', NULL, NULL, 'user@admin.com', NULL, '$2y$10$AVuZVIviS5cSTw2VFhRsreYHEU3l1uDN4CtKIWNbevVsDifkK3ZCy', NULL, NULL, '63820e0ca6b55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'WrGED3TH39GJIDLIYesfSY06jcqcY55cx6OLP6PT9faha8xBBb1oOtFx3zKc', '2022-11-26 08:01:16', '2022-11-26 08:01:16', 'avatar.png', '#2180f3', 0, 0, 1, 50),
(46, 'null null', 'null', 'null', NULL, NULL, 'user2@admin.com', NULL, '$2y$10$87kgeWbJohIu7jRaMAm.e.H6s7QVwixDnPqahkzXMUpSeW.mAXOHq', NULL, NULL, '63820f0d83149', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:05:32', '2022-11-26 08:05:32', 'avatar.png', '#2180f3', 0, 0, 1, 51),
(47, 'null null', 'null', 'null', NULL, NULL, 'demouser@admin.com', NULL, '$2y$10$V.zNdQN0OfL3GKehspAJG.l8w4GJ8DX6UP6wOqxDqaUWYj4d9d6fO', NULL, NULL, '63820fed6d9de', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-26 08:09:31', '2022-11-26 08:09:31', 'avatar.png', '#2180f3', 0, 0, 1, 0),
(48, 'demo user', 'demo', 'user', NULL, NULL, 'newuser@gmail.com', NULL, '$2y$10$A6bw51DnWlepCZgvfPPRyOGkXPug4HKHBfAFgz6ty/7K0Yh9sov1.', NULL, NULL, '63849df697e07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-28 06:39:57', '2022-11-28 06:39:57', 'avatar.png', '#2180f3', 0, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_meta`
--

CREATE TABLE `user_meta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_meta`
--

INSERT INTO `user_meta` (`id`, `user_id`, `name`, `val`, `create_user`, `update_user`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'verify_data_phone', 'ui78i', 1, NULL, NULL, '2022-09-05 18:26:29', NULL),
(2, 1, 'is_verified_phone', '0', 1, NULL, NULL, '2022-09-05 18:26:29', NULL),
(3, 1, 'verify_data_id_card', '{\"path\":\"1/2022/09/05/6f8381c375f7d2ddb45d915581441a72.pdf\",\"name\":\"tawtheeq.pdf\",\"size\":393216,\"file_type\":\"application/pdf\",\"file_extension\":\"pdf\",\"download\":\"https://contrafinder.appstown.co/media/private/view?path=1%2F2022%2F09%2F05%2F6f8381c375f7d2ddb45d915581441a72.pdf\"}', 1, NULL, NULL, '2022-09-05 18:26:29', NULL),
(4, 1, 'is_verified_id_card', '0', 1, NULL, NULL, '2022-09-05 18:26:29', NULL),
(5, 1, 'verify_data_trade_license', '[\"{\\\"path\\\":\\\"1\\/2022\\/09\\/05\\/3d4b10eee4d69df06a5285cd4e67d124.pdf\\\",\\\"name\\\":\\\"tawtheeq.pdf\\\",\\\"size\\\":393216,\\\"file_type\\\":\\\"application\\/pdf\\\",\\\"file_extension\\\":\\\"pdf\\\",\\\"download\\\":\\\"https:\\/\\/contrafinder.appstown.co\\/media\\/private\\/view?path=1%2F2022%2F09%2F05%2F3d4b10eee4d69df06a5285cd4e67d124.pdf\\\"}\"]', 1, NULL, NULL, '2022-09-05 18:26:29', NULL),
(6, 1, 'is_verified_trade_license', '0', 1, NULL, NULL, '2022-09-05 18:26:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

CREATE TABLE `user_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payable_id` bigint(20) UNSIGNED NOT NULL,
  `wallet_id` bigint(20) UNSIGNED DEFAULT NULL,
  `type` enum('deposit','withdraw') COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(64,0) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `payment_id` bigint(20) DEFAULT NULL,
  `booking_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_transfers`
--

CREATE TABLE `user_transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('exchange','transfer','paid','refund','gift') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'transfer',
  `status_last` enum('exchange','transfer','paid','refund','gift') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_id` bigint(20) UNSIGNED NOT NULL,
  `withdraw_id` bigint(20) UNSIGNED NOT NULL,
  `discount` decimal(64,0) NOT NULL DEFAULT 0,
  `fee` decimal(64,0) NOT NULL DEFAULT 0,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_upgrade_request`
--

CREATE TABLE `user_upgrade_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `role_request` int(11) DEFAULT NULL,
  `approved_time` datetime DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_wallets`
--

CREATE TABLE `user_wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `holder_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(64,0) NOT NULL DEFAULT 0,
  `decimal_places` smallint(6) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wallets`
--

INSERT INTO `user_wallets` (`id`, `holder_type`, `holder_id`, `name`, `slug`, `description`, `balance`, `decimal_places`, `created_at`, `updated_at`, `create_user`, `update_user`) VALUES
(1, 'App\\User', 2, 'Default Wallet', 'default', NULL, '0', 2, '2022-09-12 12:22:43', '2022-09-12 12:22:43', NULL, NULL),
(2, 'App\\User', 1, 'Default Wallet', 'default', NULL, '0', 2, '2022-09-12 12:22:43', '2022-09-12 12:22:43', NULL, NULL),
(3, 'App\\User', 3, 'Default Wallet', 'default', NULL, '0', 2, '2022-09-12 20:24:34', '2022-09-12 20:24:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `object_id` int(11) DEFAULT NULL,
  `object_model` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `create_user` int(11) DEFAULT NULL,
  `update_user` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`id`, `object_id`, `object_model`, `user_id`, `create_user`, `update_user`, `created_at`, `updated_at`) VALUES
(1, 6, 'property', 2, 2, NULL, '2022-09-01 13:54:06', '2022-09-01 13:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `vendors_plan_payments`
--

CREATE TABLE `vendors_plan_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_gateway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `free_trial` int(11) NOT NULL,
  `price_per` enum('onetime','per_time') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'onetime',
  `price_unit` enum('day','month','year') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'day',
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analytics`
--
ALTER TABLE `analytics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_attrs`
--
ALTER TABLE `bc_attrs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_attrs_translations`
--
ALTER TABLE `bc_attrs_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc_attrs_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bc_bookings`
--
ALTER TABLE `bc_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_booking_meta`
--
ALTER TABLE `bc_booking_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_booking_payments`
--
ALTER TABLE `bc_booking_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_contact`
--
ALTER TABLE `bc_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_contact_object`
--
ALTER TABLE `bc_contact_object`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_enquiries`
--
ALTER TABLE `bc_enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_inbox`
--
ALTER TABLE `bc_inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_inbox_messages`
--
ALTER TABLE `bc_inbox_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_languages`
--
ALTER TABLE `bc_languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_locations`
--
ALTER TABLE `bc_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_locations__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `bc_location_translations`
--
ALTER TABLE `bc_location_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc_location_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bc_menus`
--
ALTER TABLE `bc_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_menu_translations`
--
ALTER TABLE `bc_menu_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_menu_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_news`
--
ALTER TABLE `bc_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_news_category`
--
ALTER TABLE `bc_news_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_news_category__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `bc_news_category_translations`
--
ALTER TABLE `bc_news_category_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_news_category_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_news_tag`
--
ALTER TABLE `bc_news_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_news_translations`
--
ALTER TABLE `bc_news_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_news_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_notifications`
--
ALTER TABLE `bc_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_pages`
--
ALTER TABLE `bc_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_pages_slug_index` (`slug`);

--
-- Indexes for table `bc_page_translations`
--
ALTER TABLE `bc_page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc_page_translations_origin_id_locale_unique` (`origin_id`,`locale`),
  ADD KEY `bc_page_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_payouts`
--
ALTER TABLE `bc_payouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_projects`
--
ALTER TABLE `bc_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_properties`
--
ALTER TABLE `bc_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_properties_slug_index` (`slug`);

--
-- Indexes for table `bc_property_category`
--
ALTER TABLE `bc_property_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_property_category__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `bc_property_category_relationships`
--
ALTER TABLE `bc_property_category_relationships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_property_category_relationships_property_id_foreign` (`property_id`),
  ADD KEY `bc_property_category_relationships_category_id_foreign` (`category_id`);

--
-- Indexes for table `bc_property_category_translations`
--
ALTER TABLE `bc_property_category_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc_property_category_translations_origin_id_locale_unique` (`origin_id`,`locale`),
  ADD KEY `bc_property_category_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_property_dates`
--
ALTER TABLE `bc_property_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_property_term`
--
ALTER TABLE `bc_property_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_property_translations`
--
ALTER TABLE `bc_property_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_property_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_review`
--
ALTER TABLE `bc_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_review_meta`
--
ALTER TABLE `bc_review_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_seo`
--
ALTER TABLE `bc_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_services`
--
ALTER TABLE `bc_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_services_slug_index` (`slug`);

--
-- Indexes for table `bc_service_translations`
--
ALTER TABLE `bc_service_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc_service_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bc_settings`
--
ALTER TABLE `bc_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_subscribers`
--
ALTER TABLE `bc_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_tags`
--
ALTER TABLE `bc_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_tag_translations`
--
ALTER TABLE `bc_tag_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_tag_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_templates`
--
ALTER TABLE `bc_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_template_translations`
--
ALTER TABLE `bc_template_translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bc_template_translations_locale_index` (`locale`);

--
-- Indexes for table `bc_terms`
--
ALTER TABLE `bc_terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_terms_translations`
--
ALTER TABLE `bc_terms_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bc_terms_translations_origin_id_locale_unique` (`origin_id`,`locale`);

--
-- Indexes for table `bc_translations`
--
ALTER TABLE `bc_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_vendor_plans`
--
ALTER TABLE `bc_vendor_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bc_vendor_plan_meta`
--
ALTER TABLE `bc_vendor_plan_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_model_has_permissions`
--
ALTER TABLE `core_model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `core_model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `core_model_has_roles`
--
ALTER TABLE `core_model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `core_model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `core_permissions`
--
ALTER TABLE `core_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_roles`
--
ALTER TABLE `core_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `core_role_has_permissions`
--
ALTER TABLE `core_role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `core_role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `media_files`
--
ALTER TABLE `media_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social_forums`
--
ALTER TABLE `social_forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_groups`
--
ALTER TABLE `social_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_group_user`
--
ALTER TABLE `social_group_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_posts`
--
ALTER TABLE `social_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_post_comments`
--
ALTER TABLE `social_post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_user_follow`
--
ALTER TABLE `social_user_follow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`);

--
-- Indexes for table `user_meta`
--
ALTER TABLE `user_meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_transactions_uuid_unique` (`uuid`),
  ADD KEY `user_transactions_payable_type_payable_id_index` (`payable_type`,`payable_id`),
  ADD KEY `payable_type_ind` (`payable_type`,`payable_id`,`type`),
  ADD KEY `payable_confirmed_ind` (`payable_type`,`payable_id`,`confirmed`),
  ADD KEY `payable_type_confirmed_ind` (`payable_type`,`payable_id`,`type`,`confirmed`),
  ADD KEY `user_transactions_type_index` (`type`),
  ADD KEY `user_transactions_wallet_id_foreign` (`wallet_id`);

--
-- Indexes for table `user_transfers`
--
ALTER TABLE `user_transfers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_transfers_uuid_unique` (`uuid`),
  ADD KEY `user_transfers_from_type_from_id_index` (`from_type`,`from_id`),
  ADD KEY `user_transfers_to_type_to_id_index` (`to_type`,`to_id`),
  ADD KEY `user_transfers_deposit_id_foreign` (`deposit_id`),
  ADD KEY `user_transfers_withdraw_id_foreign` (`withdraw_id`);

--
-- Indexes for table `user_upgrade_request`
--
ALTER TABLE `user_upgrade_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wallets`
--
ALTER TABLE `user_wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_wallets_holder_type_holder_id_slug_unique` (`holder_type`,`holder_id`,`slug`),
  ADD KEY `user_wallets_holder_type_holder_id_index` (`holder_type`,`holder_id`),
  ADD KEY `user_wallets_slug_index` (`slug`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors_plan_payments`
--
ALTER TABLE `vendors_plan_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analytics`
--
ALTER TABLE `analytics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bc_attrs`
--
ALTER TABLE `bc_attrs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bc_attrs_translations`
--
ALTER TABLE `bc_attrs_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_bookings`
--
ALTER TABLE `bc_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_booking_meta`
--
ALTER TABLE `bc_booking_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_booking_payments`
--
ALTER TABLE `bc_booking_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_contact`
--
ALTER TABLE `bc_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_contact_object`
--
ALTER TABLE `bc_contact_object`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bc_enquiries`
--
ALTER TABLE `bc_enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_inbox`
--
ALTER TABLE `bc_inbox`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_inbox_messages`
--
ALTER TABLE `bc_inbox_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_languages`
--
ALTER TABLE `bc_languages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bc_locations`
--
ALTER TABLE `bc_locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bc_location_translations`
--
ALTER TABLE `bc_location_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_menus`
--
ALTER TABLE `bc_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bc_menu_translations`
--
ALTER TABLE `bc_menu_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bc_news`
--
ALTER TABLE `bc_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bc_news_category`
--
ALTER TABLE `bc_news_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bc_news_category_translations`
--
ALTER TABLE `bc_news_category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_news_tag`
--
ALTER TABLE `bc_news_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_news_translations`
--
ALTER TABLE `bc_news_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_notifications`
--
ALTER TABLE `bc_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_pages`
--
ALTER TABLE `bc_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bc_page_translations`
--
ALTER TABLE `bc_page_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_payouts`
--
ALTER TABLE `bc_payouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_projects`
--
ALTER TABLE `bc_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bc_properties`
--
ALTER TABLE `bc_properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `bc_property_category`
--
ALTER TABLE `bc_property_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bc_property_category_relationships`
--
ALTER TABLE `bc_property_category_relationships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `bc_property_category_translations`
--
ALTER TABLE `bc_property_category_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_property_dates`
--
ALTER TABLE `bc_property_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_property_term`
--
ALTER TABLE `bc_property_term`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `bc_property_translations`
--
ALTER TABLE `bc_property_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_review`
--
ALTER TABLE `bc_review`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bc_review_meta`
--
ALTER TABLE `bc_review_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bc_seo`
--
ALTER TABLE `bc_seo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bc_services`
--
ALTER TABLE `bc_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_service_translations`
--
ALTER TABLE `bc_service_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_settings`
--
ALTER TABLE `bc_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `bc_subscribers`
--
ALTER TABLE `bc_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bc_tags`
--
ALTER TABLE `bc_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `bc_tag_translations`
--
ALTER TABLE `bc_tag_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_templates`
--
ALTER TABLE `bc_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bc_template_translations`
--
ALTER TABLE `bc_template_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bc_terms`
--
ALTER TABLE `bc_terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `bc_terms_translations`
--
ALTER TABLE `bc_terms_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_translations`
--
ALTER TABLE `bc_translations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_vendor_plans`
--
ALTER TABLE `bc_vendor_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bc_vendor_plan_meta`
--
ALTER TABLE `bc_vendor_plan_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ch_messages`
--
ALTER TABLE `ch_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `core_permissions`
--
ALTER TABLE `core_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `core_roles`
--
ALTER TABLE `core_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `media_files`
--
ALTER TABLE `media_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `social_forums`
--
ALTER TABLE `social_forums`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `social_groups`
--
ALTER TABLE `social_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_group_user`
--
ALTER TABLE `social_group_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_posts`
--
ALTER TABLE `social_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_post_comments`
--
ALTER TABLE `social_post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_user_follow`
--
ALTER TABLE `social_user_follow`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user_meta`
--
ALTER TABLE `user_meta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_transactions`
--
ALTER TABLE `user_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_transfers`
--
ALTER TABLE `user_transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_upgrade_request`
--
ALTER TABLE `user_upgrade_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_wallets`
--
ALTER TABLE `user_wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vendors_plan_payments`
--
ALTER TABLE `vendors_plan_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bc_property_category_relationships`
--
ALTER TABLE `bc_property_category_relationships`
  ADD CONSTRAINT `bc_property_category_relationships_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `bc_property_category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bc_property_category_relationships_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `bc_properties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_model_has_permissions`
--
ALTER TABLE `core_model_has_permissions`
  ADD CONSTRAINT `core_model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `core_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_model_has_roles`
--
ALTER TABLE `core_model_has_roles`
  ADD CONSTRAINT `core_model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `core_role_has_permissions`
--
ALTER TABLE `core_role_has_permissions`
  ADD CONSTRAINT `core_role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `core_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `core_role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `core_roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD CONSTRAINT `user_transactions_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `user_wallets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_transfers`
--
ALTER TABLE `user_transfers`
  ADD CONSTRAINT `user_transfers_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `user_transactions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_transfers_withdraw_id_foreign` FOREIGN KEY (`withdraw_id`) REFERENCES `user_transactions` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
