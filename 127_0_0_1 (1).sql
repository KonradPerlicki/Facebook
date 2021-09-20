-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Wrz 2021, 14:54
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `facebook`
--
CREATE DATABASE IF NOT EXISTS `facebook` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `facebook`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `failed_jobs`
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
-- Struktura tabeli dla tabeli `friends`
--

CREATE TABLE `friends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `friend_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `created_at`, `updated_at`) VALUES
(12, 17, 16, '2021-09-19 09:53:44', '2021-09-19 09:53:44'),
(13, 16, 17, '2021-09-19 09:53:44', '2021-09-19 09:53:44');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `invites`
--

CREATE TABLE `invites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `is_accepted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 7, 18, '2021-09-19 09:18:42', '2021-09-19 09:18:42', NULL),
(2, 2, 4, '2021-09-19 09:18:42', '2021-09-19 09:18:42', NULL),
(3, 11, 12, '2021-09-19 09:18:42', '2021-09-19 09:18:42', NULL),
(4, 1, 13, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(5, 13, 14, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(6, 7, 5, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(7, 11, 6, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(8, 12, 5, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(9, 14, 19, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(10, 2, 14, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(11, 11, 4, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(12, 8, 7, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(13, 7, 4, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(14, 6, 18, '2021-09-19 09:18:43', '2021-09-19 09:18:43', NULL),
(15, 14, 19, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(16, 8, 6, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(17, 10, 8, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(18, 1, 3, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(19, 14, 17, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(20, 6, 8, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(21, 7, 16, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(22, 5, 10, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(23, 6, 2, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(24, 11, 16, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(25, 14, 4, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(26, 12, 10, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(27, 3, 11, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(28, 13, 7, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(29, 3, 14, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(30, 5, 10, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(31, 9, 20, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(32, 1, 4, '2021-09-19 09:18:44', '2021-09-19 09:18:44', NULL),
(33, 8, 20, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(34, 11, 15, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(35, 11, 10, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(36, 6, 7, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(37, 9, 3, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(38, 1, 10, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(39, 4, 1, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(40, 5, 13, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(41, 8, 18, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(42, 1, 12, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(43, 8, 17, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(44, 1, 14, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(45, 13, 10, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(46, 6, 1, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(47, 3, 15, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(48, 11, 1, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(49, 14, 18, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(50, 4, 2, '2021-09-19 09:18:45', '2021-09-19 09:18:45', NULL),
(51, 10, 7, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(52, 4, 9, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(53, 2, 8, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(54, 15, 2, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(55, 1, 6, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(56, 4, 9, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(57, 12, 1, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(58, 4, 19, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(59, 3, 15, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(60, 12, 13, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(61, 14, 9, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(62, 11, 19, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(63, 14, 1, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(64, 8, 7, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(65, 12, 3, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(66, 3, 4, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(67, 5, 5, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(68, 12, 5, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(69, 12, 2, '2021-09-19 09:18:46', '2021-09-19 09:18:46', NULL),
(70, 12, 3, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(71, 1, 6, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(72, 5, 4, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(73, 5, 5, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(74, 15, 18, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(75, 9, 18, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(76, 5, 5, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(77, 6, 2, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(78, 1, 11, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(79, 3, 16, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(80, 1, 6, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(81, 13, 18, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(82, 8, 3, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(83, 9, 7, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(84, 3, 11, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(85, 11, 20, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(86, 11, 8, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(87, 14, 5, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(88, 1, 4, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(89, 14, 4, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(90, 13, 8, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(91, 1, 19, '2021-09-19 09:18:47', '2021-09-19 09:18:47', NULL),
(92, 12, 9, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(93, 5, 20, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(94, 12, 2, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(95, 14, 12, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(96, 13, 19, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(97, 9, 15, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(98, 7, 19, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(99, 7, 18, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(100, 10, 6, '2021-09-19 09:18:48', '2021-09-19 09:18:48', NULL),
(101, 16, 21, '2021-09-19 09:54:19', '2021-09-19 09:54:19', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_20_080359_create_groups_table', 1),
(6, '2021_08_20_080436_create_courses_table', 1),
(7, '2021_08_22_111150_create_posts_table', 1),
(8, '2021_08_24_093824_create_settings_table', 1),
(9, '2021_08_25_124108_create_likes_table', 1),
(10, '2021_08_28_172727_create_friends_table', 1),
(11, '2021_08_28_211349_create_invites_table', 1),
(12, '2021_08_29_120549_create_notifications_table', 1),
(13, '2021_09_11_194939_create_stories_table', 1),
(14, '2021_09_12_163302_create_viewed_stories_table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `additional_id` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `notifications`
--

INSERT INTO `notifications` (`id`, `from_user_id`, `to_user_id`, `content`, `seen`, `type`, `additional_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 17, 16, ' sent you a friend request.', 1, 'friend', 2, '2021-09-19 09:52:59', '2021-09-19 09:53:47', NULL),
(15, 16, 17, ' sent you a friend request.', 1, 'friend', 2, '2021-09-19 09:53:11', '2021-09-19 09:53:44', NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `personal_access_tokens`
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
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who_can_see` tinyint(4) NOT NULL DEFAULT 2,
  `allow_comments` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `image`, `video`, `who_can_see`, `allow_comments`, `created_at`, `updated_at`) VALUES
(1, 8, 'Voluptatem voluptas dolorem est debitis fugiat. Eaque ut qui qui sed dolorum. Ad ut ut laudantium debitis. Sed voluptatem ut quaerat impedit ab. Consequuntur molestiae asperiores aut dolore. Ab sit eligendi molestias quae. Qui est laboriosam quaerat. Assumenda libero vitae ut optio et vel optio.', 'https://via.placeholder.com/640x480.png/0044cc?text=esse', NULL, 2, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(2, 15, 'Natus consequatur debitis est nam odio sint in. Nobis cum quia adipisci vero officia ad. Ea et reiciendis aliquam est veniam sit esse. Aperiam quos aspernatur facilis. Dolore sint optio possimus ut laborum. Ullam repellat laboriosam at voluptatem asperiores eos. Est rerum commodi fugit dolorem inventore.', 'https://via.placeholder.com/640x480.png/000066?text=vel', NULL, 2, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(3, 8, 'Laborum perferendis suscipit blanditiis omnis vero quo. Dolores perferendis iste aut dolor ea animi. Quia incidunt itaque voluptatem amet. Vero hic rerum ut ad est voluptatem. Ipsum porro eum et sed.', 'https://via.placeholder.com/640x480.png/004488?text=consequuntur', NULL, 2, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(4, 7, 'Odio incidunt sint et. Sed qui recusandae ut eligendi odit qui sit. Nostrum harum eligendi doloribus. Tenetur totam ipsa molestias molestias est minus. Ab quam qui odio aut nam nobis et. Enim nisi ea velit est. Odio molestias necessitatibus temporibus. Qui occaecati alias aut dolores velit modi. Maxime recusandae assumenda ut ipsam officiis ut.', 'https://via.placeholder.com/640x480.png/0066ee?text=adipisci', NULL, 2, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(5, 1, 'Repellendus animi alias asperiores eligendi nostrum unde. Ipsum tempora qui sit molestias a cupiditate quas. Non laborum in esse enim voluptatibus. Quam aliquid voluptatem in quasi dicta. Nihil voluptate ipsum blanditiis nihil. Sit amet velit repudiandae pariatur. Et placeat non enim aut veritatis voluptas voluptas.', 'https://via.placeholder.com/640x480.png/00ee44?text=assumenda', NULL, 1, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(6, 15, 'Dignissimos autem debitis odio id ratione nemo. Sint velit possimus ducimus voluptatem et sit cum. A aut eveniet eligendi. Repellendus deserunt non nulla magni nemo sunt nostrum ullam. Fuga occaecati debitis perspiciatis dolores cum. Aperiam quo unde corrupti a officia odio.', 'https://via.placeholder.com/640x480.png/006622?text=voluptatibus', NULL, 1, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(7, 8, 'Voluptatem voluptatum aliquam autem saepe ad aspernatur voluptatem consequatur. Quaerat deleniti molestias perspiciatis sit ea autem eos. Possimus repellendus officiis quasi rem quia. Porro consequatur quis velit quia maxime id ratione. Aut adipisci minima et iure blanditiis. Est omnis cum dolore quia voluptatem. Fuga reprehenderit consequatur excepturi incidunt eligendi quis.', 'https://via.placeholder.com/640x480.png/0088aa?text=incidunt', NULL, 0, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(8, 15, 'Cupiditate assumenda molestiae dolorum aut omnis. Minima ullam hic porro sunt quisquam laboriosam eius quia. Rerum magnam facere officiis tempora ratione. Et voluptatem facere distinctio rerum velit nulla.', 'https://via.placeholder.com/640x480.png/000088?text=dicta', NULL, 0, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(9, 2, 'Velit asperiores qui at recusandae facilis quis ut expedita. Aut a fuga cupiditate qui. Et doloribus et et voluptatem recusandae ducimus. Ut voluptatem qui dolores itaque voluptas ullam et. Repudiandae nobis autem accusamus magnam est odio. Repellendus adipisci vitae ea non quo harum. Cumque harum et explicabo. Consectetur similique harum veniam dolores expedita.', 'https://via.placeholder.com/640x480.png/0088cc?text=voluptas', NULL, 2, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(10, 12, 'Laborum sit neque odit quidem. Illum inventore ipsa veritatis provident aliquid et quis. Dolores magni excepturi ea iure accusamus sed dolorum. Nesciunt odit doloremque est voluptas rerum. Et voluptas et harum ratione ut nulla. Alias ullam recusandae laboriosam perspiciatis voluptas libero. Quod voluptas explicabo ipsa dolores eos unde optio.', 'https://via.placeholder.com/640x480.png/009944?text=ipsam', NULL, 0, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(11, 2, 'Earum sit sed tempora itaque. Illum optio voluptas animi consequatur facere. Vel id praesentium qui dolor a. Molestias quia illo distinctio ut dignissimos atque. Ut omnis neque delectus nesciunt qui perferendis aut in. Temporibus ut quam officiis laboriosam facilis aliquam. Natus sint sunt fugiat. In id occaecati quasi omnis ad cum. Voluptas sequi assumenda nesciunt corporis sit quia.', 'https://via.placeholder.com/640x480.png/0011ff?text=et', NULL, 1, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(12, 8, 'Magni accusamus accusamus molestiae est consequatur. Quae voluptatem ratione quis odio. Cupiditate exercitationem id vel perspiciatis aut dolor. Nihil inventore nesciunt id consequatur doloremque omnis. Ut laborum sunt est aspernatur suscipit. Tempora aut sed consequatur nemo delectus illum tenetur. Quos nesciunt consequatur quis dolorem.', 'https://via.placeholder.com/640x480.png/005566?text=a', NULL, 1, 1, '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(13, 14, 'Incidunt assumenda eos ipsum et repellat unde voluptate. Aut voluptate quae est. Fugiat ex error natus reprehenderit. Sed quod ut harum assumenda voluptatem cupiditate fuga. Consequatur consequatur ipsa nostrum autem maiores id et.', 'https://via.placeholder.com/640x480.png/006688?text=non', NULL, 1, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(14, 1, 'Incidunt expedita eveniet dicta voluptatem. Numquam corrupti mollitia eveniet sit recusandae similique. Asperiores non exercitationem ut et harum id. Accusamus aliquam dolore doloremque reprehenderit magnam rem.', 'https://via.placeholder.com/640x480.png/000088?text=ut', NULL, 0, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(15, 4, 'Enim a eum quasi qui. Dolores cupiditate et nam aliquid. Beatae voluptatem et enim tempore animi tenetur possimus. Voluptatem non nisi magnam quas ut animi. Consequatur voluptate accusantium velit voluptatem.', 'https://via.placeholder.com/640x480.png/00bb11?text=delectus', NULL, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(16, 5, 'Cupiditate repudiandae ad ut id molestias illum. Et fugit quam odit dignissimos ipsa voluptate est. Nisi officiis ut modi facilis eos. Totam sapiente magnam ut deserunt excepturi accusantium assumenda. Mollitia sequi aut doloribus sed. Facilis fuga sit atque dolores est non. Aperiam delectus odit assumenda occaecati itaque.', 'https://via.placeholder.com/640x480.png/008800?text=natus', NULL, 0, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(17, 7, 'Mollitia non ut qui et. Aut aperiam nam vero molestias enim enim. Itaque et occaecati quo voluptatem esse. Voluptate magnam dolorum ipsum quaerat soluta aliquam aut. Eius cumque tenetur doloremque. Fuga repellendus sed quia culpa.', 'https://via.placeholder.com/640x480.png/00ff00?text=nesciunt', NULL, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(18, 1, 'Explicabo rerum cum tempora ipsa. Voluptates rerum eum similique nostrum quia. Dolor quia expedita dolorum ut. Soluta aut at harum ea recusandae. Dolorum quia perferendis dolorem enim. Voluptates et quo recusandae.', 'https://via.placeholder.com/640x480.png/0000ee?text=quis', NULL, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(19, 14, 'Ipsum modi harum ut saepe suscipit. Magnam rem est amet at sit vel qui. Repudiandae ut alias reprehenderit voluptatem. Et laudantium sit libero in quis aut ut cum. Earum et dignissimos aut a dicta voluptas sint et.', 'https://via.placeholder.com/640x480.png/004422?text=ducimus', NULL, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(20, 10, 'Rerum nam veritatis facere. Minus sunt et sapiente rerum incidunt aut illo. Eligendi non repellat accusantium dolor esse soluta dicta. Porro asperiores qui impedit. Placeat quo non et rerum. Aut provident qui ad quo.', 'https://via.placeholder.com/640x480.png/00ddff?text=dolor', NULL, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(21, 16, '* Konrad has just updated his profile image *', 'public/profile_image/95HX37VDx43LfWlHOeFltHHf6xH7puADLOCzucwm.jpg', NULL, 2, 1, '2021-09-19 09:26:27', '2021-09-19 09:26:27');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `who_can_follow` tinyint(4) NOT NULL DEFAULT 2,
  `show_my_activities` tinyint(4) NOT NULL DEFAULT 2,
  `display_in_search_engine` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `settings`
--

INSERT INTO `settings` (`id`, `user_id`, `who_can_follow`, `show_my_activities`, `display_in_search_engine`, `created_at`, `updated_at`) VALUES
(1, 13, 2, 0, 0, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(2, 2, 0, 2, 0, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(3, 2, 1, 1, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(4, 12, 1, 2, 0, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(5, 14, 1, 1, 0, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(6, 5, 2, 1, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(7, 9, 0, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(8, 4, 0, 0, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(9, 15, 1, 2, 1, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(10, 15, 1, 1, 0, '2021-09-19 09:18:41', '2021-09-19 09:18:41'),
(11, 3, 1, 2, 1, '2021-09-19 09:18:42', '2021-09-19 09:18:42'),
(12, 2, 2, 0, 0, '2021-09-19 09:18:42', '2021-09-19 09:18:42'),
(13, 12, 1, 0, 1, '2021-09-19 09:18:42', '2021-09-19 09:18:42'),
(14, 11, 0, 0, 0, '2021-09-19 09:18:42', '2021-09-19 09:18:42'),
(15, 2, 2, 1, 1, '2021-09-19 09:18:42', '2021-09-19 09:18:42'),
(16, 16, 2, 2, 1, '2021-09-19 09:23:05', '2021-09-19 09:23:05'),
(17, 17, 2, 2, 1, '2021-09-19 09:27:25', '2021-09-19 09:27:25'),
(18, 18, 2, 2, 1, '2021-09-19 10:14:58', '2021-09-19 10:14:58'),
(19, 19, 2, 2, 1, '2021-09-19 10:17:01', '2021-09-19 10:17:01');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `who_can_see` tinyint(4) NOT NULL,
  `views` int(11) NOT NULL DEFAULT 0,
  `expires_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth_date` date NOT NULL,
  `about_me` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'profile_image/user.png',
  `background_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'background_image/background.jpg',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `gender`, `birth_date`, `about_me`, `location`, `working_at`, `relationship`, `phone`, `profile_image`, `background_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Haylie', 'Williamson', 'pollich.kacie', 'juanita.oconner@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1998-08-18', 'Dolorum porro quia ad omnis ea ullam eos.', '1148 Jakob Plaza', 'Hintz, Kiehn and McGlynn', NULL, '381278933', 'profile_image/user.png', 'background_image/background.jpg', 'fzbxj23q6cud94zOf1oWWQuGyOl7xhcCKyt8oNq1kRPiZ3P6J1VyKXACIGxM', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(2, 'Sunny', 'Franecki', 'schmitt.lilla', 'elsie.hauck@example.org', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1978-07-07', 'Quia maiores asperiores ut aut perferendis cupiditate doloribus consequuntur tenetur consequatur qui molestias.', '272 O\'Hara Keys', 'O\'Hara-Mante', NULL, '270033514', 'profile_image/user.png', 'background_image/background.jpg', '7MWnk6uDjCP05Ll6kJnGN9ps3dqkjcHDayTeIXsGen2GwyNYDcROalTuE9j3', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(3, 'Stanford', 'Flatley', 'rosalinda74', 'jasen10@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2011-12-07', 'Voluptatem quo aut autem voluptates facilis quo eaque vero voluptates porro.', '190 Isaac Parks Suite 036', 'Reilly-Johnson', NULL, '969500589', 'profile_image/user.png', 'background_image/background.jpg', 'MmkNzm3Nbw9j2IPq1lqrGk8mCMiB1XRv2aVs9t46cZrubf9i5CUGzy4BWokl', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(4, 'Granville', 'Torp', 'gcorkery', 'marco.gulgowski@example.org', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1977-04-13', 'Sit quia voluptate facilis distinctio debitis reiciendis sint occaecati et quasi nihil.', '8088 Sandy Cliffs Suite 105', 'Krajcik, Schiller and Rogahn', NULL, '636524719', 'profile_image/user.png', 'background_image/background.jpg', 'RjNfsiTxx2s1PJ91k58Zsjetj3Jxatu0wuEBpzJLNMqLcwz3Al11jYcDLNcZ', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(5, 'Delta', 'Muller', 'cruz.mayer', 'qrau@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2018-11-27', 'Laborum quas deserunt sed officiis iusto est.', '4058 Monica Square', 'Blanda, Smitham and Gutkowski', NULL, '658241307', 'profile_image/user.png', 'background_image/background.jpg', 'Kt7rxNMlvOh50WhN7SOpYB6Qu6DWzcQk30E6w5gSNOoM553La5moPFjzDad2', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(6, 'Layla', 'Schroeder', 'lockman.santiago', 'wilfred.barton@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1991-08-11', 'Deleniti expedita veritatis voluptatem ut quasi ipsa.', '7263 Beatty Ville', 'McKenzie Inc', NULL, '722143669', 'profile_image/user.png', 'background_image/background.jpg', 'gSyeh0TZb9Ae3XJ0osjoScy68ZxIYiNwNvAhXAeUc28sBovth11zyRBNHyrt', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(7, 'Evert', 'Goyette', 'kailee36', 'warmstrong@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1993-11-20', 'Accusantium eum et cupiditate praesentium sapiente excepturi dignissimos voluptate magni quo rem dignissimos.', '6685 Denesik Inlet Apt. 460', 'Turcotte, Rogahn and Sawayn', NULL, '866734279', 'profile_image/user.png', 'background_image/background.jpg', 'ln2JrkktVf2d7jAMxrR7PdlBUnAKC0poXWiWp6SrfRYCvZo0DQaOkLUEPFsC', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(8, 'Lou', 'Carter', 'oleta.labadie', 'windler.triston@example.com', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1993-08-05', 'Distinctio quos fugit in eum voluptas deleniti et totam consectetur voluptatem doloremque eos vel.', '53531 Witting Tunnel Suite 374', 'Strosin Inc', NULL, '823760439', 'profile_image/user.png', 'background_image/background.jpg', 'DS54dAfil3X6khkpIiXu5xCjZtgySAHEl0SniLn4E63DiEffAAW9mh4xwIIx', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(9, 'Federico', 'Hane', 'coralie22', 'schroeder.sibyl@example.com', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1991-06-22', 'Sunt in dolor laborum nihil autem et repellendus eum aliquid quia ut.', '394 Treutel Points Suite 082', 'Gerlach-Boehm', NULL, '502373288', 'profile_image/user.png', 'background_image/background.jpg', 'BYZxs1C7veJrkqqKJja8r8vuRnHaRkL71ObgqsyqzwylcIK85gCydnT1X4qS', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(10, 'Deshaun', 'Harris', 'hartmann.jarred', 'anderson.felicity@example.com', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2017-07-25', 'Qui consequatur eaque libero repudiandae possimus magnam ea.', '9613 Cali Island Suite 826', 'Hintz-Cartwright', NULL, '456736554', 'profile_image/user.png', 'background_image/background.jpg', 'DZHo51ayUcIonTzjTOlTVgu1blfFl5mPg3lVn3iQh8k70RIkCCqKtTMMVjHL', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(11, 'Josefina', 'Luettgen', 'goldner.josefina', 'frederik72@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2017-01-11', 'Doloremque voluptatem cum earum dolore eaque dolor aut tempore tempora totam accusantium.', '287 Rowan Roads', 'Runte-Mitchell', NULL, '569270066', 'profile_image/user.png', 'background_image/background.jpg', 'UuPTAAjLDupKXdt9GCMsLXOVCgyXzys7xVc6mfdPmnIge8LDC5WdxQKLKi8T', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(12, 'Alba', 'West', 'maxine.smitham', 'bins.rocio@example.org', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1975-09-03', 'Iusto consequuntur sed dolorem magni aut doloremque officia eveniet suscipit aspernatur.', '4268 Coralie Forest Suite 870', 'McClure, Upton and Koepp', NULL, '448616120', 'profile_image/user.png', 'background_image/background.jpg', 'mqffvA7vwqtQBmNSFMVOgcHYEV4kOeD6E8DQJLczyiFImwtJQXqNi1INcgqM', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(13, 'Gloria', 'Cassin', 'jasper.hagenes', 'hanna00@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1981-12-31', 'Similique nobis velit aliquam perferendis voluptatem distinctio quo ad est optio sequi eum.', '1338 Mertz Route Apt. 590', 'Rempel and Sons', NULL, '618744320', 'profile_image/user.png', 'background_image/background.jpg', 'vTdfZ6cJ8MUbUcPatwIAbsTxJdUitsDpk0OLGKr0lyQMD7z9Fr8RxbdLS8im', '2021-09-19 09:18:39', '2021-09-19 09:18:39'),
(14, 'Oliver', 'Mills', 'ansley.ondricka', 'bednar.wallace@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2018-12-06', 'Qui dolorem nesciunt odit molestiae ab aut aspernatur corrupti incidunt consequuntur.', '2119 Adams Manors', 'Pouros Ltd', NULL, '396397051', 'profile_image/user.png', 'background_image/background.jpg', 'ZGMR4YTCBsbleRoORuZXiICXEfwHTEEPNoTPDtJ5ExQRDRXvSXJXetP2NyjW', '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(15, 'Raul', 'Parisian', 'jjohnson', 'elisha.feeney@example.net', '2021-09-19 09:18:39', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2020-05-06', 'Illo ut rerum doloribus et ea quam sed esse ab ipsum doloribus aut.', '824 Coleman Shoals', 'Schmeler PLC', NULL, '182329807', 'profile_image/user.png', 'background_image/background.jpg', 'u1RloSJ2n8fsf1sPeTdI38qvEdf9rVDfS981ZftUsmaOlDLbRqRS2fUD2OoE', '2021-09-19 09:18:40', '2021-09-19 09:18:40'),
(16, 'Konrad', 'Perlicki', 'vbgfhxg', 'konrad.perlicki01@gmail.com', '2021-09-19 09:25:44', '$2y$10$GjLWz.81TRLwebFPskhuqONWPzPw3MON8YBEb38HHWyVc/uctI7tG', 'Male', '2021-09-16', NULL, NULL, NULL, 'None', '788943832', 'public/profile_image/95HX37VDx43LfWlHOeFltHHf6xH7puADLOCzucwm.jpg', 'background_image/background.jpg', 'mmRZVJI7Xgv2AXIDMu9uCqxEILjXH8mhKstVj3cFsD6Vrs0t7aM3kPj2XraM', '2021-09-19 09:22:57', '2021-09-19 09:26:27'),
(17, 'tata', 'Perlicki', 'tata', 'tata.wawa@onet.pl', '2021-09-19 09:27:33', '$2y$10$ffBoP4OyNdCEDf6yucJTK.di9/2jtLv/dI6aMwtEM1xSU6Bm/a30q', 'Female', '2021-09-08', NULL, NULL, NULL, NULL, '674067813', 'profile_image/user.png', 'background_image/background.jpg', 'w6H3KsaF8SNNg6BCwut7cxrgDM3BjMkLneV0NyeYKA39l55Gbsw19X1RiLIE', '2021-09-19 09:27:23', '2021-09-19 09:27:33'),
(18, 'brbb', 'brbrbr', 'brbrbr', 'buba@gmail.com', NULL, '$2y$10$VdY5cn/9IoGWl/7QIDzmyeOMG0SLpRWq6r1cwX1P3WkdSSFjV0oH2', 'Female', '2021-09-07', NULL, NULL, NULL, NULL, NULL, 'profile_image/user.png', 'background_image/background.jpg', NULL, '2021-09-19 10:14:41', '2021-09-19 10:14:41'),
(19, 'Konrad', 'Perlicki', 'saddsa', 'konrad4242@autograf.pl', NULL, '$2y$10$pRqDHdz99430yHKwvytXwu/b12S9r6ywCeK1P4BTEjoxe.4pCCVfe', 'Female', '2021-09-08', NULL, NULL, NULL, NULL, '674067823', 'profile_image/user.png', 'background_image/background.jpg', NULL, '2021-09-19 10:16:58', '2021-09-19 10:16:58');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `viewed_stories`
--

CREATE TABLE `viewed_stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `story_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeksy dla tabeli `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friends_user_id_foreign` (`user_id`),
  ADD KEY `friends_friend_id_foreign` (`friend_id`);

--
-- Indeksy dla tabeli `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `invites`
--
ALTER TABLE `invites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invites_sender_id_foreign` (`sender_id`),
  ADD KEY `invites_receiver_id_foreign` (`receiver_id`);

--
-- Indeksy dla tabeli `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_user_id_foreign` (`user_id`),
  ADD KEY `likes_post_id_foreign` (`post_id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_from_user_id_foreign` (`from_user_id`),
  ADD KEY `notifications_to_user_id_foreign` (`to_user_id`);

--
-- Indeksy dla tabeli `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeksy dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stories_user_id_foreign` (`user_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indeksy dla tabeli `viewed_stories`
--
ALTER TABLE `viewed_stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `viewed_stories_user_id_foreign` (`user_id`),
  ADD KEY `viewed_stories_story_id_foreign` (`story_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `friends`
--
ALTER TABLE `friends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT dla tabeli `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `invites`
--
ALTER TABLE `invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `viewed_stories`
--
ALTER TABLE `viewed_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `friends`
--
ALTER TABLE `friends`
  ADD CONSTRAINT `friends_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `friends_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `invites`
--
ALTER TABLE `invites`
  ADD CONSTRAINT `invites_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `invites_sender_id_foreign` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `notifications_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `settings`
--
ALTER TABLE `settings`
  ADD CONSTRAINT `settings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ograniczenia dla tabeli `viewed_stories`
--
ALTER TABLE `viewed_stories`
  ADD CONSTRAINT `viewed_stories_story_id_foreign` FOREIGN KEY (`story_id`) REFERENCES `stories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `viewed_stories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
