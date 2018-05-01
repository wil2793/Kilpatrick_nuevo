-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2018 a las 20:20:23
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rcontrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `matricula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombrealumno` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rcontrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(3) NOT NULL,
  `grado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `nombregrupo` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `matricula` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombrealumno` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombremateria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `calificacion` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `nombregrupo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombremaestro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombremateria` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`nombregrupo`, `nombremaestro`, `nombremateria`) VALUES
('3SB', 'Yamil', 'Fisica II');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestro`
--

CREATE TABLE `maestro` (
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombremaestro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `contrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rcontrasenia` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `maestro`
--

INSERT INTO `maestro` (`correo`, `nombremaestro`, `contrasenia`, `rcontrasenia`) VALUES
('liz@gmail.com', 'Lizbeth', '1234', '1234'),
('pati@gmail.com', 'Patricia', '1234', '1234'),
('yamil@gmail.com', 'Yamil', '1234', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `nombremateria` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`nombremateria`) VALUES
('Fisica II'),
('quimica'),
('Sistemas Operativos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`correo`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `matricula` (`nombrealumno`),
  ADD UNIQUE KEY `nombregrupo` (`nombregrupo`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`matricula`),
  ADD UNIQUE KEY `nombrealumno` (`nombrealumno`),
  ADD UNIQUE KEY `nombremateria` (`nombremateria`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`nombregrupo`),
  ADD UNIQUE KEY `nombremaestro` (`nombremaestro`),
  ADD UNIQUE KEY `nombremateria` (`nombremateria`);

--
-- Indices de la tabla `maestro`
--
ALTER TABLE `maestro`
  ADD PRIMARY KEY (`correo`),
  ADD UNIQUE KEY `nombremaestro` (`nombremaestro`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`nombremateria`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`nombregrupo`) REFERENCES `grupos` (`nombregrupo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `alumno` (`matricula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`nombrealumno`) REFERENCES `alumno` (`nombrealumno`) ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`nombremateria`) REFERENCES `materias` (`nombremateria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`nombremateria`) REFERENCES `materias` (`nombremateria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`nombremaestro`) REFERENCES `maestro` (`nombremaestro`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
