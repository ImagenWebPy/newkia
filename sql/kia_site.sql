/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : kia_site

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-10-21 11:47:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ciudad
-- ----------------------------
DROP TABLE IF EXISTS `ciudad`;
CREATE TABLE `ciudad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_departamento` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ciudad
-- ----------------------------

-- ----------------------------
-- Table structure for color
-- ----------------------------
DROP TABLE IF EXISTS `color`;
CREATE TABLE `color` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of color
-- ----------------------------

-- ----------------------------
-- Table structure for combustible
-- ----------------------------
DROP TABLE IF EXISTS `combustible`;
CREATE TABLE `combustible` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(80) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of combustible
-- ----------------------------

-- ----------------------------
-- Table structure for departamento
-- ----------------------------
DROP TABLE IF EXISTS `departamento`;
CREATE TABLE `departamento` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of departamento
-- ----------------------------

-- ----------------------------
-- Table structure for estilo
-- ----------------------------
DROP TABLE IF EXISTS `estilo`;
CREATE TABLE `estilo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of estilo
-- ----------------------------

-- ----------------------------
-- Table structure for local
-- ----------------------------
DROP TABLE IF EXISTS `local`;
CREATE TABLE `local` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_ciudad` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(80) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `horario_atencion` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of local
-- ----------------------------

-- ----------------------------
-- Table structure for modelo
-- ----------------------------
DROP TABLE IF EXISTS `modelo`;
CREATE TABLE `modelo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tipo_vehiculo` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `garantia` varchar(255) DEFAULT NULL,
  `logo` varchar(60) DEFAULT NULL,
  `img_thumb` varchar(80) DEFAULT NULL,
  `ficha` varchar(60) DEFAULT NULL,
  `meta_descripcion` varchar(180) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo
-- ----------------------------
INSERT INTO `modelo` VALUES ('1', '1', 'Cerato', '5 años o 100.00 Km.', 'cerato.png', '1_cerato-thumb-menu.png', '3_Cerato_2017_baja.pdf', 'Deje que el nuevo Cerato lo lleve a lugares que usted sólo había imaginado.', '1');

