-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 25-04-2023 a las 19:14:50
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `loewenzahn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `genre_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`genre_id`, `language_id`, `word`, `name`) VALUES
(1, 1, 'Der', 'masculine'),
(2, 1, 'Die', 'feminine'),
(3, 1, 'Das', 'neuter'),
(4, 2, 'El', 'masculine'),
(5, 2, 'La', 'feminine');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `language_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `long_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`language_id`, `long_name`, `short_name`) VALUES
(1, 'German', 'de'),
(2, 'Spanish', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2022_03_23_181945_create_nouns_de_table', 11),
(6, '2022_03_23_182853_create_genres_table', 6),
(5, '2022_03_23_182930_create_languages_table', 5),
(39, '2022_03_23_190119_create_nouns_es_table', 12),
(42, '2022_04_29_124509_create_verbs_de_table', 13),
(43, '2022_04_29_124518_create_verbs_es_table', 14),
(33, '2022_03_22_180029_create_sessions_table', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nouns_de`
--

DROP TABLE IF EXISTS `nouns_de`;
CREATE TABLE IF NOT EXISTS `nouns_de` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plural` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nouns_de`
--

INSERT INTO `nouns_de` (`id`, `language_id`, `genre_id`, `word`, `plural`, `comment`) VALUES
(1, 1, 1, 'Tisch', 'Tische', NULL),
(2, 1, 2, 'Völlerei', 'Völlereien', NULL),
(3, 1, 3, 'Geschenk', 'Geschenke', NULL),
(4, 1, 1, 'Zorn', '-', 'Test'),
(5, 1, 2, 'Küche', 'Küchen', NULL),
(6, 1, 3, 'Röntgen', '-', NULL),
(7, 1, 1, 'Rasen', 'Rasen', NULL),
(8, 1, 1, 'Entwurf', 'Entwürfe', NULL),
(9, 1, 2, 'Fahne', 'Fahnen', NULL),
(10, 1, 1, 'Schiffbruch', 'Schiffbrüche', NULL),
(11, 1, 1, 'Taugenichts', 'Taugenichtse', NULL),
(12, 1, 2, 'Spur', 'Spuren', NULL),
(13, 1, 2, 'Buße', 'Bußen', NULL),
(14, 1, 2, 'Rücksicht', 'Rücksichten', NULL),
(15, 1, 3, 'Gummi', 'Gummis', NULL),
(16, 1, 3, 'Mal', 'Male', NULL),
(17, 1, 1, 'Schnee', '-', NULL),
(18, 1, 2, 'Wettervorhersage', 'Wettervorhersagen', NULL),
(19, 1, 3, 'Mäppchen', 'Mäppchen', NULL),
(20, 1, 1, 'Norden', '-', 'Himmelsrichtung'),
(21, 1, 1, 'Süden', '-', 'Himmelsrichtung'),
(22, 1, 1, 'Osten', '-', 'Himmelsrichtung'),
(23, 1, 1, 'Westen', '-', 'Himmelsrichtung'),
(24, 1, 1, 'Mensch', 'Menschen', NULL),
(25, 1, 1, 'Mitmensch', 'Mitmenschen', 'biblisch'),
(26, 1, 1, 'Rucksack', 'Rucksäcke', NULL),
(27, 1, 1, 'Rücken', 'Rücken', 'Körperteil'),
(28, 1, 1, 'Nacken', 'Nacken', 'Körperteil'),
(29, 1, 1, 'Knochen', 'Knochen', 'Körperteil'),
(30, 1, 2, 'Hand', 'Hände', 'Körperteil'),
(31, 1, 2, 'Macht', 'Mächte', NULL),
(32, 1, 1, 'Flug', 'Flüge', NULL),
(33, 1, 1, 'Fluss', 'Flüsse', NULL),
(34, 1, 3, 'Formular', 'Formulare', NULL),
(35, 1, 2, 'Gabel', 'Gabeln', NULL),
(36, 1, 1, 'Löffel', 'Löffel', NULL),
(37, 1, 3, 'Messer', 'Messer', NULL),
(38, 1, 3, 'Gerät', 'Geräte', NULL),
(39, 1, 1, 'Apparat', 'Apparate', NULL),
(40, 1, 1, 'Fuß', 'Fuße', NULL),
(41, 1, 2, 'Unterstützung', 'Unterstützungen', NULL),
(42, 1, 3, 'Gegenteil', 'Gegenteile', NULL),
(43, 1, 2, 'Geige', 'Geigen', NULL),
(44, 1, 3, 'Klavier', 'Klaviere', NULL),
(45, 1, 3, 'Aussehen', '-', NULL),
(46, 1, 1, 'Staub', 'Staube', NULL),
(47, 1, 2, 'Blase', 'Blasen', NULL),
(48, 1, 2, 'Leber', 'Lebern', NULL),
(49, 1, 3, 'Herz', 'Herzen', NULL),
(50, 1, 1, 'Po', 'Pos', NULL),
(51, 1, 3, 'Gemälde', 'Gemälde', NULL),
(52, 1, 1, 'Plan', 'Pläne', NULL),
(53, 1, 1, 'Saal', 'Säle', NULL),
(54, 1, 3, 'Gehirn', 'Gehirne', NULL),
(55, 1, 3, 'Elend', '-', NULL),
(56, 1, 1, 'Vorverkauf', 'Vorverkäufe', NULL),
(57, 1, 2, 'Gebühr', 'Gebühren', NULL),
(58, 1, 3, 'Geschäft', 'Geschäfte', NULL),
(59, 1, 1, 'Laden', 'Läden', NULL),
(60, 1, 2, 'Dehnung', 'Dehnungen', NULL),
(61, 1, 2, 'Atmung', 'Atmungen', NULL),
(62, 1, 1, 'Bereich', 'Bereiche', NULL),
(63, 1, 2, 'Spaßbremse', 'Spaßbremsen', NULL),
(64, 1, 3, 'Verzeichnis', 'Verzeichnisse', NULL),
(65, 1, 2, 'Voraussetzung', 'Voraussetzungen', NULL),
(66, 1, 1, 'Abfall', 'Abfälle', NULL),
(67, 1, 2, 'Verzweiflung', 'Verzweiflungen', NULL),
(68, 1, 1, 'Sinn', 'Sinne', NULL),
(69, 1, 1, 'Nachweis', 'Nachweise', NULL),
(70, 1, 2, 'Würdigung', 'Würdigungen', NULL),
(71, 1, 1, 'Strafprozess', 'Strafprozesse', NULL),
(72, 1, 2, 'Verteidigung', 'Verteidigungen', NULL),
(73, 1, 2, 'Toleranz', 'Toleranzen', NULL),
(74, 1, 2, 'Vermüllung', 'Vermüllungen', NULL),
(75, 1, 3, 'Gewürz', 'Gewürze', NULL),
(76, 1, 2, 'Tour', 'Touren', NULL),
(77, 1, 2, 'Wollust', 'Wollüste', NULL),
(78, 1, 2, 'Weltmeisterschaft', 'Weltmeisterschaften', NULL),
(79, 1, 2, 'Gnade', 'Gnaden', 'biblisch'),
(80, 1, 2, 'Torheit', 'Torheiten', 'biblisch'),
(81, 1, 1, 'Ketzer', 'Ketzer', 'biblisch'),
(82, 1, 2, 'Ketzerei', 'Ketzereien', 'biblisch'),
(83, 1, 3, 'Gebüsch', 'Gebüsche', NULL),
(84, 1, 3, 'Nest', 'Nester', NULL),
(85, 1, 2, 'Tatkraft', 'Tatkräfte', NULL),
(86, 1, 2, 'Effizienz', 'Effizienzen', NULL),
(87, 1, 2, 'Egge', 'Eggen', NULL),
(88, 1, 1, 'Meißel', 'Meißel', NULL),
(89, 1, 3, 'Gedicht', 'Gedichte', NULL),
(90, 1, 1, 'Auftritt', 'Auftritte', NULL),
(91, 1, 2, 'Klaue', 'Klauen', NULL),
(92, 1, 2, 'Lyrik', 'Lyriken', NULL),
(93, 1, 3, 'Fazit', 'Fazits', NULL),
(94, 1, 3, 'Präludium', 'Präludien', NULL),
(95, 1, 1, 'Specht', 'Spechte', NULL),
(96, 1, 2, 'Volksbezeichnung', 'Volksbezeichnungen', NULL),
(97, 1, 2, 'Fresse', 'Fressen', NULL),
(98, 1, 1, 'Hai', 'Haie', NULL),
(99, 1, 1, 'Talk', 'Talks', 'Anglizismus'),
(100, 1, 2, 'Nachricht', 'Nachrichten', NULL),
(101, 1, 3, 'Äußere', '-', NULL),
(102, 1, 1, 'Schuster', 'Schuster', NULL),
(103, 1, 3, 'Verhör', 'Verhöre', NULL),
(104, 1, 1, 'Monolog', 'Monologe', NULL),
(105, 1, 1, 'Daumen', 'Daumen', NULL),
(106, 1, 1, 'Lebenslauf', 'Lebensläufe', NULL),
(107, 1, 1, 'Adressat', 'Adressaten', NULL),
(108, 1, 2, 'Show', 'Shows', 'Anglizismus'),
(109, 1, 1, 'Knast', 'Knäste', 'Umgangssprache'),
(110, 1, 1, 'Staatsanwalt', 'Staatsanwälte', NULL),
(111, 1, 1, 'Kessel', 'Kessel', NULL),
(112, 1, 1, 'Kopfgeldjäger', 'Kopfgeldjäger', NULL),
(113, 1, 3, 'Kopfgeld', 'Kopfgelder', NULL),
(114, 1, 1, 'Verrat', '-', NULL),
(115, 1, 2, 'Rinde', 'Rinden', NULL),
(116, 1, 2, 'Kanne', 'Kannen', NULL),
(117, 1, 2, 'Möhre', 'Möhren', NULL),
(118, 1, 1, 'Schall', 'Schälle', NULL),
(119, 1, 3, 'Steinzeug', 'Steinzeuge', NULL),
(120, 1, 1, 'Zaun', 'Zäune', NULL),
(121, 1, 1, 'Hubschrauber', 'Hubschrauber', NULL),
(122, 1, 2, 'Schraube', 'Schrauben', NULL),
(123, 1, 3, 'Zubehör', 'Zubehöre', NULL),
(124, 1, 2, 'Form', 'Formen', 'Anglizismus'),
(125, 1, 2, 'Gestalt', 'Gestalten', NULL),
(126, 1, 1, 'Speicher', 'Speicher', NULL),
(127, 1, 1, 'Code', 'Codes', 'Anglizismus'),
(128, 1, 2, 'Pleite', 'Pleiten', 'Pleite gehen'),
(129, 1, 2, 'Beerdigung', 'Beerdigungen', NULL),
(130, 1, 2, 'Lähmung', 'Lähmungen', NULL),
(131, 1, 1, 'Weltuntergang', '-', NULL),
(132, 1, 2, 'Kehle', 'Kehlen', NULL),
(133, 1, 1, 'Standard', 'Standards', 'Anglizismus'),
(134, 1, 1, 'Widerstand', 'Widerstände', NULL),
(135, 1, 3, 'Gedächtnis', 'Gedächtnisse', NULL),
(136, 1, 3, 'Sieb', 'Siebe', NULL),
(137, 1, 3, 'Weib', 'Weiber', 'Umgangssprache'),
(138, 1, 1, 'Drachen', 'Drachen', NULL),
(139, 1, 1, 'Eingriff', 'Eingriffe', NULL),
(140, 1, 2, 'Schuld', '-', NULL),
(141, 1, 1, 'Tauschhandel', '-', NULL),
(142, 1, 1, 'Haferschleim', 'Haferschleime', NULL),
(143, 1, 1, 'Hafer', 'Hafer', NULL),
(144, 1, 3, 'Umfeld', 'Umfelder', NULL),
(145, 1, 2, 'Notwehr', '-', NULL),
(146, 1, 2, 'Ebene', 'Ebenen', NULL),
(147, 1, 2, 'Nachbarschaft', 'Nachbarschaften', NULL),
(148, 1, 2, 'Selbstsucht', 'Selbstsüchte', NULL),
(149, 1, 1, 'Nussknacker', 'Nussknacker', NULL),
(150, 1, 2, 'Auszeichnung', 'Auszeichnungen', NULL),
(151, 1, 2, 'Verleihung', 'Verleihungen', NULL),
(152, 1, 1, 'Mehrwert', 'Mehrwerte', NULL),
(153, 1, 2, 'Strahlkraft', '-', NULL),
(154, 1, 1, 'Empfang', 'Empfänge', NULL),
(155, 1, 2, 'Aufbruchsstimmung', 'Aufbruchsstimmungen', NULL),
(156, 1, 2, 'Schräglage', 'Schräglagen', NULL),
(157, 1, 3, 'Brett', 'Bretter', NULL),
(158, 1, 3, 'System', 'Systeme', NULL),
(159, 1, 1, 'Kanal', 'Kanäle', NULL),
(160, 1, 2, 'Ziege', 'Ziegen', NULL),
(161, 1, 2, 'Behauptung', 'Behauptungen', NULL),
(162, 1, 1, 'Schund', '-', NULL),
(163, 1, 2, 'Lawine', 'Lawinen', NULL),
(164, 1, 2, 'Zauberkraft', 'Zauberkräfte', NULL),
(165, 1, 2, 'Vervollkommnung', 'Vervollkommnungen', NULL),
(166, 1, 1, 'Reifen', 'Reifen', NULL),
(167, 1, 2, 'Streife', 'Streifen', NULL),
(168, 1, 2, 'Rache', '-', NULL),
(169, 1, 1, 'Einsiedler', 'Einsiedler', NULL),
(170, 1, 2, 'Wandlung', 'Wandlungen', NULL),
(171, 1, 2, 'Gruft', 'Grüfte', NULL),
(172, 1, 2, 'Aussicht', 'Aussichten', NULL),
(173, 1, 2, 'Pflaume', 'Pflaumen', NULL),
(174, 1, 3, 'Kissen', 'Kissen', NULL),
(175, 1, 1, 'Vorhang', 'Vorhänge', NULL),
(176, 1, 2, 'Neugier', '-', NULL),
(177, 1, 1, 'Sicherheitsgurt', 'Sicherheitsgurte', NULL),
(178, 1, 2, 'Katzenstreu', 'Katzenstreuen', NULL),
(179, 1, 3, 'Stroh', '-', NULL),
(180, 1, 3, 'Sortiment', 'Sortimente', NULL),
(181, 1, 2, 'Hinrichtung', 'Hinrichtungen', NULL),
(182, 1, 1, 'Schreck', 'Schrecke', NULL),
(183, 1, 1, 'Hörsinn', '', 'fünf Sinne'),
(184, 1, 1, 'Geschmacksinn', NULL, 'fünf Sinne'),
(185, 1, 1, 'Tastsinn', NULL, 'fünf Sinne'),
(186, 1, 1, 'Geruchsinn', NULL, 'fünf Sinne'),
(187, 1, 1, 'Sehsinn', NULL, 'fünf Sinne'),
(188, 1, 1, 'Verdacht', 'Verdachte', NULL),
(189, 1, 2, 'Gier', NULL, NULL),
(190, 1, 1, 'Hass', NULL, NULL),
(191, 1, 1, 'Bart', 'Bärte', NULL),
(192, 1, 2, 'Gefahr', 'Gefahren', NULL),
(193, 1, 2, 'Leitung', 'Leitungen', NULL),
(194, 1, 2, 'Thermoskanne', 'Thermoskannen', NULL),
(195, 1, 1, 'Vorrang', NULL, NULL),
(196, 1, 1, 'Verbleib', NULL, NULL),
(197, 1, 1, 'Zweifel', 'Zweifel', NULL),
(198, 1, 2, 'Ermordung', 'Ermordungen', NULL),
(199, 1, 3, 'Gefäß', 'Gefäße', NULL),
(200, 1, 2, 'Scheidung', 'Scheidungen', NULL),
(201, 1, 1, 'Söldner', 'Söldner', NULL),
(202, 1, 3, 'Anlocken', NULL, NULL),
(203, 1, 2, 'Trauer', NULL, NULL),
(204, 1, 2, 'Pfote', 'Pfoten', NULL),
(205, 1, 1, 'Schwanz', 'Schwänze', NULL),
(206, 1, 2, 'Zutat', 'Zutaten', NULL),
(207, 1, 2, 'Molke', NULL, NULL),
(208, 1, 1, 'Grill', 'Grills', NULL),
(209, 1, 2, 'Alufolie', 'Alufolien', NULL),
(210, 1, 2, 'Säure', 'Säuren', NULL),
(211, 1, 1, 'Edelstahl', 'Edelstähle', NULL),
(212, 1, 2, 'Karibik', NULL, NULL),
(213, 1, 3, 'Wahrzeichen', 'Wahrzeichen', NULL),
(214, 1, 3, 'Plakat', 'Plakate', NULL),
(215, 1, 1, 'Kampfstoff', 'Kampfstoffe', NULL),
(216, 1, 2, 'Magd', 'Mägde', NULL),
(217, 1, 1, 'Neid', NULL, NULL),
(218, 1, 1, 'Apostel', 'Apostel', NULL),
(219, 1, 1, 'Bischof', 'Bischöfe', NULL),
(220, 1, 1, 'Amtsbruder', 'Amtsbrüder', 'religiös'),
(221, 1, 2, 'Axt', 'Äxte', NULL),
(222, 1, 2, 'Oblate', 'Oblaten', NULL),
(223, 1, 1, 'Beter', 'Beter', NULL),
(224, 1, 1, 'Schädel', 'Schädel', NULL),
(225, 1, 1, 'Mord', 'Morde', NULL),
(226, 1, 1, 'Eremit', 'Eremiten', NULL),
(227, 1, 1, 'Betroffene', 'Betroffenen', NULL),
(228, 1, 2, 'Arthrose', NULL, NULL),
(229, 1, 2, 'Unruhe', 'Unruhen', NULL),
(230, 1, 1, 'Belag', 'Beläge', NULL),
(231, 1, 2, 'Gegend', 'Gegenden', NULL),
(232, 1, 2, 'Gerberei', 'Gerbereien', NULL),
(233, 1, 3, 'Gewerbe', 'Gewerbe', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nouns_es`
--

DROP TABLE IF EXISTS `nouns_es`;
CREATE TABLE IF NOT EXISTS `nouns_es` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plural` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=234 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `nouns_es`
--

INSERT INTO `nouns_es` (`id`, `language_id`, `genre_id`, `word`, `plural`, `comment`) VALUES
(1, 2, 5, 'mesa', 'mesas', NULL),
(4, 2, 5, 'ira', 'iras', NULL),
(2, 2, 5, 'gula', 'gulas', NULL),
(3, 2, 4, 'regalo', 'regalos', NULL),
(5, 2, 5, 'cocina', 'cocinas', NULL),
(6, 2, 5, 'radiografía', 'radiografías', NULL),
(7, 2, 4, 'césped', 'céspedes', NULL),
(8, 2, 4, 'bosquejo', 'bosquejos', NULL),
(9, 2, 5, 'bandera', 'banderas', NULL),
(10, 2, 4, 'naufragio', 'naufragios', NULL),
(11, 2, 4, 'haragán', 'haraganes', NULL),
(12, 2, 5, 'pista', 'pistas', NULL),
(13, 2, 5, 'penitencia', 'penitencias', NULL),
(14, 2, 5, 'consideración', 'consideraciones', NULL),
(15, 2, 5, 'goma', 'gomas', NULL),
(16, 2, 5, 'vez', 'veces', NULL),
(17, 2, 5, 'nieve', 'nieves', NULL),
(30, 2, 5, 'mano', 'manos', 'cuerpo humano'),
(29, 2, 4, 'hueso', 'huesos', 'cuerpo humano'),
(28, 2, 5, 'nuca', 'nucas', 'cuerpo humano'),
(27, 2, 5, 'espalda', 'espaldas', 'cuerpo humano'),
(26, 2, 5, 'mochila', 'mochilas', NULL),
(25, 2, 4, 'prójimo', 'prójimos', 'biblia'),
(24, 2, 4, 'humano', 'humanos', NULL),
(23, 2, 4, 'oeste', 'oestes', 'punto cardinal'),
(22, 2, 4, 'este', 'estes', 'punto cardinal'),
(21, 2, 4, 'sur', 'sures', 'punto cardinal'),
(20, 2, 4, 'norte', 'nortes', 'punto cardinal'),
(19, 2, 4, 'estuche', 'estuches', NULL),
(18, 2, 4, 'pronóstico del tiempo', 'pronósticos del tiempo', NULL),
(31, 2, 4, 'poder', 'poderes', NULL),
(32, 2, 4, 'vuelo', 'vuelos', NULL),
(33, 2, 4, 'río', 'ríos', NULL),
(34, 2, 4, 'formulario', 'formularios', NULL),
(35, 2, 4, 'tenedor', 'tenedores', NULL),
(36, 2, 5, 'cuchara', 'cucharas', NULL),
(37, 2, 4, 'cuchillo', 'cuchillos', NULL),
(38, 2, 4, 'aparato', 'aparatos', NULL),
(39, 2, 4, 'aparato', 'aparatos', NULL),
(40, 2, 4, 'pie', 'pies', NULL),
(41, 2, 4, 'apoyo', 'apoyos', NULL),
(42, 2, 4, 'contrario', 'contrarios', NULL),
(43, 2, 4, 'violín', 'violines', NULL),
(44, 2, 4, 'piano', 'pianos', NULL),
(45, 2, 5, 'Apariencia', 'Apariencias', NULL),
(46, 2, 4, 'polvo', 'polvos', NULL),
(47, 2, 5, 'burbuja', 'burbujas', NULL),
(48, 2, 4, 'hígado', 'hígados', NULL),
(49, 2, 4, 'corazón', 'corazones', NULL),
(50, 2, 5, 'nalga', 'nalgas', NULL),
(51, 2, 5, 'pintura', 'pinturas', NULL),
(52, 2, 4, 'plan', 'planes', NULL),
(53, 2, 5, 'sala', 'salas', NULL),
(54, 2, 4, 'cerebro', 'cerebros', NULL),
(55, 2, 5, 'miseria', 'miserias', NULL),
(56, 2, 5, 'preventa', 'preventas', NULL),
(57, 2, 5, 'tarifa', 'tarifas', NULL),
(58, 2, 5, 'tienda', 'tiendas', NULL),
(59, 2, 5, 'tienda', 'tiendas', NULL),
(60, 2, 4, 'estiramiento', 'estiramientos', NULL),
(61, 2, 5, 'respiración', 'respiraciones', NULL),
(62, 2, 4, 'ámbito', 'ámbitos', NULL),
(63, 2, 4, 'aguafiestas', 'aguafiestas', NULL),
(64, 2, 4, 'directorio', 'directorios', NULL),
(65, 2, 4, 'requisito previo', 'requisitos previos', NULL),
(66, 2, 4, 'desecho', 'desechos', NULL),
(67, 2, 4, 'desespero', 'desesperos', NULL),
(68, 2, 4, 'sentido', 'sentidos', NULL),
(69, 2, 4, 'justificante', 'justificantes', NULL),
(70, 2, 5, 'apreciación', 'apreciaciones', NULL),
(71, 2, 4, 'procedimiento penal', 'procedimientos penales', NULL),
(72, 2, 5, 'defensa', 'defensas', NULL),
(73, 2, 5, 'tolerancia', 'tolerancias', NULL),
(74, 2, 5, 'acumulación de basura', 'acumulaciones de basuras', NULL),
(75, 2, 4, 'condimento', 'condimentos', NULL),
(76, 2, 4, 'tour', 'tours', NULL),
(77, 2, 5, 'lujuria', 'lujurias', NULL),
(78, 2, 4, 'mundial', 'mundiales', NULL),
(79, 2, 5, 'piedad', 'piedades', 'biblia'),
(80, 2, 5, 'necedad', 'necedades', 'biblia'),
(81, 2, 4, 'hereje', 'herejes', 'biblia'),
(82, 2, 5, 'herejía', 'herejías', 'biblia'),
(83, 2, 4, 'matorral', 'matorrales', NULL),
(84, 2, 4, 'nido', 'nidos', NULL),
(85, 2, 5, 'eficiencia', 'eficiencias', NULL),
(86, 2, 5, 'eficiencia', 'eficiencias', NULL),
(87, 2, 4, 'rastrillo', 'rastrillos', NULL),
(88, 2, 4, 'cincel', 'cinceles', NULL),
(89, 2, 4, 'poema', 'poemas', NULL),
(90, 2, 5, 'actuación', 'actuaciones', NULL),
(91, 2, 5, 'garra', 'garras', NULL),
(92, 2, 5, 'poesía', 'poesías', NULL),
(93, 2, 5, 'conclusión', 'conclusiones', NULL),
(94, 2, 4, 'preludio', 'preludios', NULL),
(95, 2, 4, 'pájaro carpintero', 'pájaros carpinteros', NULL),
(96, 2, 4, 'gentilicio', 'gentilicios', NULL),
(97, 2, 5, 'jeta', 'jetas', NULL),
(98, 2, 4, 'tiburón', 'tiburones', NULL),
(99, 2, 5, 'conversación', 'conversaciones', NULL),
(100, 2, 4, 'mensaje', 'mensajes', NULL),
(101, 2, 4, 'exterior', 'exteriores', NULL),
(102, 2, 4, 'zapatero', 'zapateros', NULL),
(103, 2, 4, 'interrogatorio', 'interrogatorios', NULL),
(104, 2, 4, 'monólogo', 'monólogos', NULL),
(105, 2, 4, 'pulgar', 'pulgares', NULL),
(106, 2, 4, 'currículum', 'currículums', NULL),
(107, 2, 4, 'destinatario', 'destinatarios', NULL),
(108, 2, 4, 'show', 'shows', 'anglicismo'),
(109, 2, 5, 'cárcel', 'carceles', NULL),
(110, 2, 4, 'fiscal', 'fiscales', NULL),
(111, 2, 4, 'caldero', 'calderos', NULL),
(112, 2, 4, 'cazarrecompensas', 'cazarrecompensas', NULL),
(113, 2, 5, 'recompensa', 'recompensa', 'precio por su cabeza'),
(114, 2, 5, 'traición', 'traiciones', NULL),
(115, 2, 5, 'corteza', 'corteza', 'biología'),
(116, 2, 5, 'jarra', 'jarras', NULL),
(117, 2, 5, 'zanahoria', 'zanahorias', NULL),
(118, 2, 4, 'sonido', 'sonidos', NULL),
(119, 2, 5, 'cerámica', 'cerámicas', NULL),
(120, 2, 5, 'cerca', 'cercas', NULL),
(121, 2, 4, 'helicóptero', 'helicópteros', NULL),
(122, 2, 4, 'tornillo', 'tornillos', NULL),
(123, 2, 4, 'accesorio', 'accesorios', NULL),
(124, 2, 5, 'forma', 'formas', NULL),
(125, 2, 5, 'forma', 'formas', NULL),
(126, 2, 4, 'almacenamiento', 'almacenamientos', NULL),
(127, 2, 4, 'código', 'códigos', NULL),
(128, 2, 5, 'quiebra', 'quiebras', 'quebrar'),
(129, 2, 4, 'funeral', 'funerales', NULL),
(130, 2, 5, 'parálisis', 'parálisis', NULL),
(131, 2, 4, 'fin del mundo', '-', NULL),
(132, 2, 5, 'garganta', 'gargantas', NULL),
(133, 2, 4, 'estándar', 'estándares', NULL),
(134, 2, 5, 'resistencia', 'resistencias', NULL),
(135, 2, 5, 'memoria', 'memorias', NULL),
(136, 2, 4, 'colador', 'coladores', NULL),
(137, 2, 5, 'mujer', 'mujeres', NULL),
(138, 2, 5, 'cometa', 'cometas', NULL),
(139, 2, 5, 'intervención', 'intervenciones', 'medicina'),
(140, 2, 5, 'culpa', '-', NULL),
(141, 2, 4, 'trueque', 'trueques', NULL),
(142, 2, 5, 'crema de avena', 'cremas de avena', NULL),
(143, 2, 5, 'avena', 'avenas', NULL),
(144, 2, 4, 'ambiente', 'ambientes', NULL),
(145, 2, 5, 'defensa propia', '-', NULL),
(146, 2, 4, 'llano', 'llanos', NULL),
(147, 2, 5, 'vecindad', 'vecindades', NULL),
(148, 2, 4, 'egoísmo', '-', NULL),
(149, 2, 4, 'cascanueces', 'cascanueces', NULL),
(150, 2, 5, 'condecoración', 'condecoraciones', NULL),
(151, 2, 5, 'entrega', 'entregas', 'de premios'),
(152, 2, 5, 'plusvalía', 'plusvalías', NULL),
(153, 2, 5, 'luminosidad', '-', NULL),
(154, 2, 5, 'recepción', 'recepciones', NULL),
(155, 2, 4, 'optimismo', 'optimismos', NULL),
(156, 2, 5, 'inclinación', 'inclinaciones', NULL),
(157, 2, 5, 'tabla', 'tablas', NULL),
(158, 2, 4, 'sistema', 'sistemas', NULL),
(159, 2, 4, 'canal', 'canales', NULL),
(160, 2, 5, 'cabra', 'cabras', NULL),
(161, 2, 5, 'afirmación', 'afirmaciones', NULL),
(162, 2, 5, 'baratija', 'baratijas', NULL),
(163, 2, 5, 'avalancha', 'avalanchas', NULL),
(164, 2, 5, 'magia', 'magias', NULL),
(165, 2, 5, 'perfección', 'perfecciones', NULL),
(166, 2, 5, 'rueda', 'ruedas', NULL),
(167, 2, 5, 'patrulla', 'patrullas', NULL),
(168, 2, 5, 'venganza', 'venganzas', NULL),
(169, 2, 4, 'ermitaño', 'ermitaños', NULL),
(170, 2, 5, 'transformación', 'transformaciones', NULL),
(171, 2, 4, 'sepulcro', 'sepulcros', NULL),
(172, 2, 5, 'vista', 'vistas', NULL),
(173, 2, 5, 'ciruela', 'ciruelas', NULL),
(174, 2, 4, 'cojín', 'cojines', NULL),
(175, 2, 5, 'cortina', 'cortinas', NULL),
(176, 2, 5, 'curiosidad', 'curiosidades', NULL),
(177, 2, 4, 'cinturón de seguridad', 'cinturones de seguridad', NULL),
(178, 2, 5, 'arena para gato', 'arenas para gato', NULL),
(179, 2, 5, 'paja', 'pajas', NULL),
(180, 2, 4, 'surtido', 'surtidos', NULL),
(181, 2, 5, 'ejecución', 'ejecuciones', NULL),
(182, 2, 4, 'pavor', 'pavores', NULL),
(183, 2, 4, 'oído', NULL, 'cinco sentidos'),
(184, 2, 4, 'gusto', NULL, 'cinco sentidos'),
(185, 2, 4, 'tacto', NULL, 'cinco sentidos'),
(186, 2, 4, 'olfato', NULL, 'cinco sentidos'),
(187, 2, 5, 'vista', NULL, 'cinco sentidos'),
(188, 2, 5, 'sospecha', 'sospechas', NULL),
(189, 2, 5, 'codicia', NULL, NULL),
(190, 2, 4, 'odio', NULL, NULL),
(191, 2, 5, 'barba', 'barbas', NULL),
(192, 2, 4, 'peligro', 'peligros', NULL),
(193, 2, 5, 'línea telefónica', 'líneas telefónicas', NULL),
(194, 2, 4, 'termo', 'termos', NULL),
(195, 2, 5, 'prioridad', 'prioridades', NULL),
(196, 2, 4, 'paradero', 'paraderos', NULL),
(197, 2, 5, 'duda', 'dudas', NULL),
(198, 2, 4, 'asesinato', 'asesinatos', NULL),
(199, 2, 4, 'recipiente', 'recipientes', NULL),
(200, 2, 4, 'divorcio', 'divorcios', NULL),
(201, 2, 4, 'mercenario', 'mercenarios', NULL),
(202, 2, 5, 'atracción', NULL, NULL),
(203, 2, 5, 'tristeza', NULL, NULL),
(204, 2, 5, 'pata', 'patas', NULL),
(205, 2, 5, 'cola', 'colas', NULL),
(206, 2, 4, 'ingrediente', 'ingredientes', NULL),
(207, 2, 4, 'suero', 'sueros', NULL),
(208, 2, 5, 'parrilla', 'parrillas', NULL),
(209, 2, 4, 'papel aluminio', 'papeles aluminio', NULL),
(210, 2, 4, 'ácido', 'ácidos', NULL),
(211, 2, 4, 'acero inoxidable', 'aceros inoxidables', NULL),
(212, 2, 4, 'Caribe', NULL, NULL),
(213, 2, 4, 'emblema', 'emblemas', NULL),
(214, 2, 5, 'pancarta', 'pancartas', NULL),
(215, 2, 4, 'agente de guerra', NULL, NULL),
(216, 2, 5, 'mucama', 'mucamas', NULL),
(217, 2, 5, 'envidia', NULL, NULL),
(218, 2, 4, 'apóstol', 'apóstoles', NULL),
(219, 2, 4, 'obispo', 'obispos', NULL),
(220, 2, 4, 'hermano', 'hermanos', 'religión'),
(221, 2, 4, 'hacha', 'hachas', NULL),
(222, 2, 5, 'oblea', 'obleas', NULL),
(223, 2, 4, 'devoto', 'devotos', NULL),
(224, 2, 4, 'cráneo', 'cráneos', NULL),
(225, 2, 4, 'homicidio', 'homicidios', NULL),
(226, 2, 4, 'ermitaño', 'ermitaños', NULL),
(227, 2, 4, 'afectado', 'afectados', NULL),
(228, 2, 5, 'artrosis', NULL, NULL),
(229, 2, 5, 'inquietud', 'inquietudes', NULL),
(230, 2, 4, 'revestimiento', 'revestimientos', NULL),
(231, 2, 5, 'región', 'regiones', NULL),
(232, 2, 5, 'curtiduría', 'curtidurías', NULL),
(233, 2, 4, 'comercio', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('45zxiyFiqPgwlWoh1W9yGCov8kgiwluJgGKcGuZ9', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/111.0.0.0 Safari/537.36 OPR/97.0.0.0', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZjBmbmdIZlN0eUQ4RkJpRXdrWk1XR3h4eENKaWRiNTVGZUo5Uk1WMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZS9ub3VucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRPTzVBd1RrVUU4TlNFdFVWRlJJLi9lNEV0YUMwQjlndC5TYTZNcjQzZXJCTXdEZFRKcHVWUyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkT081QXdUa1VFOE5TRXRVVkZSSS4vZTRFdGFDMEI5Z3QuU2E2TXI0M2VyQk13RGRUSnB1VlMiO30=', 1682449189),
('emz7efZUUHWsSny7JhXi2QMbxChevFkHplUKr78a', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 OPR/86.0.4363.64', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiUjc1WlM1MGw3R1dDQnJjWTVFakJiOFllWWJQSEFJTGhHeVE5OWZOdiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZS9ub3VucyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRPTzVBd1RrVUU4TlNFdFVWRlJJLi9lNEV0YUMwQjlndC5TYTZNcjQzZXJCTXdEZFRKcHVWUyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkT081QXdUa1VFOE5TRXRVVkZSSS4vZTRFdGFDMEI5Z3QuU2E2TXI0M2VyQk13RGRUSnB1VlMiO30=', 1653230808),
('I0Cg9iih86jlkb9CKXpl4mt01xafTebjDE68piqS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 OPR/86.0.4363.64', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRW54YnB3QVhVRnNzVWpTQmptNmthdldPQ084TW44TjQ3VDdROWtNZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnRpa2VsdHJhaW5pbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1653328010),
('pMBKbRFsvjxL2BUxGy2R7W2vJ0Ypx2901MkTPHeO', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36 OPR/86.0.4363.64', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoibDNVR3hJeGRzcmxsTFRZMEplSW1IR2ZnaU1zYUpsRHdnZDNJTkp5TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZS92ZXJicyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCRPTzVBd1RrVUU4TlNFdFVWRlJJLi9lNEV0YUMwQjlndC5TYTZNcjQzZXJCTXdEZFRKcHVWUyI7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkT081QXdUa1VFOE5TRXRVVkZSSS4vZTRFdGFDMEI5Z3QuU2E2TXI0M2VyQk13RGRUSnB1VlMiO30=', 1653336507);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Adolfo', 'harats500.com@gmail.com', '$2y$10$OO5AwTkUE8NSEtUVFRI./e4EtaC0B9gt.Sa6Mr43erBMwDdTJpuVS', NULL, NULL, NULL, NULL, NULL, '2022-03-22 17:16:14', '2022-03-22 17:16:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verbs_de`
--

DROP TABLE IF EXISTS `verbs_de`;
CREATE TABLE IF NOT EXISTS `verbs_de` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `grundform` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `hilfsverb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preterite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `konjunktiv_ii` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular` bigint(20) UNSIGNED NOT NULL,
  `1p_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `2p_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `3p_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `1p_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `2p_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `3p_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `2p_s_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1p_p_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2p_p_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formel_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `verbs_de`
--

INSERT INTO `verbs_de` (`id`, `grundform`, `language_id`, `hilfsverb`, `preterite`, `perfect`, `konjunktiv_ii`, `regular`, `1p_s`, `2p_s`, `3p_s`, `1p_p`, `2p_p`, `3p_p`, `2p_s_imperative`, `1p_p_imperative`, `2p_p_imperative`, `formel_imperative`, `comment`) VALUES
(1, 'sein', 1, 'sein', 'war', 'gewesen', 'wäre', 0, 'bin', 'bist', 'ist', 'sind', 'seid', 'sind', 'sei', 'seien', 'seid', 'seien Sie', NULL),
(2, 'haben', 1, 'haben', 'hatte', 'gehabt', 'hätte', 1, 'habe', 'hast', 'hat', 'haben', 'habt', 'haben', 'hab', 'haben', 'habt', 'haben Sie', NULL),
(3, 'gehen', 1, 'sein', 'ging', 'gegangen', 'ginge', 0, 'gehe', 'gehst', 'geht', 'gehen', 'geht', 'gehen', 'geh', 'gehen', 'geht', 'gehen Sie', NULL),
(4, 'gießen', 1, 'haben', 'goss', 'gegossen', 'gösse', 0, 'gieße', 'gießt', 'gießt', 'gießen', 'gießt', 'gießen', 'gieß', 'gießen', 'gießt', 'gießen Sie', NULL),
(5, 'fallen', 1, 'sein', 'fiel', 'gefallen', 'fiele', 0, 'falle', 'fällst', 'fällt', 'fallen', 'fallt', 'fallen', 'fall', 'fallen', 'fallt', 'fallen Sie', NULL),
(6, 'greifen', 1, 'haben', 'gegriffen', 'griff', 'griffe', 0, 'greife', 'greifst', 'greift', 'greifen', 'greift', 'greifen', 'greif', 'greifen', 'greift', 'greifen', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verbs_es`
--

DROP TABLE IF EXISTS `verbs_es`;
CREATE TABLE IF NOT EXISTS `verbs_es` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `language_id` bigint(20) UNSIGNED NOT NULL,
  `perfect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conditional` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imperfect_preterite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regular` bigint(20) UNSIGNED NOT NULL,
  `1p_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `2p_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `3p_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `1p_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `2p_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `3p_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formel_s` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formel_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `2p_s_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `1p_p_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `2p_p_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formel_s_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `formel_p_imperative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_1p_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_2p_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_3p_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_1p_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_2p_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_3p_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_formel_s` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preterite_formel_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
