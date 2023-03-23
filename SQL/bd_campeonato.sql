-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-03-2023 a las 16:58:23
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
-- Base de datos: `bd_campeonato`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipos`
--

CREATE TABLE `Equipos` (
  `ID_EQUIPO` int(11) NOT NULL,
  `NOMBRE_EQUIPO` varchar(100) NOT NULL,
  `NOMBRE_ENTRENADOR` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `Equipos`
--

INSERT INTO `Equipos` (`ID_EQUIPO`, `NOMBRE_EQUIPO`, `NOMBRE_ENTRENADOR`) VALUES
(1, 'Junior', 'Hernan Dario'),
(2, 'FC Barcelona', 'Ronald Koeman'),
(3, 'Real Madrid CF', 'Carlo Ancelotti'),
(4, 'FC Bayern Munchen', 'Julian Nagelsmann'),
(5, 'Juventus', 'Andrea Pirlo'),
(6, 'Paris Saint-Germain', 'Mauricio Pochettino'),
(7, 'Manchester City FC', 'Pep Guardiola'),
(8, 'Sevilla FC', 'Jorge Sampaoli'),
(9, 'FC Porto', 'Sergio Paulo'),
(10, 'Arsenal FC', 'Mikel Arteta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Partidos`
--

CREATE TABLE `Partidos` (
  `FECHA` date NOT NULL,
  `NOM_EQU_LOCAL` varchar(100) NOT NULL,
  `GOLES_EQU_LOCAL` int(11) DEFAULT NULL,
  `GOLES_EQU_VISIT` int(11) DEFAULT NULL,
  `NOM_EQU_VISIT` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  ADD PRIMARY KEY (`ID_EQUIPO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  MODIFY `ID_EQUIPO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
