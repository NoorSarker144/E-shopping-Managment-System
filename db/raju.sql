-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2017 at 01:57 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raju`
--
CREATE DATABASE IF NOT EXISTS `raju` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `raju`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpassword` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `cpassword`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'oni', 'admin@gmail.com', '$2y$10$jLVY0U8g/aflnzCX8LpoxeK7Sxj3Op4.AgLnjYHW8DJZfayLNQMBS', '123456', 'U9WFjDEbFg3haObuDNUnGyj0t2x91epwMVwe1oXhJnFg96cnYAXGjEnDK5j2', NULL, '2017-11-13 06:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Oil', '2017-04-10 18:00:00', '2017-04-09 18:00:00'),
(2, 'Meats', '2017-04-04 18:00:00', '2017-11-12 18:58:27'),
(3, 'Juice', '2017-11-12 18:59:27', '2017-11-12 18:59:27');

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
(4, '2017_04_01_051014_create_users_table', 1),
(5, '2017_04_14_104406_create_categories_table', 1),
(6, '2017_04_01_040125_create_products_table', 2),
(7, '2017_04_19_005737_create_orders_table', 3),
(8, '2017_04_23_061234_create_admins_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cart` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `mobile`, `address`, `cart`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lip Incompetences', '01746009560', 'Barisal', 'O:8:"App\\Cart":3:{s:5:"items";a:6:{i:6;a:3:{s:3:"qty";i:1;s:5:"price";d:78;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:6;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/tea.jpg";s:5:"title";s:21:"Ispahani Mirjapur Tea";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:78;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:6;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/tea.jpg";s:5:"title";s:21:"Ispahani Mirjapur Tea";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:78;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:5;a:3:{s:3:"qty";i:2;s:5:"price";d:106;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:5;s:11:"category_id";i:1;s:9:"imagePath";s:24:"images/products/tisu.jpg";s:5:"title";s:15:"Bosundhora Tisu";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:53;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:5;s:11:"category_id";i:1;s:9:"imagePath";s:24:"images/products/tisu.jpg";s:5:"title";s:15:"Bosundhora Tisu";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:53;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:2;a:3:{s:3:"qty";i:1;s:5:"price";d:90;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:2;s:11:"category_id";i:1;s:9:"imagePath";s:25:"images/products/ponds.jpg";s:5:"title";s:12:"Ponds Lotion";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:90;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:2;s:11:"category_id";i:1;s:9:"imagePath";s:25:"images/products/ponds.jpg";s:5:"title";s:12:"Ponds Lotion";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:90;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:1;a:3:{s:3:"qty";i:1;s:5:"price";d:100;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:1;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/oil.jpg";s:5:"title";s:11:"Soyabin Oil";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:100;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:1;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/oil.jpg";s:5:"title";s:11:"Soyabin Oil";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:100;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:4;a:3:{s:3:"qty";i:1;s:5:"price";d:33;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:4;s:11:"category_id";i:1;s:9:"imagePath";s:24:"images/products/salt.jpg";s:5:"title";s:13:"Aci Pure Salt";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:33;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:4;s:11:"category_id";i:1;s:9:"imagePath";s:24:"images/products/salt.jpg";s:5:"title";s:13:"Aci Pure Salt";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:33;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:3;a:3:{s:3:"qty";i:1;s:5:"price";d:45;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:3;s:11:"category_id";i:1;s:9:"imagePath";s:27:"images/products/radhuni.jpg";s:5:"title";s:13:"Radhuni Mosla";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:45;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:3;s:11:"category_id";i:1;s:9:"imagePath";s:27:"images/products/radhuni.jpg";s:5:"title";s:13:"Radhuni Mosla";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:45;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}}s:8:"totalQty";i:7;s:10:"totalPrice";d:452;}', '2017-04-18 19:13:52', '2017-04-18 19:13:52'),
(2, 11, 'Oli Ahmed', '01751330409', 'Rangpur', 'O:8:"App\\Cart":3:{s:5:"items";a:2:{i:7;a:3:{s:3:"qty";i:1;s:5:"price";d:187;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:7;s:11:"category_id";i:1;s:9:"imagePath";s:25:"images/products/murgi.jpg";s:5:"title";s:4:"Meat";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:187;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:7;s:11:"category_id";i:1;s:9:"imagePath";s:25:"images/products/murgi.jpg";s:5:"title";s:4:"Meat";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:187;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:5;a:3:{s:3:"qty";i:1;s:5:"price";d:53;s:4:"item";O:11:"App\\Product":23:{s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:5;s:11:"category_id";i:1;s:9:"imagePath";s:24:"images/products/tisu.jpg";s:5:"title";s:15:"Bosundhora Tisu";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:53;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:5;s:11:"category_id";i:1;s:9:"imagePath";s:24:"images/products/tisu.jpg";s:5:"title";s:15:"Bosundhora Tisu";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:53;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:11:"\0*\0fillable";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}}s:8:"totalQty";i:2;s:10:"totalPrice";d:240;}', '2017-04-18 22:02:35', '2017-04-18 22:02:35'),
(3, 12, 'Raju Ahmed', '01751330409', 'Rangpur', 'O:8:"App\\Cart":3:{s:5:"items";a:2:{i:1;a:3:{s:3:"qty";i:2;s:5:"price";d:200;s:4:"item";O:11:"App\\Product":23:{s:11:"\0*\0fillable";a:5:{i:0;s:11:"category_id";i:1;s:5:"title";i:2;s:5:"price";i:3;s:11:"description";i:4;s:9:"imagePath";}s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:1;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/oil.jpg";s:5:"title";s:11:"Soyabin Oil";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:100;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:1;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/oil.jpg";s:5:"title";s:11:"Soyabin Oil";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:100;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}i:8;a:3:{s:3:"qty";i:1;s:5:"price";d:50;s:4:"item";O:11:"App\\Product":23:{s:11:"\0*\0fillable";a:5:{i:0;s:11:"category_id";i:1;s:5:"title";i:2;s:5:"price";i:3;s:11:"description";i:4;s:9:"imagePath";}s:13:"\0*\0connection";N;s:8:"\0*\0table";N;s:13:"\0*\0primaryKey";s:2:"id";s:10:"\0*\0keyType";s:3:"int";s:10:"\0*\0perPage";i:15;s:12:"incrementing";b:1;s:10:"timestamps";b:1;s:13:"\0*\0attributes";a:8:{s:2:"id";i:8;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/vim.jpg";s:5:"title";s:8:"Vim Soap";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:50;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:11:"\0*\0original";a:8:{s:2:"id";i:8;s:11:"category_id";i:1;s:9:"imagePath";s:23:"images/products/vim.jpg";s:5:"title";s:8:"Vim Soap";s:11:"description";s:128:"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A";s:5:"price";d:50;s:10:"created_at";s:19:"2017-04-14 10:49:31";s:10:"updated_at";s:19:"2017-04-14 10:49:31";}s:12:"\0*\0relations";a:0:{}s:9:"\0*\0hidden";a:0:{}s:10:"\0*\0visible";a:0:{}s:10:"\0*\0appends";a:0:{}s:10:"\0*\0guarded";a:1:{i:0;s:1:"*";}s:8:"\0*\0dates";a:0:{}s:13:"\0*\0dateFormat";N;s:8:"\0*\0casts";a:0:{}s:10:"\0*\0touches";a:0:{}s:14:"\0*\0observables";a:0:{}s:7:"\0*\0with";a:0:{}s:6:"exists";b:1;s:18:"wasRecentlyCreated";b:0;}}}s:8:"totalQty";i:3;s:10:"totalPrice";d:250;}', '2017-11-13 06:49:43', '2017-11-13 06:49:43');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `imagePath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `imagePath`, `title`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/products/oil.jpg', 'Soyabin Oil', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 100, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(2, 1, 'images/products/ponds.jpg', 'Ponds Lotion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 90, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(3, 1, 'images/products/radhuni.jpg', 'Radhuni Mosla', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 45, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(4, 1, 'images/products/salt.jpg', 'Aci Pure Salt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 33, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(5, 1, 'images/products/tisu.jpg', 'Bosundhora Tisu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 53, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(6, 1, 'images/products/tea.jpg', 'Ispahani Mirjapur Tea', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 78, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(7, 1, 'images/products/murgi.jpg', 'Meat', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 187, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(8, 1, 'images/products/vim.jpg', 'Vim Soap', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias culpa doloremque facilis fuga illo itaque nam totam, voluptas. A', 50, '2017-04-14 04:49:31', '2017-04-14 04:49:31'),
(11, 3, 'images/products/oil.jpg', 'Pran Juice', 'Nice Juice', 30, '2017-11-12 19:19:21', '2017-11-12 19:19:21'),
(12, 3, 'images/products/RCIT Logo.png', 'Milk Juice', 'Nice Test', 50, '2017-11-13 06:51:43', '2017-11-13 06:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'oliahmedoni0603@gmail.com', '$2y$10$QNyvwdalxvk85eyuxe4ftuRGSZKeN4SIkmiO95UDxw2U3AgbADKUu', 'BSbJsYAF0UlkgoKGaZgUra7RNVU82Ek0dWXTtkJGmbNW7rSP0SqojAETZrfW', '2017-04-15 23:12:22', '2017-04-28 20:34:36'),
(11, 'aueodol@gmail.com', '$2y$10$ZBnkRNVJaoKGgAqdvP6/t.DkExkoL0LQ.d2MLm1/1d.SjLBBE/qpe', 'itWo6XxnRelrbSTPxEYVfVvS547N2vM5IXkxo6WhetBI2p82vmZb4FcI4I6Z', '2017-11-12 18:29:03', '2017-11-12 19:35:29'),
(12, 'raju@gmail.com', '$2y$10$7rCgajGGQb9grbt2xFTkcuExGhHhzuT61dwHth6OC2OaPnbeyea.O', '', '2017-11-13 06:49:13', '2017-11-13 06:49:13');

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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
