-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2022 a las 23:57:42
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conaf_estacionamiento`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `ad_id` int(11) NOT NULL,
  `ad_nombre` varchar(255) NOT NULL,
  `ad_rut` varchar(255) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  `ad_foto` text NOT NULL,
  `ad_contacto` varchar(255) NOT NULL,
  `ad_depto` text NOT NULL,
  `ad_comuna` text NOT NULL,
  `ad_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`ad_id`, `ad_nombre`, `ad_rut`, `ad_pass`, `ad_foto`, `ad_contacto`, `ad_depto`, `ad_comuna`, `ad_email`) VALUES
(1, 'Jorge', '11111111-1', '123', '', '+56 9 3333 2222', 'Informática ', 'La florida', ''),
(2, 'David', '22222222-2', '123', 'david.jpg', '+56 9 4444 3333', 'Recursos Humanos', ' Providencia', 'david@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id_reg` int(11) NOT NULL,
  `id_vehi` int(11) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kilometraje` text NOT NULL,
  `usu_rut` varchar(10) NOT NULL,
  `destino` text NOT NULL,
  `tipo_reg` varchar(15) NOT NULL,
  `foto_reg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id_reg`, `id_vehi`, `patente`, `fecha_reg`, `kilometraje`, `usu_rut`, `destino`, `tipo_reg`, `foto_reg`) VALUES
(1, 0, 'Selecciona', '2022-04-17 14:52:20', '5000', '19869807-5', 'Mall', 'Entrada', ''),
(2, 0, '34-GH-ED', '2022-04-17 15:08:38', '1010', '19869807-5', 'Fui a comprar', 'Salida', ''),
(3, 0, '34-GH-ED', '2022-04-20 20:52:09', '1200', '11814708-1', 'chau', 'Salida', ''),
(4, 0, '34-GH-ED', '2022-04-21 19:17:12', '4000', '19869807-5', 'Chao', 'Entrada', ''),
(5, 0, '34-GH-ED', '2022-04-21 19:17:22', '4500', '19869807-5', 'Hola', 'Salida', ''),
(6, 0, '34-GH-ED', '2022-04-21 19:17:31', '6000', '19869807-5', 'Hola', 'Entrada', ''),
(7, 0, '34-GH-ED', '2022-04-21 19:17:43', '3000', '19869807-5', 'llegue', 'Entrada', ''),
(8, 0, '34-GH-ED', '2022-04-21 19:27:15', '3000', '19869807-5', 'Hola', 'Entrada', ''),
(9, 0, '34-GH-ED', '2022-04-21 19:28:31', '45', '19869807-5', 'r', 'Salida', ''),
(10, 0, '34-GH-ED', '2022-04-21 19:28:41', '45', '19869807-5', 'r', 'Entrada', ''),
(11, 0, '34-GH-ED', '2022-04-21 19:28:49', '45', '19869807-5', 'r', 'Entrada', ''),
(12, 0, '34-GH-ED', '2022-04-22 21:21:58', '7456', '19869807-5', 'g', 'Entrada', ''),
(13, 0, '34-GH-ED', '2022-04-22 21:25:36', '7777', '19869807-5', 'fgthyki', 'Salida', ''),
(14, 0, '34-GH-ED', '2022-04-22 21:29:32', '35476', '19869807-5', 'Chao', 'Entrada', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_id` int(11) NOT NULL,
  `usu_nombre` varchar(255) NOT NULL,
  `usu_rut` varchar(10) NOT NULL,
  `usu_pass` varchar(255) NOT NULL,
  `usu_foto` text NOT NULL,
  `usu_contacto` varchar(255) NOT NULL,
  `usu_depto` text NOT NULL,
  `usu_comuna` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_id`, `usu_nombre`, `usu_rut`, `usu_pass`, `usu_foto`, `usu_contacto`, `usu_depto`, `usu_comuna`) VALUES
(1, 'Italo', '19869807-5', '123', '', '+56 9 3333 1111', 'Informática', 'La florida'),
(2, 'Pamela', '11814708-1', '123', '48915823_1880776472048882_3531674761945939968_n.png', '56 9 3232 3232', 'Secretaría', 'La florida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id_vehi` int(11) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `kilometraje` text NOT NULL,
  `marca` varchar(50) NOT NULL,
  `foto_vehi` text NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `modelo` varchar(50) NOT NULL,
  `n_chasis` varchar(60) NOT NULL,
  `n_motor` varchar(60) NOT NULL,
  `year` int(4) NOT NULL,
  `color` varchar(30) NOT NULL,
  `tipo_vehi` varchar(30) NOT NULL,
  `tipo_combustible` varchar(20) NOT NULL,
  `estado_vehi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_vehi`, `patente`, `kilometraje`, `marca`, `foto_vehi`, `fecha_registro`, `modelo`, `n_chasis`, `n_motor`, `year`, `color`, `tipo_vehi`, `tipo_combustible`, `estado_vehi`) VALUES
(1, '34-GH-ED', '35476', 'Chevrolet', '', '2022-04-22 21:29:32', 'Sail', '123', '123', 2020, 'Negro', 'Automático', 'Petróleo', 'Activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id_reg`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usu_id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id_vehi`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id_reg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id_vehi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
