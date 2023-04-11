-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 06 avr. 2023 à 12:31
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `makersparty`
--

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) UNSIGNED NOT NULL,
  `style` bigint(20) UNSIGNED NOT NULL,
  `Localisation` varchar(255) NOT NULL,
  `DJ` bigint(20) UNSIGNED NOT NULL,
  `typeEvent` varchar(255) DEFAULT NULL,
  `dateEvent` date NOT NULL,
  `PrixEvent` int(11) DEFAULT NULL,
  `NumeroPlace` int(11) DEFAULT NULL,
  `createur` bigint(20) UNSIGNED NOT NULL,
  `Imageevent` varchar(255) NOT NULL,
  `situation` varchar(255) DEFAULT 'Not Yet',
  `ourevent` int(11) DEFAULT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `style`, `Localisation`, `DJ`, `typeEvent`, `dateEvent`, `PrixEvent`, `NumeroPlace`, `createur`, `Imageevent`, `situation`, `ourevent`, `updated_at`, `created_at`) VALUES
(40, 10, 'Joel Powers', 4, 'privé', '2023-10-24', NULL, 45, 4, 'images/vju9mw7ZSwq3cN8IKqj4H3f3XxrjJ0QMBFrZr7St.jpg', 'Accepter', NULL, '2023-04-05', '2023-04-05'),
(44, 12, 'Kyra Spencer', 4, 'privé', '2023-03-10', NULL, 93, 1, 'images/d8Ol51UK37Inxyfvz40dhRJzrx5aYuZozfEBz7YK.jpg', 'Not Yet', NULL, '2023-04-05', '2023-04-05'),
(45, 10, 'Amethyst Benjamin', 4, 'public', '2023-09-13', 10, 18, 1, 'images/PuI9GAJQgZdeSHigcaNDnaed5Xwo3FYi4WP9tOPf.jpg', 'Accepter', NULL, '2023-04-05', '2023-04-05'),
(46, 9, 'Brenden Whitfield', 5, 'public', '2023-10-05', 18, 21, 1, 'images/EbhuNhUcUUsOtodqqIrtbxoFxoVhifCE9bgA3R5i.jpg', 'Accepter', NULL, '2023-04-05', '2023-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(16, '2019_08_19_000000_create_failed_jobs_table', 2),
(17, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` varchar(255) NOT NULL,
  `situation` varchar(255) DEFAULT 'not yet',
  `sponsor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sponsors`
--

INSERT INTO `sponsors` (`id`, `message`, `situation`, `sponsor`, `created_at`, `updated_at`) VALUES
(4, 'ghjkl', 'Refuser', 1, '2023-03-31 16:07:56', '2023-03-31 16:08:57'),
(5, 'sdfghjk', 'Accepter', 1, '2023-03-31 16:07:56', '2023-03-31 16:09:11');

-- --------------------------------------------------------

--
-- Structure de la table `styles`
--

CREATE TABLE `styles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `style_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `image_style` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `styles`
--

INSERT INTO `styles` (`id`, `style_name`, `created_at`, `updated_at`, `image_style`) VALUES
(9, 'gala', '2023-04-05 13:41:11', '2023-04-05 13:41:11', 'images/WfdQMk8orkiRTUUELYezLZ1ctygFi1r0n7nYNUCe.jpg'),
(10, 'cocktail', '2023-04-05 13:42:40', '2023-04-05 13:42:40', 'images/WZM691eHHa4GstbCjWQ7EtRwmVN6R1XvHsHM1tDV.jpg'),
(11, 'danse', '2023-04-05 13:43:13', '2023-04-05 13:43:13', 'images/uwp8DDaR3Me8tXgXO9Yvw5gHuvUMK49m1WM4Xuv3.jpg'),
(12, 'karaoké', '2023-04-05 13:45:46', '2023-04-05 13:45:46', 'images/Q3ZB1CPZKd1S1UwYujTBDCSMPLFaboCy83ci3FSW.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `numeroevent` int(11) UNSIGNED NOT NULL,
  `achateur` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `numeroevent`, `achateur`, `updated_at`, `created_at`) VALUES
(28864, 44, NULL, '2023-04-05', '2023-04-05'),
(28865, 44, NULL, '2023-04-05', '2023-04-05'),
(28866, 44, NULL, '2023-04-05', '2023-04-05'),
(28867, 44, NULL, '2023-04-05', '2023-04-05'),
(28868, 44, NULL, '2023-04-05', '2023-04-05'),
(28869, 44, NULL, '2023-04-05', '2023-04-05'),
(28870, 44, NULL, '2023-04-05', '2023-04-05'),
(28871, 44, NULL, '2023-04-05', '2023-04-05'),
(28872, 44, NULL, '2023-04-05', '2023-04-05'),
(28873, 44, NULL, '2023-04-05', '2023-04-05'),
(28874, 44, NULL, '2023-04-05', '2023-04-05'),
(28875, 44, NULL, '2023-04-05', '2023-04-05'),
(28876, 44, NULL, '2023-04-05', '2023-04-05'),
(28877, 44, NULL, '2023-04-05', '2023-04-05'),
(28878, 44, NULL, '2023-04-05', '2023-04-05'),
(28879, 44, NULL, '2023-04-05', '2023-04-05'),
(28880, 44, NULL, '2023-04-05', '2023-04-05'),
(28881, 44, NULL, '2023-04-05', '2023-04-05'),
(28882, 44, NULL, '2023-04-05', '2023-04-05'),
(28883, 44, NULL, '2023-04-05', '2023-04-05'),
(28884, 44, NULL, '2023-04-05', '2023-04-05'),
(28885, 44, NULL, '2023-04-05', '2023-04-05'),
(28886, 44, NULL, '2023-04-05', '2023-04-05'),
(28887, 44, NULL, '2023-04-05', '2023-04-05'),
(28888, 44, NULL, '2023-04-05', '2023-04-05'),
(28889, 44, NULL, '2023-04-05', '2023-04-05'),
(28890, 44, NULL, '2023-04-05', '2023-04-05'),
(28891, 44, NULL, '2023-04-05', '2023-04-05'),
(28892, 44, NULL, '2023-04-05', '2023-04-05'),
(28893, 44, NULL, '2023-04-05', '2023-04-05'),
(28894, 44, NULL, '2023-04-05', '2023-04-05'),
(28895, 44, NULL, '2023-04-05', '2023-04-05'),
(28896, 44, NULL, '2023-04-05', '2023-04-05'),
(28897, 44, NULL, '2023-04-05', '2023-04-05'),
(28898, 44, NULL, '2023-04-05', '2023-04-05'),
(28899, 44, NULL, '2023-04-05', '2023-04-05'),
(28900, 44, NULL, '2023-04-05', '2023-04-05'),
(28901, 44, NULL, '2023-04-05', '2023-04-05'),
(28902, 44, NULL, '2023-04-05', '2023-04-05'),
(28903, 44, NULL, '2023-04-05', '2023-04-05'),
(28904, 44, NULL, '2023-04-05', '2023-04-05'),
(28905, 44, NULL, '2023-04-05', '2023-04-05'),
(28906, 44, NULL, '2023-04-05', '2023-04-05'),
(28907, 44, NULL, '2023-04-05', '2023-04-05'),
(28908, 44, NULL, '2023-04-05', '2023-04-05'),
(28909, 44, NULL, '2023-04-05', '2023-04-05'),
(28910, 44, NULL, '2023-04-05', '2023-04-05'),
(28911, 44, NULL, '2023-04-05', '2023-04-05'),
(28912, 44, NULL, '2023-04-05', '2023-04-05'),
(28913, 44, NULL, '2023-04-05', '2023-04-05'),
(28914, 44, NULL, '2023-04-05', '2023-04-05'),
(28915, 44, NULL, '2023-04-05', '2023-04-05'),
(28916, 44, NULL, '2023-04-05', '2023-04-05'),
(28917, 44, NULL, '2023-04-05', '2023-04-05'),
(28918, 44, NULL, '2023-04-05', '2023-04-05'),
(28919, 44, NULL, '2023-04-05', '2023-04-05'),
(28920, 44, NULL, '2023-04-05', '2023-04-05'),
(28921, 44, NULL, '2023-04-05', '2023-04-05'),
(28922, 44, NULL, '2023-04-05', '2023-04-05'),
(28923, 44, NULL, '2023-04-05', '2023-04-05'),
(28924, 44, NULL, '2023-04-05', '2023-04-05'),
(28925, 44, NULL, '2023-04-05', '2023-04-05'),
(28926, 44, NULL, '2023-04-05', '2023-04-05'),
(28927, 44, NULL, '2023-04-05', '2023-04-05'),
(28928, 44, NULL, '2023-04-05', '2023-04-05'),
(28929, 44, NULL, '2023-04-05', '2023-04-05'),
(28930, 44, NULL, '2023-04-05', '2023-04-05'),
(28931, 44, NULL, '2023-04-05', '2023-04-05'),
(28932, 44, NULL, '2023-04-05', '2023-04-05'),
(28933, 44, NULL, '2023-04-05', '2023-04-05'),
(28934, 44, NULL, '2023-04-05', '2023-04-05'),
(28935, 44, NULL, '2023-04-05', '2023-04-05'),
(28936, 44, NULL, '2023-04-05', '2023-04-05'),
(28937, 44, NULL, '2023-04-05', '2023-04-05'),
(28938, 44, NULL, '2023-04-05', '2023-04-05'),
(28939, 44, NULL, '2023-04-05', '2023-04-05'),
(28940, 44, NULL, '2023-04-05', '2023-04-05'),
(28941, 44, NULL, '2023-04-05', '2023-04-05'),
(28942, 44, NULL, '2023-04-05', '2023-04-05'),
(28943, 44, NULL, '2023-04-05', '2023-04-05'),
(28944, 44, NULL, '2023-04-05', '2023-04-05'),
(28945, 44, NULL, '2023-04-05', '2023-04-05'),
(28946, 44, NULL, '2023-04-05', '2023-04-05'),
(28947, 44, NULL, '2023-04-05', '2023-04-05'),
(28948, 44, NULL, '2023-04-05', '2023-04-05'),
(28949, 44, NULL, '2023-04-05', '2023-04-05'),
(28950, 44, NULL, '2023-04-05', '2023-04-05'),
(28951, 44, NULL, '2023-04-05', '2023-04-05'),
(28952, 44, NULL, '2023-04-05', '2023-04-05'),
(28953, 44, NULL, '2023-04-05', '2023-04-05'),
(28954, 44, NULL, '2023-04-05', '2023-04-05'),
(28955, 44, NULL, '2023-04-05', '2023-04-05'),
(28956, 44, NULL, '2023-04-05', '2023-04-05'),
(28957, 45, NULL, '2023-04-05', '2023-04-05'),
(28958, 45, NULL, '2023-04-05', '2023-04-05'),
(28959, 45, NULL, '2023-04-05', '2023-04-05'),
(28960, 45, NULL, '2023-04-05', '2023-04-05'),
(28961, 45, NULL, '2023-04-05', '2023-04-05'),
(28962, 45, NULL, '2023-04-05', '2023-04-05'),
(28963, 45, NULL, '2023-04-05', '2023-04-05'),
(28964, 45, NULL, '2023-04-05', '2023-04-05'),
(28965, 45, NULL, '2023-04-05', '2023-04-05'),
(28966, 45, NULL, '2023-04-05', '2023-04-05'),
(28967, 45, NULL, '2023-04-05', '2023-04-05'),
(28968, 45, NULL, '2023-04-05', '2023-04-05'),
(28969, 45, NULL, '2023-04-05', '2023-04-05'),
(28970, 45, NULL, '2023-04-05', '2023-04-05'),
(28971, 45, NULL, '2023-04-05', '2023-04-05'),
(28972, 45, NULL, '2023-04-05', '2023-04-05'),
(28973, 45, NULL, '2023-04-05', '2023-04-05'),
(28974, 45, NULL, '2023-04-05', '2023-04-05'),
(28975, 46, NULL, '2023-04-05', '2023-04-05'),
(28976, 46, NULL, '2023-04-05', '2023-04-05'),
(28977, 46, NULL, '2023-04-05', '2023-04-05'),
(28978, 46, NULL, '2023-04-05', '2023-04-05'),
(28979, 46, NULL, '2023-04-05', '2023-04-05'),
(28980, 46, NULL, '2023-04-05', '2023-04-05'),
(28981, 46, NULL, '2023-04-05', '2023-04-05'),
(28982, 46, NULL, '2023-04-05', '2023-04-05'),
(28983, 46, NULL, '2023-04-05', '2023-04-05'),
(28984, 46, NULL, '2023-04-05', '2023-04-05'),
(28985, 46, NULL, '2023-04-05', '2023-04-05'),
(28986, 46, NULL, '2023-04-05', '2023-04-05'),
(28987, 46, NULL, '2023-04-05', '2023-04-05'),
(28988, 46, NULL, '2023-04-05', '2023-04-05'),
(28989, 46, NULL, '2023-04-05', '2023-04-05'),
(28990, 46, NULL, '2023-04-05', '2023-04-05'),
(28991, 46, NULL, '2023-04-05', '2023-04-05'),
(28992, 46, NULL, '2023-04-05', '2023-04-05'),
(28993, 46, NULL, '2023-04-05', '2023-04-05'),
(28994, 46, NULL, '2023-04-05', '2023-04-05'),
(28995, 46, NULL, '2023-04-05', '2023-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `Role` varchar(255) DEFAULT 'client',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `Role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fadwa', 'fadwacherqui@gmail.com', NULL, '$2y$10$IzSXs979Y.aYCTRX.T78FuwAM6B4kM.KjfVI11hXTHYbdNhXMyX1S', 'admin', NULL, '2023-03-14 08:06:09', '2023-03-23 22:18:21'),
(4, 'salma', 'email@gmail.com', NULL, '12345678', 'Dj', NULL, NULL, NULL),
(5, 'sara', 'sara@gmail.com', NULL, '12334', 'Dj', NULL, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_createur_foreign` (`createur`),
  ADD KEY `events_dj_foreign` (`DJ`),
  ADD KEY `events_ibfk_1` (`style`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sponsors_sponsor_foreign` (`sponsor`);

--
-- Index pour la table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `achateur` (`achateur`),
  ADD KEY `tickets_ibfk_1` (`numeroevent`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `styles`
--
ALTER TABLE `styles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28996;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_createur_foreign` FOREIGN KEY (`createur`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_dj_foreign` FOREIGN KEY (`DJ`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`style`) REFERENCES `styles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sponsors`
--
ALTER TABLE `sponsors`
  ADD CONSTRAINT `sponsors_sponsor_foreign` FOREIGN KEY (`sponsor`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`numeroevent`) REFERENCES `events` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`achateur`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
