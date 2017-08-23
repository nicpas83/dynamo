/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : dynamo

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-08-23 01:33:34
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
AUTO_INCREMENT=19

;

-- ----------------------------
-- Records of adm_contenidos
-- ----------------------------
BEGIN;
INSERT INTO `adm_contenidos` VALUES ('1', '2017-07-29 20:45:33', '2017-08-08 03:12:33', null, 'Home', 'Titulo 1', 'MUEBLES A TU MEDIDA', '1', '1.1'), ('2', null, null, null, 'Home', 'Titulo 2', 'ASESORAMIENTO, DISEÑO Y FABRICACIÓN', '1', '1.2'), ('3', null, '2017-08-08 03:12:56', null, 'Nosotros', 'Titulo 1', '¿CÓMO TRABAJAMOS?\r\n', '1', '2.1'), ('4', null, null, null, 'Nosotros', 'Titulo 2', 'TE ESCUCHAMOS, TOMAMOS LAS MEDIDAS Y HACEMOS REALIDAD EL MUEBLE QUE SOÑAS!', '1', '2.2'), ('5', null, null, null, 'Nosotros', 'Parrafo 1', 'Hacemos de tu hogar, un lugar al que siempre quieras volver...', '1', '2.3'), ('6', null, null, null, 'Nosotros', 'Parrafo 2', 'Si necesitas asesoramiento no dudes en consultar, tu pregunta no molesta, nos encanta!', '1', '2.4'), ('7', '2017-07-31 02:41:46', '2017-08-08 03:20:30', null, 'Fotos', 'Titulo 1', 'ULTIMOS PROYECTOS', '1', '3.1'), ('8', null, null, null, 'Fotos', 'Titulo 2', '¡CLIENTES FELICES!', '1', '3.2'), ('9', null, null, null, 'Comprar', 'Titulo 1', '¿CÓMO COMPRAR EN DYNAMO?', '1', '4.1'), ('10', null, null, null, 'Comprar', 'Subtitulo 1', 'CONTANOS TU IDEA', '1', '4.2'), ('11', null, null, null, 'Comprar', 'Parrafo 1', 'Contamos con un equipo de diseñadores especializados para entender tu necesidad y crear el mueble ideal para ese espacio que tanto te cuesta resolver.', '1', '4.3'), ('12', null, null, null, 'Comprar', 'Subtitulo 2', 'DISEÑO & DESARROLLO', '1', '4.4'), ('13', null, null, null, 'Comprar', 'Parrafo 2', 'Vamos personalmente a tomar las medidas de tu espacio y te asesoramos para que el mueble sea funcional y se adapte perfecto al ambiente.', '1', '4.5'), ('14', null, null, null, 'Comprar', 'Subtitulo 3', 'PRODUCCIÓN & ENTREGA', '1', '4.6'), ('15', null, null, null, 'Comprar', 'Parrafo 3', 'Una vez acordado el diseño mediante planos y croquis te enviamos el presupuesto. Y con una seña del 50% avanzamos a la etapa de producción. La entrega será en un plazo de 30 a 40 días, y la misma es realizada por personal de nuestra confianza para garantizar el cuidado especial de tu mueble.', '1', '4.7'), ('16', null, null, null, 'Contacto', 'Titulo 1', 'ESPERAMOS TU CONTACTO', '1', '5.1'), ('17', null, null, null, 'Contacto', 'Titulo 2', '¡MUCHAS GRACIAS!', '1', '5.2'), ('18', null, null, null, 'Contacto', 'Parrafo 1', 'Respondemos a la brevedad!', '1', '5.3');
COMMIT;

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
`id`  int(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
`username`  varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`password`  varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`role`  varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL ,
`created`  datetime NULL DEFAULT NULL ,
`modified`  datetime NULL DEFAULT NULL ,
`estado`  int(1) NULL DEFAULT 1 ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=utf8 COLLATE=utf8_general_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'nicpas', '$2a$10$.s7sV.F/tZcr1bKBLr3qB.XI02pTnB2fUY7mtMb2uqNF931SmeC0K', null, '2017-08-19 18:22:59', '2017-08-19 18:22:59', '1'), ('2', 'dynamo', '$2a$10$.qK5EAcW1ki.FICOmAe86uEEmyyASqqozdeCkXYjZAOL1fAIjLMVW', null, '2017-08-23 06:14:07', '2017-08-23 06:14:07', '1');
COMMIT;

-- ----------------------------
-- Auto increment value for `adm_contenidos`
-- ----------------------------
ALTER TABLE `adm_contenidos` AUTO_INCREMENT=19;

-- ----------------------------
-- Auto increment value for `users`
-- ----------------------------
ALTER TABLE `users` AUTO_INCREMENT=3;
