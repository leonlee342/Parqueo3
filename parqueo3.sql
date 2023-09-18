-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2023 a las 00:08:15
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueo3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ci` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sis_docente` int(30) NOT NULL,
  `password_docente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `placa_auto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email_verificado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nombres`, `ci`, `sis_docente`, `password_docente`, `email`, `placa_auto`, `email_verificado`, `telefono`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Carla Salazar Serrudo', '5189584', 200108851, '5189584', 'carlas@umss.edu.bo', '', NULL, '70758489', '2023-04-23 09:33:29', '2023-04-29 11:09:38', NULL, '1'),
(5, 'Patricia Romeo Rodriguez', '1234567', 200008859, '1234567', 'promero@umss.edu.bo', '', NULL, '70707070', '2023-04-29 08:58:15', NULL, NULL, '1'),
(6, 'Americo Fiorilo Lozada', '5189585', 201008853, '5189585', 'afiorilo@umss.edu.bo', '', NULL, '70758482', '2023-04-29 09:03:17', NULL, NULL, '1'),
(7, 'Corina Villarroel Flores', '51515151', 200508855, '12345', 'cvillarroel@umss.edu.bo', '', NULL, '74747474', '2023-04-29 09:05:27', '2023-06-29 00:00:00', NULL, '1'),
(8, 'Fredy Flores Flores', '2525255', 20058989, 'usuario', 'fflores@fcyt.umss.edu.bo', '', NULL, '7589897', '2023-06-04 09:15:15', '2023-06-19 00:00:00', NULL, '1'),
(9, 'Todos los docentes', '1111111111', 1111111111, '1111111111', 'todos_los_docentes@umss.edu.bo', '', NULL, '1111111111', '2023-06-17 05:32:50', NULL, NULL, '1'),
(10, 'FEDERICO PEREZ', '8085867', 2015202, '8085867', 'federico@umss.com', '', NULL, '75954350', '2023-06-29 06:18:56', NULL, '2023-06-29 06:20:18', '0'),
(11, 'EDDY WILDER', '45454545', 20005200, '45454545', 'promero@umss.edu.bo', '', NULL, '454545', '2023-06-29 08:04:10', NULL, '2023-06-29 08:04:40', '0'),
(12, 'carla escobar', '5151515', 20052020, '45454545', 'carlas@umss.edu.bo', '', NULL, '7589584', '2023-06-29 08:06:16', '2023-06-29 08:14:45', '2023-06-30 10:19:35', '0'),
(13, 'MARIA BENITA CESPEDES', '5189898', 20025869, '5189898', 'mcespedes@gmail.com', '', NULL, '75954360', '2023-06-30 10:20:44', NULL, NULL, '1'),
(14, 'DAVID ALFREDO DELGADILLO', '5232647', 200859963, '5232647', 'ddelgadillo@umss.edu.bo', '', NULL, '587894', '2023-06-30 10:22:29', NULL, NULL, '1'),
(15, 'SAMUEL ACHA PEREZ', '5868487', 20052489, '5868487', 'sacha@umss.edu.bo', '', NULL, '79858979', '2023-06-30 10:26:47', NULL, NULL, '1'),
(16, 'RICHARD MONTOYA BURGOS', '568978', 20065897, '568978', 'rmontoya@umss.edu.bo', '', NULL, '7878789', '2023-06-30 11:11:51', NULL, NULL, '1'),
(17, 'BORIS CALANCHA NAVIA', '5187654', 20095689, '5187654', 'bcalancha@umss.edu.bo', '', NULL, '897887', '2023-06-30 11:13:08', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_cobros`
--

