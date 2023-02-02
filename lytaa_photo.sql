-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2023 at 10:11 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lytaa_photo`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(25) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `user_id`, `category`, `status`, `description`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'Flower', 2, 1, 1, 'nothing', '1660021875.jpg', '2022-05-02 14:20:39', '2022-08-09 12:23:21'),
(2, 'food', 2, 2, 1, NULL, '1655092647.jpg', '2022-06-13 09:27:27', '2022-08-09 12:23:21'),
(3, 'food', 2, 3, 1, 'i shoot food', '1651560627.jpg', '2022-05-03 12:20:27', '2022-08-09 12:23:21'),
(4, 'Home 2', 2, 4, 1, NULL, '1652700062.jpg', '2022-05-16 16:51:02', '2022-08-09 12:23:21'),
(5, 'Rahul', 2, 5, 1, NULL, '1653996777.jpg', '2022-05-16 17:33:10', '2022-08-09 12:23:21'),
(6, 'Nature', 2, 6, 1, NULL, '1653996884.jpg', '2022-05-19 16:09:04', '2022-08-09 12:23:21'),
(7, 'Beach', 2, 7, 1, NULL, '1654000150.jpg', '2022-05-31 16:25:56', '2022-08-09 12:23:21'),
(10, 'Product Shoot', 52, 8, 1, NULL, '1655374605.jpg', '2022-06-16 15:46:45', '2022-06-16 15:46:45'),
(11, 'test', 113, NULL, 1, NULL, '1658835430.jpg', '2022-07-26 17:07:10', '2022-07-26 17:07:10'),
(12, 'test', 114, NULL, 1, NULL, '1658901774.jpg', '2022-07-27 11:32:54', '2022-07-27 11:32:54'),
(13, 'asdad', 141, 2, 1, NULL, '1659426279.jpg', '2022-08-02 13:14:39', '2022-08-02 13:14:39'),
(14, 'aml', 141, 3, 1, NULL, '1659426394.jpg', '2022-08-02 13:16:34', '2022-08-02 13:16:34'),
(15, 'wedding', 2, 3, 1, NULL, '1659503541.jpg', '2022-08-03 10:42:21', '2022-08-09 12:23:21'),
(21, 'Rahul naik', 2, 2, 1, NULL, '1659680765.webp', '2022-08-05 11:56:05', '2022-08-09 12:23:21'),
(26, 'Test1', 2, 23, 1, NULL, '1660026779.jpg', '2022-08-09 12:02:59', '2022-08-09 12:23:21'),
(25, 'coderix', 2, 1, 1, NULL, '1659932166.jpg', '2022-08-08 09:46:06', '2022-08-09 12:23:21'),
(27, 'Test 2', 2, 3, 1, NULL, '1660027583.jpg', '2022-08-09 12:16:23', '2022-08-09 12:23:21'),
(28, 'Test 3', 2, 5, 1, NULL, '1660027763.jpg', '2022-08-09 12:19:23', '2022-08-09 12:23:21'),
(29, 'test 4', 2, 8, 1, NULL, '1660027789.jpg', '2022-08-09 12:19:49', '2022-08-09 12:23:21'),
(30, 'Test 5', 2, 15, 1, NULL, '1660027816.jpg', '2022-08-09 12:20:16', '2022-08-09 12:23:21'),
(31, 'test 6', 2, 15, 1, NULL, '1660028071.jpg', '2022-08-09 12:24:31', '2022-08-09 12:24:31'),
(32, 'test 7', 2, 4, 1, NULL, '1660028098.jpg', '2022-08-09 12:24:58', '2022-08-09 12:24:58'),
(33, 'test 8', 2, 6, 1, NULL, '1660028135.jpg', '2022-08-09 12:25:35', '2022-08-09 12:25:35'),
(34, 'test 9', 2, 3, 1, NULL, '1660028178.jpg', '2022-08-09 12:26:18', '2022-08-09 12:26:18'),
(35, 'tets 10', 2, 15, 1, NULL, '1660028208.jpg', '2022-08-09 12:26:48', '2022-08-09 12:26:48'),
(36, 'Nanda Gopal....', 132, 5, 1, NULL, '1660048344.jpg', '2022-08-09 18:02:24', '2022-08-09 18:09:20'),
(37, 'Burger delight!!', 132, 2, 1, NULL, '1660048941.jpg', '2022-08-09 18:12:21', '2022-08-09 18:36:05'),
(38, 'Datta Gawade', 134, 4, 1, NULL, '1660652393.jpg', '2022-08-16 17:49:53', '2022-08-16 17:49:53'),
(39, 'Amar Alankar.', 132, 5, 1, NULL, '1660718193.jpg', '2022-08-17 12:06:33', '2022-08-17 12:06:33'),
(40, 'Chennakeshwara Temple Top In A Stormy Day...', 132, 7, 1, NULL, '1660799873.jpg', '2022-08-18 10:47:53', '2022-08-18 10:47:53'),
(41, 'Pre-wedding', 257, 2, 1, NULL, '1660803582.jpg', '2022-08-18 11:49:42', '2022-08-18 11:49:42'),
(42, 'Datta Gawade', 134, 7, 1, NULL, '1660806457.JPG', '2022-08-18 12:37:37', '2022-08-18 12:37:37'),
(43, 'Datta Gawade 2', 134, 2, 1, NULL, '1660807234.jpg', '2022-08-18 12:50:34', '2022-08-18 12:50:34'),
(44, 'Brown Breasted Kingfisher', 132, 3, 1, NULL, '1660883967.jpg', '2022-08-19 10:09:27', '2022-08-19 10:09:27'),
(45, 'gen1', 279, 1, 1, NULL, '1661164167.jpg', '2022-08-22 15:59:27', '2022-08-22 15:59:27'),
(46, 'album1', 376, 1, 1, NULL, '1664779128.jpg', '2022-10-03 12:08:48', '2022-10-03 12:08:48'),
(47, 'abhi', 376, 6, 1, NULL, '1665048328.jpg', '2022-10-04 11:58:52', '2022-10-06 15:03:23'),
(53, 'saas', 376, 9, 1, NULL, '1665042182.jpg', '2022-10-06 13:13:02', '2022-10-06 15:13:08'),
(54, 'a', 476, 1, 1, NULL, '1668582920.jpg', '2022-11-16 12:45:20', '2022-11-16 12:45:20');

-- --------------------------------------------------------

--
-- Table structure for table `artist_package`
--

CREATE TABLE `artist_package` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `razorpay_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pay_amt` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `cat_image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Wedding', NULL, '2022-01-27 22:25:23', '2022-07-15 09:56:48', NULL),
(2, 'Foods', NULL, '2022-01-27 22:25:23', '2022-05-17 12:25:28', NULL),
(3, 'Wildlife', NULL, '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(4, 'Fashion', NULL, '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(5, 'Portrait', NULL, '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(6, 'Sports', NULL, '2022-01-27 22:25:23', '2022-05-14 10:49:42', NULL),
(7, 'Architectural', NULL, '2022-01-27 22:25:23', '2022-05-14 10:46:04', NULL),
(8, 'pre wedding', NULL, '2022-05-14 09:48:20', '2022-05-14 10:41:06', NULL),
(9, 'Travel and Tour', NULL, '2022-05-20 11:26:39', '2022-07-15 14:21:49', NULL),
(10, 'gh', NULL, '2022-07-06 13:01:55', '2022-10-17 10:56:04', '2022-10-17 10:56:04'),
(11, 'Rahul', NULL, '2022-07-06 13:09:07', '2022-07-06 13:09:12', NULL),
(12, 'ght', NULL, '2022-07-06 14:49:25', '2022-07-06 14:49:29', NULL),
(13, 'Rahul', NULL, '2022-07-06 15:17:29', '2022-07-06 15:18:06', NULL),
(14, 'wwq', NULL, '2022-07-06 15:18:00', '2022-07-06 15:18:10', NULL),
(15, 'asdad', NULL, '2022-07-19 16:12:19', '2022-08-16 16:24:27', NULL),
(16, 'Industires', NULL, '2022-07-21 12:17:29', '2022-07-21 12:17:29', NULL),
(30, 'vfsvf', '1669285362.jpg', '2022-11-24 15:52:42', '2022-11-24 15:52:49', '2022-11-24 15:52:49'),
(29, 'ssss', '1669285314.jpg', '2022-11-24 15:51:54', '2022-11-24 15:52:02', '2022-11-24 15:52:02'),
(28, 'asd', '1669280195.jpg', '2022-11-24 14:26:35', '2022-11-24 14:35:16', '2022-11-24 14:35:16'),
(27, 'asd', '1669280134.jpg', '2022-11-24 14:25:34', '2022-11-24 14:35:06', '2022-11-24 14:35:06');

-- --------------------------------------------------------

--
-- Table structure for table `category_job`
--

CREATE TABLE `category_job` (
  `job_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_job`
--

INSERT INTO `category_job` (`job_id`, `category_id`) VALUES
(1, 1),
(2, 2),
(3, 5),
(4, 3),
(5, 7),
(6, 1),
(7, 3),
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category_profile`
--

CREATE TABLE `category_profile` (
  `profile_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_profile`
--

INSERT INTO `category_profile` (`profile_id`, `category_id`, `created_at`, `updated_at`) VALUES
(56, 1, NULL, NULL),
(54, 2, NULL, NULL),
(54, 4, NULL, NULL),
(56, 2, NULL, NULL),
(59, 4, NULL, NULL),
(59, 3, NULL, NULL),
(60, 4, NULL, NULL),
(60, 2, NULL, NULL),
(59, 5, NULL, NULL),
(35, 1, NULL, NULL),
(82, 2, NULL, NULL),
(64, 2, NULL, NULL),
(64, 3, NULL, NULL),
(64, 5, NULL, NULL),
(66, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Zieme, Bernhard and Ankunding', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(2, 'Barrows, Rempel and Maggio', '2022-01-27 22:25:26', '2022-01-27 22:25:26', NULL),
(3, 'Brown, Altenwerth and McKenzie', '2022-01-27 22:25:26', '2022-01-27 22:25:26', NULL),
(4, 'Predovic-Nikolaus', '2022-01-27 22:25:26', '2022-01-27 22:25:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `final_price` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_sign` text COLLATE utf8mb4_unicode_ci,
  `user_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_id` int(10) DEFAULT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_sign` text COLLATE utf8mb4_unicode_ci,
  `artist_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `projected_budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` int(11) NOT NULL DEFAULT '0',
  `quotes_id` int(10) DEFAULT NULL,
  `client_reason` longtext COLLATE utf8mb4_unicode_ci,
  `client_feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `final_price`, `status`, `address`, `project_details`, `profile_id`, `user_id`, `user_name`, `user_email`, `user_sign`, `user_price`, `artist_id`, `artist_name`, `artist_email`, `artist_sign`, `artist_price`, `start_date`, `end_date`, `projected_budget`, `job_type`, `price_type`, `invoice`, `quotes_id`, `client_reason`, `client_feedback`, `created_at`, `updated_at`) VALUES
(2, 15000, 'Completed', 'south goa', 'wedding', '35', '3', 'Client', 'client@client.com', '1674625137.jpg', NULL, 2, 'Artist', 'artist@artist.com', '1674624326.jpg', '55000', '2023-01-12', '2023-01-13', NULL, NULL, NULL, 0, 9, NULL, NULL, '2023-01-25 10:55:26', '2023-02-02 12:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `phone`, `description`) VALUES
(1, 'Richarddus', 'visie.musical@tele2.nl', '85583273628', 'Hello, \r\nMusic scene releases, VIP premium account, download music private FTP https://0daymusic.org \r\nList albums: https://0daymusic.org/FTPtxt/ \r\nSorted section by date / genre. \r\nPrivate FTP Music/Albums/mp3 1990-2022. \r\n \r\nBest Regards, 0day-music team.'),
(2, 'Sneha', 'sangekarsneha@gmail.com', '7507807686', 'Test!'),
(3, 'Naresh', 'naresh@coderix.io', '9548969855', 'need artist'),
(4, 'Ronaldfug', 'no-replypseuntesy@gmail.com', '86933436983', 'Hello!  lytaa.com \r\n \r\nWe suggesting \r\n \r\nSending your business proposition through the Contact us form which can be found on the sites in the contact partition. Contact form are filled in by our software and the captcha is solved. The advantage of this method is that messages sent through feedback forms are whitelisted. This method improve the odds that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis message is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.'),
(5, 'Helina Aziz', 'helinaaziz966@gmail.com', '89594849227', 'As-salamu alaykum, \r\n \r\nHow are you? \r\n \r\nMy name is Ms. Helina Aziz. Am reaching you through your website because I might not get you on the phone. \r\n \r\nI am interested in investing in your country through your personal business or services. I will like to keep this brief until I hear from you, you can reach me on  helinaaziz966@gmail.com or helina.aziz@saudiroyalfamily.live and WhatsApp messenger +447418439845. \r\n \r\nHave a nice day, \r\nMs. Helina Aziz'),
(6, 'RichardTheda', 'no-replypseuntesy@gmail.com', '88944957655', 'Hello!  lytaa.com \r\n \r\nWe present oneself \r\n \r\nSending your commercial offer through the feedback form which can be found on the sites in the Communication partition. Feedback forms are filled in by our application and the captcha is solved. The advantage of this method is that messages sent through feedback forms are whitelisted. This technique increases the odds that your message will be open. \r\n \r\nOur database contains more than 27 million sites around the world to which we can send your message. \r\n \r\nThe cost of one million messages 49 USD \r\n \r\nFREE TEST mailing Up to 50,000 messages. \r\n \r\n \r\nThis message is created automatically.  Use our contacts for communication. \r\n \r\nContact us. \r\nTelegram - @FeedbackMessages \r\nSkype  live:contactform_18 \r\nWhatsApp - +375259112693 \r\nWe only use chat.'),
(7, 'HenrypaR', 'RookTessa9292@o2.pl', '89039923921', 'Everyone can earn as much as he wants suing this Bot. https://paR.bode-roesch.de/paR'),
(8, 'HenrypaR', 'RookTessa9292@o2.pl', '89033432063', 'The online income is the easiest ways to make you dream come true. https://paR.bode-roesch.de/paR'),
(9, 'MargaritaRone', 'margaritaRone@gmail.com', '+40 2374127351', 'Hello all, guуѕ! I know, my meѕѕаge mаy be tоo sресific,\r\nВut mу siѕter fоund niсe mаn hеre and thеу marrіed, so hоw аbоut me?! :)\r\nI am 27 yеars old, Μаrgаrіta, from Rоmаnіа, Ι know Еngliѕh and Germаn lаnguаges also\r\nAnd... Ι havе sрeсіfic diseаsе, nаmed nуmphomania. Ԝhо knоw whаt iѕ this, сan understаnd me (bettеr to saу іt immedіatеlу)\r\nΑh уеѕ, I coоk very tastу! and Ι love nоt onlу coоk ;))\r\nIm rеal girl, not рrostіtutе, and loоking for ѕеriоuѕ and hоt relatіonѕhiр...\r\nΑnywау, уоu саn find mу рrofilе hеre: http://acbuvasboive.ga/user/56075/'),
(10, 'HenrypaR', 'tueemil@forum.dk', '89032902515', 'We know how to make our future rich and do you? https://paR.bode-roesch.de/paR'),
(11, 'HenrypaR', 'ntc001@forum.dk', '89035730160', 'Everyone who needs money should try this Robot out. https://paR.bode-roesch.de/paR'),
(12, 'HenrypaR', 'denise-tork-baasch@mail-online.dk', '89036483085', 'The best online job for retirees. Make your old ages rich. https://paR.bode-roesch.de/paR'),
(13, 'HenrypaR', 'jrrt3791@mailme.dk', '89037887601', 'This robot can bring you money 24/7. https://paR.bode-roesch.de/paR'),
(14, 'HenrypaR', 'taisons@forum.dk', '89030607456', 'Making money in the net is easier now. https://paR.bode-roesch.de/paR'),
(15, 'HenrypaR', 'j.c.barnhill@student.tcu.edu', '89030619948', 'Earning money in the Internet is easy if you use Robot. https://paR.bode-roesch.de/paR'),
(16, 'HenrypaR', 'feldballe@forum.dk', '89032208534', 'Making money is very easy if you use the financial Robot. https://paR.bode-roesch.de/paR'),
(17, 'HenrypaR', 'dannilarsen@forum.dk', '89033550430', 'The financial Robot is the most effective financial tool in the net! https://paR.bode-roesch.de/paR'),
(18, 'HenrypaR', 'efdgdt@mailme.dk', '89030823559', 'The financial Robot works for you even when you sleep. https://paR.bode-roesch.de/paR'),
(19, 'HenrypaR', 'psteen@forum.dk', '89035710438', 'Thousands of bucks are guaranteed if you use this robot. https://paR.bode-roesch.de/paR'),
(20, 'HenrypaR', 'amalie5230@forum.dk', '89036232748', 'Make dollars staying at home and launched this Bot. https://paR.bode-roesch.de/paR'),
(21, 'HenrypaR', 't35v20p@forum.dk', '89039890572', 'Invest $1 today to make $1000 tomorrow. https://paR.bode-roesch.de/paR'),
(22, 'HenrypaR', 'karina-krogh@mailme.dk', '89038953487', 'Financial robot keeps bringing you money while you sleep. https://paR.blueliners07.de/paR'),
(23, 'HenrypaR', 'headltd@mailme.dk', '89037556743', 'Make yourself rich in future using this financial robot. https://paR.blueliners07.de/paR'),
(24, 'HenrypaR', 'robertellison20@yahoo.com', '89036044766', 'Still not a millionaire? Fix it now! https://paR.blueliners07.de/paR'),
(25, 'HenrypaR', 'faxevej8@forum.dk', '89034604068', 'Even a child knows how to make money. This robot is what you need! https://paR.blueliners07.de/paR'),
(26, 'HenrypaR', 'marianielsen@jubiipost.dk', '89036206349', 'One dollar is nothing, but it can grow into $100 here. https://paR.blueliners07.de/paR'),
(27, 'HenrypaR', 'jespergh84@forum.dk', '89031498351', 'The financial Robot is your future wealth and independence. https://paR.blueliners07.de/paR'),
(28, 'HenrypaR', 'kennethks@forum.dk', '89037742667', 'Robot is the best solution for everyone who wants to earn. https://paR.blueliners07.de/paR'),
(29, 'HenrypaR', 'bente@mail-online.dk', '89038453641', 'The online income is the easiest ways to make you dream come true. https://paR.blueliners07.de/paR'),
(30, 'HenrypaR', 'pia_vestergaard@forum.dk', '89033881807', 'Need some more money? Robot will earn them really fast. https://paR.blueliners07.de/paR'),
(31, 'HenrypaR', 'pinque@mailme.dk', '89030260638', 'Provide your family with the money in age. Launch the Robot! https://paR.blueliners07.de/paR'),
(32, 'HenrypaR', 'agii@forum.dk', '89031311859', 'Financial Robot is #1 investment tool ever. Launch it! https://paR.blueliners07.de/paR'),
(33, 'HenrypaR', 'keko01@forum.dk', '89034447151', 'Earning $1000 a day is easy if you use this financial Robot. https://paR.blueliners07.de/paR'),
(34, 'HenrypaR', 'lapusentus@mailme.dk', '89036649337', 'The huge income without investments is available. https://paR.blueliners07.de/paR'),
(35, 'HenrypaR', 'proletar@forum.dk', '89035802566', 'Earn additional money without efforts. https://paR.blueliners07.de/paR'),
(36, 'HenrypaR', 'jacobchambers0256@mailme.dk', '89035346600', 'Let the Robot bring you money while you rest. https://paR.blueliners07.de/paR'),
(37, 'HenrypaR', 'mfacebookjesper@forum.dk', '89037416759', 'Earn additional money without efforts and skills. https://paR.blueliners07.de/paR'),
(38, 'Donald Cole', 'lanj7962@gmail.com', '86938784812', 'Good day \r\n \r\n \r\n \r\nI contacted you some days back seeking your cooperation in a matter regarding funds worth $24 Million, I \r\nurge you to get back to me through this email coledd221@cloedcolela.com if you\'re still interested. \r\n \r\n \r\nI await your response. \r\n \r\n \r\nThanks, \r\n \r\n \r\nDonald Cole'),
(39, 'Mike Phillips', 'no-replySi@gmail.com', '81792879997', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Phillips\r\n \r\nsupport@digital-x-press.com'),
(40, 'Mike Barnes', 'no-replySi@gmail.com', '81742328475', 'Hello \r\n \r\nThis is Mike Barnes\r\n \r\nLet me show you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your lytaa.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Barnes\r\n \r\nmike@strictlydigital.net'),
(41, 'CrytopaRpaR', 'MerinoBart@o2.pl', '89036764782', 'Attention! Here you can earn money online! https://Namb.startupers.se/promo'),
(42, 'CrytopaRpaR', 'MerinoBart@o2.pl', '89035780407', 'Check out the new financial tool, which can make you rich. https://Namb.startupers.se/gotodate/go'),
(43, 'GeorgeFef', 'yourmail@gmail.com', '81151274857', 'Njfhsjdwkdjwfh jiwkdwidwhidjwi jiwkdowfiehgejikdoswfiw https://gehddijiwfugwdjaidheufeduhwdwhduhdwudw.com/fjhdjwksdehfjhejdsdefhe'),
(44, 'CrytopaRpaR', 'MerinoBart@o2.pl', '89035610066', 'Wow! This is a fastest way for a financial independence. https://Namb.startupers.se/gotodate/go'),
(45, 'CrytopaRpaR', 'MerinoBart@o2.pl', '89039390648', 'Rich people are rich because they use this robot. https://Namb.startupers.se/gotodate/go'),
(46, 'CrytopaRpaR', 'MerinoBart@o2.pl', '89035578272', 'We know how to make our future rich and do you? https://Namb.startupers.se/gotodate/go'),
(47, 'CrytopaRpaR', 'rooh_alglaa.m@hotmail.com', '89030933285', 'Check out the automatic Bot, which works for you 24/7. https://Namb.startupers.se/gotodate/go'),
(48, 'CrytopaRpaR', 'mickel821@gmail.com', '89034426554', 'Wow! This is a fastest way for a financial independence. https://Namb.startupers.se/gotodate/go'),
(49, 'CrytopaRpaR', 'aristidesda@hotmail.com', '89038415751', 'The fastest way to make your wallet thick is found. https://Namb.startupers.se/gotodate/go'),
(50, 'CrytopaRpaR', 'sellomusic@hotmail.com', '89032684979', 'Watch your money grow while you invest with the Robot. https://Namb.startupers.se/gotodate/go'),
(51, 'CrytopaRpaR', 'tmbkqjhb@sharklasers.com', '89031710934', 'No worries if you are fired. Work online. https://Namb.startupers.se/gotodate/go'),
(52, 'CrytopaRpaR', 'moondrop79@wowway.com', '89039888773', 'Need money? The financial robot is your solution. https://Namb.startupers.se/gotodate/go'),
(53, 'CrytopaRpaR', 'lizholmes12@hotmail.com', '89037801083', 'Make dollars just sitting home. https://Namb.startupers.se/gotodate/go'),
(54, 'CrytopaRpaR', 'katiebug31332@yahoo.com', '89031109007', 'The huge income without investments is available. https://Namb.startupers.se/gotodate/go'),
(55, 'CrytopaRpaR', 'adrianareyes60@yahoo.com', '89039471714', 'Making money is very easy if you use the financial Robot. https://Namb.startupers.se/gotodate/go'),
(56, 'Mike Gibbs', 'no-replySi@gmail.com', '88751924961', 'Hi there \r\n \r\nDo you want a quick boost in ranks and sales for your website? \r\nHaving a high DA score, always helps \r\n \r\nGet your lytaa.com to have a DA between 50 to 60 points in Moz with us today and reap the benefits of such a great feat. \r\n \r\nSee our offers here: \r\nhttps://www.monkeydigital.co/product/moz-da50-seo-plan/ \r\n \r\nOn SALE: \r\nhttps://www.monkeydigital.co/product/ahrefs-dr60/ \r\n \r\n \r\nThank you \r\nMike Gibbs'),
(57, 'Mike', 'no-replySi@gmail.com', '89435586396', 'Hello \r\n \r\nWe will improve your Local Ranks organically and safely, using only whitehat methods, while providing Google maps and website offsite work at the same time. \r\n \r\nPlease check our pricelist here, we offer Local SEO at cheap rates. \r\nhttps://speed-seo.net/product/local-seo-package/ \r\n \r\nNEW: \r\nhttps://www.speed-seo.net/product/zip-codes-gmaps-citations/ \r\n \r\nregards \r\nMike  \r\nSpeed SEO Digital Agency'),
(58, 'CrytopaR', 'cbarron715@yahoo.com', '89037401896', 'Earning money in the Internet is easy if you use Robot. https://Namb.dkworld.de/gotodate/go'),
(59, 'Mason Jones', 'explaineranimationstudio7@gmail.com', '85297839233', 'Hey! \r\n \r\nDo you want to increase sales for your business 24/7? \r\n \r\nIf so, you have to grab people’s attention quickly. And there’s nothing like a catchy explainer video to do the trick! \r\n \r\nI have an exclusive offer available for the first 20 people that act on this message today, but you must act fast. \r\n \r\nWhile you would normally pay as much as $600, or probably even $1,000, for a 60-second video like this, I am providing the same service for only $97. \r\n \r\nDon’t be fooled by the price, we create high-quality videos, and you can see samples or order now at: https://bit.ly/explainer-animation-promo \r\n \r\nNot sure if you caught it, but this offer is only good this week, for the first 20 clients, so you need to order now, before you miss out. \r\n \r\nAgain, this $97 promotion is for a 60-second explainer video and is for this week only. Don’t miss out!!! \r\n \r\nClick Here Now To Watch The Animated Video That We Created To Explain It All \r\n---> https://bit.ly/explainer-animation-promo \r\n \r\nCheers, \r\nMason Jones \r\nExplainer Animation Studio'),
(60, 'CrytopaR', 'moonieluv@msn.com', '89038214483', 'Make your money work for you all day long. https://Namb.dkworld.de/gotodate/go'),
(61, 'CrytopaR', 'sandra.king-williams@polk-fl.net', '89039195737', 'Even a child knows how to make $100 today with the help of this robot. https://Namb.dkworld.de/gotodate/go'),
(62, 'CrytopaR', 'kelleyvegas95@gmail.com', '89033900493', 'Make money 24/7 without any efforts and skills. https://Namb.seamonkey.es/gotodate/go'),
(63, 'CrytopaR', 'vggymnast@gmail.com', '89039457396', 'Find out about the easiest way of money earning. https://Namb.seamonkey.es/gotodate/go'),
(64, 'CrytopaR', 'lhoffpauir@gmail.com', '89039194356', 'No need to worry about the future if your use this financial robot. https://Namb.seamonkey.es/gotodate/go'),
(65, 'Mike Fulton', 'no-replySi@gmail.com', '81958495285', 'Hi \r\n \r\nI have just took a look on your SEO for  lytaa.com for the ranking keywords and saw that your website could use a push. \r\n \r\nWe will increase your SEO metrics and ranks organically and safely, using only whitehat methods, while providing monthly reports and outstanding support. \r\n \r\nPlease check our services below, we offer SEO at cheap rates. \r\nhttps://www.hilkom-digital.de/cheap-seo-packages/ \r\n \r\nStart increasing your sales and leads with us, today! \r\n \r\n \r\nregards \r\nMike Fulton\r\n \r\nHilkom Digital Team \r\nsupport@hilkom-digital.de'),
(66, 'CrytopaR', 'gdb69@hotmail.com', '89031568336', 'It is the best time to launch the Robot to get more money. https://Namb.seamonkey.es/gotodate/go'),
(67, 'CrytopaR', 'robertsondm@yahoo.com', '89033590751', 'Robot never sleeps. It makes money for you 24/7. https://Namb.seamonkey.es/gotodate/go'),
(68, 'CrytopaR', 'hollaitscolly@aim.com', '89038628678', 'Launch the financial Bot now to start earning. https://Namb.seamonkey.es/gotodate/go'),
(69, 'CrytopaR', 'laamassey@yahoo.com', '89033329381', 'Everyone can earn as much as he wants now. https://Namb.seamonkey.es/gotodate/go'),
(70, 'CrytopaR', 'spamintheass@gmail.com', '89036805780', 'Your computer can bring you additional income if you use this Robot. https://Namb.seamonkey.es/gotodate/go'),
(71, 'CrytopaR', 'm.a.g.i.ccutt.s.sam.ywe.i@gmail.com', '89032418840', 'Learn how to make hundreds of backs each day. https://Namb.seamonkey.es/gotodate/go'),
(72, 'Mike Pearcy', 'no-replySi@gmail.com', '84882919223', 'Hello \r\n \r\nWe all know the importance that dofollow link have on any website`s ranks. \r\nHaving most of your linkbase filled with nofollow ones is of no good for your ranks and SEO metrics. \r\n \r\nBuy quality dofollow links from us, that will impact your ranks in a positive way \r\nhttps://www.digital-x-press.com/product/150-dofollow-backlinks/ \r\n \r\nBest regards \r\nMike Pearcy\r\n \r\nsupport@digital-x-press.com'),
(73, 'CrytopaR', 'cabezaskidz_jake@yahoo.com', '89033418261', 'Your money keep grow 24/7 if you use the financial Robot. https://Namb.startupers.se/gotodate/go'),
(74, 'CrytopaR', 'annemagali@cox.net', '89030075886', 'Money, money! Make more money with financial robot! https://Namb.startupers.se/gotodate/go'),
(75, 'CrytopaR', 'aleenasays@yahoo.com', '89030051335', 'No need to work anymore while you have the Robot launched! https://Namb.startupers.se/gotodate/go'),
(76, 'CrytopaR', 'pinkranger241@yahoo.com', '89036935582', 'Launch the best investment instrument to start making money today. https://Namb.startupers.se/gotodate/go'),
(77, 'CrytopaR', 'playa12345@comcast.net', '89035741680', 'The online financial Robot is your key to success. https://Namb.startupers.se/gotodate/go'),
(78, 'CrytopaR', 'jenae831@hotmail.com', '89039370752', 'There is no need to look for a job anymore. Work online. https://Namb.elletvweb.it/gotodate/go'),
(79, 'CrytopaR', 'kseth62501@yahoo.com', '89036288571', 'Need cash? Launch this robot and see what it can. https://Namb.elletvweb.it/gotodate/go'),
(80, 'CrytopaR', 'sadbeard@nortel.com', '89037986892', 'The online income is your key to success. https://Namb.elletvweb.it/gotodate/go'),
(81, 'CrytopaR', 'Ztyger@rocketmail.com', '89034560444', 'Only one click can grow up your money really fast. https://Namb.elletvweb.it/gotodate/go'),
(82, 'CrytopaR', 'laurent.tantot@gmail.com', '89035265352', 'Only one click can grow up your money really fast. https://Namb.elletvweb.it/gotodate/go'),
(83, 'CrytopaR', 'fordfamily07@icloud.com', '89030813177', 'Try out the best financial robot in the Internet. https://Namb.elletvweb.it/gotodate/go'),
(84, 'CrytopaR', 'smatz@usd397.com', '89030537477', 'Financial independence is what this robot guarantees. https://Namb.elletvweb.it/gotodate/go'),
(85, 'CrytopaR', 'ryanandlaura@telus.net', '89030506995', 'The best online investment tool is found. Learn more! https://Namb.elletvweb.it/gotodate/go'),
(86, 'CrytopaR', 'vic0427@bellsouth.net', '89034118889', 'We know how to become rich and do you? https://Namb.elletvweb.it/gotodate/go'),
(87, 'CrytopaR', 'x_files_65201@yahoo.com', '89036028397', 'Earn additional money without efforts. https://Namb.elletvweb.it/gotodate/go'),
(88, 'CrytopaR', 'celinaaleman@live.com', '89038730423', 'Start making thousands of dollars every week. https://Namb.elletvweb.it/gotodate/go'),
(89, 'CrytopaR', 'yauaweffo@gmail.com', '89038348527', 'Have no money? Earn it online. https://Namb.elletvweb.it/gotodate/go'),
(90, 'CrytopaR', 'nnankin@gmail.com', '89036716395', 'Financial Robot is #1 investment tool ever. Launch it! https://Namb.elletvweb.it/gotodate/go'),
(91, 'CrytopaR', 'Carylec@frontiernet.net', '89032961331', 'Everyone can earn as much as he wants now. https://Namb.elletvweb.it/gotodate/go'),
(92, 'CrytopaR', 'accesshda@gmail.com', '89030130717', 'Need money? Get it here easily? https://Namb.elletvweb.it/gotodate/go'),
(93, 'CrytopaR', 'alexishawari@hotmail.com', '89038953959', 'Launch the robot and let it bring you money. https://Namb.elletvweb.it/gotodate/go'),
(94, 'CrytopaR', 'ressam_memo19@hotmail.com', '89033052400', 'Have no money? Earn it online. https://Namb.elletvweb.it/gotodate/go'),
(95, 'CrytopaR', 'r.reza131@gmail.com', '89036534106', 'Everyone who needs money should try this Robot out. https://Namb.elletvweb.it/gotodate/go'),
(96, 'CrytopaR', 'yaoshenhe@yahoo.com', '89036350900', 'Everyone who needs money should try this Robot out. https://Namb.elletvweb.it/gotodate/go'),
(97, 'CrytopaR', 'eokmmehv@qxbwzntv.com', '89038434770', 'Financial independence is what this robot guarantees. https://Namb.elletvweb.it/gotodate/go'),
(98, 'CrytopaR', 'gipuwimylev@hotmail.com', '89035315170', 'Make money, not war! Financial Robot is what you need. https://Namb.elletvweb.it/gotodate/go'),
(99, 'CrytopaR', 'pamelajv13@gmail.com', '89030341060', 'The online income is your key to success. https://Namb.elletvweb.it/gotodate/go'),
(100, 'CrytopaR', 'sana_yol@hotmail.com', '89031272010', 'It is the best time to launch the Robot to get more money. https://Namb.elletvweb.it/gotodate/go'),
(101, 'CrytopaR', 'pamdutton65@yahoo.com', '89038427087', 'Even a child knows how to make money. This robot is what you need! https://Namb.elletvweb.it/gotodate/go'),
(102, 'CrytopaR', 'Brandifitch@aol.com', '89038280792', 'This robot can bring you money 24/7. https://Namb.elletvweb.it/gotodate/go'),
(103, 'CrytopaR', 'ogando_juan@yahoo.com', '89036568942', 'This robot will help you to make hundreds of dollars each day. https://Namb.elletvweb.it/gotodate/go'),
(104, 'CrytopaR', 'rqljlss@hotmails.com', '89039391825', 'Looking for additional money? Try out the best financial instrument. https://Namb.elletvweb.it/gotodate/go'),
(105, 'CrytopaR', 'liosemchania@earthlink.net', '89037225410', 'Try out the best financial robot in the Internet. https://Namb.elletvweb.it/gotodate/go'),
(106, 'CrytopaR', 'sana_yol@hotmail.com', '89032496443', 'Financial robot keeps bringing you money while you sleep. https://Namb.elletvweb.it/gotodate/go'),
(107, 'CrytopaR', 'tetedede13@gmail.com', '89032530986', 'Need money? Get it here easily? https://Namb.elletvweb.it/gotodate/go'),
(108, 'CrytopaR', 'Ellenmetheney@yahoo.com', '89032933293', 'Make thousands of bucks. Pay nothing. https://Namb.elletvweb.it/gotodate/go'),
(109, 'CrytopaR', 'edwardfox48881@yahoo.com', '89035893494', 'Need money? Earn it without leaving your home. https://Namb.elletvweb.it/gotodate/go'),
(110, 'CrytopaR', 'rforchhammer@gmail.com', '89038191088', 'Automatic robot is the best start for financial independence. https://Namb.elletvweb.it/gotodate/go'),
(111, 'CrytopaR', 'mzclauz@yahoo.com', '89030883782', 'Let the Robot bring you money while you rest. https://Namb.elletvweb.it/gotodate/go'),
(112, 'CrytopaR', 'n.alzubaidi@hotmail.com', '89031328871', 'The additional income for everyone. https://Namb.elletvweb.it/gotodate/go'),
(113, 'CrytopaR', 'jupajoob@yeah.net', '89033412140', 'Financial robot keeps bringing you money while you sleep. https://Namb.elletvweb.it/gotodate/go'),
(114, 'CrytopaR', 'MGURATH@HOTMAIL.COM', '89032504171', 'This robot can bring you money 24/7. https://Namb.elletvweb.it/gotodate/go'),
(115, 'CrytopaR', 'gregorivanov@email.org', '89038179764', 'Start making thousands of dollars every week. https://Namb.elletvweb.it/gotodate/go'),
(116, 'CrytopaR', 'TheSkeetor@gmail.com', '89037286908', 'Automatic robot is the best start for financial independence. https://Namb.elletvweb.it/gotodate/go'),
(117, 'Mike Phillips', 'no-replySi@gmail.com', '85285532191', 'Good Day \r\n \r\nThis is Mike Phillips\r\n \r\nLet me introduce to you our latest research results from our constant SEO feedbacks that we have from our plans: \r\n \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nThe new Semrush Backlinks, which will make your lytaa.com SEO trend have an immediate push. \r\nThe method is actually very simple, we are building links from domains that have a high number of keywords ranking for them.  \r\n \r\nForget about the SEO metrics or any other factors that so many tools try to teach you that is good. The most valuable link is the one that comes from a website that has a healthy trend and lots of ranking keywords. \r\nWe thought about that, so we have built this plan for you \r\n \r\nCheck in detail here: \r\nhttps://www.strictlydigital.net/product/semrush-backlinks/ \r\n \r\nCheap and effective \r\n \r\nTry it anytime soon \r\n \r\n \r\nRegards \r\n \r\nMike Phillips\r\n \r\nmike@strictlydigital.net'),
(118, 'CrytopaR', 'stephanie.warren@cnh.com', '89038497646', 'Need cash? Launch this robot and see what it can. https://Namb.elletvweb.it/gotodate/go'),
(119, 'CrytopaR', 'alasheia79@yahoo.com', '89030608822', 'Rich people are rich because they use this robot. https://Namb.elletvweb.it/gotodate/go'),
(120, 'CrytopaR', 'aliciarimestad@yahoo.com', '89036861829', 'One click of the robot can bring you thousands of bucks. https://Namb.elletvweb.it/gotodate/go'),
(121, 'CrytopaR', 'tony_the_hair@hotmail.com', '89039654155', 'Using this Robot is the best way to make you rich. https://Namb.elletvweb.it/gotodate/go'),
(122, 'CrytopaR', 'engelhardtgreg@yahoo.com', '89035107799', 'Make dollars just sitting home. https://Namb.elletvweb.it/gotodate/go'),
(123, 'CrytopaR', 'makmachine@gmail.com', '89035194208', 'Earn additional money without efforts and skills. https://Namb.elletvweb.it/gotodate/go'),
(124, 'CrytopaR', 'brittany_hulse@yahoo.com', '89036531550', 'Make yourself rich in future using this financial robot. https://Namb.elletvweb.it/gotodate/go'),
(125, 'CrytopaR', 'luna_star@naver.com', '89038665686', 'Looking for additional money? Try out the best financial instrument. https://Namb.elletvweb.it/gotodate/go'),
(126, 'CrytopaR', 'slsa4879@brealynnvideos.com', '89032618617', 'Make your computer to be you earning instrument. https://Namb.elletvweb.it/gotodate/go'),
(127, 'CrytopaR', 'lewis0414@ehornets.org', '89035333500', 'No worries if you are fired. Work online. https://Namb.elletvweb.it/gotodate/go'),
(128, 'CrytopaR', 'ryanandlaura@telus.net', '89038866191', 'Learn how to make hundreds of backs each day. https://Namb.elletvweb.it/gotodate/go'),
(129, 'CrytopaR', 'mdkass@comcast.net', '89039996741', 'Join the society of successful people who make money here. https://Namb.frostyelk.se/gotodate/go'),
(130, 'CrytopaR', 'reiter5@msn.com', '89031372452', 'Launch the best investment instrument to start making money today. https://Namb.frostyelk.se/gotodate/go');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `user_id`, `profile_id`, `name`, `created_at`, `updated_at`) VALUES
(3, '3', '34', 'hgds', '2022-03-21 03:43:48', '2022-03-21 03:43:48'),
(4, '3', '35', 'camera', '2022-03-21 03:55:45', '2022-03-21 03:55:45'),
(5, '3', '35', 'drone', '2022-03-21 03:55:45', '2022-03-21 03:55:45'),
(6, '3', '36', 'sagas', '2022-03-21 05:11:58', '2022-03-21 05:11:58'),
(7, '1', '37', 'davfA', '2022-03-25 05:24:38', '2022-03-25 05:24:38'),
(8, '1', '38', 'grqe', '2022-03-25 06:36:28', '2022-03-25 06:36:28'),
(9, '1', '38', 'qtgqt', '2022-03-25 06:36:28', '2022-03-25 06:36:28'),
(33, '113', NULL, 'camera', '2022-07-26 16:34:10', '2022-07-26 16:34:10'),
(21, '50', '48', 's', '2022-05-03 09:39:25', '2022-05-03 09:39:25'),
(22, '51', '49', 'efd', '2022-05-03 10:55:14', '2022-05-03 10:55:14'),
(30, '2', NULL, 'tripod', '2022-07-21 10:30:09', '2022-08-18 15:49:48'),
(25, '2', NULL, 'drone', '2022-05-20 15:16:24', '2022-05-20 15:16:24'),
(31, '2', NULL, 'tripod', '2022-07-21 10:30:19', '2022-07-21 10:30:19'),
(32, '112', NULL, 'camera', '2022-07-26 14:41:53', '2022-07-26 14:41:53'),
(35, '2', NULL, 'ghfg', '2022-07-27 15:39:01', '2022-07-27 15:39:01'),
(50, '256', NULL, 'camera', '2022-08-13 11:53:54', '2022-08-13 11:53:54'),
(39, '129', NULL, 'dad', '2022-07-28 11:55:53', '2022-07-28 11:55:53'),
(40, '129', NULL, 'hnfn', '2022-07-28 12:18:51', '2022-07-28 12:18:51'),
(41, '129', NULL, 'nhf', '2022-07-28 12:18:51', '2022-07-28 12:18:51'),
(43, '129', NULL, 'gnfgn', '2022-07-28 12:19:10', '2022-07-28 12:19:10'),
(44, '129', NULL, 'ghmnfg', '2022-07-28 12:19:10', '2022-07-28 12:19:10'),
(45, '129', NULL, 'nfg', '2022-07-28 12:19:23', '2022-07-28 12:19:23'),
(48, '114', NULL, 'camera', '2022-07-28 13:10:11', '2022-07-28 13:10:11'),
(49, '114', NULL, 'lense', '2022-07-28 13:10:35', '2022-07-28 13:10:35'),
(51, '134', NULL, 'camera', '2022-08-18 13:36:54', '2022-08-18 13:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `item_profile`
--

CREATE TABLE `item_profile` (
  `profile_id` int(20) DEFAULT NULL,
  `item_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(10) DEFAULT '1',
  `reward_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coins` int(25) NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `price_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Flexible',
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) NOT NULL,
  `proposal` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobtype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Part-Time',
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `user_name`, `user_email`, `user_id`, `status`, `reward_id`, `coins`, `budget`, `requirements`, `address`, `price_type`, `start_date`, `end_date`, `location_id`, `category_id`, `proposal`, `jobtype`, `location`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(2, 'Client', 'Client', 'client@client.com', '3', 1, '1', 10, '5K-10K', 'wedding', 'south goa', 'Flexible', '2023-01-12', '2023-01-13', 2, 1, '2', 'Part-Time', 'Adilabad', '19.68 ', '78.53 ', '2023-01-12 15:06:04', '2023-01-14 11:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `job_applies`
--

CREATE TABLE `job_applies` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` int(191) NOT NULL,
  `artist_id` int(191) NOT NULL,
  `artist_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coins` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applies`
--

INSERT INTO `job_applies` (`id`, `job_id`, `artist_id`, `artist_name`, `artist_email`, `artist_price`, `artist_mobile`, `coins`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 'Artist', 'artist@artist.com', '55000', '+919766958183', '10', '2023-01-14 11:13:23', '2023-01-14 11:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `state`, `latitude`, `longitude`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Port Blair', 'Andaman and icobar Islands', '11.62', '92.76', NULL, '2022-08-17 11:57:27', NULL),
(2, 'Adilabad', 'Andhra Pradesh', '19.68 ', '78.53 ', NULL, NULL, NULL),
(3, 'Adoni', 'Andhra Pradesh', '15.63 ', '77.28 ', NULL, NULL, NULL),
(4, 'Alwal', 'Andhra Pradesh', '17.50 ', '78.54 ', NULL, NULL, NULL),
(5, 'Anakapalle', 'Andhra Pradesh', '17.69 ', '83.00 ', NULL, NULL, NULL),
(6, 'Anantapur', 'Andhra Pradesh', '14.70 ', '77.59 ', NULL, NULL, NULL),
(7, 'Bapatla', 'Andhra Pradesh', '15.91 ', '80.47 ', NULL, NULL, NULL),
(8, 'Belampalli', 'Andhra Pradesh', '19.06 ', '79.49 ', NULL, NULL, NULL),
(9, 'Bhimavaram', 'Andhra Pradesh', '16.55 ', '81.53 ', NULL, NULL, NULL),
(10, 'Bhongir', 'Andhra Pradesh', '17.52 ', '78.88 ', NULL, NULL, NULL),
(11, 'Bobbili', 'Andhra Pradesh', '18.57 ', '83.37 ', NULL, NULL, NULL),
(12, 'Bodhan', 'Andhra Pradesh', '18.66 ', '77.88 ', NULL, NULL, NULL),
(13, 'Chilakalurupet', 'Andhra Pradesh', '16.10 ', '80.16 ', NULL, NULL, NULL),
(14, 'Chinna Chawk', 'Andhra Pradesh', '14.47 ', '78.83 ', NULL, NULL, NULL),
(15, 'Chirala', 'Andhra Pradesh', '15.84 ', '80.35 ', NULL, NULL, NULL),
(16, 'Chittur', 'Andhra Pradesh', '13.22 ', '79.10 ', NULL, NULL, NULL),
(17, 'Cuddapah', 'Andhra Pradesh', '14.48 ', '78.81 ', NULL, NULL, NULL),
(18, 'Dharmavaram', 'Andhra Pradesh', '14.42 ', '77.71 ', NULL, NULL, NULL),
(19, 'Dhone', 'Andhra Pradesh', '15.42 ', '77.88 ', NULL, NULL, NULL),
(20, 'Eluru', 'Andhra Pradesh', '16.72 ', '81.11 ', NULL, NULL, NULL),
(21, 'Gaddiannaram', 'Andhra Pradesh', '17.36 ', '78.52 ', NULL, NULL, NULL),
(22, 'Gadwal', 'Andhra Pradesh', '16.23 ', '77.80 ', NULL, NULL, NULL),
(23, 'Gajuwaka', 'Andhra Pradesh', '17.70 ', '83.21 ', NULL, NULL, NULL),
(24, 'Gudivada', 'Andhra Pradesh', '16.44 ', '81.00 ', NULL, NULL, NULL),
(25, 'Gudur', 'Andhra Pradesh', '14.15 ', '79.84 ', NULL, NULL, NULL),
(26, 'Guntakal', 'Andhra Pradesh', '15.18 ', '77.37 ', NULL, NULL, NULL),
(27, 'Guntur', 'Andhra Pradesh', '16.31 ', '80.44 ', NULL, NULL, NULL),
(28, 'Hindupur', 'Andhra Pradesh', '13.83 ', '77.48 ', NULL, NULL, NULL),
(29, 'Hyderabad', 'Andhra Pradesh', '17.40 ', '78.48 ', NULL, NULL, NULL),
(30, 'Jagtial', 'Andhra Pradesh', '18.80 ', '78.91 ', NULL, NULL, NULL),
(31, 'Kadiri', 'Andhra Pradesh', '14.12 ', '78.16 ', NULL, NULL, NULL),
(32, 'Kagaznagar', 'Andhra Pradesh', '19.34 ', '79.48 ', NULL, NULL, NULL),
(33, 'Kakinada', 'Andhra Pradesh', '16.96 ', '82.24 ', NULL, NULL, NULL),
(34, 'Kallur', 'Andhra Pradesh', '15.69 ', '77.77 ', NULL, NULL, NULL),
(35, 'Kamareddi', 'Andhra Pradesh', '18.32 ', '78.35 ', NULL, NULL, NULL),
(36, 'Kapra', 'Andhra Pradesh', '17.37 ', '78.48 ', NULL, NULL, NULL),
(37, 'Karimnagar', 'Andhra Pradesh', '18.45 ', '79.13 ', NULL, NULL, NULL),
(38, 'Karnul', 'Andhra Pradesh', '15.83 ', '78.03 ', NULL, NULL, NULL),
(39, 'Kavali', 'Andhra Pradesh', '14.92 ', '79.99 ', NULL, NULL, NULL),
(40, 'Khammam', 'Andhra Pradesh', '17.25 ', '80.15 ', NULL, NULL, NULL),
(41, 'Kodar', 'Andhra Pradesh', '16.98 ', '79.97 ', NULL, NULL, NULL),
(42, 'Kondukur', 'Andhra Pradesh', '15.22 ', '79.91 ', NULL, NULL, NULL),
(43, 'Koratla', 'Andhra Pradesh', '18.82 ', '78.72 ', NULL, NULL, NULL),
(44, 'Kottagudem', 'Andhra Pradesh', '17.56 ', '80.64 ', NULL, NULL, NULL),
(45, 'Kukatpalle', 'Andhra Pradesh', '17.49 ', '78.41 ', NULL, NULL, NULL),
(46, 'Lalbahadur agar', 'Andhra Pradesh', '17.43 ', '78.50 ', NULL, NULL, NULL),
(47, 'Machilipatnam', 'Andhra Pradesh', '16.19 ', '81.14 ', NULL, NULL, NULL),
(48, 'Mahbubnagar', 'Andhra Pradesh', '16.74 ', '77.98 ', NULL, NULL, NULL),
(49, 'Malkajgiri', 'Andhra Pradesh', '17.55 ', '78.59 ', NULL, NULL, NULL),
(50, 'Mancheral', 'Andhra Pradesh', '18.88 ', '79.45 ', NULL, NULL, NULL),
(51, 'Mandamarri', 'Andhra Pradesh', '18.97 ', '79.47 ', NULL, NULL, NULL),
(52, 'Mangalagiri', 'Andhra Pradesh', '16.44 ', '80.56 ', NULL, NULL, NULL),
(53, 'Markapur', 'Andhra Pradesh', '15.73 ', '79.28 ', NULL, NULL, NULL),
(54, 'Miryalaguda', 'Andhra Pradesh', '16.87 ', '79.57 ', NULL, NULL, NULL),
(55, 'Nalgonda', 'Andhra Pradesh', '17.06 ', '79.26 ', NULL, NULL, NULL),
(56, 'Nandyal', 'Andhra Pradesh', '15.49 ', '78.48 ', NULL, NULL, NULL),
(57, 'Narasapur', 'Andhra Pradesh', '16.45 ', '81.70 ', NULL, NULL, NULL),
(58, 'Narasaraopet', 'Andhra Pradesh', '16.24 ', '80.04 ', NULL, NULL, NULL),
(59, 'Nellur', 'Andhra Pradesh', '14.46 ', '79.98 ', NULL, NULL, NULL),
(60, 'Nirmal', 'Andhra Pradesh', '19.12 ', '78.35 ', NULL, NULL, NULL),
(61, 'Nizamabad', 'Andhra Pradesh', '18.68 ', '78.10 ', NULL, NULL, NULL),
(62, 'Nuzvid', 'Andhra Pradesh', '16.78 ', '80.85 ', NULL, NULL, NULL),
(63, 'Ongole', 'Andhra Pradesh', '15.50 ', '80.05 ', NULL, NULL, NULL),
(64, 'Palakollu', 'Andhra Pradesh', '16.52 ', '81.75 ', NULL, NULL, NULL),
(65, 'Palasa', 'Andhra Pradesh', '18.77 ', '84.42 ', NULL, NULL, NULL),
(66, 'Palwancha', 'Andhra Pradesh', '17.60 ', '80.68 ', NULL, NULL, NULL),
(67, 'Patancheru', 'Andhra Pradesh', '17.53 ', '78.27 ', NULL, NULL, NULL),
(68, 'Piduguralla', 'Andhra Pradesh', '16.48 ', '79.90 ', NULL, NULL, NULL),
(69, 'Ponnur', 'Andhra Pradesh', '16.07 ', '80.56 ', NULL, NULL, NULL),
(70, 'Proddatur', 'Andhra Pradesh', '14.73 ', '78.55 ', NULL, NULL, NULL),
(71, 'Qutub NULLapur', 'Andhra Pradesh', '17.43 ', '78.47 ', NULL, NULL, NULL),
(72, 'Rajamahendri', 'Andhra Pradesh', '17.02 ', '81.79 ', NULL, NULL, NULL),
(73, 'Rajampet', 'Andhra Pradesh', '14.18 ', '79.17 ', NULL, NULL, NULL),
(74, 'Rajendranagar', 'Andhra Pradesh', '17.29 ', '78.39 ', NULL, NULL, NULL),
(75, 'Ramachandrapuram', 'Andhra Pradesh', '17.56 ', '78.04 ', NULL, NULL, NULL),
(76, 'Ramagundam', 'Andhra Pradesh', '18.80 ', '79.45 ', NULL, NULL, NULL),
(77, 'Rayachoti', 'Andhra Pradesh', '14.05 ', '78.75 ', NULL, NULL, NULL),
(78, 'Rayadrug', 'Andhra Pradesh', '14.70 ', '76.87 ', NULL, NULL, NULL),
(79, 'Samalkot', 'Andhra Pradesh', '17.06 ', '82.18 ', NULL, NULL, NULL),
(80, 'Sangareddi', 'Andhra Pradesh', '17.63 ', '78.08 ', NULL, NULL, NULL),
(81, 'Sattenapalle', 'Andhra Pradesh', '16.40 ', '80.18 ', NULL, NULL, NULL),
(82, 'Serilungampalle', 'Andhra Pradesh', '17.48 ', '78.33 ', NULL, NULL, NULL),
(83, 'Siddipet', 'Andhra Pradesh', '18.11 ', '78.84 ', NULL, NULL, NULL),
(84, 'Sikandarabad', 'Andhra Pradesh', '17.47 ', '78.52 ', NULL, NULL, NULL),
(85, 'Sirsilla', 'Andhra Pradesh', '18.40 ', '78.81 ', NULL, NULL, NULL),
(86, 'Srikakulam', 'Andhra Pradesh', '18.30 ', '83.90 ', NULL, NULL, NULL),
(87, 'Srikalahasti', 'Andhra Pradesh', '13.76 ', '79.70 ', NULL, NULL, NULL),
(88, 'Suriapet', 'Andhra Pradesh', '17.15 ', '79.62 ', NULL, NULL, NULL),
(89, 'Tadepalle', 'Andhra Pradesh', '16.48 ', '80.60 ', NULL, NULL, NULL),
(90, 'Tadepallegudem', 'Andhra Pradesh', '16.82 ', '81.52 ', NULL, NULL, NULL),
(91, 'Tadpatri', 'Andhra Pradesh', '14.91 ', '78.00 ', NULL, NULL, NULL),
(92, 'Tandur', 'Andhra Pradesh', '17.25 ', '77.58 ', NULL, NULL, NULL),
(93, 'Tanuku', 'Andhra Pradesh', '16.75 ', '81.69 ', NULL, NULL, NULL),
(94, 'Tenali', 'Andhra Pradesh', '16.24 ', '80.65 ', NULL, NULL, NULL),
(95, 'Tirupati', 'Andhra Pradesh', '13.63 ', '79.41 ', NULL, NULL, NULL),
(96, 'Tuni', 'Andhra Pradesh', '17.35 ', '82.55 ', NULL, NULL, NULL),
(97, 'Uppal Kalan', 'Andhra Pradesh', '17.38 ', '78.55 ', NULL, NULL, NULL),
(98, 'Vijayawada', 'Andhra Pradesh', '16.52 ', '80.63 ', NULL, NULL, NULL),
(99, 'Vinukonda', 'Andhra Pradesh', '16.05 ', '79.75 ', NULL, NULL, NULL),
(100, 'Visakhapatnam', 'Andhra Pradesh', '17.73 ', '83.30 ', NULL, NULL, NULL),
(101, 'Vizianagaram', 'Andhra Pradesh', '18.12 ', '83.40 ', NULL, NULL, NULL),
(102, 'Vuyyuru', 'Andhra Pradesh', '16.37 ', '80.85 ', NULL, NULL, NULL),
(103, 'Wanparti', 'Andhra Pradesh', '16.37 ', '78.07 ', NULL, NULL, NULL),
(104, 'Warangal', 'Andhra Pradesh', '18.01 ', '79.58 ', NULL, NULL, NULL),
(105, 'Yemmiganur', 'Andhra Pradesh', '15.73 ', '77.48 ', NULL, NULL, NULL),
(106, 'Itanagar', 'Arunachal Pradesh', '27.14 ', '93.61 ', NULL, NULL, NULL),
(107, 'Barpeta', 'Assam', '26.32 ', '91.00 ', NULL, NULL, NULL),
(108, 'Bongaigaon', 'Assam', '26.48 ', '90.54 ', NULL, NULL, NULL),
(109, 'Dhuburi', 'Assam', '26.03 ', '89.97 ', NULL, NULL, NULL),
(110, 'Dibrugarh', 'Assam', '27.49 ', '94.91 ', NULL, NULL, NULL),
(111, 'Diphu', 'Assam', '25.84 ', '93.43 ', NULL, NULL, NULL),
(112, 'Guwahati', 'Assam', '26.19 ', '91.75 ', NULL, NULL, NULL),
(113, 'Jorhat', 'Assam', '26.76 ', '94.20 ', NULL, NULL, NULL),
(114, 'Karimganj', 'Assam', '24.85 ', '92.36 ', NULL, NULL, NULL),
(115, 'Lakhimpur', 'Assam', '27.24 ', '94.10 ', NULL, NULL, NULL),
(116, 'Lanka', 'Assam', '25.93 ', '92.95 ', NULL, NULL, NULL),
(117, 'Nagaon', 'Assam', '26.35 ', '92.68 ', NULL, NULL, NULL),
(118, 'Sibsagar', 'Assam', '26.99 ', '94.63 ', NULL, NULL, NULL),
(119, 'Silchar', 'Assam', '24.83 ', '92.77 ', NULL, NULL, NULL),
(120, 'Tezpur', 'Assam', '26.63 ', '92.79 ', NULL, NULL, NULL),
(121, 'Tinsukia', 'Assam', '27.50 ', '95.36 ', NULL, NULL, NULL),
(122, 'Alipur Duar', 'West Bengal', '26.50 ', '89.53 ', NULL, NULL, NULL),
(123, 'Arambagh', 'West Bengal', '22.88 ', '87.78 ', NULL, NULL, NULL),
(124, 'Asansol', 'West Bengal', '23.69 ', '86.98 ', NULL, NULL, NULL),
(125, 'Ashoknagar Kalyangarh', 'West Bengal', '22.84 ', '88.63 ', NULL, NULL, NULL),
(126, 'Baharampur', 'West Bengal', '24.10 ', '88.24 ', NULL, NULL, NULL),
(127, 'Baidyabati', 'West Bengal', '22.79 ', '88.33 ', NULL, NULL, NULL),
(128, 'Baj Baj', 'West Bengal', '22.48 ', '88.17 ', NULL, NULL, NULL),
(129, 'Bally', 'West Bengal', '22.65 ', '88.35 ', NULL, NULL, NULL),
(130, 'Bally Cantonment', 'West Bengal', '22.65 ', '88.36 ', NULL, NULL, NULL),
(131, 'Balurghat', 'West Bengal', '25.23 ', '88.77 ', NULL, NULL, NULL),
(132, 'Bangaon', 'West Bengal', '23.05 ', '88.83 ', NULL, NULL, NULL),
(133, 'Bankra', 'West Bengal', '22.58 ', '88.31 ', NULL, NULL, NULL),
(134, 'Bankura', 'West Bengal', '23.24 ', '87.07 ', NULL, NULL, NULL),
(135, 'Bansbaria', 'West Bengal', '22.95 ', '88.40 ', NULL, NULL, NULL),
(136, 'Baranagar', 'West Bengal', '22.64 ', '88.37 ', NULL, NULL, NULL),
(137, 'Barddhaman', 'West Bengal', '23.24 ', '87.86 ', NULL, NULL, NULL),
(138, 'Basirhat', 'West Bengal', '22.66 ', '88.86 ', NULL, NULL, NULL),
(139, 'Bhadreswar', 'West Bengal', '22.84 ', '88.35 ', NULL, NULL, NULL),
(140, 'Bhatpara', 'West Bengal', '22.89 ', '88.42 ', NULL, NULL, NULL),
(141, 'Bidhannagar', 'West Bengal', '22.57 ', '88.42 ', NULL, NULL, NULL),
(142, 'Binnaguri', 'West Bengal', '26.74 ', '89.037 ', NULL, NULL, NULL),
(143, 'Bishnupur', 'West Bengal', '23.08 ', '87.33 ', NULL, NULL, NULL),
(144, 'Bolpur', 'West Bengal', '23.67 ', '87.70 ', NULL, NULL, NULL),
(145, 'Calcutta', 'West Bengal', '22.57 ', '88.36 ', NULL, NULL, NULL),
(146, 'Chakdaha', 'West Bengal', '22.48 ', '88.35 ', NULL, NULL, NULL),
(147, 'Champdani', 'West Bengal', '22.81 ', '88.34 ', NULL, NULL, NULL),
(148, 'Chandannagar', 'West Bengal', '22.89 ', '88.37 ', NULL, NULL, NULL),
(149, 'Contai', 'West Bengal', '21.79 ', '87.75 ', NULL, NULL, NULL),
(150, 'Dabgram', 'West Bengal', '26.69', '88.44', NULL, NULL, NULL),
(151, 'Darjiling', 'West Bengal', '27.05 ', '88.26 ', NULL, NULL, NULL),
(152, 'Dhulian', 'West Bengal', '24.68 ', '87.97 ', NULL, NULL, NULL),
(153, 'Dinhata', 'West Bengal', '26.13 ', '89.47 ', NULL, NULL, NULL),
(154, 'Dum Dum', 'West Bengal', '22.63 ', '88.42 ', NULL, NULL, NULL),
(155, 'Durgapur', 'West Bengal', '23.50 ', '87.31 ', NULL, NULL, NULL),
(156, 'Gangarampur', 'West Bengal', '25.40 ', '88.52 ', NULL, NULL, NULL),
(157, 'Garulia', 'West Bengal', '22.83 ', '88.37 ', NULL, NULL, NULL),
(158, 'Gayespur', 'West Bengal', '22.98 ', '88.51 ', NULL, NULL, NULL),
(159, 'Ghatal', 'West Bengal', '22.67 ', '87.72 ', NULL, NULL, NULL),
(160, 'Gopalpur', 'West Bengal', '23.12', '88.54', NULL, NULL, NULL),
(161, 'Habra', 'West Bengal', '22.84 ', '88.62 ', NULL, NULL, NULL),
(162, 'Halisahar', 'West Bengal', '22.95 ', '88.42 ', NULL, NULL, NULL),
(163, 'Haora', 'West Bengal', '22.58 ', '88.33 ', NULL, NULL, NULL),
(164, 'HugliChunchura', 'West Bengal', '22.91 ', '88.40 ', NULL, NULL, NULL),
(165, 'Ingraj Bazar', 'West Bengal', '25.01 ', '88.14 ', NULL, NULL, NULL),
(166, 'Islampur', 'West Bengal', '26.27 ', '88.20 ', NULL, NULL, NULL),
(167, 'Jalpaiguri', 'West Bengal', '26.53 ', '88.71 ', NULL, NULL, NULL),
(168, 'Jamuria', 'West Bengal', '23.70 ', '87.08 ', NULL, NULL, NULL),
(169, 'Jangipur', 'West Bengal', '24.47 ', '88.07 ', NULL, NULL, NULL),
(170, 'Jhargram', 'West Bengal', '22.45 ', '86.98 ', NULL, NULL, NULL),
(171, 'Kaliyaganj', 'West Bengal', '25.63 ', '88.32 ', NULL, NULL, NULL),
(172, 'Kalna', 'West Bengal', '23.22 ', '88.37 ', NULL, NULL, NULL),
(173, 'Kalyani', 'West Bengal', '22.98 ', '88.48 ', NULL, NULL, NULL),
(174, 'Kamarhati', 'West Bengal', '22.67 ', '88.37 ', NULL, NULL, NULL),
(175, 'Kanchrapara', 'West Bengal', '22.95 ', '88.45 ', NULL, NULL, NULL),
(176, 'Kandi', 'West Bengal', '23.95 ', '88.03 ', NULL, NULL, NULL),
(177, 'Karsiyang', 'West Bengal', '26.88 ', '88.28 ', NULL, NULL, NULL),
(178, 'Katwa', 'West Bengal', '23.65 ', '88.13 ', NULL, NULL, NULL),
(179, 'Kharagpur', 'West Bengal', '22.34 ', '87.31 ', NULL, NULL, NULL),
(180, 'Kharagpur Railway Settlement', 'West Bengal', '22.34 ', '87.26 ', NULL, NULL, NULL),
(181, 'Khardaha', 'West Bengal', '22.73 ', '88.38 ', NULL, NULL, NULL),
(182, 'Kharia', 'West Bengal', '26.49', '88.68', NULL, NULL, NULL),
(183, 'Koch Bihar', 'West Bengal', '26.33 ', '89.46 ', NULL, NULL, NULL),
(184, 'Konnagar', 'West Bengal', '22.70 ', '88.36 ', NULL, NULL, NULL),
(185, 'Krishnanagar', 'West Bengal', '23.41 ', '88.51 ', NULL, NULL, NULL),
(186, 'Kulti', 'West Bengal', '23.72 ', '86.89 ', NULL, NULL, NULL),
(187, 'Madhyamgram', 'West Bengal', '22.70 ', '88.45 ', NULL, NULL, NULL),
(188, 'Maheshtala', 'West Bengal', '22.51 ', '88.23 ', NULL, NULL, NULL),
(189, 'Memari', 'West Bengal', '23.20 ', '88.12 ', NULL, NULL, NULL),
(190, 'Midnapur', 'West Bengal', '22.33 ', '87.15 ', NULL, NULL, NULL),
(191, 'Naihati', 'West Bengal', '22.91 ', '88.43 ', NULL, NULL, NULL),
(192, 'Navadwip', 'West Bengal', '23.42 ', '88.37 ', NULL, NULL, NULL),
(193, 'Ni Barakpur', 'West Bengal', '22.77 ', '88.36 ', NULL, NULL, NULL),
(194, 'North Barakpur', 'West Bengal', '22.78 ', '88.37 ', NULL, NULL, NULL),
(195, 'North Dum Dum', 'West Bengal', '22.64 ', '88.41 ', NULL, NULL, NULL),
(196, 'Old Maldah', 'West Bengal', '25.05', '88.13', NULL, NULL, NULL),
(197, 'Panihati', 'West Bengal', '22.69 ', '88.37 ', NULL, NULL, NULL),
(198, 'Phulia', 'West Bengal', '23.24 ', '88.50 ', NULL, NULL, NULL),
(199, 'Pujali', 'West Bengal', '22.47 ', '88.15 ', NULL, NULL, NULL),
(200, 'Puruliya', 'West Bengal', '23.34 ', '86.36 ', NULL, NULL, NULL),
(201, 'Raiganj', 'West Bengal', '25.62 ', '88.12 ', NULL, NULL, NULL),
(202, 'Rajpur', 'West Bengal', '22.44 ', '88.44 ', NULL, NULL, NULL),
(203, 'Rampur Hat', 'West Bengal', '24.17 ', '87.78 ', NULL, NULL, NULL),
(204, 'Ranaghat', 'West Bengal', '23.19 ', '88.58 ', NULL, NULL, NULL),
(205, 'Raniganj', 'West Bengal', '23.62 ', '87.11 ', NULL, NULL, NULL),
(206, 'Rishra', 'West Bengal', '22.71 ', '88.36 ', NULL, NULL, NULL),
(207, 'Shantipur', 'West Bengal', '23.26 ', '88.44 ', NULL, NULL, NULL),
(208, 'Shiliguri', 'West Bengal', '26.73 ', '88.42 ', NULL, NULL, NULL),
(209, 'Shrirampur', 'West Bengal', '22.74 ', '88.35 ', NULL, NULL, NULL),
(210, 'Siuri', 'West Bengal', '23.91 ', '87.53 ', NULL, NULL, NULL),
(211, 'South Dum Dum', 'West Bengal', '22.61 ', '88.41 ', NULL, NULL, NULL),
(212, 'Titagarh', 'West Bengal', '22.74 ', '88.38 ', NULL, NULL, NULL),
(213, 'Ulubaria', 'West Bengal', '22.47 ', '88.11 ', NULL, NULL, NULL),
(214, 'UttarparaKotrung', 'West Bengal', '22.66 ', '88.35 ', NULL, NULL, NULL),
(215, 'Araria', 'Bihar', '26.15 ', '87.52 ', NULL, NULL, NULL),
(216, 'Arrah', 'Bihar', '25.56 ', '84.66 ', NULL, NULL, NULL),
(217, 'Aurangabad', 'Bihar', '24.75 ', '84.37 ', NULL, NULL, NULL),
(218, 'Bagaha', 'Bihar', '27.10 ', '84.09 ', NULL, NULL, NULL),
(219, 'Begusarai', 'Bihar', '25.42 ', '86.12 ', NULL, NULL, NULL),
(220, 'Bettiah', 'Bihar', '26.81 ', '84.50 ', NULL, NULL, NULL),
(221, 'Bhabua', 'Bihar', '25.05 ', '83.62 ', NULL, NULL, NULL),
(222, 'Bhagalpur', 'Bihar', '25.26 ', '86.98 ', NULL, NULL, NULL),
(223, 'Bihar', 'Bihar', '25.21 ', '85.52 ', NULL, NULL, NULL),
(224, 'Buxar', 'Bihar', '25.58 ', '83.98 ', NULL, NULL, NULL),
(225, 'Chhapra', 'Bihar', '25.78 ', '84.72 ', NULL, NULL, NULL),
(226, 'Darbhanga', 'Bihar', '26.16 ', '85.88 ', NULL, NULL, NULL),
(227, 'Dehri', 'Bihar', '24.91 ', '84.18 ', NULL, NULL, NULL),
(228, 'DighaMainpura', 'Bihar', '25.11', '85.31', NULL, NULL, NULL),
(229, 'Dinapur', 'Bihar', '25.64 ', '85.04 ', NULL, NULL, NULL),
(230, 'Dumraon', 'Bihar', '25.55 ', '84.15 ', NULL, NULL, NULL),
(231, 'Gaya', 'Bihar', '24.81 ', '85.00 ', NULL, NULL, NULL),
(232, 'Gopalganj', 'Bihar', '26.47 ', '84.43 ', NULL, NULL, NULL),
(233, 'Goura', 'Bihar', '25.64', '84.46', NULL, NULL, NULL),
(234, 'Hajipur', 'Bihar', '25.69', '85.20', NULL, NULL, NULL),
(235, 'Jahanabad', 'Bihar', '25.22 ', '84.98 ', NULL, NULL, NULL),
(236, 'Jamalpur', 'Bihar', '25.32 ', '86.48 ', NULL, NULL, NULL),
(237, 'Jamui', 'Bihar', '24.92 ', '86.22 ', NULL, NULL, NULL),
(238, 'Katihar', 'Bihar', '25.55 ', '87.57 ', NULL, NULL, NULL),
(239, 'Khagaria', 'Bihar', '25.50 ', '86.48 ', NULL, NULL, NULL),
(240, 'Khagaul', 'Bihar', '25.58 ', '85.05 ', NULL, NULL, NULL),
(241, 'Kishanganj', 'Bihar', '26.11 ', '87.95 ', NULL, NULL, NULL),
(242, 'Lakhisarai', 'Bihar', '25.18 ', '86.09 ', NULL, NULL, NULL),
(243, 'Madhipura', 'Bihar', '25.92 ', '86.78 ', NULL, NULL, NULL),
(244, 'Madhubani', 'Bihar', '26.37 ', '86.06 ', NULL, NULL, NULL),
(245, 'Masaurhi', 'Bihar', '25.35 ', '85.03 ', NULL, NULL, NULL),
(246, 'Mokama', 'Bihar', '25.40 ', '85.92 ', NULL, NULL, NULL),
(247, 'Motihari', 'Bihar', '26.66 ', '84.91 ', NULL, NULL, NULL),
(248, 'Munger', 'Bihar', '25.39 ', '86.47 ', NULL, NULL, NULL),
(249, 'Muzaffarpur', 'Bihar', '26.13 ', '85.38 ', NULL, NULL, NULL),
(250, 'Nawada', 'Bihar', '24.88 ', '85.54 ', NULL, NULL, NULL),
(251, 'Patna', 'Bihar', '25.62 ', '85.13 ', NULL, NULL, NULL),
(252, 'Phulwari', 'Bihar', '25.60 ', '85.13 ', NULL, NULL, NULL),
(253, 'Purnia', 'Bihar', '25.78 ', '87.47 ', NULL, NULL, NULL),
(254, 'Raxaul', 'Bihar', '26.98 ', '84.85 ', NULL, NULL, NULL),
(255, 'Saharsa', 'Bihar', '25.88 ', '86.59 ', NULL, NULL, NULL),
(256, 'Samastipur', 'Bihar', '25.85 ', '85.78 ', NULL, NULL, NULL),
(257, 'Sasaram', 'Bihar', '24.96 ', '84.01 ', NULL, NULL, NULL),
(258, 'Sitamarhi', 'Bihar', '26.61 ', '85.48 ', NULL, NULL, NULL),
(259, 'Siwan', 'Bihar', '26.23 ', '84.35 ', NULL, NULL, NULL),
(260, 'Supaul', 'Bihar', '26.12 ', '86.60 ', NULL, NULL, NULL),
(261, 'Chandigarh', 'Chandigarh', '30.75 ', '76.78 ', NULL, NULL, NULL),
(262, 'Ambikapur', 'Chhattisgarh', '23.13 ', '83.20 ', NULL, NULL, NULL),
(263, 'Bhilai', 'Chhattisgarh', '21.21 ', '81.38 ', NULL, NULL, NULL),
(264, 'Bilaspur', 'Chhattisgarh', '22.09 ', '82.15 ', NULL, NULL, NULL),
(265, 'Charoda', 'Chhattisgarh', '21.23 ', '81.50 ', NULL, NULL, NULL),
(266, 'Chirmiri', 'Chhattisgarh', '23.21 ', '82.41 ', NULL, NULL, NULL),
(267, 'Dhamtari', 'Chhattisgarh', '20.71 ', '81.55 ', NULL, NULL, NULL),
(268, 'Durg', 'Chhattisgarh', '21.20 ', '81.28 ', NULL, NULL, NULL),
(269, 'Jagdalpur', 'Chhattisgarh', '19.09 ', '82.03 ', NULL, NULL, NULL),
(270, 'Korba', 'Chhattisgarh', '22.35 ', '82.69 ', NULL, NULL, NULL),
(271, 'Raigarh', 'Chhattisgarh', '21.90 ', '83.39 ', NULL, NULL, NULL),
(272, 'Raipur', 'Chhattisgarh', '21.24 ', '81.63 ', NULL, NULL, NULL),
(273, 'Rajnandgaon', 'Chhattisgarh', '21.10 ', '81.04 ', NULL, NULL, NULL),
(274, 'Bhalswa Jahangirpur', 'Delhi', '28.74 ', '77.17 ', NULL, NULL, NULL),
(275, 'Burari', 'Delhi', '28.75', '77.19', NULL, NULL, NULL),
(276, 'Chilla Saroda Bangar', 'Delhi', '28.59', '77.30', NULL, NULL, NULL),
(277, 'Dallo Pura', 'Delhi', '28.60', '77.31', NULL, NULL, NULL),
(278, 'Delhi', 'Delhi', '28.67 ', '77.21 ', NULL, NULL, NULL),
(279, 'Deoli', 'Delhi', '28.49 ', '77.22 ', NULL, NULL, NULL),
(280, 'Dilli Cantonment', 'Delhi', '28.57 ', '77.16 ', NULL, NULL, NULL),
(281, 'Gharoli', 'Delhi', '28.61', '77.33', NULL, NULL, NULL),
(282, 'Gokalpur', 'Delhi', '28.71 ', '77.28 ', NULL, NULL, NULL),
(283, 'Hastsal', 'Delhi', '28.63', '77.04', NULL, NULL, NULL),
(284, 'Jaffrabad', 'Delhi', '28.68', '77.27', NULL, NULL, NULL),
(285, 'Karawal agar', 'Delhi', '28.73', '77.27', NULL, NULL, NULL),
(286, 'Khajuri Khas', 'Delhi', '28.71', '77.26', NULL, NULL, NULL),
(287, 'Kirari Suleman agar', 'Delhi', '28.69', '77.06', NULL, NULL, NULL),
(288, 'Mandoli', 'Delhi', '28.70', '77.30', NULL, NULL, NULL),
(289, 'Mithe Pur', 'Delhi', '28.49', '77.32', NULL, NULL, NULL),
(290, 'Molarband', 'Delhi', '28.50', '77.31', NULL, NULL, NULL),
(291, 'Mundka', 'Delhi', '28.68', '77.03', NULL, NULL, NULL),
(292, 'Mustafabad', 'Delhi', '30.19', '77.14', NULL, NULL, NULL),
(293, 'Nangloi Jat', 'Delhi', '28.68 ', '77.07 ', NULL, NULL, NULL),
(294, 'Ni Dilli', 'Delhi', '28.60 ', '77.22 ', NULL, NULL, NULL),
(295, 'Pul Pehlad', 'Delhi', '28.49', '77.29', NULL, NULL, NULL),
(296, 'Puth Kalan', 'Delhi', '28.71', '77.07', NULL, NULL, NULL),
(297, 'Roshan Pura', 'Delhi', '28.60 ', '76.99 ', NULL, NULL, NULL),
(298, 'Sadat Pur Gujran', 'Delhi', '28.72', '77.26', NULL, NULL, NULL),
(299, 'Sultanpur Majra', 'Delhi', '28.76 ', '77.06 ', NULL, NULL, NULL),
(300, 'Tajpul', 'Delhi', '28.49', '77.30', NULL, NULL, NULL),
(301, 'Tigri', 'Delhi', '28.50 ', '77.22 ', NULL, NULL, NULL),
(302, 'Ziauddin Pur', 'Delhi', '28.70', '77.26', NULL, NULL, NULL),
(303, 'Madgaon', 'Goa', '15.28 ', '73.94 ', NULL, NULL, NULL),
(304, 'Mormugao', 'Goa', '15.42 ', '73.78 ', NULL, NULL, NULL),
(305, 'Panaji', 'Goa', '15.50 ', '73.81 ', NULL, NULL, NULL),
(306, 'Ahmadabad', 'Gujarat', '23.03 ', '72.58 ', NULL, NULL, NULL),
(307, 'Amreli', 'Gujarat', '21.61 ', '71.22 ', NULL, NULL, NULL),
(308, 'Anand', 'Gujarat', '22.56 ', '72.95 ', NULL, NULL, NULL),
(309, 'Anjar', 'Gujarat', '23.12 ', '70.02 ', NULL, NULL, NULL),
(310, 'Bardoli', 'Gujarat', '21.12 ', '73.12 ', NULL, NULL, NULL),
(311, 'Bharuch', 'Gujarat', '21.71 ', '72.97 ', NULL, NULL, NULL),
(312, 'Bhavnagar', 'Gujarat', '21.79 ', '72.13 ', NULL, NULL, NULL),
(313, 'Bhuj', 'Gujarat', '23.26 ', '69.66 ', NULL, NULL, NULL),
(314, 'Borsad', 'Gujarat', '22.42 ', '72.90 ', NULL, NULL, NULL),
(315, 'Botad', 'Gujarat', '22.18 ', '71.66 ', NULL, NULL, NULL),
(316, 'Chandkheda', 'Gujarat', '23.15 ', '72.61 ', NULL, NULL, NULL),
(317, 'Chandlodiya', 'Gujarat', '23.10 ', '72.56 ', NULL, NULL, NULL),
(318, 'Dabhoi', 'Gujarat', '22.13 ', '73.41 ', NULL, NULL, NULL),
(319, 'Dahod', 'Gujarat', '22.84 ', '74.25 ', NULL, NULL, NULL),
(320, 'Dholka', 'Gujarat', '22.74 ', '72.44 ', NULL, NULL, NULL),
(321, 'Dhoraji', 'Gujarat', '21.74 ', '70.44 ', NULL, NULL, NULL),
(322, 'Dhrangadhra', 'Gujarat', '23.00 ', '71.46 ', NULL, NULL, NULL),
(323, 'Disa', 'Gujarat', '24.26 ', '72.18 ', NULL, NULL, NULL),
(324, 'Gandhidham', 'Gujarat', '23.07 ', '70.13 ', NULL, NULL, NULL),
(325, 'Gandhinagar', 'Gujarat', '23.30 ', '72.63 ', NULL, NULL, NULL),
(326, 'Ghatlodiya', 'Gujarat', '23.05 ', '72.55 ', NULL, NULL, NULL),
(327, 'Godhra', 'Gujarat', '22.77 ', '73.60 ', NULL, NULL, NULL),
(328, 'Gondal', 'Gujarat', '21.97 ', '70.80 ', NULL, NULL, NULL),
(329, 'Himatnagar', 'Gujarat', '23.60 ', '72.96 ', NULL, NULL, NULL),
(330, 'Jamnagar', 'Gujarat', '22.47 ', '70.07 ', NULL, NULL, NULL),
(331, 'Jamnagar', 'Gujarat', '22.47', '70.05', NULL, NULL, NULL),
(332, 'Jetpur', 'Gujarat', '21.75 ', '70.61 ', NULL, NULL, NULL),
(333, 'Junagadh', 'Gujarat', '21.52 ', '70.45 ', NULL, NULL, NULL),
(334, 'Kalol', 'Gujarat', '23.25 ', '72.49 ', NULL, NULL, NULL),
(335, 'Keshod', 'Gujarat', '21.31 ', '70.23 ', NULL, NULL, NULL),
(336, 'Khambhat', 'Gujarat', '22.32 ', '72.61 ', NULL, NULL, NULL),
(337, 'Kundla', 'Gujarat', '21.35 ', '71.30 ', NULL, NULL, NULL),
(338, 'Mahuva', 'Gujarat', '21.10 ', '71.75 ', NULL, NULL, NULL),
(339, 'Mangrol', 'Gujarat', '21.12 ', '70.12 ', NULL, NULL, NULL),
(340, 'Modasa', 'Gujarat', '23.47 ', '73.30 ', NULL, NULL, NULL),
(341, 'Morvi', 'Gujarat', '22.82 ', '70.83 ', NULL, NULL, NULL),
(342, 'Nadiad', 'Gujarat', '22.70 ', '72.85 ', NULL, NULL, NULL),
(343, 'Navagam Ghed', 'Gujarat', '22.48', '70.07', NULL, NULL, NULL),
(344, 'Navsari', 'Gujarat', '20.96 ', '72.92 ', NULL, NULL, NULL),
(345, 'Palitana', 'Gujarat', '21.52 ', '71.83 ', NULL, NULL, NULL),
(346, 'Patan', 'Gujarat', '23.86 ', '72.11 ', NULL, NULL, NULL),
(347, 'Porbandar', 'Gujarat', '21.65 ', '69.60 ', NULL, NULL, NULL),
(348, 'Puna', 'Gujarat', '20.93', '73.23', NULL, NULL, NULL),
(349, 'Rajkot', 'Gujarat', '22.31 ', '70.79 ', NULL, NULL, NULL),
(350, 'Ramod', 'Gujarat', '21.96', '70.92', NULL, NULL, NULL),
(351, 'Ranip', 'Gujarat', '23.03 ', '72.54 ', NULL, NULL, NULL),
(352, 'Siddhapur', 'Gujarat', '23.92 ', '72.37 ', NULL, NULL, NULL),
(353, 'Sihor', 'Gujarat', '21.70 ', '71.97 ', NULL, NULL, NULL),
(354, 'Surat', 'Gujarat', '21.20 ', '72.82 ', NULL, NULL, NULL),
(355, 'Surendranagar', 'Gujarat', '22.71 ', '71.67 ', NULL, NULL, NULL),
(356, 'Thaltej', 'Gujarat', '23.05', '72.49', NULL, NULL, NULL),
(357, 'Una', 'Gujarat', '20.82 ', '71.03 ', NULL, NULL, NULL),
(358, 'Unjha', 'Gujarat', '23.81 ', '72.38 ', NULL, NULL, NULL),
(359, 'Upleta', 'Gujarat', '21.75 ', '70.27 ', NULL, NULL, NULL),
(360, 'Vadodara', 'Gujarat', '22.31 ', '73.18 ', NULL, NULL, NULL),
(361, 'Valsad', 'Gujarat', '20.62 ', '72.92 ', NULL, NULL, NULL),
(362, 'Vapi', 'Gujarat', '20.37 ', '72.90 ', NULL, NULL, NULL),
(363, 'Vastral', 'Gujarat', '22.99', '72.66', NULL, NULL, NULL),
(364, 'Vejalpur', 'Gujarat', '23.00', '72.51', NULL, NULL, NULL),
(365, 'Veraval', 'Gujarat', '20.92 ', '70.34 ', NULL, NULL, NULL),
(366, 'Vijalpor', 'Gujarat', '20.94', '72.91', NULL, NULL, NULL),
(367, 'Visnagar', 'Gujarat', '23.71 ', '72.54 ', NULL, NULL, NULL),
(368, 'Wadhwan', 'Gujarat', '22.73 ', '71.72 ', NULL, NULL, NULL),
(369, 'Ambala', 'Haryana', '30.38 ', '76.77 ', NULL, NULL, NULL),
(370, 'Ambala Cantonment', 'Haryana', '30.39 ', '76.86 ', NULL, NULL, NULL),
(371, 'Ambala Sadar', 'Haryana', '30.35 ', '76.84 ', NULL, NULL, NULL),
(372, 'Bahadurgarh', 'Haryana', '28.69 ', '76.92 ', NULL, NULL, NULL),
(373, 'Bhiwani', 'Haryana', '28.81 ', '76.12 ', NULL, NULL, NULL),
(374, 'Charkhi Dadri', 'Haryana', '28.60 ', '76.27 ', NULL, NULL, NULL),
(375, 'Dabwali', 'Haryana', '29.95 ', '74.73 ', NULL, NULL, NULL),
(376, 'Faridabad', 'Haryana', '28.38 ', '77.30 ', NULL, NULL, NULL),
(377, 'Gohana', 'Haryana', '29.13 ', '76.70 ', NULL, NULL, NULL),
(378, 'Hisar', 'Haryana', '29.17 ', '75.72 ', NULL, NULL, NULL),
(379, 'Jagadhri', 'Haryana', '30.18 ', '77.29 ', NULL, NULL, NULL),
(380, 'Jind', 'Haryana', '29.31 ', '76.30 ', NULL, NULL, NULL),
(381, 'Kaithal', 'Haryana', '29.81 ', '76.40 ', NULL, NULL, NULL),
(382, 'Karnal', 'Haryana', '29.69 ', '76.97 ', NULL, NULL, NULL),
(383, 'Narnaul', 'Haryana', '28.04 ', '76.10 ', NULL, NULL, NULL),
(384, 'Narwana', 'Haryana', '29.62 ', '76.12 ', NULL, NULL, NULL),
(385, 'Palwal', 'Haryana', '28.15 ', '77.32 ', NULL, NULL, NULL),
(386, 'Panchkula', 'Haryana', '30.70 ', '76.88 ', NULL, NULL, NULL),
(387, 'Panipat', 'Haryana', '29.39 ', '76.96 ', NULL, NULL, NULL),
(388, 'Rewari', 'Haryana', '28.19 ', '76.60 ', NULL, NULL, NULL),
(389, 'Rohtak', 'Haryana', '28.90 ', '76.58 ', NULL, NULL, NULL),
(390, 'Sirsa', 'Haryana', '29.53 ', '75.03 ', NULL, NULL, NULL),
(391, 'Sonipat', 'Haryana', '28.99 ', '77.01 ', NULL, NULL, NULL),
(392, 'Thanesar', 'Haryana', '29.98 ', '76.82 ', NULL, NULL, NULL),
(393, 'Tohana', 'Haryana', '29.70 ', '75.90 ', NULL, NULL, NULL),
(394, 'Yamunanagar', 'Haryana', '30.14 ', '77.28 ', NULL, NULL, NULL),
(395, 'Shimla', 'Himachal Pradesh', '31.11 ', '77.16 ', NULL, NULL, NULL),
(396, 'Anantnag', 'Jammu and Kashmir', '33.73 ', '75.15 ', NULL, NULL, NULL),
(397, 'Baramula', 'Jammu and Kashmir', '34.20 ', '74.35 ', NULL, NULL, NULL),
(398, 'Bari Brahmana', 'Jammu and Kashmir', '32.63', '74.91', NULL, NULL, NULL),
(399, 'Jammu', 'Jammu and Kashmir', '32.71 ', '74.85 ', NULL, NULL, NULL),
(400, 'Kathua', 'Jammu and Kashmir', '32.37 ', '75.52 ', NULL, NULL, NULL),
(401, 'Sopur', 'Jammu and Kashmir', '34.30 ', '74.47 ', NULL, NULL, NULL),
(402, 'Srinagar', 'Jammu and Kashmir', '34.09 ', '74.79 ', NULL, NULL, NULL),
(403, 'Udhampur', 'Jammu and Kashmir', '32.93 ', '75.13 ', NULL, NULL, NULL),
(404, 'Adityapur', 'Jharkhand', '22.80 ', '86.04 ', NULL, NULL, NULL),
(405, 'Bagbahra', 'Jharkhand', '22.82 ', '86.20 ', NULL, NULL, NULL),
(406, 'Bhuli', 'Jharkhand', '23.79 ', '86.38 ', NULL, NULL, NULL),
(407, 'Bokaro', 'Jharkhand', '23.78 ', '85.96 ', NULL, NULL, NULL),
(408, 'Chaibasa', 'Jharkhand', '22.56 ', '85.80 ', NULL, NULL, NULL),
(409, 'Chas', 'Jharkhand', '23.65 ', '86.17 ', NULL, NULL, NULL),
(410, 'Daltenganj', 'Jharkhand', '24.05 ', '84.06 ', NULL, NULL, NULL),
(411, 'Devghar', 'Jharkhand', '24.49 ', '86.69 ', NULL, NULL, NULL),
(412, 'Dhanbad', 'Jharkhand', '23.80 ', '86.42 ', NULL, NULL, NULL),
(413, 'Hazaribag', 'Jharkhand', '24.01 ', '85.36 ', NULL, NULL, NULL),
(414, 'Jamshedpur', 'Jharkhand', '22.79 ', '86.20 ', NULL, NULL, NULL),
(415, 'Jharia', 'Jharkhand', '23.76 ', '86.42 ', NULL, NULL, NULL),
(416, 'Jhumri Tilaiya', 'Jharkhand', '24.43 ', '85.52 ', NULL, NULL, NULL),
(417, 'Jorapokhar', 'Jharkhand', '23.79 ', '86.36 ', NULL, NULL, NULL),
(418, 'Katras', 'Jharkhand', '23.80 ', '86.28 ', NULL, NULL, NULL),
(419, 'Lohardaga', 'Jharkhand', '23.43 ', '84.68 ', NULL, NULL, NULL),
(420, 'Mango', 'Jharkhand', '22.85 ', '86.21 ', NULL, NULL, NULL),
(421, 'Phusro', 'Jharkhand', '23.68 ', '85.86 ', NULL, NULL, NULL),
(422, 'Ramgarh', 'Jharkhand', '23.63 ', '85.51 ', NULL, NULL, NULL),
(423, 'Ranchi', 'Jharkhand', '23.36 ', '85.33 ', NULL, NULL, NULL),
(424, 'Sahibganj', 'Jharkhand', '25.25 ', '87.62 ', NULL, NULL, NULL),
(425, 'Saunda', 'Jharkhand', '23.64 ', '85.37 ', NULL, NULL, NULL),
(426, 'Sindari', 'Jharkhand', '23.68 ', '86.49 ', NULL, NULL, NULL),
(427, 'Bagalkot', 'Karnataka', '16.19 ', '75.69 ', NULL, NULL, NULL),
(428, 'Bangalore', 'Karnataka', '12.97 ', '77.56 ', NULL, NULL, NULL),
(429, 'Basavakalyan', 'Karnataka', '17.87 ', '76.95 ', NULL, NULL, NULL),
(430, 'Belgaum', 'Karnataka', '15.86 ', '74.50 ', NULL, NULL, NULL),
(431, 'Bellary', 'Karnataka', '15.14 ', '76.91 ', NULL, NULL, NULL),
(432, 'Bhadravati', 'Karnataka', '13.84 ', '75.69 ', NULL, NULL, NULL),
(433, 'Bidar', 'Karnataka', '17.92 ', '77.52 ', NULL, NULL, NULL),
(434, 'Bijapur', 'Karnataka', '16.83 ', '75.71 ', NULL, NULL, NULL),
(435, 'Bommanahalli', 'Karnataka', '13.01 ', '77.63 ', NULL, NULL, NULL),
(436, 'Byatarayanapura', 'Karnataka', '13.05', '77.59', NULL, NULL, NULL),
(437, 'Challakere', 'Karnataka', '14.32 ', '76.65 ', NULL, NULL, NULL),
(438, 'Chamrajnagar', 'Karnataka', '11.92 ', '76.95 ', NULL, NULL, NULL),
(439, 'Channapatna', 'Karnataka', '12.66 ', '77.19 ', NULL, NULL, NULL),
(440, 'Chik Ballapur', 'Karnataka', '13.47 ', '77.73 ', NULL, NULL, NULL),
(441, 'Chikmagalur', 'Karnataka', '13.32 ', '75.76 ', NULL, NULL, NULL),
(442, 'Chintamani', 'Karnataka', '13.40 ', '78.05 ', NULL, NULL, NULL),
(443, 'Chitradurga', 'Karnataka', '14.23 ', '76.39 ', NULL, NULL, NULL),
(444, 'Dasarahalli', 'Karnataka', '13.01 ', '77.49 ', NULL, NULL, NULL),
(445, 'Davanagere', 'Karnataka', '14.46 ', '75.92 ', NULL, NULL, NULL),
(446, 'Dod Ballapur', 'Karnataka', '13.30 ', '77.52 ', NULL, NULL, NULL),
(447, 'Gadag', 'Karnataka', '15.44 ', '75.63 ', NULL, NULL, NULL),
(448, 'Gangawati', 'Karnataka', '15.44 ', '76.52 ', NULL, NULL, NULL),
(449, 'Gokak', 'Karnataka', '16.18 ', '74.81 ', NULL, NULL, NULL),
(450, 'Gulbarga', 'Karnataka', '17.34 ', '76.82 ', NULL, NULL, NULL),
(451, 'Harihar', 'Karnataka', '14.52 ', '75.80 ', NULL, NULL, NULL),
(452, 'Hassan', 'Karnataka', '13.01 ', '76.08 ', NULL, NULL, NULL),
(453, 'Haveri', 'Karnataka', '14.80 ', '75.40 ', NULL, NULL, NULL),
(454, 'Hiriyur', 'Karnataka', '13.97 ', '76.60 ', NULL, NULL, NULL),
(455, 'Hosakote', 'Karnataka', '13.06', '77.79', NULL, NULL, NULL),
(456, 'Hospet', 'Karnataka', '15.28 ', '76.37 ', NULL, NULL, NULL),
(457, 'Hubli', 'Karnataka', '15.36 ', '75.13 ', NULL, NULL, NULL),
(458, 'Ilkal', 'Karnataka', '15.97 ', '76.13 ', NULL, NULL, NULL),
(459, 'Jamkhandi', 'Karnataka', '16.51 ', '75.28 ', NULL, NULL, NULL),
(460, 'Kanakapura', 'Karnataka', '12.54 ', '77.42 ', NULL, NULL, NULL),
(461, 'Karwar', 'Karnataka', '14.82 ', '74.12 ', NULL, NULL, NULL),
(462, 'Kolar', 'Karnataka', '13.14 ', '78.13 ', NULL, NULL, NULL),
(463, 'Kollegal', 'Karnataka', '12.15 ', '77.12 ', NULL, NULL, NULL),
(464, 'Koppal', 'Karnataka', '15.35 ', '76.15 ', NULL, NULL, NULL),
(465, 'Krishnarajapura', 'Karnataka', '12.97 ', '77.74 ', NULL, NULL, NULL),
(466, 'Mahadevapura', 'Karnataka', '12.98', '77.68', NULL, NULL, NULL),
(467, 'Maisuru', 'Karnataka', '12.31 ', '76.65 ', NULL, NULL, NULL),
(468, 'Mandya', 'Karnataka', '12.54 ', '76.89 ', NULL, NULL, NULL),
(469, 'Mangaluru', 'Karnataka', '12.88 ', '74.84 ', NULL, NULL, NULL),
(470, 'Nipani', 'Karnataka', '16.41 ', '74.38 ', NULL, NULL, NULL),
(471, 'Pattanagere', 'Karnataka', '13.50', '75.99', NULL, NULL, NULL),
(472, 'Puttur', 'Karnataka', '12.77 ', '75.22 ', NULL, NULL, NULL),
(473, 'Rabkavi', 'Karnataka', '16.47 ', '75.11 ', NULL, NULL, NULL),
(474, 'Raichur', 'Karnataka', '16.21 ', '77.35 ', NULL, NULL, NULL),
(475, 'Ramanagaram', 'Karnataka', '12.72 ', '77.27 ', NULL, NULL, NULL),
(476, 'Ranibennur', 'Karnataka', '14.62 ', '75.61 ', NULL, NULL, NULL),
(477, 'Robertsonpet', 'Karnataka', '12.97 ', '78.28 ', NULL, NULL, NULL),
(478, 'Sagar', 'Karnataka', '14.17 ', '75.03 ', NULL, NULL, NULL),
(479, 'Shahabad', 'Karnataka', '17.13 ', '76.93 ', NULL, NULL, NULL),
(480, 'Shahpur', 'Karnataka', '16.70 ', '76.83 ', NULL, NULL, NULL),
(481, 'Shimoga', 'Karnataka', '13.93 ', '75.57 ', NULL, NULL, NULL),
(482, 'Shorapur', 'Karnataka', '16.52 ', '76.75 ', NULL, NULL, NULL),
(483, 'Sidlaghatta', 'Karnataka', '13.38 ', '77.87 ', NULL, NULL, NULL),
(484, 'Sira', 'Karnataka', '13.75 ', '76.90 ', NULL, NULL, NULL),
(485, 'Sirsi', 'Karnataka', '14.62 ', '74.85 ', NULL, NULL, NULL),
(486, 'Tiptur', 'Karnataka', '13.27 ', '76.48 ', NULL, NULL, NULL),
(487, 'Tumkur', 'Karnataka', '13.34 ', '77.10 ', NULL, NULL, NULL),
(488, 'Udupi', 'Karnataka', '13.35 ', '74.75 ', NULL, NULL, NULL),
(489, ' NULLal', 'Karnataka', '12.80 ', '74.85 ', NULL, '2022-09-19 12:08:51', '2022-09-19 12:08:51'),
(490, 'Yadgir', 'Karnataka', '16.77 ', '77.13 ', NULL, NULL, NULL),
(491, 'Yelahanka', 'Karnataka', '13.10 ', '77.60 ', NULL, NULL, NULL),
(492, 'Alappuzha', 'Kerala', '9.50 ', '76.33 ', NULL, NULL, NULL),
(493, 'Beypur', 'Kerala', '11.18 ', '75.82 ', NULL, NULL, NULL),
(494, 'Cheruvannur', 'Kerala', '11.21 ', '75.84 ', NULL, NULL, NULL),
(495, 'Edakkara', 'Kerala', '11.36', '76.30', NULL, NULL, NULL),
(496, 'Edathala', 'Kerala', '10.03 ', '76.32 ', NULL, NULL, NULL),
(497, 'Kalamassery', 'Kerala', '10.05 ', '76.27 ', NULL, NULL, NULL),
(498, 'Kannan Devan Hills', 'Kerala', '10.14', '77.11', NULL, NULL, NULL),
(499, 'Kannangad', 'Kerala', '12.34 ', '75.09 ', NULL, NULL, NULL),
(500, 'Kannur', 'Kerala', '11.86 ', '75.35 ', NULL, NULL, NULL),
(501, 'Kayankulam', 'Kerala', '9.17 ', '76.49 ', NULL, NULL, NULL),
(502, 'Kochi', 'Kerala', '10.02 ', '76.22 ', NULL, NULL, NULL),
(503, 'Kollam', 'Kerala', '8.89 ', '76.58 ', NULL, NULL, NULL),
(504, 'Kottayam', 'Kerala', '9.60 ', '76.52 ', NULL, NULL, NULL),
(505, 'Koyilandi', 'Kerala', '11.43 ', '75.70 ', NULL, NULL, NULL),
(506, 'Kozhikkod', 'Kerala', '11.26 ', '75.78 ', NULL, NULL, NULL),
(507, 'Kunnamkulam', 'Kerala', '10.65 ', '76.08 ', NULL, NULL, NULL),
(508, 'Malappuram', 'Kerala', '11.07 ', '76.06 ', NULL, NULL, NULL),
(509, 'Manjeri', 'Kerala', '11.12 ', '76.11 ', NULL, NULL, NULL),
(510, 'Nedumangad', 'Kerala', '8.61 ', '77.00 ', NULL, NULL, NULL),
(511, 'Neyyattinkara', 'Kerala', '8.40 ', '77.08 ', NULL, NULL, NULL),
(512, 'Palakkad', 'Kerala', '10.78 ', '76.65 ', NULL, NULL, NULL),
(513, 'Pallichal', 'Kerala', '8.45', '77.02', NULL, NULL, NULL),
(514, 'Payyannur', 'Kerala', '12.10 ', '75.19 ', NULL, NULL, NULL),
(515, 'Ponnani', 'Kerala', '10.78 ', '75.92 ', NULL, NULL, NULL),
(516, 'Talipparamba', 'Kerala', '12.03 ', '75.36 ', NULL, NULL, NULL),
(517, 'Thalassery', 'Kerala', '11.75 ', '75.49 ', NULL, NULL, NULL),
(518, 'Thiruvananthapuram', 'Kerala', '8.51 ', '76.95 ', NULL, NULL, NULL),
(519, 'Thrippunithura', 'Kerala', '9.94 ', '76.35 ', NULL, NULL, NULL),
(520, 'Thrissur', 'Kerala', '10.52 ', '76.21 ', NULL, NULL, NULL),
(521, 'Tirur', 'Kerala', '10.91 ', '75.92 ', NULL, NULL, NULL),
(522, 'Tiruvalla', 'Kerala', '9.39 ', '76.57 ', NULL, NULL, NULL),
(523, 'Vadakara', 'Kerala', '11.61 ', '75.58 ', NULL, NULL, NULL),
(524, 'Ashoknagar', 'Madhya Pradesh', '24.57 ', '77.72 ', NULL, NULL, NULL),
(525, 'Balaghat', 'Madhya Pradesh', '21.80 ', '80.18 ', NULL, NULL, NULL),
(526, 'Basoda', 'Madhya Pradesh', '23.85 ', '77.93 ', NULL, NULL, NULL),
(527, 'Betul', 'Madhya Pradesh', '21.92 ', '77.90 ', NULL, NULL, NULL),
(528, 'Bhind', 'Madhya Pradesh', '26.57 ', '78.77 ', NULL, NULL, NULL),
(529, 'Bhopal', 'Madhya Pradesh', '23.24 ', '77.40 ', NULL, NULL, NULL),
(530, 'BinaEtawa', 'Madhya Pradesh', '24.20 ', '78.20 ', NULL, NULL, NULL),
(531, 'Burhanpur', 'Madhya Pradesh', '21.33 ', '76.22 ', NULL, NULL, NULL),
(532, 'Chhatarpur', 'Madhya Pradesh', '24.92 ', '79.58 ', NULL, NULL, NULL),
(533, 'Chhindwara', 'Madhya Pradesh', '22.07 ', '78.94 ', NULL, NULL, NULL),
(534, 'Dabra', 'Madhya Pradesh', '25.90 ', '78.33 ', NULL, NULL, NULL),
(535, 'Damoh', 'Madhya Pradesh', '23.85 ', '79.44 ', NULL, NULL, NULL),
(536, 'Datia', 'Madhya Pradesh', '25.67 ', '78.45 ', NULL, NULL, NULL),
(537, 'Dewas', 'Madhya Pradesh', '22.97 ', '76.05 ', NULL, NULL, NULL),
(538, 'Dhar', 'Madhya Pradesh', '22.60 ', '75.29 ', NULL, NULL, NULL),
(539, 'Gohad', 'Madhya Pradesh', '26.43 ', '78.45 ', NULL, NULL, NULL),
(540, 'Guna', 'Madhya Pradesh', '24.65 ', '77.30 ', NULL, NULL, NULL),
(541, 'Gwalior', 'Madhya Pradesh', '26.23 ', '78.17 ', NULL, NULL, NULL),
(542, 'Harda', 'Madhya Pradesh', '22.33 ', '77.11 ', NULL, NULL, NULL),
(543, 'Hoshangabad', 'Madhya Pradesh', '22.75 ', '77.71 ', NULL, NULL, NULL),
(544, 'Indore', 'Madhya Pradesh', '22.72 ', '75.86 ', NULL, NULL, NULL),
(545, 'Itarsi', 'Madhya Pradesh', '22.62 ', '77.76 ', NULL, NULL, NULL),
(546, 'Jabalpur', 'Madhya Pradesh', '23.17 ', '79.94 ', NULL, NULL, NULL),
(547, 'Jabalpur Cantonment', 'Madhya Pradesh', '23.16 ', '79.95 ', NULL, NULL, NULL),
(548, 'Jaora', 'Madhya Pradesh', '23.64 ', '75.11 ', NULL, NULL, NULL),
(549, 'Khandwa', 'Madhya Pradesh', '21.83 ', '76.35 ', NULL, NULL, NULL),
(550, 'Khargone', 'Madhya Pradesh', '21.83 ', '75.60 ', NULL, NULL, NULL),
(551, 'Mandidip', 'Madhya Pradesh', '23.10 ', '77.52 ', NULL, NULL, NULL),
(552, 'Mandsaur', 'Madhya Pradesh', '24.07 ', '75.07 ', NULL, NULL, NULL),
(553, 'Mau', 'Madhya Pradesh', '22.56 ', '75.75 ', NULL, NULL, NULL),
(554, 'Morena', 'Madhya Pradesh', '26.51 ', '77.99 ', NULL, NULL, NULL),
(555, 'Murwara', 'Madhya Pradesh', '23.85 ', '80.39 ', NULL, NULL, NULL),
(556, 'Nagda', 'Madhya Pradesh', '23.46 ', '75.42 ', NULL, NULL, NULL),
(557, 'Nimach', 'Madhya Pradesh', '24.47 ', '74.87 ', NULL, NULL, NULL),
(558, 'Pithampur', 'Madhya Pradesh', '22.61', '75.67', NULL, NULL, NULL),
(559, 'Raghogarh', 'Madhya Pradesh', '24.45 ', '77.20 ', NULL, NULL, NULL),
(560, 'Ratlam', 'Madhya Pradesh', '23.35 ', '75.03 ', NULL, NULL, NULL),
(561, 'Rewa', 'Madhya Pradesh', '24.53 ', '81.29 ', NULL, NULL, NULL),
(562, 'Sagar', 'Madhya Pradesh', '23.85 ', '78.75 ', NULL, NULL, NULL),
(563, 'Sarni', 'Madhya Pradesh', '22.04 ', '78.27 ', NULL, NULL, NULL),
(564, 'Satna', 'Madhya Pradesh', '24.58 ', '80.83 ', NULL, NULL, NULL),
(565, 'Sehore', 'Madhya Pradesh', '23.20 ', '77.08 ', NULL, NULL, NULL),
(566, 'Sendhwa', 'Madhya Pradesh', '21.68 ', '75.10 ', NULL, NULL, NULL),
(567, 'Seoni', 'Madhya Pradesh', '22.10 ', '79.55 ', NULL, NULL, NULL),
(568, 'Shahdol', 'Madhya Pradesh', '23.30 ', '81.36 ', NULL, NULL, NULL),
(569, 'Shajapur', 'Madhya Pradesh', '23.43 ', '76.27 ', NULL, NULL, NULL),
(570, 'Sheopur', 'Madhya Pradesh', '25.67 ', '76.70 ', NULL, NULL, NULL),
(571, 'Shivapuri', 'Madhya Pradesh', '25.43 ', '77.65 ', NULL, NULL, NULL),
(572, 'Sidhi', 'Madhya Pradesh', '24.42 ', '81.88 ', NULL, NULL, NULL),
(573, 'Singrauli', 'Madhya Pradesh', '23.84 ', '82.27 ', NULL, NULL, NULL),
(574, 'Tikamgarh', 'Madhya Pradesh', '24.74 ', '78.83 ', NULL, NULL, NULL),
(575, 'Ujjain', 'Madhya Pradesh', '23.19 ', '75.78 ', NULL, NULL, NULL),
(576, 'Vidisha', 'Madhya Pradesh', '23.53 ', '77.80 ', NULL, NULL, NULL),
(577, 'Achalpur', 'Maharashtra', '21.26 ', '77.50 ', NULL, NULL, NULL),
(578, 'Ahmadnagar', 'Maharashtra', '19.10 ', '74.74 ', NULL, NULL, NULL),
(579, 'Akola', 'Maharashtra', '20.71 ', '77.00 ', NULL, NULL, NULL),
(580, 'Akot', 'Maharashtra', '21.10 ', '77.05 ', NULL, NULL, NULL),
(581, 'Amalner', 'Maharashtra', '21.05 ', '75.06 ', NULL, NULL, NULL),
(582, 'Ambajogai', 'Maharashtra', '18.73 ', '76.38 ', NULL, NULL, NULL),
(583, 'Amravati', 'Maharashtra', '20.95 ', '77.76 ', NULL, NULL, NULL),
(584, 'Anjangaon', 'Maharashtra', '21.16 ', '77.31 ', NULL, NULL, NULL),
(585, 'Aurangabad', 'Maharashtra', '19.89 ', '75.32 ', NULL, NULL, NULL),
(586, 'Badlapur', 'Maharashtra', '19.15 ', '73.27 ', NULL, NULL, NULL),
(587, 'Ballarpur', 'Maharashtra', '19.85 ', '79.35 ', NULL, NULL, NULL),
(588, 'Baramati', 'Maharashtra', '18.15 ', '74.58 ', NULL, NULL, NULL),
(589, 'Barsi', 'Maharashtra', '18.24 ', '75.69 ', NULL, NULL, NULL),
(590, 'Basmat', 'Maharashtra', '19.32 ', '77.17 ', NULL, NULL, NULL),
(591, 'Bhadravati', 'Maharashtra', '20.11 ', '79.12 ', NULL, NULL, NULL),
(592, 'Bhandara', 'Maharashtra', '21.18 ', '79.65 ', NULL, NULL, NULL),
(593, 'Bhiwandi', 'Maharashtra', '19.30 ', '73.05 ', NULL, NULL, NULL),
(594, 'Bhusawal', 'Maharashtra', '21.05 ', '75.78 ', NULL, NULL, NULL),
(595, 'Bid', 'Maharashtra', '18.99 ', '75.76 ', NULL, NULL, NULL),
(596, 'Mumbai', 'Maharashtra', '18.96 ', '72.82 ', NULL, NULL, NULL),
(597, 'Buldana', 'Maharashtra', '20.54 ', '76.18 ', NULL, NULL, NULL),
(598, 'Chalisgaon', 'Maharashtra', '20.46 ', '74.99 ', NULL, NULL, NULL),
(599, 'Chandrapur', 'Maharashtra', '19.96 ', '79.30 ', NULL, NULL, NULL),
(600, 'Chikhli', 'Maharashtra', '20.35 ', '76.25 ', NULL, NULL, NULL),
(601, 'Chiplun', 'Maharashtra', '17.53 ', '73.52 ', NULL, NULL, NULL),
(602, 'Chopda', 'Maharashtra', '21.25 ', '75.28 ', NULL, NULL, NULL),
(603, 'Dahanu', 'Maharashtra', '19.97 ', '72.73 ', NULL, NULL, NULL),
(604, 'Deolali', 'Maharashtra', '19.95 ', '73.84 ', NULL, NULL, NULL),
(605, 'Dhule', 'Maharashtra', '20.90 ', '74.77 ', NULL, NULL, NULL),
(606, 'Digdoh', 'Maharashtra', '21.11', '79.01', NULL, NULL, NULL),
(607, 'Diglur', 'Maharashtra', '18.55 ', '77.60 ', NULL, NULL, NULL),
(608, 'Gadchiroli', 'Maharashtra', '20.17 ', '80.00 ', NULL, NULL, NULL),
(609, 'Gondiya', 'Maharashtra', '21.47 ', '80.20 ', NULL, NULL, NULL),
(610, 'Hinganghat', 'Maharashtra', '20.56 ', '78.83 ', NULL, NULL, NULL),
(611, 'Hingoli', 'Maharashtra', '19.72 ', '77.14 ', NULL, NULL, NULL),
(612, 'Ichalkaranji', 'Maharashtra', '16.69 ', '74.46 ', NULL, NULL, NULL),
(613, 'Jalgaon', 'Maharashtra', '21.01 ', '75.56 ', NULL, NULL, NULL),
(614, 'Jalna', 'Maharashtra', '19.85 ', '75.88 ', NULL, NULL, NULL),
(615, 'Kalyan', 'Maharashtra', '19.25 ', '73.16 ', NULL, NULL, NULL),
(616, 'Kamthi', 'Maharashtra', '21.23 ', '79.20 ', NULL, NULL, NULL),
(617, 'Karanja', 'Maharashtra', '20.48 ', '77.48 ', NULL, NULL, NULL),
(618, 'Khadki', 'Maharashtra', '18.57 ', '73.83 ', NULL, NULL, NULL),
(619, 'Khamgaon', 'Maharashtra', '20.70 ', '76.56 ', NULL, NULL, NULL),
(620, 'Khopoli', 'Maharashtra', '18.78 ', '73.33 ', NULL, NULL, NULL),
(621, 'Kolhapur', 'Maharashtra', '16.70 ', '74.22 ', NULL, NULL, NULL),
(622, 'Kopargaon', 'Maharashtra', '19.88 ', '74.48 ', NULL, NULL, NULL),
(623, 'Latur', 'Maharashtra', '18.41 ', '76.58 ', NULL, NULL, NULL),
(624, 'Lonavale', 'Maharashtra', '18.75 ', '73.42 ', NULL, NULL, NULL),
(625, 'Malegaon', 'Maharashtra', '20.56 ', '74.52 ', NULL, NULL, NULL),
(626, 'Malkapur', 'Maharashtra', '20.90 ', '76.19 ', NULL, NULL, NULL),
(627, 'Manmad', 'Maharashtra', '20.26 ', '74.43 ', NULL, NULL, NULL),
(628, 'Mira Bhayandar', 'Maharashtra', '19.29 ', '72.85 ', NULL, NULL, NULL),
(629, 'Nagpur', 'Maharashtra', '21.16 ', '79.08 ', NULL, NULL, NULL),
(630, 'Nalasopara', 'Maharashtra', '19.43 ', '72.78 ', NULL, NULL, NULL),
(631, 'Nanded', 'Maharashtra', '19.17 ', '77.29 ', NULL, NULL, NULL),
(632, 'Nandurbar', 'Maharashtra', '21.38 ', '74.23 ', NULL, NULL, NULL),
(633, 'Nashik', 'Maharashtra', '20.01 ', '73.78 ', NULL, NULL, NULL),
(634, 'Navghar', 'Maharashtra', '19.34 ', '72.90 ', NULL, NULL, NULL),
(635, 'Navi Mumbai', 'Maharashtra', '19.11 ', '73.06 ', NULL, NULL, NULL),
(636, 'Navi Mumbai', 'Maharashtra', '19.00 ', '73.10 ', NULL, NULL, NULL),
(637, 'Osmanabad', 'Maharashtra', '18.17 ', '76.03 ', NULL, NULL, NULL),
(638, 'Palghar', 'Maharashtra', '19.68 ', '72.75 ', NULL, NULL, NULL),
(639, 'Pandharpur', 'Maharashtra', '17.68 ', '75.31 ', NULL, NULL, NULL),
(640, 'Parbhani', 'Maharashtra', '19.27 ', '76.76 ', NULL, NULL, NULL),
(641, 'Phaltan', 'Maharashtra', '17.98 ', '74.43 ', NULL, NULL, NULL),
(642, 'Pimpri', 'Maharashtra', '18.62 ', '73.80 ', NULL, NULL, NULL),
(643, 'Pune', 'Maharashtra', '18.53 ', '73.84 ', NULL, NULL, NULL),
(644, 'Pune Cantonment', 'Maharashtra', '18.50 ', '73.88 ', NULL, NULL, NULL),
(645, 'Pusad', 'Maharashtra', '19.91 ', '77.57 ', NULL, NULL, NULL),
(646, 'Ratnagiri', 'Maharashtra', '17.00 ', '73.29 ', NULL, NULL, NULL),
(647, 'SangliMiraj', 'Maharashtra', '16.86 ', '74.57 ', NULL, NULL, NULL),
(648, 'Satara', 'Maharashtra', '17.70 ', '74.00 ', NULL, NULL, NULL),
(649, 'Shahada', 'Maharashtra', '21.55 ', '74.47 ', NULL, NULL, NULL),
(650, 'Shegaon', 'Maharashtra', '20.78 ', '76.68 ', NULL, NULL, NULL),
(651, 'Shirpur', 'Maharashtra', '21.35 ', '74.88 ', NULL, NULL, NULL),
(652, 'Sholapur', 'Maharashtra', '17.67 ', '75.89 ', NULL, NULL, NULL),
(653, 'Shrirampur', 'Maharashtra', '19.63 ', '74.64 ', NULL, NULL, NULL),
(654, 'Sillod', 'Maharashtra', '20.30 ', '75.65 ', NULL, NULL, NULL),
(655, 'Thana', 'Maharashtra', '19.20 ', '72.97 ', NULL, NULL, NULL),
(656, 'Udgir', 'Maharashtra', '18.40 ', '77.11 ', NULL, NULL, NULL),
(657, 'Ulhasnagar', 'Maharashtra', '19.23 ', '73.15 ', NULL, NULL, NULL),
(658, 'Uran Islampur', 'Maharashtra', '17.05 ', '74.27 ', NULL, NULL, NULL),
(659, 'Vasai', 'Maharashtra', '19.36 ', '72.80 ', NULL, NULL, NULL),
(660, 'Virar', 'Maharashtra', '19.47 ', '72.79 ', NULL, NULL, NULL),
(661, 'Wadi', 'Maharashtra', '21.15', '78.99', NULL, NULL, NULL),
(662, 'Wani', 'Maharashtra', '20.07 ', '78.95 ', NULL, NULL, NULL),
(663, 'Wardha', 'Maharashtra', '20.75 ', '78.60 ', NULL, NULL, NULL),
(664, 'Warud', 'Maharashtra', '21.47 ', '78.27 ', NULL, NULL, NULL),
(665, 'Washim', 'Maharashtra', '20.10 ', '77.13 ', NULL, NULL, NULL),
(666, 'Yavatmal', 'Maharashtra', '20.41 ', '78.13 ', NULL, NULL, NULL),
(667, 'Imphal', 'Manipur', '24.79 ', '93.94 ', NULL, NULL, NULL),
(668, 'Shillong', 'Meghalaya', '25.57 ', '91.87 ', NULL, NULL, NULL),
(669, 'Tura', 'Meghalaya', '25.52 ', '90.22 ', NULL, NULL, NULL),
(670, 'Aizawl', 'Mizoram', '23.71 ', '92.71 ', NULL, NULL, NULL),
(671, 'Lunglei', 'Mizoram', '22.88 ', '92.73 ', NULL, NULL, NULL),
(672, 'Dimapur', 'Nagaland', '25.92 ', '93.73 ', NULL, NULL, NULL),
(673, 'Kohima', 'Nagaland', '25.67 ', '94.11 ', NULL, NULL, NULL),
(674, 'Wokha', 'Nagaland', '26.10 ', '94.27 ', NULL, NULL, NULL),
(675, 'Balangir', 'Orissa', '20.71 ', '83.50 ', NULL, NULL, NULL),
(676, 'Baleshwar', 'Orissa', '21.49 ', '86.95 ', NULL, NULL, NULL),
(677, 'Barbil', 'Orissa', '22.12 ', '85.40 ', NULL, NULL, NULL),
(678, 'Bargarh', 'Orissa', '21.34 ', '83.61 ', NULL, NULL, NULL),
(679, 'Baripada', 'Orissa', '21.95 ', '86.73 ', NULL, NULL, NULL),
(680, 'Bhadrak', 'Orissa', '21.06 ', '86.52 ', NULL, NULL, NULL),
(681, 'Bhawanipatna', 'Orissa', '19.91 ', '83.17 ', NULL, NULL, NULL),
(682, 'Bhubaneswar', 'Orissa', '20.27 ', '85.84 ', NULL, NULL, NULL),
(683, 'Brahmapur', 'Orissa', '19.32 ', '84.80 ', NULL, NULL, NULL),
(684, 'Brajrajnagar', 'Orissa', '21.82 ', '83.91 ', NULL, NULL, NULL),
(685, 'Dhenkanal', 'Orissa', '20.67 ', '85.60 ', NULL, NULL, NULL),
(686, 'Jaypur', 'Orissa', '18.86 ', '82.56 ', NULL, NULL, NULL),
(687, 'Jharsuguda', 'Orissa', '21.87 ', '84.01 ', NULL, NULL, NULL),
(688, 'Kataka', 'Orissa', '20.47 ', '85.88 ', NULL, NULL, NULL),
(689, 'Kendujhar', 'Orissa', '21.63 ', '85.58 ', NULL, NULL, NULL),
(690, 'Paradwip', 'Orissa', '20.32 ', '86.62 ', NULL, NULL, NULL),
(691, 'Puri', 'Orissa', '19.81 ', '85.83 ', NULL, NULL, NULL),
(692, 'Raurkela', 'Orissa', '22.24 ', '84.81 ', NULL, NULL, NULL),
(693, 'Raurkela Industrial Township', 'Orissa', '22.19', '84.86', NULL, NULL, NULL),
(694, 'Rayagada', 'Orissa', '19.18 ', '83.41 ', NULL, NULL, NULL),
(695, 'Sambalpur', 'Orissa', '21.47 ', '83.97 ', NULL, NULL, NULL),
(696, 'Sunabeda', 'Orissa', '18.69 ', '82.86 ', NULL, NULL, NULL),
(697, 'Karaikal', 'Pondicherry', '10.93 ', '79.83 ', NULL, NULL, NULL),
(698, 'Ozhukarai', 'Pondicherry', '11.94 ', '79.77 ', NULL, NULL, NULL),
(699, 'Pondicherry', 'Pondicherry', '11.94 ', '79.83 ', NULL, NULL, NULL),
(700, 'Abohar', 'Punjab', '30.14 ', '74.20 ', NULL, NULL, NULL),
(701, 'Amritsar', 'Punjab', '31.64 ', '74.87 ', NULL, NULL, NULL),
(702, 'Barnala', 'Punjab', '30.39 ', '75.54 ', NULL, NULL, NULL),
(703, 'Batala', 'Punjab', '31.82 ', '75.21 ', NULL, NULL, NULL),
(704, 'Bathinda', 'Punjab', '30.17 ', '74.97 ', NULL, NULL, NULL),
(705, 'Dhuri', 'Punjab', '30.37 ', '75.87 ', NULL, NULL, NULL),
(706, 'Faridkot', 'Punjab', '30.68 ', '74.74 ', NULL, NULL, NULL),
(707, 'Fazilka', 'Punjab', '30.41 ', '74.02 ', NULL, NULL, NULL),
(708, 'Firozpur', 'Punjab', '30.92 ', '74.61 ', NULL, NULL, NULL),
(709, 'Firozpur Cantonment', 'Punjab', '30.95 ', '74.60 ', NULL, NULL, NULL),
(710, 'Gobindgarh', 'Punjab', '30.66 ', '76.31 ', NULL, NULL, NULL),
(711, 'Gurdaspur', 'Punjab', '32.04 ', '75.40 ', NULL, NULL, NULL),
(712, 'Hoshiarpur', 'Punjab', '31.53 ', '75.91 ', NULL, NULL, NULL),
(713, 'Jagraon', 'Punjab', '30.78 ', '75.48 ', NULL, NULL, NULL),
(714, 'Jalandhar', 'Punjab', '31.33 ', '75.57 ', NULL, NULL, NULL),
(715, 'Kapurthala', 'Punjab', '31.38 ', '75.38 ', NULL, NULL, NULL),
(716, 'Khanna', 'Punjab', '30.71 ', '76.21 ', NULL, NULL, NULL),
(717, 'Kot Kapura', 'Punjab', '30.59 ', '74.80 ', NULL, NULL, NULL),
(718, 'Ludhiana', 'Punjab', '30.91 ', '75.84 ', NULL, NULL, NULL),
(719, 'Malaut', 'Punjab', '30.23 ', '74.48 ', NULL, NULL, NULL),
(720, 'Maler Kotla', 'Punjab', '30.54 ', '75.87 ', NULL, NULL, NULL),
(721, 'Mansa', 'Punjab', '29.98 ', '75.39 ', NULL, NULL, NULL),
(722, 'Moga', 'Punjab', '30.82 ', '75.17 ', NULL, NULL, NULL),
(723, 'Mohali', 'Punjab', '30.78 ', '76.69 ', NULL, NULL, NULL),
(724, 'Pathankot', 'Punjab', '32.27 ', '75.64 ', NULL, NULL, NULL),
(725, 'Patiala', 'Punjab', '30.32 ', '76.39 ', NULL, NULL, NULL),
(726, 'Phagwara', 'Punjab', '31.22 ', '75.76 ', NULL, NULL, NULL),
(727, 'Rajpura', 'Punjab', '30.48 ', '76.59 ', NULL, NULL, NULL);
INSERT INTO `locations` (`id`, `name`, `state`, `latitude`, `longitude`, `created_at`, `updated_at`, `deleted_at`) VALUES
(728, 'Rupnagar', 'Punjab', '30.98 ', '76.52 ', NULL, NULL, NULL),
(729, 'Samana', 'Punjab', '30.15 ', '76.20 ', NULL, NULL, NULL),
(730, 'Sangrur', 'Punjab', '30.25 ', '75.84 ', NULL, NULL, NULL),
(731, 'Sirhind', 'Punjab', '30.65 ', '76.38 ', NULL, NULL, NULL),
(732, 'Sunam', 'Punjab', '30.13 ', '75.80 ', NULL, NULL, NULL),
(733, 'Tarn Taran', 'Punjab', '31.45 ', '74.92 ', NULL, NULL, NULL),
(734, 'Ajmer', 'Rajasthan', '26.45 ', '74.64 ', NULL, NULL, NULL),
(735, 'Alwar', 'Rajasthan', '27.56 ', '76.60 ', NULL, NULL, NULL),
(736, 'Balotra', 'Rajasthan', '25.83 ', '72.23 ', NULL, NULL, NULL),
(737, 'Banswara', 'Rajasthan', '23.54 ', '74.44 ', NULL, NULL, NULL),
(738, 'Baran', 'Rajasthan', '25.10 ', '76.51 ', NULL, NULL, NULL),
(739, 'Bari', 'Rajasthan', '26.65 ', '77.60 ', NULL, NULL, NULL),
(740, 'Barmer', 'Rajasthan', '25.75 ', '71.39 ', NULL, NULL, NULL),
(741, 'Beawar', 'Rajasthan', '26.10 ', '74.30 ', NULL, NULL, NULL),
(742, 'Bharatpur', 'Rajasthan', '27.23 ', '77.49 ', NULL, NULL, NULL),
(743, 'Bhilwara', 'Rajasthan', '25.35 ', '74.63 ', NULL, NULL, NULL),
(744, 'Bhiwadi', 'Rajasthan', '28.20', '76.82', NULL, NULL, NULL),
(745, 'Bikaner', 'Rajasthan', '28.03 ', '73.32 ', NULL, NULL, NULL),
(746, 'Bundi', 'Rajasthan', '25.45 ', '75.63 ', NULL, NULL, NULL),
(747, 'Chittaurgarh', 'Rajasthan', '24.89 ', '74.63 ', NULL, NULL, NULL),
(748, 'Chomun', 'Rajasthan', '27.17 ', '75.72 ', NULL, NULL, NULL),
(749, 'Churu', 'Rajasthan', '28.31 ', '74.96 ', NULL, NULL, NULL),
(750, 'Daosa', 'Rajasthan', '26.88 ', '76.33 ', NULL, NULL, NULL),
(751, 'Dhaulpur', 'Rajasthan', '26.70 ', '77.87 ', NULL, NULL, NULL),
(752, 'Didwana', 'Rajasthan', '27.39 ', '74.57 ', NULL, NULL, NULL),
(753, 'Fatehpur', 'Rajasthan', '27.99 ', '74.95 ', NULL, NULL, NULL),
(754, 'Ganganagar', 'Rajasthan', '29.93 ', '73.86 ', NULL, NULL, NULL),
(755, 'Gangapur', 'Rajasthan', '26.47 ', '76.72 ', NULL, NULL, NULL),
(756, 'Hanumangarh', 'Rajasthan', '29.62 ', '74.29 ', NULL, NULL, NULL),
(757, 'Hindaun', 'Rajasthan', '26.74 ', '77.02 ', NULL, NULL, NULL),
(758, 'Jaipur', 'Rajasthan', '26.92 ', '75.80 ', NULL, NULL, NULL),
(759, 'Jaisalmer', 'Rajasthan', '26.92 ', '70.90 ', NULL, NULL, NULL),
(760, 'Jalor', 'Rajasthan', '25.35 ', '72.62 ', NULL, NULL, NULL),
(761, 'Jhalawar', 'Rajasthan', '24.60 ', '76.15 ', NULL, NULL, NULL),
(762, 'Jhunjhunun', 'Rajasthan', '28.13 ', '75.39 ', NULL, NULL, NULL),
(763, 'Jodhpur', 'Rajasthan', '26.29 ', '73.02 ', NULL, NULL, NULL),
(764, 'Karauli', 'Rajasthan', '26.50 ', '77.02 ', NULL, NULL, NULL),
(765, 'Kishangarh', 'Rajasthan', '26.58 ', '74.86 ', NULL, NULL, NULL),
(766, 'Kota', 'Rajasthan', '25.18 ', '75.83 ', NULL, NULL, NULL),
(767, 'Kuchaman', 'Rajasthan', '27.15 ', '74.85 ', NULL, NULL, NULL),
(768, 'Ladnun', 'Rajasthan', '27.64 ', '74.38 ', NULL, NULL, NULL),
(769, 'Makrana', 'Rajasthan', '27.05 ', '74.72 ', NULL, NULL, NULL),
(770, 'Nagaur', 'Rajasthan', '27.21 ', '73.73 ', NULL, NULL, NULL),
(771, 'Nawalgarh', 'Rajasthan', '27.85 ', '75.27 ', NULL, NULL, NULL),
(772, 'Nimbahera', 'Rajasthan', '24.62 ', '74.68 ', NULL, NULL, NULL),
(773, 'Nokha', 'Rajasthan', '27.60 ', '73.42 ', NULL, NULL, NULL),
(774, 'Pali', 'Rajasthan', '25.79 ', '73.32 ', NULL, NULL, NULL),
(775, 'Rajsamand', 'Rajasthan', '25.07 ', '73.88 ', NULL, NULL, NULL),
(776, 'Ratangarh', 'Rajasthan', '28.09 ', '74.60 ', NULL, NULL, NULL),
(777, 'Sardarshahr', 'Rajasthan', '28.45 ', '74.48 ', NULL, NULL, NULL),
(778, 'Sawai Madhopur', 'Rajasthan', '26.03 ', '76.34 ', NULL, NULL, NULL),
(779, 'Sikar', 'Rajasthan', '27.61 ', '75.13 ', NULL, NULL, NULL),
(780, 'Sujangarh', 'Rajasthan', '27.70 ', '74.46 ', NULL, NULL, NULL),
(781, 'Suratgarh', 'Rajasthan', '29.32 ', '73.90 ', NULL, NULL, NULL),
(782, 'Tonk', 'Rajasthan', '26.17 ', '75.78 ', NULL, NULL, NULL),
(783, 'Udaipur', 'Rajasthan', '24.58 ', '73.69 ', NULL, NULL, NULL),
(784, 'Alandur', 'Tamil adu', '13.03 ', '80.23 ', NULL, NULL, NULL),
(785, 'Ambattur', 'Tamil adu', '13.11 ', '80.17 ', NULL, NULL, NULL),
(786, 'Ambur', 'Tamil adu', '12.80 ', '78.72 ', NULL, NULL, NULL),
(787, 'Arakonam', 'Tamil adu', '13.08 ', '79.67 ', NULL, NULL, NULL),
(788, 'Arani', 'Tamil adu', '12.68 ', '79.28 ', NULL, NULL, NULL),
(789, 'Aruppukkottai', 'Tamil adu', '9.51 ', '78.09 ', NULL, NULL, NULL),
(790, 'Attur', 'Tamil adu', '11.60 ', '78.60 ', NULL, NULL, NULL),
(791, 'Avadi', 'Tamil adu', '13.12 ', '80.11 ', NULL, NULL, NULL),
(792, 'Avaniapuram', 'Tamil adu', '9.86 ', '78.12 ', NULL, NULL, NULL),
(793, 'Bodinayakkanur', 'Tamil adu', '10.01 ', '77.35 ', NULL, NULL, NULL),
(794, 'Chengalpattu', 'Tamil adu', '12.70 ', '79.97 ', NULL, NULL, NULL),
(795, 'Dharapuram', 'Tamil adu', '10.74 ', '77.52 ', NULL, NULL, NULL),
(796, 'Dharmapuri', 'Tamil adu', '12.13 ', '78.16 ', NULL, NULL, NULL),
(797, 'Dindigul', 'Tamil adu', '10.36 ', '77.97 ', NULL, NULL, NULL),
(798, 'Erode', 'Tamil adu', '11.35 ', '77.73 ', NULL, NULL, NULL),
(799, 'Gopichettipalaiyam', 'Tamil adu', '11.46 ', '77.43 ', NULL, NULL, NULL),
(800, 'Gudalur', 'Tamil adu', '11.76 ', '79.75 ', NULL, NULL, NULL),
(801, 'Gudiyattam', 'Tamil adu', '12.95 ', '78.86 ', NULL, NULL, NULL),
(802, 'Hosur', 'Tamil adu', '12.72 ', '77.82 ', NULL, NULL, NULL),
(803, 'Idappadi', 'Tamil adu', '11.58 ', '77.85 ', NULL, NULL, NULL),
(804, 'Kadayanallur', 'Tamil adu', '9.08 ', '77.35 ', NULL, NULL, NULL),
(805, 'Kambam', 'Tamil adu', '9.74 ', '77.28 ', NULL, NULL, NULL),
(806, 'Kanchipuram', 'Tamil adu', '12.84 ', '79.70 ', NULL, NULL, NULL),
(807, 'Karur', 'Tamil adu', '10.96 ', '78.07 ', NULL, NULL, NULL),
(808, 'Kavundampalaiyam', 'Tamil adu', '11.05 ', '76.92 ', NULL, NULL, NULL),
(809, 'Kovilpatti', 'Tamil adu', '9.19 ', '77.86 ', NULL, NULL, NULL),
(810, 'Koyampattur', 'Tamil adu', '11.01 ', '76.96 ', NULL, NULL, NULL),
(811, 'Krishnagiri', 'Tamil adu', '12.54 ', '78.21 ', NULL, NULL, NULL),
(812, 'Kumarapalaiyam', 'Tamil adu', '11.44 ', '77.73 ', NULL, NULL, NULL),
(813, 'Kumbakonam', 'Tamil adu', '10.97 ', '79.38 ', NULL, NULL, NULL),
(814, 'Kuniyamuthur', 'Tamil adu', '10.98 ', '76.95 ', NULL, NULL, NULL),
(815, 'Kurichi', 'Tamil adu', '10.92 ', '76.96 ', NULL, NULL, NULL),
(816, 'Madhavaram', 'Tamil adu', '13.02 ', '80.26 ', NULL, NULL, NULL),
(817, 'Madras', 'Tamil adu', '13.09 ', '80.27 ', NULL, NULL, NULL),
(818, 'Madurai', 'Tamil adu', '9.92 ', '78.12 ', NULL, NULL, NULL),
(819, 'Maduravoyal', 'Tamil adu', '13.06', '80.16', NULL, NULL, NULL),
(820, 'Mannargudi', 'Tamil adu', '10.67 ', '79.45 ', NULL, NULL, NULL),
(821, 'Mayiladuthurai', 'Tamil adu', '11.11 ', '79.65 ', NULL, NULL, NULL),
(822, 'Mettupalayam', 'Tamil adu', '11.30 ', '76.94 ', NULL, NULL, NULL),
(823, 'Mettur', 'Tamil adu', '11.80 ', '77.80 ', NULL, NULL, NULL),
(824, 'Nagapattinam', 'Tamil adu', '10.80 ', '79.84 ', NULL, NULL, NULL),
(825, 'Nagercoil', 'Tamil adu', '8.18 ', '77.43 ', NULL, NULL, NULL),
(826, 'Namakkal', 'Tamil adu', '11.23 ', '78.17 ', NULL, NULL, NULL),
(827, 'Nerkunram', 'Tamil adu', '13.04 ', '80.26 ', NULL, NULL, NULL),
(828, 'Neyveli', 'Tamil adu', '11.62 ', '79.48 ', NULL, NULL, NULL),
(829, 'Pallavaram', 'Tamil adu', '12.99 ', '80.16 ', NULL, NULL, NULL),
(830, 'Pammal', 'Tamil adu', '12.97 ', '80.11 ', NULL, NULL, NULL),
(831, 'Pannuratti', 'Tamil adu', '11.78 ', '79.55 ', NULL, NULL, NULL),
(832, 'Paramakkudi', 'Tamil adu', '9.54 ', '78.59 ', NULL, NULL, NULL),
(833, 'Pattukkottai', 'Tamil adu', '10.43 ', '79.31 ', NULL, NULL, NULL),
(834, 'Pollachi', 'Tamil adu', '10.67 ', '77.00 ', NULL, NULL, NULL),
(835, 'Pudukkottai', 'Tamil adu', '10.39 ', '78.82 ', NULL, NULL, NULL),
(836, 'Puliyankudi', 'Tamil adu', '9.18 ', '77.40 ', NULL, NULL, NULL),
(837, 'Punamalli', 'Tamil adu', '13.05 ', '80.11 ', NULL, NULL, NULL),
(838, 'Rajapalaiyam', 'Tamil adu', '9.46 ', '77.55 ', NULL, NULL, NULL),
(839, 'Ramanathapuram', 'Tamil adu', '9.37 ', '78.83 ', NULL, NULL, NULL),
(840, 'Salem', 'Tamil adu', '11.67 ', '78.16 ', NULL, NULL, NULL),
(841, 'Sankarankoil', 'Tamil adu', '9.17 ', '77.54 ', NULL, NULL, NULL),
(842, 'Sivakasi', 'Tamil adu', '9.46 ', '77.79 ', NULL, NULL, NULL),
(843, 'Srivilliputtur', 'Tamil adu', '9.52 ', '77.63 ', NULL, NULL, NULL),
(844, 'Tambaram', 'Tamil adu', '12.93 ', '80.12 ', NULL, NULL, NULL),
(845, 'Tenkasi', 'Tamil adu', '8.96 ', '77.31 ', NULL, NULL, NULL),
(846, 'Thanjavur', 'Tamil adu', '10.79 ', '79.13 ', NULL, NULL, NULL),
(847, 'Theni Allinagaram', 'Tamil adu', '10.02 ', '77.48 ', NULL, NULL, NULL),
(848, 'Thiruthangal', 'Tamil adu', '9.48 ', '77.83 ', NULL, NULL, NULL),
(849, 'Thiruvarur', 'Tamil adu', '10.78 ', '79.64 ', NULL, NULL, NULL),
(850, 'Thuthukkudi', 'Tamil adu', '8.81 ', '78.14 ', NULL, NULL, NULL),
(851, 'Tindivanam', 'Tamil adu', '12.24 ', '79.65 ', NULL, NULL, NULL),
(852, 'Tiruchchirappalli', 'Tamil adu', '10.81 ', '78.69 ', NULL, NULL, NULL),
(853, 'Tiruchengode', 'Tamil adu', '11.38 ', '77.90 ', NULL, NULL, NULL),
(854, 'Tirunelveli', 'Tamil adu', '8.73 ', '77.69 ', NULL, NULL, NULL),
(855, 'Tirupathur', 'Tamil adu', '12.50 ', '78.57 ', NULL, NULL, NULL),
(856, 'Tiruppur', 'Tamil adu', '11.09 ', '77.35 ', NULL, NULL, NULL),
(857, 'Tiruvannamalai', 'Tamil adu', '12.24 ', '79.07 ', NULL, NULL, NULL),
(858, 'Tiruvottiyur', 'Tamil adu', '13.16 ', '80.29 ', NULL, NULL, NULL),
(859, 'Udagamandalam', 'Tamil adu', '11.42 ', '76.69 ', NULL, NULL, NULL),
(860, 'Udumalaipettai', 'Tamil adu', '10.58 ', '77.24 ', NULL, NULL, NULL),
(861, 'Valparai', 'Tamil adu', '10.38 ', '76.99 ', NULL, NULL, NULL),
(862, 'Vaniyambadi', 'Tamil adu', '12.69 ', '78.60 ', NULL, NULL, NULL),
(863, 'Velampalaiyam', 'Tamil adu', '11.13', '77.31', NULL, NULL, NULL),
(864, 'Velluru', 'Tamil adu', '12.92 ', '79.13 ', NULL, NULL, NULL),
(865, 'Viluppuram', 'Tamil adu', '11.95 ', '79.49 ', NULL, NULL, NULL),
(866, 'Virappanchatram', 'Tamil adu', '11.40 ', '77.70 ', NULL, NULL, NULL),
(867, 'Virudhachalam', 'Tamil adu', '11.51 ', '79.32 ', NULL, NULL, NULL),
(868, 'Virudunagar', 'Tamil adu', '9.59 ', '77.95 ', NULL, NULL, NULL),
(869, 'Agartala', 'Tripura', '23.84 ', '91.27 ', NULL, NULL, NULL),
(870, 'Agartala MCl', 'Tripura', '23.83', '91.28', NULL, NULL, NULL),
(871, 'Badharghat', 'Tripura', '23.80', '91.27', NULL, NULL, NULL),
(872, 'Agra', 'Uttar Pradesh', '27.19 ', '78.01 ', NULL, NULL, NULL),
(873, 'Aligarh', 'Uttar Pradesh', '27.89 ', '78.06 ', NULL, NULL, NULL),
(874, 'Allahabad', 'Uttar Pradesh', '25.45 ', '81.84 ', NULL, NULL, NULL),
(875, 'Amroha', 'Uttar Pradesh', '28.91 ', '78.46 ', NULL, NULL, NULL),
(876, 'Aonla', 'Uttar Pradesh', '28.28 ', '79.15 ', NULL, NULL, NULL),
(877, 'Auraiya', 'Uttar Pradesh', '26.47 ', '79.50 ', NULL, NULL, NULL),
(878, 'Ayodhya', 'Uttar Pradesh', '26.80 ', '82.20 ', NULL, NULL, NULL),
(879, 'Azamgarh', 'Uttar Pradesh', '26.07 ', '83.18 ', NULL, NULL, NULL),
(880, 'Baheri', 'Uttar Pradesh', '28.78 ', '79.50 ', NULL, NULL, NULL),
(881, 'Bahraich', 'Uttar Pradesh', '27.58 ', '81.59 ', NULL, NULL, NULL),
(882, 'Ballia', 'Uttar Pradesh', '25.76 ', '84.15 ', NULL, NULL, NULL),
(883, 'Balrampur', 'Uttar Pradesh', '27.43 ', '82.18 ', NULL, NULL, NULL),
(884, 'Banda', 'Uttar Pradesh', '25.48 ', '80.33 ', NULL, NULL, NULL),
(885, 'Baraut', 'Uttar Pradesh', '29.10 ', '77.26 ', NULL, NULL, NULL),
(886, 'Bareli', 'Uttar Pradesh', '28.36 ', '79.41 ', NULL, NULL, NULL),
(887, 'Basti', 'Uttar Pradesh', '26.80 ', '82.74 ', NULL, NULL, NULL),
(888, 'Behta Hajipur', 'Uttar Pradesh', '28.72', '77.30', NULL, NULL, NULL),
(889, 'Bela', 'Uttar Pradesh', '25.92 ', '81.99 ', NULL, NULL, NULL),
(890, 'Bhadohi', 'Uttar Pradesh', '25.40 ', '82.56 ', NULL, NULL, NULL),
(891, 'Bijnor', 'Uttar Pradesh', '29.38 ', '78.13 ', NULL, NULL, NULL),
(892, 'Bisalpur', 'Uttar Pradesh', '28.30 ', '79.80 ', NULL, NULL, NULL),
(893, 'Biswan', 'Uttar Pradesh', '27.50 ', '81.00 ', NULL, NULL, NULL),
(894, 'Budaun', 'Uttar Pradesh', '28.04 ', '79.12 ', NULL, NULL, NULL),
(895, 'Bulandshahr', 'Uttar Pradesh', '28.41 ', '77.85 ', NULL, NULL, NULL),
(896, 'Chandausi', 'Uttar Pradesh', '28.46 ', '78.78 ', NULL, NULL, NULL),
(897, 'Chandpur', 'Uttar Pradesh', '29.14 ', '78.27 ', NULL, NULL, NULL),
(898, 'Chhibramau', 'Uttar Pradesh', '27.15 ', '79.52 ', NULL, NULL, NULL),
(899, 'Chitrakut Dham', 'Uttar Pradesh', '25.20 ', '80.84 ', NULL, NULL, NULL),
(900, 'Dadri', 'Uttar Pradesh', '28.57 ', '77.55 ', NULL, NULL, NULL),
(901, 'Deoband', 'Uttar Pradesh', '29.70 ', '77.67 ', NULL, NULL, NULL),
(902, 'Deoria', 'Uttar Pradesh', '26.51 ', '83.78 ', NULL, NULL, NULL),
(903, 'Etah', 'Uttar Pradesh', '27.57 ', '78.64 ', NULL, NULL, NULL),
(904, 'Etawah', 'Uttar Pradesh', '26.78 ', '79.01 ', NULL, NULL, NULL),
(905, 'Faizabad', 'Uttar Pradesh', '26.78 ', '82.14 ', NULL, NULL, NULL),
(906, 'Faridpur', 'Uttar Pradesh', '28.22 ', '79.53 ', NULL, NULL, NULL),
(907, 'Farrukhabad', 'Uttar Pradesh', '27.40 ', '79.57 ', NULL, NULL, NULL),
(908, 'Fatehpur', 'Uttar Pradesh', '25.93 ', '80.81 ', NULL, NULL, NULL),
(909, 'Firozabad', 'Uttar Pradesh', '27.15 ', '78.39 ', NULL, NULL, NULL),
(910, 'Gajraula', 'Uttar Pradesh', '28.85 ', '78.23 ', NULL, NULL, NULL),
(911, 'Ganga Ghat', 'Uttar Pradesh', '26.52 ', '80.45 ', NULL, NULL, NULL),
(912, 'Gangoh', 'Uttar Pradesh', '29.77 ', '77.25 ', NULL, NULL, NULL),
(913, 'Ghaziabad', 'Uttar Pradesh', '28.66 ', '77.41 ', NULL, NULL, NULL),
(914, 'Ghazipur', 'Uttar Pradesh', '25.59 ', '83.59 ', NULL, NULL, NULL),
(915, 'Gola Gokarannath', 'Uttar Pradesh', '28.08 ', '80.47 ', NULL, NULL, NULL),
(916, 'Gonda', 'Uttar Pradesh', '27.14 ', '81.95 ', NULL, NULL, NULL),
(917, 'Gorakhpur', 'Uttar Pradesh', '26.76 ', '83.36 ', NULL, NULL, NULL),
(918, 'Hapur', 'Uttar Pradesh', '28.73 ', '77.77 ', NULL, NULL, NULL),
(919, 'Hardoi', 'Uttar Pradesh', '27.42 ', '80.12 ', NULL, NULL, NULL),
(920, 'Hasanpur', 'Uttar Pradesh', '28.72 ', '78.28 ', NULL, NULL, NULL),
(921, 'Hathras', 'Uttar Pradesh', '27.60 ', '78.04 ', NULL, NULL, NULL),
(922, 'Jahangirabad', 'Uttar Pradesh', '28.42 ', '78.10 ', NULL, NULL, NULL),
(923, 'Jalaun', 'Uttar Pradesh', '26.15 ', '79.35 ', NULL, NULL, NULL),
(924, 'Jaunpur', 'Uttar Pradesh', '25.76 ', '82.69 ', NULL, NULL, NULL),
(925, 'Jhansi', 'Uttar Pradesh', '25.45 ', '78.56 ', NULL, NULL, NULL),
(926, 'Kadi', 'Uttar Pradesh', '23.31 ', '72.33 ', NULL, NULL, NULL),
(927, 'Kairana', 'Uttar Pradesh', '29.40 ', '77.20 ', NULL, NULL, NULL),
(928, 'Kannauj', 'Uttar Pradesh', '27.06 ', '79.91 ', NULL, NULL, NULL),
(929, 'Kanpur', 'Uttar Pradesh', '26.47 ', '80.33 ', NULL, NULL, NULL),
(930, 'Kanpur Cantonment', 'Uttar Pradesh', '26.50 ', '80.28 ', NULL, NULL, NULL),
(931, 'Kasganj', 'Uttar Pradesh', '27.81 ', '78.63 ', NULL, NULL, NULL),
(932, 'Khatauli', 'Uttar Pradesh', '29.28 ', '77.72 ', NULL, NULL, NULL),
(933, 'Khora', 'Uttar Pradesh', '28.75', '77.39', NULL, NULL, NULL),
(934, 'Khurja', 'Uttar Pradesh', '28.26 ', '77.85 ', NULL, NULL, NULL),
(935, 'Kiratpur', 'Uttar Pradesh', '29.52 ', '78.20 ', NULL, NULL, NULL),
(936, 'Kosi Kalan', 'Uttar Pradesh', '27.80 ', '77.44 ', NULL, NULL, NULL),
(937, 'Laharpur', 'Uttar Pradesh', '27.72 ', '80.90 ', NULL, NULL, NULL),
(938, 'Lakhimpur', 'Uttar Pradesh', '27.95 ', '80.78 ', NULL, NULL, NULL),
(939, 'Lakhnau', 'Uttar Pradesh', '26.85 ', '80.92 ', NULL, NULL, NULL),
(940, 'Lakhnau Cantonment', 'Uttar Pradesh', '26.81 ', '80.97 ', NULL, NULL, NULL),
(941, 'Lalitpur', 'Uttar Pradesh', '24.70 ', '78.41 ', NULL, NULL, NULL),
(942, 'Loni', 'Uttar Pradesh', '28.75 ', '77.28 ', NULL, NULL, NULL),
(943, 'Mahoba', 'Uttar Pradesh', '25.30 ', '79.87 ', NULL, NULL, NULL),
(944, 'Mainpuri', 'Uttar Pradesh', '27.24 ', '79.02 ', NULL, NULL, NULL),
(945, 'Mathura', 'Uttar Pradesh', '27.50 ', '77.68 ', NULL, NULL, NULL),
(946, 'Mau', 'Uttar Pradesh', '25.96 ', '83.56 ', NULL, NULL, NULL),
(947, 'Mauranipur', 'Uttar Pradesh', '25.24 ', '79.13 ', NULL, NULL, NULL),
(948, 'Mawana', 'Uttar Pradesh', '29.11 ', '77.91 ', NULL, NULL, NULL),
(949, 'Mirat', 'Uttar Pradesh', '28.99 ', '77.70 ', NULL, NULL, NULL),
(950, 'Mirat Cantonment', 'Uttar Pradesh', '29.02 ', '77.67 ', NULL, NULL, NULL),
(951, 'Mirzapur', 'Uttar Pradesh', '25.16 ', '82.56 ', NULL, NULL, NULL),
(952, 'Modinagar', 'Uttar Pradesh', '28.92 ', '77.62 ', NULL, NULL, NULL),
(953, 'Moradabad', 'Uttar Pradesh', '28.84 ', '78.76 ', NULL, NULL, NULL),
(954, 'Mubarakpur', 'Uttar Pradesh', '26.09 ', '83.28 ', NULL, NULL, NULL),
(955, 'Mughal Sarai', 'Uttar Pradesh', '25.30 ', '83.12 ', NULL, NULL, NULL),
(956, 'Muradnagar', 'Uttar Pradesh', '28.78 ', '77.50 ', NULL, NULL, NULL),
(957, 'Muzaffarnagar', 'Uttar Pradesh', '29.48 ', '77.69 ', NULL, NULL, NULL),
(958, 'Nagina', 'Uttar Pradesh', '29.45 ', '78.43 ', NULL, NULL, NULL),
(959, 'Najibabad', 'Uttar Pradesh', '29.62 ', '78.33 ', NULL, NULL, NULL),
(960, 'Nawabganj', 'Uttar Pradesh', '26.94 ', '81.19 ', NULL, NULL, NULL),
(961, 'Noida', 'Uttar Pradesh', '28.58 ', '77.33 ', NULL, NULL, NULL),
(962, 'Obra', 'Uttar Pradesh', '24.42 ', '82.98 ', NULL, NULL, NULL),
(963, 'Orai', 'Uttar Pradesh', '25.99 ', '79.45 ', NULL, NULL, NULL),
(964, 'Pilibhit', 'Uttar Pradesh', '28.64 ', '79.81 ', NULL, NULL, NULL),
(965, 'Pilkhuwa', 'Uttar Pradesh', '28.72 ', '77.65 ', NULL, NULL, NULL),
(966, 'Rae Bareli', 'Uttar Pradesh', '26.23 ', '81.23 ', NULL, NULL, NULL),
(967, 'Ramgarh agla Kothi', 'Uttar Pradesh', '27.57', '80.09', NULL, NULL, NULL),
(968, 'Rampur', 'Uttar Pradesh', '28.82 ', '79.02 ', NULL, NULL, NULL),
(969, 'Rath', 'Uttar Pradesh', '25.58 ', '79.57 ', NULL, NULL, NULL),
(970, 'Renukut', 'Uttar Pradesh', '24.20 ', '83.03 ', NULL, NULL, NULL),
(971, 'Saharanpur', 'Uttar Pradesh', '29.97 ', '77.54 ', NULL, NULL, NULL),
(972, 'Sahaswan', 'Uttar Pradesh', '28.08 ', '78.74 ', NULL, NULL, NULL),
(973, 'Sambhal', 'Uttar Pradesh', '28.59 ', '78.56 ', NULL, NULL, NULL),
(974, 'Sandila', 'Uttar Pradesh', '27.08 ', '80.52 ', NULL, NULL, NULL),
(975, 'Shahabad', 'Uttar Pradesh', '27.65 ', '79.95 ', NULL, NULL, NULL),
(976, 'Shahjahanpur', 'Uttar Pradesh', '27.88 ', '79.90 ', NULL, NULL, NULL),
(977, 'Shamli', 'Uttar Pradesh', '29.46 ', '77.31 ', NULL, NULL, NULL),
(978, 'Sherkot', 'Uttar Pradesh', '29.35 ', '78.58 ', NULL, NULL, NULL),
(979, 'Shikohabad', 'Uttar Pradesh', '27.12 ', '78.58 ', NULL, NULL, NULL),
(980, 'Sikandarabad', 'Uttar Pradesh', '28.44 ', '77.69 ', NULL, NULL, NULL),
(981, 'Sitapur', 'Uttar Pradesh', '27.57 ', '80.69 ', NULL, NULL, NULL),
(982, 'Sukhmalpur izamabad', 'Uttar Pradesh', '27.17', '78.40', NULL, NULL, NULL),
(983, 'Sultanpur', 'Uttar Pradesh', '26.26 ', '82.06 ', NULL, NULL, NULL),
(984, 'Tanda', 'Uttar Pradesh', '26.55 ', '82.65 ', NULL, NULL, NULL),
(985, 'Tilhar', 'Uttar Pradesh', '27.98 ', '79.73 ', NULL, NULL, NULL),
(986, 'Tundla', 'Uttar Pradesh', '27.20 ', '78.28 ', NULL, NULL, NULL),
(987, 'Ujhani', 'Uttar Pradesh', '28.02 ', '79.02 ', NULL, NULL, NULL),
(988, 'Unnao', 'Uttar Pradesh', '26.55 ', '80.49 ', NULL, NULL, NULL),
(989, 'Varanasi', 'Uttar Pradesh', '25.32 ', '83.01 ', NULL, NULL, NULL),
(990, 'Vrindavan', 'Uttar Pradesh', '27.58 ', '77.70 ', NULL, NULL, NULL),
(991, 'Dehra Dun', 'Uttaranchal', '30.34 ', '78.05 ', NULL, NULL, NULL),
(992, 'Dehra Dun Cantonment', 'Uttaranchal', '30.34 ', '77.97 ', NULL, NULL, NULL),
(993, 'Gola Range', 'Uttaranchal', '28.08', '80.46', NULL, NULL, NULL),
(994, 'Haldwani', 'Uttaranchal', '29.23 ', '79.52 ', NULL, NULL, NULL),
(995, 'Haridwar', 'Uttaranchal', '29.98 ', '78.16 ', NULL, NULL, NULL),
(996, 'Kashipur', 'Uttaranchal', '29.22 ', '78.96 ', NULL, NULL, NULL),
(997, 'Pithoragarh', 'Uttaranchal', '29.58 ', '80.22 ', NULL, NULL, NULL),
(998, 'Rishikesh', 'Uttaranchal', '30.12 ', '78.29 ', NULL, NULL, NULL),
(999, 'Rudrapur', 'Uttaranchal', '28.98', '79.41', NULL, NULL, NULL),
(1000, 'Rurki', 'Uttaranchal', '29.87 ', '77.89 ', NULL, NULL, NULL),
(1001, 'Mumbai', NULL, '19.07', '72.87', '2022-08-18 15:53:34', '2022-08-18 15:53:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` json NOT NULL,
  `custom_properties` json NOT NULL,
  `responsive_images` json NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Company', 1, '272e48e3-73a6-4097-8ae5-f25c38924623', 'logo', 'post', 'post.png', 'image/png', 'public', 'public', 4323, '[]', '{\"generated_conversions\": {\"thumb\": true}}', '[]', 1, '2022-01-27 22:25:24', '2022-01-27 22:25:26'),
(2, 'App\\Company', 2, '1f6682ce-d66a-486b-8458-9820c802380a', 'logo', 'post', 'post.png', 'image/png', 'public', 'public', 4323, '[]', '{\"generated_conversions\": {\"thumb\": true}}', '[]', 2, '2022-01-27 22:25:26', '2022-01-27 22:25:26'),
(3, 'App\\Company', 3, '8d40b336-5e21-4703-9bca-c6c7e525e531', 'logo', 'post', 'post.png', 'image/png', 'public', 'public', 4323, '[]', '{\"generated_conversions\": {\"thumb\": true}}', '[]', 3, '2022-01-27 22:25:26', '2022-01-27 22:25:26'),
(4, 'App\\Company', 4, 'd66e12a4-994f-4e60-a63a-b13503ab9e30', 'logo', 'post', 'post.png', 'image/png', 'public', 'public', 4323, '[]', '{\"generated_conversions\": {\"thumb\": true}}', '[]', 4, '2022-01-27 22:25:26', '2022-01-27 22:25:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_10_16_000001_create_media_table', 1),
(8, '2019_10_16_000002_create_permissions_table', 1),
(9, '2019_10_16_000003_create_roles_table', 1),
(10, '2019_10_16_000004_create_users_table', 1),
(11, '2019_10_16_000005_create_categories_table', 1),
(12, '2019_10_16_000006_create_locations_table', 1),
(13, '2019_10_16_000007_create_companies_table', 1),
(14, '2019_10_16_000008_create_jobs_table', 1),
(15, '2019_10_16_000009_create_permission_role_pivot_table', 1),
(16, '2019_10_16_000010_create_role_user_pivot_table', 1),
(17, '2019_10_16_000011_create_category_job_pivot_table', 1),
(18, '2019_10_16_000012_add_relationship_fields_to_jobs_table', 1),
(19, '2022_01_21_044101_create_profiles_table', 2),
(20, '2022_02_08_050630_create_contracts_table', 2),
(21, '2022_02_08_051833_create_contractrequests_table', 2),
(22, '2018_03_18_220416_create_photos_table', 3),
(23, '2022_02_11_111108_create_albums_table', 3),
(24, '2022_02_23_110631_create_wishlists_table', 4),
(25, '2022_02_24_060114_create_albums_table', 5),
(26, '2022_02_24_060220_create_photos_table', 5),
(27, '2022_02_24_104907_create_category_profile_table', 6),
(28, '2022_03_04_084643_create_equipment_table', 7),
(29, '2022_03_07_070804_create_wallets_table', 8),
(30, '2022_03_10_103054_create_items_table', 8),
(31, '2022_03_14_120452_create_items_table', 9),
(32, '2022_03_17_111840_create_signatures_table', 9),
(33, '2022_03_17_112738_create_signatures_table', 10),
(34, '2022_03_24_101110_create_rewards_table', 11),
(35, '2022_03_24_162734_create_quotes_table', 12);

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('d4d0f51f-5512-4046-9160-3c8d5ef1ce7d', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"ClientContract Signed by client\"}', NULL, '2023-01-25 11:08:57', '2023-01-25 11:08:57'),
('ca1d3cb0-2e72-437f-b650-c7c45337ba62', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has requested for estimate\"}', NULL, '2023-01-16 15:19:52', '2023-01-16 15:19:52'),
('b7021876-dd70-4302-946d-d96681bf1fe2', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Artist has sent his estimate\"}', NULL, '2023-01-16 15:14:43', '2023-01-16 15:14:43'),
('b55f56c5-44a5-4d7e-a920-53ea5d49052d', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Artist has sent his estimate\"}', NULL, '2023-01-16 15:10:53', '2023-01-16 15:10:53'),
('24ac1b71-1f51-4d99-bea2-08af6e81b48f', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-16 14:50:55', '2023-01-16 14:50:55'),
('148616ac-eb48-489d-a29a-1b0928cf9735', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-16 14:48:32', '2023-01-16 14:48:32'),
('54a96ef9-b04f-411e-b348-7a20b3d11990', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:51:20', '2023-01-14 13:51:20'),
('475d446b-dbfd-49c6-9b24-53d2cbbfd08a', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:50:43', '2023-01-14 13:50:43'),
('c2ff4f9f-b293-4cc5-b9e6-d1b6888cb790', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:49:39', '2023-01-14 13:49:39'),
('79ec1a4b-19d2-4035-81ef-81c00b84c5c2', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:48:10', '2023-01-14 13:48:10'),
('beefe209-c110-4b6f-93b5-11d87250edaa', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:44:14', '2023-01-14 13:44:14'),
('2a2d97e7-ac89-4bca-96cc-c72de223e186', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:43:21', '2023-01-14 13:43:21'),
('f8bc0602-ff47-4a4c-b4ae-8fefc9d857a9', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-14 13:26:31', '2023-01-14 13:26:31'),
('cc23414b-76cf-4f1f-bcde-d8097962241e', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-14 11:13:23', '2023-01-14 11:13:23'),
('fac536dc-33d8-445e-9021-493fdf225dd7', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 15:07:13', '2023-01-12 15:07:13'),
('fdd5f52c-c090-4024-a347-aec8b8dad6db', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 15:06:04', '2023-01-12 15:06:04'),
('53e90cc0-4863-48a6-bc0f-af45d663cd13', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 15:01:21', '2023-01-12 15:01:21'),
('ab0435d1-d40e-4f4b-8eb8-6e6570156db9', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 14:55:12', '2023-01-12 14:55:12'),
('9f115b11-9691-40eb-9493-4724c6434608', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 14:52:10', '2023-01-12 14:52:10'),
('c6f0da84-6850-48ad-8a1a-5bb4ea5c19c0', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 14:39:40', '2023-01-12 14:39:40'),
('952dd01c-3b06-48da-9ffb-4b58a0fee033', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 14:25:47', '2023-01-12 14:25:47'),
('3c10fe9e-cdad-44d9-92bd-be64553e0305', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 12:49:58', '2023-01-12 12:49:58'),
('58e70f18-755f-40e5-a739-fa206ed39bf6', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 12:46:35', '2023-01-12 12:46:35'),
('1905372b-153d-4265-bb20-8b96003fcd78', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 12:16:57', '2023-01-12 12:16:57'),
('44eaec13-f541-4f26-a7d8-1474f31460c2', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client Send you quotation of 45000\"}', NULL, '2023-01-12 12:15:33', '2023-01-12 12:15:33'),
('a280a62d-97ee-4eee-ae86-1e1c2b3ca68e', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-12 11:02:21', '2023-01-12 11:02:21'),
('59782fc2-9df4-4c4b-863c-1f0637048024', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 10:55:35', '2023-01-12 10:55:35'),
('f938dab3-9480-41bf-ac8c-538f2c8c7b0b', 'App\\Notifications\\TaskComplete', 'App\\User', 2, '{\"data\":\"Client has accepted your Quotation\"}', NULL, '2023-01-12 10:52:36', '2023-01-12 10:52:36'),
('62417347-1ff4-4a54-9a87-01f723e17830', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 10:51:53', '2023-01-12 10:51:53'),
('d8a16baf-3be8-4833-8769-3be6fd74a0a2', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 55000\"}', NULL, '2023-01-12 10:47:32', '2023-01-12 10:47:32'),
('5591ec4c-b1c4-4601-9571-0bd756638b7e', 'App\\Notifications\\TaskComplete', 'App\\User', 256, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 10:46:14', '2023-01-12 10:46:14'),
('b694fd94-b93b-46b7-8e71-86a91df995fa', 'App\\Notifications\\TaskComplete', 'App\\User', 256, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 10:42:31', '2023-01-12 10:42:31'),
('f331522c-f1a9-43a9-9bbb-af0da2f48fec', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-12 10:33:51', '2023-01-12 10:33:51'),
('3552d9ec-265b-46bd-a58b-e0f0878208ed', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-11 14:51:56', '2023-01-11 14:51:56'),
('308b141a-c93f-45c6-93da-997c0eabcc28', 'App\\Notifications\\TaskComplete', 'App\\User', 3, '{\"data\":\"Client Send you quotation of 50000\"}', NULL, '2023-01-11 14:51:42', '2023-01-11 14:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `pack_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(191) NOT NULL,
  `genre1` int(191) NOT NULL,
  `pics1` int(191) NOT NULL,
  `genre2` int(191) NOT NULL,
  `pics2` int(191) NOT NULL,
  `coins` int(191) NOT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `pack_name`, `message`, `amount`, `genre1`, `pics1`, `genre2`, `pics2`, `coins`, `duration`, `created_at`, `updated_at`) VALUES
(1, 'Basic Plan (free)', 'Go Pro, Best for the individuals', 1000, 3, 20, 7, 5, 300, '1 Year', '2022-05-25 15:41:22', '2022-05-27 11:42:57'),
(2, 'Business', 'Highest selling package features', 2000, 5, 30, 10, 7, 500, '1 Year', '2022-05-25 15:43:21', '2022-05-25 15:43:21'),
(3, 'Unlimita', 'Drive crazy, unlimited on the go', 3000, 8, 40, 12, 10, 750, '1 Year', '2022-05-25 15:44:26', '2022-05-25 15:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rahul@coderix.io', '$2y$10$JveIeMxphAFUf9wbGgfTHO3BYl7aihdwpynsOJlPrFAFGOd3tGZXy', '2022-04-21 16:55:59'),
('coderix.pc3@gmail.com', '$2y$10$SsZ0AtkhHr77ml9HB5pfZO/qFBgw34vU7nLNP6uATTYrikSbNRhnO', '2022-07-28 14:50:29'),
('support@coderix.io', '$2y$10$XQ.GOxoQJCeTtcSk9flip.H8343LPi9777HQ8fqAV33.yzDcHK/m6', '2022-08-06 09:55:58'),
('admin@admin.com', '$2y$10$WrsmVUSeLAf1QysjgtfprerGXVe9qJgKRUeuzIy8zDtACeODAcxgi', '2022-08-09 11:48:21'),
('abhi144k@gmail.com', '$2y$10$SzZe.ubPGqvjuG8155ivtO8GbwBZAO5ZSx9diq8LdniXRSQBCpceW', '2022-11-23 10:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'category_create', NULL, NULL, NULL),
(18, 'category_edit', NULL, NULL, NULL),
(19, 'category_show', NULL, NULL, NULL),
(20, 'category_delete', NULL, NULL, NULL),
(21, 'category_access', NULL, NULL, NULL),
(22, 'location_create', NULL, NULL, NULL),
(23, 'location_edit', NULL, NULL, NULL),
(24, 'location_show', NULL, NULL, NULL),
(25, 'location_delete', NULL, NULL, NULL),
(26, 'location_access', NULL, NULL, NULL),
(27, 'company_create', NULL, NULL, NULL),
(28, 'company_edit', NULL, NULL, NULL),
(29, 'company_show', NULL, NULL, NULL),
(30, 'company_delete', NULL, NULL, NULL),
(31, 'company_access', NULL, NULL, NULL),
(32, 'job_create', NULL, NULL, NULL),
(33, 'job_edit', NULL, NULL, NULL),
(34, 'job_show', NULL, NULL, NULL),
(35, 'job_delete', NULL, NULL, NULL),
(36, 'job_access', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(1, 31),
(1, 32),
(1, 33),
(1, 34),
(1, 35),
(1, 36),
(2, 36),
(3, 36),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24),
(4, 25),
(4, 26),
(4, 27),
(4, 28),
(4, 29),
(4, 30),
(4, 31),
(4, 32),
(4, 33),
(4, 34),
(4, 35),
(4, 36);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `user_id` int(25) DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `user_id`, `photo`, `created_at`, `updated_at`) VALUES
(14, 9, 2, '1668504131.jpg', NULL, NULL),
(15, 9, 2, 'jarritos-mexican-soda-MCdkQQicRD4-unsplash.jpg', NULL, NULL),
(21, 9, 2, 'alleksana-4264334.jpg', NULL, NULL),
(23, 12, 114, 'WhatsApp Image 2022-07-25 at 9.58.48 AM.jpeg', NULL, NULL),
(24, 12, 114, 'WhatsApp Image 2022-07-25 at 9.58.50 AM.jpeg', NULL, NULL),
(430, 38, 134, 'IMG_3084_3 crop wm full.jpg', NULL, NULL),
(426, 25, 2, 'pexels-alberta-studios-8967703.jpg', NULL, NULL),
(33, 14, 141, 'anand-dandekar-1532771.jpg', NULL, NULL),
(34, 14, 141, 'alleksana-4264334.jpg', NULL, NULL),
(35, 14, 141, 'anand-dandekar-1532771.jpg', NULL, NULL),
(36, 14, 141, 'eberhard-grossgasteiger-1612353.jpg', NULL, NULL),
(37, 14, 141, 'guglielmo-cancelli-11137192.jpg', NULL, NULL),
(38, 14, 141, 'katie-burandt-1212693.jpg', NULL, NULL),
(39, 14, 141, 'max-andrey-1366630.jpg', NULL, NULL),
(40, 14, 141, 'mingsong-zhai-6513744.jpg', NULL, NULL),
(1220, 35, 2, '1673352440.jpg', NULL, NULL),
(1218, 4, 2, '1673352241.jpg', NULL, NULL),
(1219, 4, 2, '1673352242.jpg', NULL, NULL),
(1215, 4, 2, '1673352223.jpg', NULL, NULL),
(1216, 4, 2, '1673352224.jpg', NULL, NULL),
(1217, 4, 2, '1673352225.jpg', NULL, NULL),
(65, 24, 2, 'alleksana-4264334.jpg', NULL, NULL),
(66, 24, 2, 'anand-dandekar-1532771.jpg', NULL, NULL),
(67, 24, 2, 'eberhard-grossgasteiger-1612353.jpg', NULL, NULL),
(68, 24, 2, 'guglielmo-cancelli-11137192.jpg', NULL, NULL),
(69, 24, 2, 'katie-burandt-1212693.jpg', NULL, NULL),
(70, 24, 2, 'max-andrey-1366630.jpg', NULL, NULL),
(80, 25, 2, 'alleksana-4264334.jpg', NULL, NULL),
(81, 25, 2, 'anand-dandekar-1532771.jpg', NULL, NULL),
(83, 25, 2, 'guglielmo-cancelli-11137192.jpg', NULL, NULL),
(84, 25, 2, 'katie-burandt-1212693.jpg', NULL, NULL),
(1223, 35, 2, '1673353090.jpg', NULL, NULL),
(1151, 5, 2, '1670989257.jpg', NULL, NULL),
(1150, 5, 2, '1670989231.jpg', NULL, NULL),
(1147, 5, 2, '1670989229.jpg', NULL, NULL),
(695, 7, 2, '1668504131.jpg', NULL, NULL),
(652, NULL, NULL, 'imad-clicks-g9wFEJv2pA4-unsplash (1) (1).jpg', '2022-11-14 11:09:27', '2022-11-14 11:09:27'),
(708, 7, 2, '1668511337.jpg', NULL, NULL),
(671, 7, 2, '1668504018.jpg', NULL, NULL),
(591, 33, 2, '1666250528.jpg', NULL, NULL),
(592, 33, 2, '1666251548.jpg', NULL, NULL),
(597, NULL, 2, '1667367754475abhijit-chirde-bc8XJENo2eE-unsplash.jpg', '2022-11-02 11:12:36', '2022-11-02 11:12:36'),
(440, 42, 134, 'IMG_7009.JPG', NULL, NULL),
(442, 42, 134, 'IMG_7097.JPG', NULL, NULL),
(441, 42, 134, 'IMG_7046.JPG', NULL, NULL),
(709, 7, 2, '1668512115.jpg', NULL, NULL),
(710, 7, 2, '1668512552.jpg', NULL, NULL),
(247, 26, 2, 'pexels-sonny-sixteen-7239626.jpg', NULL, NULL),
(248, 26, 2, 'pexels-susanne-jutzeler-sujufoto-2099737.jpg', NULL, NULL),
(249, 26, 2, 'pexels-tatjana-8160785.jpg', NULL, NULL),
(250, 26, 2, 'pexels-ykang-6201787.jpg', NULL, NULL),
(251, 26, 2, 'pexels-анатолий-стафичук-6145089.jpg', NULL, NULL),
(252, 26, 2, 'pexels-елена-кузьмина-8746184.jpg', NULL, NULL),
(253, 26, 2, 'pexels-мария-ведерникова-9737369.jpg', NULL, NULL),
(254, 25, 2, 'pexels-ehsan-ahmadnejad-7872652.jpg', NULL, NULL),
(255, 25, 2, 'pexels-graphics-point-6162955.jpg', NULL, NULL),
(256, 27, 2, 'pexels-susanne-jutzeler-sujufoto-2099737.jpg', NULL, NULL),
(257, 27, 2, 'pexels-alberta-studios-8967703.jpg', NULL, NULL),
(258, 27, 2, 'pexels-boys-in-bristol-photography-9827013.jpg', NULL, NULL),
(259, 27, 2, 'pexels-buse-korkmaz-7829567.jpg', NULL, NULL),
(260, 27, 2, 'pexels-cherisha-norman-5112198.jpg', NULL, NULL),
(261, 27, 2, 'pexels-dids-7553859.jpg', NULL, NULL),
(262, 27, 2, 'pexels-dominika-roseclay-2598365.jpg', NULL, NULL),
(1221, 35, 2, '1673352442.jpg', NULL, NULL),
(1222, 35, 2, '1673352443.jpg', NULL, NULL),
(598, NULL, 2, '1667367790336New Project (42).jpg', '2022-11-02 11:13:11', '2022-11-02 11:13:11'),
(668, 7, 2, '1668503912.jpg', NULL, NULL),
(669, 7, 2, '1668503912.jpg', NULL, NULL),
(670, 7, 2, '1668503914.jpg', NULL, NULL),
(931, 34, 2, '1669787631.jpg', '2022-11-30 11:23:51', '2022-11-30 11:23:51'),
(930, 34, 2, 'benmoses-m-CNJN08OhUIE-unsplash.jpg', '2022-11-30 11:14:57', '2022-11-30 11:14:57'),
(689, 7, 2, '1668504027.jpg', NULL, NULL),
(688, 7, 2, '1668504027.jpg', NULL, NULL),
(687, 7, 2, '1668504026.jpg', NULL, NULL),
(686, 7, 2, '1668504026.jpg', NULL, NULL),
(685, 7, 2, '1668504026.jpg', NULL, NULL),
(365, 7, 2, 'pexels-marianna-ole-757889.jpg', NULL, NULL),
(684, 7, 2, '1668504026.jpg', NULL, NULL),
(368, 7, 2, 'pexels-neil-yonamine-9588298.jpg', NULL, NULL),
(369, 7, 2, 'pexels-nousheen-perween-7955142.jpg', NULL, NULL),
(370, 7, 2, 'pexels-paulo-arthur-nogueira-7372273.jpg', NULL, NULL),
(682, 7, 2, '1668504026.jpg', NULL, NULL),
(373, 7, 2, 'pexels-neil-yonamine-9588298.jpg', NULL, NULL),
(374, 7, 2, 'pexels-nousheen-perween-7955142.jpg', NULL, NULL),
(681, 7, 2, '1668504025.jpg', NULL, NULL),
(680, 7, 2, '1668504025.jpg', NULL, NULL),
(679, 7, 2, '1668504024.jpg', NULL, NULL),
(678, 7, 2, '1668504024.jpg', NULL, NULL),
(677, 7, 2, '1668504022.jpg', NULL, NULL),
(676, 7, 2, '1668504021.jpg', NULL, NULL),
(675, 7, 2, '1668504020.jpg', NULL, NULL),
(674, 7, 2, '1668504020.jpg', NULL, NULL),
(673, 7, 2, '1668504019.jpg', NULL, NULL),
(672, 7, 2, '1668504018.jpg', NULL, NULL),
(1146, 5, 2, '1670989228.jpg', NULL, NULL),
(1144, 5, 2, '1670989227.jpg', NULL, NULL),
(1145, 5, 2, '1670989227.jpg', NULL, NULL),
(1148, 5, 2, '1670989229.jpg', NULL, NULL),
(1204, 54, 476, '1671815745.jpg', NULL, NULL),
(1149, 5, 2, '1670989230.jpg', NULL, NULL),
(1101, 4, 2, '1670473672.JPG', NULL, NULL),
(427, 25, 2, 'pexels-boys-in-bristol-photography-9827013.jpg', NULL, NULL),
(428, 25, 2, 'pexels-buse-korkmaz-7829567.jpg', NULL, NULL),
(429, 25, 2, 'pexels-cherisha-norman-5112198.jpg', NULL, NULL),
(431, 38, 134, 'IMG_3622_3 wm.jpg', NULL, NULL),
(432, 38, 134, 'IMG_4596_3 wm.jpg', NULL, NULL),
(433, 38, 134, 'IMG_4665_5 wm_3.jpg', NULL, NULL),
(434, 38, 134, 'IMG_4743_1 final 2 color option wm.jpg', NULL, NULL),
(435, 38, 134, 'IMG_8102_1.jpg', NULL, NULL),
(436, 38, 134, 'IMG_8183_2.jpg', NULL, NULL),
(437, 38, 134, 'IMG_8375_1.jpg', NULL, NULL),
(443, 42, 134, 'IMG_7267.JPG', NULL, NULL),
(444, 42, 134, 'IMG_7345.JPG', NULL, NULL),
(445, 42, 134, 'IMG_7372.JPG', NULL, NULL),
(446, 42, 134, 'IMG_7414.JPG', NULL, NULL),
(447, 42, 134, 'IMG_7449.JPG', NULL, NULL),
(448, 42, 134, 'IMG_7528.JPG', NULL, NULL),
(449, 42, 134, 'IMG_7641.JPG', NULL, NULL),
(450, 43, 134, 'DJI_0061_1.jpg', NULL, NULL),
(451, 43, 134, 'DJI_0610_2.jpg', NULL, NULL),
(452, 43, 134, 'IMG_5602_1.jpg', NULL, NULL),
(453, 43, 134, 'IMG_6046_1.jpg', NULL, NULL),
(454, 43, 134, 'IMG_6078_1.jpg', NULL, NULL),
(455, 43, 134, 'IMG_6171_1.jpg', NULL, NULL),
(456, 43, 134, 'IMG_6786_1.jpg', NULL, NULL),
(457, 43, 134, 'IMG_6818_1.jpg', NULL, NULL),
(458, 43, 134, 'IMG_7092_1.jpg', NULL, NULL),
(459, 43, 134, 'IMG_7261_1.jpg', NULL, NULL),
(460, 43, 134, 'IMG_7309_1.jpg', NULL, NULL),
(461, 43, 134, 'IMG_7346_1.jpg', NULL, NULL),
(462, 43, 134, 'IMG_7428_1.jpg', NULL, NULL),
(463, 43, 134, 'IMG_7915_1.jpg', NULL, NULL),
(464, 41, 257, 'alleksana-4264334.jpg', NULL, NULL),
(465, 41, 257, 'anand-dandekar-1532771.jpg', NULL, NULL),
(466, 41, 257, 'eberhard-grossgasteiger-1612353.jpg', NULL, NULL),
(467, 41, 257, 'guglielmo-cancelli-11137192.jpg', NULL, NULL),
(659, 7, 2, '1668492112.jpg', NULL, NULL),
(595, NULL, NULL, '1667367560714abhijit-chirde-bc8XJENo2eE-unsplash.jpg', '2022-11-02 11:09:22', '2022-11-02 11:09:22'),
(596, NULL, 2, '1667367725942New Project (41).jpg', '2022-11-02 11:12:07', '2022-11-02 11:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contract_id` int(11) DEFAULT NULL,
  `quotes_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `artist_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `unit_price` int(255) DEFAULT NULL,
  `price` int(255) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `contract_id`, `quotes_id`, `artist_id`, `user_id`, `unit_price`, `price`, `qty`, `description`, `created_at`, `updated_at`) VALUES
(1, 'photographer', NULL, '2', 2, 3, 55000, 55000, 1, 'photographer', '2022-12-23 16:04:57', '2022-12-23 16:04:57'),
(2, 'camera', NULL, '2', 2, 3, 5000, 5000, 1, 'kodak', '2022-12-23 16:04:57', '2022-12-23 16:04:57'),
(3, 'camera', NULL, '9', 2, 3, 1000, 1000, 1, 'kodak', '2023-01-16 14:51:45', '2023-01-16 14:51:45'),
(4, 'stand', NULL, '9', 2, 3, 500, 500, 1, 'kodak', '2023-01-16 14:51:45', '2023-01-16 14:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` int(10) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '0',
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `userid` int(10) UNSIGNED NOT NULL,
  `location_id` int(10) UNSIGNED DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_yrs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worked_loc` mediumtext COLLATE utf8mb4_unicode_ci,
  `overview` longtext COLLATE utf8mb4_unicode_ci,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `courses` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `locality` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` int(10) DEFAULT NULL,
  `profile_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_holder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `acc_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ifsc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `verify`, `status`, `dob`, `mobile`, `email`, `id_type`, `id_no`, `gender`, `profile_img`, `userid`, `location_id`, `location`, `latitude`, `longitude`, `skills`, `exp_yrs`, `worked_loc`, `overview`, `degree`, `institute`, `courses`, `locality`, `street`, `city`, `state`, `zip`, `profile_url`, `acc_holder`, `bank_name`, `acc_no`, `ifsc`, `branch`, `gst`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abhishek', 1, 1, '2022-02-01', '9766988183', 'abhi1244k@gmail.com', 'PAN Card', '41684661654', 'Male', '1646202154.png', 4, 2, NULL, NULL, NULL, 'agarg', '3', 'adfa', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-02 00:16:50', '2022-03-02 00:16:50', NULL),
(35, 'Artist', 1, 1, '1998-07-23', '+91+919766958183', 'artist@artist.com', 'Passport', 'fgdgd', 'Male', '1670991966.jpg', 2, 297, 'Roshan Pura', '28.60 ', '76.99 ', 'EDGEARGT', '4', 'goa', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'be', 'gec', 'php', '316', '314 F Varunapuri', 'Vasco Da Gama', 'Goa', 403802, 'https://www.lytaa.com/profshow/35', 'Abhishek Kumar', 'SBI', '5984462659', 'SBIN0010722', 'mangoor', '5464675555', '2022-03-21 03:55:45', '2022-12-14 09:56:06', NULL),
(66, 'Datta Gawade', 1, 1, '1981-04-24', '+919049441177', 'dattagawade@gmail.com', 'PAN Card', '545621163251', 'Male', '1660808469.jpg', 134, 817, 'Madras', '13.09 ', '80.27 ', 'photography', '22', 'Mumbai', 'ogja;lskg;slkf \'gljasl;jk\';lsg kfds\'gldgldf s;lk dfl;gkdfkmdfffks l;k\'flds\'f loksdlfksd\';fkg lgflkgjglkjfg lkj;kljfdgdljglkfkjlg jkhdkhddf lkjlkjjdflg  ;lkdjgkljdfnd/ ;lgkg;lsfdldf lkgjd;l;fksgjd; l;sd;ld;flkds;fs  .jg;ljg;lgjd;flkj;gljg;dflg l;gjd;lfjdkfgjd\'sjdf lkd.', 'BFA', 'J J', 'Degree', 'mapusa', 'Ponxem', 'Mapusa', 'Goa', 403502, 'https://www.lytaa.com/profshow/66', 'Datta Gawade', 'HDFC', '45545662565154651', 'HDFC245125', 'mapusa', NULL, '2022-08-18 13:11:09', '2022-08-18 13:36:32', NULL),
(69, 'Shyan Kaur', 1, 1, '1990-04-05', '+919836630699', 'shyankaur@gmail.com', 'PAN Card', 'BIOPK1490F', 'Male', '1660882004.jpg', 132, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-19 09:36:44', '2022-08-19 09:36:44', NULL),
(61, 'Rahul naik', 0, 1, '2022-08-30', '+919877555564', 'coderix.pc3+test@gmail.com', 'PAN Card', 'asfasf', 'Male', '1659440240.jpeg', 144, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-02 17:07:20', '2022-08-02 17:07:20', NULL),
(62, 'Rizwan Shaikh', 1, 1, '2001-01-01', '+919923247789', 'Rizwan@artist', 'PAN Card', 'ABCD12345566', 'Male', '1659525290.jpg', 175, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-03 16:44:50', '2022-08-03 16:44:50', NULL),
(63, 'Coderix Test', 0, 0, '2001-01-01', '+919923247789', 'support@coderix.io', 'PAN Card', 'ABCD12345566', 'Male', '1659759771.jpeg', 189, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-06 09:52:51', '2022-08-06 09:52:51', NULL),
(64, 'Test Artist', 1, 1, '2000-08-04', '+919923247789', 'testartist@artist.com', 'PAN Card', 'PANNo123456', 'Female', '1660370231.jpg', 256, 580, 'Akot', '21.10 ', '77.05 ', 'Photography', '4', 'pune', 'As a Professional Photographer, I take special efforts to work with a niche and give you quality services. I believe it is the photographer who writes the story of any wedding or event that becomes memories for life. With an eye towards capturing the finer details and the raw emotions that flow through for a wedding, I set sail in the photography world in the year 2014.', 'ABD', 'Goa University', 'Abode, pixcel', 'H. No f-2', 'Farmagudi Ponda Goa', 'Ponda', 'Goa', 403401, 'https://www.lytaa.com/profshow/64', 'Test Artist', 'HDFC bank', 'ABCD1234567890', 'HDFC1234', 'Ponda', 'ABCD12345678', '2022-08-13 11:27:11', '2022-08-13 11:34:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `user_id` int(191) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00',
  `artist_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00',
  `profile_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_id` int(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `artist_accept` tinyint(10) DEFAULT '0',
  `project_details` longtext COLLATE utf8mb4_unicode_ci,
  `projected_budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_status` tinyint(4) NOT NULL DEFAULT '0',
  `artist_status` tinyint(4) NOT NULL DEFAULT '0',
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_client` tinyint(4) NOT NULL DEFAULT '0',
  `contract_artist` tinyint(11) NOT NULL DEFAULT '0',
  `final_price` int(11) DEFAULT NULL,
  `invoice` tinyint(11) DEFAULT NULL,
  `job_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_id` int(10) DEFAULT NULL,
  `client_reason` longtext COLLATE utf8mb4_unicode_ci,
  `client_feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `artist_reason` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `status`, `user_id`, `user_name`, `user_email`, `artist_name`, `artist_email`, `client_price`, `artist_price`, `profile_id`, `artist_id`, `start_date`, `end_date`, `artist_accept`, `project_details`, `projected_budget`, `address`, `client_status`, `artist_status`, `job_type`, `price_type`, `contract_client`, `contract_artist`, `final_price`, `invoice`, `job_id`, `contract_id`, `client_reason`, `client_feedback`, `artist_reason`, `created_at`, `updated_at`) VALUES
(7, 'Pending', 3, 'Client', 'client@client.com', 'Artist', 'artist@artist.com', '50000', '00', '1', 4, '2023-01-12', '2023-01-13', 3, 'wedding', '5K-10K', 'south goa', 0, 1, 'Part-Time', 'Flexible', 0, 0, NULL, NULL, '2', NULL, NULL, NULL, NULL, '2023-01-12 15:06:04', '2023-01-16 14:50:55'),
(9, 'Completed', 3, 'Client', 'client@client.com', 'Artist', 'artist@artist.com', '00', '55000', NULL, 2, '2023-01-12', '2023-01-13', 2, 'wedding', NULL, 'south goa', 1, 1, 'Part-Time', 'Flexible', 1, 1, 15000, 1, '2', 2, NULL, NULL, NULL, '2023-01-14 11:13:23', '2023-02-02 12:15:21');

-- --------------------------------------------------------

--
-- Table structure for table `review_ratings`
--

CREATE TABLE `review_ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `artist_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci,
  `star_rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_ratings`
--

INSERT INTO `review_ratings` (`id`, `artist_id`, `user_id`, `name`, `email`, `comments`, `star_rating`, `created_at`, `updated_at`) VALUES
(1, 35, '3', 'Client', 'client@client.com', 'goodss', 4, '2022-10-21 17:29:21', '2022-10-21 17:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `rewards`
--

CREATE TABLE `rewards` (
  `id` int(10) UNSIGNED NOT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coins` int(110) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rewards`
--

INSERT INTO `rewards` (`id`, `budget`, `coins`, `created_at`, `updated_at`) VALUES
(1, '5K-10K', 10, '2022-03-24 09:07:03', '2022-09-09 16:41:00'),
(2, '10K-20K', 15, '2022-05-17 12:27:49', '2022-09-08 16:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'Artist', NULL, NULL, NULL),
(3, 'Client', NULL, NULL, NULL),
(4, 'Expert', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(6, 3),
(7, 3),
(17, 2),
(18, 3),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 3),
(28, 2),
(29, 2),
(30, 2),
(31, 3),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 3),
(46, 3),
(47, 3),
(48, 3),
(49, 3),
(50, 2),
(51, 2),
(52, 2),
(53, 3),
(54, 3),
(55, 3),
(57, 3),
(58, 3),
(59, 3),
(60, 3),
(61, 3),
(62, 3),
(63, 3),
(64, 3),
(65, 3),
(66, 3),
(67, 3),
(68, 3),
(69, 3),
(70, 3),
(71, 3),
(72, 3),
(73, 3),
(74, 3),
(75, 3),
(76, 3),
(77, 3),
(78, 3),
(79, 3),
(80, 3),
(81, 3),
(82, 2),
(95, 2),
(96, 2),
(97, 2),
(98, 2),
(99, 2),
(101, 3),
(102, 3),
(103, 3),
(104, 3),
(105, 3),
(106, 3),
(107, 3),
(108, 3),
(109, 2),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 3),
(116, 3),
(117, 3),
(118, 2),
(119, 2),
(120, 2),
(121, 3),
(122, 3),
(123, 3),
(124, 3),
(125, 3),
(126, 3),
(127, 2),
(128, 3),
(129, 2),
(130, 2),
(131, 2),
(132, 2),
(133, 2),
(134, 2),
(135, 2),
(136, 2),
(137, 2),
(138, 2),
(139, 2),
(140, 2),
(141, 2),
(142, 2),
(143, 2),
(144, 2),
(145, 3),
(146, 2),
(147, 2),
(148, 2),
(149, 3),
(150, 3),
(151, 3),
(152, 3),
(153, 3),
(154, 3),
(155, 3),
(156, 3),
(157, 3),
(158, 3),
(159, 3),
(160, 3),
(161, 3),
(162, 3),
(163, 3),
(164, 2),
(165, 2),
(166, 2),
(167, 2),
(168, 3),
(169, 3),
(170, 2),
(171, 2),
(172, 2),
(173, 2),
(174, 2),
(175, 2),
(176, 2),
(177, 2),
(178, 2),
(179, 2),
(180, 2),
(181, 2),
(182, 2),
(183, 2),
(184, 2),
(185, 2),
(186, 2),
(187, 2),
(188, 2),
(189, 2),
(190, 2),
(191, 2),
(192, 2),
(193, 2),
(194, 2),
(195, 2),
(196, 2),
(197, 2),
(198, 3),
(199, 3),
(200, 3),
(201, 3),
(202, 3),
(203, 3),
(204, 3),
(256, 2),
(257, 2),
(258, 2),
(259, 2),
(260, 2),
(267, 2),
(274, 2),
(277, 2),
(279, 2),
(297, 2),
(303, 2),
(305, 2),
(363, 2),
(365, 2),
(366, 2),
(367, 2),
(368, 2),
(369, 2),
(370, 2),
(371, 2),
(372, 2),
(373, 2),
(374, 2),
(375, 2),
(376, 2),
(376, 2),
(384, 2),
(385, 3),
(386, 2),
(387, 3),
(388, 2),
(389, 3),
(391, 2),
(392, 2),
(394, 2),
(395, 2),
(398, 2),
(399, 2),
(403, 2),
(406, 2),
(407, 2),
(408, 2),
(410, 2),
(412, NULL),
(413, NULL),
(414, 2),
(415, 2),
(416, 2),
(417, 2),
(420, 2),
(422, 2),
(423, 2),
(426, 2),
(427, 2),
(428, 3),
(429, 2),
(430, 2),
(431, 2),
(432, 2),
(433, 2),
(436, 2),
(437, 2),
(438, 2),
(440, 2),
(441, 2),
(442, 2),
(443, 2),
(444, 2),
(446, 2),
(448, 2),
(449, 2),
(450, 2),
(451, 2),
(452, 2),
(453, 2),
(454, 2),
(455, 2),
(456, 2),
(457, 3),
(458, 2),
(459, 2),
(460, 2),
(461, 2),
(462, 2),
(463, 3),
(464, 2),
(465, 2),
(468, 2),
(469, 2),
(472, 2),
(473, 2),
(474, 2),
(475, 2),
(476, 2),
(477, 3),
(478, 2),
(4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `artist_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coins` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `artist_id`, `job_id`, `description`, `coins`, `created_at`, `updated_at`) VALUES
(3, '2', '16', 'Job at location Nevada applied of budget 5K-10K', '10', '2022-06-13 11:59:13', '2022-06-13 11:59:13'),
(4, '2', '19', 'Job at location Nevada applied of budget 5K-10K', '10', '2022-06-14 10:31:07', '2022-06-14 10:31:07'),
(5, '2', '30', 'Job at location Nevada applied of budget 5K-10K', '10', '2022-06-20 11:20:34', '2022-06-20 11:20:34'),
(6, '2', '1', 'Job at location Nevada applied of budget 5K-10K', '10', '2022-06-20 15:41:28', '2022-06-20 15:41:28'),
(7, '2', '4', 'Job at location Nevada applied of budget 5K-10K', '10', '2022-06-24 11:19:40', '2022-06-24 11:19:40'),
(8, '2', '7', 'Job at location Panaji applied of budget 5K-10K', '10', '2022-07-19 13:24:39', '2022-07-19 13:24:39'),
(9, '2', '32', 'Job at location Adilabad applied of budget 5K-10K', '20', '2022-07-20 14:51:36', '2022-07-20 14:51:36'),
(10, '2', '32', 'Job at location Adilabad applied of budget 5K-10K', '20', '2022-07-20 14:52:00', '2022-07-20 14:52:00'),
(11, '2', '31', 'Job at location Adilabad applied of budget 20K-25K', '30', '2022-07-20 20:02:59', '2022-07-20 20:02:59'),
(12, '2', '31', 'Job at location Adilabad applied of budget 20K-25K', '30', '2022-07-20 20:06:33', '2022-07-20 20:06:33'),
(13, '2', '31', 'Job at location Adilabad applied of budget 20K-25K', '30', '2022-07-20 20:11:41', '2022-07-20 20:11:41'),
(14, '2', '31', 'Job at location Adilabad applied of budget 20K-25K', '30', '2022-07-20 20:12:24', '2022-07-20 20:12:24'),
(15, '2', '31', 'Job at location Adilabad applied of budget 20K-25K', '30', '2022-07-20 20:13:57', '2022-07-20 20:13:57'),
(16, '2', '4', 'Job at location 	\r\nDahod applied of budget 5K-10K', '10', '2022-07-20 20:28:24', '2022-07-20 20:28:24'),
(17, '2', '2', 'Job at location Champdani applied of budget 5K-10K', '10', '2022-07-20 20:31:45', '2022-07-20 20:31:45'),
(18, '2', '5', 'Job at location Hassan applied of budget 5K-10K', '10', '2022-07-21 10:00:10', '2022-07-21 10:00:10'),
(19, '2', '4', 'Job at location 	\r\nDahod applied of budget 5K-10K', '10', '2022-07-21 10:14:07', '2022-07-21 10:14:07'),
(20, '2', '4', 'Job at location 	\r\nDahod applied of budget 5K-10K', '10', '2022-07-21 10:15:36', '2022-07-21 10:15:36'),
(21, '2', '8', 'Job at location Mormugao applied of budget 5K-10K', '10', '2022-07-21 16:36:53', '2022-07-21 16:36:53'),
(22, '2', '1', 'Job at location Anakapalle applied of budget 5K-10K', '10', '2022-07-28 17:50:16', '2022-07-28 17:50:16'),
(23, '2', '1', 'Job at location Anakapalle applied of budget 5K-10K', '10', '2022-07-28 17:56:26', '2022-07-28 17:56:26'),
(24, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-07-30 13:04:03', '2022-07-30 13:04:03'),
(25, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-01 15:43:53', '2022-08-01 15:43:53'),
(26, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-01 15:45:12', '2022-08-01 15:45:12'),
(27, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-01 16:03:06', '2022-08-01 16:03:06'),
(28, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-01 16:41:06', '2022-08-01 16:41:06'),
(29, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-02 09:13:19', '2022-08-02 09:13:19'),
(30, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-03 10:17:13', '2022-08-03 10:17:13'),
(31, '2', '2', 'Job at location Champdani applied of budget 10K-20K', '10', '2022-08-08 11:43:43', '2022-08-08 11:43:43'),
(32, '2', '34', 'Job at location Hisar applied of budget 5K-10K', '20', '2022-08-12 17:48:35', '2022-08-12 17:48:35'),
(33, '2', '8', 'Job at location Mormugao applied of budget 5K-10K', '10', '2022-08-13 10:51:24', '2022-08-13 10:51:24'),
(34, '2', NULL, 'Applied quotationof budget 5K-10K', '10', '2022-09-22 15:47:02', '2022-09-22 15:47:02'),
(35, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:06:08', '2022-09-22 16:06:08'),
(36, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:07:38', '2022-09-22 16:07:38'),
(37, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:21:22', '2022-09-22 16:21:22'),
(38, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:21:40', '2022-09-22 16:21:40'),
(39, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:24:57', '2022-09-22 16:24:57'),
(40, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:32:17', '2022-09-22 16:32:17'),
(41, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-22 16:33:03', '2022-09-22 16:33:03'),
(42, '2', NULL, 'Applied quotation of budget 10K-20K', '15', '2022-09-26 17:40:49', '2022-09-26 17:40:49'),
(43, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-09-27 15:31:52', '2022-09-27 15:31:52'),
(44, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-10-18 13:16:07', '2022-10-18 13:16:07'),
(45, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-11-16 14:57:01', '2022-11-16 14:57:01'),
(46, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-11-29 09:28:28', '2022-11-29 09:28:28'),
(47, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-12-22 10:48:05', '2022-12-22 10:48:05'),
(48, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-12-23 09:36:52', '2022-12-23 09:36:52'),
(49, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-12-23 09:41:33', '2022-12-23 09:41:33'),
(50, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-12-23 09:45:54', '2022-12-23 09:45:54'),
(51, '2', NULL, 'Applied quotation of budget 5K-10K', '10', '2022-12-23 16:01:08', '2022-12-23 16:01:08'),
(52, '2', '44', 'Job at location Adilabad applied of budget 5K-10K', '10', '2023-01-11 14:51:42', '2023-01-11 14:51:42'),
(53, '2', '44', 'Job at location Adilabad applied of budget 5K-10K', '10', '2023-01-11 14:51:56', '2023-01-11 14:51:56'),
(54, '2', '45', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 10:33:51', '2023-01-12 10:33:51'),
(55, '2', '47', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 10:47:32', '2023-01-12 10:47:32'),
(56, '2', '47', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 10:51:53', '2023-01-12 10:51:53'),
(57, '2', '47', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 10:55:35', '2023-01-12 10:55:35'),
(58, '2', '48', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 12:16:57', '2023-01-12 12:16:57'),
(59, '2', '1', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 14:25:47', '2023-01-12 14:25:47'),
(60, '2', '1', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 14:39:40', '2023-01-12 14:39:40'),
(61, '2', '1', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 14:52:10', '2023-01-12 14:52:10'),
(62, '2', '1', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 14:55:12', '2023-01-12 14:55:12'),
(63, '2', '1', 'Job at location Alwal applied of budget 5K-10K', '10', '2023-01-12 15:01:21', '2023-01-12 15:01:21'),
(64, '2', '2', 'Job at location Adilabad applied of budget 5K-10K', '10', '2023-01-12 15:07:13', '2023-01-12 15:07:13'),
(65, '2', '2', 'Job at location Adilabad applied of budget 5K-10K', '10', '2023-01-14 11:13:23', '2023-01-14 11:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package` int(10) DEFAULT '1',
  `status` int(10) DEFAULT '1',
  `otp` int(11) DEFAULT NULL,
  `ratings` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '3',
  `verify` tinyint(4) NOT NULL DEFAULT '0',
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `notify_date` date DEFAULT NULL,
  `suspend_date` date DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `package`, `status`, `otp`, `ratings`, `verify`, `provider_id`, `avatar`, `gender`, `location_id`, `location`, `latitude`, `longitude`, `exp_date`, `notify_date`, `suspend_date`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, NULL, NULL, NULL, 0, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy', '', NULL, '2022-05-26 17:27:47', NULL),
(3, 'Client', 'client@client.com', 1, 1, NULL, NULL, 0, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, '2023-04-26', '2023-04-19', '2023-06-25', '+919766985415', NULL, '$2y$10$Da4SAB3Ya1ox0HLJ.DL7x.thqzVFc1ryuBNp9ZcQE/SRBz7LnT56.', 'qx0FPA1SoR4XYHJpV2B6xosdyiJcd12EfHzv7ZA3XKQA2ijKZejdQ4WytWFc', NULL, '2022-09-08 15:57:55', NULL),
(142, 'mukul dev singh sengar', 'makcoolboy11@gmail.com', 1, 1, 4675, '3', 0, '113728615527142095387', 'https://lh3.googleusercontent.com/a-/AFdZucpLlQWCLWVxI_3K3Rv3OnAGPrelK-ujorawlpzI1A=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-02 14:08:43', '2022-10-22 11:47:14', NULL),
(143, 'Mukul Dev Singh Sengar', 'mukul.lighterature@gmail.com', 1, 1, 4675, '3', 0, '117459970046638792242', 'https://lh3.googleusercontent.com/a-/AFdZucraK8BN9FuBWAiLG6c53R8OSUfDhq4RZ_H6m9fG=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-02 14:10:37', '2022-10-22 11:47:14', NULL),
(2, 'Artist', 'artist@artist.com', 3, 1, 9866, '3', 1, NULL, NULL, 'Male', '297', 'Roshan Pura', '28.60 ', '76.99 ', '2023-08-09', '2023-08-02', '2023-10-08', '+919766958183', NULL, '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy', 'h5glSuEPMG1XtaZ49f83MDr21nQaZxATGUHM66FhSSkDduaxM47s4fPd233d', '2022-07-14 12:38:30', '2022-12-23 12:13:41', NULL),
(140, 'Shree chavan', 'chavanshree8696@gmail.com', 1, 1, NULL, '3', 0, NULL, NULL, 'Male', '643', 'Pune', '18.53 ', '73.84 ', '2023-08-01', '2023-07-25', '2023-09-30', '+918983414541', NULL, '$2y$10$6SL8QWuEE5W93WFbJKeXJenp6.icdiDkngSsc0hX378bftIaE2Phq', '', '2022-08-01 17:57:53', '2022-08-01 17:57:53', NULL),
(139, 'Rahul naik', 'coderix.pc3+rahul@gmail.com', 1, 1, NULL, '3', 0, NULL, NULL, 'Male', '278', 'Delhi', '28.67 ', '77.21 ', '2023-08-01', '2023-07-25', '2023-09-30', '+919877665544', NULL, '$2y$10$DMj6sNL7.wl0kFauFn2X1eaK071QJxPdPCoaKYhcMzWfcIljkYypm', '', '2022-08-01 17:19:00', '2022-08-01 17:19:00', NULL),
(134, 'Datta Gawade', 'dattagawade@gmail.com', 1, 1, NULL, '3', 0, NULL, NULL, 'Male', '467', 'Maisuru', '12.31 ', '76.65 ', '2023-08-01', '2023-07-25', '2023-09-30', '+919049441177', NULL, '$2y$10$qoU5XrMCfG/PIaBwB9k9n.Sla7C5Y7h9cpAOC6HuZ6cEBWLWI2AAi', '', '2022-08-01 13:47:40', '2022-08-01 13:47:40', NULL),
(135, 'akshay jangid', 'akshay.click@gmail.com', 1, 1, 4675, '3', 0, '115842346167986729279', 'https://lh3.googleusercontent.com/a-/AFdZucpZx1tTn9MvxNMFb9UTDl7Os0ouZ1nr_bDhM2VO-g=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-01 13:48:25', '2022-10-22 11:47:14', NULL),
(136, 'mangesh dimd', 'mangeshdimd@gmail.com', 1, 1, 4675, '3', 0, '100679764965979180747', 'https://lh3.googleusercontent.com/a-/AFdZucqCXAbyJYBmXV-gGpYeY8RRQzCWOJenelrRDyrE=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-01 13:54:01', '2022-10-22 11:47:14', NULL),
(160, 'Naresh Shetti', 'naresh.shetti@gmail.com', 1, 1, 4675, '3', 0, '108446380701328995786', 'https://lh3.googleusercontent.com/a-/AFdZucpObIrPFHR-fNvkKJlGsqFC6TZS9siTLQNDVSaUbw=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-02 19:02:57', '2022-10-22 11:47:14', NULL),
(138, 'Nikhilesh dhondi', 'nikhileshdhondi12@gmail.com', 1, 1, NULL, '3', 0, NULL, NULL, 'Male', '29', 'Hyderabad', '17.40 ', '78.48 ', '2023-08-01', '2023-07-25', '2023-09-30', '+919666687729', NULL, '$2y$10$ndNfkngoM3.Ro9cQiUH1BeJUsrOa1bcOc.9yxCdOek9hv31dNvPqy', '', '2022-08-01 14:12:02', '2022-08-01 14:12:02', NULL),
(132, 'Shyan Kaur', 'shyankaur@gmail.com', 1, 1, NULL, '2', 1, NULL, NULL, 'Male', '145', 'Calcutta', '22.57 ', '88.36 ', '2023-08-01', '2023-07-25', '2023-09-30', '+919836630699', NULL, '$2y$10$7kAKefo0bqZoIjuyXHeaWu1FOvXDqFnEAggZbnqCX9q.m6/vT7Lk6', '', '2022-08-01 13:24:27', '2022-11-17 11:33:46', NULL),
(133, 'TEJESH SARKAR', 'tejeshsarkar2@gmail.com', 1, 1, 4675, '3', 0, '103657627268802222636', 'https://lh3.googleusercontent.com/a-/AFdZucpSl4FLBcPt4OqIMCYkgYvol4KBBL4BaymWwcuAaQ=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-01 13:38:17', '2022-11-17 09:47:23', NULL),
(175, 'Rizwan Shaikh', 'Rizwan@artist', 1, 1, NULL, '3', 0, NULL, NULL, 'Male', '579', 'Akola', '20.71 ', '77.00 ', '2023-08-03', '2023-07-27', '2023-10-02', '+919923247789', NULL, '$2y$10$ZAjCEmsXE4KcpCWcBELbD.xlP0m2mayUdWh7njNx2Mjgs9uG.FkJK', '', '2022-08-03 16:43:11', '2022-08-03 16:43:11', NULL),
(188, 'Coderix Sys-4', 'coderix.pc4@gmail.com', 1, 1, 4675, '3', 0, '118385782655050938332', 'https://lh3.googleusercontent.com/a/AItbvmmempEe4e_X1c1l3YuEYkMH2BAAOJReBNCLKzAm=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-06 09:49:10', '2022-10-22 11:47:14', NULL),
(189, 'Coderix Test', 'support@coderix.io', 1, 1, NULL, '3', 0, NULL, NULL, 'Others', '305', 'Panaji', '15.50 ', '73.81 ', '2023-08-06', '2023-07-30', '2023-10-05', '+919923247789', NULL, '$2y$10$NDDqQmUwZk3VrdCKPiHgW.5KCRRuEAjNL1GhxJ5vN8xDXVl8ia2mG', '', '2022-08-06 09:51:26', '2022-08-06 09:51:26', NULL),
(190, 'Open Graph Test User', 'open_pghfpiz_user@tfbnw.net', 1, 1, 4675, '3', 0, '111718984971606', 'https://graph.facebook.com/v3.3/111718984971606/picture?type=normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-08 10:26:15', '2022-10-22 11:47:14', NULL),
(191, 'David Alhdbafcdfbba McDonaldstein', 'avgnaepksh_1659934912@tfbnw.net', 1, 1, 4675, '3', 0, '106182382198973', 'https://graph.facebook.com/v3.3/106182382198973/picture?type=normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2022-08-08 10:36:11', '2022-10-22 11:47:14', NULL),
(256, 'Test Artist', 'testartist@artist.com', 1, 1, NULL, '3', 0, NULL, NULL, 'Female', '580', 'Akot', '21.10 ', '77.05 ', '2023-08-13', '2023-08-06', '2023-10-12', '+919923247789', NULL, '$2y$10$JAtwLoTZEVoNoyL6DNSf9eewFe1F9BsYPsX6YPXQbGAiixXVNjsmq', 'aeryeaynaethrsthazbzdfWR453Q', '2022-08-13 11:23:21', '2022-09-12 10:04:52', NULL),
(473, 'Saish BorkAr', 'saishborkar204@gmail.com', 1, 1, 4675, '3', 0, '2907523566223621', 'https://graph.facebook.com/v3.3/2907523566223621/picture?type=normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 16:00:42', '2022-10-22 11:47:14', NULL),
(475, 'Rohidas Naik', 'rohidasnaik68@gmail.com', 1, 1, 4675, '3', 0, '2916350368508330', 'https://graph.facebook.com/v3.3/2916350368508330/picture?type=normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-20 16:06:22', '2022-10-22 11:47:14', NULL),
(4, 'Abhishek Kumar', 'abhi144k@gmail.com', 1, 1, 4675, '3', 0, '114966924529311128798', 'https://lh3.googleusercontent.com/a/ALm5wu2B-H-SqywDgNieDgZsgAvZ--sV25oouBJZ_fsxXw=s96-c', 'Male', '1', 'Port Blair', '11.62', '92.76', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-21 15:31:05', '2022-10-22 11:47:14', NULL),
(477, 'Coderix Sys-1', 'coderix.pc1@gmail.com', 1, 1, NULL, '3', 0, '106288925781943344661', 'https://lh3.googleusercontent.com/a/ALm5wu0RTZ0xk9YUyn5pPL7BMH93r1EevA7lkC5j0oM_=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy', NULL, '2022-11-01 17:18:24', '2022-11-01 17:18:24', NULL),
(478, 'Coderix Office Macbook', 'coderixmac@gmail.com', 1, 1, NULL, '3', 0, '101719050980168051730', 'https://lh3.googleusercontent.com/a/AEdFTp4mUQjW6iFWN2GkPZO1_RmVeNgtOzyslYXeGY1u=s96-c', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-23 11:37:02', '2022-12-23 11:37:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package` int(10) DEFAULT '1',
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(191) DEFAULT NULL,
  `exp_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `package`, `payment_id`, `user_id`, `amount`, `exp_date`, `created_at`, `updated_at`) VALUES
(1, 3, 'pay_K3RUwY0GTG5Ky0', 2, 335, '2023-11-11 15:45:21', '2022-06-13 14:51:28', '2022-11-11 15:45:21'),
(6, 1, 'Free', 187, 300, '2023-08-04 17:38:48', '2022-08-04 17:38:48', '2022-08-04 17:38:48'),
(7, 1, 'Free', 188, 300, '2023-08-06 09:49:10', '2022-08-06 09:49:10', '2022-08-06 09:49:10'),
(8, 1, 'Free', 189, 300, '2023-08-06 09:51:26', '2022-08-06 09:51:26', '2022-08-06 09:51:26'),
(9, 1, 'Free', 190, 300, '2023-08-08 10:26:15', '2022-08-08 10:26:15', '2022-08-08 10:26:15'),
(10, 1, 'Free', 191, 300, '2023-08-08 10:36:11', '2022-08-08 10:36:11', '2022-08-08 10:36:11'),
(11, 1, 'Free', 192, 300, '2023-08-09 09:29:21', '2022-08-09 09:29:21', '2022-08-09 09:29:21'),
(12, 1, 'Free', 193, 300, '2023-08-09 12:08:11', '2022-08-09 12:08:11', '2022-08-09 12:08:11'),
(13, 1, 'Free', 194, 300, '2023-08-09 16:48:37', '2022-08-09 16:48:37', '2022-08-09 16:48:37'),
(14, 1, 'Free', 195, 300, '2023-08-09 16:49:13', '2022-08-09 16:49:13', '2022-08-09 16:49:13'),
(15, 1, 'Free', 196, 300, '2023-08-09 16:52:30', '2022-08-09 16:52:30', '2022-08-09 16:52:30'),
(16, 1, 'Free', 197, 300, '2023-08-09 16:53:39', '2022-08-09 16:53:39', '2022-08-09 16:53:39'),
(30, 1, 'Free', 270, 300, '2023-08-22 11:00:15', '2022-08-22 11:00:15', '2022-08-22 11:00:15'),
(29, 1, 'Free', 269, 300, '2023-08-22 10:28:44', '2022-08-22 10:28:44', '2022-08-22 10:28:44'),
(28, 1, 'Free', 268, 300, '2023-08-22 10:25:23', '2022-08-22 10:25:23', '2022-08-22 10:25:23'),
(27, 1, 'Free', 267, 300, '2023-08-22 10:23:10', '2022-08-22 10:23:10', '2022-08-22 10:23:10'),
(26, 1, 'Free', 266, 300, '2023-08-20 20:23:27', '2022-08-20 20:23:27', '2022-08-20 20:23:27'),
(25, 1, 'Free', 265, 300, '2023-08-20 20:19:14', '2022-08-20 20:19:14', '2022-08-20 20:19:14'),
(24, 1, 'Free', 264, 300, '2023-08-20 20:08:06', '2022-08-20 20:08:06', '2022-08-20 20:08:06'),
(31, 1, 'Free', 271, 300, '2023-08-22 11:02:41', '2022-08-22 11:02:41', '2022-08-22 11:02:41'),
(32, 1, 'Free', 272, 300, '2023-08-22 11:03:27', '2022-08-22 11:03:27', '2022-08-22 11:03:27'),
(33, 1, 'Free', 273, 300, '2023-08-22 11:17:25', '2022-08-22 11:17:25', '2022-08-22 11:17:25'),
(34, 1, 'Free', 274, 300, '2023-08-22 11:48:32', '2022-08-22 11:48:32', '2022-08-22 11:48:32'),
(35, 1, 'Free', 275, 300, '2023-08-22 11:49:36', '2022-08-22 11:49:36', '2022-08-22 11:49:36'),
(36, 1, 'Free', 276, 300, '2023-08-22 11:53:29', '2022-08-22 11:53:29', '2022-08-22 11:53:29'),
(37, 1, 'Free', 277, 300, '2023-08-22 11:58:25', '2022-08-22 11:58:25', '2022-08-22 11:58:25'),
(38, 1, 'Free', 278, 300, '2023-08-22 12:02:02', '2022-08-22 12:02:02', '2022-08-22 12:02:02'),
(39, 1, 'Free', 279, 300, '2023-08-22 15:57:37', '2022-08-22 15:57:37', '2022-08-22 15:57:37'),
(40, 1, 'Free', 280, 300, '2023-08-26 11:59:45', '2022-08-26 11:59:45', '2022-08-26 11:59:45'),
(41, 1, 'Free', 281, 300, '2023-08-29 10:33:38', '2022-08-29 10:33:38', '2022-08-29 10:33:38'),
(42, 1, 'Free', 282, 300, '2023-08-29 10:47:03', '2022-08-29 10:47:03', '2022-08-29 10:47:03'),
(43, 1, 'Free', 283, 300, '2023-08-29 11:10:12', '2022-08-29 11:10:12', '2022-08-29 11:10:12'),
(44, 1, 'Free', 284, 300, '2023-08-29 11:11:28', '2022-08-29 11:11:28', '2022-08-29 11:11:28'),
(45, 1, 'Free', 285, 300, '2023-08-29 11:13:12', '2022-08-29 11:13:12', '2022-08-29 11:13:12'),
(46, 1, 'Free', 286, 300, '2023-08-29 11:13:31', '2022-08-29 11:13:31', '2022-08-29 11:13:31'),
(47, 1, 'Free', 287, 300, '2023-08-29 11:15:06', '2022-08-29 11:15:06', '2022-08-29 11:15:06'),
(48, 1, 'Free', 288, 300, '2023-08-29 11:15:16', '2022-08-29 11:15:16', '2022-08-29 11:15:16'),
(49, 1, 'Free', 289, 300, '2023-08-29 11:18:08', '2022-08-29 11:18:08', '2022-08-29 11:18:08'),
(50, 1, 'Free', 290, 300, '2023-08-29 11:19:33', '2022-08-29 11:19:33', '2022-08-29 11:19:33'),
(51, 1, 'Free', 291, 300, '2023-08-29 11:21:35', '2022-08-29 11:21:35', '2022-08-29 11:21:35'),
(52, 1, 'Free', 292, 300, '2023-09-02 10:39:29', '2022-09-02 10:39:29', '2022-09-02 10:39:29'),
(53, 1, 'Free', 293, 300, '2023-09-02 10:41:24', '2022-09-02 10:41:24', '2022-09-02 10:41:24'),
(54, 1, 'Free', 294, 300, '2023-09-05 11:05:52', '2022-09-05 11:05:52', '2022-09-05 11:05:52'),
(55, 1, 'Free', 295, 300, '2023-09-05 11:06:36', '2022-09-05 11:06:36', '2022-09-05 11:06:36'),
(56, 1, 'Free', 296, 300, '2023-09-05 11:07:39', '2022-09-05 11:07:39', '2022-09-05 11:07:39'),
(57, 1, 'Free', 297, 300, '2023-09-05 11:30:14', '2022-09-05 11:30:14', '2022-09-05 11:30:14'),
(58, 1, 'Free', 298, 300, '2023-09-05 11:48:45', '2022-09-05 11:48:45', '2022-09-05 11:48:45'),
(59, 1, 'Free', 299, 300, '2023-09-05 12:21:21', '2022-09-05 12:21:21', '2022-09-05 12:21:21'),
(60, 1, 'Free', 300, 300, '2023-09-05 12:29:43', '2022-09-05 12:29:43', '2022-09-05 12:29:43'),
(61, 1, 'Free', 301, 300, '2023-09-05 12:35:55', '2022-09-05 12:35:55', '2022-09-05 12:35:55'),
(62, 1, 'Free', 302, 300, '2023-09-05 12:48:40', '2022-09-05 12:48:40', '2022-09-05 12:48:40'),
(63, 1, 'Free', 305, 300, '2023-09-05 16:13:00', '2022-09-05 16:13:00', '2022-09-05 16:13:00'),
(64, 1, 'Free', 306, 300, '2023-09-05 16:19:14', '2022-09-05 16:19:14', '2022-09-05 16:19:14'),
(65, 1, 'Free', 307, 300, '2023-09-05 16:23:01', '2022-09-05 16:23:01', '2022-09-05 16:23:01'),
(66, 1, 'Free', 308, 300, '2023-09-05 16:23:40', '2022-09-05 16:23:40', '2022-09-05 16:23:40'),
(67, 1, 'Free', 310, 300, '2023-09-05 16:27:37', '2022-09-05 16:27:37', '2022-09-05 16:27:37'),
(68, 1, 'Free', 365, 300, '2023-09-26 09:37:32', '2022-09-26 09:37:32', '2022-09-26 09:37:32'),
(69, 1, 'Free', 366, 300, '2023-09-26 09:38:27', '2022-09-26 09:38:27', '2022-09-26 09:38:27'),
(70, 1, 'Free', 367, 300, '2023-09-26 10:01:02', '2022-09-26 10:01:02', '2022-09-26 10:01:02'),
(71, 1, 'Free', 368, 300, '2023-09-26 10:13:42', '2022-09-26 10:13:42', '2022-09-26 10:13:42'),
(72, 1, 'Free', 369, 300, '2023-09-26 10:16:52', '2022-09-26 10:16:52', '2022-09-26 10:16:52'),
(73, 1, 'Free', 370, 300, '2023-09-26 10:51:54', '2022-09-26 10:51:54', '2022-09-26 10:51:54'),
(74, 1, 'Free', 371, 300, '2023-09-26 10:54:39', '2022-09-26 10:54:39', '2022-09-26 10:54:39'),
(75, 1, 'Free', 372, 300, '2023-09-26 10:55:05', '2022-09-26 10:55:05', '2022-09-26 10:55:05'),
(76, 1, 'Free', 373, 300, '2023-09-26 10:56:38', '2022-09-26 10:56:38', '2022-09-26 10:56:38'),
(77, 1, 'Free', 374, 300, '2023-09-26 10:57:58', '2022-09-26 10:57:58', '2022-09-26 10:57:58'),
(78, 1, 'Free', 375, 300, '2023-09-26 11:09:50', '2022-09-26 11:09:50', '2022-09-26 11:09:50'),
(81, 1, 'Free', 384, 300, '2023-10-11 17:10:49', '2022-10-11 17:10:49', '2022-10-11 17:10:49'),
(82, 1, 'Free', 385, 300, '2023-10-11 17:20:31', '2022-10-11 17:20:31', '2022-10-11 17:20:31'),
(83, 1, 'Free', 386, 300, '2023-10-11 18:00:27', '2022-10-11 18:00:27', '2022-10-11 18:00:27'),
(84, 1, 'Free', 387, 300, '2023-10-11 18:01:07', '2022-10-11 18:01:07', '2022-10-11 18:01:07'),
(85, 1, 'Free', 388, 300, '2023-10-12 11:35:34', '2022-10-12 11:35:34', '2022-10-12 11:35:34'),
(86, 1, 'Free', 391, 300, '2023-10-12 11:50:49', '2022-10-12 11:50:49', '2022-10-12 11:50:49'),
(87, 1, 'Free', 392, 300, '2023-10-12 12:07:24', '2022-10-12 12:07:24', '2022-10-12 12:07:24'),
(88, 1, 'Free', 394, 300, '2023-10-12 12:48:14', '2022-10-12 12:48:14', '2022-10-12 12:48:14'),
(89, 1, 'Free', 395, 300, '2023-10-12 13:13:53', '2022-10-12 13:13:53', '2022-10-12 13:13:53'),
(90, 1, 'Free', 398, 300, '2023-10-12 13:17:38', '2022-10-12 13:17:38', '2022-10-12 13:17:38'),
(91, 1, 'Free', 399, 300, '2023-10-12 15:29:36', '2022-10-12 15:29:36', '2022-10-12 15:29:36'),
(92, 1, 'Free', 403, 300, '2023-10-12 15:47:26', '2022-10-12 15:47:26', '2022-10-12 15:47:26'),
(93, 1, 'Free', 406, 300, '2023-10-12 15:57:38', '2022-10-12 15:57:38', '2022-10-12 15:57:38'),
(94, 1, 'Free', 407, 300, '2023-10-13 09:26:09', '2022-10-13 09:26:09', '2022-10-13 09:26:09'),
(95, 1, 'Free', 408, 300, '2023-10-13 09:30:41', '2022-10-13 09:30:41', '2022-10-13 09:30:41'),
(96, 1, 'Free', 410, 300, '2023-10-13 09:45:07', '2022-10-13 09:45:07', '2022-10-13 09:45:07'),
(97, 1, 'Free', 414, 300, '2023-10-15 11:28:09', '2022-10-15 11:28:09', '2022-10-15 11:28:09'),
(98, 1, 'Free', 415, 300, '2023-10-15 11:30:42', '2022-10-15 11:30:42', '2022-10-15 11:30:42'),
(99, 1, 'Free', 416, 300, '2023-10-15 11:32:08', '2022-10-15 11:32:08', '2022-10-15 11:32:08'),
(100, 1, 'Free', 417, 300, '2023-10-15 11:33:19', '2022-10-15 11:33:19', '2022-10-15 11:33:19'),
(101, 1, 'Free', 420, 300, '2023-10-15 12:37:03', '2022-10-15 12:37:03', '2022-10-15 12:37:03'),
(102, 1, 'Free', 422, 300, '2023-10-15 12:53:53', '2022-10-15 12:53:53', '2022-10-15 12:53:53'),
(103, 1, 'Free', 423, 300, '2023-10-15 13:04:05', '2022-10-15 13:04:05', '2022-10-15 13:04:05'),
(104, 1, 'Free', 426, 300, '2023-10-15 13:07:38', '2022-10-15 13:07:38', '2022-10-15 13:07:38'),
(105, 1, 'Free', 427, 300, '2023-10-15 13:09:26', '2022-10-15 13:09:26', '2022-10-15 13:09:26'),
(106, 1, 'Free', 429, 300, '2023-10-15 13:21:57', '2022-10-15 13:21:57', '2022-10-15 13:21:57'),
(107, 1, 'Free', 430, 300, '2023-10-17 09:12:40', '2022-10-17 09:12:40', '2022-10-17 09:12:40'),
(108, 1, 'Free', 431, 300, '2023-10-17 09:18:59', '2022-10-17 09:18:59', '2022-10-17 09:18:59'),
(109, 1, 'Free', 432, 300, '2023-10-17 09:19:49', '2022-10-17 09:19:49', '2022-10-17 09:19:49'),
(110, 1, 'Free', 433, 300, '2023-10-17 09:22:52', '2022-10-17 09:22:52', '2022-10-17 09:22:52'),
(111, 1, 'Free', 436, 300, '2023-10-17 09:52:49', '2022-10-17 09:52:49', '2022-10-17 09:52:49'),
(112, 1, 'Free', 437, 300, '2023-10-17 09:56:53', '2022-10-17 09:56:53', '2022-10-17 09:56:53'),
(113, 1, 'Free', 438, 300, '2023-10-17 10:00:38', '2022-10-17 10:00:38', '2022-10-17 10:00:38'),
(114, 1, 'Free', 440, 300, '2023-10-17 10:04:59', '2022-10-17 10:04:59', '2022-10-17 10:04:59'),
(115, 1, 'Free', 441, 300, '2023-10-17 10:06:39', '2022-10-17 10:06:39', '2022-10-17 10:06:39'),
(116, 1, 'Free', 442, 300, '2023-10-17 10:07:21', '2022-10-17 10:07:21', '2022-10-17 10:07:21'),
(117, 1, 'Free', 443, 300, '2023-10-17 10:08:01', '2022-10-17 10:08:01', '2022-10-17 10:08:01'),
(118, 1, 'Free', 444, 300, '2023-10-17 10:10:41', '2022-10-17 10:10:41', '2022-10-17 10:10:41'),
(119, 1, 'Free', 446, 300, '2023-10-17 10:16:24', '2022-10-17 10:16:24', '2022-10-17 10:16:24'),
(120, 1, 'Free', 448, 300, '2023-10-17 10:25:15', '2022-10-17 10:25:15', '2022-10-17 10:25:15'),
(121, 1, 'Free', 449, 300, '2023-10-17 10:26:29', '2022-10-17 10:26:29', '2022-10-17 10:26:29'),
(122, 1, 'Free', 450, 300, '2023-10-17 10:32:55', '2022-10-17 10:32:55', '2022-10-17 10:32:55'),
(123, 1, 'Free', 451, 300, '2023-10-17 10:34:50', '2022-10-17 10:34:50', '2022-10-17 10:34:50'),
(124, 1, 'Free', 452, 300, '2023-10-17 10:36:02', '2022-10-17 10:36:02', '2022-10-17 10:36:02'),
(125, 1, 'Free', 453, 300, '2023-10-17 10:42:00', '2022-10-17 10:42:00', '2022-10-17 10:42:00'),
(126, 1, 'Free', 454, 300, '2023-10-17 10:42:59', '2022-10-17 10:42:59', '2022-10-17 10:42:59'),
(127, 1, 'Free', 455, 300, '2023-10-17 10:48:44', '2022-10-17 10:48:44', '2022-10-17 10:48:44'),
(128, 1, 'Free', 456, 300, '2023-10-19 11:19:32', '2022-10-19 11:19:32', '2022-10-19 11:19:32'),
(129, 1, 'Free', 458, 300, '2023-10-20 09:54:29', '2022-10-20 09:54:29', '2022-10-20 09:54:29'),
(130, 1, 'Free', 459, 300, '2023-10-20 10:00:26', '2022-10-20 10:00:26', '2022-10-20 10:00:26'),
(131, 1, 'Free', 460, 300, '2023-10-20 10:01:34', '2022-10-20 10:01:34', '2022-10-20 10:01:34'),
(132, 1, 'Free', 461, 300, '2023-10-20 10:09:17', '2022-10-20 10:09:17', '2022-10-20 10:09:17'),
(133, 1, 'Free', 462, 300, '2023-10-20 10:12:56', '2022-10-20 10:12:56', '2022-10-20 10:12:56'),
(134, 1, 'Free', 464, 300, '2023-10-20 11:39:30', '2022-10-20 11:39:30', '2022-10-20 11:39:30'),
(135, 1, 'Free', 465, 300, '2023-10-20 11:42:39', '2022-10-20 11:42:39', '2022-10-20 11:42:39'),
(136, 1, 'Free', 468, 300, '2023-10-20 15:35:28', '2022-10-20 15:35:28', '2022-10-20 15:35:28'),
(137, 1, 'Free', 469, 300, '2023-10-20 15:35:59', '2022-10-20 15:35:59', '2022-10-20 15:35:59'),
(138, 1, 'Free', 472, 300, '2023-10-20 15:59:59', '2022-10-20 15:59:59', '2022-10-20 15:59:59'),
(139, 1, 'Free', 473, 300, '2023-10-20 16:00:42', '2022-10-20 16:00:42', '2022-10-20 16:00:42'),
(140, 1, 'Free', 474, 300, '2023-10-20 16:03:40', '2022-10-20 16:03:40', '2022-10-20 16:03:40'),
(141, 1, 'Free', 475, 300, '2023-10-20 16:06:22', '2022-10-20 16:06:22', '2022-10-20 16:06:22'),
(142, 1, 'Free', 476, 300, '2023-10-21 15:31:05', '2022-10-21 15:31:05', '2022-10-21 15:31:05'),
(143, 1, 'Free', 478, 300, '2023-12-23 11:37:02', '2022-12-23 11:37:02', '2022-12-23 11:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `artist_id` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `profile_id`, `artist_id`, `created_at`, `updated_at`) VALUES
(22, 2, 26, 2, '2022-04-26 12:59:45', '2022-04-26 12:59:45'),
(29, 2, 35, 2, '2022-06-24 11:12:43', '2022-06-24 11:12:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_job`
--
ALTER TABLE `category_job`
  ADD KEY `job_id_fk_476513` (`job_id`),
  ADD KEY `category_id_fk_476513` (`category_id`);

--
-- Indexes for table `category_profile`
--
ALTER TABLE `category_profile`
  ADD KEY `category_profile_profile_id_foreign` (`profile_id`),
  ADD KEY `category_id_fk_476513` (`category_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipment_profile_id_foreign` (`profile_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `location_fk_476211` (`location_id`);

--
-- Indexes for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_476162` (`role_id`),
  ADD KEY `permission_id_fk_476162` (`permission_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`userid`),
  ADD KEY `profiles_location_foreign` (`location_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_ratings`
--
ALTER TABLE `review_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rewards`
--
ALTER TABLE `rewards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_476171` (`user_id`),
  ADD KEY `role_id_fk_476171` (`role_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_applies`
--
ALTER TABLE `job_applies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1224;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review_ratings`
--
ALTER TABLE `review_ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rewards`
--
ALTER TABLE `rewards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=479;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
