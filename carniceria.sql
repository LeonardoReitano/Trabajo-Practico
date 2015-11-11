-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-11-2015 a las 20:02:06
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
CREATE DEFINER=`root`@`localhost` PROCEDURE `alta`(IN `nom` VARCHAR(25), IN `ape` VARCHAR(25), IN `tele` INT(25), IN `domi` VARCHAR(25), IN `pedi` VARCHAR(300), IN `pag` VARCHAR(15), IN `env` VARCHAR(15))
    NO SQL
INSERT into clientes (Nombre,Apellido,Telefono,Domicilio,Pedido,Pago,Envio)values(nom,ape,tele,domi,pedi,pag,env)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `altausuario`(IN `paramN` VARCHAR(25), IN `paramC` VARCHAR(32), IN `paramE` VARCHAR(100), IN `paramF` VARCHAR(200))
    NO SQL
INSERT into
usuarios (Nombre,Contrasenia,Email,Foto) values (paramN,paramC,paramE,paramF)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrar`(IN `paramid` INT)
    NO SQL
delete from clientes where id=paramid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `borrarusuario`(IN `paramid` INT)
    NO SQL
delete from usuarios where Id=paramid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificar`(IN `paramid` INT, IN `nom` VARCHAR(25), IN `ape` VARCHAR(25), IN `tel` INT(25), IN `dom` VARCHAR(25), IN `pedi` VARCHAR(300), IN `pag` VARCHAR(15), IN `env` VARCHAR(15))
    NO SQL
update clientes
				set nombre=nom,
				apellido=ape,
				telefono=tel,
				domicilio=dom,
				pedido=pedi,
                pago=pag,
                envio=env
				WHERE id=paramid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `modificarUsuario`(IN `paramid` INT, IN `nom` VARCHAR(25), IN `contra` VARCHAR(32), IN `ema` VARCHAR(100), IN `fot` VARCHAR(200))
    NO SQL
update usuarios
				set nombre=nom,
				contrasenia=contra,
				email=ema,
				foto=fot
				WHERE id=paramid$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `TraerUsuarioPorNombre`(IN `nom` VARCHAR(25))
    NO SQL
select * from usuarios where Nombre=nom$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`Id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Apellido` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` int(25) NOT NULL,
  `Domicilio` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Pedido` varchar(300) COLLATE latin1_spanish_ci NOT NULL,
  `Pago` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `Envio` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`Id`, `Nombre`, `Apellido`, `Telefono`, `Domicilio`, `Pedido`, `Pago`, `Envio`) VALUES
(2, 'Leo', 'Reitano', 42516819, 'Rocha 1157', '2kg Milanesas', 'Tarjeta', 'Retira');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
`Id` int(11) NOT NULL,
  `Nombre` varchar(25) COLLATE latin1_spanish_ci NOT NULL,
  `Contrasenia` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  `Email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
  `Foto` varchar(200) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `Nombre`, `Contrasenia`, `Email`, `Foto`) VALUES
(17, 'Gonza', '202cb962ac59075b964b07152d234b70', 'sdfsdf@dfssdf', '12170988_10208161093603827_2018635825_o.jpg'),
(19, 'aaa', '74b87337454200d4d33f80c4663dc5e5', 'adsfsdfsdfdsfs@fff', '1408701f-c9ec-4180-bb85-e2f40b2582f5.jpg');

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
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
