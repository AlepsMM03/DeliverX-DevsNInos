-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql301.byetcluster.com
-- Tiempo de generación: 21-02-2023 a las 19:09:31
-- Versión del servidor: 10.3.27-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_33513806_deliverx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras_productos`
--

CREATE TABLE `compras_productos` (
  `compra_id` int(11) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `detalle` varchar(255) NOT NULL,
  `total` decimal(5,2) NOT NULL,
  `fecha` datetime NOT NULL,
  `alert` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras_productos`
--

INSERT INTO `compras_productos` (`id`, `direccion`, `username`, `detalle`, `total`, `fecha`, `alert`, `status`) VALUES
(20, '', 'Arelis Alba ', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\nPobretaxo - Cantidad: 1 - Subtotal: $10\n', '41.00', '2023-02-02 21:41:01', '', ''),
(21, '', 'Arelis Alba ', 'Takis - Cantidad: 2 - Subtotal: $30\nSkwincles - Cantidad: 1 - Subtotal: $16\nBubulubu - Cantidad: 1 - Subtotal: $10\n', '56.00', '2023-02-02 21:41:52', '', ''),
(22, 'A,3,Alta ', 'Arelis Alba ', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\nPobretaxo - Cantidad: 1 - Subtotal: $10\nBubulubu - Cantidad: 1 - Subtotal: $10\n', '58.00', '2023-02-02 22:27:42', '', ''),
(23, 'H,4,Baja', 'Alexa', 'Takis - Cantidad: 3 - Subtotal: $45\nSkwincles - Cantidad: 1 - Subtotal: $16\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\nPobretaxo - Cantidad: 1 - Subtotal: $10\nBubulubu - Cantidad: 1 - Subtotal: $10\n', '88.00', '2023-02-03 20:45:42', '', ''),
(24, 'J,8,Alta ', 'Alexa', 'Takis - Cantidad: 3 - Subtotal: $45\n', '45.00', '2023-02-03 20:46:30', '', ''),
(25, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-03 20:49:01', '', ''),
(26, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\n', '31.00', '2023-02-06 15:05:58', '', ''),
(27, 'J,8,Alta', 'Aleps1903', 'Skwincles - Cantidad: 1 - Subtotal: $16\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\n', '23.00', '2023-02-06 15:06:58', '', ''),
(28, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-06 15:17:25', '', ''),
(29, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-06 15:21:58', '', ''),
(30, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\n', '31.00', '2023-02-06 15:28:53', '', ''),
(31, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-06 15:32:53', '', ''),
(32, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-06 15:34:14', '', ''),
(33, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\n', '22.00', '2023-02-06 15:35:29', '', ''),
(34, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\n', '22.00', '2023-02-06 15:36:23', '', ''),
(35, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\nPobretaxo - Cantidad: 1 - Subtotal: $10\nBubulubu - Cantidad: 1 - Subtotal: $10\n', '58.00', '2023-02-06 15:37:31', '', ''),
(36, 'J,8,Alta', 'Aleps1903', 'Pobretaxo - Cantidad: 1 - Subtotal: $10\nBubulubu - Cantidad: 1 - Subtotal: $10\n', '20.00', '2023-02-06 15:38:13', '', ''),
(37, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\n', '31.00', '2023-02-06 15:38:44', '', ''),
(38, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 2 - Subtotal: $30\nMazapÃ¡n - Cantidad: 1 - Subtotal: $7\n', '37.00', '2023-02-06 15:41:46', '', ''),
(39, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\nSkwincles - Cantidad: 1 - Subtotal: $16\n', '31.00', '2023-02-06 15:58:52', '', ''),
(40, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-06 15:59:49', '', ''),
(41, 'J,8,Alta', 'Aleps1903', 'Skwincles - Cantidad: 2 - Subtotal: $32\n', '32.00', '2023-02-06 16:00:40', '', ''),
(42, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 5 - Subtotal: $75\n', '75.00', '2023-02-06 16:01:48', '', ''),
(43, 'J,8,Alta', 'Aleps1903', 'MazapÃ¡n - Cantidad: 5 - Subtotal: $35\n', '35.00', '2023-02-06 16:02:14', '', ''),
(44, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 3 - Subtotal: $45\n', '45.00', '2023-02-06 16:02:33', '', ''),
(45, 'J,8,Alta', 'Aleps1903', 'Takis - Cantidad: 3 - Subtotal: $45\n', '45.00', '2023-02-06 16:03:06', '', ''),
(46, 'J,9,Alta', 'Juan el crack ', 'Pobretaxo - Cantidad: 1 - Subtotal: $10\nBubulubu - Cantidad: 1 - Subtotal: $10\n', '20.00', '2023-02-07 17:14:30', '', ''),
(47, 'J,14,Baja', 'Pollo', 'Takis - Cantidad: 1 - Subtotal: $15\n', '15.00', '2023-02-07 17:18:44', '', ''),
(48, 'J,8,Alta', 'Aleps1903', 'Sabritas - Cantidad: 1 - Subtotal: $8\nCarlosV - Cantidad: 1 - Subtotal: $3\n', '11.00', '2023-02-10 12:57:03', '', ''),
(49, 'J,8,Alta', 'Alex3', 'Sabritas - Cantidad: 1 - Subtotal: $8\nChurritos - Cantidad: 1 - Subtotal: $3\n', '11.00', '2023-02-13 19:29:28', 'Nueva compra', 'completada'),
(50, 'J,8,Alta', 'Alex3', 'CarlosV - Cantidad: 3 - Subtotal: $9\n', '9.00', '2023-02-13 19:32:13', 'Nueva Compra', 'completada'),
(51, 'L,18,Baja', 'Alex3', 'Churritos - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-13 19:36:29', 'Nueva Compra', 'completada'),
(52, 'J,8,Alta', 'Alex3', 'CarlosV - Cantidad: 2 - Subtotal: $6\n', '6.00', '2023-02-13 19:41:33', 'Nueva Compra', 'completada'),
(53, 'J,8,Alta', 'Alex3', 'Sabritas - Cantidad: 4 - Subtotal: $32\n', '32.00', '2023-02-13 19:59:16', 'Nueva Compra', 'completada'),
(54, 'J,8,Alta', 'Alex3', 'Sabritas - Cantidad: 1 - Subtotal: $8\nCarlosV - Cantidad: 1 - Subtotal: $3\nChurritos - Cantidad: 1 - Subtotal: $3\nPulparindos - Cantidad: 1 - Subtotal: $5\n', '19.00', '2023-02-13 22:02:14', 'Nueva Compra', 'Completada'),
(55, 'J,8,Alta', 'Alex3', 'CarlosV - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-13 22:26:45', 'Nueva Compra', 'Completada'),
(56, 'J,8,Alta', 'Alex3', 'CarlosV - Cantidad: 2 - Subtotal: $6\n', '6.00', '2023-02-14 00:20:24', 'Nueva Compra', 'Completada'),
(57, 'J,8,Alta', 'Alex3', 'Sabritas - Cantidad: 1 - Subtotal: $8\n', '8.00', '2023-02-14 00:38:01', 'Nueva Compra', 'Completada'),
(58, 'J,8,Alta', 'Juan.najera24', 'Sabritas - Cantidad: 1 - Subtotal: $8\nCarlosV - Cantidad: 1 - Subtotal: $3\n', '11.00', '2023-02-14 16:37:47', 'Nueva Compra', 'Completada'),
(59, 'J,8,Alta', 'Juan.najera24', 'CarlosV - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-14 16:49:22', 'Nueva Compra', 'Completada'),
(60, 'J,8,Alta', 'Alex3', 'Sabritas - Cantidad: 2 - Subtotal: $16\nCarlosV - Cantidad: 1 - Subtotal: $3\n', '19.00', '2023-02-14 16:52:35', 'Nueva Compra', 'Pendiente'),
(61, 'J,8,Alta', 'Alex3', 'CarlosV - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-14 16:52:45', 'Nueva Compra', 'Pendiente'),
(62, '', 'Alex', '', '0.00', '2023-02-15 19:33:26', 'Nueva Compra', 'Completada'),
(63, '', 'Alex', '', '0.00', '2023-02-15 19:34:03', 'Nueva Compra', 'Completada'),
(64, '', 'Alex', 'Pulparindos - Cantidad: 1 - Subtotal: $5\n', '5.00', '2023-02-15 19:34:11', 'Nueva Compra', 'Completada'),
(65, '', 'Alex', '', '0.00', '2023-02-15 19:42:42', 'Nueva Compra', 'Completada'),
(66, '', 'Alex', 'Pulparindos - Cantidad: 1 - Subtotal: $5\n', '5.00', '2023-02-15 19:42:56', 'Nueva Compra', 'Completada'),
(67, '', 'Alex', 'Sabritas - Cantidad: 2 - Subtotal: $16\nCarlosV - Cantidad: 1 - Subtotal: $3\n', '19.00', '2023-02-15 19:44:34', 'Nueva Compra', 'Completada'),
(68, 'J,8,Baja', 'Alex', 'Mazapan - Cantidad: 1 - Subtotal: $8\n', '8.00', '2023-02-15 19:49:22', 'Nueva Compra', 'Completada'),
(69, 'J,8,Baja', 'Alex', 'Mazapan - Cantidad: 5 - Subtotal: $40\n', '40.00', '2023-02-15 20:13:36', 'Nueva Compra', 'Completada'),
(70, 'J,8,Baja', 'Alex', 'Mazapan - Cantidad: 10 - Subtotal: $80\n', '80.00', '2023-02-16 00:40:06', 'Nueva Compra', 'Completada'),
(71, 'J,8,Baja', 'Alex ', 'Mazapan - Cantidad: 1 - Subtotal: $8\n', '8.00', '2023-02-16 01:40:10', 'Nueva Compra', 'Completada'),
(72, 'J,8,Baja', 'Alex ', 'Churritos - Cantidad: 1 - Subtotal: $3\nMazapan - Cantidad: 1 - Subtotal: $8\n', '11.00', '2023-02-16 01:40:54', 'Nueva Compra', 'Completada'),
(73, 'J,8,Baja', 'Alex', '', '0.00', '2023-02-17 17:11:16', 'Nueva Compra', 'Completada'),
(74, 'J,8,Baja', 'Alex', 'Mazapan - Cantidad: 1 - Subtotal: $8\n', '8.00', '2023-02-17 17:36:45', 'Nueva Compra', 'Completada'),
(75, 'J,8,Baja', 'Alex', 'Mazapan - Cantidad: 1 - Subtotal: $8\n', '8.00', '2023-02-17 18:57:42', 'Nueva Compra', 'Completada'),
(76, 'J,13,Baja', 'Alex1', 'Mazapan - Cantidad: 1 - Subtotal: $8\n', '8.00', '2023-02-20 21:59:26', 'Nueva Compra', 'Completada'),
(77, '', 'edu_ruelas', 'CarlosV - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-21 16:20:04', 'Nueva Compra', 'Completada'),
(78, '', 'Mariel', 'CarlosV - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-21 16:22:27', 'Nueva Compra', 'Completada'),
(79, '', 'edu_ruelas', 'CarlosV - Cantidad: 1 - Subtotal: $2\n', '2.00', '2023-02-21 16:27:31', 'Nueva Compra', 'Completada'),
(80, 'Sabe,Un,Lugar', 'edu_ruelas', 'CarlosV - Cantidad: 1 - Subtotal: $2\n', '2.00', '2023-02-21 16:32:11', 'Nueva Compra', 'Completada'),
(81, 'Edificio J,15,Baja', 'nanisdlg', 'CarlosV - Cantidad: 4 - Subtotal: $8\n', '8.00', '2023-02-21 18:39:18', 'Nueva Compra', 'Completada'),
(82, 'Edificio J,15,Baja', 'nanisdlg', 'Kikys - Cantidad: 1 - Subtotal: $3\n', '3.00', '2023-02-21 18:39:48', 'Nueva Compra', 'Completada'),
(83, 'J,CubÃ­culo Manuel,Baja', 'Garcirez', 'CarlosV - Cantidad: 1 - Subtotal: $2\nKikys - Cantidad: 1 - Subtotal: $3\n', '5.00', '2023-02-21 19:00:55', 'Nueva Compra', 'Completada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion_tienda`
--

CREATE TABLE `configuracion_tienda` (
  `fecha_no_compra` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `username` varchar(255) NOT NULL,
  `edificio` varchar(255) NOT NULL,
  `salon` varchar(255) NOT NULL,
  `planta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`username`, `edificio`, `salon`, `planta`) VALUES
('Aleps1903', 'J', '8', 'Alta'),
('Arelis Alba ', 'A', '3', 'Alta '),
('Alexa', 'J', '8', 'Alta '),
('Alexa', 'H', '4', 'Baja'),
('Juan el crack ', 'J', '9', 'Alta'),
('Pollo', 'J', '14', 'Baja'),
('Aleps1903', 'L', '2', 'Alta'),
('Alex3', 'J', '8', 'Alta'),
('Alex3', 'L', '18', 'Baja'),
('Alex3', 'J', '8', 'Alta'),
('Juan.najera24', 'J', '8', 'Alta'),
('Juan.najera24', 'L', '3', 'Baja'),
('Alex', 'J', '8', 'Baja'),
('Alex1', 'J', '13', 'Baja'),
('Alex1', 'L', 'DirecciÃ³n TI', 'Baja'),
('edu_ruelas', 'Sabe', 'Un', 'Lugar'),
('nanisdlg', 'Edificio J', '15', 'Baja'),
('Garcirez', 'J', 'CubÃ­culo Manuel', 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dulces`
--

CREATE TABLE `dulces` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dulces`
--

INSERT INTO `dulces` (`id`, `nombre`, `precio`) VALUES
(15, 'CarlosV', '2.00'),
(20, 'TazasDeTamarindo', '3.00'),
(21, 'Kikys', '3.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `username` varchar(25) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`username`, `texto`, `fecha`) VALUES
('DeliverX', 'Bienvenidos a DeliverX...!', '2023-02-15 20:34:52');

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



--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras_productos`
--
ALTER TABLE `compras_productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dulces`
--
ALTER TABLE `dulces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras_productos`
--
ALTER TABLE `compras_productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT de la tabla `dulces`
--
ALTER TABLE `dulces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
