# Host: localhost  (Version 5.5.5-10.1.32-MariaDB)
# Date: 2019-03-18 23:54:39
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "citas"
#

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `Id_citas` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_persona` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fechahora_cita` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `id_persona` int(11) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificaion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_citas`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "citas"
#

INSERT INTO `citas` VALUES (1,'Carlos Octavio Preciado Lafarga','2019-03-01 04:30:01',1,'2019-03-01 00:00:00','2019-03-01 00:00:00'),(2,'Miguel Escalante Cinco','2019-03-22 14:55:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'Fulanito Mendoza Lanbert','2019-03-04 00:00:00',2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'Armando Mora','2019-03-23 16:30:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'chuyito perez','2019-03-04 14:00:00',2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'Yadira Antunez','2019-03-05 18:20:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'Vania Zuemma','2019-03-04 18:30:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'Jose perez perez','2019-03-04 15:33:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(9,'carlos octavio preciado lafarga','2019-03-05 16:01:00',2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(10,'Manuel medrano','2019-03-05 13:00:00',2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(11,'Manuel perez','2019-03-09 16:30:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(12,'Alfonsina Lafarga','2019-03-09 17:40:00',2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(13,'jose genaro rivera ','2019-03-09 12:00:00',3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(14,'pichja preciado','2019-03-09 12:50:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(15,'Carlos Lafarga','2019-03-09 13:20:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00');

#
# Structure for table "personal"
#

DROP TABLE IF EXISTS `personal`;
CREATE TABLE `personal` (
  `Id_personal` int(11) NOT NULL AUTO_INCREMENT,
  `id_puesto` int(11) DEFAULT '0',
  `id_sucursal` int(11) NOT NULL DEFAULT '0',
  `nombre_completo` varchar(100) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `calular` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_personal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "personal"
#

INSERT INTO `personal` VALUES (1,1,0,'Chuyito perez perez','6623953551','2019-03-01 05:18:13','0000-00-00 00:00:00'),(2,1,0,'Jose Genaro Rivera Fernandez','6623953551','2019-03-04 07:12:00','0000-00-00 00:00:00');

#
# Structure for table "puestos"
#

DROP TABLE IF EXISTS `puestos`;
CREATE TABLE `puestos` (
  `id_puesto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_puesto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `es_activo` int(11) NOT NULL DEFAULT '1',
  `fecha_creacion` date NOT NULL,
  `fecha_modificacion` date NOT NULL,
  PRIMARY KEY (`id_puesto`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "puestos"
#

INSERT INTO `puestos` VALUES (1,'barbero',1,'2019-03-05','0000-00-00'),(2,'mostrador',1,'2019-03-05','0000-00-00'),(3,'administrador',1,'2019-03-05','0000-00-00');

#
# Structure for table "servicios"
#

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE `servicios` (
  `Id_servicios` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `precio` float(12,2) NOT NULL DEFAULT '0.00',
  `es_activo` int(11) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_servicios`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='servicios registrados, para uso de ventas.';

#
# Data for table "servicios"
#

INSERT INTO `servicios` VALUES (1,'CORTE TRADICIONAL',80.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(2,'CORTE RASURADO',100.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(3,'BARBA',50.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(4,'CEJA',30.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(5,'TINTE',50.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(6,'FACIAL',80.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(7,'RAYA',10.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(8,'BIGOTE',20.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(9,'AFEITADO',30.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(10,'MARCADO',30.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(11,'3RA EDAD',50.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00'),(12,'UN NUMERO',50.00,1,'2018-03-02 00:00:00','0000-00-00 00:00:00');

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `Id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `id_personal` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `rol` int(11) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "usuarios"
#


#
# Structure for table "venta"
#

DROP TABLE IF EXISTS `venta`;
CREATE TABLE `venta` (
  `Id_venta` int(11) NOT NULL AUTO_INCREMENT,
  `id_ticket` int(11) NOT NULL DEFAULT '0',
  `id_personal` int(11) NOT NULL DEFAULT '0',
  `venta_total` float(12,2) NOT NULL DEFAULT '0.00',
  `tipo_pago` varchar(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `cancelado` int(11) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_venta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "venta"
#


#
# Structure for table "ventas_servicios"
#

DROP TABLE IF EXISTS `ventas_servicios`;
CREATE TABLE `ventas_servicios` (
  `Id_ventas` int(11) NOT NULL AUTO_INCREMENT,
  `id_ticket` int(11) NOT NULL DEFAULT '0',
  `cantidad` int(11) NOT NULL DEFAULT '0',
  `precio` float(12,2) NOT NULL DEFAULT '0.00',
  `total` float(12,2) NOT NULL DEFAULT '0.00',
  `cancelado` int(11) NOT NULL DEFAULT '0',
  `fecha_creacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `fecha_modificacion` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`Id_ventas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

#
# Data for table "ventas_servicios"
#

