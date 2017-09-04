/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dynamo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-03 02:38:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adm_contenidos`
-- ----------------------------
DROP TABLE IF EXISTS `adm_contenidos`;
CREATE TABLE `adm_contenidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `seccion` varchar(255) DEFAULT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `contenido` text,
  `estado` int(1) DEFAULT NULL,
  `orden` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adm_contenidos
-- ----------------------------
INSERT INTO `adm_contenidos` VALUES ('1', '2017-07-29 20:45:33', '2017-08-08 03:12:33', null, 'Home', 'Titulo 1', 'MUEBLES A TU MEDIDA', '1', '1.1');
INSERT INTO `adm_contenidos` VALUES ('2', null, null, null, 'Home', 'Titulo 2', 'ASESORAMIENTO, DISEÑO Y FABRICACIÓN', '1', '1.2');
INSERT INTO `adm_contenidos` VALUES ('3', null, '2017-08-08 03:12:56', null, 'Nosotros', 'Titulo 1', '¿CÓMO TRABAJAMOS?\r\n', '1', '2.1');
INSERT INTO `adm_contenidos` VALUES ('4', null, null, null, 'Nosotros', 'Titulo 2', 'TE ESCUCHAMOS, TOMAMOS LAS MEDIDAS Y HACEMOS REALIDAD EL MUEBLE QUE SOÑAS!', '1', '2.2');
INSERT INTO `adm_contenidos` VALUES ('5', null, null, null, 'Nosotros', 'Parrafo 1', 'Hacemos de tu hogar, un lugar al que siempre quieras volver...', '1', '2.3');
INSERT INTO `adm_contenidos` VALUES ('6', null, null, null, 'Nosotros', 'Parrafo 2', 'Si necesitas asesoramiento no dudes en consultar, tu pregunta no molesta, nos encanta!', '1', '2.4');
INSERT INTO `adm_contenidos` VALUES ('7', '2017-07-31 02:41:46', '2017-08-08 03:20:30', null, 'Fotos', 'Titulo 1', 'ULTIMOS PROYECTOS', '1', '3.1');
INSERT INTO `adm_contenidos` VALUES ('8', null, null, null, 'Fotos', 'Titulo 2', '¡CLIENTES FELICES!', '1', '3.2');
INSERT INTO `adm_contenidos` VALUES ('9', null, null, null, 'Comprar', 'Titulo 1', '¿CÓMO COMPRAR EN DYNAMO?', '1', '4.1');
INSERT INTO `adm_contenidos` VALUES ('10', null, null, null, 'Comprar', 'Subtitulo 1', 'CONTANOS TU IDEA', '1', '4.2');
INSERT INTO `adm_contenidos` VALUES ('11', null, null, null, 'Comprar', 'Parrafo 1', 'Contamos con un equipo de diseñadores especializados para entender tu necesidad y crear el mueble ideal para ese espacio que tanto te cuesta resolver.', '1', '4.3');
INSERT INTO `adm_contenidos` VALUES ('12', null, null, null, 'Comprar', 'Subtitulo 2', 'DISEÑO & DESARROLLO', '1', '4.4');
INSERT INTO `adm_contenidos` VALUES ('13', null, null, null, 'Comprar', 'Parrafo 2', 'Vamos personalmente a tomar las medidas de tu espacio y te asesoramos para que el mueble sea funcional y se adapte perfecto al ambiente.', '1', '4.5');
INSERT INTO `adm_contenidos` VALUES ('14', null, null, null, 'Comprar', 'Subtitulo 3', 'PRODUCCIÓN & ENTREGA', '1', '4.6');
INSERT INTO `adm_contenidos` VALUES ('15', null, null, null, 'Comprar', 'Parrafo 3', 'Una vez acordado el diseño mediante planos y croquis te enviamos el presupuesto. Y con una seña del 50% avanzamos a la etapa de producción. La entrega será en un plazo de 30 a 40 días, y la misma es realizada por personal de nuestra confianza para garantizar el cuidado especial de tu mueble.', '1', '4.7');
INSERT INTO `adm_contenidos` VALUES ('16', null, null, null, 'Contacto', 'Titulo 1', 'ESPERAMOS TU CONTACTO', '1', '5.1');
INSERT INTO `adm_contenidos` VALUES ('17', null, null, null, 'Contacto', 'Titulo 2', '¡MUCHAS GRACIAS!', '1', '5.2');
INSERT INTO `adm_contenidos` VALUES ('18', null, null, null, 'Contacto', 'Parrafo 1', 'Respondemos a la brevedad!', '1', '5.3');

-- ----------------------------
-- Table structure for `categorias`
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES ('1', '2017-08-30', '2017-08-30', '1', 'Modulares', '', '1', null);
INSERT INTO `categorias` VALUES ('2', '2017-08-30', '2017-08-30', '1', 'Cajoneras', '', '1', null);
INSERT INTO `categorias` VALUES ('3', '2017-08-30', '2017-08-30', '1', 'Escritorios', '', '1', null);
INSERT INTO `categorias` VALUES ('4', '2017-08-30', '2017-08-30', '1', 'Estanterias', '', '1', null);

-- ----------------------------
-- Table structure for `imagenes`
-- ----------------------------
DROP TABLE IF EXISTS `imagenes`;
CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `categoria_id` int(2) DEFAULT NULL,
  `ruta` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `size` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `seccion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `orden` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  `dimensiones` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- ----------------------------
-- Records of imagenes
-- ----------------------------
INSERT INTO `imagenes` VALUES ('1', '2017-09-02', '2017-09-02 17:17:57', null, null, null, '2', '/files/landing/Cajoneras/', 'casa2.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('2', '2017-09-02', '2017-09-02 17:17:57', null, null, null, '2', '/files/landing/Cajoneras/', 'casa3.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('3', '2017-09-02', '2017-09-02 17:40:08', null, null, null, '2', '/files/landing/Cajoneras/', 'casa2.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('4', '2017-09-02', '2017-09-02 17:40:08', null, null, null, '2', '/files/landing/Cajoneras/', 'casa3.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('5', '2017-09-02', '2017-09-02 17:43:40', null, null, null, '3', '/files/landing/Escritorios/', 'casa2.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('6', '2017-09-02', '2017-09-02 17:43:40', null, null, null, '3', '/files/landing/Escritorios/', 'casa3.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('7', '2017-09-02', '2017-09-02 22:17:35', null, null, null, '2', '/files/landing/Cajoneras/', 'casa2.jpg', null, null, null, null, '1', null);
INSERT INTO `imagenes` VALUES ('8', '2017-09-02', '2017-09-02 22:17:35', null, null, null, '2', '/files/landing/Cajoneras/', 'casa3.jpg', null, null, null, null, '1', null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'utn', '$2a$10$7Vyn1S7CQxc00zOi7UvqJeQPtWuu0HmNVZRrtc7cvz.d0kPbfaEAm', null, '2017-09-03 07:38:26', '2017-09-03 07:38:26', '1');
