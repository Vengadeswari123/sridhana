-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2022 at 07:55 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sridhana`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `masters`
--

CREATE TABLE `masters` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `type` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `status` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `masters`
--

INSERT INTO `masters` (`id`, `level`, `type`, `name`, `data`, `status`, `created_at`, `updated_at`) VALUES
('004e2bd1-7b98-46bd-bea4-62d12226cb19', 0, 0, 'attribute', '{\"name\":\"Model Wears\"}', 1, '2022-10-07 00:18:03', '2022-10-07 00:18:03'),
('02b8358a-1f2d-4fe3-b70e-f032963be2a4', 1, 0, 'subcategory', '{\"name\":\"Designer Saree\",\"slugurl\":\"Designer-Saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"loc\":\"storage\\/SubCategory\\/Designer Saree\\/50R643hfV2Rqxsdk.webp\"}', 1, '2022-10-04 08:13:57', '2022-10-04 08:13:57'),
('05cd7c46-1e86-4c4f-9135-9a3bfa32113b', 2, 0, 'teritarycategory', '{\"name\":\"Handloom Sarees\",\"slugurl\":\"Handloom-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Handloom Sarees\\/6A7cHnuTyAyTKI3T.webp\"}', 1, '2022-10-04 09:29:20', '2022-10-04 09:29:20'),
('06082a6a-ffa6-4277-85a0-c85d5c7f6297', 2, 0, 'teritarycategory', '{\"name\":\"Banarasi Tusser Weaving\",\"slugurl\":\"Banarasi-Tusser-Weaving\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1a9c2f9c-0589-4e6b-be8c-d6c987df5d66\",\"loc\":\"storage\\/TeritaryCategory\\/Banarasi Tusser Weaving\\/t97XZ1fYszPsANNx.webp\"}', 1, '2022-10-04 09:18:56', '2022-10-04 09:18:56'),
('060d378f-17bb-4a04-aa7c-ad982f3bc846', 2, 0, 'teritarycategory', '{\"name\":\"Ikkat & Patola\",\"slugurl\":\"Ikkat-Patola\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Ikkat & Patola\\/z8iG6hqIsgVDJtdT.webp\"}', 1, '2022-10-04 09:38:32', '2022-10-04 09:38:32'),
('065c279f-26f6-43a5-acec-78b6bca6b2e5', 1, 0, 'subcategory', '{\"name\":\"Festive Salwar Kameez.\",\"slugurl\":\"Festive-Salwar-Kameez-\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Festive Salwar Kameez.\\/Yf6E9ZrmJQLOedE0.webp\"}', 1, '2022-10-04 08:26:53', '2022-10-04 08:26:53'),
('0766817b-13a4-4897-ba8c-4927cdc4aaf6', 0, 0, 'technique', '{\"name\":\"Beading\\/Beadwork\"}', 1, '2022-10-07 00:15:50', '2022-10-07 00:15:50'),
('08e068ae-5c82-4305-b718-51751036a342', 2, 0, 'teritarycategory', '{\"name\":\"Party Wear Sarees\",\"slugurl\":\"Party-Wear-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88\",\"loc\":\"storage\\/TeritaryCategory\\/Party Wear Sarees\\/SHzQNWJfd4mZllTZ.webp\"}', 1, '2022-10-04 09:14:41', '2022-10-04 09:14:41'),
('0ab8560f-cbed-4e16-80af-e07273fcfc02', 2, 0, 'teritarycategory', '{\"name\":\"Chanderi\",\"slugurl\":\"Chanderi\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Chanderi\\/W3IHQHimHlGa9BSP.webp\"}', 1, '2022-10-04 09:35:35', '2022-10-04 09:35:35'),
('0af6c98e-2a2c-4338-9bc7-f54d2c4a311d', 0, 0, 'colour', '{\"name\":\"Grey\"}', 1, '2022-10-06 23:26:38', '2022-10-06 23:26:38'),
('0d7e188f-c938-4d2e-ac47-9a291a7d0cfe', 1, 0, 'subcategory', '{\"name\":\"Indowestern Gown\",\"slugurl\":\"Indowestern-Gown\",\"priority\":\"1\",\"catid\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"loc\":\"storage\\/SubCategory\\/Indowestern Gown\\/s2hfZ5D1WoBaJQN6.webp\"}', 1, '2022-10-04 08:38:59', '2022-10-04 08:38:59'),
('11ef9cff-bd83-41eb-87f7-7931c2563a40', 1, 0, 'subcategory', '{\"name\":\"Engagement Lehenga\",\"slugurl\":\"Engagement-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Engagement Lehenga\\/EMxVMlIXM6x2LnVz.webp\"}', 1, '2022-10-04 08:36:01', '2022-10-04 08:36:01'),
('122f4cf3-67fc-449a-a68b-dbf547b868c8', 2, 0, 'teritarycategory', '{\"name\":\"Pure Designer Embroided Sarees\",\"slugurl\":\"Pure-Designer-Embroided-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Pure Designer Embroided Sarees\\/3mqgaoe4PMbSUAm2.webp\"}', 1, '2022-10-04 09:23:52', '2022-10-04 09:23:52'),
('13cc753e-a111-4af6-b448-efdae6c4f560', 1, 0, 'subcategory', '{\"name\":\"Crop Top Suit\",\"slugurl\":\"Crop-Top-Suit\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Crop Top Suit\\/R2wx72NmeBW1pSti.webp\"}', 1, '2022-10-04 08:25:23', '2022-10-04 08:25:23'),
('16ce365d-faf1-433d-8ced-353193e02843', 2, 0, 'teritarycategory', '{\"name\":\"Kanchipuram Pure Zari\",\"slugurl\":\"Kanchipuram-Pure-Zari\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"4cec22e7-0575-4674-99ca-27b0eaf0a668\",\"loc\":\"storage\\/TeritaryCategory\\/Kanchipuram Pure Zari\\/BZZQ7q5mXR2YPSU9.webp\"}', 1, '2022-10-04 09:15:46', '2022-10-04 09:15:46'),
('17f01ff8-65a2-4aa7-857c-21665dcda31f', 1, 0, 'subcategory', '{\"name\":\"Sherwani\",\"slugurl\":\"Sherwani\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"loc\":\"storage\\/SubCategory\\/Sherwani\\/R5WWFbYvj53Rpx3x.webp\"}', 1, '2022-10-04 08:47:19', '2022-10-04 08:47:19'),
('1945c042-def8-4d32-a65f-9e0bc672a4c7', 1, 0, 'subcategory', '{\"name\":\"Reception Gown\",\"slugurl\":\"Reception-Gown\",\"priority\":\"1\",\"catid\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"loc\":\"storage\\/SubCategory\\/Reception Gown\\/skN3cnhWc18BxXTQ.webp\"}', 1, '2022-10-04 08:42:25', '2022-10-04 08:42:25'),
('1970772f-3d0c-43bf-9e4e-50c2a4bdcdb0', 1, 0, 'subcategory', '{\"name\":\"Bespoke Men\'s Collection\",\"slugurl\":\"Bespoke-Men-s-Collection\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Bespoke Men\'s Collection\\/GittAgXMx9hEUYff.webp\"}', 1, '2022-10-04 08:51:12', '2022-10-04 08:51:12'),
('1a9c2f9c-0589-4e6b-be8c-d6c987df5d66', 1, 0, 'subcategory', '{\"name\":\"Banarasi saree\",\"slugurl\":\"Banarasi-saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"loc\":\"storage\\/SubCategory\\/Banarasi saree\\/Nq7TRL6qKnImRnhd.webp\"}', 1, '2022-10-04 08:13:08', '2022-10-04 08:13:08'),
('1aeddf2c-cd8e-4f5d-b24a-352b958c6f60', 0, 0, 'occasion', '{\"name\":\"Festive Wear Saree\",\"slugurl\":\"Festive-Wear-Saree\",\"priority\":\"1\",\"loc\":\"storage\\/Occasion\\/Festive Wear Saree\\/VIbWBV4QMxh97XRU.jpg\"}', 1, '2022-10-07 00:04:27', '2022-10-07 00:42:06'),
('1ba97501-5086-429a-ad93-a29f954c34b4', 1, 0, 'subcategory', '{\"name\":\"Anarkali salwar\",\"slugurl\":\"Anarkali-salwar\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Anarkali salwar\\/RN4MDJK9P6fUgFpP.webp\"}', 1, '2022-10-04 08:20:39', '2022-10-04 08:20:39'),
('1c43b3bb-8d3e-423f-9f13-22e3aa7d0614', 2, 0, 'teritarycategory', '{\"name\":\"Handloom Tussar Sarees\",\"slugurl\":\"Handloom-Tussar-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Handloom Tussar Sarees\\/dosiUWMl4Kh0k8tA.webp\"}', 1, '2022-10-04 09:31:39', '2022-10-04 09:31:39'),
('1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88', 1, 0, 'subcategory', '{\"name\":\"Occasion Sarees\",\"slugurl\":\"Occasion-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"loc\":\"storage\\/SubCategory\\/Occasion Sarees\\/DRR8OatwBoCjMPv1.webp\"}', 1, '2022-10-04 08:16:29', '2022-10-04 08:16:29'),
('1ed6a001-a648-4928-859f-f8ccd52ab82f', 1, 0, 'subcategory', '{\"name\":\"Pure Printed Saree\",\"slugurl\":\"Pure-Printed-Saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"loc\":\"storage\\/SubCategory\\/Pure Printed Saree\\/E5Nba8ZDnRaFNirc.webp\"}', 1, '2022-10-04 08:15:04', '2022-10-04 08:15:04'),
('1f1c83ac-b63c-4bcf-988a-b198c970121b', 0, 0, 'fabric', '{\"name\":\"Cotton\"}', 1, '2022-10-07 00:01:59', '2022-10-07 00:01:59'),
('1f212c2e-bba5-42ad-8a71-adae879c8d8b', 0, 0, 'pincode', '[]', 1, '2022-10-10 04:40:16', '2022-10-10 04:40:16'),
('20342aff-49cc-45cb-9bef-0bac86837596', 0, 0, 'pincode', '{\"state\":\"d\",\"country\":\"d\",\"pincode\":\"d\",\"cost\":\"d\",\"slugurl\":\"\"}', 1, '2022-10-10 06:04:48', '2022-10-10 06:04:48'),
('21926be9-a929-4c68-9a01-cdef163cb8a7', 2, 0, 'teritarycategory', '{\"name\":\"Bandhini Sarees\",\"slugurl\":\"Bandhini-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Bandhini Sarees\\/XPqqTOEBd4sfZqDg.webp\"}', 1, '2022-10-04 09:26:28', '2022-10-04 09:26:28'),
('220d25e9-22e2-4f6c-8154-30c2db0fc368', 1, 0, 'subcategory', '{\"name\":\"Safa\",\"slugurl\":\"Safa\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"loc\":\"storage\\/SubCategory\\/Safa\\/WqqlRTOG1XXejJP2.webp\"}', 1, '2022-10-04 08:49:09', '2022-10-04 08:49:09'),
('229528ba-1a26-49c2-b56a-3122243d3ae2', 0, 0, 'CMS', '{\"name\":\"d\"}', 1, '2022-10-07 05:09:28', '2022-10-07 05:09:28'),
('27f9782e-d6a1-4c1d-b73a-fe0948eeb194', 2, 0, 'teritarycategory', '{\"name\":\"Party Wear Suits\",\"slugurl\":\"Party-Wear-Suits\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"34861079-525b-4091-86d0-d437053bd5a8\",\"loc\":\"storage\\/TeritaryCategory\\/Party Wear Suits\\/Sg7BRekZTB7uj5y3.webp\"}', 1, '2022-10-04 09:10:02', '2022-10-04 09:10:02'),
('28435e2a-bfc7-4573-a8a6-d823840026d4', 1, 0, 'subcategory', '{\"name\":\"Party Wear Lehenga\",\"slugurl\":\"Party-Wear-Lehenga\",\"priority\":\"1\",\"catid\":\"\",\"loc\":\"storage\\/SubCategory\\/Party Wear Lehenga\\/jDh3jpFX5rPrvHIh.webp\"}', 1, '2022-10-04 08:32:44', '2022-10-04 08:32:44'),
('298bdbed-2a50-4c7d-992d-85a8191b7bba', 0, 0, 'technique', '{\"name\":\"Macrame\"}', 1, '2022-10-07 00:15:04', '2022-10-07 00:15:04'),
('2c14e070-aa22-4f08-b7ab-842039b7a023', 1, 0, 'subcategory', '{\"name\":\"Houte Handloom\",\"slugurl\":\"Houte-Handloom\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Houte Handloom\\/KDYVnwQ32Nd6fqC1.webp\"}', 1, '2022-10-04 08:57:10', '2022-10-04 08:57:10'),
('2c217fcb-234b-4ef3-a06c-b36a6da22895', 0, 0, 'CMS', '{\"name\":\"shipping_policy\",\"content\":\"shipping product\",\"description\":\"\",\"slugurl\":\"shipping-policy\",\"title\":\"Shipping_Policy\"}', 0, '2022-10-10 06:27:04', '2022-10-10 07:03:51'),
('2d4cd378-0527-4ce1-a2fb-e310a5257867', 0, 0, 'pattern', '{\"name\":\"Plaind\"}', 1, '2022-10-07 00:13:14', '2022-10-07 00:13:14'),
('2e4771db-1910-4d42-acc2-8180ab2b4c6a', 0, 0, 'colour', '{\"name\":\"Cyon\"}', 1, '2022-10-06 23:25:11', '2022-10-06 23:25:11'),
('2ed30378-82c2-4063-a902-d5f391d01afa', 0, 0, 'occasion', '{\"name\":\"Party Wear Saree\",\"slugurl\":\"Party-Wear-Saree\",\"priority\":\"1\",\"loc\":\"storage\\/Occasion\\/Party Wear Saree\\/17TtKSRr6CggmHgZ.jpg\"}', 1, '2022-10-07 00:43:13', '2022-10-07 00:43:13'),
('30451d6a-b11a-41c3-9215-c2a6b1548428', 1, 0, 'subcategory', '{\"name\":\"Tunic & Kurtis\",\"slugurl\":\"Tunic-Kurtis\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Tunic & Kurtis\\/QP1xGjbXicNRKntG.webp\"}', 1, '2022-10-04 08:26:14', '2022-10-04 08:26:14'),
('33370d85-2e1e-404d-9e72-178e370aa6a7', 2, 0, 'teritarycategory', '{\"name\":\"Party Wear Sherwani\",\"slugurl\":\"Party-Wear-Sherwani\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"34861079-525b-4091-86d0-d437053bd5a8\",\"loc\":\"storage\\/TeritaryCategory\\/Party Wear Sherwani\\/tG30tmFa87MX4fPG.webp\"}', 1, '2022-10-04 09:11:42', '2022-10-04 09:11:42'),
('34861079-525b-4091-86d0-d437053bd5a8', 1, 0, 'subcategory', '{\"name\":\"Occasion\",\"slugurl\":\"Occasion\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"loc\":\"storage\\/SubCategory\\/Occasion\\/yAGPCtYLXRxjASmm.webp\"}', 1, '2022-10-04 08:50:03', '2022-10-04 08:50:03'),
('358af35d-9a20-4b28-b765-947d51f2b7f5', 0, 0, 'pincode', '[]', 1, '2022-10-10 04:27:52', '2022-10-10 04:27:52'),
('3724244f-8a58-4f4a-a515-6eccf11d65a4', 2, 0, 'teritarycategory', '{\"name\":\"Wedding Sherwani\",\"slugurl\":\"Wedding-Sherwani\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"34861079-525b-4091-86d0-d437053bd5a8\",\"loc\":\"storage\\/TeritaryCategory\\/Wedding Sherwani\\/8dlMdkIzMjdAl4ZA.webp\"}', 1, '2022-10-04 09:08:41', '2022-10-04 09:08:41'),
('375d0d4c-a77d-4139-bd47-649131d88b8e', 0, 0, 'emblishment', '{\"name\":\"Zari woven\"}', 1, '2022-10-06 23:33:41', '2022-10-06 23:33:41'),
('3bc3959d-7b65-4a88-8735-6d44da7cac16', 0, 0, 'fabric', '{\"name\":\"Tissue\"}', 1, '2022-10-07 00:02:30', '2022-10-07 00:02:30'),
('3bce65e0-90ff-4ed5-8b08-575b4b23e964', 1, 0, 'subcategory', '{\"name\":\"Glitters & Glamours\",\"slugurl\":\"Glitters-Glamours\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Glitters & Glamours\\/vAnZwde8l0yQpVEF.webp\"}', 1, '2022-10-04 08:58:33', '2022-10-04 08:58:33'),
('3c922ba8-7164-4ed9-8693-2c9aa0c2ef22', 0, 0, 'colour', '{\"name\":\"Blue\"}', 1, '2022-10-06 23:24:28', '2022-10-06 23:24:28'),
('40f16e49-36d8-4768-a897-f4cb82c7f8e1', 0, 0, 'pincode', '{\"state\":\"a\",\"country\":\"a\",\"pincode\":\"a\",\"cost\":\"a\",\"slugurl\":\"\"}', 1, '2022-10-10 06:05:12', '2022-10-10 06:05:12'),
('41342e96-7f4d-4337-a84f-709adc51e412', 0, 0, 'fabric', '{\"name\":\"Raw silk\"}', 1, '2022-10-07 00:03:32', '2022-10-07 00:03:32'),
('41b329c1-9c76-4f9d-861f-fe7173ad9f34', 0, 0, 'SEO', '{\"name\":\"d\",\"title\":\"d\",\"description\":\"d\",\"slugurl\":\"d\"}', 0, '2022-10-10 04:39:26', '2022-10-10 04:39:26'),
('41d3a14e-3378-40dd-a040-cd0acf32c80d', 0, 0, 'CMS', '{\"name\":\"return_policy\",\"content\":\"product return\",\"description\":\"\",\"slugurl\":\"return-policy\",\"title\":\"Return_Policy\"}', 0, '2022-10-10 06:27:25', '2022-10-10 07:41:39'),
('42a41a4f-8eb5-4e9d-88e1-a9b60b61c11e', 0, 0, 'attribute', '{\"name\":\"Return Policy\"}', 1, '2022-10-07 00:18:31', '2022-10-07 00:18:31'),
('42a4b2d7-2965-4740-9dea-02450bdb9bc4', 0, 0, 'fabric', '{\"name\":\"Silk\"}', 1, '2022-10-07 00:02:16', '2022-10-07 00:02:16'),
('43e24fb6-da6d-4442-95ee-8149d49298f2', 0, 0, 'pattern', '{\"name\":\"Checks\"}', 1, '2022-10-07 00:13:03', '2022-10-07 00:13:03'),
('448076c9-e3ca-49f7-94f0-f9c5d0c4d7ee', 0, 0, 'fabric', '{\"name\":\"Tissue\"}', 1, '2022-10-07 00:03:06', '2022-10-07 00:03:06'),
('4501c0a6-cf6f-4509-addf-70fae6bb7503', 2, 0, 'teritarycategory', '{\"name\":\"Gadwal\",\"slugurl\":\"Gadwal\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Gadwal\\/liEDVSOmaRvBDifG.webp\"}', 1, '2022-10-04 09:30:48', '2022-10-04 09:30:48'),
('457bbc31-5ebd-45ea-8bfe-2179d6a8b9bc', 1, 0, 'subcategory', '{\"name\":\"Ready to ship Lehenga\",\"slugurl\":\"Ready-to-ship-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Ready to ship Lehenga\\/XN0u3cjUV0mbwLRC.webp\"}', 1, '2022-10-04 08:38:11', '2022-10-04 08:38:11'),
('4ab22d7e-01bb-4284-9ffd-8c0b5fcb6f4a', 1, 0, 'subcategory', '{\"name\":\"Bridal Gowns\",\"slugurl\":\"Bridal-Gowns\",\"priority\":\"1\",\"catid\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"loc\":\"storage\\/SubCategory\\/Bridal Gowns\\/sNmFPkX1jUm1XL7Z.webp\"}', 1, '2022-10-04 08:41:46', '2022-10-04 08:41:46'),
('4b140797-783b-411e-9cd9-91e22aa2c3ad', 2, 0, 'teritarycategory', '{\"name\":\"Organza Designer Sarees\",\"slugurl\":\"Organza-Designer-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Organza Designer Sarees\\/SsL2aEO2eLImIWlg.webp\"}', 1, '2022-10-04 09:25:27', '2022-10-04 09:25:27'),
('4cec22e7-0575-4674-99ca-27b0eaf0a668', 1, 0, 'subcategory', '{\"name\":\"Kanchipuram Silk Saree\",\"slugurl\":\"Kanchipuram-Silk-Saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"loc\":\"storage\\/SubCategory\\/Kanchipuram Silk Saree\\/fBVjCHfUZKYT6R2Q.webp\"}', 1, '2022-10-04 08:12:47', '2022-10-04 08:12:47'),
('4ed93137-dbbb-4d79-b508-42a78c484fed', 0, 0, 'category', '{\"name\":\"Gowns\",\"slugurl\":\"Gowns\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Gowns\\/wCqGuctk9ihUiffc.webp\"}', 1, '2022-10-04 08:05:10', '2022-10-04 08:05:10'),
('51b9b0c3-5900-4353-85f4-a76022deb50c', 2, 0, 'teritarycategory', '{\"name\":\"Venkatagiri Sarees\",\"slugurl\":\"Venkatagiri-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Venkatagiri Sarees\\/4efkB0BZ0E9jLLa9.webp\"}', 1, '2022-10-04 09:32:55', '2022-10-04 09:32:55'),
('549fc477-ae70-40dc-8f8b-58b8e4550201', 0, 0, 'emblishment', '{\"name\":\"Printed\"}', 1, '2022-10-06 23:34:19', '2022-10-06 23:34:19'),
('558734c5-5850-4843-b5e7-9863cfba3a50', 0, 0, 'technique', '{\"name\":\"Hand Embroidery\"}', 1, '2022-10-07 00:14:09', '2022-10-07 00:14:09'),
('55efdba8-c22d-429a-953f-c01addeebc9f', 1, 0, 'subcategory', '{\"name\":\"Men\'s Suit\",\"slugurl\":\"Men-s-Suit\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Men\'s Suit\\/kmPo5nnrbXf9dTyR.webp\"}', 1, '2022-10-04 08:45:11', '2022-10-04 08:45:11'),
('571d404f-1033-4f04-bde1-5b698a6d309f', 1, 0, 'subcategory', '{\"name\":\"Bride\'s maid lehenga\",\"slugurl\":\"Bride-s-maid-lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Bride\'s maid lehenga\\/RsX374DvXZTISfOY.webp\"}', 1, '2022-10-04 08:32:06', '2022-10-04 08:32:06'),
('579ef8f7-1f07-4b30-b7c6-13c0349e9532', 2, 0, 'teritarycategory', '{\"name\":\"Fancy Sarees\",\"slugurl\":\"Fancy-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Fancy Sarees\\/6xGgSiPW0EfJDwP2.webp\"}', 1, '2022-10-04 09:24:44', '2022-10-04 09:24:44'),
('5868262b-324e-4971-8ec3-1c09d4e4b337', 1, 0, 'subcategory', '{\"name\":\"Unstitched Salwar Kameez\",\"slugurl\":\"Unstitched-Salwar-Kameez\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Unstitched Salwar Kameez\\/xUzX45K5rtH2dagb.webp\"}', 1, '2022-10-04 08:17:19', '2022-10-04 08:17:19'),
('5c055baa-45a6-407b-a0aa-b8f1ddceabf4', 0, 0, 'pattern', '{\"name\":\"All over\"}', 1, '2022-10-06 23:44:57', '2022-10-06 23:44:57'),
('5c2cba21-575c-4b55-b187-f6b7ec91ead1', 1, 0, 'subcategory', '{\"name\":\"Jacket Lehenga\",\"slugurl\":\"Jacket-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Jacket Lehenga\\/sTDYVSjInm3dfrZA.webp\"}', 1, '2022-10-04 08:34:46', '2022-10-04 08:34:46'),
('5eeb3ef0-5c7a-4ab1-8da6-fea7aa61c0a9', 1, 0, 'subcategory', '{\"name\":\"Jumpsuits\",\"slugurl\":\"Jumpsuits\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Jumpsuits\\/mBeMcpyNHUNNc5iM.webp\"}', 1, '2022-10-04 08:21:20', '2022-10-04 08:21:20'),
('62f1d90c-381b-4642-9a56-106446fc4f68', 0, 0, 'attribute', '{\"name\":\"Design\"}', 1, '2022-10-07 00:17:11', '2022-10-07 00:17:11'),
('6461eaed-5357-415f-89bf-207e443e55f9', 0, 0, 'collection', '{\"name\":\"Kota Silk Saree\",\"slugurl\":\"Kota-Silk-Saree\",\"priority\":\"1\",\"loc\":\"storage\\/Collection\\/Kota Silk Saree\\/4WqJqlETqomKemCg.jpg\"}', 1, '2022-10-07 00:28:45', '2022-10-07 00:28:45'),
('67d0eae8-be7f-483e-a875-a1f8753c58f1', 2, 0, 'teritarycategory', '{\"name\":\"Festive Kurtas\",\"slugurl\":\"Festive-Kurtas\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"34861079-525b-4091-86d0-d437053bd5a8\",\"loc\":\"storage\\/TeritaryCategory\\/Festive Kurtas\\/0WeeedXpwSglXEGm.webp\"}', 1, '2022-10-04 09:10:51', '2022-10-04 09:10:51'),
('684a211e-0eb7-4c33-99d6-5b8fd3f77af8', 0, 0, 'colour', '{\"name\":\"Black\"}', 1, '2022-10-06 23:26:19', '2022-10-06 23:26:19'),
('6a7fe04c-3f36-4956-8df4-8280e6215380', 0, 0, 'category', '{\"name\":\"Salwar Kameez\",\"slugurl\":\"Salwar-Kameez\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Salwar Kameez\\/P6HvQ7UjUOWgK6Ah.webp\"}', 1, '2022-10-04 08:03:25', '2022-10-04 08:03:25'),
('6b917693-98a9-4585-9d12-6a233a2199ca', 1, 0, 'subcategory', '{\"name\":\"Designer Salwar\",\"slugurl\":\"Designer-Salwar\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Designer Salwar\\/o2JoIDWj0g53cBBN.webp\"}', 1, '2022-10-04 08:18:16', '2022-10-04 08:18:16'),
('6c1c9f11-8bfc-4213-9076-3bde6d22f0fe', 0, 0, 'collection', '{\"name\":\"Banarasi Silk\",\"slugurl\":\"Banarasi-Silk\",\"priority\":\"1\",\"loc\":\"storage\\/Collection\\/Banarasi Silk\\/swi3hUnAJcL6IjOi.jpg\"}', 1, '2022-10-07 00:29:41', '2022-10-07 00:29:41'),
('6d2673e0-728b-40c0-ab13-2596a494a9e9', 2, 0, 'teritarycategory', '{\"name\":\"IndoWestern Sherwani\",\"slugurl\":\"IndoWestern-Sherwani\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"17f01ff8-65a2-4aa7-857c-21665dcda31f\",\"loc\":\"storage\\/TeritaryCategory\\/IndoWestern Sherwani\\/Iw5Xzi5VoVyZC3AA.webp\"}', 1, '2022-10-04 09:05:43', '2022-10-04 09:05:43'),
('6ea80f73-5994-40b7-9aeb-94e6b121eec1', 1, 0, 'subcategory', '{\"name\":\"Silk Lehenga\",\"slugurl\":\"Silk-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Silk Lehenga\\/IxNc0eIk0tCfnJmC.webp\"}', 1, '2022-10-04 08:35:21', '2022-10-04 08:35:21'),
('72a9a91f-17a0-4b0e-9ad6-3835efc9476d', 0, 0, 'pincode', '{\"state\":\"d\",\"country\":\"x\",\"pincode\":\"s\",\"cost\":\"x\",\"slugurl\":\"\"}', 1, '2022-10-10 04:42:58', '2022-10-10 04:42:58'),
('7341110f-2576-411d-987d-530c6c28a8d3', 0, 0, 'SEO', '{\"name\":\"f\",\"title\":\"f\",\"terms_condition\":\"\",\"slugurl\":\"f\"}', 0, '2022-10-10 04:36:18', '2022-10-10 04:36:18'),
('790ea2f3-61c9-4f63-8eed-83c1f1280fd2', 0, 0, 'collection', '{\"name\":\"Patola\",\"slugurl\":\"Patola\",\"priority\":\"1\",\"loc\":\"storage\\/Collection\\/Patola\\/wgnmPkWK0HjjSijf.jpg\"}', 1, '2022-10-07 00:27:29', '2022-10-07 00:27:29'),
('79f6eedc-54e5-429e-a1d9-abbf4dada0a0', 1, 0, 'subcategory', '{\"name\":\"Contemprary  Silhouettes\",\"slugurl\":\"Contemprary-Silhouettes\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Contemprary  Silhouettes\\/FPeEHr9kbHUNj5y4.webp\"}', 1, '2022-10-04 08:54:52', '2022-10-04 08:54:52'),
('7fd32292-cf6b-4732-8bb8-a7515eaa080e', 0, 0, 'SEO', '{\"name\":\"d\",\"title\":\"d\",\"terms_condition\":\"\",\"slugurl\":\"d\"}', 0, '2022-10-10 04:30:31', '2022-10-10 04:30:31'),
('80df7a61-3278-49a8-ab0c-0122d62f5b3f', 0, 0, 'colour', '{\"name\":\"Purple\"}', 1, '2022-10-06 23:28:14', '2022-10-06 23:28:14'),
('81405080-0556-4f63-9b83-3e60e8e0aade', 2, 0, 'teritarycategory', '{\"name\":\"Pure Tussar Embroidery Sarees\",\"slugurl\":\"Pure-Tussar-Embroidery-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Pure Tussar Embroidery Sarees\\/aFb8jqBwJFGqj1EP.webp\"}', 1, '2022-10-04 09:28:37', '2022-10-04 09:28:37'),
('8260eb66-1dba-4c6b-9df5-c3af78a08875', 2, 0, 'teritarycategory', '{\"name\":\"Wedding Sarees\",\"slugurl\":\"Wedding-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88\",\"loc\":\"storage\\/TeritaryCategory\\/Wedding Sarees\\/8UCbVNgag8HJy0Xn.webp\"}', 1, '2022-10-04 09:12:56', '2022-10-04 09:12:56'),
('82863f8b-80f0-46d2-bded-23dc368bd7af', 1, 0, 'subcategory', '{\"name\":\"Party Wear Salwar Kameez\",\"slugurl\":\"Party-Wear-Salwar-Kameez\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Party Wear Salwar Kameez\\/RMTbv3hADKXWau4T.webp\"}', 1, '2022-10-04 08:19:54', '2022-10-04 08:19:54'),
('83427b72-3cc6-40e8-9bb4-a54c16e2f0be', 0, 0, 'fabric', '{\"name\":\"Tissue\"}', 1, '2022-10-07 00:02:46', '2022-10-07 00:02:46'),
('83e7b3a6-9d8c-4f53-b359-7815198771e2', 0, 0, 'pattern', '{\"name\":\"Half and half\"}', 1, '2022-10-06 23:45:12', '2022-10-06 23:45:12'),
('83ee46ec-1bca-44c0-bb22-01563b6d4832', 2, 0, 'teritarycategory', '{\"name\":\"Ready Blouse Sarees\",\"slugurl\":\"Ready-Blouse-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Ready Blouse Sarees\\/0KqsfoKn0WgKQfAE.webp\"}', 1, '2022-10-04 09:27:46', '2022-10-04 09:27:46'),
('937d778e-4d9f-4a5e-86a2-38c8492cfc2e', 2, 0, 'teritarycategory', '{\"name\":\"Reception Lehenga\",\"slugurl\":\"Reception-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcatid\":\"ada45188-35fc-4d7e-a1b0-e0f52e38332f\",\"loc\":\"storage\\/TeritaryCategory\\/Reception Lehenga\\/ZhQhc6mP7JdcHpCR.webp\"}', 1, '2022-10-04 09:02:21', '2022-10-04 09:02:21'),
('93de2692-3b74-4f0b-bd50-1098e4b67afe', 0, 0, 'fabric', '{\"name\":\"Georgette\"}', 1, '2022-10-07 00:03:19', '2022-10-07 00:03:19'),
('940e8607-3207-418a-b221-b644bd84ce92', 0, 0, 'colour', '{\"name\":\"Orange\"}', 1, '2022-10-06 23:27:58', '2022-10-06 23:27:58'),
('95fd16e8-b42c-48e1-8d91-aa88a74c32f0', 2, 0, 'teritarycategory', '{\"name\":\"Modi Kurta\",\"slugurl\":\"Modi-Kurta\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"d32c94ab-dd40-4aaf-8f0c-2f78264f3bd8\",\"loc\":\"storage\\/TeritaryCategory\\/Modi Kurta\\/24JKSh8hajTXzByG.webp\"}', 1, '2022-10-04 09:07:29', '2022-10-04 09:07:29'),
('986f00ec-3f60-48e2-8f04-fce5ab24a5b4', 0, 0, 'CMS', '{\"name\":\"terms&condition\",\"content\":\"rules\",\"description\":\"\",\"slugurl\":\"terms-condition\",\"title\":\"Terms&Condition\"}', 0, '2022-10-10 06:26:17', '2022-10-10 07:05:42'),
('98791bc6-6007-49e6-b34a-1bfe4af087e7', 0, 0, 'pincode', '{\"state\":\"d\",\"country\":\"d\",\"pincode\":\"s\",\"cost\":\"s\",\"slugurl\":\"\"}', 1, '2022-10-10 04:43:58', '2022-10-10 04:43:58'),
('98d90853-d24e-4226-86dc-b2125cc59f80', 1, 0, 'subcategory', '{\"name\":\"Festive Edits\",\"slugurl\":\"Festive-Edits\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Festive Edits\\/cgfQP3FzqVnGM0wy.webp\"}', 1, '2022-10-04 08:56:26', '2022-10-04 08:56:26'),
('99bc798b-0891-4db6-b6af-bb679d4b689d', 0, 0, 'emblishment', '{\"name\":\"Zari work\"}', 1, '2022-10-06 23:37:32', '2022-10-06 23:37:32'),
('9a229eb5-4ac4-4bc2-8f94-f7720558bfda', 1, 0, 'subcategory', '{\"name\":\"Straight Cut Salwars\",\"slugurl\":\"Straight-Cut-Salwars\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Straight Cut Salwars\\/eXrKW3V6Pms857ol.webp\"}', 1, '2022-10-04 08:22:05', '2022-10-04 08:22:05'),
('9e06c672-4ccf-4432-93fb-95664e99dff4', 1, 0, 'subcategory', '{\"name\":\"Cocktail Gown\",\"slugurl\":\"Cocktail-Gown\",\"priority\":\"1\",\"catid\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"loc\":\"storage\\/SubCategory\\/Cocktail Gown\\/rccxhTWyNYmqp9O5.webp\"}', 1, '2022-10-04 08:43:47', '2022-10-04 08:43:47'),
('9e2cee13-20ca-44db-a61e-e4229f09e720', 0, 0, 'colour', '{\"name\":\"Green\"}', 1, '2022-10-06 23:24:53', '2022-10-06 23:24:53'),
('9ebfdc5f-b4a8-4668-a1f1-3ca73cd0f3fc', 1, 0, 'subcategory', '{\"name\":\"Engagement Salwar Kameez\",\"slugurl\":\"Engagement-Salwar-Kameez\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Engagement Salwar Kameez\\/JSlUYbZezlLvHowD.webp\"}', 1, '2022-10-04 08:27:42', '2022-10-04 08:27:42'),
('9fa3de0e-3460-46a1-8f8b-ca6aa101138b', 1, 0, 'subcategory', '{\"name\":\"Banarasi Lehenga\",\"slugurl\":\"Banarasi-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Banarasi Lehenga\\/hySvscEvnuG0yb1Q.webp\"}', 1, '2022-10-04 08:34:08', '2022-10-04 08:34:08'),
('a02aec54-fdfc-40ee-94be-5a66a7240dd5', 1, 0, 'subcategory', '{\"name\":\"Crop Top Lehenga\",\"slugurl\":\"Crop-Top-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Crop Top Lehenga\\/BRfuTucv4Ctax0ez.webp\"}', 1, '2022-10-04 08:33:23', '2022-10-04 08:33:23'),
('a0765c98-78d1-44c6-94c7-bcf0e42238f4', 2, 0, 'teritarycategory', '{\"name\":\"Banarasi silk\",\"slugurl\":\"Banarasi-silk\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1a9c2f9c-0589-4e6b-be8c-d6c987df5d66\",\"loc\":\"storage\\/TeritaryCategory\\/Banarasi silk\\/N4tbLjkHfR8xHRgn.webp\"}', 1, '2022-10-04 09:18:06', '2022-10-04 09:18:06'),
('a5ef69b2-515d-4ee7-85a1-2182e78a29d5', 1, 0, 'subcategory', '{\"name\":\"Pure Handloom silk saree\",\"slugurl\":\"Pure-Handloom-silk-saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"loc\":\"storage\\/SubCategory\\/Pure Handloom silk saree\\/e6Dgq5vK3Sxb6LMc.webp\"}', 1, '2022-10-04 08:09:07', '2022-10-04 08:09:07'),
('a63738dd-d053-4d82-9019-0a1c58c5a48f', 0, 0, 'emblishment', '{\"name\":\"Woven\"}', 1, '2022-10-06 23:34:01', '2022-10-06 23:34:01'),
('a6953dc0-a238-4222-810a-fc7ee2ef944a', 2, 0, 'teritarycategory', '{\"name\":\"Chiniya silk Sarees\",\"slugurl\":\"Chiniya-silk-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Chiniya silk Sarees\\/1ZCDmosdj3Y9CebU.webp\"}', 1, '2022-10-04 09:34:13', '2022-10-04 09:34:13'),
('a6b2a443-df82-49c9-8598-cd85fb56ac4c', 1, 0, 'subcategory', '{\"name\":\"Sangeeth Salwar Kameez\",\"slugurl\":\"Sangeeth-Salwar-Kameez\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Sangeeth Salwar Kameez\\/wXNXfIywmy26r5TY.webp\"}', 1, '2022-10-04 08:28:35', '2022-10-04 08:28:35'),
('a7b40726-1e02-4e88-afbd-442bfbcc6657', 0, 0, 'fabric', '{\"name\":\"Tussar silk\"}', 1, '2022-10-07 00:03:46', '2022-10-07 00:03:46'),
('a9289a75-ed90-4423-bcec-97d265435410', 0, 0, 'collection', '{\"name\":\"Ready Blouse Sarees\",\"slugurl\":\"Ready-Blouse-Sarees\",\"priority\":\"1\",\"loc\":\"storage\\/Collection\\/Ready Blouse Sarees\\/UBmRONTtpZyBTUVk.jpg\"}', 1, '2022-10-07 00:37:03', '2022-10-07 00:37:03'),
('a99f901f-2717-42f3-b72b-a077a46dcf4b', 0, 0, 'attribute', '{\"name\":\"Net Quantity\"}', 1, '2022-10-07 00:18:42', '2022-10-07 00:18:42'),
('ab046c9a-10f4-4813-bd40-42592e060187', 0, 0, 'category', '{\"name\":\"Sarees\",\"slugurl\":\"Sarees\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Sarees\\/DPblu99v1KhEb7rx.webp\"}', 1, '2022-10-04 08:02:01', '2022-10-04 08:02:01'),
('ac5d8690-b9ae-4276-b697-70eb35a06251', 0, 0, 'colour', '{\"name\":\"Brown\"}', 1, '2022-10-06 23:25:58', '2022-10-06 23:25:58'),
('ad603290-ae96-4d47-8598-0bb4a62ba9f9', 2, 0, 'teritarycategory', '{\"name\":\"Patola\",\"slugurl\":\"Patola\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Patola\\/VGhqHW0INxvuultF.webp\"}', 1, '2022-10-04 09:29:53', '2022-10-04 09:29:53'),
('ad6f8c1b-b234-454d-bd47-a548c23a8a83', 2, 0, 'teritarycategory', '{\"name\":\"Festive Wear Sarees\",\"slugurl\":\"Festive-Wear-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88\",\"loc\":\"storage\\/TeritaryCategory\\/Festive Wear Sarees\\/v5YFc4wLYTtkaLFy.webp\"}', 1, '2022-10-04 09:13:50', '2022-10-04 09:13:50'),
('ada45188-35fc-4d7e-a1b0-e0f52e38332f', 1, 0, 'subcategory', '{\"name\":\"Bridal Lehenga\",\"slugurl\":\"Bridal-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Bridal Lehenga\\/JOljpaF9vRs66VRE.webp\"}', 1, '2022-10-04 08:30:09', '2022-10-04 08:30:09'),
('adf8610e-7806-4662-8736-0c5fe0026126', 2, 0, 'teritarycategory', '{\"name\":\"Kanchipuram silk Half Zari\",\"slugurl\":\"Kanchipuram-silk-Half-Zari\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"4cec22e7-0575-4674-99ca-27b0eaf0a668\",\"loc\":\"storage\\/TeritaryCategory\\/Kanchipuram silk Half Zari\\/BiNGMbqE91DAccz3.webp\"}', 1, '2022-10-04 09:16:56', '2022-10-04 09:16:56'),
('af58ed8d-79c6-4f31-b220-6d79abc30238', 1, 0, 'subcategory', '{\"name\":\"Pastels & Florals\",\"slugurl\":\"Pastels-Florals\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Pastels & Florals\\/JkdDkTf7sjWS9dzu.webp\"}', 1, '2022-10-04 08:57:54', '2022-10-04 08:57:54'),
('b4082f3d-69e1-487d-894e-0f7e263c49fe', 1, 0, 'subcategory', '{\"name\":\"Sangeeth Lehenga\",\"slugurl\":\"Sangeeth-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Sangeeth Lehenga\\/SkyQBEVDxZxXk4HQ.webp\"}', 1, '2022-10-04 08:36:48', '2022-10-04 08:36:48'),
('b46512b0-8a98-4b85-babd-de98f1b2b571', 0, 0, 'pattern', '{\"name\":\"Paisely\"}', 1, '2022-10-07 00:12:35', '2022-10-07 00:12:35'),
('b466decf-3013-40ca-bbfb-91a2b2cff914', 1, 0, 'subcategory', '{\"name\":\"Designer Lehenga\",\"slugurl\":\"Designer-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Designer Lehenga\\/3gIZQ0LzylCLSOSx.webp\"}', 1, '2022-10-04 08:30:56', '2022-10-04 08:30:56'),
('b53af2ff-8a7c-46da-a961-721e1b4b48e7', 2, 0, 'teritarycategory', '{\"name\":\"Tuxedo\",\"slugurl\":\"Tuxedo\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"17f01ff8-65a2-4aa7-857c-21665dcda31f\",\"loc\":\"storage\\/TeritaryCategory\\/Tuxedo\\/AnIltO9DB51E9Zkc.\"}', 1, '2022-10-04 09:04:21', '2022-10-04 09:04:21'),
('b90b25f8-4382-4d44-a87a-545d7747e5bf', 0, 0, 'CMS', '{\"name\":\"about_us\",\"content\":\"details\",\"description\":\"\",\"slugurl\":\"about-us\",\"title\":\"About_us\"}', 0, '2022-10-10 06:26:44', '2022-10-10 07:04:32'),
('bff20c8e-7cb9-42ae-9fe0-b585a912d6fc', 1, 0, 'subcategory', '{\"name\":\"Mehendi Lehenga\",\"slugurl\":\"Mehendi-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"loc\":\"storage\\/SubCategory\\/Mehendi Lehenga\\/Dns3A6EEpsLweeYw.webp\"}', 1, '2022-10-04 08:37:32', '2022-10-04 08:37:32'),
('c26c2e66-b950-4838-9bb2-f0c38614a45f', 2, 0, 'teritarycategory', '{\"name\":\"Wedding Lehenga\",\"slugurl\":\"Wedding-Lehenga\",\"priority\":\"1\",\"catid\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcatid\":\"ada45188-35fc-4d7e-a1b0-e0f52e38332f\",\"loc\":\"storage\\/TeritaryCategory\\/Wedding Lehenga\\/l9v5xuT3SoHkeZxa.webp\"}', 1, '2022-10-04 09:01:25', '2022-10-04 09:01:25'),
('c357c5a3-1ee4-4651-b168-ac5729e700f2', 0, 0, 'emblishment', '{\"name\":\"Mirror work\"}', 1, '2022-10-06 23:38:10', '2022-10-06 23:38:10'),
('c55f13fd-90e5-4338-9da0-c539e5cc9b7a', 2, 0, 'teritarycategory', '{\"name\":\"Tussar Printed Sarees\",\"slugurl\":\"Tussar-Printed-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1ed6a001-a648-4928-859f-f8ccd52ab82f\",\"loc\":\"storage\\/TeritaryCategory\\/Tussar Printed Sarees\\/SlVZzAozHEgtWAQ7.webp\"}', 1, '2022-10-04 09:22:14', '2022-10-04 09:22:14'),
('c69b3989-d499-4d12-b1ca-1747e3145e8e', 0, 0, 'category', '{\"name\":\"Instashop\",\"slugurl\":\"Instashop\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Instashop\\/CGqU7LZ5eoHpNJRN.webp\"}', 1, '2022-10-04 08:07:31', '2022-10-04 08:07:31'),
('c7f9b743-12ad-427c-99f7-c72aaf830595', 1, 0, 'subcategory', '{\"name\":\"Contemprary Style\",\"slugurl\":\"Contemprary-Style\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Contemprary Style\\/7p6xgq0n9YyuzL18.webp\"}', 1, '2022-10-04 08:59:15', '2022-10-04 08:59:15'),
('ca69ff1d-5e04-492e-86f9-11529d991304', 1, 0, 'subcategory', '{\"name\":\"Evening Gowns\",\"slugurl\":\"Evening-Gowns\",\"priority\":\"1\",\"catid\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"loc\":\"storage\\/SubCategory\\/Evening Gowns\\/3VLHq6Is5bfEUPPy.webp\"}', 1, '2022-10-04 08:40:49', '2022-10-04 08:40:49'),
('cc7352f1-14d2-445f-af7e-d4f5893ed8bf', 0, 0, 'pattern', '{\"name\":\"Pinstrips\"}', 1, '2022-10-07 00:12:17', '2022-10-07 00:12:17'),
('cece1d91-eb6c-485a-a0bc-e667607d9850', 2, 0, 'teritarycategory', '{\"name\":\"Designer Printed Saree\",\"slugurl\":\"Designer-Printed-Saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1ed6a001-a648-4928-859f-f8ccd52ab82f\",\"loc\":\"storage\\/TeritaryCategory\\/Designer Printed Saree\\/oAhAZbmUKUXIcs2Y.webp\"}', 1, '2022-10-04 09:21:14', '2022-10-04 09:21:14'),
('d02f7993-82df-407c-b806-ef4416605b29', 0, 0, 'category', '{\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Lehanga\\/Nh4WYGX2pBV6typ8.webp\"}', 1, '2022-10-04 08:04:14', '2022-10-04 08:04:14'),
('d32c94ab-dd40-4aaf-8f0c-2f78264f3bd8', 1, 0, 'subcategory', '{\"name\":\"Waist coat Kurtas\",\"slugurl\":\"Waist-coat-Kurtas\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"loc\":\"storage\\/SubCategory\\/Waist coat Kurtas\\/c8lHDmMMKL3FhHR9.webp\"}', 1, '2022-10-04 08:48:39', '2022-10-04 08:48:39'),
('d568b105-a4d6-4543-aac1-282dabfa6481', 0, 0, 'attribute', '{\"name\":\"Country of Origin\"}', 1, '2022-10-07 00:17:41', '2022-10-07 00:17:41'),
('d621a2e4-4045-43a4-9e5d-ac34139a4976', 2, 0, 'teritarycategory', '{\"name\":\"Banarasi Organza\",\"slugurl\":\"Banarasi-Organza\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1a9c2f9c-0589-4e6b-be8c-d6c987df5d66\",\"loc\":\"storage\\/TeritaryCategory\\/Banarasi Organza\\/I7cModeZuYVCeDMs.webp\"}', 1, '2022-10-04 09:19:41', '2022-10-04 09:19:41'),
('d6708f14-4f2d-4ec7-a6a6-664e9e4b0086', 1, 0, 'subcategory', '{\"name\":\"Sahara suit\",\"slugurl\":\"Sahara-suit\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Sahara suit\\/HT90dVFSJKmqd26v.webp\"}', 1, '2022-10-04 08:19:06', '2022-10-04 08:19:06'),
('d6da9402-f397-4f58-858c-2eabb0a990c8', 0, 0, 'SEO', '{\"name\":\"d\",\"title\":\"d\",\"description\":\"d\",\"slugurl\":\"d\"}', 0, '2022-10-10 04:39:06', '2022-10-10 04:39:06'),
('d73906c1-cc1c-4880-93e6-9080fb353e84', 1, 0, 'subcategory', '{\"name\":\"Kurtas\",\"slugurl\":\"Kurtas\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"loc\":\"storage\\/SubCategory\\/Kurtas\\/ukTcImjROAYG2qSf.webp\"}', 1, '2022-10-04 08:48:00', '2022-10-04 08:48:00'),
('d8e23669-5956-4d7b-bc60-e46be3ae78cb', 0, 0, 'CMS', '{\"name\":\"q\",\"description\":\"asd\",\"title\":\"q\"}', 0, '2022-10-11 00:38:03', '2022-10-11 00:38:03'),
('d94cff24-fe91-409e-ba7d-7c1e591a8caa', 0, 0, 'CMS', '{\"name\":\"refund_policy\",\"content\":\"amount\",\"description\":\"\",\"slugurl\":\"refund-policy\",\"title\":\"Amount return\"}', 0, '2022-10-10 06:28:14', '2022-10-10 07:01:27'),
('dad0fb08-cf1d-4d93-aa71-9d306fa9a240', 2, 0, 'teritarycategory', '{\"name\":\"Kalamkari Printed Sarees\",\"slugurl\":\"Kalamkari-Printed-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1ed6a001-a648-4928-859f-f8ccd52ab82f\",\"loc\":\"storage\\/TeritaryCategory\\/Kalamkari Printed Sarees\\/GlRxx4Ouijlkjskk.webp\"}', 1, '2022-10-04 09:22:59', '2022-10-04 09:22:59'),
('db870492-1a0e-47fa-978d-7049ea055ae1', 1, 0, 'subcategory', '{\"name\":\"Sangeeth Gown\",\"slugurl\":\"Sangeeth-Gown\",\"priority\":\"1\",\"catid\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"loc\":\"storage\\/SubCategory\\/Sangeeth Gown\\/bcGIn7UKCOJcQetH.webp\"}', 1, '2022-10-04 08:43:04', '2022-10-04 08:43:04'),
('ddc3ea2c-d611-42c8-a4ab-17124a07aa79', 2, 0, 'teritarycategory', '{\"name\":\"Banarasi Georgette\",\"slugurl\":\"Banarasi-Georgette\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"1a9c2f9c-0589-4e6b-be8c-d6c987df5d66\",\"loc\":\"storage\\/TeritaryCategory\\/Banarasi Georgette\\/CsUTgWe1aksTZPdJ.webp\"}', 1, '2022-10-04 09:20:21', '2022-10-04 09:20:21'),
('df41bb31-6c66-4165-ba84-701aa62dc196', 2, 0, 'teritarycategory', '{\"name\":\"Wedding Sherwani\",\"slugurl\":\"Wedding-Sherwani\",\"priority\":\"1\",\"catid\":\"f7462b0d-dfa6-4d55-9152-92bf54a914fb\",\"subcatid\":\"17f01ff8-65a2-4aa7-857c-21665dcda31f\",\"loc\":\"storage\\/TeritaryCategory\\/Wedding Sherwani\\/mxLkTY3UXSRZz3Rx.webp\"}', 1, '2022-10-04 09:06:31', '2022-10-04 09:06:31'),
('df70341e-598e-4e55-bf2e-d5ecfc2ca9c4', 2, 0, 'teritarycategory', '{\"name\":\"Paithani Sarees\",\"slugurl\":\"Paithani-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Paithani Sarees\\/u7EM4eFBvvQG8Cn8.webp\"}', 1, '2022-10-04 09:33:30', '2022-10-04 09:33:30'),
('e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e', 0, 0, 'category', '{\"name\":\"Collections\",\"slugurl\":\"Collections\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Collections\\/4uiJ7giQ3rd1IXKD.webp\"}', 1, '2022-10-04 08:06:29', '2022-10-04 08:06:29'),
('e0db115d-da84-44cf-ac06-3332c086e214', 0, 0, 'technique', '{\"name\":\"Patchwork\"}', 1, '2022-10-07 00:14:26', '2022-10-07 00:14:26'),
('e170684a-d06c-4c85-9629-c937eb742f08', 0, 0, 'occasion', '{\"name\":\"Wedding saree\",\"slugurl\":\"Wedding-saree\",\"priority\":\"1\",\"loc\":\"storage\\/Occasion\\/Wedding saree\\/Lrqb3uxAGU0E1wVM.jpg\"}', 1, '2022-10-07 00:04:46', '2022-10-07 00:38:29'),
('e2856f6f-2184-49fe-b557-b585f9889507', 0, 0, 'colour', '{\"name\":\"Red\"}', 1, '2022-10-06 23:21:01', '2022-10-06 23:21:01'),
('e387ac15-b058-41c2-a02d-1973460193c7', 0, 0, 'SEO', '{\"name\":\"b\",\"title\":\"d\",\"terms_condition\":\"\",\"slugurl\":\"b\"}', 0, '2022-10-10 04:33:43', '2022-10-10 04:33:43'),
('e4126724-5ea2-46c6-b1ad-f4a9756d768e', 0, 0, 'collection', '{\"name\":\"Pure Printed Saree\",\"slugurl\":\"Pure-Printed-Saree\",\"priority\":\"1\",\"loc\":\"storage\\/Collection\\/Pure Printed Saree\\/46Nj4drlBkI984aP.jpg\"}', 1, '2022-10-07 00:31:00', '2022-10-07 00:32:37'),
('e45c24ff-98b5-4db5-90e7-2b02a8180d9e', 0, 0, 'technique', '{\"name\":\"Applique\"}', 1, '2022-10-07 00:14:48', '2022-10-07 00:14:48'),
('e49f31c1-ba38-4a40-996c-5657a1e5a501', 0, 0, 'colour', '{\"name\":\"Pink\"}', 1, '2022-10-06 23:21:37', '2022-10-06 23:21:37'),
('e54f1614-87be-4008-a380-5017558c06d0', 2, 0, 'teritarycategory', '{\"name\":\"Linen Sarees\",\"slugurl\":\"Linen-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Linen Sarees\\/TgTTIyBml9J0oRVj.webp\"}', 1, '2022-10-04 09:32:19', '2022-10-04 09:32:19'),
('e5cdce80-ee1f-4d3b-b36b-520c3b617c1b', 0, 0, 'pattern', '{\"name\":\"Herringbone\"}', 1, '2022-10-07 00:12:52', '2022-10-07 00:12:52'),
('e80e366b-77fc-4001-bd6d-f3aa9bec9980', 0, 0, 'emblishment', '{\"name\":\"Resham work\"}', 1, '2022-10-06 23:37:04', '2022-10-06 23:37:04'),
('ee28550e-6371-47af-8ddd-0258b3eb962e', 2, 0, 'teritarycategory', '{\"name\":\"Kota Silk Saree\",\"slugurl\":\"Kota-Silk-Saree\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"loc\":\"storage\\/TeritaryCategory\\/Kota Silk Saree\\/P78Y24Ii1mKLGub7.webp\"}', 1, '2022-10-04 09:39:13', '2022-10-04 09:39:13'),
('f3769f9f-1259-4e1a-beb9-d9ca933b87f3', 0, 0, 'collection', '{\"name\":\"Handloom Silks\",\"slugurl\":\"Handloom-Silks\",\"priority\":\"1\",\"loc\":\"storage\\/Collection\\/Handloom Silks\\/1cBcg8vL6e54dBwA.jpg\"}', 1, '2022-10-07 00:25:32', '2022-10-07 00:25:32'),
('f619f4ac-8738-42ac-8803-6de70893e60e', 1, 0, 'subcategory', '{\"name\":\"Palazo Suits\",\"slugurl\":\"Palazo-Suits\",\"priority\":\"1\",\"catid\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"loc\":\"storage\\/SubCategory\\/Palazo Suits\\/ptui9hnEVU5VuF1p.webp\"}', 1, '2022-10-04 08:24:38', '2022-10-04 08:24:38'),
('f6c02a75-b57e-4c53-9d59-23dab33d6792', 0, 0, 'emblishment', '{\"name\":\"Sequins work\"}', 1, '2022-10-06 23:37:50', '2022-10-06 23:37:50'),
('f7462b0d-dfa6-4d55-9152-92bf54a914fb', 0, 0, 'category', '{\"name\":\"Men\'s Wear\",\"slugurl\":\"Men-s-Wear\",\"priority\":\"1\",\"loc\":\"storage\\/Category\\/Men\'s Wear\\/N8dVjnsZyWlOjYYD.webp\"}', 1, '2022-10-04 08:45:40', '2022-10-04 08:45:40'),
('f7825c04-6474-499e-8324-1f714bf6740d', 2, 0, 'teritarycategory', '{\"name\":\"Fancy Weaving Sarees\",\"slugurl\":\"Fancy-Weaving-Sarees\",\"priority\":\"1\",\"catid\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcatid\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"loc\":\"storage\\/TeritaryCategory\\/Fancy Weaving Sarees\\/1bltqVCmyL1AGovn.webp\"}', 1, '2022-10-04 09:27:07', '2022-10-04 09:27:07'),
('f7f8f3e3-97b2-40d5-82c9-24a5380a1fbd', 0, 0, 'colour', '{\"name\":\"White\"}', 1, '2022-10-07 00:54:52', '2022-10-07 00:54:52'),
('f8622039-aa4b-485b-b1a8-23a9668427b5', 0, 0, 'emblishment', '{\"name\":\"Gota work\"}', 1, '2022-10-06 23:36:07', '2022-10-06 23:36:07'),
('f89a6e53-0d0c-44ae-b09c-4951de46d686', 0, 0, 'colour', '{\"name\":\"Yellow\"}', 1, '2022-10-06 23:27:23', '2022-10-06 23:27:23'),
('f9732c64-9c01-4104-9a7b-43993e0b1ef5', 1, 0, 'subcategory', '{\"name\":\"Cocktail party\",\"slugurl\":\"Cocktail-party\",\"priority\":\"1\",\"catid\":\"e0d6dc6e-e143-47fa-9f32-85f6b5cdfa5e\",\"loc\":\"storage\\/SubCategory\\/Cocktail party\\/6C7DM0tJSXvjZ3mD.webp\"}', 1, '2022-10-04 08:55:36', '2022-10-04 08:55:36'),
('fa44c7a0-08a8-496f-b4b4-35d6a9357322', 0, 0, 'attribute', '{\"name\":\"Product\"}', 1, '2022-10-07 00:17:25', '2022-10-07 00:17:25'),
('fd062a48-9376-4e2d-a0a6-202744a3269e', 0, 0, 'pincode', '[]', 1, '2022-10-10 04:24:38', '2022-10-10 04:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_06_09_103844_create_masters_table', 1),
(6, '2022_09_12_132041_create_products_table', 1),
(7, '2022_09_12_132050_create_products_images_table', 1),
(8, '2022_09_20_092151_create_product_extras_table', 1),
(9, '2022_10_13_171047_create_customers_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `pricing` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`pricing`)),
  `metadata` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`metadata`)),
  `seo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`seo`)),
  `status` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `data`, `pricing`, `metadata`, `seo`, `status`, `created_at`, `updated_at`) VALUES
