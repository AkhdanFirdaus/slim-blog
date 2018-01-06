-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2018 at 07:57 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slim-blog`
--

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
(3, '2018_01_04_131409_create_posts_table', 1);

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
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Deserunt voluptatem molestiae alias.', 'Distinctio necessitatibus veritatis officiis totam consequuntur. Voluptatem sed et aut autem quas. Omnis dolor voluptatibus dolores sequi corrupti quidem. Itaque blanditiis corporis quas omnis dolorem. Qui quia magni expedita dolores eius ea earum qui.\n\nNecessitatibus voluptas omnis omnis magni voluptatibus incidunt eum. Numquam explicabo animi assumenda omnis vel nihil. Voluptatibus maiores quibusdam rerum libero.\n\nCulpa et et quia iusto pariatur recusandae. Tenetur distinctio ut molestias soluta sequi occaecati ab. Quia esse ut possimus facere nihil molestiae. Velit est similique velit ut.\n\nQui quos numquam ut sed ab possimus. Nobis hic aliquam repellat voluptas. Expedita accusantium dolores ducimus at dolorem expedita.', '2017-12-12 19:58:02', '2018-01-04 08:29:40'),
(2, NULL, 'Aspernatur aliquam voluptatem a quaerat suscipit esse esse eos id minima quae facilis.', 'Ipsam ad iste saepe aut et cumque. Molestiae laudantium unde nostrum qui officia ex. Sit corporis error consequatur at eos nisi omnis architecto. Autem impedit aut consequatur velit.\n\nSunt dicta voluptatibus assumenda. Ea excepturi nulla ullam voluptatem.\n\nDeleniti qui aperiam voluptatibus quod autem autem. Amet aliquam rerum autem ea voluptate nihil quam. Fugit a enim odio laudantium.\n\nVoluptates consequatur rerum et eos consequatur. Molestiae quia est culpa corporis possimus suscipit hic nihil. Sit officiis qui omnis occaecati adipisci quo asperiores itaque. Occaecati ut sit doloribus beatae.', '2017-12-21 16:55:07', '2018-01-04 08:29:41'),
(3, NULL, 'Maiores eaque veritatis nostrum rerum aut dolore fugit repellendus dicta aut et.', 'Ratione nam libero esse officia. Soluta omnis et quia velit id. Maiores quia eum et. Ut enim at assumenda saepe laudantium.\n\nVoluptate aut sint dolores qui quis. Esse porro sint rem voluptatem. Sit molestiae culpa earum et sit animi.\n\nAsperiores consequatur officia qui. Voluptatem soluta officiis aspernatur laborum amet. Accusamus odio magnam rerum in vel voluptatem. Quia ut voluptatem incidunt molestias culpa inventore vitae voluptatem.\n\nSed odio ut sed labore atque consectetur animi voluptatum. Ut repudiandae autem nisi adipisci voluptatem. Sed voluptatibus tenetur architecto odit quo inventore. Consequatur fuga id excepturi facere optio est.\n\nOfficia ex reiciendis eius eos aperiam. Corrupti fugiat perferendis ea velit non sit assumenda. Quisquam maxime minima cupiditate accusantium vel.\n\nRecusandae odio culpa ab non necessitatibus ea nihil. Odio quis qui voluptas. Repellendus in sed aliquid id. Assumenda mollitia itaque voluptates magnam ut ut. Aut cupiditate hic sed sed sint ut voluptates.', '2018-01-01 03:18:09', '2018-01-04 08:29:41'),
(4, NULL, 'Est impedit aut eum distinctio aut voluptate cum explicabo enim.', 'Incidunt iusto in quidem qui. Et inventore vitae repudiandae ex.\n\nSed necessitatibus provident dolor occaecati. Repellendus ullam veritatis nihil iure. Illum et ut est esse voluptatem. Quae ducimus voluptate quia qui.\n\nDolor similique enim qui eos. Facere quae pariatur distinctio. Quasi distinctio repellendus ratione tempore minus non. Cupiditate repudiandae nesciunt et est sunt excepturi.\n\nEos labore et quasi et. Nihil dicta et voluptatibus repellat.\n\nLibero officiis ut sed error facilis dignissimos voluptatem. Sapiente dolorem aspernatur eligendi saepe. Nesciunt ipsum eos sed in quo iste. Enim sequi quas molestiae reiciendis recusandae.\n\nSuscipit necessitatibus vel ratione recusandae architecto. Rerum atque quis ex. Libero harum ea non laudantium eum quo et.', '2018-01-03 19:52:14', '2018-01-04 08:29:41'),
(5, NULL, 'Quae corrupti est quod.', 'Sed quod vero mollitia voluptate mollitia. Architecto velit cum sed consequatur. Consequatur libero id quae sapiente deleniti.\n\nNecessitatibus in ad cupiditate. Et ut doloremque et nihil. Vel nulla aliquam aspernatur incidunt porro et.\n\nDoloribus asperiores cum labore quas facilis. Quasi et ea corporis expedita soluta pariatur. Et in sed unde ea reprehenderit aut rerum omnis.\n\nIllum a at ex sint et. Laboriosam deserunt deserunt voluptatem rerum. Adipisci et reiciendis consectetur corporis id et ad.\n\nVel sint modi mollitia. Voluptatem ex porro beatae. Voluptate non eos enim dignissimos qui. In laboriosam ad consequatur dolorem.\n\nSint nam perspiciatis reprehenderit harum et quia consequatur. Ipsum laudantium ullam vero eum est deserunt et. Aut vero accusamus vitae sed recusandae tempora repellat qui.', '2017-12-07 18:12:36', '2018-01-04 08:29:41'),
(6, NULL, 'Ipsa quis ut recusandae modi laborum.', 'Sint et fuga ipsa velit omnis autem. Consequatur officia autem odio alias ad sint sed. Consectetur consequuntur non iure deleniti provident dolorem adipisci. Animi esse iusto ipsa.\n\nOccaecati sint alias explicabo. Voluptatem aspernatur aut quaerat reiciendis. Temporibus dignissimos et recusandae rerum vel similique praesentium. Repellendus consequatur voluptatem quia quas.\n\nCupiditate ullam est mollitia dicta in. Molestiae dolores corporis labore voluptatibus deleniti mollitia quod. Non dicta exercitationem occaecati alias doloremque voluptates.\n\nEos quo dolores ex corrupti vel velit rem. Nesciunt et eius aut sunt. Velit eligendi distinctio inventore rerum omnis occaecati.', '2017-12-05 04:05:29', '2018-01-04 08:29:41'),
(7, NULL, 'Quasi suscipit dolorem veniam sit ipsa ratione nemo enim.', 'Qui sunt et nobis id quaerat quisquam omnis. Doloribus rerum omnis et voluptatum iste placeat numquam.\n\nEa ratione consequatur dolorum mollitia repellat. Dolores eligendi unde corrupti excepturi ipsa qui qui. Quidem deserunt fugit unde necessitatibus perspiciatis qui. Qui temporibus nulla vel eum quis modi ea alias.\n\nExpedita placeat libero voluptatem molestiae tenetur velit. Voluptatem maxime nihil qui aperiam est dolor.\n\nQuo cumque optio distinctio quo et laboriosam. Ut sequi a laborum. Dolore repudiandae voluptatem culpa ut corrupti repudiandae. Nobis nihil sed ad quam officiis voluptates magnam.\n\nLaborum illo est modi eaque sit est cum et. Non enim enim nostrum praesentium nobis. Ea consectetur et quia cumque sit aspernatur odit. Repellat dignissimos ut nesciunt.\n\nPlaceat ratione iste consequatur aut repellat ut repellat. Architecto voluptas dolorem ut dolor ut corporis. Quaerat ut a et rerum eos. Iure nihil rerum quam eum consequuntur ab.', '2017-12-27 02:17:54', '2018-01-04 08:29:41'),
(8, NULL, 'Quas at maiores quos.', 'Veritatis illum deleniti vero. Molestias expedita aut nisi ipsum consequuntur.\n\nItaque nemo incidunt consequatur voluptatem quaerat iusto hic. Facere asperiores voluptatem molestias culpa dolorem quidem est.\n\nDeleniti nisi sit ratione rem. Exercitationem quia qui eum labore provident qui. Harum itaque beatae beatae vel.', '2017-12-29 08:31:40', '2018-01-04 08:29:41'),
(9, NULL, 'Non et culpa ipsam architecto.', 'Alias quia sit dolor ad. Accusamus modi et ea totam illo dicta est. Temporibus pariatur dicta unde perspiciatis.\n\nRepellat at sequi rerum id. Ea voluptatum aperiam consequatur modi blanditiis deserunt non. Veniam ut reprehenderit laudantium a. Eum nostrum pariatur rerum dolorum earum.\n\nRatione cum nihil expedita repellat et. Voluptatum a ipsam sint nam quia cumque velit est. Eos esse eum in non in. Sed adipisci quasi quia.', '2018-01-04 04:51:05', '2018-01-04 08:29:41'),
(10, NULL, 'Sed et praesentium ut et.', 'Voluptatem nostrum doloremque maxime eos natus. Sed omnis nemo maiores aut ex itaque doloremque. Voluptas explicabo est non et. Consequatur laboriosam at doloribus dignissimos dolorum temporibus.\n\nRerum et vel dolores molestias. Sed dolorem cum et cumque.\n\nQuod qui provident amet aut officiis nobis. Ut assumenda ea minima sed quia. Voluptas numquam amet sint voluptas qui nemo incidunt.\n\nQuos sunt et quasi optio voluptatem sapiente minus omnis. Sapiente corrupti omnis omnis illo accusantium pariatur error.', '2017-12-12 04:09:01', '2018-01-04 08:29:41'),
(11, NULL, 'Rerum dicta enim explicabo quia.', 'Animi dolore aut quis aperiam quo perspiciatis enim asperiores. Porro eum quae quo. Quod deserunt omnis qui cum.\n\nEum illum libero non dolores. Quae laborum perferendis voluptatem possimus exercitationem omnis cupiditate. Sed consequatur veniam voluptatum est ut eius quo.\n\nId molestiae et nemo qui qui. Aspernatur provident et repudiandae id. Sit impedit fuga exercitationem quasi et ab veritatis repellat.\n\nLabore ad cumque velit soluta. Reprehenderit quia voluptates eum officiis ipsum et et.\n\nVoluptate consequatur aut non non unde debitis est in. Officia et aut sed natus odit sint pariatur necessitatibus. Eligendi occaecati est eligendi autem aliquam. Officia laboriosam consequatur ex temporibus dolor quo dignissimos tempora. Blanditiis inventore exercitationem animi quisquam amet.\n\nEx et vel sit qui recusandae consectetur harum. Tempore quia molestiae ut dolores. Pariatur labore vel delectus et iure ducimus dolores. Eveniet deserunt iusto distinctio praesentium dolorem.', '2017-12-11 00:26:09', '2018-01-04 08:29:41'),
(12, NULL, 'Optio est ut optio reiciendis.', 'Et quos non aspernatur. Voluptates voluptatibus officia et illum aperiam ducimus. Saepe qui cumque cumque facere. Voluptatem et aperiam quam eaque.\n\nProvident aliquam ratione earum perferendis modi facilis cupiditate. Necessitatibus tempore ut perferendis quo ab at. Et eos vitae sit qui iste voluptatem ea.\n\nUt sapiente explicabo deleniti soluta. Non itaque corrupti sapiente non ea perferendis optio velit. Officiis excepturi veniam reiciendis sint adipisci.', '2018-01-02 21:47:29', '2018-01-04 08:29:42'),
(13, NULL, 'Omnis iure quae rem expedita repellendus.', 'Quo qui ut totam. Ad laudantium aliquam commodi incidunt soluta quo enim cum. Eum ea sunt incidunt nisi maxime aperiam tenetur velit.\n\nRepudiandae ipsa labore possimus sunt enim id nesciunt quia. Harum in numquam autem aliquid. Enim eius molestiae aut hic nostrum.\n\nUt nesciunt debitis voluptates qui. Ex veniam omnis omnis eius natus vel consequuntur. Et ipsam dolores aut totam eos.\n\nDebitis occaecati iure veritatis possimus aut neque. A minus facilis labore nobis qui id odit. Aliquam in qui temporibus quasi.\n\nAb porro rerum est. Sint fuga doloremque modi tempore quibusdam amet rerum nihil. Quia ad tempore excepturi fugit. Et ut voluptas consectetur ut repellendus nihil hic natus.\n\nTenetur maiores aliquid quis ipsa. Minus optio accusamus reprehenderit natus reprehenderit facilis autem perferendis. Eaque repellat tempora consequatur eaque est ut.', '2017-12-07 16:20:59', '2018-01-04 08:29:42'),
(14, NULL, 'Fugiat at expedita et similique velit perferendis.', 'Atque dolores eum possimus assumenda consequatur quia molestias. Commodi reiciendis expedita et in vitae. Maxime eaque quia est earum ut. Fugiat natus aspernatur nihil et ad et aut perferendis.\n\nIste ea sit unde. Necessitatibus et totam quos tempore optio. Totam et sed omnis illo exercitationem qui. Officiis eaque aut et quidem mollitia aut nobis sapiente.\n\nIusto itaque illum quis fuga dolorem. Distinctio blanditiis consequatur animi eveniet culpa tenetur tenetur. Ut voluptatum amet ad illo expedita cum. Animi odit et accusamus omnis.\n\nQuo neque tempore ut quibusdam velit voluptate. Pariatur amet autem qui in temporibus deleniti nam illo. Asperiores possimus earum possimus ut dicta voluptatibus voluptatibus.\n\nEt et ut et dolorem modi. Eaque dolorem aliquid et aut et. Est iste perferendis assumenda id vitae voluptas incidunt.', '2017-12-28 00:18:55', '2018-01-04 08:29:42'),
(15, NULL, 'Voluptas commodi est molestiae et.', 'Enim odio tenetur ipsum dolorem non nemo. Voluptas repellat ut nisi odit sunt fuga consequatur. Inventore animi dolorem dignissimos maxime inventore saepe. Maxime eius laudantium architecto omnis.\n\nEaque beatae aut modi maxime iste. Autem iste qui nesciunt alias quisquam temporibus ipsum.\n\nPerspiciatis qui id temporibus sit temporibus eum velit ut. Error et temporibus accusamus in culpa. Et veniam provident voluptas reprehenderit dolorem sit saepe repudiandae.\n\nNihil et id quas nostrum aut et ut. Debitis inventore nemo aspernatur aut qui vel. Voluptatibus veritatis perferendis porro.\n\nQui similique et numquam non alias vitae nulla aut. Voluptatem voluptatem id ut iste expedita. Qui dolor laborum rerum aliquam velit. Ducimus eum enim eaque rerum illo.\n\nNam aut omnis tempore aut iste numquam nemo. Ipsam ut qui consectetur tempora. Sint accusantium veritatis in laudantium sed repellendus quia. Velit modi voluptas quas omnis. Sit necessitatibus dolorem fugiat quia optio alias.', '2017-12-15 09:33:53', '2018-01-04 08:29:42'),
(16, NULL, 'A similique odit nemo vel mollitia dignissimos.', 'Minus accusantium aut et est incidunt et perspiciatis. Possimus omnis excepturi atque suscipit ipsa cupiditate. Sit non magnam et. Quidem nesciunt repudiandae numquam.\n\nHic quod asperiores illo consequuntur ipsam possimus incidunt. Facilis eveniet nemo ratione dolor iusto reprehenderit saepe. Omnis est voluptas nesciunt laborum illo nihil.\n\nOfficia quasi consequatur est. Dolor est distinctio molestiae quibusdam consequatur. Dignissimos ratione et eos nulla quae autem et. Quibusdam amet tempore quae vero est fugit.\n\nDucimus voluptas repellat praesentium adipisci autem et incidunt. Fugiat voluptas eveniet debitis eius et esse et itaque.\n\nSint nihil quo eos assumenda distinctio fuga. Enim delectus consequatur iure voluptas dicta dignissimos.\n\nMolestias labore tempora vel. Sunt dicta nam labore placeat necessitatibus. Omnis fugiat molestias sapiente quas iusto molestias ratione accusamus. Sequi assumenda quis quidem qui aut voluptatem ducimus.', '2017-12-20 20:40:00', '2018-01-04 08:29:42'),
(17, NULL, 'Laudantium id nobis aut doloribus omnis.', 'Ea atque rerum ratione eius et nihil totam. Tenetur eum tenetur sunt. Ut iusto dicta nemo provident non.\n\nQuis sunt explicabo earum rerum et sapiente. Id est ea occaecati totam explicabo. Exercitationem dolorem veritatis quae et distinctio nesciunt consequatur.\n\nAut velit facere maiores possimus laudantium impedit modi. Mollitia voluptas aut a repellendus. Est vel aut recusandae possimus quos dolor reiciendis. Molestias cumque veritatis sequi architecto consectetur voluptates doloremque.\n\nVoluptatem perferendis sint aut et provident dolor veniam. Temporibus rerum et dolor saepe recusandae error deleniti consectetur. At itaque sit natus dolores. Voluptatum necessitatibus earum dolor sit numquam quis quae. Consectetur quas aspernatur reiciendis.\n\nAut ut similique harum facilis eos dolorum. Deserunt eum sed ut accusamus illo. Harum non aut corrupti necessitatibus consequatur. Natus reiciendis voluptas ut reprehenderit mollitia minus voluptatum.\n\nQuo error consequuntur quis amet beatae ut culpa. Omnis eaque ex autem sed temporibus rerum laboriosam. Adipisci dolor repellat et blanditiis impedit ab eius.', '2017-12-08 05:59:10', '2018-01-04 08:29:42'),
(18, NULL, 'Magni non delectus temporibus dicta.', 'Dolorem sint minima placeat eveniet porro perspiciatis qui. Iusto dicta dolores optio. Animi aut sint et ut.\n\nDoloremque sunt ex odit unde nihil neque repudiandae. Ut nam amet odit et culpa quia praesentium. Non debitis saepe sapiente reprehenderit autem. Nihil aut eveniet laboriosam distinctio officia deserunt.\n\nEst animi aperiam consequatur facilis exercitationem. Minima maxime earum magni sunt nisi voluptate qui.\n\nRepellendus excepturi eos delectus et reprehenderit ut. Illum dolore vel dolor rem ut maiores dolorem assumenda. Ipsa quia iste suscipit vitae quisquam voluptatibus doloremque. Modi quod dolor aut quos.\n\nQuia quidem ex dolore sed qui voluptatem. Et quis qui nostrum dolor beatae. Qui qui voluptas delectus nisi eligendi et.', '2017-12-15 23:21:30', '2018-01-04 08:29:42'),
(19, NULL, 'Fugiat quibusdam dolorem quod.', 'Omnis tempore laboriosam sunt est autem nulla. Laborum deleniti quidem laudantium voluptatem. Aspernatur dolore voluptatem incidunt quaerat dignissimos consequatur.\n\nMinus ducimus et dolores fugiat quae recusandae. Nam a eaque suscipit ut consequuntur sit accusantium. Commodi velit aut aliquid est enim. Sed sed ab consequatur minima accusamus aliquid sit. Consectetur ipsam laborum consectetur voluptatem voluptas consequuntur sit.\n\nEst alias aut veniam magni sed corporis. Voluptate quis sit nihil molestiae maxime consequatur. Voluptas at est voluptatibus eum rerum quo asperiores rerum.', '2017-12-19 03:11:17', '2018-01-04 08:29:42'),
(20, NULL, 'Est est voluptates itaque aspernatur rerum quia.', 'Ea quis beatae aut sunt voluptatem. Itaque aliquid nobis eius pariatur suscipit nemo est dicta. Quo aut error odio ipsa.\n\nNihil quidem in blanditiis est. Dolor voluptatem beatae sint aspernatur fugiat quaerat consectetur. Quis eum doloribus quo modi non ea.\n\nDeserunt molestiae velit rerum ipsum molestiae reprehenderit. Debitis impedit dolore sed vel aliquid et. Odio odio nulla qui aut. A exercitationem tempora expedita numquam sunt atque.\n\nSunt aperiam ipsa optio ea. Facilis excepturi accusantium eum eaque sed nesciunt. Placeat dicta quia pariatur accusantium beatae iure.\n\nUt ut ea perferendis vitae perspiciatis. Sed veritatis eum corrupti vel repudiandae iure eum cumque. Commodi quia quam laudantium temporibus est.', '2018-01-02 12:31:53', '2018-01-04 08:29:42'),
(21, NULL, 'AMF', 'testing percobaan', '2018-01-04 23:27:15', '2018-01-04 23:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
