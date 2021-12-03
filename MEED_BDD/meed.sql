-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 21:54:15
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `meed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr1`
--

CREATE TABLE `pr1` (
  `id` int(10) NOT NULL,
  `pr` varchar(100) NOT NULL,
  `r1` varchar(100) NOT NULL,
  `r2` varchar(100) NOT NULL,
  `r3` varchar(100) NOT NULL,
  `r4` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pr1`
--

INSERT INTO `pr1` (`id`, `pr`, `r1`, `r2`, `r3`, `r4`, `correct`) VALUES
(18, '¿Qué sabemos de Federico Bua?', 'Enseñaba Programación', 'Enseñaba Emprendedurismo', 'Enseñaba Redes', 'Enseñaba IoT', 'Enseñaba IoT'),
(19, '¿Le quedan muchas materias a Maxi?', 'Siii!', 'Bastantes', 'Solo esta!', 'Casi nada!', 'Solo esta!'),
(20, '¿Quien es el director de TIC?', 'Ruben', 'Ariel', 'Dario', 'Roberto', 'Dario'),
(21, '¿Cuántas materias de tronco común tienen los alumnos de TIC de 5to año?', '8', '10', '6', '7', '8'),
(22, '¿Maxi aprueba proyecto?', 'Hmm dudoso', 'No lo sé', 'No', 'DEFINITIVAMENTE', 'DEFINITIVAMENTE'),
(23, '¿Maxi termina el secundario?', 'Todavía no', 'Claro que sí!', 'Le falta', 'HOY SE GRADUA!', 'HOY SE GRADUA!');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr2`
--

CREATE TABLE `pr2` (
  `id` int(10) NOT NULL,
  `pr` varchar(100) NOT NULL,
  `r1` varchar(100) NOT NULL,
  `r2` varchar(100) NOT NULL,
  `r3` varchar(100) NOT NULL,
  `r4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pr2`
--

INSERT INTO `pr2` (`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES
(2, '¿Cuántas materias de tronco común tienen los alumnos de TIC de 5to año?', '8', '10', '6', '7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr3`
--

CREATE TABLE `pr3` (
  `id` int(10) NOT NULL,
  `pr` varchar(100) NOT NULL,
  `r1` varchar(100) NOT NULL,
  `r2` varchar(100) NOT NULL,
  `r3` varchar(100) NOT NULL,
  `r4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pr3`
--

INSERT INTO `pr3` (`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES
(3, '¿Qué sabemos de Federico Bua?', 'Enseñaba Programación', 'Enseñaba Emprendedurismo', 'Enseñaba Redes', 'Enseñaba IoT');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pr4`
--

CREATE TABLE `pr4` (
  `id` int(10) NOT NULL,
  `pr` varchar(100) NOT NULL,
  `r1` varchar(100) NOT NULL,
  `r2` varchar(100) NOT NULL,
  `r3` varchar(100) NOT NULL,
  `r4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pr4`
--

INSERT INTO `pr4` (`id`, `pr`, `r1`, `r2`, `r3`, `r4`) VALUES
(4, '¿Maxi aprueba proyecto?', 'Hmm dudoso', 'No lo sé', 'No', 'DEFINITIVAMENTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pr1`
--
ALTER TABLE `pr1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pr2`
--
ALTER TABLE `pr2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pr3`
--
ALTER TABLE `pr3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pr4`
--
ALTER TABLE `pr4`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pr1`
--
ALTER TABLE `pr1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pr2`
--
ALTER TABLE `pr2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pr3`
--
ALTER TABLE `pr3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pr4`
--
ALTER TABLE `pr4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
