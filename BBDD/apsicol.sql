-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.32-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para apsicol
CREATE DATABASE IF NOT EXISTS `apsicol` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `apsicol`;

-- Volcando estructura para tabla apsicol.administrador
CREATE TABLE IF NOT EXISTS `administrador` (
  `adm_cedula` varchar(11) NOT NULL,
  `adm_nombre` varchar(45) DEFAULT NULL,
  `adm_apellido` varchar(45) DEFAULT NULL,
  `adm_password` varchar(255) DEFAULT NULL,
  `adm_telefono` varchar(11) DEFAULT NULL,
  `adm_email` varchar(45) DEFAULT NULL,
  `adm_direccion` varchar(45) DEFAULT NULL,
  `adm_fecha_nacimiento` date DEFAULT NULL,
  `adm_fecha_creacion` datetime DEFAULT NULL,
  `adm_rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`adm_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.agricola
CREATE TABLE IF NOT EXISTS `agricola` (
  `Ape_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Ape_nombre` varchar(45) NOT NULL,
  `Ape_tipo` varchar(45) DEFAULT NULL,
  `Ape_fecha_creacion` datetime NOT NULL,
  `Ape_Foto` varchar(120) NOT NULL,
  `Ape_Descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`Ape_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.agricola_pecuario
CREATE TABLE IF NOT EXISTS `agricola_pecuario` (
  `ape_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ape_nombre` varchar(45) NOT NULL,
  `Ape_tipo` varchar(45) DEFAULT NULL,
  `Ape_fecha_creacion` datetime NOT NULL,
  `Ape_Foto` varchar(120) NOT NULL,
  `Ape_Descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`ape_codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.canasta_familiar
CREATE TABLE IF NOT EXISTS `canasta_familiar` (
  `cta_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cta_nombre` varchar(45) DEFAULT NULL,
  `cta_precio` float DEFAULT NULL,
  `cta_fecha` datetime DEFAULT NULL,
  `cta_ciudad` varchar(45) DEFAULT NULL,
  `fk_cta_adm_cedula` varchar(11) DEFAULT NULL,
  `fk_cta_ciu_codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`cta_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `ciu_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ciu_nombre` varchar(45) DEFAULT NULL,
  `ciu_estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`ciu_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.consulta
CREATE TABLE IF NOT EXISTS `consulta` (
  `con_radicado` int(11) NOT NULL AUTO_INCREMENT,
  `con_nombre` varchar(45) NOT NULL,
  `con_tipo_consulta` varchar(45) NOT NULL,
  `con_descripcion` varchar(45) NOT NULL,
  `con_fecha` datetime NOT NULL,
  `con_estado` varchar(45) NOT NULL,
  `con_calificacion` varchar(45) NOT NULL,
  `con_fecha_finalizacion` datetime NOT NULL,
  `FK_con_gra_cedula` varchar(11) NOT NULL,
  PRIMARY KEY (`con_radicado`),
  KEY `FK_con_gra_cedula` (`FK_con_gra_cedula`),
  CONSTRAINT `FK_con_gra_cedula` FOREIGN KEY (`FK_con_gra_cedula`) REFERENCES `granjero` (`gra_cedula`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.consultor
CREATE TABLE IF NOT EXISTS `consultor` (
  `con_cedula` varchar(11) NOT NULL,
  `con_nombre` varchar(45) NOT NULL,
  `con_apellido` varchar(45) NOT NULL,
  `con_password` varchar(255) NOT NULL,
  `con_telefono` varchar(11) NOT NULL,
  `con_email` varchar(45) NOT NULL,
  `con_direccion` varchar(45) NOT NULL,
  `con_fecha_nacimiento` date NOT NULL,
  `con_fecha_creacion` datetime NOT NULL,
  `con_profesion` varchar(45) NOT NULL,
  `con_annos_experiencia` int(11) NOT NULL,
  PRIMARY KEY (`con_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.empleo
CREATE TABLE IF NOT EXISTS `empleo` (
  `Emp_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Emp_Nombre` varchar(45) NOT NULL,
  `Emp_Termnos_y_condiciones` varchar(45) NOT NULL,
  `Emp_fecha_creacion` datetime NOT NULL,
  `Emp_Descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`Emp_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.empresa
CREATE TABLE IF NOT EXISTS `empresa` (
  `emp_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `emp_nombre` varchar(45) NOT NULL,
  `emp_descripcion` varchar(1000) NOT NULL,
  `emp_telefono` varchar(11) NOT NULL,
  `emp_foto` varchar(45) NOT NULL,
  `emp_subtitulo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`emp_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.finca
CREATE TABLE IF NOT EXISTS `finca` (
  `Fin_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Fin_nombre` varchar(45) NOT NULL,
  `Fin_tamanno` int(45) DEFAULT NULL,
  `Fin_direccion` varchar(54) NOT NULL,
  `Fin_foto` varchar(120) NOT NULL,
  `Fin_productos` varchar(150) NOT NULL,
  `Fin_Telefono` varchar(150) NOT NULL,
  `Fin_Descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`Fin_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.granjero
CREATE TABLE IF NOT EXISTS `granjero` (
  `gra_cedula` varchar(11) NOT NULL,
  `gra_nombre` varchar(45) DEFAULT NULL,
  `gra_apellido` varchar(45) DEFAULT NULL,
  `gra_password` varchar(255) DEFAULT NULL,
  `gra_telefono` varchar(11) DEFAULT NULL,
  `gra_email` varchar(45) DEFAULT NULL,
  `gra_direccion` varchar(45) DEFAULT NULL,
  `gra_fecha_nacimiento` date DEFAULT NULL,
  `gra_fecha_creacion` datetime DEFAULT NULL,
  `gra_perfil_laboral` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`gra_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.mensaje_consulta
CREATE TABLE IF NOT EXISTS `mensaje_consulta` (
  `mco_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `mco_fecha` datetime NOT NULL,
  `mco_nombre` varchar(45) NOT NULL,
  `mco_descripcion` varchar(1000) NOT NULL,
  `mco_tipo` varchar(45) NOT NULL,
  `FK_mco_con_cedula` varchar(11) NOT NULL,
  `FK_mco_gra_cedula` varchar(11) NOT NULL,
  `FK_mco_con_radicado` int(11) NOT NULL,
  PRIMARY KEY (`mco_codigo`),
  KEY `FK_mco_con_cedula` (`FK_mco_con_cedula`),
  KEY `FK_mco_gra_cedula` (`FK_mco_gra_cedula`),
  KEY `FK_mco_con_radicado` (`FK_mco_con_radicado`),
  CONSTRAINT `FK_mco_con_cedula` FOREIGN KEY (`FK_mco_con_cedula`) REFERENCES `consultor` (`con_cedula`),
  CONSTRAINT `FK_mco_con_radicado` FOREIGN KEY (`FK_mco_con_radicado`) REFERENCES `consulta` (`con_radicado`),
  CONSTRAINT `FK_mco_gra_cedula` FOREIGN KEY (`FK_mco_gra_cedula`) REFERENCES `granjero` (`gra_cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `not_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `not_nombre` varchar(45) DEFAULT NULL,
  `not_descripcion` varchar(1000) DEFAULT NULL,
  `not_foto` varchar(45) DEFAULT NULL,
  `not_fecha_creacion` datetime DEFAULT NULL,
  `not_url` varchar(45) DEFAULT NULL,
  `fk_not_adm_cedula` varchar(11) DEFAULT NULL,
  `not_subtitulo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`not_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.pecuario
CREATE TABLE IF NOT EXISTS `pecuario` (
  `Ape_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Ape_nombre` varchar(45) NOT NULL,
  `Ape_tipo` varchar(45) DEFAULT NULL,
  `Ape_fecha_creacion` datetime NOT NULL,
  `Ape_Foto` varchar(120) NOT NULL,
  `Ape_Descripcion` varchar(1000) NOT NULL,
  PRIMARY KEY (`Ape_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.producto
CREATE TABLE IF NOT EXISTS `producto` (
  `pro_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `pro_nombre` varchar(45) DEFAULT NULL,
  `pro_descripcion` varchar(1000) DEFAULT NULL,
  `pro_precio` decimal(45,0) DEFAULT NULL,
  `pro_estado` varchar(45) DEFAULT NULL,
  `pro_cantidad` decimal(45,0) DEFAULT NULL,
  `pro_terminos_y_condiciones` tinyint(4) DEFAULT NULL,
  `pro_foto` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`pro_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla apsicol.servicios
CREATE TABLE IF NOT EXISTS `servicios` (
  `ser_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ser_nombre` varchar(45) NOT NULL,
  `ser_descripcion` varchar(1000) NOT NULL,
  `ser_valor` varchar(45) NOT NULL,
  `ser_foto` varchar(45) NOT NULL,
  `FK_ser_emp_codigo` int(11) NOT NULL,
  PRIMARY KEY (`ser_codigo`),
  KEY `FK_ser_emp_codigo` (`FK_ser_emp_codigo`),
  CONSTRAINT `FK_ser_emp_codigo` FOREIGN KEY (`FK_ser_emp_codigo`) REFERENCES `empresa` (`emp_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
