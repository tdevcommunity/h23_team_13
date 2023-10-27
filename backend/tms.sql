-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 27 oct. 2023 à 18:50
-- Version du serveur : 10.6.12-MariaDB-cll-lve
-- Version de PHP : 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `u625081723_tms`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `honoraires`
--

CREATE TABLE `honoraires` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heure` varchar(255) NOT NULL,
  `ligne_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `lignes`
--

CREATE TABLE `lignes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `intitule` varchar(255) DEFAULT NULL,
  `kilometre` varchar(255) DEFAULT NULL,
  `distance` varchar(255) DEFAULT NULL,
  `arret` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_08_15_192031_create_operations_table', 1),
(18, '2023_08_23_103920_create_admins_table', 1),
(19, '2023_08_30_110948_create_lignes_table', 1),
(20, '2023_09_07_144907_create_pubs_table', 1),
(21, '2023_09_07_160840_create_user_lignes_table', 1),
(22, '2023_09_17_120049_create_honoraires_table', 1),
(23, '2023_09_17_143428_create_voyages_table', 1),
(24, '2023_10_01_161314_create_voyage_lignes_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

CREATE TABLE `operations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT -1,
  `ticket_qte` int(11) NOT NULL,
  `sender` int(11) NOT NULL DEFAULT -1,
  `receiver` int(11) NOT NULL DEFAULT -1,
  `frais` int(11) DEFAULT NULL,
  `memo` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'myapptoken', '41518bbf89659236c070ce35ea2d81bbbc40db397a9bb98636eadecae302f5fb', '[\"*\"]', NULL, NULL, '2023-10-26 10:41:15', '2023-10-26 10:41:15'),
