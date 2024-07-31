-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-04-2019 a las 01:11:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base de datos alumnos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos de almnos`
--

DROP TABLE IF EXISTS `datos de almnos`;
CREATE TABLE `datos de almnos` (
  `Número de control` int(14) NOT NULL,
  `Primer nombre` varchar(10) NOT NULL,
  `Segundro nombre` varchar(10) NOT NULL,
  `Primer apellido` varchar(10) NOT NULL,
  `Segundo apellido` varchar(10) NOT NULL,
  `Especialidad` varchar(15) NOT NULL,
  `Materia` varchar(30) NOT NULL,
  `Correo electrónico` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos de almnos`
--

INSERT INTO `datos de almnos` (`Número de control`, `Primer nombre`, `Segundro nombre`, `Primer apellido`, `Segundo apellido`, `Especialidad`, `Materia`, `Correo electrónico`) VALUES
(9, 'Gonzalo', 'Gadiel', 'Ramirez', 'Hernandez', 'Programación', 'Administra e - learning', 'fantasmagh1@gmail.com'),
(10, 'Juan', 'Pablo', 'Diaz ', 'León', 'Programación', 'Administra e - learning', 'diazleon117@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos de almnos`
--
ALTER TABLE `datos de almnos`
  ADD PRIMARY KEY (`Número de control`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
