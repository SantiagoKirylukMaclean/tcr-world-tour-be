-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: db
-- Tiempo de generación: 17-05-2024 a las 15:17:34
-- Versión del servidor: 8.0.37
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `circuit`
--

CREATE TABLE `circuit` (
  `id_circuit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude_in_meters` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `circuit`
--

INSERT INTO `circuit` (`id_circuit`, `city`, `longitude_in_meters`) VALUES
('3941fd15-2460-4329-8322-9750bb11c2bb', 'Ohio', 3634),
('8a9b7aaa-7ea6-40db-a85e-35194cd27d7d', 'Morocco', 1701),
('914ed571-04d7-4d83-8cc7-6078f24d44bb', 'Vallelunga', 4085);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240517000008', '2024-05-17 00:00:41', 125);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `driver`
--

CREATE TABLE `driver` (
  `id_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_dnf` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `driver`
--

INSERT INTO `driver` (`id_driver`, `first_name`, `last_name`, `is_dnf`) VALUES
('0e6544e7-b3f5-4e5b-be1e-0b13b4374445', 'Dušan', 'Borković', 0),
('0f1e9b8e-19fb-48d7-ae85-f129ad1727ed', 'Ramazan', 'Kaya', 0),
('1591292f-1db8-4e51-9a48-d81d3c206120', 'Sami', 'Taoufik', 0),
('1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Néstor', 'Girolami', 0),
('2b73c688-f26f-4b41-8ba5-8194e348e0c8', 'Demir', 'Eröge', 0),
('2d61b02d-15d8-4467-9932-3463e23b180f', 'Esteban', 'Guerrieri', 0),
('2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Marco', 'Butti', 0),
('349c3e43-1b03-4705-bf57-23b4bc82594a', 'Mikel', 'Azcona', 0),
('6182b28b-4b50-4d12-b800-1415de59a920', 'Santiago', 'Urrutia', 0),
('6def8c58-ff66-4cfe-9c11-dd00276f9873', 'Julien', 'Piguet', 0),
('6ffbe01c-3b52-4d66-a392-3cd02005f229', 'Mehdi', 'Bennani', 0),
('70069eb8-9381-4711-8fc9-5f9fc8605b39', 'Jacopo', 'Cimenes', 0),
('70099b92-2d0d-4f15-888f-24edf290e207', 'Victor', 'Fernández', 0),
('8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Yann', 'Ehrlacher', 0),
('8f868150-5b2f-48df-b61b-705e424a585f', 'Tony', 'Verhulst', 0),
('95d11a2b-78cb-4a15-8559-4cd36753505e', 'Filippo', 'Barberi', 0),
('ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Thed', 'Björk', 0),
('ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Norbert', 'Michelisz', 0),
('cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'John', 'Filippi', 0),
('d3351b38-b13f-4d13-bd0f-14dc1d78158b', 'Giulio', 'Valentini', 0),
('e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Ma Qing', 'Hua', 0),
('f5b1b0db-2922-4d3b-b47e-60506f28f6aa', 'Philipp', 'Mattersdorfer', 0),
('ff1c8433-fa09-4052-9246-798924b3f834', 'Sandro', 'Pelatti', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `race`
--

CREATE TABLE `race` (
  `id_race` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_circuit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `race`
--

INSERT INTO `race` (`id_race`, `id_circuit`, `name`, `date`) VALUES
('63d23ec7-9464-482e-9610-1375009bfdee', '8a9b7aaa-7ea6-40db-a85e-35194cd27d7d', 'Marruecos', '2024-05-04 00:00:00'),
('94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '3941fd15-2460-4329-8322-9750bb11c2bb', 'Ohio', '2024-06-08 00:00:00'),
('e20f3cbb-4d06-4c51-b2cc-69ca0af8660b', '914ed571-04d7-4d83-8cc7-6078f24d44bb', 'Vallelunga Circuit', '2024-04-20 21:00:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `result`
--

CREATE TABLE `result` (
  `id_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_race` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_session` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `points` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `result`
--

INSERT INTO `result` (`id_result`, `id_race`, `id_driver`, `type_session`, `position`, `points`) VALUES
('02e2a478-e270-4461-914f-be4417e20ce6', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '6182b28b-4b50-4d12-b800-1415de59a920', 'Race 2', 2, 25),
('05a9e60b-b4f0-447f-a2c1-6f695fa4a271', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '95d11a2b-78cb-4a15-8559-4cd36753505e', 'Qualifying', 15, 0),
('0baea9ee-ca4a-46c3-9a4e-fb3b4bda0415', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'd3351b38-b13f-4d13-bd0f-14dc1d78158b', 'Race 2', 15, 1),
('0d25313b-e45b-4d2a-b4a4-6c88e162e684', '63d23ec7-9464-482e-9610-1375009bfdee', 'e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Qualifying', 10, 0),
('0dc817f2-11d1-4b91-b86e-2c0bfda2b66f', '63d23ec7-9464-482e-9610-1375009bfdee', 'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'Race 1', 6, 16),
('0e85e3dd-22a2-4f93-ace7-d837ae0c0b6f', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Qualifying', 10, 0),
('0f805b4f-3834-441e-ba27-ac0ea4677a74', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Qualifying', 5, 4),
('12e35739-2917-4240-9c58-e7aabc5f4947', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ff1c8433-fa09-4052-9246-798924b3f834', 'Qualifying', 14, 0),
('1739dabb-d5ec-4c9c-b683-94a149e0be77', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Race 1', 5, 18),
('191ec8e8-5919-4d29-8bf3-e12dfcf3b9ba', '63d23ec7-9464-482e-9610-1375009bfdee', '8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Race 1', 1, 30),
('1b5cca5c-2e31-4168-b5ee-51c043a5d985', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '8f868150-5b2f-48df-b61b-705e424a585f', 'Qualifying', 18, 0),
('1d243e21-3b06-40fe-bb76-853021568ee4', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Qualifying', 1, 15),
('254a64b2-af11-4c2a-bac4-290c0dc82654', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'd3351b38-b13f-4d13-bd0f-14dc1d78158b', 'Qualifying', 19, 0),
('254e1c82-911d-4467-a1ed-fe8e55efdb39', '63d23ec7-9464-482e-9610-1375009bfdee', 'ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Qualifying', 11, 0),
('26e393f5-700d-42eb-8f08-85382c31ce89', '63d23ec7-9464-482e-9610-1375009bfdee', '1591292f-1db8-4e51-9a48-d81d3c206120', 'Race 1', 10, 8),
('278a5ac0-875e-4dcd-8d12-4e990509381d', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2d61b02d-15d8-4467-9932-3463e23b180f', 'Race 2', 8, 12),
('2be7a849-2240-44fc-af2a-2512163783e0', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '0f1e9b8e-19fb-48d7-ae85-f129ad1727ed', 'Race 2', 13, 3),
('2d89a55d-0605-42a1-ac44-415353270a2c', '63d23ec7-9464-482e-9610-1375009bfdee', 'ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Qualifying', 3, 8),
('2deb85b5-3e3e-4e2d-a750-6ca55cd8a0c5', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Qualifying', 3, 22),
('2ee97e87-ad05-4d9d-8b79-cbbab04d35b8', '63d23ec7-9464-482e-9610-1375009bfdee', 'ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Race 1', 3, 22),
('2f265050-8279-4419-8cf6-e5022cdd1ee5', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '8f868150-5b2f-48df-b61b-705e424a585f', 'Race 2', 16, 0),
('322414c4-7fd6-4472-af0f-c9fd0ee9edbb', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'd3351b38-b13f-4d13-bd0f-14dc1d78158b', 'Race 1', 16, 0),
('3343bea3-8a4a-4801-9214-7a22eb04e603', '63d23ec7-9464-482e-9610-1375009bfdee', '6182b28b-4b50-4d12-b800-1415de59a920', 'Race 1', 2, 25),
('36c32ed4-fe94-46ab-9d26-346b4c0ad065', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Qualifying', 6, 2),
('372ed631-7de0-4d05-a315-6ae323def9f7', '63d23ec7-9464-482e-9610-1375009bfdee', '6ffbe01c-3b52-4d66-a392-3cd02005f229', 'Qualifying', 13, 0),
('37d482d1-30b4-4a50-90b8-f0fb349456a7', '63d23ec7-9464-482e-9610-1375009bfdee', 'ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Race 2', 9, 10),
('380f99ba-b264-4ee1-bd66-e7815c1458e2', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Race 1', 6, 16),
('393a28ba-36e2-471c-95b1-92885cb10677', '63d23ec7-9464-482e-9610-1375009bfdee', '8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Race 2', 14, 0),
('3f5d8da3-369b-411b-9eab-df7eaba3e190', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'Race 2', 7, 14),
('4005dfcc-4fe8-48c4-8683-0e848658fb96', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Race 2', 9, 10),
('424853ac-9a5f-4c34-a628-62e7eb76c5ba', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'Race 1', 9, 10),
('43549a7c-8192-4455-873f-3a84a25b0017', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '6182b28b-4b50-4d12-b800-1415de59a920', 'Qualifying', 9, 0),
('46bce088-8186-4505-ba40-4a3d63e8630d', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '70069eb8-9381-4711-8fc9-5f9fc8605b39', 'Race 1', 13, 3),
('4cdac35e-7fa6-4957-9f7b-d6eda6e52a93', '63d23ec7-9464-482e-9610-1375009bfdee', '6ffbe01c-3b52-4d66-a392-3cd02005f229', 'Race 1', 11, 6),
('4eb47558-1a8e-4790-83a0-337c4b9cdbcc', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Race 2', 5, 18),
('537c4198-da1e-46de-83b8-f52fc557c770', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Race 1', 2, 25),
('5502b076-1794-41f9-81fd-da71e7140b3e', '63d23ec7-9464-482e-9610-1375009bfdee', '2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Qualifying', 12, 0),
('55beff73-3cab-4616-ae6b-0c7a789faffb', '63d23ec7-9464-482e-9610-1375009bfdee', '1591292f-1db8-4e51-9a48-d81d3c206120', 'Race 2', 6, 16),
('56da1683-497b-43d2-b230-45351d9b8e8a', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2d61b02d-15d8-4467-9932-3463e23b180f', 'Race 1', 3, 22),
('5fda531e-58e2-4cfb-944b-e8dc332b324a', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '0f1e9b8e-19fb-48d7-ae85-f129ad1727ed', 'Qualifying', 20, 0),
('62a9848e-3941-41b5-a9b3-adb2ddf83cde', '63d23ec7-9464-482e-9610-1375009bfdee', '2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Race 1', 13, 0),
('64aef8e0-5d58-41c6-a131-ce64c8849c60', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '349c3e43-1b03-4705-bf57-23b4bc82594a', 'Race 1', 4, 20),
('65a3948e-b798-40a9-9903-6e03bbafa430', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '1591292f-1db8-4e51-9a48-d81d3c206120', 'Qualifying', 12, 0),
('6ad8a69b-8118-4da6-bf9b-42264081f8e9', '63d23ec7-9464-482e-9610-1375009bfdee', '70099b92-2d0d-4f15-888f-24edf290e207', 'Qualifying', 15, 0),
('6e64d38b-8f6b-42dc-8cc9-a8d712caae36', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '8f868150-5b2f-48df-b61b-705e424a585f', 'Race 1', 15, 1),
('6f809799-bd64-42e9-821a-b9a08b3975b1', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2b73c688-f26f-4b41-8ba5-8194e348e0c8', 'Qualifying', 16, 0),
('74052a03-942f-4ef6-b63c-58de9bd72b2e', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'f5b1b0db-2922-4d3b-b47e-60506f28f6aa', 'Qualifying', 17, 0),
('758bcbd0-af3a-44ee-8f9d-87371aa0d093', '63d23ec7-9464-482e-9610-1375009bfdee', '0e6544e7-b3f5-4e5b-be1e-0b13b4374445', 'Qualifying', 8, 0),
('786b00f0-aa9f-4b98-8f5c-d60808ff0c5d', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Qualifying', 7, 0),
('7c3be28a-9b3b-4639-9bf7-449b73ce82e9', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '349c3e43-1b03-4705-bf57-23b4bc82594a', 'Qualifying', 4, 6),
('7cfb6cd2-0224-4562-9185-37abc147165e', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '70099b92-2d0d-4f15-888f-24edf290e207', 'Race 2', 17, 0),
('7f09e1a6-9ea9-47c5-88c8-83fc0a84e9ba', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Race 1', 10, 8),
('7f67c664-5bc1-4709-b18d-b0334e2bb67d', '63d23ec7-9464-482e-9610-1375009bfdee', '70099b92-2d0d-4f15-888f-24edf290e207', 'Race 2', 12, 4),
('7fe1a6ad-5c1a-49be-8afd-859bd53896c2', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '95d11a2b-78cb-4a15-8559-4cd36753505e', 'Race 1', 11, 6),
('81087638-3fea-46bd-bb54-afedfba9ebb9', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ff1c8433-fa09-4052-9246-798924b3f834', 'Race 2', 10, 8),
('82a78bda-8c5b-443e-bf4f-cc997bf52d31', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '0f1e9b8e-19fb-48d7-ae85-f129ad1727ed', 'Race 1', 18, 0),
('84d8ac64-0dcc-45b4-aa21-0237789709bc', '63d23ec7-9464-482e-9610-1375009bfdee', '1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Race 2', 5, 18),
('867af6bb-c757-48e2-a7d6-ce60532bf8af', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Race 1', 8, 12),
('8a02959d-403b-4b81-b7aa-9cc81b36cc82', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2d61b02d-15d8-4467-9932-3463e23b180f', 'Qualifying', 3, 8),
('8f6a53b2-3d2d-4d3f-8d6e-af64e7d760c0', '63d23ec7-9464-482e-9610-1375009bfdee', '6182b28b-4b50-4d12-b800-1415de59a920', 'Qualifying', 2, 10),
('97056b49-b4a4-4540-ab3e-c88ce58e8ba5', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2b73c688-f26f-4b41-8ba5-8194e348e0c8', 'Race 1', 17, 0),
('9d8f50f6-eea8-4a6d-990d-383a21d2f60c', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'f5b1b0db-2922-4d3b-b47e-60506f28f6aa', 'Race 1', 14, 2),
('a11529e2-9833-48e4-8442-d02fd55e886d', '63d23ec7-9464-482e-9610-1375009bfdee', '349c3e43-1b03-4705-bf57-23b4bc82594a', 'Qualifying', 6, 2),
('a21ae26b-c343-4cfb-97d2-b2831ac6a346', '63d23ec7-9464-482e-9610-1375009bfdee', 'ac18077f-3288-4d2b-a4b1-09ec6bf5d59a', 'Race 1', 8, 12),
('a30a89bc-72b7-4a09-8bea-79c28d6fb1e5', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '70069eb8-9381-4711-8fc9-5f9fc8605b39', 'Race 2', 20, 0),
('a329a867-46dd-42e0-90a9-beeaf95deac1', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '95d11a2b-78cb-4a15-8559-4cd36753505e', 'Race 2', 19, 0),
('a674c360-c205-40de-b697-7dac9a5f58db', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'Qualifying', 8, 0),
('a953c568-f5b4-4b2f-85d7-7253bb87099d', '63d23ec7-9464-482e-9610-1375009bfdee', '2d61b02d-15d8-4467-9932-3463e23b180f', 'Race 2', 2, 25),
('ad38bad2-08ba-484b-93bf-0070275a7c13', '63d23ec7-9464-482e-9610-1375009bfdee', '0e6544e7-b3f5-4e5b-be1e-0b13b4374445', 'Race 2', 3, 22),
('b0b2522c-a9be-4c2c-9459-c85ca7035323', '63d23ec7-9464-482e-9610-1375009bfdee', 'e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Race 2', 1, 30),
('b12580d7-0fd1-4842-bc42-e69f3ad8fcf7', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '1591292f-1db8-4e51-9a48-d81d3c206120', 'Race 2', 18, 0),
('b7dd0092-52ce-48ee-b10c-05db9cc3ec12', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '70069eb8-9381-4711-8fc9-5f9fc8605b39', 'Qualifying', 11, 0),
('c0eb1a35-7606-413a-96ed-7546a7bb611a', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Race 2', 6, 16),
('c177114a-fd65-4d43-84c7-2fd6db87ae82', '63d23ec7-9464-482e-9610-1375009bfdee', '6def8c58-ff66-4cfe-9c11-dd00276f9873', 'Race 2', 15, 0),
('c2854d93-93bf-45bf-a42c-6e75e1960244', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Race 2', 1, 30),
('c4bf8b00-e811-413a-91f1-fb65a7ab2fa7', '63d23ec7-9464-482e-9610-1375009bfdee', 'e3c8966a-1a34-4ed3-8541-0672d5f2d06f', 'Race 1', 7, 14),
('c5da7248-0e5f-4f23-bee8-6b7ddb9609ad', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Qualifying', 2, 10),
('c6328a46-5b3f-4143-b38c-ab052a89dd3b', '63d23ec7-9464-482e-9610-1375009bfdee', '6ffbe01c-3b52-4d66-a392-3cd02005f229', 'Race 2', 10, 8),
('ca29dbd9-3403-43b1-81bf-ba015189378c', '63d23ec7-9464-482e-9610-1375009bfdee', '0e6544e7-b3f5-4e5b-be1e-0b13b4374445', 'Race 1', 15, 0),
('cbf656a9-8878-4787-806f-8ea3b815f438', '63d23ec7-9464-482e-9610-1375009bfdee', 'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'Race 2', 4, 20),
('d0e905b5-ec73-43d4-968f-52e86df64525', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '70099b92-2d0d-4f15-888f-24edf290e207', 'Qualifying', 13, 0),
('d1b06f19-d562-4716-9047-f6f24f770927', '63d23ec7-9464-482e-9610-1375009bfdee', '2d61b02d-15d8-4467-9932-3463e23b180f', 'Race 1', 9, 10),
('d224baa6-163a-4de3-8d1b-4ee0a8e6f3a2', '63d23ec7-9464-482e-9610-1375009bfdee', '349c3e43-1b03-4705-bf57-23b4bc82594a', 'Race 2', 13, 3),
('d437c356-0371-4d30-a507-25dc374131a4', '63d23ec7-9464-482e-9610-1375009bfdee', '1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Qualifying', 4, 6),
('d48e0a0e-04f3-454a-bb05-88399c8f2caf', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ff1c8433-fa09-4052-9246-798924b3f834', 'Race 1', 12, 4),
('d566ea1f-3056-4ab2-bd6b-837f0b5a1ce1', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Race 2', 14, 2),
('d640e2e6-e6d7-4657-b8fc-bac8b9e9deda', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'f5b1b0db-2922-4d3b-b47e-60506f28f6aa', 'Race 2', 12, 4),
('dab0f7b2-d9ce-424d-b9f8-ade06a274269', '63d23ec7-9464-482e-9610-1375009bfdee', '2f646a1c-f9b1-4e57-9442-b7e2878e2de7', 'Race 2', 7, 14),
('dc875de3-cf9a-4ecd-baf6-cb196b4a09aa', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '70099b92-2d0d-4f15-888f-24edf290e207', 'Race 1', 19, 0),
('dd0aa969-a144-4d9d-874c-ff25492b29e4', '63d23ec7-9464-482e-9610-1375009bfdee', '1d1e39f1-3173-469d-8d51-b9b0c8553998', 'Race 1', 4, 20),
('deb128b6-fd48-488f-92f2-eec346d46f29', '63d23ec7-9464-482e-9610-1375009bfdee', '6182b28b-4b50-4d12-b800-1415de59a920', 'Race 2', 8, 12),
('e2199a43-fc5c-4dca-8217-1203ee2be16d', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '349c3e43-1b03-4705-bf57-23b4bc82594a', 'Race 2', 4, 20),
('e342f63a-7a65-4f87-a33e-711457a80eb2', '63d23ec7-9464-482e-9610-1375009bfdee', '1591292f-1db8-4e51-9a48-d81d3c206120', 'Qualifying', 14, 0),
('e5373e3c-f935-4f06-9e44-65097b72452a', '63d23ec7-9464-482e-9610-1375009bfdee', '6def8c58-ff66-4cfe-9c11-dd00276f9873', 'Qualifying', 7, 0),
('e70a5b63-a51e-4ab0-bf36-8cf4b59ba3d9', '63d23ec7-9464-482e-9610-1375009bfdee', '349c3e43-1b03-4705-bf57-23b4bc82594a', 'Race 1', 5, 18),
('e9af23e6-c38d-4454-a75e-e1d1ae2728ff', '63d23ec7-9464-482e-9610-1375009bfdee', '8539155b-f3b9-49bb-88f4-123a9ff6d6a0', 'Qualifying', 1, 15),
('f100208e-e512-4c0f-8db8-4acc71530e76', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '2b73c688-f26f-4b41-8ba5-8194e348e0c8', 'Race 2', 11, 6),
('f230eb70-6d2a-4ef5-b44c-03c932876817', '63d23ec7-9464-482e-9610-1375009bfdee', '6def8c58-ff66-4cfe-9c11-dd00276f9873', 'Race 1', 14, 0),
('f2fb6565-f293-4c00-af41-5ba293b439a1', '63d23ec7-9464-482e-9610-1375009bfdee', '70099b92-2d0d-4f15-888f-24edf290e207', 'Race 1', 12, 4),
('f3ff97bd-4ffb-4eda-9715-a2d0893673af', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '1591292f-1db8-4e51-9a48-d81d3c206120', 'Race 1', 20, 0),
('f54bb534-acdc-4083-bfa4-4da02a253293', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', '6182b28b-4b50-4d12-b800-1415de59a920', 'Race 1', 7, 14),
('f72a1193-4d91-4931-b34a-c09345d3dfde', '63d23ec7-9464-482e-9610-1375009bfdee', 'cbf2c2c1-18a0-4dc9-aa55-190ad67aa82e', 'Qualifying', 5, 4),
('f8856e3c-6ff2-45d1-bb6d-b8c767264698', '63d23ec7-9464-482e-9610-1375009bfdee', 'ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Race 2', 11, 6),
('fcb1087a-f960-4fff-be42-78c23b19ec40', '94c0e092-f060-4ce7-8ebe-ee3792d36fa4', 'ae8d7c6e-00f8-4f4a-8d46-b0b6158c9b59', 'Race 1', 1, 30),
('ff26f6ce-b1cb-4929-b95c-cec6aaab7912', '63d23ec7-9464-482e-9610-1375009bfdee', '2d61b02d-15d8-4467-9932-3463e23b180f', 'Qualifying', 9, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team`
--

CREATE TABLE `team` (
  `id_team` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colors` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `team`
--

INSERT INTO `team` (`id_team`, `name`, `logo`, `colors`) VALUES
('60c1fb28-d337-4af0-8bf3-7007fa0870b3', 'Hyundai', 'https://es.m.wikipedia.org/wiki/Archivo:Hyundai_Motor_Company_logo.svg', '[\"#9DB8F0\", \"#1F377C\", \"#FF4441\"]'),
('91473835-e435-4dc7-8b7e-cdb16aa4a800', 'Cyan', 'https://en.wikipedia.org/wiki/Cyan_Racing#/media/File:Cyan_Racing_logo.jpeg', '[\"#2CDDFE\"]'),
('952f1b2e-bf85-4def-a6b6-48c39664e549', 'Goat', 'https://miro.medium.com/v2/resize:fit:1400/format:webp/1*Zt1JrXng7R9BEDfYVfkLEw.png', '[\"#F80024\", \"#FDF8F3\", \"#747C84\"]'),
('e20f3cbb-4d06-4c51-b2cc-69ca0af8660b', 'Volcano', 'https://www.thethirdturn.com/w/images/thumb/8/8b/FIA_Kumho_TCR_World_Tour.jpg/551px-FIA_Kumho_TCR_World_Tour.jpg', '[\"#D03733\", \"#090909\"]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `circuit`
--
ALTER TABLE `circuit`
  ADD PRIMARY KEY (`id_circuit`);

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indices de la tabla `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id_race`),
  ADD KEY `IDX_DA6FBBAFCDB85AD6` (`id_circuit`);

--
-- Indices de la tabla `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id_result`),
  ADD KEY `IDX_136AC113514FA7AD` (`id_race`),
  ADD KEY `IDX_136AC1133751C934` (`id_driver`);

--
-- Indices de la tabla `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `race`
--
ALTER TABLE `race`
  ADD CONSTRAINT `FK_DA6FBBAFCDB85AD6` FOREIGN KEY (`id_circuit`) REFERENCES `circuit` (`id_circuit`) ON DELETE CASCADE;

--
-- Filtros para la tabla `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `FK_136AC1133751C934` FOREIGN KEY (`id_driver`) REFERENCES `driver` (`id_driver`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_136AC113514FA7AD` FOREIGN KEY (`id_race`) REFERENCES `race` (`id_race`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
