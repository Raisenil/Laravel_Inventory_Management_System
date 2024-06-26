-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 08:58 AM
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
-- Database: `invento`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `long_description` text DEFAULT NULL,
  `about_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products', '10+ Years Experience In this game, Means Product Designing', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', '<p class=\"desc\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<ul class=\"about__exp__list\">\r\n<li>\r\n<h5 class=\"title\">User experience design - (Product Design)</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Web and user interface design - Development</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Interaction design - Animation</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>\r\n</li>\r\n</ul>', 'upload/home_about/1776834576389256.png', NULL, '2023-09-12 06:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(255) DEFAULT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_tags` varchar(255) DEFAULT NULL,
  `blog_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(6, '2', 'Laravel 10x', 'upload/blog/1777941762322636.png', 'Laravel,PHP', '<p>Laravel is a web application framework with expressive, elegant syntax. A web framework provides a structure and starting point for creating your application, allowing you to focus on creating something amazing while we sweat the details.</p>\r\n<p>Laravel strives to provide an amazing developer experience while providing powerful features such as thorough dependency injection, an expressive database abstraction layer, queues and scheduled jobs, unit and integration testing, and more.</p>\r\n<p>Whether you are new to PHP web frameworks or have years of experience, Laravel is a framework that can grow with you. We\'ll help you take your first steps as a web developer or give you a boost as you take your expertise to the next level. We can\'t wait to see what you build.</p>\r\n<blockquote>\r\n<div class=\"mb-10 max-w-2xl mx-auto px-4 py-8 shadow-lg lg:flex lg:items-center callout\">\r\n<div class=\"w-20 h-20 mb-6 flex items-center justify-center shrink-0 bg-purple-600 lg:mb-0\"><img class=\"opacity-75\" src=\"https://laravel.com/img/callouts/lightbulb.min.svg\" /></div>\r\n<p class=\"mb-0 lg:ml-6\">New to Laravel? Check out the&nbsp;<a href=\"https://bootcamp.laravel.com/\">Laravel Bootcamp</a>&nbsp;for a hands-on tour of the framework while we walk you through building your first Laravel application.</p>\r\n</div>\r\n</blockquote>\r\n<p>&nbsp;</p>\r\n<h3 id=\"why-laravel\"><a href=\"https://laravel.com/docs/10.x/installation#why-laravel\">Why Laravel?</a></h3>\r\n<p>There are a variety of tools and frameworks available to you when building a web application. However, we believe Laravel is the best choice for building modern, full-stack web applications.</p>\r\n<h4>A Progressive Framework</h4>\r\n<p>We like to call Laravel a \"progressive\" framework. By that, we mean that Laravel grows with you. If you\'re just taking your first steps into web development, Laravel\'s vast library of documentation, guides, and&nbsp;<a href=\"https://laracasts.com/\">video tutorials</a>&nbsp;will help you learn the ropes without becoming overwhelmed.</p>\r\n<p>If you\'re a senior developer, Laravel gives you robust tools for&nbsp;<a href=\"https://laravel.com/docs/10.x/container\">dependency injection</a>,&nbsp;<a href=\"https://laravel.com/docs/10.x/testing\">unit testing</a>,&nbsp;<a href=\"https://laravel.com/docs/10.x/queues\">queues</a>,&nbsp;<a href=\"https://laravel.com/docs/10.x/broadcasting\">real-time events</a>, and more. Laravel is fine-tuned for building professional web applications and ready to handle enterprise work loads.</p>\r\n<h4>A Scalable Framework</h4>\r\n<p>Laravel is incredibly scalable. Thanks to the scaling-friendly nature of PHP and Laravel\'s built-in support for fast, distributed cache systems like Redis, horizontal scaling with Laravel is a breeze. In fact, Laravel applications have been easily scaled to handle hundreds of millions of requests per month.</p>\r\n<p>Need extreme scaling? Platforms like&nbsp;<a href=\"https://vapor.laravel.com/\">Laravel Vapor</a>&nbsp;allow you to run your Laravel application at nearly limitless scale on AWS\'s latest serverless technology.</p>\r\n<h4>A Community Framework</h4>\r\n<p>Laravel combines the best packages in the PHP ecosystem to offer the most robust and developer friendly framework available. In addition, thousands of talented developers from around the world have&nbsp;<a href=\"https://github.com/laravel/framework\">contributed to the framework</a>. Who knows, maybe you\'ll even become a Laravel contributor.</p>', '2023-09-24 08:01:29', '2023-09-26 03:42:34'),
(7, '8', 'The library for web and native user interfaces', 'upload/blog/1777944589684767.png', 'React', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '2023-09-24 12:28:11', '2023-09-28 12:53:24'),
(9, '3', '14 Sep 2023 PHP 8.3.0 RC 2 available for testing', 'upload/blog/1778016914051705.png', 'php', '<p>The PHP team is pleased to announce the release of PHP 8.3.0, RC 2. This is the second release candidate, continuing the PHP 8.3 release cycle, the rough outline of which is specified in the&nbsp;<a href=\"https://wiki.php.net/todo/php83\">PHP Wiki</a>.</p>\r\n<p>For source downloads of PHP 8.3.0, RC 2 please visit the&nbsp;<a href=\"https://downloads.php.net/~eric/\">download page</a>.</p>\r\n<p>Please carefully test this version and report any issues found in the&nbsp;<a href=\"http://bugs.php.net/\">bug reporting system</a>.</p>\r\n<p><strong>Please DO NOT use this version in production, it is an early test version.</strong></p>\r\n<p>For more information on the new features and other changes, you can read the&nbsp;<a href=\"https://github.com/php/php-src/blob/php-8.3.0RC2/NEWS\">NEWS</a>&nbsp;file or the&nbsp;<a href=\"https://github.com/php/php-src/blob/php-8.3.0RC2/UPGRADING\">UPGRADING</a>&nbsp;file for a complete list of upgrading notes. These files can also be found in the release archive.</p>\r\n<p>The next release will be the third release candidate (RC 3), planned for 28 September 2023.</p>\r\n<p>The signatures for the release can be found in&nbsp;<a href=\"https://gist.github.com/ericmann/d8c56e1244679ab41672dcfdbea2b0a6\">the manifest</a>&nbsp;or on&nbsp;<a href=\"https://qa.php.net/\">the QA site</a>.</p>\r\n<p>Thank you for helping us make PHP better.</p>', '2023-09-25 07:37:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', '2023-09-18 13:01:15', NULL),
(2, 'Laravel', '2023-09-20 07:47:40', '2023-09-20 07:47:40'),
(3, 'PHP', '2023-09-18 13:01:57', NULL),
(4, 'JavaScript', '2023-09-20 07:47:26', '2023-09-20 07:47:26'),
(5, 'Java', '2023-09-18 13:02:20', '2023-09-20 07:48:21'),
(7, 'VueJs', '2023-09-24 11:36:20', '2023-09-24 11:36:20'),
(8, 'React', '2023-09-24 11:53:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(6, 'Cement', 1, '4', NULL, '2023-10-07 11:42:17', NULL),
(7, 'LED TV', 1, '4', NULL, '2023-10-07 11:42:25', NULL),
(8, 'Smart Phone', 1, '4', NULL, '2023-10-07 11:42:32', NULL),
(9, 'Steel', 1, '4', NULL, '2023-10-07 11:42:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Xyla Kelley', 'jeca@mailinator.com', 'Odit reprehenderit', '+1 (231) 853-9297', 'Pariatur Mollitia c', '2023-09-26 13:50:25', NULL),
(4, 'MD. Raisul Islam Niloy', 'raisulislamniloy47@gmail.com', 'This is a test', '+8801625628284', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2023-09-26 14:26:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `customer_image` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `customer_image`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Rachel Nolan', 'upload/customer/1778745603644912.jpg', '(206) 342-8631', 'warisoral@mailinator.com', 'Ex quod voluptatibus', 1, '4', NULL, '2023-10-03 08:40:02', NULL),
(3, 'Brody Coleman', 'upload/customer/1778753351037045.jpg', '(212) 658-3916', 'utafowe@mailinator.com', 'Consectetur numquam', 1, '4', '4', '2023-10-03 08:42:22', '2023-10-03 10:43:07'),
(4, 'Martin Mccarthy', 'upload/customer/1778745855144523.jpg', '(262) 162-1585', 'syxu@mailinator.com', 'Dolore id ut natus', 1, '4', NULL, '2023-10-03 08:44:00', NULL),
(6, 'Jhon', NULL, '(252) 258-3799', 'xyz@gmail.com', NULL, 1, NULL, NULL, '2023-10-14 11:55:23', '2023-10-14 11:55:23'),
(7, 'Taz', NULL, '0162562890', 'aadwad@gmail.com', NULL, 1, NULL, NULL, '2023-10-14 11:58:36', '2023-10-14 11:58:36'),
(8, 'MD. Raisul Islam Niloy', 'upload/customer/1780152419047222.jpg', '+8801625628284', 'raisulislamniloy47@gmail.com', '307/3 South Goran, Lane #3, Shantipur, Khilgon-1219', 1, '4', NULL, '2023-10-18 21:20:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `number` varchar(255) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `copyright` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `short_description`, `address`, `email`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '+81383 766 284', 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.', 'Level 13, 2 Elizabeth Steereyt set Melbourne, Victoria 3000', 'noreply@envato.com', 'https://www.facebook.com/', 'https://twitter.com/', '© 2023\r\n\r\nAll Rights Reserved.\r\n\r\nNo part of this publication may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or', NULL, '2023-09-26 11:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `short_title` varchar(255) DEFAULT NULL,
  `home_slide` varchar(255) DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time.', 'I\'m a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences', 'upload/home_slide/1776834151115475.png', 'https://youtu.be/oHg5SJYRHA0', NULL, '2023-09-12 06:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_no` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_no`, `date`, `description`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '1', '2023-10-14', 'Cement Data', 1, 4, 4, '2023-10-14 11:55:23', '2023-10-15 21:09:01'),
(2, '2', '2023-10-14', 'test data', 1, 4, 4, '2023-10-14 11:58:36', '2023-10-16 22:11:21'),
(3, '3', '2023-10-15', 'test', 1, 4, 4, '2023-10-15 01:43:05', '2023-10-15 20:00:24'),
(5, '4', '2023-10-16', 'Quaerat velit nobis', 1, 4, 4, '2023-10-15 20:45:07', '2023-10-15 20:45:15'),
(6, '5', '2023-10-17', NULL, 1, 4, 4, '2023-10-16 22:41:31', '2023-10-16 22:42:00'),
(8, '6', '2023-10-19', 'For Work Purpose', 1, 4, 4, '2023-10-18 21:23:07', '2023-10-18 21:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE IF NOT EXISTS `invoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `invoice_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `selling_qty` double DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `selling_price` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `date`, `invoice_id`, `category_id`, `product_id`, `selling_qty`, `unit_price`, `selling_price`, `status`, `created_at`, `updated_at`) VALUES
(1, '2023-10-14', 1, 6, 3, 1, 600, 600, 1, '2023-10-14 11:55:23', '2023-10-14 11:55:23'),
(2, '2023-10-14', 1, 6, 4, 3, 300, 900, 1, '2023-10-14 11:55:23', '2023-10-14 11:55:23'),
(3, '2023-10-14', 2, 6, 3, 1, 500, 500, 1, '2023-10-14 11:58:36', '2023-10-14 11:58:36'),
(4, '2023-10-14', 2, 6, 4, 2, 300, 600, 1, '2023-10-14 11:58:36', '2023-10-14 11:58:36'),
(5, '2023-10-15', 3, 9, 1, 2, 500, 1000, 1, '2023-10-15 01:43:05', '2023-10-15 01:43:05'),
(7, '2023-10-16', 5, 6, 3, 2, 500, 1000, 1, '2023-10-15 20:45:07', '2023-10-15 20:45:07'),
(8, '2023-10-17', 6, 9, 1, 3, 300, 900, 1, '2023-10-16 22:41:31', '2023-10-16 22:42:00'),
(10, '2023-10-19', 8, 8, 6, 2, 1000, 2000, 1, '2023-10-18 21:23:07', '2023-10-18 21:23:25'),
(11, '2023-10-19', 8, 8, 7, 2, 1000, 2000, 1, '2023-10-18 21:23:07', '2023-10-18 21:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_06_123942_create_home_slides_table', 2),
(6, '2023_09_12_082715_create_abouts_table', 3),
(7, '2023_09_13_085441_create_multi_images_table', 4),
(8, '2023_09_16_124011_create_portfolios_table', 5),
(9, '2023_09_17_101831_create_blog_categories_table', 6),
(10, '2023_09_20_143302_create_blogs_table', 7),
(11, '2023_09_26_140453_create_footers_table', 8),
(12, '2023_09_26_174724_create_contacts_table', 9),
(15, '2023_09_29_142802_create_suppliers_table', 10),
(16, '2023_10_03_125530_create_customers_table', 11),
(17, '2023_10_03_165756_create_units_table', 12),
(18, '2023_10_05_152920_create_categories_table', 13),
(21, '2023_10_07_111248_create_products_table', 14),
(23, '2023_10_08_013900_create_purchases_table', 15),
(24, '2023_10_11_163420_create_invoices_table', 16),
(25, '2023_10_11_163609_create_invoice_details_table', 16),
(26, '2023_10_11_163635_create_payments_table', 16),
(27, '2023_10_11_163700_create_payment_details_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `multi_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
(1, 'upload/multi_image/1777036889304317.png', '2023-09-13 06:51:21', '2023-09-14 12:00:40'),
(3, 'upload/multi_image/1776927039381487.png', '2023-09-13 06:54:39', NULL),
(4, 'upload/multi_image/1776927039416940.png', '2023-09-13 06:54:39', NULL),
(5, 'upload/multi_image/1776927039452583.png', '2023-09-13 06:54:39', NULL),
(7, 'upload/multi_image/1776927039546118.png', '2023-09-13 06:54:39', NULL),
(8, 'upload/multi_image/1777194846631358.png', '2023-09-16 05:51:20', NULL),
(11, 'upload/multi_image/1777194990653298.png', '2023-09-16 05:53:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('raisulislamniloy47@gmail.com', '$2y$10$igkDJfwwsx088nwmjqkNDuXrUC33CZivDeuqLDZNrUaApu31DIamy', '2023-07-29 01:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `paid_status` varchar(51) DEFAULT NULL,
  `paid_amount` double DEFAULT NULL,
  `due_amount` double DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `discount_amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `invoice_id`, `customer_id`, `paid_status`, `paid_amount`, `due_amount`, `total_amount`, `discount_amount`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'partial_paid', 500, 800, 1300, 200, '2023-10-14 11:55:23', '2023-10-14 11:55:23'),
(2, 2, 7, 'partial_paid', 800, 600, 1000, 100, '2023-10-14 11:58:36', '2023-10-18 21:03:24'),
(3, 3, 1, 'full_paid', 900, 0, 900, 100, '2023-10-15 01:43:05', '2023-10-15 01:43:05'),
(5, 5, 7, 'full_paid', 950, 0, 950, 50, '2023-10-15 20:45:07', '2023-10-15 20:45:07'),
(6, 6, 4, 'full_paid', 900, 0, 900, NULL, '2023-10-16 22:41:31', '2023-10-16 22:41:31'),
(8, 8, 8, 'full_paid', 3800, 0, 3800, 200, '2023-10-18 21:23:07', '2023-10-18 21:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE IF NOT EXISTS `payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) DEFAULT NULL,
  `current_paid_amount` double DEFAULT NULL,
  `date` date DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `invoice_id`, `current_paid_amount`, `date`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 500, '2023-10-14', NULL, '2023-10-14 11:55:23', '2023-10-14 11:55:23'),