(2, 'App\\Models\\User', 2, 'myapptoken', 'd95a685f8fe65118f56d9c553605e01558705542cfbcd5147d0dfcddad53bac9', '[\"*\"]', NULL, NULL, '2023-10-26 10:50:34', '2023-10-26 10:50:34'),
(3, 'App\\Models\\User', 3, 'myapptoken', '540487389c4143d9a40e700d1641a6d94624463f6defd2e3214fa90cbe26edd7', '[\"*\"]', NULL, NULL, '2023-10-26 10:51:41', '2023-10-26 10:51:41'),
(4, 'App\\Models\\User', 4, 'myapptoken', '34ad21631718ffeaa9b2f5014e75898ae70e8c5274234a1f9d1eef3ea299f9e8', '[\"*\"]', NULL, NULL, '2023-10-26 10:53:22', '2023-10-26 10:53:22'),
(5, 'App\\Models\\User', 5, 'myapptoken', '26e46aaab67d9df40e7c94d43464ffcd86b234e46e5f4372ed96ba2bc2d7518a', '[\"*\"]', NULL, NULL, '2023-10-26 16:53:10', '2023-10-26 16:53:10'),
(6, 'App\\Models\\User', 5, 'myapptoken', '42d73ff98845531af4c78391c52aa9c011e14e8a618e2353d992616dbdc6c2d9', '[\"*\"]', NULL, NULL, '2023-10-26 16:57:17', '2023-10-26 16:57:17'),
(7, 'App\\Models\\User', 5, 'myapptoken', '5be4ae4a337f389ebc2a49283933a84ae060827f4510110bbfac2c3c1dde551b', '[\"*\"]', NULL, NULL, '2023-10-26 17:10:30', '2023-10-26 17:10:30'),
(8, 'App\\Models\\User', 5, 'myapptoken', '129a4f43eb0b962015f56e09585d7554b9e672f0f5ddcf5a8e959656d3dc1339', '[\"*\"]', NULL, NULL, '2023-10-26 17:10:41', '2023-10-26 17:10:41'),
(9, 'App\\Models\\User', 5, 'myapptoken', '0e6b04f0b46b707cd6b73e988e8d7944db709de81ac091cfef544eed72fe0423', '[\"*\"]', NULL, NULL, '2023-10-26 17:12:23', '2023-10-26 17:12:23'),
(10, 'App\\Models\\User', 5, 'myapptoken', '908752c81fcbbceed3d7db4b240c5f0e535a704ca5378b22408762709522d016', '[\"*\"]', NULL, NULL, '2023-10-26 18:33:39', '2023-10-26 18:33:39'),
(11, 'App\\Models\\User', 5, 'myapptoken', '21b441e18d65bf593f9cacef9e1a44b02478b5cf005b644533c356e297dbda15', '[\"*\"]', NULL, NULL, '2023-10-26 19:01:06', '2023-10-26 19:01:06'),
(12, 'App\\Models\\User', 5, 'myapptoken', '3dfeb59f9c2f62b8b3fc8075d8bb8104454b18d4d8f6ac3c7c4bbc3e9064563e', '[\"*\"]', NULL, NULL, '2023-10-26 19:17:59', '2023-10-26 19:17:59'),
(13, 'App\\Models\\User', 5, 'myapptoken', '2af9bcaad1b34a20866209d13d49a3f7862bed2798947d7fa85af1efbf09fea6', '[\"*\"]', NULL, NULL, '2023-10-26 19:27:56', '2023-10-26 19:27:56'),
(14, 'App\\Models\\User', 5, 'myapptoken', '0541b8e736344048ff741a496d87a4e2ec6ba6d148d104ad5c4cf54ce8443c71', '[\"*\"]', NULL, NULL, '2023-10-26 19:28:11', '2023-10-26 19:28:11'),
(15, 'App\\Models\\User', 5, 'myapptoken', '8f41b1b81a4824e3d20e1f8989c31c07e230af3a47b922b25c89c3476426e749', '[\"*\"]', NULL, NULL, '2023-10-26 19:31:58', '2023-10-26 19:31:58'),
(16, 'App\\Models\\User', 5, 'myapptoken', 'eaa1130d16c29eb05b2c028831d2c90be916257d80afa069a89bf6c6c3bdbdd8', '[\"*\"]', NULL, NULL, '2023-10-26 19:34:11', '2023-10-26 19:34:11'),
(17, 'App\\Models\\User', 5, 'myapptoken', 'd2a187197770657bc7c15ac3b38d658772a882083228bafbdf8aaea8d0548ac5', '[\"*\"]', NULL, NULL, '2023-10-26 19:45:34', '2023-10-26 19:45:34'),
(18, 'App\\Models\\User', 5, 'myapptoken', '6ecf56efc6be4895f9037ce145dd20911b15c784ff0e28676b01e5e57ad8139a', '[\"*\"]', NULL, NULL, '2023-10-26 19:46:12', '2023-10-26 19:46:12'),
(19, 'App\\Models\\User', 4, 'myapptoken', '52897ff18741ec69479b08b9fb9fb6e68adf9a31dfaf3d97e7d721ae401cfea0', '[\"*\"]', NULL, NULL, '2023-10-26 19:54:49', '2023-10-26 19:54:49'),
(20, 'App\\Models\\User', 4, 'myapptoken', '30c28912531a61c7b5dadaadacc74f2a1222dafdb303efbee87d3c30e540ce0e', '[\"*\"]', NULL, NULL, '2023-10-26 20:02:35', '2023-10-26 20:02:35'),
(21, 'App\\Models\\User', 4, 'myapptoken', 'a766fcb471cf65e3bbffd2a1ab400cdea63e491339e63704e069ff9697e11d1e', '[\"*\"]', NULL, NULL, '2023-10-26 20:03:01', '2023-10-26 20:03:01'),
(22, 'App\\Models\\User', 4, 'myapptoken', 'bd23459eec7636580a40018790fcb0c7b9f7077a97c9d4e7ba16d8395bb5ccdb', '[\"*\"]', NULL, NULL, '2023-10-26 20:13:51', '2023-10-26 20:13:51'),
(23, 'App\\Models\\User', 4, 'myapptoken', '86e269e8ab17d9ebaae6449d50a54bfdfa06c2c0036a3557d4e7cd4a6074f2e8', '[\"*\"]', NULL, NULL, '2023-10-26 20:25:44', '2023-10-26 20:25:44'),
(24, 'App\\Models\\User', 4, 'myapptoken', '6aa35a3b28fb7e8881acaaa7873458670521349a027b363c91fab82d99d647a4', '[\"*\"]', NULL, NULL, '2023-10-26 20:26:56', '2023-10-26 20:26:56'),
(25, 'App\\Models\\User', 4, 'myapptoken', '0f9b85f34290f5824c0da9167c0d623a3940bfd443fd0fc557a188978bc97efe', '[\"*\"]', NULL, NULL, '2023-10-26 20:42:49', '2023-10-26 20:42:49'),
(26, 'App\\Models\\User', 4, 'myapptoken', '0856de9bc58785ad2331eb13702a69f05b515cba9cfa4abe03ad1552c4c6901b', '[\"*\"]', NULL, NULL, '2023-10-26 20:47:36', '2023-10-26 20:47:36'),
(27, 'App\\Models\\User', 4, 'myapptoken', '48f47385e0572e3838511495514939c65c3a11687e8dbed7a232e3bbcda95375', '[\"*\"]', NULL, NULL, '2023-10-26 21:52:48', '2023-10-26 21:52:48'),
(28, 'App\\Models\\User', 4, 'myapptoken', '9d6ea7cc2918bfb03b95e54da089e49c91b878cf21dd531d51939e53863e2c92', '[\"*\"]', NULL, NULL, '2023-10-26 22:17:10', '2023-10-26 22:17:10'),
(29, 'App\\Models\\User', 4, 'myapptoken', '4e690e5a69648953f16fead6e62a8f6b62ea4c306173b9ee1cacfd1f614f82fb', '[\"*\"]', NULL, NULL, '2023-10-26 22:17:19', '2023-10-26 22:17:19'),
(30, 'App\\Models\\User', 4, 'myapptoken', '3d91f7be480c5748a2deb243fbe183ebfc1ee2de5d94b7a4d25a50bdc914ef91', '[\"*\"]', NULL, NULL, '2023-10-27 10:20:46', '2023-10-27 10:20:46'),
(31, 'App\\Models\\User', 4, 'myapptoken', 'd4a471511ed525d44b3b4cad62ea41226fb95037ae538107c0b1a9cdf94323c1', '[\"*\"]', NULL, NULL, '2023-10-27 10:20:58', '2023-10-27 10:20:58'),
(32, 'App\\Models\\User', 4, 'myapptoken', 'f364e53f6587f18d20af8c3d019f2e7792062de99c643562acb318ffa504b6c1', '[\"*\"]', NULL, NULL, '2023-10-27 10:26:31', '2023-10-27 10:26:31'),
(33, 'App\\Models\\User', 4, 'myapptoken', '282b7bbb753815e24e4eb763b7a7dc88125b31b2bf2e6c90294dc569a50cb97f', '[\"*\"]', NULL, NULL, '2023-10-27 10:52:45', '2023-10-27 10:52:45'),
(34, 'App\\Models\\User', 4, 'myapptoken', '6f4a66b259a3b5fa1f874dd3c2c2a9cec7bf6bdee302ad5ddf4b71a0d0581e35', '[\"*\"]', NULL, NULL, '2023-10-27 11:20:27', '2023-10-27 11:20:27'),
(35, 'App\\Models\\User', 4, 'myapptoken', '840854310073576b21170b7b6e107463975f27704105427b34eae5d8bbaa40c7', '[\"*\"]', NULL, NULL, '2023-10-27 14:48:33', '2023-10-27 14:48:33'),
(36, 'App\\Models\\User', 4, 'myapptoken', '0ebbcc7e3eb303098fb937666a7f224dc2c08814ff4c96635d2d3c1d424c3039', '[\"*\"]', NULL, NULL, '2023-10-27 14:49:48', '2023-10-27 14:49:48'),
(37, 'App\\Models\\User', 4, 'myapptoken', '9de1d239c4a9333d9843aaf30699707915ff8dfa83024de8cb6e922b57d00055', '[\"*\"]', NULL, NULL, '2023-10-27 14:58:01', '2023-10-27 14:58:01'),
(38, 'App\\Models\\User', 4, 'myapptoken', '2eeb76fd7cc7aa3480a5dfcc445f119ba45d8e893f5f99d4973b9f15eb3a8799', '[\"*\"]', NULL, NULL, '2023-10-27 15:46:41', '2023-10-27 15:46:41'),
(39, 'App\\Models\\User', 4, 'myapptoken', '291d22c71c37dda5c9e3d46086df06aa3eaff0ee2f36c75314ff16234d19feeb', '[\"*\"]', NULL, NULL, '2023-10-27 17:20:04', '2023-10-27 17:20:04'),
(40, 'App\\Models\\User', 4, 'myapptoken', 'a38da999d36127101bc1ecd4fc2c68a34cafa04e9b28a82cee254bb1b69e052a', '[\"*\"]', NULL, NULL, '2023-10-27 17:51:14', '2023-10-27 17:51:14'),
(41, 'App\\Models\\User', 4, 'myapptoken', '2f6cb3e1c1aaec52051416bd938f4e7d5582c1e8a4ebbc3d0610572c14f1eed4', '[\"*\"]', NULL, NULL, '2023-10-27 17:51:25', '2023-10-27 17:51:25'),
(42, 'App\\Models\\User', 4, 'myapptoken', 'f76cb874c7c3466928ce55a0b354642cca071378e1b74ea7aaf2bf97fcdadcb3', '[\"*\"]', NULL, NULL, '2023-10-27 18:15:09', '2023-10-27 18:15:09'),
(43, 'App\\Models\\User', 6, 'myapptoken', 'a5e8a7baaf01542c78a1def2e1e5c95fe07037085e041858793263ad60197738', '[\"*\"]', NULL, NULL, '2023-10-27 18:26:44', '2023-10-27 18:26:44'),
(44, 'App\\Models\\User', 4, 'myapptoken', '3f255a7c3077131e351749f29088c2f0826c15c32509d2851bb60274910d65e0', '[\"*\"]', NULL, NULL, '2023-10-27 18:27:09', '2023-10-27 18:27:09'),
(45, 'App\\Models\\User', 7, 'myapptoken', '926fedfcd61ba3e1d1fa81f62ddc59b4e67ed5e58bfa15aa5fd310a61451a263', '[\"*\"]', NULL, NULL, '2023-10-27 18:48:34', '2023-10-27 18:48:34');

