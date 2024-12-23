-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-12-2024 a las 09:46:11
-- Versión del servidor: 10.3.32-MariaDB
-- Versión de PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fedepal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `w5_almkhpcw_access_management`
--

CREATE TABLE `w5_almkhpcw_access_management` (
  `id` int(11) NOT NULL,
  `ts` timestamp NULL DEFAULT NULL,
  `ip` varchar(45) NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(32) NOT NULL,
  `validated` int(1) NOT NULL,
  `crypt_encoding` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cng_pwd_token` varchar(64) DEFAULT NULL,
  `cng_pwd_token_expire` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `w5_almkhpcw_access_management`
--

INSERT INTO `w5_almkhpcw_access_management` (`id`, `ts`, `ip`, `password`, `firstname`, `lastname`, `email`, `key`, `validated`, `crypt_encoding`, `cng_pwd_token`, `cng_pwd_token_expire`) VALUES
(1, '2024-12-20 14:27:30', '192.168.1.100', '$2y$10$WKsWGckEv5ESJiyziR1jI.n4IVVjcq56Mp3asQZ4Xz1euajnqu9iK', 'Ruben', 'Pilca', 'rpilca@corsinf.com', '9cda567cba375fdf1054b2e53b9e0b02', 1, 'php_default', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `w5_almkhpcw_access_management`
--
ALTER TABLE `w5_almkhpcw_access_management`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cng_pwd_token` (`cng_pwd_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `w5_almkhpcw_access_management`
--
ALTER TABLE `w5_almkhpcw_access_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
