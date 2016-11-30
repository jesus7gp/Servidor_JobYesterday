-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2016 a las 16:32:17
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oferta`
--

CREATE TABLE `oferta` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(140) COLLATE utf8_bin DEFAULT NULL,
  `persona_contacto` varchar(45) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(45) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `poblacion` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `codigo_postal` varchar(5) COLLATE utf8_bin DEFAULT NULL,
  `provincia` int(11) DEFAULT NULL,
  `estado` varchar(1) COLLATE utf8_bin DEFAULT NULL,
  `fecha_crea` datetime DEFAULT NULL,
  `fecha_com` date DEFAULT NULL,
  `psicologo` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `candidato` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `otros_datos_candidato` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `oferta`
--

INSERT INTO `oferta` (`id`, `descripcion`, `persona_contacto`, `telefono`, `email`, `direccion`, `poblacion`, `codigo_postal`, `provincia`, `estado`, `fecha_crea`, `fecha_com`, `psicologo`, `candidato`, `otros_datos_candidato`) VALUES
(70, 'Descripción 1', 'Persona 1', '555-333-1', 'EMail 1', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:51', NULL, NULL, NULL, NULL),
(71, 'Descripción 2', 'Persona 2', '555-333-2', 'EMail 2', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:51', NULL, NULL, NULL, NULL),
(72, 'Descripción 3', 'Persona 3', '555-333-3', 'EMail 3', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:51', NULL, NULL, NULL, NULL),
(73, 'Descripción 4', 'Persona 4', '555-333-4', 'EMail 4', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(74, 'Descripción 5', 'Persona 5', '555-333-5', 'EMail 5', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(75, 'Descripción 6', 'Persona 6', '555-333-6', 'EMail 6', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(76, 'Descripción 7', 'Persona 7', '555-333-7', 'EMail 7', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(77, 'Descripción 8', 'Persona 8', '555-333-8', 'EMail 8', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(78, 'Descripción 9', 'Persona 9', '555-333-9', 'EMail 9', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(79, 'Descripción 10', 'Persona 10', '555-333-10', 'EMail 10', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(80, 'Descripción 11', 'Persona 11', '555-333-11', 'EMail 11', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(81, 'Descripción 12', 'Persona 12', '555-333-12', 'EMail 12', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(82, 'Descripción 13', 'Persona 13', '555-333-13', 'EMail 13', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(83, 'Descripción 14', 'Persona 14', '555-333-14', 'EMail 14', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(84, 'Descripción 15', 'Persona 15', '555-333-15', 'EMail 15', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(85, 'Descripción 16', 'Persona 16', '555-333-16', 'EMail 16', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(86, 'Descripción 17', 'Persona 17', '555-333-17', 'EMail 17', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(87, 'Descripción 18', 'Persona 18', '555-333-18', 'EMail 18', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(88, 'Descripción 19', 'Persona 19', '555-333-19', 'EMail 19', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(89, 'Descripción 20', 'Persona 20', '555-333-20', 'EMail 20', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(90, 'Descripción 21', 'Persona 21', '555-333-21', 'EMail 21', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(91, 'Descripción 22', 'Persona 22', '555-333-22', 'EMail 22', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(92, 'Descripción 23', 'Persona 23', '555-333-23', 'EMail 23', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(93, 'Descripción 24', 'Persona 24', '555-333-24', 'EMail 24', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(94, 'Descripción 25', 'Persona 25', '555-333-25', 'EMail 25', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(95, 'Descripción 26', 'Persona 26', '555-333-26', 'EMail 26', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:52', NULL, NULL, NULL, NULL),
(97, 'Descripción 28', 'Persona 28', '555-333-28', 'EMail 28', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(98, 'Descripción 29', 'Persona 29', '555-333-29', 'EMail 29', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(99, 'Descripción 30', 'Persona 30', '555-333-30', 'EMail 30', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(100, 'Descripción 31', 'Persona 31', '555-333-31', 'EMail 31', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(102, 'Descripción 33', 'Persona 33', '555-333-33', 'EMail 33', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(103, 'Descripción 34', 'Persona 34', '555-333-34', 'EMail 34', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(104, 'Descripción 35', 'Persona 35', '555-333-35', 'EMail 35', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(105, 'Descripción 36', 'Persona 36', '555-333-36', 'EMail 36', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(106, 'Descripción 37', 'Persona 37', '555-333-37', 'EMail 37', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(107, 'Descripción 38', 'Persona 38', '555-333-38', 'EMail 38', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(108, 'Descripción 39', 'Persona 39', '555-333-39', 'EMail 39', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(109, 'Descripción 40', 'Persona 40', '555-333-40', 'EMail 40', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(110, 'Descripción 41', 'Persona 41', '555-333-41', 'EMail 41', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(111, 'Descripción 42', 'Persona 42', '555-333-42', 'EMail 42', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(112, 'Descripción 43', 'Persona 43', '555-333-43', 'EMail 43', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(113, 'Descripción 44', 'Persona 44', '555-333-44', 'EMail 44', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(114, 'Descripción 45', 'Persona 45', '555-333-45', 'EMail 45', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(115, 'Descripción 46', 'Persona 46', '555-333-46', 'EMail 46', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(116, 'Descripción 47', 'Persona 47', '555-333-47', 'EMail 47', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:53', NULL, NULL, NULL, NULL),
(116, 'Descripción 48', 'Persona 48', '555-333-48', 'EMail 48', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:54', NULL, NULL, NULL, NULL),
(118, 'Descripción 49', 'Persona 49', '555-333-49', 'EMail 49', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:54', NULL, NULL, NULL, NULL),
(119, 'Descripción 50', 'Persona 50', '555-333-50', 'EMail 50', NULL, NULL, NULL, NULL, 'P', '2016-11-05 17:53:54', NULL, NULL, NULL, NULL);

--
-- Disparadores `oferta`
--
CREATE TRIGGER `DispFechaCrea` BEFORE INSERT ON `oferta` FOR EACH ROW set new.fecha_crea = now();

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_provincias`
--

