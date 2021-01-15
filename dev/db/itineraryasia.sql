-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2020 at 05:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itineraryasia`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `ended_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `name`, `description`, `title`, `url`, `content`, `created_at`, `updated_at`, `published_at`, `ended_at`, `user_id`) VALUES
(1, 'Travel', 'This is to advertise travel.com', 'Travel', 'www.travel.com', 'ads2_1608174542.jpg', '2020-12-16 19:04:40', '2020-12-16 19:09:02', '2020-12-14 16:00:00', '2020-12-16 16:00:00', 3),
(2, 'Facial', 'This is to advertise facial.com', 'Facial', 'www.facial.com', 'ads3_1608174749.jpg', '2020-12-16 19:12:29', '2020-12-16 19:12:29', '2020-12-13 16:00:00', '2020-12-16 16:00:00', 1),
(3, 'McD', 'This is to advertise McD', 'McD', 'www.mcd.com', 'ads_1608176172.jpg', '2020-12-16 19:36:12', '2020-12-16 19:36:12', '2020-12-05 16:00:00', '2020-12-16 16:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'enim', 'enim', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(2, 'ut', 'ut', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(3, 'nobis', 'nobis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(4, 'sit', 'sit', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(5, 'esse', 'esse', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(6, 'et', 'et', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(7, 'natus', 'natus', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(8, 'modi', 'modi', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(9, 'qui', 'qui', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(10, 'dolor', 'dolor', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(11, 'blanditiis', 'blanditiis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(12, 'voluptatem', 'voluptatem', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(13, 'beatae', 'beatae', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(14, 'ab', 'ab', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(15, 'quibusdam', 'quibusdam', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(16, 'sed', 'sed', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(17, 'rerum', 'rerum', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(18, 'nisi', 'nisi', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(19, 'adipisci', 'adipisci', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(20, 'in', 'in', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(21, 'sequi', 'sequi', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(22, 'explicabo', 'explicabo', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(23, 'maxime', 'maxime', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(24, 'quasi', 'quasi', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(25, 'numquam', 'numquam', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(26, 'quod', 'quod', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(27, 'laboriosam', 'laboriosam', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(28, 'consequatur', 'consequatur', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(29, 'quaerat', 'quaerat', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(30, 'quia', 'quia', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(31, 'deleniti', 'deleniti', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(32, 'inventore', 'inventore', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(33, 'omnis', 'omnis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(34, 'facere', 'facere', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(35, 'sunt', 'sunt', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(36, 'possimus', 'possimus', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(37, 'distinctio', 'distinctio', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(38, 'aut', 'aut', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(39, 'architecto', 'architecto', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(40, 'eos', 'eos', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(41, 'ea', 'ea', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(42, 'voluptates', 'voluptates', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(43, 'non', 'non', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(44, 'incidunt', 'incidunt', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(45, 'amet', 'amet', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(46, 'debitis', 'debitis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(47, 'fugit', 'fugit', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(48, 'praesentium', 'praesentium', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(49, 'dolorem', 'dolorem', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(50, 'iure', 'iure', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(51, 'molestiae', 'molestiae', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(52, 'quos', 'quos', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(53, 'nulla', 'nulla', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(54, 'provident', 'provident', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(55, 'aliquam', 'aliquam', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(56, 'ipsum', 'ipsum', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(57, 'aperiam', 'aperiam', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(58, 'deserunt', 'deserunt', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(59, 'voluptas', 'voluptas', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(60, 'cum', 'cum', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(61, 'quam', 'quam', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(62, 'quo', 'quo', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(63, 'iusto', 'iusto', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(64, 'illo', 'illo', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(65, 'magni', 'magni', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(66, 'sint', 'sint', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(67, 'neque', 'neque', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(68, 'sapiente', 'sapiente', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(69, 'eligendi', 'eligendi', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(70, 'impedit', 'impedit', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(71, 'odio', 'odio', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(72, 'ratione', 'ratione', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(73, 'a', 'a', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(74, 'saepe', 'saepe', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(75, 'illum', 'illum', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(76, 'eveniet', 'eveniet', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(77, 'temporibus', 'temporibus', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(78, 'quae', 'quae', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(79, 'optio', 'optio', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(80, 'ipsa', 'ipsa', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(81, 'est', 'est', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(82, 'pariatur', 'pariatur', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(83, 'earum', 'earum', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(84, 'quis', 'quis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(85, 'quidem', 'quidem', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(86, 'voluptatibus', 'voluptatibus', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(87, 'vero', 'vero', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(88, 'id', 'id', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(89, 'nesciunt', 'nesciunt', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(90, 'doloribus', 'doloribus', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(91, 'facilis', 'facilis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(92, 'dolores', 'dolores', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(93, 'veritatis', 'veritatis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(94, 'nemo', 'nemo', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(95, 'perspiciatis', 'perspiciatis', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(96, 'itaque', 'itaque', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(97, 'commodi', 'commodi', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(98, 'suscipit', 'suscipit', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(99, 'minima', 'minima', '2020-12-07 22:01:15', '2020-12-07 22:01:15'),
(100, 'totam', 'totam', '2020-12-07 22:01:15', '2020-12-07 22:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_30_070012_create_pages_table', 2),
(5, '2020_11_30_071044_create_roles_table', 2),
(6, '2020_11_30_071204_create_role_user_table', 2),
(7, '2020_12_01_025441_create_posts_table', 2),
(8, '2020_12_01_044328_add_nestedset_to_pages_table', 3),
(9, '2020_12_06_071613_create_tags_table', 4),
(10, '2020_12_06_071800_create_post_tag_table', 4),
(11, '2020_12_06_075130_create_categories_table', 4),
(12, '2020_12_06_075452_create_category_post_table', 4),
(13, '2020_12_08_100451_update_posts_table', 5),
(14, '2020_12_08_100532_update_users_table', 5),
(15, '2020_12_16_090548_create_advertisements_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `body`, `published_at`, `created_at`, `updated_at`, `cover`) VALUES
(1, 7, 'Optio non optio ab laborum.', 'optio-non-optio-ab-laborum', 'Beatae corporis magnam unde ad nostrum. Sed magni officia et aut eveniet sed. Quis aut ducimus porro. Eos voluptatem nobis libero facilis rerum non. Sed voluptas ad pariatur culpa perspiciatis.', '2020-12-08 02:58:44', '2020-12-08 02:58:44', '2020-12-08 02:58:44', 'noimage.jpg'),
(2, 2, 'Soluta vel libero non voluptate vel harum dolores.', 'soluta-vel-libero-non-voluptate-vel-harum-dolores', 'Facilis aut voluptas sunt ea expedita nulla. Vel in soluta quaerat.', '2020-12-08 02:58:47', '2020-12-08 02:58:47', '2020-12-08 02:58:47', 'noimage.jpg'),
(3, 4, 'Ad aliquam libero voluptates consectetur atque sit.', 'ad-aliquam-libero-voluptates-consectetur-atque-sit', 'Qui sed illum quam sint. Quia consequatur vitae est provident. Quia tenetur mollitia qui veniam corrupti.', '2020-12-08 02:58:47', '2020-12-08 02:58:47', '2020-12-08 02:58:47', '2.jpg'),
(4, 1, 'Neque alias voluptatem quod.', 'neque-alias-voluptatem-quod', 'Fugiat ipsam rem voluptatem ratione inventore dolore quia. Velit laboriosam omnis est dolore. Velit doloremque voluptas deleniti id commodi. Perferendis itaque voluptatum est aut.', '2020-12-08 02:58:51', '2020-12-08 02:58:51', '2020-12-08 02:58:51', '3.jpg'),
(5, 7, 'Sunt omnis tempora at ea consequatur.', 'sunt-omnis-tempora-at-ea-consequatur', 'Vero consequuntur eaque illo temporibus sapiente. Excepturi dolorem iure dolor non repellendus. Recusandae laborum sit corporis iure. Debitis odio adipisci et cupiditate rerum.', '2020-12-08 02:58:51', '2020-12-08 02:58:51', '2020-12-08 02:58:51', '4.jpg'),
(6, 3, 'Ratione necessitatibus sint totam.', 'ratione-necessitatibus-sint-totam', 'At quibusdam nobis ipsa inventore vel et. Veritatis nesciunt omnis sunt. Ullam ut est et asperiores voluptatem a id.', '2020-12-08 02:58:51', '2020-12-08 02:58:51', '2020-12-08 02:58:51', '5.jpg'),
(7, 3, 'Et eos optio nostrum et fugit reiciendis in.', 'et-eos-optio-nostrum-et-fugit-reiciendis-in', 'Odio sunt voluptas fuga vel eveniet beatae. Sint asperiores doloribus et fugiat provident. Veritatis doloremque quia blanditiis voluptas tempore. Aliquid quas facilis id quae praesentium.', '2020-12-08 02:58:53', '2020-12-08 02:58:53', '2020-12-08 02:58:53', '6.jpg'),
(8, 5, 'Ut molestiae voluptates ducimus ea temporibus nostrum.', 'ut-molestiae-voluptates-ducimus-ea-temporibus-nostrum', 'Dolorum architecto molestiae est cupiditate sed unde. Veritatis enim ut voluptas quisquam. Et saepe rerum rem ipsum qui sed debitis. Totam in eos eum placeat. Rerum dolor iste incidunt et itaque.', '2020-12-08 02:58:53', '2020-12-08 02:58:53', '2020-12-08 02:58:53', '7.jpg'),
(9, 4, 'Aut voluptas odit voluptatem autem cumque qui voluptates.', 'aut-voluptas-odit-voluptatem-autem-cumque-qui-voluptates', 'Voluptatibus sed doloribus repudiandae rerum quidem ut. In voluptatem autem a animi. Dolor ea libero consequuntur iste perspiciatis nobis voluptatem placeat. Porro cum alias consequatur.', '2020-12-08 02:58:53', '2020-12-08 02:58:53', '2020-12-08 02:58:53', '8.jpg'),
(10, 2, 'Rerum voluptatibus doloribus maiores eum ex sapiente omnis.', 'rerum-voluptatibus-doloribus-maiores-eum-ex-sapiente-omnis', 'Ex aut eveniet sint aut animi. Sapiente sit eveniet et adipisci. Cum officia ut corrupti atque voluptatibus.', '2020-12-08 02:58:55', '2020-12-08 02:58:55', '2020-12-08 02:58:55', '9.jpg'),
(11, 3, 'Rem quae alias omnis necessitatibus sunt sunt.', 'rem-quae-alias-omnis-necessitatibus-sunt-sunt', 'Id voluptas rem veritatis sunt dolorem qui molestiae unde. Et expedita laudantium sit vel. Ut rerum ex at voluptas.', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '2020-12-08 02:59:01', 'noimage.jpg'),
(12, 7, 'Nihil magnam neque pariatur ratione corporis delectus quisquam.', 'nihil-magnam-neque-pariatur-ratione-corporis-delectus-quisquam', 'Aliquam ducimus cum quas saepe quia iure ipsa. Similique harum et sunt recusandae. Est qui neque vel omnis.', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '10.jpg'),
(13, 6, 'Quam repudiandae quia debitis eius ullam ea.', 'quam-repudiandae-quia-debitis-eius-ullam-ea', 'Natus velit praesentium expedita et nam. Voluptatem voluptatibus sint nostrum harum totam perferendis fugiat. Reprehenderit voluptatem et at optio magni ullam ut.', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '11.jpg'),
(14, 3, 'Reiciendis et natus ullam doloremque qui et magnam.', 'reiciendis-et-natus-ullam-doloremque-qui-et-magnam', 'Ducimus ut quia consequuntur eaque est consequatur. Nihil exercitationem rem et.', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '12.jpg'),
(15, 4, 'Amet commodi laborum corrupti sequi impedit qui.', 'amet-commodi-laborum-corrupti-sequi-impedit-qui', 'Placeat doloribus occaecati minus atque quia sed. Recusandae ad perspiciatis omnis et sunt in adipisci. Modi non aut dolorum aut.', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '2020-12-08 02:59:01', '13.jpg'),
(16, 2, 'Est quia voluptas minima rerum est.', 'est-quia-voluptas-minima-rerum-est', 'Molestias necessitatibus enim qui magni nesciunt tempore. Provident corrupti enim quod impedit. Eum ut pariatur reprehenderit eum.', '2020-12-08 02:59:05', '2020-12-08 02:59:05', '2020-12-08 02:59:05', '14.jpg'),
(17, 3, 'Et tenetur in voluptatem voluptatum.', 'et-tenetur-in-voluptatem-voluptatum', 'Sapiente qui placeat dolorem placeat tempore numquam. Aut molestias facere dolorem porro. Commodi quidem suscipit dolores cumque odit.', '2020-12-08 02:59:05', '2020-12-08 02:59:05', '2020-12-08 02:59:05', '15.jpg'),
(18, 7, 'Consequatur vel accusamus corrupti nobis provident.', 'consequatur-vel-accusamus-corrupti-nobis-provident', 'Laudantium sint ratione adipisci commodi. Quae eos quis delectus omnis provident est ipsam. Minima facere sit esse. Doloremque soluta quas est facilis fugit tempore ut.', '2020-12-08 02:59:05', '2020-12-08 02:59:05', '2020-12-08 02:59:05', '16.jpg'),
(19, 5, 'Ut eum corporis aut odio quod autem.', 'ut-eum-corporis-aut-odio-quod-autem', 'Velit quasi aut harum tenetur. Ipsam nisi sint cupiditate recusandae ea. Blanditiis quas alias molestias enim maiores.', '2020-12-08 02:59:08', '2020-12-08 02:59:08', '2020-12-08 02:59:08', '17.jpg'),
(20, 2, 'Dolorem voluptatibus aut ea omnis voluptatem veritatis nulla.', 'dolorem-voluptatibus-aut-ea-omnis-voluptatem-veritatis-nulla', 'Praesentium perferendis voluptatem provident hic sint delectus. Fugiat fugiat voluptatem quo esse doloribus odio necessitatibus. Ut eligendi dignissimos ducimus dolorum error.', '2020-12-08 02:59:08', '2020-12-08 02:59:08', '2020-12-08 02:59:08', '18.jpg'),
(21, 7, 'Corrupti et minus occaecati qui doloremque.', 'corrupti-et-minus-occaecati-qui-doloremque', 'Dolorem aut fugiat officia quis vitae reprehenderit sint. Consequuntur praesentium harum aut.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', 'noimage.jpg'),
(22, 5, 'Labore molestiae similique voluptatem quia ad est.', 'labore-molestiae-similique-voluptatem-quia-ad-est', 'Aperiam et et nihil et autem. Reiciendis dolorem repellat corrupti quasi quod quis excepturi. Totam est non necessitatibus dicta dolores veritatis. Et autem et nihil non ut.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '19.jpg'),
(23, 7, 'Eius maiores voluptates sed deleniti.', 'eius-maiores-voluptates-sed-deleniti', 'Et expedita nemo delectus ad. Facilis sunt itaque alias. Qui ullam tempora quae dolorem recusandae molestiae.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '20.jpg'),
(24, 3, 'Hic voluptate aut architecto ratione ratione facere odit molestiae.', 'hic-voluptate-aut-architecto-ratione-ratione-facere-odit-molestiae', 'Et tempore est repellat corrupti consectetur cumque laudantium qui. Et et aliquid suscipit architecto est similique. Dolores doloribus doloribus voluptas quasi sed consequatur.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '21.jpg'),
(25, 5, 'Consequatur et reprehenderit rem nostrum aperiam voluptates non qui.', 'consequatur-et-reprehenderit-rem-nostrum-aperiam-voluptates-non-qui', 'Excepturi laboriosam ut placeat non veritatis iste inventore. Et occaecati expedita ullam quidem quo. Ut error id ipsa atque. Eius veniam autem eius dolorem assumenda est voluptatem.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '22.jpg'),
(26, 4, 'Excepturi dolore doloremque mollitia consequuntur rerum numquam odio dolorum.', 'excepturi-dolore-doloremque-mollitia-consequuntur-rerum-numquam-odio-dolorum', 'Porro atque consequatur rerum exercitationem officia et. Sunt facere est asperiores voluptatum animi earum eum corrupti. Voluptatem ex dolorem eum deleniti. Maiores sit voluptatem odio ut.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '23.jpg'),
(27, 1, 'Quia dolores quisquam maiores voluptas enim repellendus itaque.', 'quia-dolores-quisquam-maiores-voluptas-enim-repellendus-itaque', 'Quo provident nulla fugit praesentium saepe fugiat. Expedita omnis facilis ab. Consequatur enim ratione sint sint repellendus et. Vero blanditiis ab dolorem deleniti possimus omnis ratione.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '24.jpg'),
(28, 4, 'Aspernatur ex perspiciatis veritatis voluptate aliquid quos.', 'aspernatur-ex-perspiciatis-veritatis-voluptate-aliquid-quos', 'Deleniti voluptatem sit quo quaerat. Velit nam iure iste consectetur iure corrupti. Laborum esse quis vero id est. Numquam repellendus necessitatibus sed dolor delectus velit.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '25.jpg'),
(29, 3, 'Ut ea aliquam itaque excepturi minima non qui.', 'ut-ea-aliquam-itaque-excepturi-minima-non-qui', 'Ut est ipsam cumque amet quo doloremque nostrum eveniet. Saepe consequatur similique quo ut optio earum soluta. Sed expedita et architecto atque nesciunt sint.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', 'noimage.jpg'),
(30, 3, 'Praesentium tenetur dolorem sed maiores sed vitae ut architecto.', 'praesentium-tenetur-dolorem-sed-maiores-sed-vitae-ut-architecto', 'Ut et quis rerum illum cupiditate. Magnam voluptatem vero aut iste. Dolores totam tempore corrupti esse.', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '2020-12-08 02:59:12', '26.jpg'),
(31, 7, 'Sint unde iusto ut aspernatur dolores neque harum alias.', 'sint-unde-iusto-ut-aspernatur-dolores-neque-harum-alias', 'Aliquam in fugiat ab sapiente vero accusamus. Eum odio alias repellat voluptatem. Assumenda quaerat ut asperiores temporibus vero.', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '2020-12-08 02:59:16', 'noimage.jpg'),
(32, 6, 'Nihil dignissimos rerum porro molestias tempora iusto eum eligendi.', 'nihil-dignissimos-rerum-porro-molestias-tempora-iusto-eum-eligendi', 'Aliquam id dignissimos voluptas a voluptatibus. Molestiae repudiandae nisi aut itaque iure possimus repellendus. Officia magni vero natus nesciunt. Et inventore quia ad quidem.', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '27.jpg'),
(33, 5, 'Iusto consectetur praesentium voluptatem nam.', 'iusto-consectetur-praesentium-voluptatem-nam', 'Repudiandae harum sint voluptas amet aliquid tempore. Veritatis impedit velit aut voluptatem rerum fugiat qui. Alias tempora quibusdam minus esse.', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '28.jpg'),
(34, 1, 'Culpa ea odio laboriosam maiores aut ut mollitia.', 'culpa-ea-odio-laboriosam-maiores-aut-ut-mollitia', 'Veniam neque fugiat beatae ullam consequatur mollitia saepe quos. Accusantium laudantium quae dolor veniam quia quia. Sapiente ut sequi at nisi. Illum consequuntur repellendus beatae eos.', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '29.jpg'),
(35, 2, 'Repellendus laudantium voluptatibus omnis rerum.', 'repellendus-laudantium-voluptatibus-omnis-rerum', 'Illum dignissimos omnis vitae ullam soluta occaecati. Delectus et sed qui qui consequatur et ab. Beatae aut doloribus commodi ut. Quaerat dolores impedit blanditiis qui nesciunt.', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '2020-12-08 02:59:16', '30.jpg'),
(36, 5, 'Adipisci sunt id eum adipisci dignissimos rem.', 'adipisci-sunt-id-eum-adipisci-dignissimos-rem', 'Est quia officia quae dolores quia corporis in et. Ut velit totam magni. Architecto qui quis ut quo.', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '2020-12-08 02:59:17', 'noimage.jpg'),
(37, 1, 'Optio itaque voluptatem quidem repellat ex omnis nisi dolor.', 'optio-itaque-voluptatem-quidem-repellat-ex-omnis-nisi-dolor', 'Facilis et vel atque laborum commodi nisi cum. Alias sint harum veniam expedita voluptates illo. Qui eos numquam velit impedit eos. Esse neque veritatis molestiae laboriosam debitis aut labore.', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '31.jpg'),
(38, 7, 'Nihil reiciendis quo enim vitae sapiente sint.', 'nihil-reiciendis-quo-enim-vitae-sapiente-sint', 'Ipsum id nostrum voluptas iusto. Cum accusamus qui aut voluptatibus fugiat quia temporibus. Facere natus alias consequuntur vero similique est. Dolorem totam incidunt enim.', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '32.jpg'),
(39, 1, 'Neque sed soluta asperiores iure delectus harum debitis.', 'neque-sed-soluta-asperiores-iure-delectus-harum-debitis', 'Vel alias eum iste autem ut qui. Minima reprehenderit doloremque est facilis nesciunt. Esse quis ut et et.', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '33.jpg'),
(40, 3, 'Magnam qui nisi ad consequatur perspiciatis nulla.', 'magnam-qui-nisi-ad-consequatur-perspiciatis-nulla', 'Occaecati officiis est voluptatem et. Eum sunt placeat possimus est magnam aliquid quod. Sed voluptates at placeat et adipisci sed quae.', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '2020-12-08 02:59:17', '34.jpg'),
(41, 2, 'Voluptatem fuga aut natus laborum id quos itaque.', 'voluptatem-fuga-aut-natus-laborum-id-quos-itaque', '<p>Non consequuntur harum autem molestiae ullam expedita. Saepe rerum quia velit illo rerum et earum. Ipsam quod consectetur et fugiat voluptatem voluptatem ut consectetur.</p>', '2020-12-08 02:59:20', '2020-12-08 02:59:20', '2020-12-16 03:32:01', 'noimage.jpg'),
(42, 4, 'Quibusdam commodi totam et quos rerum perferendis aut molestiae.', 'quibusdam-commodi-totam-et-quos-rerum-perferendis-aut-molestiae', 'Voluptates sit architecto dolor corporis hic. Quia doloremque rerum reprehenderit consequatur fuga. Laudantium animi ullam nobis quibusdam libero ut.', '2020-12-08 02:59:20', '2020-12-08 02:59:20', '2020-12-08 02:59:20', '35.jpg'),
(43, 4, 'Nam aut nobis nihil quasi.', 'nam-aut-nobis-nihil-quasi', 'Deserunt velit repellendus qui dolores dignissimos temporibus. Inventore temporibus iure ab expedita. At eum ut sed est. Debitis neque reprehenderit id voluptate animi qui sit.', '2020-12-08 02:59:20', '2020-12-08 02:59:20', '2020-12-08 02:59:20', 'noimage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-12-06 00:22:35', '2020-12-06 00:22:35'),
(2, 'Author', '2020-12-06 00:22:35', '2020-12-06 00:22:35'),
(3, 'Advertiser', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 1, NULL, NULL),
(3, 3, 1, NULL, NULL),
(4, 2, 5, NULL, NULL),
(5, 3, 3, NULL, NULL),
(6, 2, 2, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 2, 6, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 8, NULL, NULL),
(11, 2, 4, NULL, NULL),
(12, 2, 10, NULL, NULL),
(13, 2, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'impedit', 'impedit', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(2, 'ut', 'ut', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(3, 'et', 'et', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(4, 'tempore', 'tempore', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(5, 'commodi', 'commodi', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(6, 'ipsa', 'ipsa', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(7, 'corporis', 'corporis', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(8, 'facere', 'facere', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(9, 'unde', 'unde', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(10, 'illum', 'illum', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(11, 'est', 'est', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(12, 'inventore', 'inventore', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(13, 'repellat', 'repellat', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(14, 'sint', 'sint', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(15, 'vel', 'vel', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(16, 'reprehenderit', 'reprehenderit', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(17, 'delectus', 'delectus', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(18, 'dolores', 'dolores', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(19, 'rem', 'rem', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(20, 'tenetur', 'tenetur', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(21, 'molestiae', 'molestiae', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(22, 'minima', 'minima', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(23, 'voluptatem', 'voluptatem', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(24, 'officia', 'officia', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(25, 'provident', 'provident', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(26, 'quasi', 'quasi', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(27, 'ea', 'ea', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(28, 'in', 'in', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(29, 'quis', 'quis', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(30, 'excepturi', 'excepturi', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(31, 'quas', 'quas', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(32, 'alias', 'alias', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(33, 'iusto', 'iusto', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(34, 'odio', 'odio', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(35, 'quo', 'quo', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(36, 'modi', 'modi', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(37, 'ab', 'ab', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(38, 'qui', 'qui', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(39, 'deleniti', 'deleniti', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(40, 'veritatis', 'veritatis', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(41, 'perferendis', 'perferendis', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(42, 'ipsam', 'ipsam', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(43, 'numquam', 'numquam', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(44, 'distinctio', 'distinctio', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(45, 'aut', 'aut', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(46, 'harum', 'harum', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(47, 'iure', 'iure', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(48, 'ad', 'ad', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(49, 'sapiente', 'sapiente', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(50, 'illo', 'illo', '2020-12-07 21:56:39', '2020-12-07 21:56:39'),
(51, 'maxime', 'maxime', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(52, 'consequuntur', 'consequuntur', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(53, 'quae', 'quae', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(54, 'aperiam', 'aperiam', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(55, 'sed', 'sed', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(56, 'rerum', 'rerum', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(57, 'fuga', 'fuga', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(58, 'temporibus', 'temporibus', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(59, 'mollitia', 'mollitia', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(60, 'ducimus', 'ducimus', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(61, 'amet', 'amet', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(62, 'labore', 'labore', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(63, 'magnam', 'magnam', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(64, 'dolor', 'dolor', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(65, 'possimus', 'possimus', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(66, 'velit', 'velit', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(67, 'doloribus', 'doloribus', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(68, 'suscipit', 'suscipit', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(69, 'neque', 'neque', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(70, 'consectetur', 'consectetur', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(71, 'cumque', 'cumque', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(72, 'cum', 'cum', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(73, 'blanditiis', 'blanditiis', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(74, 'similique', 'similique', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(75, 'praesentium', 'praesentium', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(76, 'dolorum', 'dolorum', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(77, 'nesciunt', 'nesciunt', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(78, 'vero', 'vero', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(79, 'laborum', 'laborum', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(80, 'minus', 'minus', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(81, 'hic', 'hic', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(82, 'occaecati', 'occaecati', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(83, 'voluptatum', 'voluptatum', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(84, 'eveniet', 'eveniet', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(85, 'nostrum', 'nostrum', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(86, 'nobis', 'nobis', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(87, 'quidem', 'quidem', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(88, 'asperiores', 'asperiores', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(89, 'exercitationem', 'exercitationem', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(90, 'error', 'error', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(91, 'perspiciatis', 'perspiciatis', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(92, 'maiores', 'maiores', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(93, 'aliquid', 'aliquid', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(94, 'quos', 'quos', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(95, 'animi', 'animi', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(96, 'voluptates', 'voluptates', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(97, 'pariatur', 'pariatur', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(98, 'optio', 'optio', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(99, 'sunt', 'sunt', '2020-12-07 22:00:22', '2020-12-07 22:00:22'),
(100, 'esse', 'esse', '2020-12-07 22:00:22', '2020-12-07 22:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `profile`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$bBliifRSsr1Egnu2BRhk.Ox.BHM8XS9s0lQrRtakUg1rifCE4E1lG', NULL, '2020-12-16 02:32:54', '2020-12-16 02:32:54', 'noimage.jpg'),
(2, 'Author', 'author@author.com', NULL, '$2y$10$tUTSRsUsH3NCUMlBLcuu0.8WuEVrbI7r2v4kU64SMkcwm5cuC4z4.', NULL, '2020-12-16 02:32:54', '2020-12-16 02:32:54', 'noimage.jpg'),
(3, 'Advertiser', 'advertiser@advertiser.com', NULL, '$2y$10$g/I.NWbxD.0DAdcF2Y0TpeRkzXmm.7mOis5kebZ.ohKEi32qgrNhe', NULL, '2020-12-16 02:32:54', '2020-12-16 02:32:54', 'noimage.jpg'),
(4, 'Sammy Rippin', 'bergstrom.cecile@example.org', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', '1.jpg'),
(5, 'Aditya Green', 'tgutkowski@example.com', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', 'noimage.jpg'),
(6, 'Kasey Ullrich Jr.', 'nathan.hamill@example.org', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', 'noimage.jpg'),
(7, 'Dr. Jamaal Zemlak Jr.', 'predovic.trever@example.net', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', '2.jpg'),
(8, 'Miss Dessie Nader', 'jschimmel@example.com', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', '3.jpg'),
(9, 'Milford Nitzsche', 'olen66@example.org', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', '5.jpg'),
(10, 'Velma Hudson II', 'clebsack@example.com', NULL, '123456789', NULL, '2020-12-16 02:34:28', '2020-12-16 02:34:28', '4.jpg'),
(11, 'User', 'user@user.com', NULL, '$2y$10$6ZkmwBiYXj4qpuWfNxX70.ll/ZgJ4RJZ.jJk2b/HtEdYm7iBiA1hy', NULL, '2020-12-16 19:46:20', '2020-12-16 19:46:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_url_unique` (`url`),
  ADD KEY `pages__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
