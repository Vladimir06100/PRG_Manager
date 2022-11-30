-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mer. 30 nov. 2022 à 13:42
-- Version du serveur :  5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `rpg_manager`
--

-- --------------------------------------------------------

--
-- Structure de la table `groups`
--

CREATE TABLE `groups` (
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `personnage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `personnage_id1` bigint(20) UNSIGNED DEFAULT NULL,
  `personnage_id2` bigint(20) UNSIGNED DEFAULT NULL,
  `personnage_id3` bigint(20) UNSIGNED DEFAULT NULL,
  `personnage_id4` bigint(20) UNSIGNED DEFAULT NULL,
  `personnage_id5` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `groups`
--

INSERT INTO `groups` (`created_at`, `updated_at`, `deleted_at`, `id`, `name`, `description`, `image`, `user_id`, `personnage_id`, `personnage_id1`, `personnage_id2`, `personnage_id3`, `personnage_id4`, `personnage_id5`) VALUES
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 1, 'Ms. Jeanne Huel DDS', 'Quia recusandae cupiditate nemo voluptates non. Aut quis repudiandae quia qui.', 'https://via.placeholder.com/640x480.png/000077?text=commodi', 1, 3, 3, 1, 4, 4, 1),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 2, 'Regan McGlynn', 'Sed accusantium eos ullam laudantium qui facere. Quas rem aliquam perferendis recusandae.', 'https://via.placeholder.com/640x480.png/008899?text=id', 5, 3, 3, 3, 5, 2, 4),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 3, 'Gretchen Shields', 'Doloremque aut dolor fugiat minus. Non quis qui voluptas eveniet dolor omnis.', 'https://via.placeholder.com/640x480.png/00bb22?text=tempora', 1, 5, 4, 5, 4, 3, 3),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 4, 'Wilford Gutmann', 'Facere nihil laudantium sed voluptatem. Eos architecto sit et ea.', 'https://via.placeholder.com/640x480.png/0022ee?text=autem', 4, 2, 2, 1, 5, 2, 2),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 5, 'Stone Bergnaum', 'Quae quia nobis exercitationem doloribus. Aut et itaque quia.', 'https://via.placeholder.com/640x480.png/0000ee?text=autem', 5, 5, 3, 4, 3, 3, 2),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 6, 'Prof. Jorge Kulas DVM', 'Aspernatur voluptas qui pariatur voluptatem ducimus. Et nemo voluptas qui cumque possimus sint.', 'https://via.placeholder.com/640x480.png/0000ee?text=aut', 5, 3, 1, 5, 2, 3, 5),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 7, 'Furman Bahringer I', 'Quia ipsam cumque maiores dolorum aperiam distinctio nesciunt. Blanditiis dolores autem quis.', 'https://via.placeholder.com/640x480.png/005511?text=et', 3, 5, 5, 4, 2, 2, 4),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 8, 'Lance Jaskolski Sr.', 'Et laborum quia delectus. Beatae velit nemo quia labore aut. Necessitatibus aut eveniet ut.', 'https://via.placeholder.com/640x480.png/00dd33?text=molestias', 6, 2, 2, 3, 6, 5, 4),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 9, 'Alexandria Dare II', 'Velit perspiciatis velit quia assumenda sint omnis est. Deserunt maiores et nisi.', 'https://via.placeholder.com/640x480.png/00ccee?text=qui', 3, 5, 3, 1, 5, 2, 6),
('2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 10, 'Makayla Dooley', 'Aut debitis quidem sed nam. Omnis dignissimos rerum ab sit non nihil ea est.', 'https://via.placeholder.com/640x480.png/008844?text=cupiditate', 5, 5, 4, 3, 3, 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `group_id` bigint(20) UNSIGNED DEFAULT NULL,
  `personnage_id` bigint(20) UNSIGNED DEFAULT NULL,
  `response` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`id`, `created_at`, `updated_at`, `deleted_at`, `group_id`, `personnage_id`, `response`) VALUES
(1, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 3, 3, 1),
(2, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 3, 5, 0),
(3, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 4, 5, 1),
(4, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 4, 2, 0),
(5, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 3, 3, 0),
(6, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 4, 5, 0),
(7, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 2, 4, 1),
(8, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 4, 5, 0),
(9, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 6, 2, 0),
(10, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 3, 6, 0);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2022_11_23_142123_create_users_table', 1),
(38, '2022_11_25_105123_create_personnages_table', 1),
(39, '2022_11_29_135007_create_groups_table', 1),
(40, '2022_11_29_220906_create_members_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

CREATE TABLE `personnages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci,
  `magie` int(11) NOT NULL,
  `force` int(11) NOT NULL,
  `agilite` int(11) NOT NULL,
  `intelligence` int(11) NOT NULL,
  `vie` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`id`, `created_at`, `updated_at`, `deleted_at`, `nom`, `level`, `description`, `specialite`, `image`, `magie`, `force`, `agilite`, `intelligence`, `vie`, `user_id`) VALUES