('00d6d406-630e-4bd3-ab2f-bfbafc8fcad2', 'Saree', '{\"priority\":\"1\",\"name\":\"Saree\",\"slugurl\":\"Saree\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"500\",\"baseprice\":\"1884.76\",\"disa\":\"20\",\"disp\":\"1.06\",\"taxp\":\"5\",\"taxa\":\"93.24\",\"nettotal\":\"2000\",\"distype\":\"0\",\"weight\":\"23\",\"wgunit\":\"Kg\",\"length\":\"43\",\"width\":\"12\",\"height\":\"123\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88\",\"tercategory\":\"08e068ae-5c82-4305-b718-51751036a342\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"93de2692-3b74-4f0b-bd50-1098e4b67afe\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"f7f8f3e3-97b2-40d5-82c9-24a5380a1fbd\",\"collection\":\"[\\\"e4126724-5ea2-46c6-b1ad-f4a9756d768e\\\"]\",\"occasion\":\"[\\\"1aeddf2c-cd8e-4f5d-b24a-352b958c6f60\\\"]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 00:59:55', '2022-10-07 00:59:55'),
('0694eacd-b255-48e3-8249-20776a2c2ebb', 'ChudiPalzo', '{\"priority\":\"1\",\"name\":\"ChudiPalzo\",\"slugurl\":\"ChudiPalzo\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"300\",\"baseprice\":\"1423.57\",\"disa\":\"5\",\"disp\":\"0.35\",\"taxp\":\"5\",\"taxa\":\"70.93\",\"nettotal\":\"1500\",\"distype\":\"0\",\"weight\":\"1\",\"wgunit\":\"Kg\",\"length\":\"1\",\"width\":\"1\",\"height\":\"1\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"f619f4ac-8738-42ac-8803-6de70893e60e\",\"tercategory\":\"\",\"emblishment\":\"\",\"pattern\":\"\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"f7f8f3e3-97b2-40d5-82c9-24a5380a1fbd\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 05:44:36', '2022-10-13 05:44:36'),
('071563a1-dc44-4f25-8184-891d7ad2adc7', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"400\",\"baseprice\":\"3000\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"0\",\"taxa\":\"0\",\"nettotal\":\"3000\",\"distype\":\"0\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"33\",\"width\":\"3\",\"height\":\"3\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"b4082f3d-69e1-487d-894e-0f7e263c49fe\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"3bc3959d-7b65-4a88-8735-6d44da7cac16\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"3c922ba8-7164-4ed9-8693-2c9aa0c2ef22\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:58:51', '2022-10-13 10:58:51'),
('0910dbed-3473-4749-a5f4-f8f387399beb', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"400\",\"baseprice\":\"1418.57\",\"disa\":\"10\",\"disp\":\"0.7\",\"taxp\":\"5\",\"taxa\":\"70.43\",\"nettotal\":\"1500\",\"distype\":\"0\",\"weight\":\"4\",\"wgunit\":\"Kg\",\"length\":\"4\",\"width\":\"4\",\"height\":\"4\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"457bbc31-5ebd-45ea-8bfe-2179d6a8b9bc\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"0af6c98e-2a2c-4338-9bc7-f54d2c4a311d\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 11:06:35', '2022-10-13 11:06:35'),
('10ef3182-8f37-4cf9-837c-b0ca1ecec780', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[{\"id\":\"004e2bd1-7b98-46bd-bea4-62d12226cb19\",\"name\":\"Model Wears\",\"value\":null},{\"id\":null,\"name\":null,\"value\":null},{\"id\":null,\"name\":null,\"value\":null}]}', '{\"cpi\":\"1000\",\"baseprice\":\"57141.9\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"2857.1\",\"nettotal\":\"59999\",\"distype\":\"false\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"3\",\"width\":\"3\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"a02aec54-fdfc-40ee-94be-5a66a7240dd5\",\"tercategory\":\"\",\"emblishment\":\"f8622039-aa4b-485b-b1a8-23a9668427b5\",\"pattern\":\"2d4cd378-0527-4ce1-a2fb-e310a5257867\",\"fabric\":\"93de2692-3b74-4f0b-bd50-1098e4b67afe\",\"technique\":\"\",\"colour\":\"e49f31c1-ba38-4a40-996c-5657a1e5a501\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Legenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:07:34', '2022-10-13 10:07:34'),
('1451c5e8-a9b5-46a3-a6c3-798e45647948', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"200\",\"baseprice\":\"1002.51\",\"disa\":\"50.13\",\"disp\":\"5\",\"taxp\":\"5\",\"taxa\":\"47.62\",\"nettotal\":\"1000\",\"distype\":\"1\",\"weight\":\"4\",\"wgunit\":\"Kg\",\"length\":\"4\",\"width\":\"4\",\"height\":\"4\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"02b8358a-1f2d-4fe3-b70e-f032963be2a4\",\"tercategory\":\"122f4cf3-67fc-449a-a68b-dbf547b868c8\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"93de2692-3b74-4f0b-bd50-1098e4b67afe\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"ac5d8690-b9ae-4276-b697-70eb35a06251\",\"collection\":\"[\\\"a9289a75-ed90-4423-bcec-97d265435410\\\"]\",\"occasion\":\"[\\\"2ed30378-82c2-4063-a902-d5f391d01afa\\\"]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:13:06', '2022-10-07 01:16:28'),
('21799c8b-d8a9-490a-8366-cca9f1c737b7', 'Gowns', '{\"priority\":\"1\",\"name\":\"Gowns\",\"slugurl\":\"Gowns\",\"shortdesc\":\"z\",\"desc\":\"z\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"1000\",\"baseprice\":\"2857.14\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"142.86\",\"nettotal\":\"3000\",\"distype\":\"1\",\"weight\":\"1\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"\",\"subcategory\":\"\",\"tercategory\":\"\",\"emblishment\":\"\",\"pattern\":\"\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Gown\",\"seodesc\":\"\"}', 1, '2022-10-13 11:38:54', '2022-10-13 11:39:13'),
('27659b7f-1927-451f-a2d5-a47dd314018b', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"100\",\"baseprice\":\"471.19\",\"disa\":\"5\",\"disp\":\"1.06\",\"taxp\":\"5\",\"taxa\":\"23.31\",\"nettotal\":\"500\",\"distype\":\"0\",\"weight\":\"7\",\"wgunit\":\"Kg\",\"length\":\"7\",\"width\":\"7\",\"height\":\"7\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"tercategory\":\"ad603290-ae96-4d47-8598-0bb4a62ba9f9\",\"emblishment\":\"a63738dd-d053-4d82-9019-0a1c58c5a48f\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"3bc3959d-7b65-4a88-8735-6d44da7cac16\",\"technique\":\"e0db115d-da84-44cf-ac06-3332c086e214\",\"colour\":\"0af6c98e-2a2c-4338-9bc7-f54d2c4a311d\",\"collection\":\"[\\\"790ea2f3-61c9-4f63-8eed-83c1f1280fd2\\\"]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:21:41', '2022-10-07 01:21:41'),
('32fccbf5-1a1c-4f3a-93d9-42ed8e2a4f98', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":\"1\",\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"500\",\"baseprice\":\"1963.67\",\"disa\":\"58.91\",\"disp\":\"3\",\"taxp\":\"5\",\"taxa\":\"95.24\",\"nettotal\":\"2000\",\"distype\":\"1\",\"weight\":\"5\",\"wgunit\":\"Kg\",\"length\":\"5\",\"width\":\"5\",\"height\":\"5\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"4cec22e7-0575-4674-99ca-27b0eaf0a668\",\"tercategory\":\"adf8610e-7806-4662-8736-0c5fe0026126\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"42a4b2d7-2965-4740-9dea-02450bdb9bc4\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"e49f31c1-ba38-4a40-996c-5657a1e5a501\",\"collection\":\"[\\\"6c1c9f11-8bfc-4213-9076-3bde6d22f0fe\\\"]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:34:19', '2022-10-11 09:18:48'),
('415a9816-64fd-459d-b3ec-2652f0649f1e', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"123\",\"desc\":\"123\",\"sku\":\"2\",\"barcode\":\"2\",\"stock\":\"2\",\"trackqty\":\"2\",\"selloutofstock\":\"1\",\"minstock\":\"1\",\"attribute\":[]}', '{\"cpi\":\"20\",\"baseprice\":\"12.25\",\"disa\":\"2.45\",\"disp\":\"20\",\"taxp\":\"2\",\"taxa\":\"0.2\",\"nettotal\":\"10\",\"distype\":\"1\",\"weight\":\"20\",\"wgunit\":\"Kg\",\"length\":\"20\",\"width\":\"0\",\"height\":\"0\",\"mntunit\":\"M\"}', '{\"category\":\"\",\"subcategory\":\"\",\"tercategory\":\"\",\"emblishment\":\"\",\"pattern\":\"\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"\",\"seodesc\":\"\"}', 1, '2022-10-06 05:15:42', '2022-10-06 05:15:42'),
('422c2cdc-8e4c-4741-8a5d-acaa5b3d8545', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"100\",\"baseprice\":\"481\",\"disa\":\"4.81\",\"disp\":\"1\",\"taxp\":\"5\",\"taxa\":\"23.81\",\"nettotal\":\"500\",\"distype\":\"1\",\"weight\":\"1\",\"wgunit\":\"Kg\",\"length\":\"1\",\"width\":\"1\",\"height\":\"1\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"448076c9-e3ca-49f7-94f0-f9c5d0c4d7ee\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"3c922ba8-7164-4ed9-8693-2c9aa0c2ef22\",\"collection\":\"[\\\"6c1c9f11-8bfc-4213-9076-3bde6d22f0fe\\\"]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:29:38', '2022-10-07 01:30:37'),
('4f9c4253-6585-408d-8e71-7cfa1eddd68d', 'Gowns', '{\"priority\":\"1\",\"name\":\"Gowns\",\"slugurl\":\"Gowns\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"500\",\"baseprice\":\"1904.76\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"95.24\",\"nettotal\":\"2000\",\"distype\":\"1\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"subcategory\":\"1945c042-def8-4d32-a65f-9e0bc672a4c7\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"e49f31c1-ba38-4a40-996c-5657a1e5a501\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Gown\",\"seodesc\":\"\"}', 1, '2022-10-13 11:20:15', '2022-10-13 11:20:50'),
('519c6b6a-9238-4e83-bb2d-24c7fd71832f', 'Chudi', '{\"priority\":\"1\",\"name\":\"Chudi\",\"slugurl\":\"Chudi\",\"shortdesc\":\"a\",\"desc\":\"a\",\"sku\":\"1\",\"barcode\":\"1\",\"stock\":\"1\",\"trackqty\":\"2\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"200\",\"baseprice\":\"942.38\",\"disa\":\"10\",\"disp\":\"1.06\",\"taxp\":\"5\",\"taxa\":\"46.62\",\"nettotal\":\"1000\",\"distype\":\"0\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"1\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"5868262b-324e-4971-8ec3-1c09d4e4b337\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"\",\"fabric\":\"1f1c83ac-b63c-4bcf-988a-b198c970121b\",\"technique\":\"0766817b-13a4-4897-ba8c-4927cdc4aaf6\",\"colour\":\"f89a6e53-0d0c-44ae-b09c-4951de46d686\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"a\"}', 1, '2022-10-13 04:57:46', '2022-10-13 04:57:46'),
('57f4dda1-740e-4a15-a723-231757f04624', 'Chudidesign', '{\"priority\":\"1\",\"name\":\"Chudidesign\",\"slugurl\":\"Chudidesign\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"400\",\"baseprice\":\"2370.95\",\"disa\":\"10\",\"disp\":\"0.42\",\"taxp\":\"5\",\"taxa\":\"118.05\",\"nettotal\":\"2500\",\"distype\":\"0\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"3\",\"width\":\"3\",\"height\":\"3\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"6b917693-98a9-4585-9d12-6a233a2199ca\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"3bc3959d-7b65-4a88-8735-6d44da7cac16\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"3c922ba8-7164-4ed9-8693-2c9aa0c2ef22\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 05:26:09', '2022-10-13 05:26:09'),
('5b751cf4-6b75-43b4-b2ef-cf2825e372a2', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"400\",\"baseprice\":\"2000\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"0\",\"taxa\":\"0\",\"nettotal\":\"2000\",\"distype\":\"1\",\"weight\":\"44\",\"wgunit\":\"Kg\",\"length\":\"4\",\"width\":\"4\",\"height\":\"4\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"bff20c8e-7cb9-42ae-9fe0-b585a912d6fc\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"f7f8f3e3-97b2-40d5-82c9-24a5380a1fbd\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:41:14', '2022-10-13 10:41:14'),
('5f721c5a-4dd7-495e-9695-316b30f7e9f7', 'ChudiTunics', '{\"priority\":\"1\",\"name\":\"ChudiTunics\",\"slugurl\":\"ChudiTunics\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"400\",\"baseprice\":\"2845.14\",\"disa\":\"12\",\"disp\":\"0.42\",\"taxp\":\"5\",\"taxa\":\"141.66\",\"nettotal\":\"3000\",\"distype\":\"0\",\"weight\":\"5\",\"wgunit\":\"Kg\",\"length\":\"5\",\"width\":\"5\",\"height\":\"5\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"30451d6a-b11a-41c3-9215-c2a6b1548428\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"2d4cd378-0527-4ce1-a2fb-e310a5257867\",\"fabric\":\"1f1c83ac-b63c-4bcf-988a-b198c970121b\",\"technique\":\"\",\"colour\":\"e49f31c1-ba38-4a40-996c-5657a1e5a501\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 05:35:46', '2022-10-13 05:35:46'),
('72be29c1-cfa1-4417-9641-e8c78b9c16c3', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"200\",\"baseprice\":\"902.26\",\"disa\":\"45.11\",\"disp\":\"5\",\"taxp\":\"5\",\"taxa\":\"42.86\",\"nettotal\":\"900\",\"distype\":\"1\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"3\",\"width\":\"3\",\"height\":\"3\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"tercategory\":\"05cd7c46-1e86-4c4f-9135-9a3bfa32113b\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"42a4b2d7-2965-4740-9dea-02450bdb9bc4\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"e49f31c1-ba38-4a40-996c-5657a1e5a501\",\"collection\":\"[\\\"f3769f9f-1259-4e1a-beb9-d9ca933b87f3\\\"]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:09:42', '2022-10-07 01:17:09'),
('7396a8b9-53b2-4dea-b9f8-48b8feea8634', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"400\",\"baseprice\":\"1518.81\",\"disa\":\"5\",\"disp\":\"0.33\",\"taxp\":\"5\",\"taxa\":\"75.69\",\"nettotal\":\"1600\",\"distype\":\"0\",\"weight\":\"6\",\"wgunit\":\"Kg\",\"length\":\"6\",\"width\":\"6\",\"height\":\"1\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"1a9c2f9c-0589-4e6b-be8c-d6c987df5d66\",\"tercategory\":\"a0765c98-78d1-44c6-94c7-bcf0e42238f4\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"41342e96-7f4d-4337-a84f-709adc51e412\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"e2856f6f-2184-49fe-b557-b585f9889507\",\"collection\":\"[\\\"6c1c9f11-8bfc-4213-9076-3bde6d22f0fe\\\"]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"\",\"seodesc\":\"\"}', 1, '2022-10-07 01:19:26', '2022-10-07 01:19:26'),
('77c3f679-fa7f-4a11-b1b0-b5d5e85109d4', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"6000\",\"baseprice\":\"15238.1\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"761.91\",\"nettotal\":\"16000\",\"distype\":\"0\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"3\",\"width\":\"3\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"457bbc31-5ebd-45ea-8bfe-2179d6a8b9bc\",\"tercategory\":\"\",\"emblishment\":\"f8622039-aa4b-485b-b1a8-23a9668427b5\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"9e2cee13-20ca-44db-a61e-e4229f09e720\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:15:39', '2022-10-13 10:15:39'),
('7c6433f9-a043-4cbe-a02e-2c08854e868f', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"ss\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"10000\",\"baseprice\":\"23809.52\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"1190.48\",\"nettotal\":\"25000\",\"distype\":\"0\",\"weight\":\"4\",\"wgunit\":\"Kg\",\"length\":\"4\",\"width\":\"5\",\"height\":\"4\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"571d404f-1033-4f04-bde1-5b698a6d309f\",\"tercategory\":\"\",\"emblishment\":\"f6c02a75-b57e-4c53-9d59-23dab33d6792\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"940e8607-3207-418a-b221-b644bd84ce92\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:21:44', '2022-10-13 10:21:44'),
('86677231-abeb-4104-b8c6-645dd9d19675', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"o\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"500\",\"baseprice\":\"1424.57\",\"disa\":\"4\",\"disp\":\"0.28\",\"taxp\":\"5\",\"taxa\":\"71.03\",\"nettotal\":\"1500\",\"distype\":\"0\",\"weight\":\"5\",\"wgunit\":\"Kg\",\"length\":\"5\",\"width\":\"5\",\"height\":\"5\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88\",\"tercategory\":\"ad6f8c1b-b234-454d-bd47-a548c23a8a83\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"42a4b2d7-2965-4740-9dea-02450bdb9bc4\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"80df7a61-3278-49a8-ab0c-0122d62f5b3f\",\"collection\":\"[\\\"f3769f9f-1259-4e1a-beb9-d9ca933b87f3\\\"]\",\"occasion\":\"[\\\"1aeddf2c-cd8e-4f5d-b24a-352b958c6f60\\\"]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:04:48', '2022-10-07 01:04:48'),
('8bcbef44-7ead-4bf2-b8eb-474e8f2e4ec9', 's', '{\"priority\":\"3\",\"name\":\"s\",\"slugurl\":\"s\",\"shortdesc\":\"a\",\"desc\":\"s\",\"sku\":\"\",\"barcode\":\"\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"300\",\"baseprice\":\"6785.03\",\"disa\":\"2035.51\",\"disp\":\"30\",\"taxp\":\"5\",\"taxa\":\"237.48\",\"nettotal\":\"4987\",\"distype\":\"1\",\"weight\":\"0\",\"wgunit\":\"Kg\",\"length\":\"0\",\"width\":\"0\",\"height\":\"0\",\"mntunit\":\"M\"}', '{\"category\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"subcategory\":\"1945c042-def8-4d32-a65f-9e0bc672a4c7\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"43e24fb6-da6d-4442-95ee-8149d49298f2\",\"fabric\":\"1f1c83ac-b63c-4bcf-988a-b198c970121b\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"2e4771db-1910-4d42-acc2-8180ab2b4c6a\",\"collection\":\"[\\\"6461eaed-5357-415f-89bf-207e443e55f9\\\"]\",\"occasion\":\"[\\\"2ed30378-82c2-4063-a902-d5f391d01afa\\\"]\"}', '{\"seotitle\":\"\",\"seodesc\":\"\"}', 1, '2022-10-10 05:37:57', '2022-10-11 12:22:41'),
('9c060a41-9f50-4d72-a2b7-ed140912ccd4', 'Chudijump', '{\"priority\":\"1\",\"name\":\"Chudijump\",\"slugurl\":\"Chudijump\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"300\",\"baseprice\":\"2380.95\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"119.05\",\"nettotal\":\"2500\",\"distype\":\"1\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"5eeb3ef0-5c7a-4ab1-8da6-fea7aa61c0a9\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"2d4cd378-0527-4ce1-a2fb-e310a5257867\",\"fabric\":\"1f1c83ac-b63c-4bcf-988a-b198c970121b\",\"technique\":\"\",\"colour\":\"e2856f6f-2184-49fe-b557-b585f9889507\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 05:48:58', '2022-10-13 05:49:23'),
('a130d1be-9757-48a6-8917-52ace771d912', 's', '{\"priority\":\"3\",\"name\":\"s\",\"slugurl\":\"s\",\"shortdesc\":\"a\",\"desc\":\"s\",\"sku\":\"\",\"barcode\":\"\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"300\",\"baseprice\":\"4749.52\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"237.48\",\"nettotal\":\"4987\",\"distype\":\"1\",\"weight\":\"0\",\"wgunit\":\"Kg\",\"length\":\"0\",\"width\":\"0\",\"height\":\"0\",\"mntunit\":\"M\"}', '{\"category\":\"\",\"subcategory\":\"\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"43e24fb6-da6d-4442-95ee-8149d49298f2\",\"fabric\":\"1f1c83ac-b63c-4bcf-988a-b198c970121b\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"2e4771db-1910-4d42-acc2-8180ab2b4c6a\",\"collection\":\"[\\\"6461eaed-5357-415f-89bf-207e443e55f9\\\"]\",\"occasion\":\"[\\\"2ed30378-82c2-4063-a902-d5f391d01afa\\\"]\"}', '{\"seotitle\":\"\",\"seodesc\":\"\"}', 1, '2022-10-10 05:28:07', '2022-10-10 05:37:53'),
('b24d406f-7cae-4008-bf02-92af64002a17', 'Chudidesign', '{\"priority\":\"1\",\"name\":\"Chudidesign\",\"slugurl\":\"Chudidesign\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"500\",\"baseprice\":\"2847.14\",\"disa\":\"10\",\"disp\":\"0.35\",\"taxp\":\"5\",\"taxa\":\"141.86\",\"nettotal\":\"3000\",\"distype\":\"0\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"3\",\"width\":\"3\",\"height\":\"3\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"065c279f-26f6-43a5-acec-78b6bca6b2e5\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"2d4cd378-0527-4ce1-a2fb-e310a5257867\",\"fabric\":\"93de2692-3b74-4f0b-bd50-1098e4b67afe\",\"technique\":\"\",\"colour\":\"ac5d8690-b9ae-4276-b697-70eb35a06251\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 10:02:08', '2022-10-13 10:02:08'),
('b981f2c3-8dc9-4509-af1e-50f478db181c', 'b', '{\"priority\":\"1\",\"name\":\"b\",\"slugurl\":\"b\",\"shortdesc\":\"b\",\"desc\":\"b\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"150\",\"baseprice\":\"476.19\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"23.81\",\"nettotal\":\"500\",\"distype\":\"0\",\"weight\":\"1\",\"wgunit\":\"Kg\",\"length\":\"1\",\"width\":\"1\",\"height\":\"1\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"5868262b-324e-4971-8ec3-1c09d4e4b337\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"2d4cd378-0527-4ce1-a2fb-e310a5257867\",\"fabric\":\"1f1c83ac-b63c-4bcf-988a-b198c970121b\",\"technique\":\"0766817b-13a4-4897-ba8c-4927cdc4aaf6\",\"colour\":\"f89a6e53-0d0c-44ae-b09c-4951de46d686\",\"collection\":\"[]\",\"occasion\":\"[\\\"1aeddf2c-cd8e-4f5d-b24a-352b958c6f60\\\"]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 04:59:38', '2022-10-13 04:59:38'),
('bbcd92f5-41e8-4c11-843e-2a02a75fd06d', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"500\",\"baseprice\":\"4761.9\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"238.1\",\"nettotal\":\"5000\",\"distype\":\"0\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"9fa3de0e-3460-46a1-8f8b-ca6aa101138b\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"42a4b2d7-2965-4740-9dea-02450bdb9bc4\",\"technique\":\"558734c5-5850-4843-b5e7-9863cfba3a50\",\"colour\":\"3c922ba8-7164-4ed9-8693-2c9aa0c2ef22\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:47:00', '2022-10-13 10:47:00'),
('c021f9d9-2b9a-476b-a4fb-86bab3778335', 'Gowns', '{\"priority\":\"1\",\"name\":\"Gowns\",\"slugurl\":\"Gowns\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"5000\",\"baseprice\":\"20000\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"0\",\"taxa\":\"0\",\"nettotal\":\"20000\",\"distype\":\"1\",\"weight\":\"6\",\"wgunit\":\"Kg\",\"length\":\"6\",\"width\":\"6\",\"height\":\"6\",\"mntunit\":\"M\"}', '{\"category\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"subcategory\":\"1945c042-def8-4d32-a65f-9e0bc672a4c7\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"2e4771db-1910-4d42-acc2-8180ab2b4c6a\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Gown\",\"seodesc\":\"\"}', 1, '2022-10-13 11:13:35', '2022-10-13 11:14:04'),
('c8bc8118-44a1-4e80-9733-65df47bfaa05', 'Gowns', '{\"priority\":\"1\",\"name\":\"Gowns\",\"slugurl\":\"Gowns\",\"shortdesc\":\"z\",\"desc\":\"z\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"1000\",\"baseprice\":\"4761.9\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"238.1\",\"nettotal\":\"5000\",\"distype\":\"1\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"4ed93137-dbbb-4d79-b508-42a78c484fed\",\"subcategory\":\"9e06c672-4ccf-4432-93fb-95664e99dff4\",\"tercategory\":\"\",\"emblishment\":\"549fc477-ae70-40dc-8f8b-58b8e4550201\",\"pattern\":\"\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"2e4771db-1910-4d42-acc2-8180ab2b4c6a\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Gown\",\"seodesc\":\"\"}', 1, '2022-10-13 11:36:35', '2022-10-13 11:37:15'),
('cc7926a2-e9c7-4f02-833b-9462e2a2f097', 'Lehanga', '{\"priority\":\"1\",\"name\":\"Lehanga\",\"slugurl\":\"Lehanga\",\"shortdesc\":\"s\",\"desc\":\"s\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"5000\",\"baseprice\":\"14285.71\",\"disa\":\"0\",\"disp\":\"0\",\"taxp\":\"5\",\"taxa\":\"714.29\",\"nettotal\":\"15000\",\"distype\":\"0\",\"weight\":\"3\",\"wgunit\":\"Kg\",\"length\":\"3\",\"width\":\"0\",\"height\":\"3\",\"mntunit\":\"M\"}', '{\"category\":\"d02f7993-82df-407c-b806-ef4416605b29\",\"subcategory\":\"11ef9cff-bd83-41eb-87f7-7931c2563a40\",\"tercategory\":\"\",\"emblishment\":\"c357c5a3-1ee4-4651-b168-ac5729e700f2\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"41342e96-7f4d-4337-a84f-709adc51e412\",\"technique\":\"\",\"colour\":\"0af6c98e-2a2c-4338-9bc7-f54d2c4a311d\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Lehenga\",\"seodesc\":\"\"}', 1, '2022-10-13 10:11:17', '2022-10-13 10:11:17'),
('e5f41045-893f-4c80-9b70-d0ec8a725872', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"1000\",\"baseprice\":\"3318.33\",\"disa\":\"15\",\"disp\":\"0.45\",\"taxp\":\"5\",\"taxa\":\"165.17\",\"nettotal\":\"3500\",\"distype\":\"0\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"1dc6ce95-9ef9-42c6-a61d-f7f9cac3dc88\",\"tercategory\":\"8260eb66-1dba-4c6b-9df5-c3af78a08875\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"5c055baa-45a6-407b-a0aa-b8f1ddceabf4\",\"fabric\":\"42a4b2d7-2965-4740-9dea-02450bdb9bc4\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"2e4771db-1910-4d42-acc2-8180ab2b4c6a\",\"collection\":\"[\\\"790ea2f3-61c9-4f63-8eed-83c1f1280fd2\\\"]\",\"occasion\":\"[\\\"e170684a-d06c-4c85-9629-c937eb742f08\\\"]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:07:27', '2022-10-07 01:07:27'),
('e76bf3b7-4d46-4b86-a64e-29dc2e571474', 'Aanar kali', '{\"priority\":\"1\",\"name\":\"Aanar kali\",\"slugurl\":\"Aanar-kali\",\"shortdesc\":\"s\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"200\",\"baseprice\":\"1418.57\",\"disa\":\"10\",\"disp\":\"0.7\",\"taxp\":\"5\",\"taxa\":\"70.43\",\"nettotal\":\"1500\",\"distype\":\"0\",\"weight\":\"2\",\"wgunit\":\"Kg\",\"length\":\"2\",\"width\":\"2\",\"height\":\"2\",\"mntunit\":\"M\"}', '{\"category\":\"6a7fe04c-3f36-4956-8df4-8280e6215380\",\"subcategory\":\"1ba97501-5086-429a-ad93-a29f954c34b4\",\"tercategory\":\"\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"cc7352f1-14d2-445f-af7e-d4f5893ed8bf\",\"fabric\":\"93de2692-3b74-4f0b-bd50-1098e4b67afe\",\"technique\":\"\",\"colour\":\"80df7a61-3278-49a8-ab0c-0122d62f5b3f\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"chudi\",\"seodesc\":\"\"}', 1, '2022-10-13 05:22:26', '2022-10-13 05:22:26'),
('ebafdac7-2e65-4dab-b8cd-4332cf21b2b6', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"123\",\"desc\":\"123\",\"sku\":\"2\",\"barcode\":\"2\",\"stock\":\"2\",\"trackqty\":\"2\",\"selloutofstock\":\"1\",\"minstock\":\"1\",\"attribute\":[]}', '{\"cpi\":\"20\",\"baseprice\":\"12.25\",\"disa\":\"2.45\",\"disp\":\"20\",\"taxp\":\"2\",\"taxa\":\"0.2\",\"nettotal\":\"10\",\"distype\":\"1\",\"weight\":\"20\",\"wgunit\":\"Kg\",\"length\":\"20\",\"width\":\"0\",\"height\":\"0\",\"mntunit\":\"M\"}', '{\"category\":\"\",\"subcategory\":\"\",\"tercategory\":\"\",\"emblishment\":\"\",\"pattern\":\"\",\"fabric\":\"\",\"technique\":\"\",\"colour\":\"\",\"collection\":\"[]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"\",\"seodesc\":\"\"}', 1, '2022-10-06 05:16:13', '2022-10-06 05:16:13'),
('fc508b93-3742-4bad-b5ea-ec8dd53acd0c', '231', '{\"priority\":\"1\",\"name\":\"231\",\"slugurl\":\"231\",\"shortdesc\":\"\",\"desc\":\"\",\"sku\":\"0\",\"barcode\":\"0\",\"stock\":\"0\",\"trackqty\":\"0\",\"selloutofstock\":0,\"minstock\":0,\"attribute\":[]}', '{\"cpi\":\"300\",\"baseprice\":\"947.38\",\"disa\":\"5\",\"disp\":\"0.53\",\"taxp\":\"5\",\"taxa\":\"47.12\",\"nettotal\":\"1000\",\"distype\":\"0\",\"weight\":\"5\",\"wgunit\":\"Kg\",\"length\":\"5\",\"width\":\"5\",\"height\":\"5\",\"mntunit\":\"M\"}', '{\"category\":\"ab046c9a-10f4-4813-bd40-42592e060187\",\"subcategory\":\"a5ef69b2-515d-4ee7-85a1-2182e78a29d5\",\"tercategory\":\"05cd7c46-1e86-4c4f-9135-9a3bfa32113b\",\"emblishment\":\"375d0d4c-a77d-4139-bd47-649131d88b8e\",\"pattern\":\"\",\"fabric\":\"41342e96-7f4d-4337-a84f-709adc51e412\",\"technique\":\"e45c24ff-98b5-4db5-90e7-2b02a8180d9e\",\"colour\":\"3c922ba8-7164-4ed9-8693-2c9aa0c2ef22\",\"collection\":\"[\\\"f3769f9f-1259-4e1a-beb9-d9ca933b87f3\\\"]\",\"occasion\":\"[]\"}', '{\"seotitle\":\"Saree\",\"seodesc\":\"\"}', 1, '2022-10-07 01:15:44', '2022-10-07 01:15:44');

-- --------------------------------------------------------

--
-- Table structure for table `products_images`
--

CREATE TABLE `products_images` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `loc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` smallint(6) NOT NULL DEFAULT 1,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_images`
--

INSERT INTO `products_images` (`id`, `product_id`, `loc`, `priority`, `status`, `created_at`, `updated_at`) VALUES
('13df0051-ca9d-427e-9ec2-f61e6ab625eb', 'a130d1be-9757-48a6-8917-52ace771d912', 'storage/Product/a130d1be-9757-48a6-8917-52ace771d912/Ft8iAzKdbYBhobMt.jpg', 1, 1, '2022-10-10 05:28:07', '2022-10-10 05:28:07'),
('222f3314-f7da-4ca8-95c9-74effd5f6549', '32fccbf5-1a1c-4f3a-93d9-42ed8e2a4f98', 'storage/Product/32fccbf5-1a1c-4f3a-93d9-42ed8e2a4f98/483C13QwCeRlURn8.jpg', 1, 1, '2022-10-07 01:34:19', '2022-10-07 01:34:19'),
('2a3106f6-d028-433b-a534-b5f1781ddc22', '27659b7f-1927-451f-a2d5-a47dd314018b', 'storage/Product/27659b7f-1927-451f-a2d5-a47dd314018b/h6ft3yx7sTH7zXN5.jpg', 1, 1, '2022-10-07 01:21:41', '2022-10-07 01:21:41'),
('2ea5c86e-aabf-464e-9a0f-8a7543e416c9', '1451c5e8-a9b5-46a3-a6c3-798e45647948', 'storage/Product/1451c5e8-a9b5-46a3-a6c3-798e45647948/Zckhr6jErVYI4q6w.jpg', 1, 1, '2022-10-07 01:13:06', '2022-10-07 01:13:06'),
('32e0044c-5a32-49f6-888f-f82f59bea09a', '0910dbed-3473-4749-a5f4-f8f387399beb', 'storage/Product/0910dbed-3473-4749-a5f4-f8f387399beb/exfigcwhIPGVceCw.webp', 1, 1, '2022-10-13 11:06:35', '2022-10-13 11:06:35'),
('353d118f-ca77-4554-a0d8-b790af7a677a', '519c6b6a-9238-4e83-bb2d-24c7fd71832f', 'storage/Product/519c6b6a-9238-4e83-bb2d-24c7fd71832f/eeTnCak2IHnnL4hi.webp', 1, 1, '2022-10-13 04:57:46', '2022-10-13 04:57:46'),
('3624f3ef-34b5-4a45-932a-ae0b4d413aba', 'e76bf3b7-4d46-4b86-a64e-29dc2e571474', 'storage/Product/e76bf3b7-4d46-4b86-a64e-29dc2e571474/3EYm2xF5Wmw9ccAn.webp', 1, 1, '2022-10-13 05:22:26', '2022-10-13 05:22:26'),
('44d2435d-24ed-4df5-a4a8-b93b28a27db8', '5b751cf4-6b75-43b4-b2ef-cf2825e372a2', 'storage/Product/5b751cf4-6b75-43b4-b2ef-cf2825e372a2/BT9tyRxj5SunxiUd.webp', 1, 1, '2022-10-13 10:41:14', '2022-10-13 10:41:14'),
('52ae177d-b175-4ea3-80e1-442b1b97e8a0', '9c060a41-9f50-4d72-a2b7-ed140912ccd4', 'storage/Product/9c060a41-9f50-4d72-a2b7-ed140912ccd4/5MacwmblD7vftrUY.webp', 1, 1, '2022-10-13 05:50:37', '2022-10-13 05:50:37'),
('5ba73760-a73f-4f73-a31a-a3bd14ca64f8', '7c6433f9-a043-4cbe-a02e-2c08854e868f', 'storage/Product/7c6433f9-a043-4cbe-a02e-2c08854e868f/aJ8nmylxGEtAAc3j.webp', 1, 1, '2022-10-13 10:21:44', '2022-10-13 10:21:44'),
('698c8f63-d626-424a-a9f3-1ef9763fba30', 'bbcd92f5-41e8-4c11-843e-2a02a75fd06d', 'storage/Product/bbcd92f5-41e8-4c11-843e-2a02a75fd06d/reD2lZlcO7n0m66x.webp', 1, 1, '2022-10-13 10:47:00', '2022-10-13 10:47:00'),
('74fd2fa1-fb4d-442a-a25f-0f2c6aeabedd', '0694eacd-b255-48e3-8249-20776a2c2ebb', 'storage/Product/0694eacd-b255-48e3-8249-20776a2c2ebb/HbijwIePf2N2pFAg.webp', 1, 1, '2022-10-13 05:44:36', '2022-10-13 05:44:36'),
('7ff1fe77-81d1-4fb7-8b33-9dc7d58d9fc4', '071563a1-dc44-4f25-8184-891d7ad2adc7', 'storage/Product/071563a1-dc44-4f25-8184-891d7ad2adc7/s2wWs4IDLd1rLupz.webp', 1, 1, '2022-10-13 10:58:51', '2022-10-13 10:58:51'),
('8c211e3d-064b-48ff-a7ce-6cf5800a69f9', 'c8bc8118-44a1-4e80-9733-65df47bfaa05', 'storage/Product/c8bc8118-44a1-4e80-9733-65df47bfaa05/QhTIMWv1cHhHV1e3.webp', 1, 1, '2022-10-13 11:37:15', '2022-10-13 11:37:15'),
('8cae88e4-a21e-47f4-b948-ef18a7038dd5', '7396a8b9-53b2-4dea-b9f8-48b8feea8634', 'storage/Product/7396a8b9-53b2-4dea-b9f8-48b8feea8634/JXOBeFnojCxYSjMp.jpg', 1, 1, '2022-10-07 01:19:26', '2022-10-07 01:19:26'),
('9865f273-f8ad-49f4-8229-96132f954ed3', '422c2cdc-8e4c-4741-8a5d-acaa5b3d8545', 'storage/Product/422c2cdc-8e4c-4741-8a5d-acaa5b3d8545/wVxhPcFFXwiDepBS.jpg', 1, 1, '2022-10-07 01:30:00', '2022-10-07 01:30:00'),
('9abb1c96-0cc4-47e0-8c23-a4effd9dd556', 'fc508b93-3742-4bad-b5ea-ec8dd53acd0c', 'storage/Product/fc508b93-3742-4bad-b5ea-ec8dd53acd0c/EUi1nwh7u32ugL1l.jpg', 1, 1, '2022-10-07 01:15:44', '2022-10-07 01:15:44'),
('9f85be2e-ecf9-4db8-b667-bac9fa5b3988', '21799c8b-d8a9-490a-8366-cca9f1c737b7', 'storage/Product/21799c8b-d8a9-490a-8366-cca9f1c737b7/3g6hcYQEGlptbqXP.webp', 1, 1, '2022-10-13 11:39:13', '2022-10-13 11:39:13'),
('a5194fcd-d7cd-4873-99f4-7f945871a020', 'ebafdac7-2e65-4dab-b8cd-4332cf21b2b6', 'storage/Product/ebafdac7-2e65-4dab-b8cd-4332cf21b2b6/2bIVYF26lKuLK4cB.webp', 1, 1, '2022-10-06 05:16:13', '2022-10-06 05:16:13'),
('afe382a9-a154-47aa-8fe0-e4bccb592848', '77c3f679-fa7f-4a11-b1b0-b5d5e85109d4', 'storage/Product/77c3f679-fa7f-4a11-b1b0-b5d5e85109d4/UO8EywmJHBYR1uoV.webp', 1, 1, '2022-10-13 10:15:39', '2022-10-13 10:15:39'),
('bb8c48e7-f6b9-4b5b-ad13-fd59ca8e4a29', 'b981f2c3-8dc9-4509-af1e-50f478db181c', 'storage/Product/b981f2c3-8dc9-4509-af1e-50f478db181c/1zdrJVyEl9wmb15W.webp', 1, 1, '2022-10-13 04:59:38', '2022-10-13 04:59:38'),
('c392749b-f939-4d98-8375-4eea3c1d65f0', '10ef3182-8f37-4cf9-837c-b0ca1ecec780', 'storage/Product/10ef3182-8f37-4cf9-837c-b0ca1ecec780/Z0mVpn6a66793u7M.webp', 1, 1, '2022-10-13 10:07:34', '2022-10-13 10:07:34'),
('c5e9e45f-d42a-42b5-9a6b-2b08ac6c188b', 'e5f41045-893f-4c80-9b70-d0ec8a725872', 'storage/Product/e5f41045-893f-4c80-9b70-d0ec8a725872/DlTUOjpoNIx8qQ4Q.jpg', 1, 1, '2022-10-07 01:07:27', '2022-10-07 01:07:27'),
('c7a7ea9c-2c20-4b00-8751-f1ad65b636c6', '4f9c4253-6585-408d-8e71-7cfa1eddd68d', 'storage/Product/4f9c4253-6585-408d-8e71-7cfa1eddd68d/EVoxt3aXFSkFGiwF.webp', 1, 1, '2022-10-13 11:20:15', '2022-10-13 11:20:15'),
('cc5fe020-b2c3-4caa-b0d0-965088bbdfa7', 'cc7926a2-e9c7-4f02-833b-9462e2a2f097', 'storage/Product/cc7926a2-e9c7-4f02-833b-9462e2a2f097/Ml7lbtuWwx2Hd7Iu.webp', 1, 1, '2022-10-13 10:11:17', '2022-10-13 10:11:17'),
('cc69c25f-2dac-4729-ae01-69c9d241554b', '72be29c1-cfa1-4417-9641-e8c78b9c16c3', 'storage/Product/72be29c1-cfa1-4417-9641-e8c78b9c16c3/f19ZIJDVrXgdQKIP.jpg', 1, 1, '2022-10-07 01:09:42', '2022-10-07 01:09:42'),
('d0b5001b-eb7e-499c-bdc5-a7c1b92e499d', '8bcbef44-7ead-4bf2-b8eb-474e8f2e4ec9', 'storage/Product/8bcbef44-7ead-4bf2-b8eb-474e8f2e4ec9/1lqcB7hyJuL2LDrL.jpg', 1, 1, '2022-10-10 05:37:57', '2022-10-10 05:37:57'),
('d256810b-d432-4bb1-97be-0c26932710f4', '86677231-abeb-4104-b8c6-645dd9d19675', 'storage/Product/86677231-abeb-4104-b8c6-645dd9d19675/NTsKIDzZNPpC0X0Z.jpg', 1, 1, '2022-10-07 01:04:48', '2022-10-07 01:04:48'),
('d9bd644a-c712-43d9-ab8e-f25e970b7878', '57f4dda1-740e-4a15-a723-231757f04624', 'storage/Product/57f4dda1-740e-4a15-a723-231757f04624/d2jlPaNEmPej5yCL.webp', 1, 1, '2022-10-13 05:26:09', '2022-10-13 05:26:09'),
('e4f574fd-c785-4f7a-98f1-a5e109c70119', '5f721c5a-4dd7-495e-9695-316b30f7e9f7', 'storage/Product/5f721c5a-4dd7-495e-9695-316b30f7e9f7/iiChuBMU0zGAG01Q.webp', 1, 1, '2022-10-13 05:35:46', '2022-10-13 05:35:46'),
('e8d983cd-7780-47b6-8c89-7016cce586e7', 'b24d406f-7cae-4008-bf02-92af64002a17', 'storage/Product/b24d406f-7cae-4008-bf02-92af64002a17/7KWZ6Qao4n06hDo1.webp', 1, 1, '2022-10-13 10:02:08', '2022-10-13 10:02:08'),
('f0c2af6d-61dd-4f78-a159-7e7ccccab52c', 'c021f9d9-2b9a-476b-a4fb-86bab3778335', 'storage/Product/c021f9d9-2b9a-476b-a4fb-86bab3778335/AtvahqQBo6z2kiDz.webp', 1, 1, '2022-10-13 11:15:46', '2022-10-13 11:15:46'),
('faeda58f-80a2-4952-9371-5096d1e3b80b', '00d6d406-630e-4bd3-ab2f-bfbafc8fcad2', 'storage/Product/00d6d406-630e-4bd3-ab2f-bfbafc8fcad2/f00BNL97kN32Ua34.jpg', 1, 1, '2022-10-07 00:59:55', '2022-10-07 00:59:55');

-- --------------------------------------------------------

--
-- Table structure for table `product_extras`
--

CREATE TABLE `product_extras` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`data`)),
  `status` smallint(5) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_extras`
--

INSERT INTO `product_extras` (`id`, `type`, `name`, `data`, `status`, `created_at`, `updated_at`) VALUES
('04843e5f-6fa0-4c40-8f59-901219cc9337', 0, NULL, '{\"product_id\":\"415a9816-64fd-459d-b3ec-2652f0649f1e\",\"user_id\":\"4af5c0c6-634b-465f-814c-618af5beba55\",\"count\":1}', 0, '2022-10-11 09:12:36', '2022-10-11 09:12:36'),
('a3b358c4-6b0c-4fe4-82d6-7a91ec01f762', 0, NULL, '{\"product_id\":\"ebafdac7-2e65-4dab-b8cd-4332cf21b2b6\",\"user_id\":\"20a8de0b-1d94-441c-8f5c-fb011366fef8\",\"count\":1}', 0, '2022-10-11 20:01:39', '2022-10-11 20:01:39'),
('f77bd7e4-829a-49d8-aaed-302a095de357', 0, NULL, '{\"product_id\":\"32fccbf5-1a1c-4f3a-93d9-42ed8e2a4f98\",\"user_id\":\"4af5c0c6-634b-465f-814c-618af5beba55\",\"count\":1}', 0, '2022-10-11 09:25:00', '2022-10-11 09:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` bigint(20) UNSIGNED NOT NULL,
  `type` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phno`, `usertype`, `type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
('07035cfa-db99-45aa-8868-895369238951', 'tempQg8hPCVKg0', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-28 05:23:11', '2022-10-28 05:23:11'),
('0b7613d1-f679-4949-a35a-e861c88c86e1', 'tempbVnGqHJCot', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-31 04:30:55', '2022-10-31 04:30:55'),
('20a8de0b-1d94-441c-8f5c-fb011366fef8', 'tempicw4XZSz3B', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-11 18:07:32', '2022-10-11 18:07:32'),
('2dd71e25-7e9a-4eb3-9f58-8ef88cef5c26', 'tempZSRl8xFjaY', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-06 23:07:56', '2022-10-06 23:07:56'),
('3cf1cebd-5e32-487d-a6ac-599934690c53', 'tempsfZPJsfwjk', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-06 05:13:38', '2022-10-06 05:13:38'),
('4af5c0c6-634b-465f-814c-618af5beba55', 'temps9B6w3AO8U', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-11 08:27:44', '2022-10-11 08:27:44'),
('6398d013-73e2-4548-89a1-25c3bf610db0', 'temp2oGo0RYuk9', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-10 04:09:24', '2022-10-10 04:09:24'),
('74fc7bab-e9ab-48a3-b8ef-a0f45b2252d6', 'tempn9eqpUMWv7', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-04 22:47:30', '2022-10-04 22:47:30'),
('7df64a89-5a66-4fba-90b3-e30b7f1610b0', 'tempOm8RqtI35M', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-27 02:35:04', '2022-10-27 02:35:04'),
('9996ce76-814b-4000-81c4-33b1210a06e5', 'tempIOUyWk4RD2', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-05 03:17:25', '2022-10-05 03:17:25'),
('a539b2db-c1aa-456b-87f1-a78c2678e7f7', 'tempvLMoAwGyb5', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-13 04:26:27', '2022-10-13 04:26:27'),
('abb03daa-2333-4365-8c68-84ea6525b76e', 'tempaTiCqzoanh', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-07 07:04:31', '2022-10-07 07:04:31'),
('cfa270a3-61e8-4a74-bf12-f591865d7c9a', 'tempnqAKpI2TAm', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-29 04:56:34', '2022-10-29 04:56:34'),
('e0fde3f3-8475-4c8b-a213-a862b31b6b64', 'tempphsX7CkjGs', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-10 23:22:43', '2022-10-10 23:22:43'),
('ec98fecc-472a-406f-a8e0-31332c2152bb', 'tempLv9yJnHCP5', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-13 09:06:25', '2022-10-13 09:06:25'),
('fc84efc8-6806-49f7-bd8f-9e62cf7cc62e', 'tempvqiK5BMGQ8', NULL, NULL, NULL, NULL, 0, 0, 1, NULL, '2022-10-05 06:33:39', '2022-10-05 06:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_images`
--
ALTER TABLE `products_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_extras`
--
ALTER TABLE `product_extras`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
