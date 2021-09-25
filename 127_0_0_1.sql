-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Wrz 2021, 14:18
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
-- Struktura tabeli dla tabeli `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 10, 9, 'Quae delectus vitae sed aspernatur omnis atque. Tenetur numquam qui laborum mollitia expedita.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(2, 14, 14, 'Quis voluptas est quam occaecati sequi et et recusandae. Et ipsum voluptatum dolor harum. Expedita sint quo ipsa perferendis fuga tempore nemo.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(3, 2, 14, 'Et sit dolores deserunt quis aut. Voluptas quo doloremque neque est consequatur. Et accusantium odio saepe ut quo alias.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(4, 13, 15, 'Nihil nihil maxime odio consequuntur ducimus. Et explicabo incidunt sunt qui enim. Sit facere et culpa non.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(5, 15, 14, 'Earum quia voluptatem nihil ut voluptas. Quo ipsa aut nam nihil at quia eum.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(6, 18, 6, 'Blanditiis nulla voluptate qui accusamus voluptatum qui ut. Corrupti accusamus delectus nemo in consequatur minima illo.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(7, 16, 12, 'Ut doloremque necessitatibus ipsum alias. Et nisi hic ab iusto.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(8, 3, 6, 'Eos ea qui voluptates sint. Recusandae asperiores qui ex voluptatem.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(9, 4, 10, 'Occaecati sed voluptates quisquam adipisci sunt ut. Ipsam quia autem doloremque ut. Aliquam dolor qui et omnis ab fugit molestiae.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(10, 17, 15, 'Nobis et rerum eaque est. Maxime praesentium iusto possimus eum.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(11, 3, 13, 'Veritatis porro dolorum repudiandae non reprehenderit. Perferendis et quia atque.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(12, 6, 2, 'Placeat aspernatur optio sed accusantium tempora temporibus soluta. Nihil tenetur dignissimos non laborum hic. At similique velit sed expedita dolor expedita earum.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(13, 3, 9, 'Id qui voluptatibus ut exercitationem occaecati omnis cumque facilis. Et natus aut eligendi quia.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(14, 3, 4, 'Provident vero accusantium tempore consequatur accusantium. Autem debitis corporis optio consequatur qui repellat hic.', '2021-09-25 09:55:35', '2021-09-25 09:55:35'),
(15, 14, 10, 'In voluptatum voluptas voluptatibus eaque enim. Provident eos inventore quae qui voluptatem ratione omnis. Deserunt accusantium illo tempora in.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(16, 7, 7, 'Eligendi ratione tempora voluptates dolor eaque. Deserunt perferendis cupiditate porro maiores reprehenderit.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(17, 9, 7, 'Sit necessitatibus natus ipsam dolor. Repudiandae ad consequatur dignissimos ut pariatur culpa cum.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(18, 1, 1, 'Iure reprehenderit et aliquam adipisci dolor. Voluptas aut at vero quaerat aut expedita error. Doloribus in molestiae impedit quaerat.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(19, 8, 13, 'Enim fugiat at quos commodi. Qui perferendis incidunt voluptatem id.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(20, 13, 15, 'Ut expedita a vel eaque ut. Omnis quia laboriosam molestiae sint nobis ut.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(21, 18, 12, 'Voluptatem saepe adipisci porro illo. Beatae harum est ab distinctio perferendis labore. Maiores esse dolorem similique voluptate iusto.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(22, 8, 3, 'Nobis laborum a et nobis modi. Amet hic tenetur rerum inventore nobis rem quia quaerat.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(23, 10, 1, 'Explicabo necessitatibus dignissimos necessitatibus beatae. Excepturi impedit dolorem repellat. Quis soluta molestiae facere id aspernatur aut.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(24, 16, 11, 'Aut beatae dolor aspernatur minima dolores alias ratione. Impedit beatae distinctio quos temporibus ipsam vel.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(25, 10, 15, 'Tenetur aspernatur laboriosam iste rerum quia est quo quidem. Dolorem sed sed dolorem inventore pariatur. Illo eum rerum excepturi odio quo voluptas.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(26, 20, 15, 'Non quibusdam est rem odit animi nesciunt est. Numquam non qui dolorum suscipit eius et. At atque aliquid et est.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(27, 3, 14, 'Quia quisquam praesentium pariatur dolores et mollitia corporis omnis. Maxime dicta culpa fugiat voluptatem. Corrupti error aperiam quasi nostrum recusandae.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(28, 1, 3, 'Necessitatibus et et nemo sed rerum. Pariatur velit dolorem quo.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(29, 6, 5, 'Quos totam nostrum iure unde fuga. Nostrum vero nemo id nemo et molestiae.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(30, 6, 3, 'Aut eum laboriosam velit eos fugit asperiores voluptatibus. Et consequatur quae non quod et veritatis sapiente.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(31, 14, 10, 'Iure quae repudiandae vel ab. Necessitatibus ut ullam laboriosam sunt. Qui nulla sunt in dolor.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(32, 12, 2, 'Molestias magni voluptas est et et quibusdam ducimus magnam. Ut voluptates quo nobis vero. Quae cupiditate accusantium ipsum odio consequuntur.', '2021-09-25 09:55:36', '2021-09-25 09:55:36'),
(33, 4, 8, 'Et voluptates maxime aliquid mollitia perspiciatis iure facere. In vel voluptatem non ea alias.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(34, 19, 13, 'Voluptatem ipsa dolorem a dolorem eligendi. Odio enim dolorem in excepturi corporis et et.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(35, 9, 2, 'Earum molestias molestias perspiciatis modi sit. A consectetur dicta ratione enim voluptas suscipit voluptatem.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(36, 15, 15, 'Tenetur ut consequatur animi reiciendis aut consequatur dolorem. Possimus ut maxime quis sunt molestias eos explicabo.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(37, 11, 7, 'Pariatur pariatur voluptas exercitationem esse iusto dolores veritatis. Voluptas aut enim voluptas aut facere. Omnis vel labore libero et corrupti.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(38, 14, 2, 'Nihil repellat adipisci non pariatur ut dignissimos dignissimos. Maiores id aliquid expedita asperiores ut iure. Incidunt temporibus neque porro vitae impedit sed quos minima.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(39, 7, 2, 'Et et commodi tempora aut nostrum aliquam. Excepturi qui et iusto et ut et.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(40, 18, 10, 'Esse accusantium voluptate nihil vel sit quia. Facere recusandae cupiditate dolor mollitia expedita.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(41, 4, 2, 'Nihil omnis qui est iste qui culpa provident ut. Occaecati nobis eveniet veniam soluta libero sint. Exercitationem dolore sit et harum et blanditiis quae.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(42, 16, 15, 'Eius quidem omnis laudantium ea. Qui quaerat dolore dolore esse. Aut incidunt sequi deserunt quae et.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(43, 19, 15, 'Praesentium delectus quia at praesentium. Nihil dolores perferendis et at quo quasi officiis. Ut at quae eius ipsam.', '2021-09-25 09:55:37', '2021-09-25 09:55:37'),
(44, 13, 2, 'Ad sed aut voluptatem dolor quis. Quas nisi est maxime reiciendis similique vero.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(45, 7, 8, 'Rerum qui placeat rerum est optio dolor. Laudantium aspernatur esse porro enim quae aut eum.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(46, 11, 3, 'Voluptatem dolore aut minus rerum ullam. Eum sequi dolore unde deleniti voluptatem.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(47, 13, 1, 'Rerum molestiae blanditiis ut. Porro molestiae aut eaque ullam. Reiciendis sint illum deleniti id aut non.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(48, 8, 2, 'Eaque fugiat facere repellendus magnam in laudantium voluptates. Ipsa fuga amet officiis qui. Numquam dolores ad aliquid commodi enim velit est.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(49, 9, 10, 'Eveniet repellendus laborum autem nihil quia. Vel asperiores ut et facere nihil facere. Temporibus aperiam facilis neque commodi dolores aut est.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(50, 5, 5, 'Voluptates aut temporibus aspernatur facilis voluptatibus magnam nesciunt. Voluptatem est perferendis tempore facilis eligendi.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(51, 12, 4, 'Praesentium et rerum inventore dolorum qui. Delectus eius facere necessitatibus iste omnis velit. Et molestiae totam pariatur ex voluptas dolor iste.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(52, 2, 8, 'Aut voluptas aut quia doloribus ex rerum vitae. Enim impedit ex quo sit est.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(53, 19, 5, 'Consequatur voluptate est rerum veniam unde animi nisi sed. Velit ducimus architecto et commodi rerum.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(54, 18, 10, 'Non recusandae in corrupti soluta sapiente. Non necessitatibus harum voluptatem quo. Fuga aliquid est aperiam quae veritatis quas.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(55, 15, 14, 'Quod repellendus velit eos molestias est dolores perferendis. Non saepe vel ullam similique. Sed expedita corrupti quia eveniet tempore libero.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(56, 1, 8, 'Quo ut in sint magnam. Qui accusamus repellat dolorum nulla. Rerum nam beatae molestias occaecati consectetur.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(57, 6, 6, 'Voluptatum corrupti ut itaque cupiditate dolore esse eos. Voluptatem molestiae voluptatem qui quod dolor dignissimos velit officiis.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(58, 11, 6, 'Recusandae eaque necessitatibus voluptates maiores. Beatae ipsam quia labore voluptatum aspernatur nisi molestiae omnis.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(59, 6, 12, 'Quia sed exercitationem sequi ex laudantium quibusdam. Inventore consequatur cum alias sint cumque. Et porro facere consequuntur sit sint voluptatem.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(60, 5, 4, 'Ut quisquam dolorem neque sunt non. Nesciunt error voluptas ducimus accusamus saepe.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(61, 13, 2, 'Facilis voluptatum et quibusdam occaecati ut rerum. Sed incidunt et facilis.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(62, 20, 11, 'Eum qui earum esse itaque. Deserunt laboriosam sed quibusdam quisquam incidunt veritatis nihil.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(63, 3, 5, 'Modi dignissimos voluptatem dolore eaque deleniti error. Quisquam molestiae odit iusto est facere. Ut repudiandae quisquam non inventore.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(64, 7, 11, 'Porro est accusamus pariatur temporibus recusandae occaecati. Doloribus laboriosam reprehenderit qui placeat quis sequi.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(65, 16, 6, 'Iste voluptatem laborum odio est voluptas in. Praesentium adipisci dicta officia enim doloremque incidunt asperiores. Dolores voluptatem autem non consequatur.', '2021-09-25 09:55:38', '2021-09-25 09:55:38'),
(66, 17, 11, 'Libero qui rem quas harum. Dolorem sed optio eligendi aut veniam rerum officiis.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(67, 5, 10, 'Quam hic omnis perferendis. Architecto nobis illo veritatis a facilis nulla doloremque autem.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(68, 15, 14, 'Sed ipsum ad quisquam qui. Est magni corrupti dolorem laborum rerum. Consequuntur sed accusantium sequi nostrum tenetur.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(69, 10, 11, 'Maxime nam aspernatur rem aut aut voluptatum. Molestiae sit veritatis ut incidunt voluptate dignissimos aspernatur. Fugit incidunt velit autem qui nulla.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(70, 17, 2, 'Eius eaque ab enim quos et et. Repellat ab autem voluptatem.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(71, 15, 14, 'Numquam labore iste id id ut dolor dignissimos. Accusamus id ut rerum ullam quisquam eligendi amet.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(72, 14, 8, 'Molestias consectetur suscipit sint est dolore consequuntur soluta ipsum. Vitae molestiae doloremque vel.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(73, 10, 2, 'Harum aperiam nam voluptas reprehenderit deserunt ea consectetur. Omnis est praesentium ratione dolorem ut.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(74, 12, 2, 'Enim quo a voluptatum tempore. Eaque dolorum repellendus corporis tempora consectetur aut. Similique dolores ad molestias molestiae sint.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(75, 14, 11, 'Quia accusamus sit accusamus ab in. Velit est et et. Et est maiores et debitis voluptates possimus.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(76, 5, 10, 'Maiores nemo quia qui sint et repellendus officia. Non quisquam porro tempora nisi aut animi exercitationem. Aliquid ipsam facilis perferendis doloremque.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(77, 20, 3, 'Omnis illum ut rem similique quisquam sunt doloribus. Quia nam enim distinctio repellendus odit et officia omnis.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(78, 17, 8, 'Doloribus dolorem animi aut aperiam asperiores. Illum deleniti facere maiores quidem quas vel dolorum iure. Perferendis provident occaecati laudantium odit laboriosam aliquam.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(79, 20, 4, 'Aperiam repudiandae repellendus quae et eos. Illum iste quia nobis et quis quibusdam iste. Est ducimus alias sit culpa.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(80, 7, 8, 'Quas quam magnam vero voluptate. Fugiat possimus iste consequatur qui quisquam.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(81, 5, 7, 'Non sit quod qui quisquam explicabo et. Iste ut molestiae sit inventore quo veniam voluptates.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(82, 17, 5, 'Ratione et rem eveniet non velit. Voluptatem molestiae reiciendis non ipsum officia debitis. Et esse consectetur et tenetur corrupti quis et.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(83, 4, 15, 'Quia veritatis necessitatibus assumenda eum odit. Incidunt asperiores qui fuga qui fugiat sunt ipsam.', '2021-09-25 09:55:39', '2021-09-25 09:55:39'),
(84, 20, 10, 'Earum sit perspiciatis nesciunt officia eos qui quod non. Dolores enim commodi qui necessitatibus laboriosam error iste.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(85, 12, 7, 'Quia laborum maxime reiciendis et totam omnis quasi minima. Sunt aperiam sunt nostrum odio et iusto.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(86, 18, 2, 'Cum nemo iure qui molestiae. Ipsum eaque placeat quia.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(87, 13, 13, 'Quam sed nostrum commodi et veritatis assumenda est. Aut doloremque rem ipsam ut repellat. Impedit rerum commodi asperiores quia non aliquam.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(88, 14, 5, 'Nostrum sapiente corporis in. Fugiat eum qui voluptas mollitia. Non quod voluptas et expedita.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(89, 6, 10, 'Qui porro tenetur quas repellendus pariatur autem. Quia ut inventore consectetur sapiente. Maxime inventore quo numquam excepturi quis et vel.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(90, 2, 8, 'Voluptas dolorem est perferendis. Numquam architecto nam voluptates quia incidunt sunt. Illo quod autem sed iste esse quaerat.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(91, 17, 10, 'Corporis adipisci eos earum earum quia. Ipsum ut modi dolores ipsam quaerat nostrum adipisci. Sed error sed molestias provident qui.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(92, 7, 1, 'Et quas minima optio dolorem et tempore. Amet voluptatem rem aut ipsa eum vero et.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(93, 17, 5, 'Aliquid voluptatem ab quidem ut. Inventore tempora pariatur porro omnis illum dolores nobis. Praesentium sint dolore totam vel asperiores dolor magni.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(94, 5, 5, 'Error et rem dolorum atque sint ut non. Rerum molestias quia consequatur.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(95, 5, 1, 'Accusamus omnis ut expedita delectus aut et eos hic. Ipsam sit neque ipsum natus.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(96, 8, 14, 'Voluptatibus sed saepe est provident earum voluptatem mollitia. Dolores omnis voluptatem repudiandae iste nulla. Quo nihil dolor quis.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(97, 19, 15, 'Autem aperiam commodi et autem. Unde consequatur incidunt doloremque ullam nihil expedita.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(98, 19, 10, 'Doloremque unde quia cupiditate omnis qui sapiente. Quis error nulla debitis ut accusantium delectus rerum.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(99, 16, 13, 'Ducimus ut laborum numquam adipisci error. Dolorem quidem consequatur cumque reprehenderit enim.', '2021-09-25 09:55:40', '2021-09-25 09:55:40'),
(100, 4, 12, 'Consequatur facere suscipit et tempore recusandae vero. Alias ut ratione aut nulla.', '2021-09-25 09:55:40', '2021-09-25 09:55:40');

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
(1, 5, 5, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(2, 11, 18, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(3, 9, 7, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(4, 12, 4, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(5, 10, 18, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(6, 9, 12, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(7, 14, 15, '2021-09-25 09:55:29', '2021-09-25 09:55:29', NULL),
(8, 10, 6, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(9, 7, 8, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(10, 8, 1, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(11, 2, 18, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(12, 2, 20, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(13, 4, 6, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(14, 12, 9, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(15, 1, 3, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(16, 10, 1, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(17, 12, 18, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(18, 7, 7, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(19, 2, 8, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(20, 5, 13, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(21, 2, 18, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(22, 4, 18, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(23, 2, 4, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(24, 6, 5, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(25, 9, 6, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(26, 10, 7, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(27, 3, 8, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(28, 13, 6, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(29, 9, 12, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(30, 6, 10, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(31, 2, 2, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(32, 12, 1, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(33, 15, 8, '2021-09-25 09:55:30', '2021-09-25 09:55:30', NULL),
(34, 10, 7, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(35, 15, 7, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(36, 13, 4, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(37, 4, 7, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(38, 13, 16, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(39, 6, 5, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(40, 11, 12, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(41, 4, 16, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(42, 2, 14, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(43, 10, 4, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(44, 13, 6, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(45, 3, 14, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(46, 12, 16, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(47, 5, 14, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(48, 7, 4, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(49, 7, 14, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(50, 12, 4, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(51, 1, 6, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(52, 2, 14, '2021-09-25 09:55:31', '2021-09-25 09:55:31', NULL),
(53, 3, 17, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(54, 9, 20, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(55, 9, 4, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(56, 13, 20, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(57, 8, 18, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(58, 15, 17, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(59, 7, 12, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(60, 3, 18, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(61, 5, 14, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(62, 13, 8, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(63, 11, 7, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(64, 2, 12, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(65, 1, 3, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(66, 10, 5, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(67, 8, 17, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(68, 15, 19, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(69, 6, 2, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(70, 12, 1, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(71, 10, 8, '2021-09-25 09:55:32', '2021-09-25 09:55:32', NULL),
(72, 7, 1, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(73, 13, 17, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(74, 15, 8, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(75, 14, 1, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(76, 12, 12, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(77, 12, 11, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(78, 7, 8, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(79, 12, 10, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(80, 2, 15, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(81, 9, 3, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(82, 1, 1, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(83, 2, 11, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(84, 15, 11, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(85, 9, 7, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(86, 7, 6, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(87, 1, 13, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(88, 1, 7, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(89, 6, 1, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(90, 14, 16, '2021-09-25 09:55:33', '2021-09-25 09:55:33', NULL),
(91, 7, 2, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(92, 10, 6, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(93, 8, 1, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(94, 10, 4, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(95, 10, 7, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(96, 13, 14, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(97, 12, 5, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(98, 9, 9, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(99, 6, 11, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL),
(100, 3, 15, '2021-09-25 09:55:34', '2021-09-25 09:55:34', NULL);

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
(14, '2021_09_12_163302_create_viewed_stories_table', 1),
(15, '2021_09_19_150511_create_searches_table', 1),
(16, '2021_09_24_145225_create_comments_table', 1);

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
(1, 7, 'Fuga ducimus et tempora corrupti harum nihil. Repellat sed assumenda harum consequuntur. Qui cumque dolorum dolorum eius et necessitatibus. Ut consequatur rerum debitis sit fugiat. Nemo ad eligendi iste.', 'https://via.placeholder.com/640x480.png/001111?text=harum', NULL, 1, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(2, 2, 'Beatae animi quisquam nulla est laborum aliquid earum. Veniam non atque similique est. Accusamus distinctio est et. Sed et incidunt hic tempora. Dolore maxime vel omnis dolore debitis officia. Quisquam cumque est qui voluptatibus soluta labore.', 'https://via.placeholder.com/640x480.png/007755?text=sint', NULL, 0, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(3, 4, 'Qui tempore nam quia quasi aut et quas nostrum. Maxime voluptas veniam quidem veniam ut. Tempora porro non provident. Deleniti fugit quaerat aut voluptate. Voluptatem cupiditate perferendis exercitationem et doloribus. Officiis modi delectus nostrum doloremque et voluptas aut. Iusto aut aut est qui soluta voluptatem minima. Sapiente neque autem et ut.', 'https://via.placeholder.com/640x480.png/0055ff?text=aut', NULL, 1, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(4, 15, 'Aut enim consequatur sunt rerum voluptate officia. Deserunt qui totam ducimus et nam accusamus. Dolor sint ut alias voluptatem quam laboriosam sed molestiae. Ex tempore quis minus fugit in neque eos. Qui consequatur voluptate voluptatibus molestiae aliquid. Impedit omnis eius nihil. Magnam at distinctio quia iusto quia quas. Nemo voluptatem repellendus ipsa consequatur ut impedit veritatis aut.', 'https://via.placeholder.com/640x480.png/005566?text=esse', NULL, 2, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(5, 11, 'Quod ea ea placeat repellat adipisci. Blanditiis cumque quisquam odit cumque hic cupiditate est doloremque. Eos reprehenderit veniam nam blanditiis qui maxime ut. Tempore ducimus dolorem rerum sed.', 'https://via.placeholder.com/640x480.png/003388?text=possimus', NULL, 0, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(6, 9, 'Nisi ex tempore nisi ipsum. Non et et necessitatibus doloremque quae. Perspiciatis aut sed eligendi et nobis. Corporis officiis dolorem ipsam esse illo necessitatibus sed facere. Non beatae voluptates quas rerum veniam quod repudiandae. Ut incidunt voluptas labore maiores qui sint. Vero inventore est quos modi voluptatem nobis.', 'https://via.placeholder.com/640x480.png/0066cc?text=earum', NULL, 2, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(7, 6, 'Quos odio vel veritatis illum. Expedita totam quaerat velit aut ut ducimus rem. Minus aut eos et harum voluptate est. Quos omnis iste et temporibus iste. Dolorem vitae et iste delectus. Rem eos excepturi sit.', 'https://via.placeholder.com/640x480.png/007722?text=eveniet', NULL, 1, 1, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(8, 15, 'Dolores quibusdam aut accusantium sint nihil doloremque numquam quam. Ad modi provident illo. Dolorum quia id error veniam. Voluptatem tempore omnis officia facilis qui aut ut. Dolorum nobis qui facilis hic ut.', 'https://via.placeholder.com/640x480.png/0099aa?text=autem', NULL, 2, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(9, 15, 'Quisquam amet ut ducimus mollitia aliquid ad. Inventore et sed adipisci qui eius. Eos sit aspernatur consequatur recusandae consequatur. Dolorem perferendis veniam rerum omnis doloribus perferendis. Ea magnam at veniam quis unde ipsam praesentium ut. Ea est quis vero dolores. Nemo voluptatum eos ipsum modi.', 'https://via.placeholder.com/640x480.png/0000cc?text=et', NULL, 2, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(10, 11, 'Nihil inventore nostrum sapiente beatae eum. Est eos sit minima vero. Eum odio ea laboriosam voluptas et. Consequatur fuga commodi in nostrum saepe. Dicta expedita tenetur in qui. Natus beatae quia suscipit aut sunt ut nisi eveniet. Quia repudiandae ad dolores accusamus aperiam dolor praesentium. Asperiores quia sit ad nihil qui quibusdam.', 'https://via.placeholder.com/640x480.png/0000bb?text=sunt', NULL, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(11, 11, 'Explicabo consequuntur et ut sunt. Distinctio adipisci placeat ut aut sint vero est. Qui optio hic voluptatibus qui mollitia. Et et enim molestiae nemo suscipit iusto et. Totam delectus rem ipsa sed neque. Nobis deleniti voluptas eaque nobis hic neque non. Recusandae voluptates est et similique molestiae dolores similique in. Nam consequuntur voluptas nihil. Occaecati qui ipsam atque placeat sunt.', 'https://via.placeholder.com/640x480.png/00aa00?text=delectus', NULL, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(12, 14, 'Deserunt nihil voluptas quia ut cum. Repudiandae deserunt mollitia explicabo laborum et. Maiores aspernatur consectetur a nihil sint. Modi ipsam at quia sit ea quis. Est sunt mollitia corrupti omnis perferendis veritatis voluptate quis.', 'https://via.placeholder.com/640x480.png/0011ee?text=quia', NULL, 1, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(13, 4, 'Ut consequatur modi quis reiciendis. Est pariatur molestiae ratione alias non voluptates vel. Dolores tempora aut quaerat dolor voluptatum. Fugit aut laudantium quo ex vitae. Quae est sapiente soluta animi magni.', 'https://via.placeholder.com/640x480.png/00ffbb?text=soluta', NULL, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(14, 2, 'Et rerum voluptatem explicabo optio voluptatem. Ea consequatur fugiat inventore tempore dolore sit. Earum voluptatem eligendi rerum aliquid tempora. Iure sed dolores rerum aliquid ad. Sunt occaecati ea delectus eius recusandae sunt.', 'https://via.placeholder.com/640x480.png/0033cc?text=beatae', NULL, 1, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(15, 7, 'Provident blanditiis facilis voluptatibus commodi est aspernatur enim. Sit placeat eos alias repellendus vitae provident quia. Sunt et est sunt distinctio ipsam est. Quam dolorem libero totam. Alias voluptates incidunt exercitationem cum consequatur praesentium. Modi voluptas voluptas eligendi et quas odit esse assumenda. Repellat dolor hic et et voluptatem rerum. Corrupti magni commodi assumenda iure beatae.', 'https://via.placeholder.com/640x480.png/00ee88?text=nostrum', NULL, 1, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(16, 6, 'Veniam laborum eius et quia iste est. Ad itaque facere repellat sit. Consequuntur laboriosam voluptas tempora magni eligendi voluptatem minima. Sed ut qui voluptatem. Officia asperiores accusantium eum eos. Sit doloribus molestiae fugiat voluptas eum ex inventore debitis.', 'https://via.placeholder.com/640x480.png/0077dd?text=aspernatur', NULL, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(17, 11, 'Voluptatibus voluptas et sint aut explicabo atque. Tempora omnis deleniti quia omnis. Sint totam eos aperiam autem repellat eaque. Harum autem occaecati debitis eveniet. Vel id velit et et beatae distinctio. Sint saepe dolor facere sunt assumenda accusamus blanditiis. Architecto omnis quidem iste aut possimus non natus. Quibusdam et blanditiis deserunt consequuntur ea sed aut nobis.', 'https://via.placeholder.com/640x480.png/0088ff?text=omnis', NULL, 2, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(18, 15, 'Quia non porro ducimus est. Doloribus saepe culpa error non. Consequatur dolor sint quisquam in ipsam quos reiciendis ipsam. Quos deserunt ipsa debitis doloribus fugiat est rerum. Eveniet nostrum vel est doloribus. Dolor sapiente et qui assumenda minus quaerat asperiores. Ipsa fugiat et expedita reiciendis.', 'https://via.placeholder.com/640x480.png/003311?text=saepe', NULL, 2, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(19, 6, 'Nam quisquam voluptatem similique dicta deleniti voluptates. Dolor et mollitia assumenda est neque blanditiis impedit. Illum magnam sapiente sint. Vel alias dolore et pariatur odit provident esse.', 'https://via.placeholder.com/640x480.png/002233?text=laboriosam', NULL, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(20, 6, 'Maxime sunt qui ut consectetur ut asperiores culpa qui. Quidem commodi est asperiores possimus eum eveniet quasi. Ipsam earum facilis officia ab illo alias. Esse fugiat sunt sed maxime quasi delectus omnis laboriosam. Dolore dolor ex rerum. Ut quas ipsum pariatur quidem et ut ea. Accusamus aut eveniet aut similique magnam modi. Ullam ducimus eius aut.', 'https://via.placeholder.com/640x480.png/00cc55?text=id', NULL, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `searches`
--

CREATE TABLE `searches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `searched_for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 9, 2, 1, 0, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(2, 12, 2, 0, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(3, 13, 1, 2, 1, '2021-09-25 09:55:28', '2021-09-25 09:55:28'),
(4, 13, 2, 0, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(5, 6, 2, 0, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(6, 1, 1, 2, 1, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(7, 2, 0, 1, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(8, 14, 0, 0, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(9, 5, 1, 2, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(10, 9, 1, 2, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(11, 6, 1, 1, 1, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(12, 9, 2, 2, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(13, 6, 1, 0, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(14, 5, 1, 1, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(15, 3, 1, 1, 0, '2021-09-25 09:55:29', '2021-09-25 09:55:29'),
(16, 16, 2, 2, 1, '2021-09-25 10:15:55', '2021-09-25 10:15:55'),
(17, 17, 2, 2, 1, '2021-09-25 10:16:57', '2021-09-25 10:16:57');

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `email`, `email_verified_at`, `password`, `gender`, `birth_date`, `about_me`, `location`, `working_at`, `relationship`, `phone`, `profile_image`, `background_image`, `remember_token`, `google_id`, `github_id`, `created_at`, `updated_at`) VALUES
(1, 'Courtney', 'Konopelski', 'wehner.germaine', 'kreiger.clementine@example.com', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2013-12-03', 'Adipisci qui a cumque aut nulla nam sed maxime.', '44801 Kovacek Orchard Suite 717', 'Reinger, Rau and Quigley', NULL, '863522579', 'profile_image/user.png', 'background_image/background.jpg', '7DIIUSzHh9bVCz7YccGGrs46fpwW59e5A2LCo4efIbIfD5zgdKioBdV5B7VO', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(2, 'Kody', 'Reichert', 'botsford.lucy', 'heath42@example.org', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1992-11-20', 'Vel in natus maxime molestiae ab praesentium deserunt amet incidunt dolor illo nostrum.', '47276 Isabelle Trafficway Apt. 632', 'Wisoky-Lockman', NULL, '059420613', 'profile_image/user.png', 'background_image/background.jpg', 'oMo6klz6XMjMAm2YOeBY6kuRckExOitssstMVNASlA5fqnkPXStqrv4h6Smv', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(3, 'Vickie', 'Herzog', 'lamont.simonis', 'chelsie88@example.com', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2016-04-28', 'Et aspernatur id quasi eius non voluptatem occaecati deserunt libero.', '977 Anabelle Turnpike Apt. 155', 'Schiller-Heathcote', NULL, '043303753', 'profile_image/user.png', 'background_image/background.jpg', 'Em0py1IQ8cbmrXlBKYVph0m8m3SbLNGuzuUSZfIF0JLujDVU8FRt0zJq3n7i', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(4, 'Rebekah', 'Crooks', 'ashleigh.morar', 'francisco.fritsch@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1979-02-15', 'Reiciendis ipsa totam voluptates eligendi hic commodi ut.', '978 Justine Road', 'Koelpin Inc', NULL, '775211761', 'profile_image/user.png', 'background_image/background.jpg', 'bSju4jP1h1A2oEzoNe0pHH24wHgMbS0oomMyJtS4lRlYHS08ZtUeXI8YuQrQ', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(5, 'Jovan', 'Crist', 'schuppe.alec', 'mcglynn.zion@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2017-12-15', 'Consequatur omnis sunt quia voluptas rem id aut numquam voluptatem quo atque nihil.', '549 Flatley Court Apt. 496', 'Daniel, Kerluke and Hahn', NULL, '380377372', 'profile_image/user.png', 'background_image/background.jpg', 'sW6sXwgLmzMEmhdV1HGZXaBUE1mxbOdKbi8986KVDSZK3MdRdouKIblfe0xh', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(6, 'Mohammad', 'Hartmann', 'bode.jodie', 'ldietrich@example.com', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2003-10-17', 'Dicta odit est nulla esse ducimus quia animi aliquam quisquam omnis asperiores.', '50578 Lang Path', 'Champlin-Lehner', NULL, '333105068', 'profile_image/user.png', 'background_image/background.jpg', 'dByOs4OLTsTpQwNkGXeUIkdUgW8gcLEJBpolSBv6OXuPDsx6FGXshYtLzQjX', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(7, 'Gerhard', 'Lindgren', 'harmony.fay', 'jennifer65@example.org', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2005-01-19', 'Porro dolore ducimus sed molestiae at modi placeat quia est beatae recusandae nisi.', '7868 Hyatt Ramp', 'Spencer, Howell and Barton', NULL, '476720153', 'profile_image/user.png', 'background_image/background.jpg', 'T3IWeuPQuq054D0nrZp98muzYuYCxfHKeHdtwwWUDeiercd882yuFP5S4Qbx', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(8, 'Tia', 'Hansen', 'vada54', 'ricardo.bechtelar@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2016-01-03', 'Exercitationem quia ab laborum minus neque voluptate.', '5159 Sim Mills', 'Williamson Ltd', NULL, '939599821', 'profile_image/user.png', 'background_image/background.jpg', 'qG1XW0R0lNQIJLpOucend3a4XpllzpVCU7KKDsixrlIfpKrEHmWQDAQapOYp', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(9, 'Prince', 'Herman', 'ruecker.willa', 'henri.borer@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '1977-08-13', 'Neque enim rerum dolorem saepe a voluptas voluptatem aliquam soluta.', '72512 Prohaska Neck Apt. 909', 'Dietrich-Smith', NULL, '307086021', 'profile_image/user.png', 'background_image/background.jpg', 'pW6cwT4oLyWEdlWKX5LfBgCmsCJCxxuc7y8Y1KIw7PFAf8CBfhzzIot2wFhE', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(10, 'Kaylee', 'Collins', 'madonna74', 'mckayla87@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '2011-12-25', 'Laboriosam voluptatem corrupti et consequuntur ut quos error incidunt.', '461 Leuschke Isle', 'Kertzmann-Frami', NULL, '779673839', 'profile_image/user.png', 'background_image/background.jpg', '1IXeMNg5j53Ou1R1W8QuLIevYo3y5FXXMhn5rV6ubJVRWnPyqqgBT9tKKc99', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(11, 'Kennedy', 'Russel', 'doyle.ramon', 'julio07@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1987-12-30', 'Necessitatibus sint nisi et incidunt velit sed enim unde quia.', '785 Faye Shores', 'Kilback, Koelpin and Sauer', NULL, '973114011', 'profile_image/user.png', 'background_image/background.jpg', 'Nf7rqYmpEM9b2oakp3yKSc814SVSjanw1YlCNjx2DlwFPDhHcDmvPgXYVNQT', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(12, 'Lucas', 'Swaniawski', 'orn.jacinto', 'nortiz@example.com', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2020-09-25', 'Illo est nobis natus nihil dicta distinctio nihil sit quis eum optio.', '3176 Abdul Stravenue Apt. 035', 'Marvin, Moore and Greenholt', NULL, '729254271', 'profile_image/user.png', 'background_image/background.jpg', 'j2MDeW056WIeadJQnaZjAoJtBwwUTHEQbRI0thMImg5Zr4c1jC2jGoG4ipV8', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(13, 'Rachel', 'Fay', 'gabriella93', 'ikassulke@example.org', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1975-09-04', 'Et nam in cupiditate quidem quo delectus a assumenda porro temporibus.', '776 Flavie Ford Suite 978', 'Terry-Hansen', NULL, '027533266', 'profile_image/user.png', 'background_image/background.jpg', 'Y9hK31eWqmHdJ05xYd8GGMJYIW4Ylrl5UccOTehoPoGr7O0L7coay6WVtKSZ', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(14, 'Dayna', 'Lind', 'kaylie.rohan', 'tbogan@example.net', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Male', '2021-08-06', 'Veniam qui voluptate aliquam quos sunt sed ipsam placeat et accusamus id accusamus dignissimos.', '3238 Adele Loop Suite 436', 'Kessler Ltd', NULL, '973075339', 'profile_image/user.png', 'background_image/background.jpg', 'r2cwiiV25I83bXJjJHqkTpvUooXguaAeQ9nbRONU6MRKh3AsPoj2cyHUkUNC', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(15, 'Fred', 'Larkin', 'conn.deontae', 'herta32@example.org', '2021-09-25 09:55:27', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Female', '1996-09-28', 'Perspiciatis alias mollitia voluptatem dolorum nostrum impedit illum omnis itaque aspernatur ea aut impedit.', '3153 Davis Via', 'Nicolas-Corkery', NULL, '459125635', 'profile_image/user.png', 'background_image/background.jpg', '7CQHW1TMGHmKj40wPwviw6Vk6C9gqr6eNTS1WVrKwnGuKWlnvrgUb4CWIrJ0', NULL, NULL, '2021-09-25 09:55:27', '2021-09-25 09:55:27'),
(16, 'Konrad', 'Perlicki', 'konrad', 'tata.wawa@onet.pl', '2021-09-25 10:16:09', '$2y$10$cKDl.PqYmPohKSGCjqOO4OYsWlx.6QoukkQyaMgFSylkAc6vrvsTi', 'Male', '2021-09-08', NULL, NULL, NULL, NULL, '674067823', 'profile_image/user.png', 'background_image/background.jpg', NULL, NULL, NULL, '2021-09-25 10:15:47', '2021-09-25 10:16:09'),
(17, 'Jan', 'Kowalski', 'Kowal', 'konrad.perlicki01@gmail.com', '2021-09-25 10:17:04', '$2y$10$TmpUds3awyw9A3R6p5Cqb.wiECCG8tYRaUchM1VA8W.0nJQPMo1Uy', 'Male', '2021-09-14', NULL, NULL, NULL, NULL, NULL, 'profile_image/user.png', 'background_image/background.jpg', NULL, NULL, NULL, '2021-09-25 10:16:55', '2021-09-25 10:17:04');

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
-- Indeksy dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

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
-- Indeksy dla tabeli `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `searches_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT dla tabeli `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `invites`
--
ALTER TABLE `invites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `searches`
--
ALTER TABLE `searches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `viewed_stories`
--
ALTER TABLE `viewed_stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
-- Ograniczenia dla tabeli `searches`
--
ALTER TABLE `searches`
  ADD CONSTRAINT `searches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
