/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dynamo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-02 01:03:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `adm_contenidos`
-- ----------------------------
DROP TABLE IF EXISTS `adm_contenidos`;
CREATE TABLE `adm_contenidos` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`created`  datetime NULL DEFAULT NULL ,
`modified`  datetime NULL DEFAULT NULL ,
`user_id`  int(11) NULL DEFAULT NULL ,
`seccion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`descripcion`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`contenido`  text CHARACTER SET utf8 COLLATE utf8_general_ci NULL ,
`estado`  int(1) NULL DEFAULT NULL ,
`orden`  varchar(4) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=47

;

-- ----------------------------
-- Records of adm_contenidos
-- ----------------------------
BEGIN;
INSERT INTO `adm_contenidos` VALUES ('2', null, null, null, 'Home', 'Titulo 2', 'ASESORAMIENTO, DISEÑO Y FABRICACIÓN', '1', '1.2'), ('3', null, '2017-07-30 23:06:32', null, 'Nosotros', 'Titulo 1', '¿CÓMO TRABAJAMOS? si estamos editados. MUCHO MEJOR.\r\n', '1', '2.1'), ('4', null, null, null, 'Nosotros', 'Titulo 2', 'TE ESCUCHAMOS, TOMAMOS LAS MEDIDAS Y HACEMOS REALIDAD EL MUEBLE QUE SOÑAS!', '1', '2.2'), ('5', null, null, null, 'Nosotros', 'Parrafo 1', 'Hacemos de tu hogar, un lugar al que siempre quieras volver...', '1', '2.3'), ('6', null, null, null, 'Nosotros', 'Parrafo 2', 'Si necesitas asesoramiento no dudes en consultar, tu pregunta no molesta, nos encanta!', '1', '2.4'), ('8', null, '2017-07-31 02:42:37', null, 'Fotos', 'Titulo 1', 'ULTIMOS PROYECTOS', '0', '3.1'), ('9', null, null, null, 'Fotos', 'Titulo 2', '¡CLIENTES FELICES!', '1', '3.2'), ('10', null, null, null, 'Comprar', 'Titulo 1', '¿CÓMO COMPRAR EN DYNAMO?', '1', '4.1'), ('11', null, null, null, 'Comprar', 'Subtitulo 1', 'CONTANOS TU IDEA', '1', '4.2'), ('12', null, null, null, 'Comprar', 'Parrafo 1', 'Contamos con un equipo de diseñadores especializados para entender tu necesidad y crear el mueble ideal para ese espacio que tanto te cuesta resolver.', '1', '4.3'), ('13', null, null, null, 'Comprar', 'Subtitulo 2', 'DISEÑO & DESARROLLO', '1', '4.4'), ('14', null, null, null, 'Comprar', 'Parrafo 2', 'Vamos personalmente a tomar las medidas de tu espacio y te asesoramos para que el mueble sea funcional y se adapte perfecto al ambiente.', '1', '4.5'), ('15', null, null, null, 'Comprar', 'Subtitulo 3', 'PRODUCCIÓN & ENTREGA', '1', '4.6'), ('16', null, null, null, 'Comprar', 'Parrafo 3', 'Una vez acordado el diseño mediante planos y croquis te enviamos el presupuesto. Y con una seña del 50% avanzamos a la etapa de producción. La entrega será en un plazo de 30 a 40 días, y la misma es realizada por personal de nuestra confianza para garantizar el cuidado especial de tu mueble.', '1', '4.7'), ('17', null, null, null, 'Contacto', 'Titulo 1', 'ESPERAMOS TU CONTACTO', '1', '5.1'), ('18', null, null, null, 'Contacto', 'Titulo 2', '¡MUCHAS GRACIAS!', '1', '5.2'), ('19', null, null, null, 'Contacto', 'Parrafo 1', 'Respondemos a la brevedad!', '1', '5.3'), ('22', '2017-07-29 20:45:33', '2017-07-31 02:41:10', null, 'Home', 'Titulo 1', 'MUEBLES ESPECIALES', '1', '1.1'), ('23', '2017-07-30 03:12:40', '2017-07-30 03:12:40', null, 'Home', 'Titulo 1', 'MUEBLES PARA LA VIDA', '0', '1.1'), ('25', '2017-07-30 16:18:34', '2017-07-30 16:18:34', null, 'Home', 'Titulo 1', 'hhiu', '0', '1.1'), ('26', '2017-07-30 16:42:39', '2017-07-30 16:42:39', null, 'Home', 'Titulo 1', 'sdfsdf', '0', '1.1'), ('27', '2017-07-30 16:43:19', '2017-07-30 16:43:19', null, 'Home', 'Titulo 1', 'huhiuhiu', '0', '1.1'), ('28', '2017-07-30 16:51:44', '2017-07-30 16:51:44', null, 'Home', 'Titulo 1', '', '0', '1.1'), ('29', '2017-07-30 16:58:59', '2017-07-30 16:58:59', null, 'Home', 'Titulo 1', '', '0', '1.1'), ('30', '2017-07-30 16:59:20', '2017-07-30 16:59:20', null, 'Home', 'Titulo 1', '', '0', '1.1'), ('31', '2017-07-30 17:00:22', '2017-07-30 17:00:22', null, 'Home', 'Titulo 1', '', '0', '1.1'), ('32', '2017-07-30 19:18:15', '2017-07-30 19:18:15', null, 'Home', 'Titulo 1', 'nuevo titulo y estado', '0', '1.1'), ('33', '2017-07-30 19:48:50', '2017-07-30 19:48:50', null, 'Home', 'Titulo 1', 'sdddddfs', '0', '1.1'), ('34', '2017-07-30 19:50:30', '2017-07-30 19:50:30', null, 'Home', 'Titulo 1', 'sdddddfs', '0', '1.1'), ('35', '2017-07-30 19:52:15', '2017-07-30 19:52:15', null, 'Home', 'Titulo 1', 'sdddddfs', '0', '1.1'), ('36', '2017-07-30 19:52:20', '2017-07-30 19:52:20', null, 'Home', 'Titulo 1', 'sdddddfs', '0', '1.1'), ('37', '2017-07-30 19:53:00', '2017-07-30 19:53:00', null, 'Home', 'Titulo 1', 'sdddddfs', '0', '1.1'), ('38', '2017-07-30 19:53:03', '2017-07-30 19:53:03', null, 'Home', 'Titulo 1', 'sdddddfs', '0', '1.1'), ('39', '2017-07-30 20:39:02', '2017-07-30 20:39:02', null, 'Home', 'Titulo 1', 'kkkkkkkkkkkkkkkkkk', '0', '1.1'), ('40', '2017-07-30 20:45:57', '2017-07-30 20:45:57', null, 'Home', 'Titulo 1', 'huihiuhuihiu', '0', '1.1'), ('41', '2017-07-30 20:46:53', '2017-07-30 20:46:53', null, 'Home', 'Titulo 1', 'huihiuhuihiu', '0', '1.1'), ('42', '2017-07-30 20:47:03', '2017-07-30 20:47:03', null, 'Home', 'Titulo 1', 'uuuuuuuuuuuuuuuu', '0', '1.1'), ('43', '2017-07-30 20:50:38', '2017-07-30 20:50:38', null, 'Home', 'Titulo 1', 'jjjjjjjjjjjjjj', '0', '1.1'), ('44', '2017-07-30 20:53:00', '2017-07-30 20:53:00', null, 'Home', 'Titulo 1', 'MUEBLES ARTESANALES', '0', '1.1'), ('45', '2017-07-30 20:53:41', '2017-07-30 20:53:41', null, 'Home', 'Titulo 1', 'MUEBLES ARTESANALES', '0', '1.1'), ('46', '2017-07-31 02:41:46', '2017-07-31 02:42:37', null, 'Fotos', 'Titulo 1', 'ULTIMAS FOTOS', '1', '3.1');
COMMIT;

-- ----------------------------
-- Auto increment value for `adm_contenidos`
-- ----------------------------
ALTER TABLE `adm_contenidos` AUTO_INCREMENT=47;
