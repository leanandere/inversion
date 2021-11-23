-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2021 a las 03:24:28
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inversion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inversiones`
--

CREATE TABLE `inversiones` (
  `id_inversion` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `monto` decimal(10,0) NOT NULL,
  `resultado` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inversiones`
--

INSERT INTO `inversiones` (`id_inversion`, `nombre`, `id_usuario`, `monto`, `resultado`) VALUES
(9, 'Faka', 5, '15000', '40000'),
(10, 'asd', 5, '123', '0'),
(11, 'bitcoin', 6, '23000', '8000'),
(12, 'Bitcoin', 1, '150000', '100000'),
(13, 'asd', 1, '123', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montos`
--

CREATE TABLE `montos` (
  `monto_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `monto` decimal(10,0) NOT NULL,
  `diferencia` decimal(10,0) DEFAULT NULL,
  `id_inversion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `montos`
--

INSERT INTO `montos` (`monto_id`, `fecha`, `monto`, `diferencia`, `id_inversion`, `id_usuario`) VALUES
(16, '2021-11-21 23:21:14', '15000', NULL, 9, 5),
(17, '2021-11-21 23:21:24', '50000', '35000', 9, 5),
(18, '2021-11-21 23:21:32', '45000', '-5000', 9, 5),
(19, '2021-11-21 23:21:42', '55000', '10000', 9, 5),
(27, '2021-11-22 02:20:44', '10000', NULL, 11, 6),
(28, '2021-11-22 02:20:50', '12000', '2000', 11, 6),
(29, '2021-11-22 02:20:56', '9800', '-2200', 11, 6),
(30, '2021-11-22 02:21:02', '18000', '8200', 11, 6),
(31, '2021-11-22 22:12:43', '150000', NULL, 12, 1),
(32, '2021-11-22 22:12:54', '250000', '100000', 12, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `ultlogin` datetime NOT NULL DEFAULT current_timestamp(),
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario`, `password`, `ultlogin`, `email`) VALUES
(1, 'admin', '123456', '2021-11-21 15:03:26', ''),
(5, 'Le Wach Gerard', 'bocamorite', '2021-11-21 23:20:42', 'asd@gmail.com'),
(6, 'asd1', 'asd1', '2021-11-22 01:28:24', 'asd1@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inversiones`
--
ALTER TABLE `inversiones`
  ADD PRIMARY KEY (`id_inversion`);

--
-- Indices de la tabla `montos`
--
ALTER TABLE `montos`
  ADD PRIMARY KEY (`monto_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inversiones`
--
ALTER TABLE `inversiones`
  MODIFY `id_inversion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `montos`
--
ALTER TABLE `montos`
  MODIFY `monto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
