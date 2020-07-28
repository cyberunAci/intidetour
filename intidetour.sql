-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  mar. 28 juil. 2020 à 08:16
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `intidetour`
--

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `text`, `created_at`, `updated_at`) VALUES
(1, 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu\'il est prêt ou que la mise en page est achevée. Généralement, on utilise un texte en faux latin, le Lorem ipsum ou Lipsum.', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `circuits`
--

CREATE TABLE `circuits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `difficulte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `circuits`
--

INSERT INTO `circuits` (`id`, `nom`, `image`, `difficulte`, `description`, `duree`, `distance`, `latitude`, `longitude`, `deleted_at`) VALUES
(1, 'test 1', '/storage/imgs/cookie.jpg', 'facile', 'Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue', '2h30', '2km', '-21,0499', '55,4272', NULL),
(2, 'test 2', '/storage/imgs/cookie.jpg', 'moyen', 'Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue Lorem ipsum dolor sit amet consectetur adipiscing elit Quisque bibendum at est efficitur pharetra Aliquam rutrum tellus volutpat imperdiet ipsum eget vehicula nisl In semper tortor ut leo vulputate eget vestibulum nisl rutrum Phasellus volutpat auctor erat Aenean tellus augue rutrum ac dignissim vitae cursus in erat Cras et lorem felis Curabitur volutpat nibh a ante dignissim dapibus a a enim In hendrerit arcu arcu id convallis ex aliquet tempor Suspendisse potenti Orci varius natoque penatibus et magnis dis parturient montes nascetur ridiculus mus Quisque at faucibus eros Nulla ac consequat tortor Donec vehicula congue tellus non eleifend. Aliquam non elementum nisi Ut mattis gravida justo Nam ac ligula in dolor bibendum viverra elementum quis mi Nulla viverra sem dignissim convallis risus a placerat est Maecenas eu quam felis Ut in sollicitudin nulla Suspendisse volutpat commodo lorem Sed condimentum rutrum fermentum Pellentesque dui sapien varius ut elementum vitae vehicula eget ex Sed pulvinar eros nec nulla cursus varius Donec massa diam pharetra sit amet risus sit amet condimentum porta velit Quisque ac aliquam est quis tempor lorem Curabitur ut neque a mauris mollis convallis Praesent malesuada libero in justo bibendum congue', '2h30', '2km', '1.545454', '1.545454', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `evenement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_media` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `evenements`
--

INSERT INTO `evenements` (`id`, `evenement`, `type_media`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolor distinctio quos magnam ducimus dolorem alias cupiditate nisi officiis.', 'image', NULL, NULL),
(2, 'Lorem Ullam dolor distinctio quos magnam ducimus dolorem alias cupiditate nisi officiis doloremque placeat repellat blanditiis, voluptate, aspernatur sequi molestiae quas, esse excepturi.', 'video', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `galerie_photos`
--

CREATE TABLE `galerie_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `id_photo` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `galerie_photos`
--

INSERT INTO `galerie_photos` (`id`, `order`, `id_photo`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 8, 8);

-- --------------------------------------------------------

--
-- Structure de la table `interest_points`
--

CREATE TABLE `interest_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordonnees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_type` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `interest_points`
--

INSERT INTO `interest_points` (`id`, `nom`, `coordonnees`, `created_at`, `updated_at`, `id_type`) VALUES
(1, 'point d\'interet 1', '48.89, 2.21', NULL, NULL, 1),
(2, 'point d\'interet 2', '48.50, 2.84', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `interest_point_types`
--

CREATE TABLE `interest_point_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `interest_point_types`
--

INSERT INTO `interest_point_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'eglise', NULL, NULL),
(2, 'snack', NULL, NULL);

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
(190, '2014_10_12_000000_create_users_table', 1),
(191, '2014_10_12_100000_create_password_resets_table', 1),
(192, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(193, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(194, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(195, '2016_06_01_000004_create_oauth_clients_table', 1),
(196, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(197, '2019_08_19_000000_create_failed_jobs_table', 1),
(198, '2020_01_09_075927_creation_table_circuits', 1),
(199, '2020_01_13_095608_create_traces_table', 1),
(200, '2020_01_13_113307_modify_users_table', 1),
(201, '2020_01_14_063902_create_interest_points_table', 1),
(202, '2020_01_14_070610_create_succees_table', 1),
(203, '2020_01_14_094925_create_interest_point_types_table', 1),
(204, '2020_01_14_111956_create_photos_circuit_table', 1),
(205, '2020_01_16_055146_modify_table_description', 1),
(206, '2020_01_20_095304_modify_table_success', 1),
(207, '2020_01_20_101340_create_apropos_table', 1),
(208, '2020_02_03_113252_galerie_photos_table', 1),
(209, '2020_02_04_110850_modify_table_photos_circuit', 1),
(210, '2020_05_14_101954_create_table_roles', 1),
(211, '2020_05_14_102153_modify_table_users', 1),
(212, '2020_06_02_095646_create_user_has_circuit', 1),
(213, '2020_06_15_092440_create_evenements', 1);

-- --------------------------------------------------------

--
-- Structure de la table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('7db437942ed8ec19784c375e1e0b7e4896b543dfdc8f477ca4efc5dcd7f9a3b8730e71de502dc699', 1, 1, 'authToken', '[]', 0, '2020-07-28 01:03:28', '2020-07-28 01:03:28', '2021-07-28 05:03:28'),
('c0fbf6ce0e02c58d89a05220826d3ec1ba64a80ae06f336d60626608e1287d52fdcbfa4fc2ced883', 1, 1, 'authToken', '[]', 0, '2020-07-28 01:49:43', '2020-07-28 01:49:43', '2021-07-28 05:49:43');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'Et6svSlxmsqPMRwOwaRcHhnoJap6PuocX5XJbAlx', 'http://localhost', 1, 0, 0, '2020-07-28 01:03:25', '2020-07-28 01:03:25'),
(2, NULL, 'Laravel Password Grant Client', 'NpyCLxQ6mIKYKivqNjRoIzMg8PcCylzLZbyRCQVQ', 'http://localhost', 0, 1, 0, '2020-07-28 01:03:25', '2020-07-28 01:03:25');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-07-28 01:03:25', '2020-07-28 01:03:25');

-- --------------------------------------------------------

--
-- Structure de la table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photos_circuit`
--

CREATE TABLE `photos_circuit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_circuit` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `photos_circuit`
--

INSERT INTO `photos_circuit` (`id`, `photo`, `id_circuit`) VALUES
(1, 'https://www.reunion-mafate.com/fileadmin/_processed_/5/4/csm_34-deux-fesses-mafate-sentier-scout-mafate-_20158ff746.jpg', 1),
(2, 'https://www.les-covoyageurs.com/ressources/images-lieux/photo-lieu-764-1.jpg', 2),
(3, 'https://freedom.fr/wp-content/uploads/2018/04/RDTponttroisbassinsroutedestamarins-creditirt-emmanuelvirin.jpg', 1),
(4, 'https://www.clicanoo.re/sites/default/files/styles/juicebox_ar/public/image_articles//2016-10/Trois_Bassins.jpg?itok=xjU19mhV', 2),
(5, 'https://star-aid.fr/wp-content/uploads/2017/03/COMMUNE-DE-3-BASSINS.jpg', 1),
(6, 'https://mapio.net/images-p/8638939.jpg', 2),
(7, 'https://www.ouest-lareunion.com/galerie-wysipage/71/original-71-img20150929-379777816.jpg', 1),
(8, 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcREnxhSfgOJ7O3p2rtdE8hmpvq_ie4SBoM6nkvlj4DrLu846Gsy', 2);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `success`
--

CREATE TABLE `success` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `success`
--

INSERT INTO `success` (`id`, `nom`, `image`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Succes 1', '/storage/imgs/cookie.jpg', 'description du succes', NULL, NULL, NULL),
(2, 'Succes 2', '/storage/imgs/cookie.jpg', 'description du succes', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `traces`
--

CREATE TABLE `traces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_circuit` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_evenement` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `traces`
--

INSERT INTO `traces` (`id`, `trace`, `id_circuit`, `created_at`, `updated_at`, `id_evenement`) VALUES
(1, 'trace 1', 1, NULL, NULL, 1),
(2, 'trace 2', 2, NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `prenom`, `date_naissance`, `tel`, `photo`, `deleted_at`, `id_role`) VALUES
(1, 'TanPerm', 'admin@gmail.com', NULL, '$2y$10$uFGzmr5Q/5XSwFDricFBWuarGihk6aq9Nb8ezn/CYcXEGXAcdEfnq', NULL, NULL, NULL, 'Gui', '1995-02-09', '0692121212', 'https://www.reunion-mafate.com/fileadmin/_processed_/5/4/csm_34-deux-fesses-mafate-sentier-scout-mafate-_20158ff746.jpg', NULL, 1),
(2, 'Snickers', 'user@gmail.com', NULL, '$2y$10$NO7jbHk409lsgBajMV/riOC1eHb8FJ9.arqTzDg8nTu45boPj7JCC', NULL, NULL, NULL, 'Johnny', '1995-12-10', '0692131313', 'https://www.reunion-mafate.com/fileadmin/_processed_/5/4/csm_34-deux-fesses-mafate-sentier-scout-mafate-_20158ff746.jpg', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users_has_success`
--

CREATE TABLE `users_has_success` (
  `id_success` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users_has_success`
--

INSERT INTO `users_has_success` (`id_success`, `id_user`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users_success`
--

CREATE TABLE `users_success` (
  `id_success` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users_success`
--

INSERT INTO `users_success` (`id_success`, `id_user`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user_has_circuit`
--

CREATE TABLE `user_has_circuit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `id_circuit` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user_has_circuit`
--

INSERT INTO `user_has_circuit` (`id`, `id_user`, `id_circuit`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 1, NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `circuits`
--
ALTER TABLE `circuits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galerie_photos`
--
ALTER TABLE `galerie_photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galerie_photos_id_photo_foreign` (`id_photo`);

--
-- Index pour la table `interest_points`
--
ALTER TABLE `interest_points`
  ADD PRIMARY KEY (`id`),
  ADD KEY `interest_points_id_type_foreign` (`id_type`);

--
-- Index pour la table `interest_point_types`
--
ALTER TABLE `interest_point_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Index pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `photos_circuit`
--
ALTER TABLE `photos_circuit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_circuit_id_circuit_foreign` (`id_circuit`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `traces`
--
ALTER TABLE `traces`
  ADD PRIMARY KEY (`id`),
  ADD KEY `traces_id_circuit_foreign` (`id_circuit`),
  ADD KEY `traces_id_evenement_foreign` (`id_evenement`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_role_foreign` (`id_role`);

--
-- Index pour la table `users_has_success`
--
ALTER TABLE `users_has_success`
  ADD KEY `users_has_success_id_success_foreign` (`id_success`),
  ADD KEY `users_has_success_id_user_foreign` (`id_user`);

--
-- Index pour la table `users_success`
--
ALTER TABLE `users_success`
  ADD KEY `users_success_id_success_foreign` (`id_success`),
  ADD KEY `users_success_id_user_foreign` (`id_user`);

--
-- Index pour la table `user_has_circuit`
--
ALTER TABLE `user_has_circuit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_has_circuit_id_user_foreign` (`id_user`),
  ADD KEY `user_has_circuit_id_circuit_foreign` (`id_circuit`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apropos`
--
ALTER TABLE `apropos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `circuits`
--
ALTER TABLE `circuits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `evenements`
--
ALTER TABLE `evenements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `galerie_photos`
--
ALTER TABLE `galerie_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `interest_points`
--
ALTER TABLE `interest_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `interest_point_types`
--
ALTER TABLE `interest_point_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT pour la table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `photos_circuit`
--
ALTER TABLE `photos_circuit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `success`
--
ALTER TABLE `success`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `traces`
--
ALTER TABLE `traces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user_has_circuit`
--
ALTER TABLE `user_has_circuit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `galerie_photos`
--
ALTER TABLE `galerie_photos`
  ADD CONSTRAINT `galerie_photos_id_photo_foreign` FOREIGN KEY (`id_photo`) REFERENCES `photos_circuit` (`id`);

--
-- Contraintes pour la table `interest_points`
--
ALTER TABLE `interest_points`
  ADD CONSTRAINT `interest_points_id_type_foreign` FOREIGN KEY (`id_type`) REFERENCES `interest_point_types` (`id`);

--
-- Contraintes pour la table `photos_circuit`
--
ALTER TABLE `photos_circuit`
  ADD CONSTRAINT `photos_circuit_id_circuit_foreign` FOREIGN KEY (`id_circuit`) REFERENCES `circuits` (`id`);

--
-- Contraintes pour la table `traces`
--
ALTER TABLE `traces`
  ADD CONSTRAINT `traces_id_circuit_foreign` FOREIGN KEY (`id_circuit`) REFERENCES `circuits` (`id`),
  ADD CONSTRAINT `traces_id_evenement_foreign` FOREIGN KEY (`id_evenement`) REFERENCES `evenements` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_role_foreign` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);

--
-- Contraintes pour la table `users_has_success`
--
ALTER TABLE `users_has_success`
  ADD CONSTRAINT `users_has_success_id_success_foreign` FOREIGN KEY (`id_success`) REFERENCES `success` (`id`),
  ADD CONSTRAINT `users_has_success_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users_success`
--
ALTER TABLE `users_success`
  ADD CONSTRAINT `users_success_id_success_foreign` FOREIGN KEY (`id_success`) REFERENCES `success` (`id`),
  ADD CONSTRAINT `users_success_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `user_has_circuit`
--
ALTER TABLE `user_has_circuit`
  ADD CONSTRAINT `user_has_circuit_id_circuit_foreign` FOREIGN KEY (`id_circuit`) REFERENCES `circuits` (`id`),
  ADD CONSTRAINT `user_has_circuit_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
