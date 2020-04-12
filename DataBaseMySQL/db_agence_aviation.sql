-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2018 a las 06:18:56
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_agence_aviation`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Continuous improvement', 'continuous-improvement', 'improvement.jpg', NULL, NULL),
(2, 'Maintenance', 'maintenance', 'maintenance.jpg', NULL, NULL),
(3, 'Safety Bis Defendor', 'safety-bis-defendor', 'safety.jpg', NULL, NULL),
(4, 'Supply Chain', 'supply-chain', 'supplychain.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2018_10_31_143922_create_categories_table', 1),
(40, '2018_10_31_144113_create_projects_table', 1),
(41, '2018_10_31_144145_create_images_table', 1),
(42, '2018_10_31_144215_create_videos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'LATAM Academy (OLT – Online Training)', 'Online training platform to strengthen the knowledge, skills, attitudes and practices of teams of subnational LATAM officials (municipalities, departments, states and provinces) to lead processes to improve management for results and achieve greater efficiency and effectiveness at airports in Latin America and the Caribbean.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(2, 1, 'SGM – Sistema de Gestion de Manuales', 'Aircraft Manuals Management System allows you to manage the information in the cloud and can access your computer or other devices.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(3, 2, 'Aseos', 'The Cabin Toilet System allows the administration of airplanes, fleets, types and conditions of toilets among others that contribute to the realization and management of cabin production. By means of a dashboard it is possible to visualize the statuses of the activities in real time, to verify the critical items, to send reports and to carry out the planned toilets massively.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(4, 2, 'CASS (Continuous Analysis and Surveillance System)', 'The system aims to optimize and control the cases of aircraft delays and AOGs, managing action plans to solve them and looking for medium-term action plans to correct errors that are repeated over time and minimize the operational impact on the company. In addition, it incorporates massive loaders that use the Excel sheets prepared by the analysts, in order to consolidate quickly and safely the delays of the day or the weekend.\n                              Finally, it incorporates the possibility that the user himself generated dynamically and in real time reports in order to consolidate aggregate views for the generation of KPIs (key perfomance indexes) and to monitor the global management of aircraft and AOGs delays.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(5, 2, 'HCC Estacionamientos', 'Slate that displays the arrival and departure times, indicates the position of the plane in the yard and at what time it must be unoccupied, records the movements of the aircraft in the yard, allows editing the toilet fields among other functions.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(6, 2, 'Hit List', 'Project of a cabin impeccability system. Through this system it is sought to evaluate the cabins of all aircraft in the LATAM fleet and repair the damages found through maintenance work.\n                                The Hit List Model gives visibility to the image state of the cabins of our fleet for later management with Maintenance and Product.  \n                                Monthly inspections of cabin impeccability are carried out, generating KPIs that show the percentage of elements without failure in a cabin. Reports that support the chain of damage management with Maintenance.\n                                The measurements consist of the aesthetic inspection of cabin elements where the state of the elements that impact the passenger\'s travel experience is evaluated.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(7, 2, 'Maint Control', 'The LAN Maint Control project aims to track the maintenance work during its execution.\n            Through this follow-up we can have real-time updates on scheduling, resource usage, problem management, visual management, finding opportunities, and reassigning tasks and/or resources.', 'contact-breadcumb-bg.jpg', NULL, NULL),
(8, 4, 'AOG', 'The proposed system will locate and verify aircraft on ground, identify the downtime and its location. The main objective is help users to standardize and optimize the search for parts, benefiting them with logistical processes, reducing the time for obtaining the part and consequently the time of the aircraft on ground.\n                                This system provide a solution that will allow the company:\n                                •	Standardization\n                                •	Management control and relevant reports\n                                •	Performance Management\n                                •	Reliable shift-transfer information\n                                •	Logistic network availability', 'contact-breadcumb-bg.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_foreign` (`category_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_project_id_foreign` (`project_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
