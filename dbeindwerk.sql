-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 30 jun 2020 om 08:45
-- Serverversie: 8.0.18
-- PHP-versie: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbeindwerk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `street` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postal_code` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adresses_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `awards`
--

DROP TABLE IF EXISTS `awards`;
CREATE TABLE IF NOT EXISTS `awards` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `awards_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `awards`
--

INSERT INTO `awards` (`id`, `name`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '2019 Golden Geek Best Thematic Board Game Nominee', 1, '2020-06-28 10:45:59', '2020-06-28 10:45:59'),
(2, '2017 UK Games Expo Best American Style Game Winner', 2, '2020-06-28 10:47:24', '2020-06-28 10:47:24'),
(3, '2017 Dragon Awards Best Science Fiction or Fantasy Miniatures/Collectible Card/Role Playing Game Nomiee', 2, '2020-06-28 10:47:24', '2020-06-28 10:47:24'),
(4, '2020 As d\'Or - Jeu de l\'Année Expert Nominee', 3, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(5, '2018 SXSW Tabletop Game of the Year Winner', 3, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(6, '2018 Scelto dai Goblin Winner', 3, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(7, '2018 Origins Awards Origins Awards Game of the Year Winner', 3, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(8, '2018 Origins Awards Best Board Game Winner', 3, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(9, '2018 Origins Awards Best Board Game Nominee', 3, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(10, '2018 Guldbrikken Best Expert Game Winner', 4, '2020-06-28 10:50:56', '2020-06-28 10:50:56'),
(11, '2017 Best Science Fiction or Fantasy Board Game Nominee', 5, '2020-06-28 10:52:06', '2020-06-28 10:52:06'),
(12, '2017 Golden Geek Best Strategy Board Game Nominee', 8, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(13, '2017 Golden Geek Best Thematic Board Game Nominee', 8, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(14, '2017 Golden Geek Most Innovative Board Game Nominee', 9, '2020-06-28 10:57:33', '2020-06-28 10:57:33'),
(15, '2017 Best Science Fiction or Fantasy Board Game Nominee', 10, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(16, '2019 Nederlandse Spellenprijs Best Expert Game Nominee', 11, '2020-06-28 11:00:42', '2020-06-28 11:00:42'),
(17, '2018 SXSW Tabletop Game of the Year Nominee', 12, '2020-06-28 11:02:21', '2020-06-28 11:02:21'),
(18, '2013 Origins Awards Best Board Game Nominee', 13, '2020-06-28 11:04:47', '2020-06-28 11:04:47'),
(19, '2016 SXSW Tabletop Game of the Year Nominee', 14, '2020-06-28 11:06:03', '2020-06-28 11:06:03'),
(20, '2015 UK Games Expo Best Boardgame with Miniatures Winner', 15, '2020-06-28 11:07:17', '2020-06-28 11:07:17');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Co-op', NULL, NULL),
(2, 'Adventure', NULL, NULL),
(3, 'Fantasy', NULL, NULL),
(4, 'Science Fiction', NULL, NULL),
(5, 'Horror', NULL, NULL),
(6, 'Card Game', '2020-06-28 11:00:51', '2020-06-28 11:00:51');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `category_product`
--

DROP TABLE IF EXISTS `category_product`;
CREATE TABLE IF NOT EXISTS `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `category_product_category_id_product_id_unique` (`category_id`,`product_id`),
  KEY `category_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `category_product`
--

INSERT INTO `category_product` (`id`, `category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 3, 2, NULL, NULL),
(6, 5, 2, NULL, NULL),
(7, 1, 3, NULL, NULL),
(8, 2, 3, NULL, NULL),
(9, 3, 3, NULL, NULL),
(10, 4, 4, NULL, NULL),
(11, 4, 5, NULL, NULL),
(12, 1, 6, NULL, NULL),
(13, 3, 6, NULL, NULL),
(14, 4, 6, NULL, NULL),
(15, 5, 6, NULL, NULL),
(16, 2, 7, NULL, NULL),
(17, 3, 7, NULL, NULL),
(18, 4, 8, NULL, NULL),
(19, 1, 9, NULL, NULL),
(20, 3, 9, NULL, NULL),
(21, 1, 10, NULL, NULL),
(22, 2, 10, NULL, NULL),
(23, 3, 10, NULL, NULL),
(24, 5, 10, NULL, NULL),
(25, 2, 11, NULL, NULL),
(26, 1, 12, NULL, NULL),
(27, 2, 12, NULL, NULL),
(28, 2, 13, NULL, NULL),
(29, 3, 13, NULL, NULL),
(30, 2, 14, NULL, NULL),
(31, 1, 15, NULL, NULL),
(32, 4, 15, NULL, NULL),
(33, 4, 16, NULL, NULL),
(34, 6, 17, NULL, NULL),
(35, 1, 18, NULL, NULL),
(36, 5, 18, NULL, NULL),
(37, 1, 19, NULL, NULL),
(38, 3, 19, NULL, NULL),
(39, 6, 19, NULL, NULL),
(40, 1, 20, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `discounts`
--

DROP TABLE IF EXISTS `discounts`;
CREATE TABLE IF NOT EXISTS `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` decimal(8,2) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `homepage` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `discounts_product_id_unique` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `description`, `percent`, `product_id`, `homepage`, `created_at`, `updated_at`) VALUES
(1, 'Flash Sale', 'Flash sale', '35.00', 3, 1, '2020-06-28 17:55:26', '2020-06-28 17:55:26');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `guests`
--

DROP TABLE IF EXISTS `guests`;
CREATE TABLE IF NOT EXISTS `guests` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `street_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `guests`
--

INSERT INTO `guests` (`id`, `first_name`, `last_name`, `email`, `phone`, `street_number`, `zip`, `city`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Niels', 'De Witte', 'test@test.com', '+32493069041', 'Karel Serweytensstraat, 10', '8000', 'Brugge', 'België', '2020-06-29 06:36:59', '2020-06-29 06:36:59');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_03_30_122844_create_roles_table', 1),
(5, '2020_03_30_124240_create_adresses_table', 1),
(6, '2020_03_30_124255_create_stocks_table', 1),
(7, '2020_03_30_124256_create_products_table', 1),
(8, '2020_03_30_124429_create_photos_table', 1),
(9, '2020_03_30_124441_create_categories_table', 1),
(10, '2020_03_30_124557_create_reviews_table', 1),
(11, '2020_04_02_123834_create_awards_table', 1),
(12, '2020_05_05_115645_create_discounts_table', 1),
(13, '2020_06_16_195557_create_notifications_table', 1),
(14, '2020_06_19_081326_create_newsletters_table', 1),
(15, '2020_06_19_081436_create_guests_table', 1),
(16, '2020_06_20_151336_create_contacts_table', 1),
(17, '2020_06_30_124206_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `newsletters_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`, `created_at`, `updated_at`) VALUES
(4, 'test@test.com', '2020-06-29 06:31:33', '2020-06-29 06:31:33');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `total_price` decimal(8,2) NOT NULL,
  `delivery_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_index` (`user_id`),
  KEY `orders_guest_id_index` (`guest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total_price`, `delivery_method`, `payment_status`, `guest_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, '93.99', 'huis', 'paid', 1, '2020-06-29 06:36:59', '2020-06-29 06:37:22', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_product_order_id_product_id_unique` (`order_id`,`product_id`),
  KEY `order_product_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `photos`
--

DROP TABLE IF EXISTS `photos`;
CREATE TABLE IF NOT EXISTS `photos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_image` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `photos_product_id_foreign` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `photos`
--

INSERT INTO `photos` (`id`, `product_id`, `file`, `main_image`, `created_at`, `updated_at`) VALUES
(1, 1, '1593348359lotr.jpg', 1, '2020-06-28 10:45:59', '2020-06-28 10:45:59'),
(2, 1, '1593348359pic4520351.png', 0, '2020-06-28 10:45:59', '2020-06-28 10:45:59'),
(3, 1, '1593348359pic4532226.png', 0, '2020-06-28 10:45:59', '2020-06-28 10:45:59'),
(4, 1, '1593348359pic4532228.png', 0, '2020-06-28 10:45:59', '2020-06-28 10:45:59'),
(5, 2, '1593348444Dark-Souls-The-Board-Game.png', 1, '2020-06-28 10:47:24', '2020-06-28 10:47:24'),
(6, 2, '1593348444darksouls1.jpg', 0, '2020-06-28 10:47:24', '2020-06-28 10:47:24'),
(7, 2, '1593348444darksouls2.jpg', 0, '2020-06-28 10:47:24', '2020-06-28 10:47:24'),
(8, 2, '1593348444darksouls3.jpg', 0, '2020-06-28 10:47:24', '2020-06-28 10:47:24'),
(9, 3, '1593348550gloomhaven1.jpg', 1, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(10, 3, '1593348550gloomhaven2.jpg', 0, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(11, 3, '1593348550gloomhaven3.jpg', 0, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(12, 3, '1593348550gloomhaven4.jpg', 0, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(13, 3, '1593348550gloomhaven5.jpg', 0, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(14, 4, '1593348656foto2.jpg', 1, '2020-06-28 10:50:56', '2020-06-28 10:50:56'),
(15, 4, '1593348656foto 3.jpg', 0, '2020-06-28 10:50:56', '2020-06-28 10:50:56'),
(16, 4, '1593348656foto1.jpg', 0, '2020-06-28 10:50:56', '2020-06-28 10:50:56'),
(17, 5, '1593348726foto1.jpg', 1, '2020-06-28 10:52:06', '2020-06-28 10:52:06'),
(18, 5, '1593348726foto 4.jpg', 0, '2020-06-28 10:52:06', '2020-06-28 10:52:06'),
(19, 5, '1593348726foto2.jpg', 0, '2020-06-28 10:52:06', '2020-06-28 10:52:06'),
(20, 5, '1593348726foto3.jpg', 0, '2020-06-28 10:52:06', '2020-06-28 10:52:06'),
(21, 6, '1593348809foto 1.jpg', 1, '2020-06-28 10:53:29', '2020-06-28 10:53:29'),
(22, 6, '1593348809foto 2.jpg', 0, '2020-06-28 10:53:29', '2020-06-28 10:53:29'),
(23, 6, '1593348809foto 3.jpg', 0, '2020-06-28 10:53:29', '2020-06-28 10:53:29'),
(24, 7, '1593348891foto 1.jpg', 1, '2020-06-28 10:54:51', '2020-06-28 10:54:51'),
(25, 7, '1593348891foto 2.jpg', 0, '2020-06-28 10:54:51', '2020-06-28 10:54:51'),
(26, 7, '1593348891foto 3.jpg', 0, '2020-06-28 10:54:51', '2020-06-28 10:54:51'),
(27, 8, '1593348977foto 1.jpg', 1, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(28, 8, '1593348977foto 2.jpg', 0, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(29, 8, '1593348977foto 3.jpg', 0, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(30, 8, '1593348977foto 4.jpg', 0, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(31, 9, '1593349053FOTO 1.png', 1, '2020-06-28 10:57:33', '2020-06-28 10:57:33'),
(32, 9, '1593349053FOTO 2.jpg', 0, '2020-06-28 10:57:33', '2020-06-28 10:57:33'),
(33, 9, '1593349053FOTO 3.jpg', 0, '2020-06-28 10:57:33', '2020-06-28 10:57:33'),
(34, 10, '1593349129FOTO1.jpg', 1, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(35, 10, '1593349129FFOTO5.jpg', 0, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(36, 10, '1593349129FOTO2.jpg', 0, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(37, 10, '1593349129FOTO3.jpg', 0, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(38, 10, '1593349129FOTO4.jpg', 0, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(39, 11, '1593349242FOTO1.jpg', 1, '2020-06-28 11:00:42', '2020-06-28 11:00:42'),
(40, 11, '1593349242FOTO2.jpg', 0, '2020-06-28 11:00:42', '2020-06-28 11:00:42'),
(41, 11, '1593349242FOTO3.jpg', 0, '2020-06-28 11:00:42', '2020-06-28 11:00:42'),
(42, 12, '15933493411.jpg', 1, '2020-06-28 11:02:21', '2020-06-28 11:02:21'),
(43, 12, '15933493412.jpg', 0, '2020-06-28 11:02:21', '2020-06-28 11:02:21'),
(44, 12, '15933493413.jpg', 0, '2020-06-28 11:02:21', '2020-06-28 11:02:21'),
(45, 12, '15933493414.jpg', 0, '2020-06-28 11:02:21', '2020-06-28 11:02:21'),
(46, 13, '15933494871.jpg', 1, '2020-06-28 11:04:47', '2020-06-28 11:04:47'),
(47, 13, '15933494872.jpg', 0, '2020-06-28 11:04:47', '2020-06-28 11:04:47'),
(48, 13, '15933494873.jpg', 0, '2020-06-28 11:04:47', '2020-06-28 11:04:47'),
(49, 14, '15933495631.jpg', 1, '2020-06-28 11:06:03', '2020-06-28 11:06:03'),
(50, 14, '15933495632.jpg', 0, '2020-06-28 11:06:03', '2020-06-28 11:06:03'),
(51, 14, '15933495633.jpg', 0, '2020-06-28 11:06:03', '2020-06-28 11:06:03'),
(52, 15, '15933496371.jpg', 1, '2020-06-28 11:07:17', '2020-06-28 11:07:17'),
(53, 15, '15933496372.jpg', 0, '2020-06-28 11:07:17', '2020-06-28 11:07:17'),
(54, 15, '15933496373.jpg', 0, '2020-06-28 11:07:17', '2020-06-28 11:07:17'),
(55, 15, '15933496374.jpg', 0, '2020-06-28 11:07:17', '2020-06-28 11:07:17'),
(56, 16, '15933497091.jpg', 1, '2020-06-28 11:08:29', '2020-06-28 11:08:29'),
(57, 16, '15933497092.jpg', 0, '2020-06-28 11:08:29', '2020-06-28 11:08:29'),
(58, 16, '15933497093.jpg', 0, '2020-06-28 11:08:29', '2020-06-28 11:08:29'),
(59, 17, '15933497611.png', 1, '2020-06-28 11:09:21', '2020-06-28 11:09:21'),
(60, 17, '15933497612.jpg', 0, '2020-06-28 11:09:21', '2020-06-28 11:09:21'),
(61, 17, '15933497613.jpg', 0, '2020-06-28 11:09:21', '2020-06-28 11:09:21'),
(62, 18, '15933498151.jpg', 1, '2020-06-28 11:10:15', '2020-06-28 11:10:15'),
(63, 18, '15933498152.jpg', 0, '2020-06-28 11:10:15', '2020-06-28 11:10:15'),
(64, 18, '15933498153.jpg', 0, '2020-06-28 11:10:15', '2020-06-28 11:10:15'),
(65, 18, '15933498154.jpg', 0, '2020-06-28 11:10:15', '2020-06-28 11:10:15'),
(66, 19, '15933498801.jpg', 1, '2020-06-28 11:11:20', '2020-06-28 11:11:20'),
(67, 19, '15933498802.jpg', 0, '2020-06-28 11:11:20', '2020-06-28 11:11:20'),
(68, 19, '15933498803.jpg', 0, '2020-06-28 11:11:20', '2020-06-28 11:11:20'),
(69, 20, '15933499251.jpg', 1, '2020-06-28 11:12:05', '2020-06-28 11:12:05'),
(70, 20, '15933499252.jpg', 0, '2020-06-28 11:12:05', '2020-06-28 11:12:05'),
(71, 20, '15933499253.jpg', 0, '2020-06-28 11:12:05', '2020-06-28 11:12:05');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `stock_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_stock_id_index` (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `stock_id`, `is_active`, `title`, `slug`, `short_description`, `description`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Lord Of The Rings: Journeys in middle earth', 'lord-of-the-rings-journeys-in-middle-earth', 'Embark on your own adventures in J.R.R. Tolkien\'s iconic world with The Lord of the Rings: Journeys in Middle-earth, a fully co-operative, app-supported board game for one to five players!', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Embark on your own adventures in J.R.R. Tolkien\'s iconic world with&nbsp;<em><span style=\"font-weight: 600;\">The Lord of the Rings: Journeys in Middle-Earth</span></em>, a fully co-operative, app-supported board game for one to five players! You\'ll battle villainous foes, make courageous choices, and strike a blow against the evil that threatens the land — all as part of a thrilling campaign that leads you across the storied hills and dales of Middle-Earth.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Each individual game of&nbsp;<em>Journeys in Middle-Earth</em>&nbsp;is a single adventure in a larger campaign. You\'ll explore the vast and dynamic landscapes of Middle-earth, using your skills to survive the challenges that you encounter on these perilous quests. As you and your fellow heroes explore the wilderness and battle the dark forces arrayed against you, the game\'s companion app guides you to reveal the looming forests, quiet clearings, and ancient halls of Middle-Earth, while also controlling the enemies you encounter. Whether you\'re venturing into the wild on your own or with close companions by your side, you can write your own legend in the history of Middle-Earth.</p>', '84.95', '2020-06-28 10:45:59', '2020-06-28 10:45:59', NULL),
(2, 2, 1, 'Dark Souls', 'dark-souls', 'Kindle the flame; defeat enemies and bosses lest you and your party perish.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The&nbsp;<em><span style=\"font-weight: 600;\">Dark Souls</span></em>&nbsp;board game is a brutally hard exploration miniatures game for 1-4 players. Prepare to die.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The game features a \"fast set-up, long reveal\" mechanism that gets you into the game quickly and builds the location as you explore. The sense of danger is palpable as you discover new locations and the monsters that inhabit these dark places. The core combat mechanism and enemy behavior system forces deep strategic play and clever management of stamina to survive.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>Dark Souls</em>&nbsp;includes numerous boss and mini-boss encounters — including one against the Dragon Slayer Ornstein and Executioner Smough — and utilizes an innovative behavior mechanism so that no two encounters are ever the same, thus giving the game near infinite replayability.</p>', '89.99', '2020-06-28 10:47:24', '2020-06-28 10:47:24', NULL),
(3, 3, 1, 'Gloomhaven', 'gloomhaven', 'Immerse yourself in a fantasy campaign of creatures and puzzly card-driven gameplay.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Gloomhaven&nbsp;</span></em>is a game of Euro-inspired tactical combat in a persistent world of shifting motives. Players will take on the role of a wandering adventurer with their own special set of skills and their own reasons for traveling to this dark corner of the world. Players must work together out of necessity to clear out menacing dungeons and forgotten ruins. In the process, they will enhance their abilities with experience and loot, discover new locations to explore and plunder, and expand an ever-branching story fueled by the decisions they make.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">This is a game with a persistent and changing world that is ideally played over many game sessions. After a scenario, players will make decisions on what to do, which will determine how the story continues, kind of like a “Choose Your Own Adventure” book. Playing through a scenario is a cooperative affair where players will fight against automated monsters using an innovative card system to determine the order of play and what a player does on their turn.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Each turn, a player chooses two cards to play out of their hand. The number on the top card determines their initiative for the round. Each card also has a top and bottom power, and when it is a player’s turn in the initiative order, they determine whether to use the top power of one card and the bottom power of the other, or vice-versa. Players must be careful, though, because over time they will permanently lose cards from their hands. If they take too long to clear a dungeon, they may end up exhausted and be forced to retreat.</p>', '145.00', '2020-06-28 10:49:10', '2020-06-28 10:49:10', NULL),
(4, 4, 1, 'Terraforming Mars', 'terraforming-mars', 'Compete against other corporations to become the greatest terraformer of Mars.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In the 2400s, mankind begins to terraform the planet Mars. Giant corporations, sponsored by the World Government on Earth, initiate huge projects to raise the temperature, the oxygen level, and the ocean coverage until the environment is habitable. In&nbsp;<em><span style=\"font-weight: 600;\">Terraforming Mars</span></em>, you play one of those corporations and work together in the terraforming process, but compete for getting victory points that are awarded not only for your contribution to the terraforming, but also for advancing human infrastructure throughout the solar system, and doing other commendable things.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The players acquire unique project cards (from over two hundred different ones) by buying them to their hand. The projects (cards) can represent anything from introducing plant life or animals, hurling asteroids at the surface, building cities, to mining the moons of Jupiter and establishing greenhouse gas industries to heat up the atmosphere. The cards can give you immediate bonuses, as well as increasing your production of different resources. Many cards also have requirements and they become playable when the temperature, oxygen, or ocean coverage increases enough. Buying cards is costly, so there is a balance between buying cards (3 megacredits per card) and actually playing them (which can cost anything between 0 to 41 megacredits, depending on the project). Standard Projects are always available to complement your cards.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Your basic income, as well as your basic score, is based on your Terraform Rating (starting at 20), which increases every time you raise one of the three global parameters. However, your income is complemented with your production, and you also get VPs from many other sources.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Each player keeps track of their production and resources on their player boards, and the game uses six types of resources: MegaCredits, Steel, Titanium, Plants, Energy, and Heat. On the game board, you compete for the best places for your city tiles, ocean tiles, and greenery tiles. You also compete for different Milestones and Awards worth many VPs. Each round is called a generation (guess why) and consists of the following phases:</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">1) Player order shifts clockwise.<br>2) Research phase: All players buy cards from four privately drawn.<br>3) Action phase: Players take turns doing 1-2 actions from these options: Playing a card, claiming a Milestone, funding an Award, using a Standard project, converting plant into greenery tiles (and raising oxygen), converting heat into a temperature raise, and using the action of a card in play. The turn continues around the table (sometimes several laps) until all players have passed.<br>4) Production phase: Players get resources according to their terraform rating and production parameters.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">When the three global parameters (temperature, oxygen, ocean) have all reached their goal, the terraforming is complete, and the game ends after that generation. Count your Terraform Rating and other VPs to determine the winning corporation!</p>', '55.00', '2020-06-28 10:50:56', '2020-06-28 10:50:56', NULL),
(5, 5, 1, 'Scythe', 'scythe', 'Five countries vie for dominance in a war-torn, mech-filled, alternate 1920s Europe.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">It is a time of unrest in 1920s Europa. The ashes from the first great war still darken the snow. The capitalistic city-state known simply as “The Factory”, which fueled the war with heavily armored mechs, has closed its doors, drawing the attention of several nearby countries.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Scythe</span></em>&nbsp;is an engine-building game set in an alternate-history 1920s period. It is a time of farming and war, broken hearts and rusted gears, innovation and valor. In&nbsp;<em>Scythe</em>, each player represents a character from one of five factions of Eastern Europe who are attempting to earn their fortune and claim their faction\'s stake in the land around the mysterious Factory. Players conquer territory, enlist new recruits, reap resources, gain villagers, build structures, and activate monstrous mechs.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Each player begins the game with different resources (power, coins, combat acumen, and popularity), a different starting location, and a hidden goal. Starting positions are specially calibrated to contribute to each faction’s uniqueness and the asymmetrical nature of the game (each faction always starts in the same place).</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>Scythe</em>&nbsp;gives players almost complete control over their fate. Other than each player’s individual hidden objective card, the only elements of luck or variability are “encounter” cards that players will draw as they interact with the citizens of newly explored lands. Each encounter card provides the player with several options, allowing them to mitigate the luck of the draw through their selection. Combat is also driven by choices, not luck or randomness.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>Scythe</em>&nbsp;uses a streamlined action-selection mechanism (no rounds or phases) to keep gameplay moving at a brisk pace and reduce downtime between turns. While there is plenty of direct conflict for players who seek it, there is no player elimination.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Every part of&nbsp;<em>Scythe</em>&nbsp;has an aspect of engine-building to it. Players can upgrade actions to become more efficient, build structures that improve their position on the map, enlist new recruits to enhance character abilities, activate mechs to deter opponents from invading, and expand their borders to reap greater types and quantities of resources. These engine-building aspects create a sense of momentum and progress throughout the game. The order in which players improve their engine adds to the unique feel of each game, even when playing one faction multiple times.</p>', '65.00', '2020-06-28 10:52:06', '2020-06-28 10:52:06', NULL),
(6, 6, 1, 'Nemesis', 'nemesis', 'Survive an alien-infested spaceship but beware of other players and their agendas.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Playing&nbsp;<em>Nemesis will</em>&nbsp;take you into the heart of sci-fi survival horror in all its terror. A soldier fires blindly down a corridor, trying to stop the alien advance. A scientist races to find a solution in his makeshift lab. A traitor steals the last escape pod in the very last moment. Intruders you meet on the ship are not only reacting to the noise you make but also evolve as the time goes by. The longer the game takes, the stronger they become. During the game, you control one of the crew members with a unique set of skills, personal deck of cards, and individual starting equipment. These heroes cover all your basic SF horror needs. For example, the scientist is great with computers and research, but will have a hard time in combat. The soldier, on the other hand...</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Nemesis</span></em>&nbsp;is a semi-cooperative game in which you and your crewmates must survive on a ship infested with hostile organisms. To win the game, you have to complete one of the two objectives dealt to you at the start of the game and get back to Earth in one piece. You will find many obstacles on your way: swarms of Intruders (the name given to the alien organisms by the ship AI), the poor physical condition of the ship, agendas held by your fellow players, and sometimes just cruel fate.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The gameplay of&nbsp;<em>Nemesis</em>&nbsp;is designed to be full of climactic moments which, hopefully, you will find rewarding even when your best plans are ruined and your character meets a terrible fate.</p>', '120.00', '2020-06-28 10:53:29', '2020-06-28 10:53:29', NULL),
(7, 7, 1, 'Lord Of The Rings: War Of The Ring', 'lord-of-the-rings-war-of-the-ring', 'Embrace the role of The Fellowship or Shadow Army in this classic, epic adventure.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In&nbsp;<em><span style=\"font-weight: 600;\">War of the Ring</span></em>, one player takes control of the Free Peoples (FP), the other player controls Shadow Armies (SA). Initially, the Free People Nations are reluctant to take arms against Sauron, so they must be attacked by Sauron or persuaded by Gandalf or other Companions, before they start to fight properly: this is represented by the Political Track, which shows if a Nation is ready to fight in the War of the Ring or not.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The game can be won by a military victory, if Sauron conquers a certain number of Free People cities and strongholds or vice versa. But the true hope of the Free Peoples lies with the quest of the Ringbearer: while the armies clash across Middle Earth, the Fellowship of the Ring is trying to get secretly to Mount Doom to destroy the One Ring. Sauron is not aware of the real intention of his enemies but is looking across Middle Earth for the precious Ring, so that the Fellowship is going to face numerous dangers, represented by the rules of The Hunt for the Ring. But the Companions can spur the Free Peoples to the fight against Sauron, so the Free People player must balance the need to protect the Ringbearer from harm, against the attempt to raise a proper defense against the armies of the Shadow, so that they do not overrun Middle Earth before the Ringbearer completes his quest.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Each game turn revolves around the roll of Action Dice: each die corresponds to an action that a player can do during a turn. Depending on the face rolled on each die, different actions are possible (moving armies, characters, recruiting troops, advancing a Political Track).</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Action Dice can also be used to draw or play Event Cards. Event Cards are played to represent specific events from the story (or events that could possibly have happened) that cannot be portrayed through normal game-play. Each Event Card can also create an unexpected turn in the game, allowing special actions or altering the course of a battle.</p>', '90.00', '2020-06-28 10:54:51', '2020-06-28 10:54:51', NULL),
(8, 8, 1, 'Twilight Imperium', 'twilight-imperium', 'Take one of 17 factions to power via trade, conquest and galactic politics.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Twilight Imperium (Fourth Edition)</span></em>&nbsp;is a game of galactic conquest in which three to six players take on the role of one of seventeen factions vying for galactic domination through military might, political maneuvering, and economic bargaining. Every faction offers a completely different play experience, from the wormhole-hopping Ghosts of Creuss to the Emirates of Hacan, masters of trade and economics. These seventeen races are offered many paths to victory, but only one may sit upon the throne of Mecatol Rex as the new masters of the galaxy.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">No two games of&nbsp;<em>Twilight Imperium</em>&nbsp;are ever identical. At the start of each galactic age, the game board is uniquely and strategically constructed using 51 galaxy tiles that feature everything from lush new planets and supernovas to asteroid fields and gravity rifts. Players are dealt a hand of these tiles and take turns creating the galaxy around Mecatol Rex, the capital planet seated in the center of the board. An ion storm may block your race from progressing through the galaxy while a fortuitously placed gravity rift may protect you from your closest foes. The galaxy is yours to both craft and dominate.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">A round of&nbsp;<em>Twilight Imperium</em>&nbsp;begins with players selecting one of eight strategy cards that both determine player order and give their owner a unique strategic action for that round. These may do anything from providing additional command tokens to allowing a player to control trade throughout the galaxy. After these roles are selected, players take turns moving their fleets from system to system, claiming new planets for their empire, and engaging in warfare and trade with other factions. At the end of a turn, players gather in a grand council to pass new laws and agendas, shaking up the game in unpredictable ways.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">After every player has passed their turn, players move up the victory track by checking to see whether they have completed any objectives throughout the turn and scoring them. Objectives are determined by setting up ten public objective cards at the start of each game, then gradually revealing them with every round. Every player also chooses between two random secret objectives at the start of the game, providing victory points achievable only by the holder of that objective. These objectives can be anything from researching new technologies to taking your neighbor\'s home system. At the end of every turn, a player can claim one public objective and one secret objective. As play continues, more of these objectives are revealed and more secret objectives are dealt out, giving players dynamically changing goals throughout the game. Play continues until a player reaches ten victory points.</p>', '160.00', '2020-06-28 10:56:17', '2020-06-28 10:56:17', NULL),
(9, 9, 1, 'Spirit Island', 'spirit-island', 'Island Spirits join forces using elemental powers to defend their home from invaders.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>In the most distant reaches of the world, magic still exists, embodied by spirits of the land, of the sky, and of every natural thing. As the great powers of Europe stretch their colonial empires further and further, they will inevitably lay claim to a place where spirits still hold power - and when they do, the land itself will fight back alongside the islanders who live there.</em></p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Spirit Island</span></em>&nbsp;is a complex and thematic cooperative game about defending your island home from colonizing Invaders. Players are different spirits of the land, each with its own unique elemental powers. Every turn, players simultaneously choose which of their power cards to play, paying energy to do so. Using combinations of power cards that match a spirit\'s elemental affinities can grant free bonus effects. Faster powers take effect immediately, before the Invaders spread and ravage, but other magics are slower, requiring forethought and planning to use effectively. In the Spirit phase, spirits gain energy, and choose how / whether to Grow: to reclaim used power cards, to seek for new power, or to spread presence into new areas of the island.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The Invaders expand across the island map in a semi-predictable fashion. Each turn they explore into some lands (portions of the island); the next turn, they build in those lands, forming settlements and cities. The turn after that, they ravage there, bringing blight to the land and attacking any native islanders present.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The islanders fight back against the Invaders when attacked, and lend the spirits some other aid, but may not always do so exactly as you\'d hoped. Some Powers work through the islanders, helping them (eg) drive out the Invaders or clean the land of blight.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The game escalates as it progresses: spirits spread their presence to new parts of the island and seek out new and more potent powers, while the Invaders step up their colonization efforts. Each turn represents 1-3 years of alternate-history.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">At game start, winning requires destroying every last settlement and city on the board - but as you frighten the Invaders more and more, victory becomes easier: they\'ll run away even if some number of settlements or cities remain. Defeat comes if any spirit is destroyed, if the island is overrun by blight, or if the Invader deck is depleted before achieving victory.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The game includes different adversaries to fight against&nbsp;<em>(eg: a Swedish Mining Colony, or a Remote British Colony)</em>. Each changes play in different ways, and offers a different path of difficulty boosts to keep the game challenging as you gain skill.</p>', '75.00', '2020-06-28 10:57:33', '2020-06-28 10:57:33', NULL),
(10, 10, 1, 'Mansion Of Madness', 'mansion-of-madness', 'Unravel mysteries in Arkham with your investigative team in this app-guided game.', '<em style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><span style=\"font-weight: 600;\">Mansions of Madness: Second Edition</span></em><span style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">&nbsp;is a fully co-operative, app-driven board game of horror and mystery for one to five players that takes place in the same universe as&nbsp;</span><em style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Eldritch Horror</em><span style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">&nbsp;and&nbsp;</span><em style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Elder Sign</em><span style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">. Let the immersive app guide you through the veiled streets of Innsmouth and the haunted corridors of Arkham\'s cursed mansions as you search for answers and respite. Eight brave investigators stand ready to confront four scenarios of fear and mystery, collecting weapons, tools, and information, solving complex puzzles, and fighting monsters, insanity, and death. Open the door and step inside these hair-raising&nbsp;</span><em style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Mansions of Madness: Second Edition</em><span style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">. It will take more than just survival to conquer the evils terrorizing this town.</span>', '95.00', '2020-06-28 10:58:49', '2020-06-28 10:58:49', NULL),
(11, 11, 1, 'Wingspan', 'wingspan', 'Attract a beautiful and diverse collection of birds to your wildlife reserve.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Wingspan</span></em>&nbsp;is&nbsp;a competitive, medium-weight, card-driven, engine-building board game from Stonemaier Games.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">You are bird enthusiasts—researchers, bird watchers, ornithologists, and collectors—seeking to discover and attract the best birds to your network of wildlife preserves. Each bird extends a chain of powerful combinations in one of your habitats (actions). These habitats focus on several key aspects of growth:</p><ul style=\"margin-bottom: 10.5px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><li>Gain food tokens via custom dice in a birdfeeder dice tower</li><li>Lay eggs using egg miniatures in a variety of colors</li><li>Draw from hundreds of unique bird cards and play them</li></ul><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The winner is the player with the most points after 4 rounds.</p>', '50.00', '2020-06-28 11:00:42', '2020-06-28 11:00:42', NULL),
(12, 12, 1, 'The 7th Continent', 'the-7th-continent', 'Journey through a vibrant, but deadly land to uncover the key to lifting your curse!', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">It\'s the early 20th century. You have decided to sail back to the newly discovered seventh continent to attempt to lift the terrible curse that has struck you since your return from the previous expedition.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In&nbsp;<em><span style=\"font-weight: 600;\">The 7th Continent</span></em>, a solo or cooperative \"choose-your-own-adventure\" exploration board game, you choose a character and begin your adventure on your own or with a team of other explorers. Inspired by the&nbsp;<em>Fighting Fantasy</em>&nbsp;book series, you will discover the extent of this wild new land through a variety of terrain and event cards. In a land fraught with danger and wonders, you have to use every ounce of wit and cunning to survive, crafting tools, weapons, and shelter to ensure your survival.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Unlike most board games, it will take you many, MANY hours of exploring and searching the seventh continent until you eventually discover how to remove the curse(s)...or die trying.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>The 7th Continent</em>&nbsp;features an easy saving system so that you can stop playing at any time and resume your adventure later on, just like in a video game!</p>', '185.00', '2020-06-28 11:02:21', '2020-06-28 11:02:21', NULL),
(13, 13, 1, 'Mage Knight', 'mage-knight', 'Build your hero’s spells, abilities, and artifacts as you explore & conquer cities.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The Mage Knight board game puts you in control of one of four powerful Mage Knights as you explore (and conquer) a corner of the Mage Knight universe under the control of the Atlantean Empire. Build your army, fill your deck with powerful spells and actions, explore caves and dungeons, and eventually conquer powerful cities controlled by this once-great faction! In competitive scenarios, opposing players may be powerful allies, but only one will be able to claim the land as their own. In cooperative scenarios, the players win or lose as a group. Solo rules are also included.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Combining elements of RPGs, deck-building, and traditional board games the Mage Knight board game captures the rich history of the Mage Knight universe in a self-contained gaming experience.</p>', '80.00', '2020-06-28 11:04:47', '2020-06-28 11:04:47', NULL),
(14, 14, 1, 'Blood Rage', 'blood-rage', 'Ragnarök has come! Secure your place in Valhalla in epic Viking battles.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In&nbsp;<em><span style=\"font-weight: 600;\">Blood Rage</span></em>, each player controls their own Viking clan’s warriors, leader, and ship. Ragnarök has come, and it’s the end of the world! It’s the Vikings’ last chance to go down in a blaze of glory and secure their place in Valhalla at Odin’s side! For a Viking there are many pathways to glory. You can invade and pillage the land for its rewards, crush your opponents in epic battles, fulfill quests, increase your clan\'s stats, or even die gloriously either in battle or from Ragnarök, the ultimate inescapable doom.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Most player strategies are guided by the cards drafted at the beginning of each of the three game rounds (or Ages). These “Gods’ Gifts” grant you numerous boons for your clan including: increased Viking strength and devious battle strategies, upgrades to your clan, or even the aid of legendary creatures from Norse mythology. They may also include various quests, from dominating specific provinces, to having lots of your Vikings sent to Valhalla. Most of these cards are aligned with one of the Norse gods, hinting at the kind of strategy they support. For example, Thor gives more glory for victory in battle, Heimdall grants you foresight and surprises, Tyr strengthens you in battle, while the trickster Loki actually rewards you for losing battles, or punishes the winner.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Players must choose their strategies carefully during the draft phase, but also be ready to adapt and react to their opponents’ strategies as the action phase unfolds. Battles are decided not only by the strength of the figures involved, but also by cards played in secret. By observing your opponent’s actions and allegiances to specific gods, you may predict what card they are likely to play, and plan accordingly. Winning battles is not always the best course of action, as the right card can get you even more rewards by being crushed. The only losing strategy in&nbsp;<em>Blood Rage</em>&nbsp;is to shy away from battle and a glorious death!</p>', '75.00', '2020-06-28 11:06:03', '2020-06-28 11:06:03', NULL),
(15, 15, 1, 'Star Wars Imperial Assault', 'star-wars-imperial-assault', 'Rebel and Imperial forces skirmish in the wake of the Death Star\'s destruction.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Star Wars: Imperial Assault</span></em>&nbsp;is a strategy board game of tactical combat and missions for two to five players, offering two distinct games of battle and adventure in the Star Wars universe!</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>Imperial Assault</em>&nbsp;puts you in the midst of the Galactic Civil War between the Rebel Alliance and the Galactic Empire after the destruction of the Death Star over Yavin 4. In this game, you and your friends can participate in two separate games. The campaign game pits the limitless troops and resources of the Galactic Empire against a crack team of elite Rebel operatives as they strive to break the Empire’s hold on the galaxy, while the skirmish game invites you and a friend to muster strike teams and battle head-to-head over conflicting objectives.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In the campaign game,&nbsp;<em>Imperial Assault</em>&nbsp;invites you to play through a cinematic tale set in the Star Wars universe. One player commands the seemingly limitless armies of the Galactic Empire, threatening to extinguish the flame of the Rebellion forever. Up to four other players become heroes of the Rebel Alliance, engaging in covert operations to undermine the Empire’s schemes. Over the course of the campaign, both the Imperial player and the Rebel heroes gain new experience and skills, allowing characters to evolve as the story unfolds.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em>Imperial Assault</em>&nbsp;offers a different game experience in the skirmish game. In skirmish missions, you and a friend compete in head-to-head, tactical combat. You’ll gather your own strike force of Imperials, Rebels, and Mercenaries and build a deck of command cards to gain an unexpected advantage in the heat of battle. Whether you recover lost holocrons or battle to defeat a raiding party, you’ll find danger and tactical choices in every skirmish.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">As an additional benefit, the&nbsp;<em>Luke Skywalker Ally Pack</em>&nbsp;and the&nbsp;<em>Darth Vader Villain Pack</em>&nbsp;are included within the&nbsp;<em>Imperial Assault</em>&nbsp;Core Set. These figure packs offer sculpted plastic figures alongside additional campaign and skirmish missions that highlight both Luke Skywalker and Darth Vader within&nbsp;<em>Imperial Assault</em>.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">With these&nbsp;<em>Imperial Assault</em>&nbsp;and other Figure Packs, you\'ll find even more missions that allow your heroes to fight alongside iconic characters from the Star Wars saga. Boxed expansions add more heroes, imperial and mercenary groups, and totally new campaigns (see&nbsp;<a href=\"https://boardgamegeek.com/boardgame/164153/star-wars-imperial-assault/wiki\" style=\"color: rgb(0, 0, 0); cursor: pointer; -webkit-tap-highlight-color: rgba(50, 46, 77, 0.3); transition: border 0.1s linear 0s; border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1px dotted rgba(0, 0, 0, 0.7);\">IA Community Wiki</a>&nbsp;for a list), and the free&nbsp;<a href=\"https://boardgamegeek.com/boardgameexpansion/241827/star-wars-imperial-assault-legends-alliance\" style=\"color: rgb(0, 0, 0); cursor: pointer; -webkit-tap-highlight-color: rgba(50, 46, 77, 0.3); transition: border 0.1s linear 0s; border-top: none; border-right: none; border-left: none; border-image: initial; border-bottom: 1px dotted rgba(0, 0, 0, 0.7);\">Star Wars: Imperial Assault – Legends of the Alliance</a>&nbsp;app provides you with additional content to play in solo or co-op mode.</p>', '110.00', '2020-06-28 11:07:17', '2020-06-28 11:07:17', NULL),
(16, 16, 1, 'Star Wars Risk', 'star-wars-risk', 'The Empire and the Rebellion go head to head in three theaters of war...not Risk!', '<span style=\"color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">This Risk: Star Wars Edition game lets players re-create the dramatic final moments of Star Wars: Return of the Jedi. Featuring gameplay for 2 or 4 players across a TIE fighter-shaped gameboard, players can determine the fate of the Star Wars universe through 3 concurrent (yet distinct) battles. Choose to play as either the Rebel Alliance or the Galactic Empire, and use the classic Risk dice to control characters and ships. The object of the game is to defend or destroy the Death Star. Which side will win: the Galactic Empire or the Rebel Alliance?</span>', '30.00', '2020-06-28 11:08:29', '2020-06-28 11:08:29', NULL),
(17, 17, 1, 'Exploding Kittens', 'exploding-kittens', 'Ask for favors, attack friends, see the future- whatever it takes to avoid explosion!', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Exploding Kittens</span></em>&nbsp;is a kitty-powered version of Russian Roulette. Players take turns drawing cards until someone draws an exploding kitten and loses the game. The deck is made up of cards that let you avoid exploding by peeking at cards before you draw, forcing your opponent to draw multiple cards, or shuffling the deck.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The game gets more and more intense with each card you draw because fewer cards left in the deck means a greater chance of drawing the kitten and exploding in a fiery ball of feline hyperbole.</p>', '18.00', '2020-06-28 11:09:21', '2020-06-28 11:09:21', NULL),
(18, 18, 1, 'Betrayal at house on the hill', 'betrayal-at-house-on-the-hill', 'Explore a haunted house as a team ... until one player turns against the rest.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Betrayal at House on the Hill quickly builds suspense and excitement as players explore a haunted mansion of their own design, encountering spirits and frightening omens that foretell their fate. With an estimated one hour playing time, Betrayal at House on the Hill is ideal for parties, family gatherings or casual fun with friends.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Betrayal at House on the Hill is a tile game that allows players to build their own haunted house room by room, tile by tile, creating a new thrilling game board every time. The game is designed for three to six people, each of whom plays one of six possible characters.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Secretly, one of the characters betrays the rest of the party, and the innocent members of the party must defeat the traitor in their midst before it’s too late! Betrayal at House on the Hill will appeal to any game player who enjoys a fun, suspenseful, and strategic game.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Betrayal at House on the Hill includes detailed game pieces, including character cards, pre-painted plastic figures, and special tokens, all of which help create a spooky atmosphere and streamline game play.</p>', '38.00', '2020-06-28 11:10:15', '2020-06-28 11:10:15', NULL),
(19, 19, 1, 'Mysterium', 'mysterium', 'Become a psychic and divine spectral visions to solve the murder of a restless ghost.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In the 1920s, Mr. MacDowell, a gifted astrologer, immediately detected a supernatural being upon entering his new house in Scotland. He gathered eminent mediums of his time for an extraordinary séance, and they have seven hours to make contact with the ghost and investigate any clues that it can provide to unlock an old mystery.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Unable to talk, the amnesiac ghost communicates with the mediums through visions, which are represented in the game by illustrated cards. The mediums must decipher the images to help the ghost remember how he was murdered: Who did the crime? Where did it take place? Which weapon caused the death? The more the mediums cooperate and guess well, the easier it is to catch the right culprit.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">In&nbsp;<em><span style=\"font-weight: 600;\">Mysterium</span></em>, a reworking of the game system present in&nbsp;<em>Tajemnicze Domostwo</em>, one player takes the role of ghost while everyone else represents a medium. To solve the crime, the ghost must first recall (with the aid of the mediums) all of the suspects present on the night of the murder. A number of suspect, location and murder weapon cards are placed on the table, and the ghost randomly assigns one of each of these in secret to a medium.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Each hour (i.e., game turn), the ghost hands one or more vision cards face up to each medium, refilling their hand to seven each time they share vision cards. These vision cards present dreamlike images to the mediums, with each medium first needing to deduce which suspect corresponds to the vision cards received. Once the ghost has handed cards to the final medium, they start a two-minute sandtimer. Once a medium has placed their token on a suspect, they may also place clairvoyancy tokens on the guesses made by other mediums to show whether they agree or disagree with those guesses.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">After time runs out, the ghost reveals to each medium whether the guesses were correct or not. Mediums who guessed correctly move on to guess the location of the crime (and then the murder weapon), while those who didn\'t keep their vision cards and receive new ones next hour corresponding to the same suspect. Once a medium has correctly guessed the suspect, location and weapon, they move their token to the epilogue board and receive one clairvoyancy point for each hour remaining on the clock. They can still use their remaining clairvoyancy tokens to score additional points.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">If one or more mediums fail to identify their proper suspect, location and weapon before the end of the seventh hour, then the ghost has failed and dissipates, leaving the mystery unsolved. If, however, they have all succeeded, then the ghost has recovered enough of its memory to identify the culprit.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Mediums then group their suspect, location and weapon cards on the table and place a number by each group. The ghost then selects one group, places the matching culprit number face down on the epilogue board, picks three vision cards — one for the suspect, one for the location, and one for the weapon — then shuffles these cards. Players who have achieved few clairvoyancy points flip over one vision card at random, then secretly vote on which suspect they think is guilty; players with more points then flip over a second vision card and vote; then those with the most points see the final card and vote.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">If a majority of the mediums have identified the proper suspect, with ties being broken by the vote of the most clairvoyant medium, then the killer has been identified and the ghost can now rest peacefully. If not, well, perhaps you can try again...</p>', '45.00', '2020-06-28 11:11:20', '2020-06-28 11:11:20', NULL);
INSERT INTO `products` (`id`, `stock_id`, `is_active`, `title`, `slug`, `short_description`, `description`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(20, 20, 1, 'Fog of love', 'fog-of-love', 'Stay true to your character and build a successful relationship. Then dump him.', '<p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\"><em><span style=\"font-weight: 600;\">Fog of Love</span></em>&nbsp;is a game for two players. You will create and play two vivid characters who meet, fall in love and face the challenge of making an unusual relationship work.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Playing Fog of Love is like being in a romantic comedy: roller-coaster rides, awkward situations, lots of laughs and plenty of difficult compromises to make.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">Much as in a real relationship, goals might be at odds. You can try to change, keep being relentless or even secretly decide to be a Heartbreaker. It’s your choice.</p><p style=\"margin-right: 0px; margin-bottom: 10.5px; margin-left: 0px; color: rgb(0, 0, 0); font-family: proxima-nova, Arial, sans-serif; font-size: 15px;\">The happily ever after won’t be certain, but whatever way your zigzag romance unfolds, you’ll always end up with a story full of surprises – guaranteed to raise a smile!</p>', '55.00', '2020-06-28 11:12:05', '2020-06-28 11:12:05', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `rating` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_user_id_index` (`user_id`),
  KEY `reviews_product_id_index` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `is_active`, `rating`, `title`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 4, 'Cool', 'Dit is een tof spel', '2020-06-29 06:40:09', '2020-06-29 06:40:17', NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'administrator', NULL, NULL, NULL),
(2, 'klant', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `stocks`
--

DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `stocks`
--

INSERT INTO `stocks` (`id`, `stock`, `created_at`, `updated_at`) VALUES
(1, 5, '2020-06-28 10:45:59', '2020-06-28 10:45:59'),
(2, 9, '2020-06-28 10:47:24', '2020-06-29 06:37:22'),
(3, 15, '2020-06-28 10:49:10', '2020-06-28 10:49:10'),
(4, 3, '2020-06-28 10:50:56', '2020-06-28 10:50:56'),
(5, 1, '2020-06-28 10:52:06', '2020-06-28 10:52:06'),
(6, 10, '2020-06-28 10:53:29', '2020-06-28 19:03:03'),
(7, 2, '2020-06-28 10:54:51', '2020-06-28 10:54:51'),
(8, 5, '2020-06-28 10:56:17', '2020-06-28 10:56:17'),
(9, 16, '2020-06-28 10:57:33', '2020-06-28 10:57:33'),
(10, 12, '2020-06-28 10:58:49', '2020-06-28 10:58:49'),
(11, 7, '2020-06-28 11:00:42', '2020-06-28 11:00:42'),
(12, 11, '2020-06-28 11:02:21', '2020-06-28 11:02:21'),
(13, 15, '2020-06-28 11:04:47', '2020-06-28 11:04:47'),
(14, 8, '2020-06-28 11:06:03', '2020-06-28 11:06:03'),
(15, 12, '2020-06-28 11:07:17', '2020-06-28 11:07:17'),
(16, 20, '2020-06-28 11:08:29', '2020-06-28 11:08:29'),
(17, 18, '2020-06-28 11:09:21', '2020-06-28 11:09:21'),
(18, 7, '2020-06-28 11:10:15', '2020-06-28 11:10:15'),
(19, 6, '2020-06-28 11:11:20', '2020-06-28 11:11:20'),
(20, 13, '2020-06-28 11:12:05', '2020-06-28 11:12:05');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `is_active`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `phone`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Admin', 'Admin', 'admin@webshop.be', '2020-06-28 10:13:11', '$2y$10$ZgzMlSosUj/6REBaUoFbde6W55yGl5oCORORgM/Bvijh3cFLHCaFu', '1', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_role`
--

DROP TABLE IF EXISTS `user_role`;
CREATE TABLE IF NOT EXISTS `user_role` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_role_user_id_role_id_unique` (`user_id`,`role_id`),
  KEY `user_role_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user_role`
--

INSERT INTO `user_role` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `adresses`
--
ALTER TABLE `adresses`
  ADD CONSTRAINT `adresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `awards_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Beperkingen voor tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_stock_id_foreign` FOREIGN KEY (`stock_id`) REFERENCES `stocks` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Beperkingen voor tabel `user_role`
--
ALTER TABLE `user_role`
  ADD CONSTRAINT `user_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_role_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
