-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2023 a las 07:55:55
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `deliverx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `detalle` varchar(255) NOT NULL,
  `total` decimal(5,2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `alert` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `usuario_id`, `username`, `direccion`, `detalle`, `total`, `fecha`, `alert`, `status`) VALUES
(1, 1, '', 'F,A,Alta', 'CarlosV - Cantidad: 1 - Subtotal: $2\nTazasDeTamarindo - Cantidad: 1 - Subtotal: $3\nKikys - Cantidad: 1 - Subtotal: $3\n', '8.00', '2023-03-08 05:29:41', 'Nueva Compra', 'Pendiente'),
(2, 1, '', 'F,A,Alta', 'CarlosV - Cantidad: 1 - Subtotal: $2\n', '2.00', '2023-03-10 05:51:57', 'Nueva Compra', 'Pendiente'),
(5, 1, 'Alex1', 'F,A,Alta', 'Tamarindo - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-03-14 03:28:18', 'Nueva Compra', 'Completada'),
(6, 1, 'Alex1', 'A,21,Alta', 'CarlosV - Cantidad: 1 - Subtotal: $2\nTamarindo - Cantidad: 1 - Subtotal: $3\nKikys - Cantidad: 1 - Subtotal: $3\n', '8.00', '2023-03-14 03:50:27', 'Nueva Compra', 'Completada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_tienda`
--

CREATE TABLE `configuracion_tienda` (
  `fecha_no_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `configuracion_tienda`
--

INSERT INTO `configuracion_tienda` (`fecha_no_compra`) VALUES
('2023-02-19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `direccion_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `edificio` varchar(255) NOT NULL,
  `salon` varchar(255) NOT NULL,
  `planta` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`direccion_id`, `usuario_id`, `edificio`, `salon`, `planta`) VALUES
(12, 1, 'F', 'A', 'Alta'),
(13, 2, 'F', 'A', 'Alta'),
(14, 2, 'A', 'L', 'Alta'),
(15, 1, 'A', 'e3e', 'Baja'),
(16, 1, 'L', '13', 'Alta'),
(17, 1, 'J', '13', 'Baja'),
(18, 1, 'A', '21', 'Alta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dulces`
--

CREATE TABLE `dulces` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `habilitado` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `dulces`
--

INSERT INTO `dulces` (`id`, `nombre`, `precio`, `habilitado`) VALUES
(15, 'CarlosV', '2.00', '1'),
(20, 'Tamarindo', '3.00', '1'),
(21, 'Kikys', '3.00', '1'),
(22, 'Pelon', '999.99', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `usuario_id`, `username`, `texto`, `fecha`) VALUES
(2, 1, 'Alex1', 'Hola', '2023-03-13 19:19:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL DEFAULT 'regular'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--


-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `compra_usuario_direccion_fk` (`usuario_id`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`direccion_id`),
  ADD KEY `fk_usuario_id` (`usuario_id`);

--
-- Indices de la tabla `dulces`
--
ALTER TABLE `dulces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `fk_noticias_usuarios` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `direccion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `dulces`
--
ALTER TABLE `dulces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compra_usuario_direccion_fk` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `fk_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_noticias_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`usuario_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