-- ----------------------------
-- Table structure for modelo_360
-- ----------------------------
DROP TABLE IF EXISTS `modelo_360`;
CREATE TABLE `modelo_360` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `id_color` int(11) unsigned DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_360
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_color
-- ----------------------------
DROP TABLE IF EXISTS `modelo_color`;
CREATE TABLE `modelo_color` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `id_color` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_color
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_desempeno
-- ----------------------------
DROP TABLE IF EXISTS `modelo_desempeno`;
CREATE TABLE `modelo_desempeno` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `portada` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_desempeno
-- ----------------------------
INSERT INTO `modelo_desempeno` VALUES ('1', '1', 'Diseñado para ti y el medioambiente', null, '1_kia-cerato-forte-yd-performance-01-w.jpg', '1_kia-cerato-forte-yd-performance-01-t.jpg', '1_kia-cerato-forte-yd-performance-01-m.jpg', '1', '1');
INSERT INTO `modelo_desempeno` VALUES ('2', '1', 'Transmisión DCT de 7 velocidades (transmisión de doble embrague)', 'DCT no solo es capaz de manejar grandes salidas de par y cambios rápidos de marchas, sino que también ofrece una conducción extremadamente eficiente en el consumo de combustible.', '1_kia-pop-cerato-forte-yd-performance-01-w.jpg', '1_kia-pop-cerato-forte-yd-performance-01-t.jpg', '1_kia-pop-cerato-forte-yd-performance-01-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('3', '1', 'Paletas de cambio', 'Las paletas de cambio deportivas en la columna de dirección le permiten cambiar de marcha con los dedos sin tener que quitar las manos del volante.', '1_kia-pop-cerato-forte-yd-performance-02-w.jpg', '1_kia-pop-cerato-forte-yd-performance-02-t.jpg', '1_kia-pop-cerato-forte-yd-performance-02-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('4', '1', 'Control de crucero automático', 'Con la presión de un interruptor convenientemente ubicado en el volante, el control de crucero automático le permite mantener una velocidad constante para una economía de combustible mejorada.', '1_kia-pop-cerato-forte-yd-performance-03-w.jpg', '1_kia-pop-cerato-forte-yd-performance-03-t.jpg', '1_kia-pop-cerato-forte-yd-performance-03-m.jpg', '0', '1');
INSERT INTO `modelo_desempeno` VALUES ('5', '1', 'Transmisión automática de 6 velocidades', 'Equipada con una perilla TGS tipo bota para un aspecto refinado y deportivo, la transmisión automática de 6 velocidades garantiza cambios de marcha sedosos y precisos.', '1_kia-pop-cerato-forte-yd-performance-04-w.jpg', '1_kia-pop-cerato-forte-yd-performance-04-t.jpg', '1_kia-pop-cerato-forte-yd-performance-04-m.jpg', '0', '1');

-- ----------------------------
-- Table structure for modelo_destacado
-- ----------------------------
DROP TABLE IF EXISTS `modelo_destacado`;
CREATE TABLE `modelo_destacado` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `portada` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_destacado
-- ----------------------------
INSERT INTO `modelo_destacado` VALUES ('1', '1', 'Detección de punto ciego', 'Usando radares que monitorean tus puntos ciegos, un ícono parpadea en el espejo retrovisor lateral para advertirte de la cercanía de autos que normalmente no verías.', '1_kia-cerato-forte-yd-highlights-01-w.jpg', '1_kia-cerato-forte-yd-highlights-01-t.jpg', '1_kia-cerato-forte-yd-highlights-01-m.jpg', '1', '1');
INSERT INTO `modelo_destacado` VALUES ('2', '1', 'Sistema de asistencia de aparcamiento delantero y trasero', 'Activado por un interruptor en la consola del piso, el sistema de asistencia de estacionamiento delantero y trasero muestra la distancia entre el automóvil y cualquier obstrucción por medio de un gráfico en el grupo de supervisión.', '1_kia-pop-cerato-forte-yd-highlights-01-w.jpg', '1_kia-pop-cerato-forte-yd-highlights-01-t.jpg', '1_kia-pop-cerato-forte-yd-highlights-01-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('3', '1', 'Sistema de 6 airbags', 'El nuevo sistema de bolsas de aire de Cerato comprende bolsas de aire para el conductor y el asiento delantero, bolsas de aire laterales delanteras, además de bolsas de aire de cortina que recorren todo el interior a cada lado.', '1_kia-pop-cerato-forte-yd-highlights-02-w.jpg', '1_kia-pop-cerato-forte-yd-highlights-02-t.jpg', '1_kia-pop-cerato-forte-yd-highlights-02-m.jpg', '0', '1');
INSERT INTO `modelo_destacado` VALUES ('4', '1', 'Sistema de baulera inteligente', 'Ya no es necesario hacer malabares con sus comestibles, equipaje y paraguas. Configure la tapa del maletero para que se abra automáticamente cuando la llave inteligente esté en el área de detección durante al menos tres segundos.', '1_kia-pop-cerato-forte-yd-highlights-03-w.jpg', '1_kia-pop-cerato-forte-yd-highlights-03-t.jpg', '1_kia-pop-cerato-forte-yd-highlights-03-m.jpg', '0', '1');

-- ----------------------------
-- Table structure for modelo_dimension
-- ----------------------------
DROP TABLE IF EXISTS `modelo_dimension`;
CREATE TABLE `modelo_dimension` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `largo` decimal(20,3) DEFAULT NULL,
  `ancho` decimal(20,3) DEFAULT NULL,
  `altura` decimal(20,3) DEFAULT NULL,
  `distancia_ejes` decimal(20,3) DEFAULT NULL,
  `altura_libre_piso` decimal(20,3) DEFAULT NULL,
  `capacidad_baul` decimal(20,3) DEFAULT NULL,
  `capacidad_pasajeros` int(3) DEFAULT NULL,
  `img_frente` varchar(80) DEFAULT NULL,
  `img_atras` varchar(80) DEFAULT NULL,
  `img_lateral` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_dimension
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_especificacion
-- ----------------------------
DROP TABLE IF EXISTS `modelo_especificacion`;
CREATE TABLE `modelo_especificacion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `descripcion` text,
  `estado` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_especificacion
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_estilo
-- ----------------------------
DROP TABLE IF EXISTS `modelo_estilo`;
CREATE TABLE `modelo_estilo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `id_estilo` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_estilo
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_general
-- ----------------------------
DROP TABLE IF EXISTS `modelo_general`;
CREATE TABLE `modelo_general` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `descripcion` varchar(160) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_general
-- ----------------------------
INSERT INTO `modelo_general` VALUES ('1', '1', '1_kia-cerato-forte-yd-overview-02-w.jpg', '1_kia-cerato-forte-yd-overview-02-t.jpg', '1_kia-cerato-forte-yd-overview-02-m.jpg', 'CERATO', 'Un regalo de verdadera innovación', '1');

-- ----------------------------
-- Table structure for modelo_imagenes
-- ----------------------------
DROP TABLE IF EXISTS `modelo_imagenes`;
CREATE TABLE `modelo_imagenes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `tipo` enum('INT','EXT') DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  `principal` int(1) DEFAULT '0',
  `caracteristica` int(1) DEFAULT '0',
  `caracteristica_pie` int(1) DEFAULT '0',
  `caracteristicain` int(1) DEFAULT '0',
  `caracteristicain_pie` int(1) DEFAULT '0',
  `orden` int(1) unsigned DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_imagenes
-- ----------------------------
INSERT INTO `modelo_imagenes` VALUES ('1', '1', 'EXT', 'Agrega una dosis extraordinaria a tu vida', 'Tal vez nunca pensaste que la innovación, la excelencia técnica y el estilo excepcional se pudieran unir en un automóvil de pasajeros asequible. Pero finalmente lo hacen.\r\nDeja que el nuevo Cerato te lleve a lugares que solo has imaginado.', '1_kia-cerato-forte-yd-exterior-05-w.jpg', '1_kia-cerato-forte-yd-exterior-05-t.jpg', '1_kia-cerato-forte-yd-exterior-05-m.jpg', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('2', '1', 'EXT', 'Un atractivo estético que hace que el tiempo se detenga', 'Redefiniendo lo mejor en diseño de automóviles, el nuevo Cerato es audaz,\r\nlas proporciones parecidas a un coupé y las líneas y curvas llamativas exudan una rápida aceleración y una fluidez de movimiento sin esfuerzo.', '1_kia-cerato-forte-yd-exterior-06-w.jpg', '1_kia-cerato-forte-yd-exterior-06-t.jpg', '1_kia-cerato-forte-yd-exterior-06-m.jpg', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('3', '1', 'EXT', 'Una experiencia de conducción que despierta tus emociones.', '\r\n283/5000\r\nCombina un hermoso diseño exterior con excelente rendimiento y potencia, y la emoción de conducir realmente cobra vida.\r\nYa sea que navegue por curvas cerradas, acelere en las carreteras o frene en situaciones de parada repentina, el nuevo Cerato responde instintivamente a sus comandos.', '1_kia-cerato-forte-yd-exterior-07-w.jpg', '1_kia-cerato-forte-yd-exterior-07-t.jpg', '1_kia-cerato-forte-yd-exterior-07-m.jpg', '0', '1', '0', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('4', '1', 'EXT', 'Lámparas LED combinadas traseras ', 'Las luces traseras combinadas LED no solo brindan una gran visibilidad para los conductores que se acercan por detrás, sino que también agregan un elemento de modernidad y estilo con su diseño multidimensional.', '1_kia-pop-cerato-forte-yd-exterior-01-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-01-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-01-m.jpg', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('5', '1', 'EXT', 'Faros antiniebla', '\r\n152/5000\r\nCon un diseño único de carcasa dividida que proporciona un efecto visual sorprendente, las luces antiniebla se colocan a baja altura en el paragolpes delantero para una mejor iluminación.', '1_kia-pop-cerato-forte-yd-exterior-02-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-02-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-02-m.jpg', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('6', '1', 'EXT', 'Faros HID', 'Al emitir un tono azul distintivo, los faros de proyección iluminan más la carretera con un rayo penetrante y preciso.', '1_kia-pop-cerato-forte-yd-exterior-03-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-03-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-03-m.jpg', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('7', '1', 'EXT', 'Sistema de iluminación de bienvenida inteligente', 'Una serie de luces exteriores se sincronizan con la tecla inteligente para iluminarlo y darle la bienvenida al automóvil.', '1_kia-pop-cerato-forte-yd-exterior-04-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-04-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-04-m.jpg', '0', '0', '1', '0', '0', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('8', '1', 'INT', 'Entorno confortable 365 días al año', 'Un avanzado sistema de control del clima significa que usted y sus pasajeros pueden relajarse en cada viaje, durante todo el año. Un volante con calefacción y calentadores de asiento proporcionan una comodidad tranquilizadora en días fríos, mientras que el aire acondicionado automático y el asiento del conductor con ventilación de aire lo mantienen fresco cuando sube la temperatura. Un sistema automático de desempañado se activa por sí mismo cuando se detecta condensación en el cristal del parabrisas, y un ionizador de racimo garantiza que el aire que fluye al interior del automóvil esté limpio y libre de olores.', '1_kia-cerato-forte-yd-interior-01-w.jpg', '1_kia-cerato-forte-yd-interior-01-t.jpg', '1_kia-cerato-forte-yd-interior-01-m.jpg', '0', '0', '0', '1', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('9', '1', 'INT', 'clúster de supervisión', 'La interfaz intuitiva del clúster de supervisión le permite acceder a una amplia gama de configuraciones de usuario.', '1_kia-pop-cerato-forte-yd-interior-01-w.jpg', '1_kia-pop-cerato-forte-yd-interior-01-t.jpg', '1_kia-pop-cerato-forte-yd-interior-01-m.jpg', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('10', '1', 'INT', 'Volante con calefacción', 'El volante térmico forrado en piel es práctico y cómodo en los fríos días de invierno.', '1_kia-pop-cerato-forte-yd-interior-02-w.jpg', '1_kia-pop-cerato-forte-yd-interior-02-t.jpg', '1_kia-pop-cerato-forte-yd-interior-02-m.jpg', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('11', '1', 'INT', 'Asiento delantero ventilado', 'El aire que sopla a través del cojín del asiento y la espalda le ahorra la incomodidad de calentarse y pegarse durante el verano.', '1_kia-pop-cerato-forte-yd-interior-03-w.jpg', '1_kia-pop-cerato-forte-yd-interior-03-t.jpg', '1_kia-pop-cerato-forte-yd-interior-03-m.jpg', '0', '0', '0', '0', '1', '3', '1');

-- ----------------------------
-- Table structure for modelo_imagenes_thumb
-- ----------------------------
DROP TABLE IF EXISTS `modelo_imagenes_thumb`;
CREATE TABLE `modelo_imagenes_thumb` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo_imagenes` int(11) unsigned DEFAULT NULL,
  `tipo` enum('INT','EXT') DEFAULT NULL,
  `descripcion` text,
  `img` varchar(80) DEFAULT NULL,
  `principal` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_imagenes_thumb
-- ----------------------------
INSERT INTO `modelo_imagenes_thumb` VALUES ('1', '1', 'EXT', null, '1_ico_cerato_forte_yd_paging5_on.png', '0', '1');
INSERT INTO `modelo_imagenes_thumb` VALUES ('2', '2', 'EXT', null, '1_ico_cerato_forte_yd_paging6_on.png', '0', '1');
INSERT INTO `modelo_imagenes_thumb` VALUES ('3', '3', 'EXT', null, '1_ico_cerato_forte_yd_paging7_on.png', '0', '1');

-- ----------------------------
-- Table structure for modelo_llantas
-- ----------------------------
DROP TABLE IF EXISTS `modelo_llantas`;
CREATE TABLE `modelo_llantas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_llantas
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_motor
-- ----------------------------
DROP TABLE IF EXISTS `modelo_motor`;
CREATE TABLE `modelo_motor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_version` int(11) unsigned DEFAULT NULL,
  `id_combustible` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `tipo_motor` varchar(80) DEFAULT NULL,
  `cilindraje` varchar(80) DEFAULT NULL,
  `potencia_max` varchar(80) DEFAULT NULL,
  `torque_max` varchar(80) DEFAULT NULL,
  `cilindros` varchar(80) DEFAULT NULL,
  `valvula` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_motor
-- ----------------------------

-- ----------------------------
-- Table structure for modelo_seguridad
-- ----------------------------
DROP TABLE IF EXISTS `modelo_seguridad`;
CREATE TABLE `modelo_seguridad` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `titulo` varchar(120) DEFAULT NULL,
  `descripcion` text,
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `portada` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_seguridad
-- ----------------------------
INSERT INTO `modelo_seguridad` VALUES ('1', '1', 'Armazón del cuerpo', 'Featuring a collision dispersal structure that diffuses forces upon impact, the new Cerato’s body shell is sturdy and intelligent at the same time.', '1_kia-cerato-forte-yd-safety-01-w.jpg', '1_kia-cerato-forte-yd-safety-01-t.jpg', '1_kia-cerato-forte-yd-safety-01-m.jpg', '1', '1');
INSERT INTO `modelo_seguridad` VALUES ('2', '1', 'Suspensión\r\n', 'Una suspensión delantera de puntal MacPherson presenta un aislador de puntal de doble trayectoria para dispersar golpes y vibraciones y mejorar la estabilidad de la dirección. La suspensión trasera del eje de la viga de torsión acoplada ofrece una calidad de conducción estable y suave.', '1_kia-pop-cerato-forte-yd-safety-01-w.jpg', '1_kia-pop-cerato-forte-yd-safety-01-t.jpg', '1_kia-pop-cerato-forte-yd-safety-01-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('3', '1', 'Respuesta de freno', 'La respuesta y la sensación de frenado se mejoran gracias a un cilindro maestro ampliado y la adición de un tirante al amplificador.', '1_kia-pop-cerato-forte-yd-safety-02-w.jpg', '1_kia-pop-cerato-forte-yd-safety-02-t.jpg', '1_kia-pop-cerato-forte-yd-safety-02-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('4', '1', 'Flex Steer', 'El sistema Flex Steer brinda tres modos de conducción (Comfort, Normal y Sport) que brindan el nivel apropiado de asistencia y retroalimentación de dirección para diferentes condiciones de manejo.', '1_kia-pop-cerato-forte-yd-safety-03-w.jpg', '1_kia-pop-cerato-forte-yd-safety-03-t.jpg', '1_kia-pop-cerato-forte-yd-safety-03-m.jpg', '0', '1');
INSERT INTO `modelo_seguridad` VALUES ('5', '1', 'Hill-start Assist Control (HAC)', 'Al mantener el agarre de los frenos hasta que se presiona el acelerador, HAC evita que el vehículo ruede peligrosamente hacia atrás cuando se retira de una parada en una pendiente.', '1_kia-pop-cerato-forte-yd-safety-04-w.jpg', '1_kia-pop-cerato-forte-yd-safety-0-t.jpg', '1_kia-pop-cerato-forte-yd-safety-04-m.jpg', '0', '1');

-- ----------------------------
-- Table structure for servicio
-- ----------------------------
DROP TABLE IF EXISTS `servicio`;
CREATE TABLE `servicio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio
-- ----------------------------

-- ----------------------------
-- Table structure for servicio_local
-- ----------------------------
DROP TABLE IF EXISTS `servicio_local`;
CREATE TABLE `servicio_local` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_servicio` int(11) unsigned DEFAULT NULL,
  `id_local` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of servicio_local
-- ----------------------------

-- ----------------------------
-- Table structure for slider
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned NOT NULL,
  `titulo` varchar(80) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(70) DEFAULT NULL,
  `banner_lateral` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slider
-- ----------------------------

-- ----------------------------
-- Table structure for tipo_vehiculo
-- ----------------------------
DROP TABLE IF EXISTS `tipo_vehiculo`;
CREATE TABLE `tipo_vehiculo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) NOT NULL,
  `orden` int(2) unsigned DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_vehiculo
-- ----------------------------
INSERT INTO `tipo_vehiculo` VALUES ('1', 'Automóviles', '1', '1');
INSERT INTO `tipo_vehiculo` VALUES ('2', 'Familiares', '2', '1');
INSERT INTO `tipo_vehiculo` VALUES ('3', 'Crossover', '3', '1');
INSERT INTO `tipo_vehiculo` VALUES ('4', 'Suv', '4', '1');
INSERT INTO `tipo_vehiculo` VALUES ('5', 'Comerciales', '5', '1');

-- ----------------------------
-- Table structure for version
-- ----------------------------
DROP TABLE IF EXISTS `version`;
CREATE TABLE `version` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` decimal(20,3) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of version
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
