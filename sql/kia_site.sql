/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : kia_site

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-11-04 18:14:24
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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of combustible
-- ----------------------------
INSERT INTO `combustible` VALUES ('1', 'Nafta', '1');
INSERT INTO `combustible` VALUES ('2', 'Diesel', '1');
INSERT INTO `combustible` VALUES ('3', 'Flex', '1');

-- ----------------------------
-- Table structure for config_mail
-- ----------------------------
DROP TABLE IF EXISTS `config_mail`;
CREATE TABLE `config_mail` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `data` varchar(140) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config_mail
-- ----------------------------
INSERT INTO `config_mail` VALUES ('1', 'testdrive', 'jpena@garden.com.py,dabenitez@garden.com.py,ssomoza@garden.com.py');
INSERT INTO `config_mail` VALUES ('2', 'turnos', 'call_center@garden.com.py');

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
-- Table structure for la_empresa
-- ----------------------------
DROP TABLE IF EXISTS `la_empresa`;
CREATE TABLE `la_empresa` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(60) DEFAULT NULL,
  `contenido` longtext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_empresa
-- ----------------------------
INSERT INTO `la_empresa` VALUES ('1', 'la-empresa.jpg', '<p>GARDEN AUTOMOTORES S.A., domiciliada en la Avda. República Argentina esq. Isaac Kostianovsky, Asunción-Paraguay, con sucursales en Ciudad del Este y Encarnación, desde hace siete años está Certificada por la KIA MOTORS Corporation, Seúl-Corea, como Distribuidor Oficial en todo el territorio de la República del Paraguay, de sus productos del sector automotriz marca KIA, que incluyen: vehículos, repuestos, accesorios originales y servicios especializados.</p>\r\n<p>GARDEN AUTOMOTORES S.A., es una empresa comercial y de servicios, constituida mediante escritura pública Nº 26, de fecha 17 de junio de 2002, con el objetivo de realizar las actividades de compra, venta, importación y representación de vehículos en general, auto-repuestos, accesorios, así como la explotación de servicios relacionados con la industria automotriz.</p>\r\n<p>El fortalecimiento empresarial que hoy GARDEN AUTOMOTORES S.A. expone al mercado nacional, no se ha generado de la noche a la mañana, sino que constituye la culminación de un proceso pleno de esfuerzos sostenidos y concentrados, con VISIÓN, MISIÓN y OBJETIVOS muy claros, orientados a:</p>\r\n<p>Satisfacer las necesidades de los clientes, mediante productos de calidad mundial marca KIA, que en los últimos años ha demostrado una evolución tecnológica fantástica, basada en la combinación perfecta de rendimiento, estilo, seguridad y valor.</p>\r\n<p>Es importante recordar que la KIA MOTORS Corporation, a inicios del 2009 ya se ubica como el 5to. mayor fabricante de vehículos a nivel mundial, con planes a mediano plazo que contemplan agresivos lanzamientos de nuevos modelos, para ir fortaleciendo la marca y demostrar al mundo, el aún ilimitado potencial de los productos KIA, como lo dice su eslogan “EL PODER DE SORPRENDER”.</p>\r\n<p>Conseguir el bienestar de nuestros funcionarios, en sus diferentes niveles de atribuciones y responsabilidades.</p>\r\n<p>Contamos actualmente con más de 100 empleados, motivados permanentemente a través de entrenamientos periódicos y específicos, en las áreas de su competencia, todas ellas enmarcadas dentro de la filosofía de trabajo del Grupo GARDEN, sintetizada en el esfuerzo continuo, el conocimiento, la tecnología y el trabajo en equipo.</p>\r\n<p>Anunciamos que vamos a seguir potenciando nuestra organización, con el mismo coraje, creatividad y dedicación que nos caracteriza, para beneficio de clientes actuales y potenciales, funcionarios, colaboradores, gobierno nacional y la misma sociedad paraguaya.</p>\r\n<p>GARDEN AUTOMOTORES S.A. está conformada exclusivamente por capital y recursos humanos de origen nacional, convertida actualmente en una empresa moderna y altamente competitiva, que le permite, por un lado, atender con calidad y solvencia la creciente cartera de clientes en el mercado nacional y por el otro, acompañar las exigencias técnicas y administrativas cada vez mayores de la KIA MOTORS Corporation, para los Distribuidores Oficiales de sus productos KIA, en las áreas de Ventas, Post-venta y Administrativas, ya que la misma desarrolla la visión fundamental de convertirse a mediano plazo en uno de los tres mayores fabricantes de automóviles del mundo.</p>\r\n<p>GARDEN AUTOMOTORES S.A., ofrece al mercado paraguayo la mayoría de los modelos de vehículos fabricados por la KIA MOTORS, con una política dirigida a satisfacer la demanda de los diferentes segmentos económicos del país, apoyado en un plan de financiamiento atractivo y un sistema de Post-Venta dinámico, que garantiza la inversión de los clientes en el vehículo de su preferencia, mediante un servicio técnico personalizado y la provisión de repuestos originales.</p>');

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
  `img_w` varchar(80) DEFAULT NULL,
  `img_t` varchar(80) DEFAULT NULL,
  `img_m` varchar(80) DEFAULT NULL,
  `estado` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo
-- ----------------------------
INSERT INTO `modelo` VALUES ('1', '1', 'Cerato', '5 años o 100.00 Km.', 'cerato.png', '1_cerato-thumb-menu.png', '1_Cerato_2017_baja.pdf', 'Deje que el nuevo Cerato lo lleve a lugares que usted sólo había imaginado.', '1_kia-cerato-forte-yd-byo-w.png', '1_kia-cerato-forte-yd-byo-t.png', '1_kia-cerato-forte-yd-byo-m.png', '1');

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
  `img_all` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_dimension
-- ----------------------------
INSERT INTO `modelo_dimension` VALUES ('1', '1', '4.560', '1.780', '1.460', null, '1_kia-cerato-forte-yd-dimensions-all-view.png', '1');

