-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 10:17 AM
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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_01_04_131409_create_posts_table', 1);

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
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'fuga-et-ut-error-reiciendis-ab-amet', 'Fuga et ut error reiciendis ab amet.', 'Voluptatum quis veritatis temporibus. Modi ad iure consequatur voluptas qui ut. Officia et vitae quaerat rerum sint. Deleniti sit quasi reiciendis vel.\n\nDolore doloribus et qui veniam ea exercitationem. Voluptatem reprehenderit aut soluta quia aliquam harum. Nisi autem quibusdam dolor voluptatem est id.\n\nEnim recusandae perspiciatis vitae libero perferendis. Et sit qui asperiores consectetur temporibus. Sapiente in cumque nisi labore.', '2017-12-19 13:09:44', '2018-01-06 09:03:28'),
(2, 'vitae-sed-quod-dolorem-maxime-et', 'Vitae sed quod dolorem maxime et.', 'Et omnis dolores inventore vel. Voluptas tempora dolorem et hic iure nemo nisi. Omnis impedit ut sit architecto est sit perspiciatis. Eum explicabo mollitia odio mollitia.\n\nPorro aut vero eum possimus. Et voluptas iste quam reiciendis facilis occaecati. Delectus aut fugiat molestias consequatur ad. Provident vero qui omnis temporibus deleniti ullam ea illum.\n\nEveniet reiciendis totam doloremque nemo est aut. Explicabo aperiam id autem qui. Dolores et ullam hic et sit cum. Ex ullam accusantium provident.\n\nError aut neque quis est. Error nisi illum ab earum cumque velit voluptatum quia. Ullam ea temporibus id consequatur hic corrupti porro. Reprehenderit amet dolorem consectetur voluptatibus doloremque sint.\n\nRecusandae temporibus error voluptatem eum est nisi. Asperiores dolores reprehenderit sint commodi esse modi provident. Soluta id amet sapiente velit. Excepturi reprehenderit soluta harum quibusdam.', '2017-12-16 10:04:32', '2018-01-06 09:03:28'),
(3, 'officiis-culpa-praesentium-aspernatur-assumenda', 'Officiis culpa praesentium aspernatur assumenda.', 'Consectetur et aspernatur repudiandae quia vitae. Est laboriosam ducimus sed ipsa saepe velit optio aut. Modi quis quae voluptas maxime quidem dolor eum velit. Eum qui quia ut totam minima.\n\nNisi aperiam sunt nulla repudiandae sunt omnis ullam. Incidunt sapiente placeat dolorem reiciendis temporibus.\n\nNihil vitae voluptatum iusto eius. Non debitis sint molestias ut ea ut ducimus. Expedita voluptas enim atque quo quos hic deserunt deserunt. Dolorum ut tempore omnis ut.\n\nRatione dignissimos error dolore expedita nobis. Occaecati ut quo accusamus quisquam ut vel eos. Consequuntur ut et laborum reprehenderit aspernatur temporibus.', '2017-12-28 08:32:57', '2018-01-06 09:03:29'),
(4, 'rerum-possimus-magni-nihil-fugit-fugiat-recusandae-cum-incidunt-dolores', 'Rerum possimus magni nihil fugit fugiat recusandae cum incidunt dolores.', 'Sunt enim porro qui vel nemo inventore. Dolor modi illo rem. Est aut magnam minima quod repellat.\n\nTotam voluptatem aut deleniti omnis nobis repudiandae. Error temporibus delectus officia vel maxime. Assumenda eum voluptatem aut est.\n\nLaboriosam delectus fuga et exercitationem veniam quasi earum. Velit aliquid et corporis est voluptatem. Ut vel deserunt nisi perspiciatis aut eligendi. Voluptatem eveniet atque ea velit nobis rerum maxime totam. Temporibus dignissimos sed perferendis provident praesentium ut aspernatur.', '2017-12-17 23:27:38', '2018-01-06 09:03:29'),
(5, 'ut-corrupti-voluptatem', 'Ut corrupti voluptatem.', 'Nemo aut rem est. Sit deleniti officia ab quam voluptatem possimus. Magni ab unde ea blanditiis earum nulla.\n\nQui sit dolorum deleniti aut modi architecto neque et. Id nesciunt aut numquam est sit totam. Magni illum asperiores modi et vel in saepe laborum.\n\nId omnis non natus quo. Numquam ut iure totam et tempore veniam quisquam. Occaecati perspiciatis qui occaecati aliquid eaque. Enim aut fugit quis omnis aut et nam.', '2018-01-04 07:15:46', '2018-01-06 09:03:29'),
(6, 'facilis-ut-provident-et', 'Facilis ut provident et.', 'Non enim esse fugit voluptatem qui illo. A et possimus velit sed esse. Vero et eos voluptatibus itaque animi dolore nostrum. Nihil perferendis voluptates ex aut harum fugiat repudiandae.\n\nRem est qui quia. Dolorem rerum dolor autem aspernatur ut vero facere. Veniam ad voluptatem beatae non.\n\nIure corporis architecto possimus. Perferendis et veritatis ut omnis id nisi animi animi. Doloremque ipsum asperiores accusantium quod enim.\n\nItaque sit voluptatem qui odio sint quia. Itaque neque dolorum fuga amet sed enim. Velit molestias sunt saepe ducimus.\n\nVoluptatibus nemo non architecto adipisci. Dolores at qui temporibus aut consequatur vel. Rerum non dolores similique et sed iusto.\n\nConsectetur molestiae consectetur corrupti in veniam et. Corporis voluptatem vitae ullam ratione officia officia. Vel delectus iste quidem minus dolor.', '2017-12-13 19:52:11', '2018-01-06 09:03:29'),
(7, 'eaque-illum-incidunt-ab', 'Eaque illum incidunt ab.', 'Aperiam magnam assumenda et. Eveniet sunt non aut esse et quae. Repudiandae distinctio quisquam vitae unde sit deleniti.\n\nAutem molestiae a ad unde ex eum. Cumque architecto omnis nam. Omnis ut molestiae rerum qui numquam. Tempora quos at sed dolore sint. Non ea ad esse provident.\n\nEligendi pariatur ipsam quos nostrum nesciunt. Et sequi harum ut non labore officiis reiciendis et. At earum vel itaque pariatur molestiae et.\n\nQui sunt odio nisi laboriosam dolorem id tempore. Reiciendis ex molestias ab quidem cupiditate. Qui error voluptatem rerum rerum doloremque sequi quia. Dolor earum totam qui qui cum rem.', '2018-01-04 14:08:47', '2018-01-06 09:03:29'),
(8, 'in-a', 'In a.', 'Ex esse exercitationem sit. Facere delectus consectetur eius labore et. Voluptatem consequatur magnam inventore ratione.\n\nDistinctio placeat animi laudantium numquam quod explicabo earum. Consequuntur ducimus in est voluptates voluptatem. Ea impedit dolores assumenda eos quasi libero. Nihil est quia eos excepturi.\n\nQui consequuntur eligendi sint rerum qui qui. Inventore dolore consequatur ex. Mollitia in ut harum soluta praesentium dolore quas.\n\nSint cum perferendis reprehenderit non aut sunt qui. Nulla sed eaque beatae at ut fugiat. Eos modi dolore nemo vitae dolores. Ex delectus qui quaerat amet quia quia quia.\n\nNon id et ut asperiores voluptatum enim. Vel nihil cupiditate molestiae. Rerum saepe vitae fugiat facilis.', '2018-01-04 23:32:52', '2018-01-06 09:03:29'),
(9, 'nobis-sit-quod-assumenda-temporibus-aut', 'Nobis sit quod assumenda temporibus aut.', 'Eligendi placeat est ea est. Sed quos facere possimus esse dolores qui. Deserunt quibusdam aut quo voluptatem consequatur aperiam et. Dolores delectus deleniti accusamus quia est enim.\n\nSuscipit est atque inventore sit illo voluptatum dignissimos error. Suscipit facere facilis fuga eum deserunt quas. Quia doloribus omnis ea provident beatae qui nobis explicabo. Quia suscipit ea minima vel aut non architecto.\n\nInventore sed tenetur quia ipsam enim laudantium. In autem debitis expedita nihil recusandae. Rerum quos numquam optio eum ut.', '2017-12-18 01:11:00', '2018-01-06 09:03:29'),
(22, 'apa-itu-git', 'Apa itu Git?', 'Git adalah software yang berfungsi mengatur Source Code', '2018-01-06 09:15:31', '2018-01-06 09:15:31');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
