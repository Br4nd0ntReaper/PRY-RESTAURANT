-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2023 a las 05:32:02
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pedidos` text NOT NULL,
  `total` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `dni`, `nombre`, `apellido`, `direccion`, `celular`, `email`, `pedidos`, `total`) VALUES
(1, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 20),
(71, '72324936', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '999666555', 'brandonuriel321@gmail.com', '', 10),
(102, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 18),
(103, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 18),
(104, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 18),
(105, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 35),
(106, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 6),
(107, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 34),
(108, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '999999999', 'brandonuriel321@gmail.com', '', 11),
(109, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 21),
(110, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 30),
(111, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(112, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(113, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(114, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(115, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(116, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(117, '12123243', 'dsassd', 'sdsadasd', 'ssadasd', '900038992', 'brandonuriel321@gmail.com', '', 33),
(118, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(119, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(120, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(121, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(122, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(123, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(124, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(125, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(126, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(127, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '996562365', 'brandonuriel321@gmail.com', '', 52),
(128, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '996562365', 'brandonuriel321@gmail.com', '', 47),
(129, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '996562365', 'brandonuriel321@gmail.com', '', 47),
(130, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 103),
(131, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 103),
(132, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 103),
(133, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 103),
(134, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 103),
(135, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '666699996', 'brandonuriel321@gmail.com', '', 103),
(136, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '666699996', 'brandonuriel321@gmail.com', '', 103),
(137, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '999666555', 'brandonuriel321@gmail.com', '', 103),
(138, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '999999999', 'brandonuriel321@gmail.com', '', 103),
(139, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '969596956', 'brandonuriel321@gmail.com', '', 103),
(140, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '666699996', 'brandonuriel321@gmail.com', '', 103),
(141, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '666699996', 'brandonuriel321@gmail.com', '', 103),
(142, '72324935', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '999999999', 'brandonuriel321@gmail.com', '', 98),
(143, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(144, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(145, '16020735', 'Brandon Uriel', 'Tamayo', 'Calle Piura Mza. A Lote 2', '900038992', 'brandonuriel321@gmail.com', '', 33),
(146, '72324935', 'Brandon', 'Ortiz', 'SENATI', '986654321', 'prueba@gmail.com', '', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id` int(11) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `personas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `numeroMesa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservaciones`
--

INSERT INTO `reservaciones` (`id`, `dni`, `nombre`, `apellido`, `personas`, `fecha`, `hora`, `numeroMesa`) VALUES
(1, '72324935', 'sass', 'sassa', 3, '2023-08-30', '20:38:00', 2),
(2, '16020735', 'sass', 'lololol', 6, '2023-08-29', '21:40:00', 6),
(3, '72324935', 'sass', 'sassa', 3, '2023-08-23', '16:33:00', 2),
(4, '23121231', 'dsdsdsa', 'adsdsaad', 2, '2023-08-08', '16:34:00', 2),
(5, '72324935', 'dsa', 'sassa', 5, '2023-08-29', '13:21:00', 17),
(6, '72324935', 'sass', 'dsasadsa', 3, '2023-08-29', '10:30:00', 4),
(7, '72324935', 'sass', 'dsasadsa', 3, '2023-08-29', '10:30:00', 4),
(8, '16020735', 'sass', 'dsadasd', 3, '2023-08-30', '20:32:00', 1),
(9, '72324935', 'dsa', 'dsasadsa', 1, '2023-08-30', '10:32:00', 4),
(10, '72324935', 'dsa', 'sassa', 1, '2023-08-30', '11:34:00', 3),
(11, '72324935', 'dsa', 'sassa', 1, '2023-08-30', '11:34:00', 3),
(12, '72324935', 'dsa', 'sassa', 1, '2023-08-30', '11:34:00', 3),
(13, '72324935', 'dsa', 'sassa', 1, '2023-08-30', '11:34:00', 3),
(14, '72324935', 'dsa', 'dsasadsa', 4, '2023-08-31', '09:37:00', 2),
(15, '72324935', 'dsa', 'dsasadsa', 4, '2023-08-31', '09:37:00', 2),
(16, '72324935', 'dsa', 'dsasadsa', 4, '2023-08-31', '09:37:00', 2),
(17, '72324935', 'dsa', 'dsasadsa', 4, '2023-08-31', '09:37:00', 2),
(18, '72324935', 'dsa', 'dsasadsa', 4, '2023-08-31', '09:37:00', 2),
(19, '72324935', 'dsa', 'sassa', 2, '2023-09-06', '10:41:00', 2),
(20, '16359678', 'Brandon', 'Ortiz', 6, '2023-08-30', '14:28:00', 8);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
