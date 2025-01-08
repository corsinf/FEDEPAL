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

