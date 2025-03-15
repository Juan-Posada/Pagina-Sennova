-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2025 a las 22:03:58
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pagina_sennova`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices`
--

CREATE TABLE `aprendices` (
  `id_aprendices` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `fk_id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aprendices`
--

INSERT INTO `aprendices` (`id_aprendices`, `nombre`, `email`, `apellidos`, `telefono`, `fk_id_proyecto`) VALUES
(1, 'Juan', 'juan@example.com', 'Perez', '9876543210', 1),
(2, 'Maria', 'maria@example.com', 'Gomez', '9876543211', 2),
(3, 'Carlos', 'carlos@example.com', 'Lopez', '9876543212', 3),
(4, 'Ana', 'ana@example.com', 'Rodriguez', '9876543213', 4),
(5, 'Luis', 'luis@example.com', 'Hernandez', '9876543214', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendices_asesoria`
--

CREATE TABLE `aprendices_asesoria` (
  `fk_id_aprendices` int(11) NOT NULL,
  `fk_id_asesoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `aprendices_asesoria`
--

INSERT INTO `aprendices_asesoria` (`fk_id_aprendices`, `fk_id_asesoria`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesoria`
--

CREATE TABLE `asesoria` (
  `id_asesoria` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  `fk_id_tipo_asesoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asesoria`
--

INSERT INTO `asesoria` (`id_asesoria`, `nombre`, `descripcion`, `fk_id_tipo_asesoria`) VALUES
(1, 'Asesoria 1', 'Descripcion 1', 1),
(2, 'Asesoria 2', 'Descripcion 2', 2),
(3, 'Asesoria 3', 'Descripcion 3', 3),
(4, 'Asesoria 4', 'Descripcion 4', 4),
(5, 'Asesoria 5', 'Descripcion 5', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `fecha_evento` datetime NOT NULL,
  `fk_id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_servicio`, `nombre`, `descripcion`, `fecha_evento`, `fk_id_proyecto`) VALUES
(1, 'Evento A', 'Descripcion A', '2025-04-10 10:00:00', 1),
(2, 'Evento B', 'Descripcion B', '2025-05-15 14:00:00', 2),
(3, 'Evento C', 'Descripcion C', '2025-06-20 09:00:00', 3),
(4, 'Evento D', 'Descripcion D', '2025-07-25 16:00:00', 4),
(5, 'Evento E', 'Descripcion E', '2025-08-30 11:00:00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formularios`
--

CREATE TABLE `formularios` (
  `id_formulario` int(11) NOT NULL,
  `fk_id_tipo_cliente` int(11) NOT NULL,
  `fk_id_tipo_asesoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `formularios`
--

INSERT INTO `formularios` (`id_formulario`, `fk_id_tipo_cliente`, `fk_id_tipo_asesoria`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id_proyecto`, `nombre`) VALUES
(1, 'Proyecto Alpha'),
(2, 'Proyecto Beta'),
(3, 'Proyecto Gamma'),
(4, 'Proyecto Delta'),
(5, 'Proyecto Epsilon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_asesoria`
--

CREATE TABLE `tipo_asesoria` (
  `id_tipo_asesoria` int(11) NOT NULL,
  `linea_sennova` varchar(45) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_asesoria`
--

INSERT INTO `tipo_asesoria` (`id_tipo_asesoria`, `linea_sennova`, `descripcion`) VALUES
(1, 'Linea A', 'Descripcion A'),
(2, 'Linea B', 'Descripcion B'),
(3, 'Linea C', 'Descripcion C'),
(4, 'Linea D', 'Descripcion D'),
(5, 'Linea E', 'Descripcion E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_cliente`
--

CREATE TABLE `tipo_cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `fk_id_proyecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_cliente`
--

INSERT INTO `tipo_cliente` (`id_cliente`, `nombre`, `email`, `telefono`, `fk_id_proyecto`) VALUES
(1, 'Cliente 1', 'cliente1@example.com', '1234567890', 1),
(2, 'Cliente 2', 'cliente2@example.com', '1234567891', 2),
(3, 'Cliente 3', 'cliente3@example.com', '1234567892', 3),
(4, 'Cliente 4', 'cliente4@example.com', '1234567893', 4),
(5, 'Cliente 5', 'cliente5@example.com', '1234567894', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD PRIMARY KEY (`id_aprendices`),
  ADD KEY `fk_aprendices_proyecto` (`fk_id_proyecto`);

--
-- Indices de la tabla `aprendices_asesoria`
--
ALTER TABLE `aprendices_asesoria`
  ADD PRIMARY KEY (`fk_id_aprendices`,`fk_id_asesoria`),
  ADD KEY `fk_aprendices_asesoria_asesoria` (`fk_id_asesoria`);

--
-- Indices de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD PRIMARY KEY (`id_asesoria`),
  ADD KEY `fk_asesoria_tipo_asesoria` (`fk_id_tipo_asesoria`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `fk_eventos_proyecto` (`fk_id_proyecto`);

--
-- Indices de la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id_formulario`),
  ADD KEY `fk_formularios_cliente` (`fk_id_tipo_cliente`),
  ADD KEY `fk_formularios_tipo_asesoria` (`fk_id_tipo_asesoria`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `tipo_asesoria`
--
ALTER TABLE `tipo_asesoria`
  ADD PRIMARY KEY (`id_tipo_asesoria`);

--
-- Indices de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `fk_tipo_cliente_proyecto` (`fk_id_proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendices`
--
ALTER TABLE `aprendices`
  MODIFY `id_aprendices` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asesoria`
--
ALTER TABLE `asesoria`
  MODIFY `id_asesoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `formularios`
--
ALTER TABLE `formularios`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_asesoria`
--
ALTER TABLE `tipo_asesoria`
  MODIFY `id_tipo_asesoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aprendices`
--
ALTER TABLE `aprendices`
  ADD CONSTRAINT `fk_aprendices_proyecto` FOREIGN KEY (`fk_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `aprendices_asesoria`
--
ALTER TABLE `aprendices_asesoria`
  ADD CONSTRAINT `fk_aprendices_asesoria_aprendices` FOREIGN KEY (`fk_id_aprendices`) REFERENCES `aprendices` (`id_aprendices`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_aprendices_asesoria_asesoria` FOREIGN KEY (`fk_id_asesoria`) REFERENCES `asesoria` (`id_asesoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `asesoria`
--
ALTER TABLE `asesoria`
  ADD CONSTRAINT `fk_asesoria_tipo_asesoria` FOREIGN KEY (`fk_id_tipo_asesoria`) REFERENCES `tipo_asesoria` (`id_tipo_asesoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `fk_eventos_proyecto` FOREIGN KEY (`fk_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `formularios`
--
ALTER TABLE `formularios`
  ADD CONSTRAINT `fk_formularios_cliente` FOREIGN KEY (`fk_id_tipo_cliente`) REFERENCES `tipo_cliente` (`id_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_formularios_tipo_asesoria` FOREIGN KEY (`fk_id_tipo_asesoria`) REFERENCES `tipo_asesoria` (`id_tipo_asesoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tipo_cliente`
--
ALTER TABLE `tipo_cliente`
  ADD CONSTRAINT `fk_tipo_cliente_proyecto` FOREIGN KEY (`fk_id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