CREATE TABLE `tbl_provincias` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL DEFAULT '' COMMENT 'Nombre de la provincia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Provincias de españa; 99 para seleccionar a Nacional';

--
-- Volcado de datos para la tabla `tbl_provincias`
--

INSERT INTO `tbl_provincias` (`ID`, `nombre`) VALUES
(1, 'Alava'),
(2, 'Albacete'),
(3, 'Alicante'),
(4, 'Almera'),
(33, 'Asturias'),
(5, 'Avila'),
(6, 'Badajoz'),
(7, 'Balears (Illes)'),
(8, 'Barcelona'),
(9, 'Burgos'),
(10, 'Cáceres'),
(11, 'Cádiz'),
(39, 'Cantabria'),
(12, 'Castellón'),
(51, 'Ceuta'),
(13, 'Ciudad Real'),
(14, 'Córdoba'),
(15, 'Coruña (A)'),
(16, 'Cuenca'),
(17, 'Girona'),
(18, 'Granada'),
(19, 'Guadalajara'),
(20, 'Guipzcoa'),
(21, 'Huelva'),
(22, 'Huesca'),
(23, 'Jaén'),
(24, 'León'),
(25, 'Lleida'),
(27, 'Lugo'),
(28, 'Madrid'),
(29, 'Málaga'),
(52, 'Melilla'),
(30, 'Murcia'),
(31, 'Navarra'),
(32, 'Ourense'),
(34, 'Palencia'),
(35, 'Palmas (Las)'),
(36, 'Pontevedra'),
(26, 'Rioja (La)'),
(37, 'Salamanca'),
(38, 'Santa Cruz de Tenerife'),
(40, 'Segovia'),
(41, 'Sevilla'),
(42, 'Soria'),
(43, 'Tarragona'),
(44, 'Teruel'),
(45, 'Toledo'),
(46, 'Valencia'),
(47, 'Valladolid'),
(48, 'Vizcaya'),
(49, 'Zamora'),
(50, 'Zaragoza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_bin NOT NULL,
  `clave` varchar(15) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(1) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`, `tipo`) VALUES
(1, 'administrador', 'administrador', 'a'),
(2, 'psicologo', 'psicologo', 'p'),
(3, 'admin', 'admin', 'a'),
(4, 'psico', 'psico', 'p'),
(5, 'admin2', 'admin2', 'a'),
(6, 'psico2', 'psico2', 'p');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_provincias`
--
ALTER TABLE `tbl_provincias`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `oferta`
--
ALTER TABLE `oferta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT de la tabla `tbl_provincias`
--
ALTER TABLE `tbl_provincias`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
