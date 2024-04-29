-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2024 a las 15:26:16
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
-- Base de datos: `prueba10B`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alape`
--

CREATE TABLE `alape` (
  `Codigo` int(4) NOT NULL,
  `p_nombre` varchar(20) NOT NULL,
  `s_nombre` varchar(30) NOT NULL,
  `p_apellido` varchar(20) NOT NULL,
  `s_apellido` varchar(30) NOT NULL,
  `edad` int(2) NOT NULL,
  `telefono` int(13) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `area_de_trabajo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alape`
--

INSERT INTO `alape` (`Codigo`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `edad`, `telefono`, `direccion`, `correo`, `area_de_trabajo`) VALUES
(2222, 'martina', 'sofia', 'benavidez ', 'gonsales ', 32, 13241526, 'California', 'marinasofiabana@gmail.com', 'administrativa'),
(3456, 'hellen', 'sofia', 'amaya', 'bedoya', 15, 312455668, 'cali', 'amayalulo@gmail.com', 'aseo'),
(5642, 'karol', 'sofia', 'sevilla', 'perez', 24, 314929018, 'cra 8 m 5647', 'sevillano@gmail.com', 'contadora'),
(5657, 'jose', 'manuel', 'ocampo', 'castallaño ', 15, 315456398, 'cosfa', 'josesitomanuel@gmail.com', 'mantenimiento'),
(9876, 'johan', 'felipe', 'sepulveda', 'hernandez', 15, 324565756, 'cra 5 t 9856', 'sepulvedafelipe@gmail.com', 'administrativo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alape`
--
ALTER TABLE `alape`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
