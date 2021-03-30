-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2020 at 01:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwatch`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `curl` varchar(255) NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `curl`, `cimage`, `updated_at`, `created_at`) VALUES
(1, 'Brand Shoes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;', 'brand-shoes', '03.02.2020.22.22.08-shoe_1.jpg', '2020-02-03 22:22:08', '2019-12-23 00:00:00'),
(2, 'Winter Collection', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'winter-collection', '03.02.2020.22.02.10-boots_1.jpg', '2020-02-03 22:02:10', '2019-12-23 00:00:00'),
(3, 'Lady Heels', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'lady-heels', '03.02.2020.22.00.44-heels_2.jpg', '2020-02-03 22:00:44', '2019-12-23 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `ctitle`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'About Our Company', 'Hello visitor!<br>We are a small shoe store with online e commerce site based out of haifa israel!<br>we sell and deliver shoes&nbsp; from haifa to \'Gush Dan\' metropolitan area.', '2020-02-03 09:45:28', '2020-01-07 00:00:00'),
(3, 2, 'Our services', 'Our service include deliveries also!<br>delivery costs are an additional 1$!<br>dont forget to tip the delivery person!', '2020-02-03 09:43:09', '2020-01-07 00:00:00'),
(4, 3, 'Contact details', 'Please contact as at +72827282992<br>and email us at aliyahu@gmail.com!', '2020-02-03 09:41:56', '2020-01-13 22:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `title`, `updated_at`, `created_at`) VALUES
(1, 'About', 'about', 'About Us', '2020-01-13 15:42:46', '2020-01-07 00:00:00'),
(2, 'Services', 'our-services', 'Company Services', '2020-01-07 00:00:00', '2020-01-07 00:00:00'),
(3, 'Contact', 'contact', 'Contact Us', '2020-01-07 00:00:00', '2020-01-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(2, 5, 'a:2:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";i:150;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:9:\"prd_2.jpg\";}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"Jordan Shoes\";s:5:\"price\";i:120;s:8:\"quantity\";i:3;s:10:\"attributes\";a:1:{s:5:\"image\";s:9:\"prd_1.jpg\";}s:10:\"conditions\";a:0:{}}}', '510.00', '2020-01-06 23:01:39', '2020-01-06 23:01:39'),
(3, 3, 'a:1:{i:12;a:6:{s:2:\"id\";s:2:\"12\";s:4:\"name\";s:10:\"demo title\";s:5:\"price\";i:120;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:50:\"16.01.2020.15.35.21-15.01.2020.20.25.18-crocks.jpg\";}s:10:\"conditions\";a:0:{}}}', '120.00', '2020-01-16 15:46:17', '2020-01-16 15:46:17'),
(4, 6, 'a:2:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";i:150;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:9:\"prd_2.jpg\";}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"Jordan Shoes\";s:5:\"price\";i:120;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:29:\"16.01.2020.16.51.54-prd_1.jpg\";}s:10:\"conditions\";a:0:{}}}', '270.00', '2020-01-17 15:17:51', '2020-01-17 15:17:51'),
(5, 5, 'a:2:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:12:\"Adidas Shoes\";s:5:\"price\";i:150;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:9:\"prd_2.jpg\";}s:10:\"conditions\";a:0:{}}i:1;a:6:{s:2:\"id\";s:1:\"1\";s:4:\"name\";s:12:\"Jordan Shoes\";s:5:\"price\";i:120;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:29:\"16.01.2020.16.51.54-prd_1.jpg\";}s:10:\"conditions\";a:0:{}}}', '270.00', '2020-01-22 14:35:48', '2020-01-22 14:35:48'),
(6, 5, 'a:1:{i:3;a:6:{s:2:\"id\";s:1:\"3\";s:4:\"name\";s:15:\"Blonstone Boots\";s:5:\"price\";i:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:1:{s:5:\"image\";s:9:\"prd_3.jpg\";}s:10:\"conditions\";a:0:{}}}', '100.00', '2020-01-24 14:50:10', '2020-01-24 14:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `kind` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `kind`, `updated_at`, `created_at`) VALUES
(1, 'Admin', '2020-01-02 00:00:00', '2020-01-02 00:00:00'),
(2, 'authenticated user', '2020-01-02 00:00:00', '2020-01-02 00:00:00'),
(3, 'content editor', '2020-01-02 00:00:00', '2020-01-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `purl` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `ptitle`, `particle`, `purl`, `pimage`, `price`, `updated_at`, `created_at`) VALUES
(1, 1, 'Jordan Shoes', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&nbsp;', 'jordan-shoes', '03.02.2020.22.26.34-jordan_3.jpg', '120.00', '2020-02-03 22:26:34', '2019-12-24 00:00:00'),
(2, 1, 'Adidas Shoes', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'adidas-shoes', '03.02.2020.22.27.54-adidas_1.jpg', '150.00', '2020-02-03 22:27:54', '2019-12-25 00:00:00'),
(3, 2, 'Blonstone Boots', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'blonstone-boots', '03.02.2020.22.28.49-blundstone.jpg', '100.00', '2020-02-03 22:28:49', '2019-12-25 00:00:00'),
(4, 2, 'Blunder-Boots', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'blunder-boots', '03.02.2020.22.30.27-boots_2.jpg', '145.00', '2020-02-03 22:30:27', '2019-12-25 00:00:00'),
(5, 3, 'Evelane Heels', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'evelane-heels', '04.02.2020.14.27.02-heels_3.jpg', '120.00', '2020-02-04 14:27:02', '2019-12-25 00:00:00'),
(6, 3, 'Banana Heels', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'banana-heels', '04.02.2020.14.50.57-heels_4.jpg', '400.00', '2020-02-04 14:50:57', '2019-12-25 00:00:00'),
(7, 1, 'Adidas Shoes 2', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'adidas-shoes-2', '04.02.2020.15.16.19-adidas_2.jpg', '150.00', '2020-02-04 15:16:19', '2019-12-25 00:00:00'),
(8, 1, 'Adidas Shoes 3', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'adidas-shoes-3', '04.02.2020.15.17.35-adidas_4.jpg', '150.00', '2020-02-04 15:17:36', '2019-12-25 00:00:00'),
(9, 1, 'Adidas Shoes 5', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'adidas-shoes-5', '04.02.2020.15.18.59-adidas_5.jpg', '150.00', '2020-02-04 15:18:59', '2019-12-25 00:00:00'),
(10, 1, 'Adidas Shoes 6', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'adidas-shoes-6', '04.02.2020.15.19.18-adidas_6.jpg', '150.00', '2020-02-04 15:19:18', '2019-12-25 00:00:00'),
(11, 1, 'Adidas Shoes 7', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?', 'adidas-shoes-7', '04.02.2020.15.19.33-adidas_7.jpg', '150.00', '2020-02-04 15:19:33', '2019-12-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `country`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '-', '2020-01-02 00:00:00', '2020-01-02 00:00:00'),
(2, '--', '--', '--', '--', '2020-01-02 00:00:00', '2020-01-02 00:00:00'),
(3, 'Shalev Cohen', 'shalev@gmail.com', '$2y$10$9/Bh9BsqTYFkOfDrvzjRr.tVTACgA7Kx43SH1EJbeDWV9XN6vcBeK', 'Israel', '2020-01-28 20:24:58', '2020-01-02 00:00:00'),
(4, 'Avial Goldberg', 'avial@gmail.com', '$2y$10$9/Bh9BsqTYFkOfDrvzjRr.tVTACgA7Kx43SH1EJbeDWV9XN6vcBeK', 'Georgia', '2020-01-28 19:56:10', '2020-01-02 00:00:00'),
(5, 'Aliyahu Hanavi', 'aliyahu2@gmail.com', '$2y$10$9/Bh9BsqTYFkOfDrvzjRr.tVTACgA7Kx43SH1EJbeDWV9XN6vcBeK', 'France', '2020-01-28 19:50:20', '2020-01-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`uid`, `pid`) VALUES
(3, 1),
(4, 2),
(5, 2),
(43, 1),
(44, 1),
(45, 1),
(47, 2),
(48, 2),
(49, 1),
(50, 3),
(51, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