-- ----------------------------
-- Table structure for modelo_dimension_img
-- ----------------------------
DROP TABLE IF EXISTS `modelo_dimension_img`;
CREATE TABLE `modelo_dimension_img` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `tipo` enum('FRENTE','LATERAL','ATRAS') DEFAULT NULL,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_dimension_img
-- ----------------------------
INSERT INTO `modelo_dimension_img` VALUES ('1', '1', 'FRENTE', '1_kia-cerato-forte-yd-dimensions-slide-list-01-w.png', '1_kia-cerato-forte-yd-dimensions-slide-list-01-t.png', '1_kia-cerato-forte-yd-dimensions-slide-list-01-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('2', '1', 'ATRAS', '1_kia-cerato-forte-yd-dimensions-slide-list-02-w.png', '1_kia-cerato-forte-yd-dimensions-slide-list-02-t.png', '1_kia-cerato-forte-yd-dimensions-slide-list-02-m.png');
INSERT INTO `modelo_dimension_img` VALUES ('3', '1', 'LATERAL', '1_kia-cerato-forte-yd-dimensions-slide-list-03-w.png', '1_kia-cerato-forte-yd-dimensions-slide-list-03-t.png', '1_kia-cerato-forte-yd-dimensions-slide-list-03-m.png');

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
  `img_principal` varchar(120) DEFAULT NULL,
  `img_thumb` varchar(120) DEFAULT NULL,
  `img_w` varchar(120) DEFAULT NULL,
  `img_t` varchar(120) DEFAULT NULL,
  `img_m` varchar(120) DEFAULT NULL,
  `principal` int(1) DEFAULT '0',
  `galeria` int(1) DEFAULT '0',
  `caracteristica` int(1) DEFAULT '0',
  `caracteristica_pie` int(1) DEFAULT '0',
  `caracteristicain` int(1) DEFAULT '0',
  `caracteristicain_pie` int(1) DEFAULT '0',
  `orden` int(1) unsigned DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_imagenes
-- ----------------------------
INSERT INTO `modelo_imagenes` VALUES ('1', '1', 'EXT', 'Agrega una dosis extraordinaria a tu vida', 'Tal vez nunca pensaste que la innovación, la excelencia técnica y el estilo excepcional se pudieran unir en un automóvil de pasajeros asequible. Pero finalmente lo hacen.\r\nDeja que el nuevo Cerato te lleve a lugares que solo has imaginado.', null, '1_ico_cerato_forte_yd_paging5_on.png', '1_kia-cerato-forte-yd-exterior-05-w.jpg', '1_kia-cerato-forte-yd-exterior-05-t.jpg', '1_kia-cerato-forte-yd-exterior-05-m.jpg', '0', '0', '1', '0', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('2', '1', 'EXT', 'Un atractivo estético que hace que el tiempo se detenga', 'Redefiniendo lo mejor en diseño de automóviles, el nuevo Cerato es audaz,\r\nlas proporciones parecidas a un coupé y las líneas y curvas llamativas exudan una rápida aceleración y una fluidez de movimiento sin esfuerzo.', null, '1_ico_cerato_forte_yd_paging6_on.png', '1_kia-cerato-forte-yd-exterior-06-w.jpg', '1_kia-cerato-forte-yd-exterior-06-t.jpg', '1_kia-cerato-forte-yd-exterior-06-m.jpg', '0', '0', '1', '0', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('3', '1', 'EXT', 'Una experiencia de conducción que despierta tus emociones.', '\r\n283/5000\r\nCombina un hermoso diseño exterior con excelente rendimiento y potencia, y la emoción de conducir realmente cobra vida.\r\nYa sea que navegue por curvas cerradas, acelere en las carreteras o frene en situaciones de parada repentina, el nuevo Cerato responde instintivamente a sus comandos.', null, '1_ico_cerato_forte_yd_paging7_on.png', '1_kia-cerato-forte-yd-exterior-07-w.jpg', '1_kia-cerato-forte-yd-exterior-07-t.jpg', '1_kia-cerato-forte-yd-exterior-07-m.jpg', '0', '0', '1', '0', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('4', '1', 'EXT', 'Lámparas LED combinadas traseras ', 'Las luces traseras combinadas LED no solo brindan una gran visibilidad para los conductores que se acercan por detrás, sino que también agregan un elemento de modernidad y estilo con su diseño multidimensional.', null, null, '1_kia-pop-cerato-forte-yd-exterior-01-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-01-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-01-m.jpg', '0', '0', '0', '1', '0', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('5', '1', 'EXT', 'Faros antiniebla', '\r\n152/5000\r\nCon un diseño único de carcasa dividida que proporciona un efecto visual sorprendente, las luces antiniebla se colocan a baja altura en el paragolpes delantero para una mejor iluminación.', null, null, '1_kia-pop-cerato-forte-yd-exterior-02-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-02-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-02-m.jpg', '0', '0', '0', '1', '0', '0', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('6', '1', 'EXT', 'Faros HID', 'Al emitir un tono azul distintivo, los faros de proyección iluminan más la carretera con un rayo penetrante y preciso.', null, null, '1_kia-pop-cerato-forte-yd-exterior-03-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-03-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-03-m.jpg', '0', '0', '0', '1', '0', '0', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('7', '1', 'EXT', 'Sistema de iluminación de bienvenida inteligente', 'Una serie de luces exteriores se sincronizan con la tecla inteligente para iluminarlo y darle la bienvenida al automóvil.', null, null, '1_kia-pop-cerato-forte-yd-exterior-04-w.jpg', '1_kia-pop-cerato-forte-yd-exterior-04-t.jpg', '1_kia-pop-cerato-forte-yd-exterior-04-m.jpg', '0', '0', '0', '1', '0', '0', '4', '1');
INSERT INTO `modelo_imagenes` VALUES ('8', '1', 'INT', 'Entorno confortable 365 días al año', 'Un avanzado sistema de control del clima significa que usted y sus pasajeros pueden relajarse en cada viaje, durante todo el año. Un volante con calefacción y calentadores de asiento proporcionan una comodidad tranquilizadora en días fríos, mientras que el aire acondicionado automático y el asiento del conductor con ventilación de aire lo mantienen fresco cuando sube la temperatura. Un sistema automático de desempañado se activa por sí mismo cuando se detecta condensación en el cristal del parabrisas, y un ionizador de racimo garantiza que el aire que fluye al interior del automóvil esté limpio y libre de olores.', null, null, '1_kia-cerato-forte-yd-interior-01-w.jpg', '1_kia-cerato-forte-yd-interior-01-t.jpg', '1_kia-cerato-forte-yd-interior-01-m.jpg', '0', '0', '0', '0', '1', '0', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('9', '1', 'INT', 'clúster de supervisión', 'La interfaz intuitiva del clúster de supervisión le permite acceder a una amplia gama de configuraciones de usuario.', null, null, '1_kia-pop-cerato-forte-yd-interior-01-w.jpg', '1_kia-pop-cerato-forte-yd-interior-01-t.jpg', '1_kia-pop-cerato-forte-yd-interior-01-m.jpg', '0', '0', '0', '0', '0', '1', '1', '1');
INSERT INTO `modelo_imagenes` VALUES ('10', '1', 'INT', 'Volante con calefacción', 'El volante térmico forrado en piel es práctico y cómodo en los fríos días de invierno.', null, null, '1_kia-pop-cerato-forte-yd-interior-02-w.jpg', '1_kia-pop-cerato-forte-yd-interior-02-t.jpg', '1_kia-pop-cerato-forte-yd-interior-02-m.jpg', '0', '0', '0', '0', '0', '1', '2', '1');
INSERT INTO `modelo_imagenes` VALUES ('11', '1', 'INT', 'Asiento delantero ventilado', 'El aire que sopla a través del cojín del asiento y la espalda le ahorra la incomodidad de calentarse y pegarse durante el verano.', null, null, '1_kia-pop-cerato-forte-yd-interior-03-w.jpg', '1_kia-pop-cerato-forte-yd-interior-03-t.jpg', '1_kia-pop-cerato-forte-yd-interior-03-m.jpg', '0', '0', '0', '0', '0', '1', '3', '1');
INSERT INTO `modelo_imagenes` VALUES ('12', '1', 'EXT', null, null, '1_kia-cerato-forte-yd-gallery-01.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('13', '1', 'INT', null, null, '1_kia-cerato-forte-yd-gallery-02.jpg', null, null, null, null, '1', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('14', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-05.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-05-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-05-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('15', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-06.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-06-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-06-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('16', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-07.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-07-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-07-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('17', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-08.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-08-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-08-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('18', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-09.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-09-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-09-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-09-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('19', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-10.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-10-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-10-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-10-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('20', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-11.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-11-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-11-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-11-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('21', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-12.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-12-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-12-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-12-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('22', '1', 'EXT', null, null, null, '1_kia-cerato-forte-yd-wide-exterior-13.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-13-w.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-13-t.jpg', '1_kia-cerato-forte-yd-wide-b-exterior-13-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('23', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-01.jpg', '1_kia-cerato-forte-yd-wide-b-interior-01-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-01-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-01-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('24', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-02.jpg', '1_kia-cerato-forte-yd-wide-b-interior-02-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-02-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-02-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('25', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-03.jpg', '1_kia-cerato-forte-yd-wide-b-interior-03-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-03-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-03-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('26', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-04.jpg', '1_kia-cerato-forte-yd-wide-b-interior-04-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-04-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-04-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('27', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-05.jpg', '1_kia-cerato-forte-yd-wide-b-interior-05-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-05-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-05-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('28', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-06.jpg', '1_kia-cerato-forte-yd-wide-b-interior-06-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-06-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-06-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('29', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-07.jpg', '1_kia-cerato-forte-yd-wide-b-interior-07-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-07-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-07-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('30', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-08.jpg', '1_kia-cerato-forte-yd-wide-b-interior-08-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-08-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-08-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('31', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-09.jpg', '1_kia-cerato-forte-yd-wide-b-interior-09-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-09-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-09-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('32', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-10.jpg', '1_kia-cerato-forte-yd-wide-b-interior-10-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-10-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-10-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('33', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-11.jpg', '1_kia-cerato-forte-yd-wide-b-interior-11-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-11-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-11-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');
INSERT INTO `modelo_imagenes` VALUES ('34', '1', 'INT', null, null, null, '1_kia-cerato-forte-yd-wide-interior-12.jpg', '1_kia-cerato-forte-yd-wide-b-interior-12-w.jpg', '1_kia-cerato-forte-yd-wide-b-interior-12-t.jpg', '1_kia-cerato-forte-yd-wide-b-interior-12-m.jpg', '0', '1', '0', '0', '0', '0', null, '1');

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
  `id_version` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `tipo` varchar(80) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_llantas
-- ----------------------------
INSERT INTO `modelo_llantas` VALUES ('1', '1', '205/55 R16', 'Llanta de Acero', '1_kia-cerato-forte-yd-wheel-slide-01.png', '1');
INSERT INTO `modelo_llantas` VALUES ('2', '2', '205/55 R16', 'Llanta de Acero', '1_kia-cerato-forte-yd-wheel-slide-01.png', '1');
INSERT INTO `modelo_llantas` VALUES ('3', '3', '205/55 R16', 'Llanta de Acero', '1_kia-cerato-forte-yd-wheel-slide-02.png', '1');

-- ----------------------------
-- Table structure for modelo_motor
-- ----------------------------
DROP TABLE IF EXISTS `modelo_motor`;
CREATE TABLE `modelo_motor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_version` int(11) unsigned DEFAULT NULL,
  `id_combustible` int(11) unsigned DEFAULT NULL,
  `tipo_motor` varchar(80) DEFAULT NULL,
  `cilindraje` varchar(80) DEFAULT NULL,
  `potencia_max` varchar(80) DEFAULT NULL,
  `torque_max` varchar(80) DEFAULT NULL,
  `cilindros` varchar(80) DEFAULT NULL,
  `valvula` varchar(80) DEFAULT NULL,
  `img` varchar(120) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_motor
-- ----------------------------
INSERT INTO `modelo_motor` VALUES ('1', '1', '3', 'DOHC 16 Valvulas / InyecciOn multipunto', '1.600 c.c', '130/6300', '16.0/4850', '4 en lJnea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('2', '2', '3', 'DOHC 16 Valvulas / InyecciOn multipunto', '1.600 c.c', '130/6300', '16.0/4850', '4 en lJnea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');
INSERT INTO `modelo_motor` VALUES ('3', '3', '3', 'DOHC 16 Valvulas / InyecciOn multipunto', '1.600 c.c', '130/6300', '16.0/4850', '4 en lJnea', null, '1_kia-cerato-forte-yd-engine-slide-01.png', '1');

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
-- Table structure for modelo_version
-- ----------------------------
DROP TABLE IF EXISTS `modelo_version`;
CREATE TABLE `modelo_version` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` decimal(20,3) DEFAULT NULL,
  `bono` int(11) DEFAULT '0',
  `ano` int(4) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_version
-- ----------------------------
INSERT INTO `modelo_version` VALUES ('1', '1', 'Ex Mec.', '17990.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('2', '1', 'Ex. Aut.', '20000.000', '0', '2018', '1');
INSERT INTO `modelo_version` VALUES ('3', '1', 'SX Aut.', '22400.000', '0', '2018', '1');

-- ----------------------------
-- Table structure for modelo_version_cuotas
-- ----------------------------
DROP TABLE IF EXISTS `modelo_version_cuotas`;
CREATE TABLE `modelo_version_cuotas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_version` int(11) unsigned DEFAULT NULL,
  `id_moneda` int(11) unsigned DEFAULT NULL,
  `cuota` decimal(22,3) DEFAULT NULL,
  `entrega_inicial` decimal(22,3) DEFAULT NULL,
  `cantidad_cuotas` int(3) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of modelo_version_cuotas
-- ----------------------------
INSERT INTO `modelo_version_cuotas` VALUES ('1', '1', '2', '338.000', '2250.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('2', '2', '2', '383.000', '2550.000', '60');
INSERT INTO `modelo_version_cuotas` VALUES ('3', '3', '2', '428.000', '2850.000', '60');

-- ----------------------------
-- Table structure for moneda
-- ----------------------------
DROP TABLE IF EXISTS `moneda`;
CREATE TABLE `moneda` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) DEFAULT NULL,
  `simbologia` varchar(3) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of moneda
-- ----------------------------
INSERT INTO `moneda` VALUES ('1', 'Guaraní', 'Gs.', '1');
INSERT INTO `moneda` VALUES ('2', 'Dolar', 'U$D', '1');

-- ----------------------------
-- Table structure for noticia
-- ----------------------------
DROP TABLE IF EXISTS `noticia`;
CREATE TABLE `noticia` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(60) DEFAULT NULL,
  `img_thumb` varchar(60) DEFAULT NULL,
  `titulo` varchar(140) DEFAULT NULL,
  `contenido` longtext,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of noticia
-- ----------------------------
INSERT INTO `noticia` VALUES ('1', 'noticia1.jpg', 'noticia1-thumb.jpg', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium, lectus in vestibulum dapibus, magna dui venenatis tortor, in porttitor justo arcu ut odio. Cras eget tortor at ligula congue porttitor sed nec enim. Mauris eu scelerisque turpis, sed finibus nulla. In quis scelerisque risus, id lacinia erat. Sed quis auctor magna. Donec leo nisi, dictum id consectetur sed, fermentum ac mauris. Etiam et turpis pretium, euismod arcu ac, volutpat urna. Vestibulum sit amet ante at nisi auctor fermentum id ut mi.</p>\r\n<p>In viverra rutrum vestibulum. Aenean dignissim vestibulum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis elit ipsum. Fusce a orci quis lacus elementum finibus eget sit amet felis. Phasellus a nunc ligula. Cras sed orci a dui volutpat gravida sit amet nec justo. Nunc quis eleifend magna. Pellentesque velit ipsum, eleifend condimentum egestas quis, tincidunt ut nisi. Nunc dictum interdum lorem eget tincidunt. Aenean tempus purus sit amet odio condimentum, vitae bibendum augue pulvinar. Ut in nunc tincidunt, fermentum enim auctor, pretium tortor. Pellentesque et pharetra magna, eget consequat sapien.</p>\r\n<p>Etiam consequat dui arcu, ut hendrerit eros faucibus et. Suspendisse vestibulum ac purus vel iaculis. Phasellus at luctus dui. Quisque neque orci, rhoncus vel turpis ullamcorper, dapibus tempus lacus. Aenean malesuada enim et eros consequat, ac rhoncus tortor feugiat. Suspendisse nec egestas velit. Fusce venenatis at odio quis porta. Nulla eget ante ornare, facilisis orci in, cursus mauris. Vestibulum pulvinar sollicitudin elit nec dictum. Nunc pulvinar augue eu turpis sodales posuere. Curabitur pellentesque neque vitae sapien vehicula, eget sagittis lectus malesuada. Etiam blandit pulvinar ante in varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sapien mi, eleifend vitae lacus eu, tristique eleifend leo.</p>\r\n<p>Aliquam faucibus nisi et mi feugiat, sit amet vestibulum massa ultricies. Quisque sed purus eleifend, aliquam eros congue, dictum arcu. Morbi malesuada nibh dolor, id pharetra neque mattis quis. Nullam pharetra urna id dui laoreet, sit amet scelerisque dolor lobortis. Fusce maximus mauris at porta interdum. Aliquam nec odio nulla. Vestibulum aliquam nisi mauris, nec dictum enim sagittis ut. Pellentesque suscipit feugiat diam sit amet dictum. Suspendisse rhoncus accumsan urna at sagittis. Mauris mollis ex ultricies, vulputate tortor eget, dictum leo. Nunc nec interdum lectus. Ut sed molestie turpis. Cras et eros et massa ullamcorper elementum at non mauris.</p>\r\n<p>Maecenas eu efficitur ipsum. Morbi sit amet mattis lacus. Nulla ultrices justo non magna pulvinar consequat. Vestibulum consequat augue at augue commodo, ut hendrerit nisl varius. Quisque ac purus sit amet diam elementum lobortis. Integer lacinia, leo eu placerat malesuada, lacus augue cursus sapien, non maximus urna lorem sit amet nunc. Fusce porta aliquam metus, eu accumsan neque pellentesque et. Etiam ut leo molestie, placerat odio sit amet, vehicula ipsum. Quisque vitae nisi vestibulum, semper diam a, tristique orci. Sed rutrum felis vitae urna suscipit, a blandit est maximus. Integer imperdiet sodales lacinia. Aliquam posuere justo tellus, a condimentum nisl auctor at. Morbi fermentum nunc tempus nulla ultricies, et feugiat velit finibus. Ut neque turpis, suscipit ac odio nec, semper tempor diam. Nunc auctor erat urna, sit amet luctus lectus dictum sed. Curabitur ultricies in ipsum at cursus.</p>', '2017-11-03 12:00:09', '1');
INSERT INTO `noticia` VALUES ('2', 'noticia2.jpg', 'noticia2-thumb.jpg', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium, lectus in vestibulum dapibus, magna dui venenatis tortor, in porttitor justo arcu ut odio. Cras eget tortor at ligula congue porttitor sed nec enim. Mauris eu scelerisque turpis, sed finibus nulla. In quis scelerisque risus, id lacinia erat. Sed quis auctor magna. Donec leo nisi, dictum id consectetur sed, fermentum ac mauris. Etiam et turpis pretium, euismod arcu ac, volutpat urna. Vestibulum sit amet ante at nisi auctor fermentum id ut mi.</p>\r\n<p>In viverra rutrum vestibulum. Aenean dignissim vestibulum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis elit ipsum. Fusce a orci quis lacus elementum finibus eget sit amet felis. Phasellus a nunc ligula. Cras sed orci a dui volutpat gravida sit amet nec justo. Nunc quis eleifend magna. Pellentesque velit ipsum, eleifend condimentum egestas quis, tincidunt ut nisi. Nunc dictum interdum lorem eget tincidunt. Aenean tempus purus sit amet odio condimentum, vitae bibendum augue pulvinar. Ut in nunc tincidunt, fermentum enim auctor, pretium tortor. Pellentesque et pharetra magna, eget consequat sapien.</p>\r\n<p>Etiam consequat dui arcu, ut hendrerit eros faucibus et. Suspendisse vestibulum ac purus vel iaculis. Phasellus at luctus dui. Quisque neque orci, rhoncus vel turpis ullamcorper, dapibus tempus lacus. Aenean malesuada enim et eros consequat, ac rhoncus tortor feugiat. Suspendisse nec egestas velit. Fusce venenatis at odio quis porta. Nulla eget ante ornare, facilisis orci in, cursus mauris. Vestibulum pulvinar sollicitudin elit nec dictum. Nunc pulvinar augue eu turpis sodales posuere. Curabitur pellentesque neque vitae sapien vehicula, eget sagittis lectus malesuada. Etiam blandit pulvinar ante in varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sapien mi, eleifend vitae lacus eu, tristique eleifend leo.</p>\r\n<p>Aliquam faucibus nisi et mi feugiat, sit amet vestibulum massa ultricies. Quisque sed purus eleifend, aliquam eros congue, dictum arcu. Morbi malesuada nibh dolor, id pharetra neque mattis quis. Nullam pharetra urna id dui laoreet, sit amet scelerisque dolor lobortis. Fusce maximus mauris at porta interdum. Aliquam nec odio nulla. Vestibulum aliquam nisi mauris, nec dictum enim sagittis ut. Pellentesque suscipit feugiat diam sit amet dictum. Suspendisse rhoncus accumsan urna at sagittis. Mauris mollis ex ultricies, vulputate tortor eget, dictum leo. Nunc nec interdum lectus. Ut sed molestie turpis. Cras et eros et massa ullamcorper elementum at non mauris.</p>\r\n<p>Maecenas eu efficitur ipsum. Morbi sit amet mattis lacus. Nulla ultrices justo non magna pulvinar consequat. Vestibulum consequat augue at augue commodo, ut hendrerit nisl varius. Quisque ac purus sit amet diam elementum lobortis. Integer lacinia, leo eu placerat malesuada, lacus augue cursus sapien, non maximus urna lorem sit amet nunc. Fusce porta aliquam metus, eu accumsan neque pellentesque et. Etiam ut leo molestie, placerat odio sit amet, vehicula ipsum. Quisque vitae nisi vestibulum, semper diam a, tristique orci. Sed rutrum felis vitae urna suscipit, a blandit est maximus. Integer imperdiet sodales lacinia. Aliquam posuere justo tellus, a condimentum nisl auctor at. Morbi fermentum nunc tempus nulla ultricies, et feugiat velit finibus. Ut neque turpis, suscipit ac odio nec, semper tempor diam. Nunc auctor erat urna, sit amet luctus lectus dictum sed. Curabitur ultricies in ipsum at cursus.</p>', '2017-11-04 10:58:54', '1');
INSERT INTO `noticia` VALUES ('3', 'noticia3.jpg', 'noticia3-thumb.jpg', 'Lorem ipsum dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pretium, lectus in vestibulum dapibus, magna dui venenatis tortor, in porttitor justo arcu ut odio. Cras eget tortor at ligula congue porttitor sed nec enim. Mauris eu scelerisque turpis, sed finibus nulla. In quis scelerisque risus, id lacinia erat. Sed quis auctor magna. Donec leo nisi, dictum id consectetur sed, fermentum ac mauris. Etiam et turpis pretium, euismod arcu ac, volutpat urna. Vestibulum sit amet ante at nisi auctor fermentum id ut mi.</p>\r\n<p>In viverra rutrum vestibulum. Aenean dignissim vestibulum bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Phasellus quis elit ipsum. Fusce a orci quis lacus elementum finibus eget sit amet felis. Phasellus a nunc ligula. Cras sed orci a dui volutpat gravida sit amet nec justo. Nunc quis eleifend magna. Pellentesque velit ipsum, eleifend condimentum egestas quis, tincidunt ut nisi. Nunc dictum interdum lorem eget tincidunt. Aenean tempus purus sit amet odio condimentum, vitae bibendum augue pulvinar. Ut in nunc tincidunt, fermentum enim auctor, pretium tortor. Pellentesque et pharetra magna, eget consequat sapien.</p>\r\n<p>Etiam consequat dui arcu, ut hendrerit eros faucibus et. Suspendisse vestibulum ac purus vel iaculis. Phasellus at luctus dui. Quisque neque orci, rhoncus vel turpis ullamcorper, dapibus tempus lacus. Aenean malesuada enim et eros consequat, ac rhoncus tortor feugiat. Suspendisse nec egestas velit. Fusce venenatis at odio quis porta. Nulla eget ante ornare, facilisis orci in, cursus mauris. Vestibulum pulvinar sollicitudin elit nec dictum. Nunc pulvinar augue eu turpis sodales posuere. Curabitur pellentesque neque vitae sapien vehicula, eget sagittis lectus malesuada. Etiam blandit pulvinar ante in varius. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla sapien mi, eleifend vitae lacus eu, tristique eleifend leo.</p>\r\n<p>Aliquam faucibus nisi et mi feugiat, sit amet vestibulum massa ultricies. Quisque sed purus eleifend, aliquam eros congue, dictum arcu. Morbi malesuada nibh dolor, id pharetra neque mattis quis. Nullam pharetra urna id dui laoreet, sit amet scelerisque dolor lobortis. Fusce maximus mauris at porta interdum. Aliquam nec odio nulla. Vestibulum aliquam nisi mauris, nec dictum enim sagittis ut. Pellentesque suscipit feugiat diam sit amet dictum. Suspendisse rhoncus accumsan urna at sagittis. Mauris mollis ex ultricies, vulputate tortor eget, dictum leo. Nunc nec interdum lectus. Ut sed molestie turpis. Cras et eros et massa ullamcorper elementum at non mauris.</p>\r\n<p>Maecenas eu efficitur ipsum. Morbi sit amet mattis lacus. Nulla ultrices justo non magna pulvinar consequat. Vestibulum consequat augue at augue commodo, ut hendrerit nisl varius. Quisque ac purus sit amet diam elementum lobortis. Integer lacinia, leo eu placerat malesuada, lacus augue cursus sapien, non maximus urna lorem sit amet nunc. Fusce porta aliquam metus, eu accumsan neque pellentesque et. Etiam ut leo molestie, placerat odio sit amet, vehicula ipsum. Quisque vitae nisi vestibulum, semper diam a, tristique orci. Sed rutrum felis vitae urna suscipit, a blandit est maximus. Integer imperdiet sodales lacinia. Aliquam posuere justo tellus, a condimentum nisl auctor at. Morbi fermentum nunc tempus nulla ultricies, et feugiat velit finibus. Ut neque turpis, suscipit ac odio nec, semper tempor diam. Nunc auctor erat urna, sit amet luctus lectus dictum sed. Curabitur ultricies in ipsum at cursus.</p>', '2017-11-06 10:58:49', '1');

-- ----------------------------
-- Table structure for preferencia_contacto
-- ----------------------------
DROP TABLE IF EXISTS `preferencia_contacto`;
CREATE TABLE `preferencia_contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of preferencia_contacto
-- ----------------------------
INSERT INTO `preferencia_contacto` VALUES ('1', 'Correo', '1');
INSERT INTO `preferencia_contacto` VALUES ('2', 'Celular', '1');
INSERT INTO `preferencia_contacto` VALUES ('3', 'Casa', '1');

-- ----------------------------
-- Table structure for respuestos_accesorios
-- ----------------------------
DROP TABLE IF EXISTS `respuestos_accesorios`;
CREATE TABLE `respuestos_accesorios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `contenido` text,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of respuestos_accesorios
-- ----------------------------
INSERT INTO `respuestos_accesorios` VALUES ('1', 'Respaldo de la Marca', '<p>Nosotros entendemos la importancia de elegir KIA, es por eso que honramos su elección contando con la más amplia gama de repuestos originales de la marca. Nuestra política de repuestos originales le asegura contar con las piezas originales de la manera más rápida y cómoda, de manera casi inmediata.</p>\r\n<p>Contamos con la tecnología más avanzada de control de stock de repuestos, y junto con la red de servicio técnico en todo el país trabajamos para que usted sólo tenga que preocuparse de disfrutar de su KIA.</p>', '1');
INSERT INTO `respuestos_accesorios` VALUES ('2', 'Beneficios de los Repuestos Originales KIA', '<p>Garden Automotores le recomienda utilizar siempre repuestos originales, y para su mayor tranquilidad, siempre que su vehículo necesite mantenimiento o reparación visite los talleres Autorizados KIA, que cuentan con la tecnología y el personal capacitado para responder a sus exigencias. Además disfrute de los beneficios de utilizar repuestos originales que prolongan la duración de su KIA, velan por su seguridad y la de sus seres queridos, evitan daños mayores y mantienen la garantía de su vehículo.</p>', '1');
INSERT INTO `respuestos_accesorios` VALUES ('3', 'Importancia y Derechos de usar Repuestos Originales KIA', '<p>Los repuestos originales KIA están fabricados bajo las mismas normas de seguridad y calidad que las piezas originales de su vehículo. Cada vez que utiliza repuestos originales usted contribuye no solamente a la conservación del valor de su Kia sino también a conservar el medio ambiente y la seguridad durante la conducción, asegurando mayor economía del combustible y el buen desempeño de su vehículo.</p>', '1');

-- ----------------------------
-- Table structure for seccion_contacto
-- ----------------------------
DROP TABLE IF EXISTS `seccion_contacto`;
CREATE TABLE `seccion_contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) DEFAULT NULL,
  `email` text,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of seccion_contacto
-- ----------------------------
INSERT INTO `seccion_contacto` VALUES ('1', 'Ventas', 'ssomoza@garden.com.py,dabenitez@garden.com.py,jpena@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('2', 'Taller', 'adelavellova@garden.com.py,recepcionkia@garden.com.py,dhan@garden.com.py,namarilla@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('3', 'Presidencia', 'darias@garden.com.py,avazquez@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('4', 'Marketing', 'rcolman@garden.com.py', '1');
INSERT INTO `seccion_contacto` VALUES ('5', 'Recursos Humanos', 'seleccion@garden.com.py', '1');

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
  `img_banner_w` varchar(70) DEFAULT NULL,
  `img_banner_t` varchar(70) DEFAULT NULL,
  `img_banner_m` varchar(70) DEFAULT NULL,
  `img_galeria` varchar(70) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('1', '1', 'kia-gt-interbrand-b-1610-01-w.jpg', 'kia-gt-interbrand-b-1610-01-t.jpg', 'kia-gt-interbrand-b-1610-01-m.jpg', '1_cerato_galeria.jpg', '1');

-- ----------------------------
-- Table structure for solicitud_contacto
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_contacto`;
CREATE TABLE `solicitud_contacto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_seccion_contacto` int(11) DEFAULT NULL,
  `id_preferencia_contacto` int(11) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  `apellido` varchar(60) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `mensaje` text,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_contacto
-- ----------------------------
INSERT INTO `solicitud_contacto` VALUES ('1', '1', '1', 'RaÃºl', 'RamÃ­rez', 'hola@hola.com', '0976921801', '601606', 'Hola, esto es un mensaje de prueba. AcciÃ³n', '2017-11-02 10:46:39');
INSERT INTO `solicitud_contacto` VALUES ('2', '2', '1', 'Raúl', 'Ramírez', 'hola@hola.com', '0976921801', '', 'Hola, acción. Eñe', '2017-11-02 10:48:14');
INSERT INTO `solicitud_contacto` VALUES ('3', null, null, 'raul', '', 'hola@hola.com', null, '232323', '', '2017-11-02 15:49:16');

-- ----------------------------
-- Table structure for solicitud_cotizador
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_cotizador`;
CREATE TABLE `solicitud_cotizador` (
  `id` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `modelo` varchar(60) DEFAULT NULL,
  `version` varchar(60) DEFAULT NULL,
  `precio` decimal(20,3) DEFAULT NULL,
  `entrega` decimal(20,3) DEFAULT NULL,
  `cuotas` decimal(20,3) DEFAULT NULL,
  `cantidad` int(4) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `nombre` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_cotizador
-- ----------------------------

-- ----------------------------
-- Table structure for solicitud_testdrive
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_testdrive`;
CREATE TABLE `solicitud_testdrive` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_modelo` int(11) unsigned DEFAULT NULL,
  `nombre` varchar(180) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `ciudad` varchar(60) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_testdrive
-- ----------------------------
INSERT INTO `solicitud_testdrive` VALUES ('1', '1', 'Raúl Ramírez', '3749219', '601606', 'hola@hola.com', 'Asunción', 'Sarací 588', '2017-11-02 16:08:35');

-- ----------------------------
-- Table structure for solicitud_turno
-- ----------------------------
DROP TABLE IF EXISTS `solicitud_turno`;
CREATE TABLE `solicitud_turno` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_tipo_servicio` int(11) unsigned DEFAULT NULL,
  `nombre_completo` varchar(120) DEFAULT NULL,
  `ci` varchar(30) DEFAULT NULL,
  `celular` varchar(30) DEFAULT NULL,
  `telefono` varchar(30) DEFAULT NULL,
  `direccion` varchar(80) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `barrio` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL,
  `kilometraje` int(8) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of solicitud_turno
-- ----------------------------
INSERT INTO `solicitud_turno` VALUES ('1', '1', 'RaÃºl RamÃ­rez', '3749219', '0976921801', '601606', 'Saravi', 'Asuncion', 'Recoleta', 'Sorento', '50000', '2017-11-04 08:22:43');
INSERT INTO `solicitud_turno` VALUES ('2', '2', 'Raúl Ramírez', '3749219', '0976921801', '601606', 'Saravi', 'Asuncion', 'Recoleta', 'Sorento', '55555', '2017-11-04 08:25:53');

-- ----------------------------
-- Table structure for sucursal
-- ----------------------------
DROP TABLE IF EXISTS `sucursal`;
CREATE TABLE `sucursal` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sucursal` varchar(60) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `direccion` varchar(160) DEFAULT NULL,
  `horario_atencion` varchar(255) DEFAULT NULL,
  `latitud` varchar(45) DEFAULT NULL,
  `longitud` varchar(45) DEFAULT NULL,
  `casa_central` int(1) DEFAULT '0',
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sucursal
-- ----------------------------
INSERT INTO `sucursal` VALUES ('1', 'Asunción: Casa Central:', '(021) 237 – 7090', 'Rca. Argentina esq. Isaac Kostianovsky', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.306564', '-57.583621', '1', '1');
INSERT INTO `sucursal` VALUES ('2', 'Asunción: Choferes del Chaco:', '(021) 238 9300', 'Avda. Choferes del Chaco esq. Capitan Pedro Carpinelli', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.297172', '-57.592678', '0', '1');
INSERT INTO `sucursal` VALUES ('3', 'Centro de Servicios y Repuestos KIA:', '(021) 237 – 7095', 'Avda. 	Fernando de la Mora esq. De la Victoria.', 'Lunes a Viernes 07:30 a 18:00, Sábados 07:30 a 12:00', '-25.333892', '-57.590092', '0', '1');
INSERT INTO `sucursal` VALUES ('4', 'División Multimarcas', '(021) 237 – 7110', 'Avda. Fernando de la Mora esq. Ybapuru', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.332820', '-57.590859', '0', '1');
INSERT INTO `sucursal` VALUES ('5', 'Ciudad del Este:', '(021) 237 6910', ' Ruta Internacional Nro. 7, km 6,5.', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.500003', '-54.657923', '0', '1');
INSERT INTO `sucursal` VALUES ('6', 'Encarnación:', ' (021) 238 9500 | (071) 206702', 'Avda. Caballero esq. Artigas.', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-27.329225', '-55.870781', '0', '1');
INSERT INTO `sucursal` VALUES ('7', 'Caaguazu:', '(021) 338 6339', 'Ruta Internacional Nº 7, José Gaspar Rodríguez de Francia Km 182 (Barrio Industrial)', 'Lunes a Viernes 8:00 a 18:00, Sábados 8:00 a 12:00', '-25.460485', '-55.995753', '0', '1');

-- ----------------------------
-- Table structure for talleres
-- ----------------------------
DROP TABLE IF EXISTS `talleres`;
CREATE TABLE `talleres` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `taller` varchar(80) DEFAULT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `telefono` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of talleres
-- ----------------------------
INSERT INTO `talleres` VALUES ('1', 'Centro de Servicios y Repuestos KIA', 'Av. Fernando de la Mora y De la Victoria.', 'Asunción', '(021) 237 7095', 'lmiranda@garden.com.py', '1');
INSERT INTO `talleres` VALUES ('2', 'NS Servicios Multimarcas', 'Av. Felix Bogado 2045 c/ 22 Proyectadas.', 'Asunción', '(021) 333 272', 'ns_multimarcas@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('3', 'Juan K Servicios y Repuestos', 'Ruta Nro. 6 y Jazmín del Paraguay, Km 3.', 'Encarnación', '(595 71) 203 251', 'Juank@itacom.com.py', '1');
INSERT INTO `talleres` VALUES ('4', 'Taller GT', 'Capellan Molas 600', 'Encarnación', '(595 71) 200 816', 'hugotomas555@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('5', 'Garden  S.A.', 'Av. San Blas e/ O’huggins, Km. 6,2.', 'Ciudad del Este', '(595 21) 237 6910', 'fcrosa@garden.com.py', '1');
INSERT INTO `talleres` VALUES ('6', 'Cristian Paats y Cia.', 'Carlos Antonio Lopez c/ Jose II Decoud', 'Coronel Oviedo', '(595 521) 202 345', 'cristianpaatsycia@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('7', 'Leiva Automotores S.R.L', 'Ruta Internacional Nro. 7, Km. 178', 'Caaguazú', '(535 522) 43 610', 'florens90@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('8', 'Taller Mk Autoservice', 'Colonia Menno, C.C. 883', 'Loma Plata', '(595 4922) 52 726', 'mkautoservice17@gmail.com', '1');
INSERT INTO `talleres` VALUES ('9', 'Taller Motormack SRL', 'Avenida Central', 'Loma Plata', '(595 4922) 52 351', 'motormack@click.com.py', '1');
INSERT INTO `talleres` VALUES ('10', 'Norte Autos', 'Avda. Tte. Herreros esq. Benjamin Aceval', 'Pedro Juan Caballero', '595 336) 273 450', null, '1');
INSERT INTO `talleres` VALUES ('11', 'Taller Albert Neufeld', 'Calle Principal Hindenburg e/ Palo Santo', 'Filadelfia', '(595 4914) 32 521', null, '1');
INSERT INTO `talleres` VALUES ('12', 'Taller Auto Latina', 'Calle Industrial 174-E c/ O. Miller', 'Filadelfia', '(595 4914) 32 521', 'tallerautolatina@gmail.com', '1');
INSERT INTO `talleres` VALUES ('13', 'Mecanica Ruschel', 'Carlos Antonio Lopez y Juan E O’leary', 'Hohenau', '(595 775) 232 042', 'oscar-ruschel@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('14', 'Juan K Servicios y Repuestos', 'Eusebio Ayala c/ Tte. Fariña', 'Hohenau', '(595 775) 232 042', 'juank.colonias@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('15', 'Car Center', 'Ruta Internacional N° 7, km. 212', 'Campo 9', '(595 528) 222 988', 'carcentercampo9@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('16', 'Julio Mueller', 'Supercarretera a Salto del Guaira, km. 2.5', 'Hernandarias', '(595 0631) 22 710', 'mueller.julio@hotmail.com', '1');
INSERT INTO `talleres` VALUES ('17', 'Parana Diesel', 'San Roque González de Santa Cruz c/ Perpetuo Socorro', 'Colonia Katuete', '(595 0471) 234 340', null, '1');
INSERT INTO `talleres` VALUES ('18', 'Mecanica y Chaperia Do Kady', 'Fraccion Alexandrino, Ruta 6ta. Salida a 14 de Mayo', 'Santa Rita', '(595 0471) 234 340', null, '1');
INSERT INTO `talleres` VALUES ('19', 'Taller H.P. Peters', 'Avenida Industrial', 'Colonia Neuland (Chaco)', '(595 0493) 240 656', null, '1');

-- ----------------------------
-- Table structure for tipo_servicio
-- ----------------------------
DROP TABLE IF EXISTS `tipo_servicio`;
CREATE TABLE `tipo_servicio` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) DEFAULT NULL,
  `estado` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tipo_servicio
-- ----------------------------
INSERT INTO `tipo_servicio` VALUES ('1', 'Service en Casa', '1');
INSERT INTO `tipo_servicio` VALUES ('2', 'Service en Taller Kia', '1');

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
-- Table structure for turno
-- ----------------------------
DROP TABLE IF EXISTS `turno`;
CREATE TABLE `turno` (
  `id` int(11) NOT NULL,
  `img` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of turno
-- ----------------------------
INSERT INTO `turno` VALUES ('1', 'reserva_turnos.jpg');

-- ----------------------------
-- Table structure for vida_0
-- ----------------------------
DROP TABLE IF EXISTS `vida_0`;
CREATE TABLE `vida_0` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `img` varchar(80) DEFAULT NULL,
  `contenido` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vida_0
-- ----------------------------
INSERT INTO `vida_0` VALUES ('1', 'vida0-2017.jpg', null);
SET FOREIGN_KEY_CHECKS=1;
