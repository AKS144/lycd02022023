-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 04, 2022 at 09:24 AM
-- Server version: 5.7.26
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravejob`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'Album1', 'album 1 description', 'qr_1645682659.png', '2022-02-24 00:34:19', '2022-02-24 00:34:19'),
(2, 'Album1', 'album 1 description', 'qr_1645682686.png', '2022-02-24 00:34:46', '2022-02-24 00:34:46'),
(3, 'asdad', 'test album', 'qr_1645682815.png', '2022-02-24 00:36:55', '2022-02-24 00:36:55'),
(4, 'album1', 'jjfjg', 'qr_1645682849.png', '2022-02-24 00:37:29', '2022-02-24 00:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Technology', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(2, 'Media & News', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(3, 'Goverment', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(4, 'Medical', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(5, 'Restaurants', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(6, 'Developer', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(7, 'Accounting', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_job`
--

DROP TABLE IF EXISTS `category_job`;
CREATE TABLE IF NOT EXISTS `category_job` (
  `job_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  KEY `job_id_fk_476513` (`job_id`),
  KEY `category_id_fk_476513` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_job`
--

INSERT INTO `category_job` (`job_id`, `category_id`) VALUES
(1, 5),
(1, 6),
(1, 7),
(2, 1),
(2, 3),
(2, 7),
(3, 6),
(4, 3),
(4, 5),
(4, 6),
(5, 3),
(5, 4),
(6, 2),
(7, 1),
(7, 6),
(11, 2),
(12, 2),
(12, 3),
(13, 2),
(13, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category_profile`
--

DROP TABLE IF EXISTS `category_profile`;
CREATE TABLE IF NOT EXISTS `category_profile` (
  `profile_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `category_profile_profile_id_foreign` (`profile_id`),
  KEY `category_id_fk_476513` (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_profile`
--

INSERT INTO `category_profile` (`profile_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 2, NULL, NULL),
(3, 2, NULL, NULL),
(3, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `contractrequests`
--

DROP TABLE IF EXISTS `contractrequests`;
CREATE TABLE IF NOT EXISTS `contractrequests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

DROP TABLE IF EXISTS `contracts`;
CREATE TABLE IF NOT EXISTS `contracts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirements` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipment_profile_id_foreign` (`profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `requirements` longtext COLLATE utf8mb4_unicode_ci,
  `address` longtext COLLATE utf8mb4_unicode_ci,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `job_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_nature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `location_id` int(10) UNSIGNED NOT NULL,
  `top_rated` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `location_fk_476211` (`location_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `name`, `description`, `requirements`, `address`, `start_date`, `end_date`, `job_link`, `company`, `job_nature`, `salary`, `created_at`, `updated_at`, `location_id`, `top_rated`) VALUES
(1, 'Building Cleaning Worker', 'Corrupti eos voluptatem nisi et modi similique ad. Qui facere fugiat animi voluptas omnis maxime. Qui non et distinctio quisquam vitae molestiae quam accusamus.', 'Repudiandae deleniti in qui est nihil. Eum dolores doloribus ratione ex. Nobis reprehenderit eligendi repudiandae aliquid. Praesentium voluptas consequatur minima maxime. Omnis a omnis cumque voluptatibus vitae rerum ut.', '603 Johann Burg\nSouth Lyla, KS 68152', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 5, NULL),
(2, 'Paperhanger', 'Inventore excepturi architecto quis quaerat. Eos accusamus eaque tempora. Libero nostrum blanditiis eligendi aspernatur et. Voluptates reprehenderit quo dignissimos qui.', 'Autem earum voluptatem itaque quia tempore autem. Quaerat laborum ut ullam at.', '55767 Parker Spurs\nLake Pierce, FL 80747', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 7, NULL),
(3, 'Sales and Related Workers', 'Nisi eius modi qui alias assumenda. Sit architecto dolorem provident itaque odio omnis. Est fugiat voluptatem sequi incidunt et qui est. Laboriosam id sed blanditiis ullam id et numquam.', 'Nam sed est dolor atque sint aut laboriosam. Nesciunt officia rerum dolores. Ea deserunt iste vel saepe quo adipisci.', '461 Cronin Ways\nPort Easton, UT 59438', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 5, NULL),
(4, 'Electrician', 'Explicabo molestias dolore facilis ducimus rerum. Sapiente et ut consequatur et perspiciatis nobis ad. Est nisi qui quae voluptatibus facere commodi maiores blanditiis.', 'Expedita itaque distinctio iure qui quo qui eos voluptates. Architecto ullam earum ut autem quia veritatis nihil. Blanditiis qui cum consequatur alias et asperiores id beatae. Corrupti ea harum placeat sint.', '189 Annetta Crest\nNew Derrick, DE 36465-4541', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 4, NULL),
(5, 'Urban Planner', 'Dolores facere quia dicta libero. Officiis autem id placeat eligendi ut eveniet ab. Eveniet sit molestiae voluptate eum eligendi dolorem. Iste in eos enim est eligendi labore possimus excepturi. Exercitationem rerum exercitationem non officia omnis deserunt.', 'Occaecati voluptatem laboriosam molestiae harum est totam ratione. Facere ea vitae tenetur repudiandae. Nostrum rerum cupiditate et repellat. Rerum id molestiae maxime ratione similique porro.', '238 Emery Track Apt. 852\nParkerton, GA 57575-3366', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 5, NULL),
(6, 'Social Worker', 'Neque numquam sequi neque ex sit adipisci. Quia voluptatem ratione sapiente. Modi magni molestias magni qui voluptatum ut quasi. Et aperiam fuga eaque dolores excepturi.', 'Dolorem cupiditate voluptates eos consequatur. Voluptatum ipsa suscipit tempore voluptatem. Soluta doloribus fugit laborum dolor assumenda recusandae unde sed.', '4544 Quigley Courts Apt. 987\nPort Katrine, MN 83613', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 2, NULL),
(7, 'Archeologist', 'Voluptatem aut architecto corrupti ut quod quia consequatur. Et ut explicabo et. Quos amet quisquam eveniet nam similique. Eos facere facilis non eligendi possimus.', 'Officiis fugiat corrupti recusandae. Vero a voluptatibus eum. Beatae vel voluptatem accusantium. Sed nam enim non consectetur quia.', '926 Bernier Springs\nFlatleyview, SC 92143', NULL, NULL, '', NULL, NULL, '15k - 25k', '2022-01-27 22:25:26', '2022-01-27 22:25:26', 7, NULL),
(11, 'fdaf', 'wgrwqrg', 'wsrgwsqrg', 'gfsrag', '2022-03-02', '2022-03-05', 'job_link', 'fgswg', NULL, '200K', '2022-03-01 23:36:24', '2022-03-01 23:36:24', 1, NULL),
(12, 'digital marketing', 'seo', 'seo', 'ponda', '2022-03-02', '2022-03-05', 'job_link', 'coderix', NULL, '200K', '2022-03-01 23:38:05', '2022-03-01 23:38:05', 1, NULL),
(13, 'coordinator', 'sgsf', 'sgfswg', 'gswg', '2022-03-02', '2022-03-05', 'job_link', 'company', NULL, 'wreff', '2022-03-02 00:52:06', '2022-03-02 00:52:06', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nevada', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(2, 'Mississippi', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(3, 'Arizona', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(4, 'Missouri', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(5, 'North Dakota', '2022-01-27 22:25:23', '2022-01-27 22:25:23', NULL),
(6, 'Connecticut', '2022-01-27 22:25:23', '2022-02-03 01:43:41', NULL),
(7, 'Florida', '2022-01-27 22:25:23', '2022-02-03 01:43:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_model_type_model_id_index` (`model_type`,`model_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(28, '2022_03_04_084643_create_equipment_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

DROP TABLE IF EXISTS `oauth_access_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

DROP TABLE IF EXISTS `oauth_auth_codes`;
CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

DROP TABLE IF EXISTS `oauth_clients`;
CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

DROP TABLE IF EXISTS `oauth_personal_access_clients`;
CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

DROP TABLE IF EXISTS `oauth_refresh_tokens`;
CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  KEY `role_id_fk_476162` (`role_id`),
  KEY `permission_id_fk_476162` (`permission_id`)
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
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(3, 1),
(3, 4),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(3, 15),
(3, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(3, 21),
(3, 22),
(3, 23),
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

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `album_id` int(11) NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `album_id`, `photo`, `title`, `size`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'qr-1645683234.png', '1', NULL, 'srgtsg', '2022-02-24 00:43:54', '2022-02-24 00:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

DROP TABLE IF EXISTS `profiles`;
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `location` int(10) UNSIGNED NOT NULL,
  `url_twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skills` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exp_yrs` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `worked_loc` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_cert_img` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `studio_address` longtext COLLATE utf8mb4_unicode_ci,
  `camera` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cam_desc` mediumtext COLLATE utf8mb4_unicode_ci,
  `tripod` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tripod_desc` mediumtext COLLATE utf8mb4_unicode_ci,
  `drone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drone_desc` mediumtext COLLATE utf8mb4_unicode_ci,
  `gimbal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gimbal_desc` mediumtext COLLATE utf8mb4_unicode_ci,
  `lens` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lens_desc` mediumtext COLLATE utf8mb4_unicode_ci,
  `other` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_desc` mediumtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `profiles_user_id_foreign` (`user_id`),
  KEY `profiles_location_foreign` (`location`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `dob`, `username`, `mobile`, `email`, `id_type`, `id_no`, `gender`, `profile_img`, `user_id`, `location`, `url_twitter`, `url_instagram`, `url_linkedin`, `url_facebook`, `skills`, `exp_yrs`, `worked_loc`, `course_name`, `course_cert_img`, `qualification`, `studio`, `studio_address`, `camera`, `cam_desc`, `tripod`, `tripod_desc`, `drone`, `drone_desc`, `gimbal`, `gimbal_desc`, `lens`, `lens_desc`, `other`, `other_desc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abhishek', '2022-02-01', 'DAFADF', '9766958183', 'abhi144k@gmail.com', 'PAN Card', '41684661654', 'Male', '1646200010.png', 1, 2, 'adgragr', 'adgadg', 'adgadga', 'adgad', 'agarg', '3', 'adfa', 'adgfadg', '1646200010.png', 'SGFSFD', 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, '2022-03-02 00:16:50', '2022-03-02 00:16:50', NULL),
(2, 'anay', '2022-02-01', 'DAFADF', '9766958183', 'abhi144k@gmail.com', 'PAN Card', '41684661654', 'Male', '1646200084.png', 1, 1, 'adgragr', 'adgadg', 'adgadga', 'adgad', 'agarg', '3', 'adfa', 'adgfadg', '1646200084.png', 'SGFSFD', 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, '2022-03-02 00:18:04', '2022-03-02 00:18:04', NULL),
(3, 'rahul', '2022-02-01', 'DAFADF', '9766958183', 'abhi144k@gmail.com', 'PAN Card', '41684661654', 'Male', '1646202154.png', 1, 1, 'adgragr', 'adgadg', 'adgadga', 'adgad', 'agarg', '3', 'fgsgfa', 'adgfadg', '1646202154.png', 'SGFSFD', 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, 'on', NULL, '2022-03-02 00:52:34', '2022-03-02 00:52:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL),
(3, 'Client', NULL, NULL, NULL),
(4, 'Expert', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  KEY `user_id_fk_476171` (`user_id`),
  KEY `role_id_fk_476171` (`role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$p2lAE/PWMuS6r/5BWo/uDOE/6ju0WeKff9J7AqHmzSLnd4yRSTljy', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
CREATE TABLE IF NOT EXISTS `wishlists` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
