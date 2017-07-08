-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Jul 2017 um 12:57
-- Server-Version: 5.7.14
-- PHP-Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `m151lb`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `autos`
--

CREATE TABLE `autos` (
  `autoId` int(10) UNSIGNED NOT NULL,
  `marke` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modell` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `autos`
--

INSERT INTO `autos` (`autoId`, `marke`, `modell`, `hp`) VALUES
(1, 'WtDhGm6BZl', 'WrDUrMJUUH', '101'),
(2, 'C3Xai3tPTW', 'rk3b7m0r6J', '117'),
(3, 't4GZv3dkBW', '7NcQioAGzR', '155'),
(4, 'qehwhsGqXb', '38Go4Ox7uD', '368'),
(5, 'O6rkGhjEqb', 'TepRWDkGND', '223'),
(6, 'dmIC9O17ls', 'fGFcJk9LR0', '346'),
(7, '8rr5rXPyH3', 'W5rqejnTTM', '181'),
(8, 'XIY4u4ebkd', 'cNNd2LBduT', '445'),
(9, 'c6Tpz7iJIx', 'tP9rN16J55', '228'),
(10, 'jolpD2tNVs', 'DYtpBgML52', '90'),
(11, 'OXKXGFlQOg', 'FFfHqNSP8W', '118');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_000000_create_autos_table', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Armend Ponik', 'armend02@hotmail.com', '$2y$10$M3.pWL.uSnd93vFnj6wQuuBkZ8VAm3SAkjU/r/VzHQdI9aHZkv0rG', 'NMktlLb85qF069lggqi2VHJt4f64NWOZUFq2wXFFa9QzEUJkzDRgCzb0FW9s', '2017-07-03 12:37:05', '2017-07-03 12:37:05'),
(2, 'Dimi', 'dimi@gmail.com', '$2y$10$KuajKKWU3lyb2OrvNckqeOluYKXsZWtb.r0XF4JD2qnbyPqvng1qm', 'TOMtXetbfCNWBzDb5r5WmhwqoUpJxo8Vdc2X1SIOxBKuqjiSOyaYT38tILze', '2017-07-03 12:38:22', '2017-07-03 12:38:22'),
(3, 'Kay', 'kay@ahnig.com', '$2y$10$j5w0iSWSItvNRPgp75eTvOO.5mi5BfJZCrwcCNe1FIh5QSzrLshY.', NULL, '2017-07-08 10:43:46', '2017-07-08 10:43:46');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`autoId`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `autos`
--
ALTER TABLE `autos`
  MODIFY `autoId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
