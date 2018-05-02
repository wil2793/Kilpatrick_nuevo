-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2018 a las 06:34:34
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

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`correo`, `nombre`, `contrasenia`, `rcontrasenia`) VALUES
('liz@gmail.com', 'Lizbeth', '1234', '1234'),
('lupe@gmail.com', 'Lupe', '1234', '1234');

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
  `grado` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`matricula`, `nombrealumno`, `correo`, `contrasenia`, `rcontrasenia`, `genero`, `edad`, `grado`) VALUES
('E427367', 'Victo', 'vic@gmail.comete', '1234', '1234', 'Hombre', 24, '3');

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
('Aero', 'Yamil', 'Telecomunicaciones'),
('H5', 'Yamil', 'Telecomunicaciones'),
('H6', 'Yamil', 'Sistemas Operativos'),
('H7', 'Panchito', 'Inteligencia Artificial');

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
('berme@gmail.com', 'Bermejos', '1234', '1234'),
('eu@gmail.com', 'Eunice', '1234', '1234'),
('liz@gmail.com', 'Lizbeth', '1234', '1234'),
('panchito@gmail.com', 'Panchito', '1234', '1234'),
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
('BBB'),
('In IV'),
('Inteligencia Artificial'),
('quimica'),
('Sistemas Operativos'),
('Telecomunicaciones');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `contrasenia` (`contrasenia`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `matricula` (`nombrealumno`) USING BTREE;

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
  ADD KEY `nombremaestro` (`nombremaestro`) USING BTREE,
  ADD KEY `nombremateria` (`nombremateria`) USING BTREE;

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
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `alumno` (`matricula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`nombrealumno`) REFERENCES `alumno` (`nombrealumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `calificaciones_ibfk_3` FOREIGN KEY (`nombremateria`) REFERENCES `materias` (`nombremateria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`nombremateria`) REFERENCES `materias` (`nombremateria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`nombremaestro`) REFERENCES `maestro` (`nombremaestro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
