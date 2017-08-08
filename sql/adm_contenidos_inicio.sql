/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dynamo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-08 08:14:43
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
