-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2016 a las 16:05:34
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectointegrador`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_pedido`
--

CREATE TABLE `linea_pedido` (
  `id_pedido` int(11) NOT NULL DEFAULT '0',
  `id_producto` int(11) NOT NULL DEFAULT '0',
  `tamano` varchar(50) NOT NULL DEFAULT '',
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `linea_pedido`
--

INSERT INTO `linea_pedido` (`id_pedido`, `id_producto`, `tamano`, `cantidad`) VALUES
(1, 1, 'grande', 6),
(1, 2, 'pequeño', 1),
(3, 3, 'mediano', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `usuario`, `fecha`, `estado`) VALUES
(1, 6, '2016-03-02 18:06:12', 1),
(2, 6, '2016-03-02 18:06:12', 1),
(3, 7, '2016-03-02 18:06:12', 2),
(4, 7, '2016-03-02 18:06:12', 0),
(5, 8, '2016-03-02 18:06:12', 0),
(6, 8, '2016-03-02 18:06:12', 1),
(7, 9, '2016-03-02 18:06:12', 0),
(8, 10, '2016-03-02 18:06:12', 0),
(9, 11, '2016-03-02 18:06:12', 0),
(10, 11, '2016-03-02 18:11:32', 1),
(12, 3, '2016-03-02 18:34:05', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `categoria`) VALUES
(1, 'Motul', 'anticongelante'),
(2, 'Motulplus', 'anticongelante'),
(3, 'Iada', 'anticongelante'),
(4, '3cv', 'anticongelante'),
(5, 'Anticongelante', 'anticongelante'),
(6, 'Michelin', 'neumaticos'),
(7, 'Pirelli', 'neumaticos'),
(8, 'Good', 'neumaticos'),
(9, 'Firestone', 'neumaticos'),
(10, 'Dunlop', 'neumaticos'),
(11, 'Repsol', 'aceite'),
(12, 'GtxAlto', 'aceite'),
(13, 'Gtx', 'aceite'),
(14, 'Cepsa', 'aceite'),
(15, 'Mobil', 'aceite'),
(16, 'MannFilter', 'filtros'),
(17, 'Fram', 'filtros'),
(18, 'Interfil', 'filtros'),
(19, 'Framplus', 'filtros'),
(20, 'ManFilterPlus', 'filtros'),
(21, 'Motorcraft', 'baterias'),
(22, 'Tudor', 'baterias'),
(23, 'Lth', 'baterias'),
(24, 'Exide', 'baterias'),
(25, 'Varta', 'baterias'),
(26, 'MetalLube', 'aditivos'),
(27, 'Sonax', 'aditivos'),
(28, 'liquiMolly', 'aditivos'),
(29, 'Qualitor', 'aditivos'),
(30, 'Driven', 'aditivos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifa`
--

CREATE TABLE `tarifa` (
  `id_producto` int(11) NOT NULL DEFAULT '0',
  `tamano` varchar(50) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tarifa`
--

INSERT INTO `tarifa` (`id_producto`, `tamano`, `precio`) VALUES
(1, 'grande', 10.1),
(1, 'mediano', 7.9),
(1, 'pequeño', 6.75),
(2, 'grande', 10.1),
(2, 'mediano', 7.25),
(2, 'pequeño', 4.25),
(3, 'grande', 10.1),
(3, 'mediano', 6.3),
(3, 'pequeño', 7.25),
(4, 'grande', 10.1),
(4, 'mediano', 7.9),
(4, 'pequeño', 5.9),
(5, 'grande', 10.1),
(5, 'mediano', 7.9),
(5, 'pequeño', 5.9),
(6, 'grande', 10.1),
(6, 'mediano', 7.9),
(6, 'pequeño', 5.9),
(7, 'grande', 10.1),
(7, 'mediano', 7.9),
(7, 'pequeño', 5.9),
(8, 'grande', 10.1),
(8, 'mediano', 7.9),
(8, 'pequeño', 5.9),
(9, 'grande', 10.1),
(9, 'mediano', 7.9),
(9, 'pequeño', 5.9),
(10, 'grande', 10.1),
(10, 'mediano', 7.9),
(10, 'pequeño', 5.9),
(11, 'grande', 10.1),
(11, 'mediano', 7.9),
(11, 'pequeño', 5.9),
(12, 'grande', 10.1),
(12, 'mediano', 7.9),
(12, 'pequeño', 5.9),
(13, 'grande', 10.1),
(13, 'mediano', 7.9),
(13, 'pequeño', 5.9),
(14, 'grande', 10.1),
(14, 'mediano', 7.9),
(14, 'pequeño', 5.9),
(15, 'grande', 10.1),
(15, 'mediano', 7.9),
(15, 'pequeño', 5.9),
(16, 'grande', 10.1),
(16, 'mediano', 7.9),
(16, 'pequeño', 5.9),
(17, 'grande', 10.1),
(17, 'mediano', 7.9),
(17, 'pequeño', 5.9),
(18, 'grande', 10.1),
(18, 'mediano', 7.9),
(18, 'pequeño', 5.9),
(19, 'grande', 10.1),
(19, 'mediano', 7.9),
(19, 'pequeño', 5.9),
(20, 'grande', 10.1),
(20, 'mediano', 7.9),
(20, 'pequeño', 5.9),
(21, 'grande', 10.1),
(21, 'mediano', 7.9),
(21, 'pequeño', 5.9),
(22, 'grande', 10.1),
(22, 'mediano', 7.9),
(22, 'pequeño', 5.9),
(23, 'grande', 10.1),
(23, 'mediano', 7.9),
(23, 'pequeño', 5.9),
(24, 'grande', 10.1),
(24, 'mediano', 7.9),
(24, 'pequeño', 5.9),
(25, 'grande', 10.1),
(25, 'mediano', 7.9),
(25, 'pequeño', 5.9),
(26, 'grande', 10.1),
(26, 'mediano', 7.9),
(26, 'pequeño', 5.9),
(27, 'grande', 10.1),
(27, 'mediano', 7.9),
(27, 'pequeño', 5.9),
(28, 'grande', 10.1),
(28, 'mediano', 7.9),
(28, 'pequeño', 5.9),
(29, 'grande', 10.1),
(29, 'mediano', 7.9),
(29, 'pequeño', 5.9),
(30, 'grande', 10.1),
(30, 'mediano', 7.9),
(30, 'pequeño', 5.9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `clave` varchar(32) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `clave`, `rol`, `email`) VALUES
(1, 'Mabel', 'qwe123', 'admin', 'emaildeprueba1@gmail.com'),
(2, 'Maria Angeles', 'qwe123', 'admin', 'emaildeprueba2@gmail.com'),
(3, 'Sergio', 'qwe123', 'admin', 'emaildeprueba3@gmail.com'),
(4, 'Ivan', 'qwe123', 'admin', 'emaildeprueba4@gmail.com'),
(5, 'Alejandro', 'qwe123', 'admin', 'emaildeprueba5@gmail.com'),
(6, 'Usuario1', 'asdqwe', 'user', 'emaildeprueba6@gmail.com'),
(7, 'Usuario2', 'asdqwe', 'user', 'emaildeprueba7@gmail.com'),
(8, 'Usuario3', 'asdqwe', 'user', 'emaildeprueba8@gmail.com'),
(9, 'Usuario4', 'asdqwe', 'user', 'emaildeprueba9@gmail.com'),
(10, 'Usuario5', 'asdqwe', 'user', 'emaildeprueba10@gmail.com'),
(11, 'Usuario6', 'asdqwe', 'user', 'emaildeprueba11@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  ADD PRIMARY KEY (`id_pedido`,`id_producto`,`tamano`),
  ADD KEY `id_producto` (`id_producto`,`tamano`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD PRIMARY KEY (`id_producto`,`tamano`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `linea_pedido`
--
ALTER TABLE `linea_pedido`
  ADD CONSTRAINT `linea_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `linea_pedido_ibfk_2` FOREIGN KEY (`id_producto`,`tamano`) REFERENCES `tarifa` (`id_producto`, `tamano`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `tarifa`
--
ALTER TABLE `tarifa`
  ADD CONSTRAINT `tarifa_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
