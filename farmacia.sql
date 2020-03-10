-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-03-2020 a las 16:28:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `cod_producto` varchar(30) NOT NULL,
  `nom_producto` varchar(30) NOT NULL,
  `nom_generico` varchar(30) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `presentacion` varchar(30) NOT NULL,
  `peso` float NOT NULL,
  `uni_medida` varchar(30) NOT NULL,
  `precio` float NOT NULL,
  `laboratorio` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`cod_producto`, `nom_producto`, `nom_generico`, `marca`, `presentacion`, `peso`, `uni_medida`, `precio`, `laboratorio`, `color`, `stock`) VALUES
('1a', 'Lenin', 'dsfsdf', 'sdg', 'sdfgsd', 23423, 'sdf', 0, 'wfdsdf', 'sfdsd', 32200),
('2a', 'Manzanita', 'manzaneishon', 'bayer', 'capsulas', 1212, 'mg', 20, 'res', 'rojito', 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `cod_transaccion` bigint(30) NOT NULL,
  `cod_producto` varchar(30) NOT NULL,
  `comentario` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `transaccion`
--

INSERT INTO `transaccion` (`cod_transaccion`, `cod_producto`, `comentario`, `fecha`, `hora`, `cantidad`, `precio`, `total`) VALUES
(1, '1a', 'Lenin', '2020-03-10', '00:00:00', 123, 0, 0),
(2, '1a', 'Lenin', '2020-03-10', '00:00:00', 123, 0, 0),
(3, '1a', 'Lenin', '2020-03-10', '00:00:00', 32, 0, 0),
(4, '1a', 'Lenin', '2020-03-10', '00:00:00', 12, 0, 0),
(5, '1a', 'Lenin', '2020-03-10', '00:00:00', 12, 0, 0),
(6, '1a', 'Lenin', '2020-03-10', '00:00:00', 9, 0, 0),
(7, '2a', 'Manzanita', '2020-03-10', '00:00:00', 20, 20, 0),
(8, '2a', 'Manzanita', '2020-03-10', '00:00:00', 10, 20, 200),
(9, '2a', 'Manzanita', '2020-03-10', '20:44:48', 5, 20, 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`cod_transaccion`),
  ADD KEY `transaccion` (`cod_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `cod_transaccion` bigint(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion` FOREIGN KEY (`cod_producto`) REFERENCES `producto` (`cod_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
