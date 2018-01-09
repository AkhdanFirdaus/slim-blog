-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2018 at 04:30 PM
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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2018_01_04_131409_create_posts_table', 1);

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
  `author` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `title`, `content`, `author`, `created_at`, `updated_at`) VALUES
(1, 'id-repellat-eos-maiores-neque-sint', 'Id repellat eos maiores neque sint.', 'Quibusdam asperiores quis rem dolores. Molestias dolorem adipisci sed quidem beatae alias. Qui in molestiae magni. Reiciendis sed dolore nostrum aut.\n\nSapiente necessitatibus maxime laboriosam eius sed. Illum in voluptatibus unde vel et quos est. Dolorum dicta reprehenderit sunt vel quam. Dolor reiciendis rerum iste porro.\n\nRerum et voluptas molestiae a ratione est est. Et ex at dolores culpa laborum sed.', 'AMF', '2018-01-02 21:20:47', '2018-01-09 10:26:25'),
(2, 'atque-qui-dignissimos-dolores', 'Atque qui dignissimos dolores.', 'Nobis numquam tempore atque ab qui. Voluptatibus debitis aut voluptatem mollitia laudantium.\n\nAut quasi aut ex sed quo itaque. Earum laudantium assumenda ipsa odit rerum animi. Ipsa in minima quos sed.\n\nEaque tenetur eum dolore quia dolores. Deleniti quae quo accusamus quos veritatis. Quos laudantium alias et iusto alias at. Quia facere in id consequuntur quia.\n\nDolor enim beatae vel minima. Sint dolorum assumenda soluta perferendis laboriosam velit.\n\nEt aut sequi dignissimos odit et deserunt. Voluptates et quam voluptatem cupiditate minus. Rerum modi qui nobis dolor.', 'AMF', '2017-12-28 10:39:57', '2018-01-09 10:26:25'),
(3, 'vel-pariatur-non-sunt', 'Vel pariatur non sunt.', 'Omnis maxime nemo et ducimus facere. Numquam aliquam dolore tenetur. Dolorem corrupti fugit ut omnis ullam ab.\n\nBlanditiis omnis excepturi molestias voluptatum enim saepe. Rerum fugit nihil et cumque. Inventore qui accusantium omnis dolor aut pariatur eos. Consequuntur omnis sed id id perspiciatis tenetur.\n\nQuo enim odit ea at quo in. Et repudiandae alias corrupti sint maiores. Accusamus exercitationem blanditiis est.\n\nDolorem vel ut est rerum neque. Explicabo explicabo quasi ut. Hic molestias atque corrupti pariatur dicta harum assumenda. Consequatur inventore ipsum similique et qui.', 'AMF', '2017-12-29 01:38:39', '2018-01-09 10:26:25'),
(4, 'consequuntur-iusto-eaque-error-dolores-qui', 'Consequuntur iusto eaque error dolores qui.', 'Maiores nihil natus quidem ea. Ut ducimus non voluptatem ipsam voluptates voluptatem. Labore dolorum odio perspiciatis id. Et eius illo soluta pariatur ut sit consequuntur.\n\nIste aut illum ipsum nam. Dignissimos cumque veniam earum repellat nihil unde. Voluptatum est aliquid sunt placeat eos ducimus eveniet et.\n\nAut et illo enim. Minus facilis quo aperiam voluptatem neque. Et consequuntur corrupti accusamus laborum et molestiae.', 'AMF', '2017-12-16 01:46:18', '2018-01-09 10:26:25'),
(5, 'aut-fugiat-tempore-molestiae-dolore-porro-doloribus-dicta-quo', 'Aut fugiat tempore molestiae dolore porro doloribus dicta quo.', 'Est et quos ut quisquam voluptas. Consequatur repudiandae modi dolorem consequatur inventore. Officiis voluptates quia ex et assumenda.\n\nItaque est amet aliquam voluptas. Adipisci at distinctio expedita eligendi. Sint non accusamus temporibus repudiandae placeat voluptas.\n\nIste sed at ipsum veritatis. Magni ullam aliquam dolorum nemo ratione et. Quibusdam a quisquam facere natus dolores quasi placeat. Est consequatur non doloremque voluptatem natus.', 'AMF', '2017-12-20 14:04:35', '2018-01-09 10:26:25'),
(6, 'excepturi-excepturi-eveniet-aut-quibusdam-sequi-id', 'Excepturi excepturi eveniet aut quibusdam sequi id.', 'Non iusto suscipit earum dolor. Beatae nihil labore voluptas molestias iure animi. Autem earum odit quisquam eos quisquam ut voluptate. Aut deleniti quaerat et sed eos.\n\nSequi facilis debitis ipsum dignissimos praesentium et ut. Omnis recusandae nam quos. Dolores et debitis consequatur nemo qui.\n\nEaque consectetur libero voluptatem et dolorum. Earum numquam ut eligendi fuga aut numquam. Rerum eius sunt atque quis tempore blanditiis. Veritatis perferendis et eligendi quisquam non.\n\nEt labore rerum et tempore est quia. Sapiente ut doloremque sint qui repellat at excepturi. Dolorem esse consequatur ex praesentium. Rerum ut est ratione deleniti est.\n\nArchitecto optio dolore eaque repellendus cupiditate esse ab eius. Perferendis quasi officiis praesentium reprehenderit rem enim enim in. Rerum ipsam numquam autem vitae.', 'AMF', '2017-12-14 01:38:20', '2018-01-09 10:26:25'),
(7, 'deleniti-accusantium-nam-voluptatem-nam-adipisci-excepturi', 'Deleniti accusantium nam voluptatem nam adipisci excepturi.', 'Non veritatis ut dolor voluptatum. Est numquam suscipit tempora enim consectetur quia. Expedita dignissimos at nisi. Aut et et porro blanditiis vel ut perferendis. Tempore sint ut non tempora quis aperiam.\n\nEx rerum labore eligendi autem laudantium soluta. Accusantium accusamus voluptatibus id consectetur et et. Sit molestiae sint tenetur consequuntur. Sequi ipsum minima sunt et fuga autem.\n\nEt sunt iusto qui excepturi voluptate minus incidunt. Omnis rerum ea itaque distinctio aut quod. Illo nihil dolore consequatur.', 'AMF', '2017-12-10 21:59:16', '2018-01-09 10:26:25'),
(8, 'quidem-provident-neque-excepturi-beatae', 'Quidem provident neque excepturi beatae.', 'A reprehenderit ducimus et quia error iusto. Rerum non ex aliquam. Amet aut at rerum beatae quo modi.\n\nAutem asperiores distinctio nihil nihil aut earum sit. Consectetur deserunt quia nihil magni. Ea autem non fuga aperiam praesentium inventore.\n\nUt delectus exercitationem in excepturi maiores eaque velit. Nam sit inventore quae fuga. Molestiae non veniam et ipsa quod. Cupiditate minus enim minus omnis alias ut commodi.\n\nCupiditate magnam labore nihil voluptatem omnis repellat ab. Rerum placeat iure fuga ea incidunt quae aliquid. Accusantium quo enim ullam repellat.\n\nEt eveniet maxime magnam dolore accusamus veritatis. Non quia cum odit ut distinctio eaque. Vel minima provident consectetur necessitatibus enim veritatis laborum. Amet maiores sequi corporis.', 'AMF', '2017-12-25 14:45:59', '2018-01-09 10:26:25'),
(9, 'adipisci-molestiae-corrupti-est-quas-maxime-placeat-sint-rem-eum', 'Adipisci molestiae corrupti est quas maxime placeat sint rem eum.', 'Possimus est ex deleniti et itaque aspernatur eum consequatur. Sed nobis voluptatem quia blanditiis cum. Rem quam iure laboriosam aut error enim maiores. Inventore et quisquam assumenda aut explicabo rerum.\n\nPerferendis dolorem reiciendis atque ut et. Neque qui necessitatibus excepturi quia sint consequatur. Reiciendis ut dolor amet in minus voluptatibus. Quis ducimus tempore velit beatae.\n\nEligendi commodi temporibus vero et. Sint error sit odit et velit. Minus explicabo commodi accusantium mollitia officia.\n\nQuaerat ipsa est corrupti voluptatum. Atque eaque cupiditate hic consequatur dolores. Mollitia ut et quo ea vitae molestiae. Odio omnis dolor ullam.\n\nRerum impedit ipsum ratione aperiam vero est asperiores fuga. Corrupti mollitia illum aliquid voluptates ratione est itaque. Totam nam aut reiciendis natus consequatur quia dolorum similique.', 'AMF', '2017-12-28 18:04:21', '2018-01-09 10:26:25'),
(10, 'vel-quo-natus-magni-et-expedita-dolor-perferendis', 'Vel quo natus magni et expedita dolor perferendis.', 'Assumenda perspiciatis libero quibusdam quas iusto quam. Atque minima qui veritatis. Sit illo laboriosam quae et provident.\n\nRepudiandae debitis non ut nobis culpa aut. Qui quia perferendis mollitia esse id quo provident. Et provident modi aut et aut aut.\n\nNatus consequatur qui doloremque suscipit et. Rerum minima eum deserunt aperiam. Sunt et quasi autem accusamus occaecati voluptas. Quasi eaque molestiae voluptatibus vel doloremque fuga ex.\n\nNihil a magni ut est aperiam dolorem. Tempore qui culpa aperiam et possimus. Voluptatem aperiam repudiandae incidunt.\n\nAt placeat exercitationem voluptatem ut. Magnam totam consequuntur cumque hic tempora ea et et. Excepturi laborum et voluptatem dolorem qui tempore quo. Sunt nihil voluptas quos accusamus expedita.', 'AMF', '2017-12-10 05:03:07', '2018-01-09 10:26:25'),
(21, 'apa-itu-git', 'Apa itu Git?', 'Git adalah salah satu sistem pengontrol versi (Version Control System) pada proyek perangkat lunak yang diciptakan oleh Linus Torvalds.\r\n\r\nPengontrol versi bertugas mencatat setiap perubahan pada file proyek yang dikerjakan oleh banyak orang maupun sendiri.\r\n\r\nGit dikenal juga dengan distributed revision control (VCS terdistribusi), artinya penyimpanan database Git tidak hanya berada dalam satu tempat saja.\r\n\r\nSistem VSC Terdistribusi\r\n\r\nSemua orang yang terlibat dalam pengkodean proyek akan menyimpan database Git, sehingga akan memudahkan dalam mengelola proyek baik online maupun offline.\r\n\r\nDalam Git terdapat merge untuk menyebut aktifitas penggabungan kode.\r\n\r\nSedangkan pada VCS (Version Control System) yang terpusat… database disimpan dalam satu tempat dan setiap perubahan disimpan ke sana.\r\n\r\nSistem VCS Terpusat\r\n\r\nVCS terpusat memiliki beberapa kekurangan:\r\n\r\nSemua tim harus terkoneksi ke jaringan untuk mengakses source-code;\r\nTersimpan di satu tempat, nanti kalau server bermasalah bagaimana?\r\nKarena itu, Git hadir untuk menutupi kerkurangan yang dimiliki oleh VCS terpusat.\r\n\r\nApa yang dilakukan oleh Git?\r\nGit sebenarnya akan memantau semua perubahan yang terjadi pada file proyek. Lalu menyimpannya ke dalam database.', 'AkhdanFirdaus', '2018-01-09 14:36:08', '2018-01-09 14:36:08');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AkhdanFirdaus', 'akhdan.musyaffa.firdaus@gmail.com', '$2y$10$mibFtI354pb0d5f3RJE6nu0iHNiwUUF9uc7nLYUbhRp/DaoAhJPZS', 'J7TVWfB48Hc1yFlNiTIMuFWIDotinQNwnFU9qW2AwqF7Q5uPxkJ3UoCQSTcB', '2018-01-09 10:27:01', '2018-01-09 10:27:01');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