(3, 3, 900, '2023-10-15', NULL, '2023-10-15 01:43:05', '2023-10-15 01:43:05'),
(5, 5, 950, '2023-10-16', NULL, '2023-10-15 20:45:07', '2023-10-15 20:45:07'),
(6, 6, 900, '2023-10-17', NULL, '2023-10-16 22:41:31', '2023-10-16 22:41:31'),
(10, 2, 200, '2023-10-18', 4, '2023-10-18 20:03:30', '2023-10-18 20:03:30'),
(11, 2, 100, '2023-10-19', 4, '2023-10-18 21:03:24', '2023-10-18 21:03:24'),
(12, 8, 500, '2023-10-19', NULL, '2023-10-18 21:23:07', '2023-10-18 21:23:07'),
(13, 8, 500, '2023-10-19', 4, '2023-10-18 21:34:40', '2023-10-18 21:34:40'),
(14, 8, NULL, '2023-10-19', 4, '2023-10-18 21:34:54', '2023-10-18 21:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(255) NOT NULL,
  `portfolio_title` varchar(255) NOT NULL,
  `portfolio_image` varchar(255) NOT NULL,
  `portfolio_description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(2, 'Burton Swanson', 'Nicole Lester', 'upload/portfolio/1777221204752137.png', '<h2 class=\"small-title\">Nature of Business Strategy</h2>\r\n<p>A business strategy is a combination of proactive actions on the part of management, for the purpose of enhancing the company&rsquo;s market position and overall performance and reactions to unexpected developments and new market.</p>\r\n<p>The maximum part of the company&rsquo;s present strategy is a result of formerly initiated actions and business approaches, but when market conditions take an unanticipated turn, the company requires a strategic reaction to cope with contingencies. Hence, for unforeseen development, a part of the business strategy is formulated as a reasoned response nature of business strategy.</p>', '2023-09-16 12:17:35', '2023-09-16 12:50:17'),
(3, 'Mallory Prince', 'Ebony Mays', 'upload/portfolio/1777219383526960.jpg', '<p><span style=\"font-size: 14pt;\"><strong>Hilon - Personal Portfolio</strong></span></p>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.</p>\r\n<p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text</p>', '2023-09-16 12:21:20', '2023-09-16 12:46:09'),
(4, 'Holmes Donovan', 'Raven Logan', 'upload/portfolio/1777222867494015.jpg', '<h2 class=\"title\">Rixelda - 24 hours Control room landing page</h2>\r\n<p>Definition: Business strategy can be understood as the course of action or set of decisions which assist the entrepreneurs in achieving specific business objectives.</p>\r\n<p>It is nothing but a master plan that the management of a company implements to secure a competitive position in the market, carry on its operations, please customers and achieve the desired ends of the business.</p>\r\n<p>In business, it is the long-range sketch of the desired image, direction and destination of the organization. It is a scheme of corporate intent and action, which is carefully planned and flexibly designed with the purpose of</p>\r\n<ul class=\"services__details__list\">\r\n<li>Achieving effectiveness,</li>\r\n<li>Perceiving and utilizing opportunities,</li>\r\n<li>Mobilising resources,</li>\r\n<li>Securing an advantageous position,</li>\r\n<li>Meeting challenges and threats,</li>\r\n<li>Directing efforts and behaviour and</li>\r\n<li>Gaining command over the situation.</li>\r\n</ul>\r\n<p>A business strategy is a set of competitive moves and actions that a business uses to attract customers, compete successfully, strengthening performance, and achieve organizational goals. It outlines how business should be carried out to reach the desired ends</p>', '2023-09-16 13:16:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` double NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `supplier_id`, `unit_id`, `category_id`, `name`, `quantity`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 8, 12, 9, 'Bosundora Steel', 55, 1, '4', NULL, '2023-10-10 05:36:36', '2023-10-16 22:42:00'),
(2, 9, 12, 9, 'KSRM Steel', 12, 1, '4', NULL, '2023-10-10 05:37:31', '2023-10-16 21:51:54'),
(3, 8, 9, 6, 'Bosundora Cement', 5, 1, '4', NULL, '2023-10-10 05:37:53', '2023-10-16 22:11:21'),
(4, 11, 9, 6, 'Shah Cement', 5, 1, '4', NULL, '2023-10-10 05:38:10', '2023-10-16 22:11:21'),
(5, 12, 9, 6, 'Madina Cement', 0, 1, '4', NULL, '2023-10-10 05:38:31', NULL),
(6, 10, 12, 8, 'Walton Mobile w55', 8, 1, '4', NULL, '2023-10-10 05:38:44', '2023-10-18 21:23:25'),
(7, 10, 12, 8, 'Walton Mobile w52', 8, 1, '4', NULL, '2023-10-10 05:38:58', '2023-10-18 21:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `supplier_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `purchase_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `buying_qty` double NOT NULL,
  `unit_price` double NOT NULL,
  `buying_price` double NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending,1=Approved',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `supplier_id`, `category_id`, `product_id`, `purchase_no`, `date`, `description`, `buying_qty`, `unit_price`, `buying_price`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(9, 8, 6, 3, 'inv-2', '2023-10-10', NULL, 5, 300, 1500, 1, 4, NULL, '2023-10-10 05:51:56', '2023-10-10 09:41:18'),
(10, 9, 9, 2, 'inv-3', '2023-10-10', NULL, 12, 200, 2400, 1, 4, NULL, '2023-10-10 05:51:56', '2023-10-16 21:51:54'),
(11, 11, 6, 4, 'inv-4', '2023-10-01', NULL, 10, 150, 1500, 1, 4, NULL, '2023-10-10 05:51:56', '2023-10-14 11:53:35'),
(13, 8, 6, 3, 'inv-12', '2023-10-10', NULL, 4, 200, 800, 1, 4, NULL, '2023-10-10 09:51:01', '2023-10-10 09:51:23'),
(14, 8, 9, 1, 'in123132', '2023-10-16', 'New Steel', 60, 500, 30000, 1, 4, NULL, '2023-10-15 19:52:30', '2023-10-15 19:52:42'),
(15, 10, 8, 6, 'inv-333', '2023-10-19', 'A', 10, 1000, 10000, 1, 4, NULL, '2023-10-18 21:21:47', '2023-10-18 21:22:04'),
(16, 10, 8, 7, 'inv-333', '2023-10-19', NULL, 10, 1000, 10000, 1, 4, NULL, '2023-10-18 21:21:47', '2023-10-18 21:21:58');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `mobile_no`, `email`, `address`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(8, 'Bosundora', '(248) 762-0356', 'bosundora@gmail.com', 'Puran Platon', 1, '4', NULL, '2023-10-07 11:38:39', NULL),
(9, 'KSRM', '(212) 658-3916', 'ksrm@gmail.com', 'New Bazar Dhaka', 1, '4', NULL, '2023-10-07 11:39:43', NULL),
(10, 'Walton', '(234) 109-6666', 'walton@gmail.com', 'Gulshan Link Road', 1, '4', NULL, '2023-10-07 11:40:26', NULL),
(11, 'Shah', '(209) 300-2557', 'shah@gmail.com', 'South Goran Khilgha', 1, '4', NULL, '2023-10-07 11:40:58', NULL),
(12, 'Madina', '(717) 550-1675', 'madina@gmail.com', 'Section 1 Uttara Housing', 1, '4', NULL, '2023-10-07 11:41:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_by` varchar(255) DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `name`, `status`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(3, 'OZ', 1, '4', '4', '2023-10-04 11:28:06', '2023-10-04 11:53:25'),
(5, 'LB', 1, '4', '4', '2023-10-04 11:29:06', '2023-10-04 11:53:04'),
(9, 'KG', 1, '4', '4', '2023-10-04 11:29:23', '2023-10-04 11:51:17'),
(11, 'G', 1, '4', '4', '2023-10-04 11:29:31', '2023-10-05 10:20:47'),
(12, 'PCG', 1, '4', NULL, '2023-10-07 07:53:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'MD. Raisul Islam Niloy', 'raisulislamniloy47@gmail.com', '2023-07-27 12:01:46', '$2y$10$dPNbwqBcN25R1putiRsz2OE/W9Ld31ZY4YhAoUgPx/P50eQszvp0q', 'Raisenil', '202307281034Pro.jpg', NULL, '2023-07-27 12:01:30', '2023-08-04 03:17:12'),
(6, 'Kylie Frank', 'gymobuzuci@mailinator.com', '2023-07-28 05:16:40', '$2y$10$6s9O41lhx3QPBdPMAHlqdOaR0nDpayqJVNVk4ZNrwNcf2mMnOawQq', 'wyxutypose', NULL, 'xjEfYMa4yxK3lZZBnIMPvEaFgGDAPc0vWVa7P8rSd7Uq16fubzMkMbnejCUa', '2023-07-28 05:14:13', '2023-07-28 05:16:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