CREATE TABLE `tb_cobros` (
  `id_cobro` int(11) NOT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit_ci` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `placa` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuota` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_cuota` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_pago` date DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacio` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_docentes`
--

CREATE TABLE `tb_docentes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit_ci_cliente` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `placa_auto` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacio` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_docentes`
--

INSERT INTO `tb_docentes` (`id_cliente`, `nombre_cliente`, `nit_ci_cliente`, `placa_auto`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacio`, `estado`) VALUES
(1, 'ROSSEMERY PRADO', '5189586', '6666VTA', '2023-05-31 14:13:27', NULL, NULL, '1'),
(2, 'CARLA SALAZAR SERRUTO', '5189584', '1111ZZXX', '2023-06-04 20:45:07', NULL, NULL, '1'),
(3, 'PATRICIA ROMEO RODRIGUEZ', '1234567', '2222CCV', '2023-06-04 20:48:14', NULL, NULL, '1'),
(4, 'AMERICO FIORILO LOZADA', '5189585', '3333BBN', '2023-06-04 20:49:38', NULL, NULL, '1'),
(5, 'CORINA VILLARROEL FLORES', '51515151', '4455AAS', '2023-06-04 20:50:16', NULL, NULL, '1'),
(6, 'Fredy Flores Flores', '2525255', '5656VGH', '2023-06-04 09:15:15', NULL, NULL, '1'),
(12, 'Todos los docentes', '1111111111', '1111111111', '2023-06-17 05:32:50', NULL, NULL, '1'),
(13, 'Santiago relox', '5189584', '6666RTP', '2023-06-21 08:31:35', NULL, NULL, '1'),
(15, NULL, NULL, '<br /><b>Warning</b>:  Undefined variable $placa in <b>C:\\xampp\\htdocs\\www.sisparqueo3.com\\parqueo\\principal_parqueo1.php</b> on line <b>226</b><br />', '2023-06-27 09:58:14', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_horarios`
--

CREATE TABLE `tb_horarios` (
  `id_horario` int(11) NOT NULL,
  `lunes1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `martes1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `miercoles1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `jueves1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `viernes1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sabado1` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lunes2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `martes2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `miercoles2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `jueves2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `viernes2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sabado2` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `lunes3` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `martes3` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `miercoles3` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `jueves3` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `viernes3` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sabado3` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha1` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_horarios`
--

INSERT INTO `tb_horarios` (`id_horario`, `lunes1`, `martes1`, `miercoles1`, `jueves1`, `viernes1`, `sabado1`, `lunes2`, `martes2`, `miercoles2`, `jueves2`, `viernes2`, `sabado2`, `lunes3`, `martes3`, `miercoles3`, `jueves3`, `viernes3`, `sabado3`, `fecha1`, `fecha2`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Cerrado', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Cerrado', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', 'Abierto', '2023-06-19', '2023-06-24', '2023-06-18 00:00:00', '2023-06-29 00:00:00', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_informaciones`
--

CREATE TABLE `tb_informaciones` (
  `id_informacion` int(11) NOT NULL,
  `nombre_parqueo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividad_empresa` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sucursal` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zona` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `departamento_ciudad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_informaciones`
--

INSERT INTO `tb_informaciones` (`id_informacion`, `nombre_parqueo`, `actividad_empresa`, `sucursal`, `direccion`, `zona`, `telefono`, `departamento_ciudad`, `pais`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'SISTEMA DE PARQUEO - FCYT', 'SERVICIO DE PARQUEO', '1', 'AV. OQUENDO', 'LAS CUADRAS', '4888843-4888842', 'COCHABAMBA', 'BOLIVIA', '2023-05-18 12:48:03', '2023-05-24 11:36:32', NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapeos`
--

CREATE TABLE `tb_mapeos` (
  `id_map` int(11) NOT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obs` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mapeos`
--

INSERT INTO `tb_mapeos` (`id_map`, `nro_espacio`, `estado_espacio`, `obs`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'DISPONIBLE', '', '2023-05-25 05:42:44', '2023-07-01 03:09:29', NULL, '1'),
(2, '2', 'DISPONIBLE', '', '2023-05-25 05:43:06', '2023-06-05 01:42:08', NULL, '1'),
(3, '3', 'DISPONIBLE', '', '2023-05-25 05:43:14', '2023-06-29 06:15:04', NULL, '1'),
(4, '4', 'DISPONIBLE', '', '2023-05-25 05:43:25', '2023-06-05 03:15:03', NULL, '1'),
(5, '5', 'DISPONIBLE', '', '2023-05-25 05:43:32', '2023-06-21 00:00:00', NULL, '1'),
(6, '6', 'DISPONIBLE', '', '2023-05-25 05:43:37', '2023-06-05 03:18:18', NULL, '1'),
(7, '7', 'DISPONIBLE', '', '2023-05-25 05:43:42', '2023-06-26 11:09:18', NULL, '1'),
(8, '8', 'DISPONIBLE', '', '2023-05-25 05:43:47', '2023-06-26 11:10:04', NULL, '1'),
(9, '9', 'DISPONIBLE', '', '2023-05-25 05:43:51', NULL, NULL, '1'),
(10, '10', 'DISPONIBLE', '', '2023-05-25 05:43:57', '2023-06-18 11:08:34', NULL, '1'),
(11, '11', 'DISPONIBLE', '', '2023-05-25 07:34:19', '2023-06-04 07:11:29', NULL, '1'),
(12, '12', 'DISPONIBLE', '', '2023-05-25 07:37:49', NULL, NULL, '1'),
(13, '13', 'DISPONIBLE', '', '2023-05-25 07:38:06', '2023-06-09 01:07:28', NULL, '1'),
(14, '14', 'DISPONIBLE', '', '2023-05-25 07:38:18', NULL, NULL, '1'),
(15, '15', 'DISPONIBLE', '', '2023-05-25 07:38:32', '2023-06-26 06:50:47', NULL, '1'),
(16, '16', 'DISPONIBLE', '', '2023-05-25 07:38:51', '2023-06-09 12:58:39', NULL, '1'),
(17, '17', 'DISPONIBLE', '', '2023-05-25 07:38:57', '2023-06-05 11:53:39', NULL, '1'),
(18, '18', 'DISPONIBLE', '', '2023-05-25 07:39:03', '2023-06-26 06:51:06', NULL, '1'),
(19, '19', 'DISPONIBLE', '', '2023-05-25 07:39:08', '2023-06-06 10:23:05', NULL, '1'),
(20, '20', 'DISPONIBLE', '', '2023-05-25 07:39:14', '2023-06-26 06:51:36', NULL, '1'),
(21, '21', 'DISPONIBLE', '', '2023-05-25 07:39:20', '2023-06-27 04:42:27', NULL, '1'),
(22, '22', 'DISPONIBLE', '', '2023-05-25 09:11:46', NULL, NULL, '1'),
(23, '23', 'DISPONIBLE', '', '2023-06-05 12:10:13', NULL, NULL, '1'),
(24, '24', 'DISPONIBLE', '', '2023-06-05 12:10:22', '2023-06-27 12:13:32', NULL, '1'),
(25, '25', 'DISPONIBLE', '', '2023-06-05 12:10:29', '2023-06-18 11:19:09', NULL, '1'),
(26, '26', 'DISPONIBLE', '', '2023-06-05 12:10:39', NULL, NULL, '1'),
(27, '27', 'DISPONIBLE', '', '2023-06-05 12:10:51', NULL, NULL, '1'),
(28, '28', 'DISPONIBLE', '', '2023-06-05 12:10:57', '2023-06-14 09:06:59', NULL, '1'),
(29, '29', 'DISPONIBLE', '', '2023-06-05 12:11:05', '2023-06-27 09:58:14', NULL, '1'),
(30, '30', 'DISPONIBLE', '', '2023-06-05 12:11:10', NULL, NULL, '1'),
(31, '31', 'DISPONIBLE', '', '2023-06-05 12:11:32', NULL, NULL, '1'),
(32, '32', 'DISPONIBLE', '', '2023-06-05 12:11:37', NULL, NULL, '1'),
(33, '33', 'DISPONIBLE', '', '2023-06-05 12:11:42', NULL, NULL, '1'),
(34, '34', 'DISPONIBLE', '', '2023-06-05 12:11:47', NULL, NULL, '1'),
(35, '35', 'DISPONIBLE', '', '2023-06-05 12:11:53', NULL, NULL, '1'),
(36, '36', 'DISPONIBLE', '', '2023-06-05 12:11:59', NULL, NULL, '1'),
(37, '37', 'DISPONIBLE', '', '2023-06-05 12:12:04', NULL, NULL, '1'),
(38, '38', 'DISPONIBLE', '', '2023-06-05 12:12:09', NULL, NULL, '1'),
(39, '39', 'DISPONIBLE', '', '2023-06-05 12:12:14', NULL, NULL, '1'),
(40, '40', 'DISPONIBLE', '', '2023-06-05 12:12:18', '2023-06-26 06:52:03', NULL, '1'),
(41, '41', 'DISPONIBLE', '', '2023-06-05 12:12:24', NULL, NULL, '1'),
(42, '42', 'DISPONIBLE', '', '2023-06-05 12:12:29', NULL, NULL, '1'),
(43, '43', 'DISPONIBLE', '', '2023-06-05 12:12:34', NULL, NULL, '1'),
(44, '44', 'DISPONIBLE', '', '2023-06-05 12:12:38', NULL, NULL, '1'),
(45, '45', 'DISPONIBLE', '', '2023-06-05 12:12:43', NULL, NULL, '1'),
(46, '46', 'DISPONIBLE', '', '2023-06-05 12:12:47', NULL, NULL, '1'),
(47, '47', 'DISPONIBLE', '', '2023-06-05 12:12:52', NULL, NULL, '1'),
(48, '48', 'DISPONIBLE', '', '2023-06-05 12:12:57', NULL, NULL, '1'),
(49, '49', 'DISPONIBLE', '', '2023-06-05 12:13:01', NULL, NULL, '1'),
(50, '50', 'DISPONIBLE', '', '2023-06-05 12:13:06', NULL, NULL, '1'),
(51, '51', 'DISPONIBLE', '', '2023-06-05 12:13:11', NULL, NULL, '1'),
(52, '52', 'DISPONIBLE', '', '2023-06-05 12:13:15', NULL, NULL, '1'),
(53, '53', 'DISPONIBLE', '', '2023-06-05 12:13:21', NULL, NULL, '1'),
(54, '54', 'DISPONIBLE', '', '2023-06-05 12:13:26', NULL, NULL, '1'),
(55, '55', 'DISPONIBLE', '', '2023-06-05 12:13:31', NULL, NULL, '1'),
(56, '56', 'DISPONIBLE', '', '2023-06-05 12:13:36', '2023-06-28 12:38:41', NULL, '1'),
(57, '57', 'DISPONIBLE', '', '2023-06-05 12:13:41', NULL, NULL, '1'),
(58, '58', 'DISPONIBLE', '', '2023-06-05 12:13:45', '2023-06-29 01:55:37', NULL, '1'),
(59, '59', 'DISPONIBLE', '', '2023-06-05 12:13:50', NULL, NULL, '1'),
(60, '60', 'DISPONIBLE', '', '2023-06-05 12:13:54', NULL, NULL, '1'),
(61, '61', 'DISPONIBLE', '', '2023-06-05 12:14:45', NULL, NULL, '1'),
(62, '62', 'DISPONIBLE', '', '2023-06-24 10:52:12', '2023-06-25 12:21:26', '2023-06-24 00:00:00', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapeos2`
--

CREATE TABLE `tb_mapeos2` (
  `id_map` int(11) NOT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obs` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mapeos2`
--

INSERT INTO `tb_mapeos2` (`id_map`, `nro_espacio`, `estado_espacio`, `obs`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'LIBRE', '', '2023-06-20 00:00:00', '2023-07-01 04:07:17', NULL, '1'),
(2, '2', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(3, '3', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(4, '4', 'DISPONIBLE', '4', '2023-06-20 00:00:00', NULL, NULL, '1'),
(5, '5', 'DISPONIBLE', '', '2023-06-20 00:00:00', '2023-06-21 00:00:00', NULL, '1'),
(6, '6', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(7, '7', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(8, '8', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(9, '9', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(10, '10', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(11, '11', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(12, '12', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(13, '13', 'DISPONIBLE', '', '2023-06-20 00:00:00', '2023-06-29 01:57:16', NULL, '1'),
(14, '14', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(15, '15', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(16, '16', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(17, '17', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(18, '18', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(19, '19', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(20, '20', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(21, '21', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(22, '22', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(23, '23', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(24, '24', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(25, '25', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(26, '26', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(27, '27', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(28, '28', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(29, '29', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(30, '30', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(31, '31', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(32, '32', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(33, '33', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(34, '34', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(35, '35', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(36, '36', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(37, '37', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(38, '38', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(39, '39', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(40, '40', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(41, '41', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(42, '42', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(43, '43', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(44, '44', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(45, '45', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(46, '46', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(47, '47', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(48, '48', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(49, '49', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(50, '50', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(51, '51', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(52, '52', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(53, '53', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(54, '54', 'DISPONIBLE', '', '2023-06-20 00:00:00', NULL, NULL, '1'),
(55, '55', 'DISPONIBLE', '', '2023-06-29 00:00:00', NULL, NULL, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mapeos_estatico`
--

CREATE TABLE `tb_mapeos_estatico` (
  `id_map` int(11) NOT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obs` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mapeos_estatico`
--

INSERT INTO `tb_mapeos_estatico` (`id_map`, `nro_espacio`, `estado_espacio`, `obs`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'OCUPADO', NULL, '2023-05-25 21:33:59', NULL, NULL, '1'),
(2, '2', 'OCUPADO', NULL, '2023-05-27 21:01:46', NULL, NULL, '1'),
(3, '3', 'OCUPADO', NULL, '2023-05-28 17:06:37', NULL, NULL, '1'),
(4, '4', 'OCUPADO', NULL, '2023-05-28 17:11:43', NULL, NULL, '1'),
(5, '5', 'OCUPADO', NULL, '2023-05-28 17:11:43', NULL, NULL, '1'),
(6, '6', 'OCUPADO', NULL, '2023-05-28 17:21:28', NULL, NULL, '1'),
(7, '7', 'OCUPADO', NULL, '2023-05-28 17:21:28', NULL, NULL, '1'),
(8, '8', 'OCUPADO', NULL, '2023-05-28 17:21:28', NULL, NULL, '1'),
(9, '9', 'OCUPADO', NULL, '2023-05-28 17:21:28', NULL, NULL, '1'),
(10, '10', 'OCUPADO', NULL, '2023-05-28 17:21:28', NULL, NULL, '1'),
(11, '11', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(12, '12', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(13, '13', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(14, '14', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(15, '15', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(16, '16', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(17, '17', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(18, '18', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(19, '19', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(20, '20', 'OCUPADO', NULL, '2023-05-28 17:43:23', NULL, NULL, '1'),
(21, '21', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(22, '22', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(23, '23', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(24, '24', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(25, '25', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(26, '26', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(27, '27', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(28, '28', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(29, '29', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(30, '30', 'OCUPADO', NULL, '2023-05-28 21:18:11', NULL, NULL, '1'),
(31, '31', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(32, '32', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(33, '33', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(34, '34', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(35, '35', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(36, '36', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(37, '37', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(38, '38', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(39, '39', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(40, '40', 'OCUPADO', NULL, '2023-05-28 23:25:00', NULL, NULL, '1'),
(41, '41', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(42, '42', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(43, '43', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(44, '44', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(45, '45', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(46, '46', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(47, '47', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(48, '48', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(49, '49', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(50, '50', 'OCUPADO', NULL, '2023-05-29 00:37:11', NULL, NULL, '1'),
(51, '51', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(52, '52', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(53, '53', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(54, '54', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(55, '55', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(56, '56', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(57, '57', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(58, '58', 'OCUPADO', NULL, '2023-05-29 01:07:09', NULL, NULL, '1'),
(59, '59', 'OCUPADO', NULL, '2023-05-29 19:35:29', NULL, NULL, '1'),
(60, '60', 'OCUPADO', NULL, '2023-05-29 19:35:29', NULL, NULL, '1'),
(61, '61', 'OCUPADO', NULL, '2023-05-29 19:35:29', NULL, NULL, '1'),
(62, '62', 'OCUPADO', NULL, '2023-05-29 19:35:29', NULL, NULL, '1'),
(63, '63', 'OCUPADO', NULL, '2023-05-29 19:35:29', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mensaje`
--

CREATE TABLE `tb_mensaje` (
  `id_mensaje` int(11) NOT NULL,
  `sis_docente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_docente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `asunto_reclamo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mensaje` longtext COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_mensaje`
--

INSERT INTO `tb_mensaje` (`id_mensaje`, `sis_docente`, `nombre_docente`, `asunto_reclamo`, `mensaje`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(4, '200508855', 'Corina Villarroel Flores', 'prueba 2', 'hola 2', NULL, NULL, '2023-06-17 00:00:00', '0'),
(5, '1111111111', 'Todos los docentes', 'todos', 'mensaje para todos.', NULL, NULL, NULL, '1'),
(6, '200108851', 'Carla Salazar Serrudo', 'Realizando prueba de mensajes', 'Esto es una prueba de mensajes individuales.', NULL, NULL, NULL, '1'),
(7, '1111111111', 'Todos los docentes', 'Mensaje a todos los docentes', 'Mensaje a todos del parqueo\r\nmensaje global.', NULL, NULL, NULL, '1'),
(8, '1111111111', 'Todos los docentes', 'prueba para todos', 'mensaje', NULL, NULL, NULL, '1'),
(9, '1111111111', 'Todos los docentes', 'HOlaaaa', 'HOlaaa pruebas', NULL, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_parqueo1`
--

CREATE TABLE `tb_parqueo1` (
  `id_parqueo1` int(11) NOT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_espacio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `obs` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_parqueo1`
--

INSERT INTO `tb_parqueo1` (`id_parqueo1`, `nro_espacio`, `estado_espacio`, `obs`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'OCUPADO', NULL, '2023-05-15 21:07:54', NULL, NULL, '1'),
(2, '2', 'LIBRE', NULL, '2023-05-16 22:50:48', NULL, NULL, '1'),
(3, '3', 'LIBRE', NULL, '2023-05-16 22:52:12', NULL, NULL, '1'),
(4, '4', 'LIBRE', NULL, '2023-05-16 22:52:42', NULL, NULL, '1'),
(5, '5', 'LIBRE', NULL, '2023-05-16 22:53:09', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_precios`
--

CREATE TABLE `tb_precios` (
  `id_precio` int(11) NOT NULL,
  `cantidad` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `detalle` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_precios`
--

INSERT INTO `tb_precios` (`id_precio`, `cantidad`, `detalle`, `precio`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '1', 'MES', '75', '2023-05-26 18:16:58', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_realizar_reclamo`
--

CREATE TABLE `tb_realizar_reclamo` (
  `id_reclamo` int(11) NOT NULL,
  `sis_docente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre_docente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `asunto_reclamo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `redactar_reclamo` varchar(600) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_realizar_reclamo`
--

INSERT INTO `tb_realizar_reclamo` (`id_reclamo`, `sis_docente`, `nombre_docente`, `asunto_reclamo`, `redactar_reclamo`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, '200508855', 'Corina Villarroel Flores', 'Parqueo sucio', 'El lugar donde estoy se encuentra sucio.', '2023-06-06 12:55:04', NULL, NULL, '1'),
(2, '200508855', 'Corina Villarroel Flores', 'Sitio sucio', 'mi', '2023-06-06 10:18:00', NULL, '2023-06-07 07:38:09', '0'),
(3, '200108851', 'Carla Salazar Serrudo', 'Reclamo', 'Sitio ocupado', '2023-06-12 10:39:20', NULL, NULL, '1'),
(4, '200108851', 'Carla Salazar Serrudo', 'Reclamo de sitio', 'Sition no apto para estacionar.', '2023-06-19 12:40:40', NULL, NULL, '1'),
(5, '200508855', 'Corina Villarroel Flores', 'sitio sucion', 'mi sitio esta sucio', '2023-06-29 06:35:02', NULL, NULL, '1'),
(6, '200508855', 'Corina Villarroel Flores', 'SITIO SUCIO', 'mi sitio ded parqueo esta sucio.', '2023-06-29 06:40:40', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_registros`
--

CREATE TABLE `tb_registros` (
  `id_registro` int(11) NOT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nit_ci` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `placa` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `parqueo_nro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cuota` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `primer_cobro` date NOT NULL,
  `cuota2` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `segundo_cobro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cuota3` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tercer_cobro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado_cobro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_registros`
--

INSERT INTO `tb_registros` (`id_registro`, `nombre_cliente`, `nit_ci`, `placa`, `nro_espacio`, `parqueo_nro`, `cuota`, `primer_cobro`, `cuota2`, `segundo_cobro`, `cuota3`, `tercer_cobro`, `estado_cobro`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(3, 'Corina Villarroel Flores', '200508855', '1111EEE', '1', '2', '75', '2023-08-01', '', '', '', '', 'Al dia', '2023-07-01 00:00:00', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `nombre`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'ADMINISTRADOR', '2023-04-18 06:20:07', NULL, NULL, '1'),
(2, 'SECRETARIA', '2023-04-18 06:29:25', NULL, '2023-04-19 12:42:41', '0'),
(3, 'CONTADOR', '2023-04-18 08:47:46', NULL, '2023-04-18 09:01:21', '0'),
(4, 'GUARDIA', '2023-04-19 12:38:22', NULL, '2023-05-20 12:47:53', '0'),
(5, 'SECRETARIA', '2023-04-19 12:42:57', NULL, NULL, '1'),
(6, 'OPERADOR', '2023-05-20 12:48:22', NULL, NULL, '1'),
(7, 'OPERADOR', '2023-05-23 03:05:23', NULL, '2023-06-20 12:08:35', '0'),
(9, 'GUARDIA', '2023-06-29 05:58:29', NULL, '2023-06-29 05:59:01', '0'),
(10, 'GUARDIA', '2023-06-29 05:59:31', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_solicitud_compartido`
--

CREATE TABLE `tb_solicitud_compartido` (
  `id_compartido` int(11) NOT NULL,
  `sis_docente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `propietario` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_usuario` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `placa` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_inicio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora_inicio` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora_final` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacio` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_solicitud_compartido`
--

INSERT INTO `tb_solicitud_compartido` (`id_compartido`, `sis_docente`, `propietario`, `nro_espacio`, `nombre_usuario`, `placa`, `fecha_inicio`, `hora_inicio`, `hora_final`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacio`, `estado`) VALUES
(2, '200508855', 'CORINA VILLARROEL', '10', 'LETICIA BLANCO', '4545FQL', '2023-06-02', '10:00', '11:00', '2023-06-02 12:56:00', NULL, NULL, '1'),
(9, '200508855', 'Corina Villarroel Flores', '10', 'Americo Fiorillo', '4545GGG', '2023-06-07', '10:15', '11:15', '2023-06-06 10:17:14', NULL, NULL, '1'),
(10, '200508855', 'Corina Villarroel Flores', '10', 'leticia blanco coca', '7878OOO', '2023-06-29', '18:37', '18:37', '2023-06-29 06:40:12', NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_solicitud_vehiculo`
--

CREATE TABLE `tb_solicitud_vehiculo` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sis_docente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `marca` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `modelo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacio` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_solicitud_vehiculo`
--

INSERT INTO `tb_solicitud_vehiculo` (`id`, `nombres`, `placa`, `sis_docente`, `marca`, `modelo`, `color`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacio`, `estado`) VALUES
(5, 'BORIS CALANCHA NAVIA', '8989NLM', '20095689', 'TOYOTA', 'NISSAN', 'NEGRO', '2023-07-02 05:55:36', NULL, '2023-07-02 06:19:56', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tickets`
--

CREATE TABLE `tb_tickets` (
  `id_ticket` int(11) NOT NULL,
  `placa_auto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_cliente` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit_ci` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuviculo` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ingreso` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `hora_ingreso` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_ticket` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `parqueo_nro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_sesion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_tickets`
--

INSERT INTO `tb_tickets` (`id_ticket`, `placa_auto`, `nombre_cliente`, `nit_ci`, `cuviculo`, `fecha_ingreso`, `hora_ingreso`, `estado_ticket`, `parqueo_nro`, `user_sesion`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(3, '8888TTT', 'Carla Salazar Serrudo', '200108851', '56', '2023-06-28', '00:09', 'OCUPADO', '', 'leonlee342@gmail.com', '2023-06-28 12:09:48', NULL, NULL, '0'),
(4, '8888TTT', 'Carla Salazar Serrudo', '200108851', '56', '2023-06-28', '00:11', 'OCUPADO', '', 'leonlee342@gmail.com', '2023-06-28 12:11:33', NULL, NULL, '0'),
(5, '1111EEE', 'Corina Villarroel Flores', NULL, '58', '2023-06-28', '00:12', 'OCUPADO', '', 'leonlee342@gmail.com', '2023-06-28 12:12:39', NULL, NULL, '0'),
(6, '1111EEE', 'Corina Villarroel Flores', '200508855', '58', '2023-06-28', '00:15', 'OCUPADO', '', 'leonlee342@gmail.com', '2023-06-28 12:15:53', NULL, NULL, '0'),
(7, '8888TTT', 'Carla Salazar Serrudo', '200108851', '56', '2023-06-28', '00:16', 'OCUPADO', '', 'leonlee342@gmail.com', '2023-06-28 12:22:22', NULL, '2023-06-28 12:38:41', '0'),
(8, '1111EEE', 'Corina Villarroel Flores', '200508855', '58', '2023-06-28', '00:22', 'OCUPADO', '', 'leonlee342@gmail.com', '2023-06-28 12:22:45', NULL, '2023-06-28 12:39:23', '0'),
(9, '1111EEE', 'Corina Villarroel Flores', '200508855', '58', '2023-06-29', '13:06', 'OCUPADO', '1', 'leonlee342@gmail.com', '2023-06-29 01:06:17', NULL, NULL, '0'),
(10, '8888TTT', 'Carla Salazar Serrudo', NULL, '13', '2023-06-29', '13:06', 'OCUPADO', '2', 'leonlee342@gmail.com', '2023-06-29 01:06:26', NULL, NULL, '0'),
(11, '1111EEE', 'Corina Villarroel Flores', '200508855', '58', '2023-06-29', '13:17', 'OCUPADO', '1', 'leonlee342@gmail.com', '2023-06-29 01:17:55', NULL, '2023-06-29 01:29:14', '0'),
(12, '8888TTT', 'Carla Salazar Serrudo', '200108851', '13', '2023-06-29', '13:17', 'OCUPADO', '2', 'leonlee342@gmail.com', '2023-06-29 01:18:02', NULL, '2023-06-29 01:30:13', '0'),
(13, '1111EEE', 'Corina Villarroel Flores', '200508855', '58', '2023-06-29', '13:55', 'LIBRE', '1', 'leonlee342@gmail.com', '2023-06-29 01:55:07', NULL, '2023-06-29 01:55:37', '0'),
(14, '8888TTT', 'Carla Salazar Serrudo', '200108851', '13', '2023-06-29', '13:54', 'OCUPADO', '2', 'leonlee342@gmail.com', '2023-06-29 01:55:20', NULL, '2023-06-29 01:55:42', '0'),
(15, '8888TTT', 'Carla Salazar Serrudo', '200108851', '13', '2023-06-29', '13:57', 'LIBRE', '2', 'leonlee342@gmail.com', '2023-06-29 01:57:06', NULL, '2023-06-29 01:57:16', '0'),
(16, '1111EEE', 'Corina Villarroel Flores', '200508855', '3', '2023-06-29', '18:06', 'LIBRE', '1', 'leonlee342@gmail.com', '2023-06-29 06:13:43', NULL, '2023-06-29 06:15:04', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_verificado` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `password_user` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nombres`, `rol`, `email`, `email_verificado`, `password_user`, `token`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Eddy Condori Guzman', 'ADMINISTRADOR', 'leonlee342@gmail.com', 'si', '12345', NULL, '2023-04-02 16:48:30', NULL, NULL, '1'),
(2, 'Loida Cano Cucho', NULL, 'loidacano769@gmail.com', 'si', 'usuario', NULL, NULL, NULL, NULL, '1'),
(3, 'Kevin Jimmy Arroyo Gaya', 'GUARDIA', 'kevo210723@gmail.com', 'si', 'usuario', NULL, NULL, NULL, '2023-04-20 03:04:05', '0'),
(5, 'Daniela Chacon', 'SECRETARIA', 'carla303011@yahoo.com', NULL, '123456', NULL, NULL, '2023-06-29 05:49:45', NULL, '1'),
(6, 'Juan Gabriel', 'OPERADOR', 'juangabriel@gmail.com', NULL, 'juan12345', NULL, NULL, '2023-04-13 08:39:26', NULL, '1'),
(7, 'silvia', NULL, 'silvia@gmail.com', NULL, 'silvia12345', NULL, NULL, NULL, '2023-04-18 01:15:16', '0'),
(8, 'Carlos Guardia', 'ADMINISTRADOR', 'carlos@gmail.com', NULL, '12345', NULL, '2023-04-13 10:28:03', '2023-04-13 08:08:28', NULL, '1'),
(10, 'Jenry David Chuquimia', 'GUARDIA', 'jenry@gmail.com', NULL, '12345', NULL, '2023-04-19 12:55:32', NULL, NULL, '1'),
(11, 'Alvaro Morales', 'OPERADOR', 'alvaro@gmail.com', NULL, '12345', NULL, '2023-06-19 03:56:23', NULL, NULL, '1'),
(16, 'EDDY WILDER', NULL, 'lisannadeline@hotmail.com', NULL, '123456', NULL, '2023-06-28 09:19:57', NULL, '2023-06-28 09:20:10', '0'),
(17, 'Hernan Ustariz', 'OPERADOR', 'hustaris@umss.edu', NULL, '123456', NULL, '2023-06-29 05:52:04', NULL, NULL, '1'),
(18, 'EDDY WILDER', NULL, 'lisannadeline@hotmail.com', NULL, '?¡?¡', NULL, '2023-07-01 10:08:54', NULL, '2023-07-01 10:09:24', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_vehiculos`
--

CREATE TABLE `tb_vehiculos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `placa` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sis_docente` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `modelo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `color` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nro_espacio` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `parqueo_nro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `estado_vehiculo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fyh_creacion` datetime DEFAULT NULL,
  `fyh_actualizacion` datetime DEFAULT NULL,
  `fyh_eliminacion` datetime DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_vehiculos`
--

INSERT INTO `tb_vehiculos` (`id`, `nombres`, `placa`, `sis_docente`, `marca`, `modelo`, `color`, `nro_espacio`, `parqueo_nro`, `estado_vehiculo`, `fyh_creacion`, `fyh_actualizacion`, `fyh_eliminacion`, `estado`) VALUES
(1, 'Corina Villarroel Flores', '1111EEE', '200508855', 'TOYOTA', 'NISSAN', 'NEGRO', '1', '2', 'TITULAR', '2023-06-25 10:04:45', NULL, NULL, '1'),
(2, 'Carla Salazar Serrudo', '8888TTT', '200108851', 'TOYOTA', 'COROLLA', 'PLOMO', '', '', 'TITULAR', '2023-06-26 01:26:45', '2023-06-26 11:56:50', '2023-06-28 01:58:55', '1'),
(3, 'Corina Villarroel Flores', '4545TYU', '200508855', 'CALMINA', 'CALMINA', 'VERDE', '', '', 'COMPARTIDO', NULL, NULL, NULL, '1'),
(4, 'Corina Villarroel Flores', '9876GGG', '200508855', 'CANIONERO', 'CALI', 'DORADO', '', '', 'OTRO', NULL, NULL, NULL, '1'),
(5, 'Carla Salazar Serrudo', '8888TTL', '200108851', 'MITSUBISHI', 'CROMO', 'ROJO', '', '', 'COMPARTIDO', NULL, NULL, '2023-06-28 01:58:55', '1'),
(6, 'Patricia Romeo Rodriguez', '5528LPL', '200008859', 'TOYOTA', 'TOYOTA', 'PLOMO', '', '', '', '2023-06-29 06:24:07', NULL, NULL, '1'),
(9, 'BORIS CALANCHA NAVIA', '8989NLM', '20095689', 'TOYOTA', 'NISSAN', 'NEGRO', '', '', 'TITULAR', '2023-07-02 05:55:36', NULL, NULL, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_cobros`
--
ALTER TABLE `tb_cobros`
  ADD PRIMARY KEY (`id_cobro`);

--
-- Indices de la tabla `tb_docentes`
--
ALTER TABLE `tb_docentes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  ADD PRIMARY KEY (`id_informacion`);

--
-- Indices de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  ADD PRIMARY KEY (`id_map`);

--
-- Indices de la tabla `tb_mapeos2`
--
ALTER TABLE `tb_mapeos2`
  ADD PRIMARY KEY (`id_map`);

--
-- Indices de la tabla `tb_mapeos_estatico`
--
ALTER TABLE `tb_mapeos_estatico`
  ADD PRIMARY KEY (`id_map`);

--
-- Indices de la tabla `tb_mensaje`
--
ALTER TABLE `tb_mensaje`
  ADD PRIMARY KEY (`id_mensaje`);

--
-- Indices de la tabla `tb_parqueo1`
--
ALTER TABLE `tb_parqueo1`
  ADD PRIMARY KEY (`id_parqueo1`);

--
-- Indices de la tabla `tb_precios`
--
ALTER TABLE `tb_precios`
  ADD PRIMARY KEY (`id_precio`);

--
-- Indices de la tabla `tb_realizar_reclamo`
--
ALTER TABLE `tb_realizar_reclamo`
  ADD PRIMARY KEY (`id_reclamo`);

--
-- Indices de la tabla `tb_registros`
--
ALTER TABLE `tb_registros`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_solicitud_compartido`
--
ALTER TABLE `tb_solicitud_compartido`
  ADD PRIMARY KEY (`id_compartido`);

--
-- Indices de la tabla `tb_solicitud_vehiculo`
--
ALTER TABLE `tb_solicitud_vehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `tb_cobros`
--
ALTER TABLE `tb_cobros`
  MODIFY `id_cobro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_docentes`
--
ALTER TABLE `tb_docentes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_horarios`
--
ALTER TABLE `tb_horarios`
  MODIFY `id_horario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_informaciones`
--
ALTER TABLE `tb_informaciones`
  MODIFY `id_informacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_mapeos`
--
ALTER TABLE `tb_mapeos`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `tb_mapeos2`
--
ALTER TABLE `tb_mapeos2`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `tb_mapeos_estatico`
--
ALTER TABLE `tb_mapeos_estatico`
  MODIFY `id_map` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `tb_mensaje`
--
ALTER TABLE `tb_mensaje`
  MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_parqueo1`
--
ALTER TABLE `tb_parqueo1`
  MODIFY `id_parqueo1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_precios`
--
ALTER TABLE `tb_precios`
  MODIFY `id_precio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_realizar_reclamo`
--
ALTER TABLE `tb_realizar_reclamo`
  MODIFY `id_reclamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_registros`
--
ALTER TABLE `tb_registros`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_solicitud_compartido`
--
ALTER TABLE `tb_solicitud_compartido`
  MODIFY `id_compartido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_solicitud_vehiculo`
--
ALTER TABLE `tb_solicitud_vehiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_tickets`
--
ALTER TABLE `tb_tickets`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tb_vehiculos`
--
ALTER TABLE `tb_vehiculos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
