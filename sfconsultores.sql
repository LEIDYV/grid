-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 01-02-2017 a las 05:03:04
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sfconsultores`
--
CREATE DATABASE IF NOT EXISTS `sfconsultores` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sfconsultores`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autentificacion`
--

CREATE TABLE IF NOT EXISTS `autentificacion` (
  `idUsuario` int(10) NOT NULL,
  `usuario` varchar(16) DEFAULT NULL,
  `contrasenia` varchar(16) DEFAULT NULL,
  `rango` int(2) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autentificacion`
--

INSERT INTO `autentificacion` (`idUsuario`, `usuario`, `contrasenia`, `rango`) VALUES
(1, 'vegasa', 'vegasa29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `IdClientes` int(10) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `ApPaterno` varchar(25) DEFAULT NULL,
  `ApMaterno` varchar(25) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `Telefono` decimal(15,0) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `sistema` int(10) DEFAULT NULL,
  `mensaje` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`IdClientes`),
  KEY `IdDomicilio` (`domicilio`),
  KEY `IdVentPr` (`sistema`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
  `IdServicio` int(10) NOT NULL DEFAULT '0',
  `usuario` varchar(50) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`IdServicio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`IdServicio`, `usuario`, `mensaje`) VALUES
(1, 'leidy', 'hdgahgsvdhgvsdja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventaproducto`
--

CREATE TABLE IF NOT EXISTS `ventaproducto` (
  `IdVentProd` int(10) NOT NULL,
  `rfc` varchar(18) DEFAULT NULL,
  `cont` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`IdVentProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `IdVentPr` FOREIGN KEY (`sistema`) REFERENCES `ventaproducto` (`IdVentProd`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventaproducto`
--
ALTER TABLE `ventaproducto`
  ADD CONSTRAINT `idServicio` FOREIGN KEY (`IdVentProd`) REFERENCES `servicio` (`IdServicio`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