-- --------------------------------------------------------

--
-- Structure de la table `pubs`
--

CREATE TABLE `pubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `role_id` varchar(255) NOT NULL DEFAULT '3',
  `country` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `fonction` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `cv_path` text DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `telephone`, `sex`, `role_id`, `country`, `adresse`, `birthday`, `fonction`, `avatar`, `status`, `cv_path`, `skills`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'balloigor65@gmail.com', 'Dogbeh', 'Prisca', '$2y$10$BykjXBnzjicfG97jKcfMSO75mfk98cNqolUG8fvimaDA8rBGX7Z/O', '22870158802', 'Féminin', '3', 'Togo', 'Tokion', '2023-10-05', 'Chef de Projet en Technologie', NULL, 1, NULL, NULL, NULL, '2023-10-26 10:41:15', '2023-10-26 10:41:15'),
(4, 'sodballo@gmail.com', 'Dogbeh', 'Prisca', '$2y$10$NpmFxrH1kRyOmsY8OPevP.mh.dUkSCo/6L9E4cOj.C.24q2M9ty1y', '70158802', 'Féminin', '3', 'Togo', 'Tokion', '2023-10-02', 'Chef de Projet en Technologie', NULL, 1, NULL, NULL, NULL, '2023-10-26 10:53:22', '2023-10-26 10:53:22'),
(5, 'root@gmail.com', 'Igor', 'BALLO', '$2y$10$NpmFxrH1kRyOmsY8OPevP.mh.dUkSCo/6L9E4cOj.C.24q2M9ty1y', '22892578665', 'Masculin', '3', 'Togo', 'Agoè-Logopé', '2023-10-04', 'Analyste en Blockchain', NULL, 1, NULL, NULL, NULL, '2023-10-26 16:53:10', '2023-10-26 16:53:10'),
(6, 'edem46@gmail.com', 'Emiline', 'ADEWOUSSI', '$2y$10$Bbw1w8bjmEvpoemXmMxONOQu4NHbgWTHmMgnolyamsyPM31k3J3Ri', '22892658788', 'Féminin', '3', 'Togo', 'Adidogomé', '2002-02-28', 'Ingénieur en Intelligence Artificielle', NULL, 1, NULL, NULL, NULL, '2023-10-27 18:26:44', '2023-10-27 18:26:44'),
(7, 'wittarochambeau@gmail.com', 'WITTA', 'Rochambeau', '$2y$10$T0G09yerQYozDfmLHFBZkuPXtf4ZMPv89BpqzoLlpcuKxUHuj7As6', '-1', 'Masculin', '3', 'Togo', 'Bar La doz /Sanguera', '2023-10-27', 'Développeur Full-Stack', NULL, 1, NULL, NULL, NULL, '2023-10-27 18:48:34', '2023-10-27 18:48:34');

-- --------------------------------------------------------

--
-- Structure de la table `user_lignes`
--

CREATE TABLE `user_lignes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `ligne_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(255) NOT NULL,
  `heure` varchar(255) NOT NULL,
  `nbre` int(11) DEFAULT NULL,
  `code` text DEFAULT NULL,
  `pin` varchar(255) DEFAULT NULL,
  `ligne_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Structure de la table `voyage_lignes`
--

CREATE TABLE `voyage_lignes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `voyage_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `honoraires`
--
ALTER TABLE `honoraires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignes`
--
ALTER TABLE `lignes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `operations`
--
ALTER TABLE `operations`
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
-- Index pour la table `pubs`
--
ALTER TABLE `pubs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `user_lignes`
--
ALTER TABLE `user_lignes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `voyage_lignes`
--
ALTER TABLE `voyage_lignes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `honoraires`
--
ALTER TABLE `honoraires`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lignes`
--
ALTER TABLE `lignes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `operations`
--
ALTER TABLE `operations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `pubs`
--
ALTER TABLE `pubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user_lignes`
--
ALTER TABLE `user_lignes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `voyage_lignes`
--
ALTER TABLE `voyage_lignes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
