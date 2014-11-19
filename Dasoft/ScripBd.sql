-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-11-2014 a las 04:56:25
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dasoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `abogado`
--

CREATE TABLE IF NOT EXISTS `abogado` (
  `idabogado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoPaterno` varchar(45) DEFAULT NULL,
  `apellidoMaterno` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idabogado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `abogado`
--

INSERT INTO `abogado` (`idabogado`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `telefono`, `email`) VALUES
(1, 'Carlos Humberto', 'Romero ', 'Callejas', '2288345789', 'carlos920228@gmail.com'),
(2, 'Jose Pepe', 'Romero ', 'Callejas', '12345678', 'megadech@gmail.com'),
(5, 'Cirilo', 'Garcia ', 'Romero', '2288992233', 'cirilo@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE IF NOT EXISTS `casos` (
  `idcasos` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCaso` varchar(45) NOT NULL,
  `fechaApertura` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `archivoFisico` varchar(45) DEFAULT NULL,
  `juzgado` varchar(45) DEFAULT NULL,
  `clientes_id` int(11) NOT NULL,
  `abogado_idabogado` int(11) NOT NULL,
  PRIMARY KEY (`idcasos`),
  KEY `fk_casos_clientes_idx` (`clientes_id`),
  KEY `fk_casos_abogado1_idx` (`abogado_idabogado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `casos`
--

INSERT INTO `casos` (`idcasos`, `nombreCaso`, `fechaApertura`, `estado`, `archivoFisico`, `juzgado`, `clientes_id`, `abogado_idabogado`) VALUES
(2, 'Demanda', '13/11/14', 'Estudio', 'Caja 12 cuarto 1', 'Menor', 1, 1),
(3, 'Ejemplo modificado', '14/11/14', 'En espera de audicion', 'Caja 13 cuarto 1', 'General', 1, 2),
(4, 'Primero agregado ', 'Interfas', 'Civil', 'fsdfsdf', 'fsdfsdf', 1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rfc` varchar(20) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellidoPaterno` varchar(45) DEFAULT NULL,
  `apellidoMaterno` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL COMMENT '	',
  `calle` varchar(45) DEFAULT NULL,
  `numero` int(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `rfc`, `nombre`, `apellidoPaterno`, `apellidoMaterno`, `colonia`, `calle`, `numero`) VALUES
(1, 'qwertyui12', 'Fulano', 'Juez', 'Seguro', 'Peñascal', 'reforma', 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuarios`, `usuario`, `password`, `rol`) VALUES
(1, 'carlos', 'dd', 'abogado'),
(2, 'jose', 'jose', 'cliente');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casos`
--
ALTER TABLE `casos`
  ADD CONSTRAINT `fk_casos_abogado1` FOREIGN KEY (`abogado_idabogado`) REFERENCES `abogado` (`idabogado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_casos_clientes` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
