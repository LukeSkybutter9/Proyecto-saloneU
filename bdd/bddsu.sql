-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2022 a las 05:44:43
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bddsu`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `edificio`
--

CREATE TABLE `edificio` (
  `idEdificio` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `edificio`
--

INSERT INTO `edificio` (`idEdificio`, `nombre`) VALUES
(1, 'Sierra Nevada'),
(2, 'Cienaga Grande'),
(3, 'Mar Caribe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `idEstado` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialreserva`
--

CREATE TABLE `historialreserva` (
  `idHistorial` int(100) NOT NULL,
  `fechaRegistro` datetime(6) NOT NULL,
  `usuarioReservador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `idReserva` int(200) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `idUsuario` int(200) NOT NULL,
  `idEdificio` int(200) NOT NULL,
  `idSalon` int(200) NOT NULL,
  `idEstado` int(200) DEFAULT NULL,
  `asunto` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(100) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `idSalon` int(100) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `idEdificio` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `salon`
--

INSERT INTO `salon` (`idSalon`, `ubicacion`, `estado`, `idEdificio`) VALUES
(1, 'NORTE-101', 'Disponible', 1),
(2, 'NORTE-102', 'Disponible', 1),
(3, 'NORTE-103', 'Disponible', 1),
(4, 'NORTE-104', 'Disponible', 1),
(5, 'NORTE-105', 'Disponible', 1),
(6, 'NORTE-201', 'Disponible', 1),
(7, 'NORTE-202', 'Disponible', 1),
(8, 'NORTE-203', 'Disponible', 1),
(9, 'NORTE-204', 'Disponible', 1),
(10, 'NORTE-205', 'Disponible', 1),
(11, 'NORTE-301', 'Disponible', 1),
(12, 'NORTE-302', 'Disponible', 1),
(13, 'NORTE-303', 'Disponible', 1),
(14, 'NORTE-304', 'Disponible', 1),
(15, 'NORTE-305', 'Disponible', 1),
(16, 'SUR-101', 'Disponible', 1),
(17, 'SUR-102', 'Disponible', 1),
(18, 'SUR-103', 'Disponible', 1),
(19, 'SUR-104', 'Disponible', 1),
(20, 'SUR-105', 'Disponible', 1),
(21, 'SUR-201', 'Disponible', 1),
(22, 'SUR-202', 'Disponible', 1),
(23, 'SUR-203', 'Disponible', 1),
(24, 'SUR-204', 'Disponible', 1),
(25, 'SUR-205', 'Disponible', 1),
(26, 'SUR-301', 'Disponible', 1),
(27, 'SUR-302', 'Disponible', 1),
(28, 'SUR-303', 'Disponible', 1),
(29, 'SUR-304', 'Disponible', 1),
(30, 'SUR-305', 'Disponible', 1),
(61, 'NORTE-101', 'Disponible', 2),
(62, 'NORTE-102', 'Disponible', 2),
(63, 'NORTE-103', 'Disponible', 2),
(64, 'NORTE-104', 'Disponible', 2),
(65, 'NORTE-105', 'Disponible', 2),
(66, 'NORTE-201', 'Disponible', 2),
(67, 'NORTE-202', 'Disponible', 2),
(68, 'NORTE-203', 'Disponible', 2),
(69, 'NORTE-204', 'Disponible', 2),
(70, 'NORTE-205', 'Disponible', 2),
(71, 'NORTE-301', 'Disponible', 2),
(72, 'NORTE-302', 'Disponible', 2),
(73, 'NORTE-303', 'Disponible', 2),
(74, 'NORTE-304', 'Disponible', 2),
(75, 'NORTE-305', 'Disponible', 2),
(76, 'SUR-101', 'Disponible', 2),
(77, 'SUR-102', 'Disponible', 2),
(78, 'SUR-103', 'Disponible', 2),
(79, 'SUR-104', 'Disponible', 2),
(80, 'SUR-105', 'Disponible', 2),
(81, 'SUR-201', 'Disponible', 2),
(82, 'SUR-202', 'Disponible', 2),
(83, 'SUR-203', 'Disponible', 2),
(84, 'SUR-204', 'Disponible', 2),
(85, 'SUR-205', 'Disponible', 2),
(86, 'SUR-301', 'Disponible', 2),
(87, 'SUR-302', 'Disponible', 2),
(88, 'SUR-303', 'Disponible', 2),
(89, 'SUR-304', 'Disponible', 2),
(90, 'SUR-305', 'Disponible', 2),
(91, 'NORTE-101', 'Disponible', 3),
(92, 'NORTE-102', 'Disponible', 3),
(93, 'NORTE-103', 'Disponible', 3),
(94, 'NORTE-104', 'Disponible', 3),
(95, 'NORTE-105', 'Disponible', 3),
(96, 'NORTE-201', 'Disponible', 3),
(97, 'NORTE-202', 'Disponible', 3),
(98, 'NORTE-203', 'Disponible', 3),
(99, 'NORTE-204', 'Disponible', 3),
(100, 'NORTE-205', 'Disponible', 3),
(101, 'NORTE-301', 'Disponible', 3),
(102, 'NORTE-302', 'Disponible', 3),
(103, 'NORTE-303', 'Disponible', 3),
(104, 'NORTE-304', 'Disponible', 3),
(105, 'NORTE-305', 'Disponible', 3),
(106, 'NORTE-401', 'Disponible', 3),
(107, 'NORTE-402', 'Disponible', 3),
(108, 'NORTE-403', 'Disponible', 3),
(109, 'NORTE-404', 'Disponible', 3),
(110, 'NORTE-405', 'Disponible', 3),
(111, 'SUR-101', 'Disponible', 3),
(112, 'SUR-102', 'Disponible', 3),
(113, 'SUR-103', 'Disponible', 3),
(114, 'SUR-104', 'Disponible', 3),
(115, 'SUR-105', 'Disponible', 3),
(116, 'SUR-201', 'Disponible', 3),
(117, 'SUR-202', 'Disponible', 3),
(118, 'SUR-203', 'Disponible', 3),
(119, 'SUR-204', 'Disponible', 3),
(120, 'SUR-205', 'Disponible', 3),
(121, 'SUR-301', 'Disponible', 3),
(122, 'SUR-302', 'Disponible', 3),
(123, 'SUR-303', 'Disponible', 3),
(124, 'SUR-304', 'Disponible', 3),
(125, 'SUR-305', 'Disponible', 3),
(126, 'SUR-401', 'Disponible', 3),
(127, 'SUR-402', 'Disponible', 3),
(128, 'SUR-403', 'Disponible', 3),
(129, 'SUR-404', 'Disponible', 3),
(130, 'SUR-405', 'Disponible', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codEdst` int(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `fechaNac` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `administrador` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codEdst`, `nombre`, `correo`, `password`, `telefono`, `fechaNac`, `sexo`, `administrador`) VALUES
(1, 'Administrador', 'admin', '123', '123456', 'Febrero 7 - 1999', 'Masculino', 'Sisas'),
(2019214031, 'Fabian Escalante', 'fali.escalante99@gmail.com', 'tumae', '3008014456', 'Febrero-7-1999', 'De día uno, de noche otra', 'Aro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `edificio`
--
ALTER TABLE `edificio`
  ADD PRIMARY KEY (`idEdificio`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `historialreserva`
--
ALTER TABLE `historialreserva`
  ADD PRIMARY KEY (`idHistorial`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`idReserva`),
  ADD KEY `idEdificio` (`idEdificio`),
  ADD KEY `idSalon` (`idSalon`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`idSalon`),
  ADD KEY `idEdificio` (`idEdificio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codEdst`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `edificio`
--
ALTER TABLE `edificio`
  MODIFY `idEdificio` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historialreserva`
--
ALTER TABLE `historialreserva`
  MODIFY `idHistorial` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `idReserva` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `salon`
--
ALTER TABLE `salon`
  MODIFY `idSalon` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_ibfk_1` FOREIGN KEY (`idEdificio`) REFERENCES `edificio` (`idEdificio`),
  ADD CONSTRAINT `reserva_ibfk_2` FOREIGN KEY (`idSalon`) REFERENCES `salon` (`idSalon`);

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `salon_ibfk_1` FOREIGN KEY (`idEdificio`) REFERENCES `edificio` (`idEdificio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
