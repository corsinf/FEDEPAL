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


CREATE TABLE `w5_news` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NULL DEFAULT NULL,
  `titulo` varchar(45) NOT NULL,
  `detalle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` int(1) NOT NULL,
  `imagen` varchar(64) DEFAULT NULL,
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

ALTER TABLE `w5_news`
  ADD PRIMARY KEY (`id`),

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `w5_almkhpcw_access_management`
--
ALTER TABLE `w5_almkhpcw_access_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

ALTER TABLE `w5_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


INSERT INTO `w5_socios` (`usu_id`, `usu_nombre_institucion`, `usu_direccion_institucion`, `usu_telefono_convencional_institucion`, `usu_telefono_celular_institucion`, `usu_nombre_completos_rector`, `usu_correo_rector`, `usu_telefono_rector`, `usu_nombre_completos_replegal`, `usu_correo_replegal`, `usu_telefono_replegal`, `usu_cedula_replegal`, `usu_foto_colegio`, `usu_url_colegio`, `usu_region`, `usu_estado`, `usu_fecha_creacion`, `usu_fecha_modificacion`) VALUES
(1, 'ESCUELA DE EDUCACIÓN BÁSICA ANGEL DE LA GUARDA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_DE_EDUCACIÓN_BÁSICA_ANGEL_DE_LA_GUARDA.png', 'https://www.facebook.com/angeldelaguardaciag/?locale=es_LA', 'Sierra', 1, '2025-01-07 11:45:03', '2025-01-07 19:38:08'),
(2, 'COLEGIO JOHANNES KEPLER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/COLEGIO_JOHANNES_KEPLER.png', 'https://www.jkepler.edu.ec/', 'Sierra', 1, '2025-01-07 11:45:03', '2025-01-07 19:38:52'),
(3, 'COLEGIO PARTICULAR BATALLA DE JAMBELÍ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/COLEGIO_PARTICULAR_BATALLA_DE_JAMBELÍ.png', 'https://www.facebook.com/Batalladejambeli/?locale=es_LA', 'Sierra', 1, '2025-01-07 11:45:03', '2025-01-07 19:39:14'),
(4, 'UNIDAD EDUCATIVA LEON COOPER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_LEON_COOPER.png', 'http://www.colegiocooper.edu.ec/', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:55:54'),
(5, 'ESCUELA EDUCATIVA PARTICULAR LUDOTECA PADRE VICTOR GRADOS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_EDUCATIVA_PARTICULAR_LUDOTECA_PADRE_VICTOR.png', 'https://www.ibo.org/es/school/002998', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:39:55'),
(6, 'UNIDAD EDUCATIVA PARTICULAR DE AMÉRICA MARÍA A. CARRILLO DE MATA M.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_DE_AMÉRICA.png', 'https://colegiodeamerica.edu.ec/', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:40:40'),
(7, 'ACADEMIA ALIANZA INTERNACIONAL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ACADEMIA_ALIANZA_INTERNACIONAL.png', 'https://alliance.k12.ec/', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:48:45'),
(8, 'COLEGIO PARTICULAR ANTONIO FLORES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/COLEGIO_PARTICULAR_ANTONIO_FLORES.png', 'https://ceiaf.edu.ec/', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:49:17'),
(9, 'UNIDAD EDUCATIVA PARTICULAR BILINGÜE ÁNGEL POLIBIO CHAVES (APCH)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_BILINGÜE_ÁNGEL_POLIBIO.png', 'https://ueapch.net/', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:50:22'),
(10, 'INSTITUCIÓN EDUCATIVA DE LAS AMÉRICAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/INSTITUCIÓN_EDUCATIVA_DE_LAS_AMÉRICAS.png', 'https://www.delasamericas.net/', 'Sierra', 1, '2025-01-07 11:55:39', '2025-01-07 19:51:25'),
(11, 'UNIDAD EDUCATIVA PARTICULAR ATENAS SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_ATENAS_SCHOOL.png', 'https://www.facebook.com/atenasschoolecuador/', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:51:37'),
(12, 'UNIDAD EDUCATIVA BENEDETTI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BENEDETTI.png', 'https://benedetti.edu.ec/', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:51:55'),
(13, 'ESCUELA DE EDUCACIÓN BÁSICA ESTANCIA PEKES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_DE_EDUCACIÓN_BÁSICA_ESTANCIA_PEKES.png', 'https://www.facebook.com/estanciapekes1/', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:52:51'),
(14, 'CENTRO DE EDUCACIÓN BILINGUE MARY BOSCHETTI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/CENTRO_DE_EDUCACIÓN_BILINGUE_MARY_BOSCHETTI.png', 'https://www.facebook.com/EducacionMaryBoschetti/', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:54:02'),
(15, 'UNIDAD EDUCATIVA INDIRA GANDHI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_INDIRA_GANDHI.png', 'https://www.indiragandhi.edu.ec/', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:54:16'),
(16, 'UNIDAD EDUCATIVA COLEGIO FRANCÉS DE QUITO ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_COLEGIO_FRANCÉS_DE_QUITO.png', 'https://colegiofrances.edu.ec', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:54:37'),
(17, 'UNIDAD EDUCATIVA JAHIBÉ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_JAHIBÉ.png', 'https://www.facebook.com/jahibe.ec/?locale=es_LA', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:55:25'),
(18, 'LOS OLIVOS SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/LOS_OLIVOS_SCHOOL.png', 'https://olivosschool.com/', 'Sierra', 1, '2025-01-07 12:19:53', '2025-01-07 19:58:37'),
(19, 'EL SAUCE SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/EL_SAUCE_SCHOOL.png', 'https://www.facebook.com/SauceSchool/', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 19:59:15'),
(20, 'UNIDAD EDUCATIVA GLENN DOMAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_GLENN_DOMAN.png', 'https://www.glenndoman.edu.ec/', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 19:59:56'),
(21, 'UNIDAD EDUCATIVA HOPE CHRISTIAN ACADEMY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_HOPE_CHRISTIAN_ACADEMY.png', 'https://www.hopeacademy.edu.ec/', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:00:07'),
(22, 'UNIDAD EDUCATIVA BILINGÜE HONTANAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BILINGÜE_HONTANAR.png', 'https://hontanar.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:00:43'),
(23, 'UNIDAD EDUCATIVA GIOVANNI BATISTA MONTINI PAULO VI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_GIOVANNI_BATISTA_MONTINI_PAOLO_VI.png', 'https://gbmpaulovi.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:02:00'),
(24, 'COLEGIO INTISANA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/COLEGIO_INTISANA.png', 'https://www.intisana.com', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:02:17'),
(25, 'UNIDAD EDUCATIVA PARTICULAR EFRATA', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_EFRATA.png', 'https://efrata.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:03:07'),
(26, 'UNIDAD EDUCATIVA VOLCÁN COTOPAXI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_VOLCÁN_COTOPAXI.png', 'https://www.volcancotopaxi.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:03:28'),
(27, 'INTERNATIONAL SCHOLASTIC MODEL QUITO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/INTERNATIONAL_SCHOLASTIC_MODEL_QUITO.png', 'https://www.ism.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:03:47'),
(28, 'INTERNATIONAL SCHOLASTIC MODEL NORTH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/INTERNATIONAL_SCHOLASTIC_MODEL_NORTH.png', 'https://www.ism.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:03:55'),
(29, 'UNIDAD EDUCATIVA JAQUES DALCROZE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_JAQUES_DALCROZE.png', 'https://ejd.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:04:59'),
(30, 'UNIDAD EDUCATIVA ARISTÓTELES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_ARISTÓTELES.png', 'https://www.facebook.com/aristotelesunidadeducativa/?locale=es_LA', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:05:19'),
(31, 'UNIDAD EDUCATIVA PENSIONADO AMERICANO SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PENSIONADO_SUDAMERICANO.png', 'https://pensionadoamericano.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:06:01'),
(32, 'UNIDAD EDUCATIVA BILINGÜE SAN MARINO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BILINGÜE_SAN_MARINO.png', 'https://colegiosanmarino.com', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:07:29'),
(33, 'UNIDAD EDUCATIVA PARTICULAR SANTO DOMINGO SAVIO DE POMASQUI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_SANTO_DOMINGO_SAVIO.png', 'https://domingosavio.edu.ec', 'Sierra', 1, '2025-01-07 12:25:18', '2025-01-07 20:07:43'),
(34, 'UNIDAD EDUCATIVA BILINGÜE SCOTLAND HIGH SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BILINGÜE_SCOTLAND_HIGH_SCHOOL.png', 'https://scotlandschool.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:08:33'),
(35, 'VICTORIA BILINGUAL CHRISTIAN ACADEMY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/VICTORIA_BILINGUAL_CHRISTIAN_ACADEMY.png', 'https://victoriaacademy.edu.ec/', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:08:16'),
(36, 'UNIDAD EDUCATIVA PARTICULAR JEZREEL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_JEZREEL.png', 'https://www.facebook.com/colegiojezreelinternacional/?locale=es_LA', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:08:01'),
(37, 'UNIDAD EDUCATIVA PARTICULAR JIM IRWIN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_JIM_IRWIN.png', 'https://www.colegiojimirwin.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:09:58'),
(38, 'UNIDAD EDUCATIVA BRITÁNICO LOS ANDES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BRITÁNICO_LOS_ANDES.png', 'https://www.britanicolosandes.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:10:18'),
(39, 'UNIDAD EDUCATIVA BILINGÜE CEBI', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BILINGÜE_CEBI.png', 'https://cebi.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:10:28'),
(40, 'CONTINENTAL SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/CONTINENTAL_SCHOOL.png', 'https://continentaltiamarita.com', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:10:56'),
(41, 'UNIDAD EDUCATIVA PARTICULAR REY SALOMÓN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_REY_SALOMÓN.png', 'https://www.reysalomon.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:11:28'),
(42, 'ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR DESCUBRIR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_DE_EDUCACIÓN_BÁSICA_PARTICULAR_DESCUBRIR.png', 'https://eebpdescubrir.blogspot.com', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:16:39'),
(43, 'UNIDAD EDUCATIVA BILINGÜE CELITE', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BILINGÜE_CELITE.png', 'https://institucion.celite.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:16:19'),
(44, 'ESCUELA PARTICULAR LOS SAUCES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_PARTICULAR_LOS_SAUCES.png', 'https://www.facebook.com/lossaucesescuela', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:17:01'),
(45, 'UNIDAD EDUCATIVA PARTICULAR CRISTIANA HENRY DAVIS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_CRISTIANA_HENRY_DAVIS.png', 'https://www.facebook.com/UEPC.HDavis', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:12:45'),
(46, 'INSTITUCIÓN EDUCATIVA PARTICULAR FRANKLIN ROOSEVELT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/INSTITUCIÓN_EDUCATIVA_PARTICULAR_FRANKLIN_ROOSEVELT.png', 'https://www.facebook.com/p/Pensionado-Roosevelt-100063644948544', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:13:33'),
(47, 'EDUKASA LEARNING TOGETHER', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/EDUKASA_LEARNING_TOGETHER.png', 'https://edukasalearning.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:15:52'),
(48, 'ESCUELA PARTICULAR SÓCRATES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_PARTICULAR_SÓCRATES.png', 'https://www.facebook.com/profile.php?id=61559688308205', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:18:15'),
(49, 'UNIDAD EDUCATIVA JEAN-JACQUES ROUSSEAU', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_JEAN_JACQUES_ROUSSEAU.png', 'https://www.rousseau.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:18:37'),
(50, 'UNIDAD EDUCATIVA PENSIONADO SUDAMERICANO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PENSIONADO_SUDAMERICANO.png', 'https://www.facebook.com/pensionadosudamericano/?locale=es_LA', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:18:54'),
(51, 'UNIDAD EDUCATIVA ÁRBOL DE VIDA ACADEMY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_ÁRBOL_DE_VIDA_ACADEMY.png', 'https://arboldevida.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:19:03'),
(52, 'UNIDAD EDUCATIVA PARTICULAR PÍO JARAMILLO ALVARADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_PÍO_JARAMILLO_ALVARADO.png', 'https://www.facebook.com/p/Colegio-Particular-Pio-Jaramillo-Alvarado-100057272387554/?locale=es_LA', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:19:22'),
(53, 'UNIDAD EDUCATIVA PLANETA AZUL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PLANETA_AZUL.png', 'https://planetaazul.edu.ec', 'Sierra', 1, '2025-01-07 12:34:27', '2025-01-07 20:19:40'),
(54, 'ESCUELA DE EDUCACIÓN BÁSICA PARTICULAR SACHA MAYU SCHOOL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_DE_EDUCACIÓN_BÁSICA_PARTICULAR_SACHA_MAYU.png', 'https://www.facebook.com/watch/112039098235638', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:15:24'),
(55, 'UNIDAD EDUCATIVA \"THOMAS RUSSELL CRAMPTON\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_THOMAS_RUSSELL_CRAMPTON.png', 'https://www.facebook.com/trc.edu.ec', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:20:24'),
(56, 'UNIDAD EDUCATIVA PARTICULAR GENERAL ELOY ALFARO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_GENERAL_ELOY_ALFARO.png', 'https://uegraleloyalfaro.edu.ec/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:12:14'),
(57, 'UNIDAD EDUCATIVA LICEO DE CIENCIAS Y ARTES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_LICEO_DE_CIENCIAS_Y_ARTES.png', 'https://www.uelca.com/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:12:05'),
(58, 'UNIDAD EDUCATIVA LATINOAMERICANO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_LATINOAMERICANO.png', 'https://www.colegiolatinoamericano.edu.ec/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:11:56'),
(59, 'INSTITUCION EDUCATIVA ALEXANDER FERSMAN', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/INSTITUCION_EDUCATIVA_ALEXANDER_FERSMAN.png', 'https://www.facebook.com/escuelalexanderfersman/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:14:00'),
(60, 'ESCUELA BATALLA NAVAL DE JAMBELÍ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_BATALLA_NAVAL_DE_JAMBELÍ.png', 'https://e-b-n-j.webnode.es/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:28:06'),
(61, 'UNIDAD EDUCATIVA \"BILINGUE INTERAMEIRCANA\"', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_BILINGUE_INTERAMERICANA.png', 'https://www.facebook.com/uebicuenca/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:22:01'),
(62, 'UNIDAD EDUCATIVA PARTICULAR YANUNCAY', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_YANUNCAY.png', 'https://www.facebook.com/UEYanuncay/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:21:15'),
(63, 'ESCUELA PARTICULAR LOS ALPES', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/ESCUELA_PARTICULAR_LOS_ALPES.png', 'https://www.facebook.com/ueplosalpes/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 20:20:57'),
(64, 'UNIDAD EDUCATIVA LA GRANJA CEBLAG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_LA_GRANJA_CEBLAG.png', 'https://www.ceblag.org/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 19:44:47'),
(65, 'UNIDAD EDUCATIVA NUEVO MUNDO - AMBATO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_NUEVO_MUNDO_AMBATO.png', 'https://nuevomundoambato.edu.ec/', 'Sierra', 1, '2025-01-07 12:43:50', '2025-01-07 19:44:35'),
(66, 'UNIDAD EDUCATIVA PARTICULAR SAMUEL BACKETT', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_SAMUEL_BACKETT.png', 'https://www.facebook.com/samuelbeckettuep/?', 'Sierra', 1, '2025-01-07 13:13:50', '2025-01-07 19:43:50'),
(67, 'UNIDAD EDUCATIVA EL PRADO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_EL_PRADO.png', 'https://colegioelprado.edu.ec/', 'Sierra', 1, '2025-01-07 13:13:50', '2025-01-07 19:43:33'),
(68, 'UNIDAD EDUCATIVA LICEO MYR. GALO MIÑO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_LICEO_MYR_GALO_MIÑO.png', 'https://ueligami.edu.ec', 'Sierra', 1, '2025-01-07 13:13:50', '2025-01-07 19:42:26'),
(69, 'UNIDAD EDUCATIVA PARTICULAR BILINGÜE COMPUTER WORLD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_BILINGÜE_COMPUTER_WORLD.png', 'https://www.jasonmiller.edu.ec/index.php', 'Sierra', 1, '2025-01-07 13:13:50', '2025-01-07 19:43:23'),
(70, 'UNIDAD EDUCATIVA PARTICULAR EMANUEL', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_EMANUEL.png', 'https://www.ueeg.edu.ec', 'Sierra', 1, '2025-01-07 13:13:50', '2025-01-07 19:42:44'),
(71, 'UNIDAD EDUCATIVA PARTICULAR ENMA GRACIELA ROMERO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_ENMA_GRACIELA_ROMERO.png', 'https://www.facebook.com/p/UEP-Enma-Graciela-Romero-100057220459027/', 'Sierra', 1, '2025-01-07 13:13:50', '2025-01-07 19:43:07'),
(72, 'UNIDAD EDUCATIVA LAGO AGRIO AMAZÓNICO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_LAGO_AGRIO_AMAZÓNICO.png', 'https://ceila.edu.ec', 'Amazonía', 1, '2025-01-07 13:13:50', '2025-01-07 19:45:51'),
(73, 'UNIDAD EDUCATIVA PARTICULAR AMAZONAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_AMAZONAS.png', 'https://iebysa.edu.ec', 'Amazonía', 1, '2025-01-07 13:13:50', '2025-01-07 19:41:46'),
(74, 'UNIDAD EDUCATIVA PARTICULAR SIMÓN BOLÍVAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'images/socios/UNIDAD_EDUCATIVA_PARTICULAR_SIMÓN_BOLÍVAR.png', 'https://simonbolivar-ec.com/', 'Amazonía', 1, '2025-01-07 13:13:50', '2025-01-07 19:41:17');




INSERT INTO `w5_archivos` (`arc_id`, `arc_nombre`, `arc_ruta`, `arc_usuario_id`, `arc_tipo`, `arc_id_padre`, `arc_fecha_creacion`, `arc_fecha_modificacion`) VALUES
(1, 'ACUERDOS_MINISTERIALES_2024', '', '', 'carpeta', 0, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(2, 'Actualización del Cronograma Escolar Costa-Galápagos año lectivo 2024-2025 para las instituciones educativas de sostenimiento fiscal', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(3, 'Cronograma de actividades para los estudiantes de tercer curso de bachillerato - Régimen Sierra - Amazonía 2023 - 2024', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(4, 'Cronograma Escolar Costa – Galápagos años lectivo 2024-2025', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(5, 'Cronograma escolar régimen Sierra-Amazonía, año lectivo 2024-2025, para las instituciones educativas de sostenimiento fiscal De mi', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(6, 'Disposiciones desde el 22 de abril de 2024 mientras dure la emergencia energética declarada mediante el Decreto Ejecutivo No. 229 de 19 de abril de 2024', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(7, 'Educación en casa', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(8, 'Instructivo de evaluación Sierra - Amazonía', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(9, 'Listado de héroes y heroínas', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(10, 'Normativa para regular los procesos de evaluación educativa y los procesos organizacionales de las instituciones educativas de todos los sostenimientos del sistema nacional de educación', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(11, 'NORMATIVA QUE REGULA LA CONFORMACIÓN Y FUNCIONES DE LOS ORGANISMOS ESCOLARES ACADÉMICOS DE LAS INSTITUCIONES EDUCATIVAS DEL SISTEMA NACIONAL DE EDUCACIÓN', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(12, 'Organismos Escolares Académicos y Consejo Académico Educativo', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(13, 'Participación Estudiantil 2024-2025', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(14, 'Plan de Acción ante épocas lluviosas', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(15, 'UNICEF - Guia para prevenir el acoso', '', '', 'carpeta', 1, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(16, '20240424 MINEDUC-MINEDUC-2024-00160-M', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Actualización_del_Cronograma_Escolar_Costa-Galápagos_año_lectivo_2024-2025_para_las_instituciones_educativas_de_sostenimiento_fiscal/20240424_MINEDUC-MINEDUC-2024-00160-M.pdf', '', 'archivo', 2, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(17, 'anexo_14_-_cronograma_evaluaciÓn_final_bachillerato_-_sierra_05_04_240957774001713805493', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Cronograma_de_actividades_para_los_estudiantes_de_tercer_curso_de_bachillerato_-_Régimen_Sierra_-_Amazonía_2023_-_2024/anexo_14_-_cronograma_evaluaciÓn_final_bachillerato_-_sierra_05_04_240957774001713805493.pdf', '', 'archivo', 3, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(18, 'instru_10792306001712942535', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Cronograma_de_actividades_para_los_estudiantes_de_tercer_curso_de_bachillerato_-_Régimen_Sierra_-_Amazonía_2023_-_2024/instru_10792306001712942535.pdf', '', 'archivo', 3, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(20, 'CRONOGRAMA ESCOLAR - MINEDUC-MINEDUC-2024-00249-M', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Cronograma_escolar_régimen_Sierra-Amazonía,_año_lectivo_2024-2025,_para_las_instituciones_educativas_de_sostenimiento_fiscal_De_mi/CRONOG~1.PDF', '', 'archivo', 5, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(23, 'MINEDUC-MINEDUC-2024-00024-A', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Disposiciones_desde_el_22_de_abril_de_2024_mientras_dure_la_emergencia_energética_declarada_mediante_el_Decreto_Ejecutivo_No._229_de_19_de_abril_de_2024/MINEDU~1.PDF', '', 'archivo', 6, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(24, 'mineduc-mineduc-2023-00069-A EDUCACION EN CASA', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Educación_en_casa/mineduc-mineduc-2023-00069-A_EDUCACION_EN_CASA.pdf', '', 'archivo', 7, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(25, 'MINEDUC-SEDMQ-2023-00076-C (2) EDUCACION EN CASA', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Educación_en_casa/MINEDUC-SEDMQ-2023-00076-C_(2)_EDUCACION_EN_CASA.pdf', '', 'archivo', 7, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(26, 'Instructivo de Evaluación_Sierra-Amazonía_2024', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Instructivo_de_evaluación_Sierra_-_Amazonía/Instructivo_de_Evaluación_Sierra-Amazonía_2024.pdf', '', 'archivo', 8, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(27, 'listado de heroes y heroinas', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Listado_de_héroes_y_heroínas/listado_de_heroes_y_heroinas.pdf', '', 'archivo', 9, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(28, 'MINEDUC-MINEDUC-2024-00031-A', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Normativa_para_regular_los_procesos_de_evaluación_educativa_y_los_procesos_organizacionales_de_las_instituciones_educativas_de_todos_los_sostenimientos_del_sistema_nacional_de_educación/MINEDU~1.PDF', '', 'archivo', 10, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(29, 'ACUERDO 2024-00066-A-Organismos Esc', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/NORMATIVA_QUE_REGULA_LA_CONFORMACIÓN_Y_FUNCIONES_DE_LOS_ORGANISMOS_ESCOLARES_ACADÉMICOS_DE_LAS_INSTITUCIONES_EDUCATIVAS_DEL_SISTEMA_NACIONAL_DE_EDUCACIÓN/ACUERD~1.PDF', '', 'archivo', 11, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(30, 'acuerdo_ministerial_mineduc-mineduc-2024-00066-a', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Organismos_Escolares_Académicos_y_Consejo_Académico_Educativo/acuerdo_ministerial_mineduc-mineduc-2024-00066-a.pdf', '', 'archivo', 12, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(31, 'acuerdo_ministerial_mineduc-mineduc-2024-00068-a', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Organismos_Escolares_Académicos_y_Consejo_Académico_Educativo/acuerdo_ministerial_mineduc-mineduc-2024-00068-a.pdf', '', 'archivo', 12, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(32, 'MINEDUC-SEDMQ-2024-05126-M (2)', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Organismos_Escolares_Académicos_y_Consejo_Académico_Educativo/MINEDUC-SEDMQ-2024-05126-M_(2).pdf', '', 'archivo', 12, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(33, 'acuerdo_no._mineduc-mineduc-2023-00024-a_participación_estudiantil_(codificado)_(31-07-2023) D1 (1)', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Participación_Estudiantil_2024-2025/acuerdo_no._mineduc-mineduc-2023-00024-a_participación_estudiantil_(codificado)_(31-07-2023)_D1_(1).pdf', '', 'archivo', 13, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(34, 'mineduc-mineduc-2023-00031-a0192694001690561873-ACUERDO 31-A (1)', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Participación_Estudiantil_2024-2025/mineduc-mineduc-2023-00031-a0192694001690561873-ACUERDO_31-A_(1).pdf', '', 'archivo', 13, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(35, 'MINEDUC-SIEBV-2024-01606-M - LINEAMIENTOS (1)', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Participación_Estudiantil_2024-2025/MINEDUC-SIEBV-2024-01606-M_-_LINEAMIENTOS_(1).pdf', '', 'archivo', 13, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(36, 'BP_Ministerio de Educación implementa el Plan de Acción ante época lluviosa para proteger a la comunidad educativa.docx', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Plan_de_Acción_ante_épocas_lluviosas/BP_Ministerio_de_Educación_implementa_el_Plan_de_Acción_ante_época_lluviosa_para_proteger_a_la_comunidad_educativa.docx.pdf', '', 'archivo', 14, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(37, 'UNICEF-Guia-Prevenir-Acoso-Escolar-2024', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/UNICEF_-_Guia_para_prevenir_el_acoso/UNICEF-Guia-Prevenir-Acoso-Escolar-2024.pdf', '', 'archivo', 15, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(38, 'LINEAMIENTOS_2024', '', '', 'carpeta', 0, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(39, 'Lineamientos para el inicio del año lectivo 2024 - 2025', '', '', 'carpeta', 38, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(40, 'Lineamientos para la aplicación del Reglamento para la regulación de pensiones y matrículas en las instituciones educativas particulares y fiscomisionales del Sistema Nacional de Educación para el año lectivo 2024 - 2025, régimen Sierra - Amazonía', '', '', 'carpeta', 38, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(41, 'Lineamientos pedagógicos de inicio de año lectivo 2024-2025, régimen Costa - Galápagos', '', '', 'carpeta', 38, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(42, 'Lineamientos pedagógicos para el cierre de año lectivo 2023 - 2024, Régimen Sierra Amazonía', '', '', 'carpeta', 38, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(43, 'LINEAMIENTOS INICIO DEL AÑO 2024-2025', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_para_el_inicio_del_año_lectivo_2024_-_2025/LINEAMIENTOS_INICIO_DEL_AÑO_2024-2025.pdf', '', 'archivo', 39, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(44, 'PORTAFOLIO DECE 2024-2025', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_para_el_inicio_del_año_lectivo_2024_-_2025/PORTAFOLIO_DECE_2024-2025.docx', '', 'archivo', 39, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(45, 'lineamientos_costos_sierra_-_amazonía_2024-2025-signed-signed (2)', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_para_la_aplicación_del_Reglamento_para_la_regulación_de_pensiones_y_matrículas_en_las_instituciones_educativas_particulares_y_fiscomisionales_del_Sistema_Nacional_de_Educación_para_el_año_lectivo_2024_-_2025,_régimen_Sierra_-_Amazonía/LINEAM~1.PDF', '', 'archivo', 40, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(46, 'MINEDUC-SASRE-2024-00173-M (2)', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_para_la_aplicación_del_Reglamento_para_la_regulación_de_pensiones_y_matrículas_en_las_instituciones_educativas_particulares_y_fiscomisionales_del_Sistema_Nacional_de_Educación_para_el_año_lectivo_2024_-_2025,_régimen_Sierra_-_Amazonía/MINEDU~1.PDF', '', 'archivo', 40, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(47, 'lineamientos_pedagógicos_del_año_2024_-_2025-1', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_pedagógicos_de_inicio_de_año_lectivo_2024-2025,_régimen_Costa_-_Galápagos/lineamientos_pedagógicos_del_año_2024_-_2025-1.pdf', '', 'archivo', 41, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(48, 'MINEDUC-SEDMQ-2024-01807-M', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_pedagógicos_de_inicio_de_año_lectivo_2024-2025,_régimen_Costa_-_Galápagos/MINEDUC-SEDMQ-2024-01807-M.pdf', '', 'archivo', 41, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(49, 'lIneamientos 2023-2024 cierre de año', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_pedagógicos_para_el_cierre_de_año_lectivo_2023_-_2024,_Régimen_Sierra_Amazonía/lIneamientos_2023-2024_cierre_de_año.pdf', '', 'archivo', 42, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(50, 'MINEDUC-SFE-2024-00236-M', 'REPOSITORIO/LINEAMIENTOS_2024/Lineamientos_pedagógicos_para_el_cierre_de_año_lectivo_2023_-_2024,_Régimen_Sierra_Amazonía/MINEDUC-SFE-2024-00236-M.pdf', '', 'archivo', 42, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(51, 'RESOLUCIONES_2024', '', '', 'carpeta', 0, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(52, 'Agencias que ofertan estudios en el exterior', '', '', 'carpeta', 51, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(53, 'Derogación del Acuerdo Ministerial 86A - Fortalecimiento y Renovación Curricular', '', '', 'carpeta', 51, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(54, 'Emisión del Instructivo específico para la elaboración y-o aplicación de la evaluación final del Bachillerato para el régimen Sierra- Amazonía periodo lectivo 2023-2024', '', '', 'carpeta', 51, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(55, 'Inserción curricular de Educación Cívica, Ética e Integridad', '', '', 'carpeta', 51, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(56, 'Inserciones curriculares', '', '', 'carpeta', 51, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(57, 'LOEI', '', '', 'carpeta', 51, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(58, 'MINEDUC-SEDMQ-2024-01072-M', 'REPOSITORIO/RESOLUCIONES_2024/Agencias_que_ofertan_estudios_en_el_exterior/MINEDUC-SEDMQ-2024-01072-M.pdf', '', 'archivo', 52, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(59, 'MINEDUC-MINEDUC-2024-00060-A', 'REPOSITORIO/RESOLUCIONES_2024/Derogación_del_Acuerdo_Ministerial_86A_-_Fortalecimiento_y_Renovación_Curricular/MINEDUC-MINEDUC-2024-00060-A.pdf', '', 'archivo', 53, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(60, 'anexo_14_-_cronograma_evaluaciÓn_final_bachillerato_-_sierra_05_04_240957774001713805493', 'REPOSITORIO/RESOLUCIONES_2024/Emisión_del_Instructivo_específico_para_la_elaboración_y-o_aplicación_de_la_evaluación_final_del_Bachillerato_para_el_régimen_Sierra-_Amazonía_periodo_lectivo_2023-2024/ANEXO_~1.PDF', '', 'archivo', 54, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(61, 'instru_10792306001712942535', 'REPOSITORIO/RESOLUCIONES_2024/Emisión_del_Instructivo_específico_para_la_elaboración_y-o_aplicación_de_la_evaluación_final_del_Bachillerato_para_el_régimen_Sierra-_Amazonía_periodo_lectivo_2023-2024/INSTRU~2.PDF', '', 'archivo', 54, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(62, 'INSTRUCTIVO EVALUACIÓN FINAL DE BACH- SIERRA_09-04-24-signed-signed-signed-signed-signed FINAL-signed-signed_12_04_24', 'REPOSITORIO/RESOLUCIONES_2024/Emisión_del_Instructivo_específico_para_la_elaboración_y-o_aplicación_de_la_evaluación_final_del_Bachillerato_para_el_régimen_Sierra-_Amazonía_periodo_lectivo_2023-2024/INSTRU~1.PDF', '', 'archivo', 54, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(63, 'MINEDUC-SEDMQ-2024-01948-M', 'REPOSITORIO/RESOLUCIONES_2024/Emisión_del_Instructivo_específico_para_la_elaboración_y-o_aplicación_de_la_evaluación_final_del_Bachillerato_para_el_régimen_Sierra-_Amazonía_periodo_lectivo_2023-2024/MINEDU~1.PDF', '', 'archivo', 54, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(64, 'educación_cívica', 'REPOSITORIO/RESOLUCIONES_2024/Inserción_curricular_de_Educación_Cívica,_Ética_e_Integridad/educación_cívica.pdf', '', 'archivo', 55, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(65, 'mineduc-mineduc-2024-00305-m0663379001724687337', 'REPOSITORIO/RESOLUCIONES_2024/Inserción_curricular_de_Educación_Cívica,_Ética_e_Integridad/mineduc-mineduc-2024-00305-m0663379001724687337.pdf', '', 'archivo', 55, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(66, 'MINEDUC-SEDMQ-2024-04389-M', 'REPOSITORIO/RESOLUCIONES_2024/Inserción_curricular_de_Educación_Cívica,_Ética_e_Integridad/MINEDUC-SEDMQ-2024-04389-M.pdf', '', 'archivo', 55, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(67, 'Inserción Curricular Cívica Ética e Integridad', 'REPOSITORIO/RESOLUCIONES_2024/Inserciones_curriculares/Inserción_Curricular_Cívica_Ética_e_Integridad.pdf', '', 'archivo', 56, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(68, 'Inserciones curriculares de Educación Financiera para Bachillerato', 'REPOSITORIO/RESOLUCIONES_2024/Inserciones_curriculares/Inserciones_curriculares_de_Educación_Financiera_para_Bachillerato.pdf', '', 'archivo', 56, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(69, 'Inserciones curriculares para el desarrollo sostenible para Bachillerato', 'REPOSITORIO/RESOLUCIONES_2024/Inserciones_curriculares/Inserciones_curriculares_para_el_desarrollo_sostenible_para_Bachillerato.pdf', '', 'archivo', 56, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(70, 'LOEI nueva', 'REPOSITORIO/RESOLUCIONES_2024/LOEI/LOEI_nueva.pdf', '', 'archivo', 57, '2025-01-08 05:00:00', '2025-01-08 05:00:00'),
(71, '20240424 MINEDUC-MINEDUC-2024-00160-M', 'REPOSITORIO/ACUERDOS_MINISTERIALES_2024/Cronograma_Escolar_Costa_–_Galápagos_años_lectivo_2024-2025/20240424_MINEDUC-MINEDUC-2024-00160-M.pdf', '', 'archivo', 4, '2025-01-08 05:00:00', '2025-01-08 05:00:00');



INSERT INTO `w5_videos` (`vid_id`, `vid_nombre`, `vid_ruta`, `vid_usuario_id`, `vid_tipo`, `vid_id_padre`, `vid_fecha_creacion`, `vid_fecha_modificacion`) VALUES
(1, '2024', '', '', 'carpeta', 0, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(2, 'ABRIL', '', '', 'carpeta', 1, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(3, 'MAYO', '', '', 'carpeta', 1, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(4, 'JUNIO', '', '', 'carpeta', 1, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(5, 'AGOSTO', '', '', 'carpeta', 1, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(6, 'Zoom', '', '', 'carpeta', 1, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(7, 'Noviembre', '', '', 'carpeta', 6, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(8, 'video1448160890', 'https://drive.google.com/file/d/1YykGW2IdAacy-W6QNGDaT4JfjCt8atl0/preview', '', 'video', 2, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(9, 'video1936017807', 'https://drive.google.com/file/d/1JKf3Y20MxsAPhaOe1dOEK8B11qaETsAM/preview', '', 'video', 2, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(10, 'video1994723097', 'https://drive.google.com/file/d/1YuQrJbj-NwUtZMe9chYQPy0fmCW1vbaF/preview', '', 'video', 2, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(11, 'video1081932140', 'https://drive.google.com/file/d/14TbxbQIjLn2TEj0rKATmHluW__McGHBy/preview', '', 'video', 3, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(14, 'video1265672692', 'https://drive.google.com/file/d/1j401rsQg4auV96N92jhepHJC2MHAY-mj/preview', '', 'video', 5, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(17, 'GMT20240925-230917_Recording_640x360', 'https://drive.google.com/file/d/1-06mc50eK47L75WaVsNZFLoEL1SCX7eL/preview', '', 'video', 7, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(18, 'GMT20240925-230917_Recording_640x360', 'https://drive.google.com/file/d/1--hZI-hGRhsBUYBPCYxz1Kf6x96m8qoC/preview', '', 'video', 7, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(19, 'video1589407430', 'https://drive.google.com/file/d/16jHBYBezarM7o855CSG-glqGqLrUXiWX/preview', '', 'video', 5, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(20, 'video1923158455', 'https://drive.google.com/file/d/1a5YzE6r-Ro-jF2ZiC6GMn8UAdpjDH82U/preview', '', 'video', 5, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(21, 'video1045261164', 'https://drive.google.com/file/d/1vwaAKv0_141vs3p-n0oCcWHZOkM9Zrwr/preview', '', 'video', 4, '2025-01-09 05:00:00', '2025-01-09 05:00:00'),
(22, 'video1217941787', 'https://drive.google.com/file/d/1TMJn6c5yDjKnoORn3UWmjYko5olJbRNS/preview', '', 'video', 4, '2025-01-09 05:00:00', '2025-01-09 05:00:00');