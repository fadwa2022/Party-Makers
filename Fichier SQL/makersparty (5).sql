-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 07 avr. 2023 à 16:51
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
-- Structure de la table `commments`
--

CREATE TABLE `commments` (
  `id` int(11) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `post` int(11) NOT NULL,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(51, 9, 'Beck Kline', 1, 'public', '2023-04-27', 61, 7, 1, 'images/ThNxk91XUgdYXoseFWe8B4E58m93Qflb4nrKYc6v.jpg', 'Accepter', NULL, '2023-04-06', '2023-04-06'),
(52, 10, 'Odysseus Strickland', 6, 'public', '1995-12-06', 87, 27, 6, 'images/b3rEpLsDDNrsVwc8tPKWc5kO0wE4lbbZUAdXScpY.jpg', 'Not Yet', NULL, '2023-04-07', '2023-04-07'),
(53, 11, 'Ian Christensen', 6, 'public', '1972-08-10', 80, 68, 6, 'images/ai55CoRHxqpzbhMzxS9gIFUyQtn820e15v7fchgn.jpg', 'Not Yet', NULL, '2023-04-07', '2023-04-07'),
(54, 9, 'Alea James', 6, 'public', '2023-04-18', 26, 1, 6, 'images/dgxupzA4MyuWHY1T6RZuk6a1Z82b8fdZqYB6ycQP.jpg', 'Accepter', NULL, '2023-04-07', '2023-04-07');

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
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `DJ-create` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `Position` varchar(255) DEFAULT NULL,
  `Likes` int(11) NOT NULL DEFAULT 0,
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(29175, 51, 1, '2023-04-06', '2023-04-06'),
(29176, 51, 6, '2023-04-07', '2023-04-06'),
(29177, 51, NULL, '2023-04-06', '2023-04-06'),
(29178, 51, NULL, '2023-04-06', '2023-04-06'),
(29179, 51, NULL, '2023-04-06', '2023-04-06'),
(29180, 51, NULL, '2023-04-06', '2023-04-06'),
(29181, 51, NULL, '2023-04-06', '2023-04-06'),
(29182, 52, NULL, '2023-04-07', '2023-04-07'),
(29183, 52, NULL, '2023-04-07', '2023-04-07'),
(29184, 52, NULL, '2023-04-07', '2023-04-07'),
(29185, 52, NULL, '2023-04-07', '2023-04-07'),
(29186, 52, NULL, '2023-04-07', '2023-04-07'),
(29187, 52, NULL, '2023-04-07', '2023-04-07'),
(29188, 52, NULL, '2023-04-07', '2023-04-07'),
(29189, 52, NULL, '2023-04-07', '2023-04-07'),
(29190, 52, NULL, '2023-04-07', '2023-04-07'),
(29191, 52, NULL, '2023-04-07', '2023-04-07'),
(29192, 52, NULL, '2023-04-07', '2023-04-07'),
(29193, 52, NULL, '2023-04-07', '2023-04-07'),
(29194, 52, NULL, '2023-04-07', '2023-04-07'),
(29195, 52, NULL, '2023-04-07', '2023-04-07'),
(29196, 52, NULL, '2023-04-07', '2023-04-07'),
(29197, 52, NULL, '2023-04-07', '2023-04-07'),
(29198, 52, NULL, '2023-04-07', '2023-04-07'),
(29199, 52, NULL, '2023-04-07', '2023-04-07'),
(29200, 52, NULL, '2023-04-07', '2023-04-07'),
(29201, 52, NULL, '2023-04-07', '2023-04-07'),
(29202, 52, NULL, '2023-04-07', '2023-04-07'),
(29203, 52, NULL, '2023-04-07', '2023-04-07'),
(29204, 52, NULL, '2023-04-07', '2023-04-07'),
(29205, 52, NULL, '2023-04-07', '2023-04-07'),
(29206, 52, NULL, '2023-04-07', '2023-04-07'),
(29207, 52, NULL, '2023-04-07', '2023-04-07'),
(29208, 52, NULL, '2023-04-07', '2023-04-07'),
(29209, 53, NULL, '2023-04-07', '2023-04-07'),
(29210, 53, NULL, '2023-04-07', '2023-04-07'),
(29211, 53, NULL, '2023-04-07', '2023-04-07'),
(29212, 53, NULL, '2023-04-07', '2023-04-07'),
(29213, 53, NULL, '2023-04-07', '2023-04-07'),
(29214, 53, NULL, '2023-04-07', '2023-04-07'),
(29215, 53, NULL, '2023-04-07', '2023-04-07'),
(29216, 53, NULL, '2023-04-07', '2023-04-07'),
(29217, 53, NULL, '2023-04-07', '2023-04-07'),
(29218, 53, NULL, '2023-04-07', '2023-04-07'),
(29219, 53, NULL, '2023-04-07', '2023-04-07'),
(29220, 53, NULL, '2023-04-07', '2023-04-07'),
(29221, 53, NULL, '2023-04-07', '2023-04-07'),
(29222, 53, NULL, '2023-04-07', '2023-04-07'),
(29223, 53, NULL, '2023-04-07', '2023-04-07'),
(29224, 53, NULL, '2023-04-07', '2023-04-07'),
(29225, 53, NULL, '2023-04-07', '2023-04-07'),
(29226, 53, NULL, '2023-04-07', '2023-04-07'),
(29227, 53, NULL, '2023-04-07', '2023-04-07'),
(29228, 53, NULL, '2023-04-07', '2023-04-07'),
(29229, 53, NULL, '2023-04-07', '2023-04-07'),
(29230, 53, NULL, '2023-04-07', '2023-04-07'),
(29231, 53, NULL, '2023-04-07', '2023-04-07'),
(29232, 53, NULL, '2023-04-07', '2023-04-07'),
(29233, 53, NULL, '2023-04-07', '2023-04-07'),
(29234, 53, NULL, '2023-04-07', '2023-04-07'),
(29235, 53, NULL, '2023-04-07', '2023-04-07'),
(29236, 53, NULL, '2023-04-07', '2023-04-07'),
(29237, 53, NULL, '2023-04-07', '2023-04-07'),
(29238, 53, NULL, '2023-04-07', '2023-04-07'),
(29239, 53, NULL, '2023-04-07', '2023-04-07'),
(29240, 53, NULL, '2023-04-07', '2023-04-07'),
(29241, 53, NULL, '2023-04-07', '2023-04-07'),
(29242, 53, NULL, '2023-04-07', '2023-04-07'),
(29243, 53, NULL, '2023-04-07', '2023-04-07'),
(29244, 53, NULL, '2023-04-07', '2023-04-07'),
(29245, 53, NULL, '2023-04-07', '2023-04-07'),
(29246, 53, NULL, '2023-04-07', '2023-04-07'),
(29247, 53, NULL, '2023-04-07', '2023-04-07'),
(29248, 53, NULL, '2023-04-07', '2023-04-07'),
(29249, 53, NULL, '2023-04-07', '2023-04-07'),
(29250, 53, NULL, '2023-04-07', '2023-04-07'),
(29251, 53, NULL, '2023-04-07', '2023-04-07'),
(29252, 53, NULL, '2023-04-07', '2023-04-07'),
(29253, 53, NULL, '2023-04-07', '2023-04-07'),
(29254, 53, NULL, '2023-04-07', '2023-04-07'),
(29255, 53, NULL, '2023-04-07', '2023-04-07'),
(29256, 53, NULL, '2023-04-07', '2023-04-07'),
(29257, 53, NULL, '2023-04-07', '2023-04-07'),
(29258, 53, NULL, '2023-04-07', '2023-04-07'),
(29259, 53, NULL, '2023-04-07', '2023-04-07'),
(29260, 53, NULL, '2023-04-07', '2023-04-07'),
(29261, 53, NULL, '2023-04-07', '2023-04-07'),
(29262, 53, NULL, '2023-04-07', '2023-04-07'),
(29263, 53, NULL, '2023-04-07', '2023-04-07'),
(29264, 53, NULL, '2023-04-07', '2023-04-07'),
(29265, 53, NULL, '2023-04-07', '2023-04-07'),
(29266, 53, NULL, '2023-04-07', '2023-04-07'),
(29267, 53, NULL, '2023-04-07', '2023-04-07'),
(29268, 53, NULL, '2023-04-07', '2023-04-07'),
(29269, 53, NULL, '2023-04-07', '2023-04-07'),
(29270, 53, NULL, '2023-04-07', '2023-04-07'),
(29271, 53, NULL, '2023-04-07', '2023-04-07'),
(29272, 53, NULL, '2023-04-07', '2023-04-07'),
(29273, 53, NULL, '2023-04-07', '2023-04-07'),
(29274, 53, NULL, '2023-04-07', '2023-04-07'),
(29275, 53, NULL, '2023-04-07', '2023-04-07'),
(29276, 53, NULL, '2023-04-07', '2023-04-07'),
(29277, 54, 1, '2023-04-07', '2023-04-07');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `Role` varchar(255) DEFAULT 'client',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `image`, `password`, `Role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'fadwa', 'fadwacherqui@gmail.com', NULL, 'images/ygq0z9RgqbiOdV9MXMnFQ1eLZJsxl3UjDUT6E5CQ.jpg', '$2y$10$IzSXs979Y.aYCTRX.T78FuwAM6B4kM.KjfVI11hXTHYbdNhXMyX1S', 'admin', NULL, '2023-03-14 08:06:09', '2023-04-07 10:29:16'),
(6, 'David Guetta', 'DavidGuetta@gmail.com', NULL, 'images/RyZeRzZExcZVr2pNygukqVnTBVBgF7G0MNd39LMG.jpg', '$2y$10$4iT5mq85hbCdike5g5Hx0.kAKANSvmxdyW3JMPfXdMGcUCNmQ5m1i', 'Dj', NULL, '2023-04-07 10:36:51', '2023-04-07 10:38:16');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commments`
--
ALTER TABLE `commments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post` (`post`);

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
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `DJ-create` (`DJ-create`);

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
-- AUTO_INCREMENT pour la table `commments`
--
ALTER TABLE `commments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29278;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commments`
--
ALTER TABLE `commments`
  ADD CONSTRAINT `commments_ibfk_1` FOREIGN KEY (`post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_createur_foreign` FOREIGN KEY (`createur`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_dj_foreign` FOREIGN KEY (`DJ`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`style`) REFERENCES `styles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`DJ-create`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
