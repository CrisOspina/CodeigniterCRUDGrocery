-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2019 a las 09:30:00
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `momento2co`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `pkid` bigint(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `eps` varchar(50) NOT NULL,
  `tipoid` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `tipocliente` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fechaingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechamodificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `observaciones` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`pkid`, `nombre`, `apellidos`, `telefono`, `fechanacimiento`, `eps`, `tipoid`, `id`, `tipocliente`, `imagen`, `fechaingreso`, `fechamodificacion`, `observaciones`) VALUES
(4, 'Thor', 'Midgard', '44455566', '1989-05-02', '7', '6', '111', '6', 'b5aae-4d97d-1.jpg', '2019-05-02 05:58:10', '2019-05-02 05:58:10', '<p>\n	Excelente servicio...</p>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificacion`
--

CREATE TABLE `identificacion` (
  `pkid` bigint(20) NOT NULL,
  `eps` varchar(50) NOT NULL,
  `tipoid` varchar(20) NOT NULL,
  `tipocliente` varchar(50) NOT NULL,
  `fechaingreso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fechamodificacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `identificacion`
--

INSERT INTO `identificacion` (`pkid`, `eps`, `tipoid`, `tipocliente`, `fechaingreso`, `fechamodificacion`) VALUES
(4, 'Sura', 'Cedula', 'Programador', '2019-05-02 05:45:49', '2019-05-02 05:45:49'),
(6, 'Sisben', 'Pasaporte', 'Deportista', '2019-05-02 05:52:57', '2019-05-02 05:52:57'),
(7, 'Savia', 'Tarjeta de identidad', 'Secretaria', '2019-05-02 05:53:54', '2019-05-02 05:53:54');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`pkid`);

--
-- Indices de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  ADD PRIMARY KEY (`pkid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `pkid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `identificacion`
--
ALTER TABLE `identificacion`
  MODIFY `pkid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
