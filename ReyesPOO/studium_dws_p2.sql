-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2021 a las 22:40:22
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `studium_dws_p2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos`
--

CREATE TABLE `ninos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fechaDeNacimiento` varchar(255) NOT NULL,
  `bueno` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ninos`
--

INSERT INTO `ninos` (`id`, `nombre`, `apellidos`, `fechaDeNacimiento`, `bueno`) VALUES
(5, 'Alberto', 'Alcantara', '1994/10/13', 0),
(6, 'Beatriz', 'Bueno', '1982/04/18', 1),
(7, 'Carlos', 'Crepo', '1998/12/01', 0),
(8, 'Diana', 'Dominguez', '1987/09/02', 0),
(9, 'Emilio', 'Enamorado', '1996/08/12', 1),
(10, 'Francisca', 'Fernandez', '1990/07/28', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ninos_regalos_rey`
--

CREATE TABLE `ninos_regalos_rey` (
  `ninos_id` int(11) NOT NULL,
  `regalos_id` int(11) NOT NULL,
  `rey_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ninos_regalos_rey`
--

INSERT INTO `ninos_regalos_rey` (`ninos_id`, `regalos_id`, `rey_id`) VALUES
(5, 8, 7),
(7, 9, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regalos`
--

CREATE TABLE `regalos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `regalos`
--

INSERT INTO `regalos` (`id`, `nombre`, `precio`) VALUES
(8, 'Aula de ciencia: Robot Mini ERP', '159,95'),
(9, 'Carbon', '0,00'),
(10, 'Cochecito Classic', '99,95'),
(11, 'Consola PS4 1 TB', '349,90'),
(12, 'Lego Villa Familiar Modular', '64,99'),
(13, 'Magia Borras Clasica 150 trucos con luz', '32,95'),
(14, 'Meccano Excavadora construccion', '30,99'),
(15, 'Nenuco hace pompas', '29,95'),
(16, 'Peluche delfin rosa', '34,00'),
(17, 'Pequeordenador', '22,95'),
(18, 'Robot COJI ', '69,95'),
(19, 'Telescopio astronomico terreste', '72,00'),
(20, 'Twister', '17,95');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rey`
--

CREATE TABLE `rey` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rey`
--

INSERT INTO `rey` (`id`, `nombre`) VALUES
(5, 'Melchor'),
(6, 'Gaspar'),
(7, 'Baltasar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ninos`
--
ALTER TABLE `ninos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ninos_regalos_rey`
--
ALTER TABLE `ninos_regalos_rey`
  ADD KEY `regalos_id` (`regalos_id`) USING BTREE,
  ADD KEY `rey_id` (`rey_id`) USING BTREE,
  ADD KEY `ninos_id` (`ninos_id`) USING BTREE;

--
-- Indices de la tabla `regalos`
--
ALTER TABLE `regalos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rey`
--
ALTER TABLE `rey`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ninos`
--
ALTER TABLE `ninos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `regalos`
--
ALTER TABLE `regalos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `rey`
--
ALTER TABLE `rey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ninos_regalos_rey`
--
ALTER TABLE `ninos_regalos_rey`
  ADD CONSTRAINT `ninos_regalos_rey_ibfk_1` FOREIGN KEY (`rey_id`) REFERENCES `rey` (`id`),
  ADD CONSTRAINT `ninos_regalos_rey_ibfk_2` FOREIGN KEY (`ninos_id`) REFERENCES `ninos` (`id`),
  ADD CONSTRAINT `ninos_regalos_rey_ibfk_3` FOREIGN KEY (`regalos_id`) REFERENCES `regalos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
