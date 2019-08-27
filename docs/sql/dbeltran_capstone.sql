-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 27, 2019 at 03:48 AM
-- Server version: 10.3.17-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeltran_capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'Admin_22'),
('admin', 'Admin_22');

-- --------------------------------------------------------

--
-- Table structure for table `arc_customers`
--

CREATE TABLE `arc_customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_addr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arc_customers`
--

INSERT INTO `arc_customers` (`customer_id`, `first_name`, `last_name`, `street_name`, `city_name`, `postal_code`, `province_name`, `country_name`, `phone`, `email_addr`, `password`, `created_at`, `updated_at`, `deleted`) VALUES
(9, 'hello', 'beltran', 'as', 'winnipeg', 'r0z0y0', 'sonsonate', 'el salvador', '2045551234', 'diego@ka.ca', 'Diego_123', '2018-09-10 13:48:51', '2018-09-13 06:46:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `arc_products`
--

CREATE TABLE `arc_products` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `country_of_origin_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_availability` tinyint(1) DEFAULT NULL,
  `in_stock` tinyint(1) DEFAULT NULL,
  `re_stock` tinyint(1) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smell` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `nutritional_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_made` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `arc_products`
--

INSERT INTO `arc_products` (`product_id`, `category_id`, `country_of_origin_id`, `product_name`, `price`, `description`, `more_details`, `shipping_availability`, `in_stock`, `re_stock`, `weight`, `color`, `smell`, `image`, `calories`, `nutritional_values`, `chef`, `supplier`, `ingredients`, `date_made`, `created_at`, `updated_at`) VALUES
(21, 2, 3, 'asdf', 2.50, 'tortilla filled with beans and pork', 'not Mexican tortilla', 1, 1, 0, 1.99, 'Tortilla', 1, 'image/pupusa.jpg', 250, 'protein, carbs, oil', 'Diego B.', 'Dino Cooks', 'Pork, Beans, Corn flour', '2018-09-12 09:18:50', '2018-09-12 09:18:50', NULL),
(22, 1, 1, 'test', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-09-12 09:41:06', '2018-09-12 09:41:06', NULL),
(23, 2, 3, 'diego', 12.40, 'dasdas', 'qsadasd', 0, 0, 0, NULL, NULL, NULL, 'qweqwe', 12456, 'qweqwe', 'qweqw', 'eqwe', 'qweqwe', '2018-09-12 10:28:45', '2018-09-12 10:28:45', NULL),
(24, 1, 1, 'adasfasf', 12.40, 'asdas', 'asdas', 1, 1, 1, NULL, NULL, NULL, 'asd', 123, 'qwe', 'dasd', 'asdasd', 'asdas', '2018-09-12 13:07:36', '2018-09-12 13:07:36', NULL),
(25, 1, 1, 'ed', 123.50, 'sdasd', 'dasdas', 1, 1, 1, NULL, NULL, NULL, 'sadas', 1234, '123', 'sadfadsd', 'sdas', 'dasd', '2018-09-12 13:29:24', '2018-09-12 13:29:24', '2018-09-12 08:30:08'),
(31, 3, 4, 'bazookajoe', 100.00, 'as', 'as', 1, 1, 1, NULL, NULL, NULL, 'bazookajpg', 3, 'cal', 'Steve', 'Dave', 'as', '2018-09-23 17:48:54', '2018-09-23 17:48:54', '2018-09-23 03:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `created_at`) VALUES
(1, 'meat lover', '2018-09-08 08:42:22'),
(2, 'vegetarian', '2018-09-08 08:42:22'),
(3, 'vegan', '2018-09-08 08:42:22'),
(4, 'sweets', '2018-09-08 08:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `country_of_origin`
--

CREATE TABLE `country_of_origin` (
  `country_of_origin_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country_of_origin`
--

INSERT INTO `country_of_origin` (`country_of_origin_id`, `name`, `created_at`) VALUES
(1, 'el salvador', '2018-09-08 08:41:16'),
(2, 'peru', '2018-09-08 08:41:16'),
(3, 'chile', '2018-09-08 08:41:16'),
(4, 'spain', '2018-09-08 08:41:16'),
(5, 'mexico', '2018-09-08 08:41:16'),
(6, 'argentina', '2018-09-08 08:41:16'),
(7, 'colombia', '2018-09-08 08:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_addr` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `street_name`, `city_name`, `postal_code`, `province_name`, `country_name`, `phone`, `email_addr`, `password`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'test', 'test', 'test', 'test', 'r2k0y6', 'test', 'test', '2048912595', 'admin@beltr.xyz', '$2y$10$dlbGhFV6DvHKJ2hMqbz7AOskvi4CDILGPS87mzcxKCnbk.fdh1SmK', '2018-09-08 10:26:41', '2018-09-14 03:19:05', NULL),
(2, 'test', 'Diego', 'Diego', 'Diego', 'r2k0y6', 'Diego_22', 'das', '2048912595', 'admin@beltr.xyz', '$2y$10$f2VBmERItY8xdm7PWSLL2.zyzxOWk0XB255h0JwkgCGKAYPybzVXC', '2018-09-08 10:27:56', NULL, NULL),
(3, 'test', 'test', 'test', 'test', 'r2k0y6', 'test', 'test', '2048912595', 'admin@beltr.xyz', '$2y$10$pYmW3NfVHDgDr8aPtiHO4u.kbne.4B0PK8bzTFRVIe7jzip9F6ziW', '2018-09-08 10:33:25', NULL, NULL),
(4, 'diego', 'beltran', 'test', 'test', 'r2k0y6', 'test', 'test', '2048912595', 'ab@cd.ca', '$2y$10$v36CJHANyes0R6VM1N81lOLPubE4OlYa1OfFn3H6n8MzQqEraBY6O', '2018-09-08 10:36:23', NULL, NULL),
(5, 'diego', 'test', 'test', 'test', 'r2k0y6', 'tets', 'test', '2048912595', 'test@test.com', '$2y$10$fcIhPfU2QZoOXhU1.dMmSOG1zLg5MGRgGwP50Mp/rMOE3oymBLG8y', '2018-09-10 09:26:54', NULL, NULL),
(6, 'tesst', 'test', 'era', 'fds', 'r2k0y6', 'vz', 'dsa', '2048912595', 'asd@asd.ca', '$2y$10$zJOByRioKTcyzSFAKGGouuKWhxaA0f7Czupo5HHvm8tA8fB7gIxrS', '2018-09-10 11:46:22', NULL, NULL),
(7, 'test', 'test', 'test', 'test', 'r2k0y6', 'test', 'test', '2048912595', 'name@host.ca', '$2y$10$QntyTasn1s2ieAKPCPbh2uQY39FppI2RB0jHz8iz0NBdgJT/HZORO', '2018-09-10 13:43:40', NULL, NULL),
(8, 'test', 'test', 'test', 'test', 'r2k0y6', 'test', 'test', '2048912595', 'asd@gaml', '$2y$10$czkullCINqQmp7mwvhc6Q.wIG216ajahNRIMnETpALbz/7j3GCOFa', '2018-09-10 13:46:17', '2018-09-15 05:14:48', NULL),
(10, 'steve', 'steve', 'steve', 'steve', 's3t3v3', 'steve', 'steve', '2043333333', 'steve@steve.ca', '$2y$10$QvZVQsQGNqKD8a71qaE/fezhhDNPgtoZJ9GkktWf7VFUHWDcl.duG', '2018-09-15 14:10:10', NULL, NULL),
(11, 'German', 'Diiiiiiiickinson', 'V4G1N4 ROAD', '4ss city', 'V4g1n4', 'C0ck province', 'Canada', '2049119511', 'c0ck@gmail.com', '$2y$10$E6BjBVHUvjYNhcxgPlUt1Om2ejDIjL2RJB0FsZFtsi329NoRGRU5a', '2018-09-22 07:04:27', '2018-09-22 05:05:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `invoice_date` datetime NOT NULL DEFAULT current_timestamp(),
  `invoice_comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxes` decimal(5,2) DEFAULT NULL,
  `sub_total` decimal(5,2) DEFAULT NULL,
  `total` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `customer_id`, `invoice_date`, `invoice_comments`, `taxes`, `sub_total`, `total`) VALUES
