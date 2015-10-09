-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-10-2015 a las 21:41:56
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `carniceria`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `alta`(IN `nom` VARCHAR(25), IN `ape` VARCHAR(25), IN `tele` INT(10), IN `domi` VARCHAR(40), IN `pedi` VARCHAR(40))
    NO SQL
INSERT into clientes (Nombre,Apellido,Telefono,Domicilio,Pedido)values(nom,ape,tele,domi,pedi)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar`(IN `paramid` INT)
    NO SQL
delete from clientes where id=paramid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificar`(IN `paramid` INT, IN `nom` VARCHAR(25), IN `ape` VARCHAR(25), IN `tel` INT(10), IN `dom` VARCHAR(40), IN `pedi` VARCHAR(40))
    NO SQL
update clientes
				set nombre=nom,
				apellido=ape,
				telefono=tel,
				domicilio=dom,
				pedido=pedi 
				WHERE id=paramid$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`Id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Apellido` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` int(10) DEFAULT NULL,
  `Domicilio` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `Pedido` varchar(40) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Nombre`, `Apellido`, `Telefono`, `Domicilio`, `Pedido`) VALUES
(44, 'Reina', 'Perez', 42523366, 'Ituzaingo', '2kgMilanesas'),
(45, 'Leo', 'Reitano', 12121212, 'sdfsdfsd', 'dsfsdfsd'),
(46, 'fdfsd', 'fdsfdsfsd', 32333, 'sdfdsf', 'sdfsdf'),
(47, 'sdfdsf', 'dsfdsf', 33434, 'dfsf', 'dsfdsfds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`Id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Contraseña` varchar(25) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Contraseña`) VALUES
(1, 'Leo', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