(1, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Audie Ondricka', 2, 'Repellendus tempore architecto soluta placeat. Aut et voluptatem repellat vitae aut quasi rerum qui. Autem possimus ut ut animi facilis dicta inventore.', 'Magni.', 'https://via.placeholder.com/640x480.png/00ee88?text=dolores', 6, 10, 7, 9, 41, 5),
(2, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Maxie Corwin', 4, 'Occaecati reprehenderit voluptates facere exercitationem rerum. Similique et et autem doloribus repellat possimus non ex. Velit sit fugiat sequi odio ut reiciendis.', 'Dolore.', 'https://via.placeholder.com/640x480.png/00bb22?text=temporibus', 6, 4, 1, 7, 36, 6),
(3, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Ara Bayer', 6, 'Voluptatibus atque culpa eius ducimus laboriosam. Voluptate excepturi illo voluptates nam dicta quaerat. Nihil totam esse est dolores quia sequi libero tenetur.', 'Adipisci.', 'https://via.placeholder.com/640x480.png/00aaff?text=voluptatum', 1, 1, 13, 1, 24, 8),
(4, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Catherine Feil', 6, 'Quia reiciendis architecto autem odit. Et ut repellat omnis error et quaerat porro aut.', 'Quo et in.', 'https://via.placeholder.com/640x480.png/00bb33?text=laudantium', 6, 10, 12, 7, 36, 5),
(5, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Prof. Cali Kessler', 3, 'Perspiciatis vitae et omnis sunt eum. Tempore ut blanditiis perspiciatis nihil ut. Debitis ducimus eaque illo sequi.', 'Et magni.', 'https://via.placeholder.com/640x480.png/00cc22?text=veritatis', 9, 3, 13, 4, 26, 10),
(6, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Judah Ziemann', 5, 'Et ea veritatis optio eaque suscipit. Commodi cumque labore doloremque exercitationem sunt. Est reiciendis qui repellat.', 'Modi.', 'https://via.placeholder.com/640x480.png/0088bb?text=velit', 14, 5, 11, 1, 34, 5),
(7, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Mariela Blanda', 9, 'Culpa autem iure ducimus error iure. Quas nihil esse quas esse dignissimos. Quam recusandae qui repellendus perferendis. Qui fuga eveniet est id. Minus expedita dignissimos et.', 'Rerum.', 'https://via.placeholder.com/640x480.png/008866?text=omnis', 9, 2, 2, 4, 49, 10),
(8, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Elise Bashirian', 6, 'Amet consequatur accusamus omnis provident inventore. Sint sunt voluptatem quasi rerum consectetur incidunt modi. Culpa ex quam voluptatum soluta. Enim ipsam cum sit atque non voluptatem.', 'Quis.', 'https://via.placeholder.com/640x480.png/00cc44?text=omnis', 2, 5, 9, 4, 46, 9),
(9, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Herbert Powlowski', 9, 'Maiores atque distinctio fugit vero occaecati eum accusamus. Facere inventore alias eos nemo. A tempore provident accusantium sapiente consequuntur blanditiis. Non autem eum sint laborum soluta.', 'Ut maxime.', 'https://via.placeholder.com/640x480.png/00cc88?text=tempora', 4, 8, 9, 11, 46, 8),
(10, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Kennedy Maggio', 7, 'Omnis quia optio est laborum facilis natus dolorem. Expedita asperiores error quibusdam repudiandae sequi. Tempora voluptatum nihil vero illo dolorem voluptatibus omnis.', 'Omnis.', 'https://via.placeholder.com/640x480.png/0066cc?text=est', 2, 12, 9, 5, 46, 4);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `deleted_at`, `pseudo`, `nom`, `prenom`, `email`, `password`, `remember_token`) VALUES
(1, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Gerry Mills', 'Prof. Theodore Nikolaus', 'Kallie Sipes', 'tokuneva@example.net', '$2y$10$V1zNKulIGwpv4abHKXilcuDK8y5g4jiPDih.BXvzACczwl9rpLe5y', 'PuTUN1UNMH'),
(2, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Ms. Gina Langworth', 'Ayana Watsica', 'Travon Kuphal', 'alexandro.reichel@example.com', '$2y$10$F0sAd/eQ9j2HVM7L/hcgz.8ctAZ7a6GfDvy9FJwYARUqhY1NMO.O.', 'GbatBNsg8o'),
(3, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Jeffrey Kunze PhD', 'Kristina Steuber', 'Carlo Barton', 'johnnie.littel@example.net', '$2y$10$29eEpPlGEgngVpQXAZM7eeQTg7afinvkSY2Ie4q.AyNz6VF3ee25m', 'lYlLNzAZPK'),
(4, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Ursula Kshlerin', 'Mr. Demond Wolff PhD', 'Haley Orn', 'willms.lexie@example.net', '$2y$10$H9KlNOMPetEXyzwO34Y2v.GJfbLEc2YijudHJqfYzcAwCJl9nISeq', 'BDSc4ozg8S'),
(5, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Dr. Ashlynn Watsica', 'Raquel Jones', 'Oleta Hoppe', 'dickinson.brock@example.com', '$2y$10$odRvFqleJDeSMnlJMH0ukuFy3fL5inM6puP3L2IwfW.YfilN21P9a', '06pLMLissP'),
(6, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Anabel Fahey', 'Cassie Hettinger', 'Mrs. Libbie Rowe DVM', 'andrew.jones@example.org', '$2y$10$f97UTZEM9wQXf5nZ0ctsj.95f9ogV2ddZ0xJOtYVGotdJneRT6DAG', 'TbfH1OyaVO'),
(7, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Guillermo Morar', 'Daphney Koelpin', 'Aletha Paucek', 'zflatley@example.com', '$2y$10$p7CvJAf7ZZTu1tGrAPrxhen3K.q.v3dkozQg4HgUd41mL88dSb5Fi', 'wb1CcBcymL'),
(8, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Chloe DuBuque', 'Letitia Treutel', 'Dorthy Quitzon', 'dana76@example.com', '$2y$10$PCyLuyy4OoHnzyUpNXMy/Oi7M7ZKXmLjnK0wvcicztnICgagaAcQO', 'U1eLqYiwY9'),
(9, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Mrs. Lisa Walter', 'Alphonso Bashirian MD', 'Lauren Hammes DDS', 'bailey.madge@example.net', '$2y$10$3F2xpJRuBTDNb5tnoM/WH.g95nNbdFfGmXgwU9r89t0VrHPjNqdZC', 'tyn18JCpHN'),
(10, '2022-11-30 12:41:24', '2022-11-30 12:41:24', NULL, 'Monty Cruickshank', 'Einar Simonis DDS', 'Miss Telly Gleason II', 'keagan14@example.org', '$2y$10$4jFvOHtBZlyejEUF6d6tFuFLDVLoi76wqtJM2qSUahwd2aXv3.jqK', 'iAgiL9ty46');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groups_user_id_foreign` (`user_id`),
  ADD KEY `groups_personnage_id_foreign` (`personnage_id`),
  ADD KEY `groups_personnage_id1_foreign` (`personnage_id1`),
  ADD KEY `groups_personnage_id2_foreign` (`personnage_id2`),
  ADD KEY `groups_personnage_id3_foreign` (`personnage_id3`),
  ADD KEY `groups_personnage_id4_foreign` (`personnage_id4`),
  ADD KEY `groups_personnage_id5_foreign` (`personnage_id5`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `members_group_id_foreign` (`group_id`),
  ADD KEY `members_personnage_id_foreign` (`personnage_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personnages_nom_unique` (`nom`),
  ADD KEY `personnages_user_id_foreign` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_pseudo_unique` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personnages`
--
ALTER TABLE `personnages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_personnage_id1_foreign` FOREIGN KEY (`personnage_id1`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `groups_personnage_id2_foreign` FOREIGN KEY (`personnage_id2`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `groups_personnage_id3_foreign` FOREIGN KEY (`personnage_id3`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `groups_personnage_id4_foreign` FOREIGN KEY (`personnage_id4`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `groups_personnage_id5_foreign` FOREIGN KEY (`personnage_id5`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `groups_personnage_id_foreign` FOREIGN KEY (`personnage_id`) REFERENCES `personnages` (`id`),
  ADD CONSTRAINT `groups_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`),
  ADD CONSTRAINT `members_personnage_id_foreign` FOREIGN KEY (`personnage_id`) REFERENCES `personnages` (`id`);

--
-- Contraintes pour la table `personnages`
--
ALTER TABLE `personnages`
  ADD CONSTRAINT `personnages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