(1, 1, '2018-09-12 14:53:12', 'thsi is a test', 0.13, 1.00, 1.13),
(2, 1, '2018-09-12 15:06:41', 'comments', 0.13, 1.00, 1.13),
(7, 1, '2018-09-14 13:18:33', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(8, 1, '2018-09-14 13:41:34', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(9, 1, '2018-09-14 13:41:46', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(10, 1, '2018-09-14 13:43:58', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(11, 1, '2018-09-14 13:44:38', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(12, 1, '2018-09-14 13:47:35', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(13, 1, '2018-09-14 13:47:57', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(14, 1, '2018-09-14 13:48:28', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(15, 1, '2018-09-14 13:50:50', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(16, 1, '2018-09-14 13:51:03', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(17, 1, '2018-09-14 14:01:57', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(18, 1, '2018-09-14 14:06:31', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(19, 1, '2018-09-14 14:10:45', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(20, 1, '2018-09-14 14:16:25', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(21, 1, '2018-09-14 14:17:08', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(22, 1, '2018-09-14 14:17:30', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(23, 1, '2018-09-14 14:18:00', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(24, 1, '2018-09-14 14:48:30', 'enchiladas empanadas elotes locos ', 0.81, 6.25, 7.06),
(25, 1, '2018-09-14 14:49:46', 'enchiladas tamales ', 0.55, 4.25, 4.80),
(26, 1, '2018-09-14 14:57:05', 'panes con pollo ', 0.59, 4.50, 5.09),
(27, 10, '2018-09-15 22:08:41', 'diego ', 1.56, 12.00, 13.56);

-- --------------------------------------------------------

--
-- Table structure for table `in_pro`
--

CREATE TABLE `in_pro` (
  `in_pro_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `in_pro`
--

INSERT INTO `in_pro` (`in_pro_id`, `product_id`, `invoice_id`, `product_name`, `price`, `qty`) VALUES
(1, 20, 7, 'enchiladas', 3.50, 1),
(2, 11, 7, 'empanadas', 1.50, 1),
(3, 8, 7, 'elotes locos', 1.25, 1),
(4, 20, 8, 'enchiladas', 3.50, 1),
(5, 11, 8, 'empanadas', 1.50, 1),
(6, 8, 8, 'elotes locos', 1.25, 1),
(7, 20, 9, 'enchiladas', 3.50, 1),
(8, 11, 9, 'empanadas', 1.50, 1),
(9, 8, 9, 'elotes locos', 1.25, 1),
(10, 20, 10, 'enchiladas', 3.50, 1),
(11, 11, 10, 'empanadas', 1.50, 1),
(12, 8, 10, 'elotes locos', 1.25, 1),
(13, 20, 11, 'enchiladas', 3.50, 1),
(14, 11, 11, 'empanadas', 1.50, 1),
(15, 8, 11, 'elotes locos', 1.25, 1),
(16, 20, 12, 'enchiladas', 3.50, 1),
(17, 11, 12, 'empanadas', 1.50, 1),
(18, 8, 12, 'elotes locos', 1.25, 1),
(19, 20, 13, 'enchiladas', 3.50, 1),
(20, 11, 13, 'empanadas', 1.50, 1),
(21, 8, 13, 'elotes locos', 1.25, 1),
(22, 20, 14, 'enchiladas', 3.50, 1),
(23, 11, 14, 'empanadas', 1.50, 1),
(24, 8, 14, 'elotes locos', 1.25, 1),
(25, 20, 15, 'enchiladas', 3.50, 1),
(26, 11, 15, 'empanadas', 1.50, 1),
(27, 8, 15, 'elotes locos', 1.25, 1),
(28, 20, 16, 'enchiladas', 3.50, 1),
(29, 11, 16, 'empanadas', 1.50, 1),
(30, 8, 16, 'elotes locos', 1.25, 1),
(31, 20, 17, 'enchiladas', 3.50, 1),
(32, 11, 17, 'empanadas', 1.50, 1),
(33, 8, 17, 'elotes locos', 1.25, 1),
(34, 20, 18, 'enchiladas', 3.50, 1),
(35, 11, 18, 'empanadas', 1.50, 1),
(36, 8, 18, 'elotes locos', 1.25, 1),
(37, 20, 19, 'enchiladas', 3.50, 1),
(38, 11, 19, 'empanadas', 1.50, 1),
(39, 8, 19, 'elotes locos', 1.25, 1),
(40, 20, 20, 'enchiladas', 3.50, 1),
(41, 11, 20, 'empanadas', 1.50, 1),
(42, 8, 20, 'elotes locos', 1.25, 1),
(43, 20, 21, 'enchiladas', 3.50, 1),
(44, 11, 21, 'empanadas', 1.50, 1),
(45, 8, 21, 'elotes locos', 1.25, 1),
(46, 20, 22, 'enchiladas', 3.50, 1),
(47, 11, 22, 'empanadas', 1.50, 1),
(48, 8, 22, 'elotes locos', 1.25, 1),
(49, 20, 23, 'enchiladas', 3.50, 1),
(50, 11, 23, 'empanadas', 1.50, 1),
(51, 8, 23, 'elotes locos', 1.25, 1),
(52, 20, 24, 'enchiladas', 3.50, 1),
(53, 11, 24, 'empanadas', 1.50, 1),
(54, 8, 24, 'elotes locos', 1.25, 1),
(55, 6, 25, 'enchiladas', 1.75, 1),
(56, 4, 25, 'tamales', 2.50, 1),
(57, 7, 26, 'panes con pollo', 4.50, 1),
(58, 27, 27, 'diego', 12.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `country_of_origin_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `more_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_availability` tinyint(1) DEFAULT NULL,
  `in_stock` tinyint(1) DEFAULT NULL,
  `re_stock` tinyint(1) DEFAULT NULL,
  `weight` decimal(5,2) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smell` tinyint(1) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `nutritional_values` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chef` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supplier` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ingredients` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_made` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `country_of_origin_id`, `product_name`, `price`, `description`, `more_details`, `shipping_availability`, `in_stock`, `re_stock`, `weight`, `color`, `smell`, `image`, `calories`, `nutritional_values`, `chef`, `supplier`, `ingredients`, `date_made`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pupusa', 99.50, 'tortilla filled with beans and pork', 'not Mexican tortilla', 1, 1, 0, 1.99, 'Tortilla', 1, 'image/pupusa.jpg', 250, 'protein, carbs, oil', 'Diego B.', 'Dino Cooks', 'Pork, Beans, Corn flour', '2018-09-08 09:02:24', '2018-09-08 09:02:24', '2018-09-23 03:49:42'),
(2, 3, 1, 'yuca frita', 1.50, 'deep fry yuca (Cassava)', 'goes well with a cold coca-cola', 1, 1, 0, 1.02, 'white', 1, 'image/yuca.jpg', 150, 'carbs, oil, fat', 'Diego B.', 'Dino Cooks', 'Corn Oil, Yuca (Cassava)', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(3, 1, 1, 'pasteles', 3.50, 'flour mixed with beef', 'goes well with a cold coca-cola', 1, 1, 0, 1.32, 'tan', 1, 'image/pasteles.jpg', 150, 'carbs, oil, fat, protein', 'Diego B.', 'Dino Cooks', 'flour, beef, oil', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(4, 1, 1, 'tamales', 2.50, 'corn dough stuffed with chicken and vegetables', 'goes well with a cold coca-cola', 1, 1, 0, 1.52, 'tan, white', 1, 'image/tamales.jpg', 450, 'carbs, oil, fat, protein', 'Diego B.', 'Dino Cooks', 'corn dough, oil, meat, veggies', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(5, 2, 1, 'empanadas', 1.50, 'deep fry dough filled with meat', 'goes well with a cold coca-cola', 1, 1, 0, 1.12, 'orange fried', 1, 'image/empanadas.jpg', 350, 'carbs, oil, fat', 'Diego B.', 'Dino Cooks', 'dough, meat', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(6, 1, 1, 'enchiladas', 1.75, 'tortilla, meat and veggies on top', 'not Mexican tortilla', 1, 1, 0, 1.99, 'multiples', 1, 'image/enchiladas.jpg', 250, 'protein, carbs, oil', 'Diego B.', 'Dino Cooks', 'tortilla, meat, veggies', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(7, 1, 1, 'panes con pollo', 4.50, 'bread with chicken', 'goes well with a cold coca-cola', 1, 1, 0, 1.02, 'bread, chicken', 1, 'image/pan_pollo.jpg', 550, 'carbs, veggies, protein', 'Diego B.', 'Dino Cooks', 'bread, chicken, veggies)', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(8, 3, 1, 'elotes locos', 1.25, 'corn with cheese on to ', 'goes well with a cold coca-cola', 1, 1, 0, 1.32, 'yellow', 1, 'image/elotes_locos.jpg', 250, 'carbs', 'Diego B.', 'Dino Cooks', 'corn, cheese', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(9, 1, 1, 'pasteles', 1.50, 'deep fry, stuffed with meat', 'goes well with a cold coca-cola', 1, 1, 0, 0.52, 'tan, white', 1, 'image/tamales.jpg', 150, 'carbs, oil, fat, protein', 'Diego B.', 'Dino Cooks', 'corn dough, oil, meat, veggies', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(10, 1, 1, 'cane asada', 6.50, 'bbq steak', 'goes well with a cold beer', 1, 1, 0, 1.90, 'meat color', 1, 'image/carne_asada.jpg', 350, 'protein, fat', 'Diego B.', 'Dino Cooks', ' meat', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(11, 1, 2, 'empanadas', 1.50, 'deep fry dough filled with meat', 'goes well with a cold coca-cola', 1, 1, 0, 1.12, 'tan fried', 1, 'image/empanadas_pr.jpg', 350, 'carbs, oil, fat', 'Diego B.', 'Dino Cooks', 'dough, meat', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(12, 1, 3, 'empanadas', 1.50, 'deep fry dough filled with meat', 'goes well with a cold coca-cola', 1, 1, 0, 1.82, 'tan fried', 1, 'image/empanadas.jpg', 350, 'carbs, oil, fat', 'Diego B.', 'Dino Cooks', 'dough, meat', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(13, 2, 4, 'paella', 8.50, 'mixed seafood and veggies', 'goes well with a cold coca-cola', 1, 0, 0, 1.80, 'tan fried', 1, 'image/paella.jpg', 450, 'carbs, protein, veggies', 'Diego B.', 'Dino Cooks', 'seafood, rice, veggies', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(14, 1, 5, 'tacos', 1.50, 'mexican tortilla filled with meat and veggies', 'goes well with a cold coca-cola', 1, 0, 0, 1.40, 'tan', 1, 'image/tacos.jpg', 450, 'carbs, protein, veggies', 'Diego B.', 'Dino Cooks', 'tortilla, meat, onion, cilantro', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(15, 1, 6, 'chory pan', 4.50, 'bread with Chorizo', 'goes well with a cold coca-cola', 1, 0, 0, 1.50, 'bread', 1, 'image/chory_pan.jpg', 450, 'carbs, protein, veggies', 'Diego B.', 'Dino Cooks', 'bread, chorizo, veggies(optional)', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(16, 3, 7, 'arepas', 2.50, 'ground maize dough, like a tortilla', 'goes well with anything', 1, 0, 0, 0.50, 'tan fried', 1, 'image/arepas.jpg', 219, 'carbs', 'Diego B.', 'Dino Cooks', 'dough', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(17, 1, 5, 'pozole', 5.50, 'traditional soup or stew from MEXICO', 'goes well with anything', 1, 0, 0, 0.50, 'multicolor', 1, 'image/pozole.jpg', 700, 'carbs', 'Diego B.', 'Dino Cooks', 'chile pepper, garlic, onion, avocado', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(18, 1, 5, 'chimichanga', 2.50, 'ground maize dough, like a tortilla', 'goes well with anything', 1, 0, 0, 1.10, 'tan fried', 1, 'image/chimichanga.jpg', 244, 'carbs, protein, fat', 'Diego B.', 'Dino Cooks', 'dough, meat', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(19, 1, 2, 'ceviche', 10.50, 'seafood dish popular in the pacific coasts', 'goes well with anything', 1, 0, 0, 1.54, 'multi-color', 1, 'image/ceviche.jpg', 500, 'carbs, protein, fat', 'Diego B.', 'Dino Cooks', 'fish, lime, lemon, onion, chili peppers', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(20, 1, 5, 'enchiladas', 3.50, 'corn tortilla rolled around filling', 'goes well with anything', 1, 0, 0, 1.86, 'tan orange', 1, 'image/enchiladas.jpg', 168, 'carbs, protein, fat', 'Diego B.', 'Dino Cooks', 'meats, cheese, beans, potatoes, veggies', '2018-09-08 09:02:24', '2018-09-08 09:02:24', NULL),
(26, 1, 2, 'diego', 12.00, 'diego', 'diego', 1, 1, 1, NULL, NULL, NULL, 'images/diego', 125, 'diego', 'diego', 'diego', 'diego', '2018-09-12 15:36:56', '2018-09-12 15:36:56', '2018-09-13 01:32:22'),
(27, 1, 2, 'diego', 12.00, 'asd', 'diego', 1, 1, 0, NULL, NULL, NULL, 'dfgh', 1234, '123', 'dasd', 'asdasd', '', '2018-09-13 09:27:06', '2018-09-13 09:27:06', NULL),
(28, 2, 2, 'diego', 12.00, 'ewr', 'sdrwe', 1, 1, 1, NULL, NULL, NULL, 'ewr', 12454, 'rwe', 'erwe', 'ewrw', 'asdsa2', '2018-09-13 09:44:42', '2018-09-13 09:44:42', '2018-09-15 05:25:27'),
(29, 3, 3, 'asd', 1.78, 'asdas', 'asdafgf', 1, 1, 0, NULL, NULL, NULL, 'sdasd', 343, 'sdafgbfq', 'asdfg', 'dsafsdw', 'dfsfgda', '2018-09-15 12:31:16', '2018-09-15 12:31:16', NULL),
(30, 3, 6, 'papas', 12.34, 'sda', 'asd', 1, 1, 1, NULL, NULL, NULL, 'cxz', 12, 'asdas', 'asdfg', 'asdasa', 'sdas', '2018-09-15 12:32:17', '2018-09-15 12:32:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviews_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `reviews_date` datetime NOT NULL DEFAULT current_timestamp(),
  `reviews_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arc_customers`
--
ALTER TABLE `arc_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `arc_products`
--
ALTER TABLE `arc_products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `country_of_origin_id` (`country_of_origin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `country_of_origin`
--
ALTER TABLE `country_of_origin`
  ADD PRIMARY KEY (`country_of_origin_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `in_pro`
--
ALTER TABLE `in_pro`
  ADD PRIMARY KEY (`in_pro_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `invoice_id` (`invoice_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `country_of_origin_id` (`country_of_origin_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviews_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arc_customers`
--
ALTER TABLE `arc_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `arc_products`
--
ALTER TABLE `arc_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country_of_origin`
--
ALTER TABLE `country_of_origin`
  MODIFY `country_of_origin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `in_pro`
--
ALTER TABLE `in_pro`
  MODIFY `in_pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviews_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
